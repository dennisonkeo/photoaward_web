

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
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Google Analytics-->
	<script src="{{asset('js/libs.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/common.js')}}" type="text/javascript"></script>

	<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
	<link rel="stylesheet" href="{{asset('css/style-expand-effect.css')}}">
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
  background-image: url('coconut-drink-on-beach.jpg'); background-repeat: no-repeat;">');

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
.entry{
	margin: 10px;
}

.entry{
	width: 100%;
}
body{
	background: #f3f3f3;
}

.flow-grid.col-1 .flow-grid-col{ width:70%; }
.flow-grid.col-2 .flow-grid-col{ width:70%; }


</style>
</head>
<body id="mikiyakobayashi" class="sub">
<noscript>
<div id="noscript_message"></div>
</noscript>
<div id="wrap">
<div id="header">
	<div class="container">
		
		<div id="logo"><a onclick="window.location='{{ url("/") }}'" href="#" class="hover-line" style="color: #ff00ff; font-size: 16px;"><span>PHOTO CONTEST</span></a></div>
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
					<span class="label">CATEGORIES</span>
				</a>
			</div>
		</div>

		
	</div>
</div>
<div class="parallax"></div>
	<div id="contents-wrap" >
		<div id="contents" >


					<div id="news" class="content flow-grid" style="width: 150%; ">
			
			
				<div class="entry" onclick="window.location='{{ url("professional") }}'">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic25.jpg" alt="news01.jpg">
							
						</div>
						<div class="meta">

							<!-- <h2 class="title"> Judges are looking for the next new face. Judges will be looking for beauty, emotion, expression and personality. The photographs may be portraits and photos of groups or individuals.</h2> -->
						</div>
						<div class="body">
							<h2 class="title">PROFESSIONALS</h2>
							<p></p>
						</div>
					</a>
				</div>

				<div class="entry" onclick="window.location='{{ url("non-professional") }}'">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic41.jpg" alt="news01.jpg">
							
						</div>
						<div class="meta">

							<!-- <h2 class="title">1.	Judges are looking for the best and most creative images of our natural world including animals, plants and landscapes; geological or climatological features, natural phenomenon and conservation.</h2> -->
						</div>
						<div class="body">
							<h2 class="title">NON-PROFESSIONALS</h2>
							<p></p>
						</div>
					</a>
				</div>

				<script type="text/javascript" src="{{asset('js/flow_grid_init.js')}}"></script>
			<!-- </div> -->


		</div><!-- /#contents -->
	</div><!-- /#contents-wrap -->


</div>
</div>

@include('menu') 


<div id="footer">
	<div class="container">
		<div id="copyright" class="wfont">&copy; Photo Contest.</div>
	</div>
</div>
</body>
</html>