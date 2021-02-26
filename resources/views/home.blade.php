<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @include('includes/style')
</head>

<style>
    @import'css/home.css';
</style>

<body>
    @include('includes/header')

    <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active d-block w-100"
                    style="background-image:url('images/slider1.png');background-size:cover;background-position:bottom;height:95vh;">
                </div>
                <div class="carousel-item"
                    style="background-image:url('images/slider2.png');background-size:cover;background-position:bottom;height:95vh;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="container-fluid p-0 mt-5 d-flex align-items-center" style="background-image: url('images/girl-background.png');background-size:contain;height:100vh;background-repeat: no-repeat;
        background-position: right;">
        <div class="container">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <h1 class="display-3 text-center">Sports Social Media</h1>
                <p class="lead text-center">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                    luctus.
                </p>
                <div class="row d-flex justify-content-center">
                    <button type="button" class="btn btn-primary btn-lg m-4 w-25">REGISTER</button>
                    <button type="button" class="btn btn-secondary btn-lg m-4 w-25">LOGIN</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 green-bg mt-4 py-4">
        <div class="container">
            <h1 class="display-3 text-center text-white">What We Do</h1>
            <p class="lead text-center text-white">
                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                luctus.
            </p>

            <div class="row pt-4">
                <div class="col">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <h1 class="display-4 text-center">Social Media</h1>
                        <p class="lead text-center">
                            Sagittis vivamus  lacus vel augue
                        </p>
                        <img src="images/what-we-do/image-1.jpg" alt="" width="100%">
                    </div>
                </div>

                <div class="col">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <h1 class="display-4 text-center">News</h1>
                        <p class="lead text-center">
                            Lacus vivamus sagittis lacus vel augue
                        </p>
                        <img src="images/what-we-do/image-2.jpg" alt="" width="100%">
                    </div>
                </div>

                <div class="col">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <h1 class="display-4 text-center">Articles</h1>
                        <p class="lead text-center">
                            Vivamus sagittis lacus vel augue
                        </p>
                        <img src="images/what-we-do/image-3.jpg" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mt-5 d-flex align-items-center" style="background-image: url('images/football-player.jpg');background-size:contain;height:100vh;background-repeat: no-repeat;
        background-position: left;">
        <div class="container">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <h1 class="display-3 text-center">Latest Posts</h1>
                <p class="lead text-center">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                    luctus.
                </p>
                <div class="post border p-4 m-4">
                    <div class="heading d-flex">
                        <img src="images/post/david.jpg" alt="" width="65px" style="border-radius:50%;">
                        <div class="ml-4 my-auto">
                            <p class="m-0" style="font-size:14px;">David Kim</p>
                            <p class="m-0" style="font-size:11px;">July 26 2018, 11:14am</p>
                        </div>
                    </div>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                </div>

                <div class="post border p-4 m-4">
                    <div class="heading d-flex">
                        <img src="images/post/bobby.jpg" alt="" width="65px" style="border-radius:50%;">
                        <div class="ml-4 my-auto">
                            <p class="m-0" style="font-size:14px;">Bobby Brown</p>
                            <p class="m-0" style="font-size:11px;">July 26 2018, 11:14am</p>
                        </div>
                    </div>
                    <p class="mt-4">Consectetur ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="button" class="btn btn-primary btn-lg btn-block m-4">REGISTER NOW</button>
                </div>
            </div>
        </div>
    </div>

    @include('includes/footer')
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>