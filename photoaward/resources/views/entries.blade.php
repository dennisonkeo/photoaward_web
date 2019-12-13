<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Picture+254</title>
        
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

    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/overlay-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://users.worldphoto.org/css/app.css" />

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
    
</head>

<body class="competition-categories lang-en sony ">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNTJZVQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
     @include('headerr')       
    
    <div class="container content">    
     
     @include('header-menu')   
            
    <div class="col-xs-12 col-sm-12 col-md-12" id="competitions">
            <h2 class="heading-title">Picture+254 Photo Award</h2>
        </div>
    
    <div class="row info">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h1 style="border-color: #b7eb34;">
                {{ $track }}
            </h1>

<p>
    content
</p>
                        
            <p>Hover over an image to see the description. Click to enter the category of your choice.</p>
        </div>
    </div> <!-- End row -->

            <div class="row catgeories">
                @foreach($categories as $category)
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3 class="category-name">{{ $category->name }} </h3>
                    <div class="thumbnail">
                        <img src="{{ asset('images') }}/{{$category->cover}}" style="height: 300px; width: 100%;" alt="category placeholder">
                        <a style="background: #ff00ff; border: #ff00ff;" href="{{ route('upload-image', [$category->id,$track]) }}" class="btn btn-primary enter" role="button">Submit</a>
                        <div class="caption caption-up">
                            <p>
                                {{ $category->description }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                
                @if($track == 'Professionals')
                 <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3 class="category-name">Documentary </h3>
                    <div class="thumbnail">
                        <img src="{{ asset('images/pic10.jpg') }}" style="height: 300px; width: 100%;" alt="category placeholder">
                        <a style="background: #ff00ff; border: #ff00ff;" href="#" class="btn btn-primary enter" role="button">Submit</a>
                        <div class="caption caption-up">
                            <p>
                                Content
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                    </div>

    
{{--     <div class="row submit">
        <a href="#" class="btn btn-danger" role="button">
            Back to competition</a>
        <a href="#" class="btn btn-info" role="button">
            View other competitions</a>
    </div> --}}

    </div>

    @include('footer') 
         
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
  fbq('track', 'AddToWishlist');
</script>

</body>
</html>