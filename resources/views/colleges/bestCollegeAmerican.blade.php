<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Colleges in America</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/colleges/soccer/soocer1.png') }}'); height:500px;">
            <div class="container">
                <h1 class="display-3 text-center white">Top  Colleges in America</h1>
            </div>
        </div>
        <div class="container" >
            <div class="row" style="padding: 80px;">
                <div class="col-md-12">
                    <h1 >The 10 Top Football Schools in America</h1>
                    <hr />
                    <p class="p-1">
                        Given football’s long history in university life, success on the field can ebb and flow. To calculate this portion of a school’s score, we considered a school’s overall win-loss record, their history in the
                        Associated Press poll, the number of national championships won during the poll era, and the number of bowls or playoffs they have played in, with bonuses for BCS bowls.
                    </p>
                    <br />
                    <br />
                    <table class="table" style="border: 1px solid #ECEDED">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">RANK</th>
                                <th scope="col">COLLEGES</th>
                                <th scope="col">LOCATION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td ><a href="{{ url('https://www.osu.edu') }}" target="_blank" style="color:#1d7f95;">Ohio State University </a></td>
                                <td>Columbus, OH</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="{{ url('https://www.nd.edu/') }}"  target="_blank" style="color:#1d7f95;">University of Notre Dame</a></td>
                                <td>Notre Dame, IN</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="{{ url('https://www.ua.edu/') }}" target="_blank" style="color:#1d7f95;">The University of Alabama</a></td>
                                <td>Tuscaloosa, AL</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="{{ url('https://www.usc.edu/') }}" target="_blank" style="color:#1d7f95;">University of Southern California</a></td>
                                <td>Los Angeles, CA</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="{{ url('https://www.ou.edu/') }}" style="color:#1d7f95;">University of Oklahoma</a></td>
                                <td>Norman, OK</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><a href="{{ url('https://umich.edu/') }}" target="_blank" style="color:#1d7f95;">University of Michigan</a></td>
                                <td>Ann Arbor, MI</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><a href="{{ url('https://www.utexas.edu/') }}" target="_blank" style="color:#1d7f95;">The University of Texas at Austin</a></td>
                                <td>Columbus, OH</td>
                            </tr>

                            <tr>
                                <th scope="row">8</th>
                                <td><a href="{{ url('https://www.unl.edu/') }}" target="_blank" style="color:#1d7f95;">University of Nebraska-Lincoln</a></td>
                                <td>Lincoln, NE</td>
                            </tr>

                            <tr>
                                <th scope="row">9</th>
                                <td><a href="{{ url('https://www.lsu.edu/') }}" target="_blank" style="color:#1d7f95;">Louisiana State University and Agricultural & Mechanical College</a></td>
                                <td>Baton Rouge, LA</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><a href="{{ url('https://www.fsu.edu/') }}"target="_blank"  style="color:#1d7f95;">Florida State University</a></td>
                                <td>Tallahassee, FL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: -100px;">
            <div class="row" style="padding: 80px;">
                <div class="col-md-12">
                    <h1 >Top Soccer Universities in America</h1>
                    <hr />
                    <p class="p-1">
                        Below is the list of the best soccer colleges in America according to the latest statistics.
                    </p>
                    <br />
                    <br />
                    <table class="table" style="border: 1px solid #ECEDED">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">RANK</th>
                                <th scope="col">COLLEGES</th>
                                <th scope="col">LOCATION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td ><a href="{{ url('https://www.unc.edu/') }}" target="_blank" style="color:#1d7f95;">University of North Carolina, Chapel Hill </a></td>
                                <td>Chapel Hill, NC</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="{{ url('https://www.nd.edu/') }}"  target="_blank" style="color:#1d7f95;">University of Notre Dame</a></td>
                                <td>Notre Dame, IN</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="{{ url('https://www.ucla.edu/') }}" target="_blank" style="color:#1d7f95;">UCLA</a></td>
                                <td>Los Angeles, CA</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="{{ url('https://www.virginia.edu/') }}" target="_blank" style="color:#1d7f95;">University of Virginia</a></td>
                                <td>Charlottesville, VA</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="{{ url('https://duke.edu/') }}" style="color:#1d7f95;">Duke University</a></td>
                                <td>Durham, NC</td>
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="container" style="margin-top: -100px;">
            <div class="row" style="padding: 80px;">
                <div class="col-md-12">
                    <h1 >Top Soccer Universities in America</h1>
                    <hr />
                    <p class="p-1">
                        Below is the list of the best soccer colleges in America according to the latest statistics.
                    </p>
                    <br />
                    <br />
                    <table class="table" style="border: 1px solid #ECEDED">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">RANK</th>
                                <th scope="col">COLLEGES</th>
                                <th scope="col">LOCATION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td ><a href="{{ url('https://www.unc.edu/') }}" target="_blank" style="color:#1d7f95;">University of North Carolina, Chapel Hill </a></td>
                                <td>Chapel Hill, NC</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><a href="{{ url('https://www.nd.edu/') }}"  target="_blank" style="color:#1d7f95;">University of Notre Dame</a></td>
                                <td>Notre Dame, IN</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><a href="{{ url('https://www.ucla.edu/') }}" target="_blank" style="color:#1d7f95;">UCLA</a></td>
                                <td>Los Angeles, CA</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><a href="{{ url('https://www.virginia.edu/') }}" target="_blank" style="color:#1d7f95;">University of Virginia</a></td>
                                <td>Charlottesville, VA</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><a href="{{ url('https://duke.edu/') }}" style="color:#1d7f95;">Duke University</a></td>
                                <td>Durham, NC</td>
                            </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}

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
