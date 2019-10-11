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


<!-- Google Font Martel -->
<link href='https://fonts.googleapis.com/css?family=Martel:400,700' rel='stylesheet' type='text/css'>
<!-- Google Font Open Sans -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,600,600italic,700,700italic,800,800italic,400,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://www.worldphoto.org/sites/default/files/css/css_rEI_5cK_B9hB4So2yZUtr5weuEV3heuAllCDE6XsIkI.css" />
<link rel="stylesheet" href="https://www.worldphoto.org/sites/default/files/css/css_w0eOWxH6l7GvsAlO7BkzmipdbQXzzo3PSS061zwCIpI.css" />
<link rel="stylesheet" href="https://www.worldphoto.org/sites/default/files/css/css_oFYRy0gzA6lnrk37oTrQ4Gn-_EwC_FxigWaIJFXuej8.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://www.worldphoto.org/sites/default/files/css/css_2b2mx9pD6Soee-Ibf2iBHh2efGhs3cil4hNm2HPEEqY.css" />



	<link rel="shortcut icon" href="/common/img/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/common/img/apple-touch-icon-144-precomposed.png">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	


	<script src="https://www.worldphoto.org/sites/default/files/js/js_HiIz5xPajTGiijO-cnnRC5ocyMAYo02ysgmCJMoRLI4.js"></script>
<script src="https://www.worldphoto.org/sites/default/files/js/js_gYWhuqN0Wsid8HOSk0yFzqMg-2NTv-xegwc2ACYMGws.js"></script>
<script src="https://www.worldphoto.org/sites/default/files/js/js_e3N4y582_4FH4t0Bm9FRDzHPUgrUWbOqfcYuDMgDhN0.js"></script>
<script src="https://www.worldphoto.org/sites/default/files/js/js_D5Bdu0sUiQhrSqYMAeYlMQy4jnLFiXA3uqamzyrd8lw.js"></script>
<script src="https://www.worldphoto.org/sites/default/files/js/js_59wWAREvswT6aoGcOl5VC-9on2upAIVos2F3CR6i6Sg.js"></script>
<script src="https://www.worldphoto.org/sites/default/files/js/js_m4j4J_Uu_bwewE6jk1mA1P3KbxellEeWN9cTmPjK51E.js"></script>
    <!--Google Analytics-->

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
    	.parallaxabout {
  /* The image used */
  background-image: url('{{ asset('images/pic73.png') }}');

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

var deadline2 = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv2', deadline2);
</script>

    <style type="text/css">
      #clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
    margin: 0 auto;
}      

#clockdiv2{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
    margin: 0 auto;
}

#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #120106;
    display: inline-block;
    opacity: 0.7;
}
#clockdiv2 > div{
    padding: 5px;
    border-radius: 3px;
    background: #ff0051;
    display: inline-block;
    opacity: 0.7;
}

#clockdiv div > span{
    padding: 15px;
    border-radius: 5px;
    background: #000;
    display: inline-block;
    color: #ff0051;
}
#clockdiv2 div > span{
    padding: 5px;
    border-radius: 5px;
    background: #fff;
    display: inline-block;
    color: #ff0051;
}

.smalltext{
    padding-top: 5px;
    font-size: 16px;
}

.phone{
  display: none;
}


@media only screen and (max-width: 600px){
  .parallaxabout{
    display: none;

  }

  .phone{
    display: block;

  }
  .pull-right{
    margin-right: 150px;
  }
}

@media only screen and (max-width: 500px){
  .parallaxabout{
    display: none;
  }

  .phone{
    display: block;

  }
  .pull-right{
    margin-right: 150px;

  }
}


/* mobile */
@media only screen and (max-device-width: 400px){
  .parallaxabout{
    display: none;
  }
  .pull-right{
    margin-right: 150px;

  }

  .phone{
    display: block;

  }
}


</style>
</head>
<body id="mikiyakobayashi" class="sub">
<noscript>
<div id="noscript_message"></div>
</noscript>
<div id="wrap" style="background: black;">
<div id="header">
	<div class="container">
		
		<div id="logo"><a href="#" class="hover-line"><span></span></a></div>

    <button class="pull-right" style="line-height: 45px; background: white; color: #ff00ff; font-size: 16px; height: 20px;" onclick="window.location='{{ url("/") }}'"><!-- <i style="color: #ff0051; font-size: 20px;" class="fa fa-trophy fa-spin"></i> --> PICTURE +254</button>

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
					<span class="label">ABOUT CONTEST</span>
				</a>
			</div>
		</div>

		
	</div>

  <div class="logo2 pull-right" id="hidelogo" style="margin-top: 0px; margin-left: 2px; float: right;">

