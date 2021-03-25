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

  if(Auth::check())
{
  $check = Cart::where('user_id',Auth::user()->id)
      ->where('token', session()->getId())
      ->where('upload_id',$image->id)->first();
}
else
{
  $check = false;
}
  
?>

<html itemscope="" itemtype="http://schema.org/Product" class="wf-museosans-n1-active wf-museosans-n3-active wf-museosans-i3-active wf-museosans-n5-active wf-museosans-n7-active wf-museosans-i7-active wf-museosans-n9-active wf-active" lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Picture+254 ~ Stock Album</title>
    <script type="text/javascript" src="https://bam.nr-data.net/1/4eb2c2ee8f?a=400093202&amp;sa=1&amp;v=1130.54e767a&amp;t=Unnamed%20Transaction&amp;rst=6675&amp;ref=https://www.twenty20.com/&amp;be=2370&amp;fe=5544&amp;dc=4275&amp;af=err,xhr,stn,ins,spa&amp;perf=%7B%22timing%22:%7B%22of%22:1615182365837,%22n%22:0,%22f%22:0,%22dn%22:13,%22dne%22:268,%22c%22:269,%22s%22:323,%22ce%22:715,%22rq%22:715,%22rp%22:2129,%22rpe%22:2129,%22dl%22:2192,%22di%22:4273,%22ds%22:4274,%22de%22:4285,%22dc%22:5522,%22l%22:5522,%22le%22:5548%7D,%22navigation%22:%7B%7D%7D&amp;jsonp=NREUM.setToken"></script><script type="text/javascript" async="" src="https://cdn.wootric.com/wootric-sdk.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://cdn.amplitude.com/libs/amplitude-5.2.2-min.gz.js"></script><script src="https://js-agent.newrelic.com/nr-spa-1130.min.js"></script><script type="text/javascript" async="" src="https://cdn.segment.com/analytics.js/v1/l4o2od3lg2/analytics.min.js"></script><script src="//bat.bing.com/bat.js" async=""></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

    <link rel="stylesheet" href="https://d2xoeue6rlgwc6.cloudfront.net/assets/twenty20-digital-36167e810d12dc621d5f088705a4db12.css">
