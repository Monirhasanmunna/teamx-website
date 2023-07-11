
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSC QUIZ CONTEST</title>

    <link rel="icon" href="{{ asset(general_setting('app_favicon')) }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Bold -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

    <!-- Poppins, sans-serif -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/venobox.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend_asset') }}/css/media.css">

</head>

<body>

    <div class="overflow">

    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('frontend_asset') }}/images/preloader.gif" alt="">
    </div>

    <div class="RegistrationPages">
        <a href="https://play.google.com/store/apps/details?id=com.ssc.contest&hl=en&gl=US">Register Now</a>
    </div>


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Navbar PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
    @include('frontend.partials._header')


<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START OurPartnar PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->


    @yield('frontend_content')


    <div class="section_gaps"></div>

    @include('frontend.partials.-our_partnar')

    <div class="section_gaps"></div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Footer PART
---------------------------------------------------------------------------------------------------------------------------------------------------  -->
    @include('frontend.partials._footer')


<div class="go-top"><i class="fas fa-chevron-up"></i></div>

</div>

    <!-- JS Link -->
    <script src="{{ asset('frontend_asset') }}/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/jquery.elevatezoom.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/slick.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/all.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/shop.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/venobox.min.js"></script>
    <script src="{{ asset('frontend_asset') }}/js/custom.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    @stack('frontent_footer')
</body>

</html>
