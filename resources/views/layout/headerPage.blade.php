<header class="main_header_area ">
        <div class="header_top_area">
            <div class="container">
                <div class="pull-left">
               <marquee direction="right" style="color:transparent">CHÀO MỪNG BẠN ĐẾN VỚI CTY TNHH TƯ VẤN XD&TM DCONSTECH</marquee>
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
                        <div class="logo-content">
                            <a class="navbar-brand" href="/"><img src="{{ asset('/public/img/logo.png')}}" alt="" class="logo"><img src="{{ asset('/public/img/logo.png')}}" alt="" class="logo"></a>
                        <div class="logo-description">
                            <p style="color:#000">Công Ty TNHH Tư Vấn Xây Dựng</p>
                            <p style="color:#000">Thương Mại Dconstech</p>
                        </div>
                        </div>
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
                                    <li><a href="/phongthuy/huongnha">XEM HƯỚNG NHÀ THEO TUỔI</a></li>
                                    <li><a href="/phongthuy/thuocloban">THƯỚC LỖ BAN</a></li>


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
