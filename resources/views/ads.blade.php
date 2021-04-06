<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

        <title>Ads</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p- banner d-flex align-items-center justify-content-center" style="background-image: url('images/image-ads.jpg'); height: 450px;">
            <div class="container">
                <h1 class="display-3 text-center white">Apply for Ads</h1>
            </div>
        </div>
        <div class="container my-9 p-4 col-md-6">
            <div class="row shadow p-3 mb-5 bg-white rounded align-items-center justify-content-center">
                <legend style="text-align: center;">Fill out the application form</legend>
                <div class="col-md-12 p-4">
                    <form method="POST" action="{{ url('ads/add') }}">
                        @csrf
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md"  name="first_name" placeholder="First Name" />
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-12">
                            <input type="text" class="form-control input-md" name="last_name" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" name="city" placeholder="City" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" name="state" placeholder="State" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" name="phone" placeholder="Phone number" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" name="email" placeholder="Email address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" name="website" placeholder="Your website" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" name="company" placeholder="Company name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name"></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control input-md" name="invest" placeholder="How much you want to invest" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 float-right">
                            <button type="submit" class="btn btn-info float-right" style="background-color:#28a745">Apply</button>
                        </div>
                    </div>
                    </form>

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
