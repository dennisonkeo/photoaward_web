

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
	<div id="contents-wrap">
		<div id="contents">
			{{-- <article style="margin-left: 150px;">
							<div class="gallery">
								<a href="javascript:void(0)"> 
									<img class="img01" src="https://cdn.stocksnap.io/img-thumbs/960w/8VZXWIK0K3.jpg" alt="news01.jpg" style="backgrond: red;" />
									<p class="text1" >
										Category One
									</p> 
								</a>
								<a href="javascript:void(0)"> 
									<img class="img02" src="http://www.mikiyakobayashi.com/news/news/assets_c/2019/05/news01-thumb-400xauto-913.jpg" alt="news01.jpg" style="backgrond: black;"/> 

								</a>
								<a href="javascript:void(0)"> 
									<img class="img03" src="https://cdn.stocksnap.io/img-thumbs/960w/26QFR9W62U.jpg" alt="news01.jpg"/> 
									<p class="text3" >
										Category Three
									</p> 
								</a>
								<a href="javascript:void(0)"> 
									<img class="img04" src="https://cdn.stocksnap.io/img-thumbs/280h/LQAOB9JBAR.jpg" alt="news01.jpg" style="bakground: green;"/> 

								</a>
								<a href="javascript:void(0)"> 
									<img class="img05" src="http://www.mikiyakobayashi.com/news/news/assets_c/2019/05/news01-thumb-400xauto-913.jpg" alt="news01.jpg" style="backround: blue;"/> 

								</a>
								<a href="javascript:void(0)"> 
									<img class="img06" src="https://cdn.stocksnap.io/img-thumbs/960w/2OU8JC9ZWH.jpg" alt="news01.jpg"/>

								</a>
								<a href="javascript:void(0)"> <img class="img07" src="https://cdn.stocksnap.io/img-thumbs/960w/8VZXWIK0K3.jpg" alt="news01.jpg"/> </a>
							</div>
						</article> --}}

					<div id="news" class="content flow-grid">

					{{-- <div id="news" class="content flow-grid" style="background-image: url('bg2.jpg'); background-repeat: no-repeat;"> --}}

			

					<!-- <div id="news" class="content flow-grid"> -->
			
			
				<div class="entry">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic25.jpg" alt="news01.jpg">
							
						</div>
						<div class="meta">

							<h2 class="title">Content</h2>
						</div>
						<div class="body">
							<h2 class="title">Architecture</h2>
							<p>Some description</p>
						</div>
					</a>
				</div>

				<div class="entry">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic16.jpg" alt="news01.jpg">
							
						</div>
						<div class="meta">

							<h2 class="title">Content</h2>
						</div>
						<div class="body">
							<h2 class="title">Sports</h2>
							<p>Some description</p>
						</div>
					</a>
				</div>

				<div class="entry">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic19_.jpg" alt="news01.jpg">
							
						</div>
						<div class="meta">

							<h2 class="title">Content</h2>
						</div>
						<div class="body">
							<h2 class="title">CATEGORY 3</h2>
							<p>Some description</p>
						</div>
					</a>
				</div>				

				<div class="entry">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic56.jpg">
							
						</div>
						<div class="meta">

							<h2 class="title">Content</h2>
						</div>
						<div class="body">
							<h2 class="title">CATEGORY 4</h2>
							<p>Some description</p>
						</div>
					</a>
				</div>

				<div class="entry">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic38.jpg" alt="news01.jpg">
							
						</div>
						<div class="meta">

							<h2 class="title">Content</h2>
						</div>
						<div class="body">
							<h2 class="title">CATEGORY 5</h2>
							<p>Some description</p>
						</div>
					</a>
				</div>

				<div class="entry">
					<a href="#">　<div class="thumb" data-original-width="400" data-original-height="246">
							
							<img src="images/pic47.jpg">
							
						</div>
						<div class="meta">

							<h2 class="title">Puglia's most famous sight is the unique conical houses (Trulli) found in the area <br>around Alberobello, a declared UNESCO World Heritage Site.</h2>
						</div>
						<div class="body">
							<h5 class="title">CATEGORY 6</h5>
							<p>Some description</p>
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