<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Photo Award</title>
    
    {{-- <link rel="shortcut icon" href="https://users.worldphoto.org/favicon.ico" /> --}}

    <meta name="description" content="WPO Users">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WNTJZVQ');</script>
<!-- End Google Tag Manager -->


  {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"> --}}

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" type="text/css">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Martel:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/overlay-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/app.css" />

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script>if(top.location != self.location){top.location=self.location;}</script> 
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
</style>

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

        select:hover{
            cursor: pointer;
        }

        option{
            cursor: pointer;
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

<header style="background: #000; color: #ff0051; height: 80px;">
    <div>
        {{-- <p style="text-align: center; color: white;">Our header info</p> --}}
        <img src="images/logo_.png" alt="logo" style="height: 6.0rem; line-height: 80px; background-size: cover;"> PICTURE <span>+254</span>
    </div>
</header>
            
    
    <div class="container content">    
        
        
    
<div class="row header menu">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <ul class="nav nav-pills pull-right">
            <li class="overview active">
                <a href="#">Overview</a>
            </li>
            <li class="competitions-link">
                <a href="submit.html#competitions">Competitions</a>
            </li>
                        <li class="profile ">
                <a href="#" >
                    Profile</a>
            </li>
            <li class="account ">
                <a href="#" >
                    Account</a>
            </li>

            <li class="account ">
                <a href="view-album" >
                    <i class="fa" style="font-size:24px">&#xf07a;</i>
                    <span class='badge badge-success' id='lblCartCount'> {{ count($images) }} </span>
                    View Album
                </a>
            </li>
        </ul> <!-- End nav -->
    </div>
</div> <!-- End row header -->


{{-- <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <ul class="progress-meter progress-4-items">
                            <li class='first active-trail '>
                                            <a href='https://users.worldphoto.org/competition/entry/1650171?competition_id=25' class='first active-trail '>1. Image Upload</a>
                                    </li>
                            <li class='active-trail '>
                                            <a href='https://users.worldphoto.org/competition/entry/1650171/details/25' class='active-trail '>2. Image Details</a>
                                    </li>
                            <li class='active '>
                                            <a href='https://users.worldphoto.org/competition/entry/1650171/review?competition_id=25' class='active '>3. Review &amp; Confirm</a>
                                    </li>
                            <li class='last '>
                                            <span class='last '>4. Complete</span>
                                    </li>
                    </ul>
    </div>
</div> --}} <!-- End row -->
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="row">
                <div class="heading-title" role="alert">
                    <h3>Review & Confirm Your Album</h3>
                </div>
            </div>

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

            
            @if(count($images) > 0)
            <div class="row upload review">
                   

                {{-- <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value=""> --}}
                
                <input name="category_id" type="hidden" value="133">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    
                    <div class="table-responsive">
                        
                        <table class="table table-hover sorted_table table-reflow">
                            <thead>
                                <tr>
                                    <th class="dragging-column"></th>
                                    <th class="image-column">Image</th>
                                    {{-- <th class="name-column">Name</th> --}}
                                    <th class="description-column">Caption</th>
                                    <th class="tag-column">Device Name</th>
                                    <th class="tag-column">Category</th>
                                    <th class="op-column"></th>
                                </tr>
                            </thead>
                            <tbody>
                            
                              @foreach($images as $image)
                               <tr class="image-display image-display-{{ $image->id }} incomplete success">
                                        <th scope="row" class="dragging-column">
                                                                                    </th>
                                        <td class="image-column">
                                         <a href="{{ asset('uploads') }}/{{ $image->imageName }}">
                                            <img class="media-object" alt="$image->imageName" src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width: 180px; height: 180px;" />
                                        </a>
                                        </td>
                                        {{-- <td class="name-column">
                                            <span class="name-display">{{ $image->imageName }}</span>
                                        </td> --}}
                                        <td class="description-column">
                                            <p class="description-display">{{ $image->caption }}</p>
                                        </td>

                                        <td class="description-column">
                                            <p class="description-display">{{ $image->device }}</p>
                                        </td>
                                        <td class="category">
                                            <p class="category">{{ $image->category->name }}</p>
                                        </td>

                                        <td class="op-column" style="white-space: nowrap;">

                                                 <a href="#" title="Edit to Complete" data-image-id="{{ $image->id }}" class="image-edit-link">
                                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Caption/image details
                                                    </a>
                                                                                                
                                        <br/><br/>

                                        <form onsubmit="return confirm('Do you really want to delete the Image?');" action="{{ route('delete-image',$image->id) }}" method="POST" >
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button style="background: none; color: #ff00ff;" type="submit" class="btn btn-secondary" title="Delete">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button> 
                                          </form>

                                        </td>
                                    </tr> 
                                   @endforeach
                               

                                </tbody>
                        </table>

                         
                    </div>

                </div> <!-- End col -->

                <div class="col-xs-12 col-sm-12 col-md-12 buttons">
                    <span class="btn-grp primary">
                        <a href="upload-image" class="btn btn-primary back" role="button" onclick="">
                            <i class="fa fa-upload fa-lg"></i>
                            Upload more images
                        </a>
                    </span>

                    <small>or</small>

                    <span class="btn-grp success">
                        <button type="button" id="payment" class="btn btn-success" name="payment" data-target="#exampleModalCenter" data-toggle="modal" data-keyboard="false" data-backdrop="static">
                            <i class="fa fa-money-o"></i>
                            Proceed To Payment
                        </button>
                        {{-- <button type="submit" class="btn btn-success confirm-button" name="confirm" value="1" disabled>
                            <i class="fa fa-check fa-lg"></i>
                            Confirm
                        </button> --}}
                    </span>

                    <small>or</small>

                    <span class="btn-grp danger">
                        <a href="submit-entry#competitions" class="btn btn-danger" role="button">
                            <i class="fa fa-trash-o fa-lg"></i>
                            Cancel
                        </a>
                    </span>

                   {{--  <p class="incomplete-display" >
                        To confirm your Competition entry, please ensure all fields on images have been filled in.

                         <br/>
                            And you have uploaded between 5 and 10 images.
                    </p> --}}
                </div>
                {{-- </form> --}}

                
            </div> <!-- End row -->

            @else
                <p>Your album is empty. Please upload images.</p>
           @endif
 
        </div> <!-- End col -->
    </div> <!-- End row -->

    <div class="modal-windows">
        <!-- Image Edit form -->
        <div class="modal fade" id="imageDetailsModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="profileModalLabel">Image Details</h4>
                    </div>
                   <form action="update" method="POST"> 
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="modal-body" id="profile-edit-container">
                        <div class="modal-content-container progress-container">
                            <h4 class="progress-message">Processing...</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only progress-message">Processing...</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-content-container message-container">
                            <div class="alert" role="alert"></div>
                        </div>
                        <div class="modal-content-container form-container">
                         
<div class="row">
    <input name="image_id" type="hidden">
    
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <img src="" class="image-display" style="width: 180px; height: 180px;" alt="Thumbnail display" />
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-8">
    
        <div class="form-group">
            <label for="image_description">
                Image Description (Caption)
                <span class="label label-required">Required</span>
            </label>
            <textarea rows="5" class="form-control" placeholder="Please use English characters only" id="image_description" name="image_description" cos="50"></textarea>

        </div> 

        <div class="form-group">
            <label for="image_description">
                Device Name/Model 
                <span class="label label-required"></span>
            </label>
            <textarea rows="5" class="form-control" placeholder="Please use English characters only" id="image_description" name="device" cos="50"></textarea>
        </div>

    </div>
</div> <!-- End row --> 
                      
</div>
                    </div> <!-- End modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="imageDetailSave">Save changes</button>
                    </div> <!-- End modal-footer -->

                </form>
                </div>
            </div>
        </div> <!-- End Profile Modal -->
    </div>

    </div>


    <!--Confirm Payment Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #000; opacity: 0.8;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold; color: #fff;"><i class="fa fa-moey"></i> Your Upload Summary</h5>
        <button type="button" style="color: #fff;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table"> 
        <?php $count = 1?>         
                  <thead class="thead-light" style="background: #ececdf;">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">No. of images</th>
                    </tr>
                  </thead>
                  <tbody> 
                  @foreach($imagesgroup->groupby('category_id') as $image)
                    <tr>
                      <td scope="row">{{ $count }}.</td>
                      @foreach($image as $img)
                      <td>{{ $img->category->name}}</td>
                      @break
                      @endforeach
                      
                      <td>{{ count($image) }}</td>
                    </tr>
                    <?php $count++?>
                  @endforeach
                  </tbody>
        </table>
        <hr style="">
        <div>
            <b><p>Total images: {{ count($imagesgroup)  }}</p>
            <p>Total amount: Ksh. {{ $total_amount }}</p></b>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="checkout" onlick="window.location='{{ url("submit-entry#my-competitions") }}'" class="btn btn-primary">Pay <i class="fa fa-loading-o"></i> </button>
      </div>
    </div>
  </div>
</div>

    {{-- end modal --}}


    <!-- Payment info Modal -->
    <div class="modal-windows">
        <!-- Image Edit form -->
        <div class="modal fade" id="paymentDetailsModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="profileModalLabel"><b>NOTICE:</b></h4>
                    </div>
                   <form action="update" method="POST"> 
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="modal-body" id="profile-edit-container">
                        <div class="modal-content-container progress-container">
                            <h4 class="progress-message">Processing...</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only progress-message">Processing...</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-content-container message-container">
                            <div class="alert" role="alert"></div>
                        </div>
                        <div class="modal-content-container form-container">
                         
                        <div class="row">
                                <ul class="list-group">
                                      <li class="list-group-item ">1. A payment request has been sent to you.
                                      </li>
                                      <li class="list-group-item">2. Enter your <b>PIN</b> to complete payment.
                                      </li>
                                      <li class="list-group-item">3. After payment click OK.</li>
                                      {{-- <li class="list-group-item">4. </li> --}}
                                      <li class="list-group-item">4. You can view your entries in your <a href="my-gallery"> gallery.</a></li>
                                </ul>
                        </div> <!-- End row --> 
                                              
                        </div>
                    </div> <!-- End modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                        {{-- <button type="submit" class="btn btn-primary" id="imageDetailSave">Save changes</button> --}}
                    </div> <!-- End modal-footer -->

                </form>
                </div>
            </div>
        </div> <!-- End Profile Modal -->
    </div>

    {{-- end modal --}}


    <!-- Modal -->
<div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-top modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold;"><i class="fa fa-money"></i> Add More Images</h5>
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
                    
                    <input type="file" name="file" multiple id="file-1" class="file" data-overwrite-initial="false" data-min-file-count="1" /> 
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


<footer style="background: #000;">
  <div class="container" >
    <p style="text-align: center; color: #ff0051;">footer</p>
</div>
</footer>  

        <script src="https://users.worldphoto.org/js/jquery.min.js"></script>
    <script src="https://users.worldphoto.org/js/bootstrap-select.min.js"></script>
    <script src="https://users.worldphoto.org/js/bootstrap-datepicker.min.js"></script>

        
    <script src="https://users.worldphoto.org/js/app.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://users.worldphoto.org/webshim-minified/polyfiller.js"></script>
    <script>
        /*
         * Fixes: TypeError: a.swap is not a function
         * https://github.com/aFarkas/webshim/issues/560#issuecomment-181543832
         */
        /* jscs:disable */
        if (typeof jQuery.swap !== 'function') {
            jQuery.swap = function( elem, options, callback, args ) {
                var ret, name, old = {};
                // Remember the old values, and insert the new ones
                for ( name in options ) {
                    old[ name ] = elem.style[ name ];
                    elem.style[ name ] = options[ name ];
                }

                ret = callback.apply( elem, args || [] );

                // Revert the old values
                for ( name in options ) {
                    elem.style[ name ] = old[ name ];
                }
                return ret;
            };
        }
        /* jscs:enable */

        webshim.setOptions("forms", {
            lazyCustomMessages: true,
            iVal: {
                sel: 'form',
                handleBubble: 'hide', // hide error bubble

                //add bootstrap specific classes
                errorMessageClass: 'help-block',
                errorWrapperClass: 'has-error',

                //add config to find right wrapper
                fieldWrapper: '.form-group'
            }
        });
        
        webshim.validityMessages.en = {"badInput":{"date":"Please enter a date.","datetime-local":"Please enter a datetime.","defaultMessage":"Please enter a valid value.","month":"Please enter a valid value.","number":"Please enter a number.","range":"Invalid input.","time":"Please enter a time."},"patternMismatch":"Invalid input. {%title}","rangeOverflow":{"date":"Value must be at or before {%max}.","datetime-local":"Value must be at or before {%max}.","defaultMessage":"Value must be less than or equal to {%max}.","month":"Value must be at or before {%max}.","time":"Value must be at or before {%max}."},"rangeUnderflow":{"date":"Value must be at or after {%min}.","datetime-local":"Value must be at or after {%min}.","defaultMessage":"Value must be greater than or equal to {%min}.","month":"Value must be at or after {%min}.","time":"Value must be at or after {%min}."},"stepMismatch":"Invalid input.","tooLong":"Please enter at most {%maxlength} character(s). You entered {%valueLen}.","tooShort":"Please enter at least {%minlength} character(s). You entered {%valueLen}.","typeMismatch":{"defaultMessage":"Please enter a valid value.","email":"Please enter an email address.","url":"Please enter a URL."},"valueMissing":{"checkbox":"Please check this box if you want to proceed.","defaultMessage":"Please fill out this field.","radio":"Please select an option.","select":"Please select an option."}};
        webshim.activeLang('en');
        
        webshim.polyfill('forms');
    </script>

    
    <script>

// $(document).ready(function () {

//      // Attach Button click event listener 
//     $("#payment").click(function(){

//          // show Modal
//          $('#exampleModalCenter').modal('show');
//     });
// });
//         $('.btn-success').click(function(event) {
//                 event.preventDefault();

//                 // showProcessBar('Loading...');

//                 $('#exampleModalCenter').modal({
//                     backdrop: 'static'
//                 });

        $(function () {
            var imageDataUrl = "get-image/-id-";
            var imageUpdateUrl = "#";
            
            function showContainer(name) {
                $('.modal-content-container').hide(); // hide all containers
                $('.' + name).show(); // show selected
            }
            
            function showMessage(message, type)
            {
                $('#imageDetailsSave').hide(); // ensure the save button is hidden
                showContainer('message-container'); // show loading screen

                var alert = $('.message-container .alert');
                alert.removeClass();
                alert.addClass('alert').addClass('alert-' + type);
                alert.html(message);
            }
            
            function showProcessBar(message)
            {
                $('#imageDetailsSave').hide(); // ensure the save button is hidden
                $('.progress-container .progress-message').html(message);
                showContainer('progress-container'); // show loading screen

            }
            
            //
            $('#imageDetailsSave').click(function(){
                showContainer('progress-container');
                showProcessBar('Processing...');
                
                var formContainer = $('.form-container');
                var imageId = $("input[name=image_id]", formContainer).val();
                var data = {
                    caption: $("textarea[name=image_description]", formContainer).val(),
                    _token:      $('input[name=_token]').val()
                };
                
                $.post(imageUpdateUrl.replace('-id-', imageId), data, function(response, textStatus, jqXHR) {
                    if(textStatus != "success") {
                        showMessage('Error on save. This is likely due to being logged out. Please refresh the page and try again.', 'danger');
                        return;
                    }

                        // Update the displayed values
                    var displayArea = $('.image-display-' + imageId);
                    $('.description-display', displayArea).html(data.description);
                    $('.name-display', displayArea).html(data.name);
                    
                    $('.tag-column', displayArea).empty();
                    for(var key in data.tags) {
                        var tagId = data.tags[key];
                        var name = $("select.image_tags option[value=" + tagId + "]", formContainer).text();
                        $('.tag-column', displayArea).append('<span class="label label-default">' + name + '</span>', "&nbsp;");
                    }

                    if(response.completed) {
                        displayArea.removeClass('incomplete').removeClass('danger');
                        displayArea.addClass('completed').addClass('success');
                    } else {
                        displayArea.removeClass('completed').removeClass('success');
                        displayArea.addClass('incomplete').addClass('danger');
                    }

                    if($('.image-display.incomplete').length > 0) {
                        $('.incomplete-display').show();
                        $('.confirm-button').prop('disabled', true);
                    } else {
                        $('.incomplete-display').hide();
                        $('.confirm-button').prop('disabled', false);
                    }

                    showMessage(response.success, 'success');
                });
            });

            $('#checkout').click(function(event) {
                event.preventDefault();

                // var imageId = $(this).data('imageId');

                // console.log(imageId);
                showProcessBar('Loading...');

                $('#paymentDetailsModal').modal({
                    backdrop: 'static'
                });

                
                setTimeout(function(){
                   showContainer('form-container'); 
                  
               },500);

                $.ajax({
                         url : "uploaded",
                        type:'GET',


                        success: function(response) {
                            console.log(response); 
                        },

                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(errorThrown);
                    }
                      });

                        // $('#imageDetailsSave').show();
            });
            
            $('.image-edit-link').click(function(event) {
                event.preventDefault();

                var imageId = $(this).data('imageId');

                console.log(imageId);

                showProcessBar('Loading...');

                $('#imageDetailsModal').modal({
                    backdrop: 'static'
                });

                // showContainer('form-container');
                //         $('#imageDetailsSave').show();

                $.ajax({
                    dataType: "json",
                    url: imageDataUrl.replace('-id-', imageId),
                    data: {},
                    success: function(response) {
                        // use data to populate the form, then show model display
                        var formContainer = $('.form-container');
                        
                        $("input[name=image_id]", formContainer).val(imageId);
                    $("textarea[name=image_description]", formContainer).val(response.caption);
                    $("textarea[name=device]", formContainer).val(response.device);
                        console.log($("input[name=image_id]", formContainer).val(imageId));
                        $('img.image-display', formContainer).attr("src", $('.image-display-'+imageId+' .image-column img').attr('src'));

                        // $('img.image-display', formContainer).attr("src", $('.image-display-'+imageId).attr('src'));

                    
                        //  show the form and save button
                        showContainer('form-container');
                        $('#imageDetailsSave').show();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        showMessage('Error encounted contacting server. Please reload the page and try again.', 'danger');
                    }
                });
            });

    function edit_caption(id)
    {
      save_method = 'update';
      // $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        // url : "/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
      // $('[name="expense"]').val(data.Expense_Title);
      //  $('[name="category"]').val(data.Category);
      //  $('[name="amount"]').val(data.amount);
      //   $('[name="note"]').val(data.Note);
      //  $('[name="paidto"]').val(data.paidto);
      //  $('[name="account"]').val(data.account);
      //  $('[name="date"]').val(data.Date);
      //  $('[name="reference"]').val(data.reference);
      //  $('[name="mode"]').val(data.paymentMode);

      //  $('[name="id"]').val(data.id);
           
            showContainer('form-container');
            $('#imageDetailsSave').show();
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            showMessage('Error encounted contacting server. Please reload the page and try again.', 'danger');
        }
    });
    }
        });

    
    </script>



</body>
</html>