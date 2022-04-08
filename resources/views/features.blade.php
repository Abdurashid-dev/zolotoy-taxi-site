<section class="features" id="app">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn"
                 style="visibility: visible; animation-name: fadeIn;">
                <div class="title d-inline-block">
                    <h6 class="mb-3">Most reliable application</h6>
                    <h2 class="gradient-text1 mb-3">- Mobile App Design -</h2>
                    <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc
                        vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor
                        justo sed mi finibus, vel tristique risus faucibus. </p>
                </div>
            </div>
        </div>

        <!--App deatil-->
        <div class="row align-items-center text-center">

            <div class="col-lg-4 wow fadeInLeft mb-5 mb-lg-0" style="visibility: visible; animation-name: fadeInLeft;">
            @foreach($left as $item)
                <!--App detail item-->
                    <div class="app-feature">
                        <i class="{{$item->icon}}"></i>
                        <h4 class="mb-3">{{$item->title}}</h4>
                        <p>{!! $item->text !!}</p>
                    </div>
                @endforeach
            </div>

            <!--app slider-->
            <div class="col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                <!--app Image-->
                <div class="app-image">
                    <img src="app-landing-page/img/mobile-image.png" alt="image">
                    <div id="app-slider" class="owl-carousel owl-theme">
                        @foreach($screenshots as $screenshot)
                            <div class="item">
                                <img src="{{asset('storage/'.$screenshot->image)}}" alt="image">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
            @foreach($right as $item)
                <!--App detail item-->
                    <div class="app-feature">
                        <i class="{{$item->icon}}"></i>
                        <h4 class="mb-3">{{$item->title}}</h4>
                        <p>{!! $item->text !!}</p>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
</section>
