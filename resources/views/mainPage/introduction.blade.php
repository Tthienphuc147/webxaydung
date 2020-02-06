@extends('masterPage')

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
                <p>Đoạn giới thiệu tóm tắt về sự hình thành của công ty</p>

            </div>
        </div>
        <div class="chose_video_right">
            <div class="chose_video_inner">

               <iframe width="100%" height="600" src="https://www.youtube.com/embed/64c3AOEh8mQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

                <div class="row s_text_inner">
                    <div class="col-md-6">
                        <div class="left_service_desc">
                            <h4 class="project_title">Thông tin chung</h4>

                            <ul>
                                <li> <span>Tên doanh nghiệp:Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech</span> </li>
                                <li> <span>Trụ sở chính:24 Trần Thánh Tông</span> </li>
                                <li><span>VP Đại Diện : 189 Lê ĐÌnh Lý</span></li>
                                <li><span>Ngày Thành Lập 01/10/2018</span></li>

                            </ul>
                        </div>
                
                     
                    </div>
                      <div class="col-md-6">
                       
                        <div class="left_service_desc">
                            <h4 class="project_title">Nghành nghề kinh doanh</h4>

                            <ul>
                                <li> Thiết kế Kiến trúc công trình Dân dụng & Công nghiệp</li>
                                <li> Thiết kế Kết cấu công trình Dân dụng & Công nghiệp.</li>
                                <li> Thiết kế Cơ-Điện công trình Dân dụng & Công nghiệp</li>
                                <li> Thi công công trình Dân dụng & Công nghiệp.</li>

                            </ul>
                        </div>
                     
                    </div>
                  
                </div>
                <section class="our_team_area2">
                    <div class="container">
                        <div class="main_c_b_title">
                            <h2>Cơ cấu<br class="title_br">tổ chức công ty</h2>
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
                                        <h5>Phố giám đốc</h5>
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
                                        <h5>Phòng kế toán\Trưởng phòng</h5>
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
