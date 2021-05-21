<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان ششم</title>
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
                            1-متن ساختگی برای پر کردن فضای سوال برای امتحان وبسایت
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            گزینه یک
                            </lable><br>


                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                             گزینه دو
                             </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            گزینه سه
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            گزینه چهار
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="#"><button class="btn btn-dark">راهنمایی</button></a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            2-متن ساختگی برای پر کردن فضای سوال برای امتحان وبسایت
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            گزینه یک
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            گزینه دو
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            گزینه سه
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            گزینه چهار
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="#"><button class="btn btn-dark">راهنمایی</button></a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            3-متن ساختگی برای پر کردن فضای سوال برای امتحان وبسایت
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            گزینه یک
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            گزینه دو
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            گزینه سه
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            گزینه چهار
                            </lable><br/><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="#"><button class="btn btn-dark">راهنمایی</button></a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="6" checked="checked">
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