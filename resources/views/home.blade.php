@extends('layout.header')
@section('content')
<!--============ Best Dishes ============-->



<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">

        <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
        <div class="slider">
            <ul class="slides">
                <li class="slide">
                    <div class="item">
                        <img src="images/thumb1.png" width="226" height="225" alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                        <h3>Pasta Capellini</h3>
                    </div>
                    <!-- end of item-->

                    <div class="item2">
                        <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                        <h3>Pasta Pillus</h3>
                    </div>
                    <!-- end of item-->

                    <div class="item3">
                        <img src="images/thumb3.png" width="226" height="225" alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                        <h3>Pasta Fusilli</h3>
                    </div>
                    <!-- end of item-->
                </li>
                <li class="slide">
                    <div class="item">
                        <img src="images/thumb1.png" width="226" height="225" alt="sliderimg">
                        <h3>Pasta Capellini</h3>
                    </div>
                    <!-- end of item-->

                    <div class="item2">
                        <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg">
                        <h3>Pasta Pillus</h3>
                    </div>
                    <!-- end of item-->

                    <div class="item3">
                        <img src="images/thumb3.png" width="226" height="225" alt="sliderimg">
                        <h3>Pasta Fusilli</h3>
                    </div>
                    <!-- end of item-->
                </li>

            </ul>
        </div>
        <!-- end of slider-->
    </div>
    <!-- end of besth dishes-->
</div>
<!-- end of bestdishes wrapper-->

<!--============ BOOK ONLINE ============-->

<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
        <h3 class="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>
        <form>
            <input type="text" class="name wow zoomIn" placeholder="Your Name">
            <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL">
            <input type="text" class="from wow zoomIn" placeholder="09-06-2014">
            <input type="text" class="to wow zoomIn" placeholder="09-06-2014">
            <input type="text" class="persons wow zoomIn" placeholder="Number of persons">



            <button class="booknow wow fadeInUp"> BOOK NOW </button>

        </form>


    </div>
</div>
<!-- end of book online wrapper-->

@endsection