</head>
   <body class="ember-application photo photo-index" style="padding-top: 62px; margin-top: 0px;">
      <script type="text/javascript" src="//use.typekit.net/ryt2nll.js"></script>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
      <!-- segment -->


      <script src="https://d2xoeue6rlgwc6.cloudfront.net/assets/vendor-88c00f99a64532dd87dee9ed54a90886.js"></script>

      <script src="https://d2xoeue6rlgwc6.cloudfront.net/assets/twenty20-digital-de55146a908b80d7fc58e13c95c3c8d5.js"></script>

      <noscript>
         <div class="js-off-message" style="margin: 20% auto; display: block; width: 100%; max-width: 600px; background: #fff; padding: 3%;">
            <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color1@2x.png">
            <h3>Your JavaScript is Disabled!</h3>
            <p>Picture+254 is a modern website that requires JavaScript to be turned on in order to access.  Simply go to your browser preferences and turn JavaScript on, then refresh this page.</p>
         </div>
      </noscript>

      <div id="ember-bootstrap-wormhole"></div>

      <div id="ember652" class="ember-view">
         <div class="ember-view-wrap">
            <div id="ember29503" class="navbar-zone top-bar-component ember-view">
				
				@include('stockNav')
            </div>
            <div id="ember29625" class="keypress-dispatcher-component ember-view"></div>
            <div class="preview">
               <div class="preview-main-container">
                  <a href="/collections/d1b72956-c497-4832-87cb-751f6f9d52a5" class="close-control text-link dark caps hidden-xs" data-ember-action="" data-ember-action-29626="29626">×</a><!----><a style="" href="/photos/233bd69a-9749-4d6d-bde9-441dfcf4f7bd?t20p=photo.index&amp;t20s=next-photo" id="ember29627" class="next-arrow visible-md visible-lg link-to-component ember-view"> </a><!---->
                  <div class="container">
                     <div class="row">
                        <div class="col-md-8 col-sm-12">
                           <div class="row">
                              <div style="float: left; margin: 0 0 10px 15px;">
                                 <a style="" href="/" id="ember29628" class="link-to-component ember-view">
                                    <div id="ember29629" class="inline-block hexagon-avatar-container hexagon-avatar-component ember-view">
                                       <svg width="0" height="0">
                                          <clipPath id="hexagonClip" clipPathUnits="objectBoundingBox">
                                             <polygon points=".5 .0, .95 .25, .95 .76, .50 1.0, .05 .75, .05 .25"></polygon>
                                          </clipPath>
                                       </svg>
                                       <img src="{{ asset('uploads') }}/{{ $image->user->pic }}" style="clip-path: url(#hexagonClip);" class="avatar hexagon hexagon-medium">

                                       {{-- <img src="{{ asset('images/logo-.png') }}" style="clip-path: url(#hexagonClip);" class="avatar hexagon hexagon-medium"> --}}
                                    </div>
                                 </a>
                              </div>
                              <div style="padding-left: 75px;">
                                 <p style="margin: 5px 0 0px;" class="text-dark small">Photo by</p>
                                 <p style="margin-top: 0px; line-height: 10px;" class="light-text"><a style="" href="/" id="ember29634" class="link-to-component ember-view">{{ $image->user->name }}</a></p>
                              </div>
                           </div>
                           <div class="img-preview">
                              <div class="img-con-inner">
                                 <div id="ember29635" class="preview-photo-component ember-view">
                                    <!----><img src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width: 100%;" alt="stock photo, engineer, design, web, website, code, develop, program, software, developer, programmer"><!---->
                                 </div>
                              </div>
                              <div class="engage">
                                 <span id="ember29636" class="gated-action-component ember-view">
                                 	<button data-id="{{ $image->id }}" id="ember29637" class="btn btn-link like_image text-light only-icon love-button-component ember-view"><i class="t20icon t20icon-love-outline" id="like_main"></i>
                                 	</button>
                                 </span>
                                 <span id="ember29638" class="gated-action-component ember-view"><button style="vertical-align: bottom; margin-left: 0.5em;" class="btn btn-link text-light" data-ember-action="" data-ember-action-29639="29639"><span id="likes_count">{{ count($image->votes) }}</span> </button></span><!---->
                              </div>
                              <div class="row">
                                 <div class="col-md-12 extended-photo-details clearfix">
                                    <div style="max-width: 725px; word-wrap: break-word;">
                                       <!---->
                                       <div class="meta-group">
                                          <!---->
                                       </div>
                                       <!---->
                                    <!--    <div class="meta-group">
                                          <div class="keyword-list">
                                             <a style="" href="/search/engineer?t20p=photo.index" id="ember29645" class="text-link dark small link-to-component ember-view"></a><span class="comma">, </span><a style="" href="/search/design?t20p=photo.index" id="ember29647" class="text-link dark small link-to-component ember-view"></a><span class="comma">, </span><a style="" href="/search/web?t20p=photo.index" id="ember29649" class="text-link dark small link-to-component ember-view"></a><span class="comma">, </span><a style="" href="/search/website?t20p=photo.index" id="ember29651" class="text-link dark small link-to-component ember-view">website</a><span class="comma">, </span><a style="" href="/search/code?t20p=photo.index" id="ember29652" class="text-link dark small link-to-component ember-view">code</a><span class="comma">, </span><a style="" href="/search/develop?t20p=photo.index" id="ember29654" class="text-link dark small link-to-component ember-view">develop</a><span class="comma">, </span><a style="" href="/search/program?t20p=photo.index" id="ember29656" class="text-link dark small link-to-component ember-view">program</a><span class="comma">, </span><a style="" href="/search/software?t20p=photo.index" id="ember29657" class="text-link dark small link-to-component ember-view">software</a><span class="comma">, </span><a style="" href="/search/developer?t20p=photo.index" id="ember29659" class="text-link dark small link-to-component ember-view">developer</a><span class="comma">, </span><a style="" href="/search/programmer?t20p=photo.index" id="ember29661" class="text-link dark small link-to-component ember-view">programmer</a><span class="comma">, </span>
                                         < </div>
                                       </div> --> 
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                           <div class="main">
                              <div id="ember29662" class="photo-details-component ember-view">
                                 <h6 class="text-dark">
                                    Stock Photo Details
                                 </h6>
                                 <hr class="dark slim">
                                 <ul class="photo-details">
                                    <!-- <li>
                                       <i class="t20icon t20icon-clock text-medium"></i>
                                       <span>
                                       Commercial Use:
                                       </span>
                                       <span class="strong">
                                       Pending Review
                                       </span>
                                       <span id="ember29675" class="inline-divider gated-action-component ember-view">            <a href="#" data-ember-action="" data-ember-action-29676="29676">
                                       Get it reviewed today
                                       </a>
                                       </span>    
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-check text-success"></i>
                                       <span>
                                       Editorial Use:
                                       </span>
                                       <span class="strong">
                                       OK
                                       </span>
                                       <span class="margin10l">
                                       <a data-content="This photo is available for descriptive or newsworthy uses like blog posts, social media, and internal presentations. <a href='https://help.twenty20.com/hc/en-us/articles/204769238?utm_source=t20_web&amp;utm_medium=route' target='_blank'>Learn more</a>" data-html="true" data-placement="right" data-trigger="hover" data-toggle="popover" id="ember29693" class="t20icon t20icon-info-circle popover-link-component ember-view" data-original-title="" title=""></a>
                                       </span>
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-profile"></i>
                                       <span>
                                       Model Release:
                                       </span>
                                       <span class="strong">
                                       Pending
                                       </span>
                                    </li>
                                     -->
                                    <li>
                                       <i class="t20icon t20icon-license text-light"></i>
                                       <span>
                                       Source:
                                       </span>
                                       <a style="" href="/royalty-free-images?t20p=photo.index" id="ember29702" class="link-to-component ember-view">      Picture+254
                                       </a>
                                      <!--  <span class="margin10l">
                                       <a href="#" class="t20icon t20icon-info-circle" data-ember-action="" data-ember-action-29707="29707">
                                       </a>
                                       </span>  -->
                                    </li> 
                                      <li>
                                          <i class="t20icon t20icon-license text-light"></i>
                                          <span>
                                          License type:
                                          </span>

                                          <a style="" href="/royalty-free-images?t20p=photo.index" id="ember6967" class="link-to-component ember-view">      Rights managed
                                          </a>
                                         {{--  <span class="margin10l">
                                          <a href="#" class="t20icon t20icon-info-circle" data-ember-action="" data-ember-action-6972="6972">
                                          </a>
                                          </span> --}}
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-photo text-light"></i>
                                       <span>

                                       File Size: 2000px not larger than 10 MB
    </span>
                                       </span>
                                    </li>
                                    <li>
                                       <i class="t20icon t20icon-photo-tag text-light"></i>
                                       <span>
                                       Photo ID: photo id here
                                       </span>
                                       <span class="strong">

                                       p254-{{ $image->id }}

                                       </span>
                                    </li>
                                 </ul>
                                 <hr class="dark slim">
                              </div>
                              <div id="ember29712" class="license-photo-component license-photo-component ember-view">
                                 <!---->
                                 <div>
                                    <div class="size-con">
                                       <label class="ember-radio-button  radio-btn-white radio-button-component">
                                          <input aria-checked="false" type="radio" value="small" id="ember29715" class="radio-button-input-component ember-view">
                                          <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>Extra small</span>
                                          	<span class="pull-right">$<span class="price">40</span>.00</span>
                                          	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">509 x 339 px(7.07x4.71in) 72dpi<span class="inline-divider">0.2 MP</span></div>
								  </label>
								</div><div class="size-con">  <label class="ember-radio-button  radio-btn-white radio-button-component">
								    <input aria-checked="false" type="radio" value="medium" id="ember29722" class="radio-button-input-component ember-view">

								    <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>small</span>
								    	<span class="pull-right">$<span class="price">120</span>.00</span>
								    	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">727 x 484 px<span class="inline-divider">(10.10 x 6.72 in)72dpi</span><span class="inline-divider">0.4 MP</span></div>
								  </label>
								</div>
								<div class="size-con">  <label class="ember-radio-button radio-btn-white radio-button-component">
								    <input aria-checked="true" type="radio" value="medium" id="ember29722" class="radio-button-input-component ember-view">

								    <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>medium</span>
								    	<span class="pull-right">$<span class="price">350</span>.00</span>
								    	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">2125 x 1416 px<span class="inline-divider">(7.08 x 4.72in)300 dpi</span><span class="inline-divider">3.0 MP</span></div>
								  </label>
								</div>
								<div class="size-con">  <label class="ember-radio-button checked radio-btn-white radio-button-component">
								    <input type="radio" value="large" id="ember29725" class="radio-button-input-component ember-view">

								    <div class="desc-sizename caps text-bright text-large-ish semi-bold"><span>large</span>
								    	<span class="pull-right">$<span class="price">450</span>.00</span>
								    	<span class="pull-right"><!----></span></div><div class="desc-size small text-medium">6720 x 4480 px<span class="inline-divider">(22.40 x 14.93 in) 300 dpi </span><span class="inline-divider">30.1 MP</span></div>
								  </label>
                                 </div>
                                 </div>
                                 <div class="inline-btn-group" style="background: #fff; padding: 10px; border-radius: 3px;">
                                 	<span style="color: #000; margin:20px; background: #fff; text-align: center; font-size: 20px;">
                                 		$ <span id="dis_pay">450</span>.00
                                 	</span>
                                 </div>
							  @if(!$check)
								@if(Auth::check())
                                 <div class="purchase-con" id="add_to_cart_div" style="height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button id="add_to_cart" style="white-space: normal; height: 100%;" data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732" data-id="{{ $image->id }}">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text"><i class="fa fa-shopping-cart align-sub"></i>Add To Cart</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 @else
                                 <div class="purchase-con" style="height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button id="login"  data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732" data-id="{{ $image->id }}" style="white-space: normal; height: 100%; align-items: center;">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text" style=""><i class="fa fa-shopping-cart align-sub" ></i>Add To Cart</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 @endif
                                 @else
                                 <div class="purchase-con" style="dislay: none; height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button onclick="window.location='{{ url("cart/view-cart") }}'" id="checkout" style="white-space: normal; height: 100%;" data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text"><i class="fa fa-shopping align-sub"></i>Checkout</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 @endif

                                 <div class="purchase-con" id="checkout_div" style="display: none; height: 50px;">
                                    <div id="ember29726" class="gated-action-component ember-view">
                                       <div id="ember29731" class="loading-button-component ember-view">
                                          <button onclick="window.location='{{ url("cart/view-cart") }}'" id="checkout" style="white-space: normal; height: 100%;" data-test="license-button" class="btn btn-loading   btn-primary btn-block btn-lg has-icon" data-ember-action="" data-ember-action-29732="29732">
                                             <div id="ember29733" class="loading-spinner loading-spinner-component ember-view"></div>
                                             <div class="btn-loading-text"><i class="fa fa-shopping align-sub"></i>Checkout</div>
                                          </button>
                                       </div>
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="photo-actions">
                                 <div class="inline-btn-group"><span id="ember29777" class="gated-action-component ember-view">
                                 	<button data-id="{{ $image->id }}" id="ember29778" class="btn btn-secondary like_image only-icon love-button-component ember-view"><i class="t20icon t20icon-love-outline"></i></button></span><span id="ember29779" class="gated-action-component ember-view"><button style="white-space: normal;" class="btn btn-secondary btn-stretch" data-ember-action="" data-ember-action-29780="29780"><i class="t20icon t20icon-collect align-sub"></i>Add to Wishlist</button></span>
                                 </div>
                                 {{-- <div id="ember29785" class="gated-action-component ember-view">
                                    <div id="ember29790" class="loading-button-component ember-view">
                                       <button style="white-space: normal;" class="btn btn-loading   btn-link btn-block text-light" data-ember-action="" data-ember-action-29791="29791">
                                          <div id="ember29792" class="loading-spinner loading-spinner-component ember-view"></div>
                                          <div class="btn-loading-text"><i class="t20icon t20icon-download"></i>Download Comp</div>
                                       </button>
                                    </div>
                                 </div> --}}
                                 <!---->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="preview-details-container">
                  <div style="margin-top: 10px;" class="container">
                     <div class="row">
                        <div class="col-lg-12">
                           <div id="ember29793" class="collection-photo-grid-component ember-view">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <h6>More images from the Author:</h6>
                                 </div>
                              </div>
                              <div class="row">

                                    @foreach($authorImages as $image)
                                 <div class="col-xs-12 col-sm-3">
                                    <div style="" id="ember30056" class="photo-card linked-collection-component ember-view">
                                       <a style="" href="{{ route('image-details',$image->id) }}" id="ember30057" class="link-to-component ember-view">
                                          <div style="position: relative; background-size: cover !important; width:100%; height:100%; ; background: url({{ asset('uploads') }}/{{ $image->imageName }}) no-repeat center center;" id="ember30058" class="photo-background-component photo-background-component ember-view">
                                             <div class="overlay-container ">
                                                <div class="overlay-centered">
                                                   {{-- <h5 class="title-over-image">Developer Life</h5> --}}
                                                   {{-- <p style="color: white;" class="pannel-head">915 photos</p> --}}
                                                </div>
                                             </div>
                                             <span class="dark-overlay-block"></span>
                                          </div>
                                       </a>
                                    </div>
                                 </div>

                               @endforeach
                              </div>
                              <!----><!---->
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div id="ember29802" class="similar-photos similar-photos-component ember-view">
                              <!---->
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div id="ember29807" class="other-photos-by-artist other-photos-by-artist-component ember-view">
                              <a style="" href="/Wutzkoh?t20p=photo.index&amp;t20s=other-artist-photos" id="ember29808" class="link-to-component ember-view">
                                 <h6 style="padding: 0px 0px 10px;margin-top: 30px;"><span style="color: #222222;">Related images</span></h6>
                              </a>
                              <div style="position: relative;">

                              @foreach($catImages as $imag)
                                 <a style="" href="{{ route('image-details',$imag->id) }}" class="link-to-component ember-view">
                                    <div style="height: 124px; width: 124px; display: inline-block; cursor: pointer; padding: 3px;" data-ember-action="" data-ember-action-30070="30070"><span id="ember30071" class="image-loader image-loader-component ember-view"><img src="{{ asset('uploads') }}/{{ $imag->imageName }}" style="width: 100%; height: 100%;"></span></div>
                                 </a>

                              @endforeach

                                 <!---->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-8">
                           <div id="ember29813" class="photo-comments-component ember-view">
                              <div class="photo-comments">
                                 <h6 style="padding: 0px 0px 10px;">Comments:</h6>
                                 <div id="ember29818" class="pull-left commenter inline-block hexagon-avatar-container hexagon-avatar-component ember-view">
                                    <svg width="0" height="0">
                                       <clipPath id="hexagonClip" clipPathUnits="objectBoundingBox">
                                          <polygon points=".5 .0, .95 .25, .95 .76, .50 1.0, .05 .75, .05 .25"></polygon>
                                       </clipPath>
                                    </svg>
                                    <img src="https://res.cloudinary.com/twenty20/image/upload/t_avatar_240x240/avatars/sade3-1589781771.jpg" style="clip-path: url(#hexagonClip);" class="avatar hexagon hexagon-medium"><!---->
                                 </div>
                                 <div class="form-group"><input type="text" placeholder="Add a comment..." id="ember29823" class="form-control input-small ember-text-field -text-field-component ember-view"><button type="submit" class="btn btn-comment" data-ember-action="" data-ember-action-29824="29824"><i class="comment-icon"></i></button></div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="container" style="text-align: center;">
        <div class="wfont" style="font-size:14px;font-family:'Montserrat', sans-serif;">&copy; <script>document.write(new Date().getFullYear());</script> Picture+254. All rights reserved.
        </div>
 </div>
           <!--  <div id="ember29839" class="page-footer-component ember-view">
               <div id="footer">
                  <div style="padding: 10px 0;" class="container-fluid">
                     <div class="col-sm-2 col-sm-offset-1 col-xs-6">
                        <p class="pannel-head text-medium">Explore</p>
                        <ul class="small">
                           <li><a style="" href="/home/signature?t20p=photo.index&amp;t20s=footer" id="ember29844" class="text-link dark link-to-component ember-view">Signature Collection</a></li>
                           <li><a style="" href="/home/following?t20p=photo.index&amp;t20s=footer" id="ember29849" class="text-link dark link-to-component ember-view">Following Feed</a></li>
                           <li><a style="" href="/discover?t20p=photo.index&amp;t20s=footer" id="ember29854" class="text-link dark link-to-component ember-view">Collections</a></li>
                           <li><a style="" href="/challenges?t20p=photo.index&amp;t20s=footer" id="ember29859" class="text-link dark link-to-component ember-view">Challenges</a></li>
                           <li><a style="" href="/social-media-marketing?t20p=photo.index&amp;t20s=footer" id="ember29864" class="text-link dark link-to-component ember-view">Social Media Marketing Calendar</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-2 col-xs-6">
                        <p class="pannel-head text-medium">About</p>
                        <ul class="small">
                           <li><a style="" href="/customers?t20p=photo.index&amp;t20s=footer" id="ember29873" class="text-link dark link-to-component ember-view">Customers</a></li>
                           <li><a style="" href="/pricing?t20p=photo.index&amp;t20s=footer" id="ember29878" class="text-link dark link-to-component ember-view">Pricing</a></li>
                           <li><a style="" href="/legal?t20p=photo.index&amp;t20s=footer" id="ember29883" class="text-link dark link-to-component ember-view">Our License</a></li>
                           <li><a style="" href="/jobs?t20p=photo.index&amp;t20s=footer" id="ember29888" class="text-link dark link-to-component ember-view">Jobs</a></li>
                           <li><a style="" href="/royalty-free-images?t20p=photo.index&amp;t20s=footer" id="ember29893" class="text-link dark link-to-component ember-view">Royalty-free images</a></li>
                        </ul>
                     </div>
                     <div class="clearfix visible-xs-block"></div>
                     <div class="col-sm-2 col-xs-6">
                        <p class="pannel-head text-medium">Support</p>
                        <ul class="small">
                           <li><a style="" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fphotos%2F63fbadf6-ca76-471e-be1d-c3b9dd68c271" id="ember29902" class="text-link dark support-link-component ember-view">FAQ</a></li>
                           <li><a style="" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fphotos%2F63fbadf6-ca76-471e-be1d-c3b9dd68c271" id="ember29907" class="text-link dark support-link-component ember-view">Contact Us</a></li>
                           <li><a style="" href="/legal/user-terms?t20p=photo.index&amp;t20s=footer" id="ember29912" class="text-link dark link-to-component ember-view">User Terms</a></li>
                           <li><a style="" href="/legal/contributor-terms?t20p=photo.index&amp;t20s=footer" id="ember29917" class="text-link dark link-to-component ember-view">Contributor Terms</a></li>
                           <li><a style="" href="/legal/privacy?t20p=photo.index&amp;t20s=footer" id="ember29922" class="text-link dark link-to-component ember-view">Privacy Policy</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-2 col-xs-6">
                        <p class="pannel-head text-medium">Connect</p>
                        <ul class="social-connect small">
                           <li><a href="http://blog.twenty20.com" class="text-link dark">Blog</a></li>
                           <li><a href="http://instagram.com/twenty20" target="_blank"><i class="icon-ig-foot"></i>Instagram</a></li>
                           <li><a href="http://facebook.com/twenty20" target="_blank"><i class="icon-fb-foot"></i>Facebook</a></li>
                           <li><a href="http://twitter.com/twenty20app" target="_blank"><i class="icon-tw-foot"></i>Twitter</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-3 col-xs-12">
                        <a style="color: white; border: 2px solid white; width: 170px; height: 50px; line-height: 28px;" target="_blank" href="https://help.twenty20.com?utm_source=t20_web&amp;utm_referrer=https%3A%2F%2Fwww.twenty20.com%2Fphotos%2F63fbadf6-ca76-471e-be1d-c3b9dd68c271" id="ember29935" class="btn btn-default support-link-component ember-view">Contact Us</a><a style="margin-top: 6%;" href="https://itunes.apple.com/us/app/twenty20/id577323200?mt=8" target="_blank" class="appstore-badge"></a>

                     </div>
                  </div>
                  <div class="footer-base">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                              <div class="t20-ion"></div>
                              <p class="small">Created in sunny southern California. Appreciated by people around the world. Committed to making you smile.<br>Copyright © 2020 Twenty20, Inc. All rights reserved. All photos © their respective owners.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
