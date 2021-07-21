<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testModel;
use App\Models\answer;
use App\Models\User;
use App\Models\comments;
use App\Http\Controllers\userController;
use Auth;
use App\Events\newMsg;

class testController extends Controller
{
    public function checkAnswer(Request $request){
        $user_id= Auth::user()->id;
        // $request->input('sth'); this is how you get what user posted

        // getting the key of answers from db
        $key_answers = answer::where('test_id',$request->input('examnumber'))->select('true_answer')->get();

        // generating user answers array
        for ($i=0;$i<count($request->input())-2;$i++){
            $k=$i+1;
            $user_answers[$i]=$request->input("answer".$k);
        }
        
        // counting score
        $true_answers=0;
        $wrong_answers=0;

        for ($j=0; $j<=count($user_answers)-1;$j++){
            if ($user_answers[$j]==$key_answers[$j]->true_answer){
                $true_answers+=1;
                $transcript[$j]="صحیح";
            }
            else{
                $wrong_answers+=1;
                $transcript[$j]="غلط";
            }
        }
        $score = round(($true_answers / count($key_answers)) * 100 , 2);
        $examnumber = $request->input('examnumber');

        // pass or fail the exam
        if($score>=50){
            $this->levelup($user_id,$score,$examnumber);
            $this->addscore($user_id,$score,$examnumber);
            $data["success"]=true;
            $data["score"]=$score;
            $data["transcript"]=$transcript;
            return view('exams/score',compact('data'));
        }
        else{
            $this->addscore($user_id,$score,$examnumber);
            $data["success"]=false;
            $data["score"]=$score;
            $data["transcript"]=$transcript;
            return view('exams/score',compact('data'));
        }
    }
    
    public function levelup($user_id,$score,$examnumber){
        $user=User::find($user_id);
        $level = testModel::leveluper($user,$score,$examnumber);
        return response()->json([
            'success'=>true,
            'level'=>$level
        ]);
    }

    public function addscore($user_id,$score,$examnumber){
        $user = User::find($user_id);
        $exam = testModel::find($examnumber);
        $record = $user->tests()->where('exam_id',$examnumber)->select("exam_id","user_id","score")->get();
        if($record->isEmpty()){
            $user->tests()->attach($exam,['score'=>$score]);
        }
        else{
            if($record[0]['score']<$score){
                $user->tests()->detach($exam,['score']);
                $user->tests()->attach($exam,['score'=>$score]);
                
            }
        }
        $data['phone']=Auth::user()->phone;
        $data['score']=$score;
        $data['name']=Auth::user()->name;
        event(new newMsg($data));
    }

    public function showAnswer(Request $request,$data){
        $user=User::find(Auth::user()->id);
        $point=$user->point;
        if($point>5){
            $numbers=explode('.',number_format($data,1));
            $examNumber=(int)$numbers[0];
            $questionNumber=(int)$numbers[1];
            
            $answerlist=answer::where('test_id',$examNumber)->where('question_id',$questionNumber)->pluck('true_answer');
            $answer=$answerlist[0];
            $user->point=$point-5;
            $user->save();
            
            return view('show_answer',compact('answer'));
        }
        else{
            return view('show_answer');
        }
        

    }

    public function returnLevel(Request $request, $data){
        $user=User::find(Auth::user()->id);
        $comments=comments::where('post_id',$data)->get();
        if($user->level >= $data ){
            return view('levels/level'.$data);
        }
        else{
            return redirect()->route('dashboard');
        }
    }
    public function returnExam(Request $request,$data){
        $user=User::find(Auth::user()->id);
        if($user->level >= $data ){
            return view('exams/exam'.$data);
        }
        else{
            return redirect()->route('dashboard');
        }
    }




}
