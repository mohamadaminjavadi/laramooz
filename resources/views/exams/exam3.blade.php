<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./../src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان سوم</title>
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
                            1- روت، چه وظیفه ای به عهده دارد
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            معنی دار کردن یو آر ال
                            </lable><br>


                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                             انجام عمل روی داده های کاربر
                            </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            افزایش سرعت برنامه
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            تولید داده برای دیتابیس
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="{{route('show_answer',3.1)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            برای نام گذاری روت ها از کدام تابع استفاده میکنیم؟
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            name()
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            pointer()
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            point()
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            return()
                            </lable> <br><br>

                            <input hidden type="radio" name="answer2" value="5" checked="checked">
                            <a href="{{route('show_answer',3.2)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            برای تعیین پیشوند در روت ها از کدام تابع استفاده میکنیم؟
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            prefix()
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            post()
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            get()
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            namespace()
                            </lable><br/><br>

                            <input hidden type="radio" name="answer3" value="5" checked="checked">
                            <a href="{{route('show_answer',3.3)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="3" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!-- answers: 111 -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>