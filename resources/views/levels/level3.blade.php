<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/levels/global.css">
    <title>level 3</title>
</head>
<body>
    <div class="contain">
        <div class="article-title">Routes</div>
        <!-- ss -->
        <div class="note-container">credit: herod.ir</div>
        <div class="paragraph-container">
            <div class="paragraph-title">تعریف روت ها</div>
            <div class="paragraph">روت یا مسیر، همانطور که از نامش پیداست، آدرس یا یو آر ال ها را معنی دار می کند. برای مثال، وقتی به صفحه هوم وبسایت می رویم، با فراخواندن یو آر ال این صفحه، روت مورد نظر، تابعی را صدا میزند که کاری انجام دهد. در این مثال، روت صفحه هوم، تابع نمایش دادن آن صفحه را صدا می زند و این صفحه به نمایش در می آید. یا در مثالی دیگر، با فشردن دکمه حذف، روت نظیر آن فعال میشود و تابع حذف شدن را صدا می زند. مثال:</div>
            <div class="code">
            Route::get('/404', function() {
                return View('404/index');
            });
            </div>
            <div class="paragraph">یعنی با دیدن 404 در یو آر ال، خروجی تابع ویو (که وظیفه اش نمایش دادن است) را که نام صفحه مورد نظر را به آن پاس داده ایم، برگردان. که به طور خلاصه، به نمایش صفحه 404 ختم می شود.
            </div>
        </div>
        
        <div class="paragraph-container">
            <div class="paragraph-title">نحوه روت دهی</div>
            <div class="paragraph">
            پس از نصب لاراول روت ها در پوشه routes ایجاد می شوند. این پوشه دارای دو فایل web.php و api.php است. فایل web.php برای ایجاد روت هایی که برای سایت ایجاد می کنیم  قرار میگیرد و در api.php روت های مرتبط با Api ایجاد قرار خواهد میگیرد. در درون این دو فایل در ابتدا یک Route پیش فرض ایجاد شده است.
            در فایل web.php یک روت پیش فرض مانند زیر تعریف شده است.
            </div>
            <div class="code">Route::get('/', 'HomeController@index');</div>
            <div class="paragraph">این Route از نوع GET است که در ادامه بیشتر با آن آشنا میشویم لاراول یک درخواست به مسیر / دریافت می کند و سپس متد index را از کنترلر HomeController فرا خوانی می کند. و یحتمل این متد فراخوانی View با نام welcome این ویو را در آدرس / به نمایش می گذارد. آدرس / در واقع همان آدرس صفحه نخست سایت ما است.</div>
        </div>
        
        <div class="paragraph-container">
            <div class="paragraph-title">ساخت اولین روت در لاراول :</div>
            <div class="paragraph">
            تعریف Route در لاراول خیلی آسان است. برای تعریف روت در لاراول ابتدا فایل Web.php را باز می کنیم سپس با استفاده از دستور  Route::و سپس تعیین نوع درخواست که به آن Verbs های HTTP می گویند می توانیم Route خود را در لاراول تعریف کنیم. انواع Verb هایی که روت ها در لاراول قبول می کنند:
            <div class="code">GET, POST, DELETE, PUT, PATCH, OPTIONS</div>
            پس از تعیین نوع Verb روت میتوانیم به عنوان Closure یک Function یا یک Controller را فراخوانی کنیم. در ادامه یک روت جهت آشنایی بیشتر ایجاد کرده و آن را بررسی می کنیم.
            <div class="code">
            Route::get('contact', function () {<br>
                return 'تماس با ما' ;<br>
            } ) ;
            </div>
            خب، روت بالا یک روت از نوع GET است که درخواست (Request) با مسیر /contact را می پذیرد و سپس یک فانکشن را فراخوانی می کند. در واقع آدرس https://example.ir/contact همان آدرس صفحه “تماس با ما” سایت است که پس از فراخوانی این آدرس در مرورگر، با توجه به روت تعریف شده در پروژه لاراول ما، عبارت تماس با ما که در function روت تعریف شده است نمایش داده می شود. همچنین ما در این مثال می توانیم به جای استفاده از فانکشن، درخواست مورد نظر را به یک متد از Controller در پروژه انتقال دهیم. مانند مثال زیر که درخواست به متد show در کنترلر ContactController منتقل می شود و مابقی اتفاقات در آنجا در این کنترلر رقم می خورد.<br>
            مثال:
            <div class="code">Route::get('contact', 'ContactController@show');</div>
            </div>
        </div>
        
        <div class="paragraph-container">
            <div class="paragraph-title">روت های Redirect لاراول :</div>
            <div class="paragraph">
            اگر روتی تعریف می کنید که به یک URL دیگر هدایت می شود یا به عبارتی قصد تعریف Route ریدایرکت در لاراول را دارید میتوانید از Route::redirect استفاده کنید. همچنین متوانید در پارامتر سوم نوع ریدارکت را با عدد مورد نظر مشخص کنید.
            <div class="code">Route::redirect('/here', '/there', 301);</div>
            متغیر اول این تابع، آدرس مبدا و متغیر دوم آدرس مقصد ریدایرکت شدن را میگیرد و بقیه کار را خودش برایتان انجام میدهد :)
            </div>
        </div>
        
        <div class="paragraph-container">
            <div class="paragraph-title">ارسال پارامتر در روت لاراول : </div>
            <div class="paragraph">
            برخی از مواقع شاید لازم شود یک دیتایی را به URL چسبانده و سپس با خواندن آن دیتایی را دریافت کنیم. در لاراول این کار به راحتی مانند مثال زیر قابل انجام است. فرض کنید قصد داریم تا با ارسال id یک کاربر در آدرس، آن را در روت مورد نظر خوانده و نمایش دهیم:
            <div class="code">
            Route::get('user/{id}', function ($id) {
                return 'User '.$id;
            } ) ;
            </div>
            در مثال بالا ما آیدی کاربر را با چسباندن عبارت {id} به آدرس روت میتوانیم آن را در Function فراخوانی شده پس از درخواست، دریافت کنیم و نمایش دهیم و برای کارهای بیشتر آن را به یک کنترلر ارسال کنیم.<br>
            همچنین مانند مثال زیر میتوانیم دو پارامتر بیشتر را در آدرس ارسال کرده و در فانکشن با تعریف متغییر آن ها را دریافت کنیم:<br>
            <div class="code">
                Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {    //});
            </div>
            </div>
        </div>
        
        <div class="paragraph-container">
            <div class="paragraph-title">پارامتر اختیاری در Route لاراول :</div>
            <div class="paragraph">
            اگر پارامتر های مورد نظر را مانند روش بالا در روت تعریف کنیم باید حتما پارامتر ها در آدرس روت ارسال شود در غیر اینصورت درخواست با خطا مواجه خواهد شد. حال اگر بخواهیم یک پارامتر را به صورت اختیاری تعریف کنیم تا در صورت عدم ارسال خطایی رخ ندهد باید از علامت ؟ پس از نام پارامتر استفاده کنیم مانند مثال زیر:
            </div>
            <div class="code">
            Route::get('user/{name?}', function ($name = 'John') {<br>
                return $name <br>
            ;} );
            </div>
        </div>
        
        <div class="paragraph-container">
            <div class="paragraph-title"> نامگذاری روت ها در لاراول :</div>
            <div class="paragraph">
            درلاراول پس از تعریف یک روت به صورت پیش فرض برای فراخوانی آن روت در پروژه باید از آدرس آن روت استفاده کنید اما برای راحتی و تمیزی بیشتر کار میتوان برای روت ها نام تعیین کرد و آنها را با آن نام فراخوانی کرد. برای نام گذاری Route در لاراول باید از دستور name() پس از تعریف روت استفاده کرد مانند مثال زیر:<br>
            <div class="code">
            Route::get('user/profile', function () {<br>
                // <br>
            } ) -> name ('profile');
            </div>
            ما برای فراخوانی روت بالا به جای استفاده از آدرس آن یعنی /user/profile میتوانیم به صورت زیر عمل کنیم و با استفاده از helper روت آن را فراخوانی کنیم:
            <div class="code">
            route('profile')
            </div>
            </div>
        </div>
        
        <div class="paragraph-container">
            <div class="paragraph-title">گروه بندی Route ها در لاراول :</div>
            <div class="paragraph">
            ما می توانیم در لاراول Attribute های مختلفی به روت ها نسبت دهیم. حال به جای اینکه این اتریبیوت ها را برای تمام Route ها به صورت تکرار بنویسیم میتوانیم از ویژگی Route Groups در لاراول استفاده کنیم و این Attribute ها را در یک آرایه در ابتدای آن گروه به تمام روت های موجود در آن گروه نسبت دهیم. در ادامه، به انواع گروه بندی میپردازیم.<br>
            </div>
        </div>
        <!-- s -->
        <div class="paragraph-container">
            <div class="paragraph-title">انواع گروه بندی روت ها</div>
            <div class="paragraph-title">Namespace روت لاراول</div>
            <div class="paragraph">
            یکی دیگر از ویژگی هایی که میتوانیم در گروه بندی به روت ها اعمال کنیم استفاده از namespace است. لاراول به صورت پیش فرض روت ها را در فضای نام App\Http\Controllers در نظر میگیرد اما روت خود را در مسیر دیگری ایجاد کردید باید فضای نام آن را اعمال کنید. به طور مثال ما در مثال زیر فضای نام admin را اعمال کردیم و نیاز به نوشت به صورت کامل نیست زیرا لاراول App\Http\Controllers را به صورت پیش فرض ثبل از فضای نام admin اعمال می کند.
            <div class="code">
            Route::namespace('Admin')->group( function() {<br>
                // Controllers Within The "App\Http\Controllers\Admin" Namespace <br>
            });
            </div>
            </div>
            <div class="paragraph-title">Subdomain روت لاراول</div>
            <div class="paragraph">
            می توانید روت های خود را برای استفاده از زیر دامنه ها در لاراول شخصی سازی کنید. این اتفاق با استفاده از متد domain در گروه بندی روت های لاراول رخ می دهد.
            <div class="code">
            Route::domain('{account}.myapp.com')->group(function() {<br>
                Route::get('user/{id}', function ($account, $id) { <br>
                    // <br>
                }); <br>
            });<br>
            </div>
            </div>
            <div class="paragraph-title">Prefix روت لاراول</div>
            <div class="paragraph">
            با استفاده از متد prefix می توانید یک پیشوند برای روت های یک گروه تعریف کنید. برای مثال پیشوند admin بر تمام روت ها اعمال شده و دیگر نیاز بهت تکرار آن در تمام روت ها نیست:
            <div class="code">
            Route::prefix('admin')->group(function () { <br>
                Route::get('users', function () { // Matches The "/admin/users" URL });<br>
                }); 

            </div>
            </div>
        </div>
        <!-- e -->
        <div class="test-link"><a href="{{route('exam3')}}">امتحان بخش سوم</a></div>
    </div>
</body>
</html>
</x-app-layout>