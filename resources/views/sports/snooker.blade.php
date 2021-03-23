<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <title>Snooker</title>

        @include('includes/style')
        @include('sports/includes/style-table')
    </head>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/snooker/img10-1.jpeg'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Snooker</p>
                <h1 class="display-3 white">Snooker</h1>
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
        {{-- <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Basketball Teams</h3>
            <hr class="mt-2 mb-8" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/lakers.jpg')}}" onclick="window.open('https://lakersnation.com/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/toronto.jpg')}}" onclick="window.open('https://www.nba.com/raptors/interstitial-2', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/clip.jpg')}}" onclick="window.open('https://www.nba.com/clippers/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/boston.png')}}" onclick="window.open('https://www.celticsblog.com/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/miami.png')}}" onclick="window.open('https://www.themiamiheatstore.com/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/mil.png')}}" onclick="window.open('https://www.nba.com/bucks/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/huston.png')}}" onclick="window.open('https://www.nba.com/rockets/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/denver.png')}}" onclick="window.open('https://www.nba.com/nuggets/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/utah.png')}}" onclick="window.open('https://www.nba.com/jazz/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/basketball/thunder.png')}}" onclick="window.open('https://www.nba.com/thunder/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
            </div>
        </div> --}}
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
                                    <td style="text-align: left">S</td>
                                    <td>L</td>
                                    <td>S</td>
                                    <td>V</td>
                                    <td>CO</td>
                                    <td>C</td>
                                    <td>D</td>
                                    
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp @foreach($snooker['events'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                    <tr class="top">
                                        @else
                                    </tr>

                                    <tr class="meddium">
                                        @endif
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="name">{{ $point['strEvent']}}</td>
                                        <td class="name">{{ $point['strSport']}}</td>
                                        <td class="name">{{ $point['strLeague']}}</td>
                                        <td class="name">{{ $point['strSeason']}}</td>
                                        <td class="name">{{ $point['strVenue']}}</td>
                                        <td class="name">{{ $point['strCountry']}}</td>
                                        <td class="name">{{ $point['strCity']}}</td>
                                        <td class="name">{{ $point['dateEvent']}}</td>
                          
                                      
                                      
                                        
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
                        Snooker (pronounced UK: /ˈsnuːkə/, US: /ˈsnʊkər/)[2][3] is a cue sport that was first played by British Army officers stationed in India in the second half of the 19th century. It is played on a rectangular table covered with a green cloth (or "baize"), with six pockets: one at each corner and one in the middle of each long side. Using a cue stick, the players[a] take turns to strike the white "cue ball" to pot the other twenty-one snooker balls in the correct sequence, accumulating points for each pot.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Snooker gained its identity in 1875 when army officer Sir Neville Chamberlain (1856–1944), stationed in Ootacamund, Madras, devised a set of rules that combined black pool and pyramids. The word snooker was a well-established derogatory term used to describe inexperienced or first-year military personnel. The game grew in popularity in the United Kingdom, and the Billiards Association and Control Club was formed in 1919. As a professional sport, snooker is now governed by the World Professional Billiards and Snooker Association, founded in 1968.
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        The World Snooker Championship has taken place since 1927. Joe Davis, a key figure and pioneer in the early growth of the sport, won fifteen successive world championships between 1927 and 1946. The "modern era" of snooker began in 1969 after the broadcaster BBC commissioned the television series Pot Black, later airing daily coverage of the World Championship which was first televised in 1978. Key figures in the game were Ray Reardon in the 1970s, Steve Davis in the 1980s, and Stephen Hendry in the 1990s, each winning the World Championship on multiple occasions. Since 2000, Ronnie O'Sullivan has won the most world titles. Top professional players now compete in regular tournaments around the world, earning millions of pounds on the World Snooker Tour which features competitors of many different nationalities.
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
                                    <img src="{{asset('images/sports/snooker/img10-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/snooker/img10-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-4.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/snooker/img10-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-4.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/snooker/img10-6.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/snooker/img10-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/snooker/img10-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/snooker/img10-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/snooker/img10-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/snooker/img10-6.jpeg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/snooker/logo10-1.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>World Snooker Championship</h2>
                    <p>
                        The World Snooker Championship is professional snooker's longest-running, most prestigious, and wealthiest tournament, with total prize money in 2020 of £2,395,000, including £500,000 for the winner. First held in 1927, it is now one of the three tournaments that make up snooker's Triple Crown Series.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/snooker/logo10-3.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>UK Championship</h2>
                    <p>
                        The UK Championship is a professional ranking snooker tournament. It is one of snooker's prestigious Triple Crown events, along with the World Championship and the Masters. It is usually held at the Barbican Centre, York.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/snooker/logo10-2.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>European Masters</h2>
                    <p>
                        The European Masters is a professional ranking snooker tournament that has been staged periodically since 1989 as the European Open. Between 2005 and 2008 it was known as the Malta Cup and was the sole ranking tournament in Europe outside the British Isles, before being discontinued.
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
