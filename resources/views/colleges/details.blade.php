<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>About Us</title>

        @include('includes/style')
        <style>
         .firma-card{
  background: #fff;
  border: 1px solid;
  border-color: #c7bdbd40;
  margin: 1rem auto;
  border-radius: 5px;
  box-shadow: 0 4px 6px -1px rgb(198, 207, 234);
  margin-bottom: 1.6%;
  overflow: hidden;
}
.firma-resim{
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  transition: -webkit-transform .2s;
  transition: transform .2s;
 
}
.firmalar{
  background: #f1f4f5c7;
}

@media (max-width: 768px) {

  .firma-logo{
        width: calc(33.66667% - .75rem);
        height: 6.5rem;
        margin: 5px .375rem;
  }
  .firma-resim {
    position: relative;
    z-index: 0;
    height: 200px;
  }
  .img-padding-no{
    padding-right: 0px;
    padding-left: 0px;
  }
}

</style>

    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/sport20.jpg');">
            <div class="container">
                <h1 class="display-3 text-center white">COLLEGES</h1>
            </div>
        </div>
        <div class="firmalar p-4">    
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="firma-card row">
                            <div class="col-md-5 img-padding-no">
                                <div class="firma-resim" style=" background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);">
                                    
                                    <a href="#">
        
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="firma-aciklama card-body">
                                    <h4>Ali Bulut</h4>
                                    <ul class="yacht-info__list space-2">
                                       
                                            <p><strong>Description</strong>akefjkljaeiofjioajefiojaijfoiajfoijeoa;jf;oiaf</p>
                                        
                                        <li>
                                            <i class="search-boat-icon fa search-captain vertical-align-mid"></i>
                                            <span class="vertical-align-mid">Kaptanlı</span>
                                        </li>
                                        <li>
                                            <i class="search-boat-icon fa search-captain vertical-align-mid"></i>
                                            <span class="vertical-align-mid">Kaptanlı</span>
                                        </li>
                                        <li>
                                            <i class="search-boat-icon fa search-captain vertical-align-mid"></i>
                                            <span class="vertical-align-mid">Kaptanlı</span>
                                        </li>
                                        <li>
                                            <i class="search-boat-icon fa search-captain vertical-align-mid"></i>
                                            <span class="vertical-align-mid">Kaptanlı</span>
                                        </li>
                                    </ul>
        
        
                                </div>
                            </div>
                        </div>
                       
                            </div>
                        </div>
        
        
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            </div>

        @include('includes/footer')
    </body>
</html>
