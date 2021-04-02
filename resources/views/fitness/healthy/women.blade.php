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
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/other/women2.jpeg') }}'); height: 610px; object-fit: cover;">
            <div class="container">
                <h1 class="display-3 text-center white">HEALTHY WOMEN</h1>
            </div>
        </div>

        <div class="container" style="padding: 85px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="mt-4">What is Considered “Healthy Food”?</h1>


                    <hr />

                    <p>Do you ever find it difficult to determine if your favorite foods are actually healthy for you?

                        Between misleading labels and the never-ending supply of ‘healthy’ foods on every supermarket shelf, eating healthy can be a confusing and even daunting task.
                        
                        If you’re between the ages of 35 and 50, the choices you make regarding your health right now are more important than ever. In fact, the choices you make today can help support a healthy you now, and in the future.
                        
                        Take a look below as we explore ‘healthy foods’ and provide some insight into whether the foods in your diet are providing you with the nutrients you need.</p>

                    <hr />
                    <h2>How to Read Food Labels
                    </h2>

                    <img class="img-fluid rounded" src="{{ asset('images/other/women.jpeg') }}" style="width: 900px; object-fit:cover;"  alt="" />

                    <hr />
                   
                    <p>According to a recent Nielsen report, almost 60-percent of consumers misinterpret or have a hard time comprehending nutrition labels.

                        One of the most critical parts of reading your food labels is to look at the serving size; 160 calories may not seem like much, but that could be for only two little cookies. Continue reading for other factors to keep in mind when grocery shopping for your healthy foods.
                        
                        Saying “zero trans fat”, “all natural”, or “contains whole wheat” can trick you into thinking the product is healthy, even when its nutritional value has been stripped away after being processed.
                        <br>
                        <br>
                        Alternatively, many packaged products are packed with salt, sugar, and saturated fat. In other words, these claims make you forget about the added calories. Here is a list of what you should know before you read your food’s nutritional facts:
                    </p>
                       
                        <ul>
                            <li>Sugar: Women should try to limit their sugar intake to 25 g / day or 6 teaspoons</li>
                            <li>Fat: There are about 9 calories per gram of fat - stick to about 50 g / day</li>
                            <li>Sodium: Women should not consume more than 1,500 mg or 3.8 g of salt / day</li>
                            <li>Protein: Women exercising less than 30 min / day should eat about 46 g of protein / day</li>
                            <li>Vitamins: Naturally occurring vitamins are ideal, but added vitamins can be helpful too</li>
                            <li>Calories: The average amount for women is 2,000 / day and 1,500 / day to lose weight based on a 150 lb. woman
                            </li>
                        </ul>

                        <h2>What Should Women Eat to Stay Healthy?</h2>
                        <hr />
                       
                        <p>A healthy eating plan is one that encompasses all of the nutrients your body needs on a daily basis without any non-nutritional additives.</p>
                        <p>A healthy, balanced diet includes:</p>
                        <ul>
                            <li>Vegetables and any subgroup such as beans, peas, starches, and those that are dark green, red or orange in color</li>
                            <li>Whole fruits</li>
                            <li>Whole grains such as quinoa, corn, millet, and brown rice</li>
                            <li>Limited full-fat dairy</li>
                            <li>A variety of protein such as lean meats, eggs, nuts, seeds, and soy products</li>
                            <li>Oils such as olive, flaxseed, canola, and avocado
                            </li>
                        </ul>
                        
                        <p>Only about one-fourth of the population is eating the recommended amounts of fruit, vegetables, dairy, and oils. However, over half of the population are meeting or going beyond the total grains and protein recommendations.</p>
                        <p>When consuming grains, it’s encouraged to only eat whole grains that include the entire grain kernel, bran, and germ. If you are eating refined grains (or processed grains), the bran and germ have been removed which takes out the iron, dietary fiber, and other key nutrients.</p>
                            <hr />

                            <h2>Women’s Vitamins for Preventative Health</h2>

                           <P>It’s recommended that your vitamins include the following nutrients or that you incorporate these nutrients into your daily diet</P>
                           <ul>
                            <li>Calcium: A higher calcium diet may help women lower the risk of osteoporosis.</li>
                            <li>Iron: With each menstrual cycle, women are losing iron. For women that are premenopausal, the Recommended Dietary Allowance (RDA) is 18 mg of iron a day</li>
                            <li>Omega-3 fatty acids: As women age, their estrogen levels decline which can put them at a higher risk of developing heart disease. These fatty acids can act as an anti-inflammatory for your body.</li>
                        </ul>
                        <p></p>
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
