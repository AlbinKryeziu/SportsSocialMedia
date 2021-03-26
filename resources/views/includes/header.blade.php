<header>
  <style>
      .navbar-nav li:hover > ul.dropdown-menu {
          display: block;
      }
      .dropdown-submenu {
          position: relative;
      }
      .dropdown-submenu > .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -6px;
      }

      /* rotate caret on hover */
      .dropdown-menu > li > a:hover:after {
          text-decoration: underline;
          transform: rotate(-90deg);
      }
  </style>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="{{ asset('images/logo/final-logo.png') }}" alt="" width="60px" />

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="{{ URL('/') }}">HOME</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/about-us')}}">ABOUT US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact')}}">CONTACT US</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/blog')}}">BLOG</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{  url('/evnts')}}">EVENTS</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/ads')}}">APPLY FOR ADS</a>
              </li>

              <li class="nav-item">
                  <div class="dropdown">
                      <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgba(0, 0, 0, 0.5);">
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
                  <div class="dropdown">
                      <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgba(0, 0, 0, 0.5);">
                          COLLEGES
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/information/colleges')}}">Information</a></button>
                          <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/colleges')}}">Colleges</a></button>
                          <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/football/colleges')}}">Football College</a></button>
                          <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/colleges/soccer')}}">Soccer College</a></button>
                          <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/colleges/basketball')}}">BasketBall College</a></button>
                          <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/colleges/America')}}">Colleges in America</a></button>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                      <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgba(0, 0, 0, 0.5);">
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
                  <a class="nav-link" href="{{ url('/how-it-works')}}">HOW IT WORKS</a>
              </li>
          </ul>
          <span class="navbar-text">
              <ul class="navbar-nav mr-auto">
                  @if(!Auth::check())

                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('register')}}">REGISTER </a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('login')}}">LOGIN </a>
                  </li>
                  @endif @if(Auth::check())

                  <li class="nav-item active">
                      <a class="nav-link" href="{{ url('newfeed')}}">SOCIAL MEDIA </a>
                  </li>
                  @endif

                  <ul></ul>
              </ul>
          </span>
      </div>
  </nav>
</header>
