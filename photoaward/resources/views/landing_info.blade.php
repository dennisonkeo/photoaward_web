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
      ->where('upload_id',$upload->id)->first();
}
else
{
  $check = false;
}
  
?>

<script src="{{ asset('js/right_click.js') }}"></script>
<html class="en-us js flexbox flexboxlegacy canvas canvastext no-touch rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients csstransitions fontface generatedcontent video localstorage sessionstorage no-display-runin boxsizing lastchild targetselector gr__gettyimages_com" lang="en-us" prefix="og: http://ogp.me/ns#">

<head>
  <style type="text/css"></style>
  <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}
</style>
<style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid {
        padding-top: 56.25%
      }
</style>

<link as="style" crossorigin="" href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&amp;subset=latin-ext" rel="preload">

<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

<link rel="stylesheet" media="all" href="https://www.gettyimages.com/asset-detail/assets/packs/css/getty-b136ca28.css">

<link href="//metrics.gettyimages.com" rel="preconnect"><link href="//media.gettyimages.com" rel="preconnect">

<link href="https://spectrum.gettyimages.com:443/v3" rel="preconnect">

<script async="" src="https://s.pinimg.com/ct/lib/main.532239b0.js">
  
</script>
<script async="" src="//px.airpr.com/airpr.js"></script>

<script async="" src="//ad.doubleclick.net/adj/N5192.197812NSO.CODESRV/B8309251.112418102;dcadv=4533558;sz=1x2;ord=224033606879.10867?"></script>

<script async="" src="//d.impactradius-event.com/A218913-dc0b-43b5-92cf-b5abffdabaa21.js"></script>

<script async="" src="https://img.en25.com/i/elqCfg.min.js"></script>

<script src="https://connect.facebook.net/signals/config/106261433049264?v=2.9.11&amp;r=stable" async=""></script>

<script src="https://connect.facebook.net/signals/config/1593519234292496?v=2.9.11&amp;r=stable" async=""></script>

<script src="https://connect.facebook.net/signals/config/1033699336722348?v=2.9.11&amp;r=stable" async=""></script>

<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>

<script type="text/javascript" async="" src="https://sjs.bizographics.com/insight.min.js"></script>

<script type="text/javascript" async="" src="https://s.pinimg.com/ct/core.js"></script>

<script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script>

<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>

<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-P4WB37"></script>

<script>window.renderStart = new Date().getTime();</script>

<title>Picture254</title>

<link href="https://www.gettyimages.com/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="x-default" rel="alternate">

<link href="https://www.gettyimages.com.au/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-AU" rel="alternate">

<link href="https://www.gettyimages.be/detail/foto/pregnant-businesswoman-looking-away-at-desk-royalty-free-beeld/682897819?language=fr" hreflang="fr-BE" rel="alternate">

<link href="https://www.gettyimages.be/detail/foto/pregnant-businesswoman-looking-away-at-desk-royalty-free-beeld/682897819" hreflang="nl-BE" rel="alternate">

<link href="https://www.gettyimages.com.br/detail/foto/pregnant-businesswoman-looking-away-at-desk-imagem-royalty-free/682897819" hreflang="pt-BR" rel="alternate">

<link href="https://www.gettyimages.ca/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-CA" rel="alternate">

<link href="https://www.gettyimages.ca/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819?language=fr" hreflang="fr-CA" rel="alternate">

<link href="https://www.gettyimages.dk/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-DK" rel="alternate">

<link href="https://www.gettyimages.de/detail/foto/pregnant-businesswoman-looking-away-at-desk-lizenzfreies-bild/682897819" hreflang="de" rel="alternate">

<link href="https://www.gettyimages.es/detail/foto/pregnant-businesswoman-looking-away-at-desk-imagen-libre-de-derechos/682897819" hreflang="es" rel="alternate">

<link href="https://www.gettyimages.fr/detail/photo/pregnant-businesswoman-looking-away-at-desk-image-libre-de-droits/682897819" hreflang="fr" rel="alternate">

<link href="https://www.gettyimages.in/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-IN" rel="alternate"><link href="https://www.gettyimages.ie/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-IE" rel="alternate"><link href="https://www.gettyimages.it/detail/foto/pregnant-businesswoman-looking-away-at-desk-immagine-royalty-free/682897819" hreflang="it" rel="alternate"><link href="https://www.gettyimages.com.mx/detail/foto/pregnant-businesswoman-looking-away-at-desk-imagen-libre-de-derechos/682897819" hreflang="es-MX" rel="alternate"><link href="https://www.gettyimages.nl/detail/foto/pregnant-businesswoman-looking-away-at-desk-royalty-free-beeld/682897819" hreflang="nl" rel="alternate"><link href="https://www.gettyimages.co.nz/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-NZ" rel="alternate"><link href="https://www.gettyimages.no/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-NO" rel="alternate"><link href="https://www.gettyimages.at/detail/foto/pregnant-businesswoman-looking-away-at-desk-lizenzfreies-bild/682897819" hreflang="de-AT" rel="alternate"><link href="https://www.gettyimages.pt/detail/foto/pregnant-businesswoman-looking-away-at-desk-imagem-royalty-free/682897819" hreflang="pt" rel="alternate"><link href="https://www.gettyimages.ch/detail/foto/pregnant-businesswoman-looking-away-at-desk-lizenzfreies-bild/682897819" hreflang="de-CH" rel="alternate"><link href="https://www.gettyimages.ch/detail/foto/pregnant-businesswoman-looking-away-at-desk-lizenzfreies-bild/682897819?language=fr" hreflang="fr-CH" rel="alternate"><link href="https://www.gettyimages.ch/detail/foto/pregnant-businesswoman-looking-away-at-desk-lizenzfreies-bild/682897819?language=it" hreflang="it-CH" rel="alternate"><link href="https://www.gettyimages.fi/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-FI" rel="alternate"><link href="https://www.gettyimages.se/detail/foto/pregnant-businesswoman-looking-away-at-desk-royaltyfri-bild/682897819" hreflang="sv" rel="alternate"><link href="https://www.gettyimages.ae/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-AE" rel="alternate"><link href="https://www.gettyimages.co.uk/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en-GB" rel="alternate"><link href="https://www.gettyimages.com/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" hreflang="en" rel="alternate"><link href="https://www.gettyimages.com/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819?language=es" hreflang="es-US" rel="alternate">

<link href="https://www.gettyimages.hk/detail/%E7%85%A7%E7%89%87/pregnant-businesswoman-looking-away-at-desk-%E5%85%8D%E7%89%88%E7%A8%85%E5%9C%96%E7%89%87/682897819" hreflang="zh-HK" rel="alternate">

<link href="https://www.gettyimages.co.jp/detail/%E5%86%99%E7%9C%9F/pregnant-businesswoman-looking-away-at-desk-%E3%83%AD%E3%82%A4%E3%83%A4%E3%83%AA%E3%83%86%E3%82%A3%E3%83%95%E3%83%AA%E3%83%BC%E3%82%A4%E3%83%A1%E3%83%BC%E3%82%B8/682897819" hreflang="ja" rel="alternate">

<link href="https://www.gettyimages.com/detail/photo/pregnant-businesswoman-looking-away-at-desk-royalty-free-image/682897819" rel="canonical">

<link href="/sign-in?returnurl=%2Fdetail%2Fphoto%2Fpregnant-businesswoman-looking-away-at-desk-royalty-free-image%2F682897819" rel="signin"><link href="/purchase/cart" rel="cart">

<style></style>

<link rel="stylesheet" type="text/css" href="https://www.gettyimages.com/asset-detail/assets/eu_cookie_alert/cookie_alert.css">

