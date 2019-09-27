<!DOCTYPE html>
<html>
<head>
	<title>Photo Contest</title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" type="text/css">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/5.0.6/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<style type="text/css">
		.main-section{
			margin: 0 auto;
			padding: 20px;
			margin-top: 100px;
			background: #fff;
			box-shadow: 0 0 20px #c1c1c1;
		}
	</style>
</head>
<body class="bg-info">

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-11 main-section">
				<h2 class="text-center text-success">Upload your images here</h2>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					
					<input type="file" name="file" multiple id="file-1" class="file" data-overwrite-initial="false" data-min-file-count="2" /> 
				</div>
				
			</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/js/fileinput.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.6/themes/fa/theme.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$("#file-1").fileinput({
		theme:'fa',
		uploadUrl:"image-submit",

		uploadExtraData: function () {

				return {
					_token: $("input[name='_token']").val()
				};
		},

		allowedFileExtensions: ['jpg','jpeg','ping'],

		overwriteInitial:false,

		maxFileSize: 2000,

		maxFileNum: 8,

		slugCallBack: function (filename){

			return filename.replace('(','_').replace(']','_');
		}
	});
</script>

</body>
</html>