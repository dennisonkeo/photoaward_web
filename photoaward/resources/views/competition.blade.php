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
    
<script src="{{ asset('js/right_click.js') }}"></script>

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
	
 <!-- <script src="{{ asset('js/right_click.js') }}"></script> -->

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
  background: url('{{ asset('images/pic3_.jpg') }}') no-repeat center center fixed;


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

    <button class="pull-right" style="line-height: 45px; background: white; color: #ff00ff; font-size: 16px; height: 20px;" onclick="window.location='{{ url("/") }}'"> <!-- <i style="color: #ff0051; font-size: 20px;" class="fa fa-trophy fa-spin"></i> --> PICTURE +254</button>

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
					<span class="label">ABOUT COMPETITION</span>
				</a>
			</div>
		</div>

		
	</div>

</div>


	<div id="contents-wrap">
		<div id="contents">


			<div id="profile" class="content" style="background-image: ur('{{ asset('images/coconut-drink-on-beach.jpg') }}'); background-repeat: no-repeat; background: green; background: black;">


				<div class="container">

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
    Welcome to Picture+254. 
 </div>
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

<!-- <p><span style="font-size:18px;">Description</span></p> -->

<ul>
<p> This exciting contest will give everyday ordinary people, developing and professional photographers a chance to express themselves to a global audience through the medium of photography. </p>

<p>To be eligible for any category, there is no age limit to when the photograph was taken. This applies to all images in a composite. By submitting an entry, the contestant certifies that he/she is the either the creator or copyright owner of the submitted photograph.</p>

<h4>Term:</h4>

<p>Picture+254 Photo Contest runs 20th November, 2019 – 15th January, 2020. </p>

<h4>Who may enter:</h4>

<p>You must be 18 years old or older. Picture+254 is open to both Professionals and Non- Professionals who will compete under their respective categories.</p>

<h4>Why enter</h4>

<p></p>

<h4>How to Enter:</h4>

<p>You can sign up and submit photographs online through our website www.picture+254.com or through the Picture+254 App that you can download onto your phone.</p>

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
   Every contestant must sign up for the competition.</div>
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

<!-- <p><span style="font-size:18px;">Description:</span></p> -->

<ul>
<p>You cannot sign up more than one contestant per phone number or e-mail address. </p>
<p>There is no limit to how many photographs you can enter per category.</p> 
<p>You cannot send entries through the e-mail.</p>
<p>No entries can be digitally or otherwise enhanced other than those entered in the Altered Images category. Allowable adjustments include, toning, contrast, slight color adjustment, conversion to grayscale, dodging and burning for all categories.</p>
<p>In the event a photo in which a person other than the contestant is clearly recognizable wins, the contestant may be required to provide a release from the subject or, in the case of a minor, the subject’s parent or guardian, to Picture+254 upon request. A sample model release is available here. (Smithsonian)</p>
<p>Contestants whose photos depict other people’s work (such as sculptures, statues, paintings, and other copyrightable works) must be prepared to provide a release from the rights holder to the Sponsor upon request. Where a photograph captures the work of others, it must be purely as an object in its environment and not a full-frame close-up of the other person's creation. A sample art release is available here.</p>
<p>If the entrant is unable to provide all required releases, the Sponsor in its sole discretion reserves the right to disqualify the submission, seek to secure the required releases, or permit the submission to remain in the contest.
<p>Photos that violate or infringe upon another person's rights, including but not limited to copyright, are not eligible.</p>
<p>Photos that contain sexually explicit, nude, obscene, violent or other objectionable or inappropriate content, as determined by the Sponsor in its sole discretion, are ineligible for all categories of this contest.</p>
<p>In order to be displayed in our online gallery (Picture+254 Stock Gallery) without being stretched or distorted, photographs must be submitted in .jpeg, .jpg or .gif format, edited for web in sRGB color space, at least 2,000 pixels wide and no larger than 10 MB.</p>
<p>The Sponsor reserves the right to disqualify incomplete entries and/or contestants who are unable to submit the required resolution or format of photograph.</p>
<p>Mobile photographs are exempt from these requirements, but must be submitted at their highest resolution possible.
High-quality scans of non-digital photographs are acceptable. Digital photographs should be taken at the highest resolution possible.</p>
<p>Winners must be prepared to submit an original, unedited digital file or an original negative, print or slide for preparation for exhibitions or other processing. Original negatives, prints or slides will be returned to finalists.</p> 

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
    Picture+254 has seven contest categories:
  </div>
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

<!-- <p><span style="font-size:18px;">Description:</span></p> -->

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

<!-- <p><span style="font-size:18px;">Description:</span></p> -->

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

<!-- <p><span style="font-size:18px;">Description:</span></p>
 -->
<ul>
<p>All entries will be stored in the Picture+254 Stock Gallery which will be marketed Globally. Where an Image/s is purchased by a third party, the owner of the image will be notified directly on their phone and email. The Sponsors will remit royalties to the registered owner of the image less administrative costs in a timely manner.</p>
<p>Top 3 Overall Grand Prizes: [$5,000, $3000 and $2000] plus entry into other global photo competitions and exhibition in targeted National and International Photo and Art Exhibition at the cost of the Sponsors.</p>
<p>Category Winners: The winners of each of the seven categories will receive $500 plus entry and profiling in exhibitions and media platforms.</p>
<p>Photo of the Week (open only to Non – Professionals): $50, training, mentorships and equipment.</p>
<p>Winners may receive additional non-cash prizes.</p> 
<p>Winners must sign a release and license, as well as a declaration of eligibility, and will be responsible for paying any fees or taxes associated with the prize. All prizes are awarded “as is” and non-transferable.</p> 
<p>In case any applicable law prohibits the Sponsor from awarding a photographer the cash prize and/or any non-cash prize, the winner will be awarded the prize in name only.</p>

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

<!-- <p><span style="font-size:18px;"></span></p> -->

<!-- <ul>
<li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/professional/">Professional</a> - Recognizing outstanding bodies of work</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/open">Open</a> - Rewarding exceptional standalone images</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/sony-world-photography-awards/2017/youth">Youth</a> - Celebrating the best single images by emerging photographers aged between 12-19 years-old</span></li>
  <li><span style="font-size:18px;"><a href="https://www.worldphoto.org/student-focus">Student</a> - Providing a platform for photography students worldwide</span></li>
</ul>  --> 
<p>Photo entries will be judged based on creativity, quality, originality, responsiveness to the general elements described in the Website.</p>
<p>There will be weekly Photo of the Week winners chosen by viewers.</p>
<p>Judges will select 10 finalists per category, an overall winner for each category, and the top overall three Photographs. The 70 finalists will be notified of their finalist status, appear on our website and will be invited for the winners Gala.</p>
<p>Winners will be notified through the phone numbers and email addresses provided at the time of entry; 
Contestants are not allowed to contact us about the status of entries or judging.</p>
 <a onclick="window.location='{{ url("jury") }}'" href="#">View the jury</a>
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

	</div>
</div>


{{-- <script type="text/javascript">
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
</script>	 --}}			


</body>
</html>