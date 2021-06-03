<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testModel;
use App\Models\User;
use Auth;

class testController extends Controller
{
    public function checkAnswer(Request $request){
        $user_id= Auth::user()->id;
        // $request->input('sth'); this is how you get what user posted

        // getting the key of answers from db
        $question = testModel::find($request->input('examnumber'));
        $key_answers=$question['anum'];

        // count of key of answers (for farther operations)
        $key_answers_temp = $key_answers;
        $countOfKey=0;
        while ($key_answers_temp>=1){
            $key_answers_temp=abs($key_answers_temp/10);
            $countOfKey+=1;
        }
        
        // generating user answers array
        for ($i=0;$i<count($request->input())-2;$i++){
            $k=$i+1;
            $user_answers[$i]=$request->input("answer".$k);
        }
        
        // counting score
        $true_answers=0;
        $wrong_answers=0;
        for ($j=0; $j<=count($user_answers)-1;$j++){
            if ($user_answers[$j]==$key_answers[$j]){
                $true_answers+=1;
            }
            else{
                $wrong_answers+=1;
            }
        }
        $score = round(($true_answers / $countOfKey) * 100 , 2);
        $examnumber = $request->input('examnumber');

        // pass or fail the exam
        if($score>=50){
            $this->levelup($user_id,$score,$examnumber);
            $this->addscore($user_id,$score,$examnumber);
            $data["success"]=true;
            $data["score"]=$score;
            return view('exams/score',compact('data'));
        }
        else{
            $this->addscore($user_id,$score,$examnumber);
            $data["success"]=false;
            $data["score"]=$score;
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
    }

    public function showAnswer(Request $request,$data){
        $user=User::find(Auth::user()->id);
        $point=$user->point;
        if($point>5){
            $numbers=explode('.',number_format($data,1));
            $examNumber=(int)$numbers[0];
            $questionNumber=(int)$numbers[1];
            $exam=testModel::find($examNumber);
            $answer=$exam->anum[$questionNumber-1];

            $user->point=$point-5;
            $user->save();
            
            return view('show_answer',compact('answer'));
        }
        else{
            return view('show_answer');
        }
        

    }

    public function returnLevel(Request $request, $data){
        return view('levels/level'.$data);
    }
    public function returnExam(Request $request,$data){
        return view('exams/exam'.$data);
    }




}
