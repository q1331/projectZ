<!DOCTYPE html>
<html lang="en" class="no-js">
@section('head')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Our startup</title>

    <!-- Bootstrap Core CSS -->
        
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
    <link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/style-orders.css">
	<link rel="stylesheet" href="css/multiForm.css">
    <link href="css/shop-item.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
	<link rel="stylesheet" type="text/css" href="js/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="lineicons/style.css">
	<link href="css/style-dashboard.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">
	<!-- jquery -->
	<script src="js/jquery.js"></script>
	<!-- bootstrap core javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.fittext.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>

	<!-- HTML5 Shim marketand Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
@show
@section('topbar')
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top  main-nav">
    <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand page-scroll" href="/">HOME</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    <ul class="nav navbar-nav navbar-right">
		@if (!Auth::check())
			<li><a class="page-scroll cd-signin" href="#0">Sign in</a></li>
			<li><a class="page-scroll cd-signup" href="#0">Sign up</a></li>
		@else
			<li id="header_inbox_bar" class="dropdown">
				<a href="#" class="dropbtn" >
					<i class="fa fa-envelope-o"></i>
					<span class="badge bg-theme">5</span>
				</a>
					<div class="dropdown-content message-preview-div">
					@for($i = 0; $i < 5; $i++)
							<a href="index.html#" class="message-preview-a">
								<span class="photo"><img class="img-circle" alt="avatar" src="img/dashboard/ui-zac.jpg"></span>
								<span class="message-info">
								<span class="from">某用户</span>
								<span class="time pull-right">Just now.</span>
								</span>
								<p class="message">
									这是站内信,长度显示测试 {{$i}}
								</p>
							</a>
					@endfor
						<a href="index.html#" class="message-preview-a">See all messages</a>
					</div>
			</li>
            <li class="dropdown">
                <a href="#" class="dropbtn" >{{Auth::user()->name}}<span class="caret"></span></a>
            <div class="dropdown-content">
                <a href="{{url('/dashboard')}}">个人资料</a>
				<a href="/listings">我的服务</a>
				<a href="/orders">我的订单</a>
				<a href="/myapplication">我的申请</a>
				<a href="{{ url('/auth/logout') }}" >登出</a>
			</div>
            </li>
		@endif
	    </ul>
	</div>
	<!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form" method="POST" action="/auth/login">
					{!! csrf_field() !!}
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" name="email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Please enter a correct email address!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" name="password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Wrong password</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" name="remember" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form" method="POST" action="/auth/register">
					{!! csrf_field() !!}
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" name="username" type="text" placeholder="Username">
						<span class="cd-error-message">Illegal username</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-name" for="signup-name">Name</label>
						<input class="full-width has-padding has-border" id="signup-name" type="text" name="name" placeholder="Name">
						<span class="cd-error-message">Please use your legal name</span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" name="email" placeholder="E-mail">
						<span class="cd-error-message">Incorrect email format</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  name="password" placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Illegal password</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
@show
@yield('body')
<script src="js/scrollreveal.min.js"></script>
<script src="js/creative.js"></script>
<script src="js/chart-master/Chart.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</html>