<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// pages
Route::get('/', function () {
    return view('welcome2');
});
Route::get('/home', function () {
    return view('home');
});

$address='App\Http\Controllers\userController';
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',$address.'@pointlevel')->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/govip',$address.'@govip')->name('govip');
Route::middleware(['auth:sanctum', 'verified'])->get('/govip/payment',$address.'@govipPayment')->name('govipPayment');

// levels
$address='App\Http\Controllers\testController';
Route::middleware(['auth:sanctum', 'verified'])->get('/level/{data}',$address.'@returnLevel')->name('level');

// exams
Route::middleware(['auth:sanctum', 'verified'])->get('/exam/{data}',$address.'@returnExam')->name('exam');

// check answers
Route::middleware(['auth:sanctum', 'verified'])->post('/exam/submitexam',$address.'@checkAnswer')->name('submitexam');

// point
Route::middleware(['auth:sanctum', 'verified'])->get('show_answer/{data}',$address.'@showAnswer',with('data'))->name('show_answer');

// comments
$address='App\Http\Controllers\commentController';
Route::middleware(['auth:sanctum', 'verified'])->post('/level/{data}/addcomment',$address.'@add')->name('add_comment');
Route::middleware(['auth:sanctum', 'verified'])->post('/level/{data}/editcomment',$address.'@edit')->name('edit_comment');
Route::middleware(['auth:sanctum', 'verified'])->post('/level/{data}/deletecomment',$address.'@delete')->name('delete_comment');