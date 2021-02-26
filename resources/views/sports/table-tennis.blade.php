<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
    <title>Table Tennis</title>

    @include('includes/style')
</head>

<body>
    @include('includes/header')
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center"
        style="background-image:url('/images/sports/table-tennis/banner.jpg');background-position:bottom;">
        <div class="container ">
            <p class="white">Home > Sports > Table Tennis</p>
            <h1 class="display-3 white">Table Tennis</h1>
        </div>
    </div>
    <br />
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Table Tennis Leagues</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/ttbl.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 22rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/itt.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 22 rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/euro.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
           
        </div>
    </div>
    <br />
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Table Tennis Players</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/simon.jpg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Simon_Gauzy', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img
                        class="card-img-top"
                        src="{{asset('images/sports/table-tennis/dimitrij.jpeg')}}"
                        onclick="window.open('https://en.wikipedia.org/wiki/Dimitrij_Ovtcharov', '_blank')"
                        alt="Card image cap"
                        width="200"
                        height="200"
                        alt="Card image cap"
                    />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/timo.jpeg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Timo_Boll', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img
                        class="card-img-top"
                        src="{{asset('images/sports/table-tennis/lin.jpg')}}"
                        onclick="window.open('https://en.wikipedia.org/wiki/Lin_Yun-ju', '_blank')"
                        alt="Card image cap"
                        width="200"
                        height="200"
                        alt="Card image cap"
                    />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/mattlias.jpeg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Mattias_Falck', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/hugo.jpeg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Hugo_Calderano', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/xuxin.jpg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Xu_Xin_(table_tennis)', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/malong.jpeg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Ma_Long','_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/fan..jpeg')}}" onclick="window.open('https://www.stigasports.com/eu/fan-zhendong', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/sports/table-tennis/quandri.jpg')}}" onclick="window.open('https://en.wikipedia.org/wiki/Quadri_Aruna', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row my-4">
            <div class="col-12 col-md-6 p-4 text-justify">
                <p>Table tennis, also known as ping-pong and whiff-whaff, is a sport in which two or four players hit a
                    lightweight ball, also known as the ping-pong ball, back and forth across a table using small
                    rackets. The game takes place on a hard table divided by a net. Except for the initial serve, the
                    rules are generally as follows: players must allow a ball played toward them to bounce one time on
                    their side of the table, and must return it so that it bounces on the opposite side at least once.
                </p>
            </div>

            <div class="col-12 col-md-6 p-4 text-justify">
                <p>Table tennis is governed by the worldwide organization International Table Tennis Federation (ITTF),
                    founded in 1926. ITTF currently includes 226 member associations. The table tennis official rules
                    are specified in the ITTF handbook. Table tennis has been an Olympic sport since 1988, with
                    several event categories. From 1988 until 2004, these were men's singles, women's singles, men's
                    doubles and women's doubles. Since 2008, a team event has been played instead of the doubles.</p>
            </div>

            <div class="col-12 p-4 text-justify">
                <p>According to ITTF rule 2.13.1, the first service is decided by lot, normally a coin toss. It
                    is also common for one player (or the umpire/scorer) to hide the ball in one or the other hand,
                    usually hidden under the table, allowing the other player to guess which hand the ball is in. The
                    correct or incorrect guess gives the "winner" the option to choose to serve, receive, or to choose
                    which side of the table to use. (A common but non-sanctioned method is for the players to play the
                    ball back and forth three times and then play out the point. This is commonly referred to as "serve
                    to play", "rally to serve", "play for serve", or "volley for serve".)</p>
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
                                <img src="{{asset('images/sports/table-tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/table-tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/table-tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/table-tennis/slide-1.jpg')}}"
                                alt="First slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-none d-lg-block">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/table-tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/table-tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/table-tennis/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/table-tennis/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/table-tennis/slide-4.jpg')}}"
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
                <img src="{{asset('images/sports/table-tennis/world.jpg')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>Table Tennis World Cup</h2>
                <p>The Table Tennis World Cup has been held annually since 1980. There had been only men's singles until
                    the inauguration of women's singles in 1996 and team competitions in 1990. The team competitions,
                    the World Team Cup, were canceled until the relaunch in 2007, and now held in odd-numbered years.
                    The competitions are sanctioned by International Table Tennis Federation (ITTF) and classified as R1
                    in rating weightings, B2 in bonus weightings in the ITTF world ranking.</p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/table-tennis/olympic.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>Table tennis at the Summer Olympics</h2>
                <p>Table tennis competition has been in the Summer Olympic Games since 1988, with singles and doubles
                    events for men and women. Athletes from China have dominated the sport, winning a total of 53
                    medals in 32 events, including 28 out of a possible 32 gold medals, and only failing to at least
                    medal in one event, the inaugural Men's Singles event at the 1988 Summer Olympics.</p>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>