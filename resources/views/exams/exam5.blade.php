<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان پنج</title>
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
                            کدام روش برای صدا زدن تابعی در کنترلر از طریق روت درست است؟
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            Route::get('/user', 'UserController@show');
                            </lable><br>


                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                            Route::get('/user', 'UserController'.@show);
                             </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            Route::get('/user', 'UserController')[show];
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            Route::get('/user', 'UserController')->show();
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="{{route('show_answer',5.1)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            2- کنترلر سینگل اکشن چه کنترلری است
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            چنین کنترلری وجود ندارد
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            فقط یک عمل واحد را انجام میدهد
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            هیچ فرقی با کنترلر های دیگر ندارد
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            وقتی استفاده میشود که به چندین متد در یک کنترلر نیاز داشته باشیم
                            </lable> <br><br>

                            <input hidden type="radio" name="answer2" value="5" checked="checked">
                            <a href="{{route('show_answer',5.2)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            3- برای ایجاد crud در کنترلر از کدام دستور باید هنگام ساخت کنترلر استفاده کرد
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            npx install controller.resource
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            php artisan create:controller name --resource
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            composer require laravel/controller --resource
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            php artisan make:controller name --resource
                            </lable><br/><br>

                            <input hidden type="radio" name="answer3" value="5" checked="checked">
                            <a href="{{route('show_answer',5.3)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="5" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!-- answers: 124  -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>