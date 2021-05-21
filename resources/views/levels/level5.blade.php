<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/styles/levels/global.css">
        <title>Level 5</title>
    </head>
    <body>
        <div class="contain">
            
            <div class="note-container"></div>
            <!-- ss -->
            <div class="article-title">Controller</div>
            <div class="note-container">credit: herod.ir</div>
            <div class="paragraph-container">
                <div class="paragraph-title">Controller لاراول چیست؟</div>
                <div class="paragraph">
                در لاراول به جای تعریف منطق برنامه در Closures درخواست ها (Request) در فایل Route می توانیم از کنترلرها استفاده کنیم. Controller لاراول یک کلاس است که کلاس کنترلر اصلی لاراول را Extends یا توسعه می دهد. کنترلر های لاراول میتوانند منطق برنامه با درخواست های مشابه را در یک کلاس واحد گروه بندی کنند. همچنین کنترلر لارول پس از ایجاد در مسیر app/Http/Controllers ذخیره می شوند.
                </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">ایجاد و تعریف Controller لاراول</div>
                <div class="paragraph">
                برای تعریف اولین کنترلر خود در Laravel می توانید از دستور زیر در کنسول استفاده کنید که در مثال زیر ShowProfile نام کنترلر ما است:
                <div class="code">
                    php artisan make:controller ShowProfile
                </div>
                ساختار یک کنترلر مانند کد زیر است که شما کنترلر UserController با یک متد show را مشاهده می کنید که اطلاعات کاربر را به یک view ارسال می کند:
                <div class="code">
                namespace App\Http\Controllers;<br>

                class UserController extends Controller<br>
                {<br>
                    public function show($id)<br>
                    {<br>
                        return view('user.profile', ['user' => User::findOrFail($id)]);<br>
                    }<br>
                }<br>
                </div>
                </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">اتصال Route به Controller در لاراول</div>
                <div class="paragraph">
                برای اتصال یک درخواست در فایل Route به یک کنترلر در Laravel می توانید به عنوان پارامتر دوم با نوشتن نام و متد این کار را انجام دهید:
                <div class="code">Route::get('user/{id}', 'UserController@show');</div>
                حالا زمانی که یک کاربر آدرس user/{id} را در مروگر خود اجرا می کند درخواست آن به همراه پارامتر های ورودی در متد show کنترلر UserController اجرا می شود.
                </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">تعریف کنترلر Single Action در لاراول</div>
                <div class="paragraph">
                Controller های Single Action فقط یک عمل واحد را انجام می دهند و منطق باید در متد __invoke تعریف شود. این کنترلر های زمانی استفاده می شود که نیاز به متدهای دیگر در کنترلر نباشد:
                <div class="code">
                class ShowProfile extends Controller<br>
                {<br>
                    public function __invoke($id)<br>
                    {<br>
                        return view('user.profile', ['user' => User::findOrFail($id)]);<br>
                    }<br>
                }<br>
                </div>
                برای تعریف کنترلر با عمل واحد در لاراول میتوانید از دستور زیر در خط فرمان استفاده کنید:
                <div class="code">php artisan make:controller ShowProfile --invokable</div>
                </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">استفاده از Middleware در Controller لاراول</div>
                <div class="paragraph">
                اولین روش تعریف میدلور برای کنترلر لاراول، تعریف بر روی Route مورد نظر است:
                <div class="code">Route::get('profile', 'UserController@show')->middleware('auth');</div>
                در مثال بالا میدلور auth برای متد show در کنترلر UserController تعریف شده است و کاربر فقط در صورت لاگین بودن به آن دسترسی دارد.<br><br>
                روش دیگر که شاید تعریف Middleware در کلاس سازنده Controller است:
                <div class="code">
                class UserController extends Controller<br>
                {<br>
                    public function __construct()<br>
                    {<br>
                $this->middleware('auth');<br>
                <br>
                $this->middleware('log')->only('index');<br>
                <br>
                $this->middleware('subscribed')->except('store');<br>
                    }<br>
                }<br>
                </div>
                </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">تعریف Resource Controllers در لاراول</div>
                <div class="paragraph">
                شما می توانید با استفاده از تعریف یک کنترلر resource در لاراول خیلی سریع و آسان متدهای لازم برای انجام عملیات CRUD را در اختیار داشته باشید.<br>
                با استفاده از دستور زیر در خط فرمان می توانید Resource Controller در لاراول را ایجاد کنید:
                <div class="code">
                    php artisan make:controller PhotoController --resource
                </div>
                Route آن هم به صورت زیر تعریف می شود:
                <div class="cpde">Route::resource('photos', 'PhotoController');</div>
                اگر قصد ایجاد Resource Controller برای Model خاص در لاراول را دارید می توانید این کار با دستور --model انجام دهید:
                <div class="code">php artisan make:controller PhotoController --resource --model=Photo</div>
                </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">Resource Controller های خاص لاراول</div>
                <div class="paragraph">
                وقتی شما یک resource controller ایجاد می کنید متدهای زیر به همراه Route های آن تعریف می شود. شاید شما نخواهید از تمام این متدها در کنترلر مورد نظر استفاده کنید میتوانید با استفاده از دو روش only , except فقط جزئی از آن را به کار بگیرید و محدودسازی انجام دهید.
                <div class="code">
                Route::resource('photos', 'PhotoController')->only ([ <br>
                    'index', 'show'<br>
                ] );<br>
                <br>
                Route::resource('photos', 'PhotoController')->except([<br>
                    'create', 'store', 'update', 'destroy'<br>
                ] );<br>
                </div>
                </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">تعریف API Resource Routes در لاراول</div>
                <div class="paragraph">
                گفتیم زمانی یک resource controller در لاراول ایجاد می کنید شاید به برخی از متدها و Route ها نیاز نداشته باشید. معمولا در ساخت Api به دو متد create , edit که برای فراخوانی HTML است نیاز نمی شود. به راحتی می توانید با دستور زیر resource controller مخصوص Api در لارول ایجاد کنید:
                <div class="code">php artisan make:controller API/PhotoController --api</div>
                تعریف Route آن هم به صورت زیر خواهد بود
                <div class="code">Route::apiResource('photos', 'PhotoController');</div>
                </div>
            </div>
            <!-- e -->
            <div class="test-link"><a href="{{route('exam5')}}">امتحان بخش پنجم</a></div>
            <!-- ee -->
        </div>
    </body>
    </html>
</x-app-layout>