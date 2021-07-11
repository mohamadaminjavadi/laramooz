<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../src/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./../src/styles/score/score.css">
        <title>نتیجه امتحان</title>
    </head>
    <body>
        <div class="card" dir="rtl">
            <div class="card-header">نتیجه امتحان</div>
            <div class="card-body">
                <div class="card-title">سوال یک :</div>
                <div class="card-text">{{$data['transcript'][0]}}</div> <br>
                <div class="card-title">سوال دو :</div>
                <div class="card-text">{{$data['transcript'][1]}}</div> <br>
                <div class="card-title">سوال سه :</div>
                <div class="card-text">{{$data['transcript'][2]}}</div> <br>

                <div class="card-title">نمره نهایی :</div>
                <div class="card-text">{{$data['score']}}</div> <br><br>
                <div class="line"></div>
                
                <div class="card-title">قبولی :</div>
                <div class="card-text">
                    @if($data['success'])
                        <p class="passed">قبول شدید</p>
                    
                    @else
                    <p class="failed">رد شدید</p>
                    @endif
                </div>
                <div dir="ltr">
                    <a href="{{route('dashboard')}}" class="btn btn-primary" >بازگشت به خانه</a>
                </div>
                
            </div>
        </div>
    </body>
    </html>
</x-app-layout>