<img src="images/logo.png" style="width: 236px;">
  
</div>
</div>

<div class="parallaxabout" style="opcity: 0.6; ">
<p style="vertical-align: center; padding-left: 40px; top: 20; font-size: ">
  A GLOBAL COMPETITION <br> FOR PROFESSIONALS AND <br> PHOTOGRAPHY'S EMERGING TALENTS
</p>


        <div id="site-namn" style="position: fixed; top: 65%; margin-left: 15%; vertical-align: center;">
          <button onclick="window.location='{{ url("login") }}'" class="btn btn-secondary" style="border-radius: 5px; width: 345px; background: #ff0051; height: 40px; line-height: 40px;"><i class="fa fa-send-o"></i> SUBMIT</button><br><br>
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
          </div><br><br>
          
        </div>
</div>

	<div id="contents-wrap">
		<div id="contents">

    <div id="profile2" class="contnt" style="background: black; hight: 500px; margin: 3px;">

      <div class="containe" id="slider" style="backgrund: yellow;">
        <div class="phone" style="height: 300px; background-size: cover; background-repeat: no-repeat;">
          
          <div style="margin: 0 auto;">
            <div class="row">
              <img src="images/logo_.png" style="height: 150px; background-size: cover;">
            </div>
          <div class="row" style="margin: 0 auto;">
            <button onclick="window.location='{{ url("login") }}'" class="btn btn-secondary" style="border-radius: 5px; background: #ff0051; height: 40px; line-height: 40px; width: 120px; margin-right: 0.9px;"> SUBMIT</button>
        </div>
          <div id="clockdiv2" style="margin-top: 2px;">
              <div>
                <span class="days"></span>
                <div class="smalltext">Days</div>
              </div>
              <div class="try">
                <span class="hours"></span>
                <div class="smalltext">Hrs</div>
              </div>
              <div>
                <span class="minutes"></span>
                <div class="smalltext">Mins</div>
              </div>
              <div style="dislay: none;">
                <span class="seconds"></span>
                <div class="smalltext">Secs</div>
              </div>
          </div><br><br>
          
        </div>

        </div>

                  <div class="page" >
                  
                    <div class="nav-left">
                        <a href="#" style="width: 35px; height: 54px; background: url('images/prev_slider.png') center no-repeat; display: block; text-indent: -9999px;">prev</a>
                    </div>
                        <div id="mainSlider" style="opaity: 0.5" style="background: green; ">
                            <div class="group">
                            
                                <div class="item" style="background: black;">
                                    <picture>
                <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_03-250.jpg">-->
                <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_03-400.jpg">-->
                                        <img src="images/pic1_.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_06-250.jpg">-->
                <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_06-400.jpg">-->
                                        <img src="images/pic32.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_07-250.jpg">-->
                <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_07-400.jpg">-->
                                        <img src="images/pic50.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_08-250.jpg">-->
                <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_08-400.jpg">-->
                                        <img src="images/pic3_.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_09-250.jpg">-->
                <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_09-400.jpg">-->
                                        <img src="images/pic74.png">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_10-250.jpg">-->
                <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_10-400.jpg">-->
                                        <img src="images/pic75.png">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                                        <img src="images/pic19_.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                                        <img src="images/pic46.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                                        <img src="images/pic18_.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                                        <img src="images/pic11_.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_02-250.jpg">-->
                                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_02-400.jpg">-->
                                        <img src="images/pic23.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                                        <img src="images/pic12_.jpg">
                                    </picture>
                                </div>
                                <div class="item">
                                    <picture>
                                        <!--                        <source media="(max-width: 600px)" srcset="/img2/slide_11-250.jpg">-->
                                        <!--                        <source media="(max-width: 900px)" srcset="/img2/slide_11-400.jpg">-->
                                        <img src="images/pic48.jpg">
                                    </picture>
                                </div>

                            </div>

                        </div>

                    <div class="nav-right">
                        <a href="#" style="width: 35px; height: 54px; background: url('images/next_slider.png') center no-repeat; display: block; text-indent: -9999px;">next</a>
                    </div>


              </div>
      </div>

  </div>

			<div id="profile" class="content" style="background-image: ur('{{ asset('images/coconut-drink-on-beach.jpg') }}'); background-repeat: no-repeat; background: geen; background: black;">

				<div class="container">
					<!-- <div class="lang-nav">
						<ul class="hover-line-links">
							<li><a href="#" lang="en" class="current"><span>EN</span></a></li>
							<li><a href="#" lang="ja"><span>JP</span></a></li>
						</ul>
					</div> -->
