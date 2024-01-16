<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>| KanePict</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom-animation.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome-pro.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/spacing.css')}}">
    <link rel="stylesheet" href="{{asset('/css/login-style.css')}}">

    <!-- icofont-css-link -->
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/icon.png')}}" type="image/x-icon">
    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="page_wrapper">
        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>
        <main>
            @if (!in_array(Route::currentRouteName(), ['login', 'register']))
                @include('layouts.nav')
            @endif
            @yield('content')
            @if (!in_array(Route::currentRouteName(), ['login', 'register']))
            @include('layouts.footer')
            @endif
        </main>
    </div>
    <!-- Jquery-js-Link -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- owl-js-Link -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- bootstrap-js-Link -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- aos-js-Link -->
    <script src="{{asset('js/aos.js')}}"></script>
    <!-- main-js-Link -->
    <script src="{{asset('js/main.js')}}"></script>

      <!-- JS here -->
    <script src="{{asset('/login-js/jquery.js')}}"></script>
    <script src="{{asset('/login-js/waypoints.js')}}"></script>
    <script src="{{asset('/login-js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/login-js/slick.min.js')}}"></script>
    <script src="{{asset('/login-js/magnific-popup.js')}}"></script>
    <script src="{{asset('/login-js/counterup.js')}}"></script>
    <script src="{{asset('/login-js/wow.js')}}"></script>
    <script src="{{asset('/login-js/nice-select.js')}}"></script>
    <script src="{{asset('/login-js/swiper-bundle.js')}}"></script>
    <script src="{{asset('/login-js/meanmenu.js')}}"></script>
    <script src="{{asset('/login-js/tilt.jquery.js')}}"></script>
    <script src="{{asset('/login-js/isotope-pkgd.js')}}"></script>
    <script src="{{asset('/login-js/imagesloaded-pkgd.js')}}"></script>
    <script src="{{asset('/login-js/ajax-form.js')}}"></script>
    <script src="{{asset('/login-js/smooth-scrollbar.js')}}"></script>
    <script src="{{asset('/login-js/gsap.min.js')}}"></script>
    <script src="{{asset('/login-js/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('/login-js/ScrollSmoother.min.js')}}"></script>
    <script src="{{asset('/login-js/parallax-scroll.js')}}"></script>
    <script src="{{asset('/login-js/main.js')}}"></script>
</body>

</html>
