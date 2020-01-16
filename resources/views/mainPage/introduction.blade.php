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

                <iframe width="100%" height="629" src="https://www.youtube.com/embed/_hT_cyPTYXI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

                <!-- <div class="row s_text_inner">

                    <div class="left_service_desc">
                        <h3 class="out_title">Thông tin chung</h3>
                        <div class="desc">
                            <h4>1.Tên doanh nghiệp

                            </h4>
                            <p>Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech</p>
                        </div>
                        <div class="desc">
                            <h4>2.Trụ sở chính</h4>
                            <p>Đà Nẵng</p>
                        </div>
                        <div class="desc">
                            <h4>3.MST </h4>
                        </div>
                        <div class="desc">
                            <h4>4.Ngành nghề kinh doanh</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque enim provident alias veniam commodi, quae adipisci itaque repudiandae quos ipsa quo quam est vero architecto deleniti earum expedita in?</p>
                        </div>
                        <div class="desc">
                            <h4>5.Định hướng phát triển:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque enim provident alias veniam commodi, quae adipisci itaque repudiandae quos ipsa quo quam est vero architecto deleniti earum expedita in?</p>
                        </div>
                        <div class="desc">
                            <h4>6.Tiêu chí thiết kế:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque enim provident alias veniam commodi, quae adipisci itaque repudiandae quos ipsa quo quam est vero architecto deleniti earum expedita in?</p>
                        </div>
                        <div class="desc">
                            <h4>7.Tầm nhìn:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque enim provident alias veniam commodi, quae adipisci itaque repudiandae quos ipsa quo quam est vero architecto deleniti earum expedita in?</p>
                        </div>
                        <div class="desc">
                            <h4>8.Sứ mệnh:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque enim provident alias veniam commodi, quae adipisci itaque repudiandae quos ipsa quo quam est vero architecto deleniti earum expedita in?</p>
                        </div>
                        <div class="desc">
                            <h4>9.Giá trị côt lõi:</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque enim provident alias veniam commodi, quae adipisci itaque repudiandae quos ipsa quo quam est vero architecto deleniti earum expedita in?</p>
                        </div>
                    </div>


                </div> -->
                <div class="row s_text_inner">
                    <div class="col-md-6">
                        <div class="left_service_desc">
                            <h4 class="project_title">Thông tin chung</h4>

                            <ul>
                                <li> <span>Tên doanh nghiệp:</span> </li>
                                <li> <span>Trụ sở chính:</span> </li>
                                <li><span>MST:</span> </li>

                            </ul>
                        </div>
                        <div class="left_service_desc">
                            <h4 class="project_title">Nghành nghề kinh doanh</h4>

                            <ul>
                                <li> Thiết kế Kiến trúc công trình Dân dụng & Công nghiệp</li>
                                <li> Thiết kế Kết cấu công trình Dân dụng & Công nghiệp.</li>
                                <li> Thiết kế Cơ-Điện công trình Dân dụng & Công nghiệp</li>
                                <li> Thi công công trình Dân dụng & Công nghiệp.</li>

                            </ul>
                        </div>
                        <div class="left_service_desc">
                            <h4 class="project_title">Định hướng phát triển</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus ea harum nesciunt adipisci? Ipsa tempora reiciendis quibusdam perferendis consectetur aut sapiente quo voluptatibus ducimus aliquam, rem deserunt autem possimus
                                ratione.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="left_service_desc">
                            <h4 class="project_title">Tiêu chí thiết kế</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus ea harum nesciunt adipisci? Ipsa tempora reiciendis quibusdam perferendis consectetur aut sapiente quo voluptatibus ducimus aliquam, rem deserunt autem possimus
                                ratione.
                            </p>
                        </div>
                        <div class="left_service_desc">
                            <h4 class="project_title">Tầm nhìn</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus ea harum nesciunt adipisci? Ipsa tempora reiciendis quibusdam perferendis consectetur aut sapiente quo voluptatibus ducimus aliquam, rem deserunt autem possimus
                                ratione.
                            </p>
                        </div>
                        <div class="left_service_desc">
                            <h4 class="project_title">Sứ mệnh</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus ea harum nesciunt adipisci? Ipsa tempora reiciendis quibusdam perferendis consectetur aut sapiente quo voluptatibus ducimus aliquam, rem deserunt autem possimus
                                ratione.
                            </p>
                        </div>


                    </div>
                </div>
                <section class="our_team_area2">
                    <div class="container">
                        <div class="main_c_b_title">
                            <h2>Đội ngũ<br class="title_br">nhân sự</h2>
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
                                        <h5>Chức vụ</h5>
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
                                        <h5>Chức vụ</h5>
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
                                        <h5>Chức vụ</h5>
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
                                            <h4>Mr D</h4>
                                        </a>
                                        <h5>Chức vụ</h5>
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
