<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>College</title>

        @include('includes/style')

        <style>
            .about .content h3 {
                font-weight: 700;
                font-size: 26px;
                color: #555555;
            }

            .about .content ul {
                list-style: none;
                padding: 0;
            }

            .about .content ul li {
                padding-bottom: 10px;
            }

            .about .content ul i {
                font-size: 20px;
                padding-right: 2px;
                color: #34b7a7;
            }

            .about .content p:last-child {
                margin-bottom: 0;
            }
        </style>
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/sport20.jpg') }}');">
            <div class="container">
                <h1 class="display-3 text-center white">COLLEGES</h1>
            </div>
        </div>
        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about p-4">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{ asset('store/'.$college->profilePath) }}" class="img-fluid" alt="" style="height: 300px; object-fit: cover;" />
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content">
                            <h3>{{ $college->name }}</h3>

                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="icofont-rounded-right"></i> <strong>Address:</strong> {{ $college->address }}</li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Country:</strong> {{ $college->country }}</li>
                                        <li><i class="icofont-rounded-right"></i> <strong>City:</strong>{{ $college->city }}</li>
                                    </ul>
                                </div>
                            </div>
                            <p>
                                <strong>Description:</strong>
                                {{ $college->description }}
                            </p>
                            <p>
                                <strong>Methodology:</strong>
                                {{ $college->methodology }}
                            </p>
                            <p>
                                <strong>Services:</strong>
                                {{ $college->services }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            @include('includes/footer')
        </main>
    </body>
</html>
