/* 
 * JSNLog 2.29.0
 * Open source under the MIT License.
 * Copyright 2012-2017 Mattijs Perdeck All rights reserved.
 */
var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(a,c,f){a!=Array.prototype&&a!=Object.prototype&&(a[c]=f.value)};$jscomp.getGlobal=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global&&null!=global?global:a};$jscomp.global=$jscomp.getGlobal(this);
$jscomp.polyfill=function(a,c,f,e){if(c){f=$jscomp.global;a=a.split(".");for(e=0;e<a.length-1;e++){var k=a[e];k in f||(f[k]={});f=f[k]}a=a[a.length-1];e=f[a];c=c(e);c!=e&&null!=c&&$jscomp.defineProperty(f,a,{configurable:!0,writable:!0,value:c})}};$jscomp.polyfill("Object.setPrototypeOf",function(a){return a?a:"object"!=typeof"".__proto__?null:function(a,f){a.__proto__=f;if(a.__proto__!==f)throw new TypeError(a+" is not extensible");return a}},"es6","es5");
var __extends=this&&this.__extends||function(){var a=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(a,f){a.__proto__=f}||function(a,f){for(var c in f)f.hasOwnProperty(c)&&(a[c]=f[c])};return function(c,f){function e(){this.constructor=c}a(c,f);c.prototype=null===f?Object.create(f):(e.prototype=f.prototype,new e)}}();
function JL(a){if(!a)return JL.__;Array.prototype.reduce||(Array.prototype.reduce=function(a,c){for(var f=c,e=0;e<this.length;e++)f=a(f,this[e],e,this);return f});var c="";return("."+a).split(".").reduce(function(a,e,k,n){c=c?c+("."+e):e;e=a["__"+c];void 0===e&&(JL.Logger.prototype=a,e=new JL.Logger(c),a["__"+c]=e);return e},JL.__)}
(function(a){function c(a,b,g){void 0!==b[a]&&(null===b[a]?delete g[a]:g[a]=b[a])}function f(d){if(null!=a.enabled&&!a.enabled)return!1;try{if(d.userAgentRegex&&!(new RegExp(d.userAgentRegex)).test(navigator.userAgent))return!1}catch(b){}try{if(d.ipRegex&&a.clientIP&&!(new RegExp(d.ipRegex)).test(a.clientIP))return!1}catch(b){}return!0}function e(a,b){try{if(a.disallow&&(new RegExp(a.disallow)).test(b))return!1}catch(g){}return!0}function k(a){return"function"==typeof a?a instanceof RegExp?a.toString():
a():a}function n(d){d=k(d);switch(typeof d){case "string":return new l(d,null,d);case "number":var b=d.toString();return new l(b,null,b);case "boolean":return b=d.toString(),new l(b,null,b);case "undefined":return new l("undefined",null,"undefined");case "object":if(d instanceof RegExp||d instanceof String||d instanceof Number||d instanceof Boolean)return b=d.toString(),new l(b,null,b);b="function"===typeof a.serialize?a.serialize.call(this,d):JSON.stringify(d);return new l("",d,b);default:return new l("unknown",
null,"unknown")}}function r(d,b,g){a.entryId++;return new t(d,b,g,a._getTime(),a.entryId)}function u(a){a.id&&(clearTimeout(a.id),a.id=null)}function v(a,b,g){var d=this;a.id||(a.id=setTimeout(function(){g.call(d)},b))}a.requestId="";a.entryId=0;a._createXMLHttpRequest=function(){return new XMLHttpRequest};a._getTime=function(){return(new Date).getTime()};a._console=console;a._appenderNames=[];var l=function(){return function(a,b,g){this.msg=a;this.meta=b;this.finalString=g}}();a.setOptions=function(a){c("enabled",
a,this);c("maxMessages",a,this);c("defaultAjaxUrl",a,this);c("clientIP",a,this);c("requestId",a,this);c("defaultBeforeSend",a,this);c("serialize",a,this);return this};a.getAllLevel=function(){return-2147483648};a.getTraceLevel=function(){return 1E3};a.getDebugLevel=function(){return 2E3};a.getInfoLevel=function(){return 3E3};a.getWarnLevel=function(){return 4E3};a.getErrorLevel=function(){return 5E3};a.getFatalLevel=function(){return 6E3};a.getOffLevel=function(){return 2147483647};var h=function(){return function(a,
b){this.inner=b;this.name="JL.Exception";this.message=n(a).finalString}}();a.Exception=h;h.prototype=Error();var t=function(){return function(a,b,g,c,f){this.l=a;this.m=b;this.n=g;this.t=c;this.u=f}}();a.LogItem=t;h=function(){function d(b,g){this.appenderName=b;this.sendLogItems=g;this.level=a.getTraceLevel();this.sendWithBufferLevel=2147483647;this.storeInBufferLevel=-2147483648;this.bufferSize=0;this.batchSize=1;this.maxBatchSize=20;this.batchTimeout=2147483647;this.sendTimeout=5E3;this.buffer=
[];this.batchBuffer=[];this.batchTimeoutTimer={id:null};this.sendTimeoutTimer={id:null};this.nbrLogItemsBeingSent=this.nbrLogItemsSkipped=0;if(void 0==b)throw"Trying to create an appender without a name or with an empty name";if(-1!=a._appenderNames.indexOf(b)){if(!b)throw"Trying to create an appender without a name or with an empty name";throw"Multiple appenders use the same name "+b;}a._appenderNames.push(b)}d.prototype.addLogItemsToBuffer=function(b){if(this.batchBuffer.length>=this.maxBatchSize)this.nbrLogItemsSkipped+=
b.length;else{if(null!=a.maxMessages){if(1>a.maxMessages)return;a.maxMessages-=b.length}this.batchBuffer=this.batchBuffer.concat(b);var g=this;v(this.batchTimeoutTimer,this.batchTimeout,function(){g.sendBatch.call(g)})}};d.prototype.batchBufferHasOverdueMessages=function(){for(var b=0;b<this.batchBuffer.length;b++)if(a._getTime()-this.batchBuffer[b].t>this.batchTimeout)return!0;return!1};d.prototype.batchBufferHasStrandedMessage=function(){return null!=a.maxMessages&&1>a.maxMessages&&0<this.batchBuffer.length};
d.prototype.sendBatchIfComplete=function(){(this.batchBuffer.length>=this.batchSize||this.batchBufferHasOverdueMessages()||this.batchBufferHasStrandedMessage())&&this.sendBatch()};d.prototype.onSendingEnded=function(){u(this.sendTimeoutTimer);this.nbrLogItemsBeingSent=0;this.sendBatchIfComplete()};d.prototype.setOptions=function(b){c("level",b,this);c("ipRegex",b,this);c("userAgentRegex",b,this);c("disallow",b,this);c("sendWithBufferLevel",b,this);c("storeInBufferLevel",b,this);c("bufferSize",b,this);
c("batchSize",b,this);c("maxBatchSize",b,this);c("batchTimeout",b,this);c("sendTimeout",b,this);this.bufferSize<this.buffer.length&&(this.buffer.length=this.bufferSize);if(this.maxBatchSize<this.batchSize)throw new a.Exception({message:"maxBatchSize cannot be smaller than batchSize",maxBatchSize:this.maxBatchSize,batchSize:this.batchSize});return this};d.prototype.log=function(a,g,d,c,m,w,h){!f(this)||!e(this,w)||m<this.storeInBufferLevel||(a=r(m,w,h),m<this.level?0<this.bufferSize&&(this.buffer.push(a),
this.buffer.length>this.bufferSize&&this.buffer.shift()):(this.addLogItemsToBuffer([a]),m>=this.sendWithBufferLevel&&this.buffer.length&&(this.addLogItemsToBuffer(this.buffer),this.buffer.length=0),this.sendBatchIfComplete()))};d.prototype.sendBatch=function(){if(!(0<this.nbrLogItemsBeingSent)&&(u(this.batchTimeoutTimer),0!=this.batchBuffer.length)){this.nbrLogItemsBeingSent=this.batchBuffer.length;var a=this;v(this.sendTimeoutTimer,this.sendTimeout,function(){a.onSendingEnded.call(a)});this.sendLogItems(this.batchBuffer,
function(){a.batchBuffer.splice(0,a.nbrLogItemsBeingSent);0<a.nbrLogItemsSkipped&&(a.batchBuffer.push(r(4E3,"Lost "+a.nbrLogItemsSkipped+" messages. Either connection with the server was down or logging was disabled via the enabled option. Reduce lost messages by increasing the ajaxAppender option maxBatchSize.",a.appenderName)),a.nbrLogItemsSkipped=0);a.onSendingEnded.call(a)})}};return d}();a.Appender=h;var p=function(d){function b(g){g=d.call(this,g,b.prototype.sendLogItemsAjax)||this;g.xhr=a._createXMLHttpRequest();
return g}__extends(b,d);b.prototype.setOptions=function(a){c("url",a,this);c("beforeSend",a,this);d.prototype.setOptions.call(this,a);return this};b.prototype.sendLogItemsAjax=function(b,d){try{if(f(this)){var g=this.xhr.readyState;0!=g&&4!=g&&this.xhr.abort();g="/jsnlog.logger";null!=a.defaultAjaxUrl&&(g=a.defaultAjaxUrl);this.url&&(g=this.url);this.xhr.open("POST",g);this.xhr.setRequestHeader("Content-Type","application/json");this.xhr.setRequestHeader("JSNLog-RequestId",a.requestId);var c=this;
this.xhr.onreadystatechange=function(){4==c.xhr.readyState&&200<=c.xhr.status&&300>c.xhr.status&&d()};var e={r:a.requestId,lg:b};"function"===typeof this.beforeSend?this.beforeSend.call(this,this.xhr,e):"function"===typeof a.defaultBeforeSend&&a.defaultBeforeSend.call(this,this.xhr,e);var h=JSON.stringify(e);this.xhr.send(h)}}catch(y){}};return b}(h);a.AjaxAppender=p;var q=function(c){function b(a){return c.call(this,a,b.prototype.sendLogItemsConsole)||this}__extends(b,c);b.prototype.clog=function(b){a._console.log(b)};
b.prototype.cerror=function(b){a._console.error?a._console.error(b):this.clog(b)};b.prototype.cwarn=function(b){a._console.warn?a._console.warn(b):this.clog(b)};b.prototype.cinfo=function(b){a._console.info?a._console.info(b):this.clog(b)};b.prototype.cdebug=function(b){a._console.debug?a._console.debug(b):this.cinfo(b)};b.prototype.sendLogItemsConsole=function(b,c){try{if(!f(this)||!a._console)return;var d;for(d=0;d<b.length;++d){var g=b[d],e=g.n+": "+g.m;"undefined"===typeof window&&(e=new Date(g.t)+
" | "+e);g.l<=a.getDebugLevel()?this.cdebug(e):g.l<=a.getInfoLevel()?this.cinfo(e):g.l<=a.getWarnLevel()?this.cwarn(e):this.cerror(e)}}catch(x){}c()};return b}(h);a.ConsoleAppender=q;h=function(){function a(a){this.loggerName=a;this.seenRegexes=[]}a.prototype.setOptions=function(a){c("level",a,this);c("userAgentRegex",a,this);c("disallow",a,this);c("ipRegex",a,this);c("appenders",a,this);c("onceOnly",a,this);this.seenRegexes=[];return this};a.prototype.buildExceptionObject=function(a){var b={};a.stack?
b.stack=a.stack:b.e=a;a.message&&(b.message=a.message);a.name&&(b.name=a.name);a.data&&(b.data=a.data);a.inner&&(b.inner=this.buildExceptionObject(a.inner));return b};a.prototype.log=function(a,c,d){var b=0;if(!this.appenders)return this;if(a>=this.level&&f(this)&&(d?(b=this.buildExceptionObject(d),b.logData=k(c)):b=c,c=n(b),e(this,c.finalString))){if(this.onceOnly)for(b=this.onceOnly.length-1;0<=b;){if((new RegExp(this.onceOnly[b])).test(c.finalString)){if(this.seenRegexes[b])return this;this.seenRegexes[b]=
!0}b--}c.meta=c.meta||{};for(b=this.appenders.length-1;0<=b;)this.appenders[b].log(1E3>=a?"trace":2E3>=a?"debug":3E3>=a?"info":4E3>=a?"warn":5E3>=a?"error":"fatal",c.msg,c.meta,function(){},a,c.finalString,this.loggerName),b--}return this};a.prototype.trace=function(a){return this.log(1E3,a)};a.prototype.debug=function(a){return this.log(2E3,a)};a.prototype.info=function(a){return this.log(3E3,a)};a.prototype.warn=function(a){return this.log(4E3,a)};a.prototype.error=function(a){return this.log(5E3,
a)};a.prototype.fatal=function(a){return this.log(6E3,a)};a.prototype.fatalException=function(a,c){return this.log(6E3,a,c)};return a}();a.Logger=h;a.createAjaxAppender=function(a){return new p(a)};a.createConsoleAppender=function(a){return new q(a)};h="undefined"!==typeof window?new p(""):new q("");a.__=new a.Logger("");a.__.setOptions({level:a.getDebugLevel(),appenders:[h]})})(JL||(JL={}));"undefined"!==typeof exports&&(exports.__esModule=!0,exports.JL=JL);var define;
"function"==typeof define&&define.amd&&define("jsnlog",[],function(){return JL});"function"==typeof __jsnlog_configure&&__jsnlog_configure(JL);"undefined"===typeof window||window.onerror||(window.onerror=function(a,c,f,e,k){JL("onerrorLogger").fatalException({msg:"Uncaught Exception",errorMsg:a?a.message||a:"",url:c,"line number":f,column:e},k);return!1});
"undefined"===typeof window||window.onunhandledrejection||(window.onunhandledrejection=function(a){JL("onerrorLogger").fatalException({msg:"unhandledrejection",errorMsg:a.reason?a.reason.message:a.message||null},a.reason)});
// Limit scope pollution from any deprecated API
(function() {

var matched, browser;

// Use of jQuery.browser is frowned upon.
// More details: http://api.jquery.com/jQuery.browser
// jQuery.uaMatch maintained for back-compat
jQuery.uaMatch = function( ua ) {
ua = ua.toLowerCase();

var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
/(webkit)[ \/]([\w.]+)/.exec( ua ) ||
/(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
/(msie) ([\w.]+)/.exec( ua ) ||
ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
[];

return {
browser: match[ 1 ] || "",
version: match[ 2 ] || "0"
};
};

matched = jQuery.uaMatch( navigator.userAgent );
browser = {};

if ( matched.browser ) {
browser[ matched.browser ] = true;
browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if ( browser.chrome ) {
browser.webkit = true;
} else if ( browser.webkit ) {
browser.safari = true;
}

jQuery.browser = browser;

jQuery.sub = function() {
function jQuerySub( selector, context ) {
return new jQuerySub.fn.init( selector, context );
}
jQuery.extend( true, jQuerySub, this );
jQuerySub.superclass = this;
jQuerySub.fn = jQuerySub.prototype = this();
jQuerySub.fn.constructor = jQuerySub;
jQuerySub.sub = this.sub;
jQuerySub.fn.init = function init( selector, context ) {
if ( context && context instanceof jQuery && !(context instanceof jQuerySub) ) {
context = jQuerySub( context );
}

return jQuery.fn.init.call( this, selector, context, rootjQuerySub );
};
jQuerySub.fn.init.prototype = jQuerySub.fn;
var rootjQuerySub = jQuerySub(document);
return jQuerySub;
};

})();(function($) {
$('a[data-reveal-id]').on('click', function(e) {
e.preventDefault();
var modalLocation = $(this).attr('data-reveal-id');
$('#'+modalLocation).reveal($(this).data());
});
$.fn.reveal = function(options) {


var defaults = {
animation: 'fadeAndPop',
animationspeed: 300,
closeonbackgroundclick: true,
dismissmodalclass: 'close-reveal-modal',
closeOnEsc: true,
close: function(){}
}; 

var options = $.extend({}, defaults, options); 

return this.each(function() {

var modal = $(this),
topMeasure= parseInt(modal.css('top')),
topOffset = modal.height() + topMeasure,
locked = false,
modalBG = $('.reveal-modal-bg');


if(modalBG.length == 0) {
modalBG = $('<div class="reveal-modal-bg" />').insertAfter(modal);
}

modal.bind('reveal:open', function () {
modalBG.unbind('click.modalEvent');
$('.' + options.dismissmodalclass).unbind('click.modalEvent');
if(!locked) {
lockModal();
if(options.animation == "fadeAndPop") {
modal.css({'top': $(document).scrollTop()-topOffset, 'opacity' : 0, 'visibility' : 'visible'});
modalBG.fadeIn(options.animationspeed/2);
modal.delay(options.animationspeed/2).animate({
"top": $(document).scrollTop()+topMeasure + 'px',
"opacity" : 1
}, options.animationspeed,unlockModal());
}
if(options.animation == "fade") {
modal.css({'opacity' : 0, 'visibility' : 'visible', 'top': $(document).scrollTop()+topMeasure});
modalBG.fadeIn(options.animationspeed/2);
modal.delay(options.animationspeed/2).animate({
"opacity" : 1
}, options.animationspeed,unlockModal());
} 
if(options.animation == "none") {
modal.css({'visibility' : 'visible', 'top':$(document).scrollTop()+topMeasure});
modalBG.css({"display":"block"});
unlockModal()
}
if(options.animation == "none2") {
modal.css({'visibility' : 'visible'});
modalBG.css({"display":"block"});
unlockModal()
}
}
modal.unbind('reveal:open');
}); 

modal.bind('reveal:close', function () {
if(!locked) {
lockModal();
if(options.animation == "fadeAndPop") {
modalBG.delay(options.animationspeed).fadeOut(options.animationspeed);
modal.animate({
"top":$(document).scrollTop()-topOffset + 'px',
"opacity" : 0
}, options.animationspeed/2, function() {
modal.css({'top':topMeasure, 'opacity' : 1, 'visibility' : 'hidden'});
unlockModal();
});
}
if(options.animation == "fade") {
modalBG.delay(options.animationspeed).fadeOut(options.animationspeed);
modal.animate({
"opacity" : 0
}, options.animationspeed, function() {
modal.css({'opacity' : 1, 'visibility' : 'hidden', 'top' : topMeasure});
unlockModal();
});
}
if(options.animation == "none") {
modal.css({'visibility' : 'hidden', 'top' : topMeasure});
modalBG.css({'display' : 'none'});
}
if(options.animation == "none2") {
modal.css({'visibility' : 'hidden'});
modalBG.css({'display' : 'none'});
}
options.close();
}
modal.unbind('reveal:close');
});

modal.trigger('reveal:open')

var closeButton = $('.' + options.dismissmodalclass).bind('click.modalEvent', function () {
modal.trigger('reveal:close')
});

if(options.closeonbackgroundclick) {
modalBG.css({"cursor":"pointer"})
modalBG.bind('click.modalEvent', function () {
modal.trigger('reveal:close')
});
}
$('body').keyup(function(e) {
if ( options.closeOnEsc ) {
//
// Did the escape key get triggered?
//
if ( e.which === 27 ) { // 27 is the keycode for the Escape key
//
// Escape key was triggered.
// Trigger the modal 'close' event.
//
modal.trigger( 'reveal:close' );
}
}
});

function unlockModal() { 
locked = false;
}
function lockModal() {
locked = true;
}

});
}
})(jQuery);

var navSpeed=250;

//$("section.content").css({minHeight:$(document).height()-100});

var marginLeft="65%";
function closeNavLeft(){
var mainContent = $('#wrapper.wide');
var navbarContent = $('.navbarMenu');

$("#main_content").css({opacity:1});

$(".navbarMenu").animate({marginLeft:'-100%'},190, function() {
$(this).hide();
});

mainContent.animate({
'margin-left' : "-="+marginLeft
},navSpeed-100,function(){
mainContent.css('margin-left','0%');
mainContent.css('left','0%');
mainContent.unbind('touchmove');
mainContent.removeClass('menuOpen');

$(".logged-out footer, .logged-out #ambassadors").show();
});
if($("html").hasClass("mobile")){
$(".featured-contest-bg").css("position","fixed");
}
}
function openNavLeft(){
//if($("html").hasClass("mobile")){
$(".featured-contest-bg").css("position","absolute");
//}
var mainContent = $('#wrapper.wide');
var navbarContent = $('.navbarMenu');

navbarContent.css('display','inline');
navbarContent.css('position','absolute');
mainContent.addClass('menuOpen');

mainContent.bind('touchmove',function(e){
e.preventDefault();
});

$(".logged-out footer, .logged-out #ambassadors").hide();

marginLeft = '65%';

$(".navbarMenu").css({ marginLeft: '-100%', width:'100%'});
$(".navbarMenu").animate({marginLeft:0},190);

mainContent.animate({
'margin-left' : "+=" + marginLeft
},navSpeed);
$("#main_content").animate({opacity:0.5});

}
$('.column_x.navbar').on("click",function(e){
e.preventDefault();
var navbarContent = $('.navbarMenu');

var orientation = ($(window).height() < $(window).width())?'landscape':'portrait';

if(navbarContent.css('display') != "none"){
$(this).css({opacity:1});
closeNavLeft(orientation);
}
else{
$(this).css({opacity:0.6});
openNavLeft(orientation);
}
});

var the_action = "click";
if($('.mobile').length > 0) {
the_action = "touchend";
}

$('.navbarMenu, .navbarMenu .navbarMenuCont').on(the_action,function(e){
if(e.currentTarget.className == 'navbarMenu') {
var orientation= ($(window).height() < $(window).width())?'landscape':'portrait';
closeNavLeft(orientation);
}
});

$('.navbarMenuRight, .navbarMenuRight .navbarMenuCont').on(the_action,function(e){
if(e.currentTarget.className == 'navbarMenuRight') {
var orientation= ($(window).height() < $(window).width())?'landscape':'portrait';
closeNavRight(orientation);
$('.user_navigation').css({opacity:1});
}
});


$(document).ready(function(){

$('a.categoryPC').parent().css('background-color','#000');


// ON CLICK any item.. Close nav
$('.navbarMenu ul.box-menu a, .navbarMenu .navbarMenuClose').on("click",function(){
closeNavLeft();
});
$('.user_navigation ul.box-menu a').on("click",function(){
//closeNavRight(($(window).height() < $(window).width())?'landscape':'portrait');
});

$('.navbarMenu .imgCancel').on("click",function(e){
e.preventDefault();
var orientation= ($(window).height() < $(window).width())?'landscape':'portrait';
closeNavLeft(orientation);

});

$('.mobileNavbar .user_navigation, .mobile .logged-in .normalNavbar .user_navigation .box-menu a').on("click",function(e){
e.preventDefault();
var navbarContent = $('.navbarMenuRight');

var orientation= ($(window).height() < $(window).width())?'landscape':'portrait';

if(navbarContent.css('display') !== "none"){
$(this).css({opacity:1});
closeNavRight(orientation);
}else{
$(this).css({opacity:0.3});
openNavRight(orientation);
}

});
});

function closeNavRight(orientation){
var mainContent = $('#wrapper.wide');
var navbarContent = $('.navbarMenuRight');

/*navbarContent.animate({marginLeft:'100%'},navSpeed + 100, function() {
$(this).hide();
});*/


if(orientation == 'landscape'){
mainContent.animate({
'margin-left' : "+=38%"
},navSpeed-100,function(){
navbarContent.hide();
mainContent.css('margin-left','0%');
mainContent.css('left','0%');
mainContent.unbind('touchmove');
mainContent.removeClass('menuOpen');
});

}
else{
mainContent.animate({
'margin-left' : "+=57%"
},navSpeed-100,function(){
navbarContent.hide();
mainContent.css('margin-left','0%');
mainContent.css('left','0%');
mainContent.unbind('touchmove');
mainContent.removeClass('menuOpen');
});
}

$("#main_content").animate({opacity:1});
}

function openNavRight(orientation){
var mainContent = $('#wrapper.wide');
var navbarContent = $('.navbarMenuRight');

navbarContent.css('display','inline');
navbarContent.css('position','absolute');
mainContent.addClass('menuOpen');

mainContent.bind('touchmove',function(e){
e.preventDefault();
});

if(orientation == 'landscape'){

navbarContent.css('width','100%');
mainContent.animate({
'margin-left' : "-=70%"
},navSpeed);
}
else{
navbarContent.css('width','100%');
mainContent.animate({
'margin-left' : "-=70%"
},navSpeed);

}

$("#main_content").animate({opacity:0.5});
}
var message_content = '<div style="font-family: helvetica neue,helvetica, sans-serif; font-size: 20px; font-weight: 300; line-height: 30px; padding: 10px 20px;"><div style="border-bottom: 1px solid; padding: 5px 0px; font-weight: 400; font-size: 18px; margin: 0px 20px 15px;">Connecting your account</div><div>"Photography helps people to see"</div><div>- Berenice Abbott</div></div>';

function signupUpdate(user) { 
if(typeof user.error !== "undefined"){
alert("Facebook error: " + user.error.message);
$("#popup").hide();
return;
}


var popup = $("#popup");

popup.find('.content:first').html(message_content);

var paramRedirect = getUrlParameterByName("destination");
paramRedirect = (window.location.pathname.match('login') ? '?destination='+paramRedirect: '');

vgbgt = $("#vbtk").val();
vgbgn = $("#vbtn").val();

$.ajax({
type:'POST',
url: '/user/signup/facebook' + paramRedirect,
data: {user: user, token: FB.getAccessToken(),vbtk: vgbgt, vbtn: vgbgn},
success: function(resp){
if(typeof resp != "undefined" && typeof resp.messages != "undefined" && typeof resp.messages.error== "undefined"){
popup.hide();
alert(resp.messages);
}else if (resp && resp.redirect) {
popup.find('.content:first').html(message_content);

if($('#vote-signup').length > 0) {
redirect(window.location.pathname);
} else {
redirect(resp.redirect);
}
}else if(resp && resp.messages && resp.messages.error ){
popup.hide();
alert(resp.messages.error);
} else {
popup.find('.header .title').html('Signup Update');
popup.find('.content:first').html(message_content);
}
},
error:function(XMLHttpRequest, textStatus, errorThrown) {
alert("Error connectig with your account");
}
});

}

$(document).ready(function() {
$('.form-item .title').hide();
$('.fb-login').on('click', function(){
var popup = popFullscreenHtml(
null,
message_content,
'popup',
null,
'blank'
);

if (popup) {
popup.find('.container').css({marginLeft: -200});
popup.find('.container > .content').css({borderRadius:0});
}

fbTask();

}
);
var containerHeight = $(document).height();

$('.checkbox').on('click', function(){
$(this).parent().children(':checkbox.email_notifications').click();
});

$('.form-item').click(function() {
if($(this).parent().hasClass('form-content')) {
$('.clicked').removeClass('clicked');
$(this).addClass('clicked');
}
});

$('#button_email a').click(function() {
$('#user_signup').addClass('show-inputs');
$(this).hide().parent();
$('#button_email').height(0);
});

$(document).on('click','.abcRioButtonContentWrapper', function(e) {
timesgoggleclick=1;
});
});

$('.faceoa2').on('click', function(e){
e.preventDefault();

var popup = popFullscreenHtml(
null,
message_content,
'popup',
null,
'blank'
);


if($("html").hasClass("mobile")){
document.location = ($(this).attr("href"));
return ;
}

var newWin = popupCenter($(this).attr("href")+"?src=popup","Please wait...",600,500);
if(!newWin || newWin.closed || typeof newWin.closed==='undefined') {
document.location = ($(this).attr("href"));
return ;
}

});
function popupCenter(url, title, w, h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2) + 130;
var sizes = (screen.width> 1000) ? ', width='+w+', height='+h : '';
return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, copyhistory=no, top='+top+', left='+left + sizes);
} 

function loginfacecompleted(status, url_redirect){
if(status===1){
if(typeof url_redirect !='undefined'){
document.location = url_redirect;
}else{
location.reload();
}
return;
}

$('.overlay').click();

if(status===2){
alert("Communication with Facebook was cancelled.");
return;
}
alert("Communication with Facebook was interrupted. Please try again. \n\nError Code: " + status);
}

var timesgoggleclick=0;
function onSignIn(googleUser) {
if(timesgoggleclick==0){
timesgoggleclick++;
return;
}
var id_token = googleUser.getAuthResponse().id_token;
alert("Please wait...");

$.post('/user/login-google',{idtoken:id_token},function(response){
if(response.success){
parent.document.location = response.redirect;
}else if(typeof response.messages == "undefined"){
$(".main-popupx").trigger("click");
alert("Communication with Google was interrupted. Please try again.");
}else{
$(".main-popupx").trigger("click");
alert(response.messages.error[0]);
}
});
}
function onGoogleFailure(error) {
alert("Communication with Google was cancelled.");
}
window.onLoadCallback = function(){
gapi.signin2.render('google-signin', {
'scope': 'profile email',
'width': 276,
'height': 50,
'longtitle': true,
'theme': 'dark',
'onsuccess': onSignIn,
'onfailure': onGoogleFailure
});
};
$(document).ready(function(){
$('#ambassador_overlay, #ambassador_wrapper').delay(1000).fadeIn(600);
});if($('.mobile').length == 0) {
$('#profile_content').css({ 'min-height': $(window).height() + 'px' });
document.documentElement.scrollTop = $(window).height() / 2;
document.body.scrollTop = $(window).height() / 2;
}

var popupBg = '#popup-clear-bg';
var main = '#popup-clear-main';
var insp_id = 0;
var insp_media = 0;
var insp_this = null;

var url_prefix = (version == 1 ? '/member': '');
// var url_prefix2 = (version == 1 ? '/member': '');
var totalThumbs = 0;
var curThumb = 0;
var infIsLoaded = false;

var pResize = $('#parallax-resize').val();
var pSize = parseFloat($('#parallax-size').val());
var maxSize = 5000;

function profileRequest(content, container, scroll_enabled, callback, albums) {
if(content === '/user/contests/submissions' || content === '/user/challenges/submissions'){
return;
}
$('.mobile .top-profile-hidden-menu .has-menu .box-menu').hide();

if(content.indexOf("/activity") > -1) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-filter").hide();
$("#gallery-challenges").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();
}

if (typeof albums != 'undefined' && albums == true) {
$('#pop_album, #pop_album_bg').fadeIn(800);
return;
}

if (typeof container == 'undefined' || !container) {
var container = '#profile_content';
}

$(window).unbind('.infscr');

var request = function() {
$(container).html("");

$.get(
url_prefix + content, '',
function(data) {
if (!setRespMessages(data, container, true)) {
if ($('.ie').length > 0) {
var myNav = navigator.userAgent.toLowerCase();
var myVer = parseInt(myNav.split('msie')[1]);

if(myVer < 9) {
if (data.match(/text\/javascript/)) {
$(container).html(data);
}
$(container)[0].innerHTML = data;
} else {
$(container).html(data);
}
} else {
$(container).html(data);
}

if(!$('body').hasClass('infinitescroll')) {
$('#collection-popup .box-pager a').each(function(index) {
$(this).attr('data-url', $(this).attr('href'));
$(this).attr('href', 'javascript:');
});
}
}

if(content.indexOf("contests") != -1) {
try{
FB.XFBML.parse();
} catch(ex){}

//stButtons.locateElements();

$('thumbnail').hide();
$('thumbnail').show();

if($('#offsetContestID').length > 0) {
if($('#' + $('#offsetContestID').val()).length > 0) {
totalThumbs = $('.profile-contests thumbnail .box-crop img').length;
$('.profile-contests thumbnail .box-crop img').on('load',function() {
curThumb++;
if(curThumb == totalThumbs) {
var offset = $('#' + $('#offsetContestID').val()).offset();
$('html, body').animate({scrollTop: offset.top - 100}, 0);
}
});
}
}
}

attachTooltipEvent(container);
attachGalleryWaterfallEvent(container);

// press gallery medium size photos
$(container).find('gallery.photo.press').on('mousedown', '.protect-photo', function(e) {
switch (e.which) {
case 1:
e.preventDefault();
redirect('/photo/'+ $(this).attr('media_id'));
break;
case 2:
case 3:
$(this).parent().find('img').attr('src', (version == 1 ? '/vb2/public': '') +'/media/images/layout/warning/warning_medium.png');
$(this).parent().find('.photo').addClass('why');
break;
default:
alert('You have a strange mouse');
break;
}
}
).bind("contextmenu",function(e){
return false;
});

if (typeof callback != 'undefined' && callback!=null && callback != "") {
//callback(container, data);
var fn = window[callback];
if(typeof fn == "function"){
fn(container,data);
}
else{
callback(container,data);
}
}

//setAlbumButtonPosition();
//
//Infinite scroll
if(content.indexOf("/gallery") != -1 || content.indexOf("/contests") != -1 || content.indexOf("/challenges") != -1 || (content.indexOf("/photos") != -1 && content.indexOf("followers") == -1 && content.indexOf("following") == -1) || content.indexOf("/awards") != -1 || content.indexOf("/favorite") != -1 || content.indexOf("/collections") != -1) {
var isMasonry= true;

if($("#galinf").hasClass("mosaicwt")){
isMasonry = false;
if(typeof replaceDelayedImages!=="undefined"){
replaceDelayedImages(true);
}
}
if(typeof setInfiniteScroll=="undefined"){
if(typeof setLazy !="undefined"){
setLazy();
}
}
else{
if ($("gallery").hasClass("press")){
setInfiniteScroll("#galinf",'.box-pager', '.box-pager a.next','gallery item',false, "");
}
else{
if((content.indexOf("contests") != -1 || content.indexOf("challenges") != -1 || content.indexOf("collections") != -1) && content.indexOf("filter=rank") == -1){
setInfiniteScroll("#gallery-subs",'.box-pager', '.box-pager a.next','#gallery-subs column',false, "");
}
else{
if($("#galinf").length>0){
setInfiniteScroll("#galinf",'.box-pager', '.box-pager a.next','gallery.photo thumbnail',isMasonry, "");
}
}
}
}

if(content.indexOf("/awards") != -1) {
showAwards();
}
}
else if(content.indexOf("followers") != -1 || content.indexOf("following") != -1) {
$('#profile_content .box-pager').hide();
showMembers();
}
else if(content.indexOf("awards") != -1){
replaceDelayedImages(true);
}

if(content.indexOf("/contests") != -1 || content.indexOf("/challenges") != -1) {
$('gallery.challenges thumbnail .box-crop img').each( function() {
$(this).height($(this).width());
});

$(window).resize(function() {
$('gallery.challenges thumbnail .box-crop img').height('auto');
});
}

$('#profile_content').off().on('click', '.top.remove a', function() { 
$(popupBg).fadeIn(500);
$(main).removeClass();
$(main).addClass('join-upgrade').addClass('profile-favorites').addClass('remove-inspiration');
$(main).html('<h1>Are you sure you want to remove this image?</h1><div class="text"><a href="javascript:" class="cancel-remove">Cancel</a> <a href="javascript:" class="continue-remove">Continue</a></div>');
$(main).fadeIn(500);

insp_id = $(this).attr('data-id');
insp_media = $(this).attr('data-media-id');
insp_this = $(this);

$('.continue-remove').click(function() {
//$(main).html('');

$.get(
'/user/settings/inspiration?id=' + insp_id + '&media_id=' + insp_media,
function(resp) {
insp_this.parent().parent().parent().parent().parent().css({ opacity:0.2 });
insp_this.remove();
$(popupBg).click();
}
);
});

$(popupBg + ", .cancel-remove").click(function() {
$(popupBg + ", " + main).fadeOut(800, function() {
$(main).html('');
});
});
});

$('.edit-links .delete-link').off().on('click', function(e){
var element = this;
e.preventDefault();

if (confirm('Are you sure you want to delete this album?')){
$.getJSON($(this).attr('href'),function(resp){
if (resp){
if (resp && resp.messages && resp.messages.error && resp.messages.error.length > 0) {
setRespMessages(resp);

} else {
$(element).parents('thumbnail:first').hide('slow');
}
}
});
}
});

resizeInContests();

if (typeof addPeerDropEvents == 'function') {
addPeerDropEvents();
}

if (typeof addLikeEvents == 'function') {
addLikeEvents();
}

if (content.match(/album/)) {
$('.box-pager').addClass('show');

}
attachGalleryOnEvents();
});

}

var scroll = function() {
if (scroll_enabled) {
request();

var scroll_to = $('.top-profile-avatar');
scroll_to = scroll_to.offset().top;
$("html, body").animate({ scrollTop: scroll_to }, 0);
} else {
request();
}
}

var loading = function() {
if ($(container).is(':hidden')) {
$(container).html('<loading></loading>');
$(container).slideDown('slow', function(){
scroll();
});

} else {
$(container).html('<loading></loading>');
scroll();
}
}

loading();
}

function showAwards() {
$("#galinf thumbnail .content img").one("load", function() {
if(!$(this).hasClass('added')) {
$(this).addClass('added').css({ opacity: 1 });//.hide().fadeIn(300);
$(this).parent().parent().parent().children('.expand-items').fadeIn(800);
}

}).each(function() {
if(this.complete) $(this).trigger('load');
});
}

function showMembers() {
$("#members-gallery .member-block .member-image img").one("load", function() {
if(!$(this).hasClass('added')) {
$(this).addClass('added').parent().parent().css({ opacity:1 }).hide().fadeIn(300);
}

if(!$('#profile_content .box-pager').hasClass('added')) {
$('#profile_content .box-pager').addClass('added').show();
}

}).each(function() {
if(this.complete) $(this).trigger('load');
});
}

function initProfle(default_url) {
var url = !window.location.hash ? !default_url ? '': default_url: window.location.hash.replace(/#/,'').replace('?&', '?');

$('.top-profile-menu .box-menu li.first a').addClass('active');

if (url && url != '') {
if (window.location.hash) {
url = url.replace(url_prefix, '');
var req_type = url.replace('/' + user.username + '/','');
if (req_type == "activity") {
profileRequest('/'+ user.username +'/activity',null,null,loadProfileScripts);
setBackToTop();
return;
}
}

profileRequest(url);

if (url.match(/album/)) {
$('#profile_wrapper').addClass('no-gallery');
}
} else { 
profileRequest('/'+ user.username +'/gallery');
}

setTimeout(function(){
$("#profile-top-slideshow gallery slideshow").css({ backgroundImage: "none" });
}, 2000
);
}

function addAwardsToProfile(content) {
var container = '#profile_content';

$.get(
url_prefix + content, '',
function(data) {
$(container).html($(container).html() + data);
$('gallery.photo thumbnail').css({'top': 'auto', 'left': 'auto', 'position': 'relative'});
$('gallery.photo thumbnail').appendTo('#profile_content div:first-child gallery.photo');
$('.showMore').appendTo('#profile_content .profile-gallery-container:first-child');
$('#profile_content .profile-gallery-container:not(#profile_content .profile-gallery-container:first-child)').remove();

attachGalleryWaterfallEvent(container);
}
);
}

var currentMenu;

$(document).ready(function() {

$('.pop_album_button a').click(function() {
$('#pop_album, #pop_album_bg').fadeOut(800);

$.ajax({
url:"/user/settings/removealbums",
method:"GET",
success:function(data){
console.log(data);
}
});

$('#main-menu-options a.collections').click();
});

if($('body').hasClass('new-signup')) {
$(popupBg).fadeIn(500);
$(main).removeClass();
$(main).addClass('join-upgrade').addClass('profile-new');
$(main).html('<div class="text">This is big (literally)!<br />We\'d like to welcome you to the ViewBug family with<br />five free gorgeous, oversized prints. <a href="https://goo.gl/XMEDHB" target="_blank" class="remove-signup" style="display:block; width:250px;line-height:3;margin:20px auto 0 auto;background:#548ac1 !important;color:#FFF;">Get Your Prints</a></div>');
$(main).fadeIn(500);

$(popupBg + ", .cancel-remove").click(function() {
$.ajax({
url:"/user/settings/removesignup",
method:"GET",
success:function(data){
}
});

$(popupBg + ", " + main).fadeOut(800, function() {
$(main).html('');
});
});

$(".remove-signup").click(function() {
$.ajax({
url:"/user/settings/removesignup",
method:"GET",
success:function(data){
console.log('done');
}
});
});
}

if ($('.ie').length > 0) {
var myNav = navigator.userAgent.toLowerCase();
var myVer = parseInt(myNav.split('msie')[1]);

if(myVer < 8) {
// move user profile info after slideshow
var div = $('<div></div>');
div.css({marginLeft: -20, marginTop: -482, marginBottom: 488});

$('section.banner').after(div);
$('.box-profile.user').parent().appendTo(div);
}
}

$('#my-submissions-link').click(function(e) {
var window_url = window.location.href.replace(/#.*/, '');
var url = base_url + $(this).attr('href').replace(/#.*/, '');;

if(url == window_url) {
e.preventDefault();
profileRequest($(this).attr('href').replace(/.+#/, ''));
}
});

// profile stats and tabs
$('.top-profile-stats a:not(.other-user-links, .more-button),a#mywall,a#inspirationalgallery, #main-menu-options a,.button-market-profile a').on('click', function(e) {

currentMenu = $(this).parent().parent().parent();
if(currentMenu.hasClass('has-menu')) {
currentMenu.addClass('free');

var removeInterval = setInterval(function(){
currentMenu.removeClass('free');
}, 800);
}

if($(this).html() == 'More<span class="icon"></span>') {
e.preventDefault();
} else {
var callback = null;

var url = $(this).attr('href').replace(/#/, '');
if($(this).attr("id")=="mywall"){
$(this).addClass('wall');
url = '/'+ user.username +'/activity?page=1';
}else if($(this).attr("id")=="inspirationalgallery"){
url = '/'+ user.username +'/favorites?favorite=granted_recognition';
}

$('.top-profile-stats a').removeClass('active');
$(this).addClass('active');

if ($(this).hasClass('photos') || $(this).hasClass('awards') || $(this).hasClass('challenges') || $(this).hasClass('open_marketplace') || $(this).hasClass('collections')) {
$('#profile_wrapper').removeClass('no-gallery');
if($(this).hasClass('photos')){
$("#gallery-sort").show();
$("#gallery-type").show();
$("#gallery-filter").hide();
$("#gallery-challenges").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();
}
else if ($(this).hasClass('awards')) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-challenges").hide();
$("#gallery-filter").show();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();
}
else if ($(this).hasClass('open_marketplace')) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-challenges").hide();
$("#gallery-filter").hide();
$("#gallery-marketplace").show();
$("#gallery-inspiration").hide();
} else if ($(this).hasClass('collections')) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-challenges").hide();
$("#gallery-filter").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").show();
} else {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-filter").hide();
$("#gallery-challenges").show();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();
}
} else {
$('#profile_wrapper').addClass('no-gallery');
}

if($(this).hasClass('granted_recognition')) {
$('#profile_wrapper').addClass('no-top-insp');
} else {
$('#profile_wrapper').removeClass('no-top-insp');
}

if ($(this).hasClass('following') || $(this).hasClass('favorites') || $(this).hasClass('granted_recognition')){
$('#profile_wrapper').addClass('no-following-bottom');
}
else{
$('#profile_wrapper').removeClass('no-following-bottom');
}

if ($(this).hasClass('projects') || $(this).hasClass('favorites') || $(this).hasClass('albums') || $(this).hasClass('granted_recognition')){
callback = "callbackFix";
}

if ($(this).hasClass('wall')){
$('#profile_wrapper').addClass('no-margin-bottom');
setBackToTop();
callback = "loadProfileScripts";
}
else{
$('#profile_wrapper').removeClass('no-margin-bottom');
}

if ($(this).hasClass('favorites')) {
$(popupBg).fadeIn(500);
$(main).removeClass();
$(main).addClass('join-upgrade').addClass('profile-favorites');
$(main).html('<h1>Favoriting is no more, but your favorited images are safe and sound!</h1><div class="text">You can find them in your personal Inspiration Gallery,<br />which also includes all the photos that you' + "'" + 've given a Peer Award.</div>');
$(main).fadeIn(500);

$.get(
'/user/settings/favorite',
function(resp) { }
);

$(this).parent().remove();

$(popupBg).click(function() {
$(popupBg + ", " + main).fadeOut(800, function() {
$(main).html('');
});
});
} else {
var this_albums = ($(this).hasClass('albums') ? true : false)
profileRequest(url,null,null,callback, this_albums);
}
}
});

// gallery type and sort
$('.menu-lavalamp a, .tools-gallery a.button, .tools-gallery .dropdown ul a, .tools-gallery-following a.button, .tools-gallery-following .dropdown ul a, .tools-gallery-awards a.button, .dropdown-custom .dropdown ul a').click(function(e) {
if (!$(this).parent().hasClass('dropdown') && !$(this).hasClass('ignore-lavalamp')) {
var args = '';
var callback=null;
if (window.location.hash && window.location.hash.match(/\?(.+)/)) {
args = window.location.hash.match(/\?(.+)/)[1];
}

// page
args = args.replace(/[\&|\?]*page=(\d+)/g, '');

// type
if ($(this).attr('type')) {
args = args.replace(/[\&|\?]*type=(\w+)/g, '');
args += '&type=' + $(this).attr('type');
}

// sort
if ($(this).attr('sort')) {
args = args.replace(/[\&|\?]*sort=(\w+)/g, '');
args += '&sort=' + $(this).attr('sort');
}

// filter awards
if ($(this).attr('filter')) {
args = args.replace(/[\&|\?]*filter=(\w+)/g, '');
args += '&filter=' + $(this).attr('filter');

callback='loadProfileScripts';

if ($(this).attr('filter') == 'created' || $(this).attr('filter') == 'joined' || $(this).attr('filter') == 'rank' || $(this).attr('filter') == 'all' || $(this).attr('filter') == 'selected') {
$(this).parent().parent().children('li').removeClass('selectedLava');
$(this).parent().addClass('selectedLava');
}
}

//Following
if ($(this).attr('following')) {
args = args.replace(/[\&|\?]*following=(\w+)/g, '');
args += '&following=' + $(this).attr('following');
}
//awards
if ($(this).attr('awards')) {
args = args.replace(/[\&|\?]*awards=(\w+)/g, '');
args += '&awards=' + $(this).attr('awards');
}
//Favorites
if ($(this).attr('favorite')) {
args = args.replace(/[\&|\?]*favorite=(\w+)/g, '');
args += '&favorite=' + $(this).attr('favorite');
}

// sanitaze
args = args.replace(/^[\&|\?]*/, '');

// url
if (window.location.hash) {
window.location.hash = window.location.hash.replace(/\?.*/, '') +'?'+ args;

} else {
window.location.hash = '#/'+ user.username +'/gallery?'+ args;
}



// content
profileRequest(window.location.hash.replace(/#/,'').replace(url_prefix, ''),null,null,callback);
}
});

attachGalleryOnEvents();

// gallery load more
$('a.box-pager').on('click', function(e) {
var url = $(this).attr('href').replace(/#/, '').replace(url_prefix, '');
if (url == '') {
e.preventDefault();
return;
}

$(this).parent().remove();
addAwardsToProfile(url);
});

// Send message
$('#main_content a.send-message-link').click(function(e) {
e.preventDefault();
sendUserMessage(this);
});
/* End send message */

//--- Block User
$('a.block-user-links').click(function(e){
e.preventDefault();
blockUser(this);
});

$('a.give-extra-submission').click(function(e){
e.preventDefault();

if(!$(this).hasClass('waiting-extra')) {

$(this).addClass('waiting-extra');
var url = $(this).attr('href').replace(/#/, '');

$.get(
url,
function(resp) {
$('a.give-extra-submission').removeClass('waiting-extra');

if(resp.success == "1") {
alert("Done");
} else {
alert("Error");
}
}
);
}
});

$('a.use-inspiration').click(function(e){
e.preventDefault();

if(!$(this).hasClass('waiting-extra')) {
$(this).addClass('waiting-extra');
var url = $(this).attr('href').replace(/#/, '');
var remove = $(this).hasClass('remove') ? 0 : 1;

$.get(
url + '?key=' + remove,
function(resp) {
$('a.use-inspiration').removeClass('waiting-extra');

if(resp.success == "1") {
alert("Done");
} else {
alert("Error");
}
}
);
}
});

$('a.use-uploads').click(function(e){
e.preventDefault();

if(!$(this).hasClass('waiting-extra')) {
$(this).addClass('waiting-extra');
var url = $(this).attr('href').replace(/#/, '');
var remove = $(this).hasClass('remove') ? 0 : 1;

$.get(
url + '?key=' + remove,
function(resp) {
$('a.use-uploads').removeClass('waiting-extra');

if(resp.success == "1") {
alert("Done");
} else {
alert("Error");
}
}
);
}
});

function blockUser(obj){
var block = $(obj).attr('data-block');
//var username = $(this).attr('data-username');

if(typeof block=="undefined" && $(".unblock-user-link").length > 0){
block=-1;
}else if(typeof block=="undefined" && $(".block-user-link").length > 0){
block=2;

var popup = popMessage('Block User', '<loading></loading>');
$.get(
url_prefix + '/'+ user.username +'/block',
function(data) {
popup.find('.content:first').html(data);
attachBlockAction();
}
);
}



if (logged()) {
if (block == 1) {

$.post(
url_prefix + '/'+ user.username +'/block',
{block: block},
function(resp) {
$('.popupx').click();
if(resp.success==1){
$("a.block-user-link").html("Unblock");
$(obj).attr('data-block',"-1").html("Unblock");
}
}
);
} else if(block == -1){
$.post(
url_prefix + '/'+ user.username +'/block',
{block: "-1"},
function(resp) {
if(resp.success==1){
$("a.unblock-user-link").html("Block");
$(obj).attr('data-block',1).html("Block");
}
}
);
} 
else if(block!=2){
$('.popupx').click();
}
}
}

attachBlockAction();
//---------

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#version=v3.2&xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$('button.getbadge-profile').click(function(e) {
$('button.getbadge-profile').hide("fast",function(){
$("#soc-photo-wrapper").addClass('show').animate({
opacity:1
},"fast");//.;
});


});

//doResize(true);
fixSlideshowPhotos();

if($('#profile-black-bar').length > 0) { 
setTimeout(function() {
initProfle(); 
}, 300
);

$('ul#gallery-filter li:nth-child(' + $('#awards_index').val() + ')').addClass('selectedLava');
$('.top-profile-menu a.awards').attr('href', $('.top-profile-menu a.awards').attr('href') + $('#awards_url').val());

$("ul#main-menu-options, ul#gallery-type, ul#gallery-sort, ul#gallery-filter, ul#gallery-inspiration").lavaLamp();

var h = location.hash;
if(h.indexOf("/awards")>2){
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-challenges").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();
} else if (h.indexOf("/challenges")>2) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-filter").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();

if (h.indexOf("filter=rank")>2) {
$("#gallery-challenges li").removeClass('selectedLava');
$("#gallery-challenges li:nth-child(3)").addClass('selectedLava');
}
} else if (h.indexOf("/marketplace")>2) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-filter").hide();
$("#gallery-challenges").hide();
$("#gallery-marketplace").show();
$("#gallery-inspiration").hide();
} else if (h.indexOf("/collections")>2) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-filter").hide();
$("#gallery-challenges").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").show();
} else if (h.indexOf("/followers")>2
|| h.indexOf("/following")>2
|| h.indexOf("/favorites")>2
|| h.indexOf("/contests")>2
|| h.indexOf("/bio")>2
|| h.indexOf("/badges")>2
|| h.indexOf("/activity")>2
|| h.indexOf("/prints")>2) {
$("#gallery-sort").hide();
$("#gallery-type").hide();
$("#gallery-filter").hide();
$("#gallery-challenges").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();
} else {
$("#gallery-filter").hide();
$("#gallery-challenges").hide();
$("#gallery-marketplace").hide();
$("#gallery-inspiration").hide();
}

$("#profile_wrapper .tools-group-right .tools-group.tools-gallery").css({ opacity:1 });
}

if($('#profile-cover').length > 0) {
var tiles = $('body .lazy').fadeTo(0,0);

tiles.each(function(i) {
 $(this).fadeTo(500,1);
 var src = $(this).attr("data-src");
 if(typeof src!="undefined" && src.length>0){
 $(this).attr("src",src);
 $(this).attr("data-src","");
 $(this).removeAttr("data-src");
 $(this).removeAttr("height");
 }
});
}

$('#profile_wrapper').off().on('click', '.load-next', function() {
var this_url = $(this).attr('data-url');
$(this).parent().remove();

$.get(
this_url,
function(data) {
$('gallery.challenges.rank').append(data);
}
);
});

$('.mobile .top-profile-hidden-menu a.more-button').on('touchend', function() {
document.ontouchmove = function(e){ e.preventDefault(); }
$('.mobile .top-profile-hidden-menu .has-menu .box-menu').show();
});

$('.mobile .top-profile-hidden-menu .has-menu ul.box-menu').on('touchend touchmove', function(e) {
if(e.type != 'touchmove') {
$('.mobile .top-profile-hidden-menu .has-menu .box-menu').fadeOut(500);
document.ontouchmove = null;
}
});


if($('body').hasClass('show-categories')) {
var url = "/frontpage/wall-welcome";

$.ajax({
url:url,
success:function(data){
var $modalpopup = $("#popup-clear-main-join-upgrade");
$modalpopup.html(data).addClass('profile-cats');
$('.reveal-modal-bg').addClass('profile-cats-bg').width('100%').height('100%');

$modalpopup.reveal({
animation: 'fade', // fade, fadeAndPop, none
animationspeed: 600,
closeonbackgroundclick: true, // if you click background will modal close?,
top:0,
dismissmodalclass:'reveal-close'
});
$modalpopup.css("top",0);
}
});
}
});

function doResize() {

if($('#profile-cover').length > 0) {
wWidth = $(window).width();
wHeight = $(window).height();

$('#profile-cover-free-user').width(wWidth - 300);
$('#profile-cover gallery slideshow').width(wWidth);

theHeight = $(document).height();
maxHeight = $(window).height();

/*if($('.top-profile-stats').length == 0) {
theHeight = theHeight - 110;
maxHeight = maxHeight - 110;
}

if($('.profile-cover-photos').length == 0) {
theHeight = theHeight - 200;
maxHeight = maxHeight - 200;
}*/

if((wHeight - 40) < maxHeight) {
$('#profile-cover-user, #profile-cover-free-user').css({'margin-top': 20 + 'px', 'height': wHeight - 180 });
} else {
$('#profile-cover-user, #profile-cover-free-user').css({'margin-top': ((wHeight - 40 - (theHeight + 100)) / 2) + 'px', 'height': theHeight});
}

$('#profile-cover gallery slideshow').height(wHeight);
$('#profile-cover gallery slideshow').width(wWidth);

$.each($('slideshow a img'), function(index, element) {
imgW = $('.orig_width:eq(' + index + ')').val();
imgH = $('.orig_height:eq(' + index + ')').val();

newHeight = (wWidth * imgH) / imgW;
if(newHeight >= wHeight) {
$(element).width(wWidth);
$(element).height(newHeight);
//$('.top-profile-username').html(imgH + ' h- ' + newHeight);

} else {
newWidth = (wHeight * imgW) / imgH;
$(element).width(newWidth);
$(element).height(wHeight);

//$('.top-profile-username').html(imgW + ' w- ' + newWidth);
}
});

/*fSize = 36;
maxW = 255;

$('.top-profile-username').width('auto');

if($('.mobile').length == 0) {
do
{
if(fSize >= 22) {
$('.top-profile-username').css('font-size', fSize + 'pt');
fSize--;
} else{
$('.top-profile-username').width(maxW);
$('.top-profile-username').css('font-size', '22pt');
}
} while($('.top-profile-username').width() > maxW);
}*/
} else if($('#profile-top-slideshow').length > 0) {
wWidth = $(window).width();
wHeight = $(window).height() - 35;

if(wHeight < 150) {
wHeight = 250;
}



$.each($('slideshow a img'), function(index, element) {
if($(element).height < wHeight){
$(element).height(wHeight);
}

if(wWidth < 1300) {
$(this).css( { 'margin-left': ((1300 - wWidth) / -2) });
} else {
$(this).css( { 'margin-left': 0 });
}
});


/*if( $("html").hasClass("mobile") ) {
wHeight = wHeight / 2;
}*/

$('#profile-top-slideshow').height(wHeight - 55 );
$('#profile-top-slideshow img').css('min-height', ($(window).height() +50) + 'px');
$('#profile-top-slideshow img.no-slideshow').css({ 'min-height': wHeight - 55, 'max-height' : wHeight - 55});
$('#profile-black-bar').height(wHeight - 65);
$('#profile_wrapper').css('margin-top', (wHeight - 109) + 'px');
$('#profile-top-slideshow gallery slideshow').height(wHeight+100);


/*if($('.top-profile-username').length > 0 && $('.mobile').length == 0) {
if(!isFloating){
fSize = 20;
maxW = $('#profile_wrapper').width() - $('.top-profile-menu').width() - 370;
if(maxW < 75) {
maxW = 75;
}

$('.top-profile-username').width('auto');

do
{
if(fSize >= 13) {
$('.top-profile-username').css('font-size', fSize + 'pt');
fSize--;
} else{
$('.top-profile-username').width(maxW);
$('.top-profile-username').css('font-size', '13pt');
}
} while($('.top-profile-username').width() > maxW)

//setAlbumButtonPosition();
}
}*/

var maxW = 0;

$('#profile-top-slideshow slideshow').animate({opacity: 1}, 800);

$("#profile-black-bar").show();
$("#profile_wrapper").animate({opacity:1});
}

}

function fixSlideshowPhotos() {
if($('#profile-black-bar').length > 0) {
$('slideshow a img').on('error', function() {
//$(this).parent().addClass('no-slideshow');
$(this).attr('src', $(this).attr('src').replace("slideshow", "large"));
$(this).attr('src', $(this).attr('src').replace("slideshow1300", "large"));
$(this).attr('src', $(this).attr('src').replace("large1300", "large"));
});

if(typeof loadAndSetNextImage!="undefined"){
$('slideshow a img').addClass("loadHeavy");

$(".loadHeavy").each(function(){
loadAndSetNextImage(this);
});
}
}
}
function setAlbumButtonPosition() {
if($('.album-task').length > 0) {
if($('.top-profile-username').width() > 50) {
margLeft = $('.top-profile-username').width() + 225;
$('.prints-task').css('margin-left', (margLeft - 5) + 'px');
} else {
margLeft = 231;
$('.prints-task').css('margin-left', (margLeft) + 'px');
}

$('.albums-task').css('margin-left', margLeft + 'px');
}
}
//Awards Collapse
var originalGallHeight=0;
var colsHeight = new Array();
function expandCollapse(obj,msg_expand, msg_collapse){
var element = $(obj).parent().find('ul');

if (originalGallHeight==0){
originalGallHeight = $("gallery.masonry").css('height');
}
var gallHeight = $("gallery.masonry").css('height');
var arr = $('thumbnail.masonry-brick');
var thisLeft = $(obj).parent().parent().css('left');
var thisTop =parseInt($(obj).parent().parent().css('top'));

var qty= parseInt(msg_expand) ;
var expandHeight = 0;
if(typeof $(obj).attr("data-rows")!=="undefined"){
qty = $(obj).attr("data-rows");
qty = 1;
expandHeight=qty * 61;
}else{
qty = (qty>5)?6:qty;
expandHeight=qty * 61;
}




if ( $(element).is(":hidden")) {
$(element).slideDown('slow');
$(obj).html(msg_collapse);
$(obj).removeClass('expand-box');
$(arr).each(function(index,value) {
if ( thisLeft == $(value).css('left')){
var itemTop = parseInt($(this).css('top'));
if(itemTop > thisTop){
itemTop += expandHeight;
$(value).animate({top: itemTop + "px"}, 500)


}
else if (itemTop == thisTop){
if (isNaN(colsHeight[thisLeft])){
colsHeight[thisLeft] = expandHeight;
}
else{
colsHeight[thisLeft] = parseInt(colsHeight[thisLeft]) + expandHeight;
}
}
}
});

}
else{
$(element).slideUp('slow', function() {
$(obj).fadeOut(100, function() {
$(obj).addClass('expand-box');
$(obj).html(msg_expand);
$(obj).fadeIn(350);
});
});

$(arr).each(function(index,value) {
if ( thisLeft == $(value).css('left')){
var itemTop = parseInt($(this).css('top'));
if((itemTop) > thisTop){
itemTop -= expandHeight;
$(value).animate({top: itemTop + "px"}, 500)
}
else if (itemTop == thisTop){
if (isNaN(colsHeight[thisLeft])){
colsHeight[thisLeft] = 0;
}
else{
colsHeight[thisLeft] = parseInt(colsHeight[thisLeft]) - expandHeight;
}
}
}
});
}

var max_height = 0;
for(var key in colsHeight){
if (max_height < colsHeight[key] )
{
max_height = colsHeight[key];
}
}
max_height += parseInt(originalGallHeight);

$("gallery.masonry").animate({height: max_height + "px"}, 500)

//replace delayed images
$(element).find(".avdelayed").each(function(e){
var src = $(this).attr("data-src-delay");
if(typeof src!="undefined" && src.length>0){
$(this).attr("src",src);
$(this).attr("data-src-delay","");
$(this).removeAttr("data-src-delay");
$(this).removeAttr("height");
$(this).removeClass("avdelayed");
}
});

return false;
}
function postFB(media_href){

 media_href = media_href.toString().replace("/vote/","/");
 var message= $("#fbmsg").val();

if (message!=""){
fbTask(function(){
FB.api("/me/feed","post", { 'message' : message, 'link': media_href + "?type=vote_my" },function(response){
if(typeof response.id != "undefined"){
$('#modal').trigger('reveal:close');
alert("Posted on facebook.");
}

});
});
}
else{
$('#modal').trigger('reveal:close');
alert("Message can not be empty");
}
}

/* ***** COMMENT ON (photo)WALL ****** */
$('gallery.gallwall .form-textarea-wrapper').on("keypress",(function(e) {
if(e.keyCode==13){
e.preventDefault();
var form_tag = $(this).parents("form"); 
commentPhotoSubmit(form_tag, this);
}
}
));

var commentPhotoSubmit = function(form, tarea){

if (logged()) {
if (checkForm(form)) {
$.post(
form.attr('action'),
form.serialize(),
function(msg) {

//var msg ='<item comment_id="1545627"><thumbnail><a class="avatar" href="/ori"><img src="/media/mediafiles/2013/02/21/2820501_75x75.jpg"/></a></thumbnail><div class="details"><div class="tools tools-group"><a href="javascript:" comment_id="1545627" title="Remove" class="last gray first has-icon button no-label remove"><span class="icon"></span><span class="label">&nbsp;</span></a></div><div class="header"><a href="/ori">ori</a><span class="date">(10:59 pm)</span></div><div class="body">sa sa sa</div></div></item>';

var obj_avatar = $(msg).find('.avatar');
var obj_comment = $(msg).find('.body');
var obj_from = $(msg).find(".header > a");

var comment = obj_comment.text();
var avatar = obj_avatar.html();
if(avatar!=null){
avatar = avatar.replace("75x75.jpg","35x35.jpg");
}


var from = obj_from.text();


var item = $($(form).parents(".content")[0]).find(".item");


item.slideUp("slow",function(){
var html = avatar + " <div class='about'>" + from + "<span></span>" +
"<div>" + comment + "</div></div><br style='clear:both'>";

$(item).html(html);
item.slideDown("slow");
});
item.empty();

$(form).hide("slow");

var commnum_obj = $($(form).parents(".content")[0]).find(".olds");

var commnum = $(commnum_obj).text().replace(" comments","");
commnum = parseInt(commnum) +1 ;

if(isNaN(commnum)){
commnum = 1;
}
commnum_obj.text(commnum + " comments");
}
);
}
}
enableSubmit(form);
}
$('#edit-comment, textarea.comment').on("focus",function(){
logged();
});
var removeElementsFromString = function(string, selector) {
var wrapped = $("<div>" + string + "</div>");
wrapped.find(selector).remove();
return wrapped;
}
function requestNextPage(obj,next_page){
var url = $(obj).attr("data-href");
$.get(url,function(res){

$("#profile_content").find(".showMore").remove();
var data = removeElementsFromString(res,"").contents().unwrap();
$(data[1]).css("padding-top",0);
$("#profile_content").append(data);
});

}
function requestNext(obj,next_page){

profileRequest('/'+ user.username +'/activity?page=' + next_page,'#page' + next_page,null,loadProfileScripts);
setBackToTop();

return false;
}
function loadProfileScripts(){
if(typeof setInfiniteScroll !="undefined"){
setInfiniteScroll('gallery.gallwall','.box-pager', '.box-pager a','gallery.photo thumbnail',false,"");
myWallHistorical();
setLazy();
}
}
function loadProfileScriptsFavorites(){
if(typeof setInfiniteScroll !="undefined"){
//LOAD JS
setInfiniteScroll("#galinf",'.box-pager', '.box-pager a.next','gallery.photo thumbnail',true, "");
myWallHistorical();
setLazy();
attachGalleryOnEvents();
}else{
JL().info("setInfiniteScroll is undefined at loadProfileScriptsFavorites");
}
}

function callbackFix(){
if (!$("profile-gallery-container").hasClass('fix')){
$(".profile-gallery-container").addClass("fix");
}
}
function sendUserMessage(obj){
if (logged()) {
var popup = popFullscreenHtml('Send Message', '<loading></loading>','popupsm');

$.get(
url_prefix + $(obj).attr('data-link'),
function(data) {
if(typeof popup =="undefined"){
popup = $("#popupsm");
}
popup.find('.content:first').html(data);
attachFormValidateEvents();
$('#send_message').submit(function(e) {
e.preventDefault();
var form = $("#send_message");
var data = form.serializeJSON();
if (logged()) {
if (checkForm(form)) {
$.post(
url_prefix + form.attr('action'),
data,
function(resp) {
if(resp.success==0 && resp.message!=""){
enableSubmit(form, form.find('.form-submit'));
alert(resp.message);
}
else{
$('.popupx').click();
$(".send-message-link").parent().html("Your message was sent");
}
}
);
} else {
enableSubmit(form, form.find('.form-submit'));
}
}
});
}
);
}
return false;
}

// see parallax credits
var isPc = true;
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
isPc = false;
$('footer').hide();
$('.parallax-img').css({float: 'right' });
}

function moveParallaxx() {

if($("html").hasClass("sf") && isPc){ //function disabled on safari
return;
}

var windowH = $(window).height();
var windowW = $(window).width();
var bodyTop = $(window).scrollTop(); // the top offset of the body
var topTotal = windowH + bodyTop;

topTotal-=500;

if(!isPc) {
$('.parallax-img.p-right').css({float: 'left' });
}

var minH = $(window).height() + 50;

$.each($('.parallax-block'), function() {
var thisH = $(this).height(); // the height of the block
var imgTop = $(this).offset();
imgTop = imgTop.top; // the top offset of the image
var imgBottom = imgTop + thisH;


if(topTotal >= imgTop && imgBottom >= bodyTop) {
$(this).css({visibility: "visible"});
var thisImg = $(this).find('.parallax-img');

var nh = thisImg.attr("data-nh");
if(typeof nh=="undefined" || isNaN(nh)){
nh = windowH;
if(thisImg.attr("data-nh") > thisImg.attr("data-nw")){
nh +=windowH-$(document).height();
}
}
var tresh=0;
if(windowH > 1000){
tresh = 70;
}
else if(windowH > 600){
tresh = 10;
}

var imgNH = nh; // the height of the image
var minM = - (imgNH - 100); // the minimum margin for the image
var maxM = thisH - 100; // the maximum margin for the image
var velo = (topTotal - imgTop - (imgNH * 0.5)) * 0.5;
var mmTop = ( velo + ((minM + maxM) / 2) ) - tresh;
if(mmTop > 0) {
mmTop = 0;
}
thisImg.css({marginTop: mmTop });

if(!isPc) {
var imgW = thisImg.attr("data-w");
var imgH = thisImg.attr("data-h");
var imgNW = windowW;
var imgHH = (imgNW * imgH) / imgW;
if(imgHH < minH) {
var lastW = (imgW * minH) / imgH;
var lastMarginLeft = (imgNW - lastW) / 2;
if(lastMarginLeft > 0) {
lastMarginLeft = 0;
}

thisImg.css({marginLeft: lastMarginLeft });
} else {
thisImg.css({marginLeft: 0 });
}
}

} else {
//$(this).css({visibility: "hidden"});
}
});
}

function resizeInContests() {
if($('.thumbnail-container .box-crop img').length > 0) {
var Wcontests = $('.thumbnail-container .box-crop img:nth-child(1)').width();
$('.thumbnail-container .box-crop img').height(Wcontests);
}
}

var isFloating = false;
var the_top = 0;

$(document).ready(function() {
doResize();
resizeInContests();
moveParallaxx();

$(window).scroll(function() {
if(isPc) {
moveParallaxx();
}
//userSubmissionScrollPagination();
});

var isFloatingTop = false;
if(!$("html").hasClass("mobile")){
the_top = $('#profile-black-bar').height() + 226;//$(window).height()- parseFloat($(stickyNav).css('marginTop').replace(/auto/, 100)) - tresh;

$(window).scroll(function (event) {
var y = $(this).scrollTop();

if (y >= the_top) {
if(!isFloating){
var marg = parseInt($('#profile_wrapper').css('marginTop'));
$('#profile_wrapper').addClass('scroll-bottom');//.css({ 'marginTop': marg + 50 });
$('.top-profile-main-menu, .top-profile-hidden-menu, #profile_content, .tools-group.tools-gallery').addClass('fixed');
$('.top-profile-user-stuff').hide();
isFloating = true;
}

} else {
if(isFloating){
var marg = parseInt($('#profile_wrapper').css('marginTop'));
$('#profile_wrapper').removeClass('scroll-bottom')//.css({ 'marginTop': marg - 50 });
$('.top-profile-main-menu, .top-profile-hidden-menu, #profile_content, .tools-group.tools-gallery').removeClass('fixed');
$('.top-profile-user-stuff').show();
isFloating = false;
}
}
});
}
});

$(window).resize(function() {
//console.log($(window).width());
doResize();
resizeInContests();
moveParallaxx();

the_top = $('#profile-black-bar').height() + 226;
});

function myWallHistorical(){
historicalIds.splice(0, historicalIds.length);
$("gallery.gallwall").find("thumbnail").each(function(i,obj){
var actualId = $(obj).find(".social-icons").attr("media_id");
historicalIds.push(actualId);
});
}

//infinte scroll pagination for contests & challenges
function userSubmissionScrollPagination(){
if($('.user-submissions').length > 0){
$("#main_content, #profile_content").css("min-height","100%");
var sum = $(window).scrollTop() + $(window).height();
var hei= $(document).height();
if($(window).scrollTop() + $(window).height() === $(document).height()) {
var nextpage = $('.box-pager a.next').attr('href');
if(typeof nextpage !== 'undefined'){
$('.load-logo').fadeIn(500);
$.get(nextpage,function(data) {
var response = $('<div>'+data+'</div>');
$('.box-pager').html(response.find('.box-pager').html());
$('.user-submissions #gallery-subs').append(response.find('#gallery-subs').html());
$('.load-logo').hide();
});
}else{
$('.load-logo').html('No more entries');
$('.load-logo').fadeOut(500);
}
}
}
}


function attachBlockAction(){
$('a.block-confirm').off().on('click', function(e) {
e.preventDefault();
var block = $(this).attr('data-block');

if (logged()) {
if (block > 0) {
$.post(
url_prefix + '/'+ user.username +'/block',
{block: block},
function(resp) {
$('.popupx').click();
if(resp.success==1){
$("a.block-user-link").html("Unblock").attr('data-block',"-1");
$("a.block-confirm").unbind("click");
}
}
);
} else {
$('.popupx').click();
}
}
});
}


function attachGalleryOnEvents(){
// gallery pager
$('#main_content .box-pager a').on('click', function(e) {
var url = $(this).attr('href').replace(/#/, '').replace(url_prefix, '');
if (url == '') {
e.preventDefault();
return;
}
profileRequest(url);
});

$('gallery.contest thumbnail.medium > a').on('click', function(e) {
var url = $(this).attr('href').replace(/#/, '');
profileRequest(url);
});

$('a.entities, a.view-more, gallery.album thumbnail > a, a.render').on('click', function(e) {
var url = $(this).attr('href').replace(/#/, '');
profileRequest(url);
});

}/*!
 * jQuery Cycle Plugin (with Transition Definitions)
 * Examples and documentation at: http://jquery.malsup.com/cycle/
 * Copyright (c) 2007-2013 M. Alsup
 * Version: 3.0.3 (11-JUL-2013)
 * Dual licensed under the MIT and GPL licenses.
 * http://jquery.malsup.com/license.html
 * Requires: jQuery v1.7.1 or later
 */
;(function($, undefined) {
"use strict";

var ver = '3.0.3';

function debug(s) {
if ($.fn.cycle.debug)
log(s);
}
function log() {
/*global console */
if (window.console && console.log)
console.log('[cycle] ' + Array.prototype.join.call(arguments,' '));
}
$.expr[':'].paused = function(el) {
return el.cyclePause;
};


// the options arg can be...
//a number- indicates an immediate transition should occur to the given slide index
//a string- 'pause', 'resume', 'toggle', 'next', 'prev', 'stop', 'destroy' or the name of a transition effect (ie, 'fade', 'zoom', etc)
//an object - properties to control the slideshow
//
// the arg2 arg can be...
//the name of an fx (only used in conjunction with a numeric value for 'options')
//the value true (only used in first arg == 'resume') and indicates
// that the resume should occur immediately (not wait for next timeout)

$.fn.cycle = function(options, arg2) {
var o = { s: this.selector, c: this.context };

// in 1.3+ we can fix mistakes with the ready state
if (this.length === 0 && options != 'stop') {
if (!$.isReady && o.s) {
log('DOM not ready, queuing slideshow');
$(function() {
$(o.s,o.c).cycle(options,arg2);
});
return this;
}
// is your DOM ready?http://docs.jquery.com/Tutorials:Introducing_$(document).ready()
log('terminating; zero elements found by selector' + ($.isReady ? '' : ' (DOM not ready)'));
return this;
}

// iterate the matched nodeset
return this.each(function() {
var opts = handleArguments(this, options, arg2);
if (opts === false)
return;

opts.updateActivePagerLink = opts.updateActivePagerLink || $.fn.cycle.updateActivePagerLink;

// stop existing slideshow for this container (if there is one)
if (this.cycleTimeout)
clearTimeout(this.cycleTimeout);
this.cycleTimeout = this.cyclePause = 0;
this.cycleStop = 0; // issue #108

var $cont = $(this);
var $slides = opts.slideExpr ? $(opts.slideExpr, this) : $cont.children();
var els = $slides.get();

if (els.length < 2) {
log('terminating; too few slides: ' + els.length);
return;
}

var opts2 = buildOptions($cont, $slides, els, opts, o);
if (opts2 === false)
return;

var startTime = opts2.continuous ? 10 : getTimeout(els[opts2.currSlide], els[opts2.nextSlide], opts2, !opts2.backwards);

// if it's an auto slideshow, kick it off
if (startTime) {
startTime += (opts2.delay || 0);
if (startTime < 10)
startTime = 10;
debug('first timeout: ' + startTime);
this.cycleTimeout = setTimeout(function(){go(els,opts2,0,!opts.backwards);}, startTime);
}
});
};

function triggerPause(cont, byHover, onPager) {
var opts = $(cont).data('cycle.opts');
if (!opts)
return;
var paused = !!cont.cyclePause;
if (paused && opts.paused)
opts.paused(cont, opts, byHover, onPager);
else if (!paused && opts.resumed)
opts.resumed(cont, opts, byHover, onPager);
}

// process the args that were passed to the plugin fn
function handleArguments(cont, options, arg2) {
if (cont.cycleStop === undefined)
cont.cycleStop = 0;
if (options === undefined || options === null)
options = {};
if (options.constructor == String) {
switch(options) {
case 'destroy':
case 'stop':
var opts = $(cont).data('cycle.opts');
if (!opts)
return false;
cont.cycleStop++; // callbacks look for change
if (cont.cycleTimeout)
clearTimeout(cont.cycleTimeout);
cont.cycleTimeout = 0;
if (opts.elements)
$(opts.elements).stop();
$(cont).removeData('cycle.opts');
if (options == 'destroy')
destroy(cont, opts);
return false;
case 'toggle':
cont.cyclePause = (cont.cyclePause === 1) ? 0 : 1;
checkInstantResume(cont.cyclePause, arg2, cont);
triggerPause(cont);
return false;
case 'pause':
cont.cyclePause = 1;
triggerPause(cont);
return false;
case 'resume':
cont.cyclePause = 0;
checkInstantResume(false, arg2, cont);
triggerPause(cont);
return false;
case 'prev':
case 'next':
opts = $(cont).data('cycle.opts');
if (!opts) {
log('options not found, "prev/next" ignored');
return false;
}
if (typeof arg2 == 'string') 
opts.oneTimeFx = arg2;
$.fn.cycle[options](opts);
return false;
default:
options = { fx: options };
}
return options;
}
else if (options.constructor == Number) {
// go to the requested slide
var num = options;
options = $(cont).data('cycle.opts');
if (!options) {
log('options not found, can not advance slide');
return false;
}
if (num < 0 || num >= options.elements.length) {
log('invalid slide index: ' + num);
return false;
}
options.nextSlide = num;
if (cont.cycleTimeout) {
clearTimeout(cont.cycleTimeout);
cont.cycleTimeout = 0;
}
if (typeof arg2 == 'string')
options.oneTimeFx = arg2;
go(options.elements, options, 1, num >= options.currSlide);
return false;
}
return options;

function checkInstantResume(isPaused, arg2, cont) {
if (!isPaused && arg2 === true) { // resume now!
var options = $(cont).data('cycle.opts');
if (!options) {
log('options not found, can not resume');
return false;
}
if (cont.cycleTimeout) {
clearTimeout(cont.cycleTimeout);
cont.cycleTimeout = 0;
}
go(options.elements, options, 1, !options.backwards);
}
}
}

function removeFilter(el, opts) {
if (!$.support.opacity && opts.cleartype && el.style.filter) {
try { el.style.removeAttribute('filter'); }
catch(smother) {} // handle old opera versions
}
}

// unbind event handlers
function destroy(cont, opts) {
if (opts.next)
$(opts.next).unbind(opts.prevNextEvent);
if (opts.prev)
$(opts.prev).unbind(opts.prevNextEvent);

if (opts.pager || opts.pagerAnchorBuilder)
$.each(opts.pagerAnchors || [], function() {
this.unbind().remove();
});
opts.pagerAnchors = null;
$(cont).unbind('mouseenter.cycle mouseleave.cycle');
if (opts.destroy) // callback
opts.destroy(opts);
}

// one-time initialization
function buildOptions($cont, $slides, els, options, o) {
var startingSlideSpecified;
// support metadata plugin (v1.0 and v2.0)
var opts = $.extend({}, $.fn.cycle.defaults, options || {}, $.metadata ? $cont.metadata() : $.meta ? $cont.data() : {});
var meta = $.isFunction($cont.data) ? $cont.data(opts.metaAttr) : null;
if (meta)
opts = $.extend(opts, meta);
if (opts.autostop)
opts.countdown = opts.autostopCount || els.length;

var cont = $cont[0];
$cont.data('cycle.opts', opts);
opts.$cont = $cont;
opts.stopCount = cont.cycleStop;
opts.elements = els;
opts.before = opts.before ? [opts.before] : [];
opts.after = opts.after ? [opts.after] : [];

// push some after callbacks
if (!$.support.opacity && opts.cleartype)
opts.after.push(function() { removeFilter(this, opts); });
if (opts.continuous)
opts.after.push(function() { go(els,opts,0,!opts.backwards); });

saveOriginalOpts(opts);

// clearType corrections
if (!$.support.opacity && opts.cleartype && !opts.cleartypeNoBg)
clearTypeFix($slides);

// container requires non-static position so that slides can be position within
if ($cont.css('position') == 'static')
$cont.css('position', 'relative');
if (opts.width)
$cont.width(opts.width);
if (opts.height && opts.height != 'auto')
$cont.height(opts.height);

if (opts.startingSlide !== undefined) {
opts.startingSlide = parseInt(opts.startingSlide,10);
if (opts.startingSlide >= els.length || opts.startSlide < 0)
opts.startingSlide = 0; // catch bogus input
else 
startingSlideSpecified = true;
}
else if (opts.backwards)
opts.startingSlide = els.length - 1;
else
opts.startingSlide = 0;

// if random, mix up the slide array
if (opts.random) {
opts.randomMap = [];
for (var i = 0; i < els.length; i++)
opts.randomMap.push(i);
opts.randomMap.sort(function(a,b) {return Math.random() - 0.5;});
if (startingSlideSpecified) {
// try to find the specified starting slide and if found set start slide index in the map accordingly
for ( var cnt = 0; cnt < els.length; cnt++ ) {
if ( opts.startingSlide == opts.randomMap[cnt] ) {
opts.randomIndex = cnt;
}
}
}
else {
opts.randomIndex = 1;
opts.startingSlide = opts.randomMap[1];
}
}
else if (opts.startingSlide >= els.length)
opts.startingSlide = 0; // catch bogus input
opts.currSlide = opts.startingSlide || 0;
var first = opts.startingSlide;

// set position and zIndex on all the slides
$slides.css({position: 'absolute', top:0, left:0}).hide().each(function(i) {
var z;
if (opts.backwards)
z = first ? i <= first ? els.length + (i-first) : first-i : els.length-i;
else
z = first ? i >= first ? els.length - (i-first) : first-i : els.length-i;
$(this).css('z-index', z);
});

// make sure first slide is visible
$(els[first]).css('opacity',1).show(); // opacity bit needed to handle restart use case
removeFilter(els[first], opts);

// stretch slides
if (opts.fit) {
if (!opts.aspect) {
if (opts.width)
$slides.width(opts.width);
if (opts.height && opts.height != 'auto')
$slides.height(opts.height);
} else {
$slides.each(function(){
var $slide = $(this);
var ratio = (opts.aspect === true) ? $slide.width()/$slide.height() : opts.aspect;
if( opts.width && $slide.width() != opts.width ) {
$slide.width( opts.width );
$slide.height( opts.width / ratio );
}

if( opts.height && $slide.height() < opts.height ) {
$slide.height( opts.height );
$slide.width( opts.height * ratio );
}
});
}
}

if (opts.center && ((!opts.fit) || opts.aspect)) {
$slides.each(function(){
var $slide = $(this);
$slide.css({
"margin-left": opts.width ?
((opts.width - $slide.width()) / 2) + "px" :
0,
"margin-top": opts.height ?
((opts.height - $slide.height()) / 2) + "px" :
0
});
});
}

if (opts.center && !opts.fit && !opts.slideResize) {
$slides.each(function(){
var $slide = $(this);
$slide.css({
"margin-left": opts.width ? ((opts.width - $slide.width()) / 2) + "px" : 0,
"margin-top": opts.height ? ((opts.height - $slide.height()) / 2) + "px" : 0
});
});
}

// stretch container
var reshape = (opts.containerResize || opts.containerResizeHeight) && $cont.innerHeight() < 1;
if (reshape) { // do this only if container has no size http://tinyurl.com/da2oa9
var maxw = 0, maxh = 0;
for(var j=0; j < els.length; j++) {
var $e = $(els[j]), e = $e[0], w = $e.outerWidth(), h = $e.outerHeight();
if (!w) w = e.offsetWidth || e.width || $e.attr('width');
if (!h) h = e.offsetHeight || e.height || $e.attr('height');
maxw = w > maxw ? w : maxw;
maxh = h > maxh ? h : maxh;
}
if (opts.containerResize && maxw > 0 && maxh > 0)
$cont.css({width:maxw+'px',height:maxh+'px'});
if (opts.containerResizeHeight && maxh > 0)
$cont.css({height:maxh+'px'});
}

var pauseFlag = false;// https://github.com/malsup/cycle/issues/44
if (opts.pause)
$cont.bind('mouseenter.cycle', function(){
pauseFlag = true;
this.cyclePause++;
triggerPause(cont, true);
}).bind('mouseleave.cycle', function(){
if (pauseFlag)
this.cyclePause--;
triggerPause(cont, true);
});

if (supportMultiTransitions(opts) === false)
return false;

// apparently a lot of people use image slideshows without height/width attributes on the images.
// Cycle 2.50+ requires the sizing info for every slide; this block tries to deal with that.
var requeue = false;
options.requeueAttempts = options.requeueAttempts || 0;
$slides.each(function() {
// try to get height/width of each slide
var $el = $(this);
this.cycleH = (opts.fit && opts.height) ? opts.height : ($el.height() || this.offsetHeight || this.height || $el.attr('height') || 0);
this.cycleW = (opts.fit && opts.width) ? opts.width : ($el.width() || this.offsetWidth || this.width || $el.attr('width') || 0);

if ( $el.is('img') ) {
var loading = (this.cycleH === 0 && this.cycleW === 0 && !this.complete);
// don't requeue for images that are still loading but have a valid size
if (loading) {
if (o.s && opts.requeueOnImageNotLoaded && ++options.requeueAttempts < 100) { // track retry count so we don't loop forever
log(options.requeueAttempts,' - img slide not loaded, requeuing slideshow: ', this.src, this.cycleW, this.cycleH);
setTimeout(function() {$(o.s,o.c).cycle(options);}, opts.requeueTimeout);
requeue = true;
return false; // break each loop
}
else {
log('could not determine size of image: '+this.src, this.cycleW, this.cycleH);
}
}
}
return true;
});

if (requeue)
return false;

opts.cssBefore = opts.cssBefore || {};
opts.cssAfter = opts.cssAfter || {};
opts.cssFirst = opts.cssFirst || {};
opts.animIn = opts.animIn || {};
opts.animOut = opts.animOut || {};

$slides.not(':eq('+first+')').css(opts.cssBefore);
$($slides[first]).css(opts.cssFirst);

if (opts.timeout) {
opts.timeout = parseInt(opts.timeout,10);
// ensure that timeout and speed settings are sane
if (opts.speed.constructor == String)
opts.speed = $.fx.speeds[opts.speed] || parseInt(opts.speed,10);
if (!opts.sync)
opts.speed = opts.speed / 2;

var buffer = opts.fx == 'none' ? 0 : opts.fx == 'shuffle' ? 500 : 250;
while((opts.timeout - opts.speed) < buffer) // sanitize timeout
opts.timeout += opts.speed;
}
if (opts.easing)
opts.easeIn = opts.easeOut = opts.easing;
if (!opts.speedIn)
opts.speedIn = opts.speed;
if (!opts.speedOut)
opts.speedOut = opts.speed;

opts.slideCount = els.length;
opts.currSlide = opts.lastSlide = first;
if (opts.random) {
if (++opts.randomIndex == els.length)
opts.randomIndex = 0;
opts.nextSlide = opts.randomMap[opts.randomIndex];
}
else if (opts.backwards)
opts.nextSlide = opts.startingSlide === 0 ? (els.length-1) : opts.startingSlide-1;
else
opts.nextSlide = opts.startingSlide >= (els.length-1) ? 0 : opts.startingSlide+1;

// run transition init fn
if (!opts.multiFx) {
var init = $.fn.cycle.transitions[opts.fx];
if ($.isFunction(init))
init($cont, $slides, opts);
else if (opts.fx != 'custom' && !opts.multiFx) {
log('unknown transition: ' + opts.fx,'; slideshow terminating');
return false;
}
}

// fire artificial events
var e0 = $slides[first];
if (!opts.skipInitializationCallbacks) {
if (opts.before.length)
opts.before[0].apply(e0, [e0, e0, opts, true]);
if (opts.after.length)
opts.after[0].apply(e0, [e0, e0, opts, true]);
}
if (opts.next)
$(opts.next).bind(opts.prevNextEvent,function(){return advance(opts,1);});
if (opts.prev)
$(opts.prev).bind(opts.prevNextEvent,function(){return advance(opts,0);});
if (opts.pager || opts.pagerAnchorBuilder)
buildPager(els,opts);

exposeAddSlide(opts, els);

return opts;
}

// save off original opts so we can restore after clearing state
function saveOriginalOpts(opts) {
opts.original = { before: [], after: [] };
opts.original.cssBefore = $.extend({}, opts.cssBefore);
opts.original.cssAfter= $.extend({}, opts.cssAfter);
opts.original.animIn= $.extend({}, opts.animIn);
opts.original.animOut= $.extend({}, opts.animOut);
$.each(opts.before, function() { opts.original.before.push(this); });
$.each(opts.after,function() { opts.original.after.push(this); });
}

function supportMultiTransitions(opts) {
var i, tx, txs = $.fn.cycle.transitions;
// look for multiple effects
if (opts.fx.indexOf(',') > 0) {
opts.multiFx = true;
opts.fxs = opts.fx.replace(/\s*/g,'').split(',');
// discard any bogus effect names
for (i=0; i < opts.fxs.length; i++) {
var fx = opts.fxs[i];
tx = txs[fx];
if (!tx || !txs.hasOwnProperty(fx) || !$.isFunction(tx)) {
log('discarding unknown transition: ',fx);
opts.fxs.splice(i,1);
i--;
}
}
// if we have an empty list then we threw everything away!
if (!opts.fxs.length) {
log('No valid transitions named; slideshow terminating.');
return false;
}
}
else if (opts.fx == 'all') {// auto-gen the list of transitions
opts.multiFx = true;
opts.fxs = [];
for (var p in txs) {
if (txs.hasOwnProperty(p)) {
tx = txs[p];
if (txs.hasOwnProperty(p) && $.isFunction(tx))
opts.fxs.push(p);
}
}
}
if (opts.multiFx && opts.randomizeEffects) {
// munge the fxs array to make effect selection random
var r1 = Math.floor(Math.random() * 20) + 30;
for (i = 0; i < r1; i++) {
var r2 = Math.floor(Math.random() * opts.fxs.length);
opts.fxs.push(opts.fxs.splice(r2,1)[0]);
}
debug('randomized fx sequence: ',opts.fxs);
}
return true;
}

// provide a mechanism for adding slides after the slideshow has started
function exposeAddSlide(opts, els) {
opts.addSlide = function(newSlide, prepend) {
var $s = $(newSlide), s = $s[0];
if (!opts.autostopCount)
opts.countdown++;
els[prepend?'unshift':'push'](s);
if (opts.els)
opts.els[prepend?'unshift':'push'](s); // shuffle needs this
opts.slideCount = els.length;

// add the slide to the random map and resort
if (opts.random) {
opts.randomMap.push(opts.slideCount-1);
opts.randomMap.sort(function(a,b) {return Math.random() - 0.5;});
}

$s.css('position','absolute');
$s[prepend?'prependTo':'appendTo'](opts.$cont);

if (prepend) {
opts.currSlide++;
opts.nextSlide++;
}

if (!$.support.opacity && opts.cleartype && !opts.cleartypeNoBg)
clearTypeFix($s);

if (opts.fit && opts.width)
$s.width(opts.width);
if (opts.fit && opts.height && opts.height != 'auto')
$s.height(opts.height);
s.cycleH = (opts.fit && opts.height) ? opts.height : $s.height();
s.cycleW = (opts.fit && opts.width) ? opts.width : $s.width();

$s.css(opts.cssBefore);

if (opts.pager || opts.pagerAnchorBuilder)
$.fn.cycle.createPagerAnchor(els.length-1, s, $(opts.pager), els, opts);

if ($.isFunction(opts.onAddSlide))
opts.onAddSlide($s);
else
$s.hide(); // default behavior
};
}

// reset internal state; we do this on every pass in order to support multiple effects
$.fn.cycle.resetState = function(opts, fx) {
fx = fx || opts.fx;
opts.before = []; opts.after = [];
opts.cssBefore = $.extend({}, opts.original.cssBefore);
opts.cssAfter= $.extend({}, opts.original.cssAfter);
opts.animIn= $.extend({}, opts.original.animIn);
opts.animOut= $.extend({}, opts.original.animOut);
opts.fxFn = null;
$.each(opts.original.before, function() { opts.before.push(this); });
$.each(opts.original.after,function() { opts.after.push(this); });

// re-init
var init = $.fn.cycle.transitions[fx];
if ($.isFunction(init))
init(opts.$cont, $(opts.elements), opts);
};

// this is the main engine fn, it handles the timeouts, callbacks and slide index mgmt
function go(els, opts, manual, fwd) {
var p = opts.$cont[0], curr = els[opts.currSlide], next = els[opts.nextSlide];

// opts.busy is true if we're in the middle of an animation
if (manual && opts.busy && opts.manualTrump) {
// let manual transitions requests trump active ones
debug('manualTrump in go(), stopping active transition');
$(els).stop(true,true);
opts.busy = 0;
clearTimeout(p.cycleTimeout);
}

// don't begin another timeout-based transition if there is one active
if (opts.busy) {
debug('transition active, ignoring new tx request');
return;
}


// stop cycling if we have an outstanding stop request
if (p.cycleStop != opts.stopCount || p.cycleTimeout === 0 && !manual)
return;

// check to see if we should stop cycling based on autostop options
if (!manual && !p.cyclePause && !opts.bounce &&
((opts.autostop && (--opts.countdown <= 0)) ||
(opts.nowrap && !opts.random && opts.nextSlide < opts.currSlide))) {
if (opts.end)
opts.end(opts);
return;
}

// if slideshow is paused, only transition on a manual trigger
var changed = false;
if ((manual || !p.cyclePause) && (opts.nextSlide != opts.currSlide)) {
changed = true;
var fx = opts.fx;
// keep trying to get the slide size if we don't have it yet
curr.cycleH = curr.cycleH || $(curr).height();
curr.cycleW = curr.cycleW || $(curr).width();
next.cycleH = next.cycleH || $(next).height();
next.cycleW = next.cycleW || $(next).width();

// support multiple transition types
if (opts.multiFx) {
if (fwd && (opts.lastFx === undefined || ++opts.lastFx >= opts.fxs.length))
opts.lastFx = 0;
else if (!fwd && (opts.lastFx === undefined || --opts.lastFx < 0))
opts.lastFx = opts.fxs.length - 1;
fx = opts.fxs[opts.lastFx];
}

// one-time fx overrides apply to:$('div').cycle(3,'zoom');
if (opts.oneTimeFx) {
fx = opts.oneTimeFx;
opts.oneTimeFx = null;
}

$.fn.cycle.resetState(opts, fx);

// run the before callbacks
if (opts.before.length)
$.each(opts.before, function(i,o) {
if (p.cycleStop != opts.stopCount) return;
o.apply(next, [curr, next, opts, fwd]);
});

// stage the after callacks
var after = function() {
opts.busy = 0;
$.each(opts.after, function(i,o) {
if (p.cycleStop != opts.stopCount) return;
o.apply(next, [curr, next, opts, fwd]);
});
if (!p.cycleStop) {
// queue next transition
queueNext();
}
};

debug('tx firing('+fx+'); currSlide: ' + opts.currSlide + '; nextSlide: ' + opts.nextSlide);

// get ready to perform the transition
opts.busy = 1;
if (opts.fxFn) // fx function provided?
opts.fxFn(curr, next, opts, after, fwd, manual && opts.fastOnEvent);
else if ($.isFunction($.fn.cycle[opts.fx])) // fx plugin ?
$.fn.cycle[opts.fx](curr, next, opts, after, fwd, manual && opts.fastOnEvent);
else
$.fn.cycle.custom(curr, next, opts, after, fwd, manual && opts.fastOnEvent);
}
else {
queueNext();
}

if (changed || opts.nextSlide == opts.currSlide) {
// calculate the next slide
var roll;
opts.lastSlide = opts.currSlide;
if (opts.random) {
opts.currSlide = opts.nextSlide;
if (++opts.randomIndex == els.length) {
opts.randomIndex = 0;
opts.randomMap.sort(function(a,b) {return Math.random() - 0.5;});
}
opts.nextSlide = opts.randomMap[opts.randomIndex];
if (opts.nextSlide == opts.currSlide)
opts.nextSlide = (opts.currSlide == opts.slideCount - 1) ? 0 : opts.currSlide + 1;
}
else if (opts.backwards) {
roll = (opts.nextSlide - 1) < 0;
if (roll && opts.bounce) {
opts.backwards = !opts.backwards;
opts.nextSlide = 1;
opts.currSlide = 0;
}
else {
opts.nextSlide = roll ? (els.length-1) : opts.nextSlide-1;
opts.currSlide = roll ? 0 : opts.nextSlide+1;
}
}
else { // sequence
roll = (opts.nextSlide + 1) == els.length;
if (roll && opts.bounce) {
opts.backwards = !opts.backwards;
opts.nextSlide = els.length-2;
opts.currSlide = els.length-1;
}
else {
opts.nextSlide = roll ? 0 : opts.nextSlide+1;
opts.currSlide = roll ? els.length-1 : opts.nextSlide-1;
}
}
}
if (changed && opts.pager)
opts.updateActivePagerLink(opts.pager, opts.currSlide, opts.activePagerClass);

function queueNext() {
// stage the next transition
var ms = 0, timeout = opts.timeout;
if (opts.timeout && !opts.continuous) {
ms = getTimeout(els[opts.currSlide], els[opts.nextSlide], opts, fwd);
if (opts.fx == 'shuffle')
ms -= opts.speedOut;
}
else if (opts.continuous && p.cyclePause) // continuous shows work off an after callback, not this timer logic
ms = 10;
if (ms > 0)
p.cycleTimeout = setTimeout(function(){ go(els, opts, 0, !opts.backwards); }, ms);
}
}

// invoked after transition
$.fn.cycle.updateActivePagerLink = function(pager, currSlide, clsName) {
$(pager).each(function() {
$(this).children().removeClass(clsName).eq(currSlide).addClass(clsName);
});
};

// calculate timeout value for current transition
function getTimeout(curr, next, opts, fwd) {
if (opts.timeoutFn) {
// call user provided calc fn
var t = opts.timeoutFn.call(curr,curr,next,opts,fwd);
while (opts.fx != 'none' && (t - opts.speed) < 250) // sanitize timeout
t += opts.speed;
debug('calculated timeout: ' + t + '; speed: ' + opts.speed);
if (t !== false)
return t;
}
return opts.timeout;
}

// expose next/prev function, caller must pass in state
$.fn.cycle.next = function(opts) { advance(opts,1); };
$.fn.cycle.prev = function(opts) { advance(opts,0);};

// advance slide forward or back
function advance(opts, moveForward) {
var val = moveForward ? 1 : -1;
var els = opts.elements;
var p = opts.$cont[0], timeout = p.cycleTimeout;
if (timeout) {
clearTimeout(timeout);
p.cycleTimeout = 0;
}
if (opts.random && val < 0) {
// move back to the previously display slide
opts.randomIndex--;
if (--opts.randomIndex == -2)
opts.randomIndex = els.length-2;
else if (opts.randomIndex == -1)
opts.randomIndex = els.length-1;
opts.nextSlide = opts.randomMap[opts.randomIndex];
}
else if (opts.random) {
opts.nextSlide = opts.randomMap[opts.randomIndex];
}
else {
opts.nextSlide = opts.currSlide + val;
if (opts.nextSlide < 0) {
if (opts.nowrap) return false;
opts.nextSlide = els.length - 1;
}
else if (opts.nextSlide >= els.length) {
if (opts.nowrap) return false;
opts.nextSlide = 0;
}
}

var cb = opts.onPrevNextEvent || opts.prevNextClick; // prevNextClick is deprecated
if ($.isFunction(cb))
cb(val > 0, opts.nextSlide, els[opts.nextSlide]);
go(els, opts, 1, moveForward);
return false;
}

function buildPager(els, opts) {
var $p = $(opts.pager);
$.each(els, function(i,o) {
$.fn.cycle.createPagerAnchor(i,o,$p,els,opts);
});
opts.updateActivePagerLink(opts.pager, opts.startingSlide, opts.activePagerClass);
}

$.fn.cycle.createPagerAnchor = function(i, el, $p, els, opts) {
var a;
if ($.isFunction(opts.pagerAnchorBuilder)) {
a = opts.pagerAnchorBuilder(i,el);
debug('pagerAnchorBuilder('+i+', el) returned: ' + a);
}
else
a = '<a href="#">'+(i+1)+'</a>';

if (!a)
return;
var $a = $(a);
// don't reparent if anchor is in the dom
if ($a.parents('body').length === 0) {
var arr = [];
if ($p.length > 1) {
$p.each(function() {
var $clone = $a.clone(true);
$(this).append($clone);
arr.push($clone[0]);
});
$a = $(arr);
}
else {
$a.appendTo($p);
}
}

opts.pagerAnchors =opts.pagerAnchors || [];
opts.pagerAnchors.push($a);

var pagerFn = function(e) {
e.preventDefault();
opts.nextSlide = i;
var p = opts.$cont[0], timeout = p.cycleTimeout;
if (timeout) {
clearTimeout(timeout);
p.cycleTimeout = 0;
}
var cb = opts.onPagerEvent || opts.pagerClick; // pagerClick is deprecated
if ($.isFunction(cb))
cb(opts.nextSlide, els[opts.nextSlide]);
go(els,opts,1,opts.currSlide < i); // trigger the trans
//return false; // <== allow bubble
};

if ( /mouseenter|mouseover/i.test(opts.pagerEvent) ) {
$a.hover(pagerFn, function(){/* no-op */} );
}
else {
$a.bind(opts.pagerEvent, pagerFn);
}

if ( ! /^click/.test(opts.pagerEvent) && !opts.allowPagerClickBubble)
$a.bind('click.cycle', function(){return false;}); // suppress click

var cont = opts.$cont[0];
var pauseFlag = false; // https://github.com/malsup/cycle/issues/44
if (opts.pauseOnPagerHover) {
$a.hover(
function() { 
pauseFlag = true;
cont.cyclePause++; 
triggerPause(cont,true,true);
}, function() { 
if (pauseFlag)
cont.cyclePause--; 
triggerPause(cont,true,true);
} 
);
}
};

// helper fn to calculate the number of slides between the current and the next
$.fn.cycle.hopsFromLast = function(opts, fwd) {
var hops, l = opts.lastSlide, c = opts.currSlide;
if (fwd)
hops = c > l ? c - l : opts.slideCount - l;
else
hops = c < l ? l - c : l + opts.slideCount - c;
return hops;
};

// fix clearType problems in ie6 by setting an explicit bg color
// (otherwise text slides look horrible during a fade transition)
function clearTypeFix($slides) {
debug('applying clearType background-color hack');
function hex(s) {
s = parseInt(s,10).toString(16);
return s.length < 2 ? '0'+s : s;
}
function getBg(e) {
for ( ; e && e.nodeName.toLowerCase() != 'html'; e = e.parentNode) {
var v = $.css(e,'background-color');
if (v && v.indexOf('rgb') >= 0 ) {
var rgb = v.match(/\d+/g);
return '#'+ hex(rgb[0]) + hex(rgb[1]) + hex(rgb[2]);
}
if (v && v != 'transparent')
return v;
}
return '#ffffff';
}
$slides.each(function() { $(this).css('background-color', getBg(this)); });
}

// reset common props before the next transition
$.fn.cycle.commonReset = function(curr,next,opts,w,h,rev) {
$(opts.elements).not(curr).hide();
if (typeof opts.cssBefore.opacity == 'undefined')
opts.cssBefore.opacity = 1;
opts.cssBefore.display = 'block';
if (opts.slideResize && w !== false && next.cycleW > 0)
opts.cssBefore.width = next.cycleW;
if (opts.slideResize && h !== false && next.cycleH > 0)
opts.cssBefore.height = next.cycleH;
opts.cssAfter = opts.cssAfter || {};
opts.cssAfter.display = 'none';
$(curr).css('zIndex',opts.slideCount + (rev === true ? 1 : 0));
$(next).css('zIndex',opts.slideCount + (rev === true ? 0 : 1));
};

// the actual fn for effecting a transition
$.fn.cycle.custom = function(curr, next, opts, cb, fwd, speedOverride) {
var $l = $(curr), $n = $(next);
var speedIn = opts.speedIn, speedOut = opts.speedOut, easeIn = opts.easeIn, easeOut = opts.easeOut, animInDelay = opts.animInDelay, animOutDelay = opts.animOutDelay;
$n.css(opts.cssBefore);
if (speedOverride) {
if (typeof speedOverride == 'number')
speedIn = speedOut = speedOverride;
else
speedIn = speedOut = 1;
easeIn = easeOut = null;
}
var fn = function() {
$n.delay(animInDelay).animate(opts.animIn, speedIn, easeIn, function() {
cb();
});
};
$l.delay(animOutDelay).animate(opts.animOut, speedOut, easeOut, function() {
$l.css(opts.cssAfter);
if (!opts.sync) 
fn();
});
if (opts.sync) fn();
};

// transition definitions - only fade is defined here, transition pack defines the rest
$.fn.cycle.transitions = {
fade: function($cont, $slides, opts) {
$slides.not(':eq('+opts.currSlide+')').css('opacity',0);
opts.before.push(function(curr,next,opts) {
$.fn.cycle.commonReset(curr,next,opts);
opts.cssBefore.opacity = 0;
});
opts.animIn= { opacity: 1 };
opts.animOut= { opacity: 0 };
opts.cssBefore = { top: 0, left: 0 };
}
};

$.fn.cycle.ver = function() { return ver; };

// override these globally if you like (they are all optional)
$.fn.cycle.defaults = {
activePagerClass: 'activeSlide', // class name used for the active pager link
after:null,// transition callback (scope set to element that was shown):function(currSlideElement, nextSlideElement, options, forwardFlag)
allowPagerClickBubble: false, // allows or prevents click event on pager anchors from bubbling
animIn:null,// properties that define how the slide animates in
animInDelay:0,// allows delay before next slide transitions in
animOut:null,// properties that define how the slide animates out
animOutDelay:0,// allows delay before current slide transitions out
aspect:false,// preserve aspect ratio during fit resizing, cropping if necessary (must be used with fit option)
autostop:0,// true to end slideshow after X transitions (where X == slide count)
autostopCount:0,// number of transitions (optionally used with autostop to define X)
backwards:false,// true to start slideshow at last slide and move backwards through the stack
before:null,// transition callback (scope set to element to be shown):function(currSlideElement, nextSlideElement, options, forwardFlag)
center:null,// set to true to have cycle add top/left margin to each slide (use with width and height options)
cleartype:!$.support.opacity,// true if clearType corrections should be applied (for IE)
cleartypeNoBg:false,// set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
containerResize:1,// resize container to fit largest slide
containerResizeHeight:1,// resize containers height to fit the largest slide but leave the width dynamic
continuous:0,// true to start next transition immediately after current one completes
cssAfter:null,// properties that defined the state of the slide after transitioning out
cssBefore:null,// properties that define the initial state of the slide before transitioning in
delay:0,// additional delay (in ms) for first transition (hint: can be negative)
easeIn:null,// easing for "in" transition
easeOut:null,// easing for "out" transition
easing:null,// easing method for both in and out transitions
end:null,// callback invoked when the slideshow terminates (use with autostop or nowrap options): function(options)
fastOnEvent:0,// force fast transitions when triggered manually (via pager or prev/next); value == time in ms
fit:0,// force slides to fit container
fx:'fade',// name of transition effect (or comma separated names, ex: 'fade,scrollUp,shuffle')
fxFn:null,// function used to control the transition: function(currSlideElement, nextSlideElement, options, afterCalback, forwardFlag)
height:'auto',// container height (if the 'fit' option is true, the slides will be set to this height as well)
manualTrump:true,// causes manual transition to stop an active transition instead of being ignored
metaAttr:'cycle',// data- attribute that holds the option data for the slideshow
next:null,// element, jQuery object, or jQuery selector string for the element to use as event trigger for next slide
nowrap:0,// true to prevent slideshow from wrapping
onPagerEvent:null,// callback fn for pager events: function(zeroBasedSlideIndex, slideElement)
onPrevNextEvent:null,// callback fn for prev/next events: function(isNext, zeroBasedSlideIndex, slideElement)
pager:null,// element, jQuery object, or jQuery selector string for the element to use as pager container
pagerAnchorBuilder: null,// callback fn for building anchor links:function(index, DOMelement)
pagerEvent:'click.cycle', // name of event which drives the pager navigation
pause:0,// true to enable "pause on hover"
pauseOnPagerHover: 0,// true to pause when hovering over pager link
prev:null,// element, jQuery object, or jQuery selector string for the element to use as event trigger for previous slide
prevNextEvent:'click.cycle',// event which drives the manual transition to the previous or next slide
random:0,// true for random, false for sequence (not applicable to shuffle fx)
randomizeEffects: 1,// valid when multiple effects are used; true to make the effect sequence random
requeueOnImageNotLoaded: true, // requeue the slideshow if any image slides are not yet loaded
requeueTimeout:250,// ms delay for requeue
rev:0,// causes animations to transition in reverse (for effects that support it such as scrollHorz/scrollVert/shuffle)
shuffle:null,// coords for shuffle animation, ex: { top:15, left: 200 }
skipInitializationCallbacks: false, // set to true to disable the first before/after callback that occurs prior to any transition
slideExpr:null,// expression for selecting slides (if something other than all children is required)
slideResize:1,// force slide width/height to fixed size before every transition
speed:1000,// speed of the transition (any valid fx speed value)
speedIn:null,// speed of the 'in' transition
speedOut:null,// speed of the 'out' transition
startingSlide:undefined,// zero-based index of the first slide to be displayed
sync:1,// true if in/out transitions should occur simultaneously
timeout:4000,// milliseconds between slide transitions (0 to disable auto advance)
timeoutFn:null,// callback for determining per-slide timeout value:function(currSlideElement, nextSlideElement, options, forwardFlag)
updateActivePagerLink: null,// callback fn invoked to update the active pager link (adds/removes activePagerClass style)
width:null// container width (if the 'fit' option is true, the slides will be set to this width as well)
};

})(jQuery);


/*!
 * jQuery Cycle Plugin Transition Definitions
 * This script is a plugin for the jQuery Cycle Plugin
 * Examples and documentation at: http://malsup.com/jquery/cycle/
 * Copyright (c) 2007-2010 M. Alsup
 * Version: 2.73
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
(function($) {
"use strict";

//
// These functions define slide initialization and properties for the named
// transitions. To save file size feel free to remove any of these that you
// don't need.
//
$.fn.cycle.transitions.none = function($cont, $slides, opts) {
opts.fxFn = function(curr,next,opts,after){
$(next).show();
$(curr).hide();
after();
};
};

// not a cross-fade, fadeout only fades out the top slide
$.fn.cycle.transitions.fadeout = function($cont, $slides, opts) {
$slides.not(':eq('+opts.currSlide+')').css({ display: 'block', 'opacity': 1 });
opts.before.push(function(curr,next,opts,w,h,rev) {
$(curr).css('zIndex',opts.slideCount + (rev !== true ? 1 : 0));
$(next).css('zIndex',opts.slideCount + (rev !== true ? 0 : 1));
});
opts.animIn.opacity = 1;
opts.animOut.opacity = 0;
opts.cssBefore.opacity = 1;
opts.cssBefore.display = 'block';
opts.cssAfter.zIndex = 0;
};

// scrollUp/Down/Left/Right
$.fn.cycle.transitions.scrollUp = function($cont, $slides, opts) {
$cont.css('overflow','hidden');
opts.before.push($.fn.cycle.commonReset);
var h = $cont.height();
opts.cssBefore.top = h;
opts.cssBefore.left = 0;
opts.cssFirst.top = 0;
opts.animIn.top = 0;
opts.animOut.top = -h;
};
$.fn.cycle.transitions.scrollDown = function($cont, $slides, opts) {
$cont.css('overflow','hidden');
opts.before.push($.fn.cycle.commonReset);
var h = $cont.height();
opts.cssFirst.top = 0;
opts.cssBefore.top = -h;
opts.cssBefore.left = 0;
opts.animIn.top = 0;
opts.animOut.top = h;
};
$.fn.cycle.transitions.scrollLeft = function($cont, $slides, opts) {
$cont.css('overflow','hidden');
opts.before.push($.fn.cycle.commonReset);
var w = $cont.width();
opts.cssFirst.left = 0;
opts.cssBefore.left = w;
opts.cssBefore.top = 0;
opts.animIn.left = 0;
opts.animOut.left = 0-w;
};
$.fn.cycle.transitions.scrollRight = function($cont, $slides, opts) {
$cont.css('overflow','hidden');
opts.before.push($.fn.cycle.commonReset);
var w = $cont.width();
opts.cssFirst.left = 0;
opts.cssBefore.left = -w;
opts.cssBefore.top = 0;
opts.animIn.left = 0;
opts.animOut.left = w;
};
$.fn.cycle.transitions.scrollHorz = function($cont, $slides, opts) {
$cont.css('overflow','hidden').width();
opts.before.push(function(curr, next, opts, fwd) {
if (opts.rev)
fwd = !fwd;
$.fn.cycle.commonReset(curr,next,opts);
opts.cssBefore.left = fwd ? (next.cycleW-1) : (1-next.cycleW);
opts.animOut.left = fwd ? -curr.cycleW : curr.cycleW;
});
opts.cssFirst.left = 0;
opts.cssBefore.top = 0;
opts.animIn.left = 0;
opts.animOut.top = 0;
};
$.fn.cycle.transitions.scrollVert = function($cont, $slides, opts) {
$cont.css('overflow','hidden');
opts.before.push(function(curr, next, opts, fwd) {
if (opts.rev)
fwd = !fwd;
$.fn.cycle.commonReset(curr,next,opts);
opts.cssBefore.top = fwd ? (1-next.cycleH) : (next.cycleH-1);
opts.animOut.top = fwd ? curr.cycleH : -curr.cycleH;
});
opts.cssFirst.top = 0;
opts.cssBefore.left = 0;
opts.animIn.top = 0;
opts.animOut.left = 0;
};

// slideX/slideY
$.fn.cycle.transitions.slideX = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$(opts.elements).not(curr).hide();
$.fn.cycle.commonReset(curr,next,opts,false,true);
opts.animIn.width = next.cycleW;
});
opts.cssBefore.left = 0;
opts.cssBefore.top = 0;
opts.cssBefore.width = 0;
opts.animIn.width = 'show';
opts.animOut.width = 0;
};
$.fn.cycle.transitions.slideY = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$(opts.elements).not(curr).hide();
$.fn.cycle.commonReset(curr,next,opts,true,false);
opts.animIn.height = next.cycleH;
});
opts.cssBefore.left = 0;
opts.cssBefore.top = 0;
opts.cssBefore.height = 0;
opts.animIn.height = 'show';
opts.animOut.height = 0;
};

// shuffle
$.fn.cycle.transitions.shuffle = function($cont, $slides, opts) {
var i, w = $cont.css('overflow', 'visible').width();
$slides.css({left: 0, top: 0});
opts.before.push(function(curr,next,opts) {
$.fn.cycle.commonReset(curr,next,opts,true,true,true);
});
// only adjust speed once!
if (!opts.speedAdjusted) {
opts.speed = opts.speed / 2; // shuffle has 2 transitions
opts.speedAdjusted = true;
}
opts.random = 0;
opts.shuffle = opts.shuffle || {left:-w, top:15};
opts.els = [];
for (i=0; i < $slides.length; i++)
opts.els.push($slides[i]);

for (i=0; i < opts.currSlide; i++)
opts.els.push(opts.els.shift());

// custom transition fn (hat tip to Benjamin Sterling for this bit of sweetness!)
opts.fxFn = function(curr, next, opts, cb, fwd) {
if (opts.rev)
fwd = !fwd;
var $el = fwd ? $(curr) : $(next);
$(next).css(opts.cssBefore);
var count = opts.slideCount;
$el.animate(opts.shuffle, opts.speedIn, opts.easeIn, function() {
var hops = $.fn.cycle.hopsFromLast(opts, fwd);
for (var k=0; k < hops; k++) {
if (fwd)
opts.els.push(opts.els.shift());
else
opts.els.unshift(opts.els.pop());
}
if (fwd) {
for (var i=0, len=opts.els.length; i < len; i++)
$(opts.els[i]).css('z-index', len-i+count);
}
else {
var z = $(curr).css('z-index');
$el.css('z-index', parseInt(z,10)+1+count);
}
$el.animate({left:0, top:0}, opts.speedOut, opts.easeOut, function() {
$(fwd ? this : curr).hide();
if (cb) cb();
});
});
};
$.extend(opts.cssBefore, { display: 'block', opacity: 1, top: 0, left: 0 });
};

// turnUp/Down/Left/Right
$.fn.cycle.transitions.turnUp = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,true,false);
opts.cssBefore.top = next.cycleH;
opts.animIn.height = next.cycleH;
opts.animOut.width = next.cycleW;
});
opts.cssFirst.top = 0;
opts.cssBefore.left = 0;
opts.cssBefore.height = 0;
opts.animIn.top = 0;
opts.animOut.height = 0;
};
$.fn.cycle.transitions.turnDown = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,true,false);
opts.animIn.height = next.cycleH;
opts.animOut.top= curr.cycleH;
});
opts.cssFirst.top = 0;
opts.cssBefore.left = 0;
opts.cssBefore.top = 0;
opts.cssBefore.height = 0;
opts.animOut.height = 0;
};
$.fn.cycle.transitions.turnLeft = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,false,true);
opts.cssBefore.left = next.cycleW;
opts.animIn.width = next.cycleW;
});
opts.cssBefore.top = 0;
opts.cssBefore.width = 0;
opts.animIn.left = 0;
opts.animOut.width = 0;
};
$.fn.cycle.transitions.turnRight = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,false,true);
opts.animIn.width = next.cycleW;
opts.animOut.left = curr.cycleW;
});
$.extend(opts.cssBefore, { top: 0, left: 0, width: 0 });
opts.animIn.left = 0;
opts.animOut.width = 0;
};

// zoom
$.fn.cycle.transitions.zoom = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,false,false,true);
opts.cssBefore.top = next.cycleH/2;
opts.cssBefore.left = next.cycleW/2;
$.extend(opts.animIn, { top: 0, left: 0, width: next.cycleW, height: next.cycleH });
$.extend(opts.animOut, { width: 0, height: 0, top: curr.cycleH/2, left: curr.cycleW/2 });
});
opts.cssFirst.top = 0;
opts.cssFirst.left = 0;
opts.cssBefore.width = 0;
opts.cssBefore.height = 0;
};

// fadeZoom
$.fn.cycle.transitions.fadeZoom = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,false,false);
opts.cssBefore.left = next.cycleW/2;
opts.cssBefore.top = next.cycleH/2;
$.extend(opts.animIn, { top: 0, left: 0, width: next.cycleW, height: next.cycleH });
});
opts.cssBefore.width = 0;
opts.cssBefore.height = 0;
opts.animOut.opacity = 0;
};

// blindX
$.fn.cycle.transitions.blindX = function($cont, $slides, opts) {
var w = $cont.css('overflow','hidden').width();
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts);
opts.animIn.width = next.cycleW;
opts.animOut.left= curr.cycleW;
});
opts.cssBefore.left = w;
opts.cssBefore.top = 0;
opts.animIn.left = 0;
opts.animOut.left = w;
};
// blindY
$.fn.cycle.transitions.blindY = function($cont, $slides, opts) {
var h = $cont.css('overflow','hidden').height();
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts);
opts.animIn.height = next.cycleH;
opts.animOut.top= curr.cycleH;
});
opts.cssBefore.top = h;
opts.cssBefore.left = 0;
opts.animIn.top = 0;
opts.animOut.top = h;
};
// blindZ
$.fn.cycle.transitions.blindZ = function($cont, $slides, opts) {
var h = $cont.css('overflow','hidden').height();
var w = $cont.width();
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts);
opts.animIn.height = next.cycleH;
opts.animOut.top= curr.cycleH;
});
opts.cssBefore.top = h;
opts.cssBefore.left = w;
opts.animIn.top = 0;
opts.animIn.left = 0;
opts.animOut.top = h;
opts.animOut.left = w;
};

// growX - grow horizontally from centered 0 width
$.fn.cycle.transitions.growX = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,false,true);
opts.cssBefore.left = this.cycleW/2;
opts.animIn.left = 0;
opts.animIn.width = this.cycleW;
opts.animOut.left = 0;
});
opts.cssBefore.top = 0;
opts.cssBefore.width = 0;
};
// growY - grow vertically from centered 0 height
$.fn.cycle.transitions.growY = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,true,false);
opts.cssBefore.top = this.cycleH/2;
opts.animIn.top = 0;
opts.animIn.height = this.cycleH;
opts.animOut.top = 0;
});
opts.cssBefore.height = 0;
opts.cssBefore.left = 0;
};

// curtainX - squeeze in both edges horizontally
$.fn.cycle.transitions.curtainX = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,false,true,true);
opts.cssBefore.left = next.cycleW/2;
opts.animIn.left = 0;
opts.animIn.width = this.cycleW;
opts.animOut.left = curr.cycleW/2;
opts.animOut.width = 0;
});
opts.cssBefore.top = 0;
opts.cssBefore.width = 0;
};
// curtainY - squeeze in both edges vertically
$.fn.cycle.transitions.curtainY = function($cont, $slides, opts) {
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,true,false,true);
opts.cssBefore.top = next.cycleH/2;
opts.animIn.top = 0;
opts.animIn.height = next.cycleH;
opts.animOut.top = curr.cycleH/2;
opts.animOut.height = 0;
});
opts.cssBefore.height = 0;
opts.cssBefore.left = 0;
};

// cover - curr slide covered by next slide
$.fn.cycle.transitions.cover = function($cont, $slides, opts) {
var d = opts.direction || 'left';
var w = $cont.css('overflow','hidden').width();
var h = $cont.height();
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts);
opts.cssAfter.display = '';
if (d == 'right')
opts.cssBefore.left = -w;
else if (d == 'up')
opts.cssBefore.top = h;
else if (d == 'down')
opts.cssBefore.top = -h;
else
opts.cssBefore.left = w;
});
opts.animIn.left = 0;
opts.animIn.top = 0;
opts.cssBefore.top = 0;
opts.cssBefore.left = 0;
};

// uncover - curr slide moves off next slide
$.fn.cycle.transitions.uncover = function($cont, $slides, opts) {
var d = opts.direction || 'left';
var w = $cont.css('overflow','hidden').width();
var h = $cont.height();
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,true,true,true);
if (d == 'right')
opts.animOut.left = w;
else if (d == 'up')
opts.animOut.top = -h;
else if (d == 'down')
opts.animOut.top = h;
else
opts.animOut.left = -w;
});
opts.animIn.left = 0;
opts.animIn.top = 0;
opts.cssBefore.top = 0;
opts.cssBefore.left = 0;
};

// toss - move top slide and fade away
$.fn.cycle.transitions.toss = function($cont, $slides, opts) {
var w = $cont.css('overflow','visible').width();
var h = $cont.height();
opts.before.push(function(curr, next, opts) {
$.fn.cycle.commonReset(curr,next,opts,true,true,true);
// provide default toss settings if animOut not provided
if (!opts.animOut.left && !opts.animOut.top)
$.extend(opts.animOut, { left: w*2, top: -h/2, opacity: 0 });
else
opts.animOut.opacity = 0;
});
opts.cssBefore.left = 0;
opts.cssBefore.top = 0;
opts.animIn.left = 0;
};

// wipe - clip animation
$.fn.cycle.transitions.wipe = function($cont, $slides, opts) {
var w = $cont.css('overflow','hidden').width();
var h = $cont.height();
opts.cssBefore = opts.cssBefore || {};
var clip;
if (opts.clip) {
if (/l2r/.test(opts.clip))
clip = 'rect(0px 0px '+h+'px 0px)';
else if (/r2l/.test(opts.clip))
clip = 'rect(0px '+w+'px '+h+'px '+w+'px)';
else if (/t2b/.test(opts.clip))
clip = 'rect(0px '+w+'px 0px 0px)';
else if (/b2t/.test(opts.clip))
clip = 'rect('+h+'px '+w+'px '+h+'px 0px)';
else if (/zoom/.test(opts.clip)) {
var top = parseInt(h/2,10);
var left = parseInt(w/2,10);
clip = 'rect('+top+'px '+left+'px '+top+'px '+left+'px)';
}
}

opts.cssBefore.clip = opts.cssBefore.clip || clip || 'rect(0px 0px 0px 0px)';

var d = opts.cssBefore.clip.match(/(\d+)/g);
var t = parseInt(d[0],10), r = parseInt(d[1],10), b = parseInt(d[2],10), l = parseInt(d[3],10);

opts.before.push(function(curr, next, opts) {
if (curr == next) return;
var $curr = $(curr), $next = $(next);
$.fn.cycle.commonReset(curr,next,opts,true,true,false);
opts.cssAfter.display = 'block';

var step = 1, count = parseInt((opts.speedIn / 13),10) - 1;
(function f() {
var tt = t ? t - parseInt(step * (t/count),10) : 0;
var ll = l ? l - parseInt(step * (l/count),10) : 0;
var bb = b < h ? b + parseInt(step * ((h-b)/count || 1),10) : h;
var rr = r < w ? r + parseInt(step * ((w-r)/count || 1),10) : w;
$next.css({ clip: 'rect('+tt+'px '+rr+'px '+bb+'px '+ll+'px)' });
(step++ <= count) ? setTimeout(f, 13) : $curr.css('display', 'none');
})();
});
$.extend(opts.cssBefore, { display: 'block', opacity: 1, top: 0, left: 0 });
opts.animIn= { left: 0 };
opts.animOut= { left: 0 };
};

})(jQuery);
cache.tid.gallery = null;

$(document).ready(function(){

setTimeout(function(){
if(typeof gallery_images == "undefined"){
return;
}

$('gallery slideshow').append(gallery_images);


//Block photo when right click
$('gallery slideshow > a, gallery .box-spacer > a').mousedown(function(e) {
switch (e.which) {
case 1:
return;
break;
case 2:
case 3:
$(this).find('img').attr('src', (version == 1 ? '/vb2/public': '') +'/media/images/layout/warning/warning_slideshow.png');
$(this).addClass('why');
break;
default:
alert('You have a strange mouse');
break;
}
}).bind("contextmenu",function(e){
return false;
});


cycle_settings.after = function() {
doResize();
$('gallery .by a').hide();
var txt = new String(this);
var num = txt.lastIndexOf('/')+1; 
var id = txt.slice(num);
$('gallery .spacer').attr('href','/photo/'+id);
$('#p_' + id).show();

};

$('gallery slideshow').cycle(cycle_settings);
$('gallery loading').hide();


try
{
if($('.top-profile-user-left').length > 0) {
doResize(); // this function is in profile.js, is for the resize of the images on the slideshow.
fixSlideshowPhotos();
}
}
catch(err) { }
}, 100);
});
/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Â© 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
def: 'easeOutQuad',
swing: function (x, t, b, c, d) {
//alert(jQuery.easing.default);
return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
},
easeInQuad: function (x, t, b, c, d) {
return c*(t/=d)*t + b;
},
easeOutQuad: function (x, t, b, c, d) {
return -c *(t/=d)*(t-2) + b;
},
easeInOutQuad: function (x, t, b, c, d) {
if ((t/=d/2) < 1) return c/2*t*t + b;
return -c/2 * ((--t)*(t-2) - 1) + b;
},
easeInCubic: function (x, t, b, c, d) {
return c*(t/=d)*t*t + b;
},
easeOutCubic: function (x, t, b, c, d) {
return c*((t=t/d-1)*t*t + 1) + b;
},
easeInOutCubic: function (x, t, b, c, d) {
if ((t/=d/2) < 1) return c/2*t*t*t + b;
return c/2*((t-=2)*t*t + 2) + b;
},
easeInQuart: function (x, t, b, c, d) {
return c*(t/=d)*t*t*t + b;
},
easeOutQuart: function (x, t, b, c, d) {
return -c * ((t=t/d-1)*t*t*t - 1) + b;
},
easeInOutQuart: function (x, t, b, c, d) {
if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
return -c/2 * ((t-=2)*t*t*t - 2) + b;
},
easeInQuint: function (x, t, b, c, d) {
return c*(t/=d)*t*t*t*t + b;
},
easeOutQuint: function (x, t, b, c, d) {
return c*((t=t/d-1)*t*t*t*t + 1) + b;
},
easeInOutQuint: function (x, t, b, c, d) {
if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
return c/2*((t-=2)*t*t*t*t + 2) + b;
},
easeInSine: function (x, t, b, c, d) {
return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
},
easeOutSine: function (x, t, b, c, d) {
return c * Math.sin(t/d * (Math.PI/2)) + b;
},
easeInOutSine: function (x, t, b, c, d) {
return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
},
easeInExpo: function (x, t, b, c, d) {
return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
},
easeOutExpo: function (x, t, b, c, d) {
return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
},
easeInOutExpo: function (x, t, b, c, d) {
if (t==0) return b;
if (t==d) return b+c;
if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
},
easeInCirc: function (x, t, b, c, d) {
return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
},
easeOutCirc: function (x, t, b, c, d) {
return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
},
easeInOutCirc: function (x, t, b, c, d) {
if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
},
easeInElastic: function (x, t, b, c, d) {
var s=1.70158;var p=0;var a=c;
if (t==0) return b;if ((t/=d)==1) return b+c;if (!p) p=d*.3;
if (a < Math.abs(c)) { a=c; var s=p/4; }
else var s = p/(2*Math.PI) * Math.asin (c/a);
return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
},
easeOutElastic: function (x, t, b, c, d) {
var s=1.70158;var p=0;var a=c;
if (t==0) return b;if ((t/=d)==1) return b+c;if (!p) p=d*.3;
if (a < Math.abs(c)) { a=c; var s=p/4; }
else var s = p/(2*Math.PI) * Math.asin (c/a);
return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
},
easeInOutElastic: function (x, t, b, c, d) {
var s=1.70158;var p=0;var a=c;
if (t==0) return b;if ((t/=d/2)==2) return b+c;if (!p) p=d*(.3*1.5);
if (a < Math.abs(c)) { a=c; var s=p/4; }
else var s = p/(2*Math.PI) * Math.asin (c/a);
if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
},
easeInBack: function (x, t, b, c, d, s) {
if (s == undefined) s = 1.70158;
return c*(t/=d)*t*((s+1)*t - s) + b;
},
easeOutBack: function (x, t, b, c, d, s) {
if (s == undefined) s = 1.70158;
return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
},
easeInOutBack: function (x, t, b, c, d, s) {
if (s == undefined) s = 1.70158; 
if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
},
easeInBounce: function (x, t, b, c, d) {
return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
},
easeOutBounce: function (x, t, b, c, d) {
if ((t/=d) < (1/2.75)) {
return c*(7.5625*t*t) + b;
} else if (t < (2/2.75)) {
return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
} else if (t < (2.5/2.75)) {
return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
} else {
return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
}
},
easeInOutBounce: function (x, t, b, c, d) {
if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Â© 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 *//**
 * jquery.LavaLamp v1.4 - light up your menus with fluid, jQuery powered animations.
 *
 * Requires jQuery v1.2.3 or better from http://jquery.com
 * Tested on jQuery 1.4.4, 1.3.2 and 1.2.6
 *
 * http://nixbox.com/projects/jquery-lavalamp/
 *
 * Copyright (c) 2008, 2009, 2010, 2012 Jolyon Terwilliger, jolyon@nixbox.com
 * Source code Copyright (c) 2008, 2009, 2010, 2012
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * credits to Guillermo Rauch and Ganeshji Marwaha (gmarwaha.com) for previous editions
 
 * May 6 2013, Michell Valenzuela - added the mouseover and mouseleave events.
**/
(function($) {
jQuery.fn.lavaLamp = function(o) {
o = $.extend({
'target': 'li',
'container': '',
'fx': 'swing',
'speed': 500, 
'click': function(){return true},
'startItem': '',
'includeMargins': false,
'autoReturn': true,
'returnDelay': 0,
'setOnClick': true,
'homeTop':0,
'homeLeft':0,
'homeWidth':0,
'homeHeight':0,
'returnHome':false,
'autoResize':false,
'selectClass': 'selectedLava',
'homeClass': 'homeLava',
'skipClass': 'noLava',
'returnStart': function(){},
'returnFinish': function(){},
'hoverStart': function(){},
'hoverFinish': function(){}
}, 
o || {});

// parseInt for easy mathing
function getInt(arg) {
var myint = parseInt(arg);
return (isNaN(myint)? 0: myint);
}

if (o.container == '')
o.container = o.target;

if (o.autoResize)
$(window).resize(function(){
$(o.target+'.'+o.selectClass).trigger('mouseenter');
});

return this.each(function() {
// ensures parent UL or OL element has some positioning
if ($(this).css('position')=='static')
$(this).css('position','relative');

// create homeLava element if origin dimensions set
if (o.homeTop || o.homeLeft) { 
var $home = $('<'+o.container+' class="'+o.homeClass+'"></'+o.container+'>').css({ 'left':o.homeLeft, 'top':o.homeTop, 'width':o.homeWidth, 'height':o.homeHeight, 'position':'absolute','display':'block' });
$(this).prepend($home);
}

var path = location.pathname + location.search + location.hash, $selected, $back, $lt = $(o.target, this).not('.'+o.skipClass), delayTimer, bx=0, by=0, mh=0, mw=0, ml=0, mt=0;

// start $selected default with CSS `selectedClass`
$selected = $(o.target + '.' + o.selectClass, this);

// override $selected if startItem is set
if (o.startItem != '')
$selected = $lt.eq(o.startItem);

// default to $home element
if ((o.homeTop || o.homeLeft) && $selected.length<1)
$selected = $home;

// loop through all the target element a href tags and
// the longest href to match the location path is deemed the most 
// accurate and selected as default
if ($selected.length<1) {
var pathmatch_len=0, $pathel;

$lt.each(function(){ 
var thishref = $('a:first',this).attr('href');
//console.log(thishref+' size:'+thishref.length);
if (path.indexOf(thishref)>-1 && thishref.length > pathmatch_len )
{
$pathel = $(this);
pathmatch_len = thishref.length;
}

});
if (pathmatch_len>0) {
//console.log('found match:'+$('a:first',$pathel).attr('href'));
$selected = $pathel;
}
//else 
//console.log('no match!');
}

// if still no matches, default to the first element
if ( $selected.length<1 )
$selected = $lt.eq(0);

// make sure we only have one element as $selected and apply selectedClass
$selected = $($selected.eq(0).addClass(o.selectClass));

// add mouseover event for every sub element
$lt.bind('mouseenter focusin', function() {
//console.log('mouseenter');
// help backLava behave if returnDelay is set
if(delayTimer) {clearTimeout(delayTimer);delayTimer=null;}
//move($(this));
}).click(function(e) {
move($(this));
if (o.setOnClick) {
$selected.removeClass(o.selectClass);
$selected = $(this).addClass(o.selectClass);
}
return o.click.apply(this, [e, this]);
});

$currentIndex = 1;
/*$(this).bind('mouseenter', function() {
$currentIndex = $(this).children('.' + o.selectClass).index();
$(this).children('.' + o.selectClass).removeClass(o.selectClass);
});

$(this).bind('mouseleave', function() {
if($(this).children('.' + o.selectClass).length == 0) {
$(this).children(o.target + ':nth-child(' + ($currentIndex + 1) + ')').addClass(o.selectClass);
}
});*/

// creates and adds to the container a backLava element with absolute positioning
$back = $('<'+o.container+' class="backLava"><div class="leftLava"></div><div class="bottomLava"></div><div class="cornerLava"></div></'+o.container+'>').css({'position':'absolute','display':'block','margin':0,'padding':0}).prependTo(this);

// setting css height and width actually sets the innerHeight and innerWidth, so
// compute border and padding differences on styled backLava element to fit them in also.
if (o.includeMargins) {
mh = getInt($selected.css('marginTop')) + getInt($selected.css('marginBottom'));
mw = getInt($selected.css('marginLeft')) + getInt($selected.css('marginRight'));
}
bx = getInt($back.css('borderLeftWidth'))+getInt($back.css('borderRightWidth'))+getInt($back.css('paddingLeft'))+getInt($back.css('paddingRight'))-mw;
by = getInt($back.css('borderTopWidth'))+getInt($back.css('borderBottomWidth'))+getInt($back.css('paddingTop'))+getInt($back.css('paddingBottom'))-mh;

// set the starting position for the lavalamp hover element: .back
if (o.homeTop || o.homeLeft)
$back.css({ 'left':o.homeLeft, 'top':o.homeTop, 'width':o.homeWidth, 'height':o.homeHeight });
else
{
if (!o.includeMargins) {
ml = (getInt($selected.css('marginLeft')));
mt = (getInt($selected.css('marginTop')));
}
$back.css({ 'left': $selected.position().left+ml, 'top': $selected.position().top+mt, 'width': $selected.outerWidth()-bx, 'height': $selected.outerHeight()-by }); 
}

// after we leave the container element, move back to default/last clicked element
/*$(this).bind('mouseleave focusout', function() {
//console.log('mouseleave');
var $returnEl = null;
if (o.returnHome)
$returnEl = $home;
else if (!o.autoReturn)
return true;

if (o.returnDelay) {
if(delayTimer) clearTimeout(delayTimer);
delayTimer = setTimeout(function(){move($returnEl, 'return');},o.returnDelay);
}
else {
move($returnEl, 'return');
}
return true;
});*/

function move($el, cbType) {

if (cbType == 'return') {
o.returnStart($el);
} else {
o.hoverStart($el);
}

if (!$el) $el = $selected;

if (!o.includeMargins) {
ml = (getInt($el.css('marginLeft')));
mt = (getInt($el.css('marginTop')));
}
var dims = {
'left': $el.position().left+ml,
'top': $el.position().top+mt,
'width': $el.outerWidth()-bx,
'height': $el.outerHeight()-by
};

//o.speed

$back.stop().animate(dims, 0, o.fx, function () {
if (cbType == 'return') {
o.returnFinish($el);
} else {
o.hoverFinish($el);
}
});
};


});
};
})(jQuery);/*!
 * fancyBox - jQuery Plugin
 * version: 2.1.4 (Thu, 10 Jan 2013)
 * @requires jQuery v1.6 or later
 *
 * Examples at http://fancyapps.com/fancybox/
 * License: www.fancyapps.com/fancybox/#license
 *
 * Copyright 2012 Janis Skarnelis - janis@fancyapps.com
 *
 */

(function (window, document, $, undefined) {
"use strict";

var W = $(window),
D = $(document),
F = $.fancybox = function () {
F.open.apply( this, arguments );
},
IE =navigator.userAgent.match(/msie/),
didUpdate = null,
isTouch= document.createTouch !== undefined,

isQuery= function(obj) {
return obj && obj.hasOwnProperty && obj instanceof $;
},
isString = function(str) {
return str && typeof (str) === "string";
},
isPercentage = function(str) {
return isString(str) && str.indexOf('%') > 0;
},
isScrollable = function(el) {
return (el && !(el.style.overflow && el.style.overflow === 'hidden') && ((el.clientWidth && el.scrollWidth > el.clientWidth) || (el.clientHeight && el.scrollHeight > el.clientHeight)));
},
getScalar = function(orig, dim) {
var value = parseInt(orig, 10) || 0;

if (dim && isPercentage(orig)) {
value = F.getViewport()[ dim ] / 100 * value;
}

return Math.ceil(value);
},
getValue = function(value, dim) {
return getScalar(value, dim) + 'px';
};

var t_prev = {
13 : 'left', // enter
34 : 'up',// page down
39 : 'left', // right arrow
40 : 'up'// down arrow
};
var t_next = {
8: 'right',// backspace
33 : 'down',// page up
37 : 'right',// left arrow
38 : 'down'// up arrow
};



$.extend(F, {
// The current version of fancyBox
version: '2.1.4',

defaults: {
padding : 0,
margin: 20,

width: 800,
height: 600,
minWidth: 100,
minHeight : 100,
maxWidth: 9999,
maxHeight : 9999,

autoSize: true,
autoHeight : false,
autoWidth: false,

autoResize: true,
autoCenter: !isTouch,
fitToView: true,
aspectRatio : false,
topRatio: 0.5,
leftRatio: 0.5,

scrolling : 'auto', // 'auto', 'yes' or 'no'
wrapCSS: '',

arrows: true,
closeBtn: true,
closeClick : false,
nextClick: false,
mouseWheel : true,
autoPlay: false,
playSpeed: 3000,
preload: 3,
modal: false,
loop: true,

ajax: {
dataType : 'html',
headers: { 'X-fancyBox': true }
},
iframe : {
scrolling : 'auto',
preload: true
},
swf : {
wmode: 'transparent',
allowfullscreen: 'true',
allowscriptaccess : 'always'
},

keys: {
next : t_next,
prev : t_prev,
close: [27], // escape key
play: [32], // space - start/stop slideshow
toggle : [70]// letter "f" - toggle fullscreen
},

direction : {
next : 'left',
prev : 'right'
},

scrollOutside: true,

// Override some properties
index: 0,
type: null,
href: null,
content : null,
title: null,

// HTML templates
tpl: {
wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div><span><a href="javascript:" class="slideshow-arrows slide-prev"></a><a href="javascript:" class="slideshow-arrows slide-next"></a></span>',
image: '<div class="fancybox-image" style="background-image:url({href});background-size:100%;" ></div>',
iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' + (IE ? ' allowtransparency="true"' : '') + '></iframe>',
error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
closeBtn : '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
},

// Properties for each animation type
// Opening fancyBox
openEffect: 'fade', // 'elastic', 'fade' or 'none'
openSpeed: 250,
openEasing: 'swing',
openOpacity : true,
openMethod: 'zoomIn',

// Closing fancyBox
closeEffect: 'fade', // 'elastic', 'fade' or 'none'
closeSpeed: 250,
closeEasing: 'swing',
closeOpacity : true,
closeMethod: 'zoomOut',

// Changing next gallery item
nextEffect : 'elastic', // 'elastic', 'fade' or 'none'
nextSpeed: 250,
nextEasing : 'swing',
nextMethod : 'changeIn',

// Changing previous gallery item
prevEffect : 'elastic', // 'elastic', 'fade' or 'none'
prevSpeed: 250,
prevEasing : 'swing',
prevMethod : 'changeOut',

// Enable default helpers
helpers : {
overlay : true,
title: true
},

// Callbacks
onCancel: $.noop, // If canceling
beforeLoad: $.noop, // Before loading
afterLoad: $.noop, // After loading
beforeShow: $.noop, // Before changing in current item
afterShow: $.noop, // After opening
beforeChange : $.noop, // Before changing gallery item
beforeClose: $.noop, // Before closing
afterClose: $.noop// After closing
},

//Current state
group: {}, // Selected group
opts: {}, // Group options
previous : null,// Previous element
coming: null,// Element being loaded
current: null,// Currently loaded element
isActive : false, // Is activated
isOpen: false, // Is currently open
isOpened : false, // Have been fully opened at least once

wrap: null,
skin: null,
outer : null,
inner : null,

player : {
timer: null,
isActive : false
},

// Loaders
ajaxLoad: null,
imgPreload : null,

// Some collections
transitions : {},
helpers: {},

/*
 *Static methods
 */

open: function (group, opts) {
if (!group) {
return;
}

if (!$.isPlainObject(opts)) {
opts = {};
}

// Close if already active
if (false === F.close(true)) {
return;
}

// Normalize group
if (!$.isArray(group)) {
group = isQuery(group) ? $(group).get() : [group];
}

// Recheck if the type of each element is `object` and set content type (image, ajax, etc)
$.each(group, function(i, element) {
var obj = {},
href,
title,
content,
type,
rez,
hrefParts,
selector;

if (typeof element === "object") {
// Check if is DOM element
if (element.nodeType) {
element = $(element);
}

if (isQuery(element)) {
obj = {
href: element.data('fancybox-href') || element.attr('href'),
title: element.data('fancybox-title') || element.attr('title'),
isDom: true,
element : element
};

if ($.metadata) {
$.extend(true, obj, element.metadata());
}

} else {
obj = element;
}
}

href= opts.href|| obj.href || (isString(element) ? element : null);
title = opts.title !== undefined ? opts.title : obj.title || '';

content = opts.content || obj.content;
type= content ? 'html' : (opts.type|| obj.type);

if (!type && obj.isDom) {
type = element.data('fancybox-type');

if (!type) {
rez= element.attr('class').match(/fancybox\.(\w+)/);
type = rez ? rez[1] : null;
}
}

if (isString(href)) {
// Try to guess the content type
if (!type) {
if (F.isImage(href)) {
type = 'image';

} else if (F.isSWF(href)) {
type = 'swf';

} else if (href.charAt(0) === '#') {
type = 'inline';

} else if (isString(element)) {
type= 'html';
content = element;
}
}

// Split url into two pieces with source url and content selector, e.g,
// "/mypage.html #my_id" will load "/mypage.html" and display element having id "my_id"
if (type === 'ajax') {
hrefParts = href.split(/\s+/, 2);
href= hrefParts.shift();
selector= hrefParts.shift();
}
}

if (!content) {
if (type === 'inline') {
if (href) {
content = $( isString(href) ? href.replace(/.*(?=#[^\s]+$)/, '') : href ); //strip for ie7

} else if (obj.isDom) {
content = element;
}

} else if (type === 'html') {
content = href;

} else if (!type && !href && obj.isDom) {
type= 'inline';
content = element;
}
}

$.extend(obj, {
href: href,
type: type,
content: content,
title: title,
selector : selector
});

group[ i ] = obj;
});

// Extend the defaults
F.opts = $.extend(true, {}, F.defaults, opts);

// All options are merged recursive except keys
if (opts.keys !== undefined) {
F.opts.keys = opts.keys ? $.extend({}, F.defaults.keys, opts.keys) : false;
}

F.group = group;

return F._start(F.opts.index);
},

// Cancel image loading or abort ajax request
cancel: function () {
var coming = F.coming;

if (!coming || false === F.trigger('onCancel')) {
return;
}

F.hideLoading();

if (F.ajaxLoad) {
F.ajaxLoad.abort();
}

F.ajaxLoad = null;

if (F.imgPreload) {
F.imgPreload.onload = F.imgPreload.onerror = null;
}

if (coming.wrap) {
coming.wrap.stop(true, true).trigger('onReset').remove();
}

F.coming = null;

// If the first item has been canceled, then clear everything
if (!F.current) {
F._afterZoomOut( coming );
}
},

// Start closing animation if is open; remove immediately if opening/closing
close: function (event) {
F.cancel();

if (false === F.trigger('beforeClose')) {
return;
}

F.unbindEvents();

if (!F.isActive) {
return;
}

if (!F.isOpen || event === true) {
$('.fancybox-wrap').stop(true).trigger('onReset').remove();

F._afterZoomOut();

} else {
F.isOpen = F.isOpened = false;
F.isClosing = true;

$('.fancybox-item, .fancybox-nav').remove();

F.wrap.stop(true, true).removeClass('fancybox-opened');

F.transitions[ F.current.closeMethod ]();
}

$('.mobile .slideshow-arrows').hide();
},

// Manage slideshow:
//$.fancybox.play(); - toggle slideshow
//$.fancybox.play( true ); - start
//$.fancybox.play( false ); - stop
play: function ( action ) {
var clear = function () {
clearTimeout(F.player.timer);
},
set = function () {
clear();

if (F.current && F.player.isActive) {
F.player.timer = setTimeout(F.next, F.current.playSpeed);
}
},
stop = function () {
clear();

$('body').unbind('.player');

F.player.isActive = false;

F.trigger('onPlayEnd');
},
start = function () {
if (F.current && (F.current.loop || F.current.index < F.group.length - 1)) {
F.player.isActive = true;

$('body').bind({
'afterShow.player onUpdate.player': set,
'onCancel.player beforeClose.player' : stop,
'beforeLoad.player' : clear
});

set();

F.trigger('onPlayStart');
}
};

if (action === true || (!F.player.isActive && action !== false)) {
start();
} else {
stop();
}
},

// Navigate to next gallery item
next: function ( direction ) {
var current = F.current;

if (current) {
if (!isString(direction)) {
direction = current.direction.next;
}

F.jumpto(current.index + 1, direction, 'next');
}

$('.mobile .slideshow-arrows').show();
},

// Navigate to previous gallery item
prev: function ( direction ) {
var current = F.current;

if (current) {
if (!isString(direction)) {
direction = current.direction.prev;
}

F.jumpto(current.index - 1, direction, 'prev');
}

$('.mobile .slideshow-arrows').show();
},

// Navigate to gallery item by index
jumpto: function ( index, direction, router ) {
var current = F.current;

if (!current) {
return;
}

index = getScalar(index);

F.direction = direction || current.direction[ (index >= current.index ? 'next' : 'prev') ];
F.router= router || 'jumpto';

if (current.loop) {
if (index < 0) {
index = current.group.length + (index % current.group.length);
}

index = index % current.group.length;
}

if (current.group[ index ] !== undefined) {
F.cancel();

F._start(index);
}
},

// Center inside viewport and toggle position type to fixed or absolute if needed
reposition: function (e, onlyAbsolute) {
var current = F.current,
wrap= current ? current.wrap : null,
pos;

if (wrap) {
pos = F._getPosition(onlyAbsolute);

if (e && e.type === 'scroll') {
delete pos.position;

wrap.stop(true, true).animate(pos, 200);

} else {
wrap.css(pos);

current.pos = $.extend({}, current.dim, pos);
}
}
},

update: function (e) {
var type = (e && e.type),
anyway = !type || type === 'orientationchange';

if (anyway) {
clearTimeout(didUpdate);

didUpdate = null;
}

if (!F.isOpen || didUpdate) {
return;
}

didUpdate = setTimeout(function() {
var current = F.current;

if (!current || F.isClosing) {
return;
}

F.wrap.removeClass('fancybox-tmp');

if (anyway || type === 'load' || (type === 'resize' && current.autoResize)) {
F._setDimension();
}

if (!(type === 'scroll' && current.canShrink)) {
F.reposition(e);
}

F.trigger('onUpdate');

didUpdate = null;

}, (anyway && !isTouch ? 0 : 300));
},

// Shrink content to fit inside viewport or restore if resized
toggle: function ( action ) {
if (F.isOpen) {
F.current.fitToView = typeof action === "boolean" ? action : !F.current.fitToView;

// Help browser to restore document dimensions
if (isTouch) {
F.wrap.removeAttr('style').addClass('fancybox-tmp');

F.trigger('onUpdate');
}

F.update();
}
},

hideLoading: function () {
D.unbind('.loading');

$('#fancybox-loading').remove();
},

showLoading: function () {
var el, viewport;

F.hideLoading();

el = $('<div id="fancybox-loading"><div></div></div>').click(F.cancel).appendTo('body');

// If user will press the escape-button, the request will be canceled
D.bind('keydown.loading', function(e) {
if ((e.which || e.keyCode) === 27) {
e.preventDefault();

F.cancel();
}
});

if (!F.defaults.fixed) {
viewport = F.getViewport();

el.css({
position : 'absolute',
top: (viewport.h * 0.5) + viewport.y,
left : (viewport.w * 0.5) + viewport.x
});
}
},

getViewport: function () {
var locked = (F.current && F.current.locked) || false,
rez= {
x: W.scrollLeft(),
y: W.scrollTop()
};

if (locked) {
rez.w = locked[0].clientWidth;
rez.h = locked[0].clientHeight;

} else {
// See http://bugs.jquery.com/ticket/6724
rez.w = isTouch && window.innerWidth? window.innerWidth: W.width();
rez.h = isTouch && window.innerHeight ? window.innerHeight : W.height();
}

return rez;
},

// Unbind the keyboard / clicking actions
unbindEvents: function () {
if (F.wrap && isQuery(F.wrap)) {
F.wrap.unbind('.fb');
}

D.unbind('.fb');
W.unbind('.fb');
},

bindEvents: function () {
var current = F.current,
keys;

if (!current) {
return;
}

// Changing document height on iOS devices triggers a 'resize' event,
// that can change document height... repeating infinitely
W.bind('orientationchange.fb' + (isTouch ? '' : ' resize.fb') + (current.autoCenter && !current.locked ? ' scroll.fb' : ''), F.update);

keys = current.keys;

if (keys) {
D.bind('keydown.fb', function (e) {
var code= e.which || e.keyCode,
target = e.target || e.srcElement;

// Skip esc key if loading, because showLoading will cancel preloading
if (code === 27 && F.coming) {
return false;
}

// Ignore key combinations and key events within form elements
if (!e.ctrlKey && !e.altKey && !e.shiftKey && !e.metaKey && !(target && (target.type || $(target).is('[contenteditable]')))) {
$.each(keys, function(i, val) {
if (current.group.length > 1 && val[ code ] !== undefined) {
F[ i ]( val[ code ] );

e.preventDefault();
return false;
}

if ($.inArray(code, val) > -1) {
F[ i ] ();

e.preventDefault();
return false;
}
});
}
});
}

if ($.fn.mousewheel && current.mouseWheel) {
F.wrap.bind('mousewheel.fb', function (e, delta, deltaX, deltaY) {
var target = e.target || null,
parent = $(target),
canScroll = false;

while (parent.length) {
if (canScroll || parent.is('.fancybox-skin') || parent.is('.fancybox-wrap')) {
break;
}

canScroll = isScrollable( parent[0] );
parent= $(parent).parent();
}

if (delta !== 0 && !canScroll) {
if (F.group.length > 1 && !current.canShrink) {
if (deltaY > 0 || deltaX > 0) {
F.prev( deltaY > 0 ? 'down' : 'left' );

} else if (deltaY < 0 || deltaX < 0) {
F.next( deltaY < 0 ? 'up' : 'right' );
}

e.preventDefault();
}
}
});
}
},

trigger: function (event, o) {
var ret, obj = o || F.coming || F.current;

if (!obj) {
return;
}

if ($.isFunction( obj[event] )) {
ret = obj[event].apply(obj, Array.prototype.slice.call(arguments, 1));
}

if (ret === false) {
return false;
}

if (obj.helpers) {
$.each(obj.helpers, function (helper, opts) {
if (opts && F.helpers[helper] && $.isFunction(F.helpers[helper][event])) {
opts = $.extend(true, {}, F.helpers[helper].defaults, opts);

F.helpers[helper][event](opts, obj);
}
});
}

$.event.trigger(event + '.fb');
},

isImage: function (str) {
return isString(str) && str.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp)((\?|#).*)?$)/i);
},

isSWF: function (str) {
return isString(str) && str.match(/\.(swf)((\?|#).*)?$/i);
},

_start: function (index) {
var coming = {},
obj,
href,
type,
margin,
padding;

index = getScalar( index );
obj= F.group[ index ] || null;

if (!obj) {
return false;
}

coming = $.extend(true, {}, F.opts, obj);

// Convert margin and padding properties to array - top, right, bottom, left
margin= coming.margin;
padding = coming.padding;

if (typeof (margin) === 'number') {
coming.margin = [margin, margin, margin, margin];
}

if (typeof (padding) === 'number') {
coming.padding = [padding, padding, padding, padding];
}

// 'modal' propery is just a shortcut
if (coming.modal) {
$.extend(true, coming, {
closeBtn: false,
closeClick : false,
nextClick: false,
arrows: false,
mouseWheel : false,
keys: null,
helpers: {
overlay : {
closeClick : false
}
}
});
}

// 'autoSize' property is a shortcut, too
if (coming.autoSize) {
coming.autoWidth = coming.autoHeight = true;
}

if (coming.width === 'auto') {
coming.autoWidth = true;
}

if (coming.height === 'auto') {
coming.autoHeight = true;
}

/*
 * Add reference to the group, so it`s possible to access from callbacks, example:
 * afterLoad : function() {
 *this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
 * }
 */

coming.group= F.group;
coming.index= index;

// Give a chance for callback or helpers to update coming item (type, title, etc)
F.coming = coming;

if (false === F.trigger('beforeLoad')) {
F.coming = null;

return;
}

type = coming.type;
href = coming.href;

if (!type) {
F.coming = null;

//If we can not determine content type then drop silently or display next/prev item if looping through gallery
if (F.current && F.router && F.router !== 'jumpto') {
F.current.index = index;

return F[ F.router ]( F.direction );
}

return false;
}

F.isActive = true;

if (type === 'image' || type === 'swf') {
coming.autoHeight = coming.autoWidth = false;
coming.scrolling= 'visible';
}

if (type === 'image') {
coming.aspectRatio = true;
}

if (type === 'iframe' && isTouch) {
coming.scrolling = 'scroll';
}

// Build the neccessary markup
coming.wrap = $(coming.tpl.wrap).addClass('fancybox-' + (isTouch ? 'mobile' : 'desktop') + ' fancybox-type-' + type + ' fancybox-tmp ' + coming.wrapCSS).appendTo( coming.parent || 'body' );

$.extend(coming, {
skin: $('.fancybox-skin',coming.wrap),
outer : $('.fancybox-outer', coming.wrap),
inner : $('.fancybox-inner', coming.wrap)
});

$.each(["Top", "Right", "Bottom", "Left"], function(i, v) {
coming.skin.css('padding' + v, getValue(coming.padding[ i ]));
});

F.trigger('onReady');

// Check before try to load; 'inline' and 'html' types need content, others - href
if (type === 'inline' || type === 'html') {
if (!coming.content || !coming.content.length) {
return F._error( 'content' );
}

} else if (!href) {
return F._error( 'href' );
}

if (type === 'image') {
F._loadImage();

} else if (type === 'ajax') {
F._loadAjax();

} else if (type === 'iframe') {
F._loadIframe();

} else {
F._afterLoad();
}
},

_error: function ( type ) {
$.extend(F.coming, {
type: 'html',
autoWidth: true,
autoHeight : true,
minWidth: 0,
minHeight: 0,
scrolling: 'no',
hasError: type,
content: F.coming.tpl.error
});

F._afterLoad();
},

_loadImage: function () {
// Reset preload image so it is later possible to check "complete" property
var img = F.imgPreload = new Image();

img.onload = function () {
this.onload = this.onerror = null;

F.coming.width= this.width;
F.coming.height = this.height;

F._afterLoad();
};

img.onerror = function () {
this.onload = this.onerror = null;

F._error( 'image' );
};

img.src = F.coming.href;

if (img.complete !== true) {
F.showLoading();
}
},

_loadAjax: function () {
var coming = F.coming;

F.showLoading();

F.ajaxLoad = $.ajax($.extend({}, coming.ajax, {
url: coming.href,
error: function (jqXHR, textStatus) {
if (F.coming && textStatus !== 'abort') {
F._error( 'ajax', jqXHR );

} else {
F.hideLoading();
}
},
success: function (data, textStatus) {
if (textStatus === 'success') {
coming.content = data;

F._afterLoad();
}
}
}));
},

_loadIframe: function() {
var coming = F.coming,
iframe = $(coming.tpl.iframe.replace(/\{rnd\}/g, new Date().getTime()))
.attr('scrolling', isTouch ? 'auto' : coming.iframe.scrolling)
.attr('src', coming.href);

// This helps IE
$(coming.wrap).bind('onReset', function () {
try {
$(this).find('iframe').hide().attr('src', '//about:blank').end().empty();
} catch (e) {}
});

if (coming.iframe.preload) {
F.showLoading();

iframe.one('load', function() {
$(this).data('ready', 1);

// iOS will lose scrolling if we resize
if (!isTouch) {
$(this).bind('load.fb', F.update);
}

// Without this trick:
//- iframe won't scroll on iOS devices
//- IE7 sometimes displays empty iframe
$(this).parents('.fancybox-wrap').width('100%').removeClass('fancybox-tmp').show();

F._afterLoad();
});
}

coming.content = iframe.appendTo( coming.inner );

if (!coming.iframe.preload) {
F._afterLoad();
}
},

_preloadImages: function() {
var group= F.group,
current = F.current,
len= group.length,
cnt= current.preload ? Math.min(current.preload, len - 1) : 0,
item,
i;

for (i = 1; i <= cnt; i += 1) {
item = group[ (current.index + i ) % len ];

if (item.type === 'image' && item.href) {
new Image().src = item.href;
}
}
},

_afterLoad: function () {
var coming= F.coming,
previous = F.current,
placeholder = 'fancybox-placeholder',
current,
content,
type,
scrolling,
href,
embed;

F.hideLoading();

if (!coming || F.isActive === false) {
return;
}

if (false === F.trigger('afterLoad', coming, previous)) {
coming.wrap.stop(true).trigger('onReset').remove();

F.coming = null;

return;
}

if (previous) {
F.trigger('beforeChange', previous);

previous.wrap.stop(true).removeClass('fancybox-opened')
.find('.fancybox-item, .fancybox-nav')
.remove();
}

F.unbindEvents();

current= coming;
content= coming.content;
type= coming.type;
scrolling = coming.scrolling;

$.extend(F, {
wrap: current.wrap,
skin: current.skin,
outer : current.outer,
inner : current.inner,
current: current,
previous : previous
});

href = current.href;

switch (type) {
case 'inline':
case 'ajax':
case 'html':
if (current.selector) {
content = $('<div>').html(content).find(current.selector);

} else if (isQuery(content)) {
if (!content.data(placeholder)) {
content.data(placeholder, $('<div class="' + placeholder + '"></div>').insertAfter( content ).hide() );
}

content = content.show().detach();

current.wrap.bind('onReset', function () {
if ($(this).find(content).length) {
content.hide().replaceAll( content.data(placeholder) ).data(placeholder, false);
}
});
}
break;

case 'image':
content = current.tpl.image.replace('{href}', href);
break;

case 'swf':
content = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + href + '"></param>';
embed= '';

$.each(current.swf, function(name, val) {
content += '<param name="' + name + '" value="' + val + '"></param>';
embed+= ' ' + name + '="' + val + '"';
});

content += '<embed src="' + href + '" type="application/x-shockwave-flash" width="100%" height="100%"' + embed + '></embed></object>';
break;
}

if (!(isQuery(content) && content.parent().is(current.inner))) {
current.inner.append( content );
}

// Give a chance for helpers or callbacks to update elements
F.trigger('beforeShow');

// Set scrolling before calculating dimensions
current.inner.css('overflow', scrolling === 'yes' ? 'scroll' : (scrolling === 'no' ? 'hidden' : scrolling));

// Set initial dimensions and start position
F._setDimension();

F.reposition();

F.isOpen = false;
F.coming = null;

F.bindEvents();

if (!F.isOpened) {
$('.fancybox-wrap').not( current.wrap ).stop(true).trigger('onReset').remove();

} else if (previous.prevMethod) {
F.transitions[ previous.prevMethod ]();
}

F.transitions[ F.isOpened ? current.nextMethod : current.openMethod ]();

F._preloadImages();
},

_setDimension: function () {
var viewport= F.getViewport(),
steps= 0,
canShrink= false,
canExpand= false,
wrap= F.wrap,
skin= F.skin,
inner= F.inner,
current= F.current,
width= current.width,
height= current.height,
minWidth= current.minWidth,
minHeight= current.minHeight,
maxWidth= current.maxWidth,
maxHeight= current.maxHeight,
scrolling= current.scrolling,
scrollOut= current.scrollOutside ? current.scrollbarWidth : 0,
margin= current.margin,
wMargin= getScalar(margin[1] + margin[3]),
hMargin= getScalar(margin[0] + margin[2]),
wPadding,
hPadding,
wSpace,
hSpace,
origWidth,
origHeight,
origMaxWidth,
origMaxHeight,
ratio,
width_,
height_,
maxWidth_,
maxHeight_,
iframe,
body;

// Reset dimensions so we could re-check actual size
wrap.add(skin).add(inner).width('auto').height('auto').removeClass('fancybox-tmp');

wPadding = getScalar(skin.outerWidth(true)- skin.width());
hPadding = getScalar(skin.outerHeight(true) - skin.height());

// Any space between content and viewport (margin, padding, border, title)
wSpace = wMargin + wPadding;
hSpace = hMargin + hPadding;

origWidth= isPercentage(width)? (viewport.w - wSpace) * getScalar(width)/ 100 : width;
origHeight = isPercentage(height) ? (viewport.h - hSpace) * getScalar(height) / 100 : height;

if (current.type === 'iframe') {
iframe = current.content;

if (current.autoHeight && iframe.data('ready') === 1) {
try {
if (iframe[0].contentWindow.document.location) {
inner.width( origWidth ).height(9999);

body = iframe.contents().find('body');

if (scrollOut) {
body.css('overflow-x', 'hidden');
}

origHeight = body.height();
}

} catch (e) {}
}

} else if (current.autoWidth || current.autoHeight) {
inner.addClass( 'fancybox-tmp' );

// Set width or height in case we need to calculate only one dimension
if (!current.autoWidth) {
inner.width( origWidth );
}

if (!current.autoHeight) {
inner.height( origHeight );
}

if (current.autoWidth) {
origWidth = inner.width();
}

if (current.autoHeight) {
origHeight = inner.height();
}

inner.removeClass( 'fancybox-tmp' );
}

width= getScalar( origWidth );
height = getScalar( origHeight );

ratio= origWidth / origHeight;

// Calculations for the content
minWidth= getScalar(isPercentage(minWidth) ? getScalar(minWidth, 'w') - wSpace : minWidth);
maxWidth= getScalar(isPercentage(maxWidth) ? getScalar(maxWidth, 'w') - wSpace : maxWidth);

minHeight = getScalar(isPercentage(minHeight) ? getScalar(minHeight, 'h') - hSpace : minHeight);
maxHeight = getScalar(isPercentage(maxHeight) ? getScalar(maxHeight, 'h') - hSpace : maxHeight);

// These will be used to determine if wrap can fit in the viewport
origMaxWidth= maxWidth;
origMaxHeight = maxHeight;

if (current.fitToView) {
maxWidth= Math.min(viewport.w - wSpace, maxWidth);
maxHeight = Math.min(viewport.h - hSpace, maxHeight);
}

maxWidth_= viewport.w - wMargin;
maxHeight_ = viewport.h - hMargin;

if (current.aspectRatio) {
if (width > maxWidth) {
width= maxWidth;
height = getScalar(width / ratio);
}

if (height > maxHeight) {
height = maxHeight;
width= getScalar(height * ratio);
}

if (width < minWidth) {
width= minWidth;
height = getScalar(width / ratio);
}

if (height < minHeight) {
height = minHeight;
width= getScalar(height * ratio);
}

} else {
width = Math.max(minWidth, Math.min(width, maxWidth));

if (current.autoHeight && current.type !== 'iframe') {
inner.width( width );

height = inner.height();
}

height = Math.max(minHeight, Math.min(height, maxHeight));
}

// Try to fit inside viewport (including the title)
if (current.fitToView) {
inner.width( width ).height( height );

wrap.width( width + wPadding );

// Real wrap dimensions
width_= wrap.width();
height_ = wrap.height();

if (current.aspectRatio) {
while ((width_ > maxWidth_ || height_ > maxHeight_) && width > minWidth && height > minHeight) {
if (steps++ > 19) {
break;
}

height = Math.max(minHeight, Math.min(maxHeight, height - 10));
width= getScalar(height * ratio);

if (width < minWidth) {
width= minWidth;
height = getScalar(width / ratio);
}

if (width > maxWidth) {
width= maxWidth;
height = getScalar(width / ratio);
}

inner.width( width ).height( height );

wrap.width( width + wPadding );

width_= wrap.width();
height_ = wrap.height();
}

} else {
width= Math.max(minWidth,Math.min(width,width- (width_- maxWidth_)));
height = Math.max(minHeight, Math.min(height, height - (height_ - maxHeight_)));
}
}

if (scrollOut && scrolling === 'auto' && height < origHeight && (width + wPadding + scrollOut) < maxWidth_) {
width += scrollOut;
}

inner.width( width ).height( height );

wrap.width( width + wPadding );

width_= wrap.width();
height_ = wrap.height();

canShrink = (width_ > maxWidth_ || height_ > maxHeight_) && width > minWidth && height > minHeight;
canExpand = current.aspectRatio ? (width < origMaxWidth && height < origMaxHeight && width < origWidth && height < origHeight) : ((width < origMaxWidth || height < origMaxHeight) && (width < origWidth || height < origHeight));

$.extend(current, {
dim : {
width: getValue( width_ ),
height: getValue( height_ )
},
origWidth: origWidth,
origHeight : origHeight,
canShrink: canShrink,
canExpand: canExpand,
wPadding: wPadding,
hPadding: hPadding,
wrapSpace: height_ - skin.outerHeight(true),
skinSpace: skin.height() - height
});

if (!iframe && current.autoHeight && height > minHeight && height < maxHeight && !canExpand) {
inner.height('auto');
}
},

_getPosition: function (onlyAbsolute) {
var current= F.current,
viewport = F.getViewport(),
margin= current.margin,
width= F.wrap.width()+ margin[1] + margin[3],
height= F.wrap.height() + margin[0] + margin[2],
rez= {
position: 'absolute',
top: margin[0],
left : margin[3]
};

if (current.autoCenter && current.fixed && !onlyAbsolute && height <= viewport.h && width <= viewport.w) {
rez.position = 'fixed';

} else if (!current.locked) {
rez.top+= viewport.y;
rez.left += viewport.x;
}

rez.top= getValue(Math.max(rez.top,rez.top+ ((viewport.h - height) * current.topRatio)));
rez.left = getValue(Math.max(rez.left, rez.left + ((viewport.w - width)* current.leftRatio)));

return rez;
},

_afterZoomIn: function () {
var current = F.current;

if (!current) {
return;
}

F.isOpen = F.isOpened = true;

F.wrap.css('overflow', 'visible').addClass('fancybox-opened');

F.update();

// Assign a click event
if ( current.closeClick || (current.nextClick && F.group.length > 1) ) {
F.inner.css('cursor', 'pointer').bind('click.fb', function(e) {
if (!$(e.target).is('a') && !$(e.target).parent().is('a')) {
e.preventDefault();

F[ current.closeClick ? 'close' : 'next' ]();
}
});
}

// Create a close button
if (current.closeBtn) {
$(current.tpl.closeBtn).appendTo(F.skin).bind('click.fb', function(e) {
e.preventDefault();

F.close();
});
}

// Create navigation arrows
if (current.arrows && F.group.length > 1) {
if (current.loop || current.index > 0) {
$(current.tpl.prev).appendTo(F.outer).bind('click.fb', F.prev);
}

if (current.loop || current.index < F.group.length - 1) {
$(current.tpl.next).appendTo(F.outer).bind('click.fb', F.next);
}
}

F.trigger('afterShow');

// Stop the slideshow if this is the last item
if (!current.loop && current.index === current.group.length - 1) {
F.play( false );

} else if (F.opts.autoPlay && !F.player.isActive) {
F.opts.autoPlay = false;

F.play();
}
},

_afterZoomOut: function ( obj ) {
obj = obj || F.current;

$('.fancybox-wrap').trigger('onReset').remove();

$.extend(F, {
group: {},
opts: {},
router : false,
current: null,
isActive: false,
isOpened: false,
isOpen: false,
isClosing : false,
wrap: null,
skin: null,
outer: null,
inner: null
});

F.trigger('afterClose', obj);
}
});

/*
 *Default transitions
 */

F.transitions = {
getOrigPosition: function () {
var current= F.current,
element= current.element,
orig= current.orig,
pos= {},
width= 50,
height= 50,
hPadding = current.hPadding,
wPadding = current.wPadding,
viewport = F.getViewport();

if (!orig && current.isDom && element.is(':visible')) {
orig = element.find('img:first');

if (!orig.length) {
orig = element;
}
}

if (isQuery(orig)) {
pos = orig.offset();

if (orig.is('img')) {
width= orig.outerWidth();
height = orig.outerHeight();
}

} else {
pos.top= viewport.y + (viewport.h - height) * current.topRatio;
pos.left = viewport.x + (viewport.w - width)* current.leftRatio;
}

if (F.wrap.css('position') === 'fixed' || current.locked) {
pos.top-= viewport.y;
pos.left -= viewport.x;
}

pos = {
top: getValue(pos.top- hPadding * current.topRatio),
left: getValue(pos.left - wPadding * current.leftRatio),
width: getValue(width+ wPadding),
height: getValue(height + hPadding)
};

return pos;
},

step: function (now, fx) {
var ratio,
padding,
value,
prop= fx.prop,
current= F.current,
wrapSpace= current.wrapSpace,
skinSpace= current.skinSpace;

if (prop === 'width' || prop === 'height') {
ratio = fx.end === fx.start ? 1 : (now - fx.start) / (fx.end - fx.start);

if (F.isClosing) {
ratio = 1 - ratio;
}

padding = prop === 'width' ? current.wPadding : current.hPadding;
value= now - padding;

F.skin[ prop ](getScalar( prop === 'width' ?value : value - (wrapSpace * ratio) ) );
F.inner[ prop ]( getScalar( prop === 'width' ?value : value - (wrapSpace * ratio) - (skinSpace * ratio) ) );
}
},

zoomIn: function () {
var current= F.current,
startPos = current.pos,
effect= current.openEffect,
elastic= effect === 'elastic',
endPos= $.extend({opacity : 1}, startPos);

// Remove "position" property that breaks older IE
delete endPos.position;

if (elastic) {
startPos = this.getOrigPosition();

if (current.openOpacity) {
startPos.opacity = 0.1;
}

} else if (effect === 'fade') {
startPos.opacity = 0.1;
}

F.wrap.css(startPos).animate(endPos, {
duration : effect === 'none' ? 0 : current.openSpeed,
easing: current.openEasing,
step: elastic ? this.step : null,
complete : F._afterZoomIn
});
},

zoomOut: function () {
var current= F.current,
effect= current.closeEffect,
elastic= effect === 'elastic',
endPos= {opacity : 0.1};

if (elastic) {
endPos = this.getOrigPosition();

if (current.closeOpacity) {
endPos.opacity = 0.1;
}
}

F.wrap.animate(endPos, {
duration : effect === 'none' ? 0 : current.closeSpeed,
easing: current.closeEasing,
step: elastic ? this.step : null,
complete : F._afterZoomOut
});
},

changeIn: function () {
var current= F.current,
effect= current.nextEffect,
startPos= current.pos,
endPos= { opacity : 1 },
direction = F.direction,
distance= 200,
field;

startPos.opacity = 0.1;

if (effect === 'elastic') {
field = direction === 'down' || direction === 'up' ? 'top' : 'left';

if (direction === 'down' || direction === 'right') {
startPos[ field ] = getValue(getScalar(startPos[ field ]) - distance);
endPos[ field ]= '+=' + distance + 'px';

} else {
startPos[ field ] = getValue(getScalar(startPos[ field ]) + distance);
endPos[ field ]= '-=' + distance + 'px';
}
}

// Workaround for http://bugs.jquery.com/ticket/12273
if (effect === 'none') {
F._afterZoomIn();

} else {
F.wrap.css(startPos).animate(endPos, {
duration : current.nextSpeed,
easing: current.nextEasing,
complete : F._afterZoomIn
});
}
},

changeOut: function () {
var previous= F.previous,
effect= previous.prevEffect,
endPos= { opacity : 0.1 },
direction = F.direction,
distance= 200;

if (effect === 'elastic') {
endPos[ direction === 'down' || direction === 'up' ? 'top' : 'left' ] = ( direction === 'up' || direction === 'left' ? '-' : '+' ) + '=' + distance + 'px';
}

previous.wrap.animate(endPos, {
duration : effect === 'none' ? 0 : previous.prevSpeed,
easing: previous.prevEasing,
complete : function () {
$(this).trigger('onReset').remove();
}
});
}
};

/*
 *Overlay helper
 */

F.helpers.overlay = {
defaults : {
closeClick : true,// if true, fancyBox will be closed when user clicks on the overlay
speedOut: 200,// duration of fadeOut animation
showEarly: true,// indicates if should be opened immediately or wait until the content is ready
css: {},// custom CSS properties
locked: !isTouch,// if true, the content will be locked into overlay
fixed: true// if false, the overlay CSS position property will not be set to "fixed"
},

overlay : null,// current handle
fixed: false,// indicates if the overlay has position "fixed"

// Public methods
create : function(opts) {
opts = $.extend({}, this.defaults, opts);

if (this.overlay) {
this.close();
}

this.overlay = $('<div class="fancybox-overlay"></div>').appendTo( 'body' );
this.fixed= false;

if (opts.fixed && F.defaults.fixed) {
this.overlay.addClass('fancybox-overlay-fixed');

this.fixed = true;
}
},

open : function(opts) {
var that = this;

opts = $.extend({}, this.defaults, opts);

if (this.overlay) {
this.overlay.unbind('.overlay').width('auto').height('auto');

} else {
this.create(opts);
}

if (!this.fixed) {
W.bind('resize.overlay', $.proxy( this.update, this) );

this.update();
}

if (opts.closeClick) {
this.overlay.bind('click.overlay', function(e) {
if ($(e.target).hasClass('fancybox-overlay')) {
if (F.isActive) {
F.close();
} else {
that.close();
}
}
});
}

this.overlay.css( opts.css ).show();
},

close : function() {
$('.fancybox-overlay').remove();

W.unbind('resize.overlay');

this.overlay = null;

if (this.margin !== false) {
$('body').css('margin-right', this.margin);

this.margin = false;
}

if (this.el) {
this.el.removeClass('fancybox-lock');
}
},

// Private, callbacks

update : function () {
var width = '100%', offsetWidth;

// Reset width/height so it will not mess
this.overlay.width(width).height('100%');

// jQuery does not return reliable result for IE
if (IE) {
offsetWidth = Math.max(document.documentElement.offsetWidth, document.body.offsetWidth);

if (D.width() > offsetWidth) {
width = D.width();
}

} else if (D.width() > W.width()) {
width = D.width();
}

this.overlay.width(width).height(D.height());
},

// This is where we can manipulate DOM, because later it would cause iframes to reload
onReady : function (opts, obj) {
$('.fancybox-overlay').stop(true, true);

if (!this.overlay) {
this.margin = D.height() > W.height() || $('body').css('overflow-y') === 'scroll' ? $('body').css('margin-right') : false;
this.el= document.all && !document.querySelector ? $('html') : $('body');

this.create(opts);
}

if (opts.locked && this.fixed) {
obj.locked = this.overlay.append( obj.wrap );
obj.fixed= false;
}

if (opts.showEarly === true) {
this.beforeShow.apply(this, arguments);
}
},

beforeShow : function(opts, obj) {
if (obj.locked) {
this.el.addClass('fancybox-lock');

if (this.margin !== false) {
$('body').css('margin-right', getScalar( this.margin ) + obj.scrollbarWidth);
}
}

this.open(opts);
},

onUpdate : function() {
if (!this.fixed) {
this.update();
}
},

afterClose: function (opts) {
// Remove overlay if exists and fancyBox is not opening
// (e.g., it is not being open using afterClose callback)
if (this.overlay && !F.isActive) {
this.overlay.fadeOut(opts.speedOut, $.proxy( this.close, this ));
}
}
};

/*
 *Title helper
 */

F.helpers.title = {
defaults : {
type: 'float', // 'float', 'inside', 'outside' or 'over',
position : 'bottom' // 'top' or 'bottom'
},

beforeShow: function (opts) {
var current = F.current,
text= current.title,
type= opts.type,
title,
target;

if ($.isFunction(text)) {
text = text.call(current.element, current);
}

if (!isString(text) || $.trim(text) === '') {
return;
}

title = $('<div class="fancybox-title fancybox-title-' + type + '-wrap">' + text + '</div>');

switch (type) {
case 'inside':
target = F.skin;
break;

case 'outside':
target = F.wrap;
break;

case 'over':
target = F.inner;
break;

default: // 'float'
target = F.skin;

title.appendTo('body');

if (IE) {
title.width( title.width() );
}

title.wrapInner('<span class="child"></span>');

//Increase bottom margin so this title will also fit into viewport
F.current.margin[2] += Math.abs( getScalar(title.css('margin-bottom')) );
break;
}

title[ (opts.position === 'top' ? 'prependTo': 'appendTo') ](target);
}
};

// jQuery plugin initialization
$.fn.fancybox = function (options) {
var index,
that= $(this),
selector = this.selector || '',
run= function(e) {
var what = $(this).blur(), idx = index, relType, relVal;

if (!(e.ctrlKey || e.altKey || e.shiftKey || e.metaKey) && !what.is('.fancybox-wrap')) {
relType = options.groupAttr || 'data-fancybox-group';
relVal= what.attr(relType);

if (!relVal) {
relType = 'rel';
relVal= what.get(0)[ relType ];
}

if (relVal && relVal !== '' && relVal !== 'nofollow') {
what = selector.length ? $(selector) : that;
what = what.filter('[' + relType + '="' + relVal + '"]');
idx= what.index(this);
}

options.index = idx;

// Stop an event from bubbling if everything is fine
if (F.open(what, options) !== false) {
e.preventDefault();
}
}
};

options = options || {};
index= options.index || 0;

if (!selector || options.live === false) {
that.unbind('click.fb-start').bind('click.fb-start', run);

} else {
D.undelegate(selector, 'click.fb-start').delegate(selector + ":not('.fancybox-item, .fancybox-nav')", 'click.fb-start', run);
}

this.filter('[data-fancybox-start=1]').trigger('click');

return this;
};

// Tests that need a body at doc ready
D.ready(function() {
if ( $.scrollbarWidth === undefined ) {
// http://benalman.com/projects/jquery-misc-plugins/#scrollbarwidth
$.scrollbarWidth = function() {
var parent = $('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo('body'),
child= parent.children(),
width= child.innerWidth() - child.height( 99 ).innerWidth();

parent.remove();

return width;
};
}

if ( $.support.fixedPosition === undefined ) {
$.support.fixedPosition = (function() {
var elem= $('<div style="position:fixed;top:20px;"></div>').appendTo('body'),
fixed = ( elem[0].offsetTop === 20 || elem[0].offsetTop === 15 );

elem.remove();

return fixed;
}());
}

$.extend(F.defaults, {
scrollbarWidth : $.scrollbarWidth(),
fixed: $.support.fixedPosition,
parent : $('body')
});
});

}(window, document, jQuery));var colpop=0;
var actualScroll=0;
var last_href_profile = '';

$( document ).ready(function() {

var popupBg = '#popup-clear-bg';
var main = '#popup-clear-main';

$(document).on("click",'#collection-popup .box-pager a', function(e) {
e.preventDefault();

if(!$(this).hasClass('current')) {
var collection_container = "#cgf01";
profileRequest($(this).attr('data-url').replace('#/member', ''), collection_container);
}
});

$(document).on("click",'.collections-button',function(e) {
e.preventDefault();

if (signupPopup() && !$(this).hasClass("disabled")){
var html2 = '';
var media_id = $(this).attr("data-media-id");
var file = $(this).attr("data-file");
var photo_file = $(this).parents('.content:first').find('.mainimg:first').attr('src');
if(photo_file === undefined && $("body").hasClass("blogpost")){
photo_file = $(this).parents('.block-photo:first').find("p > a > img").attr("src")
}

if(photo_file === undefined){
photo_file = '/media/'+file;
photo_file = photo_file.replace(".jpg", "_medium.jpg");
}
var is_mobile ='<div class="collection-left" style="background-image:url('+photo_file+')"></div>';

if($("html").hasClass("mobile")) {
is_mobile ="";
}
html2='<form class="form-collections" style="display:none;" id="form-collection" method="POST" action="/collection/saveCollection">'
+'<input name="media_id" type="hidden" value="'+media_id+'">'
+'<h1>Create new collection</h1>'
+'<div class="form-collection-item">'
+'<label for="Name">Name</label>'
+'<input type="text" size="50" name="name_collection" placeholder="Name of collection" class="collection-input" maxlength="49" required>'
+'<span class="collection-error">*The collection already exists.</span>'
+'</div>'

+'<div class="form-collection-item">'
+'<label for="Description">Description</label>'
+'<textarea name="description" rows="4" cols="50" size="30" placeholder="Description of collection" class="collection-input" maxlength="300"></textarea>'
+'</div>';

if(typeof urole != "undefined" && urole > 0){
html2 += '<div class="form-collection-item collection-check">'
+'<input name="is_private" type="checkbox" class="input-check">'
+'<label for="Description" class="input-check">Private</label>'
+'</div>' ;
}

html2 += '<div class="form-collection-item">'
+'<button id="create-collection" class="collect-submit">Create collection</button>'
+'<button id="cancel-collection" class="collect-submit">Cancel</button>'
+'</div>'
+'</form>';

var html='';

html='<div class="content-collections">'
+is_mobile
+'<div class="collection-rigth">'+html2+'<div id="collections-list-content"><h3>Add photo to collection</h3><div class="new-collection">Create new collection</div>'
+'<ul id="my-collections">';

$.get(
'/collection/getUserCollections?media_id=' + media_id,
function(response) {
var data = response.collections;

for (var i = 0;i < data.length; i++) {
var c_class = "", add_ = "+";
var photos_tag = (data[i].tot_photos==1) ? "photo" : "photos";
if(data[i].collected != null) { c_class = "list-collected"; add_ = "-"; }

html+='<li class="collection-list '+c_class+'" id="c_'+data[i].id+'" data-id="'+data[i].id+'" data-media-id="'+media_id+'">';
html+='<p><small>'+data[i].tot_photos+'</small> <span>'+photos_tag+'</span></p>';
html+='<span class="collection-name">'+data[i].name+'</span>';
html+='<span class="icon">'+add_+'</span>';
html+='</li>';
}

html+='</ul>';

if(response.pages > 1) {
html+='<div class="load_more_container"><a href="javascript:" class="collections_load_more" data-current="' + response.page + '" data-pages="' + response.pages + '" data-media="' + media_id + '">Load more</a></div>';
}

html+='</div></div>';

popFullscreen(null, html);

html+='</div>';

$("wrapper").css("overflow", "hidden");
$(".popup.v3 .content").css("padding", "0");
$(".popup.v3 .content").css("height", "550px");
$(".popup.v3 .header").css("padding", "0");
$(".popup .header .popupx a").css("margin-right", "15px");
$(".popup.v3").css("width", "100%");
$(".popup.v3").css("height", "100%");
$(".popup.v3").css("overflow", "auto");
$(".popup.v3").css("position", "fixed");
$(".popup.v3 .container").css("top", "50px");
$(".popup.v3 .container .popupx.main-popupx.popupxd").hide();
$(".popup.v3 .container").addClass('collections_pop');
}
);
}
});

$(document).on("click",'.collections_load_more',function(e) {
var current_page = parseInt($(this).attr('data-current'));
var next_page = current_page + 1;
var media_id = $(this).attr('data-media');

$(this).attr('data-current', next_page);

if(next_page == parseInt($(this).attr('data-pages'))) {
$(this).hide();
}

$.get(
'/collection/getUserCollections?media_id=' + media_id + '&page=' + next_page,
function(response) {
var html='';
var data = response.collections;

for (var i = 0;i < data.length; i++) {
var c_class = "", add_ = "+";
var photos_tag = (data[i].tot_photos==1) ? "photo" : "photos";
if(data[i].collected != null) { c_class = "list-collected"; add_ = "-"; }

html+='<li class="collection-list '+c_class+'" id="c_'+data[i].id+'" data-id="'+data[i].id+'" data-media-id="'+media_id+'">';
html+='<p><small>'+data[i].tot_photos+'</small> <span>'+photos_tag+'</span></p>';
html+='<span class="collection-name">'+data[i].name+'</span>';
html+='<span class="icon">'+add_+'</span>';
html+='</li>';
}

$('#my-collections').append(html);
}
);
});

$(document).on("click",'.collection-list', function(e) {
e.preventDefault(); 
var media_id = $(this).attr("data-media-id");
var id = $(this).attr("data-id");
$.post(
'/collection/saveCollectPhoto',
{media_id: media_id, id:id},
function(data) {
var n_photos = parseInt($("#c_" + id + ' > p > small').text());
if(data>0){
$("#c_"+id).addClass("list-collected");
$("#c_"+id+" .icon").text("-");
$("#c_" + id + ' > p > small').text(n_photos+1);
$("#c_" + id + ' > p > span').text((n_photos+1==1) ? "photo":"photos");
$("#collect"+media_id).addClass('vbcollected');
} else {
$("#c_"+id).removeClass("list-collected");
$("#c_"+id+" .icon").text("+");
$("#c_" + id + ' > p > small').text(n_photos-1);
$("#c_" + id + ' > p > span').text((n_photos-1==1) ? "photo":"photos");
}
}
);
});

$(document).on("submit",'#form-collection', function(e) {
var media_id = $('input[name=media_id]').val();
var name = $('input[name=name_collection]').val();
if(name.length>50) return false;
e.preventDefault();
var form = $(this);
$.post(
form.attr('action'),
form.serialize(),
function(resp) {
if(resp>0){
name = sanitize(name);
$('#my-collections').prepend('<li class="collection-list list-collected" id="c_'+resp+'" data-id="'+resp+'" data-media-id="'+media_id+'"><p><small>1</small> <span> photo</span></p><span class="float-left">'+name+'</span><span class="icon">-</span>');
$( "#form-collection" ).css("display", "none");
$("#collections-list-content").css("display", "block");
clearCollectionForm();
} else if (resp == 0) {
$('.collection-error').css("display", "block");
console.log("The collection already exists");
} else {
console.log("An error occurred");
}
}
);
});

$(document).on("click",'.new-collection',function(e) {
e.preventDefault();
$( "#form-collection" ).css("display", "block");
$("#collections-list-content").css("display", "none");
});

$(document).on("click",'#cancel-collection',function(e) {
e.preventDefault();
clearCollectionForm();
$("#collections-list-content").css("display", "block");
$( "#form-collection" ).css("display", "none");
});

function clearCollectionForm(){
$('input[name=name_collection]').val("");
$('textarea[name=description]').val("");
$('input[name=is_private]').prop( "checked", false );
$('.collection-error').css("display", "none");
}

$(document).on("click",'.menu-collections',function(e) {
e.preventDefault();

var id = $(this).attr("data-id");
if(id == 0){
var args= "&filter=inspiration";
window.location.hash = window.location.hash.replace(/\?.*/, '') +'?'+ args;
profileRequest(window.location.hash.replace(/#/,''),null,null,'loadProfileScriptsFavorites');
return;
}

var href = $(this).attr('href');

$.post(
'/collection/getCollection',
{c_id: id},
function(resp) {
var data = resp.collection;
//history.pushState(null, null, '/collection/'+id);
last_href_profile = window.location.href;
history.pushState(null, null, href);

var edit_button = (resp.can_edit)?'<a href="javascript:" data-id="'+data.id+'" data-name="'+data.name+'" data-description="'+data.description+'" data-private="'+data.private+'" id="edit-collection">Edit</a>':"";
var share_buttons = '<div class="collection-share photopage">';
share_buttons += '<div id="tools-socials">';
share_buttons += '<column class="block social-share-btns">';
share_buttons += '<input type="hidden" id="social-share-url" value="' + resp.share_url + '">';
share_buttons += '<a href="javascript:" class="share face" onclick="fb_likeStats(\'' + resp.share_url + '\')"><div></div><span></span></a>';
share_buttons += '<a href="javascript:" class="share twit" onclick="window.open(\'https://twitter.com/intent/tweet?text=' + resp.share_text + '&amp;url=' + resp.share_url_convert + '\',\'twitter-share-dialog\',\'width=560,height=300\');return false;"><div></div><span></span></a>';
share_buttons += '</column></div></div>';

var popup = '<div id="collection-popup">'+
'<a class="close-collection-popup" href="javascript:"></a>'+
'<div class="top-info" id="collection-link">'+
'<h1 id="name_collection">'+data.name+'</h1>'+
edit_button+
share_buttons+
'<div id="description_collection" class="collection-description">'+data.description+'</div>'+
'<div class="user-collection">'+
'<span class="user-avatar">'+
'<img src="/media/'+data.avatar+'" />'+
'</span>'+
'<span class="user-name">'+
'<a href="/member/'+data.username+'">'+data.username+'</a>'+
'</span>'+
'</div>'+
'<div class="num-photos">'+ data.tot_photos+' '+((data.tot_photos==1) ? "photo" : "photos")+'</div>'+
'</div>'+
'<div id="cgf01">Loading...</div>'+
'</div>';
actualScroll = $(window).scrollTop();
window.scroll(0, 0);
//$('body').css("overflow", "hidden");
$('#wrapper').append(popup);
var collection_container = "#cgf01";
//$('body').removeClass("owner");
$('#main_content').hide();
profileRequest('/'+user.username+'/galleryCollection?collection_id='+id, collection_container);
}
);
});

$(document).on("click",'#edit-collection',function(e) {
e.preventDefault();
var id = $(this).attr("data-id");
var name = $(this).attr("data-name");
var description = $(this).attr("data-description");
var private = $(this).attr("data-private");

var html='<form class="form-collections no-margin update-collection-popup" id="form-collection-update" method="POST" action="/collection/updateCollection">'
+'<input name="c_id" type="hidden" value="'+id+'">'
+'<h1 class="no-margin">Update collection</h1>'
+'<div class="form-collection-item align-left">'
+'<label for="Name">Name</label>'
+'<input type="text" size="50" name="name_collection" placeholder="Name of collection" class="collection-input" maxlength="49" value="'+name+'" required>'
+'<span class="collection-error">*The collection already exists.</span>'
+'</div>'

+'<div class="form-collection-item align-left">'
+'<label for="Description">Description</label>'
+'<textarea name="description" rows="4" cols="50" size="30" placeholder="Description of collection" class="collection-input" maxlength="300">'+description+'</textarea>'
+'</div>'

+'<div class="form-collection-item align-left collection-check" style="position: relative">'
+'<input name="is_private" type="checkbox" id="is_private_collec" ' + (urole == 3 ? '' : 'disabled') + ' class="input-check" '+((private==1)?"checked":"")+'>'
+'<label for="is_private_collec" class="input-check">Private</label>'
+(urole == 3 ? '' : '<div id="is_private_collec_div" style="position:absolute; left:0; top:0; width:100%; height: 20px"></div> <div class="is_private_collec_hide" style="display:none; padding-top: 10px; padding-left: 16px; font-size: 12px; color: #888;">Private collections are only available for PRO members. <a href="/upgrade" style="color: #888;" target="_blank">Learn more.</a></div>')
+'</div>'

+'<div class="form-collection-item align-left">'
+'<button id="update-collection" class="collect-submit">Save</button>'
+'<a id="delete-collection" style="float:right;">Delete</a>'
+'<span id="delete-options" style="display:none;">'
+'Are you sure?'
+'<a id="yes-delete" data-id="'+id+'">Yes</a>'
+'<a id="cancel-delete">Cancel</a>'
+'</span>'
+'</div>'
+'</form>';
popMessage(null, html);
$('.popup .container').css("top", "10%");
});

$(document).on("click", "#is_private_collec_div", function() {
$(this).parent().children('.is_private_collec_hide').fadeIn(500);
});

$(document).on("click",'#cancel-update',function(e) {
e.preventDefault();
$('.popup').fadeOut(500, function() { $(this).remove(); });
});

$(document).on("submit",'#form-collection-update', function(e) {
$('.collection-popup .top-info h1').text("name");
var name = $('input[name=name_collection]').val();
var description = $('textarea[name=description]').val();
var private = ($('input[name=is_private]').is(':checked'))?1:0;
if(name.length>50) return false;
e.preventDefault();
var form = $(this);
$.post(
form.attr('action'),
form.serialize(),
function(resp) {
if(resp==1){
$('.popup').fadeOut(500, function() { $(this).remove(); });
$('#name_collection').text(name);
$('#description_collection').text(description);
$("#edit-collection").attr("data-name", name);
$("#edit-collection").attr("data-description", description);
$("#edit-collection").attr("data-private", private);
} else {
console.log("An error occurred");
}
}
);
});

$(document).on("click",'#delete-collection',function(e) {
e.preventDefault();
$('#delete-collection').hide();
$('#delete-options').show();
});

$(document).on("click",'#cancel-delete',function(e) {
e.preventDefault();
$('#delete-collection').show();
$('#delete-options').hide();
});

$(document).on("click",'#yes-delete',function(e) {
e.preventDefault();
var id = $(this).attr("data-id");

$.post(
'/collection/deleteCollection',
{c_id: id},
function(resp) {
if(resp==0){
console.log("An error occurred");
} else {
if($('.close-collection-popup').length > 0) {
$('#collection'+id).remove();
$('.close-collection-popup').click();
$('.popup').fadeOut(500, function() { $(this).remove(); });


} else {
window.location.href = '/member/' + resp;
}
}
}
);
});

$(document).on("click",'.close-collection-popup',function(e) {
e.preventDefault();
$('#collection-popup').fadeOut(500, function() { $(this).remove(); });
$('body').css("overflow", "visible");
$('#main_content').show();
history.pushState(null, null, last_href_profile);
window.scroll(0, actualScroll);
});

$(document).on('click', '.top_col.remove_col a', function() { 
$(popupBg).fadeIn(500);
$(main).removeClass();
$(main).css("z-index", "501");
$(main).addClass('join-upgrade').addClass('profile-favorites').addClass('remove-inspiration');
$(main).html('<h1>Are you sure you want to remove this image from the collection?</h1><div class="text"><a href="javascript:" class="cancel-remove">Cancel</a> <a href="javascript:" class="continue-remove">Continue</a></div>');
$(main).fadeIn(500);

collection_id = $(this).attr('data-id');
media_id = $(this).attr('data-media-id');
col_this = $(this);

$('.continue-remove').click(function() {
//$(main).html('');

$.get(
'/collection/removePhotoCollection?id=' + collection_id + '&media_id=' + media_id,
function(resp) {
console.log(resp);
if(resp){
col_this.parent().parent().parent().parent().parent().css({ opacity:0.2 });
col_this.remove();
$(popupBg).click();
} else {
console.log("An error occurred");
}

}
);
});

$(popupBg + ", .cancel-remove").click(function() {
$(popupBg + ", " + main).fadeOut(800, function() {
$(main).html('');
});
});
});

/*window.addEventListener('popstate', function(event) {
console.log('called pop');
if ($('#collection-popup').is(":visible")) {
$('#collection-popup').fadeOut(500, function() { $(this).remove(); });
$('body').css("overflow", "visible");
}
});*/

if($('#cgf02').length > 0) { 
setTimeout(function() {
collection_id = $('#cgf02').attr('data-id');
user_name= $('#cgf02').attr('data-username');
profileRequest('/'+user_name+'/galleryCollection?collection_id='+collection_id, "#cgf02");
}, 300
);
}
});$(document).ready(function() {
//Next page #next , only one #next for page to avoid confusion
$("body.has-pager").keyup(function(e) {
if($("input:focus").length==0 && $("textarea:focus").length==0) {

//Only if Popup is active //Class oopu
if($("body").hasClass("oopu") && ($(".popup.photo").length == 0 || !$(".popup.photo").is(":visible"))) {
return;
}

if($("body").hasClass("fancybox") && ($(".fancybox-overlay").is(":visible") || $(".fancybox-overlay").length > 0 )) {
return moveFancyPhoto(e);
}

var url ="";
switch(e.which) {
case 39:
if(!$("#next").hasClass("hide") && typeof popSlideshow['next']['id'] !="undefined") {
url = $("#next").attr("href");

if(typeof url=="undefined") {
url =popSlideshow['url'];
url = url.replace("[ID]",popSlideshow['next']['id']);

if(typeof popSlideshow.ignore_id !=="undefined" && popSlideshow.ignore_id){
url = url.replace(popSlideshow.original.id, popSlideshow['next'].id);
}
}
}
break;
case 37:
if(!$("#prev").hasClass("hide") && typeof popSlideshow['prev']['id'] !="undefined") {
url = $("#prev").attr("href");

if(typeof url=="undefined") {
url =popSlideshow['url'];
url = url.replace("[ID]",popSlideshow['prev']['id']);

if(typeof popSlideshow.ignore_id !=="undefined" && popSlideshow.ignore_id){
url = url.replace(popSlideshow.original.id, popSlideshow['prev'].id);
}

}
}
break;
}

if (url!='') {
//$('body').load( url,[data],[callback] );
var extraparams = "";
if($(".popup.photo").length > 0 && $(".popup.photo").is(":visible")) {
//extraparams = "?photo_maximize=true";
if(e.which==39) {
switchPhoto("next");
}
else {
switchPhoto("prev");
}
return;
}
//console.clear();
//console.log(url);
url = url.replace("?navigation&","");
url = url.replace("navigation&","");
window.location = url;
}
}
});
var isMaximize = getUrlParameterByName("photo_maximize");

if(isMaximize) {
if ($('.main_content .block-photo .photo').hasClass('parental')) {
$('.main_content .popup.parental').show();
} 
else {
if (typeof(album_id) != "undefined") {
$('.play.slideshow').click();
} else {
popPhotoWithArrows('.main_content .block-photo', true);
}
}
}

//Maximized image redirect to photo/id
$("#photo_slideshow .content > .block-photo").on("click",function() {
document.location = "/photo/" + popSlideshow.current.id;
}).on('contextmenu', function(e) { 
e.preventDefault();
return false; 
}).on('dragstart',function(e){
e.preventDefault();
return false;
});
});/*!
 * Masonry PACKAGED v4.2.1
 * Cascading grid layout library
 * https://masonry.desandro.com
 * MIT License
 * by David DeSandro
 */

!function(t,e){"function"==typeof define&&define.amd?define("jquery-bridget/jquery-bridget",["jquery"],function(i){return e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("jquery")):t.jQueryBridget=e(t,t.jQuery)}(window,function(t,e){"use strict";function i(i,r,a){function h(t,e,n){var o,r="$()."+i+'("'+e+'")';return t.each(function(t,h){var u=a.data(h,i);if(!u)return void s(i+" not initialized. Cannot call methods, i.e. "+r);var d=u[e];if(!d||"_"==e.charAt(0))return void s(r+" is not a valid method");var l=d.apply(u,n);o=void 0===o?l:o}),void 0!==o?o:t}function u(t,e){t.each(function(t,n){var o=a.data(n,i);o?(o.option(e),o._init()):(o=new r(n,e),a.data(n,i,o))})}a=a||e||t.jQuery,a&&(r.prototype.option||(r.prototype.option=function(t){a.isPlainObject(t)&&(this.options=a.extend(!0,this.options,t))}),a.fn[i]=function(t){if("string"==typeof t){var e=o.call(arguments,1);return h(this,t,e)}return u(this,t),this},n(a))}function n(t){!t||t&&t.bridget||(t.bridget=i)}var o=Array.prototype.slice,r=t.console,s="undefined"==typeof r?function(){}:function(t){r.error(t)};return n(e||t.jQuery),i}),function(t,e){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",e):"object"==typeof module&&module.exports?module.exports=e():t.EvEmitter=e()}("undefined"!=typeof window?window:this,function(){function t(){}var e=t.prototype;return e.on=function(t,e){if(t&&e){var i=this._events=this._events||{},n=i[t]=i[t]||[];return-1==n.indexOf(e)&&n.push(e),this}},e.once=function(t,e){if(t&&e){this.on(t,e);var i=this._onceEvents=this._onceEvents||{},n=i[t]=i[t]||{};return n[e]=!0,this}},e.off=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){var n=i.indexOf(e);return-1!=n&&i.splice(n,1),this}},e.emitEvent=function(t,e){var i=this._events&&this._events[t];if(i&&i.length){i=i.slice(0),e=e||[];for(var n=this._onceEvents&&this._onceEvents[t],o=0;o<i.length;o++){var r=i[o],s=n&&n[r];s&&(this.off(t,r),delete n[r]),r.apply(this,e)}return this}},e.allOff=function(){delete this._events,delete this._onceEvents},t}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("get-size/get-size",[],function(){return e()}):"object"==typeof module&&module.exports?module.exports=e():t.getSize=e()}(window,function(){"use strict";function t(t){var e=parseFloat(t),i=-1==t.indexOf("%")&&!isNaN(e);return i&&e}function e(){}function i(){for(var t={width:0,height:0,innerWidth:0,innerHeight:0,outerWidth:0,outerHeight:0},e=0;u>e;e++){var i=h[e];t[i]=0}return t}function n(t){var e=getComputedStyle(t);return e||a("Style returned "+e+". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"),e}function o(){if(!d){d=!0;var e=document.createElement("div");e.style.width="200px",e.style.padding="1px 2px 3px 4px",e.style.borderStyle="solid",e.style.borderWidth="1px 2px 3px 4px",e.style.boxSizing="border-box";var i=document.body||document.documentElement;i.appendChild(e);var o=n(e);r.isBoxSizeOuter=s=200==t(o.width),i.removeChild(e)}}function r(e){if(o(),"string"==typeof e&&(e=document.querySelector(e)),e&&"object"==typeof e&&e.nodeType){var r=n(e);if("none"==r.display)return i();var a={};a.width=e.offsetWidth,a.height=e.offsetHeight;for(var d=a.isBorderBox="border-box"==r.boxSizing,l=0;u>l;l++){var c=h[l],f=r[c],m=parseFloat(f);a[c]=isNaN(m)?0:m}var p=a.paddingLeft+a.paddingRight,g=a.paddingTop+a.paddingBottom,y=a.marginLeft+a.marginRight,v=a.marginTop+a.marginBottom,_=a.borderLeftWidth+a.borderRightWidth,z=a.borderTopWidth+a.borderBottomWidth,E=d&&s,b=t(r.width);b!==!1&&(a.width=b+(E?0:p+_));var x=t(r.height);return x!==!1&&(a.height=x+(E?0:g+z)),a.innerWidth=a.width-(p+_),a.innerHeight=a.height-(g+z),a.outerWidth=a.width+y,a.outerHeight=a.height+v,a}}var s,a="undefined"==typeof console?e:function(t){console.error(t)},h=["paddingLeft","paddingRight","paddingTop","paddingBottom","marginLeft","marginRight","marginTop","marginBottom","borderLeftWidth","borderRightWidth","borderTopWidth","borderBottomWidth"],u=h.length,d=!1;return r}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("desandro-matches-selector/matches-selector",e):"object"==typeof module&&module.exports?module.exports=e():t.matchesSelector=e()}(window,function(){"use strict";var t=function(){var t=window.Element.prototype;if(t.matches)return"matches";if(t.matchesSelector)return"matchesSelector";for(var e=["webkit","moz","ms","o"],i=0;i<e.length;i++){var n=e[i],o=n+"MatchesSelector";if(t[o])return o}}();return function(e,i){return e[t](i)}}),function(t,e){"function"==typeof define&&define.amd?define("fizzy-ui-utils/utils",["desandro-matches-selector/matches-selector"],function(i){return e(t,i)}):"object"==typeof module&&module.exports?module.exports=e(t,require("desandro-matches-selector")):t.fizzyUIUtils=e(t,t.matchesSelector)}(window,function(t,e){var i={};i.extend=function(t,e){for(var i in e)t[i]=e[i];return t},i.modulo=function(t,e){return(t%e+e)%e},i.makeArray=function(t){var e=[];if(Array.isArray(t))e=t;else if(t&&"object"==typeof t&&"number"==typeof t.length)for(var i=0;i<t.length;i++)e.push(t[i]);else e.push(t);return e},i.removeFrom=function(t,e){var i=t.indexOf(e);-1!=i&&t.splice(i,1)},i.getParent=function(t,i){for(;t.parentNode&&t!=document.body;)if(t=t.parentNode,e(t,i))return t},i.getQueryElement=function(t){return"string"==typeof t?document.querySelector(t):t},i.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},i.filterFindElements=function(t,n){t=i.makeArray(t);var o=[];return t.forEach(function(t){if(t instanceof HTMLElement){if(!n)return void o.push(t);e(t,n)&&o.push(t);for(var i=t.querySelectorAll(n),r=0;r<i.length;r++)o.push(i[r])}}),o},i.debounceMethod=function(t,e,i){var n=t.prototype[e],o=e+"Timeout";t.prototype[e]=function(){var t=this[o];t&&clearTimeout(t);var e=arguments,r=this;this[o]=setTimeout(function(){n.apply(r,e),delete r[o]},i||100)}},i.docReady=function(t){var e=document.readyState;"complete"==e||"interactive"==e?setTimeout(t):document.addEventListener("DOMContentLoaded",t)},i.toDashed=function(t){return t.replace(/(.)([A-Z])/g,function(t,e,i){return e+"-"+i}).toLowerCase()};var n=t.console;return i.htmlInit=function(e,o){i.docReady(function(){var r=i.toDashed(o),s="data-"+r,a=document.querySelectorAll("["+s+"]"),h=document.querySelectorAll(".js-"+r),u=i.makeArray(a).concat(i.makeArray(h)),d=s+"-options",l=t.jQuery;u.forEach(function(t){var i,r=t.getAttribute(s)||t.getAttribute(d);try{i=r&&JSON.parse(r)}catch(a){return void(n&&n.error("Error parsing "+s+" on "+t.className+": "+a))}var h=new e(t,i);l&&l.data(t,o,h)})})},i}),function(t,e){"function"==typeof define&&define.amd?define("outlayer/item",["ev-emitter/ev-emitter","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("ev-emitter"),require("get-size")):(t.Outlayer={},t.Outlayer.Item=e(t.EvEmitter,t.getSize))}(window,function(t,e){"use strict";function i(t){for(var e in t)return!1;return e=null,!0}function n(t,e){t&&(this.element=t,this.layout=e,this.position={x:0,y:0},this._create())}function o(t){return t.replace(/([A-Z])/g,function(t){return"-"+t.toLowerCase()})}var r=document.documentElement.style,s="string"==typeof r.transition?"transition":"WebkitTransition",a="string"==typeof r.transform?"transform":"WebkitTransform",h={WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[s],u={transform:a,transition:s,transitionDuration:s+"Duration",transitionProperty:s+"Property",transitionDelay:s+"Delay"},d=n.prototype=Object.create(t.prototype);d.constructor=n,d._create=function(){this._transn={ingProperties:{},clean:{},onEnd:{}},this.css({position:"absolute"})},d.handleEvent=function(t){var e="on"+t.type;this[e]&&this[e](t)},d.getSize=function(){this.size=e(this.element)},d.css=function(t){var e=this.element.style;for(var i in t){var n=u[i]||i;e[n]=t[i]}},d.getPosition=function(){var t=getComputedStyle(this.element),e=this.layout._getOption("originLeft"),i=this.layout._getOption("originTop"),n=t[e?"left":"right"],o=t[i?"top":"bottom"],r=this.layout.size,s=-1!=n.indexOf("%")?parseFloat(n)/100*r.width:parseInt(n,10),a=-1!=o.indexOf("%")?parseFloat(o)/100*r.height:parseInt(o,10);s=isNaN(s)?0:s,a=isNaN(a)?0:a,s-=e?r.paddingLeft:r.paddingRight,a-=i?r.paddingTop:r.paddingBottom,this.position.x=s,this.position.y=a},d.layoutPosition=function(){var t=this.layout.size,e={},i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop"),o=i?"paddingLeft":"paddingRight",r=i?"left":"right",s=i?"right":"left",a=this.position.x+t[o];e[r]=this.getXValue(a),e[s]="";var h=n?"paddingTop":"paddingBottom",u=n?"top":"bottom",d=n?"bottom":"top",l=this.position.y+t[h];e[u]=this.getYValue(l),e[d]="",this.css(e),this.emitEvent("layout",[this])},d.getXValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&!e?t/this.layout.size.width*100+"%":t+"px"},d.getYValue=function(t){var e=this.layout._getOption("horizontal");return this.layout.options.percentPosition&&e?t/this.layout.size.height*100+"%":t+"px"},d._transitionTo=function(t,e){this.getPosition();var i=this.position.x,n=this.position.y,o=parseInt(t,10),r=parseInt(e,10),s=o===this.position.x&&r===this.position.y;if(this.setPosition(t,e),s&&!this.isTransitioning)return void this.layoutPosition();var a=t-i,h=e-n,u={};u.transform=this.getTranslate(a,h),this.transition({to:u,onTransitionEnd:{transform:this.layoutPosition},isCleaning:!0})},d.getTranslate=function(t,e){var i=this.layout._getOption("originLeft"),n=this.layout._getOption("originTop");return t=i?t:-t,e=n?e:-e,"translate3d("+t+"px, "+e+"px, 0)"},d.goTo=function(t,e){this.setPosition(t,e),this.layoutPosition()},d.moveTo=d._transitionTo,d.setPosition=function(t,e){this.position.x=parseInt(t,10),this.position.y=parseInt(e,10)},d._nonTransition=function(t){this.css(t.to),t.isCleaning&&this._removeStyles(t.to);for(var e in t.onTransitionEnd)t.onTransitionEnd[e].call(this)},d.transition=function(t){if(!parseFloat(this.layout.options.transitionDuration))return void this._nonTransition(t);var e=this._transn;for(var i in t.onTransitionEnd)e.onEnd[i]=t.onTransitionEnd[i];for(i in t.to)e.ingProperties[i]=!0,t.isCleaning&&(e.clean[i]=!0);if(t.from){this.css(t.from);var n=this.element.offsetHeight;n=null}this.enableTransition(t.to),this.css(t.to),this.isTransitioning=!0};var l="opacity,"+o(a);d.enableTransition=function(){if(!this.isTransitioning){var t=this.layout.options.transitionDuration;t="number"==typeof t?t+"ms":t,this.css({transitionProperty:l,transitionDuration:t,transitionDelay:this.staggerDelay||0}),this.element.addEventListener(h,this,!1)}},d.onwebkitTransitionEnd=function(t){this.ontransitionend(t)},d.onotransitionend=function(t){this.ontransitionend(t)};var c={"-webkit-transform":"transform"};d.ontransitionend=function(t){if(t.target===this.element){var e=this._transn,n=c[t.propertyName]||t.propertyName;if(delete e.ingProperties[n],i(e.ingProperties)&&this.disableTransition(),n in e.clean&&(this.element.style[t.propertyName]="",delete e.clean[n]),n in e.onEnd){var o=e.onEnd[n];o.call(this),delete e.onEnd[n]}this.emitEvent("transitionEnd",[this])}},d.disableTransition=function(){this.removeTransitionStyles(),this.element.removeEventListener(h,this,!1),this.isTransitioning=!1},d._removeStyles=function(t){var e={};for(var i in t)e[i]="";this.css(e)};var f={transitionProperty:"",transitionDuration:"",transitionDelay:""};return d.removeTransitionStyles=function(){this.css(f)},d.stagger=function(t){t=isNaN(t)?0:t,this.staggerDelay=t+"ms"},d.removeElem=function(){this.element.parentNode.removeChild(this.element),this.css({display:""}),this.emitEvent("remove",[this])},d.remove=function(){return s&&parseFloat(this.layout.options.transitionDuration)?(this.once("transitionEnd",function(){this.removeElem()}),void this.hide()):void this.removeElem()},d.reveal=function(){delete this.isHidden,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("visibleStyle");e[i]=this.onRevealTransitionEnd,this.transition({from:t.hiddenStyle,to:t.visibleStyle,isCleaning:!0,onTransitionEnd:e})},d.onRevealTransitionEnd=function(){this.isHidden||this.emitEvent("reveal")},d.getHideRevealTransitionEndProperty=function(t){var e=this.layout.options[t];if(e.opacity)return"opacity";for(var i in e)return i},d.hide=function(){this.isHidden=!0,this.css({display:""});var t=this.layout.options,e={},i=this.getHideRevealTransitionEndProperty("hiddenStyle");e[i]=this.onHideTransitionEnd,this.transition({from:t.visibleStyle,to:t.hiddenStyle,isCleaning:!0,onTransitionEnd:e})},d.onHideTransitionEnd=function(){this.isHidden&&(this.css({display:"none"}),this.emitEvent("hide"))},d.destroy=function(){this.css({position:"",left:"",right:"",top:"",bottom:"",transition:"",transform:""})},n}),function(t,e){"use strict";"function"==typeof define&&define.amd?define("outlayer/outlayer",["ev-emitter/ev-emitter","get-size/get-size","fizzy-ui-utils/utils","./item"],function(i,n,o,r){return e(t,i,n,o,r)}):"object"==typeof module&&module.exports?module.exports=e(t,require("ev-emitter"),require("get-size"),require("fizzy-ui-utils"),require("./item")):t.Outlayer=e(t,t.EvEmitter,t.getSize,t.fizzyUIUtils,t.Outlayer.Item)}(window,function(t,e,i,n,o){"use strict";function r(t,e){var i=n.getQueryElement(t);if(!i)return void(h&&h.error("Bad element for "+this.constructor.namespace+": "+(i||t)));this.element=i,u&&(this.$element=u(this.element)),this.options=n.extend({},this.constructor.defaults),this.option(e);var o=++l;this.element.outlayerGUID=o,c[o]=this,this._create();var r=this._getOption("initLayout");r&&this.layout()}function s(t){function e(){t.apply(this,arguments)}return e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e}function a(t){if("number"==typeof t)return t;var e=t.match(/(^\d*\.?\d*)(\w*)/),i=e&&e[1],n=e&&e[2];if(!i.length)return 0;i=parseFloat(i);var o=m[n]||1;return i*o}var h=t.console,u=t.jQuery,d=function(){},l=0,c={};r.namespace="outlayer",r.Item=o,r.defaults={containerStyle:{position:"relative"},initLayout:!0,originLeft:!0,originTop:!0,resize:!0,resizeContainer:!0,transitionDuration:"0.4s",hiddenStyle:{opacity:0,transform:"scale(0.001)"},visibleStyle:{opacity:1,transform:"scale(1)"}};var f=r.prototype;n.extend(f,e.prototype),f.option=function(t){n.extend(this.options,t)},f._getOption=function(t){var e=this.constructor.compatOptions[t];return e&&void 0!==this.options[e]?this.options[e]:this.options[t]},r.compatOptions={initLayout:"isInitLayout",horizontal:"isHorizontal",layoutInstant:"isLayoutInstant",originLeft:"isOriginLeft",originTop:"isOriginTop",resize:"isResizeBound",resizeContainer:"isResizingContainer"},f._create=function(){this.reloadItems(),this.stamps=[],this.stamp(this.options.stamp),n.extend(this.element.style,this.options.containerStyle);var t=this._getOption("resize");t&&this.bindResize()},f.reloadItems=function(){this.items=this._itemize(this.element.children)},f._itemize=function(t){for(var e=this._filterFindItemElements(t),i=this.constructor.Item,n=[],o=0;o<e.length;o++){var r=e[o],s=new i(r,this);n.push(s)}return n},f._filterFindItemElements=function(t){return n.filterFindElements(t,this.options.itemSelector)},f.getItemElements=function(){return this.items.map(function(t){return t.element})},f.layout=function(){this._resetLayout(),this._manageStamps();var t=this._getOption("layoutInstant"),e=void 0!==t?t:!this._isLayoutInited;this.layoutItems(this.items,e),this._isLayoutInited=!0},f._init=f.layout,f._resetLayout=function(){this.getSize()},f.getSize=function(){this.size=i(this.element)},f._getMeasurement=function(t,e){var n,o=this.options[t];o?("string"==typeof o?n=this.element.querySelector(o):o instanceof HTMLElement&&(n=o),this[t]=n?i(n)[e]:o):this[t]=0},f.layoutItems=function(t,e){t=this._getItemsForLayout(t),this._layoutItems(t,e),this._postLayout()},f._getItemsForLayout=function(t){return t.filter(function(t){return!t.isIgnored})},f._layoutItems=function(t,e){if(this._emitCompleteOnItems("layout",t),t&&t.length){var i=[];t.forEach(function(t){var n=this._getItemLayoutPosition(t);n.item=t,n.isInstant=e||t.isLayoutInstant,i.push(n)},this),this._processLayoutQueue(i)}},f._getItemLayoutPosition=function(){return{x:0,y:0}},f._processLayoutQueue=function(t){this.updateStagger(),t.forEach(function(t,e){this._positionItem(t.item,t.x,t.y,t.isInstant,e)},this)},f.updateStagger=function(){var t=this.options.stagger;return null===t||void 0===t?void(this.stagger=0):(this.stagger=a(t),this.stagger)},f._positionItem=function(t,e,i,n,o){n?t.goTo(e,i):(t.stagger(o*this.stagger),t.moveTo(e,i))},f._postLayout=function(){this.resizeContainer()},f.resizeContainer=function(){var t=this._getOption("resizeContainer");if(t){var e=this._getContainerSize();e&&(this._setContainerMeasure(e.width,!0),this._setContainerMeasure(e.height,!1))}},f._getContainerSize=d,f._setContainerMeasure=function(t,e){if(void 0!==t){var i=this.size;i.isBorderBox&&(t+=e?i.paddingLeft+i.paddingRight+i.borderLeftWidth+i.borderRightWidth:i.paddingBottom+i.paddingTop+i.borderTopWidth+i.borderBottomWidth),t=Math.max(t,0),this.element.style[e?"width":"height"]=t+"px"}},f._emitCompleteOnItems=function(t,e){function i(){o.dispatchEvent(t+"Complete",null,[e])}function n(){s++,s==r&&i()}var o=this,r=e.length;if(!e||!r)return void i();var s=0;e.forEach(function(e){e.once(t,n)})},f.dispatchEvent=function(t,e,i){var n=e?[e].concat(i):i;if(this.emitEvent(t,n),u)if(this.$element=this.$element||u(this.element),e){var o=u.Event(e);o.type=t,this.$element.trigger(o,i)}else this.$element.trigger(t,i)},f.ignore=function(t){var e=this.getItem(t);e&&(e.isIgnored=!0)},f.unignore=function(t){var e=this.getItem(t);e&&delete e.isIgnored},f.stamp=function(t){t=this._find(t),t&&(this.stamps=this.stamps.concat(t),t.forEach(this.ignore,this))},f.unstamp=function(t){t=this._find(t),t&&t.forEach(function(t){n.removeFrom(this.stamps,t),this.unignore(t)},this)},f._find=function(t){return t?("string"==typeof t&&(t=this.element.querySelectorAll(t)),t=n.makeArray(t)):void 0},f._manageStamps=function(){this.stamps&&this.stamps.length&&(this._getBoundingRect(),this.stamps.forEach(this._manageStamp,this))},f._getBoundingRect=function(){var t=this.element.getBoundingClientRect(),e=this.size;this._boundingRect={left:t.left+e.paddingLeft+e.borderLeftWidth,top:t.top+e.paddingTop+e.borderTopWidth,right:t.right-(e.paddingRight+e.borderRightWidth),bottom:t.bottom-(e.paddingBottom+e.borderBottomWidth)}},f._manageStamp=d,f._getElementOffset=function(t){var e=t.getBoundingClientRect(),n=this._boundingRect,o=i(t),r={left:e.left-n.left-o.marginLeft,top:e.top-n.top-o.marginTop,right:n.right-e.right-o.marginRight,bottom:n.bottom-e.bottom-o.marginBottom};return r},f.handleEvent=n.handleEvent,f.bindResize=function(){t.addEventListener("resize",this),this.isResizeBound=!0},f.unbindResize=function(){t.removeEventListener("resize",this),this.isResizeBound=!1},f.onresize=function(){this.resize()},n.debounceMethod(r,"onresize",100),f.resize=function(){this.isResizeBound&&this.needsResizeLayout()&&this.layout()},f.needsResizeLayout=function(){var t=i(this.element),e=this.size&&t;return e&&t.innerWidth!==this.size.innerWidth},f.addItems=function(t){var e=this._itemize(t);return e.length&&(this.items=this.items.concat(e)),e},f.appended=function(t){var e=this.addItems(t);e.length&&(this.layoutItems(e,!0),this.reveal(e))},f.prepended=function(t){var e=this._itemize(t);if(e.length){var i=this.items.slice(0);this.items=e.concat(i),this._resetLayout(),this._manageStamps(),this.layoutItems(e,!0),this.reveal(e),this.layoutItems(i)}},f.reveal=function(t){if(this._emitCompleteOnItems("reveal",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.reveal()})}},f.hide=function(t){if(this._emitCompleteOnItems("hide",t),t&&t.length){var e=this.updateStagger();t.forEach(function(t,i){t.stagger(i*e),t.hide()})}},f.revealItemElements=function(t){var e=this.getItems(t);this.reveal(e)},f.hideItemElements=function(t){var e=this.getItems(t);this.hide(e)},f.getItem=function(t){for(var e=0;e<this.items.length;e++){var i=this.items[e];if(i.element==t)return i}},f.getItems=function(t){t=n.makeArray(t);var e=[];return t.forEach(function(t){var i=this.getItem(t);i&&e.push(i)},this),e},f.remove=function(t){var e=this.getItems(t);this._emitCompleteOnItems("remove",e),e&&e.length&&e.forEach(function(t){t.remove(),n.removeFrom(this.items,t)},this)},f.destroy=function(){var t=this.element.style;t.height="",t.position="",t.width="",this.items.forEach(function(t){t.destroy()}),this.unbindResize();var e=this.element.outlayerGUID;delete c[e],delete this.element.outlayerGUID,u&&u.removeData(this.element,this.constructor.namespace)},r.data=function(t){t=n.getQueryElement(t);var e=t&&t.outlayerGUID;return e&&c[e]},r.create=function(t,e){var i=s(r);return i.defaults=n.extend({},r.defaults),n.extend(i.defaults,e),i.compatOptions=n.extend({},r.compatOptions),i.namespace=t,i.data=r.data,i.Item=s(o),n.htmlInit(i,t),u&&u.bridget&&u.bridget(t,i),i};var m={ms:1,s:1e3};return r.Item=o,r}),function(t,e){"function"==typeof define&&define.amd?define(["outlayer/outlayer","get-size/get-size"],e):"object"==typeof module&&module.exports?module.exports=e(require("outlayer"),require("get-size")):t.Masonry=e(t.Outlayer,t.getSize)}(window,function(t,e){var i=t.create("masonry");i.compatOptions.fitWidth="isFitWidth";var n=i.prototype;return n._resetLayout=function(){this.getSize(),this._getMeasurement("columnWidth","outerWidth"),this._getMeasurement("gutter","outerWidth"),this.measureColumns(),this.colYs=[];for(var t=0;t<this.cols;t++)this.colYs.push(0);this.maxY=0,this.horizontalColIndex=0},n.measureColumns=function(){if(this.getContainerWidth(),!this.columnWidth){var t=this.items[0],i=t&&t.element;this.columnWidth=i&&e(i).outerWidth||this.containerWidth}var n=this.columnWidth+=this.gutter,o=this.containerWidth+this.gutter,r=o/n,s=n-o%n,a=s&&1>s?"round":"floor";r=Math[a](r),this.cols=Math.max(r,1)},n.getContainerWidth=function(){var t=this._getOption("fitWidth"),i=t?this.element.parentNode:this.element,n=e(i);this.containerWidth=n&&n.innerWidth},n._getItemLayoutPosition=function(t){t.getSize();var e=t.size.outerWidth%this.columnWidth,i=e&&1>e?"round":"ceil",n=Math[i](t.size.outerWidth/this.columnWidth);n=Math.min(n,this.cols);for(var o=this.options.horizontalOrder?"_getHorizontalColPosition":"_getTopColPosition",r=this[o](n,t),s={x:this.columnWidth*r.col,y:r.y},a=r.y+t.size.outerHeight,h=n+r.col,u=r.col;h>u;u++)this.colYs[u]=a;return s},n._getTopColPosition=function(t){var e=this._getTopColGroup(t),i=Math.min.apply(Math,e);return{col:e.indexOf(i),y:i}},n._getTopColGroup=function(t){if(2>t)return this.colYs;for(var e=[],i=this.cols+1-t,n=0;i>n;n++)e[n]=this._getColGroupY(n,t);return e},n._getColGroupY=function(t,e){if(2>e)return this.colYs[t];var i=this.colYs.slice(t,t+e);return Math.max.apply(Math,i)},n._getHorizontalColPosition=function(t,e){var i=this.horizontalColIndex%this.cols,n=t>1&&i+t>this.cols;i=n?0:i;var o=e.size.outerWidth&&e.size.outerHeight;return this.horizontalColIndex=o?i+t:this.horizontalColIndex,{col:i,y:this._getColGroupY(i,t)}},n._manageStamp=function(t){var i=e(t),n=this._getElementOffset(t),o=this._getOption("originLeft"),r=o?n.left:n.right,s=r+i.outerWidth,a=Math.floor(r/this.columnWidth);a=Math.max(0,a);var h=Math.floor(s/this.columnWidth);h-=s%this.columnWidth?0:1,h=Math.min(this.cols-1,h);for(var u=this._getOption("originTop"),d=(u?n.top:n.bottom)+i.outerHeight,l=a;h>=l;l++)this.colYs[l]=Math.max(d,this.colYs[l])},n._getContainerSize=function(){this.maxY=Math.max.apply(Math,this.colYs);var t={height:this.maxY};return this._getOption("fitWidth")&&(t.width=this._getContainerFitWidth()),t},n._getContainerFitWidth=function(){for(var t=0,e=this.cols;--e&&0===this.colYs[e];)t++;return(this.cols-t)*this.columnWidth-this.gutter},n.needsResizeLayout=function(){var t=this.containerWidth;return this.getContainerWidth(),t!=this.containerWidth},i});/*!
 * imagesLoaded PACKAGED v4.1.4
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */

!function(e,t){"function"==typeof define&&define.amd?define("ev-emitter/ev-emitter",t):"object"==typeof module&&module.exports?module.exports=t():e.EvEmitter=t()}("undefined"!=typeof window?window:this,function(){function e(){}var t=e.prototype;return t.on=function(e,t){if(e&&t){var i=this._events=this._events||{},n=i[e]=i[e]||[];return n.indexOf(t)==-1&&n.push(t),this}},t.once=function(e,t){if(e&&t){this.on(e,t);var i=this._onceEvents=this._onceEvents||{},n=i[e]=i[e]||{};return n[t]=!0,this}},t.off=function(e,t){var i=this._events&&this._events[e];if(i&&i.length){var n=i.indexOf(t);return n!=-1&&i.splice(n,1),this}},t.emitEvent=function(e,t){var i=this._events&&this._events[e];if(i&&i.length){i=i.slice(0),t=t||[];for(var n=this._onceEvents&&this._onceEvents[e],o=0;o<i.length;o++){var r=i[o],s=n&&n[r];s&&(this.off(e,r),delete n[r]),r.apply(this,t)}return this}},t.allOff=function(){delete this._events,delete this._onceEvents},e}),function(e,t){"use strict";"function"==typeof define&&define.amd?define(["ev-emitter/ev-emitter"],function(i){return t(e,i)}):"object"==typeof module&&module.exports?module.exports=t(e,require("ev-emitter")):e.imagesLoaded=t(e,e.EvEmitter)}("undefined"!=typeof window?window:this,function(e,t){function i(e,t){for(var i in t)e[i]=t[i];return e}function n(e){if(Array.isArray(e))return e;var t="object"==typeof e&&"number"==typeof e.length;return t?d.call(e):[e]}function o(e,t,r){if(!(this instanceof o))return new o(e,t,r);var s=e;return"string"==typeof e&&(s=document.querySelectorAll(e)),s?(this.elements=n(s),this.options=i({},this.options),"function"==typeof t?r=t:i(this.options,t),r&&this.on("always",r),this.getImages(),h&&(this.jqDeferred=new h.Deferred),void setTimeout(this.check.bind(this))):void a.error("Bad element for imagesLoaded "+(s||e))}function r(e){this.img=e}function s(e,t){this.url=e,this.element=t,this.img=new Image}var h=e.jQuery,a=e.console,d=Array.prototype.slice;o.prototype=Object.create(t.prototype),o.prototype.options={},o.prototype.getImages=function(){this.images=[],this.elements.forEach(this.addElementImages,this)},o.prototype.addElementImages=function(e){"IMG"==e.nodeName&&this.addImage(e),this.options.background===!0&&this.addElementBackgroundImages(e);var t=e.nodeType;if(t&&u[t]){for(var i=e.querySelectorAll("img"),n=0;n<i.length;n++){var o=i[n];this.addImage(o)}if("string"==typeof this.options.background){var r=e.querySelectorAll(this.options.background);for(n=0;n<r.length;n++){var s=r[n];this.addElementBackgroundImages(s)}}}};var u={1:!0,9:!0,11:!0};return o.prototype.addElementBackgroundImages=function(e){var t=getComputedStyle(e);if(t)for(var i=/url\((['"])?(.*?)\1\)/gi,n=i.exec(t.backgroundImage);null!==n;){var o=n&&n[2];o&&this.addBackground(o,e),n=i.exec(t.backgroundImage)}},o.prototype.addImage=function(e){var t=new r(e);this.images.push(t)},o.prototype.addBackground=function(e,t){var i=new s(e,t);this.images.push(i)},o.prototype.check=function(){function e(e,i,n){setTimeout(function(){t.progress(e,i,n)})}var t=this;return this.progressedCount=0,this.hasAnyBroken=!1,this.images.length?void this.images.forEach(function(t){t.once("progress",e),t.check()}):void this.complete()},o.prototype.progress=function(e,t,i){this.progressedCount++,this.hasAnyBroken=this.hasAnyBroken||!e.isLoaded,this.emitEvent("progress",[this,e,t]),this.jqDeferred&&this.jqDeferred.notify&&this.jqDeferred.notify(this,e),this.progressedCount==this.images.length&&this.complete(),this.options.debug&&a&&a.log("progress: "+i,e,t)},o.prototype.complete=function(){var e=this.hasAnyBroken?"fail":"done";if(this.isComplete=!0,this.emitEvent(e,[this]),this.emitEvent("always",[this]),this.jqDeferred){var t=this.hasAnyBroken?"reject":"resolve";this.jqDeferred[t](this)}},r.prototype=Object.create(t.prototype),r.prototype.check=function(){var e=this.getIsImageComplete();return e?void this.confirm(0!==this.img.naturalWidth,"naturalWidth"):(this.proxyImage=new Image,this.proxyImage.addEventListener("load",this),this.proxyImage.addEventListener("error",this),this.img.addEventListener("load",this),this.img.addEventListener("error",this),void(this.proxyImage.src=this.img.src))},r.prototype.getIsImageComplete=function(){return this.img.complete&&this.img.naturalWidth},r.prototype.confirm=function(e,t){this.isLoaded=e,this.emitEvent("progress",[this,this.img,t])},r.prototype.handleEvent=function(e){var t="on"+e.type;this[t]&&this[t](e)},r.prototype.onload=function(){this.confirm(!0,"onload"),this.unbindEvents()},r.prototype.onerror=function(){this.confirm(!1,"onerror"),this.unbindEvents()},r.prototype.unbindEvents=function(){this.proxyImage.removeEventListener("load",this),this.proxyImage.removeEventListener("error",this),this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},s.prototype=Object.create(r.prototype),s.prototype.check=function(){this.img.addEventListener("load",this),this.img.addEventListener("error",this),this.img.src=this.url;var e=this.getIsImageComplete();e&&(this.confirm(0!==this.img.naturalWidth,"naturalWidth"),this.unbindEvents())},s.prototype.unbindEvents=function(){this.img.removeEventListener("load",this),this.img.removeEventListener("error",this)},s.prototype.confirm=function(e,t){this.isLoaded=e,this.emitEvent("progress",[this,this.element,t])},o.makeJQueryPlugin=function(t){t=t||e.jQuery,t&&(h=t,h.fn.imagesLoaded=function(e,t){var i=new o(this,e,t);return i.jqDeferred.promise(h(this))})},o.makeJQueryPlugin(),o});/*
 * jQuery Tooltip plugin 1.3
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/
 * http://docs.jquery.com/Plugins/Tooltip
 *
 * Copyright (c) 2006 - 2008 JÃ¶rn Zaefferer
 *
 * $Id: jquery.tooltip.js 5741 2008-06-21 15:22:16Z joern.zaefferer $
 * 
 * Dual licensed under the MIT and GPL licenses:
 *http://www.opensource.org/licenses/mit-license.php
 *http://www.gnu.org/licenses/gpl.html
 */
 
;(function($) {

// the tooltip element
var helper = {},
// the current tooltipped element
current,
previous,
// the title of the current element, used for restoring
title,
// timeout id for delayed tooltips
tID = {},
// IE 5.5 or 6
IE = $('.ie').length > 0 && parseInt((navigator.userAgent.toLowerCase()).split('msie')[1]) < 7,
// flag for mouse tracking
track = false;

$.tooltip = {
blocked: false,
defaults: {
delay: 200,
hideDelay: 200,
fade: false,
showURL: true,
extraClass: "",
focus: false,
top: 15,
left: 15,
id: "tooltip"
},
block: function() {
$.tooltip.blocked = !$.tooltip.blocked;
}
};

$.fn.extend({
tooltip: function(settings) {
settings = $.extend({}, $.tooltip.defaults, settings);
createHelper(settings);
return this.each(function() {
$.data(this, "tooltip", settings);
this.tOpacity = helper.parent.css("opacity");
// copy tooltip into its own expando and remove the title
this.tooltipText = this.title;
$(this).removeAttr("title");
// also remove alt attribute to prevent default tooltip in IE
this.alt = "";
})
.mouseover(save)
.mouseout(hide)
.click(hide);
},
fixPNG: IE ? function() {
return this.each(function () {
var image = $(this).css('backgroundImage');
if (image.match(/^url\(["']?(.*\.png)["']?\)$/i)) {
image = RegExp.$1;
$(this).css({
'backgroundImage': 'none',
'filter': "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=crop, src='" + image + "')"
}).each(function () {
var position = $(this).css('position');
if (position != 'absolute' && position != 'relative')
$(this).css('position', 'relative');
});
}
});
} : function() { return this; },
unfixPNG: IE ? function() {
return this.each(function () {
$(this).css({'filter': '', backgroundImage: ''});
});
} : function() { return this; },
hideWhenEmpty: function() {
return this.each(function() {
$(this)[ $(this).html() ? "show" : "hide" ]();
});
},
url: function() {
return this.attr('href') || this.attr('src');
}
});

function createHelper(settings) {
// there can be only one tooltip helper
if( helper.parent )
return;
// create the helper, h3 for title, div for url
helper.parent = $('<div id="' + settings.id + '"><h3></h3><div class="top-wrapper"><div class="bottom-wrapper"><div class="middle-wrapper body"></div></div></div><div class="url"></div></div>')
// add to document
.appendTo(document.body)
// hide it at first
.hide().mouseover(function(){
if ($.data(previous, "tooltip").focus && tID.h)
clearTimeout(tID.h);
}).mouseout(function(){
hide_complete($.data(previous, "tooltip"));
});

// apply bgiframe if available
if ( $.fn.bgiframe )
helper.parent.bgiframe();

// save references to title and url elements
helper.title = $('h3', helper.parent);
helper.body = $('div.body', helper.parent);
helper.url = $('div.url', helper.parent);
}

function settings(element) {
return $.data(element, "tooltip");
}

// main event handler to start showing tooltips
function handle(event) {
// show helper, either with timeout or on instant
if( settings(this).delay )
tID.s = setTimeout(show, settings(this).delay);
else
show();

// if selected, update the helper position when the mouse moves
track = !!settings(this).track;
$(document.body).bind('mousemove', update);

// update at least once
update(event);
}

// save elements title before the tooltip is displayed
function save() {
// if this is the current source, or it has no title (occurs with click event), stop
if ( $.tooltip.blocked || this == current || (!this.tooltipText && !settings(this).bodyHandler) )
return;

// save current
current = this;
title = this.tooltipText;

if ( settings(this).bodyHandler ) {
helper.title.hide();
var bodyContent = settings(this).bodyHandler.call(this);
if (bodyContent.nodeType || bodyContent.jquery) {
helper.body.empty().append(bodyContent)
} else {
helper.body.html( bodyContent );
}
helper.body.show();
} else if ( settings(this).showBody ) {
var parts = title.split(settings(this).showBody);
helper.title.html(parts.shift()).show();
helper.body.empty();
for(var i = 0, part; (part = parts[i]); i++) {
if(i > 0)
helper.body.append("<br/>");
helper.body.append(part);
}
helper.body.hideWhenEmpty();
} else {
helper.title.html(title).show();
helper.body.hide();
}

// if element has href or src, add and show it, otherwise hide it
if( settings(this).showURL && $(this).url() )
helper.url.html( $(this).url().replace('http://', '') ).show();
else 
helper.url.hide();

// fix PNG background for IE
if (settings(this).fixPNG )
helper.parent.fixPNG();

handle.apply(this, arguments);
}

// delete timeout and show helper
function show() {
// add an optional class for this tip
helper.parent.addClass(settings(current).extraClass);

tID.s = null;
if(tID.h)
clearTimeout(tID.h);
if ((!IE || !$.fn.bgiframe) && settings(current).fade) {
if (helper.parent.is(":animated"))
helper.parent.stop().show().fadeTo(settings(current).fade, current.tOpacity);
else
helper.parent.is(':visible') ? helper.parent.fadeTo(settings(current).fade, current.tOpacity) : helper.parent.fadeIn(settings(current).fade);
} else {
helper.parent.show();
}
update();
}

/**
 * callback for mousemove
 * updates the helper position
 * removes itself when no current element
 */
function update(event){
if($.tooltip.blocked)
return;

if (event && event.target.tagName == "OPTION") {
return;
}

// stop updating when tracking is disabled and the tooltip is visible
if ( !track && helper.parent.is(":visible")) {
$(document.body).unbind('mousemove', update)
}

// if no current element is available, remove this listener
if( current == null ) {
$(document.body).unbind('mousemove', update);
return;
}

// remove position helper classes
helper.parent.removeClass("viewport-right").removeClass("viewport-bottom");

var left = helper.parent[0].offsetLeft;
var top = helper.parent[0].offsetTop;
if (event) {
// position the helper 15 pixel to bottom right, starting from mouse position
left = event.pageX + settings(current).left;
top = event.pageY + settings(current).top;
var right='auto';
if (settings(current).positionLeft) {
right = $(window).width() - left;
left = 'auto';
}
helper.parent.css({
left: left,
right: right,
top: top
});
}

var v = viewport(),
h = helper.parent[0];
// check horizontal position
if (v.x + v.cx < h.offsetLeft + h.offsetWidth) {
left -= h.offsetWidth + 20 + settings(current).left;
helper.parent.css({left: left + 'px'}).addClass("viewport-right");
}
// check vertical position
if (v.y + v.cy < h.offsetTop + h.offsetHeight) {
top -= h.offsetHeight + 20 + settings(current).top;
helper.parent.css({top: top + 'px'}).addClass("viewport-bottom");
}
}

function viewport() {
return {
x: $(window).scrollLeft(),
y: $(window).scrollTop(),
cx: $(window).width(),
cy: $(window).height()
};
}

function hide_now() {
tID.h = null;
helper.parent.removeClass( settings.extraClass ).hide().css("opacity", "");
}

function hide_complete(tsettings) {
if(tID.h)
clearTimeout(tID.h);
if( tsettings.hideDelay )
tID.h = setTimeout(hide_now, tsettings.hideDelay);
else
hide_now();
}

// hide helper and restore added classes and the title
function hide(event) {
if($.tooltip.blocked)
return;
// clear timeout if possible
if(tID.s)
clearTimeout(tID.s);
// no more current element
previous = current;
current = null;

var tsettings = settings(this);
if ((!IE || !$.fn.bgiframe) && tsettings.fade) {
if (helper.parent.is(':animated'))
helper.parent.stop().fadeTo(tsettings.fade, 0, function(){hide_complete(tsettings)});
else
helper.parent.stop().fadeOut(tsettings.fade, function(){hide_complete(tsettings)});
} else
hide_complete(tsettings);

if( settings(this).fixPNG )
helper.parent.unfixPNG();
}

})(jQuery);
(function($) {
$.fn.tipsy = function(options) {

options = $.extend({}, $.fn.tipsy.defaults, options);

return this.each(function() {

var opts = $.fn.tipsy.elementOptions(this, options);

$(this).hover(function() {

$.data(this, 'cancel.tipsy', true);

var tip = $.data(this, 'active.tipsy');
if (!tip) {
tip = $('<div class="tipsy"><div class="tipsy-inner"/></div>');
tip.css({position: 'absolute', zIndex: 990});
$.data(this, 'active.tipsy', tip);
}

if ($(this).attr('title') || typeof($(this).attr('original-title')) != 'string') {
$(this).attr('original-title', $(this).attr('title') || '').removeAttr('title');
}

var title;
if (typeof opts.title == 'string') {
title = $(this).attr(opts.title == 'title' ? 'original-title' : opts.title);
} else if (typeof opts.title == 'function') {
title = opts.title.call(this);
}

tip.find('.tipsy-inner')[opts.html ? 'html' : 'text'](title || opts.fallback);

var pos = $.extend({}, $(this).offset(), {width: this.offsetWidth, height: this.offsetHeight});
tip.get(0).className = 'tipsy'; // reset classname in case of dynamic gravity
tip.remove().css({top: 0, left: 0, visibility: 'hidden', display: 'block'}).appendTo(document.body);
var actualWidth = tip[0].offsetWidth, actualHeight = tip[0].offsetHeight;
var gravity = (typeof opts.gravity == 'function') ? opts.gravity.call(this) : opts.gravity;

switch (gravity.charAt(0)) {
case 'n':
tip.css({top: pos.top + pos.height, left: pos.left + pos.width / 2 - actualWidth / 2}).addClass('tipsy-north');
break;
case 's':
tip.css({top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2}).addClass('tipsy-south');
break;
case 'e':
tip.css({top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth}).addClass('tipsy-east');
break;
case 'w':
tip.css({top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width}).addClass('tipsy-west');
break;
}

if (opts.fade) {
tip.css({opacity: 0, display: 'block', visibility: 'visible'}).animate({opacity: 0.8});
} else {
tip.css({visibility: 'visible'});
}

}, function() {
$.data(this, 'cancel.tipsy', false);
var self = this;
setTimeout(function() {
if ($.data(this, 'cancel.tipsy')) return;
var tip = $.data(self, 'active.tipsy');
if (opts.fade) {
tip.stop().fadeOut(function() { $(this).remove(); });
} else {
tip.remove();
}
}, 100);

});

});

};

// Overwrite this method to provide options on a per-element basis.
// For example, you could store the gravity in a 'tipsy-gravity' attribute:
// return $.extend({}, options, {gravity: $(ele).attr('tipsy-gravity') || 'n' });
// (remember - do not modify 'options' in place!)
$.fn.tipsy.elementOptions = function(ele, options) {
return $.metadata ? $.extend({}, options, $(ele).metadata()) : options;
};

$.fn.tipsy.defaults = {
fade: false,
fallback: '',
gravity: 'n',
html: false,
title: 'title'
};

$.fn.tipsy.autoNS = function() {
return $(this).offset().top > ($(document).scrollTop() + $(window).height() / 2) ? 's' : 'n';
};

$.fn.tipsy.autoWE = function() {
return $(this).offset().left > ($(document).scrollLeft() + $(window).width() / 2) ? 'e' : 'w';
};

})(jQuery);
function setFollow(user_id, follow, onComplete) {
$.post(
'/user/'+ (follow ? 'follow': 'unfollow') +'/'+ user_id,
function(data) {
if (onComplete) {
onComplete(user_id);
}
}
);
}

function follow(user_id, onComplete) {
setFollow(user_id, true, onComplete);
}

function unfollow(user_id, onComplete) {
setFollow(user_id, false, onComplete);
}

var can_follow = true;

$(document).ready(function(){
addFollows();
});

function addFollows() {
$(document).on('click', '.button.follow', function(e) {
if(!can_follow) {
e.preventDefault();
} else {
var button = $(this);
button.removeClass('disabled');
var _callback = button.attr('data-callback');
var callback=null;
if(typeof _callback=="undefined"){
_callback="";
}else{
var fn = window[_callback];
if (typeof fn === "function") {
callback = fn;
}
}

if($(this).hasClass('is-own')) {
} else {
e.preventDefault();

if (logged()) { // !button.hasClass('request-login')
if (!button.hasClass('disabled')) {
var user_id = button.attr('user_id');
if (button.hasClass('not')) {
unfollow(user_id, function(){
button.removeClass('disabled');
}
);

button.removeClass('not');
button.find('.label').html('Follow');

} else {
button.addClass('not');
button.find('.label').html('Following');
if(_callback){
follow(user_id , callback);
}else{
follow(user_id , function(){button.removeClass('disabled');});
}
}



} else {
alert('Please wait!');
}
}
}
}
});
}var main = '#popup-clear-main';
var originalEntryList = [];
var entryList = [];
var entryLimit = 3;
var totalOriginal = 0;

$(document).ready(function(){
// browse
$('.pop-browser').off().click(function(e) {
e.preventDefault();

$.get(
'/user/setting/slideshow/popup',
function(data) {
if(data.indexOf("no_photos") >= 0) {
popup = popFullscreenHtml(' ', 'Oops, seems your photos don\'t have the minimum width required.<br />Make your profile awesome! Please <a href="/upload" class="no-photos-upload">upload</a> a photo with a minimum width of 1200px.','popup_no_photos');
} else {

$('body').css({ overflow:'hidden' });
$('.mobile #wrapper').css({ overflow:'hidden', position:'fixed' });
$(main).removeClass();
$(main).addClass('join-popup');
$(main).html(data);
$(main).fadeIn(500);

originalEntryList = [];
entryList = [];
totalOriginal = 0;

// the list of entries by the user
$.each( $('.join-contest-photos img'), function() {
originalEntryList.push( $(this).attr('data-id') );
entryList.push( $(this).attr('data-id') );
});

totalOriginal = originalEntryList.length;

addSlideshowActions();
addSlideshowSelected();

$('.join-buttons .join-add').off().on('click', function() {
if(!$(this).hasClass('join-disabled')) {

$('#popup-clear-bg').show().css({ 'z-index': 10001, 'background': '#FFF url(/media/images/layout/loading2.gif) no-repeat center' });

$.post(
'/user/setting/save/slideshow/selection',
{media_ids: entryList.join(",")},
function(resp) {
window.location.reload();
}
);
}
});

navActions();
}
}
);
});
});

function addSlideshowActions() {
$('.join-gallery div').off().on('click', function() {
var thisID = $(this).children('img').attr('data-id');

if($(this).children('img').hasClass('join-album')) {

var user_pho = entryList.join(",");

$.ajax({
type: "POST",
url: '/user/setting/slideshow/photos?album=' + thisID,
data: { user_photos:user_pho },
success: function(data) {
reloadJoinGallery(data);
addSlideshowActions();
}
});

} else {
if(!$(this).hasClass('selected') && entryList.length < entryLimit) {
$(this).addClass('selected');
if($('.join-contest-photos img').length == 0) {
$('.join-title span.title-change').html("remove from");
}

var url = $(this).children('img').attr('src');
var img = '<span class="join-span-mask"><img src="' + url + '" data-id="' + thisID + '" /></span>';
$('.join-contest-photos').append(img);

entryList.push(thisID);
checkChanges();
addSlideshowSelected();

$('.join-submitted').html(entryList.length);
}
}
});
}

function addSlideshowSelected() {
$('.join-contest-photos img').off().on('click', function() {
var thisID = $(this).attr('data-id');
$('#join-photo-' + thisID).parent().removeClass('selected');

entryList.splice( entryList.indexOf(thisID) , 1);
checkChanges();

$(this).parent().remove();
if($('.join-contest-photos img').length == 0) {
$('.join-title span.title-change').html("add to");
}

$('.join-submitted').html(entryList.length);
});
}var masonry_grid_numCols = 4;
var masonry_is400 = false;
var masonry_container = null;
var masonry_is_resizable = true;

function attachGalleryWaterfallEvent(container) {
//$(container).stop();
//$(container).css({ opacity: 0 });

if (typeof container == 'undefined' || !container) {
var container = '#main_content';
}

masonry_container = $(container).find('gallery.waterfall');

/*if($("body.gal400").length > 0){
masonry_container = $(container).find('gallery.waterfall400');
masonry_is400 = true;
}else*/ if($('gallery').hasClass('waterfall400')){
masonry_container = $(container).find('gallery.waterfall400');
masonry_is400 = true;
}

if (masonry_container.length) {

//Ignore re-order (resize) with expand-collapse

if ($(masonry_container).find('.expand-items').length>0){
masonry_is_resizable = false;
}

//replaceDelayedImages();
masonryLoad();

masonry_container.imagesLoaded(function() {
/*if (masonry_is_resizable && masonry_container.height()) {
masonry_container.css({minHeight: masonry_container.height()*.6});
}*/
replaceDelayedImages();
//masonryLoad();
});

masonry_container.find("div.social-icons span").click(function(e){
var l =base_url +'/photo/'+ $(this).parent().attr('media_id');
var m = '"'+$(this).parent().attr('title')+'" ' + l +' via @viewbug';
if ($(this).hasClass('fb')) {
redirect("http://www.facebook.com/sharer.php?u="+ encodeURIComponent(l) +"&t="+ encodeURIComponent(m), 'fbshare', {layout: 'share'});
}
if ($(this).hasClass('tw')) {
redirect("http://twitter.com/share?text="+ encodeURIComponent(m) +"&url=", 'twshare', {layout: 'share'});
}
});
}

//$(container).delay(750).animate({ opacity: 1 }, 750);
}

function masonryLoad(){
if(!$('gallery').hasClass('waterfall400')){
return false;
}

if(masonry_is400){
for(var i=0; i < 6; i++){
masonry_container.removeClass("col" + i);
}

var windowWidth = $(window).width();
if($('body').hasClass('ranks') && $(window).width() >= 1200){
windowWidth = 1200;
}

var galx = 430;
var the_gutter = 16;

if( windowWidth >= 1370 && !$("html").hasClass("mobile") ){
var colsByRow = Math.floor((windowWidth - 70)/galx);
if($('body').hasClass('photographycollection')){
galx = 380;
colsByRow = Math.floor((1200 - 45)/galx);
}

$(".waterfall400").find("thumbnail").each(function(i,obj){
$(obj).css({width:galx+"px",margin:"7px 0"});
});

masonry_grid_numCols =colsByRow ;//Math.floor(windowWidth/colsByRow) - 6;
masonry_container.addClass("col" + masonry_grid_numCols);

$(masonry_container).css("width",(galx * masonry_grid_numCols) + ( 15 * masonry_grid_numCols) ).css("margin","0 auto 20px");
if($("body").hasClass("witop")){
$(masonry_container).css("margin-top","70px");
}
}
else if(!$("html").hasClass("mobile") || ($("html").hasClass("mobile") && windowWidth >= 768) || $('body').hasClass('ranks')){
galx=410;
the_gutter = 12;

var colsByRow = 3;
var marr = '6px';
if(windowWidth < 1000) { colsByRow = 2; marr = '12px'; }
if(windowWidth < 600){ colsByRow = 1; marr = '4px'; }
if($('body').hasClass('ranks')){
marr = '16px';
if($(window).width() > 1200) {
the_gutter = 16;
}
}

var widthCell = windowWidth/colsByRow - 15;
var perc = widthCell*100/windowWidth;

masonry_grid_numCols = colsByRow;
masonry_container.addClass("col"+masonry_grid_numCols);

$(".waterfall400").find("thumbnail").each(function(i,obj){
$(obj).css("max-width","600px");
$(obj).css({margin:"3px 0 " + marr + " 0"});
$(obj).css("width",perc+"%");
});

var margin = "60px auto 0";
//var thumbWidth = $(".waterfall400").find("thumbnail:first").width();
$("gallery").not('#recommended_challenge_gallery, #recommended_contest_gallery').css("width","100%");

if($('#recommended_challenge_gallery').length > 0 || $('#recommended_contest_gallery').length > 0 || $('#congallery').length > 0){
margin = "0px auto 0";
}
$("gallery").not('#recommended_challenge_gallery, #recommended_contest_gallery').css("width",masonry_grid_numCols*widthCell + masonry_grid_numCols * 15).css("margin",margin);
}
else{
var margin = "60px auto 0";
if($('#recommended_challenge_gallery').length > 0 || $('#recommended_contest_gallery').length > 0 || $('#congallery').length > 0){
margin = "0px auto 0";
}
$("gallery").not('#recommended_challenge_gallery, #recommended_contest_gallery').css("width",'100%').css("margin",margin);

$(".waterfall400").find("thumbnail").each(function(i,obj){
$(obj).css({width:"",margin:"3px 0 4px 0"});
});

the_gutter = 12;

masonry_container.removeClass("col4");

if(masonry_container.hasClass("onecol")){
masonry_grid_numCols = 1;
}
else{
$(".mobile gallery.waterfall400 thumbnail").css("width","49.5%");
if( $(window).width()>=736 && $(window).width() > $(window).height()){
masonry_grid_numCols = 3;
masonry_container.addClass("col3");
$(".mobile gallery.waterfall400 thumbnail").css("width","33%");
}else{
masonry_grid_numCols = 2;
masonry_container.addClass("col2");
}
}
}
}

replaceDelayedImagesBy(7);

reHeight(false);
masonry_container.masonry({
itemSelector: 'thumbnail',
isResizable: masonry_is_resizable,
percentPosition: true,
columnWidth: 'thumbnail',
gutter: the_gutter,
transitionDuration: 0

});
if($('body').hasClass('ranks')){
$('.rank-update .contest-ranks').fadeIn(500);
}

if($('body').hasClass('collection')) {
$('#collection-link').width($('#galinf').width() - 20);
}

}

function replaceDelayedImagesBy(maxInitImages){
//Load more than 3 images on big screens
if(typeof maxInitImages ==="undefined"){
maxInitImages=3;
}

if($(window).width() > 1500 && maxInitImages < 9){
maxInitImages=9;
}
var tiles = $('.lazy').fadeTo(0,0);
tiles.each(function(i) {
if(i<maxInitImages){
$(this).fadeTo(500,1);
var src = $(this).attr("data-src");
if(typeof src!="undefined" && src.length>0){
$(this).attr("src",src);
$(this).attr("data-src","");
$(this).removeAttr("data-src");
$(this).removeAttr("height");
$(this).removeClass("lazy");
}
}else{return false;}
});
}

function replaceDelayedImages($ignore_scroll){
if(typeof $ignore_scroll=="undefined"){
$ignore_scroll=false;
}


if(!$ignore_scroll){
setLazy();
}
else{
tiles = $('.lazy');

tiles.each(function(i) {
reHeight();

var src = $(this).attr("data-src");
if(typeof src!="undefined" && src.length>0){
$(this).attr("src",src);
$(this).attr("data-src","");
$(this).removeAttr("data-src");
$(this).removeAttr("height");
$(this).removeClass("lazy");
}

});
}
masonryLoad();

}
$(document).ready(function() {
attachGalleryWaterfallEvent();
masonryLoad();
if($('.breadcrumb.title').length > 0){
galleryBreancrumb();
}

masonry_container.imagesLoaded(function(){
reHeight(false);//masonry_container.masonry('resize');
});

$(window).resize(function() {
masonryLoad();
});
});

function reHeight(resizeMasonry){

var tiles = $('.delayed');
tiles.each(function(i) {
var width = $(this).width();
var height =( $(this).attr("data-og") /$(this).attr("data-ow") * width);

if(isNaN(height) || height===0){
$(this).height("auto");
$(this).removeAttr("height");
}
else{
$(this).height(height);
$(this).attr("height",height);
}
});

if(resizeMasonry!==false && $(masonry_container).hasClass('masonry')){
masonry_container.masonry('resize');
}
}
// var form = null;

var form_inputs = {
defaults: {},
tid: {}
};

function clearItemError(form_item) {
$(form_item).find('.field_error_wrapper').remove();
$(form_item).removeClass('valid').removeClass('invalid').removeClass('required');
}

function appendItemError(form_item, message) {
var error_wrapper = $('<div class="field_error_wrapper"><div class="field_error">'+message+'</div></div>');
var input_wrapper = form_item.find('.input_wrapper');

error_wrapper.click(function(){
$(this).parent().find('.form-text, .form-textarea').focus();
$(this).remove();
});

if (input_wrapper.length > 0 ) {
input_wrapper.append(error_wrapper);
error_wrapper.attr('id', input_wrapper.find('.form-text:first, .form-textarea:first').attr('id')+'-error');

} else {
form_item.append(error_wrapper);
}
}

function checkFromItem(form, input, is_form_submit, required, is_blur) {
var message = '';
var value = '';
var is_invalid = false;
var errormessage = 'is required';

var is_lists = $(input.parentNode).hasClass('lists');
var form_item = $(input).parents('.form-item:first');

var label = form_item.find('label:first');
var label_first = form_item.find('label.first');

if (label_first.length > 0) {
label = label_first;
}

labelmessage = label.length > 0 ? label.html().replace(/<(.)*>|: (.)*|:/g,''): 'Field';

// check for empy values
if (required) {
if (is_lists) {
$(input.parentNode).find('input').each(function(){
value += this.value;
});
is_invalid = (value == '');
} else {
switch(input.type) {
case 'checkbox':
is_invalid = (!input.checked);
break;
case 'radio':
is_invalid = true;
form.find('input[name='+input.name+']').each(function(){
if (is_invalid && $(this).attr('checked')){
is_invalid = false;
}
})
break;
default:
value = $(input).hasClass('empty') ? '': input.value.replace(/^\ +|\ +$/g, '');
is_invalid = (value == '' || form_inputs['defaults'][input.name] == input.value);
break;
}
}
}

// check individial field types
if (!is_invalid && input.value != '') {
if ($(input).hasClass('form-username')) {
is_invalid = !isUsername(input.value);
}

if ($(input).hasClass('form-email')) {
is_invalid = !isEmail(input.value);
}

if ($(input).hasClass('form-password')) {
is_invalid = !isPassword(input);
}

if ($(input).hasClass('form-password-confirm')) {
is_invalid = !isPassword(input);
}

if ($(input).hasClass('form-url')) {
is_invalid = !isUrl(input.value);
}

if ($(input).hasClass('form-phone')) {
is_invalid = !isPhone(input.value);
}

// check individial field types, extended
if ($(input).hasClass('check-avility')) {
if (!is_invalid) {
var avility = checkAvility(input, is_form_submit || is_blur ? 1: 150, true);

if (is_form_submit && !is_blur) {
is_invalid = !avility;
}

} else {
// clear time out
if (form_inputs['tid'][input.name]) {
clearTimeout(form_inputs['tid'][input.name]);
}
}
}

if (is_invalid) {
errormessage = $(input).hasClass('form-password-confirm') && input.value.length >= 6 ? 'mismatch': 'is invalid';
}
}

if (!form_item.hasClass('valid')) {
clearItemError(form_item);
}
if (is_invalid) {
message = labelmessage+' '+errormessage;

if (value == '' && required && !is_form_submit) {
form_item.addClass('required');
if (form_item.find('.required_message').length > 0) {
message = form_item.find('.invalid_message').html();
}
} else {
form_item.addClass('invalid');
if (form_item.find('.invalid_message').length > 0) {
message = form_item.find('.invalid_message').html();
}
}

appendItemError(form_item, message);

message += '.<br/>';
}

return message;
}

function checkForm(form) {
var error = '';

$(form).find('span.form-required').each(function() {
// filter input, textarea and select elements
$(this).parent().parent().find('input.form-text, input.form-file, input.first_radio, textarea, select').each(function(){
if (!($(this).hasClass('validate-off'))) {
error += checkFromItem(form, this, true, true);
}
});
});

var valid = (error == '');

// if form output available, show error message
// code here

// check if there's a empty field
var invalid = $(form).find('.form-item.invalid, .form-item.required');
if (!$(form).hasClass('no-scrollable') && invalid.length > 0) {
// scroll to empty field and focus
$(($.browser.safari) ? 'body': 'html').animate(
{scrollTop: $(invalid[0]).offset().top - 60}, 700,
function() {
$(invalid[0]).find('input.form-text:first, textarea:first, select:first').focus();
}
);
}
return valid;
}

function submitForm(form, callback, args) {
if (typeof form == 'string' && !form.match(/#/)) {
form = '#'+ form;
}
var form = $(form);
loadingSubmit(form);

if (checkForm(form)) {
var container_output = $('#'+ form.attr('id') +'-output');
container_output = container_output.length ? container_output: form.find('.form-output');
if (container_output.length) {
container_output.html('');

} else {
container_output = false;
}

$.post(
form.attr('action') + window.location.search, form.serialize() + (args ? '&'+ args: ''),
function(resp) {
if (resp && resp.redirect && !(resp.messages && resp.messages.error && resp.messages.error.length > 0)) {
var dnr = form.attr("data-noreset");
if(typeof dnr =="undefined" || form.attr("data-noreset")!="1"){
resetForm(form);
}
redirect(resp.redirect);
return;
}

setRespMessages(resp, container_output);
enableSubmit(form);

if (resp && resp.callback) {
eval(resp.callback);

} else if (typeof callback != 'undefined' && callback && callback !== true) {
callback(resp, form);

} else if ($('#vote-signup').length > 0) {
redirect(window.location.pathname);
}
}, 'json'
);

} else {
enableSubmit(form);
}
}

function resetForm(form) {
form = $(form);
if (form.length) {
form[0].reset();
form.find('.form-autocomplete').each(function(){

var ac = getAutoComplete($(this).attr('id'));
if (ac) {
ac.clearSelected();
}
});
}
}

function loadingSubmit(form) {
var submit = $(form).find('.form-submit');
if (submit.length) {
submit.attr('original_value', submit.val()).val('Loading...');
}
}

function enableSubmit(form, submit) {
setTimeout(function() {
if (typeof submit == 'undefined') {
submit = $(form).find('.form-submit');
}

submit.removeClass('disabled').find('.spinner').remove();

submit.each(function() {
if ($(this).attr('original_value')) {
$(this).val($(this).attr('original_value'));
}
});
},150
);
}

function isEmail(string) {
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
return reg.test(string);
}

function isUsername(string) {
username = string.match(/([A-Za-z0-9_\-])+/);
return (username && username[0] == string && string.length <= 25 && string.length >= 4);
}

function isUrl(string) {
var urlregex = new RegExp("^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
return urlregex.test(string) ? true: false;
}

function isPhone(string) {
string = phoneFormat(string, true);
var digits = string.match(/\d/g);
if (digits && digits.length < 10) {
return false;
}
return (string.match(/[0-9\-\+\(\)]+/) == string);
}

function isPassword(input) {
if (input.name.match(/_confirm$/)) {
var pass = $(input).parents('.form-content:first').find('input[name='+input.name.replace(/_confirm$/, '')+']');
if (pass.length > 0) {
return (input.value.length >= 6 && input.value == pass.val());
}
return (input.value.length >= 6);

} else {
var confirm = $(input).parent().find('input[name='+input.name+'_confirm]');
if (confirm.length > 0) {
return (input.value.length >= 6 && input.value == confirm.val());
}
return (input.value.length >= 6);
}
}

function numberFormat(number) {
return number.replace(/(\D+)/g, '');
}

function zipFormat(string) {
return numberFormat(string).substr(0,5);
}

function emailFormat(string) {
string = string.replace(/\ /, '');
email = string.match(/^([A-Za-z0-9_\-\.\@])+/);
if (email && email[0]) {
return email[0];
}
return '';
}

function usernameFormat(string, format) {
username = format == 2 ? string.match(/([A-Za-z0-9_\- @.])+/): string.match(/([A-Za-z0-9_\-])+/);
if (username && username[0]) {
return username[0].substr(0, format == 2 ? 30: 25);
}
return '';
}

function urlFormat(string) {
var match = string.match("^(h*t*t*p*s*:*\/*\/*)(.*)");
if (match[0] == match[1] && match[2] == '') {
return string.toLowerCase();
}
if (match[2] != '') {
if (match[1].match(/\/$/)) {
return (match[1] + match[2]).toLowerCase();
}
}
return 'http://'+ (match[2].match(/^w*$/) ? '': 'www.') + match[0].toLowerCase();
}

function phoneFormat(number, clear) {
if (!clear) {
number = number.replace(/^(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,7})(.+|)/g, '($1) $2-$3 ext $4');
number = number.replace(/^1|(\D+)$/g, '');
if (number.length == 4) {
number += ') ';
}

} else {
number = number.replace(/^1|(\D+)/g, '');
}
return number;
}

function checkAvility(input, wait, disable_async) {
var form_item = $(input).parents('.form-item:first');

if (form_inputs['tid'][input.name]) {
clearTimeout(form_inputs['tid'][input.name]);
}
if (!form_item.hasClass('valid')) {
clearItemError(form_item);
}

if (input.value == form_inputs['defaults'][input.name] || input.value == '' || form_item.hasClass('invalid') || form_item.hasClass('required')) {
return;
}

var async = !disable_async;
var valid = false;
var url = '/user/exists/'+ input.value +'?type='+ input.name;
if ($(input).attr('avility')) {
var url = $(input).attr('avility').replace('$', input.value);
}
var check = function () {
$.ajax({
url: url,
async: async,
success: function(avility) {
clearItemError(form_item);
form_item.removeClass('invalid').removeClass('valid');
valid = avility.exists == '0';

form_item.addClass(valid ? 'valid': 'invalid');

if(typeof avility.reason!=='undefined'){
var tooltip = form_item.find('.input_wrapper .tooltip');
var toottip_css = 'style="position:absolute;top:10px;right:10px;color:red;font-size: 11px;padding: 3px;background-color: white !important;background-image: none;box-shadow: none; width:110px; text-align:right;"';
if (valid) {
tooltip.remove();
} else {
form_item.addClass('invalid');
if (!tooltip.length) {
tooltip = $('<span class="tooltip"'+toottip_css+'></span>');
form_item.find('.input_wrapper').append(tooltip);
}
if(typeof avility.reason!=='undefined'){
tooltip.html(avility.reason);
}else{
tooltip.html('Already used.');
}
}
} else {
var tooltip = form_item.find('label.title .tooltip');

if (valid) {
// remove error message
tooltip.remove();

} else {
if (!tooltip.length) {
tooltip = $('<span class="tooltip"></span>');
form_item.find('label.title').append(tooltip);
}

tooltip.html('Already used.');
}
}

}
}, 'json');
}

if (wait && wait == 1) {
check();

} else {
form_inputs['tid'][input.name] = setTimeout(function(){
check();
}, wait ? wait : 1500
);
}
return valid;
}

function attachFormValidateEvents(container, onSubmit, selector) {
if (typeof container == 'undefined') {
var container = 'body';
}

if (typeof selector == 'undefined') {
var selector = 'form.validate';
}

var form = $(container).find(selector);

form.find('.form-text, .form-select, .form-textarea').each(function(){
if ($(this).hasClass('include-label') && !$(this).hasClass('form-autocomplete')) {
if (this.name.match(/password$|^pass$/)) {
form_inputs['defaults'][this.name] = 'Password';

} else if (this.name.match(/_confirm/)) {
form_inputs['defaults'][this.name] = 'Retype '+form_inputs['defaults'][this.name.replace(/_confirm/, '')];

} else {
form_inputs['defaults'][this.name] = $(this).parents('.form-item:first').find('label:last').html().replace(/<(.)*>|: (.)*|:/g,'');
}

if (this.value == '' && !$(this).hasClass('form-select')) {
this.value = form_inputs['defaults'][this.name];
if (this.name.match(/password|^pass$/)) {
try {
this.type = 'text';
} catch (e) {

}
}
}

if (form_inputs['defaults'][this.name] == this.value || this.value == '') {
$(this).addClass('empty');
}
}
if ($(this).hasClass('form-textarea')) {
$(this).parent().addClass('focus-event');
}
}
).keyup(function(e){
if ((e.keyCode == 13 || e.keyCode == 8 || e.keyCode == 32 || (e.keyCode >= 46 && e.keyCode <= 111) || e.keyCode >= 188) && e.keyCode != 92 && e.keyCode != 93) {
if ($(this).hasClass('form-email')) {
this.value = emailFormat(this.value);
if (isEmail(this.value) && $(this).hasClass('check-availability')) {
checkAvility(this);
}

} else if ($(this).hasClass('form-username')) {
this.value = usernameFormat(this.value, 2);
if (isUsername(this.value, 2) && $(this).hasClass('check-availability')) {
checkAvility(this);
}

} else if ($(this).hasClass('form-url')) {
this.value = urlFormat(this.value);

} else if ($(this).hasClass('form-phone')) {
if (e.keyCode == 8 && this.value.length == 5) {
this.value = this.value.substr(0,3);
}
this.value = phoneFormat(phoneFormat(this.value, true));

} else if ($(this).hasClass('check-availability')) {
checkAvility(this);
}
}
}).focus(function(e){
var form_item = $(this).parents('.form-item:first');

if (form_inputs['defaults'][this.name] && form_inputs['defaults'][this.name] == this.value) {
if (this.name.match(/password|^pass$/)) {
try {
this.type = 'password';
} catch (e) {

}

//clear error
clearItemError(form_item);
}
if (!$(this).hasClass('form-select')) {
this.value = '';
}
$(this).removeClass('empty');
}

if ($(this).hasClass('form-textarea')) {
form_item.addClass('focus');
}

clearItemError(form_item);

}).blur(function(e) {
var input = this;
var form_item = $(this).parents('.form-item:first');

if (form_inputs['defaults'][this.name] && (this.value == '' || this.value == form_inputs['defaults'][this.name])) {
if (this.name.match(/password|^pass$/)) {
try {
this.type = 'text';
} catch (e) {

}
}
setTimeout(function() {
input.value = form_inputs['defaults'][input.name];
$(input).addClass('empty');
},150
);

} else {
var form = $(this).parents('form:first');
var required = form_item.find('span.form-required').length > 0;

checkFromItem(form, this, false, required, true);
}

if ($(this).hasClass('form-textarea')) {
form_item.removeClass('focus');
}
});

form.find('.form-radios.v2 label.option, .form-checkboxes.v2 label.option').attr('for', '').click(function() {
var input = $(this).find('input');
if (input.hasClass('form-radio')) {
$(this).parents('.form-radios.v2:first').find('label.option').removeClass('checked');
$(this).addClass('checked');
input.attr('checked', true);

} else {
input.attr('checked', input.is(':checked') ? false: true);
input.is(':checked') ? $(this).addClass('checked'): $(this).removeClass('checked');
}
}
);

form.find('.form-export').click(function(){
var form = $(this).parents('form:first');
var val = $(this).attr('export') ? $(this).attr('export'): 1;
if (checkForm(form)) {
var action = form.attr('action');
redirect(action +'?'+ form.serialize() +'&export='+ val, true);
}
});

form.find('.form-autocomplete:not(.processed)').each(function(){
var id = $(this).attr('id');
if (autocomplete_settings[id]) {
new autoComplete(id, autocomplete_settings[id]);
}
});

form.find('.form-colorpicker').each(function(){
var cp = $(this);
var item = cp.parents('.form-item:first');
var cpicon = item.find('.colorpicker-icon');
var mirrow_element = cp.attr('mirrow_element') || false;

item.find('.colorpicker .farbtastic-wrapper').farbtastic(this, function(e, background, color){
$(e).css({background: '', color: ''});
cpicon.css({backgroundColor: background});
if (mirrow_element) {
$(mirrow_element).css({backgroundColor: background});
}
});

var showf = function() {
if (!item.find('.colorpicker').is(':visible')) {
$('.colorpicker').hide();
$('.colorpicker-icon').removeClass('focus');
cp.focus();
cpicon.addClass('focus');
item.find('.colorpicker').show();
} else {
cpicon.removeClass('focus');
item.find('.colorpicker').hide();
}
}

cp.click(showf);
item.find('.colorpicker-icon').click(showf);
item.find('.colorpicker .x').click(function(){
$(this).parent().hide();
$('.colorpicker-icon').removeClass('focus');
});
});

form.find('.button').click(function() {
if (!$(this).hasClass('no-disabled') && !$(this).hasClass('form-export') && !$(this).parent().hasClass('dropdown')) {
var button = $(this);
setTimeout(function() {
button.addClass('disabled');
if (button.is('a')) {
button.prepend('<span class="icon spinner"></span>');
} else {
button.blur();
}
}, 10
);
}
}
);

form.find('.nopaste').keydown(function(e){
if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) return false;
}).bind('contextmenu',function(e){
return false;
});

form.submit(function(e) {
var form = $(this);
var valid = true;

form.find('.colorpicker').hide();

if (!form.hasClass('validated') && !form.hasClass('prevent-default')) {
if (form.find('.form-submit').hasClass('disabled')) {
e.preventDefault();
valid = false;
alert('Please wait!');

} else if (form.hasClass('ajax-form')) {
e.preventDefault();
submitForm(form, onSubmit);
return;

} else if (!checkForm(this)) {
e.preventDefault();
valid = false;
enableSubmit(form);
}
}

if (typeof onSubmit != 'undefined') {
return onSubmit(e, form, valid);
}
});
}

(function($){
$.fn.serializeJSON=function() {
var json = {};
jQuery.map($(this).serializeArray(), function(n, i){
json[n['name']] = n['value'];
});
return json;
};
})(jQuery);

$(document).ready(function(){
attachFormValidateEvents();
});

var ctrlDown = false;
var ctrlKey = 17, vKey = 86, cKey = 67, mKey=224, ggKey=91;
$(document).keydown(function(e){
if (e.keyCode == ctrlKey || e.keyCode == mKey || e.keyCode == ggKey) ctrlDown = true;
}).keyup(function(e){
if (e.keyCode == ctrlKey || e.keyCode == mKey || e.keyCode == ggKey) ctrlDown = false;
});function attachTooltipEvent(container) {
if (typeof container == 'undefined') {
var container = document;
}

$(container).find('.tooltip-description.all .description, .tooltip-description > .description, .tooltip-description .form-item > .description, .tooltip-description .match_left > .description').each(function(){
var description = this;
if (!$(description).parent().hasClass('no-tooltip') && !$(description).parent().hasClass('hide-tooltip') && $(description).html() != '') {
if ($(description).hasClass('description-tipsy')) {
$(description).parent().tipsy({
title: function() {
return $(description).html().replace('&amp;', '&');
}
});
} else {
var settings = $(description).hasClass('qtipx') ? {
extraClass: 'pretty',
top: -15,
left: 5,
track: false,
focus: true
} : {
extraClass: null,
top: 15,
left: 15,
track: true,
focus: false
};
/*var maxWidth = settings.extraClass ? 260 : 400;
var descriptionWidth = settings.extraClass ? 260 : $(description).width();
settings.left = 15; //(descriptionWidth > maxWidth) ? -(maxWidth/2) : -(descriptionWidth/2);*/

$(description).parent().tooltip({
track: settings.track,
focus: settings.focus,
top: settings.top,
extraClass: settings.extraClass,
left: settings.left,
bodyHandler: function() 
{
return $(description).html().replace('&amp;', '&');
}
});
}
}
});
}

$(document).ready(function(){
// tooltip stuff
attachTooltipEvent();
});
// ******************* */
//FAVORITE ICON
// ****************** */
function setFavorite(media_id, favorite, onComplete) {
$.post(
'/photo/'+ (favorite ? 'favorite': 'unfavorite') +'/'+ media_id,
function(data) {
if (onComplete) {
onComplete();
}
}
);
}

function favorite(media_id, onComplete) {
setFavorite(media_id, true, onComplete);
}

function unfavorite(media_id, onComplete) {
setFavorite(media_id, false, onComplete);
}

function objToString (obj) {
var str = '';
for (var p in obj) {
if (obj.hasOwnProperty(p)) {
str += p + '::' + obj[p] + '\n';
}
}
return str;
}


$(document).ready(function(){
$('a.favorite').on("click",function(e) {
e.preventDefault();
var button = this;

if (logged()) { 
if (!$(button).hasClass('disabled')) {
var media_id = $(button).attr('media_id');

if ($(button).hasClass('not')) {
unfavorite(media_id, function(){
$(button).removeClass('not');
$(button).removeClass('disabled').removeClass('unfavorite');
$(button).attr('title', 'Favorite');

$(button).animate({opacity:'0'},"slow",function(){
$(button).html("Favorite");}
).animate({opacity:'1'},"slow");

}
);

} else {
favorite(media_id, function(){
$(button).addClass('not unfavorite');
$(button).removeClass('disabled');
$(button).attr('title', 'Unfavorite');
$(button).animate({opacity:'0'},"slow",function(){
$(button).html("Faved");}
).animate({opacity:'1'},"slow");
}
);
}

} else {
alert('Please wait!');
}
}

});

$(document).on("click",'.vblikes-button',function(e) {
e.preventDefault(); 

if (signupPopup() && !$(this).hasClass("disabled")){
var media_id = $(this).attr("data-id");
var this_obj = $(this);
var like_obj = this_obj.parent().parent().find(".vblikes-num>span");
var likes = $(like_obj).text();
//var spanlike = this_obj.find("span");

this_obj.addClass("disabled");

if($(this).hasClass("vbawarded-like")){
//view rev 9573 to add unlike
this_obj.removeClass("disabled");
}
else{
$(this_obj).addClass("vbawarded-like");
$(this_obj).addClass("vbawarded");
//$(spanlike).addClass("vbliked");
var total_txt = $(this).find('.mask-text');
if(total_txt.html().indexOf("K") > -1) {
} else {
total_txt.html( parseInt(total_txt.html()) + 1);
}

if($(this).attr('data-callback') == 'wallToolCallback' && $('#like-' + $(this).attr('data-media-id')).length > 0) {
$('#like-' + $(this).attr('data-media-id')).html( total_txt.html() );
}

this_obj.removeClass("disabled");

//Post like
$.ajax({
 type: "POST",
 url: '/photo/like/' + media_id,
 success: function (data) {
console.log("favorite-live like");
console.log(data.success);

if(data.success==1 ){ }
else{
 if(typeof data.message != "undefined" && data.message!=''){
alert(data.message);
 }
 else if(typeof data.error != "undefined" && data.error!=""){
 alert(data.error);
 }
}

 }
});

if($(this_obj).attr("data-callback") != null && $(this_obj).attr("data-callback") != ""){
var fn = window[$(this_obj).attr("data-callback")];
if(typeof fn == "function"){
fn("",this_obj);
}

}
}
}
});

addLikeEvents();


});

function addLikeEvents() {
$(".vblikes-button.like-action").off().on("click",function(e){
e.preventDefault();
if (signupPopup() && !$(this).hasClass("disabled")){
var media_id = $(this).attr("data-media-id");
var this_obj = $(this);
var like_obj = this_obj.parent().parent().find(".vblikes-num>span");
var likes = $(like_obj).text();
//var spanlike = this_obj.find("span");

this_obj.addClass("disabled");

if($(this).hasClass("vbliked")){
//view rev 9573 to add unlike
this_obj.removeClass("disabled");
}
else{
$(this_obj).addClass("vbliked");
//$(spanlike).addClass("vbliked");
var total_txt = $(this).find('.mask-text');
if(total_txt.html().indexOf("K") > -1) {
} else {
total_txt.html( parseInt(total_txt.html()) + 1);
}

if($(this).attr('data-callback') == 'wallToolCallback' && $('#like-' + $(this).attr('data-media-id')).length > 0) {
$('#like-' + $(this).attr('data-media-id')).html( total_txt.html() );
}

/*
likes = parseInt(likes) + 1;
like_obj.parent().parent().show('slow');
$(like_obj).fadeOut('slow',function(){
$(like_obj).text(likes); 
}).fadeIn(1000) ;
*/

this_obj.removeClass("disabled");

//Post like
$.ajax({
type: "POST",
url: '/photo/like/' + media_id,
success: function (data) {
if(data.success==1 ){ }
else{
if(typeof data.message != "undefined" && data.message!=''){
alert(data.message);
}
else if(typeof data.error != "undefined" && data.error!=""){
alert(data.error);
}
}

}
});

//window.location.href

/*$.ajax({
type: "POST",
url: '/photo/saveurl/' + media_id,
data: { url: objToString(e) },
success: function (data) {
console.log(data);
}
});*/

if($(this_obj).attr("data-callback") != null && $(this_obj).attr("data-callback") != ""){
var fn = window[$(this_obj).attr("data-callback")];
if(typeof fn == "function"){
fn("",this_obj);
}

}
}
}
});

$(".vblikes-button").removeClass('like-action');
if(typeof attachMasqueradeGalleryEvents === 'function'){
attachMasqueradeGalleryEvents();
}

$(".remove-fame").on("click",function(e){
e.preventDefault();

//return true;
var thisP = $(this);
var media_id = thisP.attr("data-media-id");

$.ajax({
type: "POST", url: 'https://www.viewbug.com/photo/removefame', data: { media_id: media_id },
success: function (data) {
thisP.parent().parent().parent().parent().parent().parent().remove();
}
});
});
}

$(".social-icons").on("mouseenter",function(e){
$(this).addClass("opacity");
});

$(".social-icons").on("mouseleave",function(e){
$(this).removeClass("opacity");
});
function switchPhoto(key) {
var popup = $('.popup.photo');

if(!popSlideshow[key] || !popSlideshow[key].file){
return;
}

if (!popup.hasClass('onrequest')) {
popup.addClass('onrequest');
popup.addClass('loading');

var imageContainer = popup.find('.photo div');

var image = popup.find('.photo div');



var width = popup.find('.cache .'+key).width();
var height = popup.find('.cache .'+key).height();


/* FIX BORDER */
var background = image.css("background");
var imageUrl = popSlideshow[key].file;

var imgPhoto = new Image(); 
imgPhoto.onload = function(){
width = imgPhoto.width;
height = imgPhoto.height;

popPhotoWidth = width;
popPhotoHeight = height;

image.width(width);
image.height(height);

popup.find('.container').animate({
width: width,
height: height,
marginLeft: (width/2)*-1
}
);

};
imgPhoto.src = imageUrl;
/* ****** */

popPhotoWidth = width;
popPhotoHeight = height;

image.width(width);
image.height(height);

popup.find('.container').animate({
width: width,
height: height,
marginLeft: (width/2)*-1
}
);

image.css('background-image', 'url(' + popSlideshow[key].file + ')');

var updatePhoto = function(navigation) {
if (navigation.prev){
popup.find('.arrow.left').removeClass('hide');
} else {
popup.find('.arrow.left').addClass('hide');
}

if (navigation.next){
popup.find('.arrow.right').removeClass('hide');
} else {
popup.find('.arrow.right').addClass('hide');
}

popSlideshow.prev = navigation.prev;
popSlideshow.next = navigation.next;
popSlideshow.current = navigation.current;

if (popSlideshow.prev != null && popSlideshow.prev.file) {
popup.find('.cache .prev').attr('src', popSlideshow.prev.file);
}
if (popSlideshow.next != null && popSlideshow.next.file) {
popup.find('.cache .next').attr('src', popSlideshow.next.file);
}
popup.removeClass('onrequest');

// remove loading by force
setTimeout(function(){
popup.removeClass('loading');
}, 500);
}


if (false && popSlideshow.cache[popSlideshow[key].id]) {
updatePhoto(popSlideshow.cache[popSlideshow[key].id]);

} else {
var popSlideUrl = popSlideshow.url.replace('[ID]', popSlideshow[key].id) +'/navigation';
if(typeof popSlideshow.ignore_id !=="undefined" && popSlideshow.ignore_id){
popSlideUrl = popSlideshow.url.replace(popSlideshow.current.id, popSlideshow[key].id) +'/navigation';
}
$.get(
popSlideUrl,
function(resp){
if(window.innerWidth > 1200){
resp['current']['file']= resp['current']['file'].replace("_large.","_large1300.");
if(resp['prev']['file']!=null) { resp['prev']['file']= popSlideshow['prev']['file'].replace("_large.","_large1300."); }
if(resp['next']['file']!=null) { resp['next']['file']= popSlideshow['next']['file'].replace("_large.","_large1300.");}
}
//var navigation = resp;
popSlideshow.cache[popSlideshow[key].id] = resp;
updatePhoto(popSlideshow.cache[popSlideshow[key].id]);
}
);
}
}
}

function popPhotoSlideshow() {
if (!popSlideshow.current) {
return;
}
$('#photo_slideshow').remove();

var html = '<div class="block-photo">'+
//'<loading class="photo"></loading>'+
'<div class="cache">'+
'<img class="prev" src="'+ (popSlideshow.prev ? popSlideshow.prev.file: '') +'">'+
'<img class="next" src="'+ (popSlideshow.next ? popSlideshow.next.file: '') +'">'+
'<img class="current" src="'+ popSlideshow.current.file +'">'+
'</div>'+
'<div media_id="'+ popSlideshow.current.id +'" class="protect-photo"></div>'+
'<div class="photo">'+
'<img alt="Photo" style="max-width: 926px" src="'+ popSlideshow.current.file +'">'+
'</div>'+
'</div>'+
'<div class="navigation">'+
'<a href="javascript:" class="arrow left"><span></span></a><a href="javascript:" class="arrow right"><span></span></a>'+
'</div>';

popup = popMessage('', html, function(){
if (popSlideshow.original && popSlideshow.original.id != popSlideshow.current.id){
window.location.href = popSlideshow.url.replace('[ID]', popSlideshow.current.id);
}
}, 'photo', true);

if (popup) {
popup.attr('id', 'photo_slideshow');
popup.addClass('loading');
var image = popup.find('.photo img');
image.on('load',function() {
popup.removeClass('loading');

});

var imagecurrent = popup.find('.cache .current');
imagecurrent.on('load',function() {
var width = imagecurrent.width();
popup.find('.container').css('width', width).css('margin-left', (width/2)*-1);
popup.find('.cache .current').remove();
});

if (popSlideshow.prev){
$('.arrow.left').removeClass('hide');
} else {
$('.arrow.left').addClass('hide');
}

if (popSlideshow.next){
$('.arrow.right').removeClass('hide');
} else {
$('.arrow.right').addClass('hide');
}

$('.arrow.right').on('click', function(){
switchPhoto('next');
});
$('.arrow.left').on('click', function(){
switchPhoto('prev');
});
}
return popup;
}

function popPhotoSlideshowPhoto() {
if (!popSlideshow.current) {
return;
}
$('#photo_slideshow').remove();

popPhotoWidth = $("#main_image").width();
popPhotoHeight = $("#main_image").height();

if(popPhotoWidth==null || typeof popPhotoWidth =="undefined"){
var img = new Image();
img.onload = function() { 
$(".block-photo > .photo > div").css("width",img.width).css("height",img.height) 
};
img.src = popSlideshow.current.file;
popPhotoWidth = 600;
popPhotoHeight = 600;
}

var html = ''+
'<div class="block-photo">'+
'<div class="cache">'+
'<img class="prev" src="'+ (popSlideshow.prev ? popSlideshow.prev.file: '') +'">'+
'<img class="next" src="'+ (popSlideshow.next ? popSlideshow.next.file: '') +'">'+
'<img class="current" src="'+ popSlideshow.current.file +'">'+
'</div>'+
'<div media_id="'+ popSlideshow.current.id +'" class="protect-photo"></div>'+
'<div class="photo"><div style="width: ' + popPhotoWidth + 'px; height:' + popPhotoHeight + 'px; background:url(' + popSlideshow.current.file + ') center top no-repeat;"></div></div>'+
'</div>';

popup = popMessage('', html, function(){}, 'photo', true);

if (popup) {
popup.attr('id', 'photo_slideshow');
popup.addClass('loading');
var image = popup.find('.photo div');
image.on('load',function() {
popup.removeClass('loading');

});

var imagecurrent = popup.find('.cache .current');
imagecurrent.on('load',function() {
var width = imagecurrent.width();
popup.find('.container').css('width', width).css('margin-left', (width/2)*-1);
popup.find('.cache .current').remove();
});

if (popSlideshow.prev && popSlideshow.prev.file && popSlideshow.prev.file != "/media/" ){
$('.arrow.left').removeClass('hide');
} else {
$('.arrow.left').addClass('hide');
}

if (popSlideshow.next && popSlideshow.next.file && popSlideshow.next.file != "/media/"){
$('.arrow.right').removeClass('hide');
} else {
$('.arrow.right').addClass('hide');
}

$('.arrow.right').on('click', function(){
switchPhoto('next');
});
$('.arrow.left').on('click', function(){
switchPhoto('prev');
});
}

$(".popupx.main-popupx.popupxd").hide();

if(!isMobile.any() ) {
var screenHeigth = window.screen.availHeight;
//var margin_top = window.screen.height/10;
var max_height = screenHeigth - (margin_top*2);
$(".popup.photo .container").css("width", "auto");
}
return popup;
}

var popPhotoWidth;
var popPhotoHeight;

$(document).ready(function(){
//$('.play.slideshow').on('click', function(e){
$('#profile_wrapper').on('click', '.play.slideshow', function(e){
//popPhotoSlideshowPhoto();
fancybox(e);
$('.mobile .slideshow-arrows').show();
});

$('.slideshow-arrows.slide-next').on('click', function(e){
moveFancyPhoto({ which: 39 });
$.fancybox.prev();
});

$('.slideshow-arrows.slide-prev').on('click', function(e){
moveFancyPhoto({ which: 37 });
$.fancybox.next();
});
});

$(window).on('load', function() {
popPhotoWidth = $("#main_image").width();
popPhotoHeight = $("#main_image").height();
});


var isMobile = {
Android: function() {
return navigator.userAgent.match(/Android/i);
},
BlackBerry: function() {
return navigator.userAgent.match(/BlackBerry/i);
},
iOS: function() {
return navigator.userAgent.match(/iPhone|iPad|iPod/i);
},
Opera: function() {
return navigator.userAgent.match(/Opera Mini/i);
},
Windows: function() {
return navigator.userAgent.match(/IEMobile/i);
},
any: function() {
return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
}
};



/*** FANCY BOX ****/
var key ="prev";

function fancybox(e){

initFancy();

doMoveFancyPhoto("current",true);

e.preventDefault();
return false;
}

function moveFancyPhoto(e){

key ="next";
if(e.which!=39){
key ="prev";
}

doMoveFancyPhoto(key,false);

return false;
}

function doMoveFancyPhoto(pos,doclick){

if(typeof popSlideshow=="undefined" || popSlideshow[pos]==null || !popSlideshow[pos].file){
return;
}

if((typeof view_adult != "undefined" && (!view_adult) ) && popSlideshow[pos].adult==1 ) {

doclick = false;
if($('.main_content .popup.parental').length>0 && $('.main_content .popup.parental').length>0){
$.fancybox.close();
$('.main_content .popup.parental').show();

return false;
}

}

if(doclick===true )
{
$("#pi_" + popSlideshow[pos].id).trigger('click');
}

var popSlideUrl = popSlideshow.url.replace('[ID]', popSlideshow[pos].id) +'/navigation';
if(typeof popSlideshow.ignore_id !=="undefined" && popSlideshow.ignore_id){
popSlideUrl = popSlideshow.url.replace(popSlideshow.original.id, popSlideshow[pos].id) +'/navigation';
}

$.ajax({
url: popSlideUrl, //popSlideshow.url.replace('[ID]', popSlideshow[pos].id) +'/navigation',
success: (function(resp){
console.log(resp);
//var navigation = resp;
popSlideshow.cache[popSlideshow[pos].id] = resp;
updateFancyPhoto(resp,doclick);

if(typeof resp.current !== "undefined" && resp.current.watermark!=null){
if($("#watermark-photo").length <1){
$("body").append('<div id="watermark-photo" style="display:none;"><img /></div>');
}
$(".fancybox-inner").append($("#watermark-photo").clone());
$(".fancybox-inner").find("#watermark-photo").attr("id",'watermark-photo-slideshow');


$("#watermark-photo-slideshow").attr("class",'').addClass("watpos" + resp.current.watermark.position);
$("#watermark-photo-slideshow").show().find("img").attr("src",'/media/' + resp.current.watermark.file);
}
})
});
}

var isFancyFirst=true;
function updateFancyPhoto(navigation,doclick) {
if(typeof navigation != "undefined" && navigation!=null && typeof navigation.current ==='undefined'){
navigation = JSON.parse(navigation);
}
if(window.innerWidth > 1200){
navigation.current.file = navigation.current.file.replace("_large.","_large1300.");
if(navigation.prev!=null) { navigation.prev.file = navigation.prev.file.replace("_large.","_large1300."); }
if(navigation.next!=null) { navigation.next.file = navigation.next.file.replace("_large.","_large1300.");}
}


popSlideshow.prev = navigation.prev;
popSlideshow.next = navigation.next;
popSlideshow.current = navigation.current;

var id=0;
id = navigation.current['id'];

$('.preloaded').remove();

if(popSlideshow.next!=null){
id = popSlideshow.next['id'];

if(typeof id !="undefined" && $("#pi_" +id).length==0){
$("#fancy_container").prepend("<a href='" + popSlideshow.next['file'] + "' class='fancyphotos' id='pi_" + id + "' rel='gallery'><img class='preloaded' data-src='" + popSlideshow.next['file'] + "'></a>");
$.fancybox.group.unshift( ({href:popSlideshow.next['file'], type:'image',isDom:true , data_id: id }));

if(doclick!==true && !isFancyFirst){
$("#pi_" + id).trigger('click'); //Force load new photos
}else{ //HACKdouble click ? second image is skipped
isFancyFirst=false;
}

}
}

if(popSlideshow.prev!=null){
id=popSlideshow.prev['id']
if(typeof id !="undefined" && $("#pi_" + id).length==0){
$("#fancy_container").append("<a href='" + popSlideshow.prev['file'] + "' class='fancyphotos' id='pi_" + id + "' rel='gallery'><img class='preloaded' data-src='" + popSlideshow.prev['file'] + "'></a>");
$.fancybox.group.push(({href:popSlideshow.prev['file'], type:'image',isDom:true, data_id: id}));
} 
}
}


$(document).ready(function(){
if($.fn.fancybox){
$(".fancyphotos").fancybox({
loop: false,
arrows:false,
closeBtn:false,
autoWidth:true,
nextEffect:'none',
prevEffect: 'none',
openEffect: 'none',
mouseWheel:false,
preload:0,
scrollOutside:false,
 }); // fancybox

$(".fancybox-inner").on("click",function(e){
var url = $(".fancybox-image").attr("style").replace("background-image:url(","").replace(");background-size:100%;","");

var id = url.substring(url.lastIndexOf("/") + 1, url.lastIndexOf(".")).replace("_large1300","").replace("_large","").replace("_medium","");

var new_location = popSlideshow.url.replace('[ID]', id);
if(typeof popSlideshow.ignore_id !=="undefined" && popSlideshow.ignore_id){
new_location = popSlideshow.url.replace(popSlideshow.original.id, id) ;
}

//Contest fix
new_location = new_location.replace("/navigation","");
new_location = new_location.replace("?navigation&","");

window.location = new_location;

e.preventDefault();
return false;
});
}

}); // readyâ€‹â€‹

function initLazyFancy(){
if($("body").hasClass("fancybox")){

$("body").append("<div id='fancy_container'style='display:none;'></div>");


if(typeof popSlideshow!="undefined" && popSlideshow!=null){

if($(".preloaded").length==0){
if(popSlideshow.next!=null){
$("#fancy_container").append("<a href='" + popSlideshow.next['file'] + "' class='fancyphotos' id='pi_" + popSlideshow.next['id'] +"' data-id='" + popSlideshow.next['id'] +"' rel='gallery'><img class='preloaded lazy delayed' data-src='" + popSlideshow.next['file'] + "'></a>");
}

$("#fancy_container").append("<a href='" + popSlideshow.current['file'] + "' class='fancyphotos' id='pi_" + popSlideshow.current['id'] +"' data-id='" + popSlideshow.current['id'] +"' rel='gallery'>11</a>");

if(popSlideshow.prev!=null){
$("#fancy_container").append("<a href='" + popSlideshow.prev['file'] + "' class='fancyphotos' id='pi_" + popSlideshow.prev['id'] + "' data-id='" + popSlideshow.prev['id'] + "' rel='gallery'><img class='preloaded lazy delayed' data-src='" + popSlideshow.prev['file'] + "'></a>");
}
}
}
}
}

function initFancy(){

if($("body").hasClass("profile")){
return initLazyFancy();
}

if($("body").hasClass("fancybox")){

if($("#fancy_container").length ==0){
$("body").append("<div id='fancy_container'style='display:none;'></div>");


if(typeof popSlideshow!="undefined" && popSlideshow!=null){

if($(".preloaded").length==0 ){
if(popSlideshow.next!=null && typeof popSlideshow.next['id']!= "undefined"){
$("#fancy_container").append("<a href='" + popSlideshow.next['file'] + "' class='fancyphotos' id='pi_" + popSlideshow.next['id'] +"' data-id='" + popSlideshow.next['id'] +"' rel='gallery'><img class='preloaded' data-src='" + popSlideshow.next['file'] + "'></a>");
}
$("#fancy_container").append("<a href='" + popSlideshow.current['file'] + "' class='fancyphotos' id='pi_" + popSlideshow.current['id'] +"' data-id='" + popSlideshow.current['id'] +"' rel='gallery'></a>");
if(popSlideshow.prev!=null && typeof popSlideshow.prev['id']!= "undefined"){
$("#fancy_container").append("<a href='" + popSlideshow.prev['file'] + "' class='fancyphotos' id='pi_" + popSlideshow.prev['id'] + "' data-id='" + popSlideshow.prev['id'] + "' rel='gallery'><img class='preloaded' data-src='" + popSlideshow.prev['file'] + "'></a>");
}
}


}
}
}
}

initFancy();
window.fbAsyncInit = function() {
FB.init({
appId: fb_api_id,
autoLogAppEvents : true,
status: true,
xfbml: true,
version: 'v3.2' 
});
};

// Load the SDK asynchronously
(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) {return;}
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));

function fbPost(message, link) {
alert("Function not available at the moment.");
return;
}

function doFbTask(onComplete,scope){
if (typeof scope == 'undefined') {
scope = 'email,public_profile';//,user_photos,friends_photos,';
}
var url = document.location.href;

var hash = document.location.hash;
if(hash =="#email" && url.indexOf("?fb")===-1){/*signup*/
return;
}

FB.login(function(response) {
if (response.authResponse) {
if (typeof onComplete != 'undefined') {
onComplete(response);
}
else{
//FB.api('/me', {fields: 'email,name,first_name,last_name'}, signupUpdate);
signupUpdate({id:response.authResponse.userID});
}
} else {
var url = document.location.href;
var hash = url.substring(url.indexOf("/user/"));
hash = hash.replace("#email",'').replace("?fb",'');

if(hash !="/user/welcome"){
alert('You cancelled login or did\n not fully authorize.');
}
}
}, {scope: scope});
}

var fbTask_timeout;
var fbTask_max_tries = 1;
function fbTask(onComplete, scope) {

if(typeof FB === "undefined"){
if(fbTask_max_tries-- <0){
clearTimeout(fbTask_timeout);
alert("Can't connect with facebook.");
}
else {
fbTask_timeout = setTimeout('fbTask()', 2000);
}

} else{
clearTimeout(fbTask_timeout);
doFbTask(onComplete, scope);
}

}

function readCookie(name) {
var cookiename = name + '=';
var ca = document.cookie.split(';');
for(var i=0;i < ca.length;i++) {
var c = ca[i];
while (c.charAt(0)==' ') c = c.substring(1,c.length);
if (c.indexOf(cookiename) == 0) return c.substring(cookiename.length,c.length);
}
return null;
}
var search_txt = '';
var waitBtn = false;
var search_txt = '';
var searchTimer;

function navActions() {
waitBtn = false;
navClickActions();

$('.join-search-click input').keyup(function() {
clearInterval(searchTimer);
search_txt = $(this).val();

searchTimer = setTimeout(function(){
clearInterval(searchTimer);
var url = '/contests/join-search';
var user_pho = entryList.join(",");

if(search_txt.length > 0) {
$.ajax({
type: "POST",
url: url,
data: { search: search_txt, user_photos:user_pho },
success: function(data) {
reloadJoinGallery(data);

if (typeof addAvatarActions == 'function') {
addAvatarActions();
}

if (typeof addSlideshowActions == 'function') {
addSlideshowActions();
addSlideshowSelected();
}

navClickActions();
}
});
} else {
$.ajax({
type: "POST",
url: url,
data: { user_photos:user_pho },
success: function(data) {
reloadJoinGallery(data);

if (typeof addAvatarActions == 'function') {
addAvatarActions();
}

if (typeof addSlideshowActions == 'function') {
addSlideshowActions();
addSlideshowSelected();
}

navClickActions();
}
});
}
}, 750);
});

addCancelPopup(', .join-buttons .join-cancel');
resizePhotosBox();

$(window).resize(function() {
resizePhotosBox();
});
}

function navClickActions() {
$('.join-thumbs-content').off().scroll(function() {
if(!waitBtn) {
var thisY = $(this).scrollTop();
var jH = $('.join-thumbs').height();
var gH = $('.join-thumbs-content .join-gallery').height();

if((thisY + jH + 50) >= gH) {
if($('.join-gallery .join-album').length == 0) {
waitBtn = true;
}

$('.join-pager .box-pager a.next').click();
}
}
});

$('.join-pager .box-pager a, .join-view-all, .join-by-album').off().on('click', function(event) {
event.preventDefault();

if($(this).hasClass('join-view-all') || $(this).hasClass('join-by-album')) {
$('.default-selected').removeClass('default-selected');
$(this).addClass('default-selected');
}

if($(this).hasClass('join-view-all') || $(this).hasClass('join-by-album')) {
$('.join-search-click input').val('');
search_txt = '';
}
var url = $(this).attr('href').replace(/#/,'');
var user_pho = entryList.join(",");

var addThis = false;
if($(this).parent().hasClass('box-pager')) {
addThis = true;

if($('.join-gallery .join-album').length == 0) {
$('.join-loader').show();
}
}

$.ajax({
type: "POST",
url: url,
data: { search: search_txt, user_photos:user_pho },
success: function(data) {
reloadJoinGallery(data, addThis);

if (typeof addAvatarActions == 'function') {
addAvatarActions();
}

if (typeof addSlideshowActions == 'function') {
addSlideshowActions();
addSlideshowSelected();
}

navClickActions();
}
});
});
}

function reloadJoinGallery(data, addThis) {
$('#join-temp-load').html(data);

$('.join-pager').html('');

if(addThis) {
$('.join-thumbs-content .join-gallery').append( $('#join-temp-load .join-search-gallery .join-gallery div') );

$('.join-thumbs-content .join-gallery div img.img-loading').one("load", function() {
$(this).removeClass('img-loading');

if($('.join-thumbs-content .join-gallery div img.img-loading').length == 0) {
$('.join-loader').hide();
waitBtn = false;
}

}).on('error', function() {
$(this).removeClass('img-loading');

if($('.join-thumbs-content .join-gallery div img.img-loading').length == 0) {
$('.join-loader').hide();
waitBtn = false;
}

}).each(function() {
if(this.complete) $(this).trigger('load');
});

} else {
$('.join-thumbs-content').html('');
$('.join-thumbs-content').append( $('#join-temp-load .join-search-gallery .join-gallery') ).append( $('#join-temp-load .join-search-gallery .join-loader') );
$('.join-thumbs-content').animate({ scrollTop: 0 }, 0);
waitBtn = false;
}

$('.join-pager').append( $('#join-temp-load .join-search-pager .box-pager') );
}

function checkChanges() {
var totalFinal = entryList.length;
var change = false;

if(!CheckNoAdded(totalFinal) && !checkSamePhotos(totalFinal)) { // check if added or changed photos
change = true; // different photos
}

if(change) {
$('.join-add').removeClass('join-disabled');
} else {
$('.join-add').addClass('join-disabled');
}
}

function CheckNoAdded(totalFinal) {
return (totalOriginal == 0 && totalFinal == 0 ? true : false);
}

function checkSamePhotos(totalFinal) {
if(totalOriginal == totalFinal) {
// checking if the current photos are the original photos
var noDeleted = $(originalEntryList).not( $(originalEntryList).not(entryList).get() ).get();

if(noDeleted.join(',') == originalEntryList.join(',')) {
// the same photos
return true;
} else {
// different photos
return false;
}

} else {
// different photos
return false;
}
}

function resizePhotosBox() {
if($('#popup-clear-main .join-thumbs').length > 0) {
var searchText = 0;

if($('.join-search-text').length > 0) {
searchText = $('.join-search-text').outerHeight();
}

var botton_size = $('.join-search').outerHeight() + searchText + $('.join-contest-photos').outerHeight() + 60;
$('.join-thumbs').height($(window).height() - botton_size);
}
}

function addCancelPopup(others) {
$(popupBg + others).click(function() {
$(popupBg + ", " + main).fadeOut(800, function() {
$(main).html('');
});

$('body').css({ overflow:'auto' });
$('.mobile #wrapper').css({ overflow:'auto', position:'relative' });
});
}//Add body lazy tag - to remove overflow to gallery
$("body").addClass("delayedlazy");
$(".box-pager").css("clear","both");

var setLazy = function() {


$(window).scroll(function(d,h) {
var tiles = $('.lazy');
var hasItems = false;
tiles.each(function(i) {
a = ($(this).offset().top+ $(this).height())/2.5;
b = $(window).scrollTop() + $(window).height();
if (a < b ) {
hasItems = true;
$(this).fadeTo(500,1);
var src = $(this).attr("data-src");
if(typeof src!="undefined" && src.length>0){
$(this).attr("src",src);
$(this).attr("data-src","");
$(this).removeAttr("data-src");
//$(this).removeAttr("height");
$(this).removeClass("lazy");
}
}
});
if(hasItems){
if(typeof(reHeight) == "function"){
reHeight();
}
}
});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
var tiles = $('.lazy');
var hasItems = false;
tiles.each(function(i) {
hasItems= true;
$(this).fadeTo(500,1);
if(i<5){
var src = $(this).attr("data-src");
if(typeof src!="undefined" && src.length>0){
$(this).attr("src",src);
$(this).attr("data-src","");
$(this).removeAttr("data-src");
//$(this).removeAttr("height");
$(this).removeClass("lazy");
}
}
});
if(hasItems){
if(typeof(reHeight) == "function"){
reHeight();
}
}
}
function inWindow(s){
 var scrollTop = $(window).scrollTop();
 var windowHeight = $(window).height();
 var currentEls = $(s);
 var result = [];
 currentEls.each(function(){
var el = $(this);
var offset = el.offset();
if(scrollTop <= offset.top && (el.height() + offset.top) < (scrollTop + windowHeight))
result.push(this);

 });
 return $(result);
}

$(".delayedban").animate({opacity:1},function(){ $(this).removeClass('delayedban'); });

inWindow('.lazy').fadeTo(0,1);
if(typeof(reHeight) == "function"){
reHeight();
}
}


$(document).ready( function() {
setLazy();
});
var share_link = null;


function toggleContext(only_show, e) {

if (!only_show && !$("#toggleContext").is(':visible')) {

$("#toggleContext").css("top", e.clientY);
$("#toggleContext").css("left", e.clientX);


$("#toggleContext").show();

} else {
$("#toggleContext").hide();
}
}

$("body.photopage").bind("contextmenu", function(e) {
// Stop the context menu
toggleContext(true);
e.preventDefault();
});
$("body.photopage").bind("click", function(e) {
// Stop the context menu
toggleContext(true);
});

var currThumb = null;

$(document).ready(function(){
$(document).on('click','#signup-popup-gall .corner-close', function(e) {
$('body').css({ overflow:'' });
$('#signup-popup-gall, #signup-popup-bg-gall').fadeOut(500);
});

if($('.photo-wrapper .photo.parental').length > 0) {
removeImageLazy();
}

if($('.share.pint').length > 0) {

$(document).on('click','.share.pint', function(e) {
window.open($(this).attr('data-href'));
});
}

$(document).on('touchend','.touch-href', function(e) {
currThumb = $(this);
setTimeout(function(){
currThumb.attr('href', currThumb.attr('data-href'));
currThumb.removeClass('touch-href');
}, 500);
});

if($('#photo-info .block.toolbar .tools-group.tooltip-description').html() == "") {
$('#photo-info .block.toolbar .tools-group.tooltip-description').parent().hide();
}

$('li.more_belongs a').click(function() {
$(this).parent().remove();
$('.hide_belongs').removeClass('hide_belongs');
});

$('div.more_belongs a').click(function() {
$(this).parent().remove();
$('.hide_belongs_trifecta').removeClass('hide_belongs_trifecta');
});

$('a.fullscreen, .main_content .block-photo').mousedown(function(e) {



switch (e.which) {
case 1:
if ($("#toggleContext").is(':visible')) {
toggleContext(true);
e.preventDefault();
return false;
}

if ($("body").hasClass('fancybox')) {
return fancybox(e);
 }

if ($('.main_content .block-photo .photo').hasClass('parental')) {
$('.main_content .popup.parental').show();

} else {
e.preventDefault();
if (typeof(album_id) != "undefined"){
$('.play.slideshow').click();
} else {
//popPhoto('.main_content .block-photo', false);

if ($("body").hasClass('blogpost') && $("body").hasClass('logged-out')) {
window.location.href = '/user/signup';
} else if ($("body").hasClass('blogpost') && $("body")) {
//nothing to do...
} else {
if (typeof popPhotoSlideshowPhoto == 'function') { 
popPhotoSlideshowPhoto();
}
}
}
}
break;
case 2:
case 3:
toggleContext(false, e);
/*
if ($(this).hasClass('block-photo')) {
$('.block-photo .photo img').attr('src', (version == 1 ? '/vb2/public': '') +'/media/images/layout/warning/warning_large.png');
$('.block-photo .photo').addClass('why');
}*/
break;
default:
alert('You have a strange mouse');
break;
}
}
).bind("contextmenu", function(e) {
return false;
 });

$('.block-photo .photo.parental').click(function(e) {
if ($(this).hasClass('parental')) {
$('.main_content .popup.parental').show();
}
}
);

$(document).on('click','items.comments a.comment', function(e){
if($(this).attr('href') == 'javascript:') {
e.preventDefault();
if(logged()) {
var item = $(this).closest('item');

if (!item.hasClass('active')) {
$('#edit-parent_id').val(item.attr('comment_id'));

$('#media_reply_comment').slideUp(500, function() {
$('items.comments item').removeClass('active');
item.addClass('active');
$('#media_reply_comment').appendTo(item).slideDown(500, function() {
$('#media_reply_comment').find('.form-textarea').focus();
});
});

} else {
item.removeClass('active');
$('#media_reply_comment').slideUp(500);
}
}
}
});

$(document).on('click','items.comments a.remove', function(e) {
e.preventDefault();

var comment_id = $(this).attr('comment_id');
if(logged()) {
var urls = '/photo/comment/delete';

if($(this).hasClass('curator')) {
urls = '/photo/commentcurator/delete';
}

$.post(
urls,
{comment_id: comment_id},
function(resp) {
$('items.comments item[comment_id="'+comment_id+'"]').slideUp('normal', function() {
$(this).remove();
$('#comments-count').html(parseInt($('#comments-count').html())- 1);
if($('#comments > items > item.last').length == 0) {
$('#comments > items > item:last').addClass('last');
}
});
}
);
}
});

$('a.request-print').click(function(e) {
e.preventDefault();
if(logged()) {
var media_id = $(this).attr('media_id');
$.post(
'/photo/'+media_id+'/request/print',
{},
function(data) {
alert('Your request for this photo has been sent. You will be notified if it goes up for sale. Thank you and have a great day!');
$('a.request-print').removeClass('disabled');
}
);
}
});


$('a.moderate-photo').click(function(e) {
e.preventDefault();
if(logged()) {
/*var media_id = $(this).attr('media_id');
$.post(
'/photo/'+media_id+'/moderate',
{context: 'photos'},
function(data) {
alert('Thank you for notifying us.');
}
);*/

e.preventDefault();
var media_id = $(this).attr('media_id');
$.get(
'/photo/moderate?id=' + media_id,
function(data){
$('#moderatephoto').show();
$("#moderatephoto").html('<div id="moderatephoto-popup"><div id="modal"><div id="content">' + data + '</div></div></div>');
callReveal("#modal");
}
);
}
});

$(document).on('click','#sendModerate',function(e) {
var form = $('#moderator-notification');
var data = form.serializeArray();
$.post(
form.attr('action'),
data,
function(data){
$('#moderatephoto').hide('slow', function() {
if(typeof data.success !="undefined"){
if(data.success){
alert('Thank you for notifying us.');
}else{
alert("Please try again later or copy link to photo and share it to <a href='mailto:members@viewbug.com'>members@viewbug.com</a>");
}
}

});
}
);
$(this).after('<img src="/media/images/layout/ajax-loader.gif" />');
$(this).hide();
});



$('.post-sale, .buy-print').each(function(){
$(this).attr('title', '');
});



$('#media_parental').submit(function(e) {
e.preventDefault();
var form = $(this);
var img = $('.block-photo .photo.parental img');

if (is_loggedin && $('#edit-permanent').is(':checked')) {
$.post(
form.attr('action'),
form.serialize(),
function(resp) {
redirect();
}
);

} else {
if (img.attr('parental')) {
img.attr('src', img.attr('parental')).removeAttr('parental');
if(typeof resizeMainImage!="undefined"){
resizeMainImage();
}
}
}
if(typeof view_adult!="undefined"){
view_adult=1;
}
$('.block-photo .photo.parental').removeClass('parental').find('img').css('width', 'auto');
form.closest('.popup').hide();
enableSubmit(this);

//Load next image
if(typeof replaceImage !="undefined"){
replaceImage($("html").hasClass("mobile"),true);
}
}
);

$('#media_comment .form-facebook').click(function(e) {
commentSubmit($('#media_comment'), function(data){
//Facebook Block
//alert("Function not available at this moment.");
return;
});
}
);

$('#media_reply_comment').addClass('prevent-default');
$('#media_reply_comment').submit(function(e) {
e.preventDefault();
var form = $(this);
var parent_id = $('#edit-parent_id').val();
if (logged()) {
if (checkForm(form) && parent_id > 0) {
$.post(
form.attr('action'),
form.serialize(),
function(resp) {
form.slideUp(500, function(){
form.find('textarea').addClass('empty').val('Write a comment');
var item = $('items.comments item[comment_id="'+ parent_id +'"]').removeClass('active');
var replies = item.find('items.replies');

var comment = getCommentItem(resp);
comment.addClass('last').addClass('hide');

if (replies.length <= 0) {
replies = $('<items></items>');
replies.addClass('replies');

item.append(replies);
}

replies.append(comment);

setTimeout(function(){
comment.slideDown();
}, 500
);
});
}
);
}
}
enableSubmit(form);
}
);

$('#media_reply_comment .form-reset').click(function(e) {
var form = $(this).parents('form:first');
var parent_id = $('#edit-parent_id').val();
$('items.comments item[comment_id="'+ parent_id +'"]').removeClass('active');

form.slideUp(500);
}
);

$('#edit-comment, textarea.comment').focus(function(){
logged();
});

$('#edit-link').click(function(e) {
if ($(this).attr('href').match(/my-account/)) {
return;
}
e.preventDefault();
var media_id = $(this).attr('media_id');

if (logged()) {
var button = $(this);
if (button.hasClass('loading')) {
return;
}
button.addClass('loading').find('.icon').addClass('spinner');

$.get(
'/photo/'+ media_id +'/edit',
function(response) {
button.removeClass('loading');

$('#photo-edit').html(response);
$('#photo-edit').slideDown();

addCategoryLink();
if($('#edit-watermark').length>0){
addWatermarkLink();
}

attachFormValidateEvents($('#photo-edit'), function(e, form, valid) {
e.preventDefault();

$.post(
form.attr('action'),
form.serializeJSON(),
function(resp) {
$('#photo-edit').slideUp();
if (resp && resp.messages) {
setTimeout(function() {
setRespMessages(resp);
if (resp.messages.error) {
$('#photo-edit').slideDown();
} else {
redirect();
}
}, 500
);
}
}
);
});
media_id_release = media_id;

addEventsLocation(media_id);
if (typeof addEventsTags !== "undefined" && typeof addEventsTags == 'function') { 
addEventsTags(media_id);
}
addTagsEvent(media_id);

if(typeof addEventsLicensing !== "undefined"){
addEventsLicensing(media_id);
addLicensingClickPop(media_id);
marketJoinActions();
addReleasesItemsEvents(media_id);
}
}
);
}
loadCssForm();
});

$(document).on('click','#delete-photo-link', function(e) {
e.preventDefault();
if(logged()) {
$.get($(this).attr('href') + "try",
function(resp){
if(resp.cant == 'finalist') {
popMessage('', 'Hi there, this photo has been<br /> awarded as a contest finalist.<br/><br/>If you still want to remove this photo,<br/>please contact us at <a href="mailto:members@viewbug.com">members@viewbug.com</a>', null, 'system');
} else if(resp.cant == 'chalenge') {
popMessage('', 'You have this photo as your challenge' + "'" + 's banner,<br />please wait to delete it until<br/>your challenge is closed<br/><br/>or contact us at <a href="mailto:members@viewbug.com">members@viewbug.com</a>', null, 'system');
} else {

var con_text = ($('#delete-photo-link').hasClass('cant-delete') ? 'This photo is in queue to be featured as a Hall of Fame. Do you still want to remove it?' : 'Are you sure you want to delete this photo?');
var con = confirm(con_text);
if (con) {
redirect(resp.cant ,'_parent');
}
}
});
}
});

$(document).on('click','#cancel-btn', function(e) {
e.preventDefault();
$('#photo-edit').slideUp();
$('#category_media_'+ $(this).attr('media_id')).remove();
});



$(document).on('click','.post-sale', function(e) {
e.preventDefault();

$.get(
'/photo/sale?id=' + $(this).attr('id').replace("sale-",""),
function(data){
$("#sellphoto").html('<div id="purchase-popup"><div id="modal"><div id="content">' + data + '</div></div></div>');
callReveal("#modal");
$('html,body').animate({scrollTop: $("#modal").offset().top},'slow');

$('#markup').focus(function() {
$number = $(this).val().replace(/\D/g,'');
$(this).val($number);
});

$('#markup').focusout(function() {
$(this).val( $(this).val() + "%");
});

$('#markup').keyup(function() {
$number = $(this).val().replace(/\D/g,'');
$(this).val($number);

$markup = $number / 100;

$.each($('.product-row'), function() {
$price = $(this).find('.product-price').val();
$markup_total = $price * $markup;
$total = parseFloat($price) + parseFloat($markup_total);

$(this).find('.product-markup').html($markup_total.toFixed(2));
$(this).find('.product-total').html($total.toFixed(2));
});
});

$(document).off().on('click','#post_sale', function() {
if(!$(this).hasClass('ignore')) {
$(this).addClass('ignore');

$markup = $('#markup').val().replace(/\D/g,'');

$.post(
'/photo/sale',
{ post_type: 'save', photo_id: $('#photo_id').val(), markup: $markup },
function(resp) {
$('#modal').trigger('reveal:close');
$('.post-sale').html("Edit Print Settings");
$('html,body').animate({scrollTop: $("body").offset().top},'slow');
}
);
}
});
}
);
});

$(document).on('click','.buy-print', function(e) {
e.preventDefault();
$.get(
'/photo/buy?id=' + $(this).attr('id').replace("buy-",""),
function(data){
var p_class = "payment-popup";
var ind = data.indexOf('Oops');

if(ind != -1) {
p_class = "";
}

$("#sellphoto").html('<div id="purchase-popup"><div id="modal" class="' + p_class + '"><div id="content">' + data + '</div></div></div>');
callReveal("#modal",true,true,"callbackClose");
$('html,body').animate({scrollTop: $("#modal").offset().top},'slow');

$('#select_countries').change(function() {
if($(this).val() == "NA") {
$(this).parent().parent().css('width', '100%');
} else {
$(this).parent().parent().css('width', '50%');
}

$('.select_state').parent().parent().hide();
$('#states_' + $(this).val()).parent().parent().show();
}).change();

var size = 265;
if($('#billing_address_wrapper #email').length > 0) {
size = 322;

$('#billing_address_wrapper #email').parent().parent().width('100%');
$('#billing_address_wrapper #email').width(425);
}

$('.required_billing').change(function() {
if($('#firstName').val() != "" && $('#lastName').val() != "" && $('#credit_card_number').val() != "" && $('#expire_month').val() != 0 && $('#expire_year').val() != 0 ) {
$('#billing_address_wrapper').animate({'height': size}, 500);
}
}).change();

$(document).off().on('click','#div_print_type .form-radio', function() {
$('#div_size_description span').html($(this).val());

if($('#purchaseheadertitle').height() < 200) {
$('#purchaseheadertitle').animate({'height': 310}, 500);
$('#div_print_size').fadeIn(1500);
}

changeTotal();
if($(".canvas-preview-frame").is(":visible")){
setPrintPreview();
}
});

//$(document).off().on('click','#div_print_size .form-radio', function() {
$(document).on('click','#div_print_size .form-radio', function() {
$('#popupheader').animate({'height': 370}, 500);
$('#div_print_qty').fadeIn(1500);
$('#purchaseheadertotal').fadeIn(1500);
changeTotal();

if($(".canvas-preview-frame").is(":visible")){
setPrintPreview();
}
else{
$("#printPreview").show();
}
});

$('#markup').focus(function() {
$number = $(this).val().replace(/\D/g,'');
$(this).val($number);
});

$('#print_qty').focusout(function() {
checkQty($(this));
changeTotal();
});

//Braintree
if(typeof loadBraintree!='undefined'){
loadBraintree();
}

$(document).on('click','.pay_close', function() {
$('.reveal-modal-bg').click();
});

$('.reveal-modal-bg').click(function() {
$('.pay_close').off('click');
});
}
);
});

$(document).on('click','#paynow', function(e) {
e.preventDefault();

if($('body').hasClass('photocollection-gallery') || $('body').hasClass('photographycollection')){
paynowsubmit_bt($('#photo_collection_buy'));
return;
}

if(typeof loadBraintree !='undefined'){
doPaymentBT();
return;
}

if(isDetailComplete()) {
var credit_card = $('#credit_card_number').val();
var invalid_card = false;

if(credit_card.charAt(0) != "X") {
credit_card = credit_card.replace(/\D/g,'');
if(credit_card.length != 16) {
invalid_card = true;
}
}

if(invalid_card) {
alert('Invalid Credit Card Number');
} else {
var photo_id = $('#photo_id').val();
var detail = '#' + $("input[name='print_type']:checked").val() + '-' + $("input[name='print_size']:checked").val();
var detail_id = $(detail).attr('name');

checkQty($('#print_qty'));
var qty = $('#print_qty').val();

var first = $('#firstName').val();
var last = $('#lastName').val();

var credit_card = $('#credit_card_number').val();
var month = $('#expire_month').val();
var year = $('#expire_year').val();
var type = $('#card_type').val();
var cvv = "";//$('#cvv').val();

var address1 = $('#address1').val();
var address2 = $('#address2').val();
var city = $('#city').val();
var zip = $('#zip').val();
var country = $('#select_countries').val();
var state = $('#states_' + country).val();

var email = 'not';
if($('#billing_address_wrapper #email').length > 0) {
email = $('#billing_address_wrapper #email').val();
}

if(first && last && credit_card && month && year&& address1 && city && zip && country != "NA" && email) {
if(($("#paynow").html()=="Please wait...")){
return;
}
$("#paynow").html("Please wait...");

$.post(
'/cart/checkoutphoto',
{ photo_id: photo_id, detail_id: detail_id, quantity: qty,
firstName: first, lastName: last, address1: address1, address2: address2, city: city, state: state, country: country, zip: zip,
credit_card_number: credit_card, cvv: cvv, expire_month: month, expire_year: year, card_type: type,
email: email },
function(resp) {
if(resp.success == 0) {
alert("We were unable to process your payment. Please verify and try again. If the problem persists, contact us to complete your order.");
} else {


$('#popup-clear-main').addClass('print').html('<div class="text">Thank you!<br />Your print will be ready soon.<a href="javascript:" class="continue-print">Continue browsing</a></div>').fadeIn(500);

$(document).on('click','.continue-print', function() {
$('#popup-clear-main').fadeOut(200, function() { $(this).html('').removeClass('print'); });
$('#modal').trigger('reveal:close');
});
}
$("#paynow").html("Pay now");
}
);

} else {
alert('Please fill all data');
}
}
} else {
alert('Please select the Print Type and Size');
}
});

$(document).on('click','#detele_sale', function() {
if(!$(this).hasClass('ignore')) {
$(this).addClass('ignore');
$.post(
'/photo/sale',
{ post_type: 'delete', photo_id: $('#photo_id').val() },
function(resp) {
$('#modal').trigger('reveal:close');
$('.post-sale').html("Post For Sale");
$('html,body').animate({scrollTop: $("body").offset().top},'slow');
}
);
}
});

$('.post-award').click(function(e){
e.preventDefault();
$(".soc-photo-wrapper").removeClass("hideme");
});

// When the user want to see all the peer recognitions.
$(document).on('click','.peer-left a',function(e){
showPeerLeft(this,e);
});

function showPeerLeft(_this,e){

if($("body").hasClass("frontpage")){
$(_this).attr("href","/photo/" + $("#phopp").attr("data-id"));
//document.location = "/photo/" + $("#phopp").attr("data-id") + "#photo-info";
openPhotoFrame(e,_this);
return;
}

var obj = $(_this).parent().parent();
var award = $(_this).attr("data-award");
var leftAwards = $(_this).attr("data-left");
var dataPage = $(_this).attr("data-page");
var dataEmotion = $(_this).attr("data-emotion");
var option = $(_this).attr("data-option");
$(_this).parent().html("").remove();

//To get peer awards
if(option==2){
$.get("/photo/"+photo.id+"/partial-peer-awards",{award:award,left:leftAwards,page:dataPage},function(data){
$(obj).find("loading").hide();
$(obj).append(data);
$(".hiderecogitem").css({ display: 'inline-block'});
});
} else { //To get emotions
$.get("/photo/"+photo.id+"/partial-emotions",{emotion:dataEmotion,left:leftAwards,page:dataPage},function(data){
$(obj).find("loading").hide();
$(obj).append(data);
$(".hiderecogitem").css({ display: 'inline-block'});
});
}
}


$(window).scroll(function() {
if($('.popular.logged-in .div-wide').length > 0) {
 var top = $(window).scrollTop();
 if(top > 45) {
 $('.div-wide').css('margin-top','-45px');
 } else {
 $('.div-wide').css('margin-top','-' + top + 'px');
 }
}
});

$(".gall_photoscol").click(function(e){
e.preventDefault();
$("gallery.waterfall400").removeClass("onecol");
$("gallery.waterfall400").removeClass("twocols");
$("gallery.waterfall400").addClass($(this).attr("data-class"));

$(".gall_photoscol").removeClass("active");
$(this).addClass("active");

masonryLoad();

});

resizeBlockTabs();
$( window ).resize(function() {
resizeBlockTabs();
});

init_word_counter($('#edit-comment'), $('#commentbox .form-submit'), 200, ' characters left<span class="hidemelarge">, make it a critique</span>', 'Post Critique');

if($('body.photopage').length > 0) {

if($("html").hasClass("mobile")) {

$(document).on('click','.share-with-friends-mobile', function(event) {
/*$('#siddebar-content').find('.content').after('<div class="share-text" style="width: 100%; text-align: center;font-size: 14px;padding: 10px 0px;background-color: #77b4e5;margin-bottom: 24px; color: #fff;">\
Your friends might like this photo too. Share it!</div>');
$('.share-text').show('slow');*/
$('.share-with-friends-mobile').unbind('click');
$('.share-with-friends-mobile').removeClass('share-with-friends-mobile');
//alert('lalal');
});

} else {

$('.share-with-friends').click(function(event) {
/*$(this).after('<span style="display: none; float: right; line-height: 24px; padding: 0px 10px; color: #27A4DD; font-size: 12px; margin-top:-2px; height:30px;" class="share-text">\
 Your friends might like this photo too. Share it <img style="position: relative; top: 7px; width:21px; height:21px;" src="/media/images/layout/social_arrow.png" alt="share" /> \
 </span>');
$(this).next('.share-text').fadeIn(1200);//.show('slow');*/
$('.share-with-friends').unbind('click');
$('.share-with-friends').removeClass('share-with-friends');
});
}

}

$('span.pop').each(function(){
var description = $(this);
if (!description.parent().hasClass('dropdown')) {
description.tipsy({
title: function() {
return description.attr('original-title');
},
gravity: 's',
}).mouseenter(function(){
$(".tipsy-arrow").remove();
$(".tipsy-south").append('<div class="tipsy-arrow"> <img src="/vb2/public/css/images/flyout-arrow-horizontal.png" /></div>'); 
});
}
$(this).blur(function() {
$('.tipsy').hide();
});
});

if($('#share-photo').length > 0) {
$('#popup-clear-bg').addClass('share-photo').delay(3000).fadeIn(1000);
$('#share-photo').delay(3000).fadeIn(1000);

$(document).on("click",'#popup-clear-bg, .pop_cont_close',function(e) {
$('#popup-clear-bg, #share-photo').fadeOut(1000);
});
}

if($("html").hasClass("mobile")){
removeImageLazy();
}

if($('.photopage.index.logged-out').length > 0) {
$('#signup-popup-bg-gall, #signup-popup-gall').delay(3000).fadeIn(1000, function() {
$('body').css({ overflow:'hidden' });
});
}

addCommentAction();

$('#share-btn-box').click(function() {
$(this).hide();
$('#tools-socials').delay(300).fadeIn(1000);
});

$('.read-more').click(function(){
$('.complete-description').show();
$('.partial-description').hide();
});

$('.read-less').click(function(){
$('.partial-description').show();
$('.complete-description').hide();
});

$('.read-more-awards').click(function(){
if($('.complete-awards').css('display') != 'none'){
$('.read-more-awards').html("&emsp;View more");
} else {
$('.read-more-awards').html("&emsp;View less");
}
$('.complete-awards').toggle();

});

if(typeof addEventsLicensing !=="undefined" &&$('body').hasClass('photopage') && $('body').hasClass('owner')) {
addEventsLicensing();
addLicensingClickPop();
marketJoinActions();
addReleasesItemsEvents();
}
});

var commentSubmitWaiting = false;
var commentSubmit = function(form, onComplete) {
var form = $(form);
var data = form.serializeJSON();

if(commentSubmitWaiting){
return;
}
if($("#edit-comment").length && $("#edit-comment").val()===''){
enableSubmit(form, form.find('.form-submit, .form-facebook'));
return;
}

commentSubmitWaiting = true;
if (logged()) {
if (checkForm(form)) {
$.post(
form.attr('action'),
data,
function(resp) {
var last = $('#comments > items > item:last');
var comment = getCommentItem(resp);

if(comment.length== 0){
enableSubmit(form, form.find('.form-submit, .form-facebook'));
commentSubmitWaiting = false;
return;
}

comment.addClass('last').addClass('hide');

if($('#comments > items > item').length == 0) {
$('#comments > items').append(comment);
last = $('#comments > items');
} else {
last.removeClass('last').after(comment);
}
$('#comments-count').html(parseInt($('#comments-count').html())+1);

form.find('textarea').addClass('empty').val('Write a comment');
setTimeout(function(){
enableSubmit(form, form.find('.form-submit, .form-facebook'));
commentSubmitWaiting = false;
scrollTo(last, -5, function() {
comment.slideDown(500, function(){
if (typeof onComplete != 'undefined') {
onComplete(data);
}
}
);
}
);
}, 500
);
}
);
} else {
enableSubmit(form, form.find('.form-submit, .form-facebook'));
}
}
}

var getCommentItem = function(resp) {
if ($('.ie').length > 0) {
var comment = $('<item></item>');

var comment_id = resp.match(/comment_id="(\d+)"/);
comment_id = comment_id[1];
comment.attr('comment_id', comment_id);

resp = resp.replace(/<[\/]*item.*?>/g, '');
resp = resp.replace('<thumbnail>', '<div class="thumbnail">');
resp = resp.replace('</thumbnail>', '</div>');

comment.html(resp);

var thumbnail = comment.find('.thumbnail');
thumbnail.replaceWith($('<thumbnail>').html(thumbnail.html()));

} else {
var comment = $(resp);
}

return comment;
}

function addCommentAction() {
$('#media_comment').addClass('prevent-default');
$(document).on('submit','#media_comment', function(e) {
e.preventDefault();
if($('body.challenge-page').length == 0) {
commentSubmit(this);
}
}
);
}

var wasResized=false;
function resizeBlockTabs(){

}

function checkQty(qtyy) {
$number = qtyy.val().replace(/\D/g,'');
if($number == '' || $number == 0) {
$number = 1;
}
if($number > 5) {
$number = 5;
}

qtyy.val($number);
}

function changeTotal() {
if(isDetailComplete()) {
$price_id = '#' + $("input[name='print_type']:checked").val() + '-' + $("input[name='print_size']:checked").val();
$price = $($price_id).val() * $('#print_qty').val();
$('#totalpayment').html( $price );
}
}

function isDetailComplete() {
if($("input[name='print_type']:checked").val() != undefined && $("input[name='print_size']:checked").val() != undefined) {
return true;
} else {
return false;
}
}
/*
var timePinterest = null;
(function() {
window.PinIt = window.PinIt || { loaded:false };

if (window.PinIt.loaded) {
return;
}

window.PinIt.loaded = true;

function async_load(){
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
if (window.location.protocol == "https:")
s.src = "https://assets.pinterest.com/js/pinit.js";
else
s.src = "http://assets.pinterest.com/js/pinit.js";

var x = document.getElementsByTagName("script")[0];
x.parentNode.insertBefore(s, x);

timePinterest=setInterval(function(){checkCounterPinterest()},2000);
}

if (window.attachEvent)
window.attachEvent("onload", async_load);
else
window.addEventListener("load", async_load, false);
})();

function checkCounterPinterest(){
var alink = $(".pinterest a").html();

if(alink==null){
window.clearInterval(timePinterest);
return;
}

if(alink == '<img src="//assets.pinterest.com/images/pidgets/pin_it_button.png">'){
return true;
}

if(alink.indexOf("_hidden")<1){
$("#socialswraps .pinterest").css("left","-65px");
$("#socialswraps .fb-like.fb_edge_widget_with_comment.fb_iframe_widget").css("left","-145px");
} 

window.clearInterval(timePinterest);
return false;

}*/

function wallToolCallback(data,caller){
if(typeof data.error =="undefined" || data.error==""){
var type = $(caller).attr("type");
//Is Peer

var obj_sum ="";
var media_id=0;
var htmlappend ="";
var htmlprepend ="";

if(typeof type !="undefined" && type!=""){
media_id = $(caller).attr("media_id");
obj_sum = "#peer-" + media_id;

if($(obj_sum).length==0){
htmlprepend = ('<span id="peer-' + media_id + '">0 </span> <span class="desc">Peer Awards</span> &nbsp; ');
}

}
//Is LIKE
else{
media_id = $(caller).attr("data-media-id");
obj_sum = "#like-" + media_id;

if($(obj_sum).length==0){
htmlappend = ('<span id="like-' + media_id + '">0 </span> <span class="desc">Likes</span>');
}
}

var peerlikes = $("thumbnail#media-" + media_id).find(".peerlikes");

if($(peerlikes).length==0){
$(caller).find(".socials > .content").html('<div class="peerlikes"></div>');
}

$(peerlikes).prepend(htmlprepend);
$(peerlikes).append(htmlappend);

var total = parseInt($(obj_sum).text());
if(isNaN(total)){
total=0;
}


$(obj_sum).animate({opacity:'0.1'},"slow",function(){
$(obj_sum).text(total + 1);
}).animate({opacity:'1'},"slow");


}
}

function fb_like(media_href,obj,prize,media_id,picture_href,picture_caption){
fb_shareBox(media_href + "?m=feed_vote_my&p=" + prize);

return;
}

function fb_likeStats(media_href,obj,media_id,picture_href,picture_caption, share_description,types){
if(typeof share_description!=="undefined" && share_description!==""){
share_description = "ot=" + encodeURIComponent(share_description);

if(typeof types==="undefined" || types===""){
share_description = "?" + share_description;
}
else{
share_description = "&" + share_description;
}
}
else{
share_description="";
}
if(typeof types==="undefined" || types===""){
types ="";
}
fb_shareBox(media_href + types + share_description);


return;
}

function callbackClose(){
if($(".canvas-preview-frame").is(":visible")){
$(".wrapper-print_preview").remove();
}
}

if(!$("html").hasClass("mobile") && $("body").hasClass("photopage") && $(document).width() < 1250 ){
$("#main_image").css("width","100%");
}

$(window).scroll(function (event) {
blockTabPosition();
});

function blockTabPosition(is_animated) {
if(typeof is_animated == "undefined"){
is_animated = false;
}
var windowY = $(this).scrollTop();

if($('.logged-in .block-tabs').length > 0 && $('.mobile').length == 0) {
var top_padding = header_banner_height + 75;

var nav_top = top_padding - windowY;
if(nav_top < 0) {
nav_top = 0;
} else if(nav_top > top_padding) {
nav_top = top_padding;
}

if(is_animated) {
$('.block-tabs').animate({ top: nav_top }, 800);
} else {
$('.block-tabs').css({ top: nav_top });
}

}
}


var historyState=null;
if(history.state != null && history.state.url==location.pathname){
historyState= history.state;
window.onpopstate = function(event){
if(history.state==null){
var _id = $(".protect-photo").attr("media-id");
if(location.pathname!= ("/photo/"+_id)){

querys="bb&";
if(historyState.search!=null){
var p = historyState.search;
for (var key in p) {
if (p.hasOwnProperty(key) && typeof key!=="undefined" && ( key!="currpage" ) ) {
querys = querys + (key + "=" + p[key]) + "&";
}
}
}
document.location=location.pathname + "?" + querys +"currpage=" + historyState.page + "&pos=" + historyState.lastPos[1] + historyState.hash;
}
}
};
}


function init_word_counter(comment_box, submit_button, toggle_count, custom_text, button_toggle_text){

var toggle_critique = toggle_count;
var original_text = submit_button.val();
$('.word-count .critique-count').html(toggle_critique);
$('.word-count .critique-text').html(custom_text);

comment_box.keyup(function(event) {

var count = $(this).val().length;
var remaning = toggle_critique - count;
$('.word-count .critique-count').html(remaning);

if (remaning <= 0) {
submit_button.val(button_toggle_text);
$('.word-count').hide();

} else {

submit_button.val(original_text);

if ($('.word-count:hidden')) {
$('.word-count').show();
};
}
});
}

if(typeof removeImageLazy!=="function"){
function removeImageLazy(){

$(".delayedban").animate({opacity:1},function(){ $(this).removeClass('delayedban'); });

var tiles = $('.lazy');
tiles.each(function(i) {
$(this).fadeTo(500,1);
var src = $(this).attr("data-src");
if(typeof src!="undefined" && src.length>0){

if($(this).attr('data-waittocomplete')==='true'){
var heavyImage = new Image(); 
heavyImage.src = src;
$(this).removeClass("lazy");
$(this).removeAttr("data-src");
$(this).removeAttr("data-waittocomplete");
var obj= this;
heavyImage.onload = function() {
if($(obj).hasClass("delayed")){
$(obj).attr("src",src);
}
$(obj).removeClass('delayed');
};
return;
}

if( $(this).attr("data-nodelayedyet")=="true" ){
return;
}
$(this).attr("src",src);
$(this).attr("data-src","");
$(this).removeAttr("data-src");
$(this).removeClass("lazy");
if($('body').hasClass("photopage")){
$(this).removeAttr("height");
}
}
});

}
}

/*copied from default */
if(typeof fb_shareBox!=="function"){
function fb_shareBox(url,discriminator){
if(typeof discriminator =="undefined"){
discriminator='general';
}

if(typeof FB != 'undefined' ){
//if IS MOBILE
FB.ui({
method: 'share',
mobile_iframe: $("html").hasClass("mobile"),
href: url,
}, function(response){});
return;
}

var output = 'Please wait...';
window.open('','facebook-share-dialog','width=626,height=436').document.write(output);

$.get('/pixel/scrapephoto?url=' +encodeURIComponent(url) +"&d="+discriminator,function(e){
window.open(
'https://www.facebook.com/sharer/sharer.php?='+encodeURIComponent(url) + "&display=popup", 
'facebook-share-dialog', 
'width=626,height=436');
});
}
}

/*Gallery signup popup*/
function signupPopup(){
if (!is_loggedin) {
var url = 'getstartednow';
redirect(false && version == 1 ? '/' + url: '/user/'+url+'?destination='+ escape(window.location.pathname));
$('#ambassadors').hide();
}
return is_loggedin;
}
function loadCssForm(){
$('#photo-edit').addClass("form-index-edit");
}
$(function() {
if (window.self != window.top) {
$('.close-iframe').css("visibility","visible");
}
$('.close-iframe').on("click",function(e){
window.history.back();
});

})

// **********************************************************************************


if($("html").hasClass("mobile") /*&& $("body").hasClass("photopage")*/){
$(document).on("touchstart",".dropdown.menu",function(e) {
if($(e.target).get(0).tagName !== 'IMG'){
if($(this).parent().parent().find('.award_popup.icons').is(":visible")){
var dropdown_wrapper = $(this).find("a.button");
dropdown_wrapper.parent().find('.award_popup').fadeOut(300, function() {
dropdown_wrapper.parent().removeClass('active');
});
}else{
$(this).find('.award_popup.icons').stop().css('opacity', 1).fadeIn(400);
}
e.stopPropagation();
}
});
}else{
$(document).on("mouseenter",'.dropdown.menu', function(e) {
if($(this).find('.award_popup.icons').is(":visible")){
var dropdown_wrapper = $(this).find("a.button");
dropdown_wrapper.parent().find('.award_popup').fadeOut(300, function() {
dropdown_wrapper.parent().removeClass('active');
});
}else{
$(this).find('.award_popup.icons').stop().css('opacity', 1).fadeIn(400);
}
});

$(document).on("mouseleave",'.dropdown.menu', function() {
$(this).find('.award_popup.icons').stop().css('opacity', 1).fadeOut(300);
});
}



// ****** GIVE EMOTION ******
var totalClicks_emotion = [];
$(document).on("click",'a.emotion-byuser',function(e) {
e.preventDefault();
if($("html").hasClass("mobile")){
if( typeof totalClicks_emotion[$(this).attr("emotion")] == "undefined" ){
totalClicks_emotion[$(this).attr("emotion")] = 1;
return;
}
delete totalClicks_emotion[$(this).attr("emotion")];
totalClicks_emotion = [];
}
if(is_loggedin) {

media_id = $(this).attr('media_id');
emotion = $(this).attr('emotion');

var dropdown_wrapper = $(this).parents("div.feature-photo-byuser-container").find("a.button");
dropdown_wrapper.parent().find('.award_popup').fadeOut(300, function() {
dropdown_wrapper.parent().removeClass('active');
});
dropdown_wrapper.addClass('vbawardedemo');
e.stopPropagation();
$.post(
'/photo/'+media_id+'/feature/emotion',
{emotion: emotion, media_id:media_id},
function(data) {
if(data){
var totalpeer = dropdown_wrapper.find('.mask-text').html();
if(totalpeer.indexOf("K") > -1) {
} else {
totalpeer = parseInt(dropdown_wrapper.find('.mask-text').html()) + 1;
}

dropdown_wrapper.find('.mask-text').html( totalpeer );
}
}
);
} else {
logged();
}
});
// GIVE AWARD
$("#main_content").on("click",'a.feature-photo',function(e) {
e.preventDefault();
console.log('clicked on photo');

if(logged()) {
var media_id = $(this).attr('media_id');
var type = $(this).attr('type');
$.post(
'/photo/'+media_id+'/feature',
{type: type},
function(data) {
if (data && data.callback) {
eval(data.callback);

} else {
alert(data.success ? data.success: 'Photo has been featured');
}
}
);
}
});
/* ****** Peer awards ****** */

$(document).on("click",'a.feature-photo-byuser',function(e) {

e.preventDefault();

var caller = this;
if($("html").hasClass("mobile")){
if( typeof totalClicks_emotion[$(this).attr("type")] == "undefined" ){
totalClicks_emotion[$(this).attr("type")] = 1;
return;
}
delete totalClicks_emotion[$(this).attr("type")];
totalClicks_emotion = [];
}

if(is_loggedin) {
var media_id = $(this).attr('media_id');
var type = $(this).attr('type');
var is_active = $(this).attr('status');

if(typeof is_active== "undefined" || is_active!="1"){
var popup = popMessage('', 'To give this award and get more ViewBug<br />upgrade today!', null, null, null, null, 'award_upgrade');
return;
}

var dropdown_wrapper = $(this).parents("div.feature-photo-byuser-container").find("a.button");

dropdown_wrapper.parent().find('.award_popup').fadeOut(300, function() {
dropdown_wrapper.parent().removeClass('active');
});


//Award popup
if($(dropdown_wrapper).length==0){
var media_id = $(this).attr("media_id");
dropdown_wrapper = $("#btn" + media_id);
}

if($("html").hasClass("mobile") && $("body").hasClass("photopage")){
dropdown_wrapper = $(".feature-photo-byuser-container").find("a.button");
}

var level = $(this).attr('level');
if (typeof level !== "undefined") {
if (level !== "VIP") {
popMessage('Please remember', 'To select this award, you need to be a VIP member.');
return;
}
}
dropdown_wrapper.addClass('vbawardedemo');

var totalpeer = dropdown_wrapper.find('.mask-text').html();
if(totalpeer.indexOf("K") > -1) {
} else {
totalpeer = parseInt(dropdown_wrapper.find('.mask-text').html()) + 1;
}
dropdown_wrapper.find('.mask-text').html(totalpeer)

$.post(
'/photo/'+media_id+'/feature/user',
{type: type},
function(data) {
if($("html").hasClass("mobile")){
hidePopupAward(caller);
}

$('#awd_btn'+media_id).css("display","none");
$('#awd_btn_pro'+media_id).css("display","none");
$('#awards-buttons').addClass('awarded_');
if($(caller).attr("data-callback") != null && $(caller).attr("data-callback") != ""){
var fn = window[$(caller).attr("data-callback")];
if(typeof fn == "function"){
fn(data,caller);
}

}
}
);
}
else{
logged();
}
});

/* AWARD POPUP */
if ($("html").hasClass("mobile") ) {

function showMobilePopupAward(obj, is_resize) {} //deprecated

function hidePopupAward(obj) { 
var dropdown_wrapper = $(obj).parents("div.feature-photo-byuser-container").find("a.button");
dropdown_wrapper.parent().find('.award_popup').fadeOut(300, function() {
dropdown_wrapper.parent().removeClass('active');
});
}
}

$(document).on("mouseover",".social-icons",function(e) {
var base = $(this).find(".feature-photo-byuser-container");
if(base.length > 0) {
var popup = $(base).find(".award_popup");

var l = $(base).offset().left;
var wp = $(popup).width();
var ww = $(window).width();

popup.css("margin-left",0);

if (ww < (wp + l)) {
popup.css("margin-left", - (ww - wp - $(base).width()) );
}

//Check image in bottom
var ph = $(popup).height(); //Popup Height
var wh = $(document).height();
var t = $(base).offset().top;
if(wh < (ph + t + 50)){
//alert( (ph + t) + " > " + wh);
var bh = 65;//$(base.height());
//popup.css("margin-top", - ph - bh);
}
}
});$(document).ready(function(){
$(".bagde-link").on('click',function (e) {
var award = ($(this).attr('title'));
var id = ($(this).attr('id'));
var photo_media = id.replace('badge-','');

$.ajax({
url: '/user/badge/' + photo_media + '?award=' + award,
success: function(data) {
var popup = popFullscreenHtml('Badge', data);
//var popup = popMessage('Badge', data, null, '',null,false);
}
});

});
});
var photo_id = window.location.pathname.replace('/photo/','');
function shareBadgeWith(social,contest_winner,socia_message){
if (photo_id == ''){
alert("Error. The picture can be readed");
return;
}
if(!isNumber(contest_winner)){
socia_message=contest_winner;
contest_winner=0;
}

var link = '/photo/' + photo_id;
var picture = $("#badge-iframe").contents().find(".badgepath").val();
var fb_caption="ViewBug";
if (!socia_message){
message='My photo received an award on ViewBug, a photo contest community!.';
fb_caption="Awarded photo";
}
else{
message = socia_message;
}
//Validate PhotoId or Avatar
if (!isNumber(photo_id)){
var username = window.location.pathname.replace('/member/','');

link = '/member/' + username;
picture = '/user/badge/avatar/' + username +'.png';
}

switch(social){
case 'facebook':

var params = {};
params['message'] = '';
params['name'] = 'ViewBug';
params['description'] = message;
params['link'] = link;
params['picture'] = picture;
params['caption'] = fb_caption;

fbTask(function(){
if(contest_winner){
$.get(
'/user/badge/post-contest-badge',
data = {photo_id : photo_id, username:username },
function(response) {
if(!response || response.error){
alert('Error occured.');
}
else{
alert('Your badge has been posted.');
}
}
);
}
else{
FB.api('/me/feed', 'post', params, function(response) {
if (!response || response.error) {
alert('Error occured.');
} else{
alert('Your badge has been posted.');
}
});
}
});
break;
case 'twitter':
$.get(
'/invite/twitter/check',
{},
function(response) {
if (response.redirect) {
redirect(response.redirect);
} else {
$.post('/invite/sendTwitterMessageWithMedia', { media_src: picture , message: message + ' ' + link}, function(data){
if(typeof data.status == undefined){
alert('Error posting your badge.');
}
else{
alert('Your badge has been posted');
}
});
}
}
);
case 'pinterest':
//<a href="http://pinterest.com/pin/create/button/?url=<?php echo $_link;?>&media=<?php echo $_media;?>&description=<?php echo $_description; ?>" class="pin-it-button" count-layout="none"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>

}
}

function isNumber(n) {
return !isNaN(parseFloat(n)) && isFinite(n);
}
/*jshint undef: true */
/*global jQuery: true */

/*
--------------------------------
Infinite Scroll
--------------------------------
+ https://github.com/paulirish/infinite-scroll
+ version 2.0b2.120519
+ Copyright 2011/12 Paul Irish & Luke Shumard
+ Licensed under the MIT license

+ Documentation: http://infinite-scroll.com/
*/
var last_page = '';
(function (window, $, undefined) {
"use strict";

$.infinitescroll = function infscr(options, callback, element) {
this.element = $(element);

// Flag the object in the event of a failed creation
if (!this._create(options, callback)) {
this.failed = true;
}
};

$.infinitescroll.defaults = {
loading: {
finished: undefined,
finishedMsg: "No more photos",
img: "data:image/gif;base64,R0lGODlh3AATAPQeAPDy+MnQ6LW/4N3h8MzT6rjC4sTM5r/I5NHX7N7j8c7U6tvg8OLl8uXo9Ojr9b3G5MfP6Ovu9tPZ7PT1+vX2+tbb7vf4+8/W69jd7rC73vn5/O/x+K243ai02////wAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQECgD/ACwAAAAA3AATAAAF/6AnjmRpnmiqrmzrvnAsz3Rt33iu73zv/8CgcEj0BAScpHLJbDqf0Kh0Sq1ar9isdioItAKGw+MAKYMFhbF63CW438f0mg1R2O8EuXj/aOPtaHx7fn96goR4hmuId4qDdX95c4+RBIGCB4yAjpmQhZN0YGYGXitdZBIVGAsLoq4BBKQDswm1CQRkcG6ytrYKubq8vbfAcMK9v7q7EMO1ycrHvsW6zcTKsczNz8HZw9vG3cjTsMIYqQkCLBwHCgsMDQ4RDAYIqfYSFxDxEfz88/X38Onr16+Bp4ADCco7eC8hQYMAEe57yNCew4IVBU7EGNDiRn8Z831cGLHhSIgdFf9chIeBg7oA7gjaWUWTVQAGE3LqBDCTlc9WOHfm7PkTqNCh54rePDqB6M+lR536hCpUqs2gVZM+xbrTqtGoWqdy1emValeXKzggYBBB5y1acFNZmEvXAoN2cGfJrTv3bl69Ffj2xZt3L1+/fw3XRVw4sGDGcR0fJhxZsF3KtBTThZxZ8mLMgC3fRatCbYMNFCzwLEqLgE4NsDWs/tvqdezZf13Hvk2A9Szdu2X3pg18N+68xXn7rh1c+PLksI/Dhe6cuO3ow3NfV92bdArTqC2Ebd3A8vjf5QWfH6Bg7Nz17c2fj69+fnq+8N2Lty+fuP78/eV2X13neIcCeBRwxorbZrA1ANoCDGrgoG8RTshahQ9iSKEEzUmYIYfNWViUhheCGJyIP5E4oom7WWjgCeBFAJNv1DVV01MAdJhhjdkplWNzO/5oXI846njjVEIqR2OS2B1pE5PVscajkxhMycqLJghQSwT40PgfAl4GqNSXYdZXJn5gSkmmmmJu1aZYb14V51do+pTOCmA40AqVCIhG5IJ9PvYnhIFOxmdqhpaI6GeHCtpooisuutmg+Eg62KOMKuqoTaXgicQWoIYq6qiklmoqFV0UoeqqrLbq6quwxirrrLTWauutJ4QAACH5BAUKABwALAcABADOAAsAAAX/IPd0D2dyRCoUp/k8gpHOKtseR9yiSmGbuBykler9XLAhkbDavXTL5k2oqFqNOxzUZPU5YYZd1XsD72rZpBjbeh52mSNnMSC8lwblKZGwi+0QfIJ8CncnCoCDgoVnBHmKfByGJimPkIwtiAeBkH6ZHJaKmCeVnKKTHIihg5KNq4uoqmEtcRUtEREMBggtEr4QDrjCuRC8h7/BwxENeicSF8DKy82pyNLMOxzWygzFmdvD2L3P0dze4+Xh1Arkyepi7dfFvvTtLQkZBC0T/FX3CRgCMOBHsJ+EHYQY7OinAGECgQsB+Lu3AOK+CewcWjwxQeJBihtNGHSoQOE+iQ3//4XkwBBhRZMcUS6YSXOAwIL8PGqEaSJCiYt9SNoCmnJPAgUVLChdaoFBURN8MAzl2PQphwQLfDFd6lTowglHve6rKpbjhK7/pG5VinZP1qkiz1rl4+tr2LRwWU64cFEihwEtZgbgR1UiHaMVvxpOSwBA37kzGz9e8G+B5MIEKLutOGEsAH2ATQwYfTmuX8aETWdGPZmiZcccNSzeTCA1Sw0bdiitC7LBWgu8jQr8HRzqgpK6gX88QbrB14z/kF+ELpwB8eVQj/JkqdylAudji/+ts3039vEEfK8Vz2dlvxZKG0CmbkKDBvllRd6fCzDvBLKBDSCeffhRJEFebFk1k/Mv9jVIoIJZSeBggwUaNeB+Qk34IE0cXlihcfRxkOAJFFhwGmKlmWDiakZhUJtnLBpnWWcnKaAZcxI0piFGGLBm1mc90kajSCveeBVWKeYEoU2wqeaQi0PetoE+rr14EpVC7oAbAUHqhYExbn2XHHsVqbcVew9tx8+XJKk5AZsqqdlddGpqAKdbAYBn1pcczmSTdWvdmZ17c1b3FZ99vnTdCRFM8OEcAhLwm1NdXnWcBBSMRWmfkWZqVlsmLIiAp/o1gGV2vpS4lalGYsUOqXrddcKCmK61aZ8SjEpUpVFVoCpTj4r661Km7kBHjrDyc1RAIQAAIfkEBQoAGwAsBwAEAM4ACwAABf/gtmUCd4goQQgFKj6PYKi0yrrbc8i4ohQt12EHcal+MNSQiCP8gigdz7iCioaCIvUmZLp8QBzW0EN2vSlCuDtFKaq4RyHzQLEKZNdiQDhRDVooCwkbfm59EAmKi4SGIm+AjIsKjhsqB4mSjT2IOIOUnICeCaB/mZKFNTSRmqVpmJqklSqskq6PfYYCDwYHDC4REQwGCBLGxxIQDsHMwhAIX8bKzcENgSLGF9PU1j3Sy9zX2NrgzQziChLk1BHWxcjf7N046tvN82715czn9Pryz6Ilc4ACj4EBOCZM8KEnAYYADBRKnACAYUMFv1wotIhCEcaJCisqwJFgAUSQGyX/kCSVUUTIdKMwJlyo0oXHlhskwrTJciZHEXsgaqS4s6PJiCAr1uzYU8kBBSgnWFqpoMJMUjGtDmUwkmfVmVypakWhEKvXsS4nhLW5wNjVroJIoc05wSzTr0PtiigpYe4EC2vj4iWrFu5euWIMRBhacaVJhYQBEFjA9jHjyQ0xEABwGceGAZYjY0YBOrRLCxUp29QM+bRkx5s7ZyYgVbTqwwti2ybJ+vLtDYpycyZbYOlptxdx0kV+V7lC5iJAyyRrwYKxAdiz82ng0/jnAdMJFz0cPi104Ec1Vj9/M6F173vKL/feXv156dw11tlqeMMnv4V5Ap53GmjQQH97nFfg+IFiucfgRX5Z8KAgbUlQ4IULIlghhhdOSB6AgX0IVn8eReghen3NRIBsRgnH4l4LuEidZBjwRpt6NM5WGwoW0KSjCwX6yJSMab2GwwAPDXfaBCtWpluRTQqC5JM5oUZAjUNS+VeOLWpJEQ7VYQANW0INJSZVDFSnZphjSikfmzE5N4EEbQI1QJmnWXCmHulRp2edwDXF43txukenJwvI9xyg9Q26Z3MzGUcBYFEChZh6DVTq34AU8Iflh51Sd+CnKFYQ6mmZkhqfBKfSxZWqA9DZanWjxmhrWwi0qtCrt/43K6WqVjjpmhIqgEGvculaGKklKstAACEAACH5BAUKABwALAcABADOAAsAAAX/ICdyQmaMYyAUqPgIBiHPxNpy79kqRXH8wAPsRmDdXpAWgWdEIYm2llCHqjVHU+jjJkwqBTecwItShMXkEfNWSh8e1NGAcLgpDGlRgk7EJ/6Ae3VKfoF/fDuFhohVeDeCfXkcCQqDVQcQhn+VNDOYmpSWaoqBlUSfmowjEA+iEAEGDRGztAwGCDcXEA60tXEiCrq8vREMEBLIyRLCxMWSHMzExnbRvQ2Sy7vN0zvVtNfU2tLY3rPgLdnDvca4VQS/Cpk3ABwSLQkYAQwT/P309vcI7OvXr94jBQMJ/nskkGA/BQBRLNDncAIAiDcG6LsxAWOLiQzmeURBKWSLCQbv/1F0eDGinJUKR47YY1IEgQASKk7Yc7ACRwZm7mHweRJoz59BJUogisKCUaFMR0x4SlJBVBFTk8pZivTR0K73rN5wqlXEAq5Fy3IYgHbEzQ0nLy4QSoCjXLoom96VOJEeCosK5n4kkFfqXjl94wa+l1gvAcGICbewAOAxY8l/Ky/QhAGz4cUkGxu2HNozhwMGBnCUqUdBg9UuW9eUynqSwLHIBujePef1ZGQZXcM+OFuEBeBhi3OYgLyqcuaxbT9vLkf4SeqyWxSQpKGB2gQpm1KdWbu72rPRzR9Ne2Nu9Kzr/1Jqj0yD/fvqP4aXOt5sW/5qsXXVcv1Nsp8IBUAmgswGF3llGgeU1YVXXKTN1FlhWFXW3gIE+DVChApysACHHo7Q4A35lLichh+ROBmLKAzgYmYEYDAhCgxKGOOMn4WR4kkDaoBBOxJtdNKQxFmg5JIWIBnQc07GaORfUY4AEkdV6jHlCEISSZ5yTXpp1pbGZbkWmcuZmQCaE6iJ0FhjMaDjTMsgZaNEHFRAQVp3bqXnZED1qYcECOz5V6BhSWCoVJQIKuKQi2KFKEkEFAqoAo7uYSmO3jk61wUUMKmknJ4SGimBmAa0qVQBhAAAIfkEBQoAGwAsBwAEAM4ACwAABf/gJm5FmRlEqhJC+bywgK5pO4rHI0D3pii22+Mg6/0Ej96weCMAk7cDkXf7lZTTnrMl7eaYoy10JN0ZFdco0XAuvKI6qkgVFJXYNwjkIBcNBgR8TQoGfRsJCRuCYYQQiI+ICosiCoGOkIiKfSl8mJkHZ4U9kZMbKaI3pKGXmJKrngmug4WwkhA0lrCBWgYFCCMQFwoQDRHGxwwGCBLMzRLEx8iGzMMO0cYNeCMKzBDW19lnF9DXDIY/48Xg093f0Q3s1dcR8OLe8+Y91OTv5wrj7o7B+7VNQqABIoRVCMBggsOHE36kSoCBIcSH3EbFangxogJYFi8CkJhqQciLJEf/LDDJEeJIBT0GsOwYUYJGBS0fjpQAMidGmyVP6sx4Y6VQhzs9VUwkwqaCCh0tmKoFtSMDmBOf9phg4SrVrROuasRQAaxXpVUhdsU6IsECZlvX3kwLUWzRt0BHOLTbNlbZG3vZinArge5Dvn7wbqtQkSYAAgtKmnSsYKVKo2AfW048uaPmG386i4Q8EQMBAIAnfB7xBxBqvapJ9zX9WgRS2YMpnvYMGdPK3aMjt/3dUcNI4blpj7iwkMFWDXDvSmgAlijrt9RTR78+PS6z1uAJZIe93Q8g5zcsWCi/4Y+C8bah5zUv3vv89uft30QP23punGCx5954oBBwnwYaNCDY/wYrsYeggnM9B2Fpf8GG2CEUVWhbWAtGouEGDy7Y4IEJVrbSiXghqGKIo7z1IVcXIkKWWR361QOLWWnIhwERpLaaCCee5iMBGJQmJGyPFTnbkfHVZGRtIGrg5HALEJAZbu39BuUEUmq1JJQIPtZilY5hGeSWsSk52G9XqsmgljdIcABytq13HyIM6RcUA+r1qZ4EBF3WHWB29tBgAzRhEGhig8KmqKFv8SeCeo+mgsF7YFXa1qWSbkDpom/mqR1PmHCqJ3fwNRVXjC7S6CZhFVCQ2lWvZiirhQq42SACt25IK2hv8TprriUV1usGgeka7LFcNmCldMLi6qZMgFLgpw16Cipb7bC1knXsBiEAACH5BAUKABsALAcABADOAAsAAAX/4FZsJPkUmUGsLCEUTywXglFuSg7fW1xAvNWLF6sFFcPb42C8EZCj24EJdCp2yoegWsolS0Uu6fmamg8n8YYcLU2bXSiRaXMGvqV6/KAeJAh8VgZqCX+BexCFioWAYgqNi4qAR4ORhRuHY408jAeUhAmYYiuVlpiflqGZa5CWkzc5fKmbbhIpsAoQDRG8vQwQCBLCwxK6vb5qwhfGxxENahvCEA7NzskSy7vNzzzK09W/PNHF1NvX2dXcN8K55cfh69Luveol3vO8zwi4Yhj+AQwmCBw4IYclDAAJDlQggVOChAoLKkgFkSCAHDwWLKhIEOONARsDKryogFPIiAUb/95gJNIiw4wnI778GFPhzBKFOAq8qLJEhQpiNArjMcHCmlTCUDIouTKBhApELSxFWiGiVKY4E2CAekPgUphDu0742nRrVLJZnyrFSqKQ2ohoSYAMW6IoDpNJ4bLdILTnAj8KUF7UeENjAKuDyxIgOuGiOI0EBBMgLNew5AUrDTMGsFixwBIaNCQuAXJB57qNJ2OWm2Aj4skwCQCIyNkhhtMkdsIuodE0AN4LJDRgfLPtn5YDLdBlraAByuUbBgxQwICxMOnYpVOPej074OFdlfc0TqC62OIbcppHjV4o+LrieWhfT8JC/I/T6W8oCl29vQ0XjLdBaA3s1RcPBO7lFvpX8BVoG4O5jTXRQRDuJ6FDTzEWF1/BCZhgbyAKE9qICYLloQYOFtahVRsWYlZ4KQJHlwHS/IYaZ6sZd9tmu5HQm2xi1UaTbzxYwJk/wBF5g5EEYOBZeEfGZmNdFyFZmZIR4jikbLThlh5kUUVJGmRT7sekkziRWUIACABk3T4qCsedgO4xhgGcY7q5pHJ4klBBTQRJ0CeHcoYHHUh6wgfdn9uJdSdMiebGJ0zUPTcoS286FCkrZxnYoYYKWLkBowhQoBeaOlZAgVhLidrXqg2GiqpQpZ4apwSwRtjqrB3muoF9BboaXKmshlqWqsWiGt2wphJkQbAU5hoCACH5BAUKABsALAcABADOAAsAAAX/oGFw2WZuT5oZROsSQnGaKjRvilI893MItlNOJ5v5gDcFrHhKIWcEYu/xFEqNv6B1N62aclysF7fsZYe5aOx2yL5aAUGSaT1oTYMBwQ5VGCAJgYIJCnx1gIOBhXdwiIl7d0p2iYGQUAQBjoOFSQR/lIQHnZ+Ue6OagqYzSqSJi5eTpTxGcjcSChANEbu8DBAIEsHBChe5vL13G7fFuscRDcnKuM3H0La3EA7Oz8kKEsXazr7Cw9/Gztar5uHHvte47MjktznZ2w0G1+D3BgirAqJmJMAQgMGEgwgn5Ei0gKDBhBMALGRYEOJBb5QcWlQo4cbAihZz3GgIMqFEBSM1/4ZEOWPAgpIIJXYU+PIhRG8ja1qU6VHlzZknJNQ6UanCjQkWCIGSUGEjAwVLjc44+DTqUQtPPS5gejUrTa5TJ3g9sWCr1BNUWZI161StiQUDmLYdGfesibQ3XMq1OPYthrwuA2yU2LBs2cBHIypYQPPlYAKFD5cVvNPtW8eVGbdcQADATsiNO4cFAPkvHpedPzc8kUcPgNGgZ5RNDZG05reoE9s2vSEP79MEGiQGy1qP8LA4ZcdtsJE48ONoLTBtTV0B9LsTnPceoIDBDQvS7W7vfjVY3q3eZ4A339J4eaAmKqU/sV58HvJh2RcnIBsDUw0ABqhBA5aV5V9XUFGiHfVeAiWwoFgJJrIXRH1tEMiDFV4oHoAEGlaWhgIGSGBO2nFomYY3mKjVglidaNYJGJDkWW2xxTfbjCbVaOGNqoX2GloR8ZeTaECS9pthRGJH2g0b3Agbk6hNANtteHD2GJUucfajCQBy5OOTQ25ZgUPvaVVQmbKh9510/qQpwXx3SQdfk8tZJOd5b6JJFplT3ZnmmX3qd5l1eg5q00HrtUkUn0AKaiGjClSAgKLYZcgWXwocGRcCFGCKwSB6ceqphwmYRUFYT/1WKlOdUpipmxW0mlCqHjYkAaeoZlqrqZ4qd+upQKaapn/AmgAegZ8KUtYtFAQQAgAh+QQFCgAbACwHAAQAzgALAAAF/+C2PUcmiCiZGUTrEkKBis8jQEquKwU5HyXIbEPgyX7BYa5wTNmEMwWsSXsqFbEh8DYs9mrgGjdK6GkPY5GOeU6ryz7UFopSQEzygOGhJBjoIgMDBAcBM0V/CYqLCQqFOwobiYyKjn2TlI6GKC2YjJZknouaZAcQlJUHl6eooJwKooobqoewrJSEmyKdt59NhRKFMxLEEA4RyMkMEAjDEhfGycqAG8TQx9IRDRDE3d3R2ctD1RLg0ttKEnbY5wZD3+zJ6M7X2RHi9Oby7u/r9g38UFjTh2xZJBEBMDAboogAgwkQI07IMUORwocSJwCgWDFBAIwZOaJIsOBjRogKJP8wTODw5ESVHVtm3AhzpEeQElOuNDlTZ0ycEUWKWFASqEahGwYUPbnxoAgEdlYSqDBkgoUNClAlIHbSAoOsqCRQnQHxq1axVb06FWFxLIqyaze0Tft1JVqyE+pWXMD1pF6bYl3+HTqAWNW8cRUFzmih0ZAAB2oGKukSAAGGRHWJgLiR6AylBLpuHKKUMlMCngMpDSAa9QIUggZVVvDaJobLeC3XZpvgNgCmtPcuwP3WgmXSq4do0DC6o2/guzcseECtUoO0hmcsGKDgOt7ssBd07wqesAIGZC1YIBa7PQHvb1+SFo+++HrJSQfB33xfav3i5eX3Hnb4CTJgegEq8tH/YQEOcIJzbm2G2EoYRLgBXFpVmFYDcREV4HIcnmUhiGBRouEMJGJGzHIspqgdXxK0yCKHRNXoIX4uorCdTyjkyNtdPWrA4Up82EbAbzMRxxZRR54WXVLDIRmRcag5d2R6ugl3ZXzNhTecchpMhIGVAKAYpgJjjsSklBEd99maZoo535ZvdamjBEpusJyctg3h4X8XqodBMx0tiNeg/oGJaKGABpogS40KSqiaEgBqlQWLUtqoVQnytekEjzo0hHqhRorppOZt2p923M2AAV+oBtpAnnPNoB6HaU6mAAIU+IXmi3j2mtFXuUoHKwXpzVrsjcgGOauKEjQrwq157hitGq2NoWmjh7z6Wmxb0m5w66+2VRAuXN/yFUAIACH5BAUKABsALAcABADOAAsAAAX/4CZuRiaM45MZqBgIRbs9AqTcuFLE7VHLOh7KB5ERdjJaEaU4ClO/lgKWjKKcMiJQ8KgumcieVdQMD8cbBeuAkkC6LYLhOxoQ2PF5Ys9PKPBMen17f0CCg4VSh32JV4t8jSNqEIOEgJKPlkYBlJWRInKdiJdkmQlvKAsLBxdABA4RsbIMBggtEhcQsLKxDBC2TAS6vLENdJLDxMZAubu8vjIbzcQRtMzJz79S08oQEt/guNiyy7fcvMbh4OezdAvGrakLAQwyABsELQkY9BP+//ckyPDD4J9BfAMh1GsBoImMeQUN+lMgUJ9CiRMa5msxoB9Gh/o8GmxYMZXIgxtR/yQ46S/gQAURR0pDwYDfywoyLPip5AdnCwsMFPBU4BPFhKBDi444quCmDKZOfwZ9KEGpCKgcN1jdALSpPqIYsabS+nSqvqplvYqQYAeDPgwKwjaMtiDl0oaqUAyo+3TuWwUAMPpVCfee0cEjVBGQq2ABx7oTWmQk4FglZMGN9fGVDMCuiH2AOVOu/PmyxM630gwM0CCn6q8LjVJ8GXvpa5Uwn95OTC/nNxkda1/dLSK475IjCD6dHbK1ZOa4hXP9DXs5chJ00UpVm5xo2qRpoxptwF2E4/IbJpB/SDz9+q9b1aNfQH08+p4a8uvX8B53fLP+ycAfemjsRUBgp1H20K+BghHgVgt1GXZXZpZ5lt4ECjxYR4ScUWiShEtZqBiIInRGWnERNnjiBglw+JyGnxUmGowsyiiZg189lNtPGACjV2+S9UjbU0JWF6SPvEk3QZEqsZYTk3UAaRSUnznJI5LmESCdBVSyaOWUWLK4I5gDUYVeV1T9l+FZClCAUVA09uSmRHBCKAECFEhW51ht6rnmWBXkaR+NjuHpJ40D3DmnQXt2F+ihZxlqVKOfQRACACH5BAUKABwALAcABADOAAsAAAX/ICdyUCkUo/g8mUG8MCGkKgspeC6j6XEIEBpBUeCNfECaglBcOVfJFK7YQwZHQ6JRZBUqTrSuVEuD3nI45pYjFuWKvjjSkCoRaBUMWxkwBGgJCXspQ36Bh4EEB0oKhoiBgyNLjo8Ki4QElIiWfJqHnISNEI+Ql5J9o6SgkqKkgqYihamPkW6oNBgSfiMMDQkGCBLCwxIQDhHIyQwQCGMKxsnKVyPCF9DREQ3MxMPX0cu4wt7J2uHWx9jlKd3o39MiuefYEcvNkuLt5O8c1ePI2tyELXGQwoGDAQf+iEC2xByDCRAjTlAgIUWCBRgCPJQ4AQBFXAs0coT40WLIjRxL/47AcHLkxIomRXL0CHPERZkpa4q4iVKiyp0tR/7kwHMkTUBBJR5dOCEBAVcKKtCAyOHpowXCpk7goABqBZdcvWploACpBKkpIJI1q5OD2rIWE0R1uTZu1LFwbWL9OlKuWb4c6+o9i3dEgw0RCGDUG9KlRw56gDY2qmCByZBaASi+TACA0TucAaTteCcy0ZuOK3N2vJlx58+LRQyY3Xm0ZsgjZg+oPQLi7dUcNXi0LOJw1pgNtB7XG6CBy+U75SYfPTSQAgZTNUDnQHt67wnbZyvwLgKiMN3oCZB3C76tdewpLFgIP2C88rbi4Y+QT3+8S5USMICZXWj1pkEDeUU3lOYGB3alSoEiMIjgX4WlgNF2EibIwQIXauWXSRg2SAOHIU5IIIMoZkhhWiJaiFVbKo6AQEgQXrTAazO1JhkBrBG3Y2Y6EsUhaGn95hprSN0oWpFE7rhkeaQBchGOEWnwEmc0uKWZj0LeuNV3W4Y2lZHFlQCSRjTIl8uZ+kG5HU/3sRlnTG2ytyadytnD3HrmuRcSn+0h1dycexIK1KCjYaCnjCCVqOFFJTZ5GkUUjESWaUIKU2lgCmAKKQIUjHapXRKE+t2og1VgankNYnohqKJ2CmKplso6GKz7WYCgqxeuyoF8u9IQAgA7",
msg: null,
msgText: "",
selector: null,
speed: 'fast',
start: undefined
},
state: {
isDuringAjax: false,
isInvalidPage: false,
isDestroyed: false,
isDone: false, // For when it goes all the way through the archive.
isPaused: false,
isBeyondMaxPage: false,
currPage: 1
},
debug: false
,behavior: undefined,
binder: $(window), // used to cache the selector
nextSelector: "div.navigation a:first",
navSelector: "div.navigation",
contentSelector: null, // rename to pageFragment
extraScrollPx: 150,
itemSelector: "div.post",
animate: false,
pathParse: undefined,
dataType: 'html',
appendCallback: true,
bufferPx: 40,
errorCallback: function () { },
infid: 0, //Instance ID
pixelsFromNavToBottom: undefined,
path: undefined, // Either parts of a URL as an array (e.g. ["/page/", "/"] or a function that takes in the page number and returns a URL
prefill: false, // When the document is smaller than the window, load data until the document is larger or links are exhausted
maxPage: undefined // to manually control maximum page (when maxPage is undefined, maximum page limitation is not work)
};

$.infinitescroll.prototype = {

/*
----------------------------
Private methods
----------------------------
*/

// Bind or unbind from scroll
_binding: function infscr_binding(binding) {

var instance = this,
opts = instance.options;

opts.v = '2.0b2.120520';

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_binding_'+opts.behavior] !== undefined) {
this['_binding_'+opts.behavior].call(this);
return;
}

if (binding !== 'bind' && binding !== 'unbind') {
this._debug('Binding value' + binding + ' not valid');
return false;
}

if (binding === 'unbind') {
(this.options.binder).unbind('smartscroll.infscr.' + instance.options.infid);
} else {
(this.options.binder)[binding]('smartscroll.infscr.' + instance.options.infid, function () {
instance.scroll();
});
}

this._debug('Binding', binding);
},

// Fundamental aspects of the plugin are initialized
_create: function infscr_create(options, callback) {

// Add custom options to defaults
var opts = $.extend(true, {}, $.infinitescroll.defaults, options);
this.options = opts;
var $window = $(window);
var instance = this;

// Validate selectors
if (!instance._validate(options)) {
return false;
}

// Validate page fragment path
var path = $(opts.nextSelector).attr('href');
if (!path) {
this._debug('Navigation selector not found');
return false;
}

// Set the path to be a relative URL from root.
opts.path = opts.path || this._determinepath(path);

// contentSelector is 'page fragment' option for .load() / .ajax() calls
opts.contentSelector = opts.contentSelector || this.element;

// loading.selector - if we want to place the load message in a specific selector, defaulted to the contentSelector
opts.loading.selector = opts.loading.selector || opts.contentSelector;

// Define loading.msg
opts.loading.msg = opts.loading.msg || $('<div id="infscr-loading"><div>' + opts.loading.msgText + '</div></div>');

// Preload loading.img
(new Image()).src = opts.loading.img;

// distance from nav links to bottom
// computed as: height of the document + top offset of container - top offset of nav link
if(opts.pixelsFromNavToBottom === undefined) {
opts.pixelsFromNavToBottom = $(document).height() - $(opts.navSelector).offset().top;
this._debug("pixelsFromNavToBottom: " + opts.pixelsFromNavToBottom);
}

var self = this;

// determine loading.start actions
opts.loading.start = opts.loading.start || function() {

$(opts.navSelector).hide();
opts.loading.msg
.appendTo(opts.loading.selector)
.show(opts.loading.speed, $.proxy(function() {
opts.maxPage = $('#maxPages').val();

if(opts.state.currPage != opts.maxPage) {
this.beginAjax(opts);
} else {
$('#infscr-loading div').html("No more photos ...");
opts.loading.msg.fadeOut(4500);
}



}, self));
};

// determine loading.finished actions
opts.loading.finished = opts.loading.finished || function() {
if (!opts.state.isBeyondMaxPage)
opts.loading.msg.fadeOut(opts.loading.speed);
};

// callback loading
opts.callback = function(instance, data, url) {
if (!!opts.behavior && instance['_callback_'+opts.behavior] !== undefined) {
instance['_callback_'+opts.behavior].call($(opts.contentSelector)[0], data, url);
}

if (callback) {
callback.call($(opts.contentSelector)[0], data, opts, url);
}

if (opts.prefill) {
$window.bind("resize.infinite-scroll", instance._prefill);
}
};

if (options.debug) {
// Tell IE9 to use its built-in console
if (Function.prototype.bind && (typeof console === 'object' || typeof console === 'function') && typeof console.log === "object") {
["log","info","warn","error","assert","dir","clear","profile","profileEnd"]
.forEach(function (method) {
console[method] = this.call(console[method], console);
}, Function.prototype.bind);
}
}

this._setup();

// Setups the prefill method for use
if (opts.prefill) {
this._prefill();
}

// Return true to indicate successful creation
return true;
},

_prefill: function infscr_prefill() {
var instance = this;
var $window = $(window);

function needsPrefill() {
return (instance.options.contentSelector.height() <= $window.height());
}

this._prefill = function() {
if (needsPrefill()) {
instance.scroll();
}

$window.bind("resize.infinite-scroll", function() {
if (needsPrefill()) {
$window.unbind("resize.infinite-scroll");
instance.scroll();
}
});
};

// Call self after setting up the new function
this._prefill();
},

// Console log wrapper
_debug: function infscr_debug() {
if (true !== this.options.debug) {
return;
}

if (typeof console !== 'undefined' && typeof console.log === 'function') {
// Modern browsers
// Single argument, which is a string
if ((Array.prototype.slice.call(arguments)).length === 1 && typeof Array.prototype.slice.call(arguments)[0] === 'string') {
console.log( (Array.prototype.slice.call(arguments)).toString() );
} else {
console.log( Array.prototype.slice.call(arguments) );
}
} else if (!Function.prototype.bind && typeof console !== 'undefined' && typeof console.log === 'object') {
// IE8
Function.prototype.call.call(console.log, console, Array.prototype.slice.call(arguments));
}
},

// find the number to increment in the path.
_determinepath: function infscr_determinepath(path) {

var opts = this.options;
var secondOpt = true;

if(path.indexOf('photo-contest-vol-') > -1) {
secondOpt = false;
}

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_determinepath_'+opts.behavior] !== undefined) {
return this['_determinepath_'+opts.behavior].call(this,path);
}

if (!!opts.pathParse) {

this._debug('pathParse manual');
return opts.pathParse(path, this.options.state.currPage+1);

} else if (path.match(/^(.*?)\b2\b(.*?$)/) && secondOpt) {
path = path.match(/^(.*?)\b2\b(.*?$)/).slice(1);

// if there is any 2 in the url at all.
} else if (path.match(/^(.*?)2(.*?$)/)) {

// page= is used in django:
// http://www.infinite-scroll.com/changelog/comment-page-1/#comment-127
if (path.match(/^(.*?page=)2(\/.*|$)/)) {
path = path.match(/^(.*?page=)2(\/.*|$)/).slice(1);
return path;
}

path = path.match(/^(.*?)2(.*?$)/).slice(1);

} else {

// page= is used in drupal too but second page is page=1 not page=2:
// thx Jerod Fritz, vladikoff
if (path.match(/^(.*?page=)1(\/.*|$)/)) {
path = path.match(/^(.*?page=)1(\/.*|$)/).slice(1);
return path;
} else {
this._debug('Sorry, we couldn\'t parse your Next (Previous Posts) URL. Verify your the css selector points to the correct A tag. If you still get this error: yell, scream, and kindly ask for help at infinite-scroll.com.');
// Get rid of isInvalidPage to allow permalink to state
opts.state.isInvalidPage = true;//prevent it from running on this page.
}
}
this._debug('determinePath', path);

return path;

},

// Custom error
_error: function infscr_error(xhr) {

var opts = this.options;

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_error_'+opts.behavior] !== undefined) {
this['_error_'+opts.behavior].call(this,xhr);
return;
}

if (xhr !== 'destroy' && xhr !== 'end') {
xhr = 'unknown';
}

this._debug('Error', xhr);

if (xhr === 'end' || opts.state.isBeyondMaxPage) {
this._showdonemsg();
}

opts.state.isDone = true;
opts.state.currPage = 1; // if you need to go back to this instance
opts.state.isPaused = false;
opts.state.isBeyondMaxPage = false;
this._binding('unbind');

},

// Load Callback
_loadcallback: function infscr_loadcallback(box, data, url) {
var opts = this.options,
callback = this.options.callback, // GLOBAL OBJECT FOR CALLBACK
result = (opts.state.isDone) ? 'done' : (!opts.appendCallback) ? 'no-append' : 'append',
frag;

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_loadcallback_'+opts.behavior] !== undefined) {
this['_loadcallback_'+opts.behavior].call(this,box,data);
return;
}

switch (result) {
case 'done':
this._showdonemsg();
return false;

case 'no-append':
if (opts.dataType === 'html') {
data = '<div>' + data + '</div>';
data = $(data).find(opts.itemSelector);
}
break;

case 'append':
var children = box.children();
// if it didn't return anything
if (children.length === 0) {
$('#infscr-loading').hide('slow');
return this._error('end');
}
// use a documentFragment because it works when content is going into a table or UL
frag = document.createDocumentFragment();
while (box[0].firstChild) {
frag.appendChild(box[0].firstChild);
}

this._debug('contentSelector', $(opts.contentSelector)[0]);
$(opts.contentSelector)[0].appendChild(frag);

if($('body').hasClass('profile') && $('.gallery-expand').length > 0) {
showAwards();
}
// previously, we would pass in the new DOM element as context for the callback
// however we're now using a documentfragment, which doesn't have parents or children,
// so the context is the contentContainer guy, and we pass in an array
// of the elements collected as the first argument.

data = children.get();
break;
}

// loadingEnd function
opts.loading.finished.call($(opts.contentSelector)[0],opts);

// smooth scroll to ease in the new content
if (opts.animate) {
var scrollTo = $(window).scrollTop() + $(opts.loading.msg).height() + opts.extraScrollPx + 'px';
$('html,body').animate({ scrollTop: scrollTo }, 800, function () { opts.state.isDuringAjax = false; });
}

if (!opts.animate) {
// once the call is done, we can allow it again.
opts.state.isDuringAjax = false;
}

callback(this, data, url);

if (opts.prefill) {
this._prefill();
}
},

_nearbottom: function infscr_nearbottom() {

var opts = this.options,
pixelsFromWindowBottomToBottom = 0 + $(document).height() - (opts.binder.scrollTop()) - $(window).height();

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_nearbottom_'+opts.behavior] !== undefined) {
return this['_nearbottom_'+opts.behavior].call(this);
}

this._debug('math:', pixelsFromWindowBottomToBottom, opts.pixelsFromNavToBottom);

// if distance remaining in the scroll (including buffer) is less than the orignal nav to bottom....
return (pixelsFromWindowBottomToBottom - opts.bufferPx < opts.pixelsFromNavToBottom);

},

// Pause / temporarily disable plugin from firing
_pausing: function infscr_pausing(pause) {

var opts = this.options;

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_pausing_'+opts.behavior] !== undefined) {
this['_pausing_'+opts.behavior].call(this,pause);
return;
}

// If pause is not 'pause' or 'resume', toggle it's value
if (pause !== 'pause' && pause !== 'resume' && pause !== null) {
this._debug('Invalid argument. Toggling pause value instead');
}

pause = (pause && (pause === 'pause' || pause === 'resume')) ? pause : 'toggle';

switch (pause) {
case 'pause':
opts.state.isPaused = true;
break;

case 'resume':
opts.state.isPaused = false;
break;

case 'toggle':
opts.state.isPaused = !opts.state.isPaused;
break;
}

this._debug('Paused', opts.state.isPaused);
return false;

},

// Behavior is determined
// If the behavior option is undefined, it will set to default and bind to scroll
_setup: function infscr_setup() {

var opts = this.options;

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_setup_'+opts.behavior] !== undefined) {
this['_setup_'+opts.behavior].call(this);
return;
}

this._binding('bind');

return false;

},

// Show done message
_showdonemsg: function infscr_showdonemsg() {

var opts = this.options;

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['_showdonemsg_'+opts.behavior] !== undefined) {
this['_showdonemsg_'+opts.behavior].call(this);
return;
}

opts.loading.msg
.find('img')
.hide()
.parent()
.find('div').html(opts.loading.finishedMsg).animate({ opacity: 1 }, 2000, function () {
$(this).parent().fadeOut(opts.loading.speed);
});

// user provided callback when done
opts.errorCallback.call($(opts.contentSelector)[0],'done');
},

// grab each selector option and see if any fail
_validate: function infscr_validate(opts) {
for (var key in opts) {
if (key.indexOf && key.indexOf('Selector') > -1 && $(opts[key]).length === 0) {
this._debug('Your ' + key + ' found no elements.');
return false;
}
}

return true;
},

/*
----------------------------
Public methods
----------------------------
*/

// Bind to scroll
bind: function infscr_bind() {
this._binding('bind');
},

// Destroy current instance of plugin
destroy: function infscr_destroy() {
this.options.state.isDestroyed = true;
this.options.loading.finished();
return this._error('destroy');
},

// Set pause value to false
pause: function infscr_pause() {
this._pausing('pause');
},

// Set pause value to false
resume: function infscr_resume() {
this._pausing('resume');
},

beginAjax: function infscr_ajax(opts) {
var instance = this,
path = opts.path,
box, desturl, method, condition;

// increment the URL bit. e.g. /page/3/
opts.state.currPage++;

// Manually control maximum page 
if ( opts.maxPage != undefined && opts.state.currPage > opts.maxPage ){
opts.state.isBeyondMaxPage = true;
this.destroy();
return;
}

// if we're dealing with a table we can't use DIVs
box = $(opts.contentSelector).is('table, tbody') ? $('<tbody/>') : $('<div/>');

desturl = (typeof path === 'function') ? path(opts.state.currPage) : path.join(opts.state.currPage);

if(desturl==last_page){
instance._debug('heading into ajax repeated', desturl);
return;
}
last_page=desturl;
instance._debug('heading into ajax', desturl);

method = (opts.dataType === 'html' || opts.dataType === 'json' ) ? opts.dataType : 'html+callback';
if (opts.appendCallback && opts.dataType === 'html') {
method += '+callback';
}

switch (method) {
case 'html+callback':
instance._debug('Using HTML via .load() method');
box.load(desturl + ' ' + opts.itemSelector, undefined, function infscr_ajax_callback(responseText) {
instance._loadcallback(box, responseText, desturl);
});

break;

case 'html':
instance._debug('Using ' + (method.toUpperCase()) + ' via $.ajax() method');
$.ajax({
// params
url: desturl,
dataType: opts.dataType,
complete: function infscr_ajax_callback(jqXHR, textStatus) {
condition = (typeof (jqXHR.isResolved) !== 'undefined') ? (jqXHR.isResolved()) : (textStatus === "success" || textStatus === "notmodified");
if (condition) {
instance._loadcallback(box, jqXHR.responseText, desturl);
} else {
instance._error('end');
}
}
});

break;
case 'json':
instance._debug('Using ' + (method.toUpperCase()) + ' via $.ajax() method');
$.ajax({
dataType: 'json',
type: 'GET',
url: desturl,
success: function (data, textStatus, jqXHR) {
condition = (typeof (jqXHR.isResolved) !== 'undefined') ? (jqXHR.isResolved()) : (textStatus === "success" || textStatus === "notmodified");
if (opts.appendCallback) {
// if appendCallback is true, you must defined template in options.
// note that data passed into _loadcallback is already an html (after processed in opts.template(data)).
if (opts.template !== undefined) {
var theData = opts.template(data);
box.append(theData);
if (condition) {
instance._loadcallback(box, theData);
} else {
instance._error('end');
}
} else {
instance._debug("template must be defined.");
instance._error('end');
}
} else {
// if appendCallback is false, we will pass in the JSON object. you should handle it yourself in your callback.
if (condition) {
instance._loadcallback(box, data, desturl);
} else {
instance._error('end');
}
}
},
error: function() {
instance._debug("JSON ajax request failed.");
instance._error('end');
}
});

break;
}
},

// Retrieve next set of content items
retrieve: function infscr_retrieve(pageNum) {
pageNum = pageNum || null;

var instance = this,
opts = instance.options;

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['retrieve_'+opts.behavior] !== undefined) {
this['retrieve_'+opts.behavior].call(this,pageNum);
return;
}

// for manual triggers, if destroyed, get out of here
if (opts.state.isDestroyed) {
this._debug('Instance is destroyed');
return false;
}

// we dont want to fire the ajax multiple times
opts.state.isDuringAjax = true;

opts.loading.start.call($(opts.contentSelector)[0],opts);
},

// Check to see next page is needed
scroll: function infscr_scroll() {

var opts = this.options,
state = opts.state;

// if behavior is defined and this function is extended, call that instead of default
if (!!opts.behavior && this['scroll_'+opts.behavior] !== undefined) {
this['scroll_'+opts.behavior].call(this);
return;
}

if (state.isDuringAjax || state.isInvalidPage || state.isDone || state.isDestroyed || state.isPaused) {
return;
}

if (!this._nearbottom()) {
return;
}

this.retrieve();

},

// Toggle pause value
toggle: function infscr_toggle() {
this._pausing();
},

// Unbind from scroll
unbind: function infscr_unbind() {
this._binding('unbind');
},

// update options
update: function infscr_options(key) {
if ($.isPlainObject(key)) {
this.options = $.extend(true,this.options,key);
}
}
};


/*
----------------------------
Infinite Scroll function
----------------------------

Borrowed logic from the following...

jQuery UI
- https://github.com/jquery/jquery-ui/blob/master/ui/jquery.ui.widget.js

jCarousel
- https://github.com/jsor/jcarousel/blob/master/lib/jquery.jcarousel.js

Masonry
- https://github.com/desandro/masonry/blob/master/jquery.masonry.js

*/

$.fn.infinitescroll = function infscr_init(options, callback) {


var thisCall = typeof options;

switch (thisCall) {

// method 
case 'string':
var args = Array.prototype.slice.call(arguments, 1);

this.each(function () {
var instance = $.data(this, 'infinitescroll');

if (!instance) {
// not setup yet
// return $.error('Method ' + options + ' cannot be called until Infinite Scroll is setup');
return false;
}

if (!$.isFunction(instance[options]) || options.charAt(0) === "_") {
// return $.error('No such method ' + options + ' for Infinite Scroll');
return false;
}

// no errors!
instance[options].apply(instance, args);
});

break;

// creation 
case 'object':

this.each(function () {

var instance = $.data(this, 'infinitescroll');

if (instance) {

// update options of current instance
instance.update(options);

} else {

// initialize new instance
instance = new $.infinitescroll(options, callback, this);

// don't attach if instantiation failed
if (!instance.failed) {
$.data(this, 'infinitescroll', instance);
}

}

});

break;

}

return this;
};



/* 
* smartscroll: debounced scroll event for jQuery *
* https://github.com/lukeshumard/smartscroll
* Based on smartresize by @louis_remi: https://github.com/lrbabe/jquery.smartresize.js *
* Copyright 2011 Louis-Remi & Luke Shumard * Licensed under the MIT license. *
*/

var event = $.event,
scrollTimeout;

event.special.smartscroll = {
setup: function () {
$(this).bind("scroll", event.special.smartscroll.handler);
},
teardown: function () {
$(this).unbind("scroll", event.special.smartscroll.handler);
},
handler: function (event, execAsap) {
// Save the context
var context = this,
args = arguments;

// set correct event type
event.type = "smartscroll";

if (scrollTimeout) { clearTimeout(scrollTimeout); }
scrollTimeout = setTimeout(function () {
$(context).trigger('smartscroll', args);
}, execAsap === "execAsap" ? 0 : 100);
}
};

$.fn.smartscroll = function (fn) {
return fn ? this.bind("smartscroll", fn) : this.trigger("smartscroll", ["execAsap"]);
};


})(window, jQuery);
var gallery_inifinite_name = "gallery.waterfall";

var fetchUntil=0;
var fetchUntil_lastPos=0;
var current_page=0;
var fetchUntilcurrent_page=0;
var historicalIds = new Array();//remove repeated images by id

$(document).ready(function() { 
if($("body").hasClass("infinitescroll")){

var gallery_thumbnails="gallery.photo thumbnail";
if($("gallery.waterfall400").length > 0){
gallery_inifinite_name = "gallery.waterfall400";
}

var is_masonry=true;
//view inspirationa galleries
if(typeof $("a.next.button").attr("data-container")!="undefined" && $("a.next.button").attr("data-container")!=""){
gallery_inifinite_name = $("a.next.button").attr("data-container");
gallery_thumbnails = $("a.next.button").attr("data-items");
is_masonry=($("a.next.button").attr("data-items")=="1"?true:false);
}

setInfiniteScroll(gallery_inifinite_name,'.box-pager', '.box-pager a.next',gallery_thumbnails,is_masonry, " ");
fetchUntil = $(gallery_inifinite_name).find("thumbnail:last").find(".social-icons").attr("media_id");

//Prevent browser back on random galleries
var req_sort = getUrlParameterByName("sort");
var isnt_sort = (typeof req_sort=="undefined" || req_sort =="" || req_sort=="desc");
if(isnt_sort){
fetchUntilcurrent_page=getUrlParameterByName("currpage");
if(fetchUntilcurrent_page>0){
fetchUntil_lastPos=getUrlParameterByName("pos");
for(var i =1;i < fetchUntilcurrent_page ; i++){
$(gallery_inifinite_name).infinitescroll('retrieve');
}

}
}

if($("body").hasClass("historical")){
$(gallery_inifinite_name).find("thumbnail").each(function(i,obj){
var actualId = $(obj).find(".social-icons").attr("media_id");
historicalIds.push(actualId);
});
}
}


});

//All values passed as CSS/Jquery format
function setInfiniteScroll(container,navSelectorClass, nextSelectorClass, itemSelector, isMasonry, imgSrc, pixelsFromNavToBottom){
if(typeof tt_init !="undefined"){
tt_init();
}

$(container).infinitescroll('destroy');

if(typeof container=="undefined" || container == null){
container =gallery_inifinite_name;
}
if(typeof itemSelector=="undefined" || itemSelector == null){
itemSelector = 'gallery.photo thumbnail';
}

if(typeof nextSelectorClass=="undefined" || nextSelectorClass == null){
nextSelectorClass = '.box-pager a.next';
}
if(typeof navSelectorClass=="undefined" || navSelectorClass == null){
navSelectorClass = '.box-pager';
}
if(typeof pixelsFromNavToBottom=="undefined" || pixelsFromNavToBottom == null){
pixelsFromNavToBottom=800;
}
if(typeof imgSrc=="undefined" || imgSrc == null){
imgSrc = '/media/images/layout/ajax-loader.gif';
}

var gallery_waterfall = $(container);

gallery_waterfall.infinitescroll({
navSelector: navSelectorClass,// selector for the paged navigation
nextSelector : nextSelectorClass,// selector for the NEXT link (to page 2)
itemSelector : itemSelector,// selector for all items you'll retrieve
extraScrollPx: 0,
pixelsFromNavToBottom: pixelsFromNavToBottom,
loading: {
finishedMsg: '',
img: imgSrc,
msgText: '',
speed: 0
}
},
// trigger Masonry as a callback
function( newElements, infiniteObject ) {

if(!isMasonry){

if (typeof addPeerDropEvents == 'function') {
addPeerDropEvents();
}

if (typeof addLikeEvents == 'function') {
addLikeEvents();
}

if (typeof addOpenPopup == 'function') {
addOpenPopup();
}
}

current_page = infiniteObject.state.currPage;
if($("body").hasClass("photoframe") && $("body").hasClass("fetchuntil")){
if(fetchUntil>0){
$(newElements).each(function(i,obj){
var actualId = $(obj).find(".social-icons").attr("media_id");
if(actualId>=fetchUntil){
$(obj).remove();
}
});
}

var lastElement= ($(newElements).last());
fetchUntil = $(lastElement).find(".social-icons").attr("media_id");

}else if($("body").hasClass("historical") || (location.hash.indexOf("/activity")>0) ){
$totalAdds=0;
$(newElements).each(function(i,obj){

var actualId = $(obj).find(".social-icons").attr("media_id");

if(typeof actualId!="undefined"){
if($.inArray(actualId,historicalIds)!==-1){
$(obj).remove();
}else{
historicalIds.push(actualId);
$totalAdds++;
}
}
});
//consoleLog($totalAdds);
if($totalAdds===0){
gallery_waterfall.infinitescroll('retrieve');
}
}

// removing repeated user photos from all (max 2)
if($("body").hasClass("all-new")) {
$(newElements).each(function(i,obj){
var actualClass = $(obj).attr("class");
if($('.' + actualClass).length > 2) {
$(obj).remove();
}
});
}

if(fetchUntilcurrent_page==current_page){
//console.log(current_page + " vs " + fetchUntilcurrent_page + " move to " + fetchUntil_lastPos);
window.scrollBy(0, fetchUntil_lastPos);
}

if(!isMasonry){
if($("body").hasClass("delayedlazy")){
replaceDelayedImages();//gallery.js
}
return;
}

if($("body").hasClass("delayedlazy")){
var $newElems = $( newElements );
gallery_waterfall.masonry( 'appended', $newElems, true );
masonryLoad();
replaceDelayedImages();//gallery.js
}
else{
// hide new items while they are loading
var $newElems = $( newElements ).css({ opacity: 0.2 });
// ensure that images load before adding to masonry layout
$newElems.imagesLoaded(function(){
// show elems now they're ready
$newElems.animate({ opacity: 1 });
gallery_waterfall.masonry( 'appended', $newElems, true );
});
}

if(typeof tt_Do !="undefined"){
tt_init();
}

if (typeof addPeerDropEvents == 'function') {
addPeerDropEvents();
}

if (typeof addLikeEvents == 'function') {
addLikeEvents();
}


if (typeof addOpenPhotoSaleEvents == 'function') {
addOpenPhotoSaleEvents();
}
}
);
}

//Using infinite scroll - the photo page is called as an iframe
var isCtrl = false;
if($("body").hasClass("photoframe")){
var lastPos=0;

addInfiniteGalleryEvent();

$(document).keydown(function(event) {
if (event.which == 17 || (event.which == 224) || (event.which == 91)) {
isCtrl = true;
}

}).keyup(function(){
isCtrl = false;
});

window.onpopstate = function(event){
var iframe = $("#photoframe");
if(iframe.length>0 ){
$("body").removeClass("noscroll");
window.scrollBy(0, lastPos[1]);
$(iframe).remove();
$("#main_content").css("opacity",1);
}
};

function getScrollingPosition(){
var position = [0, 0];
if (typeof window.pageYOffset != 'undefined')
{
position = [
window.pageXOffset,
window.pageYOffset
];
}
else if (typeof document.documentElement.scrollTop
!= 'undefined' && document.documentElement.scrollTop > 0)
{
position = [
document.documentElement.scrollLeft,
document.documentElement.scrollTop
];
} 
else if (typeof document.body.scrollTop != 'undefined')
{
position = [
document.body.scrollLeft,
document.body.scrollTop
];
}

return position;
}
}

function addInfiniteGalleryEvent() {
if (typeof addOpenPhotoSaleEvents == 'function') {
return ;
}

$(document).on("click","gallery > thumbnail > div > a",function(e){
if(!$(this).hasClass('trigger-thumb')) {
openPhotoFrame(e,this);
}
});
$(document).on("click","gallery#galinf > div > thumbnail > a",function(e){
if(!$(this).hasClass('trigger-thumb')) {
openPhotoFrame(e,this);
}
});

$(document).on("click","gallery#galinf > thumbnail > a",function(e){
if(!$(this).hasClass('trigger-thumb')) {
openPhotoFrame(e,this);
}
});

$(document).on("click","gallery.ranks thumbnail > div > a",function(e){
if(!$(this).hasClass('trigger-thumb')) {
openPhotoFrame(e,this);
}
});
}

function openPhotoFrame(e,obj){
if($('#header-banner').length > 0) {
$('#header-banner').css({ padding: 0 }).height('0px');
$('#header-banner').hide();

var pad = 0;


if($('.mobile').length > 0) {
pad = 44;
}

$('body').css({paddingTop: pad });
}

if($("html").hasClass("mobile")){
return;
}

if(location.hash.indexOf("/projects")>0 || isCtrl){
return;
}
if(location.hash.indexOf("/album")>0 || isCtrl){
return;
}
if($(obj).hasClass("onparent")){
return;
}

e.preventDefault();

var url =$(obj).attr("href");

var iframe = $("#photoframe");
iframe.remove();

$("body").append("<iframe id='photoframe' width='100%' height='300px' style='min-height:300px; position:fixed;top:0;z-index:2147483646;'>Loading...</iframe>");
iframe = $("#photoframe");

$(iframe).attr("height",$(window).height());

lastPos= getScrollingPosition();
$("#main_content").css("opacity",0);




var timeOut=600;
if($("html").hasClass("ie")){
timeOut=1500;
}

setTimeout(function(){
$("body").addClass("noscroll");
},timeOut);

/*$(iframe).load(function() {
$(iframe).contents().find("a").attr("target", "_parent");
});*/

$(iframe).attr("src",url + "?it#photopage");

$( window ).resize(function() {
$(iframe).attr("height",$(window).height());
});

var data = {url: url, lastPos:lastPos, page: current_page, search: queryToObject(), hash:location.hash};
window.history.pushState(data, 'photopage', url);
}var value = "Write a comment";
$('.form-textarea').on('focus',function(){
$(this).parent().addClass('focus');
}).on('blur',function(){
$(this).parent().removeClass('focus');
});

$('.form-textarea.empty').on('focus',function(){
if ($(this).val() == value) {
$(this).removeClass('empty');
$(this).val('');
}
}).on('blur',function(){
if ($(this).val() == '') {
$(this).addClass('empty');
$(this).val(value);
}
});
$(document).on('click','#media_comment .form-facebook',function(e) {
commentSubmits($('#media_comment'), function(data){
fbTask(function(){
FB.api(
'/me/feed', 
'post', {
link: share_link || window.location.href,
message: data.comment +' at ViewBug '
}, function(response) {
$(".hidden_form").show();
});
},'publish_stream'
);
});
}
);

var commentSubmits = function(form, onComplete) {
var form = $(form);
var data = form.serializeJSON();
$.extend(data, {'contest_id' : contest_id, 'media_id': media_id});
if (checkForm(form)) {
fbTask(function(){
FB.api('/me','get',{},function(response){
var name = response.name;
var avatar = response.picture;
$.post(
"/contest/anonymous/facebookComment",
data,
function(resp) {
var last = $('#comments > items > item:last');
$("#comments > items").append(resp.comment);
var comment = $('#comments > items > item:last');;
comment.addClass('last');

if($('#comments > items > item').length == 0) {
$('#comments > items').append(comment);
last = $('#comments > items');
} else {
last.removeClass('last').after(comment);
}

$('#comments-count').html(parseInt($('#comments-count').html())+1);
form.find('textarea').addClass('empty').val('Write a comment');
setTimeout(function(){
enableSubmit(form, form.find('.form-submit, .form-facebook'));
if (typeof onComplete != 'undefined') {
onComplete(data);
}
}, 500
);
}
)
});
});
} else {
enableSubmit(form, form.find('.form-submit, .form-facebook'));
}
}
$("#main_content").css("min-height",$(document).height()-80);

if (window.top !== window.self) window.top.location.replace(window.self.location.href);

function paginationLinks() {
$('#members-html .box-pager a, #members-html .members_sideBar_categories a, .showMore a').unbind();
$('#members-gallery-loader #members-gallery .member-image img').unbind();
$('#members-gallery-loader').html("");
loadedImg = 0;

$('#members-html .box-pager a, #members-html .members_sideBar_categories a, .showMore a').bind({
click: function(e) {
e.preventDefault();

var aHref = this.href;
history.pushState( null, null, aHref );

$('#members-gallery-alpha').height($('#main_content').height());
$('#members-gallery-alpha').fadeIn(0);
$('body, html').animate({scrollTop : 0}, 'fast');

$.ajax({
url: aHref,
type: "GET",
success: function(data) {
$('#members-gallery-loader').html(data);

var new_title = $('#members-gallery-loader #new_title').val();
document.title = new_title;

totalImg = $('#members-gallery-loader .member-image img').length;

if(totalImg > 0) {
$('#members-gallery-loader #members-gallery .member-image img').bind({
load: function() {
loadedImg++;
if(loadedImg == 1) {
$('#members-html').html( $('#members-gallery-loader').html() );
disableLinks();

$('#members-gallery-alpha').height($('#main_content').height());
$('#members-gallery-alpha').fadeOut(400);

$.each($("#members-html .box-pager a"), function(index, value) {
if($(this).attr('href').charAt(0) == "#") {
$(this).attr('href', $(this).attr('href').substr(1))
}
});
}

if(loadedImg == totalImg) {
paginationLinks();
}
}
});
} else {
$('#members-html').html( $('#members-gallery-loader').html() );
$('#members-gallery-alpha').fadeOut(400);
paginationLinks();
}
}
});
}
});
}

function disableLinks() {
$('#members-html .box-pager a, #members-html .members_sideBar_categories a, .showMore a').unbind();
$('#members-html .box-pager a, #members-html .members_sideBar_categories a, .showMore a').bind({
click: function(e) {
}
});
}

var totalImg = 0;
var loadedImg = 0;
var url_prefix = (version == 1 ? '/member': '');

$(document).ready(function() {

if($('#modalwelcome').length > 0) {
setTimeout(function(){
$('#modalwelcome, .reveal-modal-bg').fadeIn(1000);
},1000);

$('.reveal-modal-bg, .reveal-close').click(function() {
$('#modalwelcome, .reveal-modal-bg').fadeOut(500);
});
}

if(history.pushState != undefined) {
paginationLinks();
}

$('#edit-id').focus(function() {
$('#edit-city').val('');
});
$('#edit-city').focus(function() {
$('#edit-id').val('');
});

if($(window).width() <= 750) {
$('#members_searchbar #member_search .input_wrapper input').attr('placeholder','Username or Email');
$('#members_searchbar #member_searchcity .input_wrapper input').attr('placeholder','City');
}

$(window).resize(function() {
if($(window).width() <= 750) {
$('#members_searchbar #member_search .input_wrapper input').attr('placeholder','Username or Email');
$('#members_searchbar #member_searchcity .input_wrapper input').attr('placeholder','City');
}
});

//scroll event for blockTabs
$(window).scroll(function (event) {
blockTabPosition();
});

// Send message
$(document).on('click','.member-msg-icon a.send-message-link',function(e) {
e.preventDefault();
sendUserMessageMemberSearch(this);
});
});


function blockTabPosition(is_animated) {
if(typeof is_animated == "undefined"){
is_animated = false;
}
var windowY = $(this).scrollTop();

if($('.logged-in #members-tabs.block-tabs').length > 0 && $('.mobile').length == 0) {

var top_limit = header_banner_height + 75;
var nav_top = top_limit - windowY;
if(nav_top < 0) {
nav_top = 0;
} else if(nav_top > top_limit) {
nav_top = top_limit;
}

var styles= {top:'0',position:'',marginTop:'',zIndex:3};
if(nav_top===0){
styles = {top:'0px',position:'fixed',marginTop:'0',zIndex:3};
}

$('#members-tabs.block-tabs').css(styles);

if(is_animated) {
$('#members-tabs.block-tabs').animate({ top: nav_top }, 800);
} else {
$('#members-tabs.block-tabs').css({ top: nav_top });
}

} else if($('.mobile').length == 0) {

if($('body').hasClass('submissions')) {
var top_limit = header_banner_height + 44;
var nav_top = top_limit - windowY;

if(windowY > top_limit) {
nav_top = 0;
}

if(is_animated) {
$('.block-tabs').animate({ top: nav_top }, 800);
} else {
$('.block-tabs').css({ top: nav_top });
}

} else {
var top_limit = header_banner_height + 44;
if($('.contest-gallery').length > 0 || $('.challenge-gallery').length > 0) {
top_limit = header_banner_height + 136;
}

var nav_top = top_limit - windowY;
if(nav_top < top_limit) {
nav_top = top_limit;
} else if(nav_top > top_limit) {
nav_top = top_limit;
}
}

if(is_animated) {
$('.block-tabs').animate({ top: nav_top }, 800);
} else {
$('.block-tabs').css({ top: nav_top });
}
}
}


function sendUserMessageMemberSearch(obj){
if (logged()) {
var popup = popFullscreenHtml('', '<loading></loading>','popupsm');
$('#popupsm .container .content').css({'height':'auto'});
$.get(
url_prefix + $(obj).attr('data-link'),
function(data) {
if(typeof popup =="undefined"){
popup = $("#popupsm");
}
popup.find('.content:first').html(data);
attachFormValidateEvents();
$('#send_message').submit(function(e) {
e.preventDefault();
var form = $("#send_message");
var data = form.serializeJSON();
if (logged()) {
if (checkForm(form)) {
$.post(
url_prefix + form.attr('action'),
data,
function(resp) {
if(resp.success==0 && resp.message!=""){
enableSubmit(form, form.find('.form-submit'));
alert(resp.message);
}else{
$('#popupsm .container form#send_message').hide();
$('#popupsm .container .content').css({'height':'165px'});
$('#popupsm .container .content').html('<div id="confirmationmsg">Your message was sent</div>');
}
}
);
} else {
enableSubmit(form, form.find('.form-submit'));
}
}
});
}
);
}
return false;
}

function followall(){
//Function to follow al users shown in popup at once
var cont = 1 ;
$('#popwelcome').find('.member-block').each(function() {
var button = $('.member-block.memberno'+cont+' a');
if(!button.hasClass('not')){
$('#popwelcome .member-block.memberno'+cont+' .button.follow').click();
}
cont++;
});

//Closing pop up after follow
$('.welcomepop_tittle a').text('Great!');
setTimeout(function(){
$('#modalwelcome, .reveal-modal-bg').fadeOut(1000);
$("#popwelcome").hide();
},2000);

}var sizes = new Array('widepreview400','large','large1300');//,'large1600');
var default_size = 'widepreview400';
var is_image=true;
function loadAndSetNextImage(element){
//Get current size

var file = $(element).attr("src");
if($(element).hasClass("heavy-bg")){
file = $(element).css("background-image");
is_image=false;
}

if(typeof file === "undefined"){
return;
}

var csize = "";
jQuery.each(sizes, function(index, item){
//sizes.forEach(function(item){
if(file.indexOf(item+".jpg")>0){
csize = item;
return;
}
});

//Calculate next size based on user height
var wHeight =$(window).height();
if(wHeight>600){
next_size = "large";//"large1300";
if($(element).attr("data-max-imagesize")!=""){
next_size = $(element).attr("data-max-imagesize");
}
else{
next_size="large1300";
}
}
else if(wHeight > 300 && csize!=="largeslideshow"){
next_size = "large";
}
else{
next_size = "";
}
/*var pos = jQuery.inArray(csize,sizes);
next_size = sizes[pos+1];
*/
if( next_size=="" || (csize!=="" && typeof next_size==="undefined" && next_size!=="") || csize===next_size ){
return;
}

var heavyImage = new Image(); 
file = file.replace(csize,next_size);
if(!is_image){
file = file.replace("url('","");
file = file.replace('url("','');
file = file.replace("')","");
file = file.replace('")','');
}

if(file.indexOf("undefined/") === 0){
//Invalid image...
return;
}

heavyImage.src = file;

heavyImage.onload = function(){
if(is_image){
$(element).attr("src",heavyImage.src);
}
else{
$(element).css("background-image",'url('+ heavyImage.src + ')');
}
};

heavyImage.onerror = function(e){
JL().fatalException(file + " not found",e);
};

}

$(window).resize(function(e){
$(".loadHeavy").each(function(){
loadAndSetNextImage(this);
});
});

$(document).ready(function(){
$(".loadHeavy").each(function(){
loadAndSetNextImage(this);
});
});