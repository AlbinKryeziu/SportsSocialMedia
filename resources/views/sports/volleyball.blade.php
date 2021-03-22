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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/volleyball/volleyball.jpeg'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Volleyball</p>
                <h1 class="display-3 white">Volleyball</h1>
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
                        game played by two teams, usually of six players on a side, in which the players use their hands to bat a ball back and forth over a high net, trying to make the ball touch the court within the opponents’ playing area before it can be returned. To prevent this a player on the opposing team bats the ball up and toward a teammate before it touches the court surface—that teammate may then volley it back across the net or bat it to a third teammate who volleys it across the net. A team is allowed only three touches of the ball before it must be returned over the net.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Volleyball was invented in 1895 by William G. Morgan, physical director of the Young Men’s Christian Association (YMCA) in Holyoke, Massachusetts. It was designed as an indoor sport for businessmen who found the new game of basketball too vigorous. Morgan called the sport “mintonette,” until a professor from Springfield College in Massachusetts noted the volleying nature of play and proposed the name of “volleyball.” The original rules were written by Morgan and printed in the first edition of the Official Handbook of the Athletic League of the Young Men’s Christian Associations of North America (1897).
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        Volleyball was introduced into Europe by American troops during World War I, when national organizations were formed. The Fédération Internationale de Volley Ball (FIVB) was organized in Paris in 1947 and moved to Lausanne, Switzerland, in 1984. The USVBA was one of the 13 charter members of the FIVB, whose membership grew to more than 210 member countries by the late 20th century.
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
                                    <img src="{{asset('images/sports/volleyball/img1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/volleyball/img1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/volleyball/img4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/volleyball/img5.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/volleyball/img1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/volleyball/img4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img2.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/volleyball/img2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/volleyball/img2.jpeg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/volleyball/world.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>FIVB World Cup</h2>
                    <p>
                        Men’s as well as women’s volleyball teams participate in the FIVB World Cup. The FIVB Volleyball Men’s World Cup is an international competition that was introduced to the sport of volleyball in 1965. At first, 
                        the tournament was held the year after the Olympic Games. It’s interesting to know that no tournament was played in 1973. However, in 1991 the decision was made to hold the competition the year prior to the Olympic Games.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/volleyball/champions.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>FIVB World Grand Champions Cup</h2>
                    <p>
                        The FIVB World Grand Champions Cup is another international competition for men’s and women’s volleyball teams. The tournament was first played in 1993. Today, the competition takes place every four years. The men’s volleyball team from Brazil was the most successful winner. It managed to win 5 titles. The women’s volleyball team from this country won 2 titles. Japan is the only country that always hosts the tournament.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/volleyball/american.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Pan American Cup</h2>
                    <p>
                        The Men’s Pan American Volleyball Cup is a tournament that has been introduced by NORCECA. Initially, the competition was meant for the teams from the North, Central America and the Carribean only. However, in 2010 CSV teams were invited as well. The women’s volleyball teams have their own tournament known as the Women’s Pan American Volleyball Cup.
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
