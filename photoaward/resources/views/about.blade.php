<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>PICTURE+254</title>
  <meta name="keywords" content="PICTURE+254, contest, photographer, photography, entries, owner, Professionals, compete, competition, Contestants,image, photos, Gallery,categories, submit, photograph, winners, Stock, Content, album." />
  <meta name="description" content="This exciting contest gives everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography." />
  <meta name="author" content="PICTURE+254" />
  <meta property="og:title" content="PICTURE+254" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://picture254.com/" />
  <meta property="og:image" content="www.picture254.com/images/logo.jpg" />
  <meta property="og:site_name" content="PICTURE+254" />
  <meta property="og:description" content="This exciting contest gives everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="{{ asset('js/right_click.js') }}"></script>
 <!-- Google Font Martel
<link href='https://fonts.googleapis.com/css?family=Martel:400,700' rel='stylesheet' type='text/css'>
<!-- Google Font Open Sans -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,600,600italic,700,700italic,800,800italic,400,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/compe_1.css" />
<link rel="stylesheet" href="css/compe_2.css" />
<link rel="stylesheet" href="css/compe_3.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="css/compe_4.css" />

<link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logo_.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo_.png')}}">


  <!-- <link rel="icon" href="/photoaward/public/images/log_o.png"> -->
  <!-- <link rel="shortcut icon" href="/common/img/favicon.ico" /> -->
  <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/photoaward/public/images/log_o.png"> -->

  
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

<script src="js/abt_1.js"></script>
<script src="js/abt_2.js"></script>
<script src="js/abt_3.js"></script>
<script src="js/abt_4.js"></script>
<script src="js/abt_5.js"></script>
<script src="js/abt_6.js"></script>
    <!--Google Analytics-->

<link rel="stylesheet" type="text/css" href="css/main/main.css"/>
    
  <script type="text/javascript" src="{{('js/main/jquery.js')}}"></script>
<script type="text/javascript" src="{{('js/main/jquery.yiiactiveform')}}.js"></script>

<link href="{{ asset('css/style.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/customfont.css') }}" rel="stylesheet" media="all">
  
  {{-- <script src="libs.js" type="text/javascript"></script> --}}
  <script type="text/javascript" src="{{ asset('js/libs.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>

