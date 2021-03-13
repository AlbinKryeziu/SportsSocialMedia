<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>About Us</title>

        @include('includes/style')
        <style>
            @import url("https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i");
            section {
                padding: 100px 0;
            }
            .details-card {
            }

            .card-content {
                background: #ffffff;
                border: 4px;
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            }

            .card-img {
                position: relative;
                overflow: hidden;
                border-radius: 0;
                z-index: 1;
            }

            .card-img img {
                width: 100%;
                height: auto;
                display: block;
            }

            .card-img span {
                position: absolute;
                top: 15%;
                left: 12%;
                background: #1abc9c;
                padding: 6px;
                color: #fff;
                font-size: 12px;
                border-radius: 4px;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                -ms-border-radius: 4px;
                -o-border-radius: 4px;
                transform: translate(-50%, -50%);
            }
            .card-img span h4 {
                font-size: 12px;
                margin: 0;
                padding: 10px 5px;
                line-height: 0;
            }
            .card-desc {
                padding: 1.25rem;
            }

            .card-desc h3 {
                color: #000000;
                font-weight: 600;
                font-size: 1.5em;
                line-height: 1.3em;
                margin-top: 0;
                margin-bottom: 5px;
                padding: 0;
            }

            .card-desc p {
                color: #747373;
                font-size: 14px;
                font-weight: 400;
                font-size: 1em;
                line-height: 1.5;
                margin: 0px;
                margin-bottom: 20px;
                padding: 0;
                font-family: "Raleway", sans-serif;
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
        </style>
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/sport20.jpg');">
            <div class="container">
                <h1 class="display-3 text-center white">COLLEGES</h1>
            </div>
        </div>

        <div class="container p-4">
            <a href="" data-toggle="modal" data-target="#ModalLoginForm" class="btn-card float-right">Add your college</a>
        </div>
        <section class="details-card">
            <div class="container">
                <div class="row">
                    @foreach($colleges as $key => $college)

                    <div class="col-md-4 p-2">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="{{ asset('store/'.$college->profilePath) }}" alt="" style="height: 200px; object-fit: cover;" />
                            </div>
                            <div class="card-desc">
                                <h3>{{ $college->name }}</h3>
                                <p>{{ \Illuminate\Support\Str::limit($college->description, 25)}}</p>
                                <a href="{{ url('/info/colleges') }}" class="btn-card">Read</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
        <div id="ModalLoginForm" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3 class="modal-title" style="text-align: center;">Add your college</h3>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('/add/colleges') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="name" value="" />
                                </div>
                                @error('name')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="address" value="" />
                                </div>
                                @error('address')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Photo</label>
                                <div>
                                    <input type="file" id="avatar" name="avatar" />
                                </div>
                                @error('avatar')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Services</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="services" value="" />
                                </div>
                                @error('services')
                                <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Methodology</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="methodology" value="" />
                                </div>
                                @error('methodology')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                            @error('description')
                            <div class="error" style="color: red;">{{ $message }}</div>
                            @enderror

                            <div class="form-group">
                                <div>
                                    <div class="checkbox"></div>
                                </div>
                            </div>
                            <div class="form-group float-right">
                                <div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        @include('includes/footer') @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function () {
                $("#ModalLoginForm").modal("show");
            });
        </script>
        @endif
    </body>
</html>
