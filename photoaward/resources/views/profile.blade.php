<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Picture+254</title>
    
    <link rel="shortcut icon" href="images/logo_.png" />

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

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Martel:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/overlay-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/application.css" />

        <style>
        .lang-menu .dd-option img, .lang-menu .dd-selected img {
            display: none;
        }
    </style>
    <script>if(top.location != self.location){top.location=self.location;}</script> 

    <script src="{{ asset('js/right_click.js') }}"></script>
    
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

<body class="edit-user lang-en  ">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WNTJZVQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  @include('headerr')
            
    
    <div class="container content">    
        
            
    
@include('header-menu')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-title" role="alert">
              <h2>Profile Settings</h2>
            </div>
            
            
@include('flush-msg')

<form method="POST" action="{{ route('update-profile') }}" accept-charset="UTF-8" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />

<fieldset class="well">
    <div class="row no-gutters">
        <div class="col-xs-12 col-sm-12 col-md-4">
                        
            
            <div class="form-group">
                <label for="name">Display Name
                    <span class="label label-required">Required</span>
                </label>
                <input class="form-control" placeholder="Display Name" required name="dname" type="text" value="{{ $user->dname }}">
            </div>
                
            <div class="form-group">
                <label for="forename">Full Name
                    <i class="fa fa-info-circle" aria-hidden="true" title="Please note, this will be used as your name on the World Photography Organisation website, social media, marketing and publicity." data-toggle="tooltip"></i>
                    <span class="label label-required">Required</span>
                </label>
                <input class="form-control" placeholder="First name" required name="name" type="text" value="{{ $user->name }}">
            </div>

            
            <div class="form-group">
                <label for="dob">Date of birth
                    <span class="label label-required">Required</span></label>
                <div class="input-group date">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </span>
                    <input id="dob" class="form-control" required name="dob" type="text" value="{{ $user->dob }}">
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-4">
            
            <div class="form-group">
                <label for="country_id">County of residence
                    <span class="label label-required">Required</span></label>
                <select class="form-control selectpicker" data-live-search="true" name="county">
                    <option>{{ $user->county }}</option>
                    <option value="">Select county</option>
                    <option> Mombasa</option>
                    <option> Kwale</option>
                    <option> Kilifi</option>
                    <option> Tana River</option>
                    <option> Lamu</option>
                    <option> Taita–Taveta</option>
                    <option> Garissa</option>
                    <option> Wajir</option>
                    <option> Mandera</option>
                    <option> Marsabit</option>
                    <option> Isiolo</option>
                    <option> Meru</option>
                    <option> Tharaka-Nithi</option>
                    <option> Embu</option>
                    <option> Kitui</option>
                    <option> Machakos</option>
                    <option> Makueni</option>
                    <option> Nyandarua</option>
                    <option> Nyeri</option>
                    <option> Kirinyanga</option>
                    <option> Muranga</option>
                    <option> Kiambu</option>
                    <option> Turkana</option>
                    <option> West Pokot</option>
                    <option> Samburu</option>
                    <option> Trans-Nzoia</option>
                    <option> Uasin Gishu</option>
                    <option> Elgeyo-Marakwet</option>
                    <option> Nandi</option>
                    <option> Baringo</option>
                    <option> Laikipia</option>
                    <option> Nakuru</option>
                    <option> Narok</option>
                    <option> Kajiado</option>
                    <option> Kericho</option>
                    <option> Bomet</option>
                    <option> Kakamega</option>
                    <option> Vihiga</option>
                    <option> Bungoma</option>
                    <option> Busia</option>
                    <option> Siaya</option>
                    <option> Kisumu</option>
                    <option> Homa Bay</option>
                    <option> Migori</option>
                    <option> Kisii</option>
                    <option> Nyamira</option>
                    <option> Nairobi</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="location">Location
                    <span class="label label-required">Required</span></label>
                <input class="form-control" placeholder="Town / City" required name="city" type="text" value="{{ $user->city }}">
            </div>
            
            
            <div class="form-group country-code-telephone">
                <label for="telephone">Phone Number
                    <span class="label label-required">Required</span></label>
                <input class="form-control" disabled="" placeholder="Eg. +2547XXXXXXXX" required name="telephone" type="text" value="{{ $user->phone }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="profile-image" style="width: 200px; height: 300px;">
                <label>Current Profile Image</label>
                    <img class="media-object" alt="200x200" src="{{ asset('uploads') }}/{{ $user->pic }}" data-holder-rendered="true" style="width: 100%; height: auto; object-position:50% 50%; object-fit:cover; background-position: center; background-size: cover; background-repeat: no-repeat;" id="profile-img-tag">
            </div>
            
            <div class="form-group">
                <label for="profile_image">
                    Upload a Profile Image
                </label>
                <input type="file" name="file"  id="profile-img" value="{{$user->pic}}" />
            </div>
        </div>
    </div>
