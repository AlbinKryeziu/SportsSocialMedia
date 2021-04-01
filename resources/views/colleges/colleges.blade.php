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
    <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/college16.jpeg'); height:500px;">
        <div class="container">
            <h1 class="display-3 text-center white">COLLEGES</h1>
        </div>
    </div>
    <div class="container-fluid bg-light ">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-5 pt-3 ">
                <form>
                    <div class="form-group ">
                        <input type="text" class="search-query form-control" name="q" placeholder="Search" />
                </form>
            </div>
        </div>
        @auth
        <div class="col-md-2">
            <a href="{{ url('/add/form/') }}"  class="btn-card float-right">Create New Post</a>
        </div>
    </div>
    @endauth
    </div>
    <br>
    <br>
    <div class="container p-4">
        <div class="row">
          <div class="col-md-8">
            @foreach($colleges as $key => $college)
            <div class="card mb-4">
              <img class="card-img-top" src="{{  asset('store/'.$college->profilePath)  }}" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">{{ $college->name }}</h2>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($college->description, 200)}}</p>
              
              </div>
              <div class="card-footer text-muted">
               {{ \Carbon\Carbon::parse($college->created_at)->format('M d Y ') }}
                <a href="">{{ $college->user->name }}</a>
                <a href="{{ url('/info/colleges/'.$college->id) }}" class="btn-card btn float-right ">Read More →</a>
              </div>
            </div> 
            @endforeach
          </div>
          <div class="col-md-4">
            {{-- <div class="card my-4">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div> --}}
            <div class="card my-3">
              <h5 class="card-header">Categories</h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#">College</a>
                      </li>
                      <li>
                        <a href="#">Coaches</a>
                      </li>
                      <li>
                        <a href="#">Student</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  
        
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
