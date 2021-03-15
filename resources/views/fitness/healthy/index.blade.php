<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>About Us</title>

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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/health6.jpg'); height:510px; object-fit:cover">
            <div class="container">
                <h1 class="display-3 text-center white">HEALTHY</h1>
            </div>
        </div>
        <div class="container p-3">
            <a href="" data-toggle="modal" data-target="#ModalLoginForm" class="btn-card float-right">Add your college</a>
        </div>

        <div class="container" style="padding: 65px;">
            <div class="row">
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 p-3">
                <div class="card">
                  <img class="card-img" src="{{ asset('images/health6.jpg') }}" alt="Bologna">
                  <div class="card-img-overlay">
                    <a href="#" class="btn btn-light btn-sm">Healthy Food</a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Pasta with Prosciutto</h4>
                    <small class="text-muted cat">
                      <i class="far fa-clock text-info"></i> 30 minutes
                      <i class="fas fa-users text-info"></i> 4 portions
                    </small>
                    <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
                   
                  </div>
                  <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                    <div class="views">Oct 20, 12:45PM
                    </div>
                  
                    <div class="stats">
                         <i class="far fa-eye"></i> 1347
                      <i class="far fa-comment"></i> 12
                    </div>
                     
                  </div>
                </div>
                <a href="#" class="btn btn-light btn-sm col-12 " id="btn">Read</a>
              </div>
              
              
           
              
            </div>
          </div>

   
           
<br>
        @include('includes/footer')
    </body>
</html>