</fieldset>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8">
        <h3>About you:</h3>
        
        <div class="form-group">
            <label for="bio">Biography</label>
            <textarea id="bio" class="form-control" placeholder="Tell us about yourself ..." rows="5" name="bio" cols="50"> {{ $user->bio }} </textarea>
            <small class="text-muted">
                Limited to 200 words. Remaining:  <span class="bio-word-count"></span>
            </small>
        </div>
            
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group socialmedia">
            <h3>Social Media:</h3>
            <label for="equipment">Facebook</label>
            <div class="input-group">
                <span class="input-group-addon"
                      ><i class="fa fa-facebook" data-toggle="tooltip" title="https://www.facebook.com>"></i>
                </span>
                <input class="form-control" name="fb" type="text" value="{{ $user->fb }}">
            </div>
            <label for="equipment">Twitter</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-twitter" data-toggle="tooltip" title="https://www.twitter.com>"></i>
                </span>
                <input class="form-control" name="tw" type="text" value="{{ $user->tw }}">
            </div>
            <label for="equipment">Instagram</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-instagram" data-toggle="tooltip" title="https://www.instagram.com>"></i>
                </span>
                <input class="form-control" name="ig" type="text" value="{{ $user->ig }}">
            </div>
        </div>
    </div>
</div>

<div class="row buttons">
    <button type="submit" class="btn btn-success pull-let">
        <i class="fa fa-floppy-o fa-lg"></i>
        Save
    </button>

    <a href="{{ route('submit-entry') }}" class="btn btn-danger pull-rght" role="button">
        <i class="fa fa-reply"></i>
        Cancel
    </a>

</div>

</form>        </div>
    </div>

    </div>

@include('footer')
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>

        
    <script src="js/application.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="js/polyfiller.js"></script>

    <script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#profile-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    $("#profile-img").change(function(){

        readURL(this);

    });

</script>

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
                        counter = function() {
            var max_words = 200;
            var value = $('#bio').val();

           if(!value) {
                return; // Stop falling over when field not on page
            }

            if (value.length == 0) {
                $('.bio-word-count').html(max_words);
                return;
            }

            var regex = /\s+/gi;
            var wordCount = value.trim().replace(regex, ' ').split(' ').length;

            var remaining = max_words - wordCount;

            if(remaining < 0) {
                $('#bio').parent().addClass('has-error');
            } else {
                $('#bio').parent().removeClass('has-error');
            }

            $('.bio-word-count').html(remaining);
        };

        $(document).ready(function() {
            var textarea = $('#bio');
            textarea.change(counter);
            textarea.keydown(counter);
            textarea.keypress(counter);
            textarea.keyup(counter);
            textarea.blur(counter);
            textarea.focus(counter);
            counter(); // finally trigger on page load
        });
    </script>
    
    <script>
        $(document).ready(function() {
            $('#dob').datepicker({
                format: "yyyy-mm-dd",
                endDate: "2001-10-01",
                // startDate: "18years"
            });
        });
    </script>

</body>
</html>