<style type="text/css">.backpack.dropzone {
  font-family: 'SF UI Display', 'Segoe UI';
  font-size: 15px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 250px;
  height: 150px;
  font-weight: lighter;
  color: white;
  will-change: right;
  z-index: 2147483647;
  bottom: 20%;
  background: #333;
  position: fixed;
  user-select: none;
  transition: left .5s, right .5s;
  right: 0px; }
  .backpack.dropzone .animation {
    height: 80px;
    width: 250px;
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }
  .backpack.dropzone .title::before {
    content: 'Save to'; }
  .backpack.dropzone.closed {
    right: -250px; }
  .backpack.dropzone.hover .animation {
    animation: sxt-play-anim-hover 0.91s steps(21);
    animation-fill-mode: forwards;
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/hoverstate.png") left center; }

@keyframes sxt-play-anim-hover {
  from {
    background-position: 0px; }
  to {
    background-position: -5250px; } }
  .backpack.dropzone.saving .title::before {
    content: 'Saving to'; }
  .backpack.dropzone.saving .animation {
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saving_loop.png") left center;
    animation: sxt-play-anim-saving steps(59) 2.46s infinite; }

@keyframes sxt-play-anim-saving {
  100% {
    background-position: -14750px; } }
  .backpack.dropzone.saved .title::before {
    content: 'Saved to'; }
  .backpack.dropzone.saved .animation {
    background: url("chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/assets/backpack/dropzone/saved.png") left center;
    animation: sxt-play-anim-saved steps(20) 0.83s forwards; }

@keyframes sxt-play-anim-saved {
  100% {
    background-position: -5000px; } }
</style>

<script async="" type="text/javascript" src="https://www.gettyimages.com/collaboration/assets/packs/js/remote_scripts_minimal-9d651895b5a06c3b90fb.js"></script>



</head>

<body class="asset_detail_container asset-detail-page ng-scope" ng-app="AdpApp" ng-controller="AdpController" data-gr-c-s-loaded="true">

  <div class="content_wrapper">
    <div id="header-wrapper">
      <header id="site-top-header-wrapper">
          <multi-banner-builder gix-experience="true" page-name="asset_detail" class="ng-isolate-scope"><!-- ngRepeat: (banner, message) in banners track by $index -->
        </multi-banner-builder>
      <header-side-panels boards-actions="" class="main-header main-header--full">
        <div class="side-panels__overlay" ng-class="{'is-visible': leftPanelOpen || rightPanelOpen}" ng-click="closePanels()">
          
        </div>

<div class="header__group header__group--left">
  {{-- <div class="header__group-item header__group-item--first">
    <button class="action action--quick text-links--small text-link--highlight-treatment header__link" ng-click="openLeftSidePanel()">

<div class="header__desktop-item header__desktop-label">PICTURE254</div>
</button>
</div> --}}
<div class="header__group-item header__desktop-item">
  <a class="action--quick text-link--highlight-treatment header__link text-links--small" data-nav="nav_Pricing" href="#">PICTURE254</a>
</div>

</div>


<div class="header__group header__group--right">

  <div class="header__group-item header__desktop-item">
    <button class="action action--quick text-link--highlight-treatment header__link text-links--small" ng-click="showBoardsFromHeader()">

<div class="header__desktop-label">WISHLIST</div>
</button></div>

<div class="header__group-item"><a class="action action--quick text-link--highlight-treatment header__link text-links--small" data-nav="nav_Cart" href="/purchase/cart" rel="nofollow">

  <header-cart-count>
    <div class="header__cart-item">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="19.083334px" height="15.9929705px" viewBox="0 0 19.083334 15.9929705" style="enable-background:new 0 0 19.083334 15.9929705;;enable-background:new 0 0 19.083334 15.9929705;" xml:space="preserve" gi-icon="unisporkal/getty/cart">
<g>
	<path d="M7.2031765,13.2391405c-0.7604618,0-1.3768821,0.6164532-1.3768821,1.3768816
		c0,0.7604618,0.6164203,1.3769484,1.3768821,1.3769484s1.3769474-0.6164865,1.3769474-1.3769484
		C8.5801239,13.8555937,7.9636383,13.2391405,7.2031765,13.2391405z">
      
    </path>
	<path d="M15.9432735,13.2391405c-0.7604618,0-1.3768816,0.6164532-1.3768816,1.3768816
		c0,0.7604618,0.6164198,1.3769484,1.3768816,1.3769484s1.3769474-0.6164865,1.3769474-1.3769484
		C17.3202209,13.8555937,16.7037354,13.2391405,15.9432735,13.2391405z">
      
    </path>
	<polygon points="6.3367653,9.9361572 17.3945694,9.9361572 19.083334,3.0468295 4.5916176,3.0468295 3.8198137,0 0,0 0,1.8798136 
		2.3567166,1.8798136 5.0947456,12.6887417 18.227478,12.6887417 18.227478,10.8089275 6.5578427,10.8089275 	">
      
    </polygon>
</g>
</svg><!-- ngIf: !isCartEmpty() --></div>
</header-cart-count>

<div class="header__desktop-item">CART(<span id="cart_count">
                  @if(Auth::check())
                    {{ count($count) }}
                    @else
                      0
                    @endif
                  </span>
                    )

@if(Auth::check())                  </div></a></div>
<div class="header__group-item header__desktop-item header__group-item--last"><a class="text-link--highlight-treatment btn btn--hollow text-links--small header__group-btn" href="{{ route('logout') }}">LOGOUT</a></div>
@else
<div class="header__group-item header__desktop-item header__group-item--last"><a class="text-link--highlight-treatment btn btn--hollow text-links--small header__group-btn" href="#">SIGN IN</a></div>
@endif

<div class="header__group-item header__mobile-item header__group-item--last">
  <a class="action action--quick text-link--highlight-treatment header__link text-links--small" href="#">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13.8264856px" height="15.1456804px" viewBox="0 0 13.8264856 15.1456804" style="enable-background:new 0 0 13.8264856 15.1456804;;enable-background:new 0 0 13.8264856 15.1456804;" xml:space="preserve" gi-icon="unisporkal/getty/user">
<path d="M6.9245057,7.765975c2.1507907,0,3.8913503-1.7421217,3.8913503-3.8881547
	c0-2.1499574-1.7405596-3.8913395-3.8913503-3.8913395c-2.1467619,0-3.8873222,1.7413822-3.8873222,3.8913395
	C3.0371835,6.0238533,4.7777438,7.765975,6.9245057,7.765975z"></path>
<path d="M13.8264856,14.1316967C13.7245445,11.8042355,12.98909,9.1637173,8.579978,9.1637173H5.2730618
	c-4.496666,0-5.2031827,2.7272501-5.2730618,4.9679794v1.0139837h13.8264856V14.1316967z"></path>
</svg>
</a>
</div>

</div>
</header-side-panels>

</header>
</div>
<section class="main_body">
  <div class="site-width">

<div class="adp" gi-spectrum-view="adp">
  <div class="adp__asset adp__element--left">
    <div class="asset-details__asset-preview ng-scope" data-zoom-url="images/pic48.jpg" is360="true" ng-controller="ZoomController" ratio="1.5001338688085677">
  <div class="asset-card__blur-bg" style="background: #f3f3f3; bacground-image: url('https://media.gettyimages.com/photos/pregnant-businesswoman-looking-away-at-desk-picture-id682897819?s=2048x2048');">
  
</div>
<div class="asset-preview__asset-card" ng-class="{'asset-preview__asset-card--anchor-to-top': true } ">

  <div class="asset-card__image-wrapper" ng-click="openModal()">

    <img alt="" class="asset-card__image" gi-image-loaded="" gi-track-comp-download="" src="{{ asset('uploads') }}/{{ $upload->imageName }}" title="">
    <div class="asset-card__zoom-in">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24.7945232 25.0022812" gi-icon="image-zoom">
<g>
  <polygon class="st0" points="16.2864723,0 16.2864723,1.6511407 21.9761257,1.6511407 14.9384699,8.6894503 16.1058788,9.8568592 
    23.1433811,2.8187001 23.1433811,8.5088568 24.7945232,8.5088568 24.7945232,0   "></polygon>
  <polygon class="st0" points="8.5088568,23.1437855 2.8185489,23.1437855 9.8568592,16.1054764 8.6894503,14.9380665 
    1.6511407,21.9763756 1.6511407,16.286068 0,16.286068 0,24.7949257 8.5088568,24.7949257  "></polygon>
</g>
</svg>
</div>
</div>

<div class="asset-details__actions-wrapper">
  <div class="action-icons asset-view__asset-actions">

<div class="asset-actions__boards tooltip-container action-tooltip tooltip--top ng-scope" ng-controller="BoardActionsController">
  <div class="tooltip__trigger-container"><!-- ngIf: boardReady -->
    <div class="asset-actions__btn-action btn ng-scope" data-assetid="682897819" data-thumb-url="https://media.gettyimages.com/photos/pregnant-businesswoman-looking-away-at-desk-picture-id682897819?s=170x170" ng-click="toggleBoardAsset('682897819')" ng-if="boardReady" style=""><!-- ngIf: !boardHasAsset('682897819') -->
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="11px" height="11px" viewBox="0 0 11 11" style="enable-background:new 0 0 11 11;;enable-background:new 0 0 11 11;" xml:space="preserve" class="gallery-mosaic-asset__icon" gi-icon="unisporkal/getty/plus" ng-if="!boardHasAsset('682897819')">
<polygon points="11,4.5 6.5,4.5 6.5,0 4.5,0 4.5,4.5 0,4.5 0,6.5 4.5,6.5 4.5,11 6.5,11 6.5,6.5 11,6.5 "></polygon>
</svg><!-- end ngIf: !boardHasAsset('682897819') --><!-- ngIf: boardHasAsset('682897819') --><div class="asset-btn__label ng-binding">Add to WishList</div></div>

<!-- end ngIf: boardReady -->
<span class="board-tooltip-content tooltip__content text--with-confirmed-link" ng-click="showChooseBoardModal()"><div class="board-tooltip-content__action ng-binding">Save to Wishlist<div class="board-tooltip-content__name ng-binding">New wishlist</div></div><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13.4549999px" height="8px" viewBox="0 0 13.4549999 8" style="enable-background:new 0 0 13.4549999 8;;enable-background:new 0 0 13.4549999 8;" xml:space="preserve" class="tooltip-content__icon" gi-icon="unisporkal/getty/arrow_down">
<polygon points="13.4545298,1.272583 12.18188,0 6.7272339,5.4538569 1.272583,0 0,1.272583 6.7269292,8 
	6.7272949,7.9996338 6.7276001,8 "></polygon>
</svg></span>
</div>
</div>
</div>
</div>
<div class="asset-card__asset-description ng-isolate-scope" plain-text-copy=""><div class="asset-card__divider-line"></div><h1 class="asset-description__title">Title description</h1>
<div class="asset-description__caption">Caption
</div></div>
</div></div></div>

<div class="adp__divider-line adp__divider-line--mobile-only"></div>
<div class="adp__purchase adp__element--right">
  <div class="asset-purchase ng-scope" ng-controller="BuyCardController" ng-init="init(false, false, {})"><!-- ngIf: buyCardReady() && isBuyDetailsCardVisible -->
    <div class="asset-purchase__panel ng-scope" ng-if="buyCardReady() &amp;&amp; isBuyDetailsCardVisible" style=""><!-- ngIf: cardShown==CARDNAMES.buyCard -->
      <div class="asset-purchase__buy-card ng-scope" ng-if="cardShown==CARDNAMES.buyCard">
        <ul style="" class="tabs buy-card__tabs asset-purchase-box--top-spacing ng-scope" gi-tab-labels="" id="sticky-cart__buy-card"><!-- ngIf: isDownloadable --><!-- ngIf: isPurchaseable && !isMarketFreeze() -->
        <li class="buy-card__tab license ng-scope" gi-track="buyCard.licenseTabClick" ng-click="setBuyCard('license')" ng-if="isPurchaseable &amp;&amp; !isMarketFreeze()">
        <a class="text-link--sly ng-binding  is-selected text-link--no-hover" href="#" ng-class="buyCardTabLinkClass('license')">SELECT OPTION</a></li><!-- end ngIf: isPurchaseable && !isMarketFreeze() --><!-- ngIf: isMarketFreeze() --><!-- ngIf: isRestricted --></ul><!-- ngIf: showBuyOptions() -->
        <div class="buy-card-body asset-purchase-box--horizontal-spacing radio-button-sizes-active" ng-class="{'radio-button-sizes-active': showSizePickerRadioButtons}"><!-- ngIf: agreementViewOnlyPermissions() --><!-- ngIf: hasMutipleOfSameAgreement() --><!-- ngIf: !hasMutipleOfSameAgreement() && buyCard.userHasMultipulePaAgreements --><!-- ngIf: anyMessageBeingShown() -->

<div style="display: none;" class="buy-card__messages ng-scope radio-button-sizes-active" ng-class="{'radio-button-sizes-active': showSizePickerRadioButtons}" ng-if="anyMessageBeingShown()"><!-- ngIf: showBenefitsMessaging() -->

    <div class="buy-card-messages__message message__benefits tooltip-container ng-scope" ng-if="showBenefitsMessaging()">All Royalty-Free licenses include global use rights, comprehensive protection, simple pricing with volume discounts available<div class="tooltip tooltip--bottom tooltip--inline"><div class="tooltip__trigger-container"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="17px" viewBox="0 0 16 17" style="enable-background:new 0 0 16 17;;enable-background:new 0 0 16 17;" xml:space="preserve" class="tooltip__icon" gi-icon="unisporkal/getty/tooltip">
<path class="icons-unisporkal-getty-tooltip-svg__circle" d="M7.9472656,16.2636719c-4.3046875,0-7.8076172-3.5024414-7.8076172-7.8076172
  c0-4.3046875,3.5029297-7.8071289,7.8076172-7.8071289s7.8076172,3.5024414,7.8076172,7.8071289
  C15.7548828,12.7612305,12.2519531,16.2636719,7.9472656,16.2636719z"></path>
<path class="icons-unisporkal-getty-tooltip-svg__border" d="M7.9472656,16.2636719c-4.3046875,0-7.8076172-3.5024414-7.8076172-7.8076172
  c0-4.3046875,3.5029297-7.8071289,7.8076172-7.8071289s7.8076172,3.5024414,7.8076172,7.8071289
  C15.7548828,12.7612305,12.2519531,16.2636719,7.9472656,16.2636719z M7.9472656,1.6489258
  c-3.7539062,0-6.8076172,3.0537109-6.8076172,6.8071289c0,3.7539062,3.0537109,6.8076172,6.8076172,6.8076172
  s6.8076172-3.0537109,6.8076172-6.8076172C14.7548828,4.7026367,11.7011719,1.6489258,7.9472656,1.6489258z"></path>
<g>
  <path class="icons-unisporkal-getty-tooltip-svg__icon" d="M5.7697229,4.9282093c0.1240234-0.1157227,0.2607422-0.2260742,0.4111328-0.3300781
    c0.1494141-0.1040039,0.3134766-0.1958008,0.4912109-0.2758789c0.1787109-0.0800781,0.3701172-0.1430664,0.5761719-0.1889648
    s0.4287109-0.0688477,0.6689453-0.0688477c0.3164062,0,0.609375,0.0458984,0.8789062,0.1376953
    c0.2705078,0.0922852,0.5029297,0.222168,0.6992188,0.3901367s0.3496094,0.3720703,0.4619141,0.6118164
    c0.1123047,0.2402344,0.1679688,0.5102539,0.1679688,0.8100586c0,0.3041992-0.0449219,0.5664062-0.1347656,0.7861328
    C9.9005823,7.0204945,9.7863245,7.2133656,9.6486292,7.3793812C9.5099573,7.5453968,9.3605433,7.6894398,9.1984339,7.8115101
    S8.8830042,8.0483265,8.7394495,8.1562366C8.5949183,8.2641468,8.4728479,8.372057,8.3703089,8.4804554
    C8.2687464,8.5883656,8.2091761,8.7084827,8.1935511,8.8403187L8.0851526,9.7582874H7.3537073L7.2814417,8.7621937
    c-0.015625-0.1796875,0.0175781-0.3369141,0.1015625-0.4707031c0.0839844-0.1342773,0.1943359-0.2602539,0.3300781-0.378418
    c0.1367188-0.1176758,0.2861328-0.2338867,0.4501953-0.3476562C8.3273401,7.4511585,8.4806604,7.3242054,8.622262,7.1840687
    c0.1416016-0.1396484,0.2607422-0.2988281,0.3574219-0.4765625C9.075387,6.5292835,9.1232386,6.3163929,9.1232386,6.068346
    c0-0.171875-0.0341797-0.328125-0.1015625-0.4682617C8.9533167,5.4604359,8.8615198,5.3412952,8.7453089,5.2431507
    C8.6290979,5.1454945,8.4923792,5.0702991,8.3341761,5.0180531C8.1759729,4.9662952,8.0070276,4.9404163,7.8273401,4.9404163
    c-0.2441406,0-0.453125,0.0297852-0.6269531,0.0898438S6.8790979,5.1562366,6.7589808,5.2285023
    C6.6398401,5.3002796,6.5421839,5.3661976,6.4679651,5.4262562C6.3947229,5.4863148,6.3331995,5.5160999,6.2853479,5.5160999
    c-0.0996094,0-0.1777344-0.0458984-0.234375-0.1376953L5.7697229,4.9282093z M6.9396448,12.0981312
    c0-0.1040039,0.0185547-0.2016602,0.0566406-0.2939453c0.0380859-0.0917969,0.0898438-0.171875,0.15625-0.2397461
    c0.0654297-0.0683594,0.1445312-0.1220703,0.2373047-0.1621094c0.0917969-0.0400391,0.1894531-0.0600586,0.2939453-0.0600586
    c0.1035156,0,0.2011719,0.0200195,0.2939453,0.0600586c0.0917969,0.0400391,0.171875,0.09375,0.2392578,0.1621094
    c0.0683594,0.0678711,0.1220703,0.1479492,0.1621094,0.2397461c0.0400391,0.0922852,0.0605469,0.1899414,0.0605469,0.2939453
    c0,0.1083984-0.0205078,0.2070312-0.0605469,0.2973633c-0.0400391,0.0898438-0.09375,0.1689453-0.1621094,0.2368164
    c-0.0673828,0.0678711-0.1474609,0.1210938-0.2392578,0.1591797c-0.0927734,0.0375977-0.1904297,0.0566406-0.2939453,0.0566406
    c-0.1044922,0-0.2021484-0.019043-0.2939453-0.0566406c-0.0927734-0.0380859-0.171875-0.0913086-0.2373047-0.1591797
    c-0.0664062-0.0678711-0.1181641-0.1469727-0.15625-0.2368164C6.9581995,12.3051624,6.9396448,12.2065296,6.9396448,12.0981312z"></path>
</g>
</svg>
</div>
<span class="tooltip__content text--with-confirmed-link"><div class="tooltip-content__title">Getty Images royalty-free includes:</div><ul class="tooltip-content__list"><li class="tooltip-content-list__item"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11.041667 8.979167" style="enable-background:new 0 0 11.041667 8.979167;;enable-background:new 0 0 11.041667 8.979167;" xml:space="preserve" class="tooltip-content-item__checkmark" gi-icon="unisporkal/getty/checkmark">
<g>
  <polygon points="4.0228267,8.0304708 0.4925532,4.5001974 1.5531,3.4396503 4.0228267,5.9093771 9.4925528,0.4396504 
    10.5530996,1.5001973  "></polygon>
</g>
</svg>Unlimited print runs and digital impressions</li><li class="tooltip-content-list__item"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11.041667 8.979167" style="enable-background:new 0 0 11.041667 8.979167;;enable-background:new 0 0 11.041667 8.979167;" xml:space="preserve" class="tooltip-content-item__checkmark" gi-icon="unisporkal/getty/checkmark">
<g>
  <polygon points="4.0228267,8.0304708 0.4925532,4.5001974 1.5531,3.4396503 4.0228267,5.9093771 9.4925528,0.4396504 
    10.5530996,1.5001973  "></polygon>
</g>
</svg>Comprehensive protection: no monetary limit on indemnification</li><li class="tooltip-content-list__item"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 11.041667 8.979167" style="enable-background:new 0 0 11.041667 8.979167;;enable-background:new 0 0 11.041667 8.979167;" xml:space="preserve" class="tooltip-content-item__checkmark" gi-icon="unisporkal/getty/checkmark">
<g>
  <polygon points="4.0228267,8.0304708 0.4925532,4.5001974 1.5531,3.4396503 4.0228267,5.9093771 9.4925528,0.4396504 
    10.5530996,1.5001973  "></polygon>
</g>
</svg><span ng-bind-html="straightForwardDiscounts" class="ng-binding">Straightforward discounts: stock up and save on images and videos <a href="/ultrapacks" target="_blank">with UltraPacks.</a></span></li></ul><div class="tooltip-content__bottom-section ng-binding" ng-bind-html="learnMore"><a href="/eula" target="_blank">Learn more</a></div></span>
</div>
</div><!-- end ngIf: showBenefitsMessaging() --><!-- ngIf: isEditorialRightsVisible() --><!-- ngIf: overageReached() -->
<div class="buy-card-messages__parallel"></div>
</div><!-- end ngIf: anyMessageBeingShown() --><!-- ngIf: !selectedOption.sizes.isEmpty() -->




<div class="buy-card__sizes-container ng-scope" ng-if="!selectedOption.sizes.isEmpty()">
  <section class="buy-card__asset-sizes">
  <div class="asset-sizes__size-table"><!-- ngRepeat: size in getAssetSizes() -->
    <div  class="price_list asset-size-table__size-item standard-radio-btn__container ng-scope" id="comp" ng-class="{ 'is-selected': size.name == selectedSize.name}" ng-click="setSelectedSize(size)" ng-repeat="size in getAssetSizes()">
      <div class="asset-size-item__details">
        <input class="radioss standard-radio-btn asset-size-item__radio-btn" id="comp" name="size" type="radio">
        <div class="asset-size-item__description">
          <div class="asset-size-item__name ng-binding">Extra small<!-- ngIf: assetType == 'film' -->
            
          </div>

          <div class="asset-size-item__size-details"><!-- ngIf: assetType == 'image' -->
            <span ng-if="assetType == 'image'" class="ng-scope"><div class="asset-size-item-size-details__info ng-binding">509 x 339 px (7.07 x 4.71 in)</div><div class="asset-size-item-size-details__info asset-size-item-size-details__sub-info ng-binding">72 dpi<div class="asset-size-item-size-details__separator">|</div>0.2 MP</div></span>

            <!-- end ngIf: assetType == 'image' --><!-- ngIf: assetType == 'film' -->
          </div>
        </div>
      </div>

      <div class="asset-size-item__price"><!-- ngIf: state.showPreferredPrice --><!-- ngIf: !state.showPreferredPrice -->
        <div class="asset-size-item-price__price ng-binding ng-scope" ng-if="!state.showPreferredPrice">$3.00
      </div><!-- end ngIf: !state.showPreferredPrice -->
    </div>
    </div>
    <!-- end ngRepeat: size in getAssetSizes() -->
    <div class="price_list asset-size-table__size-item standard-radio-btn__container ng-scope" id="low" ng-class="{ 'is-selected': size.name == selectedSize.name}" ng-click="setSelectedSize(size)" ng-repeat="size in getAssetSizes()">
      <div class="asset-size-item__details">
        <input class="radioss standard-radio-btn asset-size-item__radio-btn" id="low" name="size" ng-checked="size.name == selectedSize.name" type="radio">
        <div class="asset-size-item__description">
          <div class="asset-size-item__name ng-binding">Small<!-- ngIf: assetType == 'film' -->
            
          </div>
          <div class="asset-size-item__size-details"><!-- ngIf: assetType == 'image' -->
            <span ng-if="assetType == 'image'" class="ng-scope">
            <div class="asset-size-item-size-details__info ng-binding">727 x 484 px (10.10 x 6.72 in)</div>
            <div class="asset-size-item-size-details__info asset-size-item-size-details__sub-info ng-binding">72 dpi
              <div class="asset-size-item-size-details__separator">|</div>0.4 MP</div>
            </span><!-- end ngIf: assetType == 'image' --><!-- ngIf: assetType == 'film' -->
  </div>
</div>
</div>
    <div class="asset-size-item__price"><!-- ngIf: state.showPreferredPrice --><!-- ngIf: !state.showPreferredPrice -->
      <div class="asset-size-item-price__price ng-binding ng-scope" ng-if="!state.showPreferredPrice">$5.00</div><!-- end ngIf: !state.showPreferredPrice -->
  </div>
  </div>
    <!-- end ngRepeat: size in getAssetSizes() -->

    <div class="price_list asset-size-table__size-item standard-radio-btn__container ng-scope" id="medium" ng-class="{ 'is-selected': size.name == selectedSize.name}" ng-click="setSelectedSize(size)" ng-repeat="size in getAssetSizes()"><div class="asset-size-item__details"><input class="radioss standard-radio-btn asset-size-item__radio-btn" id="medium" name="size" ng-checked="size.name == selectedSize.name" type="radio"><div class="asset-size-item__description"><div class="asset-size-item__name ng-binding">Medium<!-- ngIf: assetType == 'film' --></div>
    <div class="asset-size-item__size-details"><!-- ngIf: assetType == 'image' -->
      <span ng-if="assetType == 'image'" class="ng-scope"><div class="asset-size-item-size-details__info ng-binding">2125 x 1416 px (7.08 x 4.72 in)</div><div class="asset-size-item-size-details__info asset-size-item-size-details__sub-info ng-binding">300 dpi<div class="asset-size-item-size-details__separator">|</div>3.0 MP</div></span><!-- end ngIf: assetType == 'image' --><!-- ngIf: assetType == 'film' --></div>
  </div>
</div>
<div class="asset-size-item__price"><!-- ngIf: state.showPreferredPrice --><!-- ngIf: !state.showPreferredPrice -->
  <div class="asset-size-item-price__price ng-binding ng-scope" ng-if="!state.showPreferredPrice">$10.00</div>
  <!-- end ngIf: !state.showPreferredPrice -->
</div>
  </div>

    <!-- end ngRepeat: size in getAssetSizes() -->

    <div style="background: #f3f3f3;" class="price_list asset-size-table__size-item standard-radio-btn__container ng-scope is-selected" id="super" ng-class="{ 'is-selected': size.name == selectedSize.name}" ng-click="setSelectedSize(size)" ng-repeat="size in getAssetSizes()"><div class="asset-size-item__details">
      <input class="radioss standard-radio-btn asset-size-item__radio-btn" id="super" name="size" type="radio" checked="checked"><div class="asset-size-item__description"><div class="asset-size-item__name ng-binding">Large<!-- ngIf: assetType == 'film' -->
      
    </div>
    <div class="asset-size-item__size-details" style="display: none;"><!-- ngIf: assetType == 'image' -->
      <span ng-if="assetType == 'image'" class="ng-scope"><div class="asset-size-item-size-details__info ng-binding">5603 x 3735 px (18.68 x 12.45 in)</div><div class="asset-size-item-size-details__info asset-size-item-size-details__sub-info ng-binding">300 dpi<div class="asset-size-item-size-details__separator">|</div>20.9 MP</div></span><!-- end ngIf: assetType == 'image' --><!-- ngIf: assetType == 'film' -->
    </div>
  </div>
</div>
    <div class="asset-size-item__price"><!-- ngIf: state.showPreferredPrice --><!-- ngIf: !state.showPreferredPrice -->
      <div class="asset-size-item-price__price ng-binding ng-scope" ng-if="!state.showPreferredPrice">$20.00</div>
    <!-- end ngIf: !state.showPreferredPrice -->
  </div>
  </div>
    <!-- end ngRepeat: size in getAssetSizes() -->
  </div>
</section>
<!-- ngIf: canViewLimitedUseProducts() --><!-- ngIf: isPurchaseable && buyCard.type == 'license' -->
<div class="buy-card__button-wrapper ng-scope" ng-if="isPurchaseable &amp;&amp; buyCard.type == 'license'"><aside class="buy-card__pricing-info" style="display: non;"><!-- ngIf: state.showPreferredPrice --><!-- ngIf: !state.showPreferredPrice -->
  <div  class="buy-card__pricing ng-scope" style="dispay: none;">
    <div id="dis_pay"  class="buy-card__price ng-binding">$20.00</div>
  {{-- <div class="buy-card__currency ng-binding">KSH</div> --}}
</div>

</aside><!-- ngIf: cartHasFinishedLoading -->
<div class="buy-card__button-container ng-scope" id="sticky-cart__buy-card-button">
  <div class="mini_download_history--container">
  </div>

@if(!$check)
  @if(Auth::check())
  <a id="add_to_cart" class="gix-add-to-cart btn buy-card-button btn--primary btn--large" style="background: #ff00ff; border: none;" data-id="{{ $upload->id }}">ADD TO CART</a>

  <a id="checkout" href="{{ route('cart/view-cart') }}" class="gix-add-to-cart btn buy-card-button btn--primary btn--large" style="background: #ff00ff; border: none; display: none;">CHECKOUT</a>

  @else
  <a onclick="window.location='{{ url("user-auth") }}'" class="gix-add-to-cart btn buy-card-button btn--primary btn--large" style="background: #ff00ff; border: none;">ADD TO CART</a>
  @endif

@else
  <a href="{{ route('cart/view-cart') }}" class="gix-add-to-cart btn buy-card-button btn--primary btn--large" style="background: #ff00ff; border: none; dsplay: none;">CHECKOUT</a>
@endif

<a class="btn buy-card-button btn--primary btn--large ng-hide" ng-click="addPricedAssetToCartLimitedUse()" ng-show="showUpdateCartAction()">UPDATE CART</a>

<a class="btn buy-card-button btn--primary btn--large ng-hide" href="#">VIEW CART</a>

{{-- <mobile-sticky-cart style="display: none;"  class="sticky-cart-info ng-scope sticky-cart-info--active" ng-class="{'sticky-cart-info--active ': showStickyCart}">
  <div class="sticky-cart-info__price ng-binding" ng-click="scrollToBuyCard()">Large $499<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13.4549999px" height="8px" viewBox="0 0 13.4549999 8" style="enable-background:new 0 0 13.4549999 8;;enable-background:new 0 0 13.4549999 8;" xml:space="preserve" class="sticky-cart-info-price__icon" gi-icon="unisporkal/getty/arrow_down">
<polygon points="13.4545298,1.272583 12.18188,0 6.7272339,5.4538569 1.272583,0 0,1.272583 6.7269292,8 
	6.7272949,7.9996338 6.7276001,8 ">
    
  </polygon>
</svg>
</div>

<div class="sticky-cart-info__action"><a class="gix-add-to-cart btn buy-card-button btn--primary btn--large" ng-click="addPricedAssetToCart()" ng-show="!isSizeInCart() &amp;&amp; !isAssetPricedInCart()">ADD TO CART</a><a class="btn buy-card-button btn--primary btn--large ng-hide" ng-click="addPricedAssetToCartLimitedUse()" ng-show="showUpdateCartAction()">UPDATE CART</a><a class="btn buy-card-button btn--primary btn--large ng-hide" data-close-and-redirect="" href="/purchase/cart" ng-show="isSizeInCart() &amp;&amp; !isLimitedUseInCart()">VIEW CART</a></div>
</mobile-sticky-cart> --}}
</div><!-- end ngIf: cartHasFinishedLoading -->
</div>
<!-- end ngIf: isPurchaseable && buyCard.type == 'license' -->
</div><!-- end ngIf: !selectedOption.sizes.isEmpty() -->

<form class="download__form ng-pristine ng-valid" id="downloadForm" name="downloadForm" ng-submit="download(downloadForm.$valid)"><!-- ngIf: buyCard.type == 'download' --><!-- ngIf: buyCard.type == 'preview' --></form><!-- ngIf: selectedOption.type == 'customlicense' --><!-- ngIf: selectedOption.type == 'marketfreeze' --><!-- ngIf: isRestricted -->
</div>

</div>


<!-- end ngIf: cardShown==CARDNAMES.buyCard --><!-- ngIf: shouldShowUltraPackUpsellCard() --><!-- ngIf: shouldShowLimitedUseCard() -->
<div class="asset-purchase__details box--grey">
  <div class="asset-purchase-box--horizontal-spacing asset-purchase-box--top-spacing asset-purchase-box--bottom-spacing">
    <section class="asset-details">
    <h2 class="asset-details__heading">DETAILS</h2>
    <div class="asset-details__details">
    
      <div class="asset-detail__name asset-detail__cell">Restrictions :</div>

      <div class="asset-detail__value asset-detail__cell">Permitted to download or use image without prior approval.</div>


      <div class="asset-detail asset-detail--credit"><div class="asset-detail__name asset-detail__cell">Credit:</div>
      <div class="asset-detail__value asset-detail__cell"><a class="asset-detail__link" data-close-and-redirect="true" data-search-type="photographer" gi-track="track.adp.adpContributorClicked" href="#" rel="nofollow">Someone</a></div></div>

      <div class="asset-detail asset-detail--asset-id"><div class="asset-detail__name asset-detail__cell">Creative #:</div><div class="asset-detail__value asset-detail__cell"><span class="asset-detail__asset-id">682897819</span></div></div> 
 <div class="asset-detail__name asset-detail__cell">License Type:</div>

      <div class="asset-detail__value asset-detail__cell">Rights Managed</div>

      <div class="asset-detail asset-detail--location"></div>

      <div class="asset-detail__name asset-detail__cell">Category:</div>

      <div class="asset-detail__value asset-detail__cell">Category_test</div>

      <div class="asset-detail asset-detail--location"></div>

      <div class="asset-detail__name asset-detail__cell">Location:</div>

      <div class="asset-detail__value asset-detail__cell">Nairobi, Kenya</div>

      <div class="asset-detail asset-detail--location"></div>

      <div class="asset-detail__name asset-detail__cell">Release Info:</div>
      <div class="asset-detail__value asset-detail__cell"> Not released.more information</div>

      <div class="asset-detail asset-detail--release"><div class="asset-detail__name asset-detail__cell">Object Name:</div><div class="asset-detail__value asset-detail__cell">xxxx.jpg</div></div>

      <div class="asset-detail asset-detail--release"><div class="asset-detail__name asset-detail__cell">Source:</div><div class="asset-detail__value asset-detail__cell">Picture254</div></div>

    <div class="asset-detail asset-detail--release"><div class="asset-detail__name asset-detail__cell">Max file size:</div><div class="asset-detail__value asset-detail__cell">2,000 px not larger than 10 MB. 
</div></div>
    </div>

  </section>
</div>
</div
></div>
<!-- end ngIf: buyCardReady() && isBuyDetailsCardVisible -->
</div></div>

<div class="adp__same-series adp__element--left" style="background: #fff; ">

  <section class="more-images" gi-same-series=""><!-- ngIf: assetList.assets.length > 0 --><section class="mosaics same-series ng-scope" ng-class="same-series" ng-if="assetList.assets.length > 0" style="">

  <div class="same-series__info asset-purchase-box--horizontal-spacing">
    <div ng-bind="title" class="ng-binding">SAME AUTHOR</div>
  <div class="same-series__view-all"><a class="same-series-view-all__text text-links--confirmed ng-binding" data-close-and-redirect="true" gi-track="track.same_series.click" ng-bind="viewAllTitle" ng-href="/search/stack/786410268?assettype=image&amp;family=creative&amp;uiloc=view_all_same_series_adp" href="#">View all</a><svg width="6px" height="11px" viewBox="0 0 6 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="same-series-view-all__arrow-icon text-links--confirmed" gi-icon="unisporkal/getty/arrow_right">
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-247.000000, -214.000000)" fill-rule="nonzero">
            <g>
                <g transform="translate(81.000000, 197.000000)">
                    <g transform="translate(166.000000, 17.000000)">
                        <polygon points="0.9360352 10.0654297 0 9.1289062 4.0869141 5.0419921 0 0.9541016 0.9360352 0 5.9956055 5.0419922"></polygon>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg></div>
