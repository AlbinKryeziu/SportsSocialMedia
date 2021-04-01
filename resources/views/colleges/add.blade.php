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
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/college16.jpeg') }}'); height:500px;">
        <div class="container">
            <h1 class="display-3 text-center white">New Post</h1>
        </div>
    </div>
    <form method="POST" action="{{ url('/add/colleges') }}"  enctype="multipart/form-data">
        @csrf
    <div class="container my-4 p-4 col-md-6">
        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <legend style="text-align: center;"></legend>
            <div class="col-md-12 p-4">
                <div class="form-group">
                    <label class="control-label" for="name"></label>
                    <div class="col-md-12">
                        <input type="text" class="form-control input-md" name="name" placeholder="Name" />
                    </div>
                    @error('name')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group">
                    <label class="control-label" for="name"></label>
                    <div class="col-12">
                        <input type="text" class="form-control input-md" name="address" placeholder="Address" />
                    </div>
                    @error('address')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="control-label" for=""></label>
                    <div class="col-12">
                    <select class="form-control" id="exampleFormControlSelect1" name="type">
                      <option>What are you</option>
                      <option>College</option>
                      <option>Coach</option>
                      <option>Student</option>
                    </select>
                    </div>
                    @error('type')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="col-12">
                    <label class="control-label">File</label>
                
                    <div>
                        <input type="file" id="avatar" name="avatar" id="avatar" />
                    </div>
                    @error('avatar')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                  <div class="form-group">
                    <label class="control-label" for="name"></label>
                    <div class="col-12">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="services" placeholder="Please this field must contain at least 150 characters"></textarea>
                    </div>
                    @error('services')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="col-12">
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Please this field must contain at least 150 characters"></textarea>
                    @error('description')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 float-right">
                        <button type="submit" class="btn btn-info float-right" style="background-color:#28a745">Add</button>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    </form>



    @include('includes/footer')
</body>
</html>


@if(Session::has('success'))
<script>
    swal("Success", "{{Session::get('success')}}", "success", {
        button: "ok"
    , });

</script>

@endif
@if (count($errors) > 0)
<script type="text/javascript">
    $(document).ready(function() {
        $("#ModalLoginForm").modal("show");
    });

</script>


@endif
