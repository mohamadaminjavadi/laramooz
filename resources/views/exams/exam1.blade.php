<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان اول</title>
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
                            1- کد php artisan serve چه کاری می کند؟
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            کامپایل کردن پروژه
                            </lable><br>


                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                             به کار گرفتن پروژه
                             </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            راه اندازی سرور مجازی
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            نصب پروژه روی کامپیوتر
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            
                            <a href="{{route('show_answer',1.1)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            2- کدام گزینه در مورد آرتیسان درست است؟
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            مجموعه ای از دستورات استفاده از لاراول را در دل خود جای داده است
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            تابعی برای متوقف کردن روند برنامه است
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            یک نوع سرور مجازی است
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            هیچ کدام
                            </lable> <br><br>

                            <input hidden type="radio" name="answer2" value="5" checked="checked">
                            <a href="{{route('show_answer',1.2)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            3- هنگام سرو کردن پروژه روی سرور لوکال، آدرس آی پی برای دسترسی به پروژه کدام است؟
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            127.0.0.1
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            192.168.1.1
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            217.150.160.1
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            152.170.30.90
                            </lable><br/><br>

                            <input hidden type="radio" name="answer3" value="5" checked="checked">
                            <a href="{{route('show_answer',1.3)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="1" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!-- answers=211 -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>