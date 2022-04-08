<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description"
          content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
          content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>App Landing | MegaOne HTML5 Template</title>
    <!-- Favicon -->
    <link href="app-landing-page/img/favicon.ico" rel="icon">
    <!-- Bundle -->
    <link href="{{asset('vendor/css/bundle.min.css')}}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{asset('vendor/css/LineIcons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/revolution-settings.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/css/cubeportfolio.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/css/wow.css')}}">
    <!-- Style Sheet -->
    <link href="{{asset('app-landing-page/css/style.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

<!-- Preloader -->
<div class="loader1">
    <div class="loader-inner">
        <div class="loader3">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->
<header>

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <a href="#home" title="Logo" class="logo scroll">
                <!--Logo Default-->
                <img src="app-landing-page/img/logo-pure-white.png" alt="logo" class="logo-dark">
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="megaone">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active scroll" href="#home">Home</a>
                    <a class="nav-link scroll" href="#secvice">Services</a>
                    <a class="nav-link scroll" href="#screenshot">ScreenShot</a>
                    <a class="nav-link scroll" href="#app">Product</a>
                    <a class="nav-link scroll" href="#adv-sec">Download</a>
                </div>
            </div>

            <!--Side Menu Button-->
            <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>

        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#secvice">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#screenshot">ScreenShot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#app">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#adv-sec">Download</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    @foreach($socials as $social)
                        <li>
                            <a class="facebook-text-hvr" href="{{$social->url}}">
                                <i class="{{$social->icon}}"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <p class="text-white">© {{\Illuminate\Support\Carbon::now()->format('Y')}} <a class="text-white"
                                                                                              href="https://t.me/abdurashid_coder">iSoftware.</a>
                    All
                    Rights Reserved.</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
</header>
<!--Header End-->

<!--START BANNER-->
<div class="banner" id="home">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center text-center text-lg-left">
                <div class="banner-description">
                    <h1>Present your app in attractive way with John.</h1>
                    <p>Available on App Store and Play Store</p>
                    <a href="#home" class="btn btn-white-with-black-hover">Download App</a>
                </div>
            </div>

            <div class="col-12 col-lg-6" style="padding: 30px !important;">
                <img src="{{asset('taxi-bg.png')}}" style="padding: 0 !important;" alt="Taxi image">
            </div>
        </div>
    </div>
</div>
<!--END BANNER-->

<!--START SERVICE-->
@include('services')
<!--END SERVICE-->

<!--START SCREEN SHOTS-->
@include('screenshots')
<!--END SCREEN SHOTS-->

<!--START FEATURES-->
@include('features')
<!--END FEATURES-->


<div class="adv-sec" id="adv-sec" style="background-image:url({{asset('adver-banner.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="download-app">
                    <h2>Contact us</h2>
                    <form action="{{route('contact')}}" class="row" method="POST">
                        @csrf
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required
                                       placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="phone" id="selector" class="phone form-control" required
                                       placeholder="Enter Your Phone Number">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="form-control btn btn-secondary rounded" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</div>-->


<!--END REVIEWS-->

<!--Footer Start-->
<footer class="footer-style-1 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-lg-6">
                <div class="footer-social text-lg-left">
                    <ul class="list-unstyled">
                        @foreach($socials as $social)
                            <li><a class="wow fadeInUp" href="{{$social->url}}">
                                    <i aria-hidden="true" class="{{$social->icon}}"></i></a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-lg-6 text-lg-right text-center">
                <p class="company-about fadeIn">© {{\Illuminate\Support\Carbon::now()->format('Y')}} <a href="">iSoftware.</a>
                    All
                    Rights Reserved.</p>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->


<!-- JavaScript -->
<script src="{{asset('vendor/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{asset('vendor/js/jquery.appear.js')}}"></script>
<script src="{{asset('vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('vendor/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/js/parallaxie.min.js')}}"></script>
<script src="{{asset('vendor/js/wow.min.js')}}"></script>
<script src="{{asset('vendor/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('vendor/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{asset('vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<!-- custom script-->
<script src="{{asset('app-landing-page/js/script.js')}}"></script>
<script src="{{asset('app-landing-page/js/inputmask.js')}}"></script>
<script>
    let selector = document.getElementById("selector");
    let im = new Inputmask("+\\9\\98(99)999-99-99", {'clearIncomplete': true});
    im.mask(selector);
</script>

</body>
</html>
