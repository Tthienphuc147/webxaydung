@extends('masterPage')
@section('title')
Tư vấn
@endsection
@section('content')
   <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>{{$advisoryName}}</h4>

            </div>
        </div>
    </section>



    <!--================End Project Single Area =================-->
    <section class="latest_news_area">
        <div class="container">

            <div class="row latest_news_inner">
                @foreach ($advisory as $item)
                      <div class="col-md-4 col-sm-6">
                    <div class="latest_news_item">
                        <div class="news_image">
                            <img src="/public/image/advisory/{{$item->image}}" alt="">
                            <div class="l_date">
                                <h5>{{Carbon\Carbon::createFromFormat('Y-m-d', $item->date)->day}}</h5>
                                <h6>Tháng {{Carbon\Carbon::createFromFormat('Y-m-d', $item->date)->month}}</h6>
                            </div>
                        </div>
                        <div class="news_content">
                            <a href="/advisory/{{$item->id}}">
                                <h4>{{$item->name_post}}</h4>
                            </a>

                            <p>{{$item->description}}</p>
                            <div class="pull-left">
                                <h6>Đăng bởi <a href="#">Dconstech</a></h6>
                            </div>
                            <div class="pull-right">
                                <a href="/advisory/{{$item->id}}">Xem chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              
              




            </div>
        </div>
    </section>
    <!--================Our Latest Project Area =================-->

@endsection
