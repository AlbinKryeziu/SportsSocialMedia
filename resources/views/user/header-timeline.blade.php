<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <title>Sports</title>
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />

        <link rel="stylesheet" href="{{ asset('socail/css/main.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('socail/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('socail/css/color.css') }}" />
        <link rel="stylesheet" href="{{ asset('socail/css/responsive.css') }}" />
    </head>
   
    <body>
        <div class="theme-layout">
            <div class="postoverlay"></div>
            <div class="responsive-header">
                <div class="mh-head first Sticky">
                    <span class="mh-btns-left">
                        <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                    </span>
                    <span class="mh-text">
                        <a href="newsfeed.html" title=""><img src="" alt="" /></a>
                    </span>

                    <span class="mh-btns-right">
                        <a class="fa fa-sliders" href="#shoppingbag"></a>
                    </span>
                </div>
                <nav id="menu" class="res-menu">
                    <ul>
                        <li>
                            <a href="{{ url('newfeed') }}" title=""><i class="fa fa-home fa-2x" aria-hidden="true"></i> </a>
                            <ul></ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="topbar stick">
                <div class="logo">
                    <a title="" href=""><img src="{{ asset('images/logo/final-logo.png') }}" style="height:60px;" alt="" /></a>
                </div>
                <div class="top-area">
                    <ul class="setting-area">
                        <li>
                            <a href="" title="Home" data-ripple=""><i class="ti-search"></i></a>
                            <div class="searched">
                                <form class="form-search">
                                    @csrf
                                    <input type="text" placeholder="Search Friend" name="q" />
                                    <button data-ripple><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="{{ url('newfeed') }}" title=""><i class="ti-home" aria-hidden="true"></i> </a>
                        </li>
                        <li>
                            <a href="#" title="Notification" data-ripple=""> <i class="ti-bell"></i><span>20</span> </a>
                            <div class="dropdowns">
                                <span>4 New Notifications</span>
                                <ul class="drops-menu"></ul>
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
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- topbar -->
        </div>

