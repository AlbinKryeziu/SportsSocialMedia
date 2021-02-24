<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ url('images/logo-crop.png') }}" />

        <title>Contact Us</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p- banner d-flex align-items-center justify-content-center" style="background-image: url('images/image-ads.jpg'); height: 450px;">
            <div class="container">
                <h1 class="display-3 text-center white">Apply for Ads</h1>
            </div>
        </div>
        <div class="container my-4 p-4 col-md-6">
            <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
                <legend style="text-align: center;">Apply for Ads</legend>
                <div class="col-md-8 p-4">
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="First Name" />
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-12">
                            <input type="text" class="form-control input-md" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="City" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="State" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="Phone number" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="Email address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="Your website" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="Company name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" placeholder="How much you want to invest" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 float-right">
                            <button type="submit" class="btn btn-info float-right" style="background-color:#28a745">Apply</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

      
        @include('includes/footer')
    </body>
</html>
