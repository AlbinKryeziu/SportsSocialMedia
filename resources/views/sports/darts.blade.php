<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <title>Darts</title>

        @include('includes/style')
        @include('sports/includes/style-table')
    </head>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/darts/darts.jpeg'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Darts</p>
                <h1 class="display-3 white">Darts</h1>
            </div>
        </div>
        <br>
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top  Basketball Leagues</h3>

            <hr class="mt-2 mb-8" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/turk.jpg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/spanish.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/euro.jpg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/nba.jpg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
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
                                    <td class="name">Away Clubs</td>
                                    <td style="text-align: left">Home Clubs</td>
                                    <td>D</td>
                                    <td>AC</td>
                                    <td>HC</td>
                                    <td>C</td>
                                    <td>Co</td>
                                    
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp @foreach($darts['events'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                    <tr class="top">
                                        @else
                                    </tr>

                                    <tr class="meddium">
                                        @endif
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="name">{{ $point['strEvent']}}</td>
                                        <td class="name">{{ $point['strSport']}}</td>
                                        <td class="name">{{ $point['strLeague']}}</td>
                                        <td class="name">{{ $point['strEvent']}}</td>
                                        <td class="name">{{ $point['dateEvent']}}</td>
                                        <td class="name">{{ $point['strVenue']}}</td>
                                        <td class="name">{{ $point['strCountry']}}</td>
                                        <td class="name">{{ $point['strCity']}}</td>
                                        
                                      
                                        
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
                        Darts, indoor target game played by throwing feathered darts at a circular board with numbered spaces. The game became popular in English inns and taverns in the 19th century and increasingly so in the 20th.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        The board, commonly made of sisal (known familiarly as “bristle”) but sometimes made of cork or elmwood, is divided into 20 sectors valued at points from 1 to 20. Six rings determine the scoring: an inner bull’s-eye worth 50 points, an outer bull’s-eye worth 25 points, a wide single-scoring ring, a narrow triple-scoring ring, another wide single-scoring ring, and, outermost, a narrow double-scoring ring. Throwing is free-style. The recognized standard length is 7 feet 9.25 inches (2.37 metres), though traditional distances vary up to 9 feet. The centre of the board is posted 5 feet 8 inches (1.73 metres) above the floor. (These and other rules may vary slightly in countries outside the British Isles.)
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        In the organized game, each player has three weighted and feathered darts, generally about 16 cm (6 inches) long. The player usually begins with any double score (dart thrown into the double ring). He subtracts this and subsequent scores from a previously chosen number, usually 301 or 501. The winner must reach exactly zero on his last throw. In informal pub games, players usually total up their scores from the start and declare the player who first reaches a predetermined number the winner.
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
                                    <img src="{{asset('images/sports/darts/img11-7.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/darts/img11-7.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-3.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/darts/img11-7.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-2.jpeg')}}" alt="First slide" />
                                   
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/darts/img11-3.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/darts/img11-7.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/darts/img11-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/darts/img11-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/darts/img11-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/darts/img11-5.jpeg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/darts/logo11-1.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>World Professional Darts Championship</h2>
                    <p>
                        The World Professional Darts Championship was one of the most important tournaments in the darts calendar. Originally held as an annual event between 1978 and 1993, players then broke off into two separate organisations after a controversial split in the game. 
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/darts/logo11-2.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>BDO World Darts Championship</h2>
                    <p>
                        The BDO World Darts Championship was a world championship competition in darts, organised by the British Darts Organisation. It was held 43 times from 1978 to 2020. The championship was first held at the Heart of the Midlands Nightclub in the English city of Nottingham. 
                    </p>
                </div>
            </div>
            
        </div>
        @include('includes/footer')
    </body>
</html>
