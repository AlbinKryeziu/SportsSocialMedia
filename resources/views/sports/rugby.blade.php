<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <title>Rugby</title>

        @include('includes/style')
        @include('sports/includes/style-table')
    </head>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/rugby/img5-2.jpeg'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Rugby</p>
                <h1 class="display-3 white">Rugby</h1>
            </div>
        </div>
        <br>
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">World Rugby  Rankings</h3>

            <hr class="mt-2 mb-8" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/rugby/egland.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap"  style="object-fit: cover"/>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/rugby/zeland.jpeg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/rugby/canada.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" style="object-fit: cover"/>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/rugby/france.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
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
                                    <td class="name">Clubs</td>
                                    <td style="text-align: left">S</td>
                                    <td>M</td>
                                    <td>S</td>
                                    <td>HT</td>
                                    <td>HA</td>
                                    <td>T</td>
                                    
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp @foreach($events['events'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                    <tr class="top">
                                        @else
                                    </tr>

                                    <tr class="meddium">
                                        @endif
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="name">{{ $point['strEvent'] }}</td>
                                        <td class="name">{{ $point['strSport'] }}</td>
                                        <td class="name">{{ $point['strEvent'] }}</td>
                                        <td class="name">{{ $point['strSeason'] }}</td>
                                        <td class="name">{{ $point['strHomeTeam'] }}</td>
                                        <td class="name">{{ $point['strAwayTeam'] }}</td>
                                        <td class="name">{{ $point['strTimestamp'] }}</td>
                                      
                                      
                                        
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
                                        @php $i=0; @endphp @foreach($rugbytable['table'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
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
        </div> 

        
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Rugby, football game played with an oval ball by two teams of 15 players (in rugby union play) or 13 players (in rugby league play). Both rugby union and rugby league have their origins in the style of football played at Rugby School in England. According to the sport’s lore, in 1823 William Webb Ellis, a pupil at Rugby School, defied the conventions of the day (that the ball may only be kicked forward) to pick up the ball and run with it in a game, thus creating the distinct handling game of rugby football. This “historical” basis of the game was well established by the early 1900s, about the same time that foundation myths were invented for baseball and Australian rules football. 
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        The game is played with two teams, each consisting of fifteen players. Each team can carry, pass or kick the ball to the end zone to score as many points as possible. The team scoring the greater number of points is the winner of the match. 
                        The two teams compete for two forty minute halves with a five minute halftime. One referee controls the match with the assistance of two touch judges. There are no time outs, except at the referee's discretion where he can allow one minute for an injured player to decide whether or not to continue to play.
                        Each team is only allowed seven replacements per game. Six of the replacements are at the teams discretion and a seventh for injury.  Once a player is substituted, he can not rejoin the game. The only time a player can rejoin the game is if he was temporarily substituted for a blood injury, but he must return within ten minutes of the substitution or be permanently replaced.  
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        The game begins with a kickoff which is taken from the center of the field. The team with the ball makes every effort to score a try once the ball is in play. A try is scored when a player touches the ball to the ground in the opponent's in-goal. The team is then awarded five points. After a try is scored, the team is given the opportunity to score a goal by kicking the ball over the opponents cross-bar and in between the goal posts, scoring an additional two points, also known as conversion points. The ball must be kicked from a line perpendicular to where the ball was touched down. If the opposing team commits a penalty at any time, the offended team can attempt a penalty kick for three points, either at the goal or a drop kick at the goal from anywhere in the field of play. 

                        During the game, players move forward towards their goal, however the ball can not be passed forward. The player must pass the ball backwards to his teammates while moving forward. Forward progress of the player carrying the ball may be impeded by tacking that player. Once a player is tackled, he must immediately pass or released the ball and move away from it.  
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
                                <div class="slide-box" >
                                    <img src="{{asset('images/sports/rugby/img5-1.jpeg')}}" alt="First slide"  />
                                    <img src="{{asset('images/sports/rugby/img5-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/rugby/img5-1.jpeg')}}" alt="First slide"  />
                                    <img src="{{asset('images/sports/rugby/img5-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-3.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/rugby/img5-1.jpeg')}}" alt="First slide"  />
                                    <img src="{{asset('images/sports/rugby/img5-2.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/rugby/img5-1.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/rugby/img5-1.jpeg')}}" alt="First slide"  />
                                    <img src="{{asset('images/sports/rugby/img5-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/rugby/img5-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/rugby/img5-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/rugby/img5-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/rugby/img5-5.jpeg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/rugby/logo6-1.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Rugby World Cup</h2>
                    <p>
                        The Rugby World Cup is a men's rugby union tournament contested every four years between the top international teams. The tournament was first held in 1987, when the tournament was co-hosted by New Zealand and Australia.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/rugby/logo6-2.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Women's Rugby World Cup</h2>
                    <p>
                        The Rugby World Cup for women, historically known as the Women's Rugby World Cup, is the premier international competition in rugby union for women. The tournament is organised by the sport's governing body, World Rugby. The championships are currently held every four years; the event was most recently held in Ireland in 2017.[1] World Rugby has reset the tournament on a new four-year cycle to avoid conflict with the Commonwealth Games and Women's World Cup Sevens; World Cups will thus be held every four years after 2017.[
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/rugby/logo6-3.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Rugby Europe International Championships</h2>
                    <p>
                        The Rugby Europe Championship is the highest level of competition at men’s XV level. It is currently contested by Belgium, Georgia, Romania, Spain, Russia, Portugal.

                        A play-off takes place at the end of the season between the top team in the Trophy competition and the lowest-ranked team in the Championship.
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
