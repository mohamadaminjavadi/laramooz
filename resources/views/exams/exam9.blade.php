<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/styles/exams/exam2.css">
        <link rel="stylesheet" href="./../src/vendor/bootstrap/css/bootstrap.min.css">
        <title>امتحان نهم</title>
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
                            1- چرا از میگریشن استفاده میکنیم؟
                            </p>

                            <input type="radio" name="answer1" value="1">
                            <lable for="answer1">
                            بالا بردن سرعت کد زنی
                            </lable><br>

                            <input type="radio" name="answer1" value="2">
                            <lable for="answer1">
                             ساخت خودکار جداول دیتابیس
                             </lable> <br>

                            <input type="radio" name="answer1" value="3">
                            <lable for="answer1">
                            کاربری راحت تر
                            </lable> <br>

                            <input type="radio" name="answer1" value="4">
                            <lable for="answer1">
                            همه موارد
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">

                            <a href="{{route('show_answer',9.1)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q2 -->
                        <div class="question-container">
                            <p class="question">
                            2- اگر بخواهیم یک فیلد، مقدار تکراری نداشته باشد، در میگریشن از چه دستوری استفاده میکنیم؟
                            </p>

                            <input type="radio" name="answer2" value="1">
                            <lable for="answer2"> 
                            unique()
                            </lable> <br>

                            <input type="radio" name="answer2" value="2">
                            <lable for="answer2">
                            no-repeat()
                            </lable> <br>

                            <input type="radio" name="answer2" value="3">
                            <lable for="answer2">
                            only()
                            </lable> <br>

                            <input type="radio" name="answer2" value="4">
                            <lable for="answer2">
                            هیچ کدام
                            </lable> <br><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="{{route('show_answer',9.2)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q3 -->
                        <div class="question-container">
                            <p class="question">
                            3- برای پاک کردن و از اول ساختن جداول دیتابیس، از کدام دستور استفاده میکنیم؟
                            </p>
                            <input type="radio" name="answer3" value="1">
                            <lable for="answer3">
                            php artisan migrate:rollback
                            </lable><br/>

                            <input type="radio" name="answer3" value="2">
                            <lable for="answer3">
                            php artisan migrate:refresh
                            </lable><br/>

                            <input type="radio" name="answer3" value="3">
                            <lable for="answer3">
                            php artisan migrate
                            </lable><br/>

                            <input type="radio" name="answer3" value="4">
                            <lable for="answer3">
                            php artisan cache:clear
                            </lable><br/><br>

                            <input hidden type="radio" name="answer1" value="5" checked="checked">
                            <a href="{{route('show_answer',9.3)}}" target="_blank" class="btn btn-dark">راهنمایی</a>
                        </div>
                        <!-- q4 -->

                    </div>
                    <input hidden type="radio" name="examnumber" value="9" checked="checked">
                        <div class="submit" dir="ltr"><button type="submit" class="btn btn-primary">پایان امتحان</button></div>
                    </form>
                <!-- 412 -->
            </div>
            <div class="col-md-2 leftside">
            <div class="point"><p>امتیاز:</p><div class="circle">{{Auth::user()->point}}</div></div>
            <div class="timer"></div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>