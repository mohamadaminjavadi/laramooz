<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\userController;

class testModel extends Model
{
    protected $casts=[
        'true_answer'=>'array'
    ];
    use HasFactory;
    protected $table = 'test';
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(User::class, 'examxscore', 'exam_id', 'user_id');
    }

    public function answers(){
        return $this->HasMany(answer::class, 'test_id');
    }

    public static function leveluper($user,$score,$examnumber){
        $bonus = abs($score/20);
        if($user['vip']){
            if($user['level']<$examnumber){
                $user['level'] = $examnumber+1;
            }
            $user->increment('point',$bonus);
            }
        else{
            if($user['level']<5){
                if($user['level']<=$examnumber){
                    $user['level'] = $examnumber+1;
                }
                $user->increment('point',5);
                }
            else{
                userController::govip($user['id']);
            }
        }
        $user->save();
        return $user['level'];
    }

    
}
