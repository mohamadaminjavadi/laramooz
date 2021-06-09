<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../src/styles/levels/global.css">
    <title>level 9</title>
</head>
<body>
    <div class="contain">
        <div class="article-title">Migrations</div>
        <div class="paragraph-container">
            <div class="paragraph-title"></div>
            <div class="paragraph"></div>
        </div>
        <!-- sss -->
        <div class="paragraph-container">
            <div class="paragraph-title">میگریشن چیست؟</div>
            <div class="paragraph">
            به زبان ساده، میگرشن روشی است برای ساختن جداول دیتابیس با کد. مزیت این روش سرعت بالای آن در ساختن جداول است. چرا که ما در طول پروژه بار ها و بار ها نیاز به پاک کردن جداول، از اول نوشتن، پر کردن و خالی کردن آن هاییم، بجای اینکه هربار داخل نرم افزار مدیریت پایگاه داده جداول را طراحی کنیم، یکبار برای همیشه آن ها را در میگرشن تعریف میکنیم و هربار لازم بود فقط با یک خط دستور بدون ترس از اتلاف وقت کارمان را پیش می بریم.
            </div>
        </div>
        <!-- ss -->
        <div class="paragraph-container">
            <div class="paragraph-title">روش ساختن:</div>
            <div class="paragraph">
            برای ساختن میگریشن، ابتدا باید با دستور زیر فایل آنرا به وجود بیاورید.<br>
            <div class="code">php artisan make:migration table_name</div>
            در قسمت table_name  نام جدولی که قصد ساختن آنرا دارید را بنویسید
            این دستور یک فایل در آدرس database/migrations ایجاد می کند. این از ساختن جدول. فقط می ماند ستون ها.
            داخل این فایل، مقداری کد آماده به طور خودکار نوشته شده. در قسمتی که در پایین مشخص شده، باید دستورات ساخت ستون ها وارد شود
            <div class="code">
            //…. some code…<br>
            Schema::create('table_name', function (Blueprint $table) {<br>
                &emsp;اینجا<br>
            });<br>
            </div>
            </div>
        </div>
        <!-- ss -->
        <div class="paragraph-container">
            <div class="paragraph-title">دستور ساخت ستون به این صورت است</div>
            <div class="paragraph">
            $table که متغیری است که به جدول ما اشاره میکند. پس باید بگوییم در این تیبل، ستون با فلان نوع داده، با فلان نام،   با فلان حالت روی آن بساز<br>
مثال:<br>
<div class="code">$table->string('name')->unique() ;</div>
نوع: استرینگ، نام: name، حالت: یونیک (تعیین حالت اجباری نیست فقط اگر برایتان مهم است باید تعیین کنید)
یک مثال کامل تر، به درک بهتر موضوع کمک می کند:<br><br>
<div class="code">
Schema::create('comment_blog', function (Blueprint $table) {
    &emsp;$table->Increments('id');
    &emsp;$table->string("name");
    &emsp;$table->string('email');
    &emsp;$table->boolean('dont_show_email');
    &emsp;$table->string('phone')->nullable();
    &emsp;$table->text('text');
    &emsp;//relation
    &emsp;$table->unsignedBigInteger('blog_id');
    &emsp;$table->String("parent_name")->nullable();
    &emsp;//relation
    &emsp;$table->unsignedInteger('parent_id')->nullable();
    &emsp;$table->index('parent_id');
    &emsp;$table->foreign('parent_id')->references('id')
    &emsp;->on('comment_blog')->onDelete('cascade')->onUpdate('no action');
    &emsp;$table->boolean('confirm');
    &emsp;$table->timestamps();
});

</div>
همانطور که در مثال مشاهده میکنید، در این روش حتی میتوانید ریلیشن های این جدول با جداول دیگر را نیز تعیین کنید، مشخص کنید که این ستون میتواند خالی nullable باشد، کلید خارجی باشد، کلید اصلی باشد و به طور خودکار افزایش پیدا کند و...<br>
برای اطلاعات بیشتر در زمینه جداول دیتابیس به داکیومنت اصلی یا آموزش های دیگر مراجعه کنید که مفصل توضیح داده شده.

            </div>
        </div>
        <!-- ss -->
        <div class="paragraph-container">
            <div class="paragraph-title">دستورات استفاده از میگرشن</div>
            <div class="paragraph">
            ساخت جدول و ستون ها و کلا هر آنچه در فایل های میگریت گفتیم:<br>
            <div class="code">php artisan migrate</div>
            پاک کردن جداول و از اول ساختن آنها:
            <div class="code">php artisan migration:refresh</div>
            <div class="note-container">
            <div class="note">نکته مهم: در میگریشن، جداول بر اساس تاریخی که میگریشن را نوشتیم مرتب میشوند. یعنی اگر رول بک کنیم، از آخرین جدولی که ساخته شروع به پاک کردن میکند، و دوباره از اولین جدول شروع به نوشتن. پس اگر بین جداول، رابطه ای تعیین کردیم، باید دقت کنیم آن جدولی که مرجع کلید خارجی جدول دیگری است، باید اول ساخته شود. اگر مشکلی پیش آمد، میتوانیم با تغییر تاریخ آنها، این مشکل را برطرف کنیم. تاریخ آنها در نام فایل میگریشن شان نوشته شده که با ویرایش آن، ترتیبشان تغییر میکند</div>
            </div>
            پاک کردن جدول ها:
            <div class="code">php artisan migration:rollback</div>
            <div class="note-container">
            <div class="note">نکته: با پاک کردن جدول ها، دستورات میگریشن پاک نمیشوند و با دوباره میگریت کردن، از اول ساخته میشوند. اصلا هدف از نوشتن میگریشن همین است.</div>
            </div>
            </div>
        </div>
        <!-- ee -->
        <div class="test-link"><a href="{{route('exam',9)}}">امتحان بخش نهم</a></div>
    </div>
</body>
</html>
</x-app-layout>