<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Home</title>

    @include('includes/style')
</head>

<body>
    @include('includes/header')
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
                                <img src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/hockey/slide-1.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-1.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-1.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/football/slide-1.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img class="d-block w-100" src="images/home/slide-1.jpg" alt="First slide">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-none d-lg-block">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/boxing/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/hockey/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-md-block d-lg-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/tennis/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-none d-sm-block d-md-none">
                            <div class="slide-box">
                                <img src="{{asset('images/sports/soccer/slide-2.jpg')}}" alt="First slide">
                                <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide">
                            </div>
                        </div>
                        <div class="d-block d-sm-none">
                            <img src="{{asset('images/sports/football/slide-2.jpg')}}" alt="First slide">
                        </div>
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
        <div class="sidebar d-none d-lg-block" style="display: grid;width:250px;position: absolute;right:0;">
            <div id="carousel-sidebar" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-sidebar" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-sidebar" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-none d-lg-block">
                            <div class="slide-box" style="display: grid;">
                                <img src="images/home/slide-6.jpg" alt="" class="w-100">
                                <img src="images/home/slide-7.jpg" alt="" class="w-100">
                                <img src="images/home/slide-8.jpg" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-none d-lg-block">
                            <div class="slide-box" style="display: grid;">
                                <img src="images/home/slide-6.jpg" alt="" class="w-100">
                                <img src="images/home/slide-7.jpg" alt="" class="w-100">
                                <img src="images/home/slide-8.jpg" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-sidebar" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-sidebar" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="container" style="margin-bottom: 172px;">
                <div class="col-12 text-center p-4">
                    <h1 class="display-3">WELCOME</h1>
                    <img class="mb-4" src="images/logo-crop.png" alt="" width="200px">
                    <h3 class="">
                        Sports Social
                    </h3>
                    <h3 class="font-light">
                        The mos completed Sports Site in the world
                    </h3>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="button" class="btn btn-primary btn-lg m-4 w-25" onclick="window.location='{{ route('register')}}'">Register</button>
                    <button type="button" class="btn btn-secondary btn-lg m-4 w-25" onclick="window.location='{{ route('login')}}'">LOGIN</button>
                </div>

                <hr>
                <h2 class="p-4">List</h2>
                <div
                    class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center text-center">
                    <div class="col-md-3">
                        <h4 class="green font-light">FRIENDS</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="green font-light">MEMORIES</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="green font-light">SPORTS</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="green font-light">EVENTS</h4>
                    </div>
                </div>
                <div
                    class="row p-4 shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center text-center">
                    <div class="col-md-3">
                        <h4 class="green font-light">GAMES</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="green font-light">VIDEOS</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="green font-light">MESSAGES</h4>
                    </div>
                    <div class="col-md-3">
                        <h4 class="green font-light">STORIES</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>