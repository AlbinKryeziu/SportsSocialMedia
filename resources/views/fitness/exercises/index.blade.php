<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Exercises</title>

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
#btn{
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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/exercises.jpeg'); height:510px; object-fit:cover">
            <div class="container">
                <h1 class="display-3 text-center white">EXERCISES</h1>
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
            <a href="{{ url('/add/exercises') }}"  class="btn-card float-right">Add your exercises</a>
          </div>
      </div>
      @endauth
      </div>
        <div class="container" style="padding: 65px;">
            <div class="row">
                @foreach($exercises as $key => $exercise)
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 p-3">
                <div class="card">
                  <img class="card-img" src="{{ asset('store/'.$exercise->example->first()->image) }}" alt="Bologna" style="height: 150px; obejct-fit:cover">
                  <div class="card-img-overlay">
                    <a href="#" class="btn btn-light btn-sm">Exercises</a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{ $exercise->example->first()->title }}</h4>
                    
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($exercise->example->first()->description, 80)}}</p>
                   
                  </div>
                  <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                    <div class="views">{{ Carbon\Carbon::parse($exercise->created_at)->format('d F Y') }}
                    </div>
                     
                  </div>
                </div>
                <a href="{{ url('exercises/details/'.$exercise->id) }}" class="btn btn-light btn-sm col-12 " id="btn">Read</a>
              </div>
              @endforeach
              
           
              
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