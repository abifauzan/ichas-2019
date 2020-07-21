<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Wilio | Survey, Quotation, Review and Register form Wizard</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('auth_assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('auth_assets/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('auth_assets/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('auth_assets/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('auth_assets/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('auth_assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('auth_assets/css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset('auth_assets/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset('auth_assets/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('auth_assets/css/custom.css')}}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{ asset('auth_assets/js/modernizr.js')}}"></script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="{{route('frontend')}}" class="animated_link">Home</a></li>
			<li><a href="{{route('login')}}" class="animated_link">Login</a></li>
			<li><a href="{{route('register')}}" class="animated_link">Register</a></li>
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="{{route('frontend')}}" id="logo"><img src="{{ asset('auth_assets/img/logo.png')}}" alt="" width="49" height="35"></a>
					<div id="social">
						<ul>
							<li><a href="#0"><i class="icon-facebook"></i></a></li>
							<li><a href="#0"><i class="icon-twitter"></i></a></li>
							<li><a href="#0"><i class="icon-google"></i></a></li>
							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="{{ asset('auth_assets/img/info_graphic_3.svg')}}" alt="" class="img-fluid"></figure>
						<h2>Reset your password</h2>
						<p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel. Adhuc invidunt duo ex. Eu tantas dolorum ullamcorper qui.</p>
                        <a href="{{route('login')}}" class="btn_1 rounded">Login Now</a>&nbsp;
                        <a href="{{route('register')}}" class="btn_1 rounded">Register Now</a>
                        <a href="{{route('login')}}" class="btn_1 rounded mobile_btn">Login Now</a>&nbsp;
						<a href="{{route('register')}}" class="btn_1 rounded mobile_btn">Register Now</a>
					</div>
					<div class="copy">© {{date('Y')}} ICHAS 2019</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
                    @if ($errors->has('email'))
                        <div class="alert alert-warning" >
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                    @if ($errors->has('password'))
                        <div class="alert alert-warning" >
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
                        <form id="wrapped" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
							{{-- <input id="website" name="website" type="text" value=""> --}}
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question">Please input your E-Mail & Password</h3>
									<div class="form-group">
                                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' required' : '' }}" value="{{ old('email') }}" placeholder="E-Mail" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
                                    </div>
								</div>
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
                                <button type="submit" name="foward" class="forward">{{ __('Send Password Reset Link') }}</button>
							</div>
							<!-- /bottom-wizard -->
                        </form>

					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('auth_assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('auth_assets/js/common_scripts.min.js')}}"></script>
	<script src="{{ asset('auth_assets/js/velocity.min.js')}}"></script>
	<script src="{{ asset('auth_assets/js/functions.js')}}"></script>
	<script src="{{ asset('auth_assets/js/pw_strenght.js')}}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
	<!-- Wizard script -->
	{{-- <script src="{{ asset('auth_assets/js/registration_func.js')}}"></script> --}}

</body>
</html>