<div class="sections">

  <div class="section section-tabled" id="about">
  <div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
    
  <div class="field-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion">
  <div class="content">
    
<div class="paragraphs-items paragraphs-items-field-accordion-content paragraphs-items-field-accordion-content-full paragraphs-items-full">
  
  <div class="field-accordion-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion-content ">
  <div class="content">
    <div class="accordion-item">
      <div class="wrapper js-accordion-trigger">
        <div class="summary">
          <h2 class="title">
            
  <div class="field-accordion-title">
    About Competition  </div>
          </h2>
          <div class="text">
            
  <div class="field-accordion-summary">
    Find the right competition for you – all are free to enter  </div>
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic61.jpg" alt="news01.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description">
    <p><span style="font-size:16px;"></span></p>

<p><span style="font-size:18px;">Description</span></p>

<ul>
Content
<!-- <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li> -->
</ul>  

</div>
      </div>
    </div>    
  </div>
</div>
  </div>

</div>
  </div>
</div>
  </div>
</div>

</div>

<div class="section section-tabled" id="guidelines">
<div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
  
  <div class="field-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion">
  <div class="content">
    
<div class="paragraphs-items paragraphs-items-field-accordion-content paragraphs-items-field-accordion-content-full paragraphs-items-full">
  
  <div class="field-accordion-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion-content ">
  <div class="content">
    <div class="accordion-item">
      <div class="wrapper js-accordion-trigger">
        <div class="summary">
          <h2 class="title">
            
  <div class="field-accordion-title">
  Guidelines
      </div>
          </h2>
          <div class="text">
            
  <div class="field-accordion-summary">
    Find the right competition for you – all are free to enter  </div>
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic41.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description">
    <p><span style="font-size:16px;"></span></p>

<p><span style="font-size:18px;">Description:</span></p>

<ul>
Content
<!-- <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li> -->

</ul>  
</div>
      </div>
    </div>    
  </div>
</div>
  </div>

</div>
  </div>
</div>
  </div>
</div>

</div>

<div class="section section-tabled" id="categories">
<div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
  
  <div class="field-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion">
  <div class="content">
    
<div class="paragraphs-items paragraphs-items-field-accordion-content paragraphs-items-field-accordion-content-full paragraphs-items-full">
  
  <div class="field-accordion-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion-content ">
  <div class="content">
    <div class="accordion-item">
      <div class="wrapper js-accordion-trigger">
        <div class="summary">
          <h2 class="title">
            
  <div class="field-accordion-title">
    Category  </div>
          </h2>
          <div class="text">
            
  <div class="field-accordion-summary">
    Find the right competition for you – all are free to enter  </div>
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic31.jpg" alt="news01.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description">
    <p><span style="font-size:16px;"></span></p>

<p><span style="font-size:18px;">Description:</span></p>

<ul>
<!-- <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li> -->
  Content <a onclick="window.location='{{ url("categories") }}'" href="#">View all categories</a>
</ul>  
</div>
      </div>
    </div>    
  </div>
</div>
  </div>

</div>
  </div>
</div>
  </div>
</div>

</div>

<div class="section section-tabled" id="entry">
<div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
  
  <div class="field-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion">
  <div class="content">
    
<div class="paragraphs-items paragraphs-items-field-accordion-content paragraphs-items-field-accordion-content-full paragraphs-items-full">
  
  <div class="field-accordion-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion-content ">
  <div class="content">
    <div class="accordion-item">
      <div class="wrapper js-accordion-trigger">
        <div class="summary">
          <h2 class="title">
            
  <div class="field-accordion-title">
    Entry  </div>
          </h2>
          <div class="text">
            
  <div class="field-accordion-summary">
    Find the right competition for you – all are free to enter  </div>
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="https://cdn.stocksnap.io/img-thumbs/280h/LQAOB9JBAR.jpg" alt="news01.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description">
    <p><span style="font-size:16px;"></span></p>

<p><span style="font-size:18px;">Description:</span></p>

<ul>
<!-- <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li> -->
  Content
</ul>  
</div>
      </div>
    </div>    
  </div>
</div>
  </div>

