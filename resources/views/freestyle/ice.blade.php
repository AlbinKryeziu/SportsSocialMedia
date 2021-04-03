<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{ asset('images/logo/final-logo.png') }}" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ice climbing</title>

        @include('includes/style')
    </head>

    <body>
        @include('includes/header')
        <div class="container-fluid p-0 banner d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/ice/w1.jpeg') }}'); height: 510px; object-fit: cover;">
            <div class="container">
                <h1 class="display-3 text-center white">ICE CLIMBING</h1>
            </div>
        </div>

        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                  <br>
                  <br>
                  <br>
                      
                    <p>Ice climbing is a lot like rock climbing – on ice. Rather than climbing on rocky surfaces, ice climbers use crampons, picks, ropes and other equipment to climb on ice.</p>
                    <p>
                        For years, ice climbing was just another part of rock climbing and other mountaineering activities. Whenever climbers reached an icy section on the mountain, they had to traverse the ice in order to continue upward.
                    </p>
                    <hr />
                    <h2>What is the best time of year to practice ice climbing?</h2>
                    <hr />
                    <p>As you would imagine, the winter months do tend to provide better conditions for ice climbing. Contrary to popular belief, however, you can ice climb all year round.</p>
                    <img class="img-fluid rounded" src="{{ asset('images/ice/w2.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />
                    <p>
                        That’s right! You can even ice climb during the summer months. Glaciers provide an ideal setting for ice climbing in all four seasons. Additionally, mountaineering expeditions to high altitude peaks often involve
                        both ice and mixed climbing.
                    </p>
                    <p>
                        Alternatively, many ice climbers practice rock climbing during the off-season. This is a great way to stay in shape during the warmer months as the strength and skills you acquire rock climbing will help you on the
                        ice as well.
                    </p>

                    <hr />
                    <h2>What equipment do you need for ice climbing?</h2>
                    <hr />
                    <p>As you would expect, ice climbing requires some technical gear. You will need the proper equipment, both to shield you from chilly temperatures and to actually climb.</p>
                    <img class="img-fluid rounded" src="{{ asset('images/ice/w3.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />
                    <p>Ice climbing equipment checklist:</p>
                    <p></p>
                    <ul>
                        <li>Insulated ice climbing boots</li>
                        <li>Climbing harness</li>
                        <li>Climbing helmet</li>
                        <li>Crampons to fit your boots</li>
                        <li>Ice axes</li>
                        <li>Belay device</li>
                        <li>Ice screws</li>
                        <li>Rope</li>
                        <li>Quickdraws</li>
                        <li>Gore-Tex gloves</li>
                    </ul>

                    <p>
                        If you will be climbing with a guide (recommended), s/he may provide some or all of the equipment you need to climb. In other cases, you may need to rent your own gear. Either way, you’ll want to be fully prepared
                        for this icy adventure.
                    </p>

                    <hr />
                    <h2>Why should you hire a guide to go ice climbing?</h2>
                    <hr />
                    <p>A knowledgeable local guide adds immeasurable value to any mountain activity. Given that ice climbing is an extreme sport, the presence of a seasoned guide is also important for safety reasons.</p>
                    <img class="img-fluid rounded" src="{{ asset('images/ice/w4.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />
                    <p>
                        A qualified guide will take the necessary precautions to keep you and fellow climbers safe on the ice. Among other things, ice climbers need to be acutely aware of freezing temperatures, unpredictable weather
                        patterns, avalanches and crevasses.
                    </p>
                    <p>
                        At Explore-Share, you can find ice climbing trips and courses for beginner to advanced climbers. Many of the host guides are IFMGA (International Federation of Mountain Guides Association) certified and have
                        completed a rigorous, internationally recognized training program. You can count on these guides to lead you confidently on the ice
                    </p>

                    <hr />
                    <h2>Top 10 ice climbing destinations in the world</h2>
                    <hr />
                    <p>Our top 10 list includes ice climbing classics as well as few unexpected locations.</p>
                    <img class="img-fluid rounded" src="{{ asset('images/ice/w6.jpeg') }}" style="width: 900px; object-fit: cover;" alt="" />
                    <hr />
                    <p>
                        1. Cogne, Italy | There are more than a hundred frozen waterfalls in this ice climber’s paradise in northern Italy.
                    </p>
                    <p>2. Norway | There is ice climbing for all levels in Rjukan and dramatic landscapes of mountains plunging into the sea in the Lofoten Islands.</p>
                    <p>3. Banff, Canada | This world-class ski area doubles as a top 10 ice climbing destination.</p>
                    <p>4. Japan | It turns out that Hokkaido is not all about skiing! Scenic gorges provide the ideal backdrop for ice and mixed climbing.</p>
                    <p>5. Slovenia | Combine ice climbing with a ski trip, or do it as a stand-alone activity. Kranjska Gora is a great starting point.</p>
                    <p>6. Colorado, USA | Breckenridge and Vail are also top-notch ice climbing venues for the whole family.</p>
                    <p>7. Kandersteg, Switzerland | This gem in the heart of the Bernese Oberland is one of the best places in the Alps to practice ice climbing.</p>
                    <p>8. France | The multi-level climbing available in the Ecrins is not to be missed.</p>
                    <p>9. Slovakia | Push your ice climbing boundaries in the High Tatras, located on the Polish border.</p>
                    <p>10. Iceland | This list would not be complete without the land of ice. The Icelandic fjords provide an almost otherworldly ice climbing venue.</p>

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
