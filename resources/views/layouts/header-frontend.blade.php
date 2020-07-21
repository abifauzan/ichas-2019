<header class="main_header_area">
    <div class="searchForm">
        <form action="#" class="row">
            <div class="input-group">
                <span class="input-group-addon"><i class="flaticon-search"></i></span>
                <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                <span class="input-group-addon form_hide"><i class="flaticon-close"></i></span>
            </div>
        </form>
    </div>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{route('frontend')}}"><img src="images/logo.png" class="img-logo" alt="ICHAS LOGO"></a>
        <!-- Small Divice Menu-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"  aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <!-- Right Nav bar -->
        <!-- Right Nav bar -->
        <ul class="right_nav">
            {{-- <li><a href="#" class="nav_searchFrom"><i class="flaticon-search"></i></a></li> --}}
            <li><a href="{{route('login')}}" class="theme_btn">Sign in / Register</a></li>
        </ul>
        <!-- Left Nav bar -->
        <div class="collapse navbar-collapse navbar_supported">
            <ul class="navbar-nav">
                <li><a href="{{route('frontend')}}">Home</a></li>
                <li><a href="{{route('frontend.about')}}">About</a></li>
                <li><a href="{{route('frontend.seminar')}}">Seminar</a></li>
                <li><a href="{{route('frontend.conference')}}">Conference</a></li>
                <li><a href="{{route('frontend.pricing')}}">Pricing</a></li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown">Media</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Image Gallery</a></li>
                        <li><a href="#">Video Gallery</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown">Downloads</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Registration Guidebook</a></li>
                        <li><a href="#">Seminar Program</a></li>
                        <li><a href="#">Conference Program</a></li>
                        <li><a href="#">Journal Template</a></li>
                    </ul>
                </li>
                <li class="for-mobile"><a href="{{route('login')}}">Login</a></li>
                <li class="for-mobile"><a href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
    </nav>
</header>