</div>
<div class="same-series__assets assets scroll-x--hidden">
  <!-- ngRepeat: asset in assetList.assets -->
@foreach($images as $image)
  <div class="same-series__asset ng-scope same-series__asset--image" data-film-poster="" data-film-preview-class="SameSeries" gi-preview-film="" ng-class="[{ 'same-series__asset--film': asset.type == 'film' }, { 'same-series__asset--image': asset.type == 'image' }]" ng-repeat="asset in assetList.assets">
    <a data-mosaic_asset_type="SameSeries" href="{{ route('stock-preview',$image->id) }}"><!-- ngIf: asset.type == 'image' -->
    <img class="same-series__image ng-scope" src="{{ asset('uploads') }}/{{ $image->imageName }}" alt="image"><!-- end ngIf: asset.type == 'image' --><!-- ngIf: asset.type == 'film' --><!-- ngIf: asset.type == 'film' --></a>
  </div>
@endforeach

<!-- end ngRepeat: asset in assetList.assets -->
</div>
</section><!-- end ngIf: assetList.assets.length > 0 -->
</section></div>
<div class="adp__explore adp__element--left adp__element--full">
  <section class="more-images" gi-mosaic-grids=""><!-- ngRepeat: grid in mosaicGrids | orderBy: 'order' --><section class="adp-assets-grid asset-purchase-box--horizontal-spacing ng-scope" ng-repeat="grid in mosaicGrids | orderBy: 'order'" style=""><!-- ngIf: grid.assets.length > 0 --><section class="assets-grid__container mosaics ng-scope similar-images" ng-class="grid.class" ng-if="grid.assets.length > 0"><div class="assets-grid__heading"><h2 class="grid-heading__title ng-binding" ng-bind="grid.title">Similar images</h2>

    <div class="grid-heading__link"><a class="text-links--confirmed ng-binding" data-close-and-redirect="true" gi-track="track.similar_images.click" ng-bind="viewAllTitle" ng-href="/search/more-like-this/682897819?&amp;uiloc=view_all_similar_images_adp" href="#">View all</a>
      <svg width="6px" height="11px" viewBox="0 0 6 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="grid-heading-link__arrow-icon text-links--confirmed" gi-icon="unisporkal/getty/arrow_right">
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-247.000000, -214.000000)" fill-rule="nonzero">
            <g>
                <g transform="translate(81.000000, 197.000000)">
                    <g transform="translate(166.000000, 17.000000)">
                        <polygon points="0.9360352 10.0654297 0 9.1289062 4.0869141 5.0419921 0 0.9541016 0.9360352 0 5.9956055 5.0419922"></polygon>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg></div></div>

