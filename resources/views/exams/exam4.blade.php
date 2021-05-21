<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./src/vendor/bootstrap/css/bootstrap.min.css">
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
                            1-کدام نامزد ریاست جمهوری فساد بیشتری کرده و برنده است؟
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            ابراهیم رییسی
                            </lable><br>


                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                             لاریجانی
                             </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            احمدی نژاد
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            من
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="#"><button class="btn btn-dark">راهنمایی</button></a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            2- ملا نصرالدین در زمان خودش نسبت به جمعیت و رسانه مشهور تر بود یا ساسی مانکن؟
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            ملانصر الدین
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            محمدی
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            ساسی مانکن
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            مرتضی پاشایی
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="#"><button class="btn btn-dark">راهنمایی</button></a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                                3-بیشترین فالوور اینستاگرام متعلق به کدام تیک تاکر اعظم است؟
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            عزیز محمدی
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            رونالدو
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            رونالدو اورجینال
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            عباس بوعذار
                            </lable><br/><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="#"><button class="btn btn-dark">راهنمایی</button></a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="4" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!--  -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>