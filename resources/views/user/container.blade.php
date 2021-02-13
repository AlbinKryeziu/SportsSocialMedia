
@include('user/header-timeline')
<section>
    <div class="feature-photo">
        <figure><img src="{{ asset('storage/'.auth()->user()->profilePath) }}" alt=""></figure>
        <div class="add-btn">
            <span>1205 followers</span>
            <a href="#" title="" data-ripple="">Add Friend</a>
        </div>
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
            <input type="file" id="file"/>
            </label>
        </form>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img id="profile-pic" src="{{ asset('storage/'.auth()->user()->profilePath) }}" style="height: 200px; width: 200px;" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    <input type="file" name="image" id="profile"/>
                                </label>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                              <h5>{{ auth()->user()->name }}</h5>
                              <span></span>
                            </li>
                            <li>
                                <a class="active" href="{{ url('/user/photo') }}" title="" data-ripple="">time line</a>
                                <a class="" href="{{ url('/photos/me ') }}" title="" data-ripple="" >Photos</a>
                                <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                <a class="" href="{{ url('/friends') }}" title="" data-ripple="">Friends</a>
                                <a class="" href="{{ url('/aboutUs') }}" title="" data-ripple="">about</a>
                                <a class="" href="#" title="" data-ripple="">more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                        <h4 class="widget-title">Socials</h4>
                                        <ul class="socials">
                                            <li class="facebook">
                                                <a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
                                            </li>
                                            <li class="twitter">
                                                <a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
                                            </li>
                                            <li class="google">
                                                <a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
                                            </li>
                                        </ul>
                                    </div>
                        
                                <div class="widget">
                                    <h4 class="widget-title">Shortcuts</h4>
                                    <ul class="naves">
                                        <li>
                                            <i class="ti-clipboard"></i>
                                            <a href="newsfeed.html" title="">News feed</a>
                                        </li>
                                        <li>
                                            <i class="ti-mouse-alt"></i>
                                            <a href="inbox.html" title="">Inbox</a>
                                        </li>
                                        
                                        <li>
                                            <i class="ti-user"></i>
                                            <a href="timeline-friends.html" title="">friends</a>
                                        </li>
                                        <li>
                                            <i class="ti-image"></i>
                                            <a href="timeline-photos.html" title="">images</a>
                                        </li>
                                        <li>
                                            <i class="ti-video-camera"></i>
                                            <a href="timeline-videos.html" title="">videos</a>
                                        </li>
                                        <li>
                                            <i class="ti-comments-smiley"></i>
                                            <a href="messages.html" title="">Messages</a>
                                        </li>
                                        <li>
                                            <i class="ti-bell"></i>
                                            <a href="notifications.html" title="">Notifications</a>
                                        </li>
                                       
                                        
                                        <li>
                                            <i class="ti-power-off"></i>
                                            <a href="landing.html" title="">Logout</a>
                                        </li>
                                        <li>
                                            <a class="ti-power-off"
                                            
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();"
                                        >
                                        {{ __('Logout') }}
                                        </a>
                                            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                logaut @csrf
                                            
                                            
                                        </form>
                                        </li>
                                    </ul>
                                </div><!-- Sh