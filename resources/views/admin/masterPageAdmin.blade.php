<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DCONSTECH-DASHBOARD</title>

     <link href="{{ asset('/public/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('/public/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
       <link href="{{ asset('/public/assets/libs/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('/public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}" rel="stylesheet">
    
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

</body>

</html>
