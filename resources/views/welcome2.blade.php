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
            <h3>Learn laravel on line!</h3>
        </div>
        <div class="text col-md-6">
            <h3>
                وبسایت آموزش آنلاین لاراول<br>
                از صفر تا صد همراه شما!
            </h3>
            <div class="buttons">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="dashboard">home</a>
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
                در این دوره گام به گام تمامی مباحث لاراول به شما آموزش داده می شود
                در هر گام برای اطمینان از تسلط بر مطلب، آزمونی دقیق از شما گرفته خواهد شد
            </h5>
        </div>
    </section>
</body>
</html>