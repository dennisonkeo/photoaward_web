<!doctype html>

<html lang="en">
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
    
    <title>PICTURE+254</title>
    
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

<body class="edit-user lang-en  ">

  @include('headerr')
            
    
    <div class="container content">    
        
  @include('header-menu')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-title" role="alert">
              <h2>Account Settings</h2>
            </div>
            
            

<form method="POST" action="account-reset" onsubmit="return onsubmitt()">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT" />

@include('errors')
@include('flush-msg')

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <fieldset class="form-group">
            <label>Current Email Address</label>
            <h3>{{ $user->email }}</h3>
        </fieldset>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        <fieldset class="form-group">
            <label for="current_password">Current password</label>
            <input class="form-control" name="current_password" type="password" required="">
        </fieldset>
    </div>
</div>

<fieldset class="well">
    <div class="row no-gutters">
        <legend>Change email</legend>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" name="email" type="email" id="email" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="email_confirmation">Confirm email address</label>
                <input class="form-control" name="email_confirmation" type="email" value="" id="confirm_email" onChange="checkEmailMatch();">
                <div class="alert alert-danger" id="divCheckEmailMatch" style="display: none;"></div>
            </div>
        </div>
        <div class="col-xs-12">
            <p>You will need to confirm your current password to change your email address.</p>
        </div>
    </div>
</fieldset>
        
<fieldset class="well">
    <div class="row no-gutters">
        <legend>Change password</legend>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" type="password" value="" id="password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input class="form-control" name="password_confirmation" type="password" value="" onChange="checkPasswordMatch();" id="confirm">
                 <div class="alert alert-danger" id="divCheckPasswordMatch" style="display: none;"></div>

            </div>
        </div>
{{--         <div class="col-xs-12">
            <p>You will need to confirm your current password to change your password.</p>
     	<div class="form-group">
                <i class="fa fa-key" aria-hidden="true"></i> <strong data-target="#password-rules" aria-expanded="false" aria-controls="password-rules" class="password-rules">
                    Password rules
                </strong>
                <ul id="password-rules">
                                        <li>At least 8 letters long</li>
                                        <li>At least 1 upper case letter</li>
                                        <li>At least 1 Lower case letter</li>
                                        <li>At least 1 Number</li>
                                        <li>At least 1 Symbol</li>
                                        <li>Does not contain, your name or email address</li>
                                    </ul>
            </div>
        </div> --}}
    </div>
</fieldset>

{{-- <fieldset class="well">
    <div class="row no-gutters">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <fieldset class="form-group">
                <label class="select" for="allow_marketing">Allow marketing</label>
                <select class="form-control" name="allow_marketing"><option value="1">Yes</option><option value="0" selected="selected">No</option></select>
            </fieldset>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <fieldset class="form-group">
                <label class="select" for="allow_third_party">Allow third party</label>
                <select class="form-control" name="allow_third_party"><option value="1">Yes</option><option value="0" selected="selected">No</option></select>
            </fieldset>
        </div>
            
        Please confirm that you would like to receive newsletters about news and offers from the World Photography Organisation and our partners.
    </div>
</fieldset> --}}

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

<footer style="background: #000;">
@include('footer')
  <div class="container" >
    <p style="text-align: center; color: #ff0051;">© PICTURE+254</p>
</div>
</footer>  

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>

        
    <script src="js/app.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="js/polyfiller.js"></script>
    <script>


    function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirm").val();
    
   

    if (password != confirmPassword)
    {
        document.getElementById('divCheckPasswordMatch').style.display = "block";
        $("#divCheckPasswordMatch").html("Passwords do not match!");
                       setTimeout(function(){
                 $('#divCheckPasswordMatch').fadeOut('fast');
            
        }, 1000);
        return false;
    }

    else
    {
        $("#divCheckPasswordMatch").html("Passwords match.");
    }
}    

function checkEmailMatch() {
    var email = $("#email").val();
    var confirm_email = $("#confirm_email").val();
    
   

    if (email != confirm_email)
    {
        document.getElementById('divCheckEmailMatch').style.display = "block";
        $("#divCheckEmailMatch").html("Emails do not match!");
                       setTimeout(function(){
                 $('#divCheckEmailMatch').fadeOut('fast');
            
        }, 1000);
        return false;
    }

    else
    {
        $("#divCheckEmailMatch").html("Emails match.");
    }
}

function onsubmitt() {
    var email = $("#email").val();
    var confirm_email = $("#confirm_email").val();
    
   

    if (email != confirm_email)
    {
        document.getElementById('divCheckEmailMatch').style.display = "block";
        $("#divCheckEmailMatch").html("Emails do not match!");
                       setTimeout(function(){
                 $('#divCheckEmailMatch').fadeOut('fast');
            
        }, 1000);
        return false;
    }

    else
    {
        $("#divCheckEmailMatch").html("Emails match.");
    }


    var password = $("#password").val();
    var confirmPassword = $("#confirm").val();
    
   

    if (password != confirmPassword)
    {
        document.getElementById('divCheckPasswordMatch').style.display = "block";
        $("#divCheckPasswordMatch").html("Passwords do not match!");
                       setTimeout(function(){
                 $('#divCheckPasswordMatch').fadeOut('fast');
            
        }, 1000);
        return false;
    }

    else
    {
        $("#divCheckPasswordMatch").html("Passwords match.");
    }
}

$(document).ready(function () {
   $("#confirm").keyup(checkPasswordMatch);
   $("#confirm_email").keyup(checkEmailMatch);

});

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


</body>
</html>