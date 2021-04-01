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
        #btn {
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
        #btn {
            background-color: #1abc9c;
            color: white;
        }
        #btn:hover {
            background: orange;
        }
    </style>
    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/other/frut.jpeg') }}'); height: 510px; object-fit: cover;">
            <div class="container">
                <h1 class="display-3 text-center white">HEALTHY FOODS</h1>
            </div>
        </div>

        <div class="container" style="padding: 85px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mt-4">Top 10 healthy foods you should be eating</h1>


                    <hr />

                    <p>It seems like every day we wake up to a new "superfood" that will change your life. With the abundance of information available, how do you know what's actually good for you? Here are the top 15 foods you should be eating according to our experts:</p>

                    <hr />
                    <h2>Fruits & Vegetable</h2>

                    <img class="img-fluid rounded" src="{{ asset('images/other/frut.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />

                    <hr />
                   
                    <p>Newsflash: Vegetables can help you lose weight!

                        Okay, okay, we admit that's not exactly breaking news, but did you know that when it comes to rapid weight loss some veggies reign supreme while others fall fairly flat in comparison? It's true! Thanks to their specific nutritional profiles, certain produce-aisle picks can help you trim down by revving your metabolism, turning off belly fat genes and frying flab—and that's on top of all their other health-boosting benefits. Read on to learn which delicious picks fit the bill and discover delicious ways to incorporate them into your diet.</p>
                        <hr />
                        <h2>Spinach</h2>

                        <img class="img-fluid rounded" src="{{ asset('images/other/spinach.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
    
                        <hr />
                       
                        <p>Popeye's favorite veggie is a great source of not only protein, but also vitamins A and C, antioxidants and heart-healthy folate. One cup of the green superfood has nearly as much protein as a hard-boiled egg—for half the calories. Looking to get the biggest nutritional bang for your buck? Be sure to steam your spinach instead of eating it raw. This cooking method helps retain vitamins and makes it easier for the body to absorb the green's calcium content. Add a handful to soups, protein shakes, omelets, pasta dishes, and veggie stir-fries, or simply steam it and top with pepper, garlic, olive oil and a squeeze of lemon.</p>
                            <hr />
                            <h2>Mustard Greens</h2>

                            <img class="img-fluid rounded" src="{{ asset('images/other/natyral.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
        
                            <hr />
                           
                            <p>Another veggie worthy of a spot in your diet is mustard greens. When steamed, they provide a whopping 922 percent of your RDI for vitamin K, 96 percent of your vitamin A, and 47 percent of your vitamin C per cup, and they have a host of disease-fighting properties thanks to their high glucosinolate content. Glucosinolates are plant chemicals that your body converts into isothiocyanates, which have been shown to ward off cancer. In fact, according to a review in the journal Current Pharmaceutical Design, glucosinolates may protect against and may even represent a therapeutic strategy against several forms of the deadly illness.</p>
                                <hr />
                              
                            <h2>Kale</h2>

                            <img class="img-fluid rounded" src="{{ asset('images/other/kale.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
        
                            <hr />
                           
                            <p>
                                Kale has definitely had its moment in the sun (and then some) but as far as healthy veggies go, it's certainly worthy of praise. The cruciferous green (which is even available in McDonald's these days) is loaded with health-boosting nutrients like vitamin A, phosphorus, and B vitamins like folate, and it boasts twice the vitamin C as spinach, another nutritional superstar. Furthermore, a study in the journal JRSM Cardiovascular Disease found that a high daily consumption of green leafy and cruciferous veggies (such as kale) significantly reduced incidence of several types of cardiovascular disease, the leading cause of death among women in the U.S. And since the veggie is as versatile as they come, feel free to add some kale to an array of meals ranging from egg dishes to tacos, and drinks such as juices and smoothies.
                            </p>
                                <hr />
                                <h2>Watercress</h2>

                                <img class="img-fluid rounded" src="{{ asset('images/other/wat.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
            
                                <hr />
                               
                                <p>
                                    The next time you're making a salad, why not throw some watercress in there? The green veggie is an excellent source of folate, which has been shown to stimulate weight loss. In fact, a study in the British Journal of Nutrition found that those with the highest folate levels lose about 8.5 times more weight when dieting than those with the lowest levels of folate. What's more? A separate study in the British Journal of Cancer found that higher dietary folate intake reduces breast cancer risk. In addition to watercress, other good sources of folate include spinach, asparagus, and papaya.
                                </p>
                                    <hr />
                                    <h2>Sun-Dried Tomatoes
                                    </h2>

                                    <img class="img-fluid rounded" src="{{ asset('images/other/sun.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
                
                                    <hr />
                                   
                                    <p>
                                        Tomatoes are packed with the antioxidant lycopene, which studies show can decrease your risk of bladder, lung, prostate, skin, and stomach cancers, as well as reduce the risk of coronary artery disease. Just one cup of the sun-dried version will lend you 6 grams of satiating protein, 7 grams of fiber and 75 percent of your RDA of potassium, which is essential for heart health and tissue repair. They're also rich in vitamins A and K. Use them as a pizza topping, a tangy addition to salads, or snack on them right out of the bag.
                                    </p>
                                        <hr />
                                        <h2>Artichokes</h2>

                                        <img class="img-fluid rounded" src="{{ asset('images/other/art.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
                    
                                        <hr />
                                       
                                        <p>
                                            Ghrelin is your body's "I'm hungry" hormone, which is suppressed when your stomach is full, so eating satiating high-fiber and high-protein foods is a no-brainer. The humble artichoke is a winner on both counts: It has almost twice as much fiber as kale (10.3 g per medium artichoke, or 40 percent of the daily fiber the average woman needs) and one of the highest protein counts among vegetables. Boil and eat the whole shebang as a self-contained salad (why not add a little goat cheese and sun-dried tomatoes?), toss the leaves with your favorite greens and dressing, or peel and pop the hearts onto healthy pizzas and flatbreads and lose belly fat.
                                        </p>
                                            <hr />
                                            <h2>Peas</h2>

                                        <img class="img-fluid rounded" src="{{ asset('images/other/pass.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
                    
                                        <hr />
                                       
                                        <p>
                                            It's enough to make Popeye do a spit take: Despite their wimpy reputation, a cup of green peas contains eight times the protein of a cup of spinach. And with almost 100 percent of your daily value of vitamin C in a single cup, they'll help keep your immune system up to snuff. Layer them into a mason jar salad or add them to an omelet to boost eggs' satiating power
                                        </p>
                                            <hr />
                                    
                                            <h2>Broccoli</h2>

                                        <img class="img-fluid rounded" src="{{ asset('images/other/broccoli.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
                    
                                        <hr />
                                       
                                        <p>
                                            In addition to warding off prostate, breast, lung and skin cancers, this flowery vegetable can also help you whittle your middle. According to experts, broccoli contains a phytonutrient called sulforaphane that increases testosterone and fights off body fat storage. It's also rich in vitamin C ( a mere cup of the stuff can help you hit your daily mark), a nutrient that can lower levels of cortisol during stressful situations. The only downside? It can make some people with sensitive stomachs a bit gassy and bloated—which isn't a good look if you're planning to hit the beach or rock a tight-fitting outfit. That's no reason to steer clear of this veggie on a day-to-day basis, though. Whip up our parmesan roasted broccoli recipe to reap the belly-flattening benefits—just maybe not the day before you need to look your leanest.
                                        </p>
                                            <hr />
                                    
                                            <h2>Peppers</h2>

                                        <img class="img-fluid rounded" src="{{ asset('images/other/peap.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />
                    
                                        <hr />
                                       
                                        <p>
                                            You may have heard that spicy hot peppers can help you scorch calories, but did you know that mild peppers can have the same effect? Thanks to a metabolism-boosting compound, dihydrocapsiate, and their high vitamin-C content, sweet red and green peppers can help you lose weight. A cup of these bell-shaped veggies serves up to three times the day's recommended vitamin C—a nutrient that counteracts stress hormones which trigger fat storage around the midsection.
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
