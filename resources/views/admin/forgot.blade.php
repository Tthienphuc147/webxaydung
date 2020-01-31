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
    
</head>

<body>
<div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><img class="logo-img" src="{{ asset('/public/img/logo.png')}}" alt="logo"></div>
            <div class="card-body">
                <form action="/forgot"  method="POST">
                      {{csrf_field()}}
                      <input type="email" name="email" id="email">
                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Gửi email</button>
                </form>
            </div>
         
        </div>
    </div>











   <script src="{{ asset('/public/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/public/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('/public/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('/public/assets/libs/js/main-js.js')}}"></script>

</body>

</html>
