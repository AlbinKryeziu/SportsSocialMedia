<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ url('images/logo-crop.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>About Us</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/about-us/banner.jpg');">
            <div class="container">
                <h1 class="display-3 text-center white">ABOUT US</h1>
            </div>
        </div>

        <div class="container">
            <div class="row my-4 align-items-center justify-content-center">
                <div class="col-md-6 col-lg-6 shadow p-3 mb-5 bg-white rounded">
                    <p class="text-justify">
                        Sports Social Media is a new platform for all of those that love to interect with others for the latest news, posts regarding sports. What we offer you is a large platform where you can create your own account, edit
                        your profile, create new posts, be able to add others as friend, view their content, like, post and share their posts. Also you can comment into other users posts. <br />
                        <br />
                        Our new social media will be a center for people to gather and have their daily dose of sports feed. Creating an account is FREE and always will be.
                    </p>
                </div>
                <div class="col-md-6 col-lg-6">
                    <img src="images/about-us/player.jpg" alt="" style="max-width: 100%; max-height: 500px;" />
                </div>
            </div>
        </div>

        <div class="container-fluid p-0 bg-light">
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

        @include('includes/footer')
    </body>
</html>
