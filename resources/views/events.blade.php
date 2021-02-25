<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ url('images/logo-crop.png') }}" />

        <title>Contact Us</title>
        <style>
body {
    min-height: 100vh;
    background: #fafafa;
}


.social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}

.progress {
    height: 10px;
}

        </style>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p- banner d-flex align-items-center justify-content-center" style="background-image: url('images/sport-event-6.jpg'); height: 450px;">
            <div class="container">
                <h1 class="display-3 text-center white">Sport Events</h1>
            </div>
        </div>
       
        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0 p-4">Sport Events</h3>
            <hr class="mt-12 mb-5" />
        <div class="row pb-5 mb-4">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card shadow-sm border-1 rounded "  onclick="window.open('https://www.roadtrips.com/blog/the-best-usa-sporting-events-for-2021/', '_blank')">
                    <div class="card-body p-0"><img src="{{asset('images/events/usa.jpg')}}"  alt="" class="w-100 card-img-top">
                        <div class="p-4">
                            <h4 class="mb-0">America</h4>
                            <p class="small text-muted"></p>
                           
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card shadow-sm border-1 rounded" onclick="window.open('https://10times.com/germany/sports-goods', '_blank')" >
                    <div class="card-body p-0"><img src="{{asset('images/events/germany.jpg')}}"  alt="" class="w-100 card-img-top">
                        <div class="p-4" >
                            <h5 class="mb-0">Germany</h5>
                          
                           
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card shadow-sm border-1 rounded" onclick="window.open('https://en.parisinfo.com/discovering-paris/themed-guides/paris-loves-sport/watch-sport-in-paris/calendar-of-sporting-events', '_blank')">
                    <div class="card-body p-0"><img src="{{asset('images/events/france.jpg')}}" alt="" class="w-100 card-img-top">
                        <div class="p-4">
                            <h5 class="mb-0">France</h5>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card shadow-sm border-1 rounded" onclick="window.open('https://www.myswitzerland.com/en/experiences/events/events-search/?rubrik=sportevents', '_blank')">
                    <div class="card-body p-0"><img src="{{asset('images/events/ch.jpg')}}" alt="" class="w-100 card-img-top">
                        <div class="p-4">
                            <h5 class="mb-0">Switzerland</h5>
                            <p class="small text-muted"></p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>

       
        <div class="container-fluid p-0 bg-light p-4">
            <div class="container p-4">
                <div class="my-4">
                    <div class="py-4">
                        <h3>Awards</h3>
                    </div>
                    <div class="row align-items-end justify-content-end">
                        <div class="col-md-3 text-center">
                            <img src="images/about-us/cup-1.png" alt="" />
                            <h5 class="font-weight-bold">2015</h5>
                            <p>CHAMPIONS LEAGUE</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <img src="images/about-us/cup-2.png" alt="" />
                            <h5 class="font-weight-bold">2016</h5>
                            <p>NATIONS LEAGUE</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <img src="images/about-us/cup-3.png" alt="" />
                            <h5 class="font-weight-bold">2017</h5>
                            <p>AMERICAN LEAGUE</p>
                        </div>
                        <div class="col-md-3 text-center">
                            <img src="images/about-us/cup-1.png" alt="" />
                            <h5 class="font-weight-bold">2018</h5>
                            <p>CHAMPIONS LEAGUE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />

        @include('includes/footer')
    </body>
</html>
