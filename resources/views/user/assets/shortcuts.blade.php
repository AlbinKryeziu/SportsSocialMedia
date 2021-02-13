<div class="widget">
    <h4 class="widget-title">Shortcuts</h4>
    <ul class="naves">
        <ul class="followers" style="margin-left: -30px; bottom: 10px;">
            <li>
                <figure><img src="{{ asset('storage/'.auth()->user()->profilePath) }}" alt="" style="height: 40px; width: 100px;" /></figure>
                <div class="friend-meta">
                    <h4><a href="{{ url('/user/photo') }}" title="">{{ auth()->user()->name }}</a></h4>
                </div>
            </li>
        </ul>
        <li>
            <i class="ti-mouse-alt"></i>
            <a href="inbox.html" title="">Inbox</a>
        </li>
        <li>
            <i class="ti-files"></i>
            <a href="fav-page.html" title="">My pages</a>
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
    </ul>
</div>
