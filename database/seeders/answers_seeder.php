<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class answers_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<10;$i++){
            if($i%2==0){
                for($k=1; $k<4; $k++){
                    DB::table('answer')->updateOrInsert(
                        [
                        'test_id'=>$i,
                        'question_id'=>$k,
                        'true_answer'=>floor($j[$k/2])
                        ]
                    );
                }
            }
            else{
                for($k=1; $k<4; $k++){
                    DB::table('answer')->updateOrInsert(
                        [
                        'test_id'=>$i,
                        'question_id'=>$k,
                        'true_answer'=>floor(($k+3)/2)
                        ]
                    );
                }
            }
        }
    }
}
