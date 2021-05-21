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

Route::get('/', function () {
    return view('welcome2');
});
Route::get('/home', function () {
    return view('home');
});

$address='App\Http\Controllers\userController';
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',$address.'@pointlevel')->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/govip',$address.'@govip')->name('govip');

Route::middleware(['auth:sanctum', 'verified'])->get('/level1',function(){
    return view('levels/level1');
})->name('level1');
Route::middleware(['auth:sanctum', 'verified'])->get('/level2',function(){
    return view('levels/level2');
})->name('level2');
Route::middleware(['auth:sanctum', 'verified'])->get('/level3',function(){
    return view('levels/level3');
})->name('level3');
Route::middleware(['auth:sanctum', 'verified'])->get('/level4',function(){
    return view('levels/level4');
})->name('level4');
Route::middleware(['auth:sanctum', 'verified'])->get('/level5',function(){
    return view('levels/level5');
})->name('level5');
Route::middleware(['auth:sanctum', 'verified'])->get('/level6',function(){
    return view('levels/level6');
})->name('level6');
Route::middleware(['auth:sanctum', 'verified'])->get('/level7',function(){
    return view('levels/level7');
})->name('level7');
Route::middleware(['auth:sanctum', 'verified'])->get('/level8',function(){
    return view('levels/level8');
})->name('level8');
Route::middleware(['auth:sanctum', 'verified'])->get('/level9',function(){
    return view('levels/level9');
})->name('level9');

// exams

Route::middleware(['auth:sanctum', 'verified'])->get('/exam1',function(){
    return view('exams/exam1');
})->name('exam1');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam2',function(){
    return view('exams/exam2');
})->name('exam2');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam3',function(){
    return view('exams/exam3');
})->name('exam3');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam4',function(){
    return view('exams/exam4');
})->name('exam4');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam5',function(){
    return view('exams/exam5');
})->name('exam5');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam6',function(){
    return view('exams/exam6');
})->name('exam6');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam7',function(){
    return view('exams/exam7');
})->name('exam7');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam8',function(){
    return view('exams/exam8');
})->name('exam8');

Route::middleware(['auth:sanctum', 'verified'])->get('/exam9',function(){
    return view('exams/exam9');
})->name('exam9');

$address='App\Http\Controllers\testController';
Route::middleware(['auth:sanctum', 'verified'])->post('submitexam',$address.'@checkAnswer')->name('submitexam');