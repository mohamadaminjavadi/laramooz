<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom css -->
    <link rel="stylesheet" href="./src/styles/welcome/welcome.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="./src/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body dir="rtl">
    <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dashboard">home</a>
                    @else
                        <a href="{{ route('login') }}" class="login">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div>
    <section class="one row">
        <div class="picture col-md-6">
            <img class='laravel' src="./src/assets/welcome/laravel.png">
            <h3>Learn laravel online!</h3>
        </div>
        <div class="text col-md-6">
            <h3>
                وبسایت آموزش آنلاین لاراول<br>
                از صفر تا صد همراه شما!<br>
                <p style="font-size:16pt;background:rgba(58, 201, 118, 0.5);border-radius:5px;">تخصص جدیدت رو ازینجا یاد بگیر :)</p>
            </h3>
            <div class="buttons">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dashboard">خانه</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">ورود</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">ثبت نام</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
        <div class="text2">
            <h3>
                درباره این دوره
            </h3>
            <h5>
                با شرکت در این دوره، به صورت گام به گام تمامی مباحث لاراول به شما آموزش داده می شود.<br>
                و در هر مرحله برای اطمینان از یاد گیری مطلب، از مطالب همان مرحله آزمونی از شما گرفته می شود.
            </h5>
            <h4 style="margin-right:200px;float:right">
            پیش نیاز ها:
                <ul>
                    <li>آشنایی به زبان php</li>
                    <li>آشنایی به مفاهیم برنامه نویسی شی گرا</li>
                </ul>
            </h4>
            <h4 style="margin-right:700px">
            مزایا
                <ul>
                    <li>آموزش کامل مباحث</li>
                    <li>آزمون های مرحله ای</li>
                    <li>ارسال نمره آزمون از طریق واتساپ</li>
                </ul>
            </h4>
        </div>
    </section>
</body>
</html>