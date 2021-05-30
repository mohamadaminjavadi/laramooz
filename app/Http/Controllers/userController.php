<?php

namespace App\Http\Controllers;

use app\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class userController extends Controller
{

    public function show_level(Request $request){
        $user = User::find($request->id);
        return response()->json([
            'success'=>true,
            'level'=>$user['level']
        ]);
    }
    public static function pointlevel(){
        $user = User::find(Auth::user()->id);
        $data['point'] =$user->point;
        $data['level']=$user->level;
        $data['vip']=$user->vip;
        return View('dashboard',compact('data'));
    }

    public static function govip(){
        $user=User::find(Auth::user()->id);
        $data['name']=$user->name;
        $data['email']=$user->email;
        return View('getvip',compact('data'));
    }
    


}