<div class="assets-grid__assets assets gi-bricks" dta-row-height="300">
  <!-- ngRepeat: asset in grid.assets -->

@foreach($images as $image)
  <div class="grid-assets__asset ng-scope mosaic-asset" data-film-poster=""  gi-preview-film=""  style="width: 300px; height: 280px;">
    <a data-mosaic_asset_type="SimilarImages" href="{{ route('stock-preview',$image->id) }}">
    <!-- ngIf: asset.type == 'image' -->
    <img class="grid-asset__img grid-asset__img--comp ng-scope" src="{{ asset('uploads') }}/{{ $image->imageName }}" style="width: 100%;" alt="image" sizes="(max-width:548px) 100vw, 548px"><!-- end ngIf: asset.type == 'image' --><!-- ngIf: asset.type == 'film' -->
    <!-- ngIf: asset.type == 'film' -->
  </a>
</div>

@endforeach
  <!-- end ngRepeat: asset in grid.assets -->

</div>
</section>

  <!-- end ngIf: grid.assets.length > 
  0 -->
</section><!-- end ngRepeat: grid in mosaicGrids | orderBy: 'order' -->
</section>
</div>

</div>



<script>(function() {
  var Image, Row, Wall, performResize, resizeTimeoutId;

  Image = (function() {
    function Image(width, height) {
      this.width = Math.floor(width);
      this.height = Math.floor(height);
    }

    Image.prototype.scaleHeight = function(newHeight) {
      return this.scale(newHeight / this.height);
    };

    Image.prototype.scaleWidth = function(newWidth) {
      return this.scale(newWidth / this.width);
    };

    Image.prototype.scale = function(scaleFactor) {
      return new Image(this.width * scaleFactor, this.height * scaleFactor);
    };

    return Image;

  })();

  Row = (function() {
    function Row(images1) {
      this.images = images1;
    }

    Row.prototype.slice = function(boundary) {
      var added, after, before, image, j, len, ref, w;
      before = [];
      after = [];
      w = 0;
      added = false;
      ref = this.images;
      for (j = 0, len = ref.length; j < len; j++) {
        image = ref[j];
        w += image.width;
        if (w <= boundary || !added) {
          before.push(image);
          added = true;
        } else {
          after.push(image);
        }
      }
      return [new Row(before), new Row(after)];
    };

    Row.prototype.scaleHeight = function(newHeight) {
      return new Row(this.images.map(function(i) {
        return i.scaleHeight(newHeight);
      }));
    };

    Row.prototype.scaleWidth = function(newWidth) {
      return new Row(this.images.map(function(i) {
        return i.scaleWidth(newWidth);
      }));
    };

    Row.prototype.height = function() {
      return this.images[0].height;
    };

    Row.prototype.width = function() {
      var reducer;
      reducer = function(prev, curr) {
        return prev + curr.width;
      };
      return this.images.reduce(reducer, 0);
    };

    Row.prototype.wastage = function(width) {
      return width - this.width();
    };

    Row.prototype.boundingBox = function() {
      return new Image(this.width(), this.height());
    };

    Row.prototype.count = function() {
      return this.images.length;
    };

    Row.prototype.hasMore = function() {
      return this.images[0];
    };

    Row.prototype.push = function(image) {
      return this.images.push(image);
    };

    Row.prototype.pop = function() {
      return this.images.pop();
    };

    Row.prototype.unshift = function(image) {
      return this.images.unshift(image);
    };

    Row.prototype.shift = function() {
      return this.images.shift();
    };

    return Row;

  })();

  Wall = (function() {
    function Wall(row1, width1, maxRowHeight) {
      this.row = row1;
      this.width = width1;
      this.maxRowHeight = maxRowHeight;
    }

    Wall.prototype.build = function() {
      var curr, maxWaste, ref, rest, rowBox, rowHeight, rows, subtract;
      rows = [];
      maxWaste = -(this.width * 2);
      rest = this.row;
      while (rest.hasMore()) {
        ref = rest.slice(this.width), curr = ref[0], rest = ref[1];
        if (curr.wastage(this.width) > maxWaste && rest.hasMore()) {
          curr.push(rest.shift());
          if (curr.wastage(this.width) < maxWaste) {
            rest.unshift(curr.pop());
          }
        }
        rowBox = curr.boundingBox();
        rowHeight = rowBox.scaleWidth(this.width).height;
        if (rowHeight > this.maxRowHeight) {
          rowHeight = this.maxRowHeight;
        }
        subtract = 0;
        while ((curr = curr.scaleHeight(rowHeight - subtract)).width() > this.width) {
          subtract += 1;
        }
        rows.push(curr);
      }
      return rows;
    };

    return Wall;

  })();

  window.initWall = function(containerSelector, assetSelector) {
    var container, containerWidth, containers, desiredRowHeight, domImages, i, image, images, j, k, l, len, len1, len2, len3, m, origH, origW, r, ref, row, rows, wall;
    if (containerSelector == null) {
      containerSelector = ".assets.gi-bricks";
    }
    if (assetSelector == null) {
      assetSelector = ".mosaic-asset, .mosaic-custom-content";
    }
    containers = document.querySelectorAll(containerSelector);
    if (!(containers.length > 0)) {
      return;
    }
    for (j = 0, len = containers.length; j < len; j++) {
      container = containers[j];
      images = [];
      domImages = container.querySelectorAll(assetSelector);
      containerWidth = container.clientWidth;
      for (k = 0, len1 = domImages.length; k < len1; k++) {
        i = domImages[k];
        origW = i.getAttribute("data-max-width");
        origH = i.getAttribute("data-max-height");
        images.push(new Image(origW, origH));
      }
      desiredRowHeight = container.getAttribute("data-row-height");
      desiredRowHeight = desiredRowHeight != null ? parseInt(desiredRowHeight) : 400;
      row = new Row(images);
      row = row.scaleHeight(desiredRowHeight);
      wall = new Wall(row, containerWidth, 420);
      rows = wall.build();
      i = r = 0;
      for (l = 0, len2 = rows.length; l < len2; l++) {
        row = rows[l];
        ref = row.images;
        for (m = 0, len3 = ref.length; m < len3; m++) {
          image = ref[m];
          domImages[i].style.width = image.width + "px";
          domImages[i].style.height = image.height + "px";
          i++;
        }
        r++;
      }
    }
  };

  resizeTimeoutId = null;

  performResize = function() {
    if (typeof window.initWall === 'function') {
      initWall();
      initWall('.editorial-landing__mosaic', '.editorial-landing__item');
      return initWall('.search-content__gallery-assets', '.gallery-mosaic-asset');
    }
  };

  performResize();

  window.addEventListener('resize', function() {
    if (window.isMobile) {
      return true;
    }
    clearTimeout(resizeTimeoutId);
    return resizeTimeoutId = setTimeout(performResize, 100);
  });

  document.addEventListener('DOMContentLoaded', function() {
    return performResize();
  });

}).call(this);
</script>
</div>
</section>


