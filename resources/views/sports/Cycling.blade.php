<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <title>Cycling</title>

        @include('includes/style')
        @include('sports/includes/style-table')
    </head>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/cycling/img7.1.jpeg'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Cycling</p>
                <h1 class="display-3 white">Cycling</h1>
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
            
                  @if($cycling)
                      
               
                <div class="col-sm-12">
                    <div class="row my-4">
                        <div class="main1">
                            <div class="main2 table-responsive">
                                <h4 class="text-center" id="league"></h4>

                                <table class="table">
                                    <thead>
                                        <td>Pos.</td>
                                        <td class="name">Event</td>
                                        <td>ST</td>
                                        <td>S</td>
                                        <td>C</td>
                                        <td>Y</td>
                                        <td>C</td>
                                        <td>D</td>
                                        <td>H</td>
                                        
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp @foreach($cycling['events'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
                                        <tr class="top">
                                            @else
                                        </tr>

                                        <tr class="meddium">
                                            @endif
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="name">{{ $point['strEvent'] }}</td>
                                            <td>{{ $point['strFilename'] }}</td>
                                            <td>{{ $point['strSport'] }}</td>
                                            <td>{{ $point['strLeague'] }}</td>
                                            <td>{{ $point['strSeason'] }}</td>
                                            <td>{{ $point['strCountry'] }}</td>
                                            <td>{{ $point['dateEvent'] }}</td>
                                            <td>{{ $point['strTime'] }}</td>
                                            
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
        @endif
        
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Cycling officially began as a sport on 31 May, 1868, with a 1,200-metre race between the entrance and fountains of Saint-Cloud Park in Paris. The United States followed suit with its first recorded race on 24 May, 1878.

                        An intense form of racing also became popular in the United States. They organised a competition that lasted for six days with an international field of riders as participants. Prizes reached up to $10,000.
                        
                        This type of racing evolved from one-person teams to two-person teams in 1899. At present, these types of races are no longer held in the United States. However, they continue to be popular in France, Italy, Belgium, and France.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        he Union Cycliste Internationale (UCI) is the entity responsible for governing the sport of cycling. Countries may also have their own cycling federations. The scope of the competition has now grown much larger.

                        Amateur races are now conducted for both men and women in local, regional, and national competitions. Age group categories were also extended, starting from 12-13 years old.
                        
                        Amateur men are also no longer separated from professionals in events. However, they are usually divided into two groups: those aged below 23 (called espoirs or hopefuls) and those 23 and above.
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        Australia also has its fair share of competitions in the cycling. It hosts the only UCI World Tour event in the southern hemisphere, the Tour Down Under, and has also hosted the UCI Mountain Bike & Trials World Championships, Road World Championships, and Track Cycling World Championships.

Australians also place strongly in the sport at the UCI World Championships, Olympic Games, and other international cycling events.
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
                                    <img src="{{asset('images/sports/cycling/img7-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/cycling/img7-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-4.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/cycling/img7-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-6.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/cycling/img7-5.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/cycling/img7-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/cycling/img7-6.jpeg')}}" alt="First slide" />
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
                                    <img src="{{asset('images/sports/volleyball/img5.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/volleyball/img2.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/volleyball/img5.jpeg')}}" alt="First slide" />
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
