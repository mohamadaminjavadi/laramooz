<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./../src/styles/levels/global.css">
            <title>level 1</title>
        </head>
        <body>
            <div class="contain">
                    
                <div class="article-title"><p>مرحله اول، شروع کار با لاراول</p></div>

                <div class="paragraph-container">
                    <div class="paragraph-title">نصب پی اچ پی</div>
                    <div class="paragraph">باید برای شروع کار با لاراول، زبان پی اچ پی روی سیستم شما نصب شده باشد پس از طریق لینک زیر آنرا نصب کنید
                        
                    </div>
                </div>

                <div class="paragraph-container">
                    <div class="paragraph-title">نصب زمپ</div>
                    <div class="paragraph">
                    برنامه وب شما باید روی یک سرور اجرا شود. برنامه زمپ به شما اجازه ساخت یک سرور مجازی روی کامپیوتر خودتان می دهد که تمام نیاز های شما را برطرف میکند. استفاده ازین برنامه بسیار ساده است. کافی است بعد نصب، سرور آپاچی و اس کیو ال را در آن فعال کنید و به راحتی سرور مجازی شما ساخته خواهد شد. آخرین نسخه از برنامه زمپ را از لینک زیر دانلود، نصب و اجرا کنید.
                    <div class="link"><a href="https://www.apachefriends.org/download.html">https://www.apachefriends.org/download.html</a></div>
                    </div>
                </div>

                <div class="paragraph-container">
                    <div class="paragraph-title">نصب لاراول</div>
                    <div class="paragraph">
                    برای نصب لاراول، نیازمند یک پکیج منیجر هستیم. پس ابتدا با نصب پکیج منیجر کمپوزر شروع به کار میکنیم. برای نصب کمپوزر از دستور های زیر در کامند پرامپت ویندوز استفاده میکنیم
                    </div>
                    <div class="code">php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</div>
                    <div class="code">php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"</div>
                    <div class="code">php composer-setup.php</div>
                    <div class="code">php -r "unlink('composer-setup.php');"</div>
                    <div class="paragraph">برای توضیحات بیشتر در زمینه کمپوزر، میتوانید به وبسایت کمپوزر به آدرس زیر مراجعه کنید:</div>
                    <div class="link"><a href="https://getcomposer.org">https://getcomposer.org</a></div>
                    <div class="paragraph">بعد از نصب برای اطمینان از درست نصب شدن آن در کامپیوتر، در کامند پرامپت، دستور زیر را وارد کنید. اگر نصب شده باشد اطلاعات آن نمایش داده خواهد شد</div>
                    <div class="code">composer</div>
                </div>

                <div class="paragraph-container">
                    <div class="paragraph-title">ساخت اولین پروژه لاراول</div>
                    <div class="paragraph">به لطف پکیج منیجری که نصب کردیم، ساختن پروژه بسیار راحت است. کافی است در مسیری که می خواهید پروژه را بسازید، کامند پرامپت را باز کرده، دستور زیر را تایپ کنید. بقیه کار را کمپوزر برایتان میکند.</div>
                    <div class="code">composer create-project –prefer-dist laravel/laravel name</div>
                    <div class="paragraph"> بجای قسمت name، نام دلخواه پروژه تان را بنویسید. پروژه شما آماده می شود
                    میتوانید در آدرس مورد نظر، فولدر ها و فایل هایی که برایتان ساخته شده را ببینید.
                    </div>
                </div>
                
                <div class="note-container">
                    <div class="note">
                    نکته: برای باز کردن کامند پرامپت در آدرس مورد نظر دو راه وجود دارد. روش سخت و روش راحت
        روش سخت: با استفاده از دستورات پیمایش مثل سی دی و ال اس و... مسیرتان را پیدا کنید
        روش راحت: با فایل اکسپلورر ویندوز به مسیر دلخواهتان بروید. سپس در بالای صحفه که آدرس مسیری که پیموده اید را نوشته، کلیک کنید و همه را پاک کنید و دستور سی ام دی را بنویسید. کامند پرامت در آن آدرس باز می شود<br>
        مثال<br>
        C:\xampp\htdocs پاک شود <br>
        cmd نوشته شود<br>
        به همین راحتی!
                    </div>
                </div>
                
                <div class="paragraph-container">
                    <div class="paragraph-title">سرو کردن پروژه</div>
                    <div class="paragraph"> برای دیدن پروژه خود، باید ابتدا سرور مجازی زمپ را فعال کنیم. سپس در یک کامند پرامت که در مسیر پروژه باز کردیم، دستور زیر را بنویسیم تا پروژه مان به عبارتی، سرو شود!</div>
                    <div class="code">php artisan serve</div>
                    <div class="paragraph">بعد از زدن این دستور، اگر همه کار ها را درست انجام داده باشید، خواهید دید که در پاسخ به این دستور آدرس آی پی برای شما نوشته می شود که پروژه روی آن آدرس فعال شده. از چپ به راست، قمست قبل از دو نقطه، آدرس آی پی و بعد از دو نقطه، پورتی که روی آن پروژه تان فعال شده را نمایش می دهد. پس منتظر چه هستید! مرورگر خود را باز کنید و آی پی و پورت آن را تایپ کنید. صفحه آماده لاراول برایتان به نمایش در خواهد آمد !!</div>
                </div>

                <div class="note-container">
                    <div class="note">نکته: پروژه شما تا زمانی که دستور سرو فعال باشد، فعال خواهد بود. پس برای غیر فعال کردن آن، یا کامند پرامت را ببنید و یا از دستور کنترل + سی استفاده کنید. اگر هم نمیخواهید غیر فعال شود، برای دستور های دیگر، یک کامند پرامت دیگر باز کنید و این یکی را درحال فعالیت رها کنید !</div>
                </div>

                <div class="note-container">
                    <div class="note"> artisan چیست؟
    آرتیسان یک اینترفیس برای کامند لاین های مربوط به لاراول است. به زبان ساده تر، یک مجموعه از دستورات را برای کار با لاراول در دل خود جا داده. در محیط پروژه اگر دقت کنید یک فایل به نام آرتیسان مشاهده میکنید. در صورت وجود این فایل، دستورات آن در محیط کامند پرامت اجرا خواهند شد
    </div>
                </div>
                
                <div class="note-container">
                    <div class="note">نکته: در لاراول تابع مهمی داریم به عنوان ()dd که کارش متوقف
                    کردن روند برنامه و انجام کاری است که در آن خط گفته شده. dd: die and dump . و ازین تابع استفاده زیادی در دیباگ کردن کد خواهید کرد. به طور مثال میخواهید ببینید آیا فلان مقدار به تابع پاس داده می شود یا نه. قبل از تمام شدن عمل تابع با یک dd میتوانید کار تابع را متوقف و مقدار مورد نظر را چک کنید. مثال:</div>
                    <div class="code">
                    public function post(Request $request){ <br>
                        //<br>
                        dd($request->name);<br>
                    }<br>
                    </div>
                </div>
                
                <div class="note-container">
                    <div class="note">در این مثال، به محض رسیدن به خط dd عمل متوقف شده، ویژگی نام که در ریکوئست به تابع آمده را در سی ام دی پرینت می کند. میتوان از dd() بدون ورودی هم استفاده کرد و فقط برنامه را در آن خط متوقف کرد. این تابع بیشتر جنبه کمکی برای دیباگ دارد و بنده استفاده دیگری از آن ندیده ام.</div>
                </div>

                <div class="test-link"><a href="{{route('exam',1)}}">امتحان بخش یک</a></div>



                </div>
                
            </div>
            <!-- container -->
        </body>
    </html>
</x-app-layout>