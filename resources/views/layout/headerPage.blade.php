<header class="main_header_area ">
        <div class="header_top_area">
            <div class="container">
                <div class="pull-left">
                    <a href="#"><i class="fa fa-phone"></i>(012) - 3456789</a>
                    <a href="#"><i class="fa fa-map-marker"></i>Đà Nẵng</a>
                    <a href="#"><i class="mdi mdi-clock"></i>08 AM - 10 PM</a>
                </div>
                <div class="pull-right">
                    <ul class="header_social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        <a class="navbar-brand" href="/"><img src="{{ asset('/public/img/logo.png')}}" alt=""><img src="{{ asset('/public/img/logo.png')}}" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/introduction">GIỚI THIỆU</a></li>
                             <li class="dropdown submenu ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DỰ ÁN</a>
                            <ul class="dropdown-menu">
                                @foreach ($projectCategoryMenu as $item)
                            <li><a href="/categoryProject/{{$item->id}}" class="text-uppercase">{{$item->name}}</a></li>
                                @endforeach
                            
                              
                            </ul>
                        </li>
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DỊCH VỤ</a>
                                <ul class="dropdown-menu">
                                       @foreach ($serviceCategoryMenu as $item)
                                     <li><a href="/serviceCategory/{{$item->id}}">{{$item->name}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHONG THỦY</a>
                                <ul class="dropdown-menu">
                                    <li><a href="">XEM HƯỚNG NHÀ THEO TUỔI</a></li>
                                    <li><a href="/phongthuy/thuocloban">THƯỚC LỖ BAN</a></li>
                              

                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BẢNG GIÁ</a>
                                <ul class="dropdown-menu">
                                       @foreach ($pricingCategoryMenu as $item)
                                      <li><a href="/pricing/{{$item->id}}">{{$item->name_pricing_category}}</a></li>
                                @endforeach


                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TƯ VẤN</a>
                                <ul class="dropdown-menu">
                                    @foreach ($advisoryCategoryMenu as $item)
                                    <li><a href="/advisoryCategory/{{$item->id}}">{{$item->name}}</a></li>
                                @endforeach
                                </ul>
                            </li>

                            <li><a href="/contactView">LIÊN HỆ</a></li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </header>