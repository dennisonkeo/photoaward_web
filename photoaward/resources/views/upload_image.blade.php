<!doctype html>

<html lang="en">
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

   {{--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Martel:400,700' rel='stylesheet' type='text/css'> --}}

    {{-- <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/bootstrap-select.css" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/bootstrap-datepicker.css" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/overlay-bootstrap.min.css" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/photo.css') }}">

        {{-- <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/dropzone.css" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"> --}}
    {{-- <script>if(top.location != self.location){top.location=self.location;}</script>  --}}
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Hotjar Tracking Code for https://users.worldphoto.org -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:713444,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<style type="text/css">
    body{
        backgound: #f2f2f2;
    }
    header{
        background: #f2f2f2;
    }

    .badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}
#lblCartCount {
    font-size: 12px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px; 
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

<body class="competition-entry lang-en sony ">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNTJZVQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


@include('headerr')
            
    
    <div class="container content">    
        
        
    
@include('header-menu')

<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12" id="competitions">
            <h2 style="text-align: left;" class="heading-title" id="heading_title">{{ $track }}</h2>
        </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h1 style="border-color: #b7eb34;">{{ $category->name }}</h1>
    </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
            <img class="img-responsive" src="{{ asset('images') }}/{{ $category->cover }}" alt="news01.jpg" />
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 category-info">
            <div class="desc">
                {{$category->description}}
            </div>
<!--             <div class="requirements">
                <span class="label label-default">Category entry requirements</span>
                <p>
                    You need to enter a minimum of <strong>5</strong> images into this category<br/>You can enter a maximum of <strong>10</strong> images into this category
                </p>
                            </div>
            <div class="instructions">
                <p>
                    All fields marked with <span class="label label-default">Required</span> need to be completed before you can submit your entry.
                </p>
            </div> -->
        </div>
    </div> <!-- End row -->

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <ul class="progress-meter progress-4-items">
                            <li class='first active '>
                                            <span class='first active '> Image Upload</span>
                                    </li>
                            <li class=''>
                                            {{-- <span class=''>2. Image Details</span> --}}
                                    </li>
                            <li class=''>
                                            {{-- <span class=''>3. Review &amp; Confirm</span> --}}
                                    </li>
                            <li class='last '>
                                            {{-- <span class='last '>4. Complete</span> --}}
                                    </li>
                    </ul>
    </div>
</div> <!-- End row -->
<!--
        <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Please confirm a few things…</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert" style="display: none;">
                            <p>All checkboxes required before starting Entry process.</p>
                        </div>

                        <p>Before starting your entry, please confirm the following:</p>
                        
                        
                        <div class="checkbox  form-group">
                            <label>
                                <input required="true" class="confirmation-element" name="rules" type="checkbox" value="1">
                                I have read and agree to the <a href="https://www.worldphoto.org/competition/25" target="_blank">rules</a>
                                <span class="label label-required">Required</span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-info" href="https://users.worldphoto.org/competition/25/categories">Cancel</a>
                        <button type="button" class="btn btn-primary" id="continue-button">Continue</button>
                    </div>
                </div><!-- /.modal-content -->
            <!-- /.modal-dialog -->
        <!-- /.vertical-alignment-helper -->
    <!-- /.modal -->

        
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            

            <div  class="heading-title" role="alert">
                <h3>Step 1 - Image Upload</h3>
            </div>

            <div class="row upload">
                {{-- <form method="POST" action="https://users.worldphoto.org/competition/entry/submission" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="kDji7xbSeh8jApbDq6U8BW7wO7riesiSpH5xZI94">

                <input id="entry_id" name="entry_id" type="hidden" value="null">
                <input name="category_id" type="hidden" value="133"> --}}

                <div class="col-xs-12 col-sm-12 col-md-12" style="margin: 0 auto;">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Upload images</strong></div>
                        <div class="panel-body">
                            
                            <div class="col-lg-12 col-sm-12 col-11 main-section">
                {{-- <h2 class="text-center text-success">Upload your images here</h2> --}}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">

                    <input type="hidden" name="category" value="{{ $category->id }}">
                    <input type="hidden" name="random_str" value="" id="rand">
                    
                    <input type="file" name="file" multiple id="file-1" class="file" data-overwrite-initial="false" data-min-file-count="1" /> 
                </div>
                
            </div>
                            <!-- Standar Form -->
                         {{--    <h4>
                                Please upload some images
                                <span class="label label-required">Required</span>
                            </h4>
                            
                            <div class="form-inline">
                                <div class="drozon">
                                    <form action="/file-upload"
                                      class="dropzone"
                                      id="my-awesome-dropzone">
                                          
                                      </form>
                                    <div class="form-group">
                                        <div class="fallback">
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="restrictions">
                                    <small>Image file extensions accepted: jpg jpeg png</small>
                                    <br>
                                    <small>Minimum image file size accepted: 1MB</small>&nbsp;-&nbsp;<small>Maximum image file size accepted: 5MB</small>
                                    <br>
                                    <small>Maximum image file(s) size allowed to be uploaded in one go: 52MB</small>
                                </div>
                            </div> --}}

                        </div>


                    </div> <!-- End panel -->
                </div> <!-- End col -->

                                                <div class="col-xs-12 col-sm-12 col-md-5">
                    {{-- <div class="row">
                        
                        <fieldset class="form-group ">
                            <label for="series_name">
                                Series name
                                <span class="label label-required">Required</span>
                            </label>
                            <input class="form-control" placeholder="Please use English characters only" required="true" name="series_name" type="text">
                        </fieldset>

                        <fieldset class="form-group ">
                            <label for="series_description">
                                Series description
                                <span class="label label-required">Required</span>
                            </label>
                            <textarea rows="5" class="form-control" placeholder="Please use English characters only" required="true" id="series_description" name="series_description" cols="50"></textarea>
                            <small class="text-muted">
                                Please give us a short description of your series. When, where, why, how did you take it?<br/>
                                Please do not mention your Name or your Agency&#039;s name in this description.<br/>
                                Limited to 150 words. Remaining: <span class="description-word-count"></span>
                            </small>
                        </fieldset>

                        
                  </div>  --}}
                  <!-- End row -->
                </div> 
                <!-- End col -->
                
               {{--  <div class="col-xs-12 col-sm-12 col-md-12 buttons">
                    
                    <button type="submit" class="btn btn-success submit-button" name="" value="">
                        <i class="fa fa-floppy-o fa-lg"></i>
                        Save and continue
                    </button>

                    <span class="danger">
                        <a href="submit-entry#competitions" class="btn btn-danger" role="button">
                            <i class="fa fa-trash-o fa-lg"></i>
                            Cancel
                        </a>
                    </span>
                </div> --}}

                {{-- </form> --}}
            </div> <!-- End row -->
        </div> <!-- End col -->
    </div> <!-- End row -->

    </div>

    <footer style="background: #000;">
  <div class="container" >
    <p style="text-align: center;"></p>
</div>
</footer>        
        {{-- <script src="https://users.worldphoto.org/js/jquery.min.js"></script>
    <script src="https://users.worldphoto.org/js/bootstrap-select.min.js"></script>
    <script src="https://users.worldphoto.org/js/bootstrap-datepicker.min.js"></script>

        
    <script src="https://users.worldphoto.org/js/app.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}

    {{-- <script src="https://users.worldphoto.org/webshim-minified/polyfiller.js"></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script> --}}

{{--     
            <script>
                        counter = function() {
            var max_words = 150;
            var value = $('#series_description').val();

            if (value.length == 0) {
                $('.description-word-count').html(max_words);
                return;
            }

            var regex = /\s+/gi;
            var wordCount = value.trim().replace(regex, ' ').split(' ').length;

            var remaining = max_words - wordCount;

            if(remaining < 0) {
                $('#series_description').parent().addClass('has-error');
            } else {
                $('#series_description').parent().removeClass('has-error');
            }

            $('.description-word-count').html(remaining);
        };

        $(document).ready(function() {
            var textarea = $('#series_description');
            textarea.change(counter);
            textarea.keydown(counter);
            textarea.keypress(counter);
            textarea.keyup(counter);
            textarea.blur(counter);
            textarea.focus(counter);
            counter(); // finally trigger on page load
        });
    </script> --}}
        
 
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script type="text/javascript">

    $('#rand').val(Math.random().toString(36).substring(5));

    $("#file-1").fileinput({
        theme:'fa',
        uploadUrl:"{{ route('image-submit') }}",
        // deleteUrl: '',

        uploadExtraData: function () {

                return {
                    _token: $("input[name='_token']").val(),
                    category: $("input[name='category']").val(),
                    track: $("#heading_title").text(),
                    random_str: $("input[name='random_str']").val()
                
                };
        },

        allowedFileExtensions: ['jpg','jpeg','png'],

        overwriteInitial:false,

        maxFileSize: 10000,

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
         // window.location.href =  '{{ route('upload-info') }}';
         // console.log();
    });

</script>   
    
</body>
</html>