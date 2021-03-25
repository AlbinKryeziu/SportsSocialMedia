<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Soccer Colleges</title>

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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/colleges/soccer/soocer1.png') }}'); height:500px;">
            <div class="container">
                <h1 class="display-3 text-center white">SOCCER COLLEGES</h1>
            </div>
        </div>

        <div class="container" style="padding: 45px;">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="mt-4">College soccer</h1>

                    <hr />
                    <img class="img-fluid rounded" src="{{ asset('images/colleges/soccer/soccer2.jpg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />
                    <p>
                        College soccer is played by teams composed of soccer players who are enrolled in colleges and universities. While it is most widespread in the United States, it is also prominent in South Korea and Canada. The
                        institutions typically hire full-time professional coaches and staff, although the student athletes are strictly amateur and are not paid. College soccer in the United States is sponsored by the National Collegiate
                        Athletic Association (NCAA), the sports regulatory body for major universities, and by the governing bodies for smaller universities and colleges. This sport is played on a rectangular field of the dimensions of
                        about 70–75 yards sideline to sideline (width), and 115–120 yards goal line to goal line
                    </p>

                    <p>
                        College soccer teams play a variety of conference and non-conference games throughout the fall season, with the season culminating in the post-season tournament called the College Cup. The St. Louis University
                        Billikens is the most successful men's team, having won 10 College Cups while the North Carolina Tar Heels led by head coach Anson Dorrance is the most successful women's college soccer team with 21 College Cup wins.
                    </p>

                    <hr />
                    <h1 class="mt-4">Playing Soccer in College:</h1>
                    <hr />
                    <p>
                        Playing soccer in college is a significant step up from high school and club soccer. Only the best take part in intercollegiate soccer in college, especially for those on top NCAA Division 1 soccer teams. However,
                        the competitiveness is not just limited to the teams that are broadcast on television as only a fraction of youth players end up playing at any level of college soccer. Even a move to a Division 3 soccer squad will
                        be a considerable adjustment from youth soccer.
                    </p>
                    <img class="img-fluid rounded" src="{{ asset('images/colleges/soccer/soccer2.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <br />
                    <br />
                    <p>
                        Although many only look at the skills shown on the pitch when comparing high school and club soccer with soccer in college, a lot goes into those differences. One significant one to consider is a professional
                        attitude. Those who are serious when appropriate and focused whenever practicing and playing tend to be those who are the better players on the squad and most apt to move on to play soccer in college.
                    </p>

                    <p>Some of the soccer colleges:</p>
                    <ul>
                        <li><i class="icofont-rounded-right"></i> <strong>NCAA Division I Soccer</strong> – 204 men’s teams and 322 women’s teams</li>
                        <li><i class="icofont-rounded-right"></i> <strong>NCAA Division II Soccer</strong> – 181 men’s teams and 228 women’s teams</li>
                        <li><i class="icofont-rounded-right"></i> <strong>NCAA Division III Soccer</strong> – 428 men’s teams and 407 women’s teams</li>
                        <li><i class="icofont-rounded-right"></i> <strong>NAIA Soccer</strong> – 218 men’s teams and 219 women’s teams</li>
                        <li><i class="icofont-rounded-right"></i> <strong>Junior College Soccer</strong> – 221 men’s teams and 186 women’s teams</li>
                    </ul>

                    <hr />

                    <h1 class="mt-4">College soccer recruiting</h1>
                    <hr />
                    <p>
                        One of the most important things to learn when deciding on whether soccer in college is for you is the difference between the term’s soccer prospects, soccer recruits and soccer commits. A prospect merely is somebody
                        who is eligible to play soccer in college; playing skills are irrelevant as far as this term goes. Conversely, a soccer recruit is somebody whom at least one soccer recruiter has shown interest. Finally, a commit is
                        a player who has agreed with a soccer recruiter to play at the school, generally by signing a National Letter of Intent.
                    </p>

                    <hr />

                    <h3 class="mt-4">Differences between men’s soccer and women’s soccer</h3>
                    <hr />
                    <p>
                        As far as the rules go, there are no differences between the genders in soccer in college. Matches are the same length, and substitution rules are identical and so on. However, a few other differences exist between
                        the men’s and women’s sides of the sport, most notably related to scholarships. Although the limits are identical in Division 3, NAIA and junior college soccer (0, 12 and 18, respectively), there is a slight
                        difference in Division 2 soccer (9 for men, 9.9 for women) and a significant difference in Division 1 soccer (14 for women, 9.9 for men).
                    </p>
                    <p>
                        Several polls assess soccer in college rankings at all levels, both nationally and regionally. For example, a United Soccer Coaches poll lists the top-25 men’s teams that play Division 2 soccer while a different one
                        does the same for the top-25 Division 3 soccer teams on the women’s side. If you’re considering Division 1 colleges, also look at the RPI. The RPI offers soccer in college team rankings of every squad nationally from
                        the best soccer college in the USA to the bottom one at that time. Also consider soccer statistics although those can be misleading, partly due to different strengths of schedule and soccer statistics in general not
                        always providing an accurate assessment of a team other than the major ones of goals scored and goals allowed.
                    </p>

                    <img class="img-fluid rounded" src="{{ asset('images/colleges/soccer/soccer5.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <br />
                    <br />
                    <p>
                        Of course, standings are essential, and they arguably play a more significant role in determining that season’s best soccer programs in college than polls. Conference champions are, in most cases, automatically
                        entered the NCAA soccer or NAIA soccer postseason tournament. Automatic qualifiers can be postseason tournament winners or if that league does not sponsor postseason soccer in college tournaments, its regular-season
                        champion.
                    </p>

                    <hr />

                    <hr />

                    <h1 class="mt-4">College soccer recruiting</h1>
                    <hr />
                    <p>
                        One of the most important things to learn when deciding on whether soccer in college is for you is the difference between the term’s soccer prospects, soccer recruits and soccer commits. A prospect merely is somebody
                        who is eligible to play soccer in college; playing skills are irrelevant as far as this term goes. Conversely, a soccer recruit is somebody whom at least one soccer recruiter has shown interest. Finally, a commit is
                        a player who has agreed with a soccer recruiter to play at the school, generally by signing a National Letter of Intent.
                    </p>

                    <hr />

                    <h3 class="mt-4">College soccer tournaments</h3>
                    <hr />
                    <p>
                        Soccer in college tournaments as far as postseason play goes is organized similarly to how college basketball works. They’re all single-elimination competitions in which teams that win move on or claim the national
                        championship in the final round while squads that fall short see their seasons come to an end. In the early rounds, the higher-seeded team will host while later rounds will be played at a predetermined, usually
                        neutral, site. In this sport’s version of the Final Four, the College Cup, there is ESPN soccer as the four semifinal contests, and two championship matches are included in ESPN soccer’s broadcast schedule.
                    </p>
                    <p>
                        The number of college teams that participate in these postseason tournaments is proportional to how many schools sponsor soccer in college at that level. For example, the Division 1 men’s tournament is comprised of
                        48 teams while the Division 1 women’s bracket is filled out by 64 schools that sponsor soccer in college.
                    </p>

                    <hr />

                    <blockquote class="blockquote">
                        <p class="mb-0">Social Media Sport</p>
                    </blockquote>

                    <div class="media mb-4"></div>
                </div>

                {{--
                <div class="col-md-4 p-4">
                    <p>Related post</p>
                    @foreach ($otherCollege as $otherCollege )

                    <div class="card my-4">
                        <img class="card-img" src="{{ asset('store/'.$otherCollege->profilePath) }}" alt="Bologna" style="width: 310px; height: 130px; object-fit: cover;" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $college->name }}</h5>
                            {{ \Illuminate\Support\Str::limit($otherCollege->description, 30)}}
                        </div>
                        <a href="{{ url('/info/colleges/'.$otherCollege->id) }}" class="btn btn-light btn-sm col-12" id="btn">Read</a>
                    </div>

                    @endforeach
                </div>
                --}}
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
