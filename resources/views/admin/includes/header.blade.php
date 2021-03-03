<!doctype html>
<html lang="en">
<!--<![endif]-->
<head>

<!-- Meta-Information -->
<title>Winku Social Admin Panel Html5</title>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

<!-- Our Website CSS Styles -->
<link rel="stylesheet" href="{{ asset('admin/css/icons.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/main-style.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/color.css') }}">
<link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
</head>
<body class="menu-active">
<div class="panel-layout">
  <div class="top-bar">
    {{-- <div class="logo"> <a href="index.html" title=""><img src="images/logo.png" alt=""></a> </div> --}}
    <div class="menu-options"><span class="menu-action"><i></i></span></div>
    <div class="quick-links">
      <ul>
        <li><a title="" class="show-status"><i class="fa fa-cog"></i></a>
          <div class="noti-lst setting">
            <div class="noti-tp"> <span>profile setting</span> </div>
            <ul>
              <li><a href="" title=""><i class="fa fa-user"></i>your profile</a></li>
              <li><a href="" title=""><i class="fa fa-edit"></i>Edit profile</a></li>
             <li>
            <a class=""
            
            href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"
        >
        {{ __('Logout') }}
        </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                Logout @csrf
            
            
        </form>
        </li>
              
            </ul>
          </div>
        </li>
        <li><a title="" id="toolFullScreen" class=""><i class="fa fa-arrows-alt"></i></a></li>
        <li><a title="" class="refresh-page"><i class="fa fa-refresh"></i></a></li>
        <li><a title="" class="right-menu-btn"><i class="fa fa-align-right"></i></a></li>
      </ul>
    </div>
    <form class="search-form">
      <input type="text" placeholder="Search Here..." />
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <!-- Top Bar -->
  
  <div class="right-menu">
    <div class="admin-area">
      <div class="admin-avatar"> <img src="images/resource/right-menu-admin.jpg" alt=""> </div>
      <div class="admin-info"> <span>welcome</span>
        <h5>Stephen N. Arellano</h5>
      </div>
    </div>
    <ul class="admin-menu">
      <li><a href="#" title=""><i><img src="images/icon-4.png" alt=""></i>Dashboard</a></li>
      <li><a href="#" title=""><i><img src="images/icon-5.png" alt=""></i>User Men</a></li>
      <li><a href="#" title=""><i><img src="images/icon-6.png" alt=""></i>mailbox <span>05</span></a></li>
      <li><a href="#" title=""><i><img src="images/icon-7.png" alt=""></i>forms</a></li>
      <li><a href="#" title=""><i><img src="images/icon-8.png" alt=""></i>tables</a></li>
      <li><a href="#" title=""><i><img src="images/icon-9.png" alt=""></i>maps</a></li>
    </ul>
  </div>
  <!-- right menu -->
  
  <header class="side-header opened-menu">
    <div class="admin-details"> <span><img src="images/resource/admin.jpg" alt="" /></span>
      <h3>{{ auth()->user()->name }}</h3>
      <i>CEO Sport social media</i>
      <h5 class="admin-status online">Online</h5>
    </div>
    <div class="menu-scroll">
      <div class="side-menus"> <span>MAIN LINKS</span>
        <nav>
          <ul>
            <li><a href="index.html" title=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="menu-item-has-children"><a href="#" title=""><i class="fa fa-user"></i> User mangement</a>
              <ul>
                <li><a href="{{ url('/admin/user/all') }}" title=""><i class="fa fa-inbox"></i> User</a></li>
                <li><a href="image-croper-panel.html" title=""><i class="fa fa-inbox"></i>Blocked users</a></li> 
              </ul>
            </li>
            <li><a href="location-management.html" title=""><i class="fa fa-newspaper-o"></i>Blog</a></li>
            <li><a href="posting-panel-editable.html" title=""><i class="fa fa-envelope"></i>Email</a></li>
            <li><a href="post-preview-page.html" title=""><i class="fa fa-glass"></i>ADS mangement</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Menu Scroll --> 
  </header>