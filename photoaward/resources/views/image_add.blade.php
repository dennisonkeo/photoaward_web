<!DOCTYPE html>
<html>
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

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" type="text/css">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>

{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script> --}}

<script type="text/javascript" src="js/bootstrap.min.js"></script>


<script type="text/javascript">
	$("#file-1").fileinput({
		theme:'fa',
		uploadUrl:"image-submit",
		// deleteUrl: '',

		uploadExtraData: function () {

				return {
					_token: $("input[name='_token']").val()
				};
		},

		allowedFileExtensions: ['jpg','jpeg','png'],

		overwriteInitial:false,

		maxFileSize: 2000,

		maxFileNum: 8,

		removeFromPreviewOnError: false,

		showRemove: true,

		browseOnZoneClick: true,

		// showClose: false,  

		// showCaption: false,

		previewThumbTags: {},

		initialPreviewShowDelete: false,

		// uploadUrlThumb: null,

		showPreview: true,

		fileActionSettings: {
                        showRemove: true,
                        showUpload: false,
                        showZoom: true,
                        showDrag: false,
                    },

		slugCallBack: function (filename){

			return filename.replace('(','_').replace(']','_');
		}
	});
</script>

</body>
</html>