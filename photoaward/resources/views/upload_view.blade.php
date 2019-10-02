<!DOCTYPE html>
<html>
<head>
	<title>Photo Contest</title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" type="text/css">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<style type="text/css">
		.main-section{
			margin: 0 auto;
			padding: 20px;
			margin-top: 100px;
			background: #fff;
			box-shadow: 0 0 20px #c1c1c1;
			height: auto;
			width: 50%;
		}

		body{
			background-image: url('{{ asset('images/pic2.jpg') }}');
			background-repeat: no-repeat;
			background-size: cover;
		}

	</style>
</head>
<body class="bg-success">

	<div class="container">
		<div class="row" >
			<div class="col-lg-8 col-sm-12 col-11 main-section" style="border-radius: 7px;">
				<h4 class="alert alert-success" style="margin: -20px; margin-bottom: 20px;">Upload Details</h4>


				{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

				<div class="form-group" style="margin: 0 auto;">
					
					<p style="">Total Images Uploaded: <span style="font-weight: bold;">5</span></p>
					<p>Total Amount: <span style="font-weight: bold;">Ksh. 1200</span></p><br>
				<hr>
				<div class="form-group">
					<button class="btn btn-primary btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-money"></i> Compete</button>

					<button class="btn btn-danger pull-right"><i class="fa fa-close"></i> Cancel</button>
					 
				</div>
				
			</div>
		</div>
	</div>

	{{-- modal window --}}

	<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold;"><i class="fa fa-money"></i> Complete Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>An <b>MPESA</b> payment request will be sent to the provided mobile number. You will be required to input the <b>MPESA PIN</b> so as to complete the payment.</p>
        <form>
        	<label class="label">Phone No:</label> <small style="font-style: italic;">(optional)</small>
        	<input type="text" class="form-control" name="phone" placeholder="e.g 07XXXXXXXX">
        	<small style="color: green; font-style: italic;">* Phone no to complete the payment</small>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Proceed <i class="fa fa-long-arrow-right"></i> </button>
      </div>
    </div>
  </div>
</div>

	{{-- end modal --}}


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>

{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script> --}}

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


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