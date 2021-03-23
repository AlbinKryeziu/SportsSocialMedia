<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <title>Golf</title>

        @include('includes/style')
        @include('sports/includes/style-table')
    </head>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/golf/golf1.jpeg'); background-position: bottom; height:500px;">
            <div class="container">
                <p class="white">Home > Sports > Golf</p>
                <h1 class="display-3 white">Golf</h1>
            </div>
        </div>
        <br>
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">The  Greatest Golf Courses</h3>

            <hr class="mt-2 mb-8" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/golf/royal.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" style="object-fit: cover" />
                        <a href="#" class="btn btn-light btn-sm">Royal County Down G.C.</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/golf/august.jpeg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                        <a href="#" class="btn btn-light btn-sm">Augusta National (Ga.) G.C</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/golf/pine.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                        <a href="#" class="btn btn-light btn-sm">Pine Valley (N.J.) G.C</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('/images/sports/golf/cypress.jpeg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                        <a href="#" class="btn btn-light btn-sm">Cypress Point Clu</a>
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
                                    <td>E</td>
                                    <td>D</td>
                                    <td>T</td>
                                    <td>CI</td>
                                    <td>CO</td>
                                    
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp @foreach($golf['events'] as $key => $point) @if( $loop->first or $loop->iteration <= 4 )
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
                                        <td class="name">{{ $point['strEvent']}}</td>
                                        <td class="name">{{ $point['dateEvent']}}</td>
                                        <td class="name">{{ $point['strTime']}}</td>
                                        <td class="name">{{ $point['strVenue']}}</td>
                                        <td class="name">{{ $point['strCountry']}}</td>
                                       
                                      
                                        
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
                        Golf is a game enjoyed all over the world by both players and fans. It's a sport that requires concentration and precision, and it's enjoyed by professional athletes and amateurs, both of whom compete throughout the year for titles and prizes. Many people consider golf an easy game to learn, but not everyone is actually good at golf. The basics of golf include hitting a ball with a club, trying hard to hit the ball directly into the hole on the green.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Golf is played on a course, and the green area of the course is known as the fairway. The typical course consists of 18 holes, although golfers can play a 9-hole course through twice to play a full game of 18 holes. Golfers begin a play by standing at the teeing green and aiming the ball towards the putting green, the area where the flagstick and hole are located. The length from the teeing green to the hole varies depending on the course, and it may or may not be seen from the teeing the green. Most courses have holes that are seen from the teeing green, but some angle left or right making the invisible from the teeing green.
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        To play golf a golfer needs a set of clubs, no more than 14, of varying lengths and sizes, a set of golf balls, and a golf bag. There are more accessories available, but a beginner can start with just clubs, balls, and a bag. Next, you will decide on the type of golf game you want to play. Stroke play is the most commonly played type of game for professionals and simply uses the amount of strokes it takes you to complete the game to determine your score. The player with the lowest amount of strokes wins.

                        A team play game pits two people or a team of two to three people against each other. Similar to a stroke game, the strokes used count as your score but it's tallied as a team rather than individually. Amateurs also tend to use handicaps when calculating the score, as it allows you to subtract from the total score. Scoring in golf is called a par, and the distance from the teeing green to the hole usually determines what a typical par is for that hole. You are then scored on whether or not you go above or below the allotted par for that hole.
                        
                        Anyone who enjoys a nice walk and doesn't mind learning a few rules can begin to play golf. While many professional golfers have contributed to the growing popularity of golf, amateur players still bring a passion for the game that excites fans and players alike.
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
                                    <img src="{{asset('images/sports/golf/img9-1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/golf/img9-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/golf/img9-1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-2.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/golf/img9-2.jpeg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/golf/img9-1.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-2.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/golf/img9-3.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/golf/img9-4.jpeg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/golf/img9-5.jpeg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/golf/img9-4.jpeg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/golf/logo9-4.jpeg')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>The Open Championship,</h2>
                    <p>
                        The Open Championship, often referred to as The Open or the British Open, is the oldest golf tournament in the world, and one of the most prestigious. Founded in 1860, it was originally held annually at Prestwick Golf Club, Scotland, before evolving to being rotated between a select group of coastal links golf courses in the United Kingdom, under the authority of The R&A.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/golf/logo9-3.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>U.S. Open</h2>
                    <p>
                        The United States Open Championship, commonly known as the U.S. Open, is the annual open national championship of golf in the United States. It is the third of the four men's major championships in golf, and is on the official schedule of both the PGA Tour and the European Tour
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/golf/logo9-1.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>PGA Championship</h2>
                    <p>
                        The PGA Championship is an annual golf tournament conducted by the Professional Golfers' Association of America. It is one of the four major championships in professional men's golf
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