{{--  <script>
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
  background: url('{{ asset('images/pic2.jpg') }}') no-repeat center center fixed;


  /* Set a specific height */
  min-height: 690px; 
  min-width: 1200px;
  /*height: auto;*/


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
// Date;
function showDate()
{
  alert(Date.parse("Mar 16, 2020 12:00:00"));
}

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

  // var endtime = new Date("Mar 15, 2020 12:00:00").getTime();

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

  // updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse("Mar 15, 2020 23:59:59") );
initializeClock('clockdiv', deadline);

var deadline2 = new Date(Date.parse("Mar 15, 2020 23:59:59") );
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
    background: #000;
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
@media only screen and (-device-width: 400px){
  .parallaxabout{
    display: none;
  }
  .pull-right{
    margin-right: 150px;

  }

  .phone{
    display: block;

  }


@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}


</style>
    <style type="text/css">
   .element {
  width: 100%;
  height: auto;
  /*padding: 50px;*/
  position: relative;
  padding: 10px;

}
.top-border,
.bottom-border {
  position: absolute;
  display: flex;
  justify-content: space-between;
  width: 100%;
  height: 30%;
  left: 0;
}
.top-border {
  top: 0;
}
.bottom-border {
  bottom: 0;
  top: 95%;
}
.top-border:after,
.top-border:before,
.bottom-border:after,
.bottom-border:before {
  content: '';
  width: 4%;
  height: 8%;
}
.top-border:after,
.top-border:before {
  border-top: 4px solid #ff00ff;
}
.bottom-border:after,
.bottom-border:before {
  border-bottom: 4px solid #ff00ff;
}
.top-border:before,
.bottom-border:before {
  border-left: 4px solid #ff00ff;
}
.top-border:after,
.bottom-border:after {
  border-right: 4px solid #ff00ff;
}
.dot{
  height: 10px;
  width: 10px;
  border-radius: 50%;
  display: inline-block;
  background-color: #ff00ff;
}
@font-face {
    font-family: "Montserrat";
    src: url(https://fonts.googleapis.com/css?family=Montserrat&display=swap rel="stylesheet" type='text/css');
}
#profile .field-accordion-description{
  font-size: 16px;
  font-family: 'Montserrat', sans-serif;
}
.section-tabled p{
  text-align: justify; 
  margin-bottom: -6px;
}
.field-accordion-summary{
  font-size: 16px;
  font-family: 'Montserrat', sans-serif;
}

.wrapper .js-accordion-trigger .is-expanded{
  background: red;
}
</style>


</head>
<body id="mikiyakobayashi" class="sub">
<noscript>
<div id="noscript_message"></div>
</noscript>
<div id="wrap" style="background: white;">
<div id="header">
  <div class="container">
    
    <!-- <div id="logo"><a href="#" class="hover-line"><span></span></a></div> -->

    <!-- <button class="pull-right" style="line-height: 45px; background: white; color: #ff00ff; font-size: 16px; height: 20px;" onclick="window.location='{{ url("/") }}'"> PICTURE +254</button> -->
     <span class="navbar-logo" style="float: right;">
                    <a onclick="window.location='{{ url("/") }}'" href="#"> 

                         <img src="images/l_ogo.png" alt="logo" style="height: 3.7rem; vertical-align: middle;">
                    </a>
                </span>

    <!-- <div id="" style="float: right; line-height: 50px;"><a href="about.html" class="label"><span>SUBMIT</span></a></div> -->

    <div id="gnavi" class="nav" >
      <div class="nav-btn">
        <a href="#gnavi-links">
          <span class="bars">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </span>
          <span class="label">ABOUT</span>
        </a>
      </div>
    </div>

@include('nav')

  </div>
  @include('menu2')

   <div class="main-box start pull-center" style="background: white; display: none; width: 50%; margin: 10% auto 0 auto; position: absolute; text-align: center; font-size: 14px; padding: 10px; border-radius: 20px; position: fixed;">
            <div class="close-button didotltpro-italic pull-right"><a onclick="close_modal()" href="#">close</a></div>

            <h2 class="novecentosanswide-medium" style="margin-bottom: 20px;">LIKE WHAT YOU SEE!!!</h2><br/>
            <span class="description didotltpro-italic">Vote For Picture Of The Week</span><br>
            <!-- <a href="" class="btn btn-secondary" style="margin-left: 110px; border-radius: 5px; width: 150px; background: #ff0051; height: 40px; line-height: 40px;">" id="submit-entry">Vote Here</a> -->
        <button onclick="window.location='{{ url("like-images") }}'" class="btn btn-secondary" style="margin-left: 0px; border-radius: 0px; width: 150px; background: #ff00ff; height: 40px; line-height: 40px;">VOTE HERE</button><br>
        <br>

        </div>

  <div class="logo2 pull-right" id="hidelogo" style="margin-top: 0px; margin-left: 2px; float: right;">

<img src="images/logo-.png" style="width: 236px; opaity: 0.7">

</div>
</div>

<div class="parallaxabout" style="opcity: 0.6; ">

        <div id="site-namn" style="position: fixed; top: 25%; margin-left: 10%; vertical-align: center; font-family:'Montserrat', sans-serif;">
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
              </div><br>
            <h4 style=" text-align: justify; vertical-align: center; color: #fff; padding-left: 50px; margin-top: 10px; font-size: 30px; font-family:'Montserrat', sans-serif;">
                PICTURE +254 
            </h4>
            <h4 style=" vertical-align: center; color: #fff; padding-left: 50px; top: 10; font-size: 48px; font-weight: bold;font-family:'Montserrat', sans-serif;">PHOTO CONTEST
            </h4>

            @if(Auth::check())
              @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('judge') || Auth::user()->hasRole('moderator'))
            <button onclick="window.location='{{ url("admin-dashboard") }}'" class="btn btn-secondary" style="margin-left: 110px; border-radius: 5px; width: 150px; background: #ff0051; height: 40px; line-height: 40px; font-family:'Montserrat', sans-serif;"><!-- <i class="fa 
          fa-send-o"></i> --> ENTER NOW</button><br><br>
            @else
            <button onclick="window.location='{{ url("submit-entry") }}'" class="btn btn-secondary" style="margin-left: 110px; border-radius: 5px; width: 150px; background: #ff0051; height: 40px; line-height: 40px; font-family:'Montserrat', sans-serif;"><!-- <i class="fa 
          fa-send-o"></i> --> ENTER NOW</button><br><br>
            @endif
          @else
          <button onclick="window.location='{{ url("login") }}'" class="btn btn-secondary" style="marin-left: 50px; border-radius: 5px; width: 150px; background: #ff0051; height: 40px; line-height: 40px; font-family:'Montserrat', sans-serif;"><!-- <i class="fa fa-send-o"></i> --> ENTER NOW</button><br><br>
          @endif
          </div>
          
        </div>
</div>

  <div id="contents-wrap">
    <div id="contents">

    <div id="profile2" class="contnt" style="background: black; hight: 500px; margin: 3px;">

      <div class="containe" id="slider" style="backgrund: yellow; height: 500px;">
        <div class="phone" style="height: 300px; background-size: cover; background-repeat: no-repeat;">
          
          <div style="margin: 0 auto;">
            <div class="row">
              <img src="images/logo_.png" style="height: 150px; background-size: cover;">
            </div>
          <div class="row" style="margin: 0 auto;">
            @if(Auth::check())
            <button onclick="window.location='{{ url("submit-entry") }}'" class="btn btn-secondary" style="border-radius: 5px; background: #ff0051; height: 40px; line-height: 40px; width: 120px; margin-right: 0.9px; font-family:'Montserrat', sans-serif;"> ENTER NOW</button>
            @else
            <button onclick="window.location='{{ url("login") }}'" class="btn btn-secondary" style="border-radius: 5px; background: #ff0051; height: 40px; line-height: 40px; width: 120px; margin-right: 0.9px; font-family:'Montserrat', sans-serif;"> ENTER NOW</button>
            @endif
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

                  <div class="page" style="height: 500px;">
                  
                    <div class="nav-left">
                        <a href="#" style="width: 35px; height: 54px; background: url('images/prev_slider.png') center no-repeat; display: block; text-indent: -9999px;">prev</a>
                    </div>

       
                        <div id="mainSlider" style="opaity: 0.5" style="background: green; ">
                            <div class="group">
                            
                                <div class="item" style="background: #fff;">
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

<!-- <<<<<<< HEAD
      <div id="profile" class="content" style="background-image: ur('{{ asset('images/coconut-drink-on-beach.jpg') }}'); background-repeat: no-repeat; background: black;">
======= -->
      <div id="profile" class="content" style="background-image: ur('{{ asset('images/coconut-drink-on-beach.jpg') }}'); background-repeat: no-repeat; background: ;">


        <div class="container">

<div class="sections" style="text-align: center; font-family:'Montserrat', sans-serif;">

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
    About 
  </div>
          </h2>
          <div class="text">
            
  <!-- <div class="field-accordion-summary" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
    <h4> Hi and welcome to Picture+254. </h4>
 </div> -->
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic61.jpg" alt="news01.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description" style="line-height: 25px; font-family:'Montserrat', sans-serif;">
    <!-- <p><span style="font-size:16px;"></span></p> -->

<!-- <p><span style="font-size:18px;">Description</span></p> -->

<!-- <ul style="line-height: 40px;"> -->
<div class="element">
<div class="top-border"></div>
<div class="contentt">
<p>
  Hi @if(Auth::check()){{Auth::user()->name}}@endif, Welcome to Picture +254.
  This exciting contest will give everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography. 
</p>
<!-- <p>
  Hi and welcome to Picture+254
</p> -->
<p>
  This exciting contest gives everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography. 
</p>
<p>
  There is no age limit to when the photograph was taken and hence you can make many entries. 
  By submitting an entry, the contestant certifies that he/she is the either the creator or copyright owner of the submitted photograph.
</p>

<h4 style="padding-top: 15px; padding-bottom: 15px; font-weight: bold;">Term:</h4>

  Picture+254 Photo Contest runs <b>1st February, 2020</b> ~ <b>15th March, 2020</b>.
<br><br>
<a onclick="window.location='{{ url("about-competition") }}'" href="#">Read more.</a>

<div class="bottom-border" style="margin-top: 20px;"></div>

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
            
  <div class="field-accordion-title" >
  Guidelines
      </div>
          </h2>
          <div class="text">
            
 <!--  <div class="field-accordion-summary" style="line-height: 25px; text-align: justify;letter-spacing: 0px;">
   <h4>
   Every contestant must sign up for the competition. 
   </h4>
  </div> -->
          </div>
        </div>

        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic41.jpg" width="522" height="200" />  </div>

        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
   <!--  <p><span style="font-size:16px;"></span></p> -->

<!-- <p><span style="font-size:18px;">Description:</span></p> -->

<!-- <ul style="line-height: 40px;"> -->
<div class="element">
<div class="top-border"></div>
<div class="contentt">
<p>
  Every contestant must sign up for the competition. This allows winners to be clearly identified.
</p>
<p>
  You cannot sign up more than one contestant per phone number or e-mail address.
</p>
<p> 
  You can enter as many photographs as you can in all categories. 
</p>
<p>
  You cannot send entries through the e-mail.
</p>
  You are not allowed to digitally or otherwise enhance the photos you submit. The only photos you can enhance or alter are those entered in the Altered Images category. You are however allowed to make small adjustments such as tone, contrast, slight color adjustment, conversion to grayscale, dodging and burning for all categories.
<br><br>
<a onclick="window.location='{{ url("guidelines") }}'" href="#">Read more.</a>

<div class="bottom-border" style="margin-top: 20px;">
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
    Category  
  </div>
          </h2>
          <div class="text">
            
  <!-- <div class="field-accordion-summary" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
    <h4>
    Picture+254 has seven contest categories:
    </h4>
  </div> -->
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic31.jpg" alt="news01.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
    <!-- <p><span style="font-size:16px;"></span></p> -->

<!-- <p><span style="font-size:18px;">Description:</span></p> -->

<ul>
<!-- <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li> -->
<br><a onclick="window.location='{{ url("categories") }}'" href="#">View all categories</a>
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
            Prizes 
          </div>
          </h2>
          <div class="text">
            
            <!-- <div class="field-accordion-summary" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
              <h4>
              All entries will be stored in the Picture+254 Stock Gallery.
              </h4>
            </div> -->

          </div>

        </div>
        
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/pic20.jpg" width="522" height="200" />  
  </div>
        </div>
      </div>
      <div class="description">
        
  <div class="field-accordion-description" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
    <!-- <p><span style=""></span></p> -->

<!-- <p><span style="font-size:18px;">Description:</span></p>
 -->
<!-- <ul> -->
        <div class="element">

          <div class="top-border"></div>
            <div class="contentt">

  All entries will be stored in the Picture+254 Stock Gallery which will be marketed Globally. Where an Image/s is purchased by a third party, the owner of the image will be notified directly on their phone and email. The Sponsors will remit royalties to the registered owner of the image less administrative costs in a timely manner.
<p></p>
<p>
<b>Top 3 Overall Grand Prizes (Non – Professional):</b> [$5,000, $3000 and $2000] plus entry into other global photo competitions and exhibition in targeted National and International Photo and Art Exhibition at the cost of the Sponsors.
</p>

<b>Top 3 Overall Grand Prizes (Professional):</b>[$7,000, $5000 and $3000] plus entry into other global photo competitions and exhibition in targeted National and International Photo and Art Exhibitions at the cost of the Sponsors.

<br><br>
<a onclick="window.location='{{ url("prizes") }}'" href="#">Read more.</a>

<!-- <p>
<b>Category Winners:</b>The winners of each of the seven categories will receive $500 plus entry and profiling in exhibitions and media platforms.
</p> -->

<!-- <p>
<b>Photo of the Week (open only to Non – Professionals): </b> $50, training, mentorships and profiling.
</p>

<p>
<b>Photo of the Day (open only to Non – Professionals):</b> $20 and profiling.
</p>

<p>
Winners may receive additional non-cash prizes.
</p> 

<p>
Winners must sign a release and license, as well as a declaration of eligibility, and will be responsible for paying any fees or taxes associated with the prize. All prizes are awarded “as is” and non-transferable.
</p> 

<p>
In case any applicable law prohibits the Sponsor from awarding a photographer the cash prize and/or any non-cash prize, the winner will be awarded the prize in name only.
</p>
<b>Image Profiling:</b>
Picture+254 will randomly select photos for highlight on its website during and after the competition while displaying entries in a publicly accessible Picture+254 Stock Gallery for viewership and purchase by interested parties.
 -->
                  <div class="bottom-border" style="margin-top: 20px;"></div>
            </div>
</div>

<!-- <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li> -->
<!-- </ul>   -->
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
            <div class="field-accordion-title">Jury</div>
        </h2>
    
        
<div class="text">
           <!--  <div class="field-accordion-summary" style="line-height: 25px; text-align: justify;">
               <h4> Photo entries will be judged. </h4>
            </div> -->
</div>
        </div>

        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src="images/logo_.png" width="522" height="200" />  
  </div>

        
        </div>
      </div>
                  
    <div class="description">
      <div class="field-accordion-description" style=" line-height: 25px; text-align: justify;">
        <div class="element">
          <div class="top-border"></div>
            <div class="contentt">


<p>
  Photo entries will be judged based on creativity, quality, originality, responsiveness to the general elements described in the Website.
</p>
<p>
  There will be weekly Photo of the day and Photo of the Week winners chosen by viewers through voting.
<p>
  Judges will select 10 finalists per category, an overall winner for each category, and the top overall three Photographs. The 70 finalists will be notified of their finalist status, appear on our website and will be invited for the winners Gala.
</p> 
<p>
  Winners will be notified through the phone numbers and email addresses provided at the time of entry;
</p>
  Contestants are not allowed to contact us about the status of entries or judging.
<br><br>
 <a onclick="window.location='{{ url("jury") }}'" href="#">View the jury</a>

<div class="bottom-border" style="margin-top: 20px;"></div>

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


</div>
</div>

<div class="section section-tabled" id="sponsors">
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
       Our Partners
    </div>
          </h2>
          <div class="text">
            
 <!--  <div class="field-accordion-summary" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
    
    <h4>
     Picture+254 2019/2020 <br> Our Partners.
    </h4>
  </div> -->
          </div>
        </div>
        <div class="cover-image">
          
  <div class="field-accordion-cover-image">
    <img src=images/sg_logo.png alt="news01.jpg" width="522" height="200" />  </div>
        </div>
      </div>
      <div class="description">
       
  <div class="field-accordion-description" style="line-height: 25px; text-align: justify; letter-spacing: 0px;">
    <!-- <p><span style="font-size:16px;"></span></p> -->

<!-- <p><span style="font-size:18px;">Description:</span></p> -->
<!-- <ul></ul> -->
<!-- <div class="top-border"></div>  -->


<h4>STANDARD GROUP</h4>
<a href="https://www.standardmedia.co.ke/corporate/about">Standard Group</a>

<!-- <h4>
Here are the details about entry fees and deadlines for 2019/2020 Picture+254 photo contest.
<h4>Final Deadline:<b>24/January, 2020</b></h4>
</h4>
<h4>
Professional - Single image entry fee: Ksh.200.
</h4>
<h4>
Non-Professional - Single image entry fee: Ksh.100.
</h4> -->

<!-- <div class="bottom-border" style="margin-top: 20px;"></div> -->
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

  <div class="container" style="text-align: right;">
        <div class="wfont" style="font-size:14px;font-family:'Montserrat', sans-serif;">&copy; <script>document.write(new Date().getFullYear());</script> Picture+254. All rights reserved.
        </div>
 </div>
@include('advert')

<script>
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

function closeNav() {
  document.getElementById("myNav").style.display = "none";
}
</script>

<script type="text/javascript">
// Date;
function showDate()
{
  alert(Date.parse("Mar 16, 2020 12:00:00"));
}

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

  // var endtime = new Date("Mar 15, 2020 12:00:00").getTime();

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

  // updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse("Mar 15, 2020 23:59:59") );
initializeClock('clockdiv', deadline);

var deadline2 = new Date(Date.parse("Mar 15, 2020 23:59:59") );
initializeClock('clockdiv2', deadline2);
</script>       

<script type="text/javascript">

function close_modal()
{
  $('.start').hide();
}

function preventDefault(event)
{
  event.preventDefault();
}

function myAlert()
  
</script>
<script type="text/javascript">

  $("p").after("<center><span class=\"dot\"></span></center>");
</script>

</body>
</html>