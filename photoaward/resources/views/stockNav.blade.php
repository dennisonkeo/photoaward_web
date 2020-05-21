<nav role="navigation" class="navbar ">

	<div style="margin-right:20px;" class="navbar-header"><button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle"><span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

	<a style="" href="/" id="ember1256" class="navbar-brand logo link-to-component ember-view"><img src="{{ asset('images/logo-.png') }}" class="logo-color" width="64">
	</a></div>

	<div class="collapse navbar-collapse navbar-ex1-collapse"><span id="mobile-search-form" class="visible-xs-inline"><form class="navbar-form js-search-form" data-ember-action="" data-ember-action-1257="1257"><div class="form-group"><div class="input-group"><input type="text" placeholder="Search..." id="ember1262" class="form-control input-sm ember-text-field -text-field-component ember-view"><span class="input-group-addon"><button formnovalidate="formnovalidate" name="commit" type="submit" class="only-icon"><i class="t20icon t20icon-search"></i></button></span></div></div></form></span><ul class="nav navbar-nav navbar-left"><li><a style="" href="/" id="ember1263" class="link-to-component ember-view"><i class="t20icon t20icon-home visible-xs-inline-block"></i><span class="text-container">Home</span></a></li><li><a style="" href="/" id="ember1268" class="link-to-component ember-view"><i class="t20icon t20icon-collection visible-xs-inline-block"></i>
	<span class="text-container">Discover</span></a></li></ul>
	<ul class="nav navbar-nav navbar-right"><!----><!---->

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
<a style="" href="/innoso/photos?t20p=explore.signature&amp;t20s=top-bar" id="ember1274" class="link-to-component ember-view">        Profile
</a>    </li>

      <li>
<a style="" href="/innoso/collections?t20p=explore.signature&amp;t20s=top-bar" id="ember1279" class="link-to-component ember-view">          Wishlist
</a>      </li>

<!---->
      <li>
<a style="" href="/innoso/loves?t20p=explore.signature&amp;t20s=top-bar" id="ember1284" class="link-to-component ember-view">          Likes
</a>      </li>

<!---->
    {{-- <li>
<a style="" href="/license-history?t20p=explore.signature&amp;t20s=top-bar" id="ember1289" class="menuitem link-to-component ember-view">        License History
</a>    </li> --}}

    <hr class="xlight slim">

    <li style="position: relative;">
<a style="" href="/settings?t20p=explore.signature&amp;t20s=top-bar" id="ember1294" class="menuitem link-to-component ember-view">        Settings

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
        Go To Envato Elements
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