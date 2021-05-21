<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamxscoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('examxscore')){
            Schema::create('examxscore', function (Blueprint $table) {
                $table->id();

                $table->unsignedBigInteger('user_id')->index();
                $table->foreign('user_id')->references('id')->on('users');

                $table->unsignedBigInteger('exam_id')->index();
                $table->foreign('exam_id')->references('id')->on('test');

                $table->integer('score');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examxscore');
    }
}
