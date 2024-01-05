<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Kantin</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('e_admin/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('e_admin/css/style.css')}}">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <style>
        .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #fff;
          animation-delay: 100s;
        }
        .preloader .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          font: 14px arial;
          animation-duration: 4s ;
        }
       body { 
          background: url({{asset('folder_image-login/skate.jpg')}}) no-repeat center center fixed; 
          /* webkit-background-size: cover;
          moz-background-size: cover;
          o-background-size: cover; */
          background-size: cover;
        }
    
        .panel-default {
          opacity: 0.9;
          margin-top:180px;
          background-size: ;
        }
        .field-icon {
        float: right;
        margin-left: -30px;
        margin-right: 10px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
}
    </style>
</head>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                  <br><br>
                  <div class="login-logo">
                    <h1><b style="color: #2FDBBC; ">G</b><b style="color: #d7b145;">-Skate</b></h1>
                  </div>
                  <div>
                    @if (Session::has('notif'))
                    <div class="alert alert-secondary">{{Session::get('notif')}}
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    </div>       
                    @endif
                  </div>
                  <br><br>
                    <form name="formlogin" action="#" method="post" onsubmit="return validateForm();">
                      @csrf
                      @if (Session::has('error'))
                      <div class="alert alert-success">{{Session::get('error')}}</div>   
                      @endif
                      {{-- @if ($message = Session::get('check'))
                      <div class="alert alert-success " role="alert">
                          <strong><p>{{ $message }}</p></strong>
                          <div class="text-end">
                          <button type="button" class="btn-close"  data-dismiss="alert" aria-label="Close"></button>
                          </div>
                      </div>
                      @endif --}}
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" id="password-field">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="checkbox">
                           
                        </div>
                        {{-- <div>
                          <input type="checkbox" name="" id="" onclick="myFunction()"> Show<b class=""></b>
                        </div> --}}
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        {{-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div> --}}
                        <br><br>
                        <div class="register-link m-t-15 text-center">
                            <p>Belum Mempunyai Akun ? Mari Registrasi</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
<script>
       $(document).ready(function(){
          $(".preloader").fadeOut('slow');
        })

        function validateForm()
        {
          if(document.forms["formlogin"]["email"].value == ""){
            alert("Email Tidak Boleh Kosong");
            document.forms["formlogin"]["email"].focus();
            return false;
          }else if(document.forms["formlogin"]["password"].value == ""){
            alert("password Tidak Boleh Kosong");
            document.forms["formlogin"]["password"].focus();
            return false;
          }
        }

            function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }

          $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
          });
</script>
</html>

