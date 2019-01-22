<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/hou/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/hou/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/hou/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/hou/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/hou/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/hou/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>小MI商城</h1>
                  </div>
                  <p>小米商城Vip 新年版 后台登录  欢迎你</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="/admin/dologin" method="post" class="form-validate">
                  	
                  	@if (session('errors'))
					    <div class="form-control is-invalid" style="width:200px">
					        {{ session('errors') }}
					    </div>
					@endif


                    <div class="form-group">
                      <input id="login-username" type="text" name="uname" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">账号</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">密码</label>
                    </div>
					<div class="form-group">
                      <input id="login-username" type="text" name="vcode" required data-msg="Please enter your password" class="input-material" style="width:200px">
                      <label for="login-username" class="label-material">验证码</label>
                      <img src="/captch" alt="" style='border-radius:5px' onclick='this.src=this.src+="?1"'>

                    </div>
                    {{csrf_field()}}
                    <button class="btn btn-primary">登录</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="#" class="external">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="/hou/vendor/jquery/jquery.min.js"></script>
    <script src="/hou/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/hou/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/hou/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/hou/vendor/chart.js/Chart.min.js"></script>
    <script src="/hou/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="/hou/js/front.js"></script>

    <script>
    	$('.form-control').delay(2000).fadeOut(1500);
    </script>
  </body>
</html>