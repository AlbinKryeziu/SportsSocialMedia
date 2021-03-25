<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Football Colleges</title>

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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/colleges/college1.jpeg') }}'); height:500px;">
            <div class="container">
                <h1 class="display-3 text-center white">FOOTBALL COLLEGES</h1>
            </div>
        </div>

        <div class="container" style="padding: 45px;">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="mt-4">Choosing a football college</h1>

                    <hr />
                    <img class="img-fluid rounded" src="{{ asset('images/colleges/college2.jpg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />
                    <p>
                        College football is one of the world’s most popular sports. A football college plays in eight of the world’s nine largest stadiums, and several of them garne average attendances of 100,000 or more fans per game.
                        Additionally, hundreds of football colleges of various sizes located throughout the country are cheered on by thousands of alumni, current students, and fans on Saturdays every fall Almost eveny DI and DII football
                        college offers football scholarships, but note that many other colleges do not.
                    </p>

                    <p>
                        The majority of football colleges that compete in Division I football, and Division II football and can offer scholarships. None of those that that comprise the membership of Division III football can. However, keep
                        in mind that D III football colleges don’t offer any scholarships but often provide a considerable amount of financial aid to players. How many college football teams are there? Here’s a list of how many plays at
                        each level of the sport: NCAA Division I – Football Bowl Subdivision: 120 colleges NCAA Division I – Football Championship Subdivision: 118 colleges NCAA Division II: 157 colleges NCAA Division III: 239 colleges
                        NAIA: 91 colleges Junior College: 69 colleges How many scholarships per division in college football? Here’s a list of the maximum that is allowed per squad at each of the levels. Some of these schools offer fewer
                        than the peak. NCAA Division I – Football Bowl Subdivision: 85 scholarships NCAA Division I – Football Championship Subdivision: 63 scholarships NCAA Division II: 36 scholarships NCAA Division III: 0 scholarships
                        NAIA: 24 scholarships Junior College: 85 scholarships
                    </p>

                    <hr />
                    <h1 class="mt-4">NCAA football</h1>
                    <hr />
                    <p>
                        The NCAA became officially established in 1906 in response to a need to organize and oversee the sport. It was not until 1973 that it divided into Division I football, Division II football and Division III football.
                        Five years later, it further divided into I-A and I-AA, which were renamed FBS and FCS in 2006. Those that compete in college football recruiting at the highest level are generally FBS schools, but there are
                        exceptions. For example, North Dakota State, an FCS university, has defeated FBS opposition multiple times over the years, including a famous win over No. 13 Iowa in 2016, and there are numerous other examples of
                        schools playing better or not as well than what would otherwise be expected for their level. Other than skill level, the main difference amongst universities that are in Division I football is that FBS schools
                        compete for bowl games or a spot in the four-school national playoff while FCS universities generally focus on its 24-team national championship tournament although one FCS bowl game, the Celebration Bowl, is played
                        too. The Division II football season and the Division III football campaign both end in national tournaments. Also note that college football recruiting is competitive in the Division II and III ranks as well and
                        that, should you play, for example, Division III football, you should generally expect a considerable step up from high school football.
                    </p>
                    <hr />
                    <img class="img-fluid rounded" src="{{ asset('images/colleges/colleges4.jpg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />

                    <h1 class="mt-4">NAIA football</h1>
                    <hr />
                    <p>
                        NAIA football is competitive as well with most placing the skill levels of these football colleges at between NCAA Division II and III. NAIA football gets played nationally. Although many of the NAIA football
                        universities are in the country’s Heartland, others situate in places as varied as Florida, Texas, and Oregon.
                    </p>
                    <img class="img-fluid rounded" src="{{ asset('images/colleges/college5.jpg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <br />
                    <br />
                    <p>
                        Even though the NAIA does subdivide into Division I and II for the sport of basketball, it does not do so in any other sport, including football. Moreover, at the end of every NAIA football season, a national
                        tournament is held with the championship game, like those in the NCAA ranks, played at a predetermined neutral site.
                    </p>
                    <p>
                        NAIA football is organized differently than NCAA football in several ways. One difference is that schools and conferences enjoy more flexibility, as far as things like rules and budgets go. As a result of this
                        flexibility, they can more easily do what works for them as opposed to needing to conform to NCAA football rules, which may not fit their needs as well. Football recruiting is also different.
                    </p>
                    <p>
                        Of course, football college recruiting rules must still be followed, but NAIA football schools tend to need to adhere to regulations that are not quite as intricate and that allow for more pleasant experiences with
                        the coaching staffs than is possible in the NCAA ranks.
                    </p>
                    <hr />

                    <h1 class="mt-4">Junior colleges</h1>
                    <hr />
                    <p>
                        Junior colleges are two-year schools, and these are perfect places to play for many. Some may need to improve their academic credentials while others want to focus on improving physically. In both cases, the goal is
                        often to move on to a four-year university for their final two seasons.
                    </p>
                    <p>
                        Two separate organizations, the NJCAA, and the CCCAA, oversee junior college ball, and they sponsor different postseason competitions for their best squads while bowl games are played by some schools as well. NJCAA
                        schools are located across the country with many in Arizona, Kansas, Mississippi and New York while every CCCAA school is California-based.
                    </p>
                    <hr />

                    <h1 class="mt-4">Football college recruiting</h1>
                    <hr />

                    <p>
                        What can you do to present yourself as one of the better football college recruits about others that these coaching staffs are considering? There are several factors. Of course, you want to perform at a high level
                        relative to players and teams that you’re competing with. Also, note that every university, as well as every football college coaching staff, places a high emphasis on academic skills so that you can also fit in well
                        as far as the academic side of your time at the school goes.
                    </p>
                    <p>
                        However, that is not all. In nearly all cases, you need to also be proactive in the college football recruiting process. Some of the things that you should do are introduce yourself to the coaching staff – the
                        recruiting coordinator if you can determine who that is – with an email and, later, a call. Include information about yourself – athletically and academically – and things like highlight videos and stats. Also, make
                        sure to respond to correspondence that has been sent by members of that coaching staff.
                    </p>
                    <p>
                        What does it take to play at a good football college? It depends on a variety of factors such as what level the football college represents at and the position that you play. Here is a helpful resource on football
                        recruiting guidelines.
                    </p>
                    <p>
                        As you go through the football recruiting process, keep in mind the recruiting rules, which can be significant for NCAA football colleges. For example, if a football university coach seems not to be involved with the
                        football recruiting process as you’re not receiving any calls or emails, that might be because they are not allowed to contact you at that time but can do so later.
                    </p>

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
