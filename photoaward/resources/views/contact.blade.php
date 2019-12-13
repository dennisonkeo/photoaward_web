<!doctype html>
<html lang="ja-JP">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>Picture+254|Contact</title>

	<script src="{{ asset('js/right_click.js') }}"></script>
	
	
	<link rel="shortcut icon" href="/common/img/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/common/img/apple-touch-icon-144-precomposed.png">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/customfont.css') }}" rel="stylesheet" media="all">
	
  {{-- <script src="libs.js" type="text/javascript"></script> --}}
  <script type="text/javascript" src="{{ asset('js/libs.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-20499489-1', 'auto');
      ga('send', 'pageview');
    
    </script>

        <style type="text/css">
    	body{
    		background: #f3f3f3;
    	}
    	.text_line{
	/*line-height: 48px;*/
	font-family: cambria;
}
@font-face {
    font-family: "Montserrat";
    src: url(https://fonts.googleapis.com/css?family=Montserrat&display=swap rel="stylesheet" type='text/css');
}
.section-tabled{
  font-size: 18px;
  font-family: 'Montserrat', sans-serif;
}
    </style>
</head>
<body id="mikiyakobayashi" class="sub">
<!-- <noscript>
<div id="noscript_message">javascriptが無効になっているようです。 本サイトを正しく表示するためにはjavascriptを有効にしてください。</div>
</noscript> -->
<div id="wrap">
<div id="header">
	<div class="container">
		
		<div id="logo"><a onclick="window.location='{{ url("/") }}'" href="#" class="hover-line" style="color: #ff00ff; font-size: 16px;" ><span>PICTURE+254</span></a></div>
		

		<div id="gnavi" class="nav">
			<div class="nav-btn">
				<a href="#gnavi-links">
					<span class="bars">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</span>
					<span class="label">CONTACT</span>
				</a>
			</div>
		</div>

		
	</div>
</div>

	<div id="contents-wrap">
		<div id="contents">
			<div id="contact" class="content">
				<div class="container">

					<div class="sections">
					 <div class="section section-tabled">
	<div class="tabled-th">
		<h2>CONTACT</h2>
	</div>
	<div class="tabled-td wfont">
		<div lang="en">
			<br>For requests, information or comments, please contact below.<br>
			<br>
				<strong>PICTURE +254</strong><br>
				  ###~### Nairobi Kenya<br>
				Mail: <a href="#">254pic@gmail.com</a>
			<br>
		</div>

	</div>
</div>
					</div>
					
				</div>
			</div><!-- /.content -->
		</div><!-- /#contents -->
	</div><!-- /#contents-wrap -->

</div>
@include('menu')
<div id="footer">
	<div class="container">
		<div id="copyright" class="wfont">&copy; Picture +254.</div>
	</div>
</div>
</body>
</html>