<div class="embed-modal modal ng-scope" data-content-selector=".contents .preview" gix-modal="" id="embed-modal">
  <div class="modal__background" ng-click="hideModal()"></div>
  <div class="embed-modal__container modal__container"><div class="modal__content modal__content--padded"><button class="action modal__close" ng-click="hideModal()"><svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" gi-icon="unisporkal/getty/close" title="Close">
    <defs>
        <path d="M12.7852122,0.209179092 L7.00742444,5.98713384 L1.23138643,0.209179092 C0.951420942,-0.0510594633 0.515724648,-0.0444711454 0.24450808,0.227296966 C-0.0267084883,0.497417997 -0.0337076255,0.933894054 0.227010237,1.21225048 L6.00654782,6.99185231 L0.227010237,12.7714541 C0.0362837469,12.9476916 -0.0424565471,13.2145185 0.0222854725,13.4648746 C0.087027492,13.7185248 0.284753119,13.9128802 0.53672206,13.9771163 C0.788691001,14.0429995 1.05465822,13.9639397 1.23138643,13.7745255 L7.00917423,7.9949237 L12.7887118,13.7745255 C13.0686773,14.033117 13.5043736,14.0265287 13.7738404,13.7564077 C14.0450569,13.4846395 14.0538059,13.0498106 13.7913382,12.7714541 L8.01355042,6.99185231 L13.7913382,1.21225048 C14.0695539,0.935541134 14.0695539,0.484241362 13.7913382,0.207532012 C13.6531053,0.0691773374 13.4711277,0 13.2891501,0 C13.1071726,0 12.925195,0.0691773374 12.7852122,0.209179092 Z" id="unisporkal-getty-close-svg-path-1"></path>
    </defs>
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-348.000000, -239.000000)">
            <g transform="translate(0.000000, 216.000000)">
                <g transform="translate(348.000000, 23.000000)">
                    <mask>
                        <use xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                    </mask>
                    <use fill-rule="evenodd" xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                </g>
            </g>
        </g>
    </g>
