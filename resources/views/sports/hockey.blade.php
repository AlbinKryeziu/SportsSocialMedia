<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Hockey</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/hockey/banner.jpg'); background-position: bottom;">
            <div class="container">
                <p class="white">Home > Sports > Hockey</p>
                <h1 class="display-3 white">Hockey</h1>
            </div>
        </div>
        <br />
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Hockey Leagues</h3>
            <hr class="mt-12 mb-5" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/nhl.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/american.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/khl.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/shl.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Hockey Teams</h3>
            <hr class="mt-12 mb-5" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/pretadors.png')}}" onclick="window.open('https://www.nhl.com/predators', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/hockey/vlue.png')}}"
                            onclick="window.open('https://www.nba.com/raptors/interstitial-2', '_blank')"
                            alt="Card image cap"
                            width="200"
                            height="200"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/vegas.jpg')}}" onclick="window.open('https://www.nhl.com/goldenknights/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/sports/hockey/torontomaple.jpg')}}"
                            onclick="window.open('https://www.nhl.com/mapleleafs', '_blank')"
                            alt="Card image cap"
                            width="200"
                            height="200"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/rogle.jpeg')}}" onclick="window.open('https://www.roglebk.se/p/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/lin.png')}}" onclick="window.open('https://www.lhc.eu/p/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/fbk.png')}}" onclick="window.open('https://www.farjestadbk.se/p/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/gulls.jpg')}}" onclick="window.open('https://www.sandiegogulls.com/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/chic.png')}}" onclick="window.open('https://www.chicagowolves.com/', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/sports/hockey/rochester.png')}}" onclick="window.open('https://www.amerks.com/home', '_blank')" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Hockey is a sport in which two teams play against each other by trying to manoeuvre a ball or a puck into the opponent's goal using a hockey stick. There are many types of hockey such as bandy, field hockey, ice
                        hockey and rink hockey. In most of the world, the term hockey by itself refers to field hockey, while in Canada, the United States, Russia and most of Eastern and Northern Europe, the term usually refers to ice
                        hockey.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        Ice hockey is a contact team sport played on ice, usually in a rink, in which two teams of skaters use their sticks to shoot a vulcanized rubber puck into their opponent's net to score goals. The sport is known to be
                        fast-paced and physical, with teams usually fielding six players at a time: one goaltender, and five players who skate the span of the ice trying to control the puck and score goals against the opposing team.
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        Ice hockey is most popular in Canada, central and eastern Europe, the Nordic countries, Russia, and the United States. Ice hockey is the official national winter sport of Canada. In addition, ice hockey is the most
                        popular winter sport in Belarus, Croatia, the Czech Republic, Finland, Latvia, Russia, Slovakia, Sweden, and Switzerland. North America's National Hockey League (NHL) is the highest level for men's ice hockey and the
                        strongest professional ice hockey league in the world. The Kontinental Hockey League (KHL) is the highest league in Russia and much of Eastern Europe. The International Ice Hockey Federation (IIHF) is the formal
                        governing body for international ice hockey, with the IIHF managing international tournaments and maintaining the IIHF World Ranking. Worldwide, there are ice hockey federations in 76 countries.
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
                                    <img src="{{asset('images/sports/hockey/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-5.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/hockey/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/hockey/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-2.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/hockey/slide-1.jpg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/hockey/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-5.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/hockey/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-2.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/hockey/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/hockey/slide-3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/hockey/slide-4.jpg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/hockey/iihf.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>IIHF World Championship</h2>
                    <p>
                        The 2021 IIHF World Championship will be co-hosted by Minsk, Belarus and Riga, Latvia, as the IIHF announced on 19 May 2017. It will take place from 21 May to 6 June 2021. Their joint bid won by a very tight margin
                        against the Finnish bid with the cities of Tampere and Helsinki. Each city will host one group and two quarter-final games, with both semi-finals and the medal games to be played in Minsk. It will be the second time
                        hosting for both cities; Minsk was the sole host of the 2014 IIHF World Championship, while Riga hosted the 2006 IIHF World Championship.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/hockey/world.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>World Cup of Hockey</h2>
                    <p>
                        The World Cup of Hockey is an international ice hockey tournament. Inaugurated in 1996, it is the successor to the Canada Cup, which was held every 3 to 5 years from 1976 to 1991 and was the first international
                        hockey championship to allow nations to field their top players. The World Cup has occurred thrice before on an irregular basis, with the United States winning in 1996 and Canada winning in 2004 and 2016. Following
                        the 2016 tournament, it is uncertain if the series will continue, with the 2020 tournament being cancelled.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/hockey/olympic.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Ice hockey at the Olympic Games</h2>
                    <p>
                        Ice hockey tournaments have been staged at the Olympic Games since 1920. The men's tournament was introduced at the 1920 Summer Olympics and was transferred permanently to the Winter Olympic Games program in 1924, in
                        France. The women's tournament was first held at the 1998 Winter Olympics.
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
