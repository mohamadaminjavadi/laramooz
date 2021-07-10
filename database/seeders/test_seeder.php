<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class test_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=9; $i++){
            DB::table('test')->updateOrInsert([
                'name'=>'test'.$i
            ]);
        }
    }
}