</svg></button><div class="embed-modal__title">Embed an image or slideshow<a class="text-link--sly embed-modal-title__btn btn btn--hollow text--with-hollow-link" href="/resources/embed">LEARN MORE</a></div><div class="embed-modal-content contents modalBox"><div class="embed-modal__snippet snippets"><select class="embed-modal-snippet__dropdown dropdown-field snippet-types"><option selected="selected" value="jsSnippet">Standard code</option><option value="iframeSnippet">Legacy code</option></select><div class="embed-modal-snippet__code-wrapper embed-code-wrapper"><input class="embed-modal-snippet__input slide-embed-code embed-code success" readonly="readonly" type="text"></div></div><div class="embed-modal__items-wrapper wrapper"><div class="embed-modal__preview-section left-wing"><div class="embed-modal__preview-data preview"></div><div class="preview-container-template" style="display: none;"></div><div class="embed-preview__thumb-strip thumb-strip slideshow-items"><div class="embed-thumb-strip__item thumb-item first item-0" data-asset-id="" data-item="0" draggable="false"><svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="embed-thumb-strip__remove-icon remove" gi-icon="unisporkal/getty/close">
    <defs>
        <path d="M12.7852122,0.209179092 L7.00742444,5.98713384 L1.23138643,0.209179092 C0.951420942,-0.0510594633 0.515724648,-0.0444711454 0.24450808,0.227296966 C-0.0267084883,0.497417997 -0.0337076255,0.933894054 0.227010237,1.21225048 L6.00654782,6.99185231 L0.227010237,12.7714541 C0.0362837469,12.9476916 -0.0424565471,13.2145185 0.0222854725,13.4648746 C0.087027492,13.7185248 0.284753119,13.9128802 0.53672206,13.9771163 C0.788691001,14.0429995 1.05465822,13.9639397 1.23138643,13.7745255 L7.00917423,7.9949237 L12.7887118,13.7745255 C13.0686773,14.033117 13.5043736,14.0265287 13.7738404,13.7564077 C14.0450569,13.4846395 14.0538059,13.0498106 13.7913382,12.7714541 L8.01355042,6.99185231 L13.7913382,1.21225048 C14.0695539,0.935541134 14.0695539,0.484241362 13.7913382,0.207532012 C13.6531053,0.0691773374 13.4711277,0 13.2891501,0 C13.1071726,0 12.925195,0.0691773374 12.7852122,0.209179092 Z" id="unisporkal-getty-close-svg-path-1"></path>
    </defs>
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-348.000000, -239.000000)">
            <g transform="translate(0.000000, 216.000000)">
                <g transform="translate(348.000000, 23.000000)">
                    <mask>
                        <use xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                    </mask>
                    <use fill-rule="evenodd" xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                </g>
            </g>
        </g>
    </g>
</svg></div><div class="embed-thumb-strip__item thumb-item item-1" data-asset-id="" data-item="1" draggable="false"><svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="embed-thumb-strip__remove-icon remove" gi-icon="unisporkal/getty/close">
    <defs>
        <path d="M12.7852122,0.209179092 L7.00742444,5.98713384 L1.23138643,0.209179092 C0.951420942,-0.0510594633 0.515724648,-0.0444711454 0.24450808,0.227296966 C-0.0267084883,0.497417997 -0.0337076255,0.933894054 0.227010237,1.21225048 L6.00654782,6.99185231 L0.227010237,12.7714541 C0.0362837469,12.9476916 -0.0424565471,13.2145185 0.0222854725,13.4648746 C0.087027492,13.7185248 0.284753119,13.9128802 0.53672206,13.9771163 C0.788691001,14.0429995 1.05465822,13.9639397 1.23138643,13.7745255 L7.00917423,7.9949237 L12.7887118,13.7745255 C13.0686773,14.033117 13.5043736,14.0265287 13.7738404,13.7564077 C14.0450569,13.4846395 14.0538059,13.0498106 13.7913382,12.7714541 L8.01355042,6.99185231 L13.7913382,1.21225048 C14.0695539,0.935541134 14.0695539,0.484241362 13.7913382,0.207532012 C13.6531053,0.0691773374 13.4711277,0 13.2891501,0 C13.1071726,0 12.925195,0.0691773374 12.7852122,0.209179092 Z" id="unisporkal-getty-close-svg-path-1"></path>
    </defs>
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-348.000000, -239.000000)">
            <g transform="translate(0.000000, 216.000000)">
                <g transform="translate(348.000000, 23.000000)">
                    <mask>
                        <use xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                    </mask>
                    <use fill-rule="evenodd" xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                </g>
            </g>
        </g>
    </g>
