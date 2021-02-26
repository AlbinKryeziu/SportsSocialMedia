<div class="widget">
    <h4 class="widget-title">Shortcuts</h4>
    <ul class="naves">
        <ul class="followers" style="margin-left: -30px; bottom: 10px;">
            <li>
                <figure><img src="{{ asset('store/'.auth()->user()->profilePath) }}" alt="" style="height: 40px; width: 40px; object-fit:cover;" /></figure>
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
            <a href="{{ url('/friends') }}" title="">Followers</a>
        </li>
        <li>
            <i class="ti-image"></i>
            <a href="{{ url('/photos/me') }}" title="">Images</a>
        </li>
        <li>
            <i class="ti-comments-smiley"></i>
            <a href="{{ url('newfeed/hide/post') }}" title="">Hidden Posts</a>
        </li>
        <li>
            <i class="ti-video-camera"></i>
            <a href="" title="">Videos</a>
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
