<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
    <title>Tennis</title>

    @include('includes/style')
</head>

<body>
    @include('includes/header')
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center"
        style="background-image:url('/images/sports/tennis/banner.jpg');background-position:bottom;">
        <div class="container ">
            <p class="white">Home > Sports > Tennis</p>
            <h1 class="display-3 white">Tennis</h1>
        </div>
    </div>
    <br>
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Tennis Leagues</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/tennis/us.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                        
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/tennis/wimbledon.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/tennis/australia.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                     
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/tennis/women.jpg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
            </div>
    </div>
    <br/>
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Tennis Players</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/rogerfederer.jpg')}}" onclick="window.open('https://rogerfederer.com/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/refael.jpg')}}" onclick="window.open('https://rafaelnadal.com/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/novak.jpg')}}" onclick="window.open('https://novakdjokovic.com/en/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/serena.jpg')}}" onclick="window.open('https://www.fcbarcelona.com/en/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/peter.jpg')}}" onclick="window.open('http://www.samprasfanz.com/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/alexander.jpg')}}" onclick="window.open('https://www.atptour.com/en/players/alexander-zverev/z355/overview', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/matteo.jpg')}}" onclick="window.open('https://www.atptour.com/en/players/matteo-berrettini/bk40/overview', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/tennis/gael.jpg')}}" onclick="window.open('http://www.gaelmonfils.com/', '_blank')" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                </div>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="row my-4">
            <div class="col-12 col-md-6 p-4 text-justify">
                <p>Tennis is a racket sport that can be played individually against a single opponent (singles) or
                    between two teams of two players each (doubles). Each player uses a tennis racket that is strung
                    with cord to strike a hollow rubber ball covered with felt over or around a net and into the
                    opponent's court. The object of the game is to maneuver the ball in such a way that the opponent is
                    not able to play a valid return. The player who is unable to return the ball will not gain a point,
                    while the opposite player will.</p>
            </div>

            <div class="col-12 col-md-6 p-4 text-justify">
                <p>Tennis is an Olympic sport and is played at all levels of society and at all ages. The sport can be
                    played by anyone who can hold a racket, including wheelchair users. The modern game of tennis
                    originated in Birmingham, England, in the late 19th century as lawn tennis. It had close
                    connections both to various field (lawn) games such as croquet and bowls as well as to the older
                    racket sport today called real tennis. During most of the 19th century, in fact, the term tennis
                    referred to real tennis, not lawn tennis.</p>
            </div>

            <div class="col-12 p-4 text-justify">
                <p>The rules of modern tennis have changed little since the 1890s. Two exceptions are that from 1908 to
                    1961 the server had to keep one foot on the ground at all times, and the adoption of the tiebreak in
                    the 1970s. A recent addition to professional tennis has been the adoption of electronic review
                    technology coupled with a point-challenge system, which allows a player to contest the line call of
                    a point, a system known as Hawk-Eye.</p>
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
                                <img src="{{asset('images/sports/tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/tennis/slide-1.jpg')}}"
                                alt="First slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-none d-lg-block">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/tennis/slide-4.jpg')}}"
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
                <img src="{{asset('images/sports/tennis/a-open.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>Australian Open</h2>
                <p>The Australian Open is a tennis tournament held annually over the last fortnight of January at
                    Melbourne Park in Melbourne, Australia. The tournament is the first of the four Grand Slam tennis
                    events held each year, preceding the French Open, Wimbledon, and the US Open. It features men's and
                    women's singles; men's, women's, and mixed doubles; junior's championships; and wheelchair, legends,
                    and exhibition events. Prior to 1988, it was played on grass courts, but since then three types of
                    hardcourt surfaces have been used: green-coloured Rebound Ace up to 2007, blue Plexicushion from
                    2008 to 2019, and blue GreenSet since 2020.</p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/tennis/wimbledon.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>Wimbledon</h2>
                <p>The Championships, Wimbledon, commonly known simply as Wimbledon or The Championships, is the oldest
                    tennis tournament in the world and is widely regarded as the most prestigious. It has
                    been held at the All England Club in Wimbledon, London, since 1877 and is played on outdoor grass
                    courts, and since 2009 with a retractable roof over Centre Court, and since 2019, over No. 1 Court.
                </p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/tennis/us-open.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>US Open</h2>
                <p>The United States Open Tennis Championships is a hard court tennis tournament. The tournament is the
                    modern version of one of the oldest tennis championships in the world, the U.S. National
                    Championship, for which men's singles and men's doubles were first played in 1881.</p>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>