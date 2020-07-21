<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon" /> --}}
    <link rel="shortcut icon" href="{{ asset('auth_assets/img/favicon.png')}}" type="image/x-icon">
    <!-- Theme tittle -->
    <title>ICHAS 2019 - Universitas Mercu Buana</title>

    <!-- Theme style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Header Area -->
    @include('layouts.header-frontend')
    <!-- Header Area -->

    @yield('content')

    <!-- Footer Area -->
    @include('layouts.footer-frontend')

    <!-- End Footer Area -->

    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- jQuery v3.3.1 -->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap v4.0.0 -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Extra Plugin -->
    <script src="{{asset('vendors/animate-css/wow.min.js')}}"></script>
    <script src="{{asset('vendors/parallaxmouse/parallax.min.js')}}"></script>
    <script src="{{asset('vendors/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('vendors/parallaxmouse/jquery.jqlouds.min.js')}}"></script>
    <script src="{{asset('vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-selector/jquery.nice-select.min.js')}}"></script>
    <!-- Theme js / Custom js -->
    <script src="{{asset('js/theme.js')}}"></script>
</body>
</html>
