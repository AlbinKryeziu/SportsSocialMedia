<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <title>Soccer</title>

        @include('includes/style') @include('sports/includes/style-table')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/soccer/banner.jpg'); background-position: bottom;">
            <div class="container">
                <p class="white">Home > Sports > Soccer</p>
                <h1 class="display-3 white">Soccer</h1>
            </div>
        </div>
        <br />

        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Soccer Leagues</h3>
            <hr class="mt-12 mb-5" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/Premier.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/laliga.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/bundesliga.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/serie.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Soccer Teams</h3>
            <hr class="mt-12 mb-5" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/bc.png')}}"
                            onclick="window.open('https://fcbayern.com/en', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/mc.png')}}"
                            onclick="window.open('https://www.mancity.com/', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/psg.png')}}"
                            onclick="window.open('https://en.psg.fr/', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/fbc.jpg')}}"
                            onclick="window.open('https://www.fcbarcelona.com/en/', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/liverpol.png')}}"
                            onclick="window.open('https://www.liverpoolfc.com/', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/dortmund3.png')}}"
                            onclick="window.open('https://www.bvb.de/', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/real.png')}}"
                            onclick="window.open('https://www.realmadrid.com/en', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/football/napoli.jpg')}}"
                            onclick="window.open('https://www.realmadrid.com/en', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>

                
            </div>
        </div>
        @if(!$liveScore)
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0 p-4"></h3>

            <div class="col-sm-12">
                <div class="row my-4">
                    <div class="main1">
                        <div class="main2 table-responsive">
                            <h4 class="text-center" id="league"></h4>

                            <table class="table">
                                <thead>
                                    <td>Date</td>
                                    <td class="name">League</td>
                                    <td>HomeTeam</td>
                                    <td>AwayTeam</td>
                                    <td>Location</td>
                                    <td>Stadium</td>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp @foreach($liveScore['teams']['Match'] as $key => $value)

                                    <tr class="meddium">
                                        <td>{{Carbon\Carbon::parse($value['Date'])->format('Y-M-D H:s') }}</td>
                                        <td>{{ $value['League'] }}</td>
                                        <td>{{ $value['HomeTeam'] }}</td>
                                        <td>{{ $value['AwayTeam'] }}</td>
                                        <td>{{ $value['Location'] }}</td>
                                        <td>{{ $value['Stadium'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="container">
                <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0 p-4"></h3>
                
                    <form method="GET" style="margin: 0px; display: flex;">
                        <select class="form-control" name="league">
                            <option value="" selected>Select League</option>
                            <option value="4328">England Premier League</option>
                            <option value="4331">German Bundesliga</option>
                            <option value="4332">Italian Serie A</option>
                            <option value="4335">Spanish La Liga</option>
                            <option value="4675">Swiss Super League</option>
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
                                        <td>D</td>
                                        <td>L</td>
                                        <td>GD</td>
                                        <td>POINTS</td>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp @foreach($point['table'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                        <tr class="top">
                                            @else
                                        </tr>

                                        <tr class="meddium">
                                            @endif
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="name">{{ $point['name'] }}</td>
                                            <td>{{ $point['goalsfor'] }}</td>
                                            <td>{{ $point['goalsagainst'] }}</td>
                                            <td>{{ $point['goalsdifference'] }}</td>
                                            <td>{{ $point['win'] }}</td>
                                            <td>{{ $point['draw'] }}</td>
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
        </div>



                <div class="container">
                    <div class="row my-4">
                        <div class="col-12 col-md-6 p-4 text-justify">
                            <p>
                                Association football, more commonly known as football or soccer,[a] is a team sport played with a spherical ball between two teams of 11 players. It is played by approximately 250 million players in over 200
                                countries and dependencies, making it the world's most popular sport. The game is played on a rectangular field called a pitch with a goal at each end. The object of the game is to outscore the opposition by
                                moving the ball beyond the goal line into the opposing goal. The team with the higher number of goals wins the game.
                            </p>
                        </div>

                        <div class="col-12 col-md-6 p-4 text-justify">
                            <p>
                                Football is played in accordance with a set of rules known as the Laws of the Game. The two teams each compete to get the ball into the other team's goal (between the posts and under the bar), thereby scoring
                                a goal. The team that has scored more goals at the end of the game is the winner; if both teams have scored an equal number of goals then the game is a draw. Each team is led by a captain who has only one
                                official responsibility as mandated by the Laws of the Game: to represent their team in the coin toss prior to kick-off or penalty kicks.
                            </p>
                        </div>

                        <div class="col-12 p-4 text-justify">
                            <p>
                                Players are not allowed to touch the ball with hands or arms while it is in play, except for the goalkeepers within the penalty area. Other players mainly use their feet to strike or pass the ball, but may
                                also use any other part of their body except the hands and the arms. The team that scores most goals by the end of the match wins. If the score is level at the end of the game, either a draw is declared or
                                the game goes into extra time or a penalty shootout depending on the format of the competition.
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
                                            <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-5.jpg')}}" alt="First slide" />
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-lg-none">
                                        <div class="slide-box">
                                            <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide" />
                                        </div>
                                    </div>
                                    <div class="d-none d-sm-block d-md-none">
                                        <div class="slide-box">
                                            <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide" />
                                        </div>
                                    </div>
                                    <div class="d-block d-sm-none">
                                        <img class="d-block w-100" src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide" />
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-none d-lg-block">
                                        <div class="slide-box">
                                            <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-5.jpg')}}" alt="First slide" />
                                        </div>
                                    </div>
                                    <div class="d-none d-md-block d-lg-none">
                                        <div class="slide-box">
                                            <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide" />
                                        </div>
                                    </div>
                                    <div class="d-none d-sm-block d-md-none">
                                        <div class="slide-box">
                                            <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide" />
                                            <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide" />
                                        </div>
                                    </div>
                                    <div class="d-block d-sm-none">
                                        <img class="d-block w-100" src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide" />
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
                            <img src="{{asset('images/sports/soccer/world-cup.png')}}" alt="" width="100%" />
                        </div>
                        <div class="col-9">
                            <h2>FIFA World Cup</h2>
                            <p>
                                The FIFA World Cup, often simply called the World Cup, is an international association football competition contested by the senior men's national teams of the members of the Fédération Internationale de
                                Football Association (FIFA), the sport's global governing body.
                            </p>
                        </div>
                    </div>
                    <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                        <div class="col-3">
                            <img src="{{asset('images/sports/soccer/olympics.png')}}" alt="" width="100%" />
                        </div>
                        <div class="col-9">
                            <h2>Summer Olympics Cup</h2>
                            <p>
                                Football at the Summer Olympics, commonly known as football or soccer, has been included in every Summer Olympic Games as a men's competition sport, except 1896 and 1932. Women's football was added to the
                                official program at the 1996 Atlanta Games.
                            </p>
                        </div>
                    </div>
                    <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                        <div class="col-3">
                            <img src="{{asset('images/sports/soccer/uefa.png')}}" alt="" width="100%" />
                        </div>
                        <div class="col-9">
                            <h2>UEFA Champions League</h2>
                            <p>
                                The UEFA Champions League (abbreviated as UCL) is an annual club football competition organised by the Union of European Football Associations (UEFA) and contested by top-division European clubs, deciding the
                                competition winners through a group and knockout format. It is one of the most prestigious football tournaments in the world and the most prestigious club competition in European football, played by the
                                national league champions (and, for some nations, one or more runners-up) of their national associations.
                            </p>
                        </div>
                    </div>
                </div>
                @include('includes/footer')
            </div>
        </div>
    </body>
</html>
