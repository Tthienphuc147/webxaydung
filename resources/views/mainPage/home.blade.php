@extends('master')

@section('content')
 <!--================Main Slider Area =================-->
@include('layout.slider')

<section class="best_company_area">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="b_companu_l_text">
                    <h4>Dconstech</h4>
                    <h4>Thiết kế và xây dựng Đà Nẵng</h4>
                    <p>CHẤT LƯỢNG LÀM NÊN THƯƠNG HIỆU, UY TÍN TẠO DỰNG THÀNH CÔNG </p>
                    <a class="slider_btn" href="/introduction">CHI TIẾT</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="b_company_image">
                    <img src="{{ asset('/public/img/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Best Company Area =================-->

<!--================Our Service2 Area =================-->
<section class="our_service_area2">
    <div class="container">
        <div class="main_c_b_title">
            <h2>DỊCH VỤ</h2>

        </div>
        <div class="row service2_inner">
            <div class="col-md-6 col-sm-6">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="{{ asset('/public/img/icon/design.png')}}" alt="">
                                <img src="{{ asset('/public/img/icon/design.png')}}" alt="">
                            </div>
                            <h4>TƯ VẤN THIẾT KẾ</h4>
                            <p></p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="service2_item">
                    <div class="service2_item_inner">
                        <div class="service2_item_inner_content">
                            <div class="service_icon">
                                <img src="{{ asset('/public/img/icon/employee.png')}}" alt="">
                                <img src="{{ asset('/public/img/icon/employee.png')}}" alt="">
                            </div>
                            <h4>THI CÔNG</h4>
                            <p></p>
                          
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================End Our Service2 Area =================-->

<!--================Our Project2 Area =================-->
<section class="our_project2_area">
    <div class="container">
        <div class="main_c_b_title">
            <h2>DỰ ÁN</h2>
        </div>

        <div class="row our_project_details">
              @foreach ($project as $item)
            <div class="col-md-4 col-sm-6 building isolation interior">
              
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
<!--================End Our Project2 Area =================-->

<section class="counter_area">
    <div class="container">
        <div class="row counter_inner">
         
            <div class="col-md-6 col-sm-6">
                <div class="counter_item">
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    <h4 class="counter">{{$countProject}}</h4>
                    <h5>Ngôi nhà được xây dựng</h5>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="counter_item">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                    <h4 class="counter">50</h4>
                    <h5>Khách hàng </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Quoto Slider Area =================-->
<section class="testimonials_area">
    <div class="container">
        <div class="row testimonials_inner">
            <div class="col-md-4">
                <div class="main_w_title">
                    <h2>Đánh giá <br class="title_br" />khách hàng</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="testimonials_slider owl-carousel">
                    <div class="item">
                        <div class="testi_left">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#">
                                <h4>Eng. Abul Kalam</h4>
                            </a>
                        </div>
                     
                    </div>
                    <div class="item">
                        <div class="testi_left">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#">
                                <h4>Eng. Abul Kalam</h4>
                            </a>
                        </div>
                       
                    </div>
                    <div class="item">
                        <div class="testi_left">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <a href="#">
                                <h4>Eng. Abul Kalam</h4>
                            </a>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
