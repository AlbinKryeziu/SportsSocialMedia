<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INFORMATION</title>

    @include('includes/style')
</head>

<body>
    @include('includes/header')
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center"
        style="background-image:url('{{ asset('images/information/info.jpeg') }}');background-position:bottom; height:500px;">
        <div class="container ">
            <h1 class="display-3 text-center white">INFORMATION</h1>
        </div>
    </div>

    <div class="container my-4 p-4">
        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('images/information/university.png') }}" alt="" width="100%">
            </div>

            <div class="col-md-8 p-4">
                <h3>If you are a College</h3>
                <p>You can post photo , videos and other information about your college, You can also view other posts on colleges to see new footballer or even coach to get more information about that footballer or even coach. <br><br>If you want to post now or ask for something more you can do it by clicking here <a href="{{route('register')}}">HERE</a></p>
            </div>
        </div>

        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('images/information/coatch.png') }}" alt="" width="100%">
            </div>

            <div class="col-md-8 p-4">
                <h3>If you are a Coach</h3>
                <p>You can post photos, videos to promote your profile, You can also search for a new football player and colleges who post on our site. <br><br> If you want to post now or ask for something more you can do it by clicking here <a href="{{url('login')}}">HERE</a></p>
            </div>
        </div>

        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('images/information/f.png') }}" alt="" width="100%">
            </div>

            <div class="col-md-8 p-4">
                <h3>If you are a Student</h3>
                <p>You can post photos, videos and other information by promoting yourself on our site, trainers and schools will be able to see your profile and get information if they decide to contact you. <br><br> If you want to post now or ask for something more you can do it by clicking here <a href="{{url('login')}}">HERE</a></p>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>