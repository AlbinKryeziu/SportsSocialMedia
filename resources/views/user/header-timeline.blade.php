<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Social</title>

        <link rel="stylesheet" href="{{ asset('socail/css/main.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('socail/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('socail/css/color.css') }}" />
        <link rel="stylesheet" href="{{ asset('socail/css/responsive.css') }}" />
    </head>
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
        }
        .modal-confirm {		
            color: #636363;
            width: 400px;
        }
        .modal-confirm .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
            text-align: center;
            font-size: 14px;
        }
        .modal-confirm .modal-header {
            border-bottom: none;   
            position: relative;
        }
        .modal-confirm h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -10px;
        }
        .modal-confirm .close {
            position: absolute;
            top: -5px;
            right: -2px;
        }
        .modal-confirm .modal-body {
            color: #999;
        }
        .modal-confirm .modal-footer {
            border: none;
            text-align: center;		
            border-radius: 5px;
            font-size: 13px;
            padding: 10px 15px 25px;
        }
        .modal-confirm .modal-footer a {
            color: #999;
        }		
        .modal-confirm .icon-box {
            width: 80px;
            height: 80px;
            margin: 0 auto;
            border-radius: 50%;
            z-index: 9;
            text-align: center;
            border: 3px solid #f15e5e;
        }
        .modal-confirm .icon-box i {
            color: #f15e5e;
            font-size: 46px;
            display: inline-block;
            margin-top: 13px;
        }
        .modal-confirm .btn, .modal-confirm .btn:active {
            color: #fff;
            border-radius: 4px;
            background: #60c7c1;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            min-width: 120px;
            border: none;
            min-height: 40px;
            border-radius: 3px;
            margin: 0 5px;
        }
        .modal-confirm .btn-secondary {
            background: #c1c1c1;
        }
        .modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
            background: #a8a8a8;
        }
        .modal-confirm .btn-danger {
            background: #f15e5e;
        }
        .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
            background: #ee3535;
        }
        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }
        </style>
    <body>
        <div class="theme-layout">
            <div class="postoverlay"></div>
            <div class="responsive-header">
                <div class="mh-head first Sticky">
                    <span class="mh-btns-left">
                        <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                    </span>
                    <span class="mh-text">
                        <a href="newsfeed.html" title="">srfgrgs<img src="" alt="" />srgsgsrg</a>
                    </span>

                    <span class="mh-btns-right">
                        <a class="fa fa-sliders" href="#shoppingbag"></a>
                    </span>
                </div>
                <div class="mh-head second">
                    <form class="mh-form">
                        <input placeholder="search" />
                        <a href="#/" class="fa fa-search"></a>
                    </form>
                </div>
                <nav id="menu" class="res-menu">
                    <ul>
                        <li>
                            <span>Home</span>
                            <ul>
                                <li><a href="index.html" title="">Home Social</a></li>
                                <li><a href="index2.html" title="">Home Social 2</a></li>
                                <li><a href="index-company.html" title="">Home Company</a></li>
                                <li><a href="landing.html" title="">Login page</a></li>
                                <li><a href="logout.html" title="">Logout Page</a></li>
                                <li><a href="newsfeed.html" title="">news feed</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <nav id="shoppingbag">
                    <div>
                        <div class="">
                            <form method="post">
                                <div class="setting-row">
                                    <span>use night mode</span>
                                    <input type="checkbox" id="nightmode" />
                                    <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Notifications</span>
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Notification sound</span>
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>My profile</span>
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Show profile</span>
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                            </form>
                            <h4 class="panel-title">Account Setting</h4>
                            <form method="post">
                                <div class="setting-row">
                                    <span>Sub users</span>
                                    <input type="checkbox" id="switch6" />
                                    <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>personal account</span>
                                    <input type="checkbox" id="switch7" />
                                    <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Business account</span>
                                    <input type="checkbox" id="switch8" />
                                    <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Show me online</span>
                                    <input type="checkbox" id="switch9" />
                                    <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Delete history</span>
                                    <input type="checkbox" id="switch10" />
                                    <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                                <div class="setting-row">
                                    <span>Expose author name</span>
                                    <input type="checkbox" id="switch11" />
                                    <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- responsive header -->

            <div class="topbar stick">
                <div class="logo">
                    <a title="" href="newsfeed.html"><img src="{{ asset('images/logo.png') }}" style="width: 145px;" alt="" /></a>
                </div>
                <div class="top-area">
                    <ul class="main-menu">
                        <a href="{{ url('newfeed') }}" title=""><i class="fa fa-home fa-2x" aria-hidden="true"></i> </a>
                    </ul>
                    <ul class="setting-area">
                        <li>
                            <a href="" title="Home" data-ripple=""><i class="ti-search"></i></a>
                            <div class="searched">
                                <form method="post" class="form-search">
                                    <input type="text" placeholder="Search Friend" />
                                    <button data-ripple><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Notification" data-ripple=""> <i class="ti-bell"></i><span>20</span> </a>
                            <div class="dropdowns">
                                <span>4 New Notifications</span>
                                <ul class="drops-menu">
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-1.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>sarah Loren</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag green">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-2.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Jhon doe</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag red">Reply</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-3.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Andrew</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag blue">Unseen</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-4.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Tom cruse</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-5.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Amy</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                </ul>
                                <a href="notifications.html" title="" class="more-mesg">view more</a>
                            </div>
                        </li>
                        <li>
                            <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                            <div class="dropdowns">
                                <span>5 New Messages</span>
                                <ul class="drops-menu">
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-1.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>sarah Loren</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag green">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-2.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Jhon doe</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag red">Reply</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-3.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Andrew</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag blue">Unseen</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-4.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Tom cruse</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                    <li>
                                        <a href="notifications.html" title="">
                                            <img src="images/resources/thumb-5.jpg" alt="" />
                                            <div class="mesg-meta">
                                                <h6>Amy</h6>
                                                <span>Hi, how r u dear ...?</span>
                                                <i>2 min ago</i>
                                            </div>
                                        </a>
                                        <span class="tag">New</span>
                                    </li>
                                </ul>
                                <a href="messages.html" title="" class="more-mesg">view more</a>
                            </div>
                        </li>
                    </ul>

                    <span class="ti-menu main-menu" data-ripple=""></span>
                </div>
            </div>
            <!-- topbar -->
        </div>
    </body>
</html>
