<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/styles/levels/global.css">
        <title>level 7</title>
    </head>
    <body>
        <div class="contain">
            <div class="article-title">Views</div>
            <div class="paragraph-container">
                    <div class="paragraph-title"></div>
                    <div class="paragraph"></div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                    <div class="paragraph-title"> view ها در لاراول</div>
                    <div class="paragraph">
                    ویوها در لاراول شامل کدهای HTML برنامه شما هستند. View منطق Controller برنامه شما را از منطق آنچه قرار است که در فرانت اند به کاربر نمایش داده شود را از هم جدا می کند. View ها در Laravel در مسیر resources/views ایجاد می شوند.
                    </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                    <div class="paragraph-title">ساده ترین View ممکن در لاراول</div>
                    <div class="paragraph">
                    کد زیر در واقع یک ویو ساده در لاراول را نشان می دهد.
                    <div class="code">
                    &lt;html> <br>
                       &emsp; &lt;body> <br>	
                       &emsp; &emsp; &lt;h1>Hello, $name &lt;/h1> <br>
                       &emsp; &lt;/body>	<br>
                    &lt;/html> <br>
                    </div>
                    خب پس از ایجاد View قطعا ما باید آن را نمایش دهیم که با استفاده از return view در فایل Route لاراول می توانیم این کار را انجام دهیم.
                    <div class="code">
                    Route::get('/', function () {<br>
                    &emsp;return view('greeting', ['name' => 'James']);<br>
                    } );<br>
                    </div>
                    همانطور که مشاهده می کنید ما با استفاده از view helper در پارامتر اول نام ویو و در پارامتر دوم در قالب یک آرایه می توانیم مقداری را به عنوان مثال name را به آن ویو ارسال کنیم. سپس ما با استفاده از Blade Syntax که لاراول در View ها از آن استفاده می کند می توانیم آن متغییر را به صورت  $name در View نمایش دهیم.<br>
                    همچنین برای فراخوانی View های تو در تو در لاراول می توانیم با استفاده از (دات) مانند مثال زیر عمل کنیم.
                    <div class="code">return view('admin.profile', $data);</div>
                    </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                    <div class="paragraph-title">بررسی وجود یک View در لاراول</div>
                    <div class="paragraph">
                    اگر نیاز دارید تا وجود یک View را چک کنید می توانید از facade View در لاراول استفاده کنید که در صورت وجود true بازگشت داده می شود.
                    <div class="code">
                    if (View::exists('emails.customer')) {<br>
                    &emsp;    //<br>
                    }<br>
                    </div>

                    </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                    <div class="paragraph-title">ارسال داده به View در لاراول</div>
                    <div class="paragraph">
                    همانطور که پیش تر گفتیم می توانید به صورت زیر مجموعه از داده ها را به ویو ارسال کنید.
                    <div class="code">
                    return view('greetings', ['name' => 'Victoria']);
                    </div>
                    همچنین این کار را میتوانید با متد with انجام دهید و داده ها را جداگانه ارسال کنید.
                    <div class="code">return view('greeting')->with('name', 'Victoria');</div>
                    </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                    <div class="paragraph-title">اشتراک گذاری داده بین چند View در لاراول</div>
                    <div class="paragraph">
                    گاهی اوقات شاید لازم باشد داده ای را بین تمام ویوها یا چند ویو موجو در برنامه لاراول خود به اشتراک بگذارید. برای این کار ابتدا یک Service Provider ساخته و در متد boot آن می توانیم با استفاده از facade View این کار مانند مثال زیر انجام دهیم.
                    <div class="code">
                    class ViewServiceProvider extends ServiceProvider <br>
                    {<br>
                &emsp;  public function register()<br>
                &emsp;  {<br>
                    &emsp;&emsp; //<br>
                &emsp;  }<br>
                &emsp;  public function boot()<br>
                &emsp;  {<br>
                &emsp;&emsp;// Using class based composers...<br>
                &emsp;&emsp;View::composer(<br>
                &emsp;&emsp;&emsp;'profile', 'App\Http\View\Composers\ProfileComposer'<br>
                &emsp;&emsp;);<br>
                            <br>
                &emsp;&emsp;// Using Closure based composers...<br>
                &emsp;&emsp;View::composer('dashboard', function ($view) {<br>
                &emsp;&emsp;&emsp;//<br>
                &emsp;&emsp;});<br>
                &emsp;&emsp;}<br>
                    }<br>
                    </div>
                    شما می توانید این کار در Closure در همان service provider انجام دهید یا یک کلاس Composer مانند ProfileComposer ایجاد کنید و آن را فراخوانی کنید. در ادامه ProfileComposer را بررسی می کنیم. اما در حالت Closure مشاهده می کنید که در یک function می توانید دیتا ارسالی خود به ویو dashboard را مشخص کنید.
                    <div class="code">
                    class ProfileComposer <br>
                    {<br>
                &emsp;  protected $users;<br>
                        <br>
                &emsp;   public function __construct(UserRepository $users)<br>
                &emsp;   {<br>
                &emsp;&emsp;// Dependencies automatically resolved by service container...<br>
                &emsp;&emsp;$this->users = $users;<br>
                &emsp;   }<br>
                        <br>
                &emsp;    public function compose(View $view)<br>
                &emsp;   {<br>
                &emsp;&emsp; $view->with('count', $this->users->count());<br>
                &emsp;   }<br>
            &emsp;  }<br>
                    </div>
                    عملکرد این Composer اینگونه است که هر وقت که ویو Profile لود می شود، متد compose اجرا شده و دیتا تعریف شده را به ویو profile ارسال می کند. در constructor هم می توانید مقدار ورودی به ProfileComposer را مقداردهی کنید.<br><br>

                    اگر قصد ارسال دیتا به تمام ویوهای پروژه خود را دارید باید از (*) استفاده کنید.
                    <div class="code">
                    View::composer('*', function ($view) { &emsp; // &emsp; });
                    </div>
                    </div>
            </div>
            <!-- s -->
            <div class="paragraph-container">
                    <div class="paragraph-title">بهینه سازی View ها در لاراول</div>
                    <div class="paragraph">
                    لاراول برای نمایش view ها آنها را کامپایل می کند و در پوشه ای مجزا نگهداری می کند تا زمانی که یک View فراخوانی شود و آن را نمایش دهد. زمانی که یک ویو درخواست می شود اگر نسخه کامپایل شده آن وجود داشته باشد و اصلاح نشده باشد همان ار نمایش می دهد اما اگر نسخه کامپایل شده وجود نداشته باشد یا اصلاح شده باشد مجدد آن را کامپایل می کند.<br><br>

                    روند کامپایل در هنگام اجرای یک درخواست ممکن است باعث افت سرعت شود به همین دلیل میتوانید با استفاده از دستور view:cache تمام ویوها را یک بار کامپایل کنید تا در هنگام اجرای درخواست نیاز به کامپایل نباشد.
                    <div class="code">php artisan view:cache</div>
                    همچنین اگر قصد دارید تمام View های کامپایل شده در لاراول حذف کنید تا لاراول مجدد آنها را درهنگام اجرای درخواست کامپایل کنید می توانید از دستور view:clear استفاده کنید.
                    <div class="code">php artisan view:clear</div>
                    </div>
            </div>
            <!-- e -->
            <div class="test-link"><a href="{{route('exam',7)}}">امتحان بخش هفتم</a></div>
            <!-- ee -->
        </div>
    </body>
    </html>
</x-app-layout>