
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<style type="text/css">
    .swal2-popup {
  font-size: 1.6rem !important;
}
</style>

<?php
use App\Cart;
use App\Purchase;

  if(Auth::check())
  {
    // $count = Cart::where('user_id',Auth::user()->id)
      //->where('token', session()->getId())->get(); 

    $purchased_items = Purchase::where('token',session()->getId())->where('user_id',Auth::user()->id)->pluck('cart_id')->all();

        $count = Cart::whereNotIn('id', $purchased_items)->where('user_id', Auth::user()->id)->where('token', session()->getId())->get();
  }
  
?>

<nav role="navigation" class="navbar ">

	<div style="margin-right:20px;" class="navbar-header"><button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle"><span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

	<a style="" href="/" id="ember1256" class="navbar-brand logo link-to-component ember-view"><img src="{{ asset('images/logo-.png') }}" class="logo-color" width="64">
	</a></div>

	<div class="collapse navbar-collapse navbar-ex1-collapse"><span id="mobile-search-form" class="visible-xs-inline"><form class="navbar-form js-search-form" data-ember-action="" data-ember-action-1257="1257"><div class="form-group"><div class="input-group"><input type="text" placeholder="Search..." id="ember1262" class="form-control input-sm ember-text-field -text-field-component ember-view"><span class="input-group-addon"><button formnovalidate="formnovalidate" name="commit" type="submit" class="only-icon"><i class="t20icon t20icon-search"></i></button></span></div></div></form></span>

  <ul class="nav navbar-nav navbar-left">
    <li>
    <a style="" href="{{ route('stock-album') }}" id="ember1263" class="link-to-component ember-view"><i class="t20icon t20icon-home visible-xs-inline-block"></i><span class="text-container kahome">Home</span></a>
  </li>
    <li>
    <a style="" href="{{ route('discover') }}" id="ember1268" class="link-to-component ember-view"><i class="t20icon t20icon-collection visible-xs-inline-block"></i>
	<span class="text-container">Explore</span></a></li>
  <li><i class="icon-cart"></i></li>
</ul>
	<ul class="nav navbar-nav navbar-right"><!----><!---->
  @if(Auth::check())  
  <li>
    <a style="" href="{{ route('cart/view-cart') }}" id="ember1263" class="link-to-component ember-view"><i class="fa fa-shopping-cart" style="font-size: 18px; padding-right: 20px;"></i><span class="text-container">Cart(<span id="cart_count">

                    {{ count($count) }}

                  </span>)</span></a>
  </li>
  @else
  <li>
    <a style="" href="#" id="cartt" class="link-to-component ember-view"><i class="fa fa-shopping-cart" style="font-size: 18px; padding-right: 20px;"></i><span class="text-container">Cart(<span id="cart_count">
                    0
                  </span>)</span></a>
  </li>
  @endif
@if(Auth::check())
	<li class="active dropdown">
  <a href="#" data-toggle="dropdown">
    <div id="ember1273" class="inline-block hexagon-avatar-container hexagon-avatar-component ember-view"><svg width="0" height="0"><clipPath id="hexagonClip" clipPathUnits="objectBoundingBox"><polygon points=".5 .0, .95 .25, .95 .76, .50 1.0, .05 .75, .05 .25"></polygon></clipPath></svg><img src="https://res.cloudinary.com/twenty20/image/upload/t_avatar_240x240/avatars/innoso-1589456966.jpg" style="clip-path: url(#hexagonClip);" class="avatar hexagon hexagon-small"><!----></div>

    <span class="text-container margin10l">
      Picture+254
    </span>

    <i class="icon-carrot-white"></i>
    <i class="icon-carrot"></i>

<!---->  </a>

  <ul role="menu" class="dropdown-menu">
    <li>
<a style="" href="{{ route('edit-profile') }}" id="ember1274" class="link-to-component ember-view">        Profile
</a>    </li>

      <li>
