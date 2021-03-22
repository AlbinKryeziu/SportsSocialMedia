<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <title>Basketball</title>

        @include('includes/style')
        @include('sports/includes/style-table')
    </head>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/netball/netball.jpeg'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Netball</p>
                <h1 class="display-3 white">Netball</h1>
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
        </div>
        {{-- <div class="container">
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
                                    @php $i=0; @endphp @foreach($liveScore['games'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                    <tr class="top">
                                        @else
                                    </tr>

                                    <tr class="meddium">
                                        @endif
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="name">{{ $point['watch']['broadcast']['broadcasters']['vTeam'][0]['longName'] }}</td>
                                        <td class="name">{{ $point['watch']['broadcast']['broadcasters']['hTeam'][0]['longName'] }}</td>
                                        <td class="name">{{ Carbon\Carbon::parse($point['startTimeUTC'])->format('Y-m-d H:i') }}</td>
                                        <td class="name">{{ $point['vTeam']['score'] }}</td>
                                        <td class="name">{{ $point['hTeam']['score'] }}</td>
                                        <td class="name">{{ $point['arena']['city'] }}</td>
                                        <td class="name">{{ $point['arena']['country'] }}</td>
                                      
                                        
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
                <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0 p-4"></h3>
               
                    <form method="GET" style="margin: 0px; display: flex;">
                        <select class="form-control" name="league">
                            <option value="" selected>Select League</option>
                            <option value="4387">NBA</option>
                            <option value="4388">NBA G League</option>
                            <option value="4408">Spanish Liga ACB</option>
                            <option value="4423">French LNB</option>
                            <option value="4431">British Basketball League</option>
                            <option value="4475">Turkish Basketbol Super Lig</option>
                            <option value="4478">Lithuanian LKL</option>
                            <option value="4546">EuroCup Basketball</option>
                        </select>
                        <button type="submit" class="btn-sm" style="background-color: #6c757d; color: white; border: none;">Filter</button>
                    </form>
            

                <div class="col-sm-12">
                    <div class="row my-4">
                        <div class="main1">
                            <div class="main2 table-responsive">
                                <h4 class="text-center" id="league"></h4>

                                <table class="table">
                                    <thead>
                                        <td>Pos.</td>
                                        <td class="name">CLUBS</td>
                                        <td>P</td>
                                        <td>W</td>
                                        <td>GL</td>
                                        <td>GA</td>
                                        <td>GD</td>
                                        <td>L</td>
                                        <td>POINTS</td>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp @foreach($basketballPoint['table'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                        <tr class="top">
                                            @else
                                        </tr>

                                        <tr class="meddium">
                                            @endif
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="name">{{ $point['name'] }}</td>
                                            <td>{{ $point['played'] }}</td>
                                            <td>{{ $point['win'] }}</td>
                                            <td>{{ $point['goalsfor'] }}</td>
                                            <td>{{ $point['goalsagainst'] }}</td>
                                            <td>{{ $point['goalsdifference'] }}</td>
                                            <td>{{ $point['loss'] }}</td>
                                            <td>{{ $point['total'] }}</td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Netball is similar to basketball although the rules, equipment and team numbers are different.  There is no dribbling; no running with the ball; 7 players; ball passed within 3 seconds; ball & basket slightly smaller; no backboard; players designated to certain areas. Netball has similarities to European Handball, Korfball and Ultimate Frisbee.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Netball has the following advantages: true team sport (no ball hogs allowed), doesn’t matter size/ability level a position on court for everyone, great hand/eye coordination and teaches spacial awareness.  A great feeder sport for basketball.
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        Although Netball has been in the USA for over 40 years, it has been played and run by small cultural groups.  Netball America is the first to introduce it at American grass roots level which provides an opportunity for us to create excitement in potential players at an early age and get Americans playing the sport.  This is critical if the globally Netball community truly wants Netball to be a global sport not just a commonwealth one.

                        “Netball brings to the world stage a true team sport that allows all different heights and ability levels to come together to play on one team. I’m excited to be able to introduce it across America. I know you will come to love it as much as I have.”, says Sonya Ottaway, President, Netball America
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
                                    <img src="{{asset('images/sports/netball/img3-1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-6.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-8.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-9.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/netball/img3-1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/netball/img3-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/netball/img3-6.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/netball/img3-1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-6.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-8.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-9.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/netball/img3-6.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-8.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-9.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/netball/img3-8.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/netball/img3-9.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/netball/img3-8.jpegrq3')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/netball/logo3-3.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Netball World Cup</h2>
                    <p>
                        The World University Championships are organized by the Fédération Internationale du Sport Universitaire (FISU).

                        In July, 2012, the first World University Netball Championship was held in Cape Town, South Africa. The South African Federation of University Sports organised the event. It is a women's indoor tournament with a maximum of 12 teams competing. 12 competitors and 5 officials are allowed per team. The venue of the first championship was the Good Hope Sports Centre in Cape Town, July 2–7, 2012. The winners were England, who beat South Africa in the finals.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/netball/logo3-2.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>WORLD UNIVERSITY NETBALL</h2>
                    <p>
                        The 2012 World University Netball Championship was hosted at the Good Hope Centre in Cape Town, South Africa between 2 July and 7 July 2012. The tournament was organised by the Fédération Internationale du Sport Universitaire and University Sport South Africa. It was the inaugural tournament of the World University Netball Championship. It was won by Great Britain who defeated the host nation, South Africa 53–49 in the final. Jamaica finished third after defeating Northern Ireland 41–30 in the bronze medal match.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/volleyball/american.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>NATIONAL NETBALL CHAMPS</h2>
                    <p>
                        It’s a chance for the brightest young talent in Australian netball to represent their State or Territory. Apart from being a great spectacle, it’s also a crucial pathway opportunity – a chance to get national exposure and catch the eye of SSN talent scouts.  

The National Championships have always been a gateway to the international netball stage. Every current player on the Samsung Diamonds squad represented their State or Territory at this event. 
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
