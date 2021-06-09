<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../src/styles/levels/global.css">
    <title>level 8</title>
</head>
<body>
    <div class="contain">
    <div class="article-title">Model</div>
            <div class="paragraph-container">
                    <div class="paragraph-title"></div>
                    <div class="paragraph"></div>
            </div>
            <!-- ss -->
            <div class="note-container">credit: herod.ir</div>
            <div class="paragraph-container">
                    <div class="paragraph-title">ORM</div>
                    <div class="paragraph">
                    object relational mapping یا ORM سیستم پیاده سازی شده رابط میان شی و پایگاه داده است به معنی این که هر سطر از جدول برابر یک شی است. با کمک ORM ما پیاده سازی پایگاه داده ما به اشیا نزدیک تر خواهد بود.

به زبان ساده تر Query Builder روی یک سطر از یک جدول با تمامی روابط سطر مربوطه با سطرهای دیگر از جداول دیگر یک شئ از کلاس مدل می باشد. به عبارت دیگر هر شئ از کلاس مدل با یک سطر از یک جدول ارتباط دارد.

اولین گام در Eloquent ساخت یک model است. هر model با برقراری ارتباط با پایگاه داده اطلاعات لازم برای controller فراهم می کند.در ساختار eloquent هر مدل مرتبط با یک جدول است. هر کلاس model نامی مفرد به ازای نام جمع جدول مربوطه خود دارد و از کلاس Model از مسیر Illuminate\Database\Eloquent\Model ارث بری می کند.

                    </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                    <div class="paragraph-title">قوانین پیاده سازی Model در لاراول</div>
                    <div class="paragraph">
                    نام جدول : مدل باید مفرد نام جدول موجود در پایگاه داده باشد. برای مثال جدول Products مدل Product . چون هر instance از کلاس model برابر یک شئ خواهد بود. اگر مجبور به استفاده از مدل یا جدولی با نام متفاوت بودیم باید property زیر با به کلاس مدل بدهیم.

کلید اصلی : eloquent در نظر می گیرد که کلید اصلی جدول شما id باشد. اگر نام دیگری مد نظر دارید property با نام primaryKey را با نام ستون کلید اصلی به کلاس مدل اضافه کنید.

<div class="note-container">
<div class="note">نکته : هیچ گاه جدولی را بدون کلید اصلی تعریف نکنید چرا که هر فیلدی که به‌عنوان کلید اصلی انتخاب شود RDMS روی آن فیلد ایندکس انجام می‌دهد و دسترسی به آن table با آن فیلد به شدت سریع‌تر می‌شود.
</div>
</div> <br>

timestamps : زمان ذخیره سازی و بروزرسانی ردیف (created_at , updated_at) به صورت پیش فرض برای مدل در نظر گرفته می شود و همچنین زمان ساخت migration این دو ستون در جدول موجود می باشد. اگر مایل به استفاده از این دو ستون نیستید property با نام timestamps را برابر با false قرار دهید.<br>

fillable : فیلدهایی از شئ که قابل تغییر باشند (CRUD). این فیلد ها را باید در قالب آرایه ای به متغیر fillable موجود در کلاس model بدهیم.<br>

hidden : فیلدهایی از شئ یا همان ستون هایی از جدول شئ model که قابل تغییر نباشند (CRUD).<br>

<div class="code">
class Product extends Model { <br>
    protected $table; <br>
    protected $primaryKey = 'id';<br>
    protected $fillable = [];<br>
    protected $hidden = [];<br>
}<br>
</div>
نکته : برخی از متغیر های protected برای Eloquent Model به صورت پیش فرض از روی مدل ساخته می شوند و نیاز به تعریف مجدد توسط شما ندارند. مثلا متغیر table$ به صورت پیش فرض از روی نام جمع مدل تعیین می شود. برخی دیگر نیز مثل fillable و hidden باید از سوی شما تعیین گردد. <br>
                    </div>
                    ساخت مدل با artisan
برای ساخت model از دستور make:model استفاده می کنیم

