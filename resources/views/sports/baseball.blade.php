<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
    <title>Baseball</title>
 @include('sports/includes/style-table')
    @include('includes/style')
</head>

<body>
    @include('includes/header')
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center"
        style="background-image:url('/images/sports/baseball/banner.jpg');background-position:bottom;">
        <div class="container ">
            <p class="white">Home > Sports > Baseball</p>
            <h1 class="display-3 white">Baseball</h1>
        </div>
    </div>
<br>
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Baseball Leagues</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/mlb.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/korea.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
                
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/mx.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
               
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/npb.jpg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
               
            </div>
        </div>
    </div>
    <br/>
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Baseball Teams</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/dodgers.jpg')}}" onclick="window.open('https://www.mlb.com/dodgers', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/atl.jpg')}}" onclick="window.open('https://www.mlb.com/braves', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/rays.jpg')}}" onclick="window.open('https://www.mlb.com/rays', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/san.jpg')}}" onclick="window.open('https://www.mlb.com/padres', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/astros.jpg')}}" onclick="window.open('https://www.mlb.com/astros', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/ny.png')}}" onclick="window.open('https://www.mlb.com/yankees', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/oakland.jpg')}}" onclick="window.open('https://www.mlb.com/athletics', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/chicago.png')}}" onclick="window.open('https://www.mlb.com/whitesox', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/cubs.png')}}" onclick="window.open('https://www.mlb.com/cubs', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/baseball/miami.jpg')}}" onclick="window.open('https://www.mlb.com/marlins', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0 p-4"></h3>
        <div class="col-3">
        <form method="GET" style="margin: 0px; display: flex;">
            <select class="form-control" name="league">
                <option value="" selected>Select League</option>
                <option value="4424">MLB</option>
                <option value="4591">ippon Baseball League</option>
                <option value="4830">Korean KBO League</option>
            </select>
            <button type="submit" class="btn-sm" style="background-color: #6c757d; color: white; border: none;">Filter</button>
        </form>
        </div>
    <div class="col-sm-12">
        <div class="row my-4">
            
            <div class="main1">
                <div class="main2 table-responsive">
                    <h4 class="text-center" id="league"></h4>

                    <table class="table">
                        <thead>
                            <td>Pos.</td>
                            <td class="name">Nl</td>
                            <td>E</td>
                            <td>L</td>
                            <td>H</td>
                            <td>A</td>
                            <td>D</td>
                            <td>t</td>
                            <td>Hr</td>
                            <td>Ar</td>
                            
                        </thead>
                        <tbody>
                           
                            @foreach($baseball['table'] as $key => $soccer) @if( $loop->first or $loop->iteration <= 4 )
                            <tr class="top">
                                @else
                            </tr>
                            <tr class="meddium">
                                @endif
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $soccer['name'] }}</td>
                                <td>{{ $soccer['played'] }}</td>
                                <td>{{ $soccer['goalsfor'] }}</td>
                                <td>{{ $soccer['goalsagainst'] }}</td>
                                <td>{{ $soccer['goalsdifference'] }}</td>
                                <td>{{ $soccer['win'] }}</td>
                                <td>{{ $soccer['draw'] }}</td>
                                <td>{{ $soccer['loss'] }}</td>
                                <td>{{ $soccer['total'] }}</td>
                                
                            
                               
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
                <p>Baseball is a bat-and-ball game played between two opposing teams who take turns batting and
                    fielding. The game proceeds when a player on the fielding team, called the pitcher, throws a ball
                    which a player on the batting team tries to hit with a bat. The objective of the offensive team
                    (batting team) is to hit the ball into the field of play, allowing its players to run the bases),
                    having them advance counter-clockwise around four bases to score what are called "runs".</p>
            </div>

            <div class="col-12 col-md-6 p-4 text-justify">
                <p>The objective of the defensive team (fielding team) is to prevent batters from becoming runners, and
                    to prevent runners' advance around the bases. A run is scored when a runner legally advances
                    around the bases in order and touches home plate (the place where the player started as a batter).
                    The team that scores the most runs by the end of the game is the winner.</p>
            </div>

            <div class="col-12 p-4 text-justify">
                <p>The first objective of the batting team is to have a player reach first base safely. A player on the
                    batting team who reaches first base without being called "out" can attempt to advance to subsequent
                    bases as a runner, either immediately or during teammates' turns batting. The fielding team tries to
                    prevent runs by getting batters or runners "out", which forces them out of the field of play. Both
                    the pitcher and fielders have methods of getting the batting team's players out. The opposing teams
                    switch back and forth between batting and fielding; the batting team's turn to bat is over once the
                    fielding team records three outs. One turn batting for each team constitutes an inning. A game is
                    usually composed of nine innings, and the team with the greater number of runs at the end of the
                    game wins. If scores are tied at the end of nine innings, extra innings are usually played. Baseball
                    has no game clock, although most games end in the ninth inning.</p>
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
                                <img src="{{asset('images/sports/baseball/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/baseball/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/baseball/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/baseball/slide-1.jpg')}}"
                                alt="First slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-none d-lg-block">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/baseball/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/baseball/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/baseball/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/baseball/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/baseball/slide-4.jpg')}}"
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
                <img src="{{asset('images/sports/baseball/series.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>World Series</h2>
                <p>The World Series is the annual championship series of Major League Baseball (MLB) in the United
                    States and Canada, contested since 1903 between the champion teams of the American League (AL) and
                    the National League (NL). The winner of the World Series championship is determined through a
                    best-of-seven playoff, and the winning team is awarded the Commissioner's Trophy.</p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/baseball/premier12.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>Premier12 World Championship</h2>
                <p>The WBSC Premier12 is the international baseball tournament organized by the World Baseball Softball
                    Confederation (WBSC), featuring the 12 highest-ranked national baseball teams in the world. The
                    first tournament was held in Taiwan and Japan in November 2015. The second tournament, 2019 WBSC
                    Premier12, was held in November 2019, and served as a qualifier for two teams for baseball at the
                    2020 Summer Olympics.</p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/baseball/world.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>World Baseball Classic</h2>
                <p>The World Baseball Classic (WBC) is an international baseball tournament sanctioned from 2006 to 2013
                    by the International Baseball Federation (IBAF) and after 2013 by World Baseball Softball
                    Confederation (WBSC) in partnership with the Major League Baseball (MLB). It was proposed to the
                    IBAF by Major League Baseball (MLB), the Major League Baseball Players Association (MLBPA), and
                    other professional baseball leagues and their players associations around the world. It is one of
                    the two main senior baseball tournament sanctioned by the WBSC, but the only one which grants to the
                    winner the title of "World Champion".</p>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>