<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description"
		content="Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech." />
	<meta name="keywords" content="Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech" />
    <meta name="abstract" content="Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech" />
    <meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech" />
	<meta property="og:description"
		content="Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech" />
	<meta property="og:site_name" content="Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech" />
	<meta property='og:image' content=''>
    <meta name="distribution" content="Global" />

	<meta name="REVISIT-AFTER" content="1 DAYS" />
	<meta name="RATING" content="GENERAL" />

    <link rel="icon" href="{{ asset('/public/img/logo.png')}}" type="image/x-icon" />

    <title>Dconstech-Thiết Kế và xây dựng Đà Nẵng</title>

    <!-- Icon css link -->
    <link href="{{ asset('/public/css/font-awesome.min.css')}}"rel="stylesheet">
    <link href="{{ asset('/public/css/materialdesignicons.min.css')}}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('/public/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{ asset('/public/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{ asset('/public/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/css/responsive.css')}}" rel="stylesheet">


</head>

<body>

    @include('layout.header')
    @yield('content')

    @include('layout.footer')











    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/public/js/jquery-2.2.4.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/public/js/bootstrap.min.js')}}"></script>
    <!-- Rev slider js -->
    <script src="{{ asset('/public/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>

    <script src="{{ asset('/public/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/counterup/waypoints.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('/public/vendors/flex-slider/jquery.flexslider-min.js')}}"></script>


    <script src="{{ asset('/public/js/theme.js')}}"></script>
</body>

</html>
