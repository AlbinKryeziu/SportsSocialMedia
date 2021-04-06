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
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/tips1.jpeg') }}'); height:500px;">
        <div class="container">
            <h1 class="display-3 text-center white">Edit - {{ $tip->title }}</h1>
        </div>
    </div>
    <form method="POST" action="{{ url('tips/update/'.$tip->id) }}"  enctype="multipart/form-data">
        @csrf
    <div class="container my-4 p-4 col-md-6">
        <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
            <legend style="text-align: center;"></legend>
            <div class="col-md-12 p-4">
                <div class="form-group">
                   
                    <div class="col-md-12">
                        <label class="control-label" for="name">Title</label>
                        <input type="text" class="form-control input-md" name="title" value="{{ $tip->title }}" />
                    </div>
                    @error('name')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                </div> 
                  <div class="form-group">
                    <div class="col-12">
                      @if(substr ($tip->image, -2) == "qt")
                   <div id="video-player"> 
                <video width="100%" controls> 
                    <source src="{{  asset('store/'.$tip->image)  }}" type="video/mp4">  
                 </video> 
              </div> 
              @else 
              <img class="card-img-top" src="{{  asset('store/'.$tip->image)  }}" alt="Card image cap">
              @endif
             <br>
             <br>
                    <label class="control-label">File</label>
                
                    <div>
                        <input type="file" id="avatar" name="avatar"  value="{{ $tip->profilePath }}"/>
                    </div>
                    @error('avatar')
                    <div class="error" style="color: red;">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-12">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $tip->description }}</textarea>
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
