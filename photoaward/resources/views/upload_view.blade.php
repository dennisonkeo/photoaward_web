<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="generator" content="Mobirise v4.10.15, mobirise.com">
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

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" type="text/css">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logo_.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo_.png')}}">

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
			height: 100%;
		}

        select:hover{
            cursor: pointer;
        }

        option{
            cursor: pointer;
        }
.modal-body {
    /*max-height: calc(100vh - 210px);*/
    /*overflow-y: auto;*/
}

.krajee-default.file-preview-frame {
    margin: 2px;
    border: 1px solid rgba(0,0,0,0.2);
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.2);
    padding: 6px;
    float: left;
    text-align: center;
}


	</style>
</head>
<body class="bg-sucess">

	<div class="container">
		<div class="row" >
			<div class="col-lg-8 col-sm-12 col-11 main-section" style="border-radius: 7px;">
				<h4 class="alert alert-success" style="margin: -20px; background: black; color: #ff0051;border:none; margin-bottom: 20px;"> <span>PICTURE+254</span> <span style="color: white;">+254</span></h4>


				{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

				<div class="form-group" style="margin: 0 auto;">
					
					<p style="">Please, click on either of the buttons below to proceed.</p>
					{{-- <p>Total Amount: <span style="font-weight: bold;">Ksh. {{ $totalPay }}</span></p><br> --}}
				<hr>
				<div class="form-group">
					<button class="btn btn-primary btn" data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus-circle"></i> Add More Images</button>

					<button class="btn btn-warning pull-right" onclick="window.location='{{ url("view-album") }}'"><i class="fa fa-eye"></i> View Your Gallery</button>
					 
				</div>
				
			</div>
		</div>
	</div>

	{{-- modal window --}}

	<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold;"><i class="fa fa-money"></i>
         Add More Images
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="alert alert-success alert-dismissable" id="alert" style="display: none;">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p id="msg">Message</p>
                </div>
                {{-- <label class="label">Category</label> --}}
                <select class="form-control" name="track" id="track">
                        <option>Professionals</option>
                        <option>Non-Professionals</option>
                </select>

                <select class="form-control" name="category" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach
                </select>

	      {{-- <div class="row">
			<div class="col-lg-12 col-sm-12 col-11 main-section"> --}}
				{{-- <h2 class="text-center text-success">Upload your images here</h2> --}}

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					
					<input type="file" name="file" multiple id="file-1" class="file" data-overwrite-initial="false" data-min-file-count="2" /> 
				</div>
				
			{{-- </div>
		</div>
 --}}      </div>
      <div class="modal-footer">
       {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="window.location='{{ url("submit-entry#my-competitions") }}'" class="btn btn-primary">Proceed <i class="fa fa-long-arrow-right"></i> </button> --}}
      </div>
    </div>
  </div>
</div>

	{{-- end modal --}}<!-- Modal -->


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script type="text/javascript">

	// $('#exampleModalCenter').modal({backdrop: 'static', keyboard: false});

    var cat = document.getElementById("category").value;

    var track = document.getElementById("track").value;
    //console.log('test '+cat);

    $('#category') .on('change', function(e){
     cat = e.target.value;
        //console.log(cat);

    });

    $('#track') .on('change', function(e){
     track = e.target.value;
        //console.log(cat);

    });

    //var e = document.getElementById("category");
    

    $('#rand').val(Math.random().toString(36).substring(5));

    $("#file-1").fileinput({
        theme:'fa',
        uploadUrl:"image-submit",
        // deleteUrl: '',

        uploadExtraData: function () {

                return {
                    _token: $("input[name='_token']").val(),
                    category: cat,
                    track: track,
                    random_str: $("input[name='random_str']").val()
                
                };
                console.log(cat);
        },

        allowedFileExtensions: ['jpg','jpeg','png'],

        overwriteInitial:false,

        maxFileSize: 2000,

        maxFileNum: 8,

        removeFromPreviewOnError: false,

        showRemove: true,

        browseOnZoneClick: true,

        showCancel: null,

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
                        // showDrag: false,
                    },

        slugCallBack: function (filename){

            // return filename.replace('(','_').replace(']','_');
        }
    }).on('filebatchuploadcomplete', function() {
        // console.log('File Batch Uploaded', preview, config, tags, extraData);

        var parameter = "The images Were successfuly saved";

        // alert(parameter);

        $('#file-1').fileinput('clear');

        $('#msg').text(parameter);

        $("#alert").css({
          display: "block",
        });

        // window.location = "view-album" + parameter;
         // window.location.href =  'view-album';
         // console.log();
    });

</script>   

</body>
</html>