<a style="" href="#" id="ember1279" class="link-to-component ember-view">          Wishlist
</a>      </li>

<!---->
      <li>
<a style="" href="{{ route('loves') }}" id="ember1284" class="link-to-component ember-view">          Likes
</a>      </li>

<!---->
    {{-- <li>
<a style="" href="/license-history?t20p=explore.signature&amp;t20s=top-bar" id="ember1289" class="menuitem link-to-component ember-view">        License History
</a>    </li> --}}

    <hr class="xlight slim">

    <li style="position: relative;">
<a style="" href="#" id="ember1294" class="menuitem link-to-component ember-view">        Settings

<!----></a>    </li>

<!---->
    <li>
      <a href="{{ route('logout') }}" tabindex="-1" class="menuitem" data-ember-action="" data-ember-action-1299="1299">
        Logout
      </a>
    </li>
  </ul>
</li>

@endif

<!----><li style="display: none;"><a style="" href="/notifications?t20p=explore.signature&amp;t20s=top-bar" id="ember1304" class="link-to-component ember-view"><i class="t20icon t20icon-alert"></i><span class="text-container visible-xs-inline">Activity</span><!----></a></li><li style="display: none;" id="ember1309" class="dropdown locale-setter-component ember-view"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="t20icon t20icon-globe"></i><!----><span class="caret"></span></a><ul role="menu" style="" class="dropdown-menu"><li class="feedback-link margin10tb text-center"><span class="beta-flag">BETA </span>We're still working on translations.<a href="https://twenty20product.typeform.com/to/gV7oxG" target="_blank">Give us feedback here</a></li><hr class="xlight slim"><li class=""><a href="#" data-ember-action="" data-ember-action-1318="1318">Deutsch</a></li><li class="active"><a href="#" data-ember-action="" data-ember-action-1319="1319">English</a></li><li class=""><a href="#" data-ember-action="" data-ember-action-1320="1320">Español (ES)</a></li><li class=""><a href="#" data-ember-action="" data-ember-action-1321="1321">Español (LA)</a></li><li class=""><a href="#" data-ember-action="" data-ember-action-1322="1322">Français</a></li><li class=""><a href="#" data-ember-action="" data-ember-action-1323="1323">Italiano</a></li><li class=""><a href="#" data-ember-action="" data-ember-action-1324="1324">日本語</a></li><li class=""><a href="#" data-ember-action="" data-ember-action-1325="1325">한국어</a></li><li class=""><a href="#" data-ember-action="" data-ember-action-1326="1326">Português</a></li></ul></li>
<li class="dropdown">
  <a href="#" data-toggle="dropdown" style="display: none;">
    <i style="top: 10px;" class="t20icon t20icon-more">
    </i>
    <span class="text-container visible-xs-inline">
      More
    </span>
  </a>

  <ul role="menu" class="dropdown-menu">
<li id="ember1331" class="ga-linker-component ember-view">      <a href="https://elements.envato.com/" target="_blank" class="external-link">
        <i class="t20icon t20icon-envato"></i>
        Go To Picture+254
      </a>
</li>
    <hr class="xlight slim">

    <li>
<a style="" href="/challenges?t20p=explore.signature&amp;t20s=top-bar" id="ember1336" class="link-to-component ember-view">        Challenges
</a>    </li>

    <li>
<a style="" href="/social-media-marketing?t20p=explore.signature&amp;t20s=top-bar" id="ember1341" class="link-to-component ember-view">        Social Media Marketing Calendar
</a>    </li>

    <hr class="xlight slim">

    <li>
<a style="" href="/jobs?t20p=explore.signature&amp;t20s=top-bar" id="ember1346" class="link-to-component ember-view">        Join the team
</a>    </li>

    <li>
<a style="" href="/customers?t20p=explore.signature&amp;t20s=top-bar" id="ember1351" class="link-to-component ember-view">        Customers
</a>    </li>

