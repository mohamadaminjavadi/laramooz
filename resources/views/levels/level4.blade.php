<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/levels/global.css">
    <title>level 4</title>
</head>
<body>
    <div class="contain">
        <div class="article-title">MiddleWare</div>
        <div class="note-container">credit: herod.ir</div>
        <div class="paragraph-container">
            <div class="paragraph-title"></div>
            <div class="paragraph"></div>
        </div>
        <div class="note-container"></div>
        <!-- ss -->
        <div class="paragraph-container">
            <div class="paragraph-title">میدلور چیست</div>
            <div class="paragraph">
            یکی از کار های مهمی که در طول پروژه باید بکنیم، اعمال فیلتر و نظارت بر درخواست های http است. در لاراول این کار در middleware ها انجام می شود. استفاده از middleware موجب افزایش امنیت سایت شما خواهد شد. برای مثال عمل اهراز حویت کاربر که آیا در سایت لاگین کرده یا نه، از وظایف این بخش است.
            </div>
        </div>

        <!-- s -->
        <div class="paragraph-container">
            <div class="paragraph-title">میدلور چگونه ساخته می شود</div>
            <div class="paragraph">
            برای ساخت میدلور از کد زیر استفاده میکنیم<br>
            <div class="code">
                php artisan make:middleware check_age
            </div>
            حالا check_age یا هر اسمی که شما طبق کاربرد آن تابع یا سلیقه شخصی تان به آن دهید. میدلور ها در مسیر app/http/middleware قرار میگیرند.
            <div class="code">
            public function handle(Request $request, Closure $next)<br>
            {<br>
                if($request->age <=20) {<br>
                    return redirect(‘home’);<br>
                }<br>
                return $next($request);<br>
            }<br>
            </div>
            در این میدلور چک می شود که اگر سن کاربر بالاتر از بیست سال بود صفحه هوم را نشانش بده.<br>
            متد handle مهمترین متد یک middleware است و پیاده سازی یک میدلور در این فانکشن انجام می شود. یک پروژه لاراول در ابتدا شامل 8 میدلور از پیش ساخته شده است که هر یک وظیفه اعمال بررسی خاصی رو روی درخواست ها بر عهده دارند.
            <div class="code">
            Authenticate.php - CheckForMaintenanceMode.php - EncryptCookies.php - RedirectIfAuthenticated.php - TrimStrings.php - TrustHosts.php - TrustProxies.php - VerifyCsrfToken.php
            </div>
            به  عنوان مثال میدلور VerifyCsrfToken درستی وجود و صحت فیلد CSRF در درخواست های POST را چک می کند.
            </div>
        </div>
        <!-- s -->
        <!-- <div class="paragraph-subtitle"></div> -->
        <div class="paragraph-container">
            <div class="paragraph-title">روش های استفاده از میدلور Middleware های لاراول</div>
            <div class="paragraph-subtitle">استفاده سراسری میدلورها Global Middleware</div>
            <div class="paragraph">
            اگر قصد دارید یک میدلور بر روی تمام درخواست های ورودی برنامه شما اجر ا شود باید آن را در ویژگی middleware موجود در فایل app/http/kernel.php ثبت کنید. با این کار لاراول تمام درخواست های اپلیکیشن شما را با میدلور شما بررسی خواهد کرد.
            </div>
            <div class="paragraph-subtitle">اعمال middleware بر روی Route های لاراول</div>
            <div class="paragraph">
            شما میتوانید از میدلور ها مستقیما بر روی مسیر ها یا همان Route های برنامه خود استفاده کنید. اما قبل از این کار باید دوباره به فایل app/hhtp/kernel.php مراجعه کنید و این بار میدلور شخصی خود را در ویژگی $routeMiddleware ثبت کنید تا بتوانید از آن در مسیر ها استفاده کنید.
            <div class="code">
            Route::get('admin/profile', function () {<br>
                //<br>
            })->middleware('auth');
            </div>
            در مثال بالا ما از میدلور auth  بر روی روت profile استفاده کردیم. همچنین شما مانند مثال زیر میتوانید چند میدلور را همزمان بر روی یک روت در لاراول فراخوانی کنید:
            <div class="code">Route::get('/', function () { // })->middleware('first', 'second');</div>
            </div>
            <div class="paragraph-subtitle">Middleware Groups لاراول</div>
            <div class="paragraph">
            در لاراول میدلور های مسیر های web از میدلور های مسیر api مجزا است و به عبارتی از 2 میدلور گروپ مجزا به صورت پیش فرض استفاده می کند. اگر مانند مثال زیر از میدلور web بر روی گروهی از مسیر ها یا بر روی یک مسیر تک استفاده کنیم. فقط درخواست هایی که از طریق وب و مرورگر به این مسیر ارسال شود پاسخ داده خواهد شد و در غیر اینصورت اگر از طریق سایر روش ها مانند api فراخوانی شود، درخواست مورد نظر رد خواهد شد.
            <div class="code">
            Route::get('/', function () { <br>
                // <br>
            })->middleware('web');<br>
            <br>
            Route::group(['middleware' => ['web']], function () {<br>
                //<br>
            });
            </div>
            </div>
        </div>
        <!-- e -->
        <div class="test-link"><a href="{{route('exam4')}}">امتحان بخش چهارم</a></div>
        <!-- ee -->
    </div>
</body>
</html>
</x-app-layout>