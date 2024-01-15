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
</body>

</html>
