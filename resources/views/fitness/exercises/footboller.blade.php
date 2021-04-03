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

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/other/f3.png') }}'); height: 510px; object-fit: cover;">
            <div class="container">
                <h1 class="display-3 text-center white">GYM WORKOUTS FOR FOOTBALLERS</h1>
            </div>
        </div>

        <div class="container" style="padding: 85px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mt-4">EXERCISES FOR SPEED</h1>

                    <hr />

                    <p>
                        These exercises are designed to help you accelerate faster so you can speed past the defence and reach those long crosses for a magnificent finish.
                        <br />
                        <br />
                    </p>

                    <hr />

                    <h2>SINGLE-LEG SQUAT</h2>

                    <img class="img-fluid rounded" src="{{ asset('images/other/f1.png') }}" style="width: 900px; object-fit: cover;" alt="" />

                    <hr />

                    <p>
                        WHY THEY HELP: When you push off into a sprint, you’re essentially putting all your power into one leg at a time. While regular squats are great for activating key muscle groups in your legs — quads, hamstrings and glutes — single-leg squats help train each leg to take the full weight of the body as they would do in a sprint to develop the power you’ll need to launch yourself forward when chasing a fast through-ball.
                       
                    </p>
                    <p>HOW TO DO THEM:</p>
                    <p>
                        <ul>
                            <li>Stand on one foot and hold your other leg out in front of you as close to hip height as you can get.</li>
                            <li> Slowly bend the knee of your supporting leg, holding your arms out in front of you to help you stay balanced.</li>
                            <li>Lower yourself as low as you can and hold that position for a second before slowly rising back to your starting position.</li>
                        </ul>
                    </p>
                    <hr />

                    <h2>DUMBBELL BENCH STEP-UPS</h2>

                 

                    <hr />

                    <p>
                        WHY THEY HELP: Tony Strudwick, head of fitness and conditioning for Manchester United, suggests doing dumbbell bench step-ups because they help develop the same muscle group you’ll be using when going from a sprint to a jump to get those satisfying set-piece headers.
                       
                    </p>
                    <p>HOW TO DO THEM:</p>
                    <p>
                        <ul>
                            <li> Stand next to a bench and hold a pair of dumbbells at arm’s length at your sides.</li>
                            <li> Place your foot (the one closest to the bench) onto the bench and extend your leg until it’s straight so that your body is pushed off the ground.</li>
                            <li>Keeping your other foot elevated, hold this position for two seconds before returning to the starting position.</li>
                        </ul>
                    </p>
                    <hr />

                    <h2>EXERCISES FOR STAMINA</h2>

                 

                    <hr />

                    <p>
                        If you’ve ever completed a full 90-minute match, you’ll know how difficult it is to keep going in the final minutes, even without extra time to worry about.
                       
                    </p>
                <p>These exercises will help you build the stamina you need to endure high-intensity matches without your energy levels being depleted before the final whistle.</p>
                <hr />

                <h2>HIIT ON TREADMILL</h2>

             

                <hr />

                <p>
                    WHY IT HELPS: High-intensity interval training (HIIT) mimics the rhythms of a real football match, where you might quickly switch between walking around the pitch and sprinting into the box. It conditions your body to quickly switch from the aerobic to the anaerobic system and back again. That way your body learns to use oxygen more efficiently to prepare for the next sudden change of pace.
                   
                </p>
                <p>HOW TO DO THEM:</p>
                <p>
                    <ul>
                        <li>On a treadmill, set the incline to 1% and gradually build speed from a gentle run for 10 minutes.</li>
                        <li>Once you’ve reached medium effort, run for 30 seconds at your maximum speed</li>
                        <li>Return to jogging for 3 minutes</li>
                    </ul>
                </p>
                   
                    <hr />

                    <blockquote class="blockquote">
                        <p class="mb-0">Social Media Sport</p>
                    </blockquote>

                    <div class="media mb-4"></div>
                </div>
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
