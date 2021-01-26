<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How It Works</title>

    @include('includes/style')
</head>

<body>
    @include('includes/header')
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center"
        style="background-image:url('images/how-it-works/banner.jpg');background-position:bottom;">
        <div class="container ">
            <h1 class="display-3 text-center white">HOW IT WORKS</h1>
        </div>
    </div>

    <div class="container my-4">
        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="images/how-it-works/step-1.jpg" alt="" width="100%">
            </div>

            <div class="col-md-8 p-4">
                <h3>Step 1 - Register</h3>
                <p>The first step is account creation. You will need to enter your information like first name, last name, email and a password. To create a new account you cac click <a href="{{route('register')}}">HERE</a></p>
            </div>
        </div>

        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="images/how-it-works/step-2.jpg" alt="" width="100%">
            </div>

            <div class="col-md-8 p-4">
                <h3>Step 2 - Log In</h3>
                <p>After the registration process comes logging in. If you have entered valid information you will be automatically redirected to your new dashboard. If you want to login you can do it by clicking <a href="{{url('login')}}">HERE</a></p>
            </div>
        </div>

        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <div class="col-md-4">
                <img src="images/how-it-works/step-3.jpg" alt="" width="100%">
            </div>

            <div class="col-md-8 p-4">
                <h3>Step 3 - Have Fun Exploring</h3>
                <p>Now you are at your dashboard, you can create your first post, like or comment. Search for people and make new friends, and explore your news feed.</p>
            </div>
        </div>
    </div>
    @include('includes/footer')
</body>

</html>