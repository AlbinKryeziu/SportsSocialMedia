<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Football</title>

        @include('includes/style')
    </head>
    <body>
        @include('includes/header')

        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('/images/sports/football/banner.jpg'); background-position: bottom;">
            <div class="container">
                <p class="white">Home > Sports > Football</p>
                <h1 class="display-3 white">Football</h1>
            </div>
        </div>
        <br />
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Football Leagues</h3>

            <hr class="mt-2 mb-8" />

            <div class="row">
                <div class="col-sm-3 text-center">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{asset('images/serie.jpg')}}" alt="Card image cap" width="500" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{asset('images/Premier.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{asset('images/laliga.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <img class="card-img-top" src="{{asset('images/bundesliga.png')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Football Teams</h3>
            <hr class="mt-12 mb-5" />
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/bc.png')}}" onclick="window.open('https://fcbayern.com/en', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/liverpol.png')}}" onclick="window.open('https://www.liverpoolfc.com/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/mc.png')}}" onclick="window.open('https://www.mancity.com/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/psg.png')}}" onclick="window.open('https://en.psg.fr/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3 mb-2">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/real.png')}}" onclick="window.open('https://www.realmadrid.com/en', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/juventus.png')}}" onclick="window.open('https://www.juventus.com/en/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/dortmund3.png')}}" onclick="window.open('https://www.bvb.de/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/fbc.jpg')}}" onclick="window.open('https://www.fcbarcelona.com/en/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px;">
                        <img class="card-img-top" src="{{asset('images/sports/football/atlc3.png')}}" onclick="window.open('https://en.atleticodemadrid.com/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="height:160px; widh:auto; margin:5px; display:flex;justify-content:center;align-content:center;align-items:center;">
                        <img class="card-img-top" src="{{asset('images/sports/football/chelsea1.png')}}" onclick="window.open('https://www.chelseafc.com/en', '_blank')" alt="Card image cap" style="height:auto;width:170px;margin:10px;padding:5px;" alt="Card image cap" />
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="row my-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Home Name</th>
                            <th scope="col">Result</th>
                            <th scope="col">Away Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($responseBody as $key => $response)
                            <th scope="row">{{ $response->match_date }}</th>
                            <td>{{ $response->match_hometeam_name}}</td>
                            <td>{{ $response->match_hometeam_score}} : {{ $response->match_awayteam_score}}</td>
                            <td>{{ $response->match_awayteam_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>ea
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="table">
                        <h1 class="headin"></h1>
                        <table>
                            <tr class="col-sm-3">
                                <th>#</th>
                                <th>Team</th>
                                <th>GP</th>
                                <th>W</th>
                                <th>D</th>
                                <th>L</th>
                                <th>GD</th>
                                <th>PTS</th>
                            </tr>
                            <tr class="col-sm-3">
                                <td>1</td>
                                <td>Manchester City</td>
                                <td>19</td>
                                <td>12</td>
                                <td>5</td>
                                <td>2</td>
                                <td>+23</td>
                                <td>41</td>
                            </tr>
                            <tr class="wpos">
                                <td>2</td>
                                <td>Manchester United</td>
                                <td>20</td>
                                <td>12</td>
                                <td>4</td>
                                <td>4</td>
                                <td>+10</td>
                                <td>40</td>
                            </tr>
                            <tr class="wpos">
                                <td>3</td>
                                <td>Licester City</td>
                                <td>20</td>
                                <td>12</td>
                                <td>3</td>
                                <td>5</td>
                                <td>+14</td>
                                <td>39</td>
                            </tr>
                            <tr class="wpos">
                                <td>4</td>
                                <td>Liverpol</td>
                                <td>20</td>
                                <td>10</td>
                                <td>7</td>
                                <td>3</td>
                                <td>+17</td>
                                <td>37</td>
                            </tr>
                            <tr class="pos">
                                <td>5</td>
                                <td>West Ham united</td>
                                <td>20</td>
                                <td>10</td>
                                <td>5</td>
                                <td>30</td>
                                <td>+6</td>
                                <td>35</td>
                            </tr>
                            <tr class="pos">
                                <td>6</td>
                                <td>Tottenham Hotspur</td>
                                <td>19</td>
                                <td>9</td>
                                <td>6</td>
                                <td>4</td>
                                <td>+14</td>
                                <td>33</td>
                            </tr>
                            <tr class="pos">
                                <td>7</td>
                                <td>Everton</td>
                                <td>18</td>
                                <td>10</td>
                                <td>3</td>
                                <td>5</td>
                                <td>+7</td>
                                <td>33</td>
                            </tr>
                            <tr class="pos">
                                <td>8</td>
                                <td>Chelsea</td>
                                <td>20</td>
                                <td>8</td>
                                <td>6</td>
                                <td>6</td>
                                <td>+10</td>
                                <td>30</td>
                            </tr>
                            <tr class="pos">
                                <td>9</td>
                                <td>Arsenal</td>
                                <td>2</td>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                                <td>-1</td>
                                <td>30</td>
                            </tr>
                            <tr class="pos">
                                <td>10</td>
                                <td>Aston Villa</td>
                                <td>18</td>
                                <td>9</td>
                                <td>2</td>
                                <td>12</td>
                                <td>+12</td>
                                <td>29</td>
                            </tr>
                            <tr class="pos">
                                <td>11</td>
                                <td>Southampton</td>
                                <td>19</td>
                                <td>8</td>
                                <td>5</td>
                                <td>6</td>
                                <td>+3</td>
                                <td>29</td>
                            </tr>
                            <tr class="pos">
                                <td>12</td>
                                <td>Leeds United</td>
                                <td>19</td>
                                <td>8</td>
                                <td>2</td>
                                <td>9</td>
                                <td>-3</td>
                                <td>26</td>
                            </tr>
                            <tr class="pos">
                                <td>13</td>
                                <td>Wolverhampton Wanderers</td>
                                <td>20</td>
                                <td>6</td>
                                <td>5</td>
                                <td>9</td>
                                <td>-8</td>
                                <td>23</td>
                            </tr>
                            <tr class="pos">
                                <td>14</td>
                                <td>Crystal Palace</td>
                                <td>20</td>
                                <td>6</td>
                                <td>5</td>
                                <td>9</td>
                                <td>-12</td>
                                <td>23</td>
                            </tr>
                            <tr class="pos">
                                <td>15</td>
                                <td>Burnley</td>
                                <td>19</td>
                                <td>6</td>
                                <td>5</td>
                                <td>9</td>
                                <td>-11</td>
                                <td>22</td>
                            </tr>
                            <tr class="pos">
                                <td>16</td>
                                <td>Newcastle United</td>
                                <td>20</td>
                                <td>5</td>
                                <td>4</td>
                                <td>11</td>
                                <td>-15</td>
                                <td>19</td>
                            </tr>
                            <tr class="pos">
                                <td>17</td>
                                <td>Brighton and Hove Albion</td>
                                <td>20</td>
                                <td>3</td>
                                <td>9</td>
                                <td>6</td>
                                <td>-7</td>
                                <td>18</td>
                            </tr>
                            <tr class="pos">
                                <td>18</td>
                                <td>Fulham</td>
                                <td>19</td>
                                <td>2</td>
                                <td>5</td>
                                <td>7</td>
                                <td>-33</td>
                                <td>13</td>
                            </tr>
                            <tr class="pos">
                                <td>19</td>
                                <td>West Bromwich Albion</td>
                                <td>20</td>
                                <td>2</td>
                                <td>5</td>
                                <td>13</td>
                                <td>-33</td>
                                <td>11</td>
                            </tr>
                            <tr class="pos">
                                <td>20</td>
                                <td>Sheffield United</td>
                                <td>20</td>
                                <td>2</td>
                                <td>2</td>
                                <td>16</td>
                                <td>-21</td>
                                <td>8</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="table">
                        <h1 class="headin"></h1>
                        <table>
                            <tr class="col-sm-3">
                                <th>#</th>
                                <th>Team</th>
                                <th>GP</th>
                                <th>W</th>
                                <th>D</th>
                                <th>L</th>
                                <th>GD</th>
                                <th>PTS</th>
                            </tr>
                            <tr class="col-sm-3">
                                <td>1</td>
                                <td>Atletico Madrid</td>
                                <td>18</td>
                                <td>15</td>
                                <td>2</td>
                                <td>36</td>
                                <td>28</td>
                                <td>47</td>
                            </tr>
                            <tr class="wpos">
                                <td>2</td>
                                <td>Real Madrid</td>
                                <td>19</td>
                                <td>12</td>
                                <td>4</td>
                                <td>34</td>
                                <td>18</td>
                                <td>40</td>
                            </tr>
                            <tr class="wpos">
                                <td>3</td>
                                <td>Barcelona</td>
                                <td>19</td>
                                <td>11</td>
                                <td>4</td>
                                <td>4</td>
                                <td>17</td>
                                <td>37</td>
                            </tr>
                            <tr class="wpos">
                                <td>4</td>
                                <td>Sevilla</td>
                                <td>19</td>
                                <td>11</td>
                                <td>3</td>
                                <td>16</td>
                                <td>10</td>
                                <td>36</td>
                            </tr>
                            <tr class="pos">
                                <td>5</td>
                                <td>Villarreal</td>
                                <td>20</td>
                                <td>2</td>
                                <td>1</td>
                                <td>10</td>
                                <td>1</td>
                                <td>34</td>
                            </tr>
                            <tr class="pos">
                                <td>6</td>
                                <td>Real Sociedad</td>
                                <td>20</td>
                                <td>1</td>
                                <td>5</td>
                                <td>31</td>
                                <td>13</td>
                                <td>31</td>
                            </tr>
                            <tr class="pos">
                                <td>7</td>
                                <td>Ganade</td>
                                <td>20</td>
                                <td>8</td>
                                <td>4</td>
                                <td>1</td>
                                <td>-10</td>
                                <td>28</td>
                            </tr>
                            <tr class="pos">
                                <td>8</td>
                                <td>Real Betis</td>
                                <td>20</td>
                                <td>8</td>
                                <td>1</td>
                                <td>4</td>
                                <td>-8</td>
                                <td>27</td>
                            </tr>
                            <tr class="pos">
                                <td>9</td>
                                <td>Athclic Club</td>
                                <td>19</td>
                                <td>7</td>
                                <td>3</td>
                                <td>1</td>
                                <td>3</td>
                                <td>24</td>
                            </tr>
                            <tr class="pos">
                                <td>10</td>
                                <td>Celta Vigo</td>
                                <td>20</td>
                                <td>0</td>
                                <td>24</td>
                                <td>2</td>
                                <td>-7</td>
                                <td>24</td>
                            </tr>
                            <tr class="pos">
                                <td>11</td>
                                <td>Cadiz</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-10</td>
                                <td>24</td>
                            </tr>
                            <tr class="pos">
                                <td>12</td>
                                <td>Levante</td>
                                <td>19</td>
                                <td>5</td>
                                <td>8</td>
                                <td>6</td>
                                <td>-1</td>
                                <td>23</td>
                            </tr>
                            <tr class="pos">
                                <td>13</td>
                                <td>Getafe</td>
                                <td>19</td>
                                <td>0</td>
                                <td>2</td>
                                <td>2</td>
                                <td>-6</td>
                                <td>23</td>
                            </tr>
                            <tr class="pos">
                                <td>14</td>
                                <td>Valencia</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-3</td>
                                <td>20</td>
                            </tr>
                            <tr class="pos">
                                <td>15</td>
                                <td>Eibar</td>
                                <td>20</td>
                                <td>5</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-4</td>
                                <td>20</td>
                            </tr>
                            <tr class="pos">
                                <td>16</td>
                                <td>Valladolid</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-9</td>
                                <td>20</td>
                            </tr>
                            <tr class="pos">
                                <td>17</td>
                                <td>Osasuna</td>
                                <td>20</td>
                                <td>2</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-10</td>
                                <td>19</td>
                            </tr>
                            <tr class="pos">
                                <td>18</td>
                                <td>Alves</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-11</td>
                                <td>18</td>
                            </tr>
                            <tr class="pos">
                                <td>19</td>
                                <td>Eiche</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-9</td>
                                <td>17</td>
                            </tr>
                            <tr class="pos">
                                <td>20</td>
                                <td>Huesnca</td>
                                <td>20</td>
                                <td>0</td>
                                <td>0</td>
                                <td>2</td>
                                <td>-15</td>
                                <td>13</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row my-4">
                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        American football, referred to simply as football in the United States and Canada and also known as gridiron, is a team sport played by two teams of eleven players on a rectangular field with goalposts at each end.
                        The offense, the team with possession of the oval-shaped football, attempts to advance down the field by running with the ball or passing it, while the defense, the team without possession of the ball, aims to stop
                        the offense's advance and to take control of the ball for themselves.
                    </p>
                </div>

                <div class="col-12 col-md-6 p-4 text-justify">
                    <p>
                        The offense must advance at least ten yards in four downs or plays; if they fail, they turn over the football to the defense, but if they succeed, they are given a new set of four downs to continue the drive. Points
                        are scored primarily by advancing the ball into the opposing team's end zone for a touchdown or kicking the ball through the opponent's goalposts for a field goal. The team with the most points at the end of a game
                        wins.
                    </p>
                </div>

                <div class="col-12 p-4 text-justify">
                    <p>
                        American football evolved in the United States, originating from the sports of soccer and rugby. The first American football match was played on November 6, 1869, between two college teams, Rutgers and Princeton,
                        using rules based on the rules of soccer at the time. A set of rule changes drawn up from 1880 onward by Walter Camp, the "Father of American Football", established the snap, the line of scrimmage, eleven-player
                        teams, and the concept of downs. Later rule changes legalized the forward pass, created the neutral zone and specified the size and shape of the football. The sport is closely related to Canadian football, which
                        evolved in parallel with and at the same time as the American game (although their rules were developed independently from those of Camp). Most of the features that distinguish American football from rugby and soccer
                        are also present in Canadian football. The two sports are considered the primary variants of gridiron football.
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
                                    <img src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-5.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-none d-lg-block">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/football/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-5.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-md-block d-lg-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/football/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-3.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-none d-sm-block d-md-none">
                                <div class="slide-box">
                                    <img src="{{asset('images/sports/football/slide-4.jpg')}}" alt="First slide" />
                                    <img src="{{asset('images/sports/football/slide-3.jpg')}}" alt="First slide" />
                                </div>
                            </div>
                            <div class="d-block d-sm-none">
                                <img class="d-block w-100" src="{{asset('images/sports/football/slide-4.jpg')}}" alt="First slide" />
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
                    <img src="{{asset('images/sports/football/super-bowl.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>Super Bowl</h2>
                    <p>
                        The Super Bowl is the annual championship game of the National Football League (NFL). Since 2004, the game has been played on the first Sunday in February. It is the culmination of a regular season that begins in the
                        late summer of the previous year.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/football/afc.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>AFC Championship Game</h2>
                    <p>
                        The AFC Championship Game is the annual championship game of the American Football Conference (AFC) and one of the two semi-final playoff games of the National Football League (NFL), the largest professional American
                        football league in the United States. The game is played on the penultimate Sunday in January by the two remaining playoff teams, following the AFC postseason's first two rounds. The AFC champion then advances to
                        face the winner of the NFC Championship Game in the Super Bowl.
                    </p>
                </div>
            </div>
            <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
                <div class="col-3">
                    <img src="{{asset('images/sports/football/nfc.png')}}" alt="" width="100%" />
                </div>
                <div class="col-9">
                    <h2>NFC Championship Game</h2>
                    <p>
                        The NFC Championship Game is the annual championship game of the National Football Conference (NFC) and one of the two semi-final playoff games of the National Football League (NFL), the largest professional American
                        football league in the United States. The game is played on the penultimate Sunday in January by the two remaining playoff teams, following the NFC postseason's first two rounds. The NFC champion then advances to
                        face the winner of the AFC Championship Game in the Super Bowl.
                    </p>
                </div>
            </div>
        </div>
        @include('includes/footer')
    </body>
</html>
