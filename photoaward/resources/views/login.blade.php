<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>Picture+254</title>
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

	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
	
	<!-- <script src="{{ asset('js/right_click.js') }}"></script> -->

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
  /*background-image: url('http://www.mikiyakobayashi.com/upload/YAMANAMI_4260WW.jpg');
*/
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


</style>

<style type="text/css">


.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:780px;
	position:relative;
	background:url(images/pic2.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(0,0,0,.7);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#ff00ff;
	border-color:#ff00ff;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:7px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#ff00ff;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
.tab{
	color: #fff;
}
.tab:hover{
	cursor: pointer;
}
@font-face {
    font-family: "Montserrat";
    src: url(https://fonts.googleapis.com/css?family=Montserrat&display=swap rel="stylesheet" type='text/css');
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
						
					  <div class="section section-tabled" styl="overflow: auto;">


	<!-- <div class="tabled-th">
		<img src="/common/img/profile/photo_mikiyakobayashi.jpg" alt="MIKIYA KOBAYASHI / Designer / MIKIYA KOBAYASHI INC. CEO">
	</div> -->

	<div class="tabled-td">
		<div lang="en" style="">

<div style="width:100%; margin:auto; max-width:525px; position:relative; border-radius: 5px;">
	<p style="font-weight: bold; font-size: 18px; text-transform: upprcase;  font-family: 'Montserrat', sans-serif ">
		 Join the community, Submit cool photos, get a chance to win cash prizes, interact, Learn more and sell your photos !!!
	</p>
</div>
			
<div class="login-wrap" style="background:url(images/pic2.jpg) no-repeat center; widh: 70%;">

<div style="width:100%; margin:auto; max-width:525px; position:relative; border-radius: 5px;">
						@include('errors')
						@if (session('success'))
                                  <div class="alert alert-success alert-dismissable">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      {{ session('success') }}
                                  </div>
                                 @endif
                                  @if (session('warning'))
                                  <div class="alert alert-warning" style="background: #d9534f; color: #fff; padding: 10px;">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      {{ session('warning') }}
                                  </div>
                                 @endif
                             </div>
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked onclick="signin_on()"><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" onclick="signup_on()"><label for="tab-2" class="tab">Sign Up</label>

		<div class="login-form">
			<div class="sign-in-htm">
			<form action="{{ route('user-login') }}" method="POST" id="login_form">	
			{{ csrf_field() }}
				<div class="group">
					<label for="user" class="label">Email/Phone</label>
					<input id="user" type="text" name="username" class="input" value="{{ old('username') }}">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="passs" type="password" name="password" class="input" data-type="password">
				</div>
				{{-- <div class="group">
					<input id="check2" type="checkbox" class="check" checked required="">
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div> --}}
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a onclick="window.location='{{ route('password.request') }}'" href="#">Forgot Password?</a>
				</div>
				</form>
			</div>
		
			<div class="sign-up-htm" style="display: none;">
			<form id="sign_up" onsubmit="return checkPasswordMatch();" action="{{ route('register-user') }}" method="POST">
			{{ csrf_field() }}
				<div class="group">
					<label for="user" class="label">Full Name</label>
					<input id="user" type="text" name="name" class="input" value="{{ old('name') }}">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="email" type="email" name="email" class="input" required="" value="{{ old('email') }}">
				</div>
				<div class="group">
					<label for="pass" class="label">Phone No</label>
					<input id="phone" type="text" class="input" name="phone" placeholder="e.g 2547********" required="" minlength="12" maxlength="12" value="{{ old('phone') }}">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="repeat" type="password" class="input" data-type="password">
				</div>
					<div id="divCheckPasswordMatch" style="display: none; color: red;"></div>
				
				<div class="group" style="color: #fff;">
					<input id="ceck" type="checkbox" name="terms" class="chek" required="" {{ old('terms') ? 'checked' : ''}}>
					<label for="check"> By creating an account you agree to our <a href="terms-&-conditions" target="_blank">Terms & Privacy</a></label>
				</div>

				<div class="group">
					<input type="submit" class="button" value="Sign Up" />
				</div>

				</form>
			</div>
		</div>
	</div>
</div>
		</div>

	</div>
</div>


	</div>
	<script src="{{ asset('js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/page_init.js') }}"></script>

	<!-- <script>
			// Get the modal
		var modal = document.getElementById('id01');
			// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
  		if (event.target == modal) {
    	modal.style.display = "none";
  }
}
</script>
 -->
					
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

<script type="text/javascript">
    function checkPasswordMatch() {
    var password = $("#pass").val();
    var confirmPassword = $("#repeat").val();
    
   
    if (password != confirmPassword)
    {
        document.getElementById('divCheckPasswordMatch').style.display = "block";
        $("#divCheckPasswordMatch").html("Passwords do not match!");
                       setTimeout(function(){
                 $('#divCheckPasswordMatch').fadeOut('fast');
            
        }, 3000);
        return false;
    }

    else
    {
        // $("#divCheckPasswordMatch").html("Passwords match.");
    }


}  
	
    $(document).ready(function () {
   $("#repeat").keyup(checkPasswordMatch);

});

    function signup_on()
    {
    	$('.sign-up-htm').css('display','block');
    	$('.sign-in-htm').css('display','none');
    }

    function signin_on()
    {
    	$('.sign-up-htm').css('display','none');
    	$('.sign-in-htm').css('display','block');
    }

</script>
</html>