<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ url('images/logo-crop.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>About Us</title>
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        @include('includes/style')
    </head>
    
    <style>
        .img {
            border-radius: 8px;
            height: 180px;
        }
    </style>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/sport.jpg');">
            <div class="container">
                <h1 class="display-3 text-center white">Blog</h1>
            </div>
        </div>

        <div class="brand" style="float: center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-6">
                        <div class="b-search">
                            <input type="text" placeholder="Search" />
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            <div class="col-md-6 p-1">
                                <div class="tn-img">
                                    <img class="img" src="{{ asset('images/blog/barcelona.jpg') }}" />
                                    <div class="tn-title">
                                        <a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="tn-img">
                                    <img class="img" src="{{ asset('images/blog/real1.jpg')  }}" />
                                    <div class="tn-title">
                                        <a href="">Real on fire, scoring 4 without reply at the Reale Arena</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="tn-img">
                                    <img class="img" src="{{ asset('images/blog/basketball.jpg') }}" />
                                    <div class="tn-title">
                                        <a href="">Real on fire, scoring 4 without reply at the Reale Arena</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            <div class="col-md-6 p-1">
                                <div class="tn-img">
                                    <img class="img" src="{{  asset('images/blog/canor.jpeg')  }}" />
                                    <div class="tn-title">
                                        <a href="">'Why won’t Conor Benn accept the challenge?'</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="tn-img">
                                    <img class="img" src="{{ asset('images/blog/sport1.jpg') }}" />
                                    <div class="tn-title">
                                        <a href="">Setback scuppers Cheltenham run for Ronald Pump</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="tn-img">
                                    <img class="img" src="{{ asset('images/blog/image-hourse.jpg') }}" />
                                    <div class="tn-title">
                                        <a href="">Saracens sign United States international scrum-half from Cheetahs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="tn-img">
                                    <img class="img" src="{{ asset('images/blog/premier.jpg')  }}" />
                                    <div class="tn-title">
                                        <a href="">Premier League Darts 2021: PDC announces nine</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sports</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{ asset('images/blog/image-hourse.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">Saracens sign United States international scrum-half from Cheetahs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{ asset('images/blog/barcelona.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{ asset('images/blog/pga.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">PGA Tour West Coast Swing talking points -</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Basketball</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/rohit.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">Rohit Sharma defends Chennai pitch after India thrash</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/rddn_lg.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">On Julius Randle, his rise in New York and the audacity of hop</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/ak22_lg.png') }}" />

                                    <div class="cn-title">
                                        <a href="">Fantasy Basketball: Buy-low candidates, biggest surprises, </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Tennis</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/gettyimages-1303291711.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">"NOVAK WAS UNBEATABLE TONIGHT."</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/gettyimages-1303129006.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">HOW IT HAPPENED: NAOMI OSAKA BEATS JEN BRADY TO WIN</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/gettyimages-1231214881.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">WAS TSITSIPAS' NADAL STUNNER A ONE-OFF, OR A SIGN OF THINGS TO COME? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Soccer</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/i.jpeg') }}" />
                                    <div class="cn-title">
                                        <a href="">USWNT's win less about perfection and more about passing crucial tests</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/3843.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">Inter's derby demolition of Milan sees Lukaku revel in Ibrahimovic rivalry</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img class="img" src="{{asset('images/blog/i.jpeg') }}" />
                                    <div class="cn-title">
                                        <a href="">USWNT's win less about perfection and more about passing crucial tests</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{asset('images/blog/i.jpeg') }}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">USWNT's win less about perfection and more about passing crucial tests</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{asset('images/blog/ak22_lg.png') }}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Fantasy Basketball: Buy-low candidates, biggest surprises, </a>
                                    </div>
                                </div>

                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ asset('images/blog/barcelona.jpg') }}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a>
                                    </div>
                                </div>
                            </div>
                            <div id="popular" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{asset('images/blog/i.jpeg') }}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">USWNT's win less about perfection and more about passing crucial tests</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{asset('images/blog/ak22_lg.png') }}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Fantasy Basketball: Buy-low candidates, biggest surprises, </a>
                                    </div>
                                </div>

                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{ asset('images/blog/barcelona.jpg') }}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-news p-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{ asset('images/blog/barcelona.jpg') }}" />
                                        <div class="mn-title">
                                            <a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{asset('images/blog/rddn_lg.jpg') }}" />
                                        <div class="mn-title">
                                            <a href="">On Julius Randle, his rise in New York and the audacity of hop</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{ asset('images/blog/barcelona.jpg') }}" />
                                        <div class="mn-title">
                                            <a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{ asset('images/blog/premier.jpg')  }}" />
                                        <div class="mn-title">
                                            <a href="">Premier League Darts 2021: PDC announces nine</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{asset('images/blog/i.jpeg') }}" />
                                        <div class="mn-title">
                                            <a href="">Premier League Darts</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{ asset('images/euro.jpg') }}" />
                                        <div class="mn-title">
                                            <a href="">Euroleague Basketabll </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{asset('images/blog/gettyimages-1303291711.jpg') }}" />
                                        <div class="mn-title">
                                            <a href="">"NOVAK WAS UNBEATABLE TONIGHT."</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" src="{{asset('images/blog/i.jpeg') }}" />
                                        <div class="mn-title">
                                            <a href="">Premier League Darts</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img class="img" class="img" src="{{ asset('images/blog/barcelona.jpg') }}" />
                                        <div class="mn-title">
                                            <a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="mn-list">
                                <h2>Read More</h2>
                                <ul>
                                    <li><a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a></li>
                                    <li><a href="">Premier League Darts 2021: PDC announces nine</a></li>
                                    <li><a href="">How would 'phenomenon' Erling Haaland fit in to Barcelona's team?</a></li>
                                    <li><a href="">USWNT's win less about perfection and more about passing crucial tests</a></li>
                                    <li><a href="">Saracens sign United States international scrum-half from Cheetahs</a></li>
                                    <li><a href="">Setback scuppers Cheltenham run for Ronald Pump</a></li>
                                   
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('includes/footer')
        </div>
    </body>
</html>
