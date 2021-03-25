<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Basketball Colleges</title>

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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/colleges/basketball/basketball2.jpeg') }}'); height:500px;">
            <div class="container">
                <h1 class="display-3 text-center white">Basketball COLLEGES</h1>
            </div>
        </div>

        <div class="container" style="padding: 45px;">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="mt-4">College basketball</h1>

                    <hr />
                    <img class="img-fluid rounded" src="{{ asset('images/colleges/basketball/basketball3.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />
                    <p>
                        College basketball in the United States is governed by collegiate athletic bodies including National Collegiate Athletic Association (NCAA), the National Association of Intercollegiate Athletics (NAIA), the United States Collegiate Athletic Association (USCAA), the National Junior College Athletic Association (NJCAA), and the National Christian College Athletic Association (NCCAA). Each of these various organizations are subdivided into from one to three divisions based on the number and level of scholarships that may be provided to the athletes.
                    </p>

                    <p>
                        Each organization has different conferences to divide up the teams into groups. Teams are selected into these conferences depending on the location of the schools. These conferences are put in due to the regional play of the teams and to have a structural schedule for each to team to play for the upcoming year. During conference play the teams are ranked not only through the entire NCAA, but the conference as well in which they have tournament play leading into the NCAA tournament
                    </p>

                    <hr />
                    <h1 class="mt-4">History</h1>
                    <hr />
                    <p>
                        The history of basketball can be traced back to a YMCA International Training School, known today as Springfield College, located in Springfield, Massachusetts. The sport was created by a physical education teacher named James Naismith, who in the winter of 1891 was given the task of creating a game that would keep track athletes in shape and that would prevent them from getting hurt. The date of the first formal basketball game played at the Springfield YMCA Training School under Naismith's rules is generally given as December 21, 1891. Basketball began to be played at some college campuses by 1893.
                    </p>
                   
                    <hr />

                    <h1 class="mt-4">Collegiate firsts</h1>
                    <hr />
                    <p>
                        The first known college to field a basketball team against an outside opponent was Vanderbilt University, which played against the local YMCA in Nashville, Tennessee, on February 7, 1893, which Vanderbilt won 9–6. The second recorded instance of an organized college basketball game was Geneva College's game against New Brighton YMCA on April 8, 1893, in Beaver Falls, Pennsylvania, which Geneva won 3–0.
                    </p>
                    <p>The first recorded game between two college teams occurred on November 22, 1894, when the Drexel Institute of Art, Science and Industry (now known as Drexel University) faced Temple College (now known as Temple University). Drexel won the game, which was played under rules allowing nine players per side, among many other variations from modern basketball, 26–1. The first intercollegiate match using the modern rule of five players per side is often credited as a game between the University of Chicago and the University of Iowa, in Iowa City, Iowa, on January 18, 1896.</p>
                    <p> The Chicago team won the game 15-12, under the coaching of Amos Alonzo Stagg, who had learned the game from James Naismith at Springfield YMCA. However, some sources state the first "true" five-on-five intercollegiate match was a game in 1897 between Yale and Penn, because although the Iowa team that played Chicago in 1896 was composed of University of Iowa students, it reportedly did not officially represent the university, rather it was organized through a YMCA. By 1900, the game of basketball had spread to colleges across the country.</p>
                    <img class="img-fluid rounded" src="{{ asset('images/colleges/basketball/basketball5.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
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

                    <h1 class="mt-4">NCAA tournament</h1>
                    <hr />
                    <p>
                        In 1939, another national tournament was implemented by the National Collegiate Athletic Association (NCAA). The location of the NCAA Tournament varied from year to year, and it soon used multiple locations each year, so more fans could see games without traveling to New York. Although the NIT was created earlier and was more prestigious than the NCAA for many years, it ultimately lost popularity and status to the NCAA Tournament. In 1950, following a double win by the 1949–50 CCNY Beavers men's basketball team (when the NIT comprised 12 and the NCAA 8 teams), the NCAA ruled that no team could compete in both tournaments, and effectively indicated that a team eligible for the NCAA tournament should play in it. Not long afterward, assisted by the 1951 scandals based in New York City, the NCAA tournament had become more prestigious than before, with conference champions and the majority of top-ranked teams competing there. The NCAA tournament eventually overtook the NIT by 1960. Through the 1960s and 1970s, with UCLA leading the way as winner of ten NCAA Tournament championships, a shift in power to teams from the west amplified the shift of attention away from the New York City-based NIT. When the NCAA tournament expanded its field of teams from 25 to 32 in 1975, to 48 in 1980, to 64 in 1985, and to 68 teams in 2011, interest in the NCAA tournament increased again and again, as it comprised more and more teams, soon including all of the strongest ones. (Expansion also improved the distribution of playing locations, which number roughly one-third the number of teams in the field.)
                    </p>
                    <p>
                        In 2011, the NCAA field expanded to 68 teams and the last 8 teams playing for four spots making the field into 64, which is called the first round and so on. The former first round is called the second round, the second round is called the third round, and the Sweet Sixteen is the same, but it is technically the fourth round in the current format, etc.
                    </p>
                   
                    <p>In 2016, the field did not expand, but the round numbers changed again. The first four games containing the last 8 teams is now referred to as the first four. Consequently, the first round does not start until the first four games are out of the way and the field is narrowed to 64 teams. So after the first four games the first round starts instead of that being the second round. The Second is now when there are 32 teams left, the sweet sixteen is the third round, and so on</p>
                   <p>In 2020, for the first time in the NCAA's history, the tournament had to be canceled due to fears of the COVID-19 pandemic. This move was done largely out of fear of the virus spreading to players and watchers, with prior attempts to limit the spread without canceling by first choosing to limit attendees, and then canceling the tournament in its entirety</p>
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
