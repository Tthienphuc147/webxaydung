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
            <div class="card-header text-center"><a href="#"><img class="logo-img logo" src="{{ asset('/public/img/logo.png')}}" alt="logo" width="50rem"></div>
            <div class="card-body">
                <form action="/showlogin/login"  method="POST">
                      {{csrf_field()}}
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Tài khoản" autocomplete="off" name="username">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Mật khẩu" name="passlogin">
                    </div>
                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="/forgot_password" class="footer-link">Quên mật khẩu</a>
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
