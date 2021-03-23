<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <title>Motorsport</title>

        @include('includes/style')
        @include('sports/includes/style-table')
    </head>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/motorsport/img8-2.png'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Motorsport</p>
                <h1 class="display-3 white">Motorsport</h1>
            </div>
        </div>
        <br>
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Top Motor Racing Destinations</h3>

            <hr class="mt-2 mb-8" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/motorsport/montocarlo.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                        <a href="#" class="btn btn-light btn-sm">Monte Carlo</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/motorsport/dayno.jpeg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                        <a href="#" class="btn btn-light btn-sm">Indianapolis</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/motorsport/india.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                        <a href="#" class="btn btn-light btn-sm">Daytona Beach
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/motorsport/abi.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                        <a href="#" class="btn btn-light btn-sm"> Abu Dhabi</a>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0 p-4"></h3>
           
                
        

            <div class="col-sm-12">
                <div class="row my-4">
                    <div class="main1">
                        <div class="main2 table-responsive">
                            <h4 class="text-center" id="league"></h4>

                            <table class="table">
                                <thead>
                                    <td>Pos.</td>
                                    <td class="name">Event</td>
                                    <td style="text-align: left">F</td>
                                    <td>S</td>
                                    <td>L</td>
                                    <td>S</td>
                                    <td>D</td>
                                    <td>T</td>
                                    
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp @foreach($motorSport['events'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                    <tr class="top">
                                        @else
                                    </tr>

                                    <tr class="meddium">
                                        @endif
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="name">{{ $point['strEvent'] }}</td>
                                        <td class="name">{{ $point['strFilename'] }}</td>
                                        <td class="name">{{ $point['strSport'] }}</td>
                                        <td class="name">{{ $point['strLeague'] }}</td>
                                        <td class="name">{{ $point['strSeason'] }}</td>
                                        <td class="name">{{ $point['dateEvent'] }}</td>
                                        <td class="name">{{ $point['strTime'] }}</td>
                                       
                                        
                                      
                                        
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         
        
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Motorsport, motorsports or motor sport is a global term used to encompass the group of competitive sporting events which primarily involve the use of motorised vehicles, whether for racing or non-racing competition. The terminology can also be used to describe forms of competition of two-wheeled motorised vehicles under the banner of motorcycle racing, and includes off-road racing such as motocross.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Four- (or more) wheeled motorsport competition is globally governed by the Fédération Internationale de l'Automobile (FIA); and the Fédération Internationale de Motocyclisme (FIM) governs two-wheeled competition. Likewise, the Union Internationale Motonautique (UIM) governs powerboat racing while the Fédération Aéronautique Internationale (FAI) governs air sports; including aeroplane racing.
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        In 1894, a French newspaper organised a race from Paris to Rouen and back, starting city to city racing. In 1900, the Gordon Bennett Cup was established. Closed circuit racing arose as open road racing, on public roads, was banned.

                        Aspendale Racecourse in Australia in 1906 was the first dedicated motor racing track in the world.
                        
                        Following World War I, European countries organised Grand Prix races over closed courses. In the United States, dirt track racing became popular.
                        
                        After World War II, the Grand Prix circuit became more formally organised. In the United States, stock car racing and drag racing became firmly established.[4]
                        
                        Motorsports ultimately became divided by types of motor vehicles into racing events, and their appropriate organisations.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="row">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/motorsport/img8-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-6.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-7.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/motorsport/img8-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/motorsport/img8-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/motorsport/img8-3.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/motorsport/img8-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-6.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-7.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/motorsport/img8-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/motorsport/img8-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/motorsport/img8-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/motorsport/img8-5.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-4">
            <h1 class="display-4">Popular Championships</h1>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/motorsport/logo8-1.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Formula 4</h2>
                    <p>
                        Launched in 2014, FIA Formula 4 has been created to offer young racing drivers around the world the opportunity to take the first step from karting into the world of single-seater racing.
                        Designed to be a globally recognised yet affordable step between Karting and the FIA Formula Regional Championship certified by FIA, Formula 4 certified by FIA allows drivers to compare themselves to the best young talent, not only in their own country, but across other championships around the world. 
                    </p>
                </div>
            </div>
            
        </div>
        @include('includes/footer')
    </body>
</html>
