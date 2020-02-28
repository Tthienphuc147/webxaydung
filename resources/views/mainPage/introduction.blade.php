@extends('masterPage')
@section('title')
Giới thiệu
@endsection
@section('content')

    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4><a href="/">Trang chủ</a> / <a href="/introduction">Giới thiệu</a></h4>

            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Why Chose Us Area =================-->
    <section class="chose_video_area">
        <div class="chose_left_text">
            <div class="chose_text_inner">
                <div class="main_b_title">
                    <h2>Lịch sử hình thành</h2>

                </div>
               <div >
                     {!!$data->history!!}
               </div>
            </div>
        </div>
        <div class="chose_video_right">
            <div class="chose_video_inner">

               <iframe width="100%" height="600" src="https://www.youtube.com/embed/64c3AOEh8mQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen allow='autoplay'></iframe>
            </div>
        </div>
    </section>
    <!--================End Why Chose Us Area =================-->

    <!--================Others Service Area =================-->
    <!--================End Others Service Area =================-->

    <!--================Service Single Area =================-->
    <section class="service_single_area">
        <div class="container">
            <div class="service_single_inner">

                <section class="our_team_area2">
                    <div class="container">
                        <div class="main_c_b_title">
                            <h2>thông tin chung</h2>
                        </div>
                        <div class="introduce--info"  >
            
                     {!!$data->information!!}
                        
                        </div>

                    </div>
                </section>
                <br>
                <br>
                <section class="our_team_area2">
                    <div class="container">
                        <div class="main_c_b_title">
                            <h2>Nghành nghề kinh doanh</h2>
                        </div>
                        <div  class="introduce--info introduce--service"  >
            
                        {!!$data->service!!}
                        
                        </div>

                    </div>
                </section>
                <br>
                <br>
                <section class="our_team_area2">
                    <div class="container">
                        <div class="main_c_b_title">
                            <h2>Cơ cấu<br class="title_br">tổ chức công ty</h2>
                        </div>
                        <div class="introduce--info introduce--service">
                            
                        </div>
                </section>
              
            </div>
        </div>
    </section>
@endsection
