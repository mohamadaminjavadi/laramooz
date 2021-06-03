<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./../src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان چهارم</title>
    </head>
    <body>
        <div class="row">
            <div class="col-md-10 form">
                <!--  -->
                    <form action="submitexam" method="post" dir="rtl">
                    @csrf
                    <div class="form-group" dir="rtl">
                        <!-- q1 -->
                        <div class="question-container">
                            <p class="question">
                            1- کدام یک از وظایف میدولور میباشد
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            محاسبه قیمت در وبسایت های فروشگاهی
                            </lable><br>


                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                             اعمال فیلتر بر روی درخواست های کاربر
                            </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            کامپایل کردن پروژه
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            نوشتن متن هشدار برای کاربر
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="{{route('show_answer',4.1)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            کدام روش برای استفاده از میدلور درست است؟
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            Route::middleware(['auth:sanctum', 'verified'])->get('/sth',function(){<br>
                                //<br>
                            });
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            Route::get('/', function () { // })->middleware('first', 'second');
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            Route::get('admin/profile', function () {<br>
                            //<br>
                            })->middleware('auth');
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            همه موارد
                            </lable> <br><br>

                            <input hidden type="radio" name="answer2" value="5" checked="checked">
                            <a href="{{route('show_answer',4.2)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            دستور ساخت میدلور کدام یک از موارد زیر است
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            php artisan make:middleware name
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            php artisan create:middleware name
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            composer require laravel/middleware
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            npm install middleware --save
                            </lable><br/><br>

                            <input hidden type="radio" name="answer3" value="5" checked="checked">
                            <a href="{{route('show_answer',4.3)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="4" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!-- answers: 241 -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>