<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../src/vendor/bootstrap/css/bootstrap.min.css">
    <title>راهنمایی</title>
</head>
<body>
    @if(isset($answer))
    <div class="card mt-10 pr-5" dir="rtl">
        <div class="card-title">جواب درست گزینه {{$answer}}</div>
    </div>
    @else
    <div class="card mt-10 pr-5" dir="rtl">
        <div class="card-title">امتیاز کافی نیست</div>
    </div>
    @endif

</body>
</html>
</x-app-layout>