artisan make:model Product

            </div>
            <!-- ss -->
            <div class="paragraph-container">
                    <div class="paragraph-title">ساخت مدل با artisan</div>
                    <div class="paragraph">
                    برای ساخت model از دستور make:model استفاده می کنیم<br>
                    artisan make:model Product<br>
                    </div>
            </div>

            <!-- ss -->
            <div class="paragraph-container">
                    <div class="paragraph-title">نگاه شئ گرایانه – Object Oriented Thinking</div>
                    <div class="paragraph">
                    زمانی که یک شئ از یک model ساخته میشود با آن مثل یک محصول برخورد میشود.  برای مثال می توان برایش نام انتخاب کرد و توضیح گذاشت و سایر مقادیرش را set کرد و از عملگر هایش نیز استفاده کرد.

                    به عبارت دیگر وقتی شئ product ساخته میشود ما به تمامی Attributes و methods دسترسی داریم.
                    <div class="code">
                    $product = new App\product; <br>
                    $product->name = 'Lamy Safari';<br>
                    $product->price = 100;<br>
                    $product->description = 'Good Fountain Pen';<br>
                    $product->status = 1;<br>
                    $product->save();<br>
                    </div>

                    </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                    <div class="paragraph-title">Dynamic Property</div>
                    <div class="paragraph">
                    همان طور که در کد بالا دیدیم پس از ساخت شئ از روی کلاس model مربوطه (در مثال ما Product) یک سری attribute هایی بر اساس نام ستون های ردیف جدول مربوطه برای شئ ما قابل دستیابی هستند که می توان به ازای شئ ساخته شده مقدار دهی و بازیابی گردند. به این attribute ها dynamic property گفته می شود.
                    </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                    <div class="paragraph-title">گرفتن داده از DataBase در model</div>
                    <div class="paragraph">
                    در مبحث Query Builder ما به یک جدول خاص متصل و اطلاعات را با متدهای زنجیر شده به هم (method chain) می گرفتیم. حال در model وقتی  از کلاس استفاده می کنیم یعنی تا مرحله DB::table('users') پیش رفتیم. جدول ما برابر با جدولی که مربوط به مدل است می باشد.<br>

                    DB::table(‘products’) ⇔ App\Product<br>
                    <div class="note-container">
                    <div class="note">
                    نکته : تمامی متدهای موجود در query builder برای Eloquent model نیز کاربرد دارد. یعنی شما می توانید با استفاده از کلاس model مربوطه با هر نامی (مثلا Product) که برگرفته از نام جدول نیز می باشد می توانید به متد های بیشتری نیز دسترسی داشته باشید ،‌ پس به عبارت ساده تر :

                    model دارای متدهایی است حاوی Query هایی مبتنی بر جدول بنا شده بر مدل و همچنین روابط بکار رفته بر اساس قوانین Eloquent.
                    </div>
                    </div> <br>

                    پس می توان گفت اجرا دستور به دو شکل امکان پذیر می باشد :<br>

                    Eloquent approach : استفاده از امکانات Model در Eloquent ORM <br>
                    Query Builder approach : استفاده از QueryBuilder<br>

                    </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                <div class="paragraph-title">Single Model</div>
                <div class="paragraph">
                در تفکر شئ گرایانه در لاراول ما زمانی که می خواستیم یک محصول اضافه کنیم یک شئ آماده می کردیم و بعد آن را مقدار دهیم می کردیم و ذخیره می کردیم. زمانی که یک محصول از پایگاه داده می گیریم نیز در حقیقت یک شئ (Eloquent Collection) را میگیریم. یعنی به یک سری Arribute و Methods دسترسی داریم.<br>
                <div class="code">
                $flight = App\product::find(1) ; <br>
                $flight = App\product::where('status', 1)->first() ;<br>
                </div>
                <div class="note-container">
                    <div class="note">
                    نکته : اگر سطر مورد نظر (شئ) یافت نشد نتیجه False برمی گرداند و بازگرداندن False به عنوان پارامتر به view می تواند یک اتفاق ناگوار برایمان باشد زیرا در آنجا متغیرهایی نیاز است که ما در نتیجه False نداریم.  برای این که به خطا پیش فرض بخوریم می توانیم از مکانیزم Not Found Exceptions استفاده کنیم. به این ترتیب که اگر شی مورد نظر یافت نشده به صفحه ۴۰۴ برود.
                    </div>
                </div>
                <div class="code">
                public function single($id) <br>
                {<br>
                    &emsp;$product = products::findOrFail($id) ;<br>
                    &emsp;return view('single-product',compact('product')); <br>
                }<br>
                </div>
                کد بالا معادل بهینه شده کدهای زیر است :
                <div class="code">
                public function single($id) <br>
                {<br>
                    &emsp;$product = products::find($id);<br>
                    &emsp;if(!empty($product)){<br>
                        &emsp;$title = $product->name;<br>
                        &emsp;return view('single-product',compact('product'));<br>
                        &emsp;}else{<br>
                        &emsp;abort(404);<br>
                        &emsp;}<br>
                }<br>
                </div>
                همان طور که ما find و first داریم معادل آن findOrFail و firstOrFail را داریم.
                <div class="note-container">
                <div class="note">
                نکته : همان طور که در مثال های بالا مشاهده کردیم متد save برای ذخیره سازی و بروزرسانی فیلد های اشیا یا در مثال ما محصول استفاده داشتند.
                </div>
                </div>
                </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                <div class="paragraph-title">Mass Assignment attributes</div>
                <div class="paragraph">
                گفتیم که در Eloquent ORM هر ردیف از جدول پایگاه داده برابر با یک شئ از مدل مربوط به آن است. (موقتا از روابط میان جداول چشم پوشی کنید)<br>
                هر شئ ساخته شده از مدل دارای یک سری attribute می باشد که معادل ستون هایی از ردیف جدول مربوطه می باشد. خوب این که چه attribute هایی از شئ مربوطه با چه ستون هایی از ردیف جدول معادل سازی گردند و چه ستون هایی باید محافظت شود از (update , create) با استفاده از fillable و hidden در وب سایت معین شوند.<br>

                fillable : فیلد های مجاز (attribute) برای بروز رسانی و نمایش در شئ ساخته شده از روی model.<br>
                hidden : فیلد های غیر مجاز (attribute) برای بروز رسانی و نمایش در شئ ساخته شده از روی model.<br>

                با استفاده از مواردی که در بالا گفته شد می توان در زمان ساخت شئ از روی کلاس model مربوطه این attribute ها را مقدار دهی کرد. همچنین می توان مقادیر این attribute ها را با استفاده از خاصیت Dynamic Property مقداردهی کرد.<br>

                <div class="note-container">
                <div class="note">
                نکته : زمانی که یک شئ از یک مدل را با استفاده از متد ها می گیرید اگر به صورت خام (collection) باشد تمامی ستون های آن موجود است و اگر به صورت آرایه (array) باشد تمامی ستون هایی که در قسمت hidden تعریف شده باشند موجود نمی باشد.
                </div>
                </div>
                پس رابطه میان MassAssignment و Model و TableRow به شکل زیر است.<br>
