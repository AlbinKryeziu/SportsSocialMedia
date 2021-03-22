<header>
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
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/volleyball')}}">Volleyball</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/handball')}}">Handball</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/netball')}}">Netball</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/rugby')}}">Rugby</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/tennis')}}">Cycling</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/hockey')}}">MotorSport</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/boxing')}}">Golf</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/table-tennis')}}">Snooker</a></button>
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
      {{-- <li class="nav-item">
        <div class="dropdown">
          <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            COLLEGES
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/colleges')}}">Colleges</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/coaches')}}">Coaches</a></button>
            <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/baseballapi')}}">Users</a></button>
            
          </div>
        </div>
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
      </li> --}}
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


