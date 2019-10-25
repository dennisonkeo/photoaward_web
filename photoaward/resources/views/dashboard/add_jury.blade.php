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
					<div class="panel" style="width: 60%; margin: 0 auto;">
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
								<div class="panel-heading">
									<h3 class="panel-title" style="font-weight: bold;"><i class='fa fa-user-circle-o' style="margin-right: 10px;"></i>Jury Details</h3>
								</div>
							<div class="panel-body">
 								<form method="POST" action="addStaff">
 								{{ csrf_field() }}
                          			<label>Full Name</label>                       
									<input type="text" class="form-control input-lg" placeholder="" name="firstName" value=" ">
									<br>

									<div class="form-group">
                                    <label class=" form-control-label">Phone No</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control input-lg" style="margin-top: 0;" name="phone" type="tel" pattern='^\+2547\d{0,13}' title="Phone Sould be in this form: +2547XXXXXXXX" maxlength="13">
                                    </div>
                                    <small class="form-text text-muted">ex. +2547XXXXXXXX</small>
                                </div>
                              
								<div class="form-group">
	                                <div class="col-sm-6">
	                                <label>Email</label>
	                                <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input class="form-control input-lg" style="margin-top: 0;" type="text" name="email">
                                    </div>

	                                </div>
	                                <div class="col-sm-6">
	                                <label >Password</label>
	                                <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input id="password" class="form-control input-lg" type="Password" style="margin-top: 0;" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                                    </div>
						                   
	                                </div>
	                              </div>
									
								
								<button type="submit" class="btn btn-primary btn-lg" style="margin: 15px;"><i class="fa fa-plus-circle"></i> Add</button>

								</form>
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
	<script src="{{asset('dashboard/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/scripts/klorofil-common.js')}}"></script>
	<script>
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