<<<<<<< HEAD
            </div>
<<<<<<< HEAD
            <div id="ember27118" class="elements-welcome-component ember-view">
               <div id="elements-welcome-modal" aria-hidden="false" role="dialog" tabindex="-1" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content rounded-corners">
                        <div class="modal-body padding40">
                           <div class="visible-xs-block flex-column align-items-center justify-content-center margin40b">
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              </div>
                              <h3 class="text-medium margin0tb margin20lr normal text-center">+</h3>
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                              </div>
                           </div>
                           <div class="hidden-xs flex-row align-items-center margin40b">
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              <h3 class="text-medium margin0tb margin20lr normal">+</h3>
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                           </div>
                           <h3 class="normal margin40b margin0t">
                              <span class="normal">You are now signed in to</span> Twenty20 <span class="normal">with your Envato account.</span>
                           </h3>
                           <h4 class="normal margin20b">
                              <!---->
                              <!---->        
                    {{--        </h4> --}}
                           <!---->
                           <!---->
                          {{--  <div class="form-group margin30b">
                              <div class="checkbox">
                                 <label class="checked">
                                 <input type="checkbox" id="ember27123" class="ember-checkbox -checkbox-component ember-view">
                                 <span class="normal text-dark">
                                 Send me tips, trends, freebies, updates &amp; offers. You can unsubscribe at any time.
                                 </span>
                                 </label>
                              </div>
                           </div>
                           <div class="text-center">
                              <div id="ember27132" class="loading-button-component ember-view">
                                 <button style="" class="btn btn-loading   btn-primary" data-ember-action="" data-ember-action-27133="27133">
                                    <div id="ember27134" class="loading-spinner loading-spinner-component ember-view"></div>
                                    <div class="btn-loading-text">
                                       <!---->Start exploring
                                    </div>
                                 </button>
                              </div>
                           </div>
                           <p class="small text-dark margin10t margin0b text-center">
                              By clicking this button, I agree to Twenty20's
                              <a style="" href="/legal/user-terms?t20p=photo.index" id="ember27139" class="link-to-component ember-view">            User Terms
                              </a>
                              and
                              <a style="" href="/legal/contributor-terms?t20p=photo.index" id="ember27148" class="link-to-component ember-view">            Contributor Terms</a>.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="ember27153" class="envato-merge-component ember-view">
               <div id="envato-merge-modal" aria-hidden="false" role="dialog" tabindex="-1" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content rounded-corners">
                        <div class="modal-body padding40">
                           <div class="visible-xs-block flex-column align-items-center justify-content-center margin40b">
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              </div>
                              <h3 class="text-medium margin0tb margin20lr normal text-center">+</h3>
                              <div class="text-center">
                                 <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                              </div>
                           </div>
                           <div class="hidden-xs flex-row align-items-center margin40b">
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/envato/elements-logo.png" alt="Envato elements logo" style="height: 22px;">
                              <h3 class="text-medium margin0tb margin20lr normal">+</h3>
                              <img src="https://dp3ogl28gtjh0.cloudfront.net/digital/logos/logo-header-color@2x.png" alt="Twenty20 logo" style="height: 30px;">
                           </div>
                           <h3 class="normal margin40b margin0t">
                              We think you may already have an account with Twenty20.
                           </h3>
                           <h5 class="normal margin20b">
                              Sign in with your Twenty20 credentials to merge your Envato and Twenty20 accounts
                           </h5>
                           <div class="container-fluid padding0lr-as">
                              <div class="flex-row justify-content-center">
                                 <div class="col-xs-12 col-sm-10 padding0lr-as">
                                    <!---->
                                    <form data-ember-action="" data-ember-action-27162="27162">
                                       <div class="form-group">
                                          <label for="email-verfication-input">
                                          Email
                                          </label>
                                          <input type="email" required="" id="ember27167" class="form-control ember-text-field -text-field-component ember-view">
                                       </div>
                                       <div class="form-group">
                                          <label for="password-verfication-input">
                                          Password
                                          </label>
                                          <div id="ember27176" class="password-input-wrapper password-input-component ember-view"><input name="password" type="password" required="" placeholder="Enter your password" id="password-verification-input" class="form-control ember-text-field -text-field-component ember-view"><button type="button" class="btn btn-link password-input-toggle"><span class="text-light t20icon t20icon-show-password"></span></button></div>
                                          <div class="margin10t margin50b">
                                             <a href="#" class="pull-right small " data-ember-action="" data-ember-action-27178="27178">
                                             Forgot Your Password?
                                             </a>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div id="ember27187" class="loading-button-component ember-view">
                                             <button style="" type="submit" class="btn btn-loading   btn btn-primary btn-block">
                                                <div id="ember27188" class="loading-spinner loading-spinner-component ember-view"></div>
                                                <div class="btn-loading-text">
                                                   <!---->Sign In
                                                </div>
                                             </button>
                                          </div>
                                       </div>
                                    </form>
                                    <div class="flex-row justify-content-center margin30t">
                                       <div id="ember27189" class="click-tracker-component ember-view">                        <a href="#" class="small " data-ember-action="" data-ember-action-27190="27190">
                                          No thanks, don't merge my accounts.
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!---->
            <section id="ember27195" class="notifications-list notifications-list-component ember-view">
               <!---->
            </section>
            <div id="ember27196" class="collect-modal-component ember-view">
               <!---->
            </div>
            <div id="ember27197" class="update-credit-card-modal-component ember-view">
               <div id="update-credit-card-modal" aria-hidden="false" role="dialog" tabindex="-1" class="modal fade">
                  <div class="modal-dialog modal-md">
                     <div class="modal-content">
                        <div style="padding: 20px;" class="modal-header">
                           <button style="position: relative; top: 4px;" class="close" data-ember-action="" data-ember-action-27198="27198">×</button>
                           <h4 class="margin0tb">Please update your credit card.</h4>
                        </div>
                        <div class="modal-body clearfix text-center">
                           <img style="height: 100px;" src="https://dp3ogl28gtjh0.cloudfront.net/digital/icons/credit-card-icon@2x.png" class="margin20b">
                           <h5 class="text-center">There is a issue processing your credit card.</h5>
                           <p class="text-center">Please take a moment and update your information.</p>
                        </div>
                        <div class="modal-footer">
                              
                           <div class="row">
                              <div class="col-sm-6">
                                 <p style="line-height: 18px; font-size: 14px;" class="text-dark text-left">Note: After updating your credit card, invoices will be updated within 1 hour.</p>
                              </div>
                              <div class="col-sm-6"><button class="btn btn-sm btn-primary" data-ember-action="" data-ember-action-27199="27199">Update credit card</button></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <div id="wh-modals"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>
      </div>
      <div class="autocomplete-wrapper hidden" style="position: fixed; z-index: 1000;">
         <div class="autocomplete-wait hidden">
            <p class="autocomplate-wait-message"><i class="autocomplete-spinner"></i>&nbsp;thinking...</p>
         </div>
         <div class="autocomplete-results hidden"></div>

      </div>
            </div> 


      <script type="text/javascript">

var image_size = '450';

  $('.size-con').click(function(event) {

        image_size = $(this).find('.price').find('span').text();
         $('label').removeClass("checked");
         $(this).find('label').addClass("checked");

        $('#dis_pay').text($(this).find('.price').text());
  });


      $("#add_to_cart").click(function(){

      
        $.ajax({
        url: '{{ route('add-cart') }}',
        type: 'POST',
        data: {

          upload_id: $(this).data('id'),
          _token: '{{csrf_token()}}',
          size: $("#dis_pay").text(),

        },
        success: function(response){
          if(response !="")
          {
            
            $('#cart_count').html(response);

            // $('#my_alert').css("display","block");

        //     setTimeout(function(){
        //          $('#my_alert').fadeOut('fast');
            
        // }, 2000);

          $('#checkout_div').css("display","block");
          
          $('#add_to_cart_div').css("display","none");
        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          alert(errorThrown);
        }
      });

        return false;
    });



  $(".like_image").click(function(){
             
          $upload = $(this);

          var image_id = $(this).data('id');

          console.log("image-id "+image_id);


      $.ajax({
        url: '{{ route('add-like') }}',
        type: 'POST',
        data: {
          'liked': 1,
          upload_id: image_id,
          _token: '{{csrf_token()}}'
        },
        success: function(response){
          if(response !="")
          {

            $('#likes_count').text(response);
            
             $("#like_main").removeClass("t20icon-love-outline");
	          $("#like_main").addClass("t20icon-love");
	          $("#like_main").css("color", "#ff00ff");

        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          if(errorThrown == "Unauthorized")
          {
            window.location.href =  '{{ route('modall') }}';
          }
          // alert('An error occured');
        }
      });

  });

  // $("#login").click(function(){
    
  // 		Swal.fire({
  //          title: 'Unauthorized',
  //          text: 'Please, login first!',
  //          icon: 'error',
  //      })

  // });

  $(document).ready(function() {
                  $("#login").click(function(){

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

</script>

   </body>
</html>
