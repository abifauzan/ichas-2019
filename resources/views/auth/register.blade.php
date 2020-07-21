@php

    $today = \Carbon\Carbon::now()->format('Y-m-d');
    $early_bird = $helper->date_end;

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>ICHAS 2019 | Registration</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('auth_assets/img/favicon.png')}}" type="image/x-icon">
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
			<li><a href="#" class="animated_link">Register</a></li>
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					{{-- <a href="{{route('frontend')}}" id="logo"><img src="{{ asset('auth_assets/img/logo.png')}}" alt="" width="49" height="35"></a> --}}
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
                        <h2>Registration Wizard </h2>
						<p>Please register to ICHAS 2019 event to stay up to date with our latest news on the seminar / conference. <br>See you on the event! </p>
						<a href="{{route('frontend')}}" class="btn_1 rounded">back to Home</a>&nbsp;
                        <a href="{{route('login')}}" class="btn_1 rounded">Login Now</a>
                        <a href="{{route('frontend')}}" class="btn_1 rounded mobile_btn">back to Home</a>&nbsp;
						<a href="{{route('login')}}" class="btn_1 rounded mobile_btn">Login Now</a>
					</div>
					<div class="copy">© {{date('Y')}} ICHAS 2019</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
                        <form id="wrapped" method="POST">
                            @csrf
                            <input type="hidden" name="id_payment_type" id="id_payment_type">
                            <input type="hidden" name="today" id="today" value="{{$today}}">
                            <input type="hidden" name="early_bird" id="early_bird" value="{{$early_bird}}">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
									<div class="form-group">
										<input type="text" name="user_name" class="form-control required" id="input_name" placeholder="Your Name" onchange="getVals(this, 'input_user_name');">
									</div>
									<div class="form-group">
										<input type="email" name="user_email" class="form-control required" id="input_email" placeholder="Your Email" onchange="getVals(this, 'input_user_email');">
                                    </div>
                                    <div class="form-group">
										<input type="password" name="password" class="form-control required" id="password" placeholder="Your Event Password">
                                    </div>
                                    <div class="form-group">
										<input type="password" name="password_confirmation" class="form-control required" id="password_confirmation" placeholder="Repeat Your Event Password">
									</div>
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>Where do you want to register ?</h3>
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide" name="id_role" id="input_id_role" onchange="getVals(this, 'input_user_id_role');">
												<option selected disabled>Select One</option>
                                                <option value="3"> Conference & Seminar</option>
												<option value="2"> Seminar Only</option>
											</select>
                                        </div>
                                        <br>
                                        <div class="styled-select clearfix">
											<select class="wide required" name="user_from" id="id_frooom" onchange="getVals(this, 'frooom');">
												<option selected disabled>Where are you from ?</option>
                                                <option value="1"> Universitas Mercubuana</option>
												<option value="2"> Other Universities </option>
											</select>
                                        </div>
                                        <br>
                                        <div class="form-group" >
                                            <input type="text" name="nim_student" id="formNim" class="form-control required" placeholder="Your NIM" onchange="getVals(this, 'nim_student');">
                                        </div>
									</div>
									<div id="pass-info" class="clearfix"></div>
								</div>
								<!-- /step-->
								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Summary</h3>
									<div class="summary">
										<ul>
											<li><strong>1</strong>
												<h5>Account Details</h5>
												<ul>
													<li><label>Your Name</label>: <span id="user_name"></span></li>
                                                    <li><label>Email</label>: <span id="user_email"></span></li>
                                                    <li><label>Password</label>: <span>Your choosen password</span></li>
                                                    <li><label>From</label>: <span id="from_from"></span></li>
                                                    <li id="field_nim"><label>NIM</label>: <span id="nim_student"></span></li>
                                                    <li><label>Register to</label>: <span id="id_role"></span></li>
												</ul>
											</li>
											<li><strong>2</strong>
												<h5>Registration Fee</h5>
												<ul id="registration_section">
                                                    <li id="liChild"><label>Registration Fee</label>: <span id="regis_fee"></span></li>
                                                    <li>
                                                        <div class="alert alert-info">
                                                            Please make a payment to our Bank : blablabla <br>
                                                            and upload your receipt of payment in Dashboard area after your payment process is finished.
                                                        </div>
                                                    </li>
													{{-- <li><label>User Name</label>: <span id="user_name"></span></li>
													<li><label>Password</label>: <span id="password"></span></li> --}}
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
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

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('auth_assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('auth_assets/js/common_scripts.min.js')}}"></script>
	<script src="{{ asset('auth_assets/js/velocity.min.js')}}"></script>
	<script src="{{ asset('auth_assets/js/functions.js')}}"></script>
	<script src="{{ asset('auth_assets/js/pw_strenght.js')}}"></script>

	<!-- Wizard script -->
	<script src="{{ asset('auth_assets/js/registration_func.js')}}"></script>

</body>
</html>
