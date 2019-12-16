<!DOCTYPE html>
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

	<style>body{padding-top: 60px;}</style>

    <link href="modal/css/bootstrap.css" rel="stylesheet" />

	<link href="modal/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/font-awesome.css">

	<script src="modal/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="modal/js/bootstrap.js" type="text/javascript"></script>
	<script src="{{ asset('modal/js/login-register.js') }}" type="text/javascript"></script>

</head>
<body>
    <div class="container">
        {{-- <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                 <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                 <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></div>
            <div class="col-sm-4"></div>
        </div> --}}


		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" onclick="window.location='{{ url("stock-album") }}'" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login Here</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                 @include('errors')
                                        @if (session('success'))
                                  <div class="alert alert-success alert-dismissable">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      {{ session('success') }}
                                  </div>
                                 @endif
                                  @if (session('warning'))
                                  <div class="alert alert-danger">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      {{ session('warning') }}
                                  </div>
                                 @endif

                                {{-- <div class="social">
                                    <a class="circle github" href="#">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div> --}}
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form accept-charset="UTF-8" method="POST" action="buyer-login">
                                    {{ csrf_field() }}
                                       
                                    <input id="email" class="form-control" type="text" placeholder="Email/Phone no" name="username">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="Login" oncick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">

                                <form html="{:multipart=>true}" data-remote="true" onsubmit="return checkPasswordMatch();" method="POST" action="signup_buyer" accept-charset="UTF-8">
                                {{ csrf_field() }}

                                <input id="name" class="form-control" type="text" placeholder="Full name" name="name">
                                <input id="phone" class="form-control" type="text" placeholder="Phone No" name="phone" minlength="12" maxlength="12">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="passwordd" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Don't have an account?
                                 <a href="javascript: showRegisterForm();">Create an account</a>
                            </span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>
<script type="text/javascript">
function checkPasswordMatch()
{
    var password = $("#passwordd").val();
    var confirmPassword = $("#password_confirmation").val();
    
   

    if (password != confirmPassword)
    {
       confirm_pass_msg("The passwords do not match.");
        return false;
    }
    else
    {
        $('#loginModal .modal-dialog').removeClass('shake'); 
    }
}


    $(document).ready(function(){
        // openLoginModal();
        $('#loginModal').modal({
            backdrop: 'static'
        })
    });

    // $("#password_confirmation").blur(checkPasswordMatch);
</script>


</body>
</html>
