<header>
  <style>.navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top:-6px;
}

/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
} 
</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('images/logo/final-logo.png') }}" alt="" width="60px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about-us')}}">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/how-it-works')}}">HOW IT WORKS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact')}}">CONTACT US</a>
        </li>
        
      <li class="nav-item">
        <a class="nav-link" href=""> </a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            SPORTS
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/football')}}">Football</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/basketballapi')}}">Basketball</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/baseballapi')}}">Baseball</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/soccer')}}">Soccer</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/tennis')}}">Tennis</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/hockey')}}">Hockey</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/boxing')}}">Boxing</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/table-tennis')}}">Table Tennis</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/rugby')}}">Rugby</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/cycling')}}">Cycling</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/motorsport')}}">MotorSport</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/golf')}}">Golf</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/snooker')}}">Snooker</a></button>
        
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href=""> </a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            PAGES
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/blog')}}">Blog</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/ads')}}">ADS</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/evnts')}}">Sport events</a></button>
            
          </div>
        </div>
      </li>
      @if(Auth::check())
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> COLLEGES </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ url('/coaches')}}">Coaches</a></li>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle">Colleges</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/colleges')}}">Colleges</a></li>
                    <li><a class="dropdown-item" href="{{ url('/football/colleges') }}">Football College</a></li>
                    <li><a class="dropdown-item" href="#">Soccer College</a></li>
                    <li><a class="dropdown-item" href="{{ url('/collges/basketball') }}">BasketBall College</a></li>
                    {{-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 1</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                            <li><a class="dropdown-item" href="#">Subsubmenu1</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                            <li><a class="dropdown-item" href="#">Subsubmenu2</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </li>
        </ul>
    </li>
     
   
   
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            FITNESS
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/healthy')}}">Healthy</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/tips')}}">Tips</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/exercises')}}">Exercises</a></button>
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('newfeed')}}">Social Media</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard')}}">LOG IN</a>
      </li>
      </ul>
      <form class="form-inline my-5 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

 
    
   
   
</header>


