<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ url('images/logo-crop.png') }}" />

        <title>Contact Us</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p- banner d-flex align-items-center justify-content-center" style="background-image: url('images/image-ads.jpg'); height: 450px;">
            <div class="container">
                <h1 class="display-3 text-center white">Sport Events</h1>
            </div>
        </div>

        <div class="container">
            <h3 class="font-weight-light text-center text-lg-left mt-2 mb-0 p-4">Sport Events</h3>
            <hr class="mt-12 mb-5" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/image-event1.jpg')}}"
                            onclick="window.open('https://www.topendsports.com/events/calendar-2021.htm', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/image-event2.jpeg')}}"
                            onclick="window.open('https://www.bbc.com/sport/55261229', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="" style="height: 160px; widh: auto; margin: 5px;">
                        <img
                            class="card-img-top"
                            src="{{asset('images/image-event4.jpeg')}}"
                            onclick="window.open('https://guides.ticketmaster.co.uk/sports-guide/', '_blank')"
                            alt="Card image cap"
                            style="height: auto; width: 240px; margin: 10px; padding: 5px;"
                            alt="Card image cap"
                        />
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
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
