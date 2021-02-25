<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soccer</title>

    @include('includes/style')
</head>

<body>
    @include('includes/header')
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center"
        style="background-image:url('/images/sports/soccer/banner.jpg');background-position:bottom;">
        <div class="container ">
            <p class="white">Home > Sports > Soccer</p>
            <h1 class="display-3 white">Soccer</h1>
        </div>
    </div>
    <br>


    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Soccer Leagues</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/Premier.jpg')}}" alt="Card image cap" width="200" height="200" alt="Card image cap" />
                        
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/laliga.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/bundesliga.png')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                     
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/serie.jpg')}}" alt="Card image cap"  width="200" height="200" alt="Card image cap" />
                    </div>
                </div>
            </div>
    </div>
    <br/>
    <div class="container">
        <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0">Statistically Ranking the World's Top Soccer Teams</h3>
        <hr class="mt-12 mb-5" />
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="height:160px; widh:auto; margin:5px;">
                    <img class="card-img-top" src="{{asset('images/sports/football/bc.png')}}" onclick="window.open('https://fcbayern.com/en', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
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
            <div class="col-sm-3">
                <div class="card" style="height:160px; widh:auto; margin:5px;">
                    <img class="card-img-top" src="{{asset('images/sports/football/fbc.jpg')}}" onclick="window.open('https://www.fcbarcelona.com/en/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="height:160px; widh:auto; margin:5px;">
                    <img class="card-img-top" src="{{asset('images/sports/football/liverpol.png')}}" onclick="window.open('https://www.liverpoolfc.com/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="height:160px; widh:auto; margin:5px;">
                    <img class="card-img-top" src="{{asset('images/sports/football/dortmund3.png')}}" onclick="window.open('https://www.bvb.de/', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                </div>
            </div>
           
           
            <div class="col-sm-3">
                <div class="card" style="height:160px; widh:auto; margin:5px;">
                    <img class="card-img-top" src="{{asset('images/sports/football/real.png')}}" onclick="window.open('https://www.realmadrid.com/en', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="height:160px; widh:auto; margin:5px;">
                    <img class="card-img-top" src="{{asset('images/sports/football/napoli.jpg')}}" onclick="window.open('https://www.realmadrid.com/en', '_blank')" alt="Card image cap" style="height:auto;width:240px;margin:10px;padding:5px" alt="Card image cap" />
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
                <p>Association football, more commonly known as football or soccer,[a] is a team sport played with a
                    spherical ball between two teams of 11 players. It is played by approximately 250 million players in
                    over 200 countries and dependencies, making it the world's most popular sport. The game is played on
                    a
                    rectangular field called a pitch with a goal at each end. The object of the game is to outscore the
                    opposition by moving the ball beyond the goal line into the opposing goal. The team with the higher
                    number of goals wins the game.</p>
            </div>

            <div class="col-12 col-md-6 p-4 text-justify">
                <p>Football is played in accordance with a set of rules known as the Laws of the Game. The two teams
                    each
                    compete to get the ball into
                    the other team's goal (between the posts and under the bar), thereby scoring a goal. The team that
                    has
                    scored more goals at the end of the game is the winner; if both teams have scored an equal number of
                    goals then the game is a draw. Each team is led by a captain who has only one official
                    responsibility as
                    mandated by the Laws of the Game: to represent their team in the coin toss prior to kick-off or
                    penalty
                    kicks.</p>
            </div>

            <div class="col-12 p-4 text-justify">
                <p>Players are not allowed to touch the ball with hands or arms while it is in play, except for the
                    goalkeepers within the penalty area. Other players mainly use their feet to strike or pass the ball,
                    but
                    may also use any other part of their body except the hands and the arms. The team that scores most
                    goals
                    by the end of the match wins. If the score is level at the end of the game, either a draw is
                    declared or
                    the game goes into extra time or a penalty shootout depending on the format of the competition.</p>
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
                                <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/soccer/slide-1.jpg')}}"
                                alt="First slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-none d-lg-block">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-5.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-4.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-3.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="{{asset('images/sports/soccer/slide-4.jpg')}}"
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
                <img src="{{asset('images/sports/soccer/world-cup.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>FIFA World Cup</h2>
                <p>The FIFA World Cup, often simply called the World Cup, is an international association football
                    competition contested by the senior men's national teams of the members of the Fédération
                    Internationale de Football Association (FIFA), the sport's global governing body.</p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/soccer/olympics.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>Summer Olympics Cup</h2>
                <p>Football at the Summer Olympics, commonly known as football or soccer, has been included in every
                    Summer Olympic Games as a men's competition sport, except 1896 and 1932. Women's football was added
                    to the official program at the 1996 Atlanta Games.</p>
            </div>
        </div>
        <div class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center mt-4">
            <div class="col-3">
                <img src="{{asset('images/sports/soccer/uefa.png')}}" alt="" width="100%">
            </div>
            <div class="col-9">
                <h2>UEFA Champions League</h2>
                <p>The UEFA Champions League (abbreviated as UCL) is an annual club football competition organised by the
                    Union of European Football Associations (UEFA) and contested by top-division European clubs,
                    deciding the competition winners through a group and knockout format. It is one of the most
                    prestigious football tournaments in the world and the most prestigious club competition in European
                    football, played by the national league champions (and, for some nations, one or more runners-up) of
                    their national associations.</p>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>