<x-app-layout>
    <!-- اینجا همان صفحه کارت ها رو میسازیم. یک سوایپر کارت ها و لینکی به صفحه کل مراحل -->
    <!-- {{$data['level']}}
    {{$data['point']}} -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>laramooz</title>
        <link rel="stylesheet" href="./src/vendor/swiper/cdnjs/swiper-bundle.min.css">
        <link rel="stylesheet" href="./src/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./src/styles/dashboard/swiperstyle.css">
        <link rel="stylesheet" href="./src/vendor/fontawesome/fontawesome6/free/css/fontawesome.min.css">

        <script type="text/javascript" src="./src/vendor/jquery/jquery.js"></script>
        <script>
            $(document).ready(function(){
                var level={{$data['level']}}
                var vip={{$data['vip']}}
                if(vip===1){
                    for(i=0;i<=level;i++){
                    $(".card").eq(i+3).removeClass("locked")
                    }    
                }
                else{
                    var level={{$data['level']}}
                    if(level>=5){
                        alert("برای ادامه مراحل لطفا با اکانت وی آی پی اقدام کنید")
                    }
                    for(i=0;i<=level;i++){
                        if(level<=5){
                            $(".card").eq(i+3).removeClass("locked")
                        }
                    }
                }
            })
        </script>
    </head>
    <body>
    <div class="space" dir="rtl">
        @if(isset($data))
            <p>امتیاز <div class="circle"><h4>{{$data['point']}}</h4></div> </p>
            <p>سطح <div class="circle"><h4>{{$data['level']}}</h4></div> </p>
            @if($data['vip']==1)
                <p class="vip">VIP: activated</p>
            @else
            <a href="/govip" class="vip" target="_blank">purchase VIP</a>
            @endif

        @endif
    </div>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">

                <!-- level stars ------------------------------------ -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',1)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars ------------------------------ -->

                <h1>1</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله یک</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    <a href="{{route('level',1)}}" class="btn btn-primary">مشاهده مطالب</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">

                <!-- level stars ----------------------------------- -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',2)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars ----------------------------- -->

                <h1>2</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله دو</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=1)
                        <a href="{{route('level',2)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">

                <!-- level stars --------------------------------- -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',3)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars -------------------------- -->

                <h1>3</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله سه</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=2)
                        <a href="{{route('level',3)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">

                <!-- level stars ------------------------------ -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',4)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars ---------------------- -->

                <h1>4</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله چهار</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=3)
                        <a href="{{route('level',4)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">
                
                <!-- level stars ---------------------------- -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',5)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars -------------------- -->
                
                <h1>5</h1></div>
                <div class="card-body">
                    <h4 class="card-title">مرحله پنج</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=4)
                        <a href="{{route('level',5)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">
                
                <!-- level stars ---------------------------- -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',6)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars -------------------- -->

                <h1>6</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله شش</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=5)
                        <a href="{{route('level',6)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">
                
                <!-- level stars ---------------------------- -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',7)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars -------------------- -->

                <h1>7</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله هفت</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=6)
                        <a href="{{route('level',7)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">

                <!-- level stars ---------------------------- -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',8)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars -------------------- -->

                <h1>8</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله هشت</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=7)
                        <a href="{{route('level',8)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card locked" style="width: 350px;" dir="rtl">
                <div class="card-img-top">

                <!-- level stars ---------------------------- -->
                <div hidden>{{ $score=Auth::user()->tests()->where('exam_id',9)->select("score")->get() }}</div>
                @if(! $score->isEmpty())
                    <div hidden>{{$starCount=$score[0]["score"]/20}}</div>
                    <div class="star">
                        @for ($i=1; $i<=$starCount; $i++)
                        *
                        @endfor
                    </div>
                @endif
                <!-- end of level stars -------------------- -->

                <h1>9</h1>
                </div>
                <div class="card-body">
                    <h4 class="card-title">مرحله نه</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quis ipsa corporis fugit laborum, quos, reiciendis magni facere numquam.</p>
                    @if(Auth::user()->level>=8)
                        <a href="{{route('level',9)}}" class="btn btn-primary">مشاهده مطالب</a>
                    @endif
                </div>
            </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <script src="./src/vendor/swiper/cdnjs/swiper.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

<!--  -->
        
    </body>
    </html>
    
</x-app-layout>