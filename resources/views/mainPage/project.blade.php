@extends('masterPage')

@section('content')
     <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>{{$project->name_project}}</h4>

            </div>
        </div>
    </section>


    <section class="project_single_area">
        <div class="container">
            <div class="project_single_inner">
                <section class="main_slider_area slider_2">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
        <ul>
              @foreach ($slideImage as $item)
            <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="/public/image/building/{{$item->image_url}}
                data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="/public/image/building/{{$item->image_url}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="{{$slideCount}}" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

            </li>
            @endforeach
        
        </ul>
    </div>
</section>
                <div class="row">

                    <div class="project_summery">
                        <h4 class="project_title">Tổng quan dự án</h4>
                        <p>{{$project->desciption}}</p>
                        <ul>
                             <li><a href="#">Chủ đầu từ: <span>{{$project->investor}}</span> </a></li>
                            <li><a href="#">Tên khách hàng : <span>{{$project->customer_name}}</span> </a></li>
                            <li><a href="#">Loại dự án: <span>{{$project->name}}</span></a></li>
                            <li><a href="#">Diện tích khu đất: <span>{{$project->land_area}} m2</span></a></li>
                            <li><a href="#">Diện tích xây dựng: <span>{{$project->building_area}} m2</span></a></li>
                            <li><a href="#">Tiến độ thi công: <span>{{$project->construction_progress}} ngày</span></a></li>
                            <li><a href="#">Tổng kinh phí: <span>{{$project->total_amount}} VNĐ</span></a></li>

                        </ul>
                    </div>
                    <div class="project_quote">
                        <h4 class="project_title">Đánh giá khách hàng</h4>
                        <div class="quote_inner">
                            <p>Đây sẽ hiển hiện những đánh giá của khách hàng về dự án </p>

                        </div>
                    </div>




                </div>
            </div>
        </div>
        </div>
    </section>
    <!--================End Project Single Area =================-->

    <!--================Our Latest Project Area =================-->

      <section class="our_latest_project">
        <div class="container">
            <h3 class="out_title">Các dự án</h3>
            <div class="our_latest_slider owl-carousel">
                   @foreach ($projectCategory as $item)
                <div class="item">
                    <div class="project_item">
                        <img src="/public/image/project/{{ $item->image}}" alt="">
                        <div class="project_hover">
                            <div class="project_hover_inner">
                                <div class="project_hover_content">
                                    <a href="/project/{{ $item->id}}">
                                        <h4>{{$item->name}}</h4>
                                    </a>
                                    <p>{{$item->description}}</p>
                                    <a class="view_btn" href="/project/{{ $item->id}}">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
          

            </div>
        </div>
    </section>


@endsection
