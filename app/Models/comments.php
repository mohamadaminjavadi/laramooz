<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public static function filler($request,$comment,$data){
        $comment->user_id=Auth::user()->id;
        $comment->post_id=$data;
        $comment->text=$request->text;
        $comment->save();
        return $comment->id;
    }
}