</svg></div><div class="embed-thumb-strip__item thumb-item item-2" data-asset-id="" data-item="2" draggable="false"><svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="embed-thumb-strip__remove-icon remove" gi-icon="unisporkal/getty/close">
    <defs>
        <path d="M12.7852122,0.209179092 L7.00742444,5.98713384 L1.23138643,0.209179092 C0.951420942,-0.0510594633 0.515724648,-0.0444711454 0.24450808,0.227296966 C-0.0267084883,0.497417997 -0.0337076255,0.933894054 0.227010237,1.21225048 L6.00654782,6.99185231 L0.227010237,12.7714541 C0.0362837469,12.9476916 -0.0424565471,13.2145185 0.0222854725,13.4648746 C0.087027492,13.7185248 0.284753119,13.9128802 0.53672206,13.9771163 C0.788691001,14.0429995 1.05465822,13.9639397 1.23138643,13.7745255 L7.00917423,7.9949237 L12.7887118,13.7745255 C13.0686773,14.033117 13.5043736,14.0265287 13.7738404,13.7564077 C14.0450569,13.4846395 14.0538059,13.0498106 13.7913382,12.7714541 L8.01355042,6.99185231 L13.7913382,1.21225048 C14.0695539,0.935541134 14.0695539,0.484241362 13.7913382,0.207532012 C13.6531053,0.0691773374 13.4711277,0 13.2891501,0 C13.1071726,0 12.925195,0.0691773374 12.7852122,0.209179092 Z" id="unisporkal-getty-close-svg-path-1"></path>
    </defs>
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-348.000000, -239.000000)">
            <g transform="translate(0.000000, 216.000000)">
                <g transform="translate(348.000000, 23.000000)">
                    <mask>
                        <use xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                    </mask>
                    <use fill-rule="evenodd" xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                </g>
            </g>
        </g>
    </g>
</svg></div><div class="embed-thumb-strip__item thumb-item item-3" data-asset-id="" data-item="3" draggable="false"><svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="embed-thumb-strip__remove-icon remove" gi-icon="unisporkal/getty/close">
    <defs>
        <path d="M12.7852122,0.209179092 L7.00742444,5.98713384 L1.23138643,0.209179092 C0.951420942,-0.0510594633 0.515724648,-0.0444711454 0.24450808,0.227296966 C-0.0267084883,0.497417997 -0.0337076255,0.933894054 0.227010237,1.21225048 L6.00654782,6.99185231 L0.227010237,12.7714541 C0.0362837469,12.9476916 -0.0424565471,13.2145185 0.0222854725,13.4648746 C0.087027492,13.7185248 0.284753119,13.9128802 0.53672206,13.9771163 C0.788691001,14.0429995 1.05465822,13.9639397 1.23138643,13.7745255 L7.00917423,7.9949237 L12.7887118,13.7745255 C13.0686773,14.033117 13.5043736,14.0265287 13.7738404,13.7564077 C14.0450569,13.4846395 14.0538059,13.0498106 13.7913382,12.7714541 L8.01355042,6.99185231 L13.7913382,1.21225048 C14.0695539,0.935541134 14.0695539,0.484241362 13.7913382,0.207532012 C13.6531053,0.0691773374 13.4711277,0 13.2891501,0 C13.1071726,0 12.925195,0.0691773374 12.7852122,0.209179092 Z" id="unisporkal-getty-close-svg-path-1"></path>
    </defs>
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-348.000000, -239.000000)">
            <g transform="translate(0.000000, 216.000000)">
                <g transform="translate(348.000000, 23.000000)">
                    <mask>
                        <use xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                    </mask>
                    <use fill-rule="evenodd" xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                </g>
            </g>
        </g>
    </g>
</svg></div><div class="embed-thumb-strip__item thumb-item last item-4" data-asset-id="" data-item="4" draggable="false"><svg width="14px" height="14px" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="embed-thumb-strip__remove-icon remove" gi-icon="unisporkal/getty/close">
    <defs>
        <path d="M12.7852122,0.209179092 L7.00742444,5.98713384 L1.23138643,0.209179092 C0.951420942,-0.0510594633 0.515724648,-0.0444711454 0.24450808,0.227296966 C-0.0267084883,0.497417997 -0.0337076255,0.933894054 0.227010237,1.21225048 L6.00654782,6.99185231 L0.227010237,12.7714541 C0.0362837469,12.9476916 -0.0424565471,13.2145185 0.0222854725,13.4648746 C0.087027492,13.7185248 0.284753119,13.9128802 0.53672206,13.9771163 C0.788691001,14.0429995 1.05465822,13.9639397 1.23138643,13.7745255 L7.00917423,7.9949237 L12.7887118,13.7745255 C13.0686773,14.033117 13.5043736,14.0265287 13.7738404,13.7564077 C14.0450569,13.4846395 14.0538059,13.0498106 13.7913382,12.7714541 L8.01355042,6.99185231 L13.7913382,1.21225048 C14.0695539,0.935541134 14.0695539,0.484241362 13.7913382,0.207532012 C13.6531053,0.0691773374 13.4711277,0 13.2891501,0 C13.1071726,0 12.925195,0.0691773374 12.7852122,0.209179092 Z" id="unisporkal-getty-close-svg-path-1"></path>
    </defs>
    <g stroke="none" stroke-width="1" fill-rule="evenodd">
        <g transform="translate(-348.000000, -239.000000)">
            <g transform="translate(0.000000, 216.000000)">
                <g transform="translate(348.000000, 23.000000)">
                    <mask>
                        <use xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                    </mask>
                    <use fill-rule="evenodd" xlink:href="#unisporkal-getty-close-svg-path-1"></use>
                </g>
            </g>
        </g>
    </g>
</svg></div></div><div class="embed-preview__slide-actions slide-actions"><div class="embed-preview__slide-caption checkbox-field slide-captions"><input checked="checked" class="checkbox-field__input caption-checkbox" id="include-slideshow-caption" type="checkbox"><label class="embed-preview-caption__label" for="include-slideshow-caption">Show captions</label></div></div></div><div class="embed-modal__search-slideshow-section right-wing"><div class="embed-search__search"><div class="embed-search__label">Add items to create slideshow</div><div class="embed-search__search-container search-container"><div class="embed-search__search-form" id="embed-search-form"><div class="embed-search-form__search-box search-box"><button class="btn" name="search"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.7958984px" height="18.9273891px" viewBox="0 0 18.7958984 18.9273891" style="enable-background:new 0 0 18.7958984 18.9273891;;enable-background:new 0 0 18.7958984 18.9273891;" xml:space="preserve" gi-icon="unisporkal/getty/search">
<path d="M18.7958984,16.9035645l-4.3776245-4.3772583c0.9204102-1.2965698,1.4672241-2.8759766,1.4672241-4.5835571
	C15.885498,3.5631714,12.3223267,0,7.942749,0C3.5631104,0,0,3.5631714,0,7.942749
	c0,4.3799438,3.5631104,7.9431152,7.942749,7.9431152c1.7074585,0,3.2866821-0.546814,4.5831909-1.4672241l4.3776245,4.3772583
	L18.7958984,16.9035645z M7.942749,13.2094116c-2.9038696,0-5.2663574-2.3624878-5.2663574-5.2666626
	c0-2.9038086,2.3624878-5.2662964,5.2663574-5.2662964c2.9038086,0,5.2662964,2.3624878,5.2662964,5.2662964
	C13.2090454,10.8469238,10.8465576,13.2094116,7.942749,13.2094116z"></path>
</svg></button><input class="embed-search-box__input query" name="query" type="text"></div></div></div></div>



<div class="embed-search__slideshow slideshow-items"><div class="embed-slideshow__results results" id="embed-search-results"></div><div class="embed-slideshow__no-results no-results">Your search did not return any result.</div><section class="embed-slideshow__pager pager bottom" data-page-count="0"><a class="embed-slideshow__pager-item text-link--sly previous" href="#embed-search-results"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.5px" height="18.5px" viewBox="0 0 19 32" style="enable-background:new 0 0 19 32;;enable-background:new 0 0 19 32;" xml:space="preserve" class="embed-slideshow__arrow" gi-icon="unisporkal/getty/arrow_previous">
<g>
  <polygon points="16.4390736,0 18.5580082,2.1072602 4.6681867,16.0671291 18.5526581,29.8810654 16.4444237,32
    0.441992,16.078804  "></polygon>
</g>
</svg></a><span class="embed-slideshow__result-count result_count">Page <span class="page-count"></span> of <span class="total-pages"></span></span><a class="embed-slideshow__pager-item text-link--sly next" href="#embed-search-results"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18.5px" height="18.5px" viewBox="0 0 19 32" style="enable-background:new 0 0 19 32;;enable-background:new 0 0 19 32;" xml:space="preserve" class="embed-slideshow__arrow embed-slideshow__arrow--next" gi-icon="unisporkal/getty/arrow_previous">
<g>
  <polygon points="16.4390736,0 18.5580082,2.1072602 4.6681867,16.0671291 18.5526581,29.8810654 16.4444237,32
    0.441992,16.078804  "></polygon>
</g>
</svg></a></section></div></div></div>