</div>
  </div>
</div>
  </div>
</div>

</div>

<div class="section section-tabled" id="prizes">
<div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
  
  <div class="field-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion">
  <div class="content">
    
<div class="paragraphs-items paragraphs-items-field-accordion-content paragraphs-items-field-accordion-content-full paragraphs-items-full">
  
  <div class="field-accordion-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion-content ">
  <div class="content">
    <div class="accordion-item">
      <div class="wrapper js-accordion-trigger">
        <div class="summary">
          <h2 class="title">
            
  <div class="field-accordion-title">
    Prizes  </div>
          </h2>
          <div class="text">
            
  <div class="field-accordion-summary">
    Find the right competition for you – all are free to enter  </div>
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic20.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description">
    <p><span style="font-size:16px;"></span></p>

<p><span style="font-size:18px;">Description:</span></p>

<ul>
Content
<!-- <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li> -->
</ul>  
</div>
      </div>
    </div>    
  </div>
</div>
  </div>

</div>
  </div>
</div>
  </div>
</div>

</div>

<div class="section section-tabled" id="jury">
<div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
  
  <div class="field-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion">
  <div class="content">
    
<div class="paragraphs-items paragraphs-items-field-accordion-content paragraphs-items-field-accordion-content-full paragraphs-items-full">
  
  <div class="field-accordion-content">
    <div class="entity entity-paragraphs-item paragraphs-item-accordion-content ">
  <div class="content">
    <div class="accordion-item">
      <div class="wrapper js-accordion-trigger">
        <div class="summary">
          <h2 class="title">
            
  <div class="field-accordion-title">
    Jury  </div>
          </h2>
          <div class="text">
            
  <div class="field-accordion-summary">
    Find the right competition for you – all are free to enter  </div>
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/logo_.png" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description">
    <p><span style="font-size:16px;"></span></p>

<p><span style="font-size:18px;">Description:</span></p>

<!-- <ul>
<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
	<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li>
</ul>  --> 
Content <a onclick="window.location='{{ url("jury") }}'" href="#">View the jury</a>
</div>
      </div>
    </div>    
  </div>
</div>
  </div>

</div>
  </div>
</div>
  </div>
</div>

</div>


<!-- <div class="section section-tabled">
	<div class="tabled-th">
		<h3>ABOUT</h3>
	</div>
	<div class="tabled-td">
		<div lang="en">
		<p class="text_line">
			The highly acclaimed PHOTO AWARDS is a melting pot of some of the world’s most outstanding and talented souls in the field of photography where recognition, prestige and publicity are instantaneously gained by the winning entry. This is an open invitation. Join us and take part in the competition!
		</p>
		</div>

	</div>
</div>

<div class="section section-tabled">
	<div class="tabled-th">
		<h3>HISTORY</h3>
	</div>
	<div class="tabled-td">
		<div lang="en">
		<p class="text_line">
			The highly acclaimed PHOTO AWARDS is a melting pot of some of the world’s most outstanding and talented souls in the field of photography where recognition, prestige and publicity are instantaneously gained by the winning entry. This is an open invitation. Join us and take part in the competition!
		</p>
		</div>

	</div>
</div>

<div class="section section-tabled">
	<div class="tabled-th">
		<h3>MISSION</h3>
	</div>
	<div class="tabled-td">
		<div lang="en">
		<p class="text_line">
			The highly acclaimed PHOTO AWARDS is a melting pot of some of the world’s most outstanding and talented souls in the field of photography where recognition, prestige and publicity are instantaneously gained by the winning entry. This is an open invitation. Join us and take part in the competition!
		</p>
		</div>

	</div>
</div>

<div class="section section-tabled">
	<div class="tabled-th">
		<h3>VISION</h3>
	</div>
	<div class="tabled-td">
		<div lang="en">
		<p class="text_line">
			The highly acclaimed PHOTO AWARDS is a melting pot of some of the world’s most outstanding and talented souls in the field of photography where recognition, prestige and publicity are instantaneously gained by the winning entry. This is an open invitation. Join us and take part in the competition!
		</p>
		</div>

	</div>
</div>
 -->

	</div>

    <script type="text/javascript" src="js/main/slider.js"></script>		

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
    <div id="copyright" class="wfont">&copy; Photo Contest.</div>
		<div id="copyright" class="wfont">&copy; Photo Contest.</div>
	</div>
</div>


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

var deadline2 = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv2', deadline2);
</script>				


</body>
</html>