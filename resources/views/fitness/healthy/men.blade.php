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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/other/men1.jpeg') }}'); height: 510px; object-fit: cover;">
            <div class="container">
                <h1 class="display-3 text-center white">HEALTHY MEN</h1>
            </div>
        </div>

        <div class="container" style="padding: 85px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mt-4">A balanced diet for men</h1>

                    <hr />

                    <p>
                        Men have different daily nutritional requirements to women and, below, our nutritionist has offered guidance and recipe ideas for men seeking a balanced diet for good health. But what exactly is a ‘balanced diet’?
                         <br>
                         <br>
                        The Eatwell Guide defines the different types of foods we should be eating and in what proportions. The guide explains some simple rules to follow like getting a minimum five-a-day of fruit and veg, including wholegrains and choosing more fish, poultry, beans and pulses, less red meat and lower fat, lower sugar dairy (or dairy-free alternatives). But that’s not the whole story. How much should you be eating and is there an ideal time to eat protein, carbs or fats? Read on for our guide to healthy eating around the clock.
                    </p>

                    <hr />
                    <h2>Breakfas</h2>

                    <img class="img-fluid rounded" src="{{ asset('images/other/bf.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />

                    <hr />

                    <p>
                        Whether your first stop is the office or the gym, adding protein to your breakfast is a great way to rev up your metabolism. If you do exercise first thing, a protein breakfast helps promote muscle recovery and repair. Eggs are an ideal choice because they provide a good balance of quality protein and fat.
                        <br>
                        <br>
                        Other options include lean ham, fish like salmon or haddock, as well as lower fat dairy or dairy-free alternatives. Protein foods slow stomach emptying, which means you stay fuller for longer so you’ll tend to eat fewer calories the rest of the day.
                    </p>
                    <hr />
                    <h2>Mid-morning snack</h2>

               

                    <hr />

                    <p>
                        Eating well in the morning is vital for balancing energy levels. The ideal is to eat little and often, but you need to make every snack work for you. This means choosing snacks that satisfy your energy needs plus supply extra benefits like topping up your five-a-day.
                    </p>
                    <hr />
                    
                   

                    <h2>Lunch</h2>

                    
                    <img class="img-fluid rounded" src="{{ asset('images/other/lg.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />

                    <p>
                        Make lunch a mix of lean protein and starchy carbs. Carb-rich foods supply energy so you’ll suffer from mid-afternoon slumps if you cut them out. The key is to choose carbs that produce a steady rise in blood sugar, which means passing on sugary ‘white’ foods and going for high-fibre wholegrains, which help you manage those afternoon munchies. Wholegrains like rye, wholewheat and barley keep you satisfied for longer. In fact studies show rye bread keeps blood sugar stable for up to 10 hours – a sure way to dampen those mid-afternoon energy crashes.

                        Opt for an open sandwich topped with lean beef or pork, salmon, turkey or chicken with plenty of salad or toast some wholegrain bread and enjoy with baked beans.
                    </p>
                    <hr />
                    <h2>Mid-afternoon</h2>

                    

                    <hr />

                    <p>
                        The next time you're making a salad, why not throw some watercress in there? The green veggie is an excellent source of folate, which has been shown to stimulate weight loss. In fact, a study in the British Journal
                        of Nutrition found that those with the highest folate levels lose about 8.5 times more weight when dieting than those with the lowest levels of folate. What's more? A separate study in the British Journal of Cancer
                        found that higher dietary folate intake reduces breast cancer risk. In addition to watercress, other good sources of folate include spinach, asparagus, and papaya.
                    </p>
                    <hr />
                    <h2>Dinner</h2>

                    <img class="img-fluid rounded" src="{{ asset('images/other/diner.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />

                    <hr />

                    <p>
                        Don’t curfew carbs, they’re low in fat, fibre-rich and help you relax in the evening. Combine them with essential fats which your body can use overnight, along with protein, for regeneration and repair – this combination is especially important for healthy skin and hair. You can get these healthy fats from oily fish like salmon, trout and mackerel as well as nuts, seeds and their oils.
                         <br>
                         <br>
                        Fill half your plate with a colourful variety of vegetables or salad, drizzle with a dressing made from linseed or rapeseed oil and add meat, fish or beans with a serving of brown rice, quinoa or wholemeal pasta.
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
