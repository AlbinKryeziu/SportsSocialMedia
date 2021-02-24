<header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top fixed-top">

    <div class="container-fluid">
   
      <img src="{{asset('images/logo-crop.png')}}" alt="" width="50px">


      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>


      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
            <div class="dropdown">
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/blog')}}">Blog</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/ads')}}">ADS</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/evnts')}}">Sport events</a></button>
                
              </div>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href=""> </a>
          </li>
          
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/register')}}">REGISTER</a>
          </li> --}}
          <li class="nav-item">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                SPORTS
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/footballapi')}}">Football</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/basketballapi')}}">Basketball</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/baseballapi')}}">Baseball</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/soccer')}}">Soccer</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/tennis')}}">Tennis</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/hockey')}}">Hockey</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/boxing')}}">Boxing</a></button>
                <button class="dropdown-item" type="button"><a class="nav-link" href="{{ url('/sports/table-tennis')}}">Table Tennis</a></button>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard')}}">LOG IN</a>
          </li>
        </ul>

        <div class="input-group md-form form-sm form-2 pl-0 w-50 shadow-sm bg-white rounded">
          <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
          <div class="input-group-append ">
            <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search"
                aria-hidden="true"></i></span>
          </div>
        </div>
        

      </div>
    </div>
  </nav>
</header>


