<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>College</title>

        @include('includes/style')
    

    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('images/sport20.jpg');">
            <div class="container">
                <h1 class="display-3 text-center white">COLLEGES</h1>
            </div>
        </div>
       
        <section class="testimonial py-5 text-center" id="testimonial">
            <div class="container">
                <div class="row col-9" style="positon:center">
                    
                    <div class="col-md-10 py-5 border">
                        <h4 class="pb-4">Please fill with your details</h4>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                              </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                          
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose ...</option>
                                            <option> New Buyer</option>
                                            <option> Auction</option>
                                            <option> Complaint</option>
                                            <option> Feedback</option>
                                          </select>
                                </div>
                                <div class="form-group col-md-12">
                                          <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                          <label class="form-check-label" for="invalidCheck2">
                                            <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                          </label>
                                        </div>
                                      </div>
                            
                                  </div>
                            </div>
                            
                            <div class="form-row">
                                <button type="button" class="btn btn-danger">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
           

        @include('includes/footer')
    </body>
</html>