<footer class="embed-modal__footer text--with-confirmed-link">By using the code above and embedding this image, you consent to the Getty Images <a href="/company/terms" target="_blank">Terms of Use</a>. Note: Embedded images may not be used for commercial purposes.</footer>

</div></div></div></div>

</div>

<footer id="footer" >
  <footer-links >
    <div class="main-footer main-footer--full" style="background: #000;">
<div class="footer__secondary footer__secondary--full">
  <div class="footer__copyright">© 2019 Picture254 Images.</div>

{{-- <div class="footer__secondary-group"><a class="footer-secondary-group__item" data-nav="foot_general_website_terms" data-ui-location="footer" href="/company/terms" rel="nofollow" target="website_terms">Website terms</a><a class="footer-secondary-group__item" data-nav="foot_general_editorial_policy" data-ui-location="footer" href="/company/editorial-policy" rel="nofollow" target="editorial_policy">Editorial policy</a><a class="footer-secondary-group__item" data-nav="foot_general_privacy_policy" data-ui-location="footer" href="/company/privacy-policy" rel="nofollow" target="private_policy">Privacy policy</a><a class="footer-secondary-group__item" data-nav="foot_general_license_information" data-ui-location="footer" href="/license-info" rel="nofollow" target="license_info">License information</a><a class="footer-secondary-group__item--last" data-nav="foot_general_site_map" data-ui-location="footer" href="/company/sitemap" target="aboutus_sitemap">Site map</a></div> --}}
</div>
</div>
</footer-links>
</footer>

<script>(function() {
  window.localeStrings = window.localeStrings || {};

  window.visitorExperiencesData = window.visitorExperiencesData || {};
  var veData = {"gettylimiteduseproducts":{"is_active":true,"active_offers":{}},"papermissions":{"is_active":true,"active_offers":{}},"editorialrf":{"is_active":true,"active_offers":{}},"licensingbenefitsmessaging":{"is_active":true,"active_offers":{"messagelocation":"above-price"}},"similarsfrompicscout":null,"recentsearchinautosuggest":{"is_active":true,"active_offers":{}},"recentlyviewed":{"is_active":true,"active_offers":{}},"adpmarketfreezedefaultlicenseoption":null,"disableautosuggest":null};
  for (var key in veData) { window.visitorExperiencesData[key] = veData[key]; }

  //HACK? - SiteMap class script is not loaded yet, but here is where we know the values for its constructor.
  if(!window.siteMap){window.siteMap = {};}
  window.siteMap.constructorValues = {
    location: window.location,
    countryLanguagePrefixes: {},
    siteMapMethods: {"footage_request_form":"/purchase/request-preview/ASSET_ID"}
  };

  window.siteCapabilitiesData = window.siteCapabilitiesData || {};
  var scData = null;
  for (var key in scData) { window.siteCapabilitiesData[key] = scData[key]; }

  window.user = {}
  window.user.isRemembered = false;
  window.user.isAuthenticated = false;
  window.user.autoSuggestLocale = "en-us";
  window.user.isBot = false

})();
</script>
<ibm-modal></ibm-modal>
<!-- ngIf: showIbmModal -->
<newly-registered-modal page-name="asset_detail"></newly-registered-modal><!-- ngIf: showNewlyRegisteredModal --><rm-sunset-modal></rm-sunset-modal>
<!-- ngIf: showRMSunsetModal --><script>window.renderEnd = new Date().getTime();</script>

{{-- <script src="https://www.gettyimages.com/asset-detail/assets/packs/js/application-58f023bb13255dc41ce3.js"></script> --}}

<script type="text/javascript">var euCookie_data = {"language":"en-us","findOutMoreUrl":"https://www.gettyimages.com/company/privacy-policy","asset_path":"https://www.gettyimages.com/asset-detail/assets/unisporkal_engine/eu_cookie_alert","stylesheet_path":"https://www.gettyimages.com/asset-detail/assets/eu_cookie_alert"};</script>

<script src="https://www.gettyimages.com/asset-detail/assets/unisporkal_engine/eu_cookie_alert/cookie_alert_bootstrapper.js" async="async"></script>

<script src="/asset-detail/assets/packs/js/angular-locale_en-us.js"></script>

<script src="/asset-detail/assets/visitorapi-7444453d6acb8ee1a35a99b4342e6f9887371a1551c6c2c07af6bfa5f3300d45.js"></script>

<script src="/asset-detail/assets/appmeasurement-501f16ab659a1cf1fabd0b39d34d25f2c00c7f33e05a45d5c18682267fd50dfa.js"></script>

<noscript>
  <iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-P4WB37" style="display: none; visibility: hidden" width="0"></iframe></noscript>

  <script>window.genericErrorMessage = "Sorry, but we're having trouble processing your request.";
window.javascriptLoad = new Date().getTime();
window.currentSite || (window.currentSite = {});
window.currentSite.domainSuffix = "com";
window.currentSite.nickname = "getty";
window.currentSite.isGetty = true;
window.currentSite.isiStock = false;
window.currentSite.isThinkStock = false;
window.notificationsContext = 'eyJhdXRoIjoiZXlKaGJHY2lPaUpJVXpJMU5pSjkuZXlKcGMzTWlPaUozZDNjdVoyVjBkSGxwYldGblpYTXVZMjl0SWl3aVpYaHdJam94TlRjek5EZzBNREU1ZlEuQm9PZnlkNWx2YnppRnZQNi1zaFVLQUFOa2g5LUc4YlFvSWFsVXhXYmhQayIsInBheWxvYWQiOnsiY29tcGFueUlkIjpudWxsLCJjb3VudHJ5IjoiS0VOIiwidGxkX2NvdW50cnkiOnsiZGlzcGxheV9uYW1lIjpudWxsLCJsb2NhbGUiOiJlbi11cyJ9LCJjdXN0b21lcklkIjowLCJkb3dubG9hZHNfcmVtYWluaW5nIjpudWxsLCJleHBpcmluZ19iYW5uZXIiOiJub25lIiwic3Vic2NyaXB0aW9uX2RheXNfdG9fZXhwaXJhdGlvbiI6MCwic3Vic2NyaXB0aW9uX2R1cmF0aW9uIjpmYWxzZSwic3Vic2NyaXB0aW9uX3BlbmRpbmciOmZhbHNlLCJzdWJzY3JpcHRpb25fc3RhdHVzIjpmYWxzZSwiaGFzUFAiOm51bGwsImlwIjoiNDEuNzYuMTY4LjEzMyIsImlzX3RlYW1fbWVtYmVyIjpmYWxzZSwiZW1haWxfYWRkcmVzcyI6bnVsbCwibGFuZ3VhZ2UiOiJlbiIsInBhZ2UiOiJhc3NldF9kZXRhaWwiLCJwYSI6ZmFsc2UsImxvY2FsZSI6ImVuLXVzIiwicGFQcmV2aWV3IjpmYWxzZSwic2l0ZSI6ImdldHR5IiwidmlzaXRvcklkIjoiNGJiMWE5YjgtNWQxNS00MmFiLWI5NDMtNWVhODBkZmNjNTVkIiwicHJvbW9fZWxpZ2liaWxpdHkiOiJub25lIiwic2FsZSI6ZmFsc2UsImFkcF9jb2xsZWN0aW9uIjoib3RoZXIiLCJleHBlcmllbmNlcyI6eyJhbm5vdW5jZV9icmF6aWxfc2l0ZSI6ZmFsc2UsImFubm91bmNlX2hvbmdfa29uZ19zaXRlIjpmYWxzZSwiYW5ub3VuY2VfbGF0YW1fc2l0ZSI6ZmFsc2UsImV4cGlyaW5nX3N1YnNjcmlwdGlvbiI6ZmFsc2UsImdlb19wcmljaW5nX2xvd19wcmljZXMiOmZhbHNlLCJnZW9fcHJpY2luZ19sb3dfcHJpY2VzXzFCIjpmYWxzZSwiZ2VvX3ByaWNpbmdfcHJvbW8iOmZhbHNlLCJnZW9fcHJpY2luZ19wcm9tb18xQiI6ZmFsc2UsImlibSI6dHJ1ZSwibmV3bHlfcmVnaXN0ZXJlZCI6ZmFsc2UsInBlcmIiOnRydWUsInBwUHJvbW8iOnRydWUsInJlbmV3X2NvdXBvbiI6ZmFsc2UsInJtX3N1bnNldCI6dHJ1ZSwic3VzcGVuZGVkX3N1YnNjcmlwdGlvbiI6ZmFsc2V9LCJzZWdtZW50YXRpb24iOnt9fX0=';</script>



<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://ct.pinterest.com/v3/?tid=2615674120364&amp;noscript=1">
</noscript>

<script type="text/javascript" id="">(function(){(function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))})(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","106261433049264");fbq("track","PageView")})();</script>

<script src="https://users.worldphoto.org/js/jquery.min.js"></script>
<script type="text/javascript">

  $('.price_list').click(function(event) {
        $('.price_list').css("background", "#fff");
        $(this).css("background", "#f3f3f3");
        $(this).find('.radioss').prop('checked', 'checked');
        console.log($(this).find('.radioss'));
        $('#dis_pay').text($(this).find('.asset-size-item-price__price').text());
  });


      $("#add_to_cart").click(function(){

 // $.ajaxSetup({
 //      headers: {
 //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 //        }
 //    });

      
        $.ajax({
        url: '{{ route('add-cart') }}',
        type: 'POST',
        data: {

          upload_id: $(this).data('id'),
          _token: '{{csrf_token()}}',

        },
        success: function(response){
          if(response !="")
          {
            
            $('#cart_count').html(response);

            // $('#my_alert').css("display","block");

        //     setTimeout(function(){
        //          $('#my_alert').fadeOut('fast');
            
        // }, 2000);

          $('#checkout').css("display","block");
          
          $('#add_to_cart').css("display","none");
        }

        },
        error: function(jqXHR, textStatus, errorThrown){
          console.log(errorThrown);
          alert(errorThrown);
        }
      });

        return false;
    });

</script>
</body></html>
