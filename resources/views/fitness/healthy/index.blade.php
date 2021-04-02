<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Healthy</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

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
    </style>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/leo.jpeg'); height: 610px; object-fit: cover;">
            <div class="container">
                <h1 class="display-3 text-center white">HEALTHY</h1>
            </div>
        </div>
        <div class="container p-3">
            <a href="" data-toggle="modal" data-target="#ModalLoginForm" class="btn-card float-right">Add your healthy food</a>
        </div>

        <div class="container" style="padding: 65px;">
            <div class="row">
                @foreach($healthyFood as $key => $healthy)

                <div class="col-12 col-sm-8 col-md-6 col-lg-4 p-3">
                    <div class="card">
                        <img class="card-img" src="{{ asset('store/'.$healthy->profilePath) }}" alt="Bologna" style="height: 150px; obejct-fit: cover;" />
                        <div class="card-img-overlay">
                            <a href="#" class="btn btn-light btn-sm">Healthy Food</a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $healthy->title }}</h4>
                            <small class="text-muted cat"> <i class="far fa-clock text-info"></i>Protein : {{ $healthy->protein }} <i class="fas fa-users text-info"></i> Calcium : {{ $healthy->calcium }} </small>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($healthy->description, 80)}}</p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                            <div class="views">{{ Carbon\Carbon::parse($healthy->created_at)->format('d F Y') }}</div>
                        </div>
                    </div>
                    <a href="{{ url('/healthy/more/'.$healthy->id) }}" class="btn btn-light btn-sm col-12" id="btn">Read</a>
                </div>
                @endforeach
            </div>
        </div>
        <div id="ModalLoginForm" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3 class="modal-title" style="text-align: center;">Add your healthy food</h3>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('/healthy/store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="title" value="" />
                                </div>
                                @error('title')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Protein</label>

                                <div>
                                    <input type="text" class="form-control input-lg" name="protein" value="" />
                                </div>
                                @error('protein')
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
                                <label class="control-label">Calcium</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="calcium" />
                                </div>
                                @error('calcium')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Carbohydrates</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="carbohydrates" />
                                </div>
                                @error('carbohydrates')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Please this field must contain at least 150 characters"></textarea>
                                @error('description')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

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

        @include('includes/footer')
    </body>
</html>
@if(Session::has('success'))
<script>
    swal("Success", "{{Session::get('success')}}", "success", {
        button: "ok",
    });
</script>
@endif @if (count($errors) > 0)
<script type="text/javascript">
    $(document).ready(function () {
        $("#ModalLoginForm").modal("show");
    });
</script>
@endif
