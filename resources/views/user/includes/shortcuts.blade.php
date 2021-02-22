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
            <a href="" title="">Inbox</a>
        </li>
        <li>
            <i class="ti-user"></i>
            <a href="" title="">friends</a>
        </li>
        <li>
            <i class="ti-image"></i>
            <a href="" title="">images</a>
        </li>
        <li>
            <i class="ti-video-camera"></i>
            <a href="" title="">videos</a>
        </li>
        <li>
            <i class="ti-comments-smiley"></i>
            <a href="" title="">Messages</a>
        </li>
        <li>
            <i class="ti-bell"></i>
            <a href="" title="">Notifications</a>
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
                Logout @csrf
            
            
        </form>
        
    </ul>
</div>
