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

	<script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="{{asset('js/jquery.carouFredSel-6.0.4-packed.js')}}" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('#carousel').carouFredSel({
					responsive: true,
					scroll: 1,
					items: {
						width: 300,
						height: '66%',
						visible: {
							min: 2,
							max: 5
						}
					}
				});
			});
		</script>
		<style type="text/css">

			#wrapper {
				background-color: #f6f6f6;
				box-shadow: 0 0 10px #aaa;
				width: 80%;
				height: 90%;
				margin: 0;
				position: absolute;
				left: 10%;
				top: 5%;
			}
			#wrapper h3 {
				font-size: 20px;
				text-align: center;
				color: #999;
				margin: 0;
				padding-top: 50px;
			}
			#inner {
				width: 100%;
				height: 400px;
				overflow: hidden;
				position: absolute;
				top: 50%;
				left: 0;
				margin: -100px 0 0 0;
			}
			#carousel img {
				height: auto;
				border: none;
				display: block;
				float: left;
				padding: 0 10px;
			}
			
			#donate-spacer {
				height: 100%;
			}
			#donate {
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
			}
			#donate form {
				width: 100px;
			}
		</style>
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link href="{{ asset('css/main/main.css') }}" rel="stylesheet" media="all">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" media="all">
    <!--Google Analytics-->

	
	<script type="text/javascript" src="{{ asset('js/main/main.js') }}"></script>
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

    <script type="text/javascript">
	function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>

    <style type="text/css">
    	#clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
}

#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #00BF96;
    display: inline-block;
    opacity: 0.7;
}

#clockdiv div > span{
    padding: 15px;
    border-radius: 5px;
    background: #00816A;
    display: inline-block;
}

.smalltext{
    padding-top: 5px;
    font-size: 16px;
}
    </style>
</head>
<body id="mikiyakobayashi" class="index">
<noscript>
<div id="noscript_message"></div>
</noscript>
<div id="wrap">
<div id="header">
	<div class="container">
		
		<h1 id="logo"><a href="/" class="hover-line"><span>PHOTO CONTEST</span></a></h1>
		

		<div id="gnavi" class="nav">
			<div class="nav-btn">
				<a href="#gnavi-links">
					<span class="bars">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</span>
					<span class="label"></span>
				</a>
			</div>
		</div>

		
	</div>
</div>

<div id="contents-wrap">
	<div id="contents">
		<div id="top" class="content">
			<div id="stage">

				<div id="site-name">PHOTO- CONTEST</div>

				<div id="site-nam">
					<a href="{{ route('login') }}" class="btn btn-secondary" style="border-radius: 5px; width: 345px; background: orange; height: 40px; line-height: 40px;"><i class="fa fa-send-o"></i> SUBMIT</a><br><br>
					<div id="clockdiv">
						  <div>
						    <span class="days"></span>
						    <div class="smalltext">Days</div>
						  </div>
						  <div class="try">
						    <span class="hours"></span>
						    <div class="smalltext">Hours</div>
						  </div>
						  <div>
						    <span class="minutes"></span>
						    <div class="smalltext">Minutes</div>
						  </div>
						  <div>
						    <span class="seconds"></span>
						    <div class="smalltext">Seconds</div>
						  </div>
					</div>

				</div>

				<div class="nav-left">
            <a href="#">prev</a>
        </div>
        <div id="mainSlider" style="opaity: 0.5" >
            <div class="group">
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_03-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_03-400.jpg">-->
                        <img src="images/ndawards_2019_03.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_06-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_06-400.jpg">-->
                        <img src="images/ndawards_2019_04.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_07-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_07-400.jpg">-->
                        <img src="images/ndawards_2019_05.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_08-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_08-400.jpg">-->
                        <img src="images/ndawards_2019_06.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_09-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_09-400.jpg">-->
                        <img src="images/ndawards_2019_07.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
<!--                        <source media="(max-width: 600px)" srcset="/img2/slide_10-250.jpg">-->
<!--                        <source media="(max-width: 900px)" srcset="/img2/slide_10-400.jpg">-->
                        <img src="images/ndawards_2019_08.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/ndawards_2019_09.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/ndawards_2019_10.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/ndawards_2019_11.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/ndawards_2019_12.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_02-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_02-400.jpg">-->
                        <img src="images/ndawards_2019_02.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/ndawards_2019_13.jpg">
                    </picture>
                </div>
                <div class="item">
                    <picture>
                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                        <img src="images/ndawards_2019_14.jpg">
                    </picture>
                </div>
            </div>
        </div>
        <div class="nav-right">
            <a href="#"><i class="fa fa-chevron-right"></i> next</a>
        </div>

				<!-- <ul id="images">
				
				
					<li><img src="{{ asset('images/pic10.jpg') }}" alt="top01" /></li>
				
				
				
					<li><img src="{{ asset('images/pic2.jpg') }}" alt="top02" /></li>
				
				
				
					<li><img src="{{ asset('images/pic3.jpg') }} " alt="top03" /></li>
				
				
				
					<li><img src="{{ asset('images/pic12.jpg') }} " alt="top04" /></li>
				
				
				
					<li><img src="{{ asset('images/pic19.jpg') }} " alt="top05" /></li>
				
				
				
					<li><img src="{{ asset('images/pic16.jpg') }} " alt="top06" /></li>
				
				
				</ul> -->


				<div id="scroll-info">
					<a href="{{ route('about') }}">scroll</a>
					<div id="scroll-info-line"><div></div></div>
				</div>
			</div>

			<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>

			<script type="text/javascript" src="{{ asset('js/main/slider.js') }}"></script>
			<script type="text/javascript" src="{{('js/main/jquery.js')}}"></script>
			<script type="text/javascript" src="{{('js/main/jquery.yiiactiveform')}}.js"></script>

			
		</div>
	</div>
</div>


</div>

@include('menu')

<div id="footer">
	<div class="container">
	<ul>
		<li id="copyright" class="wfont">&copy; Photo Contest</li>
	</ul>

	</div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("top");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

<script type="text/javascript" src></script>
<script type="text/javascript">
	function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>

</body>
</html>