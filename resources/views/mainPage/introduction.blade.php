@extends('masterPage')
@section('title')
Giới thiệu
@endsection
@section('content')

    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area" style="background: url(../public/img/bgg.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>Giới thiệu</h4>

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
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, nisi rerum necessitatibus vero commodi voluptatem nihil omnis corrupti similique. Officia sunt ex placeat libero nisi nemo laudantium autem reprehenderit ab.
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reprehenderit reiciendis, cumque velit repudiandae officia aperiam ab culpa commodi ratione cum consequatur amet accusantium minima quod, voluptatibus ducimus dicta sequi.</p>

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
                        <div  style="display:flex;justify-content:center">
            
                        <ul class="introduce--info " >
                                <li class="row"> <span class="col-4">Tên doanh nghiệp:</span><span class="col-8"> Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech</span> </li>
                                <li class="row"> <span class="col-4">Trụ sở chính:</span><span class="col-8"> 24 Trần Thánh Tông</span> </li>
                                <li class="row"><span class="col-4">VP Đại Diện:</span><span class="col-8"> 189 Lê Đình Lý</span></li>
                                <li class="row"><span class="col-4">Ngày Thành Lập:</span><span class="col-8"> 01/10/2018</span></li>

                            </ul>
                        
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
                        <div  style="display:flex;justify-content:center">
            
                        <ul class="introduce--info ">
                                <li class="row"> Thiết kế Kiến trúc công trình Dân dụng & Công nghiệp</li>
                                <li class="row"> Thiết kế Kết cấu công trình Dân dụng & Công nghiệp.</li>
                                <li class="row"> Thiết kế Cơ-Điện công trình Dân dụng & Công nghiệp</li>
                                <li class="row"> Thi công công trình Dân dụng & Công nghiệp.</li>

                            </ul>
                        
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
                        <div class="team_slider owl-carousel" style="display:flex;justify-content:center">
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr A</h4>
                                        </a>
                                        <h5>Giám đốc</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr B</h4>
                                        </a>
                                        <h5>Phó giám đốc</h5>
                                    </div>
                                </div>
                            </div>
                        
                        
                        </div>
                        <br>
                        <br>
                        <div class="main_c_b_title mt-2">
                            <h2>Phòng Kế Toán</h2>
                        </div>
                        <div class="team_slider owl-carousel">
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr A</h4>
                                        </a>
                                        <h5>Trưởng phòng</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr B</h4>
                                        </a>
                                        <h5>Phó phòng</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr C</h4>
                                        </a>
                                        <h5>Công nhân</h5>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <br>
                        <br>
                           <div class="main_c_b_title mt-2">
                            <h2>Phòng Kỹ Thuật</h2>
                        </div>
                        <div class="team_slider owl-carousel">
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr A</h4>
                                        </a>
                                        <h5>Trưởng phòng</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr B</h4>
                                        </a>
                                        <h5>Phó phòng</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr C</h4>
                                        </a>
                                        <h5>Kỹ thuật hiện trường</h5>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <br>
                        <br>
                           <div class="main_c_b_title mt-2">
                            <h2>Phòng Kho Bãi<br class="title_br">Vật tư</h2>
                        </div>
                        <div class="team_slider owl-carousel">
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr A</h4>
                                        </a>
                                        <h5>Trưởng phòng</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr B</h4>
                                        </a>
                                        <h5>Phó phòng</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team_item">
                                    <div class="team_image">
                                        <img src="{{ asset('/public/img/account.png')}}" alt="">

                                    </div>
                                    <div class="member_name">
                                        <a href="#">
                                            <h4>Mr C</h4>
                                        </a>
                                        <h5>Bảo vệ</h5>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </section>
              
            </div>
        </div>
    </section>
@endsection
