<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('images/logo-crop.png') }}">
 
    <title>Contact Us</title>

    @include('includes/style')
</head>
<style>
    #contatti{
 
  letter-spacing: 2px;
  }
#contatti a{
  color: #fff;
  text-decoration: none;
}


@media (max-width: 575.98px) {

  #contatti{padding-bottom: 800px;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
 }


@media (min-width: 576px) {

   #contatti{padding-bottom: 800px;}

   #contatti .maps iframe{
     width: 100%;
     height: 450px;
   }
 }

@media (min-width: 768px) {

  #contatti{padding-bottom: 350px;}

  #contatti .maps iframe{
    width: 100%;
    height: 850px;
  }
}

@media (min-width: 992px) {
  #contatti{padding-bottom: 200px;}

   #contatti .maps iframe{
     width: 100%;
     height: 700px;
   }
}


#author a{
  color: #fff;
  text-decoration: none;
    
}
</style>

<body>
    @include('includes/header')
    <div class="container-fluid p- banner d-flex align-items-center justify-content-center"
        style="background-image:url('images/contact-us/conatct.jpg'); height:450px">
        <div class="container ">
            <h1 class="display-3 text-center white">Contact Us</h1>
        </div>
    </div>
    <div class="row" id="contatti">
        <div class="container mt-5" >
        
            <div class="row" style="height:550px;">
              <div class="col-md-6 maps" >
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11987.641451913702!2d-80.06008886860934!3d26.71413606676502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d8d5ccb595adc1%3A0x15efc7b51fe16bde!2sWest%20Palm%20Beach%2C%20FL%2C%20USA!5e0!3m2!1sen!2s!4v1608739375881!5m2!1sen!2s"" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="col-md-6">
                <h2 class="text-uppercase mt-3 ">Contact</h2>
                <form action="">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mt-2" placeholder="First Name" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control mt-2" placeholder="Last Name" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control mt-2" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="number" class="form-control mt-2" placeholder="Phone" required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" required></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                    <div class="form-group">
                      
                    </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-light" style="background:#385898; color:white" type="submit">Send message</button>
                    </div>
                  </div>
                </form>
                <div class="text-white">
                <i class="fa fa-phone mt-3" style="color: black"></i> <a href="tel:+" style="color: black">+1 458 7412</a><br>
            
                <i class="fa fa-envelope mt-3" style="color: black"></i> <a href="" style="color: black">email@domain.com</a><br>
                <i class="fa fa-globe mt-3" style="color: black"></i> <a  style="color: black" >West Palm Beach, FL</a><br>
                
                <div class="my-4">
                <a href=""><i class="fa fa-facebook fa-2x pr-4" style="color: #385898"></i></a>
                <a href=""><i class="fa fa-linkedin fa-2x" style="color: #385898"></i></a>
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