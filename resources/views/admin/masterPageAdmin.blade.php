<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DCONSTECH-DASHBOARD</title>
  <link rel="icon" href="{{ asset('/public/img/logo.png')}}" type="image/x-icon" />

     <link href="{{ asset('/public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('/public/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
       <link href="{{ asset('/public/assets/libs/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('/public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}" rel="stylesheet">
            <link href="{{ asset('/public/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/animate-css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('/public/vendors/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    
</head>

<body>
<div class="dashboard-main-wrapper">
    @include('admin.layout.header')
     @include('admin.layout.sidebar')
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            @yield('content')
                    </div>
                </div>
            </div>

        </div>
</div>











   <script src="{{ asset('/public/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/public/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('/public/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('/public/assets/libs/js/main-js.js')}}"></script>

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
