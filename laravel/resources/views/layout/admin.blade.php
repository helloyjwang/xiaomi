<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
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
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>小米商城 </span><strong>  Vip.新年版</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="/hou/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="/hou/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="/hou/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle">设置</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 修改密码 </a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 修改头像 </a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="/logout" class="nav-link logout"> <span class="d-none d-sm-inline">退出登录</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        @php
          $data = DB::table('user')->where('id',session('uid'))->first();
        @endphp

        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="/hou/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">hello ,{{$data->uname}}</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <ul class="list-unstyled">
                    <li><a href="#friend" data-toggle="collapse"> <i class="icon-interface-windows"></i>友情链接管理</a>
                      <ul id="friend" class="collapse list-unstyled ">
                        <li><a href="/admin/friend/create">友情链接添加</a></li>
                        <li><a href="/admin/friend">友情链接浏览</a></li>
                      </ul>
                    </li>
                    <li><a href="#partition" data-toggle="collapse"> <i class="icon-interface-windows"></i>分区管理</a>
                      <ul id="partition" class="collapse list-unstyled ">
                        <li><a href="/admin/partition/create">分区添加</a></li>
                        <li><a href="/admin/partition">分区浏览</a></li>
                      </ul>
                    </li>
                    <li><a href="#type" data-toggle="collapse"> <i class="icon-interface-windows"></i>类别管理</a>
                      <ul id="type" class="collapse list-unstyled ">
                        <li><a href="/admin/type/create">类别添加</a></li>
                        <li><a href="/admin/type">类别浏览</a></li>
                      </ul>
                    </li>
                    <li><a href="#goods" data-toggle="collapse"> <i class="icon-interface-windows"></i>商品管理</a>
                      <ul id="goods" class="collapse list-unstyled ">
                        <li><a href="/admin/goods/create">商品添加</a></li>
                        <li><a href="/admin/goods">商品浏览</a></li>
                      </ul>
                    </li>
                    <li><a href="#rotation" data-toggle="collapse"> <i class="icon-interface-windows"></i>轮播图管理</a>
                      <ul id="rotation" class="collapse list-unstyled ">
                        <li><a href="/admin/rotation/create">轮播图添加</a></li>
                        <li><a href="/admin/rotation">轮播图浏览</a></li>
                      </ul>
                    </li>
                    <li><a href="/configuration"> <i class="icon-interface-windows"></i> 网站配置 </a></li>
                    <li><a href="/login"> <i class="icon-interface-windows"></i> login </a></li>
          </ul>

        </nav>
        @section('content')
        
        @show
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="/hou/vendor/jquery/jquery.min.js"></script>
    <script src="/hou/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/hou/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/hou/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/hou/vendor/chart.js/Chart.min.js"></script>
    <script src="/hou/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/hou/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="/hou/js/front.js"></script>
  </body>
</html>
