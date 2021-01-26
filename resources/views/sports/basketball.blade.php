<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Basketball</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/basketball/banner.jpg'); background-position: bottom;">
            <div class="container">
                <p class="white">Home > Sports > Basketball</p>
                <h1 class="display-3 white">Basketball</h1>
            </div>
        </div>
        <br>
        <div class="container">
            <p><strong>Statistically Ranking the World's Top  Basketball Leagues</strong></p>
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

        <div class="container">
            <div class="row my-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Home Name</th>
                            <th scope="col">Result</th>
                            <th scope="col">Away Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($responseBody['data'] as $value)
                            <td>{{ $value['homeName'] }}</td>
                            <td>{{ $value['homeScore'] }} : {{ $value['awayScore'] }}</td>
                            <td>{{ $value['awayName'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Basketball, colloquially referred to as hoops, is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a
                        basketball (approximately 9.4 inches (24 cm) in diameter) through the defender's hoop (a basket 18 inches (46 cm) in diameter mounted 10 feet (3.048 m) high to a backboard at each end of the court) while preventing
                        the opposing team from shooting through their own hoop.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Players advance the ball by bouncing it while walking or running (dribbling) or by passing it to a teammate, both of which require considerable skill. On offense, players may use a variety of shots—the lay-up, the
                        jump shot, or a dunk; on defense, they may steal the ball from a dribbler, intercept passes, or block shots; either offense or defense may collect a rebound, that is, a missed shot that bounces from rim or backboard.
                        It is a violation to lift or drag one's pivot foot without dribbling the ball, to carry it, or to hold the ball with both hands then resume dribbling.
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        The five players on each side fall into five playing positions. The tallest player is usually the center, the second-tallest and strongest is the power forward, a slightly shorter but more agile player is the small
                        forward, and the shortest players or the best ball handlers are the shooting guard and the point guard, who implements the coach's game plan by managing the execution of offensive and defensive plays (player
                        positioning). Informally, players may play three-on-three, two-on-two, and one-on-one.
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
                                    <img src="{{asset('images/sports/basketball/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-5.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/basketball/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/basketball/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-2.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/basketball/slide-1.jpg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/basketball/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-5.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/basketball/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-2.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/basketball/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/basketball/slide-3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/basketball/slide-4.jpg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/basketball/fiba-world.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>FIBA Basketball World Cup</h2>
                    <p>
                        The FIBA Basketball World Cup, also known as the FIBA World Cup of Basketball or simply the FIBA World Cup, between 1950 and 2010 known as the FIBA World Championship,[1] is an international basketball competition
                        contested by the senior men's national teams of the members of the International Basketball Federation (FIBA), the sport's global governing body. It is considered the flagship event of FIBA.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/basketball/nba.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>NBA</h2>
                    <p>
                        The National Basketball Association (NBA) is a professional basketball league in North America. The league is composed of 30 teams (29 in the United States and 1 in Canada) and is one of the four major professional
                        sports leagues in the United States and Canada. It is the premier men's professional basketball league in the world.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/basketball/fiba-euro.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>FIBA Euro Cup</h2>
                    <p>
                        The FIBA Europe Cup, officially abbreviated as FEC is an annual professional club basketball competition organised by FIBA for eligible European basketball clubs. It is the European-wide second level. Clubs mainly
                        qualify for the competition based on their performance in their national leagues and cup competitions, although this is not the sole deciding factor, as sometimes clubs that did not win their league can still
                        qualify.
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
