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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/college16.jpeg'); height:500px;">
            <div class="container">
                <h1 class="display-3 text-center white">COLLEGES</h1>
            </div>
        </div>
        <div class="container-fluid bg-light ">
            <div class="row align-items-center justify-content-center">
                           
                                <div class="col-md-5 pt-3 ">
                                    <form action="">
                                   <div class="form-group ">
                                    <input type="text" class="search-query form-control" placeholder="Search" />
                                </form>
                                   </div>
                                </div>
                           
                              
                                
                                <div class="col-md-2">
                                    <a href="" data-toggle="modal" data-target="#ModalLoginForm" class="btn-card float-right">Add your college</a>
                                </div>
                            </div>
        </div>

        <div class="container" style="padding: 65px;">
            <div class="row">
                @foreach($colleges as $key => $college)
                    
               
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 p-3">
                <div class="card">
                  <img class="card-img" src="{{ asset('store/'.$college->profilePath) }}" alt="Bologna" style="height: 150px; obejct-fit:cover">
                  <div class="card-img-overlay">
                    <a href="#" class="btn btn-light btn-sm">College</a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{ $college->name }}</h4>
                   
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($college->description, 30)}}</p>
                   
                  </div>
                  <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                    <div class="views">{{ Carbon\Carbon::parse($college->created_at)->format('d F Y') }}
                    </div>
                     
                  </div>
                </div>
                <a href="{{ url('/info/colleges/'.$college->id) }}" class="btn btn-light btn-sm col-12 " id="btn">Read</a>
              </div>
              @endforeach
              
           
              
            </div>
          </div>
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
                                    <input type="text" class="form-control input-lg" name="address"  value="" />
                                </div>
                                @error('address')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Photo</label>
                            
                                <div>
                                    <input type="file" id="avatar" name="avatar"  />
                                </div>
                                @error('avatar')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Services</label>
                                <div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="services"></textarea>
                                
                                </div>
                                @error('services')
                                <div class="error" style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Methodology</label>
                                <div>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="methodology"></textarea>
                                   
                                </div>
                                @error('methodology')
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
@if(Session::has('success'))
<script>
    swal("Success", "{{Session::get('success')}}", "success", {
        button: "ok",
    });
</script>

@endif
@if (count($errors) > 0)
<script type="text/javascript">
    $(document).ready(function () {
        $("#ModalLoginForm").modal("show");
    });
</script>
@endif