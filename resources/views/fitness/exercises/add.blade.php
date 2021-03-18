<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Exercises</title>

        @include('includes/style')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/exercises.jpeg') }}'); height:510px; object-fit:cover">
            <div class="container">
                <h1 class="display-3 text-center white">EXERCISES</h1>
            </div>
        </div>

        <div class="container" style="padding: 65px;">
            <form method="POST" action="{{ url('/add/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title[]" aria-describedby="emailHelp" />
                    @error('title')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description[]" />
                    @error('description')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Image</label><br />
                    <input type="file" name="avatar[]" />
                    @error('avatar')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field_wrapper"></div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <a href="javascript:void(0);" class="add_button btn btn-primary" title="Add field"><i class="fa fa-plus"></i></a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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

@endif

<script type="text/javascript">
    $(document).ready(function () {
        var maxField = 10; //Input fields increment limitation
        var addButton = $(".add_button"); //Add button selector
        var wrapper = $(".field_wrapper"); //Input field wrapper
        var fieldHTML =
            '<div>  <label for="exampleFormControlTextarea1">Title</label><input type="text" name="title[]" value="" class="form-control"/><a href="javascript:void(0);" class="remove_button"><i class="fa fa-trash"></i></a></div> <div> <label for="exampleFormControlTextarea1">Description</label><input type="text" name="description[]" value="" class="form-control"/><a href="javascript:void(0);" class="remove_button"><i class="fa fa-trash"></i></a></div><div>  <label for="exampleFormControlTextarea1">Image</label><br/><input type="file" name="avatar[]" value="" class=""/><br><a href="javascript:void(0);" class="remove_button"><i class="fa fa-trash"></i></a></div><br>'; //New input field html
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function () {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on("click", ".remove_button", function (e) {
            e.preventDefault();
            $(this).parent("div").remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>
