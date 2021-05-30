<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get vip</title>

    <link rel="stylesheet" href="./src/vendor/swiper/cdnjs/swiper-bundle.min.css">
    <link rel="stylesheet" href="./src/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/styles/getvip/getvip.css">
</head>
<body>
    <nav>
        <img src="./src/assets/welcome/laravel_logo.png" alt="logo" class="logo">
        <a href="./dashboard?id=1">home</a>
    </nav>
    <section>
        <h2>PURCHASE VIP</h2>
        <div class="card" dir="rtl">
            <h3>{{$data['name']}}عزیز</h3>
            <h4>با خرید اکانت VIP میتوانید:</h4>
            <ul>
                <li>استفاده از تمام مراحل آموزش</li>
                <li>نمایش راهنمایی برای سوالات بدون نیاز استفاده از امتیاز</li>
                <li>پشتیبانی</li>
                <li>اعطای مدرک معتبر از دانشگاه استنفورد بریج</li>
            </ul>
            <p>قیمت اکانت: 10000 تومان</p>
            <div class="button"><a href="/govip/Zarinpal" class="btn btn-dark" dir="rtl">خرید اکانت VIP</a></div>
            
        </div>
    </section>
</body>
</html>