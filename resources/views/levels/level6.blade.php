<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/styles/levels/global.css">
        <title>level 6</title>
    </head>
    <body>
        <div class="contain">
            <!-- ss -->
            <div class="article-title">Validation</div>
            <div class="paragraph-container">
                <div class="paragraph-title">تعریف</div>
                <div class="paragraph">
                گاهی در کنترلر، باید مقدار ورودی کاربر را کنترل کنیم. برای مثال در جایی که قرار است شماره تلفن وارد شود نباید به هیچ وجه حروف قبول شود. برای این کار، باید قوانینی تعیین کنیم و به تابع مورد نظر در کنترلر بگوییم که اول این قوانین را چک کن اگر طبق آنها ورودی اوکی بود، بعد برو هر کار میخواهی انجام بده. برای نوشتن قوانین راه های مختلفی وجود دارد که در اینجا منظم ترین و کاربردی ترین آنها را میگوییم: ساخت فایل ریکوئست.
                <div class="code">php artisan make:request name</div>
                این دستور در app/Http/Requests یک فایل با نام دلخواه شما می سازد.  که طبق معمول، مقداری کد آماده از قبل داخل آن نوشته شده.
                <div class="code">
                public function authorize()<br/>
                {<br>
                    return true;<br>
                    <p dir="rtl">این بخش به صورت دیفالت، روی false تنظیم شده و برای اینکه شرط ها را قبول و true برگرداند باید آنرا به true تغییر دهید. سپس در صورت قبول شدن شرط ها، true برمیگرداند و اگر شروط را رعایت نکرده باشد، false برمیگرداند.</p><br>
                } <br>

                </div>
                </div>
            </div>

            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">اما بخش نوشتن قوانین:</div>
                <div class="paragraph">
                    <div class="code">
                    public function rules()
                    {<br>
                        return [<br>
                    'block_id' => 'required|integer|exists:block,id',
                    <p dir="rtl">
                    در این بخش باید قوانین و شروطی که ورودی های تابع داشته باشند را بنویسیم. در این مثال گفته شده بخش آیدی، باید حتما نوشته شده باشد (required)، حتما نوع آن اینتجر باشد و در جدول block و در ستون id حتما موجود باشد وگرنه قبول نکن.<br>
                    قوانین با | از هم جدا میشوند. هر دو بخش (هم نام فیلد هم قوانین) داخل کوتیشن نوشته میشوند.
                    </p>
                    'slider_files'=>'required|array',<br>
                    ‘slider_files.*’=>’array|size:3’,<br>
                	'slider_files.*.0'=>'integer|exists:file_manager,id',<br>
                    ]; }
                    </div>
                </div>
                <div class="note-container">
                    <div class="note">
                    نکته مهم: در مثال بالا میبینم که در خط اول، قوانین مربوط به کلیت آرایه ای که قرار است وارد شود را نوشته. که عبارت است ازینکه آرایه باشد و حتما نوشته شود. اما خط دوم، جلوی همان متغیر قبلی نقطه ستاره آورده و قوانین جدیدی نوشته. این یعنی، هر خانه ازین آرایه باید این قوانین را داشته باشند. خط سوم هم یعنی ازین آرایه، خانه اول آن که ایندکس صفر دارد، باید در جدول file_manager و در بخش id وجود داشته باشد.<br>

                    حالا تنها کاری که می ماند این است که ازین قوانین در کنترلر استفاده کنیم.

                    </div>
                </div>

            </div>
            <!-- s -->
            <div class="paragraph-container">
                <div class="paragraph-title">استفاده در کنترلر</div>
                <div class="paragraph">
                    اول در فایل کنترلر، این فایل را use می کنیم. مثال:
                    <div class="code">use App\Http\Requests\CreateBlog;</div>
                    سپس کل این فایل حاوی قوانین، برای ما در این کنترلر قابل استفاده است. کافی است به این صورت به ورودی تابع بدهیم:
                    <div class="code">
                    public function createBlog(CreateBlog $request) {….}
                    </div>
                </div>
            </div>
            <!-- e -->
            <div class="test-link"><a href="{{route('exam',6)}}">امتحان بخش ششم</a></div>
            <!-- ee -->
        </div>
    </body>
    </html>
</x-app-layout>