<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./../src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان هشتم</title>
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
                            1- کدام دستور برای ساخت مدل درست است؟
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                             php artisan make:model name
                             </lable> <br>

                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                            php make model name
                            </lable><br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            composer reqire laravel/model name
                            </lable> <br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="{{route('show_answer',8.1)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            2- ایندکس گذاری روی کدام ستون از جدول انجام می شود؟
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            هر فیلدی که کلید اصلی باشد
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            فیلد آی دی
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            فیلد ایندکس
                            </lable> <br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="{{route('show_answer',8.2)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            3- دو ستون created at و updated at به وسیله کدام property ساخته میشوند؟
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            timezone
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            timestamps
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            clock
                            </lable><br/>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="{{route('show_answer',8.3)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="8" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!-- 212 -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>