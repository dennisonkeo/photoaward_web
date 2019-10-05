
<!DOCTYPE HTML><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="chr chr77 os-mac no-js">
	<head >

		<!-- Force latest IE rendering engine or ChromeFrame if installed -->
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
		<meta charset="utf-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1130.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
		<title>First light by mrmiyagi267 - ViewBug.com</title>

		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-language" content="en" />

                                
		
		
					<meta name="description" content="Photo by mrmiyagi267" />
		
		
		
		
		<!-- FB OG -->
                                <meta property="fb:app_id" content="174611511663" />
                <meta property="og:site_name" content="ViewBug.com" />
                <meta property="og:image" content="https://www.viewbug.com/media/mediafiles/2018/09/27/81264670_medium.jpg" />
                <meta property="og:description" content="Find more inspiring images at ViewBug - the world’s most rewarding photo community. " />
                <meta property="og:url" content="https://www.viewbug.com/photo/81264670" />
                <meta property="og:type" content="viewbugphotocontests:photo" />
                <meta property="og:title" content="'First light' by mrmiyagi267" />
                                <meta property="og:image:width" content="680" />
                <meta property="og:image:height" content="453" />
                                
		<!-- TW Cards -->
				    <meta name="twitter:card" content="photo">
		    <meta name="twitter:site" content="@viewbug">
		    <meta name="twitter:creator" content="">
		    <meta name="twitter:title" content="&quot;First light&quot; by mrmiyagi267">
		    <meta name="twitter:image:src" content="https://www.viewbug.com/media/mediafiles/2018/09/27/81264670_medium.jpg">
		    <meta name="twitter:domain" content="http://www.viewbug.com/photo/81264670">
		    <meta name="twitter:app:name:iphone" content="">
		    <meta name="twitter:app:name:ipad" content="">
		    <meta name="twitter:app:name:googleplay" content="">
		    <meta name="twitter:app:url:iphone" content="">
		    <meta name="twitter:app:url:ipad" content="">
		    <meta name="twitter:app:url:googleplay" content="">
		    <meta name="twitter:app:id:iphone" content="">
		    <meta name="twitter:app:id:ipad" content="">
		    <meta name="twitter:app:id:googleplay" content="">
		
                                    <!-- html5 capability detection & ie compatability layer 
                    <script type="text/javascript" src="/vb2/public/js/modernizr-1.7.min.js"></script> -->
                                    
		<!-- stylesheets-->
                                    <link type="text/css" rel="stylesheet" href="css/main/default.css" media="all" />
                        
			<link type="text/css" rel="stylesheet" href="css/main/.css" />				                <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta itemprop="name" content="ViewBug Photo Contests">
		<meta itemprop="description" content="We award and promote photography through contests and discover new talent.">
		<meta itemprop="image" content="www.viewbug.com">
		<meta name="p:domain_verify" content="eca4455bacf45858579dd17b2308df0e" />
                <meta name="google-site-verification" content="htU3VuBZ1c0keeXrxXPucAfEqXszPU5EuSX1r6JbW1s" />
                
		<!-- Load the Client component. -->
    <script src="https://js.braintreegateway.com/web/3.15.0/js/client.min.js"></script>

    <!-- Load the Hosted Fields component. -->
    <script src="https://js.braintreegateway.com/web/3.15.0/js/hosted-fields.min.js"></script>                     <link rel="canonical" href="https://www.viewbug.com/photo/81264670"/>
                                    
                <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '917533844982402');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=917533844982402&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <!-- start Mixpanel --><script type="text/javascript">(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
mixpanel.init("8376acbf6ca3341735b6813f7b75e61b");</script><!-- end Mixpanel -->
<script> window._peq = window._peq || []; window._peq.push(["init"]); </script>
<script src="https://clientcdn.pushengage.com/core/330088f7e9ab4f9f59272c735c8a8738.js" async></script>
    <meta name="google-signin-client_id" content="123856577159-c15sl7lgmukv35sf9eqojlm6ver6j7q2.apps.googleusercontent.com" />
                    
</head>
       
	<body class="photopage index fancybox logged-in has_banner i_p" >
            <div id="fb-root"></div>
							<div class="navbarMenu" style="display:none;">
                            <div class="navbarMenuCont">
				<div class="titleMenu">
				<h2>viewbug</h2>
			</div>
				<ul class="box-menu">
				<li class="first"><a href="https://www.viewbug.com/upload">Upload</a></li><li class="second"><a href="https://www.viewbug.com/photo-contests" class="optionPC ">Photo Contests</a></li><li><a href="https://www.viewbug.com/fame" class="optionPC ">Photos</a></li><li><a href="https://www.viewbug.com/vote">Vote</a></li><li><a href="https://www.viewbug.com/challenges" class="optionPC ">Challenges</a></li><li><a href="https://www.viewbug.com/forum" target="_parent">Forum</a></li><li><a href="https://photographyclasses.viewbug.com/user/">Classes</a></li><li><a href="https://websites.viewbug.com/settings" class="highlighted " style="background-color:#36c745 !important;"><span style="display: inline-block;">My Website</span></a></li><li><a href="https://logos.viewbug.com">Get Logo</a></li><li class="separator"><a href="https://www.viewbug.com/members" class="optionPC ">Members</a></li><li><a href="https://www.viewbug.com/about-us" class="optionPC ">About Us</a></li><li><a href="https://www.viewbug.com/judges" class="optionPC ">Judges</a></li><li class="last"><a href="https://www.viewbug.com/terms" class="optionPC " rel="nofollow" target="_parent">Terms</a></li>			</ul>
		
<div id="menu-socialsicons">
    <a href="https://www.facebook.com/ViewBugFans" title="ViewBug Facebook" class="social-icon si-fb" target="_blank"><div class="icon"></div></a>
    <a href="https://www.twitter.com/viewbug" class="social-icon si-tw" target="_blank"><div class="icon"></div></a>
</div>                            </div>
			</div>
			<div class="navbarMenuRight" style="display:none;">
                            <div class="navbarMenuCont">
				<div class="user_navigation">
		<div class="titleMenu">
				  		<a href="/member/qwert234">qwert234</a>
			     	</div>			<ul class="box-menu">
				<li class="first separator"><a href="https://www.viewbug.com/upgrade" class="link is_plus_upgrade ">Go PRO <img src="/media/images/layout/emojis/icon_plus_w.png" /></a></li><li class="second"><a href="https://www.viewbug.com/user/stats">My Stats</a></li><li class="separator"><a href="https://www.viewbug.com/user/inbox">Inbox</a></li><li class="separator"><a href="https://www.viewbug.com/user/notifications/all">Notifications</a></li><li class="separator"><a href="https://www.viewbug.com/user/reward-points">My Points</a></li><li><a href="https://www.viewbug.com/user/settings">Account Settings</a></li><li class="separator"><a href="http://help.viewbug.com/" target="_blank">Support</a></li><li class="last"><a href="https://www.viewbug.com/member/me/logout">Logout</a></li>			</ul>
		</div>
                            </div>
			</div>
		                                        
                                
                                    <div id="header-banner" class="confirm">
                        <input type="hidden" id="email-verification" value="tsl54348@eveav.com" />Confirm your email address by clicking the email we sent, please check your spam folder. <a href="javascript:" class="button send-verification">Send again</a>                    </div>
                	
		<div id="wrapper" class="wide" >
			<header class="normalNavbar">
				<div class="wrapper">
					<columns class="content">
						<column class="column_x logo">
							<div class="cell">
								<a href="https://www.viewbug.com?ref=logo">
                                                                    <img alt="ViewBug" src="/vb2/public/media/images/layout/logo_big_w_wbsoff.png?ver=5" class="white" />
                                                                    
                                                                     <img alt="ViewBug" src="/media/images/layout/logo-square.jpg" class="color circle_logo" />
                                                                                            </a>
							</div>
						</column>
						<column class="column_x">
							<div class="cell">
								<div class="main_navigation v1">
    			<ul class="box-menu">
				<li class="first"><a href="https://www.viewbug.com/photo-contests" target="_parent">Photo Contests</a></li><li class="second"><a href="https://www.viewbug.com/fame" target="_parent">Photos</a></li><li><a href="https://www.viewbug.com/vote" target="_parent">Vote</a></li><li><a href="https://www.viewbug.com/challenges" target="_parent">Challenges</a></li><li><a href="https://www.viewbug.com/upgrade" class="reverse ">Upgrade</a></li><li class="last"><a href="https://www.viewbug.com/upload" target="_parent" class="green_top ">+ UPLOAD</a></li>			</ul>
					<ul class="footer-top box-menu">
				<li class="first last has-menu"><a href="javascript:"><span class="footertop">Tools</span><span class="icon"></span></a>			<ul class="box-menu">
				<li class="first"><a href="javascript:"></a></li><li class="second"><a href="https://www.viewbug.com/vote" target="_parent">Vote</a></li><li class="separator"><a href="https://www.viewbug.com/challenges" target="_parent">Challenges</a></li><li><a href="https://photographyclasses.viewbug.com/user/" target="_parent">Video tutorials</a></li><li><a href="https://www.fancyphotoedit.com/personal-training1" target="_blank">Personalized Lr tutorials</a></li><li><a href="https://websites.viewbug.com/settings" target="_parent">Portfolio websites</a></li><li><a href="https://logos.viewbug.com" target="_parent">Photography logos</a></li><li><a href="https://www.viewbug.com/forum" target="_parent">Community forum</a></li><li><a href="https://www.viewbug.com/about/lightroompresets" target="_parent">Lightroom presets</a></li><li><a href="https://www.viewbug.com/marketplace/join" target="_parent">Licensing</a></li><li><a href="https://www.viewbug.com/photographycollection" target="_parent">Marketplace</a></li><li class="last"><a href="https://viewbugswag.com/" target="_blank">Shop</a></li>			</ul>
		</li>			</ul>
		</div>
							</div>
						</column>
						<column class="column_x last">
							<div class="cell">
								<div class="user_navigation">
				<ul class="box-menu">
				<li class="first last has-menu"><a href="javascript:"><span class="usericon"><img src="https://www.viewbug.com/media/images/layout/avatar/2018/avatar4_200x200.png"/></span><span class="icon"></span></a>			<ul class="box-menu">
				<li class="first"><a href="javascript:"></a></li><li class="second"><a href="https://www.viewbug.com/member/qwert234" target="_parent" class="is_username ">qwert234</a></li><li class="separator"><a href="https://www.viewbug.com/upgrade" target="_parent" class="is_plus ">Get PRO <img class="normal" src="/media/images/layout/emojis/icon_plus.png" /><img class="hover" src="/media/images/layout/emojis/icon_plus_w.png" /></a></li><li><a href="https://www.viewbug.com/user/stats" target="_parent">My Stats</a></li><li class="separator"><a href="https://www.viewbug.com/user/inbox" target="_parent">Inbox</a></li><li><a href="https://www.viewbug.com/user/reward-points" id="menuwall" target="_parent">My Points</a></li><li class="separator"><a href="https://www.viewbug.com/members" target="_parent">Meet Photographers</a></li><li class="separator"><a href="https://www.viewbug.com/user/settings" target="_parent">Account Settings</a></li><li class="last"><a href="https://www.viewbug.com/member/me/logout" target="_parent">Logout</a></li>			</ul>
		</li>			</ul>
					<ul class="footer-top box-menu">
				<li class="first last has-menu"><a href="javascript:"><span class="footertop"></span><span class="icon"></span></a>			<ul class="box-menu">
				<li class="first"><a href="javascript:"></a></li><li class="second"><a href="https://www.viewbug.com/about-us" target="_parent">About Us</a></li><li class="separator"><a href="http://help.viewbug.com/" target="_blank">Support</a></li><li><a href="https://www.facebook.com/ViewBugFans" rel="nofollow" target="_blank" class="footer-social footer-fb ">Facebook</a></li><li><a href="https://instagram.com/viewbug/" rel="nofollow" target="_blank" class="footer-social footer-i ">Instagram</a></li><li><a href="https://twitter.com/viewbug" rel="nofollow" target="_blank" class="footer-social footer-tw ">Twitter</a></li><li class="separator"><a href="https://www.viewbug.com/judges" target="_parent">Judges</a></li><li><a href="https://www.viewbug.com/terms" rel="nofollow" target="_parent">Terms</a></li><li class="last"><a href="https://www.viewbug.com/privacy-policy" rel="nofollow" target="_parent">Privacy</a></li>			</ul>
		</li>			</ul>
		</div>
							</div>
						</column>
													<column class="column_x last">
								<div class="cell box-stats">
																		<a href="/user/inbox" class="stat messages" style="">0</a>
																			<a href="/user/inbox/comments" class="stat comments" >0</a>
																		<a href="/cart" class="stat cart" >0</a>
                                    <a href="javascript:" class="stat notifications"><span></span></a>
								</div>
							</column>
							<column class="column_x last">
								<div class="cell">
									        <form id="search" action="/search" method="post" accept-charset="UTF-8" class="box-search validate" onsubmit="redirectSearch(this); return false;">
            <div  class="form-box tooltip-description clean-fieldsets form-content-wrapper empty-top">
                                <div class="form-content">
                    <div class="form-output block hide"></div>
                    <input type="hidden" id="edit-form_id" name="form_id" value="search" class=""/><div class="form-item">
 <div class="input_wrapper with_no_label"><input type="search" size="50" id="edit-keywords" name="keywords" value="Search" class="empty form-search form-text"/></div>
</div>
                </div>
                            </div>
        </form>
                								</div>
							</column>
											</columns>
				</div>
                            
				<!-- <a href="" title="Fullscreen" class="button fullscreen"><span class="icon"></span></a> -->
			 </header> <!-- end of header -->
                         
			                          
			 <header class="mobileNavbar" style="display:none;" id="hmnb">
				<div class="wrapper">
					<columns class="content">
						<column class="column_x navbar">
							<div class="cell">
								<a ><img src="/vb2/public/media/images/layout/navbar_icon.png?v=1" /></a>
							</div>
						</column>
						<column class="column_x logo">
							<div class="cell">
                                                            <a href="https://www.viewbug.com?ref=logom">
                                                                                                                                    <img alt="ViewBug" src="/media/images/layout/logo-square.jpg" class="circle_logo" />
                                                                                                                            </a>
							</div>
						</column>
						<column class="column_x last">
							<div class="cell">
								<div class="user_navigation">
				<ul class="box-menu">
				<li class="first last"><a href="javascript:"><span class="usericon"><img src="/media/images/layout/avatar/2018/avatar4_200x200.png"/></span></a></li>			</ul>
		</div>
							</div>
						</column>
													<column class="column_x last">
								<div class="cell box-stats">
																		<a href="/user/inbox" class="stat messages" style="color: white;width: 1px; ">0</a>
																			<a href="/user/inbox/comments" class="stat comments" >0</a>
																		<a href="/cart" class="stat cart" >0</a>
								</div>
							</column>
							<column class="column_x last">
								<div class="cell">
                                                                    <a href="javascript:" class="open-search"></a>
									        <form id="search" action="/search" method="post" accept-charset="UTF-8" class="box-search validate" onsubmit="redirectSearch(this); return false;">
            <div  class="form-box tooltip-description clean-fieldsets form-content-wrapper empty-top">
                                <div class="form-content">
                    <div class="form-output block hide"></div>
                    <input type="hidden" id="edit-form_id" name="form_id" value="search" class=""/><div class="form-item">
 <div class="input_wrapper with_no_label"><input type="search" size="50" id="edit-keywords" name="keywords" value="Search" class="empty form-search form-text"/></div>
</div>
                </div>
                            </div>
        </form>
                                                                                    <a href="javascript:" class="cancel-search">Cancel</a>
								</div>
							</column>
											</columns>
				</div>
			</header>
						
						
			                         
			<div id="main_content" class="wrapper main_content">
            					<div id="top_content">
									</div>
								<section class="content">
					<img class="close-iframe" src="/media/images/layout/icons/chameleon/Close2.png"/>
<div class="topphoto">
                                <div class="tools-group tools-awards tooltip-description">
                                                                                        <div class="dropdown feature-photo-byuser-container peer-action share-with-friends menu first last float-left  awardpopup">
                                                        <a href="javascript:" class="button gray   vblikes-button" data-id="81264670" data-media-id="81264670" id="btn81264670"><span class="mask-ani"><span class="icon"></span></span><span class="mask-text">47</span></a>
                                                                                                                        
                                                            <!--BADGES AWARDS-->    
                                                            <div id="awd81264670" class="award_popup icons">
                                                                <columns>
                                                                    <column>
                                                                        <ul>
                                                                            <li>
                                                                                <div id="0" class="icon-award">
                                                                                    <div id="smallword" class="name-awd">Impressed</div>
                                                                                    <a href="javascript:" class="emotion-byuser" media_id="81264670" emotion="0">
                                                                                        <img src="/media/images/layout/sprite/Impressed.png" id="icon30">                                                                                                                                                                        
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                            <li>
                                                                                <div id="1" class="icon-award">
                                                                                    <div id="smallword" class="name-awd">Happy</div>
                                                                                    <a href="javascript:" class="emotion-byuser" media_id="81264670" emotion="1">
                                                                                        <img src="/media/images/layout/sprite/Happy.png"/>                                                                                                                                                                        
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                            <li>
                                                                                <div id="2" class="icon-award">
                                                                                    <div id="smallword" class="name-awd">Relaxed</div>
                                                                                    <a href="javascript:" class="emotion-byuser" media_id="81264670" emotion="2">
                                                                                        <img src="/media/images/layout/sprite/Relaxed.png"/>                                                                                                                                                                        
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                            <li>
                                                                                <div id="3" class="icon-award">
                                                                                    <div id="smallword" class="name-awd">Sad</div>
                                                                                    <a href="javascript:" class="emotion-byuser" media_id="81264670" emotion="3">
                                                                                        <img src="/media/images/layout/sprite/Sad.png"/>                                                                                                                                                                        
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                            <li>
                                                                                <div id="4" class="icon-award">
                                                                                    <div id="smallword" class="name-awd">Upset</div>
                                                                                    <a href="javascript:" class="emotion-byuser" media_id="81264670" emotion="4">
                                                                                        <img src="/media/images/layout/sprite/Upset.png"/>                                                                                                                                                                        
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                        </ul>
                                                                    </column>
                                                                                                                                        <column id="awd_btn81264670">
                                                                        <ul>
                                                                            <li>                                                                                
                                                                                <div id="0" class="icon-award">
                                                                                    <div id="smallword" class="name-awd">Award</div>
                                                                                    <a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active" media_id="81264670" type="peer_award" status="1">
                                                                                        <img src="/media/images/layout/sprite/award.png"/>                                                                                                                                                                        
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                            <li>
                                                                                <div id="1" class="icon-award">                                                                                    
                                                                                    <div class="name-awd c_absolute_masterpiece">Absolute Masterpiece</div>
                                                                                    <a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active" media_id="81264670" type="absolute_masterpiece" status="1">
                                                                                        <img src="/media/images/layout/sprite/masterpiece.png"/>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>                                                                            
                                                                           <li>
                                                                                <div id="2" class="icon-award">
                                                                                    <div class="name-awd c_creativity">Outstanding Creativity</div>  
                                                                                    <a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active" media_id="81264670" type="outstanding_reativity" status="1">
                                                                                        <img src="/media/images/layout/sprite/creativity.png"/>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                            
                                                                            <li>
                                                                                <div id="3" class="icon-award">
                                                                                    <div id="smallword" class="name-awd c_top_choice">Top Choice</div>                                                                                    
                                                                                    <a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active" media_id="81264670" type="top_choice" status="1">
                                                                                        <img src="/media/images/layout/sprite/topchoice.png"/>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder"></div>
                                                                            </li>
                                                                            <li>                                                                                
                                                                                <div id="4" class="icon-award last">
                                                                                    <div class="name-awd c_superb">Superb Composition</div>
                                                                                    <a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active" media_id="81264670" type="suberb_composition" status="1">
                                                                                        <img src="/media/images/layout/sprite/composition.png"/>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="holder last-h"></div>
                                                                            </li>
                                                                        </ul>
                                                                    </column>
                                                                                                                                        <column class="space" id="awd_btn_pro81264670">
                                                                        <ul>
                                                                            <li><div id="0" class="icon-award"><a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active " media_id="81264670" type="superior_skill" status="1" data-callback="hidePopupAward"><img src="/media/images/layout/sprite/superior_skill.png"/></a><div id="smallword" class="name-awd bottom c_superior_skill">Superior Skill</div></div><div class="holder"></div></li><li><div id="1" class="icon-award"><a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active " media_id="81264670" type="all_star" status="1" data-callback="hidePopupAward"><img src="/media/images/layout/sprite/all_star.png"/></a><div id="smallword" class="name-awd bottom c_all_star">All Star</div></div><div class="holder"></div></li>                                                                            
                                                                            <li><div id="2" class="icon-award"><a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active " media_id="81264670" type="magnificent_capture" status="1" data-callback="hidePopupAward"><img src="/media/images/layout/sprite/magnificent_capture.png"/></a><div id="smallword" class="name-awd bottom c_magnificent_capture">Magnificent Capture</div></div><div class="holder"></div></li><li><div id="3" class="icon-award"><a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active " media_id="81264670" type="genious" status="1" data-callback="hidePopupAward"><img src="/media/images/layout/sprite/genious.png"/></a><div id="smallword" class="name-awd bottom c_genious">Genius</div></div><div class="holder"></div></li><li><div id="4" class="icon-award"><a href="javascript:" class="feature-photo-byuser feature-photo-byuser-active " media_id="81264670" type="virtuoso" status="1" data-callback="hidePopupAward"><img src="/media/images/layout/sprite/virtuoso.png"/></a><div id="smallword" class="name-awd bottom c_virtuoso">Virtuoso</div></div><div class="holder"></div></li>                                                                        </ul>
                                                                    </column>
                                                                                                                                    </columns>
                                                            </div>
                                                        
                                                        
                                                    </div>
                                                        
                        <div class="collect-button" id="">
                            <div class="collections-container link menu last first float-left">
                                <a id="collect81264670" href="#" data-callback="hidePopupAward" data-media-id="81264670" data-file="mediafiles/2018/09/27/81264670.jpg" class="collections-button button gray " style="margin-left:8px !important; "><span class="mask-ani" style='height:40px !important;'><span class="icon"></span></span></a>
                            </div>
                        </div>
                                
                                                
                                                        
                            </div>
                        
    <a href="javascript:" id="share-btn-box" class="share-icon">&nbsp;</a>
        <div id='tools-socials' ><column class="block social-share-btns " style=""><input type="hidden" id="social-share-url" value="https://www.viewbug.com/photo/81264670" /><a href="#" class="share face" onclick="fb_likeStats('https://www.viewbug.com/photo/81264670')" ><div></div><span></span></a><a href="javascript:" class="share twit" onclick="window.open('https://twitter.com/intent/tweet?text=This+image+by+mrmiyagi267+is+amazing%21+Find+more+%23photography+%40viewbug&url=https%3A%2F%2Fwww.viewbug.com%2Fphoto%2F81264670','twitter-share-dialog','width=560,height=300');return false;"><div></div><span></span></a><a class="share email" href="mailto:?subject=Thought you'd appreciate this image...&body=http://viewbug.com/photo/81264670%0D%0A%0D%0AFind more inspiring images at ViewBug - the world's most rewarding photo community."></a></column></div>         <div style="position: absolute; right: 0px; top: 3px;">
                        <img src="/media/images/layout/approved_18.png" class="memappropp">
                                <items class="block profile">
                            <item class="last m_top">
                                
                                    		<thumbnail>
			<a href="/member/mrmiyagi267" target="_parent">
				<img src="https://cdnpt01.viewbug.com/media/mediafiles/2014/12/14/40188491_75x75.jpg" width="75" height="75" alt="mrmiyagi267"/>			</a>
			            					</thumbnail>
		                                    <div class="details">
                                            <h6>mrmiyagi267</h6>                                            <a href="/member/mrmiyagi267" user_id="1836341" class="has-icon button follow"><span class="icon"></span><span class="label">Follow</span></a>                                    </div>
                            </item>
                    </items>
         </div>
    
</div>

<div class="sidebars sidebars-right" id="siddebar-content">
	<div class="content">
				 <script src="css/main/photo.js"></script>                        
                <script type="text/javascript">			
			var base_size="_widepreview400.jpg";
			var current_size="_widepreview400.jpg";
                        var last_size = base_size;
			var next_size="_large.jpg";
		</script>
                
		<div class='photo-wrapper'>                <div class='block block-photo' id='photo-wrapper'>                                                    <div class='protect-photo' media_id='81264670'></div>                                <div class='photo'>                                    <img src='https://cdnpt01.viewbug.com/media/mediafiles/2018/09/27/81264670_widepreview400.jpg' style='width:100%; max-width:1300px' id='main_image' alt='First light'/><div id='watermark-photo' style='display:none;'><img /></div>                                </div>                                            </div>                            </div>                
                <script type="text/javascript">	
			var topLeftImage = getElementTopLeft("main_image");
			var topImage = topLeftImage.top;
			var max_height = y- topImage;

			var photo = {
                                rotate: '0',
				originalWidth: 4923,
				originalHeight:  3282,
				baseWidth: 0,
				baseHeight: 0,
				file: 'https://cdnpt01.viewbug.com/media/mediafiles/2018/09/27/81264670_widepreview400.jpg',
				baseMaxHeight: max_height,
				topImage: topImage,
				id:81264670,
                                adult: 0,
                                user_adult: 0			};

			var image = document.getElementById("main_image");
			max_height = calculateMaxSize(image,photo,max_height,false);
			
                        var last_image_src = image.src;
                        
                        image.onload = function () {
                            replaceImage(false);
                        };
			
			var topImageLess = 0;
			var maxHeightPlus = 13;
			//max_height = y- topImage ;
                        
			
		</script>
					<a href="/photo/81264666" class="btnArrows next"><div class="btnArrows btnNext" ></div></a>
					
                        
	</div>
</div>
<div id="bgextras">
<columns id="extra_info">
    <column id="sidebar-info" class="sidebar last">
        <div id="photo-edit" class="photo-info block hide" media_id="81264670"></div>
        
                                <!--<div class="extra block user-photos">
                                                        <h3>More from </h3>
                    </div>-->
                        
            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7DK2QW&placement=viewbugcom" id="_carbonads_js"></script>
                <!--<div class="extra">
                                            <h3>Details</h3>
                                    </div>-->
                <div class="title-container">
                        <h1>First light</h1>                                        </div>

                                        <div class="block description">
                                <h2 class='partial-description'>Summer sunrise at Lake Minnewanka in Banff National Park.</h2><div class='complete-description'>Summer sunrise at Lake Minnewanka in Banff National Park.<br><a class='read-less read'> Read less</a></div>                        </div>
                                
                
                
                <div class="block metadata">
                    <div class="block-mini"></div>
                    
                    <div class="camera_details">
                                                <span class="camera_element"><img src="/media/images/layout/icons/camera_.png" width="20px" alt="camera" style="vertical-align:bottom;"/><span><a href='/search/camera/canon+eos+60d'>Canon EOS 60D</a></span></span><br><br>
                         
                     
                        <span class="camera_element"><img src="/media/images/layout/icons/settings.png" width="20px" alt="settings" style="vertical-align:bottom;"/>
                    <span class="no-break">Aperture f/8</span>&emsp;<span class="no-break">ISO 100</span>&emsp;<span class="no-break">Shutter 1/160</span>&emsp;<span class="no-break">Focal Length 10/1</span>&emsp;</span><br><br>                        
                                                <span class="camera_element"><img src='/media/images/layout/icons/upload_date.png' width='20px' alt='upload_date' style='vertical-align:top;'/>Sep, 2018</span><br><br>
                    </div>
                    
                </div>
                <div class="block views"><h3>Views</h3><div class="views_text">80</div></div>                    <div class="extra block awards overflow section-margin"><div class="block views">
                            <h3>Likes</h3>
                            <items class="block belongs blikesbg">
                                                        <item class="peer-recognition">
                                            
                        <div class="peer-users likes">
                                                    <span class="peer-user line-users"><a href='/member/aylish'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2019/03/03/83615459_75x75.jpg" width="45" height="45" alt="aylish" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/jimmydillon'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2017/09/12/75075583_75x75.jpg" width="45" height="45" alt="jimmydillon" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/mariestojanov'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2018/09/22/81194257_75x75.jpg" width="45" height="45" alt="mariestojanov" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/RobbieRoss'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2018/10/01/81325021_75x75.jpg" width="45" height="45" alt="RobbieRoss" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/jonasweiss'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2018/01/14/76986310_75x75.jpg" width="45" height="45" alt="jonasweiss" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/84Padres'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2017/05/14/72957667_75x75.jpg" width="45" height="45" alt="84Padres" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/grandpa_Vlad'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2016/10/04/68927501_75x75.jpg" width="45" height="45" alt="grandpa_Vlad" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-left"><a href="javascript:" data-option="2" data-award='likes' data-page='1' data-left='2'>+2</a></span>
                                            </div>
                </item>
                                        </items>
                    </div></div>
                                
                        <div class="extra block awards overflow section-margin">
                                <h3>Awards</h3>
                                <div class='partial-awards'>                                                    <div class="block award award">
                                                        <div class="award-description">Featured</div>
                                                    </div>
                                            </div>                                
                        </div>
                                
                                    <div class="extra block overflow">
                                                <items class="block belongs">
                                                    <item class="peer-recognition">
                                                <div class="peer-title">Peer Award</div>
                                                
                        <div class="peer-users Peer">
                                                    <span class="peer-user line-users"><a href='/member/KoralC'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2014/04/24/18704621_75x75.jpg" width="45" height="45" alt="KoralC" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/kellylarson'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2019/07/06/85484121_75x75.jpg" width="45" height="45" alt="kellylarson" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/Freeuser2010'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2019/02/16/83386692_75x75.jpg" width="45" height="45" alt="Freeuser2010" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/LH17Studio'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2017/05/05/72801870_75x75.jpg" width="45" height="45" alt="LH17Studio" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/jonasweiss'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2018/01/14/76986310_75x75.jpg" width="45" height="45" alt="jonasweiss" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/rudimary'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2019/06/17/85207552_75x75.jpg" width="45" height="45" alt="rudimary" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-user line-users"><a href='/member/stephaniemwood'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2018/12/22/82574048_75x75.jpg" width="45" height="45" alt="stephaniemwood" data-og="45" data-ow="45" style="height:45px;"/></a>                                                        </span>
                                                    <span class="peer-left"><a href="javascript:" data-option="2" data-award='Peer Award' data-page='1' data-left='32'>+32</a></span>
                                            </div>
                </item>
                                    </items>
                    </div>
                                
                
                                
                <div class="extra block emotions section-margin">
                    <h3>Emotions</h3>
                                        <item class="peer-recognition">
                        <div class="peer-title">Impressed</div>
                        <div class="peer-users emotion0 peer-emotion">
                                                    <span class="peer-user line-users"><a href='/member/aylish'  target='_parent'><img src="/media/images/layout/white_transparent.png" class="delayed lazy"  data-src="https://cdnpt01.viewbug.com/media/mediafiles/2019/03/03/83615459_75x75.jpg" width="45" height="45" alt="aylish" data-og="45" data-ow="45" style="height:45px;"/></a>                            </span>
                                            </div>
                </item>
                            </div>
                                    <div class="block emotions">
                        <h3>Categories</h3>
                    <div class='category-photo'>
                    <a class='cat_link' href=https://www.viewbug.com/fame/colors?sort=>Colors</a><a class='cat_link' href=https://www.viewbug.com/fame/landscapes?sort=>Landscapes</a><a class='cat_link' href=https://www.viewbug.com/fame/nature?sort=>Nature</a><a class='cat_link' href=https://www.viewbug.com/fame/transportation?sort=>Transportation</a><a class='cat_link' href=https://www.viewbug.com/fame/water?sort=>Water</a>                    </div>
                </div>
                                    <div class="block tags">
                        <h3>Tags</h3>
                        <div class="tags-content">
                                                                        <span class="tag_">
                                                <a href="/tags/morning">#morning</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/rise">#rise</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/sunrise">#sunrise</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/still">#still</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/lake">#lake</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/mountain">#mountain</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/valley">#valley</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/canada">#canada</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/alberta">#alberta</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/banff">#banff</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/boat">#boat</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/cruise">#cruise</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/orange">#orange</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/water">#water</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/window">#window</a>                                            </span>
                                                                                        <span class="tag_">
                                                <a href="/tags/shadow">#shadow</a>                                            </span>
                                                                    </div>
                    </div>
                                                
                        
                                                    
                
        
</column>
    
<column id="sidebar-comments">
    
    <div class='top-sidebar'><a href="javascript:" class="moderate-photo " media_id="81264670">Report</a></div>
        <div id="commentbox">
        <div id="commentavatar">
              		<thumbnail>
			<a href="#" target="_parent">
				<img src="/media/images/layout/avatar/2018/avatar4_200x200.png" width="75" height="75"/>			</a>
			            					</thumbnail>
		        </div>
        <div id="commentform">
                    <form id="media_comment" action="/photo/81264670/comment" method="post" accept-charset="UTF-8" class="validate">
            <div  class="form-box tooltip-description clean-fieldsets form-content-wrapper empty-top">
                                <div class="form-content">
                    <div class="form-output block hide"></div>
                    <input type="hidden" id="edit-form_id" name="form_id" value="media_comment" class=""/><div class="form-item">
 <div class="input_wrapper textarea-wrapper">
				<div class="form-textarea-wrapper">
					<textarea id="edit-comment" name="comment" class="empty nopaste form-textarea" placeholder="Join the conversation. Add a comment or even better, a critique. Let's get better together!" ondrop="return false;"></textarea>
				</div>
			</div>
</div>
<input type="hidden" id="vbtn" name="vbtn" value="CgVb_B6EC" class=""/><input type="hidden" id="vbtk" name="vbtk" value="42d523857d67a059e2cccf281972fb7480374a7b96843914f1ec7945c5aa73a3fc4c8b9abd2c9397e37891cac7b45233" class=""/><div class="match_left buttons"><div class="word-count"><span id="qm_comment" class="pop" title="In addition to kind words, consider leaving specific feedback about what makes this image shine, and what could be improved. Your constructive feedback can help your peers sharpen their skills!"></span><span class="critique-count"></span><span class="critique-text"></span></div><input type="submit" value="Post Comment" class="form-submit button"/></div>                </div>
                            </div>
        </form>
                        </div>
    </div>
                        <form id="media_reply_comment" action="/photo/81264670/comment/reply" method="post" accept-charset="UTF-8" class=" hide validate">
            <div  class="form-box tooltip-description clean-fieldsets form-content-wrapper empty-top">
                                <div class="form-content">
                    <div class="form-output block hide"></div>
                    <input type="hidden" id="edit-form_id" name="form_id" value="media_reply_comment" class=""/><div class="form-item">
 <div class="input_wrapper with_no_label"><input type="text" size="50" id="edit-comment" name="comment" value="Write a comment" class="empty comment nopaste form-text"/></div>
</div>
<input type="hidden" id="edit-parent_id" name="parent_id" value="" class=""/><div class="match_left buttons"><input type="submit" value="Reply" class="form-submit button"/><input type="reset" value="Cancel" class="form-reset button gray no-disabled"/></div>                </div>
                            </div>
        </form>
                
            <div class="block" id="comments">
                                <items class="comments">
                            </items>
                    </div>
       
            <h3>Same photographer <a href="/member/mrmiyagi267" class="btn-explore">See all</a></h3>
        
        <div class="similar-featured-photos">
                            <columns class="row" >    
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/40647391">
                            
                                <img src="/media/mediafiles/2014/12/20/40647391_280x280.jpg" alt="Follow your line"/>
                            
                        </a>
                    </column>
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/40219901">
                            
                                <img src="/media/mediafiles/2014/12/14/40219901_280x280.jpg" alt="A gorgeous sunset of Berg Lake, Berg Glacier on the left, Mist Glacier on the right and the magnificent Mt Robson (3954m). At night you can hear ..."/>
                            
                        </a>
                    </column>
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/73281368">
                            
                                <img src="/media/mediafiles/2017/05/31/73281368_280x280.jpg" alt="Straight Ahead"/>
                            
                        </a>
                    </column>
                                    </columns>
                            <columns class="row" >    
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/74841835">
                            
                                <img src="/media/mediafiles/2017/08/30/74841835_280x280.jpg" alt="Reach for the sky"/>
                            
                        </a>
                    </column>
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/70707976">
                            
                                <img src="/media/mediafiles/2017/01/06/70707976_280x280.jpg" alt="A snow monkey in Japan stops and stared at one of us - the concentration and focus is amazing"/>
                            
                        </a>
                    </column>
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/60731423">
                            
                                <img src="/media/mediafiles/2015/11/24/60731423_280x280.jpg" alt="Outside"/>
                            
                        </a>
                    </column>
                                    </columns>
                        
        </div>
                <h3>Discover more photos <a href="/fame/colors?sort=" class="btn-explore">See all</a></h3>
        
        <div class="similar-featured-photos">
                                <columns class="row" >    
                                        <column class="pv" style="width: 32%;">
                        <a href="/photo/4292736">
                            
                                <img src="/media/mediafiles/2013/09/02/4292736_280x280.jpg" alt="This is a great shot of the Reds coming back down from 6000 feet after doing a loop then breaking away, must be the best job in the world."/>
                            
                        </a>
                    </column>
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/48173561">
                            
                                <img src="/media/mediafiles/2015/03/05/48173561_280x280.jpg" alt="The photo was taken at Lake Bled during the January trip. This is probably the best place to take pictures of lake bled. It was taken just after ..."/>
                            
                        </a>
                    </column>
                                        <column class="ph" style="width: 32%;">
                        <a href="/photo/30352781">
                            
                                <img src="/media/mediafiles/2014/08/21/30352781_280x280.jpg" alt="Lynne Hempton climbing 'Via Myriam' in the Italian Dolomites."/>
                            
                        </a>
                    </column>
                                    </columns>
                            <columns class="row" >    
                                        <column class="pv" style="width: 32%;">
                        <a href="/photo/5070391">
                            
                                <img src="/media/mediafiles/2013/11/21/5070391_280x280.jpg" alt="My grand niece Olivia posing for me."/>
                            
                        </a>
                    </column>
                                        <column class="pv" style="width: 32%;">
                        <a href="/photo/39247081">
                            
                                <img src="/media/mediafiles/2014/12/01/39247081_280x280.jpg" alt="This is my gorgeous (and very patient) sister. The very first time I used the transforming technique I created for my "Flying Project" images. It..."/>
                            
                        </a>
                    </column>
                                        <column class="pv" style="width: 32%;">
                        <a href="/photo/11960231">
                            
                                <img src="/media/mediafiles/2014/02/21/11960231_280x280.jpg" alt="For all those who have lost someone......"/>
                            
                        </a>
                    </column>
                                    </columns>
             
           
        </div>
    </column>
    
</columns>

    <script type="text/javascript">var switchTo5x=true;</script>
    
    



<script type="text/javascript">
    
	var popSlideshow = {
		prev: eval({"#href":null,"file":""}),
		next: eval({"id":"81264666","title":"Lookout","file":"\/media\/mediafiles\/2018\/09\/27\/81264666_large.jpg","adult":"0","private":"0","status":"1","#href":"\/photo\/81264666"}),
		original: {
			id: 81264670		},
		current: {
			id: 81264670,
			file: '/media/mediafiles/2018/09/27/81264670_large.jpg',
			adult: 0		},
		url: '/photo/81264670',
                ignore_id: true,
		cache: { }
	};
        if(window.innerWidth > 1200){
            popSlideshow['current']['file']= popSlideshow['current']['file'].replace("_large","_large1300");
            if(popSlideshow['prev']!=null) { popSlideshow['prev']['file']= popSlideshow['prev']['file'].replace("_large","_large1300"); }
            if(popSlideshow['next']!=null) { popSlideshow['next']['file']= popSlideshow['next']['file'].replace("_large","_large1300");}
        }
        
        //if($("body").hasClass("photopage")){
        //    if(location.hash=="#photopage"){
                //    }
        //}
</script>
<script type="text/javascript">
	var view_adult = 0;
	var PHPSESSID = '4jb72ovrnggs1hnge2ok9hbgc7';
	var batch_id = 253505459;
	
	var PAGE = {
		
		imageUrl : '/media/mediafiles/2018/09/27/81264670_large.jpg',
		imageSize :  4923 + ' x ' + 3282  + ' px.'
	};
</script>

<input type="hidden" id="media_id" value="81264670" />
<input type="hidden" id="media_views" value="80" />

<div id='toggleContext' style='display:none;'>This photo is copyrighted by @mrmiyagi267</div>
<div id="sellphoto"></div>
<div id="moderatephoto"></div>


</div>				</section>
											</div>
						<br style="clear:both" />
                        			<div class="wrapper noti_wrapper">
	<div id="statusbar_wrapper">
			<statusbar>
				<ul class="box-menu">
					<li class="first last"><a class="notifications v2" href="javascript:"><span style="display: none;">0</span> Notifications</a></li>				</ul>
			</statusbar>
			</div>
</div>
		</div> <!--! end of #wrapper -->
        
        <div id="messages-chat-container"></div>
                
        <div id="popup-clear-bg"></div>
        <div id="popup-clear-main"></div>

        <div id="popup-clear-bg-join"></div>
        <div id="popup-clear-main-join-upgrade"></div>
        
			<link type="text/css" rel="stylesheet" href="css/main/inline.css" />		<link type="text/css" rel="stylesheet" href="css/main/print.css" media="print" />
		<script type="text/javascript" src="css/main/uimin.js"></script>
        
                  
                <script type="application/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>                
        
        
		<script type="text/javascript">
			var cache = {tid:{}};
			var is_homepage = false;
			var is_loggedin = true;
						var base_url = 'https://www.viewbug.com';
			var version = 1;
			var fb_api_id = '174611511663';
			var fb_version = 'v3.2';
			var wl_client_id = '00000000440C390D';
                        var urole = '2';
					</script>

                	<script type="text/javascript" src="css/main/inline.js"></script>			<script type="text/javascript" src="css/main/files.js"></script>		
		<script type="text/javascript">
					</script>
                
                <!-- asynchronous google analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-1519193-1', 'viewbug.com');
    ga('send', 'pageview');
</script>
<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
var google_tag_params = {ecomm_prodid: 'REPLACE_WITH_VALUE',ecomm_pagetype: 'REPLACE_WITH_VALUE',ecomm_totalvalue: 'REPLACE_WITH_VALUE',};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1057971493;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1057971493/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
                        
            
        <div id="injection_site"></div>
        <script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script><script>
(function(i,s,o,g,r,a,m){i['ProfitWellObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);
})(window,document,'script','https://dna8twue3dlxq.cloudfront.net/js/profitwell.js','profitwell');
profitwell('auth_token', 'adb4f1c8759eba921dcb25eaef817813'); 
profitwell('user_id', '0');
</script>
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"5accb192ce","applicationID":"262648780","transactionName":"M1FVN0JUW0RSVxBcWQobdBZDQVpaHHcLW0IWW1sPVUdqZ1tbEFoZShoYE1haQVgcXQpRUxwb","queueTime":0,"applicationTime":169,"atts":"HxZWQQpOSEo=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>