<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Healthy</title>

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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/3984.jpg'); height: 500px;">
            <div class="container">
                <h1 class="display-3 text-center white">COACHES</h1>
            </div>
        </div>

        <div class="container p-3">
            <a href="" data-toggle="modal" data-target="#ModalLoginForm" class="btn-card float-right">Add your coaches </a>
        </div>

        <div class="container" style="padding: 65px;">
            <div class="row">
                @foreach($coaches as $key => $coaches)
                    
               
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 p-3">
                <div class="card">
                  <img class="card-img" src="{{ asset('store/'.$coaches->profile_path) }}" alt="Bologna" style="height: 150px; obejct-fit:cover">
                  <div class="card-img-overlay">
                    <a href="#" class="btn btn-light btn-sm">Coaches</a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{ $coaches->name }}</h4>
                   
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($coaches->description, 40)}}</p>
                   
                  </div>
                  <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                    <div class="views">{{ Carbon\Carbon::parse($coaches->created_at)->format('d F Y') }}
                    </div>
                     
                  </div>
                </div>
                <a href="{{ url('/coaches/details/'.$coaches->id) }}" class="btn btn-light btn-sm col-12 " id="btn">Read</a>
              </div>
              @endforeach
              
           
              
            </div>
          </div>
          <div id="ModalLoginForm" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3 class="modal-title" style="text-align: center;">Add your coaches</h3>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('/coaches/store') }}" enctype="multipart/form-data">
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
                                <label class="control-label">Photo</label>

                                <div>
                                    <input type="file" id="avatar" name="avatar" />
                                </div>
                                @error('avatar')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                @error('description')
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
                                <label for="exampleFormControlTextarea1">City</label>
                                <input type="text" class="form-control input-lg" name="city" value="" />
                                @error('city')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Country</label>
                                <input type="text" class="form-control input-lg" name="country" value="" />
                                @error('country')
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
@if (count($errors) > 0)
<script type="text/javascript">
    $(document).ready(function () {
        $("#ModalLoginForm").modal("show");
    });
</script>
@endif