<!---->
    <hr class="xlight slim">

    <li>
<a style="" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fhome%2Fsignature" id="ember1356" class="support-link-component ember-view">        Help center
</a>    </li>

    <hr class="xlight slim">

    <li>
      <div class="help-zone">
        <p>
          Have a question?
        </p>

<a style="" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fhome%2Fsignature" id="ember1365" class="support-link-component ember-view">          Contact Us
</a>      </div>
    </li>
  </ul>
</li>
</ul>
<span id="search-form" class="hidden-xs"><form class="navbar-form js-search-form" data-ember-action="" data-ember-action-1370="1370">
	<div class="form-group"><div class="input-group"><input type="text" placeholder="Search..." id="ember1375" class="form-control input-sm ember-text-field -text-field-component ember-view" autocomplete="off"><span class="input-group-addon"><button formnovalidate="formnovalidate" name="commit" type="submit" class="only-icon"><i class="t20icon t20icon-search"></i></button></span></div></div></form></span></div><div id="ember1376" class="upgrade-prompt-component ember-view">
		<!---->
	</div></nav>

  <div id="ember446 signinn" class="gated-home-auth-modal-component ember-view" syle="display: none;">
               <div id="gated-home-auth-modall" role="dialog" tabindex="-1" class="auth-component modal in" style="z-index: 1050; display: blok; padding-left: 0px;">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="logo-container"><i class="logo_"></i></div>
                        <div id="ember459" class="sso-signup-home-component ember-view">
                           <div class="modal-body">
                              <div class="buttons-container">
                                 <a href="#" class="text-link-bold brand-light " data-ember-action="" data-ember-action-460="460">
                                 Sign In
                                 </a>
                              </div>
                              <div class="visible-xs padding20b"></div>
                              <div class="greetings-text" style="display: none;">
                                 <h2 style="font-weight: normal;" data-test="gated-auth-signup-title" class="padding0b padding40t margin10t text-center">
                                    Authenticity Matters.
                                 </h2>
                                 <h5 class="visible-xs-block margin0b padding10b text-center normal border-b border-silver">
                                    Use real-world stock photos to tell your brand's story.
                                 </h5>
                                 <h4 class="hidden-xs margin0b padding10b text-center normal">
                                    <span class="padding10b border-b border-silver">
                                    Use real-world stock photos to tell your brand's story.
                                    </span>
                                 </h4>
                              </div>
                              <div class="container-fluid landing-screen margin40t">
                                 <div class="flex-row justify-content-center">
                                    <div class="col-md-8 text-center">
                                       <h4 class="">
                                          Join the Picture+254 community
                                       </h4>
                                       <p class="normal">
                                          I want to:
                                       </p>
                                    </div>
                                 </div>
                                 <div class="flex-row justify-content-center margin20t">
                                    <div class="col-md-8">
                                       <div class="flex-row justify-content-between align-items-center">
                                          <div class="col-sm-6 text-center">
                                             <button class="btn btn-default btn-lg btn-block btn-wrap rounded-corners buy-button" data-ember-action="" data-ember-action-485="485">
                                             Buy photos
                                             </button>
                                          </div>
                                          <div class="col-sm-6 text-center">
                                             <button class="btn btn-default btn-lg btn-block btn-wrap rounded-corners sell-button active" data-ember-action="" data-ember-action-490="490">
                                             Submit photos
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!---->
                              <div class="flex-row justify-content-center margin20t margin80b">
                                 <div class="col-xs-12 col-sm-7">
                                    <p class="text-center">
                                       Become part of our community of photographers making money doing what they love.
                                    </p>
                                    <form data-ember-action="" data-ember-action-1992="1992">
                                       <div class="form-group">
                                          <label for="gated-photographer-signup-email">
                                          Email Address
                                          </label>
                                          <input type="email" required="" placeholder="you@example.com" id="gated-photographer-signup-email" class="form-control ember-text-field -text-field-component ember-view">
                                          <label for="gated-photographer-signup-password">
                                          Password
                                          </label>
                                          <div id="ember2010" class="password-input-wrapper password-input-component ember-view"><input name="password" type="password" required="" placeholder="At least 6 characters" id="gated-photographer-signup-password" class="form-control ember-text-field -text-field-component ember-view"><button type="button" class="btn btn-link password-input-toggle"><span class="text-light t20icon t20icon-show-password"></span></button></div>
                                       </div>
                                       <div class="form-group">
                                          <div class="checkbox checkbox-light">
                                             <label class="checked">
                                             <input type="checkbox" id="ember2012" class="ember-checkbox -checkbox-component ember-view">
                                             Send me tips, trends, freebies, updates &amp; offers. You can unsubscribe at any time.
                                             </label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div id="ember2021" class="loading-button-component ember-view">
                                             <button style="" type="submit" class="btn btn-loading   btn btn-primary btn-block">
                                                <div id="ember2022" class="loading-spinner loading-spinner-component ember-view"></div>
                                                <div class="btn-loading-text">
                                                   <!---->Sign up for Free
                                                </div>
                                             </button>
                                          </div>
                                       </div>
                                       <p class="xsmall">
                                          By signing up, you agree to our
                                          <a style="" href="/legal/user-terms?t20p=home" id="ember2027" class="link-to-component ember-view">              User Terms</a>,
                                          <a style="" href="/legal/contributor-terms?t20p=home" id="ember2032" class="link-to-component ember-view">              Contributor Terms</a>,
                                          and
                                          <a style="" href="/legal/privacy?t20p=home" id="ember2041" class="link-to-component ember-view">              Privacy Policy</a>.
                                       </p>
                                    </form>
                                 </div>
                              </div>
                              <div class="visible-xs margin80t"></div>
                              <div style="position: absolute; left: 0; bottom: 0; opacity: .55;" class="social-proof">
                                 <p class="small text-muted text-center margin0b">
                                    You're in good company
                                 </p>
                                 {{-- <img src="images/" alt="customer logo string 2020" style="width: 100%;" class="padding20lr"> --}}
                              </div>
                           </div>
                        </div>
                        <!----><!----><!---->
                        <div class="container-fluid padding0lr">
                           <div style="background-color: #222; font-weight: 400 !important;" class="flex-row align-items-center justify-content-between padding20lr">
                              <div class="col-xs-7 padding10tb">Looking for help?&nbsp;<a style="margin-right: 20px;" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2F" id="ember505" class="support-link-component ember-view">help center.</a></div>
                              <div class="col-xs-5 text-right padding10tb">
                                 <span id="ember512" class="dropdown locale-setter-component ember-view">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="t20icon t20icon-globe"></i><span class="current-locale-name">English</span><span class="caret"></span></a>
                                    <ul role="menu" style="bottom: 100% !important; top: auto !important; right: 0; left: auto; float: right !important;" class="dropdown-menu">
                                       <li class="feedback-link margin10tb text-center"><span class="beta-flag">BETA </span>We're still working on translations.<a href="https://twenty20product.typeform.com/to/gV7oxG" target="_blank">Give us feedback here</a></li>
                                       <hr class="xlight slim">
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-521="521">Deutsch</a></li>
                                       <li class="active"><a href="#" data-ember-action="" data-ember-action-522="522">English</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-523="523">Español (ES)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-524="524">Español (LA)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-525="525">Français</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-526="526">Italiano</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-527="527">日本語</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-528="528">한국어</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-529="529">Português</a></li>
                                    </ul>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div style="color: white;" class="container-fluid margin20t">
                        <div class="row row-no-padding social-proof-con">
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-4 col-sm-offset-2 text-center">
                                 <h3 class="margin0tb">XK+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">photographers in the real world</p>
                              </div>
                           </div>
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-3 col-sm-offset-1 text-center">
                                 <h3 class="margin0tb">XM+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">crowdsourced photos</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            {{-- signin modal --}}
            <div id="ember473" class="gated-home-auth-modal-component ember-view" stye="display: none;">
               <div id="gated-home-auth-modal" role="dialog" tabindex="-1" class="auth-component modal in" style="z-index: 1050; display: none; padding-left: 16px;">
                  <div class="modal-dialog" id="signin_div" style="display: block;">
                     <div class="modal-content">
                        {{-- <div class="logo-container"><i class="t20icon-blue"></i></div> --}}
                        <!---->
                        <div id="ember2776 signpotion" class="sso-signin-home-component ember-view" >
                           <div class="modal-body" style="background: url({{ asset('images/pic12.jpg')  }}); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
                              <div class="buttons-container">
                                 <a href="#" id="show_signup" class="text-link-bold brand-light " data-ember-action="" data-ember-action-2777="2777">
                                 Sign Up
                                 </a>
                              </div>
                              <div class="visible-xs padding20b"></div>
                              <div class="greetings-text">
                                 <h2 style="font-weight: normal;" data-test="gated-auth-signin-title" class="padding0b padding40t margin10t text-center">
                                    Welcome back!
                                 </h2>
                                 <h5 class="visible-xs-block margin0b padding10b text-center normal">
                                    Sign in to start exploring.
                                 </h5>
                                 <h4 class="hidden-xs margin0b padding10b text-center normal">
                                    <span class="padding10b">
                                    Sign in to start exploring.
                                    </span>
                                 </h4>
                              </div>
                              <div class="flex-row justify-content-center margin20t" style="display: none;">
                                 <div id="ember2782" class="ga-linker-component ember-view">
                                    <div id="ember2783" class="loading-button-component ember-view">
                                       <button style="" class="btn btn-loading   btn-sign-in btn-default external-link" data-ember-action="" data-ember-action-2784="2784">
                                          <div id="ember2785" class="loading-spinner loading-spinner-component ember-view"></div>
                                          <div class="btn-loading-text"><i class="envato-logo-circle"></i>Picture+254</div>
                                       </button>
                                    </div>
                                 </div>
                                 <div id="ember2786" class="loading-button-component ember-view">
                                    <button style="" class="btn btn-loading   btn-sign-in btn-default" data-ember-action="" data-ember-action-2787="2787">
                                       <div id="ember2788" class="loading-spinner loading-spinner-component ember-view"></div>
                                       <div class="btn-loading-text"><i class="facebook-logo-circle"></i>Facebook</div>
                                    </button>
                                 </div>
                                 <div id="ember2789" class="loading-button-component ember-view">
                                    <button style="" class="btn btn-loading   btn-sign-in btn-default" data-ember-action="" data-ember-action-2790="2790">
                                       <div id="ember2791" class="loading-spinner loading-spinner-component ember-view"></div>
                                       <div class="btn-loading-text"><i class="instagram-logo-circle"></i>Instagram</div>
                                    </button>
                                 </div>
                              </div>
                              <div class="flex-row justify-content-center margin60b">
                                 <div class="col-xs-12 col-sm-7">
                                    <!---->
                                    {{-- <p class="text-center margin20tb">
                                       Or, sign in with email
                                    </p> --}}
                                    <!---->
                                    <!---->
                                    <form data-ember-action="" data-ember-action-2796="2796">
                                       <div class="form-group">
                                          <label for="gated-signin-email">
                                          Email Address
                                          </label>
                                          <input type="email" required="" placeholder="you@example.com" id="gated-signin-email" class="form-control ember-text-field -text-field-component ember-view">
                                          <label for="gated--signin-password">
                                          Password
                                          </label>
                                          <div id="ember2814" class="password-input-wrapper password-input-component ember-view">
                                            <input name="password" type="password" required="" placeholder="At least 6 characters" id="gated-signin-password" class="form-control ember-text-field -text-field-component ember-view"><button type="button" class="btn btn-link password-input-toggle"><span class="text-light t20icon t20icon-show-password"></span>
                                            </button>
                                          </div>
                                          <a href="#" class="pull-right text-bright small margin10t margin20b " data-ember-action="" data-ember-action-2816="2816">
                                          Forgot Your Password?
                                          </a>
                                       </div>
                                       <div class="form-group margin20t" style="height: ">
                                          <div id="ember2825" class="loading-button-component ember-view">
                                             <button style="" type="submit" class="btn btn-loading   btn btn-primary btn-block">
                                                <div id="ember2826" class="loading-spinner loading-spinner-component ember-view"></div>
                                                <div class="btn-loading-text" style="height: 20px;">
                                                   <!---->Sign In
                                                </div>
                                             </button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!----><!---->
                        <div class="container-fluid padding0lr">
                           <div style="background-color: #222; font-weight: 400 !important;" class="flex-row align-items-center justify-content-between padding20lr">
                              <div class="col-xs-7 padding10tb">Looking for help?&nbsp;<a style="margin-right: 20px;" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2F" id="ember564" class="support-link-component ember-view">Check out our help center.</a></div>
                              <div class="col-xs-5 text-right padding10tb">
                                 <span id="ember571" class="dropdown locale-setter-component ember-view">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><i class="t20icon t20icon-globe"></i><span class="current-locale-name">English</span><span class="caret"></span></a>
                                    <ul role="menu" style="bottom: 100% !important; top: auto !important; right: 0; left: auto; float: right !important;" class="dropdown-menu">
                                       <li class="feedback-link margin10tb text-center"><span class="beta-flag">BETA </span>We're still working on translations.<a href="https://twenty20product.typeform.com/to/gV7oxG" target="_blank">Give us feedback here</a></li>
                                       <hr class="xlight slim">
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-580="580">Deutsch</a></li>
                                       <li class="active"><a href="#" data-ember-action="" data-ember-action-581="581">English</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-582="582">Español (ES)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-583="583">Español (LA)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-584="584">Français</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-585="585">Italiano</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-586="586">日本語</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-587="587">한국어</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-588="588">Português</a></li>
                                    </ul>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div style="color: white;" class="container-fluid margin20t">
                        <div class="row row-no-padding social-proof-con">
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-4 col-sm-offset-2 text-center">
                                 <h3 class="margin0tb">XXX+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">photographers in the real world</p>
                              </div>
                           </div>
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-3 col-sm-offset-1 text-center">
                                 <h3 class="margin0tb">XXX+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">crowdsourced photos</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  {{-- sign up block --}}
                  <div class="modal-dialog" id="signup_div" style="display: none;">
                     <div class="modal-content">
                        <div class="logo-container"><i class="logo_"></i></div>
                        <div id="ember459" class="sso-signup-home-component ember-view">
                           <div class="modal-body" style="background: url({{ asset('images/coconut-drink-on-beach.jpg')  }}); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
                              <div class="buttons-container">
                                 <a href="#" id="show_signin" class="text-link-bold brand-light " data-ember-action="" data-ember-action-460="460">
                                 Sign In
                                 </a>
                              </div>
                              <div class="visible-xs padding20b"></div>
                              <div class="greetings-text" style="display: none;">
                                 <h2 style="font-weight: normal;" data-test="gated-auth-signup-title" class="padding0b padding40t margin10t text-center">
                                    Authenticity Matters.
                                 </h2>
                                 <h5 class="visible-xs-block margin0b padding10b text-center normal border-b border-silver">
                                    Use real-world stock photos to tell your brand's story.
                                 </h5>
                                 <h4 class="hidden-xs margin0b padding10b text-center normal">
                                    <span class="padding10b border-b border-silver">
                                    Use real-world stock photos to tell your brand's story.
                                    </span>
                                 </h4>
                              </div>
                              <div class="container-fluid landing-screen margin40t">
                                 <div class="flex-row justify-content-center">
                                    <div class="col-md-8 text-center">
                                       <h4 class="">
                                          Join the Picture+254 community
                                       </h4>
                                       <p class="normal">
                                          I want to:
                                       </p>
                                    </div>
                                 </div>
                                 <div class="flex-row justify-content-center margin20t">
                                    <div class="col-md-8">
                                       <div class="flex-row justify-content-between align-items-center">
                                          <div class="col-sm-6 text-center">
                                             <button class="btn btn-default btn-lg btn-block btn-wrap rounded-corners buy-button" data-ember-action="" data-ember-action-485="485">
                                             Buy photos
                                             </button>
                                          </div>
                                          <div class="col-sm-6 text-center">
                                             <button class="btn btn-default btn-lg btn-block btn-wrap rounded-corners sell-button active" data-ember-action="" data-ember-action-490="490">
                                             Sell photos
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!---->
                              <div class="flex-row justify-content-center margin20t margin80b">
                                 <div class="col-xs-12 col-sm-7">
                                    <p class="text-center">
                                       Become part of our global community of photographers making money doing what they love.
                                    </p>
                                    <form data-ember-action="" data-ember-action-1992="1992">
                                       <div class="form-group">
                                          <label for="gated-photographer-signup-email">
                                          Email Address
                                          </label>
                                          <input type="email" required="" placeholder="you@example.com" id="gated-photographer-signup-email" class="form-control ember-text-field -text-field-component ember-view">
                                          <label for="gated-photographer-signup-password">
                                          Password
                                          </label>
                                          <div id="ember2010" class="password-input-wrapper password-input-component ember-view"><input name="password" type="password" required="" placeholder="At least 6 characters" id="gated-photographer-signup-password" class="form-control ember-text-field -text-field-component ember-view"><button type="button" class="btn btn-link password-input-toggle"><span class="text-light t20icon t20icon-show-password"></span></button></div>
                                       </div>
                                       <div class="form-group">
                                          <div class="checkbox checkbox-light">
                                             <label class="checked">
                                             <input type="checkbox" id="ember2012" class="ember-checkbox -checkbox-component ember-view">
                                             Send me tips, trends, freebies, updates &amp; offers. You can unsubscribe at any time.
                                             </label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div id="ember2021" class="loading-button-component ember-view">
                                             <button style="" type="submit" class="btn btn-loading   btn btn-primary btn-block">
                                                <div id="ember2022" class="loading-spinner loading-spinner-component ember-view"></div>
                                                <div class="btn-loading-text" style="height: 20px;">
                                                   <!---->Sign up for Free
                                                </div>
                                             </button>
                                          </div>
                                       </div>
                                       <p class="xsmall">
                                          By signing up, you agree to our
                                          <a style="" href="/legal/user-terms?t20p=home" id="ember2027" class="link-to-component ember-view">              User Terms</a>,
                                          <a style="" href="/legal/contributor-terms?t20p=home" id="ember2032" class="link-to-component ember-view">              Contributor Terms</a>,
                                          and
                                          <a style="" href="/legal/privacy?t20p=home" id="ember2041" class="link-to-component ember-view">              Privacy Policy</a>.
                                       </p>
                                    </form>
                                 </div>
                              </div>
                              <div class="visible-xs margin80t"></div>
                              <div style="position: absolute; left: 0; bottom: 0; opacity: .55;" class="social-proof">
                                 <p class="small text-muted text-center margin0b">
                                    You're in good company
                                 </p>
                                 {{-- <img src="images/" alt="customer logo string 2020" style="width: 100%;" class="padding20lr"> --}}
                              </div>
                           </div>
                        </div>
                        <!----><!----><!---->
                        <div class="container-fluid padding0lr">
                           <div style="background-color: #222; font-weight: 400 !important;" class="flex-row align-items-center justify-content-between padding20lr">
                              <div class="col-xs-7 padding10tb">Looking for help?&nbsp;<a style="margin-right: 20px;" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2F" id="ember505" class="support-link-component ember-view">help center.</a></div>
                              <div class="col-xs-5 text-right padding10tb">
                                 <span id="ember512" class="dropdown locale-setter-component ember-view">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="t20icon t20icon-globe"></i><span class="current-locale-name">English</span><span class="caret"></span></a>
                                    <ul role="menu" style="bottom: 100% !important; top: auto !important; right: 0; left: auto; float: right !important;" class="dropdown-menu">
                                       <li class="feedback-link margin10tb text-center"><span class="beta-flag">BETA </span>We're still working on translations.<a href="https://twenty20product.typeform.com/to/gV7oxG" target="_blank">Give us feedback here</a></li>
                                       <hr class="xlight slim">
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-521="521">Deutsch</a></li>
                                       <li class="active"><a href="#" data-ember-action="" data-ember-action-522="522">English</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-523="523">Español (ES)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-524="524">Español (LA)</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-525="525">Français</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-526="526">Italiano</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-527="527">日本語</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-528="528">한국어</a></li>
                                       <li class=""><a href="#" data-ember-action="" data-ember-action-529="529">Português</a></li>
                                    </ul>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div style="color: white;" class="container-fluid margin20t">
                        <div class="row row-no-padding social-proof-con">
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-4 col-sm-offset-2 text-center">
                                 <h3 class="margin0tb">XK+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">photographers in the real world</p>
                              </div>
                           </div>
                           <div class="col-xs-6">
                              <div class="col-xs-12 col-sm-3 col-sm-offset-1 text-center">
                                 <h3 class="margin0tb">XM+</h3>
                              </div>
                              <div style="line-height: 18px;" class="col-xs-12 col-sm-5 c2 text-center">
                                 <p class="margin0b callout">crowdsourced photos</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  {{-- sign up end --}}
               </div>
            </div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 

          <script type="text/javascript">

                 $(document).ready(function() {
                  $("#cartt").click(function(){

                    // document.getElementById("ember446").style.display = 'block';

                      $("#gated-home-auth-modal").css("display","block");
                      console.log('dkkdkd');
                  }); 

                  $("#show_signup").click(function(){

                    // document.getElementById("ember446").style.display = 'block';

                      $("#signup_div").css("display","block");
                      $("#signin_div").css("display","none");
                  }); 

                  $("#show_signin").click(function(){

                    // document.getElementById("ember446").style.display = 'block';

                      $("#signup_div").css("display","none");
                      $("#signin_div").css("display","block");
                  }); 
              });


            // sign in
              $('#ember2825').click(function(event) {
                event.preventDefault();

                $.ajax({
                         url : "{{ route('stock_album-signin') }}",
                        type:'POST',
                        data: {
                              'username': $("#gated-signin-email").val(),
                              'password': $("#gated-signin-password").val(),
                              _token: '{{csrf_token()}}',

                        },



                        success: function(response) {
                          console.log(response.status);
                          if(response.status == 0)
                          {

                            Swal.fire({
                                  title: 'Success!',
                                  // text: "Transaction has been reversed successfully!",
                                  icon: 'success',
                                  closeButtonText: 'No, cancel!',
                                }
                                ).then((result)=>{
                                  location.reload()
                                }
                                );
                          }
                          else
                          {
                            Swal.fire({
                                  title: 'Error!',
                                  text: "Invalid Email address/Phone or Password!",
                                  icon: 'error',
                                  closeButtonText: 'No, cancel!',
                                }
                                
                                );
                          }


                        },

                        error: function(jqXHR, textStatus, errorThrown) {
                            Swal.fire({
                                  title: 'Error!',
                                  text: errorThrown,
                                  icon: 'error',
                                  closeButtonText: 'No, cancel!',
                                }
                                )
                    }
                      });

                        // $('#imageDetailsSave').show();
            });

            
          </script>