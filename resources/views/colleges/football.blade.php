<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Healthy</title>

        @include('includes/style')
    </head>
    <style>

        .card-img {
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .card-title {
            margin-bottom: 0.3rem;
        }

        .cat {
            display: inline-block;
            margin-bottom: 1rem;
        }

        .fa-users {
            margin-left: 1rem;
        }

        .card-footer {
            font-size: 0.8rem;
        }
        #btn {
            background-color: #1abc9c;
            color: white;
        }
        #btn:hover {
            background: orange;
        }
        .btn-card {
            background-color: #1abc9c;
            color: #fff;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            padding: 0.84rem 2.14rem;
            font-size: 0.81rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            margin: 0;
            border: 0;
            -webkit-border-radius: 0.125rem;
            border-radius: 0.125rem;
            cursor: pointer;
            text-transform: uppercase;
            white-space: normal;
            word-wrap: break-word;
            color: #fff;
        }
        .btn-card:hover {
            background: orange;
        }
        a.btn-card {
            text-decoration: none;
            color: #fff;

        }
        #btn {
            background-color: #1abc9c;
            color: white;
        }
        #btn:hover {
            background: orange;
        }
    </style>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/college16.jpeg') }}'); height:500px;">
            <div class="container">
                <h1 class="display-3 text-center white">COLLEGES</h1>
            </div>
        </div>

        <div class="container" style="padding: 45px;">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="mt-4">Choosing a football college</h1>

                    <p class="lead">
                        by
                        <a href="#">Liam Airght</a>
                    </p>

                    <hr />

                    <p>College football is one of the world’s most popular sports. A football college plays in eight of the world’s nine largest stadiums, and several of them garne average attendances of 100,000 or more fans per game. Additionally, hundreds of football colleges of various sizes located throughout the country are cheered on by thousands of alumni, current students, and fans on Saturdays every fall

                        Almost eveny DI and DII football college offers football scholarships, but note that many other colleges do not. The majority of football colleges that compete in Division I football, and Division II football and can offer scholarships. None of those that that comprise the membership of Division III football can. However, keep in mind that D III football colleges don’t offer any scholarships but often provide a considerable amount of financial aid to players.
                        
                        How many college football teams are there? Here’s a list of how many plays at each level of the sport:
                        
                        NCAA Division I – Football Bowl Subdivision: 120 colleges
                        NCAA Division I – Football Championship Subdivision: 118 colleges
                        NCAA Division II: 157 colleges
                        NCAA Division III: 239 colleges
                        NAIA: 91 colleges
                        Junior College: 69 colleges
                        How many scholarships per division in college football? Here’s a list of the maximum that is allowed per squad at each of the levels. Some of these schools offer fewer than the peak.
                        
                        NCAA Division I – Football Bowl Subdivision: 85 scholarships
                        NCAA Division I – Football Championship Subdivision: 63 scholarships
                        NCAA Division II: 36 scholarships
                        NCAA Division III: 0 scholarships
                        NAIA: 24 scholarships
                        Junior College: 85 scholarships</p>

                    <hr />

                    <img class="img-fluid rounded" src="" style="width: 900px; object-fit:cover;"  alt="" />

                    <hr />
                    <ul>
                        <li><i class="icofont-rounded-right"></i> <strong>Address:</strong> </li>
                        <li><i class="icofont-rounded-right"></i> <strong>Country:</strong></li>
                        <li><i class="icofont-rounded-right"></i> <strong>City:</strong></li>
                    </ul>
                    
                    <p >
                        <strong>Description:</strong>
                        <br></p>
                    <p>
                        <strong>Methodology:</strong>
                        <br>
                       
                    </p>
                    <p>
                        <strong>Services:</strong>
                        <br>
                        
                    </p>
                    <blockquote class="blockquote">
                        <p class="mb-0">Social Media Sport</p>
                    </blockquote>

                    <div class="media mb-4"></div>
                </div>
         

                {{-- <div class="col-md-4 p-4">
                    <p>Related post</p>
                     @foreach ($otherCollege as $otherCollege )
                         
                   
                    <div class="card my-4">
                       
                       
                        <img class="card-img" src="{{ asset('store/'.$otherCollege->profilePath) }}" alt="Bologna" style="width: 310px; height:130px; object-fit:cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $college->name }}</h5>
                            {{ \Illuminate\Support\Str::limit($otherCollege->description, 30)}}
                        </div>
                        <a href="{{ url('/info/colleges/'.$otherCollege->id) }}" class="btn btn-light btn-sm col-12 " id="btn">Read</a>
                    </div>

                    @endforeach
                </div> --}}
            </div>
        </div>
        
        

        @include('includes/footer')
    </body>
</html>
@if (count($errors) > 0)
<script type="text/javascript">
    $(document).ready(function () {
        $("#ModalLoginForm").modal("show");
    });
</script>
@endif
