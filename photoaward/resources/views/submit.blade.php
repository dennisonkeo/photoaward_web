<!doctype html>

<html lang="en">
<head>
    <script src="{{ asset('js/right_click.js') }}"></script>
    
    <meta charset="utf-8">
    
    <title>Photo Contest</title>
    
    <!-- <link rel="shortcut icon" href="https://users.worldphoto.org/favicon.ico" /> -->

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WNTJZVQ');</script>
<!-- End Google Tag Manager -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Martel:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/overlay-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/application.css" />

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

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
    .profile{

    }

    .fa {
  /*padding: 20px;*/
  /*font-size: 30px;*/
  width: 40px;
  height: 40px;
  line-height: 40px;
  vertical-align: middle;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

/*.fa:hover {
    opacity: 0.7;
}*/

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #3f729b;
  color: white;
}
</style>
    
</head>

<body class="profile-overview lang-en  ">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNTJZVQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('headerr')
            
    
    <div class="container content">    

@include('header-menu')
    
    

    <div class="row main-content">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h2 class="heading-title" style="background-color: #585858;">My profile</h2>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 profile">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    @if($avatar->pic =="")
                        <div class="avatar default">
                            <i class="fa fa-user fa-5" style="color: maroon;" aria-hidden="true"></i>
                        </div>
                    @else
                       <div class="profile-image" style="width: 300px; height: auto;">
                            <img class="media-object" alt="200x200" src="{{ asset('uploads') }}/{{ $avatar->pic }}" data-holder-rendered="true" style="width: 250px; height: auto; object-position:50% 50%; objet-fit:cover; background-position: center; background-size: cover; background-repeat: no-repeat;" id="profile-img-tag">
                    </div>
                    @endif
                                        
                    <div class="allowance">
                        <!-- Remaining image allowance: 
                        <span class="label label-default">3</span> -->
                    </div>

                    <div class="social-media">
                        <ul>
                            @if(Auth::user()->fb != "")
                            <a href="{{ Auth::user()->fb }}" target="_blank" ><i class="fa fa-facebook"></i></a>
                            
                            @endif
                            @if(Auth::user()->tw != "")
                            <a href="#" ><i class="fa fa-twitter"></i></a>

                            @endif
                            @if(Auth::user()->ig != "")
                            <a href="#" ><i class="fa fa-instagram"></i></a>
                            @endif

                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-9">
                    <div class="row profile-details">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        @if(Auth::user()->dname == "")
                            <h1>
                                {{ Auth::user()->name }}
                            </h1>
                        @else
                            <h1>
                                {{ Auth::user()->dname }}
                            </h1>
                        @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            @if(Auth::user()->bio == "")
                            <div class="empty">
                                    <h3>We would like to know more about you</h3>
                            </div>
                            @else
                                <div class="empty">
                                    <h3>{{ Auth::user()->bio }}</h3>
                                </div>
                            @endif
                            </div>

                        

                    </div>

                                    </div>
            </div>
        </div>

    </div> <!-- End row profile -->

    <div class="row competitions" id="competitions">
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <h2 class="heading-title" style="background-color: #585858;">Enter One Of The Categories Below</h2>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 competitions-area">
                            <div class="row">
                                
                                @foreach($categories as $category)
                                    <div class="col-xs-12 col-sm-12 col-md-4 competition competition-sony ">
                                        <div class="inner">

                                            <div class="title">
                                                <h2 style="border-color: #b7eb34;">{{ $category->name }} </h2>
                                            </div>

                                            <div class="content">
                                                <div class="thumbnail">
                                                        <img src="http://www.mikiyakobayashi.com/news/news/assets_c/2019/05/news01-thumb-400xauto-913.jpg" alt="news01.jpg" alt="Open competition">

                                                        <div class="caption caption-up">
                                                            <p>{{ $category->description }}</p>
                                                        </div>
                                                    </div>
                                             <a href="{{ route('upload-image', $category->id) }}" class="btn btn-primary" style="background-color: #ff00ff; border-color: #ff00ff">Enter Now</a>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                     </div>
                        </div>
                    </div>
                </div>
                                    </div> <!-- End row competitions -->

    <div class="row my-competitions" id="my_entries">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h2 id="my-competitions" class="heading-title" style="background-color: #585858;">My Entries</h2>
                        
                        
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active table-responsive" id="current-entries">
                    

<table class="table table-hover table-reflow">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>Date Submitted</th>
            <th>Images submitted</th>
            <th>Total Amount</th>
            <th>Payment Status</th>
            <th>View</th>       
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
             <tr>
                  <td>{{ $record->id }}</td>
                  <td>{{ $record->updated_at }}</td>
                  <td>{{ $record->total_images }} images</td>
                  <td>{{ $record->amount }}</td>
                  @if($record->status == 'Paid')
                   <td style="color: green; font-weight: bold;"><i class="fa fa-check"></i> {{ $record->status }}</td>
                  @else
                  <td style="color: red; fot-weight: bold;"><i class="fa fa-close"></i>{{ $record->status }}</td>
                  @endif
                  <td><a href="my-gallery"><i class="fa fa-eye"></i> View</a></td>
            </tr>
        @endforeach
     </tbody>
</table>

                    

 </div>
                
<div role="tabpanel" class="tab-pane table-responsive" id="past-entries">
                    

<table class="table table-hover table-reflow">
    <thead class="thead-inverse">
        <tr style="color: #ff00ff;">
            <th>ID</th>
            <th>Category</th>
            <th>Date Submitted</th>
            <th>Images submitted</th>
            <th>Payment Status</th>
            <th>View</th>
        </tr>
    </thead>

    <tbody>
            <tr>
                <td colspan="9">
                    <div class="empty">
                        <h3>You haven't entered any competitions yet</h3>
                        <i class="fa fa-frown-o"></i>
                    </div>
                </td>
            </tr>
            </tbody>
</table>

                    

                </div>
            </div>
                    </div>
    </div> <!-- End row my-competitions -->

    <!-- Modal Windows -->
    <div class="modal-windows">
        

        <div class="modal fade" id="publicImageModal" tabindex="-1" role="dialog" aria-labelledby="entryProcessModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="entryProcessModalLabel">xx's Images</h4>
                    </div>
                    <div class="modal-body" id="profile-image-container">
                        

<form method="POST" action="https://users.worldphoto.org/user/images/1408303" accept-charset="UTF-8"><input name="_token" type="hidden" value="nZW5WZpDfJXoxabEzmMdYl7uxYuhsVLe0Zed33AL">

<div class="public-photo-selection">
    <h3>Which photos do you want on your profile?</h3>
    <small class="text-muted">
        You can select up to 5 images from your previous competition entries to show on your public profile. Select them by clicking on the images. The green check icon represents a selected image.
    </small>
    <!-- First row -->
    <ul class="images">
            </ul>                
</div> <!-- End public-photo-selection -->

</form>                    </div> <!-- End modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="$('#profile-image-container form').submit()">Save changes</button>
                    </div> <!-- End modal-footer -->
                </div>
            </div>
        </div> <!-- End My Images Modal -->

    </div> <!-- Modal Windows -->

    </div>

@include('footer')        
        <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>

        
    <script src="js/application.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="js/polyfiller.js"></script>
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

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '746055978761303');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=746055978761303&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

                    
    <script>
        $(function () {             $('#entry-tabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
            
            
                    });


        
    </script>

</body>
</html>