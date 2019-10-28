<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | pic +254</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('dashboard/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('dashboard/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logo_.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo_.png')}}">

		<!-- default styles -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

<!-- optionally if you need to use a theme, then include the theme CSS file as mentioned below -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />

	<style type="text/css">
		.text-center {text-align:center;}

a {
  color: tomato;
  text-decoration: none;
}

a:hover {
  color: #2196f3;
}

pre {
display: block;
padding: 9.5px;
margin: 0 0 10px;
font-size: 13px;
line-height: 1.42857143;
color: #333;
word-break: break-all;
word-wrap: break-word;
background-color: #F5F5F5;
border: 1px solid #CCC;
border-radius: 4px;
}

.new-react-version {
  padding: 20px 20px;
  border: 1px solid #eee;
  border-radius: 20px;
  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);
  
  text-align: center;
  font-size: 14px;
  line-height: 1.7;
}

.new-react-version .react-svg-logo {
  text-align: center;
  max-width: 60px;
  margin: 20px auto;
  margin-top: 0;
}





.success-box {
  margin:50px 0;
  padding:10px 10px;
  border:1px solid #eee;
  background:#f9f9f9;
}

.success-box img {
  margin-right:10px;
  display:inline-block;
  vertical-align:top;
}

.success-box > div {
  vertical-align:top;
  display:inline-block;
  color:#888;
}



/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}

/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:1.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}

/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}

/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
	@include('dashboard.nav-bar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
	@include('dashboard.side-bar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
						
					{{-- start form --}}
					<div class="panel" style="wdth: 100%; margin: 0 auto;">
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
								{{-- <div class="panel-heading">
									<h3 class="panel-title" style="font-weight: bold;"><i class='fa fa-user-circle-o' style="margin-right: 10px;"></i>Image Rating Panel</h3>
								</div> --}}
							<div class="panel-body">
								<label for="input-1" class="control-label">Rate This</label>
							<input id="input-1" name="input-1" value="4.3" class="rating-loading">
									<!-- Page Content -->
									<div class="conainer">

									  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Image Rating Panel</h1>

									  <hr class="mt-2 mb-5">

									  <div class="row text-center text-lg-left">

									    <figure class="figure col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
									          </a>
									          <figcaption class="figure-caption">
  
													  <!-- Rating Stars Box -->
													  <div class='rating-stars text-center'>
													    <ul id='stars'>
													      <li class='star' title='Poor' data-value='1'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Fair' data-value='2'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Good' data-value='3'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Excellent' data-value='4'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='WOW!!!' data-value='5'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													    </ul>
													  </div>
									      	  </figcaption>
									    </figure><figure class="figure col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
									          </a>
									          <figcaption class="figure-caption">
  
													  <!-- Rating Stars Box -->
													  <div class='rating-stars text-center'>
													    <ul id='stars'>
													      <li class='star' title='Poor' data-value='1'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Fair' data-value='2'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Good' data-value='3'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Excellent' data-value='4'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='WOW!!!' data-value='5'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													    </ul>
													  </div>
									      	  </figcaption>
									    </figure><figure class="figure col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
									          </a>
									          <figcaption class="figure-caption">
  
													  <!-- Rating Stars Box -->
													  <div class='rating-stars text-center'>
													    <ul id='stars'>
													      <li class='star' title='Poor' data-value='1'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Fair' data-value='2'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Good' data-value='3'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Excellent' data-value='4'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='WOW!!!' data-value='5'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													    </ul>
													  </div>
									      	  </figcaption>
									    </figure><figure class="figure col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
									          </a>
									          <figcaption class="figure-caption">
  
													  <!-- Rating Stars Box -->
													  <div class='rating-stars text-center'>
													    <ul id='stars'>
													      <li class='star' title='Poor' data-value='1'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Fair' data-value='2'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Good' data-value='3'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Excellent' data-value='4'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='WOW!!!' data-value='5'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													    </ul>
													  </div>
									      	  </figcaption>
									    </figure><figure class="figure col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
									          </a>
									          <figcaption class="figure-caption">
  
													  <!-- Rating Stars Box -->
													  <div class='rating-stars text-center'>
													    <ul id='stars'>
													      <li class='star' title='Poor' data-value='1'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Fair' data-value='2'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Good' data-value='3'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Excellent' data-value='4'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='WOW!!!' data-value='5'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													    </ul>
													  </div>
									      	  </figcaption>
									    </figure><figure class="figure col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
									          </a>
									          <figcaption class="figure-caption">
  
													  <!-- Rating Stars Box -->
													  <div class='rating-stars text-center'>
													    <ul id='stars'>
													      <li class='star' title='Poor' data-value='1'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Fair' data-value='2'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Good' data-value='3'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Excellent' data-value='4'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='WOW!!!' data-value='5'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													    </ul>
													  </div>
									      	  </figcaption>
									    </figure><figure class="figure col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
									          </a>
									          <figcaption class="figure-caption">
  
													  <!-- Rating Stars Box -->
													  <div class='rating-stars text-center'>
													    <ul id='stars'>
													      <li class='star' title='Poor' data-value='1'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Fair' data-value='2'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Good' data-value='3'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='Excellent' data-value='4'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													      <li class='star' title='WOW!!!' data-value='5'>
													        <i class='fa fa-star fa-fw'></i>
													      </li>
													    </ul>
													  </div>
									      	  </figcaption>
									    </figure>


{{-- 									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
									          </a>
									    </div>
									    <div class="col-lg-3 col-md-4 col-6">
									      <a href="#" class="d-block mb-4 h-100">
									            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
									          </a>
									    </div> --}}
									  </div>

									</div>
									<!-- /.container -->
							</div>
						</div>

					{{-- end form --}}
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
	@include('dashboard.footer')
	</div>
	<!-- END WRAPPER -->


	<!-- Javascript -->
	<script src="{{asset('dashboard/assets/js/rating.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/scripts/klorofil-common.js')}}"></script>


	<!-- important mandatory libraries -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.min.js" type="text/javascript"></script>

<!-- optionally if you need to use a theme, then include the theme JS file as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/themes/krajee-svg/theme.js"></script>

<!-- optionally if you need translation for your language then include locale file as mentioned below -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/locales/<lang>.js"></script>

	<script>

	$(document).ready(function(){
    $('#input-1').rating({min: 0, max: 8, step: 0.1, stars: 8});
});

	$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}


	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
