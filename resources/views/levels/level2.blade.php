<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/levels/global.css">
    <title>level 2</title>
</head>
<body>
    <div class="contain">
        <div class="article-title">کلیت معماری MVC</div>
        <div class="paragraph-container">
            <div class="paragraph-title">معنی MVC</div>
            <div class="paragraph">ام وی سی مخفف سه کلمه مدل، ویو، کنترلر می باشد. فریم ورک لاراول ازین معماری برای انجام کار ها استفاده می کند
اما هر کدام ازین ها چه معنی ای دارند!
            </div>
        </div>
        <div class="paragraph-container">
            <div class="paragraph-title">Model</div>
            <div class="paragraph">
            مدل، بخشی است که با دیتابیس در ارتباط است.توابع و دستوراتی که برای گرفتن داده از دیتابیس، حذف، و یا ویرایش داده در دیتابیس استفاده می شود در این قسمت نوشته می شود.
درواقع، مدل، یک کلاس است. که با استفاده از ORM خاص خود، ارتباط با دیتا بیس را برای ما بسیار راحت کرده.
            </div>
        </div>
        <div class="paragraph-container">
            <div class="paragraph-title">ORM (Object Relational Mapping)</div>
            <div class="paragraph">
            به زبان ساده، یک لایه مترجم بین زبان برنامه نویسی و پایگاه داده است.<br>
            برای کسب اطلاعات بیشتر درباره او آر ام، میتوانید به مقاله ای که در آدرس زیر نوشته شده است بخوانید
            <div class="link"><a href="https://programchi.ir/2018/08/25/orm-%DA%86%DB%8C%D8%B3%D8%AA-%D8%9F/">https://programchi.ir/2018/08/25/orm-%DA%86%DB%8C%D8%B3%D8%AA-%D8%9F/</a></div>
            </div>
        </div>
        <div class="paragraph-container">
            <div class="paragraph-title">View</div>
            <div class="paragraph">
            بخش مربوط به فایل های فرانت اند.<br>
            همانطور که میدانید، یک پروژه ی وب، شامل بک اند و فرانت اند می باشد. فایل کد های مربوط به بخش فرانت اند، در بخش ویو نوشته می شود.
            </div>
        </div>
        <div class="paragraph-container">
            <div class="paragraph-title">Controller</div>
            <div class="paragraph">
            بخش منطق<br>
            کنترلر های لاراول میتوانند منطق برنامه با درخواست های مشابه را در یک کلاس واحد گروه بندی کنند. برای مثال توابع لازم برای اضافه کردن، حذف و یا ویرایش اطلاعات کاربر جدید به سایت را در یک کنترلر که وظیفه انجام کار های مربوط به کاربر را دارد مینویسیم. کنترل ورودی های کاربر نیز بخشی از کار کنترلر هاست. برای مثال اگر کاربر بخواهد در قسمت نام، عدد وارد کند، میتوان قانونی نوشت که اگر چیزی غیر از حروف الفبا آمد، درخواست را قبول نکن و پیغام خطا برای کاربر بفرست.
اما درخواست های کاربر چگونه به بخش کنترلر می رسند؟ در بخش بعد خواهیم فهمید!
            </div>
        </div>
        </div>
    <div class="test-link"><a href="{{route('exam2')}}">امتحان بخش دوم</a></div>
    </div>
    <!-- end contain -->
</body>
</html>
</x-app-layout>