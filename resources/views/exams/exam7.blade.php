<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./../src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان هفتم</title>
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
                            کدام روش برای ارسال داده به فایل بلید درست است؟
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            $name='Victoria';<br>
                            return view('greeting')->with('name');
                            </lable><br>


                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                            $name='Victoria';<br>
                            return view('greeting')->compact('name');
                             </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            return view('greeting')with->('name:Victoria');
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            اولی و دومی
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="{{route('show_answer',7.1)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            کدام دستور، همه ویو ها را یکباره کامپایل میکند تا زمان پروژه وقت کمتری گرفته شود؟
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            php artisan compile:view
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            php artisan view:cache
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            php artisan view:clean
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            php artisan view:compile
                            </lable> <br><br>

                            <input hidden type="radio" name="answer2" value="5" checked="checked">
                            <a href="{{route('show_answer',7.2)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            بخش ویو شامل کدام بخش از کلیت معماری ام وی سی است؟
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            فرانت اند
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            بک اند
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            ای پی آی
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            دیتابیس
                            </lable><br/><br>

                            <input hidden type="radio" name="answer3" value="5" checked="checked">
                            <a href="{{route('show_answer',7.3)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="7" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!-- 421 -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>