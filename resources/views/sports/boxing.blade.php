<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
    <title>Boxing</title>
    @include('sports/includes/style-table')
    @include('includes/style')
</head>

<body>
    @include('includes/header')
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center"
        style="background-image:url('/images/sports/boxing/banner.jpg');background-position:bottom;">
        <div class="container ">
            <p class="white">Home > Sports > Boxing</p>
            <h1 class="display-3 white">Boxing</h1>
        </div>
    </div>
    <br />
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Boxing Leagues</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/sbl.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/one.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 22 rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/ufc.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
           
        </div>
    </div>
    <br />
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top boxing Players</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/saul.jpeg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Canelo_%C3%81lvarez', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img
                        class="card-img-top"
                        src="{{asset('images/sports/boxing/Vasyl.jpg')}}"
                        onclick="window.open('https://en.wikipedia.org/wiki/Vasyl_Lomachenko', '_blank')"
                        alt="Card image cap"
                        width="200"
                        height="200"
                        alt="Card image cap"
                    />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/Naoya.jpg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Naoya_Inoue/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img
                        class="card-img-top"
                        src="{{asset('images/sports/boxing/tayson.jpg')}}"
                        onclick="window.open('https://en.wikipedia.org/wiki/Tyson_Fury', '_blank')"
                        alt="Card image cap"
                        width="200"
                        height="200"
                        alt="Card image cap"
                    />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/oleksandr.jpeg')}}" onclick="window.open('https://usyk.com.ua/en/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/terence.jpg')}}" onclick="window.open('https://tbudcrawford.com', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/errol.jpg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Errol_Spence_Jr.', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/boxing/manny.jpeg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Manny_Pacquiao '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
           
            
        </div>
    </div>
    <br>
    @if(!$boxingNextEvent)
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
                            <td class="name" style="text-align: center">Name</td>
                            <td>Y</td>
                            <td>L</td>
                            <td>D</td>
                            <td>H</td>
                            <td>CI</td>
                            <td>Co</td>
                            
                        </thead>
                        <tbody>
                           
                            @foreach($boxingNextEvent['events'] as $key => $soccer) @if( $loop->first or $loop->iteration <= 4 )
                            <tr class="top">
                                @else
                            </tr>
                            <tr class="meddium">
                                @endif
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $soccer['strEvent'] }}</td>
                               
                                <td>{{ $soccer['strSeason'] }}</td>
                                <td>{{ $soccer['strLeague'] }}</td>
                                <td>{{ $soccer['dateEvent'] }}</td>
                                <td>{{ Carbon\Carbon::parse($soccer['strTime'])->format('H:i') }}</td>
                                <td>{{ $soccer['strCountry'] }}</td>
                                <td>{{ $soccer['strCity'] }}</td>
                                
                            
                               
                            </tr>

                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       </div>
    </div>
    @endif
    <br>
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
                            <td class="name" style="text-align: center">Name</td>
                            <td>Y</td>
                            <td>L</td>
                            <td>D</td>
                            <td>H</td>
                            <td>CI</td>
                            <td>Co</td>
                            
                        </thead>
                        <tbody>
                           
                            @foreach($boxing['events'] as $key => $soccer) @if( $loop->first or $loop->iteration <= 4 )
                            <tr class="top">
                                @else
                            </tr>
                            <tr class="meddium">
                                @endif
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $soccer['strEvent'] }}</td>
                               
                                <td>{{ $soccer['strSeason'] }}</td>
                                <td>{{ $soccer['strLeague'] }}</td>
                                <td>{{ $soccer['dateEvent'] }}</td>
                                <td>{{ Carbon\Carbon::parse($soccer['strTime'])->format('H:i') }}</td>
                                <td>{{ $soccer['strCountry'] }}</td>
                                <td>{{ $soccer['strCity'] }}</td>
                                
                            
                               
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
   
    <div class="container">
        <div class="row my-4">
            <div class="col-12 col-md-6 p-4 text-justify">
                <p>Boxing is a combat sport in which two people, usually wearing protective gloves and other protective
                    equipment such as hand wraps and mouthguards, throw punches at each other for a predetermined amount
                    of time in a boxing ring.</p>
            </div>

            <div class="col-12 col-md-6 p-4 text-justify">
                <p>Amateur boxing is both an Olympic and Commonwealth Games sport and is a standard fixture in most
                    international games—it also has its own World Championships. Boxing is overseen by a referee over a
                    series of one-to-three-minute intervals called rounds.</p>
            </div>

            <div class="col-12 p-4 text-justify">
                <p>A winner can be resolved before the completion of the rounds when a referee deems an opponent
                    incapable of continuing, disqualification of an opponent, or resignation of an opponent. When the
                    fight reaches the end of its final round with both opponents still standing, the judges' scorecards
                    determine the victor. In the event that both fighters gain equal scores from the judges,
                    professional bouts are considered a draw. In Olympic boxing, because a winner must be declared,
                    judges award the contest to one fighter on technical criteria.</p>
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
                                <img src="{{asset('images/sports/boxing/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/boxing/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/boxing/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/boxing/slide-1.jpg')}}"
                                alt="First slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-none d-lg-block">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/boxing/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/boxing/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/boxing/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/hockey/slide-4.jpg')}}"
                                alt="First slide">
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
                <img src="{{asset('images/sports/boxing/aiba.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>AIBA World Boxing Championship</h2>
                <p>The AIBA World Boxing Championships and the AIBA Women's World Boxing Championships are biennial
                    amateur boxing competitions organised by the International Boxing Association (AIBA), which is the
                    sport governing body. Alongside the Olympic boxing programme, it is the highest level of
                    competition for the sport. The championships was first held in 1974 Havana, Cuba as a men's only
                    event and the first women's championships was held over 25 years later in 2001.</p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/boxing/olympic.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>Boxing at the Summer Olympics</h2>
                <p>Boxing has been contested at every Summer Olympic Games since its introduction to the program at the
                    1904 Summer Olympics, except for the 1912 Summer Olympics in Stockholm, because Swedish law banned
                    the sport at the time. The 2008 Summer Olympics were the final games with boxing as a male only
                    event. Since the 2012 Summer Olympics, women's boxing is part of the program.</p>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>