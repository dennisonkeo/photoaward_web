<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>PHOTO CONTEST</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="Photo contest" />
    <meta property="og:description" content="" />
	<link rel="shortcut icon" href="/common/img/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/common/img/apple-touch-icon-144-precomposed.png">
	
	<script src="{{ asset('js/right_click.js') }}"></script>
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--Google Analytics-->
	<script src="{{ asset('js/libs.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/common.js') }}" type="text/javascript"></script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-20499489-1', 'auto');
      ga('send', 'pageview');
    
    </script>

    <style type="text/css">
    	.parallax {
  /* The image used */
  background-image: url('http://www.mikiyakobayashi.com/upload/YAMANAMI_4260WW.jpg');

  /* Set a specific height */
  min-height: 690px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.text_line{
	line-height: 48px;
	font-family: cambria;
}
.label-input100,.input100{
	font-size: 14px;
}

</style>
</head>
<body id="mikiyakobayashi" class="sub">
<noscript>
<div id="noscript_message"></div>
</noscript>
<div id="wrap">
<div id="header">
	<div class="container">
		
		@include('header')
		<!-- <div id="" style="float: right; line-height: 50px;"><a href="about.html" class="label"><span>SUBMIT</span></a></div> -->
		

		<div id="gnavi" class="nav">
			<div class="nav-btn">
				<a href="#gnavi-links">
					<span class="bars">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</span>
					<span class="label">SUBMIT</span>
				</a>
			</div>
		</div>

		
	</div>
</div>
<!-- <div class="parallax"></div> -->
	<div id="contents-wrap">
		<div id="contents">
			<div id="profile" class="content">
				<div class="container">
					<!-- <div class="lang-nav">
						<ul class="hover-line-links">
							<li><a href="#" lang="en" class="current"><span>EN</span></a></li>
							<li><a href="#" lang="ja"><span>JP</span></a></li>
						</ul>
					</div> -->
					<div class="sections">
						@include('errors')
						@if (session('success'))
                                  <div class="alert alert-success alert-dismissable">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      {{ session('success') }}
                                  </div>
                                 @endif
                                  @if (session('warning'))
                                  <div class="alert alert-warning">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      {{ session('warning') }}
                                  </div>
                                 @endif
					  <div class="section section-tabled" style="overflow: auto;">

	<!-- <div class="tabled-th">
		<img src="/common/img/profile/photo_mikiyakobayashi.jpg" alt="MIKIYA KOBAYASHI / Designer / MIKIYA KOBAYASHI INC. CEO">
	</div> -->
	<div class="tabled-td">
		<div lang="en">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<form action="{{ route('register-user') }}" class="login100-form validate-form" style="margin-top: -100px;" method="POST" >
					{{ csrf_field() }}
					<span class="login100-form-title p-b-59" style="height: 40px; background: #000; width: 100%; padding-left: 10px; color: white; border-radius: 5px; font-family: cambria;">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required" style="margin: 5px;">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" style="margin: 5px;">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone No is required" style="margin: 5px;">
						<span class="label-input100">Phone No</span>
						<input class="input100" type="text" name="phone" placeholder="e.g 2547********" minlength="12" maxlength="12">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required" style="margin: 5px;">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required" style="margin: 5px;">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div> -->

					<div class="container-login100-form-btn" >
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Sign Up
							</button>
						</div>

						<a href="{{ route('login') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>


	</div>
	<!--===============================================================================================-->
	<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script> -->
	<!-- <script src="vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>
					<script type="text/javascript" src="{{ asset('js/page_init.js') }}"></script>
					
				</div>
			</div><!-- /.content -->
		</div><!-- /#contents -->
	</div><!-- /#contents-wrap -->

</div>
@include('menu') 
<div id="footer">
	<div class="container">
		<div id="copyright" class="wfont">&copy; Photo Contest.</div>
	</div>
</div>
</body>
</html>