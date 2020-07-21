<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ICHAS 2019') }}</title>


    {{-- <script src="{{ url('node_modules/sweetalert/dist/sweetalert.min.js') }}"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style-dashboard.css') }}" rel="stylesheet">

    <!-- Custom Styles -->
    @yield('style')
</head>
<body>

        <div class="wrapper theme-2-active navbar-top-light horizontal-nav">
                <!-- Top Menu Items -->
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="nav-wrap">
                    <div class="mobile-only-brand pull-left">
                        <div class="nav-header pull-left">
                            <div class="logo-wrap">
                                <a href="{{route('home')}}">
                                <img class="brand-img" src="{{ asset('images/logo.png') }}" alt="brand"/>
                                    <span class="brand-text"><img  src="{{ asset('images/logo.png') }}" alt="brand"/></span>
                                </a>
                            </div>
                        </div>
                        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                        <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>

                    </div>
                    <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                        <ul class="nav navbar-right top-nav pull-right">

                            <li class="dropdown auth-drp">
                                <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('images/user1.png') }}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span><span class="user-auth-name inline-block">{{ Auth::user()->name }} <span class="ti-angle-down"></span></span></a>
                                <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                    <li><a href="{{route('frontend')}}" target="_blank"><i class="zmdi zmdi-home"></i><span>go to Website</span></a></li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    </div>
                </nav>
                <!-- /Top Menu Items -->

                <!-- Left Sidebar Menu -->
                <div class="fixed-sidebar-left">
                    <ul class="nav navbar-nav side-nav nicescroll-bar">
                        <li class="navigation-header">
                            <span>Main</span>
                            <hr/>
                        </li>
                        @include('layouts.menu')

                    </ul>
                </div>
                <!-- /Left Sidebar Menu -->

            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container pt-30">

                    @yield('content')

                    <!-- Footer -->
                <footer class="footer pl-30 pr-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>2019 &copy; {{ config('app.name') }}. Developed by Informatics IC Mercu Buana</p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p>Follow Us</p>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /Footer -->
                </div>
            </div>
            <!-- /Main Content -->

        </div>
        <!-- /#wrapper -->

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/popper.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

	<!-- Switchery JavaScript -->
	<script src="{{ asset('js/switchery.min.js') }}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('js/dropdown-bootstrap-extended.js') }}"></script>

	<!-- Init JavaScript -->
	<script src="{{ asset('js/init.js') }}"></script>
    <script src="{{ asset('js/progress.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    @include('sweet::alert')
    @yield('script')
    <script>

        Progress.configure({color:["#4fbbdf"]});
        Progress.start();
        Progress.go(20);
        Progress.go(30);
        Progress.go(80);
        Progress.go(100);
        Progress.complete();
    </script>
</body>
</html>
