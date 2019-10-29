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


<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="shortcut icon" href="/common/img/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/common/img/apple-touch-icon-144-precomposed.png">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
 <!-- <script src="{{ asset('js/right_click.js') }}"></script> -->

<link rel="stylesheet" type="text/css" href="css/main/main.css"/>
    
  <script type="text/javascript" src="{{('js/main/jquery.js')}}"></script>
<script type="text/javascript" src="{{('js/main/jquery.yiiactiveform')}}.js"></script>

<link href="{{ asset('css/style.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/customfont.css') }}" rel="stylesheet" media="all">
	
  {{-- <script src="libs.js" type="text/javascript"></script> --}}
  <script type="text/javascript" src="{{ asset('js/libs.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

{{-- 	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-20499489-1', 'auto');
      ga('send', 'pageview');
    
    </script> --}}
<style type="text/css">
  body{
    background-color: #f3f3f3;
  }
</style>

</head>
<body id="mikiyakobayashi" class="sub">

<div id="wrap">
<div id="header">
  <div class="container">
    
    <div id="logo"><a onclick="window.location='{{ url("/") }}'" href="#" class="hover-line" style="color: #ff00ff; font-size: 16px;" ><span>PICTURE +254</span></a></div>
    

    <div id="gnavi" class="nav">
      <div class="nav-btn">
        <a href="#gnavi-links">
          <span class="bars">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
          <span class="label">ENTRY FEE</span>
        </a>
      </div>
    </div>

    
  </div>
</div>

  <div id="contents-wrap">
    <div id="contents">
      <div id="press" class="content">
        {{-- <section class="" style="height: 300px; background: url('images/pic34.jpg');">
            <img src="images/pic28.jpg" style="width: 200px; height: auto;">
          </section> --}}
        <div class="container">
          {{-- <div class="lang-nav">
            <ul class="hover-line-links">
              <li><a href="#" lang="en" class="current"><span>EN</span></a></li>
              <li><a href="#" lang="ja"><span>JP</span></a></li>
            </ul>
          </div> --}}
          
          <div class="sections">
           <div class="section section-tabled">
  <div class="tabled-th">
    <h2>ENTRY FEE</h2>
  </div>
        <div class="tabled-td">
        <p>Sample Fee</p>
         Here are the details about entry fees and deadlines for 2019 edition.<br> final deadline entry fees and date<br> Final Deadline<br>
22 November 2019<br>

<p>Non-Professional - Single image entry fee: $20
Non-Professional - Series entry fee (from 2 to 5 images): $25</p>

<p>Professional - Single image entry fee: $25
Professional - Series entry fee (from 2 to 5 images): $30 multiple category entries Additional Fee
$10 per category winners announcement 24 December 2019 </p>

    </div>
</div>
          </div>
          
          <script type="text/javascript" src="/common/js/page_init.js"></script>
          
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