<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;
use App\Http\Requests\CommentValidation;

class commentController extends Controller
{
    public function add(CommentValidation $request,$data){
        $comment = new comments;
        $comment_id=comments::filler($request,$comment,$data);
        return $comment_id;
    }

    public function edit(CommentValidation $request){
        $comment=comments::find($request->comment_id);
        $comment_id=comments::filler($request,$comment);
        return $comment_id;
    }

    public function delete(Request $request){
        $comment=comments::find($request->comment_id);
        $user=Auth::user()->id;
        if($comment->user_id==$user){
            $comment->delete();
        }
        return true;
    }
}
