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
	line-height: 100px;
	font-family: cambria;
}
.label-input100,.input100{
	font-size: 14px;
}

p{
	line-height: 30px;
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
					<span class="label">TERMS & CONDITIONS</span>
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
					  <div class="section section-tabled" style="overflow: auto; border-radius: 7px;">
					  
		<div class="tabled-td">
			<div lang="en">

				<h3 style="text-transform: uppercase;">Terms and Conditions of Entry:</h3><br><hr>
				<p>
				Picture+254 will randomly select photos for highlight on its website during and after the competition and display in a publicly accessible Picture+254 Stock Gallery.
				</p>
				<p>
				The Sponsor may collect a photograph’s metadata upon entry.
				</p>
				<p>
				You retain your rights to your photograph; however, by entering the contest, you grant the Picture+254 a royalty-free, world-wide, perpetual, non-exclusive license to publicly display, distribute, reproduce and create derivative works of the entries, in whole or in part, in any media now existing or later developed, for any purpose, including, but not limited to, advertising and promotion of the competition, magazines and its website, exhibition, and commercial products. 
				</p>
				<p>
				Any photograph reproduced will include a photographer credit as feasible. 
				</p>
				<p>
				By submitting entries for the Competition, entrants hold the Sponsors and their respective regents, directors, officers, employees, emeriti, fellows, interns, research associates, and volunteers (the “Indemnified Parties”) harmless from and against all claims of any nature arising in connection with entrant’s participation in the contest and acceptance or use of a prize. The Indemnified Parties are not liable for any costs, damages, injuries, or other claims incurred as a result of entrants’ participation in the contest or winner’s acceptance and usage of a prize. The Indemnified Parties are not responsible for incomplete or misdirected entries, technical or network malfunctions or failures, or causes beyond their control. Entrants are solely responsible for their entries. Entrants may not submit materials that introduce any software viruses, worms or other programs designed to damage software, hardware or telecommunications equipment or are off-topic, partisan-political, contain advertising, nudity, personal attacks or expletives, or is otherwise abusive, threatening, unlawful, harassing, discriminatory, libelous, obscene, false, sexually explicit, or that infringes on the rights of any third party.
				</p>
				<p>
				The contest is void where prohibited or restricted by law. The Sponsors reserve the right to cancel the contest or modify these rules at its discretion. In the event of a dispute regarding the winners, the sponsor reserves the right to award or not award the prizes in its sole discretion. The Sponsor reserves the right to disqualify any entrant whose entry or conduct appears in any way to: inhibit the enjoyment of others; tamper with the competition; violate these rules or other applicable law or regulation; infringe on the rights of third parties; or act in an unsportsmanlike or disruptive manner. Decisions of the <span style="font-weight: bolder;"><b>Picture+254</b> </span> Sponsors are final and binding.
				</p>

				<p><i><b>Dated: November 2019.</i></b></p>


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
</html>