TableRow ⇒ MassAssignment ⇐ Model<br>

                </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                <div class="paragraph-title">Mass Updates</div>
                <div class="paragraph">
                برای بروزرسانی اطلاعات شئ مورد نظر در پایگاه داده پس از یافتن محصول به ازای هر دستور(find , where) می باشد. متد update آرایه ای از ستون های بروزرسانی می گیرد.<br>
                مثال: اعمال متد update روی شئ instanse شده از روی model .<br>
                <div class="code">
                //update all product have published in shop <br>
                App\products::where('status',1)->update(['price'=>75]);<br>
                //update product with id = 1<br>
                App\products::find(1)->update(['priec' => 78]);<br>
                </div>
                </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                <div class="paragraph-title">Mass Assignment</div>
                <div class="paragraph">
                با استفاده از متد create از کلاس model می توان شئ جدید اضافه کرد. ورودی این متد آرایه ای از فیلدهای مد نظر جهت پر شدن در سطر جدول می باشد.<br>
                <div class="code">
                App\products::create(<br>
                ['name'=>'Lamy Noto',<br>
                'status'=>1,<br>
                'price'=>32,<br>
                'weight'=>12,<br>
                'description'=>'Good Pen']<br>
            );<br>
                </div>
                این متد پس از انجام در صورت موفقیت آمیز بودن پروسه شئ ساخته شده را بر می گرداند.
                <div class="note-container">
                <div class="note">
                نکته : اگر فیلد های مورد نظر جهت بروزرسانی یا ذخیره سازی جزو فیلد های fillable در کلاس model نباشد Mass Assignment Error خواهیم داشت.
                </div>
                </div>
                <div class="note-container">
                <div class="note">
                نکته : بر اساس گفته های ما تا اینجا ساخت شی و ذخیره سازی آن در سیستم به دو روش زیر امکان پذیر است :
                </div>
                </div>
                ساخت شی از روی کلاس و مقدار دهی از طریق Dynamic Property و در نهایت ذخیره سازی با استفاده از متد save . <br>
                استفاده از Facade و متد create .<br>
                </div>
            </div>
            <!-- ss -->
            <div class="paragraph-container">
                    <div class="paragraph-title">Deleting</div>
                    <div class="paragraph">
                    پیاده سازی delete روی شئ instanse شده روی model باعث پاک شدن شئ می شود.<br>
                    مثال 1
                    <div class="code">
                    $product = App\product::find(1);<br>
                    $product->delete();<br>
                    </div>
                    مثال 2 
                    <div class="code">
                    App\product::where('status',1)->delete();
                    </div>
                    </div>
            </div>
            <!-- ee -->
            <div class="test-link"><a href="{{route('exam',8)}}">امتحان بخش هشتم</a></div>

    </div>
</body>
</html>
</x-app-layout>