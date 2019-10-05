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

})();cache.notification = false;
cache.notification_last = false;
cache.tid.notification = null;
var notification_request = false;
var notifictaion_on_complete = false;
var target = false;

function initRequestNotifications() {
if(!$("body").hasClass("logged-in")){
return;
}
setTimeout(function() {
if (cache.notification == false) {
requestNotifications();
}
}, 7500);

requestNotificationsTimeout();
}

function requestNotificationsTimeout(delay) {
if(!$("body").hasClass("logged-in")){
return;
}
if (!delay) {
delay = 45;
}

if (cache.tid.notification) {
clearTimeout(cache.tid.notification);
}

cache.tid.notification = setTimeout(function() {
requestNotifications(function() {
var popup = $('#notifications');
if (popup.length) {
updateNotifications(popup);
}
requestNotificationsTimeout(delay >= 300 ? 300: delay+10);
}
);
}, delay * 1000);
}

function requestNotifications() {
if(!$("body").hasClass("logged-in")){
return;
}

if (!notification_request) {
notification_request = true;
var is_secondcall = (cache.notification_last);
$.post(
'/user/notifications',
(cache.notification_last ? {date: cache.notification_last.created}: null),
function(resp) {
if (cache.notification == false) {
cache.notification = {items: Array()};
}
if (resp.items) {
if (resp.items.length) {
for (n in resp.items) {
cache.notification.items.push(resp.items[n]);
}
cache.notification_last = resp.items[resp.items.length-1];
}
}

if (notifictaion_on_complete) {
notifictaion_on_complete();
}
notification_request = false;

//if cookie is active, don't show notification for 1 day
var span = $('statusbar .notifications span');
var cookie = readCookie('hide_num_notifications');
if(typeof cookie == "undefined"){
cookie=0;
}
if(resp.total < 1 && cookie == 1){
return ;
}

if (resp.total > 0 && (is_secondcall || eval(span.text())==0)) {
var before = eval($('.box-stats .stat.notifications').text());

if(before == undefined) {
before = 0;
}

var totalss = resp.total + before;
if(totalss > 30) {
totalss = 30;
}

$('.box-stats .stat.notifications').html(totalss);

resp.total ? span.show(): span.hide();
span.html(resp.total + eval(span.text()));
}
}
);
}
}

var first_time = true;
function updateNotifications(popup) {
var items = cache.notification.items;
for (n in items) {
if(items[n].highlight == 0 || first_time) {
var item = '<item'+ (items[n].status < 3 ? ' class="unread' + (items[n].highlight == 1 ? ' high' : '') + '"' : (items[n].highlight == 1 ? ' class="high"' : ''))+' url="'+ items[n].href +'" notification_id="'+items[n].id+'" ntype="'+items[n].ntype+'">'+
'<thumbnail><a href="javascript:"><img src="'+ (items[n].file2 ? items[n].file2 : items[n].file) +'"width="35" height="35" /></a></thumbnail>'+
'<div class="details">'+ items[n].message +'</div>'+
'</item>';

if ($.browser.msie && $.browser.version < 9) {
var div = $('<div></div>');
popup.find('items').prepend(div);
div[0].innerHTML = item;

} else {
popup.find('items').prepend(item);
}
}
}
first_time = false;
cache.notification.items = Array();
return true;
};

function toggleNotification() {
var span = $('statusbar .notifications span');
var popup = popNotification();

if (popup) {
popup.find('.content:first').html('<items></items><div class="footer center"><a href="/user/notifications/all">View All</a></div>');
popup.find('.container').after('<div class="downarrow"></div>');
if (cache.notification == false) {
cache.notification = {items: Array()};
notifictaion_on_complete = function(){
updateNotifications(popup);
span.html('').hide();
$('.box-stats .stat.notifications').html('<span></span>');
};
requestNotifications();
} else {
updateNotifications(popup);
span.html('').hide();
$('.box-stats .stat.notifications').html('<span></span>');
}
}


//Set cookie
var exdays = 1;
var exdate=new Date();

var now = new Date();
var time = now.getTime();
time += 43200 * 1000;
now.setTime(time);
document.cookie = 
'hide_num_notifications=1' + 
'; expires=' + now.toGMTString() + 
'; path=/';
}

$(document).ready(function(){
setTimeout(function() {
$.post(
'/user/notifications/header',
function(resp) {
var box_stats_inbox = $('.inbox tabs');
var box_stats_header = $('header .box-stats');

if(box_stats_inbox.length > 0) {
resp.messages_comments = parseInt(resp.messages) + parseInt(resp.comments);

for (n in resp) {
var stat = box_stats_inbox.find('.'+ n);
if (stat.length) {
if (resp[n] > 0) {
if (stat.parent().hasClass('hide')) {
stat.parent().removeClass('hide');
stat.parents('li:first').addClass('bold');
}

var reee = resp[n];

if(reee > 30) {
if(stat.hasClass('notifications')) {
reee = 30;
}
}

stat.html(resp[n]).show();
} else {
stat.html('').hide();
}
}
}
}

resp.messages = parseInt(resp.messages) + parseInt(resp.comments);
resp.comments = 0;

for (n in resp) {
var stat = box_stats_header.find('.'+ n);
if (stat.length) {
if (resp[n] > 0) {
if (stat.parent().hasClass('hide')) {
stat.parent().removeClass('hide');
stat.parents('li:first').addClass('bold');
}

var reee = resp[n];

if(reee > 30) {
if(stat.hasClass('notifications')) {
reee = 30;
}
}

stat.html(reee).show();
} else {
stat.html('').hide();
}
}
}
}
);
}, 4500);

/*
 *Remove - Error on mobile
$('.popup.notifications').on('mouseover', function() {
$('body').addClass('noscroll');
$('body').removeClass('noscrollrevert');
});

$('.popup.notifications').on('mouseout', function() {
$('body').removeClass('noscroll');
$('body').addClass('noscrollrevert');
});*/

$('.box-stats .stat.notifications').on('click', function() {
var span = $('statusbar .notifications span');
//if (span.is(':visible')) {
$.post(
'/user/notifications/reset-counter/',
function(resp) {
}
);
//}
toggleNotification();
});

$('html').mouseup(function(e) {
var popup = $('#notifications');
if (popup.length && popup.is(':visible') && !$(e.target).hasClass('notifications') && !$(e.target).parents('.popup.notifications:first').length) {
popup.hide();
}
});

$('section item .details .otherusers').on('click', function() {
var popup = $(this).parent().find('.otherspop');
if (popup.is(':hidden')) {
popup.show();
} else {
popup.hide();
}
return;
});

$(document).on('click','.notifications item, .notifications-wrapper item',function(e) {
e.preventDefault();
var url = $(this).attr('url');
var target = $(this).attr('target');
var noti_id = $(this).attr('notification_id');

if ($(e.target).is('a')) {
url = $(e.target).attr('href');
}

if(target == '_blank' || noti_id == 24193 || noti_id == 24270 || noti_id == 24283 || noti_id == 24297 || noti_id == 24362 || noti_id == 24373 || noti_id == 24408) {
window.open(url);
} else {

if ($(this).hasClass('unread')) {
$.post(
'/user/notifications/read/' + $(this).attr('notification_id'), {
ntype: $(this).attr('ntype')
},
function(resp) {
if(target != '_blank') {
redirect(url);
}
}
);
} else {
if(target != '_blank') {
redirect(url);
}
}
}
});
initRequestNotifications();
});(function($) {
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
var tt_elements = [];
var tt_elements_queue = [];

var is_photo_page = ($('#main_image').length > 0);

function tt_init(){
if(is_photo_page && !$('#main_image').hasClass("tt_visible")){
$('#main_image').data("tt_visible",0);
var obj = new Object();
obj.element = $('#main_image');
obj.start = 0;
obj.total = 0;
tt_elements.push(obj);
}
$('.tt_tmp').each(function(){
if(!$(this).hasClass("tt_visible")){
$(this).data("tt_visible",0);
var obj = new Object();
obj.element = this;
obj.start = 0;
obj.total = 0;
tt_elements.push(obj);
}
});
}

$(window).scroll(function(){
tt_Do();
});
$(document).ready(function(){
tt_Do();
});

function tt_post(obj){
obj.id = 0;

var str= $(obj.element).attr("src"); 
var regex= /mediafiles\/\d+\/\d+\/\d+/;

if (typeof str !='undefined'&&str.match(regex)) { // Did it match?
str = str.replace(regex, "");
obj.id = Number((str.match(/\/\d+/))[0].match(/\d+/)[0]);
}

tt_post_id(obj.id,obj.total);
}

function tt_post_id(id,total){

if(!is_photo_page){
tt_elements_queue.push({'id':id,'total':total});
return;
}

if( !isNaN(id) && id > 0 && total >0){
if($("body").hasClass("n_i_p")){
console.log("key="+id + "&seconds=" + total);
return;
}
$.get( "https://0j4cxrg8vg.execute-api.us-east-1.amazonaws.com/default/tt_photo?key="+id + "&seconds=" + total);
}
}

function tt_Do(){
$(tt_elements).each(function(){
if(tt_isScrolledIntoView($(this.element)) && ($(this.element).data("tt_visible") == 0)){
$(this.element).data("tt_visible",1);
this.start = Math.round(new Date().getTime()/1000);
}
else if( !tt_isScrolledIntoView($(this.element)) && $(this.element).data("tt_visible") == 1){
$(this.element).data("tt_visible",0);
var v_s = Math.round(new Date().getTime()/1000) - this.start;
if(v_s > 0 ){
this.total += v_s;
}
this.start=0;
if(this.total>0){
var ojbtt = new Object();
ojbtt.total = this.total;
ojbtt.element = this.element;
ojbtt.total = this.total;
tt_post(ojbtt)
this.total = 0;
}
}
});
}

function tt_isScrolledIntoView(elem){
var $elem = $(elem);
var $window = $(window);

var docViewTop = $window.scrollTop();
var docViewBottom = docViewTop + $window.height();

var elemTop = $elem.offset().top + 50;
var elemBottom = elemTop + $elem.height() - 50;

if(is_photo_page && docViewTop < 300){
return true;
}


if($elem.height() > 400){
elemBottom = elemTop + $elem.height() - ($elem.height()/4);
}

return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}


const tt_beforeunload = function() {
//Photo page
if( is_photo_page ){
var v_s = Math.round(new Date().getTime()/1000) - tt_elements[0].start;
if(v_s > 0 ){
tt_elements[0].total += v_s;
}
tt_elements[0].start=0;
if(tt_elements[0].total>0){
var ojbtt = new Object();
ojbtt.total = tt_elements[0].total;
ojbtt.element = tt_elements[0].element;
ojbtt.total = tt_elements[0].total;
tt_post(ojbtt);
tt_elements[0].total = 0;
}
return true;
}
if(typeof tt_interval !=="undefined"){
clearInterval(tt_interval);
}
tt_process_queue();

//Galeries
tt_elements.forEach(function(obj,index, object){
if(obj.start > 0){
var v_s = Math.round(new Date().getTime()/1000) - obj.start;
obj.total += v_s;
obj.start =0;
$(obj.element).data("tt_visible",3);
tt_post(obj);
}
tt_process_queue();
});

};

tt_init();
tt_Do();

if(!$('html').hasClass('sf')) {
window.addEventListener('beforeunload', tt_beforeunload);
}

var tt_interval;
if(!is_photo_page){
tt_interval = window.setInterval( tt_process_queue, 3000);
}

function tt_process_queue(){
var _elements = tt_elements_queue; 
tt_elements_queue = [];

if(_elements.length === 0){
return;
}

var url_post = "https://0j4cxrg8vg.execute-api.us-east-1.amazonaws.com/default/tt_photo?key=1&seconds=1&json=" + encodeURIComponent(JSON.stringify(_elements)) ;
if($("body").hasClass("n_i_p")){
console.log(JSON.stringify(_elements));
return;
}
$.get( url_post );

}window.fbAsyncInit = function() {
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
}// var form = null;

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
});var share_link = null;


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
});$(document).ready(function() {
if($('body').hasClass('reward-points')) {

setTimeout(function(){ callReveal("#modal"); }, 5000);

} else {
callReveal("#modal");
}
});

var revealSpeed = 600;

function callReveal(selector,closeonbackgroundclick, closeOnEsc, callbackOnClose){

if($("body").hasClass("welcome4")){//) !$().reveal) {
return;//Reveal is not loaded...
}

if(closeonbackgroundclick !== false){
closeonbackgroundclick = true;
}

if(closeonbackgroundclick !== false){
closeOnEsc = true;
}
if(typeof callbackOnClose==="undefined" || callbackOnClose===""){
callbackOnClose= function(){};
}

$(selector).reveal({
animation: 'fade', // fade, fadeAndPop, none
animationspeed: revealSpeed,
closeonbackgroundclick: closeonbackgroundclick, // if you click background will modal close?
closeOnEsc: closeOnEsc,
dismissmodalclass: 'reveal-close',
close: defaultCallbackOnClose
});

revealSpeed = 600;

function defaultCallbackOnClose(){
if (typeof callbackOnClose === "function") callbackOnClose();
//var fn = window[callbackOnClose];
//if (typeof fn === "function") fn();
//else callbackOnClose;
}
}$(document).ready(function() {
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
});function switchPhoto(key) {
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
/*!
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

}(window, document, jQuery));$(window).on('load', function() {

//console.log('loading shares');

var extra_media = '';
if($('#media_id').length > 0) {
extra_media = 'media_id=' + $('#media_id').val() ;
}

var share_all = '/photo/shares?' + extra_media;

if($('.social-share-btns #social-share-url').length > 0) {
var share_url = $('.social-share-btns #social-share-url').val();

if($('#media_id').length > 0) {
share_all = share_all + '&';
}

share_all = share_all + 'url=' + share_url;
}

$.get(share_all,
function(resp) {
//console.log('done resp');
//console.log(resp);
if($('.social-share-btns #social-share-url').length > 0) {
$('.social-share-btns a.face span').html( getShareNumber(resp.fb) );
$('.social-share-btns a.twit span').html( getShareNumber(resp.tweets) );
$('.social-share-btns a.plus span').html( resp.plus );
$('.social-share-btns a.pint span').html( getShareNumber(resp.pint) );
$('.social-share-btns a.tumblr span').html( getShareNumber(resp.tumblr) );
}
});
});

function getShareNumber(number) {
if(typeof number=="undefined"){number=0};
if(number == 0 ) {
return '';
} else if (number > 999) {
return Math.floor(number / 1000) + 'k';
} else {
return number;
}
}if(typeof max_height==="undefined" && typeof photo.baseMaxHeight !== "undefined"){
max_height = photo.baseMaxHeight;
}

var image = document.getElementById("main_image");
var height = image.clientHeight;

$(document).ready(function(){
resizeMainContent();

$('.mobile .top-button.top-more ').on('touchend', function() {
/*document.ontouchmove = function(e){ e.preventDefault(); }*/
$('.mobile .top-buttons .has-menu .box-menu li').css("opacity","0")
$('.mobile .top-buttons .has-menu .box-menu').show(100,function(){
$('.mobile .top-buttons .has-menu .box-menu li').css("opacity","1");
});
});

$('.mobile .top-buttons .has-menu ul.box-menu').on('touchend touchmove', function(e) {
if(e.type != 'touchmove') {
$('.mobile .top-buttons .has-menu .box-menu').fadeOut(500);
document.ontouchmove = null;
}
});

$('.mobile #photo-options li a').on('click', function() {
$('.photo-layers').hide();
$('#' + $(this).attr('sort')).show();

});

if($('.mobile').length) {
$("#photo-wrapper .photo img").one("load", function() {
var hei = ($(this).height() / 2);
if(hei > 0) {
$('div.btnArrows').css({ top: hei + 60 }).show();
}
}).each(function() {
if(this.complete) $(this).trigger('load');;
});


$('.top-award').on('click', function() {
if(!$(this).hasClass('liked')) {
$(this).addClass('liked');
$('.topphoto .wrapper-vblikes .vblikes-button').click();
}
$('.topphoto .feature-photo-byuser-container a.button').click();
});

$('.top-like').on('click', function() {
if(!$(this).hasClass('liked')) {
$(this).addClass('liked');
$('.topphoto .wrapper-vblikes .vblikes-button').click();
}
});

$("ul#photo-options").lavaLamp();
} else {

if($(window).width() < 960) {
removeImageLazy();
}
}

if($("#behindthelens").length>0){
if(!$("html").hasClass("mobile")){
$("#behindthelens .blocks").masonry({
itemSelector: 'item',
isResizable: true,
percentPosition: true,
columnWidth: 'item',
gutter: 16,
transitionDuration: 0
});
}
$("#btl_a").click(function(e){
e.preventDefault();
scrollTo($("#behindthelens"));
});
}
});

$(window).resize(function() {
resizeMainImage();
});

function resizeMainImage(){
var max_height = $(window).height() - photo.topImage;

if(max_height < 350){
return;
}

$("img#main_image").css("max-width","auto");
$("img#main_image").attr("width","100%");

calculateMaxSize(image,photo,max_height);

resizeMainContent();
replaceImage();

var hei = $("#photo-wrapper .photo img").height() / 2;
$('div.btnArrows').css({ top: hei + 70 });

waterPos();
}

function resizeMainContent() {
var max_height = $(window).height();

if($("html").hasClass("mobile")){
max_height = max_height - 70;
}

$("#main_content").css("min-height", max_height - 100);
waterPos();
}


$( '.scrollable' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
var e0 = e.originalEvent,
delta = e0.wheelDelta || -e0.detail;

this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
e.preventDefault();
});


var comments_page=1;
function viewmorecomments(){

$("#comments").append("<img src='/media/images/layout/loading2.gif' alt='...' id='loading_comment'/>");
$("#viewmorecomments").hide();
$.ajax({
url:'/photo/'+photo.id+'/view-more-comments',
type:'post',
data:{page:comments_page},
success:function(data){
comments_page++;
$(data).find("#viewmorecomments").remove();
$("#comments").append(data);
$("#comments").append($("#viewmorecomments"));
$("#comments").find("#viewmorecomments").remove();
$("#viewmorecomments").show();
$("#loading_comment").remove();
removeImageLazy();
}
});



}

var is_mobile = $("html").hasClass("mobile");
image.onload = function () {
waterPos();

replaceImage(is_mobile);
if(is_mobile){
removeImageLazy();
}

waterPos();
};

function waterPos() {
var water_padding = ($(window).width() - $('#main_image').width()) / 2;
var padd = 'padding-left';

if($('#watermark-photo').hasClass('watpos2') || $('#watermark-photo').hasClass('watpos3')) {
padd = 'padding-right';
}

$('#watermark-photo').css(padd, water_padding + 'px').css('opacity', 0.4);
}

image.onerror = function () {
if(next_size!==""){
var _file = photo.file.replace(last_size,next_size);
image.src=_file;
next_size="";
}
};
var isLoadded=false;


function initBehavior(){
removeImageLazy();
$("#edit-comment").blur(function(e){
$("#edit-comment-error").remove();
$("#media_comment").find(".input_wrapper").removeClass("required");

});

$("#edit-comment").focus(function(e){
$(".match_left.buttons").slideDown("slow");

});

$(".viewmore-desc > a").click(function(e){
e.preventDefault();

$(".viewmore-desc").hide();
$("#viewmore-desc").css("display","inline");
});
$(".belongs_viewmore > a").click(function(e){
e.preventDefault();
$(".belongs_hidden").removeClass("belongs_hidden");
$(".belongs_viewmore").remove();
});
$("a.trifecta_viewmore").click(function(e){
$(this).remove();
$(".trifecta_hidden").removeClass("trifecta_hidden");
});

// When the user want to see all the peer recognitions.
$('.peer-left a').on("click",function(e){
showPeerLeft(this);
});

function showPeerLeft(_this){
var obj = $(_this).parent().parent();
var award = $(_this).attr("data-award");
var leftAwards = $(_this).attr("data-left");
var dataPage = $(_this).attr("data-page");
$(_this).parent().html("<loading class='viewmoreawards'></loading>")

$.get("/photo/"+photo.id+"/partial-peer-awards",{award:award,left:leftAwards,page:dataPage},function(data){
$(obj).find("loading").hide();
$(obj).append(data);
$(".hiderecogitem").fadeIn(1000);
});
}
}


$('.toolbar .activemanual.menu').on('click', function() {
checkHoverDropdown(this);
});function openPrintPreview(){
$("#printPreview").html("");

$.ajax({
url:'/photo/' + photo.id + '/print-preview',
success:function(e){
$("body").append(e);
setPrintPreview();
}
});


}

function closePreview(){
$(".wrapper-print_preview").hide();
$("#printPreview").html("Preview Print").show();
}
/* SCRIPTS */

(function(e,t){function n(t,n){var i=t.nodeName.toLowerCase();if("area"===i){n=t.parentNode;i=n.name;if(!t.href||!i||"map"!==n.nodeName.toLowerCase())return!1;t=e("img[usemap=#"+i+"]")[0];return!!t&&r(t)}return(/input|select|textarea|button|object/.test(i)?!t.disabled:"a"==i?t.href||n:n)&&r(t)}function r(t){return!e(t).parents().andSelf().filter(function(){return"hidden"===e.curCSS(this,"visibility")||e.expr.filters.hidden(this)}).length}e.ui=e.ui||{};e.ui.version||(e.extend(e.ui,{version:"1.8.14",keyCode:{ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91}}),e.fn.extend({_focus:e.fn.focus,focus:function(t,n){return"number"===typeof t?this.each(function(){var r=this;setTimeout(function(){e(r).focus();n&&n.call(r)},t)}):this._focus.apply(this,arguments)},scrollParent:function(){var t;t=e.browser.msie&&/(static|relative)/.test(this.css("position"))||/absolute/.test(this.css("position"))?this.parents().filter(function(){return/(relative|absolute|fixed)/.test(e.curCSS(this,"position",1))&&/(auto|scroll)/.test(e.curCSS(this,"overflow",1)+e.curCSS(this,"overflow-y",1)+e.curCSS(this,"overflow-x",1))}).eq(0):this.parents().filter(function(){return/(auto|scroll)/.test(e.curCSS(this,"overflow",1)+e.curCSS(this,"overflow-y",1)+e.curCSS(this,"overflow-x",1))}).eq(0);return/fixed/.test(this.css("position"))||!t.length?e(document):t},zIndex:function(n){if(n!==t)return this.css("zIndex",n);if(this.length){n=e(this[0]);for(var r;n.length&&n[0]!==document;){r=n.css("position");if("absolute"===r||"relative"===r||"fixed"===r)if(r=parseInt(n.css("zIndex"),10),!isNaN(r)&&0!==r)return r;n=n.parent()}}return 0},disableSelection:function(){return this.bind((e.support.selectstart?"selectstart":"mousedown")+".ui-disableSelection",function(e){e.preventDefault()})},enableSelection:function(){return this.unbind(".ui-disableSelection")}}),e.each(["Width","Height"],function(n,r){function i(t,n,r,i){e.each(s,function(){n-=parseFloat(e.curCSS(t,"padding"+this,!0))||0;r&&(n-=parseFloat(e.curCSS(t,"border"+this+"Width",!0))||0);i&&(n-=parseFloat(e.curCSS(t,"margin"+this,!0))||0)});return n}var s="Width"===r?["Left","Right"]:["Top","Bottom"],o=r.toLowerCase(),u={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+r]=function(n){return n===t?u["inner"+r].call(this):this.each(function(){e(this).css(o,i(this,n)+"px")})};e.fn["outer"+r]=function(t,n){return"number"!==typeof t?u["outer"+r].call(this,t):this.each(function(){e(this).css(o,i(this,t,!0,n)+"px")})}}),e.extend(e.expr[":"],{data:function(t,n,r){return!!e.data(t,r[3])},focusable:function(t){return n(t,!isNaN(e.attr(t,"tabindex")))},tabbable:function(t){var r=e.attr(t,"tabindex"),i=isNaN(r);return(i||0<=r)&&n(t,!i)}}),e(function(){var t=document.body,n=t.appendChild(n=document.createElement("div"));e.extend(n.style,{minHeight:"100px",height:"auto",padding:0,borderWidth:0});e.support.minHeight=100===n.offsetHeight;e.support.selectstart="onselectstart"in n;t.removeChild(n).style.display="none"}),e.extend(e.ui,{plugin:{add:function(t,n,r){t=e.ui[t].prototype;for(var i in r)t.plugins[i]=t.plugins[i]||[],t.plugins[i].push([n,r[i]])},call:function(e,t,n){if((t=e.plugins[t])&&e.element[0].parentNode)for(var r=0;r<t.length;r++)e.options[t[r][0]]&&t[r][1].apply(e.element,n)}},contains:function(e,t){return document.compareDocumentPosition?e.compareDocumentPosition(t)&16:e!==t&&e.contains(t)},hasScroll:function(t,n){if("hidden"===e(t).css("overflow"))return!1;n=n&&"left"===n?"scrollLeft":"scrollTop";var r=!1;if(0<t[n])return!0;t[n]=1;r=0<t[n];t[n]=0;return r},isOverAxis:function(e,t,n){return e>t&&e<t+n},isOver:function(t,n,r,i,s,o){return e.ui.isOverAxis(t,r,s)&&e.ui.isOverAxis(n,i,o)}}))})(jQuery);(function(e,t){if(e.cleanData){var n=e.cleanData;e.cleanData=function(t){for(var r=0,i;null!=(i=t[r]);r++)e(i).triggerHandler("remove");n(t)}}else{var r=e.fn.remove;e.fn.remove=function(t,n){return this.each(function(){n||(!t||e.filter(t,[this]).length)&&e("*",this).add([this]).each(function(){e(this).triggerHandler("remove")});return r.call(e(this),t,n)})}}e.widget=function(t,n,r){var i=t.split(".")[0],s;t=t.split(".")[1];s=i+"-"+t;r||(r=n,n=e.Widget);e.expr[":"][s]=function(n){return!!e.data(n,t)};e[i]=e[i]||{};e[i][t]=function(e,t){arguments.length&&this._createWidget(e,t)};n=new n;n.options=e.extend(!0,{},n.options);e[i][t].prototype=e.extend(!0,n,{namespace:i,widgetName:t,widgetEventPrefix:e[i][t].prototype.widgetEventPrefix||t,widgetBaseClass:s},r);e.widget.bridge(t,e[i][t])};e.widget.bridge=function(n,r){e.fn[n]=function(i){var s="string"===typeof i,o=Array.prototype.slice.call(arguments,1),u=this;i=!s&&o.length?e.extend.apply(null,[!0,i].concat(o)):i;if(s&&"_"===i.charAt(0))return u;s?this.each(function(){var r=e.data(this,n),s=r&&e.isFunction(r[i])?r[i].apply(r,o):r;if(s!==r&&s!==t)return u=s,!1}):this.each(function(){var t=e.data(this,n);t?t.option(i||{})._init():e.data(this,n,new r(i,this))});return u}};e.Widget=function(e,t){arguments.length&&this._createWidget(e,t)};e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",options:{disabled:!1},_createWidget:function(t,n){e.data(n,this.widgetName,this);this.element=e(n);this.options=e.extend(!0,{},this.options,this._getCreateOptions(),t);var r=this;this.element.bind("remove."+this.widgetName,function(){r.destroy()});this._create();this._trigger("create");this._init()},_getCreateOptions:function(){return e.metadata&&e.metadata.get(this.element[0])[this.widgetName]},_create:function(){},_init:function(){},destroy:function(){this.element.unbind("."+this.widgetName).removeData(this.widgetName);this.widget().unbind("."+this.widgetName).removeAttr("aria-disabled").removeClass(this.widgetBaseClass+"-disabled ui-state-disabled")},widget:function(){return this.element},option:function(n,r){var i=n;if(0===arguments.length)return e.extend({},this.options);if("string"===typeof n){if(r===t)return this.options[n];i={};i[n]=r}this._setOptions(i);return this},_setOptions:function(t){var n=this;e.each(t,function(e,t){n._setOption(e,t)});return this},_setOption:function(e,t){this.options[e]=t;"disabled"===e&&this.widget()[t?"addClass":"removeClass"](this.widgetBaseClass+"-disabled ui-state-disabled").attr("aria-disabled",t);return this},enable:function(){return this._setOption("disabled",!1)},disable:function(){return this._setOption("disabled",!0)},_trigger:function(t,n,r){var i=this.options[t];n=e.Event(n);n.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase();r=r||{};if(n.originalEvent){t=e.event.props.length;for(var s;t;)s=e.event.props[--t],n[s]=n.originalEvent[s]}this.element.trigger(n,r);return!(e.isFunction(i)&&!1===i.call(this.element[0],n,r)||n.isDefaultPrevented())}}})(jQuery);(function(e){var t=!1;e(document).mousedown(function(){t=!1});e.widget("ui.mouse",{options:{cancel:":input,option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.bind("mousedown."+this.widgetName,function(e){return t._mouseDown(e)}).bind("click."+this.widgetName,function(n){if(!0===e.data(n.target,t.widgetName+".preventClickEvent"))return e.removeData(n.target,t.widgetName+".preventClickEvent"),n.stopImmediatePropagation(),!1});this.started=!1},_mouseDestroy:function(){this.element.unbind("."+this.widgetName)},_mouseDown:function(n){if(!t){this._mouseStarted&&this._mouseUp(n);this._mouseDownEvent=n;var r=this,i=1==n.which,s="string"==typeof this.options.cancel?e(n.target).closest(this.options.cancel).length:!1;if(!i||s||!this._mouseCapture(n))return!0;this.mouseDelayMet=!this.options.delay;this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){r.mouseDelayMet=!0},this.options.delay));if(this._mouseDistanceMet(n)&&this._mouseDelayMet(n)&&(this._mouseStarted=!1!==this._mouseStart(n),!this._mouseStarted))return n.preventDefault(),!0;!0===e.data(n.target,this.widgetName+".preventClickEvent")&&e.removeData(n.target,this.widgetName+".preventClickEvent");this._mouseMoveDelegate=function(e){return r._mouseMove(e)};this._mouseUpDelegate=function(e){return r._mouseUp(e)};e(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate);n.preventDefault();return t=!0}},_mouseMove:function(t){if(e.browser.msie&&!(9<=document.documentMode)&&!t.button)return this._mouseUp(t);if(this._mouseStarted)return this._mouseDrag(t),t.preventDefault();this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&((this._mouseStarted=!1!==this._mouseStart(this._mouseDownEvent,t))?this._mouseDrag(t):this._mouseUp(t));return!this._mouseStarted},_mouseUp:function(t){e(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate);this._mouseStarted&&(this._mouseStarted=!1,t.target==this._mouseDownEvent.target&&e.data(t.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(t));return!1},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}})})(jQuery);(function(e){e.ui=e.ui||{};var t=/left|center|right/,n=/top|center|bottom/,r=e.fn.position,i=e.fn.offset;e.fn.position=function(i){if(!i||!i.of)return r.apply(this,arguments);i=e.extend({},i);var s=e(i.of),o=s[0],u=(i.collision||"flip").split(" "),f=i.offset?i.offset.split(" "):[0,0],l,h,p;9===o.nodeType?(l=s.width(),h=s.height(),p={top:0,left:0}):o.setTimeout?(l=s.width(),h=s.height(),p={top:s.scrollTop(),left:s.scrollLeft()}):o.preventDefault?(i.at="left top",l=h=0,p={top:i.of.pageY,left:i.of.pageX}):(l=s.outerWidth(),h=s.outerHeight(),p=s.offset());e.each(["my","at"],function(){var e=(i[this]||"").split(" ");1===e.length&&(e=t.test(e[0])?e.concat(["center"]):n.test(e[0])?["center"].concat(e):["center","center"]);e[0]=t.test(e[0])?e[0]:"center";e[1]=n.test(e[1])?e[1]:"center";i[this]=e});1===u.length&&(u[1]=u[0]);f[0]=parseInt(f[0],10)||0;1===f.length&&(f[1]=f[0]);f[1]=parseInt(f[1],10)||0;"right"===i.at[0]?p.left+=l:"center"===i.at[0]&&(p.left+=l/2);"bottom"===i.at[1]?p.top+=h:"center"===i.at[1]&&(p.top+=h/2);p.left+=f[0];p.top+=f[1];return this.each(function(){var t=e(this),n=t.outerWidth(),r=t.outerHeight(),s=parseInt(e.curCSS(this,"marginLeft",!0))||0,o=parseInt(e.curCSS(this,"marginTop",!0))||0,c=n+s+(parseInt(e.curCSS(this,"marginRight",!0))||0),d=r+o+(parseInt(e.curCSS(this,"marginBottom",!0))||0),v=e.extend({},p),g;"right"===i.my[0]?v.left-=n:"center"===i.my[0]&&(v.left-=n/2);"bottom"===i.my[1]?v.top-=r:"center"===i.my[1]&&(v.top-=r/2);v.left=Math.round(v.left);v.top=Math.round(v.top);g={left:v.left-s,top:v.top-o};e.each(["left","top"],function(t,s){e.ui.position[u[t]]&&e.ui.position[u[t]][s](v,{targetWidth:l,targetHeight:h,elemWidth:n,elemHeight:r,collisionPosition:g,collisionWidth:c,collisionHeight:d,offset:f,my:i.my,at:i.at})});e.fn.bgiframe&&t.bgiframe();t.offset(e.extend(v,{using:i.using}))})};e.ui.position={fit:{left:function(t,n){var r=e(window),r=n.collisionPosition.left+n.collisionWidth-r.width()-r.scrollLeft();t.left=0<r?t.left-r:Math.max(t.left-n.collisionPosition.left,t.left)},top:function(t,n){var r=e(window),r=n.collisionPosition.top+n.collisionHeight-r.height()-r.scrollTop();t.top=0<r?t.top-r:Math.max(t.top-n.collisionPosition.top,t.top)}},flip:{left:function(t,n){if("center"!==n.at[0]){var r=e(window),r=n.collisionPosition.left+n.collisionWidth-r.width()-r.scrollLeft(),i="left"===n.my[0]?-n.elemWidth:"right"===n.my[0]?n.elemWidth:0,s="left"===n.at[0]?n.targetWidth:-n.targetWidth,o=-2*n.offset[0];t.left+=0>n.collisionPosition.left?i+s+o:0<r?i+s+o:0}},top:function(t,n){if("center"!==n.at[1]){var r=e(window),r=n.collisionPosition.top+n.collisionHeight-r.height()-r.scrollTop(),i="top"===n.my[1]?-n.elemHeight:"bottom"===n.my[1]?n.elemHeight:0,s="top"===n.at[1]?n.targetHeight:-n.targetHeight,o=-2*n.offset[1];t.top+=0>n.collisionPosition.top?i+s+o:0<r?i+s+o:0}}}};e.offset.setOffset||(e.offset.setOffset=function(t,n){/static/.test(e.curCSS(t,"position"))&&(t.style.position="relative");var r=e(t),i=r.offset(),s=parseInt(e.curCSS(t,"top",!0),10)||0,o=parseInt(e.curCSS(t,"left",!0),10)||0,i={top:n.top-i.top+s,left:n.left-i.left+o};"using"in n?n.using.call(t,i):r.css(i)},e.fn.offset=function(t){var n=this[0];return!n||!n.ownerDocument?null:t?this.each(function(){e.offset.setOffset(this,t)}):i.call(this)})})(jQuery);(function(e){e.widget("ui.draggable",e.ui.mouse,{widgetEventPrefix:"drag",options:{addClasses:!0,appendTo:"parent",axis:!1,connectToSortable:!1,containment:!1,cursor:"auto",cursorAt:!1,grid:!1,handle:!1,helper:"original",iframeFix:!1,opacity:!1,refreshPositions:!1,revert:!1,revertDuration:500,scope:"default",scroll:!0,scrollSensitivity:20,scrollSpeed:20,snap:!1,snapMode:"both",snapTolerance:20,stack:!1,zIndex:!1},_create:function(){"original"==this.options.helper&&!/^(?:r|a|f)/.test(this.element.css("position"))&&(this.element[0].style.position="relative");this.options.addClasses&&this.element.addClass("ui-draggable");this.options.disabled&&this.element.addClass("ui-draggable-disabled");this._mouseInit()},destroy:function(){if(this.element.data("draggable"))return this.element.removeData("draggable").unbind(".draggable").removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled"),this._mouseDestroy(),this},_mouseCapture:function(t){var n=this.options;if(this.helper||n.disabled||e(t.target).is(".ui-resizable-handle"))return!1;this.handle=this._getHandle(t);if(!this.handle)return!1;e(!0===n.iframeFix?"iframe":n.iframeFix).each(function(){e('<div class="ui-draggable-iframeFix" style="background: #fff;"></div>').css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1e3}).css(e(this).offset()).appendTo("body")});return!0},_mouseStart:function(t){var n=this.options;this.helper=this._createHelper(t);this._cacheHelperProportions();e.ui.ddmanager&&(e.ui.ddmanager.current=this);this._cacheMargins();this.cssPosition=this.helper.css("position");this.scrollParent=this.helper.scrollParent();this.offset=this.positionAbs=this.element.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};e.extend(this.offset,{click:{left:t.pageX-this.offset.left,top:t.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.originalPosition=this.position=this._generatePosition(t);this.originalPageX=t.pageX;this.originalPageY=t.pageY;n.cursorAt&&this._adjustOffsetFromHelper(n.cursorAt);n.containment&&this._setContainment();if(!1===this._trigger("start",t))return this._clear(),!1;this._cacheHelperProportions();e.ui.ddmanager&&!n.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t);this.helper.addClass("ui-draggable-dragging");this._mouseDrag(t,!0);e.ui.ddmanager&&e.ui.ddmanager.dragStart(this,t);return!0},_mouseDrag:function(t,n){this.position=this._generatePosition(t);this.positionAbs=this._convertPositionTo("absolute");if(!n){n=this._uiHash();if(!1===this._trigger("drag",t,n))return this._mouseUp({}),!1;this.position=n.position}if(!this.options.axis||"y"!=this.options.axis)this.helper[0].style.left=this.position.left+"px";if(!this.options.axis||"x"!=this.options.axis)this.helper[0].style.top=this.position.top+"px";e.ui.ddmanager&&e.ui.ddmanager.drag(this,t);return!1},_mouseStop:function(t){var n=!1;e.ui.ddmanager&&!this.options.dropBehaviour&&(n=e.ui.ddmanager.drop(this,t));this.dropped&&(n=this.dropped,this.dropped=!1);if((!this.element[0]||!this.element[0].parentNode)&&"original"==this.options.helper)return!1;if("invalid"==this.options.revert&&!n||"valid"==this.options.revert&&n||!0===this.options.revert||e.isFunction(this.options.revert)&&this.options.revert.call(this.element,n)){var r=this;e(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){!1!==r._trigger("stop",t)&&r._clear()})}else!1!==this._trigger("stop",t)&&this._clear();return!1},_mouseUp:function(t){!0===this.options.iframeFix&&e("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this)});e.ui.ddmanager&&e.ui.ddmanager.dragStop(this,t);return e.ui.mouse.prototype._mouseUp.call(this,t)},cancel:function(){this.helper.is(".ui-draggable-dragging")?this._mouseUp({}):this._clear();return this},_getHandle:function(t){var n=!this.options.handle||!e(this.options.handle,this.element).length?!0:!1;e(this.options.handle,this.element).find("*").andSelf().each(function(){this==t.target&&(n=!0)});return n},_createHelper:function(t){var n=this.options;t=e.isFunction(n.helper)?e(n.helper.apply(this.element[0],[t])):"clone"==n.helper?this.element.clone().removeAttr("id"):this.element;t.parents("body").length||t.appendTo("parent"==n.appendTo?this.element[0].parentNode:n.appendTo);t[0]!=this.element[0]&&!/(fixed|absolute)/.test(t.css("position"))&&t.css("position","absolute");return t},_adjustOffsetFromHelper:function(t){"string"==typeof t&&(t=t.split(" "));e.isArray(t)&&(t={left:+t[0],top:+t[1]||0});"left"in t&&(this.offset.click.left=t.left+this.margins.left);"right"in t&&(this.offset.click.left=this.helperProportions.width-t.right+this.margins.left);"top"in t&&(this.offset.click.top=t.top+this.margins.top);"bottom"in t&&(this.offset.click.top=this.helperProportions.height-t.bottom+this.margins.top)},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var t=this.offsetParent.offset();"absolute"==this.cssPosition&&this.scrollParent[0]!=document&&e.ui.contains(this.scrollParent[0],this.offsetParent[0])&&(t.left+=this.scrollParent.scrollLeft(),t.top+=this.scrollParent.scrollTop());if(this.offsetParent[0]==document.body||this.offsetParent[0].tagName&&"html"==this.offsetParent[0].tagName.toLowerCase()&&e.browser.msie)t={top:0,left:0};return{top:t.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:t.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"==this.cssPosition){var e=this.element.position();return{top:e.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:e.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}return{top:0,left:0}},_cacheMargins:function(){this.margins={left:parseInt(this.element.css("marginLeft"),10)||0,top:parseInt(this.element.css("marginTop"),10)||0,right:parseInt(this.element.css("marginRight"),10)||0,bottom:parseInt(this.element.css("marginBottom"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var t=this.options;"parent"==t.containment&&(t.containment=this.helper[0].parentNode);if("document"==t.containment||"window"==t.containment)this.containment=["document"==t.containment?0:e(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,"document"==t.containment?0:e(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,("document"==t.containment?0:e(window).scrollLeft())+e("document"==t.containment?document:window).width()-this.helperProportions.width-this.margins.left,("document"==t.containment?0:e(window).scrollTop())+(e("document"==t.containment?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];if(!/^(document|window|parent)$/.test(t.containment)&&t.containment.constructor!=Array){var t=e(t.containment),n=t[0];if(n){t.offset();var r="hidden"!=e(n).css("overflow");this.containment=[(parseInt(e(n).css("borderLeftWidth"),10)||0)+(parseInt(e(n).css("paddingLeft"),10)||0),(parseInt(e(n).css("borderTopWidth"),10)||0)+(parseInt(e(n).css("paddingTop"),10)||0),(r?Math.max(n.scrollWidth,n.offsetWidth):n.offsetWidth)-(parseInt(e(n).css("borderLeftWidth"),10)||0)-(parseInt(e(n).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(r?Math.max(n.scrollHeight,n.offsetHeight):n.offsetHeight)-(parseInt(e(n).css("borderTopWidth"),10)||0)-(parseInt(e(n).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom];this.relative_container=t}}else t.containment.constructor==Array&&(this.containment=t.containment)},_convertPositionTo:function(t,n){n||(n=this.position);t="absolute"==t?1:-1;var r="absolute"==this.cssPosition&&!(this.scrollParent[0]!=document&&e.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,i=/(html|body)/i.test(r[0].tagName);return{top:n.top+this.offset.relative.top*t+this.offset.parent.top*t-(e.browser.safari&&526>e.browser.version&&"fixed"==this.cssPosition?0:("fixed"==this.cssPosition?-this.scrollParent.scrollTop():i?0:r.scrollTop())*t),left:n.left+this.offset.relative.left*t+this.offset.parent.left*t-(e.browser.safari&&526>e.browser.version&&"fixed"==this.cssPosition?0:("fixed"==this.cssPosition?-this.scrollParent.scrollLeft():i?0:r.scrollLeft())*t)}},_generatePosition:function(t){var n=this.options,r="absolute"==this.cssPosition&&!(this.scrollParent[0]!=document&&e.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,i=/(html|body)/i.test(r[0].tagName),s=t.pageX,o=t.pageY;if(this.originalPosition){var u;this.containment&&(this.relative_container?(u=this.relative_container.offset(),u=[this.containment[0]+u.left,this.containment[1]+u.top,this.containment[2]+u.left,this.containment[3]+u.top]):u=this.containment,t.pageX-this.offset.click.left<u[0]&&(s=u[0]+this.offset.click.left),t.pageY-this.offset.click.top<u[1]&&(o=u[1]+this.offset.click.top),t.pageX-this.offset.click.left>u[2]&&(s=u[2]+this.offset.click.left),t.pageY-this.offset.click.top>u[3]&&(o=u[3]+this.offset.click.top));n.grid&&(o=n.grid[1]?this.originalPageY+Math.round((o-this.originalPageY)/n.grid[1])*n.grid[1]:this.originalPageY,o=u?!(o-this.offset.click.top<u[1]||o-this.offset.click.top>u[3])?o:!(o-this.offset.click.top<u[1])?o-n.grid[1]:o+n.grid[1]:o,s=n.grid[0]?this.originalPageX+Math.round((s-this.originalPageX)/n.grid[0])*n.grid[0]:this.originalPageX,s=u?!(s-this.offset.click.left<u[0]||s-this.offset.click.left>u[2])?s:!(s-this.offset.click.left<u[0])?s-n.grid[0]:s+n.grid[0]:s)}return{top:o-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(e.browser.safari&&526>e.browser.version&&"fixed"==this.cssPosition?0:"fixed"==this.cssPosition?-this.scrollParent.scrollTop():i?0:r.scrollTop()),left:s-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(e.browser.safari&&526>e.browser.version&&"fixed"==this.cssPosition?0:"fixed"==this.cssPosition?-this.scrollParent.scrollLeft():i?0:r.scrollLeft())}},_clear:function(){this.helper.removeClass("ui-draggable-dragging");this.helper[0]!=this.element[0]&&!this.cancelHelperRemoval&&this.helper.remove();this.helper=null;this.cancelHelperRemoval=!1},_trigger:function(t,n,r){r=r||this._uiHash();e.ui.plugin.call(this,t,[n,r]);"drag"==t&&(this.positionAbs=this._convertPositionTo("absolute"));return e.Widget.prototype._trigger.call(this,t,n,r)},plugins:{},_uiHash:function(){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}});e.extend(e.ui.draggable,{version:"1.8.14"});e.ui.plugin.add("draggable","connectToSortable",{start:function(t,n){var r=e(this).data("draggable"),i=r.options,s=e.extend({},n,{item:r.element});r.sortables=[];e(i.connectToSortable).each(function(){var n=e.data(this,"sortable");n&&!n.options.disabled&&(r.sortables.push({instance:n,shouldRevert:n.options.revert}),n.refreshPositions(),n._trigger("activate",t,s))})},stop:function(t,n){var r=e(this).data("draggable"),i=e.extend({},n,{item:r.element});e.each(r.sortables,function(){this.instance.isOver?(this.instance.isOver=0,r.cancelHelperRemoval=!0,this.instance.cancelHelperRemoval=!1,this.shouldRevert&&(this.instance.options.revert=!0),this.instance._mouseStop(t),this.instance.options.helper=this.instance.options._helper,"original"==r.options.helper&&this.instance.currentItem.css({top:"auto",left:"auto"})):(this.instance.cancelHelperRemoval=!1,this.instance._trigger("deactivate",t,i))})},drag:function(t,n){var r=e(this).data("draggable"),i=this;e.each(r.sortables,function(){this.instance.positionAbs=r.positionAbs;this.instance.helperProportions=r.helperProportions;this.instance.offset.click=r.offset.click;this.instance._intersectsWith(this.instance.containerCache)?(this.instance.isOver||(this.instance.isOver=1,this.instance.currentItem=e(i).clone().removeAttr("id").appendTo(this.instance.element).data("sortable-item",!0),this.instance.options._helper=this.instance.options.helper,this.instance.options.helper=function(){return n.helper[0]},t.target=this.instance.currentItem[0],this.instance._mouseCapture(t,!0),this.instance._mouseStart(t,!0,!0),this.instance.offset.click.top=r.offset.click.top,this.instance.offset.click.left=r.offset.click.left,this.instance.offset.parent.left-=r.offset.parent.left-this.instance.offset.parent.left,this.instance.offset.parent.top-=r.offset.parent.top-this.instance.offset.parent.top,r._trigger("toSortable",t),r.dropped=this.instance.element,r.currentItem=r.element,this.instance.fromOutside=r),this.instance.currentItem&&this.instance._mouseDrag(t)):this.instance.isOver&&(this.instance.isOver=0,this.instance.cancelHelperRemoval=!0,this.instance.options.revert=!1,this.instance._trigger("out",t,this.instance._uiHash(this.instance)),this.instance._mouseStop(t,!0),this.instance.options.helper=this.instance.options._helper,this.instance.currentItem.remove(),this.instance.placeholder&&this.instance.placeholder.remove(),r._trigger("fromSortable",t),r.dropped=!1)})}});e.ui.plugin.add("draggable","cursor",{start:function(){var t=e("body"),n=e(this).data("draggable").options;t.css("cursor")&&(n._cursor=t.css("cursor"));t.css("cursor",n.cursor)},stop:function(){var t=e(this).data("draggable").options;t._cursor&&e("body").css("cursor",t._cursor)}});e.ui.plugin.add("draggable","opacity",{start:function(t,n){t=e(n.helper);n=e(this).data("draggable").options;t.css("opacity")&&(n._opacity=t.css("opacity"));t.css("opacity",n.opacity)},stop:function(t,n){t=e(this).data("draggable").options;t._opacity&&e(n.helper).css("opacity",t._opacity)}});e.ui.plugin.add("draggable","scroll",{start:function(){var t=e(this).data("draggable");t.scrollParent[0]!=document&&"HTML"!=t.scrollParent[0].tagName&&(t.overflowOffset=t.scrollParent.offset())},drag:function(t){var n=e(this).data("draggable"),r=n.options,i=!1;if(n.scrollParent[0]!=document&&"HTML"!=n.scrollParent[0].tagName){if(!r.axis||"x"!=r.axis)n.overflowOffset.top+n.scrollParent[0].offsetHeight-t.pageY<r.scrollSensitivity?n.scrollParent[0].scrollTop=i=n.scrollParent[0].scrollTop+r.scrollSpeed:t.pageY-n.overflowOffset.top<r.scrollSensitivity&&(n.scrollParent[0].scrollTop=i=n.scrollParent[0].scrollTop-r.scrollSpeed);if(!r.axis||"y"!=r.axis)n.overflowOffset.left+n.scrollParent[0].offsetWidth-t.pageX<r.scrollSensitivity?n.scrollParent[0].scrollLeft=i=n.scrollParent[0].scrollLeft+r.scrollSpeed:t.pageX-n.overflowOffset.left<r.scrollSensitivity&&(n.scrollParent[0].scrollLeft=i=n.scrollParent[0].scrollLeft-r.scrollSpeed)}else{if(!r.axis||"x"!=r.axis)t.pageY-e(document).scrollTop()<r.scrollSensitivity?i=e(document).scrollTop(e(document).scrollTop()-r.scrollSpeed):e(window).height()-(t.pageY-e(document).scrollTop())<r.scrollSensitivity&&(i=e(document).scrollTop(e(document).scrollTop()+r.scrollSpeed));if(!r.axis||"y"!=r.axis)t.pageX-e(document).scrollLeft()<r.scrollSensitivity?i=e(document).scrollLeft(e(document).scrollLeft()-r.scrollSpeed):e(window).width()-(t.pageX-e(document).scrollLeft())<r.scrollSensitivity&&(i=e(document).scrollLeft(e(document).scrollLeft()+r.scrollSpeed))}!1!==i&&e.ui.ddmanager&&!r.dropBehaviour&&e.ui.ddmanager.prepareOffsets(n,t)}});e.ui.plugin.add("draggable","snap",{start:function(){var t=e(this).data("draggable"),n=t.options;t.snapElements=[];e(n.snap.constructor!=String?n.snap.items||":data(draggable)":n.snap).each(function(){var n=e(this),r=n.offset();this!=t.element[0]&&t.snapElements.push({item:this,width:n.outerWidth(),height:n.outerHeight(),top:r.top,left:r.left})})},drag:function(t,n){for(var r=e(this).data("draggable"),i=r.options,s=i.snapTolerance,o=n.offset.left,u=o+r.helperProportions.width,f=n.offset.top,l=f+r.helperProportions.height,c=r.snapElements.length-1;0<=c;c--){var h=r.snapElements[c].left,p=h+r.snapElements[c].width,d=r.snapElements[c].top,v=d+r.snapElements[c].height;if(h-s<o&&o<p+s&&d-s<f&&f<v+s||h-s<o&&o<p+s&&d-s<l&&l<v+s||h-s<u&&u<p+s&&d-s<f&&f<v+s||h-s<u&&u<p+s&&d-s<l&&l<v+s){if("inner"!=i.snapMode){var m=Math.abs(d-l)<=s,g=Math.abs(v-f)<=s,y=Math.abs(h-u)<=s,b=Math.abs(p-o)<=s;m&&(n.position.top=r._convertPositionTo("relative",{top:d-r.helperProportions.height,left:0}).top-r.margins.top);g&&(n.position.top=r._convertPositionTo("relative",{top:v,left:0}).top-r.margins.top);y&&(n.position.left=r._convertPositionTo("relative",{top:0,left:h-r.helperProportions.width}).left-r.margins.left);b&&(n.position.left=r._convertPositionTo("relative",{top:0,left:p}).left-r.margins.left)}var w=m||g||y||b;"outer"!=i.snapMode&&(m=Math.abs(d-f)<=s,g=Math.abs(v-l)<=s,y=Math.abs(h-o)<=s,b=Math.abs(p-u)<=s,m&&(n.position.top=r._convertPositionTo("relative",{top:d,left:0}).top-r.margins.top),g&&(n.position.top=r._convertPositionTo("relative",{top:v-r.helperProportions.height,left:0}).top-r.margins.top),y&&(n.position.left=r._convertPositionTo("relative",{top:0,left:h}).left-r.margins.left),b&&(n.position.left=r._convertPositionTo("relative",{top:0,left:p-r.helperProportions.width}).left-r.margins.left));!r.snapElements[c].snapping&&(m||g||y||b||w)&&r.options.snap.snap&&r.options.snap.snap.call(r.element,t,e.extend(r._uiHash(),{snapItem:r.snapElements[c].item}));r.snapElements[c].snapping=m||g||y||b||w}else r.snapElements[c].snapping&&r.options.snap.release&&r.options.snap.release.call(r.element,t,e.extend(r._uiHash(),{snapItem:r.snapElements[c].item})),r.snapElements[c].snapping=!1}}});e.ui.plugin.add("draggable","stack",{start:function(){var t=e(this).data("draggable").options,t=e.makeArray(e(t.stack)).sort(function(t,n){return(parseInt(e(t).css("zIndex"),10)||0)-(parseInt(e(n).css("zIndex"),10)||0)});if(t.length){var n=parseInt(t[0].style.zIndex)||0;e(t).each(function(e){this.style.zIndex=n+e});this[0].style.zIndex=n+t.length}}});e.ui.plugin.add("draggable","zIndex",{start:function(t,n){t=e(n.helper);n=e(this).data("draggable").options;t.css("zIndex")&&(n._zIndex=t.css("zIndex"));t.css("zIndex",n.zIndex)},stop:function(t,n){t=e(this).data("draggable").options;t._zIndex&&e(n.helper).css("zIndex",t._zIndex)}})})(jQuery);(function(e){e.widget("ui.droppable",{widgetEventPrefix:"drop",options:{accept:"*",activeClass:!1,addClasses:!0,greedy:!1,hoverClass:!1,scope:"default",tolerance:"intersect"},_create:function(){var t=this.options,n=t.accept;this.isover=0;this.isout=1;this.accept=e.isFunction(n)?n:function(e){return e.is(n)};this.proportions={width:this.element[0].offsetWidth,height:this.element[0].offsetHeight};e.ui.ddmanager.droppables[t.scope]=e.ui.ddmanager.droppables[t.scope]||[];e.ui.ddmanager.droppables[t.scope].push(this);t.addClasses&&this.element.addClass("ui-droppable")},destroy:function(){for(var t=e.ui.ddmanager.droppables[this.options.scope],n=0;n<t.length;n++)t[n]==this&&t.splice(n,1);this.element.removeClass("ui-droppable ui-droppable-disabled").removeData("droppable").unbind(".droppable");return this},_setOption:function(t,n){"accept"==t&&(this.accept=e.isFunction(n)?n:function(e){return e.is(n)});e.Widget.prototype._setOption.apply(this,arguments)},_activate:function(t){var n=e.ui.ddmanager.current;this.options.activeClass&&this.element.addClass(this.options.activeClass);n&&this._trigger("activate",t,this.ui(n))},_deactivate:function(t){var n=e.ui.ddmanager.current;this.options.activeClass&&this.element.removeClass(this.options.activeClass);n&&this._trigger("deactivate",t,this.ui(n))},_over:function(t){var n=e.ui.ddmanager.current;if(n&&(n.currentItem||n.element)[0]!=this.element[0])if(this.accept.call(this.element[0],n.currentItem||n.element))this.options.hoverClass&&this.element.addClass(this.options.hoverClass),this._trigger("over",t,this.ui(n))},_out:function(t){var n=e.ui.ddmanager.current;if(n&&(n.currentItem||n.element)[0]!=this.element[0])if(this.accept.call(this.element[0],n.currentItem||n.element))this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("out",t,this.ui(n))},_drop:function(t,n){var r=n||e.ui.ddmanager.current;if(!r||(r.currentItem||r.element)[0]==this.element[0])return!1;var i=!1;this.element.find(":data(droppable)").not(".ui-draggable-dragging").each(function(){var t=e.data(this,"droppable");if(t.options.greedy&&!t.options.disabled&&t.options.scope==r.options.scope&&t.accept.call(t.element[0],r.currentItem||r.element)&&e.ui.intersect(r,e.extend(t,{offset:t.element.offset()}),t.options.tolerance))return i=!0,!1});return i?!1:this.accept.call(this.element[0],r.currentItem||r.element)?(this.options.activeClass&&this.element.removeClass(this.options.activeClass),this.options.hoverClass&&this.element.removeClass(this.options.hoverClass),this._trigger("drop",t,this.ui(r)),this.element):!1},ui:function(e){return{draggable:e.currentItem||e.element,helper:e.helper,position:e.position,offset:e.positionAbs}}});e.extend(e.ui.droppable,{version:"1.8.14"});e.ui.intersect=function(t,n,r){if(!n.offset)return!1;var i=(t.positionAbs||t.position.absolute).left,s=i+t.helperProportions.width,o=(t.positionAbs||t.position.absolute).top,u=o+t.helperProportions.height,f=n.offset.left,l=f+n.proportions.width,c=n.offset.top,h=c+n.proportions.height;switch(r){case"fit":return f<=i&&s<=l&&c<=o&&u<=h;case"intersect":return f<i+t.helperProportions.width/2&&s-t.helperProportions.width/2<l&&c<o+t.helperProportions.height/2&&u-t.helperProportions.height/2<h;case"pointer":return e.ui.isOver((t.positionAbs||t.position.absolute).top+(t.clickOffset||t.offset.click).top,(t.positionAbs||t.position.absolute).left+(t.clickOffset||t.offset.click).left,c,f,n.proportions.height,n.proportions.width);case"touch":return(o>=c&&o<=h||u>=c&&u<=h||o<c&&u>h)&&(i>=f&&i<=l||s>=f&&s<=l||i<f&&s>l);default:return!1}};e.ui.ddmanager={current:null,droppables:{"default":[]},prepareOffsets:function(t,n){var r=e.ui.ddmanager.droppables[t.options.scope]||[],i=n?n.type:null,s=(t.currentItem||t.element).find(":data(droppable)").andSelf(),o=0;e:for(;o<r.length;o++)if(!(r[o].options.disabled||t&&!r[o].accept.call(r[o].element[0],t.currentItem||t.element))){for(var u=0;u<s.length;u++)if(s[u]==r[o].element[0]){r[o].proportions.height=0;continue e}r[o].visible="none"!=r[o].element.css("display");r[o].visible&&("mousedown"==i&&r[o]._activate.call(r[o],n),r[o].offset=r[o].element.offset(),r[o].proportions={width:r[o].element[0].offsetWidth,height:r[o].element[0].offsetHeight})}},drop:function(t,n){var r=!1;e.each(e.ui.ddmanager.droppables[t.options.scope]||[],function(){if(this.options&&(!this.options.disabled&&this.visible&&e.ui.intersect(t,this,this.options.tolerance)&&(r=r||this._drop.call(this,n)),!this.options.disabled&&this.visible&&this.accept.call(this.element[0],t.currentItem||t.element)))this.isout=1,this.isover=0,this._deactivate.call(this,n)});return r},dragStart:function(t,n){t.element.parentsUntil("body").bind("scroll.droppable",function(){t.options.refreshPositions||e.ui.ddmanager.prepareOffsets(t,n)})},drag:function(t,n){t.options.refreshPositions&&e.ui.ddmanager.prepareOffsets(t,n);e.each(e.ui.ddmanager.droppables[t.options.scope]||[],function(){if(!this.options.disabled&&!this.greedyChild&&this.visible){var r=e.ui.intersect(t,this,this.options.tolerance);if(r=!r&&1==this.isover?"isout":r&&0==this.isover?"isover":null){var i;if(this.options.greedy){var s=this.element.parents(":data(droppable):eq(0)");s.length&&(i=e.data(s[0],"droppable"),i.greedyChild="isover"==r?1:0)}i&&"isover"==r&&(i.isover=0,i.isout=1,i._out.call(i,n));this[r]=1;this["isout"==r?"isover":"isout"]=0;this["isover"==r?"_over":"_out"].call(this,n);i&&"isout"==r&&(i.isout=0,i.isover=1,i._over.call(i,n))}}})},dragStop:function(t,n){t.element.parentsUntil("body").unbind("scroll.droppable");t.options.refreshPositions||e.ui.ddmanager.prepareOffsets(t,n)}}})(jQuery);(function(e){e.widget("ui.resizable",e.ui.mouse,{widgetEventPrefix:"resize",options:{alsoResize:!1,animate:!1,animateDuration:"slow",animateEasing:"swing",aspectRatio:!1,autoHide:!1,containment:!1,ghost:!1,grid:!1,handles:"e,s,se",helper:!1,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:1e3},_create:function(){var t=this,n=this.options;this.element.addClass("ui-resizable");e.extend(this,{_aspectRatio:!!n.aspectRatio,aspectRatio:n.aspectRatio,originalElement:this.element,_proportionallyResizeElements:[],_helper:n.helper||n.ghost||n.animate?n.helper||"ui-resizable-helper":null});this.element[0].nodeName.match(/canvas|textarea|input|select|button|img/i)&&(/relative/.test(this.element.css("position"))&&e.browser.opera&&this.element.css({position:"relative",top:"auto",left:"auto"}),this.element.wrap(e('<div class="ui-wrapper" style="overflow: hidden;"></div>').css({position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")})),this.element=this.element.parent().data("resizable",this.element.data("resizable")),this.elementIsWrapper=!0,this.element.css({marginLeft:this.originalElement.css("marginLeft"),marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom")}),this.originalElement.css({marginLeft:0,marginTop:0,marginRight:0,marginBottom:0}),this.originalResizeStyle=this.originalElement.css("resize"),this.originalElement.css("resize","none"),this._proportionallyResizeElements.push(this.originalElement.css({position:"static",zoom:1,display:"block"})),this.originalElement.css({margin:this.originalElement.css("margin")}),this._proportionallyResize());this.handles=n.handles||(!e(".ui-resizable-handle",this.element).length?"e,s,se":{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"});if(this.handles.constructor==String){"all"==this.handles&&(this.handles="n,e,s,w,se,sw,ne,nw");var r=this.handles.split(",");this.handles={};for(var i=0;i<r.length;i++){var s=e.trim(r[i]),o=e('<div class="ui-resizable-handle ui-resizable-'+s+'"></div>');/sw|se|ne|nw/.test(s)&&o.css({zIndex:++n.zIndex});"se"==s&&o.addClass("ui-icon ui-icon-gripsmall-diagonal-se");this.handles[s]=".ui-resizable-"+s;this.element.append(o)}}this._renderAxis=function(t){t=t||this.element;for(var n in this.handles){this.handles[n].constructor==String&&(this.handles[n]=e(this.handles[n],this.element).show());if(this.elementIsWrapper&&this.originalElement[0].nodeName.match(/textarea|input|select|button/i)){var r=e(this.handles[n],this.element),i=0,i=/sw|ne|nw|se|n|s/.test(n)?r.outerHeight():r.outerWidth(),r=["padding",/ne|nw|n/.test(n)?"Top":/se|sw|s/.test(n)?"Bottom":/^e$/.test(n)?"Right":"Left"].join("");t.css(r,i);this._proportionallyResize()}e(this.handles[n])}};this._renderAxis(this.element);this._handles=e(".ui-resizable-handle",this.element).disableSelection();this._handles.mouseover(function(){if(!t.resizing){if(this.className)var e=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i);t.axis=e&&e[1]?e[1]:"se"}});n.autoHide&&(this._handles.hide(),e(this.element).addClass("ui-resizable-autohide").hover(function(){n.disabled||(e(this).removeClass("ui-resizable-autohide"),t._handles.show())},function(){!n.disabled&&!t.resizing&&(e(this).addClass("ui-resizable-autohide"),t._handles.hide())}));this._mouseInit()},destroy:function(){this._mouseDestroy();var t=function(t){e(t).removeClass("ui-resizable ui-resizable-disabled ui-resizable-resizing").removeData("resizable").unbind(".resizable").find(".ui-resizable-handle").remove()};if(this.elementIsWrapper){t(this.element);var n=this.element;n.after(this.originalElement.css({position:n.css("position"),width:n.outerWidth(),height:n.outerHeight(),top:n.css("top"),left:n.css("left")})).remove()}this.originalElement.css("resize",this.originalResizeStyle);t(this.originalElement);return this},_mouseCapture:function(t){var n=!1,r;for(r in this.handles)e(this.handles[r])[0]==t.target&&(n=!0);return!this.options.disabled&&n},_mouseStart:function(n){var r=this.options,i=this.element.position(),s=this.element;this.resizing=!0;this.documentScroll={top:e(document).scrollTop(),left:e(document).scrollLeft()};(s.is(".ui-draggable")||/absolute/.test(s.css("position")))&&s.css({position:"absolute",top:i.top,left:i.left});e.browser.opera&&/relative/.test(s.css("position"))&&s.css({position:"relative",top:"auto",left:"auto"});this._renderProxy();var i=t(this.helper.css("left")),o=t(this.helper.css("top"));r.containment&&(i+=e(r.containment).scrollLeft()||0,o+=e(r.containment).scrollTop()||0);this.offset=this.helper.offset();this.position={left:i,top:o};this.size=this._helper?{width:s.outerWidth(),height:s.outerHeight()}:{width:s.width(),height:s.height()};this.originalSize=this._helper?{width:s.outerWidth(),height:s.outerHeight()}:{width:s.width(),height:s.height()};this.originalPosition={left:i,top:o};this.sizeDiff={width:s.outerWidth()-s.width(),height:s.outerHeight()-s.height()};this.originalMousePosition={left:n.pageX,top:n.pageY};this.aspectRatio="number"==typeof r.aspectRatio?r.aspectRatio:this.originalSize.width/this.originalSize.height||1;r=e(".ui-resizable-"+this.axis).css("cursor");e("body").css("cursor","auto"==r?this.axis+"-resize":r);s.addClass("ui-resizable-resizing");this._propagate("start",n);return!0},_mouseDrag:function(e){var t=this.helper,n=this.originalMousePosition,r=this._change[this.axis];if(!r)return!1;n=r.apply(this,[e,e.pageX-n.left||0,e.pageY-n.top||0]);this._updateVirtualBoundaries(e.shiftKey);if(this._aspectRatio||e.shiftKey)n=this._updateRatio(n,e);n=this._respectSize(n,e);this._propagate("resize",e);t.css({top:this.position.top+"px",left:this.position.left+"px",width:this.size.width+"px",height:this.size.height+"px"});!this._helper&&this._proportionallyResizeElements.length&&this._proportionallyResize();this._updateCache(n);this._trigger("resize",e,this.ui());return!1},_mouseStop:function(t){this.resizing=!1;var n=this.options;if(this._helper){var r=this._proportionallyResizeElements,i=r.length&&/textarea/i.test(r[0].nodeName),r=i&&e.ui.hasScroll(r[0],"left")?0:this.sizeDiff.height,i=i?0:this.sizeDiff.width,i={width:this.helper.width()-i,height:this.helper.height()-r},r=parseInt(this.element.css("left"),10)+(this.position.left-this.originalPosition.left)||null,s=parseInt(this.element.css("top"),10)+(this.position.top-this.originalPosition.top)||null;n.animate||this.element.css(e.extend(i,{top:s,left:r}));this.helper.height(this.size.height);this.helper.width(this.size.width);this._helper&&!n.animate&&this._proportionallyResize()}e("body").css("cursor","auto");this.element.removeClass("ui-resizable-resizing");this._propagate("stop",t);this._helper&&this.helper.remove();return!1},_updateVirtualBoundaries:function(e){var t=this.options,r,i,s,t={minWidth:n(t.minWidth)?t.minWidth:0,maxWidth:n(t.maxWidth)?t.maxWidth:Infinity,minHeight:n(t.minHeight)?t.minHeight:0,maxHeight:n(t.maxHeight)?t.maxHeight:Infinity};if(this._aspectRatio||e)e=t.minHeight*this.aspectRatio,i=t.minWidth/this.aspectRatio,r=t.maxHeight*this.aspectRatio,s=t.maxWidth/this.aspectRatio,e>t.minWidth&&(t.minWidth=e),i>t.minHeight&&(t.minHeight=i),r<t.maxWidth&&(t.maxWidth=r),s<t.maxHeight&&(t.maxHeight=s);this._vBoundaries=t},_updateCache:function(e){this.offset=this.helper.offset();n(e.left)&&(this.position.left=e.left);n(e.top)&&(this.position.top=e.top);n(e.height)&&(this.size.height=e.height);n(e.width)&&(this.size.width=e.width)},_updateRatio:function(e){var t=this.position,r=this.size,i=this.axis;n(e.height)?e.width=e.height*this.aspectRatio:n(e.width)&&(e.height=e.width/this.aspectRatio);"sw"==i&&(e.left=t.left+(r.width-e.width),e.top=null);"nw"==i&&(e.top=t.top+(r.height-e.height),e.left=t.left+(r.width-e.width));return e},_respectSize:function(e){var t=this._vBoundaries,r=this.axis,i=n(e.width)&&t.maxWidth&&t.maxWidth<e.width,s=n(e.height)&&t.maxHeight&&t.maxHeight<e.height,o=n(e.width)&&t.minWidth&&t.minWidth>e.width,u=n(e.height)&&t.minHeight&&t.minHeight>e.height;o&&(e.width=t.minWidth);u&&(e.height=t.minHeight);i&&(e.width=t.maxWidth);s&&(e.height=t.maxHeight);var a=this.originalPosition.left+this.originalSize.width,f=this.position.top+this.size.height,l=/sw|nw|w/.test(r),r=/nw|ne|n/.test(r);o&&l&&(e.left=a-t.minWidth);i&&l&&(e.left=a-t.maxWidth);u&&r&&(e.top=f-t.minHeight);s&&r&&(e.top=f-t.maxHeight);(t=!e.width&&!e.height)&&!e.left&&e.top?e.top=null:t&&!e.top&&e.left&&(e.left=null);return e},_proportionallyResize:function(){if(this._proportionallyResizeElements.length)for(var t=this.helper||this.element,n=0;n<this._proportionallyResizeElements.length;n++){var r=this._proportionallyResizeElements[n];if(!this.borderDif){var i=[r.css("borderTopWidth"),r.css("borderRightWidth"),r.css("borderBottomWidth"),r.css("borderLeftWidth")],s=[r.css("paddingTop"),r.css("paddingRight"),r.css("paddingBottom"),r.css("paddingLeft")];this.borderDif=e.map(i,function(e,t){e=parseInt(e,10)||0;t=parseInt(s[t],10)||0;return e+t})}e.browser.msie&&(e(t).is(":hidden")||e(t).parents(":hidden").length)||r.css({height:t.height()-this.borderDif[0]-this.borderDif[2]||0,width:t.width()-this.borderDif[1]-this.borderDif[3]||0})}},_renderProxy:function(){var t=this.options;this.elementOffset=this.element.offset();if(this._helper){this.helper=this.helper||e('<div style="overflow:hidden;"></div>');var n=e.browser.msie&&7>e.browser.version,r=n?1:0,n=n?2:-1;this.helper.addClass(this._helper).css({width:this.element.outerWidth()+n,height:this.element.outerHeight()+n,position:"absolute",left:this.elementOffset.left-r+"px",top:this.elementOffset.top-r+"px",zIndex:++t.zIndex});this.helper.appendTo("body").disableSelection()}else this.helper=this.element},_change:{e:function(e,t){return{width:this.originalSize.width+t}},w:function(e,t){return{left:this.originalPosition.left+t,width:this.originalSize.width-t}},n:function(e,t,n){return{top:this.originalPosition.top+n,height:this.originalSize.height-n}},s:function(e,t,n){return{height:this.originalSize.height+n}},se:function(t,n,r){return e.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[t,n,r]))},sw:function(t,n,r){return e.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[t,n,r]))},ne:function(t,n,r){return e.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[t,n,r]))},nw:function(t,n,r){return e.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,[t,n,r]))}},_propagate:function(t,n){e.ui.plugin.call(this,t,[n,this.ui()]);"resize"!=t&&this._trigger(t,n,this.ui())},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition}}});e.extend(e.ui.resizable,{version:"1.8.14"});e.ui.plugin.add("resizable","alsoResize",{start:function(){var t=e(this).data("resizable").options,n=function(t){e(t).each(function(){var t=e(this);t.data("resizable-alsoresize",{width:parseInt(t.width(),10),height:parseInt(t.height(),10),left:parseInt(t.css("left"),10),top:parseInt(t.css("top"),10),position:t.css("position")})})};"object"==typeof t.alsoResize&&!t.alsoResize.parentNode?t.alsoResize.length?(t.alsoResize=t.alsoResize[0],n(t.alsoResize)):e.each(t.alsoResize,function(e){n(e)}):n(t.alsoResize)},resize:function(t,n){var r=e(this).data("resizable");t=r.options;var i=r.originalSize,s=r.originalPosition,o={height:r.size.height-i.height||0,width:r.size.width-i.width||0,top:r.position.top-s.top||0,left:r.position.left-s.left||0},u=function(t,i){e(t).each(function(){var t=e(this),s=e(this).data("resizable-alsoresize"),u={},f=i&&i.length?i:t.parents(n.originalElement[0]).length?["width","height"]:["width","height","top","left"];e.each(f,function(e,t){if((e=(s[t]||0)+(o[t]||0))&&0<=e)u[t]=e||null});e.browser.opera&&/relative/.test(t.css("position"))&&(r._revertToRelativePosition=!0,t.css({position:"absolute",top:"auto",left:"auto"}));t.css(u)})};"object"==typeof t.alsoResize&&!t.alsoResize.nodeType?e.each(t.alsoResize,function(e,t){u(e,t)}):u(t.alsoResize)},stop:function(){var t=e(this).data("resizable"),n=t.options,r=function(t){e(t).each(function(){var t=e(this);t.css({position:t.data("resizable-alsoresize").position})})};t._revertToRelativePosition&&(t._revertToRelativePosition=!1,"object"==typeof n.alsoResize&&!n.alsoResize.nodeType?e.each(n.alsoResize,function(e){r(e)}):r(n.alsoResize));e(this).removeData("resizable-alsoresize")}});e.ui.plugin.add("resizable","animate",{stop:function(t){var n=e(this).data("resizable"),r=n.options,i=n._proportionallyResizeElements,s=i.length&&/textarea/i.test(i[0].nodeName),o=s&&e.ui.hasScroll(i[0],"left")?0:n.sizeDiff.height,s={width:n.size.width-(s?0:n.sizeDiff.width),height:n.size.height-o},o=parseInt(n.element.css("left"),10)+(n.position.left-n.originalPosition.left)||null,u=parseInt(n.element.css("top"),10)+(n.position.top-n.originalPosition.top)||null;n.element.animate(e.extend(s,u&&o?{top:u,left:o}:{}),{duration:r.animateDuration,easing:r.animateEasing,step:function(){var r={width:parseInt(n.element.css("width"),10),height:parseInt(n.element.css("height"),10),top:parseInt(n.element.css("top"),10),left:parseInt(n.element.css("left"),10)};i&&i.length&&e(i[0]).css({width:r.width,height:r.height});n._updateCache(r);n._propagate("resize",t)}})}});e.ui.plugin.add("resizable","containment",{start:function(){var n=e(this).data("resizable"),r=n.element,i=n.options.containment;if(r=i instanceof e?i.get(0):/parent/.test(i)?r.parent().get(0):i)if(n.containerElement=e(r),/document/.test(i)||i==document)n.containerOffset={left:0,top:0},n.containerPosition={left:0,top:0},n.parentData={element:e(document),left:0,top:0,width:e(document).width(),height:e(document).height()||document.body.parentNode.scrollHeight};else{var s=e(r),o=[];e(["Top","Right","Left","Bottom"]).each(function(e,n){o[e]=t(s.css("padding"+n))});n.containerOffset=s.offset();n.containerPosition=s.position();n.containerSize={height:s.innerHeight()-o[3],width:s.innerWidth()-o[1]};var i=n.containerOffset,u=n.containerSize.height,f=n.containerSize.width,f=e.ui.hasScroll(r,"left")?r.scrollWidth:f,u=e.ui.hasScroll(r)?r.scrollHeight:u;n.parentData={element:r,left:i.left,top:i.top,width:f,height:u}}},resize:function(t){var n=e(this).data("resizable"),r=n.options,i=n.containerOffset,s=n.position;t=n._aspectRatio||t.shiftKey;var o={top:0,left:0},u=n.containerElement;u[0]!=document&&/static/.test(u.css("position"))&&(o=i);if(s.left<(n._helper?i.left:0))n.size.width+=n._helper?n.position.left-i.left:n.position.left-o.left,t&&(n.size.height=n.size.width/r.aspectRatio),n.position.left=r.helper?i.left:0;if(s.top<(n._helper?i.top:0))n.size.height+=n._helper?n.position.top-i.top:n.position.top,t&&(n.size.width=n.size.height*r.aspectRatio),n.position.top=n._helper?i.top:0;n.offset.left=n.parentData.left+n.position.left;n.offset.top=n.parentData.top+n.position.top;r=Math.abs(n.offset.left-o.left+n.sizeDiff.width);i=Math.abs((n._helper?n.offset.top-o.top:n.offset.top-i.top)+n.sizeDiff.height);s=n.containerElement.get(0)==n.element.parent().get(0);o=/relative|absolute/.test(n.containerElement.css("position"));s&&o&&(r-=n.parentData.left);r+n.size.width>=n.parentData.width&&(n.size.width=n.parentData.width-r,t&&(n.size.height=n.size.width/n.aspectRatio));i+n.size.height>=n.parentData.height&&(n.size.height=n.parentData.height-i,t&&(n.size.width=n.size.height*n.aspectRatio))},stop:function(){var t=e(this).data("resizable"),n=t.options,r=t.containerOffset,i=t.containerPosition,s=t.containerElement,o=e(t.helper),u=o.offset(),f=o.outerWidth()-t.sizeDiff.width,o=o.outerHeight()-t.sizeDiff.height;t._helper&&!n.animate&&/relative/.test(s.css("position"))&&e(this).css({left:u.left-i.left-r.left,width:f,height:o});t._helper&&!n.animate&&/static/.test(s.css("position"))&&e(this).css({left:u.left-i.left-r.left,width:f,height:o})}});e.ui.plugin.add("resizable","ghost",{start:function(){var t=e(this).data("resizable"),n=t.options,r=t.size;t.ghost=t.originalElement.clone();t.ghost.css({opacity:.25,display:"block",position:"relative",height:r.height,width:r.width,margin:0,left:0,top:0}).addClass("ui-resizable-ghost").addClass("string"==typeof n.ghost?n.ghost:"");t.ghost.appendTo(t.helper)},resize:function(){var t=e(this).data("resizable");t.ghost&&t.ghost.css({position:"relative",height:t.size.height,width:t.size.width})},stop:function(){var t=e(this).data("resizable");t.ghost&&t.helper&&t.helper.get(0).removeChild(t.ghost.get(0))}});e.ui.plugin.add("resizable","grid",{resize:function(){var t=e(this).data("resizable"),n=t.options,r=t.size,i=t.originalSize,s=t.originalPosition,o=t.axis;n.grid="number"==typeof n.grid?[n.grid,n.grid]:n.grid;var u=Math.round((r.width-i.width)/(n.grid[0]||1))*(n.grid[0]||1),n=Math.round((r.height-i.height)/(n.grid[1]||1))*(n.grid[1]||1);/^(se|s|e)$/.test(o)?(t.size.width=i.width+u,t.size.height=i.height+n):/^(ne)$/.test(o)?(t.size.width=i.width+u,t.size.height=i.height+n,t.position.top=s.top-n):(/^(sw)$/.test(o)?(t.size.width=i.width+u,t.size.height=i.height+n):(t.size.width=i.width+u,t.size.height=i.height+n,t.position.top=s.top-n),t.position.left=s.left-u)}});var t=function(e){return parseInt(e,10)||0},n=function(e){return!isNaN(parseInt(e,10))}})(jQuery);(function(e){e.widget("ui.selectable",e.ui.mouse,{options:{appendTo:"body",autoRefresh:!0,distance:0,filter:"*",tolerance:"touch"},_create:function(){var t=this;this.element.addClass("ui-selectable");this.dragged=!1;var n;this.refresh=function(){n=e(t.options.filter,t.element[0]);n.each(function(){var t=e(this),n=t.offset();e.data(this,"selectable-item",{element:this,$element:t,left:n.left,top:n.top,right:n.left+t.outerWidth(),bottom:n.top+t.outerHeight(),startselected:!1,selected:t.hasClass("ui-selected"),selecting:t.hasClass("ui-selecting"),unselecting:t.hasClass("ui-unselecting")})})};this.refresh();this.selectees=n.addClass("ui-selectee");this._mouseInit();this.helper=e("<div class='ui-selectable-helper'></div>")},destroy:function(){this.selectees.removeClass("ui-selectee").removeData("selectable-item");this.element.removeClass("ui-selectable ui-selectable-disabled").removeData("selectable").unbind(".selectable");this._mouseDestroy();return this},_mouseStart:function(t){var n=this;this.opos=[t.pageX,t.pageY];if(!this.options.disabled){var r=this.options;this.selectees=e(r.filter,this.element[0]);this._trigger("start",t);e(r.appendTo).append(this.helper);this.helper.css({left:t.clientX,top:t.clientY,width:0,height:0});r.autoRefresh&&this.refresh();this.selectees.filter(".ui-selected").each(function(){var r=e.data(this,"selectable-item");r.startselected=!0;t.metaKey||(r.$element.removeClass("ui-selected"),r.selected=!1,r.$element.addClass("ui-unselecting"),r.unselecting=!0,n._trigger("unselecting",t,{unselecting:r.element}))});e(t.target).parents().andSelf().each(function(){var r=e.data(this,"selectable-item");if(r){var i=!t.metaKey||!r.$element.hasClass("ui-selected");r.$element.removeClass(i?"ui-unselecting":"ui-selected").addClass(i?"ui-selecting":"ui-unselecting");r.unselecting=!i;r.selecting=i;(r.selected=i)?n._trigger("selecting",t,{selecting:r.element}):n._trigger("unselecting",t,{unselecting:r.element});return!1}})}},_mouseDrag:function(t){var n=this;this.dragged=!0;if(!this.options.disabled){var r=this.options,i=this.opos[0],s=this.opos[1],o=t.pageX,u=t.pageY;if(i>o)var f=o,o=i,i=f;s>u&&(f=u,u=s,s=f);this.helper.css({left:i,top:s,width:o-i,height:u-s});this.selectees.each(function(){var f=e.data(this,"selectable-item");if(f&&f.element!=n.element[0]){var l=!1;"touch"==r.tolerance?l=!(f.left>o||f.right<i||f.top>u||f.bottom<s):"fit"==r.tolerance&&(l=f.left>i&&f.right<o&&f.top>s&&f.bottom<u);l?(f.selected&&(f.$element.removeClass("ui-selected"),f.selected=!1),f.unselecting&&(f.$element.removeClass("ui-unselecting"),f.unselecting=!1),f.selecting||(f.$element.addClass("ui-selecting"),f.selecting=!0,n._trigger("selecting",t,{selecting:f.element}))):(f.selecting&&(t.metaKey&&f.startselected?(f.$element.removeClass("ui-selecting"),f.selecting=!1,f.$element.addClass("ui-selected"),f.selected=!0):(f.$element.removeClass("ui-selecting"),f.selecting=!1,f.startselected&&(f.$element.addClass("ui-unselecting"),f.unselecting=!0),n._trigger("unselecting",t,{unselecting:f.element}))),f.selected&&!t.metaKey&&!f.startselected&&(f.$element.removeClass("ui-selected"),f.selected=!1,f.$element.addClass("ui-unselecting"),f.unselecting=!0,n._trigger("unselecting",t,{unselecting:f.element})))}});return!1}},_mouseStop:function(t){var n=this;this.dragged=!1;e(".ui-unselecting",this.element[0]).each(function(){var r=e.data(this,"selectable-item");r.$element.removeClass("ui-unselecting");r.unselecting=!1;r.startselected=!1;n._trigger("unselected",t,{unselected:r.element})});e(".ui-selecting",this.element[0]).each(function(){var r=e.data(this,"selectable-item");r.$element.removeClass("ui-selecting").addClass("ui-selected");r.selecting=!1;r.selected=!0;r.startselected=!0;n._trigger("selected",t,{selected:r.element})});this._trigger("stop",t);this.helper.remove();return!1}});e.extend(e.ui.selectable,{version:"1.8.14"})})(jQuery);(function(e){e.widget("ui.sortable",e.ui.mouse,{widgetEventPrefix:"sort",options:{appendTo:"parent",axis:!1,connectWith:!1,containment:!1,cursor:"auto",cursorAt:!1,dropOnEmpty:!0,forcePlaceholderSize:!1,forceHelperSize:!1,grid:!1,handle:!1,helper:"original",items:"> *",opacity:!1,placeholder:!1,revert:!1,scroll:!0,scrollSensitivity:20,scrollSpeed:20,scope:"default",tolerance:"intersect",zIndex:1e3},_create:function(){var e=this.options;this.containerCache={};this.element.addClass("ui-sortable");this.refresh();this.floating=this.items.length?"x"===e.axis||/left|right/.test(this.items[0].item.css("float"))||/inline|table-cell/.test(this.items[0].item.css("display")):!1;this.offset=this.element.offset();this._mouseInit()},destroy:function(){this.element.removeClass("ui-sortable ui-sortable-disabled").removeData("sortable").unbind(".sortable");this._mouseDestroy();for(var e=this.items.length-1;0<=e;e--)this.items[e].item.removeData("sortable-item");return this},_setOption:function(t,n){"disabled"===t?(this.options[t]=n,this.widget()[n?"addClass":"removeClass"]("ui-sortable-disabled")):e.Widget.prototype._setOption.apply(this,arguments)},_mouseCapture:function(t,n){if(this.reverting||this.options.disabled||"static"==this.options.type)return!1;this._refreshItems(t);var r=null,i=this;e(t.target).parents().each(function(){if(e.data(this,"sortable-item")==i)return r=e(this),!1});e.data(t.target,"sortable-item")==i&&(r=e(t.target));if(!r)return!1;if(this.options.handle&&!n){var s=!1;e(this.options.handle,r).find("*").andSelf().each(function(){this==t.target&&(s=!0)});if(!s)return!1}this.currentItem=r;this._removeCurrentsFromItems();return!0},_mouseStart:function(t,n,r){n=this.options;this.currentContainer=this;this.refreshPositions();this.helper=this._createHelper(t);this._cacheHelperProportions();this._cacheMargins();this.scrollParent=this.helper.scrollParent();this.offset=this.currentItem.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};this.helper.css("position","absolute");this.cssPosition=this.helper.css("position");e.extend(this.offset,{click:{left:t.pageX-this.offset.left,top:t.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});this.originalPosition=this._generatePosition(t);this.originalPageX=t.pageX;this.originalPageY=t.pageY;n.cursorAt&&this._adjustOffsetFromHelper(n.cursorAt);this.domPosition={prev:this.currentItem.prev()[0],parent:this.currentItem.parent()[0]};this.helper[0]!=this.currentItem[0]&&this.currentItem.hide();this._createPlaceholder();n.containment&&this._setContainment();n.cursor&&(e("body").css("cursor")&&(this._storedCursor=e("body").css("cursor")),e("body").css("cursor",n.cursor));n.opacity&&(this.helper.css("opacity")&&(this._storedOpacity=this.helper.css("opacity")),this.helper.css("opacity",n.opacity));n.zIndex&&(this.helper.css("zIndex")&&(this._storedZIndex=this.helper.css("zIndex")),this.helper.css("zIndex",n.zIndex));this.scrollParent[0]!=document&&"HTML"!=this.scrollParent[0].tagName&&(this.overflowOffset=this.scrollParent.offset());this._trigger("start",t,this._uiHash());this._preserveHelperProportions||this._cacheHelperProportions();if(!r)for(r=this.containers.length-1;0<=r;r--)this.containers[r]._trigger("activate",t,this._uiHash(this));e.ui.ddmanager&&(e.ui.ddmanager.current=this);e.ui.ddmanager&&!n.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t);this.dragging=!0;this.helper.addClass("ui-sortable-helper");this._mouseDrag(t);return!0},_mouseDrag:function(t){this.position=this._generatePosition(t);this.positionAbs=this._convertPositionTo("absolute");this.lastPositionAbs||(this.lastPositionAbs=this.positionAbs);if(this.options.scroll){var n=this.options,r=!1;this.scrollParent[0]!=document&&"HTML"!=this.scrollParent[0].tagName?(this.overflowOffset.top+this.scrollParent[0].offsetHeight-t.pageY<n.scrollSensitivity?this.scrollParent[0].scrollTop=r=this.scrollParent[0].scrollTop+n.scrollSpeed:t.pageY-this.overflowOffset.top<n.scrollSensitivity&&(this.scrollParent[0].scrollTop=r=this.scrollParent[0].scrollTop-n.scrollSpeed),this.overflowOffset.left+this.scrollParent[0].offsetWidth-t.pageX<n.scrollSensitivity?this.scrollParent[0].scrollLeft=r=this.scrollParent[0].scrollLeft+n.scrollSpeed:t.pageX-this.overflowOffset.left<n.scrollSensitivity&&(this.scrollParent[0].scrollLeft=r=this.scrollParent[0].scrollLeft-n.scrollSpeed)):(t.pageY-e(document).scrollTop()<n.scrollSensitivity?r=e(document).scrollTop(e(document).scrollTop()-n.scrollSpeed):e(window).height()-(t.pageY-e(document).scrollTop())<n.scrollSensitivity&&(r=e(document).scrollTop(e(document).scrollTop()+n.scrollSpeed)),t.pageX-e(document).scrollLeft()<n.scrollSensitivity?r=e(document).scrollLeft(e(document).scrollLeft()-n.scrollSpeed):e(window).width()-(t.pageX-e(document).scrollLeft())<n.scrollSensitivity&&(r=e(document).scrollLeft(e(document).scrollLeft()+n.scrollSpeed)));!1!==r&&e.ui.ddmanager&&!n.dropBehaviour&&e.ui.ddmanager.prepareOffsets(this,t)}this.positionAbs=this._convertPositionTo("absolute");if(!this.options.axis||"y"!=this.options.axis)this.helper[0].style.left=this.position.left+"px";if(!this.options.axis||"x"!=this.options.axis)this.helper[0].style.top=this.position.top+"px";for(n=this.items.length-1;0<=n;n--){var r=this.items[n],i=r.item[0],s=this._intersectsWithPointer(r);if(s&&i!=this.currentItem[0]&&this.placeholder[1==s?"next":"prev"]()[0]!=i&&!e.ui.contains(this.placeholder[0],i)&&("semi-dynamic"==this.options.type?!e.ui.contains(this.element[0],i):1)){this.direction=1==s?"down":"up";if("pointer"==this.options.tolerance||this._intersectsWithSides(r))this._rearrange(t,r);else break;this._trigger("change",t,this._uiHash());break}}this._contactContainers(t);e.ui.ddmanager&&e.ui.ddmanager.drag(this,t);this._trigger("sort",t,this._uiHash());this.lastPositionAbs=this.positionAbs;return!1},_mouseStop:function(t,n){if(t){e.ui.ddmanager&&!this.options.dropBehaviour&&e.ui.ddmanager.drop(this,t);if(this.options.revert){var r=this;n=r.placeholder.offset();r.reverting=!0;e(this.helper).animate({left:n.left-this.offset.parent.left-r.margins.left+(this.offsetParent[0]==document.body?0:this.offsetParent[0].scrollLeft),top:n.top-this.offset.parent.top-r.margins.top+(this.offsetParent[0]==document.body?0:this.offsetParent[0].scrollTop)},parseInt(this.options.revert,10)||500,function(){r._clear(t)})}else this._clear(t,n);return!1}},cancel:function(){if(this.dragging){this._mouseUp({target:null});"original"==this.options.helper?this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper"):this.currentItem.show();for(var t=this.containers.length-1;0<=t;t--)this.containers[t]._trigger("deactivate",null,this._uiHash(this)),this.containers[t].containerCache.over&&(this.containers[t]._trigger("out",null,this._uiHash(this)),this.containers[t].containerCache.over=0)}this.placeholder&&(this.placeholder[0].parentNode&&this.placeholder[0].parentNode.removeChild(this.placeholder[0]),"original"!=this.options.helper&&this.helper&&this.helper[0].parentNode&&this.helper.remove(),e.extend(this,{helper:null,dragging:!1,reverting:!1,_noFinalSort:null}),this.domPosition.prev?e(this.domPosition.prev).after(this.currentItem):e(this.domPosition.parent).prepend(this.currentItem));return this},serialize:function(t){var n=this._getItemsAsjQuery(t&&t.connected),r=[];t=t||{};e(n).each(function(){var n=(e(t.item||this).attr(t.attribute||"id")||"").match(t.expression||/(.+)[-=_](.+)/);n&&r.push((t.key||n[1]+"[]")+"="+(t.key&&t.expression?n[1]:n[2]))});!r.length&&t.key&&r.push(t.key+"=");return r.join("&")},toArray:function(t){var n=this._getItemsAsjQuery(t&&t.connected),r=[];t=t||{};n.each(function(){r.push(e(t.item||this).attr(t.attribute||"id")||"")});return r},_intersectsWith:function(e){var t=this.positionAbs.left,n=t+this.helperProportions.width,r=this.positionAbs.top,i=r+this.helperProportions.height,s=e.left,o=s+e.width,u=e.top,a=u+e.height,f=this.offset.click.top,l=this.offset.click.left;return"pointer"==this.options.tolerance||this.options.forcePointerForContainers||"pointer"!=this.options.tolerance&&this.helperProportions[this.floating?"width":"height"]>e[this.floating?"width":"height"]?r+f>u&&r+f<a&&t+l>s&&t+l<o:s<t+this.helperProportions.width/2&&n-this.helperProportions.width/2<o&&u<r+this.helperProportions.height/2&&i-this.helperProportions.height/2<a},_intersectsWithPointer:function(t){var n=e.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,t.top,t.height);t=e.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,t.left,t.width);n=n&&t;t=this._getDragVerticalDirection();var r=this._getDragHorizontalDirection();return!n?!1:this.floating?r&&"right"==r||"down"==t?2:1:t&&("down"==t?2:1)},_intersectsWithSides:function(t){var n=e.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,t.top+t.height/2,t.height);t=e.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,t.left+t.width/2,t.width);var r=this._getDragVerticalDirection(),i=this._getDragHorizontalDirection();return this.floating&&i?"right"==i&&t||"left"==i&&!t:r&&("down"==r&&n||"up"==r&&!n)},_getDragVerticalDirection:function(){var e=this.positionAbs.top-this.lastPositionAbs.top;return 0!=e&&(0<e?"down":"up")},_getDragHorizontalDirection:function(){var e=this.positionAbs.left-this.lastPositionAbs.left;return 0!=e&&(0<e?"right":"left")},refresh:function(e){this._refreshItems(e);this.refreshPositions();return this},_connectWith:function(){var e=this.options;return e.connectWith.constructor==String?[e.connectWith]:e.connectWith},_getItemsAsjQuery:function(t){var n=[],r=[],i=this._connectWith();if(i&&t)for(t=i.length-1;0<=t;t--)for(var s=e(i[t]),o=s.length-1;0<=o;o--){var u=e.data(s[o],"sortable");u&&u!=this&&!u.options.disabled&&r.push([e.isFunction(u.options.items)?u.options.items.call(u.element):e(u.options.items,u.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),u])}r.push([e.isFunction(this.options.items)?this.options.items.call(this.element,null,{options:this.options,item:this.currentItem}):e(this.options.items,this.element).not(".ui-sortable-helper").not(".ui-sortable-placeholder"),this]);for(t=r.length-1;0<=t;t--)r[t][0].each(function(){n.push(this)});return e(n)},_removeCurrentsFromItems:function(){for(var e=this.currentItem.find(":data(sortable-item)"),t=0;t<this.items.length;t++)for(var n=0;n<e.length;n++)e[n]==this.items[t].item[0]&&this.items.splice(t,1)},_refreshItems:function(t){this.items=[];this.containers=[this];var n=this.items,r=[[e.isFunction(this.options.items)?this.options.items.call(this.element[0],t,{item:this.currentItem}):e(this.options.items,this.element),this]],i=this._connectWith();if(i)for(var s=i.length-1;0<=s;s--)for(var o=e(i[s]),u=o.length-1;0<=u;u--){var f=e.data(o[u],"sortable");f&&f!=this&&!f.options.disabled&&(r.push([e.isFunction(f.options.items)?f.options.items.call(f.element[0],t,{item:this.currentItem}):e(f.options.items,f.element),f]),this.containers.push(f))}for(s=r.length-1;0<=s;s--){t=r[s][1];i=r[s][0];u=0;for(o=i.length;u<o;u++)f=e(i[u]),f.data("sortable-item",t),n.push({item:f,instance:t,width:0,height:0,left:0,top:0})}},refreshPositions:function(t){this.offsetParent&&this.helper&&(this.offset.parent=this._getParentOffset());for(var n=this.items.length-1;0<=n;n--){var r=this.items[n];if(!(r.instance!=this.currentContainer&&this.currentContainer&&r.item[0]!=this.currentItem[0])){var i=this.options.toleranceElement?e(this.options.toleranceElement,r.item):r.item;t||(r.width=i.outerWidth(),r.height=i.outerHeight());i=i.offset();r.left=i.left;r.top=i.top}}if(this.options.custom&&this.options.custom.refreshContainers)this.options.custom.refreshContainers.call(this);else for(n=this.containers.length-1;0<=n;n--)i=this.containers[n].element.offset(),this.containers[n].containerCache.left=i.left,this.containers[n].containerCache.top=i.top,this.containers[n].containerCache.width=this.containers[n].element.outerWidth(),this.containers[n].containerCache.height=this.containers[n].element.outerHeight();return this},_createPlaceholder:function(t){var n=t||this,r=n.options;if(!r.placeholder||r.placeholder.constructor==String){var i=r.placeholder;r.placeholder={element:function(){var t=e(document.createElement(n.currentItem[0].nodeName)).addClass(i||n.currentItem[0].className+" ui-sortable-placeholder").removeClass("ui-sortable-helper")[0];i||(t.style.visibility="hidden");return t},update:function(e,t){if(!i||r.forcePlaceholderSize)t.height()||t.height(n.currentItem.innerHeight()-parseInt(n.currentItem.css("paddingTop")||0,10)-parseInt(n.currentItem.css("paddingBottom")||0,10)),t.width()||t.width(n.currentItem.innerWidth()-parseInt(n.currentItem.css("paddingLeft")||0,10)-parseInt(n.currentItem.css("paddingRight")||0,10))}}}n.placeholder=e(r.placeholder.element.call(n.element,n.currentItem));n.currentItem.after(n.placeholder);r.placeholder.update(n,n.placeholder)},_contactContainers:function(t){for(var n=null,r=null,i=this.containers.length-1;0<=i;i--)if(!e.ui.contains(this.currentItem[0],this.containers[i].element[0]))if(this._intersectsWith(this.containers[i].containerCache)){if(!n||!e.ui.contains(this.containers[i].element[0],n.element[0]))n=this.containers[i],r=i}else this.containers[i].containerCache.over&&(this.containers[i]._trigger("out",t,this._uiHash(this)),this.containers[i].containerCache.over=0);if(n)if(1===this.containers.length)this.containers[r]._trigger("over",t,this._uiHash(this)),this.containers[r].containerCache.over=1;else if(this.currentContainer!=this.containers[r]){for(var n=1e4,i=null,s=this.positionAbs[this.containers[r].floating?"left":"top"],o=this.items.length-1;0<=o;o--)if(e.ui.contains(this.containers[r].element[0],this.items[o].item[0])){var u=this.items[o][this.containers[r].floating?"left":"top"];Math.abs(u-s)<n&&(n=Math.abs(u-s),i=this.items[o])}if(i||this.options.dropOnEmpty)this.currentContainer=this.containers[r],i?this._rearrange(t,i,null,!0):this._rearrange(t,null,this.containers[r].element,!0),this._trigger("change",t,this._uiHash()),this.containers[r]._trigger("change",t,this._uiHash(this)),this.options.placeholder.update(this.currentContainer,this.placeholder),this.containers[r]._trigger("over",t,this._uiHash(this)),this.containers[r].containerCache.over=1}},_createHelper:function(t){var n=this.options;t=e.isFunction(n.helper)?e(n.helper.apply(this.element[0],[t,this.currentItem])):"clone"==n.helper?this.currentItem.clone():this.currentItem;t.parents("body").length||e("parent"!=n.appendTo?n.appendTo:this.currentItem[0].parentNode)[0].appendChild(t[0]);t[0]==this.currentItem[0]&&(this._storedCSS={width:this.currentItem[0].style.width,height:this.currentItem[0].style.height,position:this.currentItem.css("position"),top:this.currentItem.css("top"),left:this.currentItem.css("left")});(""==t[0].style.width||n.forceHelperSize)&&t.width(this.currentItem.width());(""==t[0].style.height||n.forceHelperSize)&&t.height(this.currentItem.height());return t},_adjustOffsetFromHelper:function(t){"string"==typeof t&&(t=t.split(" "));e.isArray(t)&&(t={left:+t[0],top:+t[1]||0});"left"in t&&(this.offset.click.left=t.left+this.margins.left);"right"in t&&(this.offset.click.left=this.helperProportions.width-t.right+this.margins.left);"top"in t&&(this.offset.click.top=t.top+this.margins.top);"bottom"in t&&(this.offset.click.top=this.helperProportions.height-t.bottom+this.margins.top)},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var t=this.offsetParent.offset();"absolute"==this.cssPosition&&this.scrollParent[0]!=document&&e.ui.contains(this.scrollParent[0],this.offsetParent[0])&&(t.left+=this.scrollParent.scrollLeft(),t.top+=this.scrollParent.scrollTop());if(this.offsetParent[0]==document.body||this.offsetParent[0].tagName&&"html"==this.offsetParent[0].tagName.toLowerCase()&&e.browser.msie)t={top:0,left:0};return{top:t.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:t.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"==this.cssPosition){var e=this.currentItem.position();return{top:e.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:e.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}return{top:0,left:0}},_cacheMargins:function(){this.margins={left:parseInt(this.currentItem.css("marginLeft"),10)||0,top:parseInt(this.currentItem.css("marginTop"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var t=this.options;"parent"==t.containment&&(t.containment=this.helper[0].parentNode);if("document"==t.containment||"window"==t.containment)this.containment=[0-this.offset.relative.left-this.offset.parent.left,0-this.offset.relative.top-this.offset.parent.top,e("document"==t.containment?document:window).width()-this.helperProportions.width-this.margins.left,(e("document"==t.containment?document:window).height()||document.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top];if(!/^(document|window|parent)$/.test(t.containment)){var n=e(t.containment)[0],t=e(t.containment).offset(),r="hidden"!=e(n).css("overflow");this.containment=[t.left+(parseInt(e(n).css("borderLeftWidth"),10)||0)+(parseInt(e(n).css("paddingLeft"),10)||0)-this.margins.left,t.top+(parseInt(e(n).css("borderTopWidth"),10)||0)+(parseInt(e(n).css("paddingTop"),10)||0)-this.margins.top,t.left+(r?Math.max(n.scrollWidth,n.offsetWidth):n.offsetWidth)-(parseInt(e(n).css("borderLeftWidth"),10)||0)-(parseInt(e(n).css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left,t.top+(r?Math.max(n.scrollHeight,n.offsetHeight):n.offsetHeight)-(parseInt(e(n).css("borderTopWidth"),10)||0)-(parseInt(e(n).css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top]}},_convertPositionTo:function(t,n){n||(n=this.position);t="absolute"==t?1:-1;var r="absolute"==this.cssPosition&&!(this.scrollParent[0]!=document&&e.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,i=/(html|body)/i.test(r[0].tagName);return{top:n.top+this.offset.relative.top*t+this.offset.parent.top*t-(e.browser.safari&&"fixed"==this.cssPosition?0:("fixed"==this.cssPosition?-this.scrollParent.scrollTop():i?0:r.scrollTop())*t),left:n.left+this.offset.relative.left*t+this.offset.parent.left*t-(e.browser.safari&&"fixed"==this.cssPosition?0:("fixed"==this.cssPosition?-this.scrollParent.scrollLeft():i?0:r.scrollLeft())*t)}},_generatePosition:function(t){var n=this.options,r="absolute"==this.cssPosition&&!(this.scrollParent[0]!=document&&e.ui.contains(this.scrollParent[0],this.offsetParent[0]))?this.offsetParent:this.scrollParent,i=/(html|body)/i.test(r[0].tagName);"relative"==this.cssPosition&&!(this.scrollParent[0]!=document&&this.scrollParent[0]!=this.offsetParent[0])&&(this.offset.relative=this._getRelativeOffset());var s=t.pageX,o=t.pageY;this.originalPosition&&(this.containment&&(t.pageX-this.offset.click.left<this.containment[0]&&(s=this.containment[0]+this.offset.click.left),t.pageY-this.offset.click.top<this.containment[1]&&(o=this.containment[1]+this.offset.click.top),t.pageX-this.offset.click.left>this.containment[2]&&(s=this.containment[2]+this.offset.click.left),t.pageY-this.offset.click.top>this.containment[3]&&(o=this.containment[3]+this.offset.click.top)),n.grid&&(o=this.originalPageY+Math.round((o-this.originalPageY)/n.grid[1])*n.grid[1],o=this.containment?!(o-this.offset.click.top<this.containment[1]||o-this.offset.click.top>this.containment[3])?o:!(o-this.offset.click.top<this.containment[1])?o-n.grid[1]:o+n.grid[1]:o,s=this.originalPageX+Math.round((s-this.originalPageX)/n.grid[0])*n.grid[0],s=this.containment?!(s-this.offset.click.left<this.containment[0]||s-this.offset.click.left>this.containment[2])?s:!(s-this.offset.click.left<this.containment[0])?s-n.grid[0]:s+n.grid[0]:s));return{top:o-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(e.browser.safari&&"fixed"==this.cssPosition?0:"fixed"==this.cssPosition?-this.scrollParent.scrollTop():i?0:r.scrollTop()),left:s-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(e.browser.safari&&"fixed"==this.cssPosition?0:"fixed"==this.cssPosition?-this.scrollParent.scrollLeft():i?0:r.scrollLeft())}},_rearrange:function(e,t,n,r){n?n[0].appendChild(this.placeholder[0]):t.item[0].parentNode.insertBefore(this.placeholder[0],"down"==this.direction?t.item[0]:t.item[0].nextSibling);this.counter=this.counter?++this.counter:1;var i=this,s=this.counter;window.setTimeout(function(){s==i.counter&&i.refreshPositions(!r)},0)},_clear:function(t,n){this.reverting=!1;var r=[];!this._noFinalSort&&this.currentItem.parent().length&&this.placeholder.before(this.currentItem);this._noFinalSort=null;if(this.helper[0]==this.currentItem[0]){for(var i in this._storedCSS)if("auto"==this._storedCSS[i]||"static"==this._storedCSS[i])this._storedCSS[i]="";this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")}else this.currentItem.show();this.fromOutside&&!n&&r.push(function(e){this._trigger("receive",e,this._uiHash(this.fromOutside))});(this.fromOutside||this.domPosition.prev!=this.currentItem.prev().not(".ui-sortable-helper")[0]||this.domPosition.parent!=this.currentItem.parent()[0])&&!n&&r.push(function(e){this._trigger("update",e,this._uiHash())});if(!e.ui.contains(this.element[0],this.currentItem[0])){n||r.push(function(e){this._trigger("remove",e,this._uiHash())});for(i=this.containers.length-1;0<=i;i--)e.ui.contains(this.containers[i].element[0],this.currentItem[0])&&!n&&(r.push(function(e){return function(t){e._trigger("receive",t,this._uiHash(this))}}.call(this,this.containers[i])),r.push(function(e){return function(t){e._trigger("update",t,this._uiHash(this))}}.call(this,this.containers[i])))}for(i=this.containers.length-1;0<=i;i--)n||r.push(function(e){return function(t){e._trigger("deactivate",t,this._uiHash(this))}}.call(this,this.containers[i])),this.containers[i].containerCache.over&&(r.push(function(e){return function(t){e._trigger("out",t,this._uiHash(this))}}.call(this,this.containers[i])),this.containers[i].containerCache.over=0);this._storedCursor&&e("body").css("cursor",this._storedCursor);this._storedOpacity&&this.helper.css("opacity",this._storedOpacity);this._storedZIndex&&this.helper.css("zIndex","auto"==this._storedZIndex?"":this._storedZIndex);this.dragging=!1;if(this.cancelHelperRemoval){if(!n){this._trigger("beforeStop",t,this._uiHash());for(i=0;i<r.length;i++)r[i].call(this,t);this._trigger("stop",t,this._uiHash())}return!1}n||this._trigger("beforeStop",t,this._uiHash());this.placeholder[0].parentNode.removeChild(this.placeholder[0]);this.helper[0]!=this.currentItem[0]&&this.helper.remove();this.helper=null;if(!n){for(i=0;i<r.length;i++)r[i].call(this,t);this._trigger("stop",t,this._uiHash())}this.fromOutside=!1;return!0},_trigger:function(){!1===e.Widget.prototype._trigger.apply(this,arguments)&&this.cancel()},_uiHash:function(t){var n=t||this;return{helper:n.helper,placeholder:n.placeholder||e([]),position:n.position,originalPosition:n.originalPosition,offset:n.positionAbs,item:n.currentItem,sender:t?t.element:null}}});e.extend(e.ui.sortable,{version:"1.8.14"})})(jQuery);(function(e){e.widget("ui.accordion",{options:{active:0,animated:"slide",autoHeight:!0,clearStyle:!1,collapsible:!1,event:"click",fillSpace:!1,header:"> li > :first-child,> :not(li):even",icons:{header:"ui-icon-triangle-1-e",headerSelected:"ui-icon-triangle-1-s"},navigation:!1,navigationFilter:function(){return this.href.toLowerCase()===location.href.toLowerCase()}},_create:function(){var t=this,n=t.options;t.running=0;t.element.addClass("ui-accordion ui-widget ui-helper-reset").children("li").addClass("ui-accordion-li-fix");t.headers=t.element.find(n.header).addClass("ui-accordion-header ui-helper-reset ui-state-default ui-corner-all").bind("mouseenter.accordion",function(){n.disabled||e(this).addClass("ui-state-hover")}).bind("mouseleave.accordion",function(){n.disabled||e(this).removeClass("ui-state-hover")}).bind("focus.accordion",function(){n.disabled||e(this).addClass("ui-state-focus")}).bind("blur.accordion",function(){n.disabled||e(this).removeClass("ui-state-focus")});t.headers.next().addClass("ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom");if(n.navigation){var r=t.element.find("a").filter(n.navigationFilter).eq(0);if(r.length){var i=r.closest(".ui-accordion-header");t.active=i.length?i:r.closest(".ui-accordion-content").prev()}}t.active=t._findActive(t.active||n.active).addClass("ui-state-default ui-state-active").toggleClass("ui-corner-all").toggleClass("ui-corner-top");t.active.next().addClass("ui-accordion-content-active");t._createIcons();t.resize();t.element.attr("role","tablist");t.headers.attr("role","tab").bind("keydown.accordion",function(e){return t._keydown(e)}).next().attr("role","tabpanel");t.headers.not(t.active||"").attr({"aria-expanded":"false","aria-selected":"false",tabIndex:-1}).next().hide();t.active.length?t.active.attr({"aria-expanded":"true","aria-selected":"true",tabIndex:0}):t.headers.eq(0).attr("tabIndex",0);e.browser.safari||t.headers.find("a").attr("tabIndex",-1);n.event&&t.headers.bind(n.event.split(" ").join(".accordion ")+".accordion",function(e){t._clickHandler.call(t,e,this);e.preventDefault()})},_createIcons:function(){var t=this.options;t.icons&&(e("<span></span>").addClass("ui-icon "+t.icons.header).prependTo(this.headers),this.active.children(".ui-icon").toggleClass(t.icons.header).toggleClass(t.icons.headerSelected),this.element.addClass("ui-accordion-icons"))},_destroyIcons:function(){this.headers.children(".ui-icon").remove();this.element.removeClass("ui-accordion-icons")},destroy:function(){var t=this.options;this.element.removeClass("ui-accordion ui-widget ui-helper-reset").removeAttr("role");this.headers.unbind(".accordion").removeClass("ui-accordion-header ui-accordion-disabled ui-helper-reset ui-state-default ui-corner-all ui-state-active ui-state-disabled ui-corner-top").removeAttr("role").removeAttr("aria-expanded").removeAttr("aria-selected").removeAttr("tabIndex");this.headers.find("a").removeAttr("tabIndex");this._destroyIcons();var n=this.headers.next().css("display","").removeAttr("role").removeClass("ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content ui-accordion-content-active ui-accordion-disabled ui-state-disabled");(t.autoHeight||t.fillHeight)&&n.css("height","");return e.Widget.prototype.destroy.call(this)},_setOption:function(t,n){e.Widget.prototype._setOption.apply(this,arguments);"active"==t&&this.activate(n);"icons"==t&&(this._destroyIcons(),n&&this._createIcons());if("disabled"==t)this.headers.add(this.headers.next())[n?"addClass":"removeClass"]("ui-accordion-disabled ui-state-disabled")},_keydown:function(t){if(!this.options.disabled&&!t.altKey&&!t.ctrlKey){var n=e.ui.keyCode,r=this.headers.length,i=this.headers.index(t.target),s=!1;switch(t.keyCode){case n.RIGHT:case n.DOWN:s=this.headers[(i+1)%r];break;case n.LEFT:case n.UP:s=this.headers[(i-1+r)%r];break;case n.SPACE:case n.ENTER:this._clickHandler({target:t.target},t.target),t.preventDefault()}return s?(e(t.target).attr("tabIndex",-1),e(s).attr("tabIndex",0),s.focus(),!1):!0}},resize:function(){var t=this.options,n;if(t.fillSpace){if(e.browser.msie){var r=this.element.parent().css("overflow");this.element.parent().css("overflow","hidden")}n=this.element.parent().height();e.browser.msie&&this.element.parent().css("overflow",r);this.headers.each(function(){n-=e(this).outerHeight(!0)});this.headers.next().each(function(){e(this).height(Math.max(0,n-e(this).innerHeight()+e(this).height()))}).css("overflow","auto")}else t.autoHeight&&(n=0,this.headers.next().each(function(){n=Math.max(n,e(this).height("").height())}).height(n));return this},activate:function(e){this.options.active=e;e=this._findActive(e)[0];this._clickHandler({target:e},e);return this},_findActive:function(t){return t?"number"===typeof t?this.headers.filter(":eq("+t+")"):this.headers.not(this.headers.not(t)):!1===t?e([]):this.headers.filter(":eq(0)")},_clickHandler:function(t,n){var r=this.options;if(!r.disabled)if(t.target){if(t=e(t.currentTarget||n),n=t[0]===this.active[0],r.active=r.collapsible&&n?!1:this.headers.index(t),!(this.running||!r.collapsible&&n)){var i=this.active,s=t.next(),o=this.active.next(),u={options:r,newHeader:n&&r.collapsible?e([]):t,oldHeader:this.active,newContent:n&&r.collapsible?e([]):s,oldContent:o},f=this.headers.index(this.active[0])>this.headers.index(t[0]);this.active=n?e([]):t;this._toggle(s,o,u,n,f);i.removeClass("ui-state-active ui-corner-top").addClass("ui-state-default ui-corner-all").children(".ui-icon").removeClass(r.icons.headerSelected).addClass(r.icons.header);n||(t.removeClass("ui-state-default ui-corner-all").addClass("ui-state-active ui-corner-top").children(".ui-icon").removeClass(r.icons.header).addClass(r.icons.headerSelected),t.next().addClass("ui-accordion-content-active"))}}else if(r.collapsible){this.active.removeClass("ui-state-active ui-corner-top").addClass("ui-state-default ui-corner-all").children(".ui-icon").removeClass(r.icons.headerSelected).addClass(r.icons.header);this.active.next().addClass("ui-accordion-content-active");var o=this.active.next(),u={options:r,newHeader:e([]),oldHeader:r.active,newContent:e([]),oldContent:o},s=this.active=e([]);this._toggle(s,o,u)}},_toggle:function(t,n,r,i,s){var o=this,u=o.options;o.toShow=t;o.toHide=n;o.data=r;var f=function(){if(o)return o._completed.apply(o,arguments)};o._trigger("changestart",null,o.data);o.running=0===n.size()?t.size():n.size();if(u.animated){r={};r=u.collapsible&&i?{toShow:e([]),toHide:n,complete:f,down:s,autoHeight:u.autoHeight||u.fillSpace}:{toShow:t,toHide:n,complete:f,down:s,autoHeight:u.autoHeight||u.fillSpace};u.proxied||(u.proxied=u.animated);u.proxiedDuration||(u.proxiedDuration=u.duration);u.animated=e.isFunction(u.proxied)?u.proxied(r):u.proxied;u.duration=e.isFunction(u.proxiedDuration)?u.proxiedDuration(r):u.proxiedDuration;i=e.ui.accordion.animations;var l=u.duration,c=u.animated;c&&!i[c]&&!e.easing[c]&&(c="slide");i[c]||(i[c]=function(e){this.slide(e,{easing:c,duration:l||700})});i[c](r)}else u.collapsible&&i?t.toggle():(n.hide(),t.show()),f(!0);n.prev().attr({"aria-expanded":"false","aria-selected":"false",tabIndex:-1}).blur();t.prev().attr({"aria-expanded":"true","aria-selected":"true",tabIndex:0}).focus()},_completed:function(e){this.running=e?0:--this.running;this.running||(this.options.clearStyle&&this.toShow.add(this.toHide).css({height:"",overflow:""}),this.toHide.removeClass("ui-accordion-content-active"),this.toHide.length&&(this.toHide.parent()[0].className=this.toHide.parent()[0].className),this._trigger("change",null,this.data))}});e.extend(e.ui.accordion,{version:"1.8.14",animations:{slide:function(t,n){t=e.extend({easing:"swing",duration:300},t,n);if(t.toHide.size())if(t.toShow.size()){var r=t.toShow.css("overflow"),i=0,s={},o={},u;n=t.toShow;u=n[0].style.width;n.width(parseInt(n.parent().width(),10)-parseInt(n.css("paddingLeft"),10)-parseInt(n.css("paddingRight"),10)-(parseInt(n.css("borderLeftWidth"),10)||0)-(parseInt(n.css("borderRightWidth"),10)||0));e.each(["height","paddingTop","paddingBottom"],function(n,r){o[r]="hide";n=(""+e.css(t.toShow[0],r)).match(/^([\d+-.]+)(.*)$/);s[r]={value:n[1],unit:n[2]||"px"}});t.toShow.css({height:0,overflow:"hidden"}).show();t.toHide.filter(":hidden").each(t.complete).end().filter(":visible").animate(o,{step:function(e,n){"height"==n.prop&&(i=0===n.end-n.start?0:(n.now-n.start)/(n.end-n.start));t.toShow[0].style[n.prop]=i*s[n.prop].value+s[n.prop].unit},duration:t.duration,easing:t.easing,complete:function(){t.autoHeight||t.toShow.css("height","");t.toShow.css({width:u,overflow:r});t.complete()}})}else t.toHide.animate({height:"hide",paddingTop:"hide",paddingBottom:"hide"},t);else t.toShow.animate({height:"show",paddingTop:"show",paddingBottom:"show"},t)},bounceslide:function(e){this.slide(e,{easing:e.down?"easeOutBounce":"swing",duration:e.down?1e3:200})}}})})(jQuery);(function(e){var t=0;e.widget("ui.autocomplete",{options:{appendTo:"body",autoFocus:!1,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null},pending:0,_create:function(){var t=this,n=this.element[0].ownerDocument,r;this.element.addClass("ui-autocomplete-input").attr("autocomplete","off").attr({role:"textbox","aria-autocomplete":"list","aria-haspopup":"true"}).bind("keydown.autocomplete",function(n){if(!t.options.disabled&&!t.element.attr("readonly")){r=!1;var i=e.ui.keyCode;switch(n.keyCode){case i.PAGE_UP:t._move("previousPage",n);break;case i.PAGE_DOWN:t._move("nextPage",n);break;case i.UP:t._move("previous",n);n.preventDefault();break;case i.DOWN:t._move("next",n);n.preventDefault();break;case i.ENTER:case i.NUMPAD_ENTER:t.menu.active&&(r=!0,n.preventDefault());case i.TAB:if(!t.menu.active)break;t.menu.select(n);break;case i.ESCAPE:t.element.val(t.term);t.close(n);break;default:clearTimeout(t.searching),t.searching=setTimeout(function(){t.term!=t.element.val()&&(t.selectedItem=null,t.search(null,n))},t.options.delay)}}}).bind("keypress.autocomplete",function(e){r&&(r=!1,e.preventDefault())}).bind("focus.autocomplete",function(){t.options.disabled||(t.selectedItem=null,t.previous=t.element.val())}).bind("blur.autocomplete",function(e){t.options.disabled||(clearTimeout(t.searching),t.closing=setTimeout(function(){t.close(e);t._change(e)},150))});this._initSource();this.response=function(){return t._response.apply(t,arguments)};this.menu=e("<ul></ul>").addClass("ui-autocomplete").appendTo(e(this.options.appendTo||"body",n)[0]).mousedown(function(n){var r=t.menu.element[0];e(n.target).closest(".ui-menu-item").length||setTimeout(function(){e(document).one("mousedown",function(n){n.target!==t.element[0]&&n.target!==r&&!e.ui.contains(r,n.target)&&t.close()})},1);setTimeout(function(){clearTimeout(t.closing)},13)}).menu({focus:function(e,n){n=n.item.data("item.autocomplete");!1!==t._trigger("focus",e,{item:n})&&/^key/.test(e.originalEvent.type)&&t.element.val(n.value)},selected:function(e,r){var i=r.item.data("item.autocomplete"),s=t.previous;t.element[0]!==n.activeElement&&(t.element.focus(),t.previous=s,setTimeout(function(){t.previous=s;t.selectedItem=i},1));!1!==t._trigger("select",e,{item:i})&&t.element.val(i.value);t.term=t.element.val();t.close(e);t.selectedItem=i},blur:function(){t.menu.element.is(":visible")&&t.element.val()!==t.term&&t.element.val(t.term)}}).zIndex(this.element.zIndex()+1).css({top:0,left:0}).hide().data("menu");e.fn.bgiframe&&this.menu.element.bgiframe()},destroy:function(){this.element.removeClass("ui-autocomplete-input").removeAttr("autocomplete").removeAttr("role").removeAttr("aria-autocomplete").removeAttr("aria-haspopup");this.menu.element.remove();e.Widget.prototype.destroy.call(this)},_setOption:function(t,n){e.Widget.prototype._setOption.apply(this,arguments);"source"===t&&this._initSource();"appendTo"===t&&this.menu.element.appendTo(e(n||"body",this.element[0].ownerDocument)[0]);"disabled"===t&&n&&this.xhr&&this.xhr.abort()},_initSource:function(){var n=this,r,i;e.isArray(this.options.source)?(r=this.options.source,this.source=function(t,n){n(e.ui.autocomplete.filter(r,t.term))}):"string"===typeof this.options.source?(i=this.options.source,this.source=function(r,s){n.xhr&&n.xhr.abort();n.xhr=e.ajax({url:i,data:r,dataType:"json",autocompleteRequest:++t,success:function(e){this.autocompleteRequest===t&&s(e)},error:function(){this.autocompleteRequest===t&&s([])}})}):this.source=this.options.source},search:function(e,t){e=null!=e?e:this.element.val();this.term=this.element.val();if(e.length<this.options.minLength)return this.close(t);clearTimeout(this.closing);if(!1!==this._trigger("search",t))return this._search(e)},_search:function(e){this.pending++;this.element.addClass("ui-autocomplete-loading");this.source({term:e},this.response)},_response:function(e){!this.options.disabled&&e&&e.length?(e=this._normalize(e),this._suggest(e),this._trigger("open")):this.close();this.pending--;this.pending||this.element.removeClass("ui-autocomplete-loading")},close:function(e){clearTimeout(this.closing);this.menu.element.is(":visible")&&(this.menu.element.hide(),this.menu.deactivate(),this._trigger("close",e))},_change:function(e){this.previous!==this.element.val()&&this._trigger("change",e,{item:this.selectedItem})},_normalize:function(t){return t.length&&t[0].label&&t[0].value?t:e.map(t,function(t){return"string"===typeof t?{label:t,value:t}:e.extend({label:t.label||t.value,value:t.value||t.label},t)})},_suggest:function(t){var n=this.menu.element.empty().zIndex(this.element.zIndex()+1);this._renderMenu(n,t);this.menu.deactivate();this.menu.refresh();n.show();this._resizeMenu();n.position(e.extend({of:this.element},this.options.position));this.options.autoFocus&&this.menu.next(new e.Event("mouseover"))},_resizeMenu:function(){var e=this.menu.element;e.outerWidth(Math.max(e.width("").outerWidth(),this.element.outerWidth()))},_renderMenu:function(t,n){var r=this;e.each(n,function(e,n){r._renderItem(t,n)})},_renderItem:function(t,n){return e("<li></li>").data("item.autocomplete",n).append(e("<a></a>").text(n.label)).appendTo(t)},_move:function(e,t){if(this.menu.element.is(":visible"))if(this.menu.first()&&/^previous/.test(e)||this.menu.last()&&/^next/.test(e))this.element.val(this.term),this.menu.deactivate();else this.menu[e](t);else this.search(null,t)},widget:function(){return this.menu.element}});e.extend(e.ui.autocomplete,{escapeRegex:function(e){return e.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")},filter:function(t,n){var r=RegExp(e.ui.autocomplete.escapeRegex(n),"i");return e.grep(t,function(e){return r.test(e.label||e.value||e)})}})})(jQuery);(function(e){e.widget("ui.menu",{_create:function(){var t=this;this.element.addClass("ui-menu ui-widget ui-widget-content ui-corner-all").attr({role:"listbox","aria-activedescendant":"ui-active-menuitem"}).click(function(n){e(n.target).closest(".ui-menu-item a").length&&(n.preventDefault(),t.select(n))});this.refresh()},refresh:function(){var t=this;this.element.children("li:not(.ui-menu-item):has(a)").addClass("ui-menu-item").attr("role","menuitem").children("a").addClass("ui-corner-all").attr("tabindex",-1).mouseenter(function(n){t.activate(n,e(this).parent())}).mouseleave(function(){t.deactivate()})},activate:function(e,t){this.deactivate();if(this.hasScroll()){var n=t.offset().top-this.element.offset().top,r=this.element.scrollTop(),i=this.element.height();0>n?this.element.scrollTop(r+n):n>=i&&this.element.scrollTop(r+n-i+t.height())}this.active=t.eq(0).children("a").addClass("ui-state-hover").attr("id","ui-active-menuitem").end();this._trigger("focus",e,{item:t})},deactivate:function(){this.active&&(this.active.children("a").removeClass("ui-state-hover").removeAttr("id"),this._trigger("blur"),this.active=null)},next:function(e){this.move("next",".ui-menu-item:first",e)},previous:function(e){this.move("prev",".ui-menu-item:last",e)},first:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},last:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},move:function(e,t,n){this.active?(e=this.active[e+"All"](".ui-menu-item").eq(0),e.length?this.activate(n,e):this.activate(n,this.element.children(t))):this.activate(n,this.element.children(t))},nextPage:function(t){if(this.hasScroll())if(!this.active||this.last())this.activate(t,this.element.children(".ui-menu-item:first"));else{var n=this.active.offset().top,r=this.element.height(),i=this.element.children(".ui-menu-item").filter(function(){var t=e(this).offset().top-n-r+e(this).height();return 10>t&&-10<t});i.length||(i=this.element.children(".ui-menu-item:last"));this.activate(t,i)}else this.activate(t,this.element.children(".ui-menu-item").filter(!this.active||this.last()?":first":":last"))},previousPage:function(t){if(this.hasScroll())if(!this.active||this.first())this.activate(t,this.element.children(".ui-menu-item:last"));else{var n=this.active.offset().top,r=this.element.height();result=this.element.children(".ui-menu-item").filter(function(){var t=e(this).offset().top-n+r-e(this).height();return 10>t&&-10<t});result.length||(result=this.element.children(".ui-menu-item:first"));this.activate(t,result)}else this.activate(t,this.element.children(".ui-menu-item").filter(!this.active||this.first()?":last":":first"))},hasScroll:function(){return this.element.height()<this.element[e.fn.prop?"prop":"attr"]("scrollHeight")},select:function(e){this._trigger("selected",e,{item:this.active})}})})(jQuery);(function(e){var t,n,r,i,s=function(){var t=e(this).find(":ui-button");setTimeout(function(){t.button("refresh")},1)},o=function(t){var n=t.name,r=t.form,i=e([]);n&&(i=r?e(r).find("[name='"+n+"']"):e("[name='"+n+"']",t.ownerDocument).filter(function(){return!this.form}));return i};e.widget("ui.button",{options:{disabled:null,text:!0,label:null,icons:{primary:null,secondary:null}},_create:function(){this.element.closest("form").unbind("reset.button").bind("reset.button",s);"boolean"!==typeof this.options.disabled&&(this.options.disabled=this.element.attr("disabled"));this._determineButtonType();this.hasTitle=!!this.buttonElement.attr("title");var u=this,l=this.options,p="checkbox"===this.type||"radio"===this.type,v="ui-state-hover"+(!p?" ui-state-active":"");null===l.label&&(l.label=this.buttonElement.html());this.element.is(":disabled")&&(l.disabled=!0);this.buttonElement.addClass("ui-button ui-widget ui-state-default ui-corner-all").attr("role","button").bind("mouseenter.button",function(){l.disabled||(e(this).addClass("ui-state-hover"),this===t&&e(this).addClass("ui-state-active"))}).bind("mouseleave.button",function(){l.disabled||e(this).removeClass(v)}).bind("click.button",function(e){l.disabled&&(e.preventDefault(),e.stopImmediatePropagation())});this.element.bind("focus.button",function(){u.buttonElement.addClass("ui-state-focus")}).bind("blur.button",function(){u.buttonElement.removeClass("ui-state-focus")});p&&(this.element.bind("change.button",function(){i||u.refresh()}),this.buttonElement.bind("mousedown.button",function(e){l.disabled||(i=!1,n=e.pageX,r=e.pageY)}).bind("mouseup.button",function(e){if(!l.disabled&&(n!==e.pageX||r!==e.pageY))i=!0}));"checkbox"===this.type?this.buttonElement.bind("click.button",function(){if(l.disabled||i)return!1;e(this).toggleClass("ui-state-active");u.buttonElement.attr("aria-pressed",u.element[0].checked)}):"radio"===this.type?this.buttonElement.bind("click.button",function(){if(l.disabled||i)return!1;e(this).addClass("ui-state-active");u.buttonElement.attr("aria-pressed",!0);var t=u.element[0];o(t).not(t).map(function(){return e(this).button("widget")[0]}).removeClass("ui-state-active").attr("aria-pressed",!1)}):(this.buttonElement.bind("mousedown.button",function(){if(l.disabled)return!1;e(this).addClass("ui-state-active");t=this;e(document).one("mouseup",function(){t=null})}).bind("mouseup.button",function(){if(l.disabled)return!1;e(this).removeClass("ui-state-active")}).bind("keydown.button",function(t){if(l.disabled)return!1;(t.keyCode==e.ui.keyCode.SPACE||t.keyCode==e.ui.keyCode.ENTER)&&e(this).addClass("ui-state-active")}).bind("keyup.button",function(){e(this).removeClass("ui-state-active")}),this.buttonElement.is("a")&&this.buttonElement.keyup(function(t){t.keyCode===e.ui.keyCode.SPACE&&e(this).click()}));this._setOption("disabled",l.disabled);this._resetButton()},_determineButtonType:function(){this.type=this.element.is(":checkbox")?"checkbox":this.element.is(":radio")?"radio":this.element.is("input")?"input":"button";if("checkbox"===this.type||"radio"===this.type){var e=this.element.parents().filter(":last"),t="label[for="+this.element.attr("id")+"]";this.buttonElement=e.find(t);this.buttonElement.length||(e=e.length?e.siblings():this.element.siblings(),this.buttonElement=e.filter(t),this.buttonElement.length||(this.buttonElement=e.find(t)));this.element.addClass("ui-helper-hidden-accessible");(e=this.element.is(":checked"))&&this.buttonElement.addClass("ui-state-active");this.buttonElement.attr("aria-pressed",e)}else this.buttonElement=this.element},widget:function(){return this.buttonElement},destroy:function(){this.element.removeClass("ui-helper-hidden-accessible");this.buttonElement.removeClass("ui-button ui-widget ui-state-default ui-corner-all ui-state-hover ui-state-activeui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only").removeAttr("role").removeAttr("aria-pressed").html(this.buttonElement.find(".ui-button-text").html());this.hasTitle||this.buttonElement.removeAttr("title");e.Widget.prototype.destroy.call(this)},_setOption:function(t,n){e.Widget.prototype._setOption.apply(this,arguments);"disabled"===t?n?this.element.attr("disabled",!0):this.element.removeAttr("disabled"):this._resetButton()},refresh:function(){var t=this.element.is(":disabled");t!==this.options.disabled&&this._setOption("disabled",t);"radio"===this.type?o(this.element[0]).each(function(){e(this).is(":checked")?e(this).button("widget").addClass("ui-state-active").attr("aria-pressed",!0):e(this).button("widget").removeClass("ui-state-active").attr("aria-pressed",!1)}):"checkbox"===this.type&&(this.element.is(":checked")?this.buttonElement.addClass("ui-state-active").attr("aria-pressed",!0):this.buttonElement.removeClass("ui-state-active").attr("aria-pressed",!1))},_resetButton:function(){if("input"===this.type)this.options.label&&this.element.val(this.options.label);else{var t=this.buttonElement.removeClass("ui-button-icons-only ui-button-icon-only ui-button-text-icons ui-button-text-icon-primary ui-button-text-icon-secondary ui-button-text-only"),n=e("<span></span>").addClass("ui-button-text").html(this.options.label).appendTo(t.empty()).text(),r=this.options.icons,i=r.primary&&r.secondary,s=[];r.primary||r.secondary?(this.options.text&&s.push("ui-button-text-icon"+(i?"s":r.primary?"-primary":"-secondary")),r.primary&&t.prepend("<span class='ui-button-icon-primary ui-icon "+r.primary+"'></span>"),r.secondary&&t.append("<span class='ui-button-icon-secondary ui-icon "+r.secondary+"'></span>"),this.options.text||(s.push(i?"ui-button-icons-only":"ui-button-icon-only"),this.hasTitle||t.attr("title",n))):s.push("ui-button-text-only");t.addClass(s.join(" "))}}});e.widget("ui.buttonset",{options:{items:":button, :submit, :reset, :checkbox, :radio, a, :data(button)"},_create:function(){this.element.addClass("ui-buttonset")},_init:function(){this.refresh()},_setOption:function(t,n){"disabled"===t&&this.buttons.button("option",t,n);e.Widget.prototype._setOption.apply(this,arguments)},refresh:function(){var t="ltr"===this.element.css("direction");this.buttons=this.element.find(this.options.items).filter(":ui-button").button("refresh").end().not(":ui-button").button().end().map(function(){return e(this).button("widget")[0]}).removeClass("ui-corner-all ui-corner-left ui-corner-right").filter(":first").addClass(t?"ui-corner-left":"ui-corner-right").end().filter(":last").addClass(t?"ui-corner-right":"ui-corner-left").end().end()},destroy:function(){this.element.removeClass("ui-buttonset");this.buttons.map(function(){return e(this).button("widget")[0]}).removeClass("ui-corner-left ui-corner-right").end().button("destroy");e.Widget.prototype.destroy.call(this)}})})(jQuery);(function(e,t){var n={buttons:!0,height:!0,maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0,width:!0},r={maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0},i=e.attrFn||{val:!0,css:!0,html:!0,text:!0,data:!0,width:!0,height:!0,offset:!0,click:!0};e.widget("ui.dialog",{options:{autoOpen:!0,buttons:{},closeOnEscape:!0,closeText:"close",dialogClass:"",draggable:!0,hide:null,height:"auto",maxHeight:!1,maxWidth:!1,minHeight:150,minWidth:150,modal:!1,position:{my:"center",at:"center",collision:"fit",using:function(t){var n=e(this).css(t).offset().top;0>n&&e(this).css("top",t.top-n)}},resizable:!0,show:null,stack:!0,title:"",width:300,zIndex:1e3},_create:function(){this.originalTitle=this.element.attr("title");"string"!==typeof this.originalTitle&&(this.originalTitle="");this.options.title=this.options.title||this.originalTitle;var t=this,n=t.options,r=n.title||"&#160;",i=e.ui.dialog.getTitleId(t.element),s=(t.uiDialog=e("<div></div>")).appendTo(document.body).hide().addClass("ui-dialog ui-widget ui-widget-content ui-corner-all "+n.dialogClass).css({zIndex:n.zIndex}).attr("tabIndex",-1).css("outline",0).keydown(function(r){n.closeOnEscape&&r.keyCode&&r.keyCode===e.ui.keyCode.ESCAPE&&(t.close(r),r.preventDefault())}).attr({role:"dialog","aria-labelledby":i}).mousedown(function(e){t.moveToTop(!1,e)});t.element.show().removeAttr("title").addClass("ui-dialog-content ui-widget-content").appendTo(s);var o=(t.uiDialogTitlebar=e("<div></div>")).addClass("ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix").prependTo(s),u=e('<a href="#"></a>').addClass("ui-dialog-titlebar-close ui-corner-all").attr("role","button").hover(function(){u.addClass("ui-state-hover")},function(){u.removeClass("ui-state-hover")}).focus(function(){u.addClass("ui-state-focus")}).blur(function(){u.removeClass("ui-state-focus")}).click(function(e){t.close(e);return!1}).appendTo(o);(t.uiDialogTitlebarCloseText=e("<span></span>")).addClass("ui-icon ui-icon-closethick").text(n.closeText).appendTo(u);e("<span></span>").addClass("ui-dialog-title").attr("id",i).html(r).prependTo(o);e.isFunction(n.beforeclose)&&!e.isFunction(n.beforeClose)&&(n.beforeClose=n.beforeclose);o.find("*").add(o).disableSelection();n.draggable&&e.fn.draggable&&t._makeDraggable();n.resizable&&e.fn.resizable&&t._makeResizable();t._createButtons(n.buttons);t._isOpen=!1;e.fn.bgiframe&&s.bgiframe()},_init:function(){this.options.autoOpen&&this.open()},destroy:function(){this.overlay&&this.overlay.destroy();this.uiDialog.hide();this.element.unbind(".dialog").removeData("dialog").removeClass("ui-dialog-content ui-widget-content").hide().appendTo("body");this.uiDialog.remove();this.originalTitle&&this.element.attr("title",this.originalTitle);return this},widget:function(){return this.uiDialog},close:function(t){var n=this,r,i;if(!1!==n._trigger("beforeClose",t))return n.overlay&&n.overlay.destroy(),n.uiDialog.unbind("keypress.ui-dialog"),n._isOpen=!1,n.options.hide?n.uiDialog.hide(n.options.hide,function(){n._trigger("close",t)}):(n.uiDialog.hide(),n._trigger("close",t)),e.ui.dialog.overlay.resize(),n.options.modal&&(r=0,e(".ui-dialog").each(function(){this!==n.uiDialog[0]&&(i=e(this).css("z-index"),isNaN(i)||(r=Math.max(r,i)))}),e.ui.dialog.maxZ=r),n},isOpen:function(){return this._isOpen},moveToTop:function(t,n){var r=this.options;if(r.modal&&!t||!r.stack&&!r.modal)return this._trigger("focus",n);r.zIndex>e.ui.dialog.maxZ&&(e.ui.dialog.maxZ=r.zIndex);this.overlay&&(e.ui.dialog.maxZ+=1,this.overlay.$el.css("z-index",e.ui.dialog.overlay.maxZ=e.ui.dialog.maxZ));t={scrollTop:this.element.attr("scrollTop"),scrollLeft:this.element.attr("scrollLeft")};e.ui.dialog.maxZ+=1;this.uiDialog.css("z-index",e.ui.dialog.maxZ);this.element.attr(t);this._trigger("focus",n);return this},open:function(){if(!this._isOpen){var t=this.options,n=this.uiDialog;this.overlay=t.modal?new e.ui.dialog.overlay(this):null;this._size();this._position(t.position);n.show(t.show);this.moveToTop(!0);t.modal&&n.bind("keypress.ui-dialog",function(t){if(t.keyCode===e.ui.keyCode.TAB){var n=e(":tabbable",this),r=n.filter(":first"),n=n.filter(":last");if(t.target===n[0]&&!t.shiftKey)return r.focus(1),!1;if(t.target===r[0]&&t.shiftKey)return n.focus(1),!1}});e(this.element.find(":tabbable").get().concat(n.find(".ui-dialog-buttonpane :tabbable").get().concat(n.get()))).eq(0).focus();this._isOpen=!0;this._trigger("open");return this}},_createButtons:function(t){var n=this,r=!1,s=e("<div></div>").addClass("ui-dialog-buttonpane ui-widget-content ui-helper-clearfix"),o=e("<div></div>").addClass("ui-dialog-buttonset").appendTo(s);n.uiDialog.find(".ui-dialog-buttonpane").remove();"object"===typeof t&&null!==t&&e.each(t,function(){return!(r=!0)});r&&(e.each(t,function(t,r){r=e.isFunction(r)?{click:r,text:t}:r;var s=e('<button type="button"></button>').click(function(){r.click.apply(n.element[0],arguments)}).appendTo(o);e.each(r,function(e,t){"click"!==e&&(e in i?s[e](t):s.attr(e,t))});e.fn.button&&s.button()}),s.appendTo(n.uiDialog))},_makeDraggable:function(){function t(e){return{position:e.position,offset:e.offset}}var n=this,r=n.options,i=e(document),s;n.uiDialog.draggable({cancel:".ui-dialog-content, .ui-dialog-titlebar-close",handle:".ui-dialog-titlebar",containment:"document",start:function(i,o){s="auto"===r.height?"auto":e(this).height();e(this).height(e(this).height()).addClass("ui-dialog-dragging");n._trigger("dragStart",i,t(o))},drag:function(e,r){n._trigger("drag",e,t(r))},stop:function(o,u){r.position=[u.position.left-i.scrollLeft(),u.position.top-i.scrollTop()];e(this).removeClass("ui-dialog-dragging").height(s);n._trigger("dragStop",o,t(u));e.ui.dialog.overlay.resize()}})},_makeResizable:function(n){function r(e){return{originalPosition:e.originalPosition,originalSize:e.originalSize,position:e.position,size:e.size}}n=n===t?this.options.resizable:n;var i=this,s=i.options,o=i.uiDialog.css("position");n="string"===typeof n?n:"n,e,s,w,se,sw,ne,nw";i.uiDialog.resizable({cancel:".ui-dialog-content",containment:"document",alsoResize:i.element,maxWidth:s.maxWidth,maxHeight:s.maxHeight,minWidth:s.minWidth,minHeight:i._minHeight(),handles:n,start:function(t,n){e(this).addClass("ui-dialog-resizing");i._trigger("resizeStart",t,r(n))},resize:function(e,t){i._trigger("resize",e,r(t))},stop:function(t,n){e(this).removeClass("ui-dialog-resizing");s.height=e(this).height();s.width=e(this).width();i._trigger("resizeStop",t,r(n));e.ui.dialog.overlay.resize()}}).css("position",o).find(".ui-resizable-se").addClass("ui-icon ui-icon-grip-diagonal-se")},_minHeight:function(){var e=this.options;return"auto"===e.height?e.minHeight:Math.min(e.minHeight,e.height)},_position:function(t){var n=[],r=[0,0],i;if(t){if("string"===typeof t||"object"===typeof t&&"0"in t)n=t.split?t.split(" "):[t[0],t[1]],1===n.length&&(n[1]=n[0]),e.each(["left","top"],function(e,t){+n[e]===n[e]&&(r[e]=n[e],n[e]=t)}),t={my:n.join(" "),at:n.join(" "),offset:r.join(" ")};t=e.extend({},e.ui.dialog.prototype.options.position,t)}else t=e.ui.dialog.prototype.options.position;(i=this.uiDialog.is(":visible"))||this.uiDialog.show();this.uiDialog.css({top:0,left:0}).position(e.extend({of:window},t));i||this.uiDialog.hide()},_setOptions:function(t){var i=this,s={},o=!1;e.each(t,function(e,t){i._setOption(e,t);e in n&&(o=!0);e in r&&(s[e]=t)});o&&this._size();this.uiDialog.is(":data(resizable)")&&this.uiDialog.resizable("option",s)},_setOption:function(t,n){var r=this.uiDialog;switch(t){case"beforeclose":t="beforeClose";break;case"buttons":this._createButtons(n);break;case"closeText":this.uiDialogTitlebarCloseText.text(""+n);break;case"dialogClass":r.removeClass(this.options.dialogClass).addClass("ui-dialog ui-widget ui-widget-content ui-corner-all "+n);break;case"disabled":n?r.addClass("ui-dialog-disabled"):r.removeClass("ui-dialog-disabled");break;case"draggable":var i=r.is(":data(draggable)");i&&!n&&r.draggable("destroy");!i&&n&&this._makeDraggable();break;case"position":this._position(n);break;case"resizable":(i=r.is(":data(resizable)"))&&!n&&r.resizable("destroy");i&&"string"===typeof n&&r.resizable("option","handles",n);!i&&!1!==n&&this._makeResizable(n);break;case"title":e(".ui-dialog-title",this.uiDialogTitlebar).html(""+(n||"&#160;"))}e.Widget.prototype._setOption.apply(this,arguments)},_size:function(){var t=this.options,n,r,i=this.uiDialog.is(":visible");this.element.show().css({width:"auto",minHeight:0,height:0});t.minWidth>t.width&&(t.width=t.minWidth);n=this.uiDialog.css({height:"auto",width:t.width}).height();r=Math.max(0,t.minHeight-n);"auto"===t.height?e.support.minHeight?this.element.css({minHeight:r,height:"auto"}):(this.uiDialog.show(),t=this.element.css("height","auto").height(),i||this.uiDialog.hide(),this.element.height(Math.max(t,r))):this.element.height(Math.max(t.height-n,0));this.uiDialog.is(":data(resizable)")&&this.uiDialog.resizable("option","minHeight",this._minHeight())}});e.extend(e.ui.dialog,{version:"1.8.14",uuid:0,maxZ:0,getTitleId:function(e){e=e.attr("id");e||(e=this.uuid+=1);return"ui-dialog-title-"+e},overlay:function(t){this.$el=e.ui.dialog.overlay.create(t)}});e.extend(e.ui.dialog.overlay,{instances:[],oldInstances:[],maxZ:0,events:e.map("focus mousedown mouseup keydown keypress click".split(" "),function(e){return e+".dialog-overlay"}).join(" "),create:function(t){0===this.instances.length&&(setTimeout(function(){e.ui.dialog.overlay.instances.length&&e(document).bind(e.ui.dialog.overlay.events,function(t){if(e(t.target).zIndex()<e.ui.dialog.overlay.maxZ)return!1})},1),e(document).bind("keydown.dialog-overlay",function(n){t.options.closeOnEscape&&n.keyCode&&n.keyCode===e.ui.keyCode.ESCAPE&&(t.close(n),n.preventDefault())}),e(window).bind("resize.dialog-overlay",e.ui.dialog.overlay.resize));var n=(this.oldInstances.pop()||e("<div></div>").addClass("ui-widget-overlay")).appendTo(document.body).css({width:this.width(),height:this.height()});e.fn.bgiframe&&n.bgiframe();this.instances.push(n);return n},destroy:function(t){var n=e.inArray(t,this.instances);-1!=n&&this.oldInstances.push(this.instances.splice(n,1)[0]);0===this.instances.length&&e([document,window]).unbind(".dialog-overlay");t.remove();var r=0;e.each(this.instances,function(){r=Math.max(r,this.css("z-index"))});this.maxZ=r},height:function(){var t,n;return e.browser.msie&&7>e.browser.version?(t=Math.max(document.documentElement.scrollHeight,document.body.scrollHeight),n=Math.max(document.documentElement.offsetHeight,document.body.offsetHeight),t<n?e(window).height()+"px":t+"px"):e(document).height()+"px"},width:function(){var t,n;return e.browser.msie?(t=Math.max(document.documentElement.scrollWidth,document.body.scrollWidth),n=Math.max(document.documentElement.offsetWidth,document.body.offsetWidth),t<n?e(window).width()+"px":t+"px"):e(document).width()+"px"},resize:function(){var t=e([]);e.each(e.ui.dialog.overlay.instances,function(){t=t.add(this)});t.css({width:0,height:0}).css({width:e.ui.dialog.overlay.width(),height:e.ui.dialog.overlay.height()})}});e.extend(e.ui.dialog.overlay.prototype,{destroy:function(){e.ui.dialog.overlay.destroy(this.$el)}})})(jQuery);(function(e){e.widget("ui.slider",e.ui.mouse,{widgetEventPrefix:"slide",options:{animate:!1,distance:0,max:100,min:0,orientation:"horizontal",range:!1,step:1,value:0,values:null},_create:function(){var t=this,n=this.options,r=this.element.find(".ui-slider-handle").addClass("ui-state-default ui-corner-all"),i=n.values&&n.values.length||1,s=[];this._mouseSliding=this._keySliding=!1;this._animateOff=!0;this._handleIndex=null;this._detectOrientation();this._mouseInit();this.element.addClass("ui-slider ui-slider-"+this.orientation+" ui-widget ui-widget-content ui-corner-all"+(n.disabled?" ui-slider-disabled ui-disabled":""));this.range=e([]);n.range&&(!0===n.range&&(n.values||(n.values=[this._valueMin(),this._valueMin()]),n.values.length&&2!==n.values.length&&(n.values=[n.values[0],n.values[0]])),this.range=e("<div></div>").appendTo(this.element).addClass("ui-slider-range ui-widget-header"+("min"===n.range||"max"===n.range?" ui-slider-range-"+n.range:"")));for(var o=r.length;o<i;o+=1)s.push("<a class='ui-slider-handle ui-state-default ui-corner-all' href='#'></a>");this.handles=r.add(e(s.join("")).appendTo(t.element));this.handle=this.handles.eq(0);this.handles.add(this.range).filter("a").click(function(e){e.preventDefault()}).hover(function(){n.disabled||e(this).addClass("ui-state-hover")},function(){e(this).removeClass("ui-state-hover")}).focus(function(){n.disabled?e(this).blur():(e(".ui-slider .ui-state-focus").removeClass("ui-state-focus"),e(this).addClass("ui-state-focus"))}).blur(function(){e(this).removeClass("ui-state-focus")});this.handles.each(function(t){e(this).data("index.ui-slider-handle",t)});this.handles.keydown(function(n){var r=!0,i=e(this).data("index.ui-slider-handle"),s,o,u;if(!t.options.disabled){switch(n.keyCode){case e.ui.keyCode.HOME:case e.ui.keyCode.END:case e.ui.keyCode.PAGE_UP:case e.ui.keyCode.PAGE_DOWN:case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(r=!1,!t._keySliding&&(t._keySliding=!0,e(this).addClass("ui-state-active"),s=t._start(n,i),!1===s))return}u=t.options.step;s=t.options.values&&t.options.values.length?o=t.values(i):o=t.value();switch(n.keyCode){case e.ui.keyCode.HOME:o=t._valueMin();break;case e.ui.keyCode.END:o=t._valueMax();break;case e.ui.keyCode.PAGE_UP:o=t._trimAlignValue(s+(t._valueMax()-t._valueMin())/5);break;case e.ui.keyCode.PAGE_DOWN:o=t._trimAlignValue(s-(t._valueMax()-t._valueMin())/5);break;case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:if(s===t._valueMax())return;o=t._trimAlignValue(s+u);break;case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(s===t._valueMin())return;o=t._trimAlignValue(s-u)}t._slide(n,i,o);return r}}).keyup(function(n){var r=e(this).data("index.ui-slider-handle");t._keySliding&&(t._keySliding=!1,t._stop(n,r),t._change(n,r),e(this).removeClass("ui-state-active"))});this._refreshValue();this._animateOff=!1},destroy:function(){this.handles.remove();this.range.remove();this.element.removeClass("ui-slider ui-slider-horizontal ui-slider-vertical ui-slider-disabled ui-widget ui-widget-content ui-corner-all").removeData("slider").unbind(".slider");this._mouseDestroy();return this},_mouseCapture:function(t){var n=this.options,r,i,s,o,u;if(n.disabled)return!1;this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()};this.elementOffset=this.element.offset();r=this._normValueFromMouse({x:t.pageX,y:t.pageY});i=this._valueMax()-this._valueMin()+1;o=this;this.handles.each(function(t){var n=Math.abs(r-o.values(t));i>n&&(i=n,s=e(this),u=t)});!0===n.range&&this.values(1)===n.min&&(u+=1,s=e(this.handles[u]));if(!1===this._start(t,u))return!1;this._mouseSliding=!0;o._handleIndex=u;s.addClass("ui-state-active").focus();n=s.offset();this._clickOffset=!e(t.target).parents().andSelf().is(".ui-slider-handle")?{left:0,top:0}:{left:t.pageX-n.left-s.width()/2,top:t.pageY-n.top-s.height()/2-(parseInt(s.css("borderTopWidth"),10)||0)-(parseInt(s.css("borderBottomWidth"),10)||0)+(parseInt(s.css("marginTop"),10)||0)};this.handles.hasClass("ui-state-hover")||this._slide(t,u,r);return this._animateOff=!0},_mouseStart:function(){return!0},_mouseDrag:function(e){var t=this._normValueFromMouse({x:e.pageX,y:e.pageY});this._slide(e,this._handleIndex,t);return!1},_mouseStop:function(e){this.handles.removeClass("ui-state-active");this._mouseSliding=!1;this._stop(e,this._handleIndex);this._change(e,this._handleIndex);this._clickOffset=this._handleIndex=null;return this._animateOff=!1},_detectOrientation:function(){this.orientation="vertical"===this.options.orientation?"vertical":"horizontal"},_normValueFromMouse:function(e){var t;"horizontal"===this.orientation?(t=this.elementSize.width,e=e.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)):(t=this.elementSize.height,e=e.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0));t=e/t;1<t&&(t=1);0>t&&(t=0);"vertical"===this.orientation&&(t=1-t);e=this._valueMax()-this._valueMin();return this._trimAlignValue(this._valueMin()+t*e)},_start:function(e,t){var n={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(n.value=this.values(t),n.values=this.values());return this._trigger("start",e,n)},_slide:function(e,t,n){var r;if(this.options.values&&this.options.values.length){r=this.values(t?0:1);if(2===this.options.values.length&&!0===this.options.range&&(0===t&&n>r||1===t&&n<r))n=r;n!==this.values(t)&&(r=this.values(),r[t]=n,e=this._trigger("slide",e,{handle:this.handles[t],value:n,values:r}),this.values(t?0:1),!1!==e&&this.values(t,n,!0))}else n!==this.value()&&(e=this._trigger("slide",e,{handle:this.handles[t],value:n}),!1!==e&&this.value(n))},_stop:function(e,t){var n={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(n.value=this.values(t),n.values=this.values());this._trigger("stop",e,n)},_change:function(e,t){if(!this._keySliding&&!this._mouseSliding){var n={handle:this.handles[t],value:this.value()};this.options.values&&this.options.values.length&&(n.value=this.values(t),n.values=this.values());this._trigger("change",e,n)}},value:function(e){if(arguments.length)this.options.value=this._trimAlignValue(e),this._refreshValue(),this._change(null,0);else return this._value()},values:function(t,n){var r,i,s;if(1<arguments.length)this.options.values[t]=this._trimAlignValue(n),this._refreshValue(),this._change(null,t);else if(arguments.length)if(e.isArray(arguments[0])){r=this.options.values;i=arguments[0];for(s=0;s<r.length;s+=1)r[s]=this._trimAlignValue(i[s]),this._change(null,s);this._refreshValue()}else return this.options.values&&this.options.values.length?this._values(t):this.value();else return this._values()},_setOption:function(t,n){var r,i=0;e.isArray(this.options.values)&&(i=this.options.values.length);e.Widget.prototype._setOption.apply(this,arguments);switch(t){case"disabled":n?(this.handles.filter(".ui-state-focus").blur(),this.handles.removeClass("ui-state-hover"),this.handles.attr("disabled","disabled"),this.element.addClass("ui-disabled")):(this.handles.removeAttr("disabled"),this.element.removeClass("ui-disabled"));break;case"orientation":this._detectOrientation();this.element.removeClass("ui-slider-horizontal ui-slider-vertical").addClass("ui-slider-"+this.orientation);this._refreshValue();break;case"value":this._animateOff=!0;this._refreshValue();this._change(null,0);this._animateOff=!1;break;case"values":this._animateOff=!0;this._refreshValue();for(r=0;r<i;r+=1)this._change(null,r);this._animateOff=!1}},_value:function(){return this._trimAlignValue(this.options.value)},_values:function(e){var t,n;if(arguments.length)return t=this.options.values[e],this._trimAlignValue(t);t=this.options.values.slice();for(n=0;n<t.length;n+=1)t[n]=this._trimAlignValue(t[n]);return t},_trimAlignValue:function(e){if(e<=this._valueMin())return this._valueMin();if(e>=this._valueMax())return this._valueMax();var t=0<this.options.step?this.options.step:1,n=(e-this._valueMin())%t;alignValue=e-n;2*Math.abs(n)>=t&&(alignValue+=0<n?t:-t);return parseFloat(alignValue.toFixed(5))},_valueMin:function(){return this.options.min},_valueMax:function(){return this.options.max},_refreshValue:function(){var t=this.options.range,n=this.options,r=this,i=!this._animateOff?n.animate:!1,s,o={},u,f,l,c;if(this.options.values&&this.options.values.length)this.handles.each(function(t){s=100*((r.values(t)-r._valueMin())/(r._valueMax()-r._valueMin()));o["horizontal"===r.orientation?"left":"bottom"]=s+"%";e(this).stop(1,1)[i?"animate":"css"](o,n.animate);if(!0===r.options.range)if("horizontal"===r.orientation){if(0===t)r.range.stop(1,1)[i?"animate":"css"]({left:s+"%"},n.animate);if(1===t)r.range[i?"animate":"css"]({width:s-u+"%"},{queue:!1,duration:n.animate})}else{if(0===t)r.range.stop(1,1)[i?"animate":"css"]({bottom:s+"%"},n.animate);if(1===t)r.range[i?"animate":"css"]({height:s-u+"%"},{queue:!1,duration:n.animate})}u=s});else{f=this.value();l=this._valueMin();c=this._valueMax();s=c!==l?100*((f-l)/(c-l)):0;o["horizontal"===r.orientation?"left":"bottom"]=s+"%";this.handle.stop(1,1)[i?"animate":"css"](o,n.animate);if("min"===t&&"horizontal"===this.orientation)this.range.stop(1,1)[i?"animate":"css"]({width:s+"%"},n.animate);if("max"===t&&"horizontal"===this.orientation)this.range[i?"animate":"css"]({width:100-s+"%"},{queue:!1,duration:n.animate});if("min"===t&&"vertical"===this.orientation)this.range.stop(1,1)[i?"animate":"css"]({height:s+"%"},n.animate);if("max"===t&&"vertical"===this.orientation)this.range[i?"animate":"css"]({height:100-s+"%"},{queue:!1,duration:n.animate})}}});e.extend(e.ui.slider,{version:"1.8.14"})})(jQuery);(function(e,n){var r=0,i=0;e.widget("ui.tabs",{options:{add:null,ajaxOptions:null,cache:!1,cookie:null,collapsible:!1,disable:null,disabled:[],enable:null,event:"click",fx:null,idPrefix:"ui-tabs-",load:null,panelTemplate:"<div></div>",remove:null,select:null,show:null,spinner:"<em>Loading&#8230;</em>",tabTemplate:"<li><a href='#{href}'><span>#{label}</span></a></li>"},_create:function(){this._tabify(!0)},_setOption:function(e,t){"selected"==e?this.options.collapsible&&t==this.options.selected||this.select(t):(this.options[e]=t,this._tabify())},_tabId:function(e){return e.title&&e.title.replace(/\s/g,"_").replace(/[^\w\u00c0-\uFFFF-]/g,"")||this.options.idPrefix+ ++r},_sanitizeSelector:function(e){return e.replace(/:/g,"\\:")},_cookie:function(){var t=this.cookie||(this.cookie=this.options.cookie.name||"ui-tabs-"+ ++i);return e.cookie.apply(null,[t].concat(e.makeArray(arguments)))},_ui:function(e,t){return{tab:e,panel:t,index:this.anchors.index(e)}},_cleanup:function(){this.lis.filter(".ui-state-processing").removeClass("ui-state-processing").find("span:data(label.tabs)").each(function(){var t=e(this);t.html(t.data("label.tabs")).removeData("label.tabs")})},_tabify:function(t){function r(t,n){t.css("display","");!e.support.opacity&&n.opacity&&t[0].style.removeAttribute("filter")}var i=this,s=this.options,o=/^#.+/;this.list=this.element.find("ol,ul").eq(0);this.lis=e(" > li:has(a[href])",this.list);this.anchors=this.lis.map(function(){return e("a",this)[0]});this.panels=e([]);this.anchors.each(function(t,n){var r=e(n).attr("href"),u=r.split("#")[0],f;if(u&&(u===location.toString().split("#")[0]||(f=e("base")[0])&&u===f.href))r=n.hash,n.href=r;o.test(r)?i.panels=i.panels.add(i.element.find(i._sanitizeSelector(r))):r&&"#"!==r?(e.data(n,"href.tabs",r),e.data(n,"load.tabs",r.replace(/#.*$/,"")),r=i._tabId(n),n.href="#"+r,n=i.element.find("#"+r),n.length||(n=e(s.panelTemplate).attr("id",r).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").insertAfter(i.panels[t-1]||i.list),n.data("destroy.tabs",!0)),i.panels=i.panels.add(n)):s.disabled.push(t)});t?(this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all"),this.list.addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"),this.lis.addClass("ui-state-default ui-corner-top"),this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom"),s.selected===n?(location.hash&&this.anchors.each(function(e,t){if(t.hash==location.hash)return s.selected=e,!1}),"number"!==typeof s.selected&&s.cookie&&(s.selected=parseInt(i._cookie(),10)),"number"!==typeof s.selected&&this.lis.filter(".ui-tabs-selected").length&&(s.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"))),s.selected=s.selected||(this.lis.length?0:-1)):null===s.selected&&(s.selected=-1),s.selected=0<=s.selected&&this.anchors[s.selected]||0>s.selected?s.selected:0,s.disabled=e.unique(s.disabled.concat(e.map(this.lis.filter(".ui-state-disabled"),function(e){return i.lis.index(e)}))).sort(),-1!=e.inArray(s.selected,s.disabled)&&s.disabled.splice(e.inArray(s.selected,s.disabled),1),this.panels.addClass("ui-tabs-hide"),this.lis.removeClass("ui-tabs-selected ui-state-active"),0<=s.selected&&this.anchors.length&&(i.element.find(i._sanitizeSelector(i.anchors[s.selected].hash)).removeClass("ui-tabs-hide"),this.lis.eq(s.selected).addClass("ui-tabs-selected ui-state-active"),i.element.queue("tabs",function(){i._trigger("show",null,i._ui(i.anchors[s.selected],i.element.find(i._sanitizeSelector(i.anchors[s.selected].hash))[0]))}),this.load(s.selected)),e(window).bind("unload",function(){i.lis.add(i.anchors).unbind(".tabs");i.lis=i.anchors=i.panels=null})):s.selected=this.lis.index(this.lis.filter(".ui-tabs-selected"));this.element[s.collapsible?"addClass":"removeClass"]("ui-tabs-collapsible");s.cookie&&this._cookie(s.selected,s.cookie);t=0;for(var u;u=this.lis[t];t++)e(u)[-1!=e.inArray(t,s.disabled)&&!e(u).hasClass("ui-tabs-selected")?"addClass":"removeClass"]("ui-state-disabled");!1===s.cache&&this.anchors.removeData("cache.tabs");this.lis.add(this.anchors).unbind(".tabs");if("mouseover"!==s.event){var f=function(e,t){t.is(":not(.ui-state-disabled)")&&t.addClass("ui-state-"+e)};this.lis.bind("mouseover.tabs",function(){f("hover",e(this))});this.lis.bind("mouseout.tabs",function(){e(this).removeClass("ui-state-hover")});this.anchors.bind("focus.tabs",function(){f("focus",e(this).closest("li"))});this.anchors.bind("blur.tabs",function(){e(this).closest("li").removeClass("ui-state-focus")})}var l,c;s.fx&&(e.isArray(s.fx)?(l=s.fx[0],c=s.fx[1]):l=c=s.fx);var h=c?function(t,n){e(t).closest("li").addClass("ui-tabs-selected ui-state-active");n.hide().removeClass("ui-tabs-hide").animate(c,c.duration||"normal",function(){r(n,c);i._trigger("show",null,i._ui(t,n[0]))})}:function(t,n){e(t).closest("li").addClass("ui-tabs-selected ui-state-active");n.removeClass("ui-tabs-hide");i._trigger("show",null,i._ui(t,n[0]))},p=l?function(e,t){t.animate(l,l.duration||"normal",function(){i.lis.removeClass("ui-tabs-selected ui-state-active");t.addClass("ui-tabs-hide");r(t,l);i.element.dequeue("tabs")})}:function(e,t){i.lis.removeClass("ui-tabs-selected ui-state-active");t.addClass("ui-tabs-hide");i.element.dequeue("tabs")};this.anchors.bind(s.event+".tabs",function(){var t=this,n=e(t).closest("li"),r=i.panels.filter(":not(.ui-tabs-hide)"),o=i.element.find(i._sanitizeSelector(t.hash));if(n.hasClass("ui-tabs-selected")&&!s.collapsible||n.hasClass("ui-state-disabled")||n.hasClass("ui-state-processing")||i.panels.filter(":animated").length||!1===i._trigger("select",null,i._ui(this,o[0])))return this.blur(),!1;s.selected=i.anchors.index(this);i.abort();if(s.collapsible){if(n.hasClass("ui-tabs-selected"))return s.selected=-1,s.cookie&&i._cookie(s.selected,s.cookie),i.element.queue("tabs",function(){p(t,r)}).dequeue("tabs"),this.blur(),!1;if(!r.length)return s.cookie&&i._cookie(s.selected,s.cookie),i.element.queue("tabs",function(){h(t,o)}),i.load(i.anchors.index(this)),this.blur(),!1}s.cookie&&i._cookie(s.selected,s.cookie);if(o.length)r.length&&i.element.queue("tabs",function(){p(t,r)}),i.element.queue("tabs",function(){h(t,o)}),i.load(i.anchors.index(this));else throw"jQuery UI Tabs: Mismatching fragment identifier.";e.browser.msie&&this.blur()});this.anchors.bind("click.tabs",function(){return!1})},_getIndex:function(e){"string"==typeof e&&(e=this.anchors.index(this.anchors.filter("[href$="+e+"]")));return e},destroy:function(){var t=this.options;this.abort();this.element.unbind(".tabs").removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible").removeData("tabs");this.list.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all");this.anchors.each(function(){var t=e.data(this,"href.tabs");t&&(this.href=t);var n=e(this).unbind(".tabs");e.each(["href","load","cache"],function(e,t){n.removeData(t+".tabs")})});this.lis.unbind(".tabs").add(this.panels).each(function(){e.data(this,"destroy.tabs")?e(this).remove():e(this).removeClass("ui-state-default ui-corner-top ui-tabs-selected ui-state-active ui-state-hover ui-state-focus ui-state-disabled ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide")});t.cookie&&this._cookie(null,t.cookie);return this},add:function(t,r,i){i===n&&(i=this.anchors.length);var s=this,o=this.options;r=e(o.tabTemplate.replace(/#\{href\}/g,t).replace(/#\{label\}/g,r));t=!t.indexOf("#")?t.replace("#",""):this._tabId(e("a",r)[0]);r.addClass("ui-state-default ui-corner-top").data("destroy.tabs",!0);var u=s.element.find("#"+t);u.length||(u=e(o.panelTemplate).attr("id",t).data("destroy.tabs",!0));u.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide");i>=this.lis.length?(r.appendTo(this.list),u.appendTo(this.list[0].parentNode)):(r.insertBefore(this.lis[i]),u.insertBefore(this.panels[i]));o.disabled=e.map(o.disabled,function(e){return e>=i?++e:e});this._tabify();1==this.anchors.length&&(o.selected=0,r.addClass("ui-tabs-selected ui-state-active"),u.removeClass("ui-tabs-hide"),this.element.queue("tabs",function(){s._trigger("show",null,s._ui(s.anchors[0],s.panels[0]))}),this.load(0));this._trigger("add",null,this._ui(this.anchors[i],this.panels[i]));return this},remove:function(t){t=this._getIndex(t);var n=this.options,r=this.lis.eq(t).remove(),i=this.panels.eq(t).remove();r.hasClass("ui-tabs-selected")&&1<this.anchors.length&&this.select(t+(t+1<this.anchors.length?1:-1));n.disabled=e.map(e.grep(n.disabled,function(e){return e!=t}),function(e){return e>=t?--e:e});this._tabify();this._trigger("remove",null,this._ui(r.find("a")[0],i[0]));return this},enable:function(t){t=this._getIndex(t);var n=this.options;if(-1!=e.inArray(t,n.disabled))return this.lis.eq(t).removeClass("ui-state-disabled"),n.disabled=e.grep(n.disabled,function(e){return e!=t}),this._trigger("enable",null,this._ui(this.anchors[t],this.panels[t])),this},disable:function(e){e=this._getIndex(e);var t=this.options;e!=t.selected&&(this.lis.eq(e).addClass("ui-state-disabled"),t.disabled.push(e),t.disabled.sort(),this._trigger("disable",null,this._ui(this.anchors[e],this.panels[e])));return this},select:function(e){e=this._getIndex(e);if(-1==e)if(this.options.collapsible&&-1!=this.options.selected)e=this.options.selected;else return this;this.anchors.eq(e).trigger(this.options.event+".tabs");return this},load:function(t){t=this._getIndex(t);var n=this,r=this.options,i=this.anchors.eq(t)[0],s=e.data(i,"load.tabs");this.abort();if(!s||0!==this.element.queue("tabs").length&&e.data(i,"cache.tabs"))this.element.dequeue("tabs");else{this.lis.eq(t).addClass("ui-state-processing");if(r.spinner){var o=e("span",i);o.data("label.tabs",o.html()).html(r.spinner)}this.xhr=e.ajax(e.extend({},r.ajaxOptions,{url:s,success:function(s,o){n.element.find(n._sanitizeSelector(i.hash)).html(s);n._cleanup();r.cache&&e.data(i,"cache.tabs",!0);n._trigger("load",null,n._ui(n.anchors[t],n.panels[t]));try{r.ajaxOptions.success(s,o)}catch(u){}},error:function(e,s){n._cleanup();n._trigger("load",null,n._ui(n.anchors[t],n.panels[t]));try{r.ajaxOptions.error(e,s,t,i)}catch(o){}}}));n.element.dequeue("tabs");return this}},abort:function(){this.element.queue([]);this.panels.stop(!1,!0);this.element.queue("tabs",this.element.queue("tabs").splice(-2,2));this.xhr&&(this.xhr.abort(),delete this.xhr);this._cleanup();return this},url:function(e,t){this.anchors.eq(e).removeData("cache.tabs").data("load.tabs",t);return this},length:function(){return this.anchors.length}});e.extend(e.ui.tabs,{version:"1.8.14"});e.extend(e.ui.tabs.prototype,{rotation:null,rotate:function(e,n){var r=this,i=this.options,s=r._rotate||(r._rotate=function(t){clearTimeout(r.rotation);r.rotation=setTimeout(function(){var e=i.selected;r.select(++e<r.anchors.length?e:0)},e);t&&t.stopPropagation()});n=r._unrotate||(r._unrotate=!n?function(e){e.clientX&&r.rotate(null)}:function(){t=i.selected;s()});e?(this.element.bind("tabsshow",s),this.anchors.bind(i.event+".tabs",n),s()):(clearTimeout(r.rotation),this.element.unbind("tabsshow",s),this.anchors.unbind(i.event+".tabs",n),delete this._rotate,delete this._unrotate);return this}})})(jQuery);(function(a,b){function c(){this.debug=!1;this._curInst=null;this._keyEvent=!1;this._disabledInputs=[];this._inDialog=this._datepickerShowing=!1;this._mainDivId="ui-datepicker-div";this._inlineClass="ui-datepicker-inline";this._appendClass="ui-datepicker-append";this._triggerClass="ui-datepicker-trigger";this._dialogClass="ui-datepicker-dialog";this._disableClass="ui-datepicker-disabled";this._unselectableClass="ui-datepicker-unselectable";this._currentClass="ui-datepicker-current-day";this._dayOverClass="ui-datepicker-days-cell-over";this.regional=[];this.regional[""]={closeText:"Done",prevText:"Prev",nextText:"Next",currentText:"Today",monthNames:"January February March April May June July August September October November December".split(" "),monthNamesShort:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),dayNames:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),dayNamesShort:"Sun Mon Tue Wed Thu Fri Sat".split(" "),dayNamesMin:"Su Mo Tu We Th Fr Sa".split(" "),weekHeader:"Wk",dateFormat:"mm/dd/yy",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""};this._defaults={showOn:"focus",showAnim:"fadeIn",showOptions:{},defaultDate:null,appendText:"",buttonText:"...",buttonImage:"",buttonImageOnly:!1,hideIfNoPrevNext:!1,navigationAsDateFormat:!1,gotoCurrent:!1,changeMonth:!1,changeYear:!1,yearRange:"c-10:c+10",showOtherMonths:!1,selectOtherMonths:!1,showWeek:!1,calculateWeek:this.iso8601Week,shortYearCutoff:"+10",minDate:null,maxDate:null,duration:"fast",beforeShowDay:null,beforeShow:null,onSelect:null,onChangeMonthYear:null,onClose:null,numberOfMonths:1,showCurrentAtPos:0,stepMonths:1,stepBigMonths:12,altField:"",altFormat:"",constrainInput:!0,showButtonPanel:!1,autoSize:!1};a.extend(this._defaults,this.regional[""]);this.dpDiv=d(a('<div id="'+this._mainDivId+'" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>'))}function d(e){return e.bind("mouseout",function(e){e=a(e.target).closest("button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a");e.length&&e.removeClass("ui-state-hover ui-datepicker-prev-hover ui-datepicker-next-hover")}).bind("mouseover",function(t){t=a(t.target).closest("button, .ui-datepicker-prev, .ui-datepicker-next, .ui-datepicker-calendar td a");if(!a.datepicker._isDisabledDatepicker(h.inline?e.parent()[0]:h.input[0])&&t.length)t.parents(".ui-datepicker-calendar").find("a").removeClass("ui-state-hover"),t.addClass("ui-state-hover"),t.hasClass("ui-datepicker-prev")&&t.addClass("ui-datepicker-prev-hover"),t.hasClass("ui-datepicker-next")&&t.addClass("ui-datepicker-next-hover")})}function f(e,t){a.extend(e,t);for(var n in t)if(null==t[n]||t[n]==b)e[n]=t[n];return e}a.extend(a.ui,{datepicker:{version:"1.8.14"}});var g=(new Date).getTime(),h;a.extend(c.prototype,{markerClassName:"hasDatepicker",maxRows:4,log:function(){this.debug&&console.log.apply("",arguments)},_widgetDatepicker:function(){return this.dpDiv},setDefaults:function(e){f(this._defaults,e||{});return this},_attachDatepicker:function(b,c){var d=null,f;for(f in this._defaults){var g=b.getAttribute("date:"+f);if(g){d=d||{};try{d[f]=eval(g)}catch(h){d[f]=g}}}f=b.nodeName.toLowerCase();g="div"==f||"span"==f;b.id||(this.uuid+=1,b.id="dp"+this.uuid);var s=this._newInst(a(b),g);s.settings=a.extend({},c||{},d||{});"input"==f?this._connectDatepicker(b,s):g&&this._inlineDatepicker(b,s)},_newInst:function(e,t){return{id:e[0].id.replace(/([^A-Za-z0-9_-])/g,"\\\\$1"),input:e,selectedDay:0,selectedMonth:0,selectedYear:0,drawMonth:0,drawYear:0,inline:t,dpDiv:!t?this.dpDiv:d(a('<div class="'+this._inlineClass+' ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>'))}},_connectDatepicker:function(e,t){var n=a(e);t.append=a([]);t.trigger=a([]);n.hasClass(this.markerClassName)||(this._attachments(n,t),n.addClass(this.markerClassName).keydown(this._doKeyDown).keypress(this._doKeyPress).keyup(this._doKeyUp).bind("setData.datepicker",function(e,n,r){t.settings[n]=r}).bind("getData.datepicker",function(e,n){return this._get(t,n)}),this._autoSize(t),a.data(e,"datepicker",t))},_attachments:function(e,t){var n=this._get(t,"appendText"),r=this._get(t,"isRTL");t.append&&t.append.remove();n&&(t.append=a('<span class="'+this._appendClass+'">'+n+"</span>"),e[r?"before":"after"](t.append));e.unbind("focus",this._showDatepicker);t.trigger&&t.trigger.remove();n=this._get(t,"showOn");("focus"==n||"both"==n)&&e.focus(this._showDatepicker);if("button"==n||"both"==n){var n=this._get(t,"buttonText"),i=this._get(t,"buttonImage");t.trigger=a(this._get(t,"buttonImageOnly")?a("<img/>").addClass(this._triggerClass).attr({src:i,alt:n,title:n}):a('<button type="button"></button>').addClass(this._triggerClass).html(""==i?n:a("<img/>").attr({src:i,alt:n,title:n})));e[r?"before":"after"](t.trigger);t.trigger.click(function(){a.datepicker._datepickerShowing&&a.datepicker._lastInput==e[0]?a.datepicker._hideDatepicker():a.datepicker._showDatepicker(e[0]);return!1})}},_autoSize:function(e){if(this._get(e,"autoSize")&&!e.inline){var t=new Date(2009,11,20),n=this._get(e,"dateFormat");if(n.match(/[DM]/)){var r=function(e){for(var t=0,n=0,r=0;r<e.length;r++)e[r].length>t&&(t=e[r].length,n=r);return n};t.setMonth(r(this._get(e,n.match(/MM/)?"monthNames":"monthNamesShort")));t.setDate(r(this._get(e,n.match(/DD/)?"dayNames":"dayNamesShort"))+20-t.getDay())}e.input.attr("size",this._formatDate(e,t).length)}},_inlineDatepicker:function(e,t){var n=a(e);n.hasClass(this.markerClassName)||(n.addClass(this.markerClassName).append(t.dpDiv).bind("setData.datepicker",function(e,n,r){t.settings[n]=r}).bind("getData.datepicker",function(e,n){return this._get(t,n)}),a.data(e,"datepicker",t),this._setDate(t,this._getDefaultDate(t),!0),this._updateDatepicker(t),this._updateAlternate(t),t.dpDiv.show())},_dialogDatepicker:function(e,t,n,r,i){e=this._dialogInst;e||(this.uuid+=1,this._dialogInput=a('<input type="text" id="dp'+this.uuid+'" style="position: absolute; top: -100px; width: 0px; z-index: -10;"/>'),this._dialogInput.keydown(this._doKeyDown),a("body").append(this._dialogInput),e=this._dialogInst=this._newInst(this._dialogInput,!1),e.settings={},a.data(this._dialogInput[0],"datepicker",e));f(e.settings,r||{});t=t&&t.constructor==Date?this._formatDate(e,t):t;this._dialogInput.val(t);this._pos=i?i.length?i:[i.pageX,i.pageY]:null;this._pos||(this._pos=[document.documentElement.clientWidth/2-100+(document.documentElement.scrollLeft||document.body.scrollLeft),document.documentElement.clientHeight/2-150+(document.documentElement.scrollTop||document.body.scrollTop)]);this._dialogInput.css("left",this._pos[0]+20+"px").css("top",this._pos[1]+"px");e.settings.onSelect=n;this._inDialog=!0;this.dpDiv.addClass(this._dialogClass);this._showDatepicker(this._dialogInput[0]);a.blockUI&&a.blockUI(this.dpDiv);a.data(this._dialogInput[0],"datepicker",e);return this},_destroyDatepicker:function(e){var t=a(e),n=a.data(e,"datepicker");if(t.hasClass(this.markerClassName)){var r=e.nodeName.toLowerCase();a.removeData(e,"datepicker");"input"==r?(n.append.remove(),n.trigger.remove(),t.removeClass(this.markerClassName).unbind("focus",this._showDatepicker).unbind("keydown",this._doKeyDown).unbind("keypress",this._doKeyPress).unbind("keyup",this._doKeyUp)):("div"==r||"span"==r)&&t.removeClass(this.markerClassName).empty()}},_enableDatepicker:function(e){var t=a(e),n=a.data(e,"datepicker");if(t.hasClass(this.markerClassName)){var r=e.nodeName.toLowerCase();if("input"==r)e.disabled=!1,n.trigger.filter("button").each(function(){this.disabled=!1}).end().filter("img").css({opacity:"1.0",cursor:""});else if("div"==r||"span"==r)t=t.children("."+this._inlineClass),t.children().removeClass("ui-state-disabled"),t.find("select.ui-datepicker-month, select.ui-datepicker-year").removeAttr("disabled");this._disabledInputs=a.map(this._disabledInputs,function(t){return t==e?null:t})}},_disableDatepicker:function(e){var t=a(e),n=a.data(e,"datepicker");if(t.hasClass(this.markerClassName)){var r=e.nodeName.toLowerCase();if("input"==r)e.disabled=!0,n.trigger.filter("button").each(function(){this.disabled=!0}).end().filter("img").css({opacity:"0.5",cursor:"default"});else if("div"==r||"span"==r)t=t.children("."+this._inlineClass),t.children().addClass("ui-state-disabled"),t.find("select.ui-datepicker-month, select.ui-datepicker-year").attr("disabled","disabled");this._disabledInputs=a.map(this._disabledInputs,function(t){return t==e?null:t});this._disabledInputs[this._disabledInputs.length]=e}},_isDisabledDatepicker:function(e){if(!e)return!1;for(var t=0;t<this._disabledInputs.length;t++)if(this._disabledInputs[t]==e)return!0;return!1},_getInst:function(e){try{return a.data(e,"datepicker")}catch(t){throw"Missing instance data for this datepicker"}},_optionDatepicker:function(e,t,n){var r=this._getInst(e);if(2==arguments.length&&"string"==typeof t)return"defaults"==t?a.extend({},a.datepicker._defaults):r?"all"==t?a.extend({},r.settings):this._get(r,t):null;var i=t||{};"string"==typeof t&&(i={},i[t]=n);if(r){this._curInst==r&&this._hideDatepicker();var s=this._getDateDatepicker(e,!0),o=this._getMinMaxDate(r,"min"),u=this._getMinMaxDate(r,"max");f(r.settings,i);null!==o&&i.dateFormat!==b&&i.minDate===b&&(r.settings.minDate=this._formatDate(r,o));null!==u&&i.dateFormat!==b&&i.maxDate===b&&(r.settings.maxDate=this._formatDate(r,u));this._attachments(a(e),r);this._autoSize(r);this._setDate(r,s);this._updateAlternate(r);this._updateDatepicker(r)}},_changeDatepicker:function(e,t,n){this._optionDatepicker(e,t,n)},_refreshDatepicker:function(e){(e=this._getInst(e))&&this._updateDatepicker(e)},_setDateDatepicker:function(e,t){if(e=this._getInst(e))this._setDate(e,t),this._updateDatepicker(e),this._updateAlternate(e)},_getDateDatepicker:function(e,t){(e=this._getInst(e))&&!e.inline&&this._setDateFromField(e,t);return e?this._getDate(e):null},_doKeyDown:function(e){var t=a.datepicker._getInst(e.target),n=!0,r=t.dpDiv.is(".ui-datepicker-rtl");t._keyEvent=!0;if(a.datepicker._datepickerShowing)switch(e.keyCode){case 9:a.datepicker._hideDatepicker();n=!1;break;case 13:return n=a("td."+a.datepicker._dayOverClass+":not(."+a.datepicker._currentClass+")",t.dpDiv),n[0]?a.datepicker._selectDay(e.target,t.selectedMonth,t.selectedYear,n[0]):a.datepicker._hideDatepicker(),!1;case 27:a.datepicker._hideDatepicker();break;case 33:a.datepicker._adjustDate(e.target,e.ctrlKey?-a.datepicker._get(t,"stepBigMonths"):-a.datepicker._get(t,"stepMonths"),"M");break;case 34:a.datepicker._adjustDate(e.target,e.ctrlKey?+a.datepicker._get(t,"stepBigMonths"):+a.datepicker._get(t,"stepMonths"),"M");break;case 35:(e.ctrlKey||e.metaKey)&&a.datepicker._clearDate(e.target);n=e.ctrlKey||e.metaKey;break;case 36:(e.ctrlKey||e.metaKey)&&a.datepicker._gotoToday(e.target);n=e.ctrlKey||e.metaKey;break;case 37:if(e.ctrlKey||e.metaKey)a.datepicker._adjustDate(e.target,r?1:-1,"D");n=e.ctrlKey||e.metaKey;e.originalEvent.altKey&&a.datepicker._adjustDate(e.target,e.ctrlKey?-a.datepicker._get(t,"stepBigMonths"):-a.datepicker._get(t,"stepMonths"),"M");break;case 38:(e.ctrlKey||e.metaKey)&&a.datepicker._adjustDate(e.target,-7,"D");n=e.ctrlKey||e.metaKey;break;case 39:if(e.ctrlKey||e.metaKey)a.datepicker._adjustDate(e.target,r?-1:1,"D");n=e.ctrlKey||e.metaKey;e.originalEvent.altKey&&a.datepicker._adjustDate(e.target,e.ctrlKey?+a.datepicker._get(t,"stepBigMonths"):+a.datepicker._get(t,"stepMonths"),"M");break;case 40:(e.ctrlKey||e.metaKey)&&a.datepicker._adjustDate(e.target,7,"D");n=e.ctrlKey||e.metaKey;break;default:n=!1}else 36==e.keyCode&&e.ctrlKey?a.datepicker._showDatepicker(this):n=!1;n&&(e.preventDefault(),e.stopPropagation())},_doKeyPress:function(e){var t=a.datepicker._getInst(e.target);if(a.datepicker._get(t,"constrainInput")){var t=a.datepicker._possibleChars(a.datepicker._get(t,"dateFormat")),n=String.fromCharCode(e.charCode==b?e.keyCode:e.charCode);return e.ctrlKey||e.metaKey||" ">n||!t||-1<t.indexOf(n)}},_doKeyUp:function(e){e=a.datepicker._getInst(e.target);if(e.input.val()!=e.lastVal)try{if(a.datepicker.parseDate(a.datepicker._get(e,"dateFormat"),e.input?e.input.val():null,a.datepicker._getFormatConfig(e)))a.datepicker._setDateFromField(e),a.datepicker._updateAlternate(e),a.datepicker._updateDatepicker(e)}catch(t){a.datepicker.log(t)}return!0},_showDatepicker:function(e){e=e.target||e;"input"!=e.nodeName.toLowerCase()&&(e=a("input",e.parentNode)[0]);if(!(a.datepicker._isDisabledDatepicker(e)||a.datepicker._lastInput==e)){var t=a.datepicker._getInst(e);a.datepicker._curInst&&a.datepicker._curInst!=t&&(a.datepicker._datepickerShowing&&a.datepicker._triggerOnClose(a.datepicker._curInst),a.datepicker._curInst.dpDiv.stop(!0,!0));var n=a.datepicker._get(t,"beforeShow");f(t.settings,n?n.apply(e,[e,t]):{});t.lastVal=null;a.datepicker._lastInput=e;a.datepicker._setDateFromField(t);a.datepicker._inDialog&&(e.value="");a.datepicker._pos||(a.datepicker._pos=a.datepicker._findPos(e),a.datepicker._pos[1]+=e.offsetHeight);var r=!1;a(e).parents().each(function(){r|="fixed"==a(this).css("position");return!r});r&&a.browser.opera&&(a.datepicker._pos[0]-=document.documentElement.scrollLeft,a.datepicker._pos[1]-=document.documentElement.scrollTop);n={left:a.datepicker._pos[0],top:a.datepicker._pos[1]};a.datepicker._pos=null;t.dpDiv.empty();t.dpDiv.css({position:"absolute",display:"block",top:"-1000px"});a.datepicker._updateDatepicker(t);n=a.datepicker._checkOffset(t,n,r);t.dpDiv.css({position:a.datepicker._inDialog&&a.blockUI?"static":r?"fixed":"absolute",display:"none",left:n.left+"px",top:n.top+"px"});if(!t.inline){var n=a.datepicker._get(t,"showAnim"),i=a.datepicker._get(t,"duration"),s=function(){var e=t.dpDiv.find("iframe.ui-datepicker-cover");if(e.length){var n=a.datepicker._getBorders(t.dpDiv);e.css({left:-n[0],top:-n[1],width:t.dpDiv.outerWidth(),height:t.dpDiv.outerHeight()})}};t.dpDiv.zIndex(a(e).zIndex()+1);a.datepicker._datepickerShowing=!0;a.effects&&a.effects[n]?t.dpDiv.show(n,a.datepicker._get(t,"showOptions"),i,s):t.dpDiv[n||"show"](n?i:null,s);(!n||!i)&&s();t.input.is(":visible")&&!t.input.is(":disabled")&&t.input.focus();a.datepicker._curInst=t}}},_updateDatepicker:function(e){this.maxRows=4;var t=a.datepicker._getBorders(e.dpDiv);h=e;e.dpDiv.empty().append(this._generateHTML(e));var n=e.dpDiv.find("iframe.ui-datepicker-cover");n.length&&n.css({left:-t[0],top:-t[1],width:e.dpDiv.outerWidth(),height:e.dpDiv.outerHeight()});e.dpDiv.find("."+this._dayOverClass+" a").mouseover();t=this._getNumberOfMonths(e);n=t[1];e.dpDiv.removeClass("ui-datepicker-multi-2 ui-datepicker-multi-3 ui-datepicker-multi-4").width("");1<n&&e.dpDiv.addClass("ui-datepicker-multi-"+n).css("width",17*n+"em");e.dpDiv[(1!=t[0]||1!=t[1]?"add":"remove")+"Class"]("ui-datepicker-multi");e.dpDiv[(this._get(e,"isRTL")?"add":"remove")+"Class"]("ui-datepicker-rtl");e==a.datepicker._curInst&&a.datepicker._datepickerShowing&&e.input&&e.input.is(":visible")&&!e.input.is(":disabled")&&e.input[0]!=document.activeElement&&e.input.focus();if(e.yearshtml){var r=e.yearshtml;setTimeout(function(){r===e.yearshtml&&e.yearshtml&&e.dpDiv.find("select.ui-datepicker-year:first").replaceWith(e.yearshtml);r=e.yearshtml=null},0)}},_getBorders:function(e){var t=function(e){return{thin:1,medium:2,thick:3}[e]||e};return[parseFloat(t(e.css("border-left-width"))),parseFloat(t(e.css("border-top-width")))]},_checkOffset:function(e,t,n){var r=e.dpDiv.outerWidth(),i=e.dpDiv.outerHeight(),s=e.input?e.input.outerWidth():0,o=e.input?e.input.outerHeight():0,u=document.documentElement.clientWidth+a(document).scrollLeft(),f=document.documentElement.clientHeight+a(document).scrollTop();t.left-=this._get(e,"isRTL")?r-s:0;t.left-=n&&t.left==e.input.offset().left?a(document).scrollLeft():0;t.top-=n&&t.top==e.input.offset().top+o?a(document).scrollTop():0;t.left-=Math.min(t.left,t.left+r>u&&u>r?Math.abs(t.left+r-u):0);t.top-=Math.min(t.top,t.top+i>f&&f>i?Math.abs(i+o):0);return t},_findPos:function(e){for(var t=this._get(this._getInst(e),"isRTL");e&&("hidden"==e.type||1!=e.nodeType||a.expr.filters.hidden(e));)e=e[t?"previousSibling":"nextSibling"];e=a(e).offset();return[e.left,e.top]},_triggerOnClose:function(e){var t=this._get(e,"onClose");t&&t.apply(e.input?e.input[0]:null,[e.input?e.input.val():"",e])},_hideDatepicker:function(e){var t=this._curInst;if(t&&!(e&&t!=a.data(e,"datepicker"))&&this._datepickerShowing){e=this._get(t,"showAnim");var n=this._get(t,"duration"),r=function(){a.datepicker._tidyDialog(t);this._curInst=null};a.effects&&a.effects[e]?t.dpDiv.hide(e,a.datepicker._get(t,"showOptions"),n,r):t.dpDiv["slideDown"==e?"slideUp":"fadeIn"==e?"fadeOut":"hide"](e?n:null,r);e||r();a.datepicker._triggerOnClose(t);this._datepickerShowing=!1;this._lastInput=null;this._inDialog&&(this._dialogInput.css({position:"absolute",left:"0",top:"-100px"}),a.blockUI&&(a.unblockUI(),a("body").append(this.dpDiv)));this._inDialog=!1}},_tidyDialog:function(e){e.dpDiv.removeClass(this._dialogClass).unbind(".ui-datepicker-calendar")},_checkExternalClick:function(e){a.datepicker._curInst&&(e=a(e.target),e[0].id!=a.datepicker._mainDivId&&0==e.parents("#"+a.datepicker._mainDivId).length&&!e.hasClass(a.datepicker.markerClassName)&&!e.hasClass(a.datepicker._triggerClass)&&a.datepicker._datepickerShowing&&(!a.datepicker._inDialog||!a.blockUI)&&a.datepicker._hideDatepicker())},_adjustDate:function(e,t,n){e=a(e);var r=this._getInst(e[0]);this._isDisabledDatepicker(e[0])||(this._adjustInstDate(r,t+("M"==n?this._get(r,"showCurrentAtPos"):0),n),this._updateDatepicker(r))},_gotoToday:function(e){e=a(e);var t=this._getInst(e[0]);if(this._get(t,"gotoCurrent")&&t.currentDay)t.selectedDay=t.currentDay,t.drawMonth=t.selectedMonth=t.currentMonth,t.drawYear=t.selectedYear=t.currentYear;else{var n=new Date;t.selectedDay=n.getDate();t.drawMonth=t.selectedMonth=n.getMonth();t.drawYear=t.selectedYear=n.getFullYear()}this._notifyChange(t);this._adjustDate(e)},_selectMonthYear:function(e,t,n){e=a(e);var r=this._getInst(e[0]);r._selectingMonthYear=!1;r["selected"+("M"==n?"Month":"Year")]=r["draw"+("M"==n?"Month":"Year")]=parseInt(t.options[t.selectedIndex].value,10);this._notifyChange(r);this._adjustDate(e)},_clickMonthYear:function(e){var t=this._getInst(a(e)[0]);t.input&&t._selectingMonthYear&&setTimeout(function(){t.input.focus()},0);t._selectingMonthYear=!t._selectingMonthYear},_selectDay:function(e,t,n,r){var i=a(e);!a(r).hasClass(this._unselectableClass)&&!this._isDisabledDatepicker(i[0])&&(i=this._getInst(i[0]),i.selectedDay=i.currentDay=a("a",r).html(),i.selectedMonth=i.currentMonth=t,i.selectedYear=i.currentYear=n,this._selectDate(e,this._formatDate(i,i.currentDay,i.currentMonth,i.currentYear)))},_clearDate:function(e){e=a(e);this._getInst(e[0]);this._selectDate(e,"")},_selectDate:function(e,t){e=this._getInst(a(e)[0]);t=null!=t?t:this._formatDate(e);e.input&&e.input.val(t);this._updateAlternate(e);var n=this._get(e,"onSelect");n?n.apply(e.input?e.input[0]:null,[t,e]):e.input&&e.input.trigger("change");e.inline?this._updateDatepicker(e):(this._hideDatepicker(),this._lastInput=e.input[0],"object"!=typeof e.input[0]&&e.input.focus(),this._lastInput=null)},_updateAlternate:function(e){var t=this._get(e,"altField");if(t){var n=this._get(e,"altFormat")||this._get(e,"dateFormat"),r=this._getDate(e),i=this.formatDate(n,r,this._getFormatConfig(e));a(t).each(function(){a(this).val(i)})}},noWeekends:function(e){e=e.getDay();return[0<e&&6>e,""]},iso8601Week:function(e){e=new Date(e.getTime());e.setDate(e.getDate()+4-(e.getDay()||7));var t=e.getTime();e.setMonth(0);e.setDate(1);return Math.floor(Math.round((t-e)/864e5)/7)+1},parseDate:function(e,t,n){if(null==e||null==t)throw"Invalid arguments";t="object"==typeof t?t.toString():t+"";if(""==t)return null;for(var r=(n?n.shortYearCutoff:null)||this._defaults.shortYearCutoff,r="string"!=typeof r?r:(new Date).getFullYear()%100+parseInt(r,10),i=(n?n.dayNamesShort:null)||this._defaults.dayNamesShort,s=(n?n.dayNames:null)||this._defaults.dayNames,o=(n?n.monthNamesShort:null)||this._defaults.monthNamesShort,u=(n?n.monthNames:null)||this._defaults.monthNames,f=n=-1,l=-1,c=-1,h=!1,p=function(t){(t=y+1<e.length&&e.charAt(y+1)==t)&&y++;return t},d=function(e){var n=p(e);e=RegExp("^\\d{1,"+("@"==e?14:"!"==e?20:"y"==e&&n?4:"o"==e?3:2)+"}");e=t.substring(g).match(e);if(!e)throw"Missing number at position "+g;g+=e[0].length;return parseInt(e[0],10)},v=function(e,n,r){e=a.map(p(e)?r:n,function(e,t){return[[t,e]]}).sort(function(e,t){return-(e[1].length-t[1].length)});var i=-1;a.each(e,function(e,n){e=n[1];if(t.substr(g,e.length).toLowerCase()==e.toLowerCase())return i=n[0],g+=e.length,!1});if(-1!=i)return i+1;throw"Unknown name at position "+g},m=function(){if(t.charAt(g)!=e.charAt(y))throw"Unexpected literal at position "+g;g++},g=0,y=0;y<e.length;y++)if(h)"'"==e.charAt(y)&&!p("'")?h=!1:m();else switch(e.charAt(y)){case"d":l=d("d");break;case"D":v("D",i,s);break;case"o":c=d("o");break;case"m":f=d("m");break;case"M":f=v("M",o,u);break;case"y":n=d("y");break;case"@":var b=new Date(d("@"));n=b.getFullYear();f=b.getMonth()+1;l=b.getDate();break;case"!":b=new Date((d("!")-this._ticksTo1970)/1e4);n=b.getFullYear();f=b.getMonth()+1;l=b.getDate();break;case"'":p("'")?m():h=!0;break;default:m()}if(g<t.length)throw"Extra/unparsed characters found in date: "+t.substring(g);-1==n?n=(new Date).getFullYear():100>n&&(n+=(new Date).getFullYear()-(new Date).getFullYear()%100+(n<=r?0:-100));if(-1<c){f=1;l=c;do{r=this._getDaysInMonth(n,f-1);if(l<=r)break;f++;l-=r}while(1)}b=this._daylightSavingAdjust(new Date(n,f-1,l));if(b.getFullYear()!=n||b.getMonth()+1!=f||b.getDate()!=l)throw"Invalid date";return b},ATOM:"yy-mm-dd",COOKIE:"D, dd M yy",ISO_8601:"yy-mm-dd",RFC_822:"D, d M y",RFC_850:"DD, dd-M-y",RFC_1036:"D, d M y",RFC_1123:"D, d M yy",RFC_2822:"D, d M yy",RSS:"D, d M y",TICKS:"!",TIMESTAMP:"@",W3C:"yy-mm-dd",_ticksTo1970:864e9*(718685+Math.floor(492.5)-Math.floor(19.7)+Math.floor(4.925)),formatDate:function(e,t,n){if(!t)return"";var r=(n?n.dayNamesShort:null)||this._defaults.dayNamesShort,i=(n?n.dayNames:null)||this._defaults.dayNames,s=(n?n.monthNamesShort:null)||this._defaults.monthNamesShort;n=(n?n.monthNames:null)||this._defaults.monthNames;var o=function(t){(t=c+1<e.length&&e.charAt(c+1)==t)&&c++;return t},u=function(e,t,n){t=""+t;if(o(e))for(;t.length<n;)t="0"+t;return t},a=function(e,t,n,r){return o(e)?r[t]:n[t]},f="",l=!1;if(t)for(var c=0;c<e.length;c++)if(l)"'"==e.charAt(c)&&!o("'")?l=!1:f+=e.charAt(c);else switch(e.charAt(c)){case"d":f+=u("d",t.getDate(),2);break;case"D":f+=a("D",t.getDay(),r,i);break;case"o":f+=u("o",Math.round(((new Date(t.getFullYear(),t.getMonth(),t.getDate())).getTime()-(new Date(t.getFullYear(),0,0)).getTime())/864e5),3);break;case"m":f+=u("m",t.getMonth()+1,2);break;case"M":f+=a("M",t.getMonth(),s,n);break;case"y":f+=o("y")?t.getFullYear():(10>t.getYear()%100?"0":"")+t.getYear()%100;break;case"@":f+=t.getTime();break;case"!":f+=1e4*t.getTime()+this._ticksTo1970;break;case"'":o("'")?f+="'":l=!0;break;default:f+=e.charAt(c)}return f},_possibleChars:function(e){for(var t="",n=!1,r=function(t){(t=i+1<e.length&&e.charAt(i+1)==t)&&i++;return t},i=0;i<e.length;i++)if(n)"'"==e.charAt(i)&&!r("'")?n=!1:t+=e.charAt(i);else switch(e.charAt(i)){case"d":case"m":case"y":case"@":t+="0123456789";break;case"D":case"M":return null;case"'":r("'")?t+="'":n=!0;break;default:t+=e.charAt(i)}return t},_get:function(e,t){return e.settings[t]!==b?e.settings[t]:this._defaults[t]},_setDateFromField:function(e,t){if(e.input.val()!=e.lastVal){var n=this._get(e,"dateFormat"),r=e.lastVal=e.input?e.input.val():null,i,s;i=s=this._getDefaultDate(e);var o=this._getFormatConfig(e);try{i=this.parseDate(n,r,o)||s}catch(u){this.log(u),r=t?"":r}e.selectedDay=i.getDate();e.drawMonth=e.selectedMonth=i.getMonth();e.drawYear=e.selectedYear=i.getFullYear();e.currentDay=r?i.getDate():0;e.currentMonth=r?i.getMonth():0;e.currentYear=r?i.getFullYear():0;this._adjustInstDate(e)}},_getDefaultDate:function(e){return this._restrictMinMax(e,this._determineDate(e,this._get(e,"defaultDate"),new Date))},_determineDate:function(e,t,n){var r=function(e){var t=new Date;t.setDate(t.getDate()+e);return t},i=function(t){try{return a.datepicker.parseDate(a.datepicker._get(e,"dateFormat"),t,a.datepicker._getFormatConfig(e))}catch(n){}for(var r=(t.toLowerCase().match(/^c/)?a.datepicker._getDate(e):null)||new Date,i=r.getFullYear(),s=r.getMonth(),r=r.getDate(),o=/([+-]?[0-9]+)\s*(d|D|w|W|m|M|y|Y)?/g,u=o.exec(t);u;){switch(u[2]||"d"){case"d":case"D":r+=parseInt(u[1],10);break;case"w":case"W":r+=7*parseInt(u[1],10);break;case"m":case"M":s+=parseInt(u[1],10);r=Math.min(r,a.datepicker._getDaysInMonth(i,s));break;case"y":case"Y":i+=parseInt(u[1],10),r=Math.min(r,a.datepicker._getDaysInMonth(i,s))}u=o.exec(t)}return new Date(i,s,r)};if(t=(t=null==t||""===t?n:"string"==typeof t?i(t):"number"==typeof t?isNaN(t)?n:r(t):new Date(t.getTime()))&&"Invalid Date"==t.toString()?n:t)t.setHours(0),t.setMinutes(0),t.setSeconds(0),t.setMilliseconds(0);return this._daylightSavingAdjust(t)},_daylightSavingAdjust:function(e){if(!e)return null;e.setHours(12<e.getHours()?e.getHours()+2:0);return e},_setDate:function(e,t,n){var r=!t,i=e.selectedMonth,s=e.selectedYear;t=this._restrictMinMax(e,this._determineDate(e,t,new Date));e.selectedDay=e.currentDay=t.getDate();e.drawMonth=e.selectedMonth=e.currentMonth=t.getMonth();e.drawYear=e.selectedYear=e.currentYear=t.getFullYear();(i!=e.selectedMonth||s!=e.selectedYear)&&!n&&this._notifyChange(e);this._adjustInstDate(e);e.input&&e.input.val(r?"":this._formatDate(e))},_getDate:function(e){return!e.currentYear||e.input&&""==e.input.val()?null:this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay))},_generateHTML:function(e){var t=new Date,t=this._daylightSavingAdjust(new Date(t.getFullYear(),t.getMonth(),t.getDate())),n=this._get(e,"isRTL"),r=this._get(e,"showButtonPanel"),i=this._get(e,"hideIfNoPrevNext"),s=this._get(e,"navigationAsDateFormat"),o=this._getNumberOfMonths(e),u=this._get(e,"showCurrentAtPos"),f=this._get(e,"stepMonths"),l=1!=o[0]||1!=o[1],c=this._daylightSavingAdjust(!e.currentDay?new Date(9999,9,9):new Date(e.currentYear,e.currentMonth,e.currentDay)),h=this._getMinMaxDate(e,"min"),p=this._getMinMaxDate(e,"max"),u=e.drawMonth-u,d=e.drawYear;0>u&&(u+=12,d--);if(p)for(var v=this._daylightSavingAdjust(new Date(p.getFullYear(),p.getMonth()-o[0]*o[1]+1,p.getDate())),v=h&&v<h?h:v;this._daylightSavingAdjust(new Date(d,u,1))>v;)u--,0>u&&(u=11,d--);e.drawMonth=u;e.drawYear=d;var v=this._get(e,"prevText"),v=!s?v:this.formatDate(v,this._daylightSavingAdjust(new Date(d,u-f,1)),this._getFormatConfig(e)),v=this._canAdjustMonth(e,-1,d,u)?'<a class="ui-datepicker-prev ui-corner-all" onclick="DP_jQuery_'+g+".datepicker._adjustDate('#"+e.id+"', -"+f+", 'M');\" title=\""+v+'"><span class="ui-icon ui-icon-circle-triangle-'+(n?"e":"w")+'">'+v+"</span></a>":i?"":'<a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="'+v+'"><span class="ui-icon ui-icon-circle-triangle-'+(n?"e":"w")+'">'+v+"</span></a>",m=this._get(e,"nextText"),m=!s?m:this.formatDate(m,this._daylightSavingAdjust(new Date(d,u+f,1)),this._getFormatConfig(e)),i=this._canAdjustMonth(e,1,d,u)?'<a class="ui-datepicker-next ui-corner-all" onclick="DP_jQuery_'+g+".datepicker._adjustDate('#"+e.id+"', +"+f+", 'M');\" title=\""+m+'"><span class="ui-icon ui-icon-circle-triangle-'+(n?"w":"e")+'">'+m+"</span></a>":i?"":'<a class="ui-datepicker-next ui-corner-all ui-state-disabled" title="'+m+'"><span class="ui-icon ui-icon-circle-triangle-'+(n?"w":"e")+'">'+m+"</span></a>",f=this._get(e,"currentText"),m=this._get(e,"gotoCurrent")&&e.currentDay?c:t,f=!s?f:this.formatDate(f,m,this._getFormatConfig(e)),s=!e.inline?'<button type="button" class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" onclick="DP_jQuery_'+g+'.datepicker._hideDatepicker();">'+this._get(e,"closeText")+"</button>":"",r=r?'<div class="ui-datepicker-buttonpane ui-widget-content">'+(n?s:"")+(this._isInRange(e,m)?'<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" onclick="DP_jQuery_'+g+".datepicker._gotoToday('#"+e.id+"');\">"+f+"</button>":"")+(n?"":s)+"</div>":"",s=parseInt(this._get(e,"firstDay"),10),s=isNaN(s)?0:s,f=this._get(e,"showWeek"),m=this._get(e,"dayNames");this._get(e,"dayNamesShort");var y=this._get(e,"dayNamesMin"),b=this._get(e,"monthNames"),w=this._get(e,"monthNamesShort"),E=this._get(e,"beforeShowDay"),S=this._get(e,"showOtherMonths"),x=this._get(e,"selectOtherMonths");this._get(e,"calculateWeek");for(var T=this._getDefaultDate(e),N="",C=0;C<o[0];C++){var k="";this.maxRows=4;for(var L=0;L<o[1];L++){var A=this._daylightSavingAdjust(new Date(d,u,e.selectedDay)),O=" ui-corner-all",M="";if(l){M+='<div class="ui-datepicker-group';if(1<o[1])switch(L){case 0:M+=" ui-datepicker-group-first";O=" ui-corner-"+(n?"right":"left");break;case o[1]-1:M+=" ui-datepicker-group-last";O=" ui-corner-"+(n?"left":"right");break;default:M+=" ui-datepicker-group-middle",O=""}M+='">'}for(var M=M+('<div class="ui-datepicker-header ui-widget-header ui-helper-clearfix'+O+'">'+(/all|left/.test(O)&&0==C?n?i:v:"")+(/all|right/.test(O)&&0==C?n?v:i:"")+this._generateMonthYearHeader(e,u,d,h,p,0<C||0<L,b,w)+'</div><table class="ui-datepicker-calendar"><thead><tr>'),_=f?'<th class="ui-datepicker-week-col">'+this._get(e,"weekHeader")+"</th>":"",O=0;7>O;O++)var D=(O+s)%7,_=_+("<th"+(5<=(O+s+6)%7?' class="ui-datepicker-week-end"':"")+'><span title="'+m[D]+'">'+y[D]+"</span></th>");M+=_+"</tr></thead><tbody>";_=this._getDaysInMonth(d,u);d==e.selectedYear&&u==e.selectedMonth&&(e.selectedDay=Math.min(e.selectedDay,_));O=(this._getFirstDayOfMonth(d,u)-s+7)%7;_=Math.ceil((O+_)/7);this.maxRows=_=l?this.maxRows>_?this.maxRows:_:_;for(var D=this._daylightSavingAdjust(new Date(d,u,1-O)),P=0;P<_;P++){for(var M=M+"<tr>",H=!f?"":'<td class="ui-datepicker-week-col">'+this._get(e,"calculateWeek")(D)+"</td>",O=0;7>O;O++){var B=E?E.apply(e.input?e.input[0]:null,[D]):[!0,""],j=D.getMonth()!=u,F=j&&!x||!B[0]||h&&D<h||p&&D>p,H=H+('<td class="'+(5<=(O+s+6)%7?" ui-datepicker-week-end":"")+(j?" ui-datepicker-other-month":"")+(D.getTime()==A.getTime()&&u==e.selectedMonth&&e._keyEvent||T.getTime()==D.getTime()&&T.getTime()==A.getTime()?" "+this._dayOverClass:"")+(F?" "+this._unselectableClass+" ui-state-disabled":"")+(j&&!S?"":" "+B[1]+(D.getTime()==c.getTime()?" "+this._currentClass:"")+(D.getTime()==t.getTime()?" ui-datepicker-today":""))+'"'+((!j||S)&&B[2]?' title="'+B[2]+'"':"")+(F?"":' onclick="DP_jQuery_'+g+".datepicker._selectDay('#"+e.id+"',"+D.getMonth()+","+D.getFullYear()+', this);return false;"')+">"+(j&&!S?"&#xa0;":F?'<span class="ui-state-default">'+D.getDate()+"</span>":'<a class="ui-state-default'+(D.getTime()==t.getTime()?" ui-state-highlight":"")+(D.getTime()==c.getTime()?" ui-state-active":"")+(j?" ui-priority-secondary":"")+'" href="#">'+D.getDate()+"</a>")+"</td>");D.setDate(D.getDate()+1);D=this._daylightSavingAdjust(D)}M+=H+"</tr>"}u++;11<u&&(u=0,d++);M+="</tbody></table>"+(l?"</div>"+(0<o[0]&&L==o[1]-1?'<div class="ui-datepicker-row-break"></div>':""):"");k+=M}N+=k}N+=r+(a.browser.msie&&7>parseInt(a.browser.version,10)&&!e.inline?'<iframe src="javascript:false;" class="ui-datepicker-cover" frameborder="0"></iframe>':"");e._keyEvent=!1;return N},_generateMonthYearHeader:function(e,t,n,r,i,s,o,u){var a=this._get(e,"changeMonth"),f=this._get(e,"changeYear"),l=this._get(e,"showMonthAfterYear"),c='<div class="ui-datepicker-title">',h="";if(s||!a)h+='<span class="ui-datepicker-month">'+o[t]+"</span>";else{o=r&&r.getFullYear()==n;for(var p=i&&i.getFullYear()==n,h=h+('<select class="ui-datepicker-month" onchange="DP_jQuery_'+g+".datepicker._selectMonthYear('#"+e.id+"', this, 'M');\" onclick=\"DP_jQuery_"+g+".datepicker._clickMonthYear('#"+e.id+"');\">"),d=0;12>d;d++)if((!o||d>=r.getMonth())&&(!p||d<=i.getMonth()))h+='<option value="'+d+'"'+(d==t?' selected="selected"':"")+">"+u[d]+"</option>";h+="</select>"}l||(c+=h+(s||!a||!f?"&#xa0;":""));if(!e.yearshtml)if(e.yearshtml="",s||!f)c+='<span class="ui-datepicker-year">'+n+"</span>";else{u=this._get(e,"yearRange").split(":");var v=(new Date).getFullYear();o=function(e){e=e.match(/c[+-].*/)?n+parseInt(e.substring(1),10):e.match(/[+-].*/)?v+parseInt(e,10):parseInt(e,10);return isNaN(e)?v:e};t=o(u[0]);u=Math.max(t,o(u[1]||""));t=r?Math.max(t,r.getFullYear()):t;u=i?Math.min(u,i.getFullYear()):u;for(e.yearshtml+='<select class="ui-datepicker-year" onchange="DP_jQuery_'+g+".datepicker._selectMonthYear('#"+e.id+"', this, 'Y');\" onclick=\"DP_jQuery_"+g+".datepicker._clickMonthYear('#"+e.id+"');\">";t<=u;t++)e.yearshtml+='<option value="'+t+'"'+(t==n?' selected="selected"':"")+">"+t+"</option>";e.yearshtml+="</select>";c+=e.yearshtml;e.yearshtml=null}c+=this._get(e,"yearSuffix");l&&(c+=(s||!a||!f?"&#xa0;":"")+h);return c+"</div>"},_adjustInstDate:function(e,t,n){var r=e.drawYear+("Y"==n?t:0),i=e.drawMonth+("M"==n?t:0);t=Math.min(e.selectedDay,this._getDaysInMonth(r,i))+("D"==n?t:0);r=this._restrictMinMax(e,this._daylightSavingAdjust(new Date(r,i,t)));e.selectedDay=r.getDate();e.drawMonth=e.selectedMonth=r.getMonth();e.drawYear=e.selectedYear=r.getFullYear();("M"==n||"Y"==n)&&this._notifyChange(e)},_restrictMinMax:function(e,t){var n=this._getMinMaxDate(e,"min");e=this._getMinMaxDate(e,"max");t=n&&t<n?n:t;return e&&t>e?e:t},_notifyChange:function(e){var t=this._get(e,"onChangeMonthYear");t&&t.apply(e.input?e.input[0]:null,[e.selectedYear,e.selectedMonth+1,e])},_getNumberOfMonths:function(e){e=this._get(e,"numberOfMonths");return null==e?[1,1]:"number"==typeof e?[1,e]:e},_getMinMaxDate:function(e,t){return this._determineDate(e,this._get(e,t+"Date"),null)},_getDaysInMonth:function(e,t){return 32-this._daylightSavingAdjust(new Date(e,t,32)).getDate()},_getFirstDayOfMonth:function(e,t){return(new Date(e,t,1)).getDay()},_canAdjustMonth:function(e,t,n,r){var i=this._getNumberOfMonths(e);n=this._daylightSavingAdjust(new Date(n,r+(0>t?t:i[0]*i[1]),1));0>t&&n.setDate(this._getDaysInMonth(n.getFullYear(),n.getMonth()));return this._isInRange(e,n)},_isInRange:function(e,t){var n=this._getMinMaxDate(e,"min");e=this._getMinMaxDate(e,"max");return(!n||t.getTime()>=n.getTime())&&(!e||t.getTime()<=e.getTime())},_getFormatConfig:function(e){var t=this._get(e,"shortYearCutoff"),t="string"!=typeof t?t:(new Date).getFullYear()%100+parseInt(t,10);return{shortYearCutoff:t,dayNamesShort:this._get(e,"dayNamesShort"),dayNames:this._get(e,"dayNames"),monthNamesShort:this._get(e,"monthNamesShort"),monthNames:this._get(e,"monthNames")}},_formatDate:function(e,t,n,r){t||(e.currentDay=e.selectedDay,e.currentMonth=e.selectedMonth,e.currentYear=e.selectedYear);t=t?"object"==typeof t?t:this._daylightSavingAdjust(new Date(r,n,t)):this._daylightSavingAdjust(new Date(e.currentYear,e.currentMonth,e.currentDay));return this.formatDate(this._get(e,"dateFormat"),t,this._getFormatConfig(e))}});a.fn.datepicker=function(e){if(!this.length)return this;a.datepicker.initialized||(a(document).mousedown(a.datepicker._checkExternalClick).find("body").append(a.datepicker.dpDiv),a.datepicker.initialized=!0);var t=Array.prototype.slice.call(arguments,1);return"string"==typeof e&&("isDisabled"==e||"getDate"==e||"widget"==e)||"option"==e&&2==arguments.length&&"string"==typeof arguments[1]?a.datepicker["_"+e+"Datepicker"].apply(a.datepicker,[this[0]].concat(t)):this.each(function(){"string"==typeof e?a.datepicker["_"+e+"Datepicker"].apply(a.datepicker,[this].concat(t)):a.datepicker._attachDatepicker(this,e)})};a.datepicker=new c;a.datepicker.initialized=!1;a.datepicker.uuid=(new Date).getTime();a.datepicker.version="1.8.14";window["DP_jQuery_"+g]=a})(jQuery);(function(e,t){e.widget("ui.progressbar",{options:{value:0,max:100},min:0,_create:function(){this.element.addClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").attr({role:"progressbar","aria-valuemin":this.min,"aria-valuemax":this.options.max,"aria-valuenow":this._value()});this.valueDiv=e("<div class='ui-progressbar-value ui-widget-header ui-corner-left'></div>").appendTo(this.element);this.oldValue=this._value();this._refreshValue()},destroy:function(){this.element.removeClass("ui-progressbar ui-widget ui-widget-content ui-corner-all").removeAttr("role").removeAttr("aria-valuemin").removeAttr("aria-valuemax").removeAttr("aria-valuenow");this.valueDiv.remove();e.Widget.prototype.destroy.apply(this,arguments)},value:function(e){if(e===t)return this._value();this._setOption("value",e);return this},_setOption:function(t,n){"value"===t&&(this.options.value=n,this._refreshValue(),this._value()===this.options.max&&this._trigger("complete"));e.Widget.prototype._setOption.apply(this,arguments)},_value:function(){var e=this.options.value;"number"!==typeof e&&(e=0);return Math.min(this.options.max,Math.max(this.min,e))},_percentage:function(){return 100*this._value()/this.options.max},_refreshValue:function(){var e=this.value(),t=this._percentage();this.oldValue!==e&&(this.oldValue=e,this._trigger("change"));this.valueDiv.toggle(e>this.min).toggleClass("ui-corner-right",e===this.options.max).width(t.toFixed(0)+"%");this.element.attr("aria-valuenow",e)}});e.extend(e.ui.progressbar,{version:"1.8.14"})})(jQuery);jQuery.effects||function(e,t){function n(t){var n;return t&&t.constructor==Array&&3==t.length?t:(n=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(t))?[parseInt(n[1],10),parseInt(n[2],10),parseInt(n[3],10)]:(n=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(t))?[2.55*parseFloat(n[1]),2.55*parseFloat(n[2]),2.55*parseFloat(n[3])]:(n=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(t))?[parseInt(n[1],16),parseInt(n[2],16),parseInt(n[3],16)]:(n=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(t))?[parseInt(n[1]+n[1],16),parseInt(n[2]+n[2],16),parseInt(n[3]+n[3],16)]:/rgba\(0, 0, 0, 0\)/.exec(t)?a.transparent:a[e.trim(t).toLowerCase()]}function r(){var e=document.defaultView?document.defaultView.getComputedStyle(this,null):this.currentStyle,t={},n,r;if(e&&e.length&&e[0]&&e[e[0]])for(var i=e.length;i--;)n=e[i],"string"==typeof e[n]&&(r=n.replace(/\-(\w)/g,function(e,t){return t.toUpperCase()}),t[r]=e[n]);else for(n in e)"string"===typeof e[n]&&(t[n]=e[n]);return t}function i(t){var n,r;for(n in t)r=t[n],(null==r||e.isFunction(r)||n in l||/scrollbar/.test(n)||!/color/i.test(n)&&isNaN(parseFloat(r)))&&delete t[n];return t}function s(e,t){var n={_:0},r;for(r in t)e[r]!=t[r]&&(n[r]=t[r]);return n}function o(t,n,r,i){"object"==typeof t&&(i=n,r=null,n=t,t=n.effect);e.isFunction(n)&&(i=n,r=null,n={});if("number"==typeof n||e.fx.speeds[n])i=r,r=n,n={};e.isFunction(r)&&(i=r,r=null);n=n||{};r=r||n.duration;r=e.fx.off?0:"number"==typeof r?r:r in e.fx.speeds?e.fx.speeds[r]:e.fx.speeds._default;i=i||n.complete;return[t,n,r,i]}function u(t){return!t||"number"===typeof t||e.fx.speeds[t]||"string"===typeof t&&!e.effects[t]?!0:!1}e.effects={};e.each("backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor borderColor color outlineColor".split(" "),function(t,r){e.fx.step[r]=function(t){if(!t.colorInit){var i;i=t.elem;var s=r,o;do{o=e.curCSS(i,s);if(""!=o&&"transparent"!=o||e.nodeName(i,"body"))break;s="backgroundColor"}while(i=i.parentNode);i=n(o);t.start=i;t.end=n(t.end);t.colorInit=!0}t.elem.style[r]="rgb("+Math.max(Math.min(parseInt(t.pos*(t.end[0]-t.start[0])+t.start[0],10),255),0)+","+Math.max(Math.min(parseInt(t.pos*(t.end[1]-t.start[1])+t.start[1],10),255),0)+","+Math.max(Math.min(parseInt(t.pos*(t.end[2]-t.start[2])+t.start[2],10),255),0)+")"}});var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]},f=["add","remove","toggle"],l={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1};e.effects.animateClass=function(t,n,o,u){e.isFunction(o)&&(u=o,o=null);return this.queue(function(){var a=e(this),l=a.attr("style")||" ",p=i(r.call(this)),v,y=a.attr("class");e.each(f,function(e,n){t[n]&&a[n+"Class"](t[n])});v=i(r.call(this));a.attr("class",y);a.animate(s(p,v),{queue:!1,duration:n,easing:o,complete:function(){e.each(f,function(e,n){t[n]&&a[n+"Class"](t[n])});"object"==typeof a.attr("style")?(a.attr("style").cssText="",a.attr("style").cssText=l):a.attr("style",l);u&&u.apply(this,arguments);e.dequeue(this)}})})};e.fn.extend({_addClass:e.fn.addClass,addClass:function(t,n,r,i){return n?e.effects.animateClass.apply(this,[{add:t},n,r,i]):this._addClass(t)},_removeClass:e.fn.removeClass,removeClass:function(t,n,r,i){return n?e.effects.animateClass.apply(this,[{remove:t},n,r,i]):this._removeClass(t)},_toggleClass:e.fn.toggleClass,toggleClass:function(n,r,i,s,o){return"boolean"==typeof r||r===t?i?e.effects.animateClass.apply(this,[r?{add:n}:{remove:n},i,s,o]):this._toggleClass(n,r):e.effects.animateClass.apply(this,[{toggle:n},r,i,s])},switchClass:function(t,n,r,i,s){return e.effects.animateClass.apply(this,[{add:n,remove:t},r,i,s])}});e.extend(e.effects,{version:"1.8.14",save:function(e,t){for(var n=0;n<t.length;n++)null!==t[n]&&e.data("ec.storage."+t[n],e[0].style[t[n]])},restore:function(e,t){for(var n=0;n<t.length;n++)null!==t[n]&&e.css(t[n],e.data("ec.storage."+t[n]))},setMode:function(e,t){"toggle"==t&&(t=e.is(":hidden")?"show":"hide");return t},getBaseline:function(e,t){var n;switch(e[0]){case"top":n=0;break;case"middle":n=.5;break;case"bottom":n=1;break;default:n=e[0]/t.height}switch(e[1]){case"left":e=0;break;case"center":e=.5;break;case"right":e=1;break;default:e=e[1]/t.width}return{x:e,y:n}},createWrapper:function(t){if(t.parent().is(".ui-effects-wrapper"))return t.parent();var n={width:t.outerWidth(!0),height:t.outerHeight(!0),"float":t.css("float")},r=e("<div></div>").addClass("ui-effects-wrapper").css({fontSize:"100%",background:"transparent",border:"none",margin:0,padding:0});t.wrap(r);r=t.parent();"static"==t.css("position")?(r.css({position:"relative"}),t.css({position:"relative"})):(e.extend(n,{position:t.css("position"),zIndex:t.css("z-index")}),e.each(["top","left","bottom","right"],function(e,r){n[r]=t.css(r);isNaN(parseInt(n[r],10))&&(n[r]="auto")}),t.css({position:"relative",top:0,left:0,right:"auto",bottom:"auto"}));return r.css(n).show()},removeWrapper:function(e){return e.parent().is(".ui-effects-wrapper")?e.parent().replaceWith(e):e},setTransition:function(t,n,r,i){i=i||{};e.each(n,function(e,n){unit=t.cssUnit(n);0<unit[0]&&(i[n]=unit[0]*r+unit[1])});return i}});e.fn.extend({effect:function(t){var n=o.apply(this,arguments),r={options:n[1],duration:n[2],callback:n[3]},n=r.options.mode,i=e.effects[t];return e.fx.off||!i?n?this[n](r.duration,r.callback):this.each(function(){r.callback&&r.callback.call(this)}):i.call(this,r)},_show:e.fn.show,show:function(e){if(u(e))return this._show.apply(this,arguments);var t=o.apply(this,arguments);t[1].mode="show";return this.effect.apply(this,t)},_hide:e.fn.hide,hide:function(e){if(u(e))return this._hide.apply(this,arguments);var t=o.apply(this,arguments);t[1].mode="hide";return this.effect.apply(this,t)},__toggle:e.fn.toggle,toggle:function(t){if(u(t)||"boolean"===typeof t||e.isFunction(t))return this.__toggle.apply(this,arguments);var n=o.apply(this,arguments);n[1].mode="toggle";return this.effect.apply(this,n)},cssUnit:function(t){var n=this.css(t),r=[];e.each(["em","px","%","pt"],function(e,t){0<n.indexOf(t)&&(r=[parseFloat(n),t])});return r}});e.easing.jswing=e.easing.swing;e.extend(e.easing,{def:"easeOutQuad",swing:function(t,n,r,i,s){return e.easing[e.easing.def](t,n,r,i,s)},easeInQuad:function(e,t,n,r,i){return r*(t/=i)*t+n},easeOutQuad:function(e,t,n,r,i){return-r*(t/=i)*(t-2)+n},easeInOutQuad:function(e,t,n,r,i){return 1>(t/=i/2)?r/2*t*t+n:-r/2*(--t*(t-2)-1)+n},easeInCubic:function(e,t,n,r,i){return r*(t/=i)*t*t+n},easeOutCubic:function(e,t,n,r,i){return r*((t=t/i-1)*t*t+1)+n},easeInOutCubic:function(e,t,n,r,i){return 1>(t/=i/2)?r/2*t*t*t+n:r/2*((t-=2)*t*t+2)+n},easeInQuart:function(e,t,n,r,i){return r*(t/=i)*t*t*t+n},easeOutQuart:function(e,t,n,r,i){return-r*((t=t/i-1)*t*t*t-1)+n},easeInOutQuart:function(e,t,n,r,i){return 1>(t/=i/2)?r/2*t*t*t*t+n:-r/2*((t-=2)*t*t*t-2)+n},easeInQuint:function(e,t,n,r,i){return r*(t/=i)*t*t*t*t+n},easeOutQuint:function(e,t,n,r,i){return r*((t=t/i-1)*t*t*t*t+1)+n},easeInOutQuint:function(e,t,n,r,i){return 1>(t/=i/2)?r/2*t*t*t*t*t+n:r/2*((t-=2)*t*t*t*t+2)+n},easeInSine:function(e,t,n,r,i){return-r*Math.cos(t/i*(Math.PI/2))+r+n},easeOutSine:function(e,t,n,r,i){return r*Math.sin(t/i*(Math.PI/2))+n},easeInOutSine:function(e,t,n,r,i){return-r/2*(Math.cos(Math.PI*t/i)-1)+n},easeInExpo:function(e,t,n,r,i){return 0==t?n:r*Math.pow(2,10*(t/i-1))+n},easeOutExpo:function(e,t,n,r,i){return t==i?n+r:r*(-Math.pow(2,-10*t/i)+1)+n},easeInOutExpo:function(e,t,n,r,i){return 0==t?n:t==i?n+r:1>(t/=i/2)?r/2*Math.pow(2,10*(t-1))+n:r/2*(-Math.pow(2,-10*--t)+2)+n},easeInCirc:function(e,t,n,r,i){return-r*(Math.sqrt(1-(t/=i)*t)-1)+n},easeOutCirc:function(e,t,n,r,i){return r*Math.sqrt(1-(t=t/i-1)*t)+n},easeInOutCirc:function(e,t,n,r,i){return 1>(t/=i/2)?-r/2*(Math.sqrt(1-t*t)-1)+n:r/2*(Math.sqrt(1-(t-=2)*t)+1)+n},easeInElastic:function(e,t,n,r,i){var s=0,o=r;if(0==t)return n;if(1==(t/=i))return n+r;s||(s=.3*i);o<Math.abs(r)?(o=r,e=s/4):e=s/(2*Math.PI)*Math.asin(r/o);return-(o*Math.pow(2,10*(t-=1))*Math.sin(2*(t*i-e)*Math.PI/s))+n},easeOutElastic:function(e,t,n,r,i){var s=0,o=r;if(0==t)return n;if(1==(t/=i))return n+r;s||(s=.3*i);o<Math.abs(r)?(o=r,e=s/4):e=s/(2*Math.PI)*Math.asin(r/o);return o*Math.pow(2,-10*t)*Math.sin(2*(t*i-e)*Math.PI/s)+r+n},easeInOutElastic:function(e,t,n,r,i){var s=0,o=r;if(0==t)return n;if(2==(t/=i/2))return n+r;s||(s=1.5*.3*i);o<Math.abs(r)?(o=r,e=s/4):e=s/(2*Math.PI)*Math.asin(r/o);return 1>t?-.5*o*Math.pow(2,10*(t-=1))*Math.sin(2*(t*i-e)*Math.PI/s)+n:.5*o*Math.pow(2,-10*(t-=1))*Math.sin(2*(t*i-e)*Math.PI/s)+r+n},easeInBack:function(e,n,r,i,s,o){o==t&&(o=1.70158);return i*(n/=s)*n*((o+1)*n-o)+r},easeOutBack:function(e,n,r,i,s,o){o==t&&(o=1.70158);return i*((n=n/s-1)*n*((o+1)*n+o)+1)+r},easeInOutBack:function(e,n,r,i,s,o){o==t&&(o=1.70158);return 1>(n/=s/2)?i/2*n*n*(((o*=1.525)+1)*n-o)+r:i/2*((n-=2)*n*(((o*=1.525)+1)*n+o)+2)+r},easeInBounce:function(t,n,r,i,s){return i-e.easing.easeOutBounce(t,s-n,0,i,s)+r},easeOutBounce:function(e,t,n,r,i){return(t/=i)<1/2.75?7.5625*r*t*t+n:t<2/2.75?r*(7.5625*(t-=1.5/2.75)*t+.75)+n:t<2.5/2.75?r*(7.5625*(t-=2.25/2.75)*t+.9375)+n:r*(7.5625*(t-=2.625/2.75)*t+.984375)+n},easeInOutBounce:function(t,n,r,i,s){return n<s/2?.5*e.easing.easeInBounce(t,2*n,0,i,s)+r:.5*e.easing.easeOutBounce(t,2*n-s,0,i,s)+.5*i+r}})}(jQuery);(function(e){e.effects.blind=function(t){return this.queue(function(){var n=e(this),r=["position","top","bottom","left","right"],i=e.effects.setMode(n,t.options.mode||"hide"),s=t.options.direction||"vertical";e.effects.save(n,r);n.show();var o=e.effects.createWrapper(n).css({overflow:"hidden"}),u="vertical"==s?"height":"width",s="vertical"==s?o.height():o.width();"show"==i&&o.css(u,0);var f={};f[u]="show"==i?s:0;o.animate(f,t.duration,t.options.easing,function(){"hide"==i&&n.hide();e.effects.restore(n,r);e.effects.removeWrapper(n);t.callback&&t.callback.apply(n[0],arguments);n.dequeue()})})}})(jQuery);(function(e){e.effects.bounce=function(t){return this.queue(function(){var n=e(this),r=["position","top","bottom","left","right"],i=e.effects.setMode(n,t.options.mode||"effect"),s=t.options.direction||"up",o=t.options.distance||20,u=t.options.times||5,f=t.duration||250;/show|hide/.test(i)&&r.push("opacity");e.effects.save(n,r);n.show();e.effects.createWrapper(n);var l="up"==s||"down"==s?"top":"left",s="up"==s||"left"==s?"pos":"neg",o=t.options.distance||("top"==l?n.outerHeight({margin:!0})/3:n.outerWidth({margin:!0})/3);"show"==i&&n.css("opacity",0).css(l,"pos"==s?-o:o);"hide"==i&&(o/=2*u);"hide"!=i&&u--;if("show"==i){var c={opacity:1};c[l]=("pos"==s?"+=":"-=")+o;n.animate(c,f/2,t.options.easing);o/=2;u--}for(c=0;c<u;c++){var h={},p={};h[l]=("pos"==s?"-=":"+=")+o;p[l]=("pos"==s?"+=":"-=")+o;n.animate(h,f/2,t.options.easing).animate(p,f/2,t.options.easing);o="hide"==i?2*o:o/2}"hide"==i?(c={opacity:0},c[l]=("pos"==s?"-=":"+=")+o,n.animate(c,f/2,t.options.easing,function(){n.hide();e.effects.restore(n,r);e.effects.removeWrapper(n);t.callback&&t.callback.apply(this,arguments)})):(h={},p={},h[l]=("pos"==s?"-=":"+=")+o,p[l]=("pos"==s?"+=":"-=")+o,n.animate(h,f/2,t.options.easing).animate(p,f/2,t.options.easing,function(){e.effects.restore(n,r);e.effects.removeWrapper(n);t.callback&&t.callback.apply(this,arguments)}));n.queue("fx",function(){n.dequeue()});n.dequeue()})}})(jQuery);(function(e){e.effects.clip=function(t){return this.queue(function(){var n=e(this),r="position top bottom left right height width".split(" "),i=e.effects.setMode(n,t.options.mode||"hide"),s=t.options.direction||"vertical";e.effects.save(n,r);n.show();var o=e.effects.createWrapper(n).css({overflow:"hidden"}),o="IMG"==n[0].tagName?o:n,u="vertical"==s?"height":"width",f="vertical"==s?"top":"left",s="vertical"==s?o.height():o.width();"show"==i&&(o.css(u,0),o.css(f,s/2));var l={};l[u]="show"==i?s:0;l[f]="show"==i?0:s/2;o.animate(l,{queue:!1,duration:t.duration,easing:t.options.easing,complete:function(){"hide"==i&&n.hide();e.effects.restore(n,r);e.effects.removeWrapper(n);t.callback&&t.callback.apply(n[0],arguments);n.dequeue()}})})}})(jQuery);(function(e){e.effects.drop=function(t){return this.queue(function(){var n=e(this),r="position top bottom left right opacity".split(" "),i=e.effects.setMode(n,t.options.mode||"hide"),s=t.options.direction||"left";e.effects.save(n,r);n.show();e.effects.createWrapper(n);var o="up"==s||"down"==s?"top":"left",s="up"==s||"left"==s?"pos":"neg",u=t.options.distance||("top"==o?n.outerHeight({margin:!0})/2:n.outerWidth({margin:!0})/2);"show"==i&&n.css("opacity",0).css(o,"pos"==s?-u:u);var f={opacity:"show"==i?1:0};f[o]=("show"==i?"pos"==s?"+=":"-=":"pos"==s?"-=":"+=")+u;n.animate(f,{queue:!1,duration:t.duration,easing:t.options.easing,complete:function(){"hide"==i&&n.hide();e.effects.restore(n,r);e.effects.removeWrapper(n);t.callback&&t.callback.apply(this,arguments);n.dequeue()}})})}})(jQuery);(function(e){e.effects.explode=function(t){return this.queue(function(){var n=t.options.pieces?Math.round(Math.sqrt(t.options.pieces)):3,r=t.options.pieces?Math.round(Math.sqrt(t.options.pieces)):3;t.options.mode="toggle"==t.options.mode?e(this).is(":visible")?"hide":"show":t.options.mode;var i=e(this).show().css("visibility","hidden"),s=i.offset();s.top-=parseInt(i.css("marginTop"),10)||0;s.left-=parseInt(i.css("marginLeft"),10)||0;for(var o=i.outerWidth(!0),u=i.outerHeight(!0),f=0;f<n;f++)for(var l=0;l<r;l++)i.clone().appendTo("body").wrap("<div></div>").css({position:"absolute",visibility:"visible",left:-l*(o/r),top:-f*(u/n)}).parent().addClass("ui-effects-explode").css({position:"absolute",overflow:"hidden",width:o/r,height:u/n,left:s.left+l*(o/r)+("show"==t.options.mode?(l-Math.floor(r/2))*(o/r):0),top:s.top+f*(u/n)+("show"==t.options.mode?(f-Math.floor(n/2))*(u/n):0),opacity:"show"==t.options.mode?0:1}).animate({left:s.left+l*(o/r)+("show"==t.options.mode?0:(l-Math.floor(r/2))*(o/r)),top:s.top+f*(u/n)+("show"==t.options.mode?0:(f-Math.floor(n/2))*(u/n)),opacity:"show"==t.options.mode?1:0},t.duration||500);setTimeout(function(){"show"==t.options.mode?i.css({visibility:"visible"}):i.css({visibility:"visible"}).hide();t.callback&&t.callback.apply(i[0]);i.dequeue();e("div.ui-effects-explode").remove()},t.duration||500)})}})(jQuery);(function(e){e.effects.fade=function(t){return this.queue(function(){var n=e(this),r=e.effects.setMode(n,t.options.mode||"hide");n.animate({opacity:r},{queue:!1,duration:t.duration,easing:t.options.easing,complete:function(){t.callback&&t.callback.apply(this,arguments);n.dequeue()}})})}})(jQuery);(function(e){e.effects.fold=function(t){return this.queue(function(){var n=e(this),r=["position","top","bottom","left","right"],i=e.effects.setMode(n,t.options.mode||"hide"),s=t.options.size||15,o=!!t.options.horizFirst,u=t.duration?t.duration/2:e.fx.speeds._default/2;e.effects.save(n,r);n.show();var f=e.effects.createWrapper(n).css({overflow:"hidden"}),l="show"==i!=o,c=l?["width","height"]:["height","width"],l=l?[f.width(),f.height()]:[f.height(),f.width()],h=/([0-9]+)%/.exec(s);h&&(s=parseInt(h[1],10)/100*l["hide"==i?0:1]);"show"==i&&f.css(o?{height:0,width:s}:{height:s,width:0});o={};h={};o[c[0]]="show"==i?l[0]:s;h[c[1]]="show"==i?l[1]:0;f.animate(o,u,t.options.easing).animate(h,u,t.options.easing,function(){"hide"==i&&n.hide();e.effects.restore(n,r);e.effects.removeWrapper(n);t.callback&&t.callback.apply(n[0],arguments);n.dequeue()})})}})(jQuery);(function(e){e.effects.highlight=function(t){return this.queue(function(){var n=e(this),r=["backgroundImage","backgroundColor","opacity"],i=e.effects.setMode(n,t.options.mode||"show"),s={backgroundColor:n.css("backgroundColor")};"hide"==i&&(s.opacity=0);e.effects.save(n,r);n.show().css({backgroundImage:"none",backgroundColor:t.options.color||"#ffff99"}).animate(s,{queue:!1,duration:t.duration,easing:t.options.easing,complete:function(){"hide"==i&&n.hide();e.effects.restore(n,r);"show"==i&&!e.support.opacity&&this.style.removeAttribute("filter");t.callback&&t.callback.apply(this,arguments);n.dequeue()}})})}})(jQuery);(function(e){e.effects.pulsate=function(t){return this.queue(function(){var n=e(this),r=e.effects.setMode(n,t.options.mode||"show");times=2*(t.options.times||5)-1;duration=t.duration?t.duration/2:e.fx.speeds._default/2;isVisible=n.is(":visible");animateTo=0;isVisible||(n.css("opacity",0).show(),animateTo=1);("hide"==r&&isVisible||"show"==r&&!isVisible)&&times--;for(r=0;r<times;r++)n.animate({opacity:animateTo},duration,t.options.easing),animateTo=(animateTo+1)%2;n.animate({opacity:animateTo},duration,t.options.easing,function(){0==animateTo&&n.hide();t.callback&&t.callback.apply(this,arguments)});n.queue("fx",function(){n.dequeue()}).dequeue()})}})(jQuery)

/* CANVAS CODE */

function printCanvasContainer(containerDiv,img,origSize) {

var thisObj = this;

this.img = img;
this.editorDiv = containerDiv.find('.preview-image');

var borders = false;
var initialized = false;
var productLiveWidthIn = Number(containerDiv.find('input[name=width_in_inches]').val());
var productLiveLengthIn = Number(containerDiv.find('input[name=length_in_inches]').val());
var productDepthIn = 1.25;
var productBleedIn = 0.25;
var printWidthIn = productLiveWidthIn + 2 * (productDepthIn + productBleedIn);
var printLengthIn = productLiveLengthIn + 2 * (productDepthIn + productBleedIn);
var printAspectRatio = printLengthIn / printWidthIn;
var maxPreviewPaneSize = 525;
var borderFractionOfPrintLength = (productDepthIn + productBleedIn) / printLengthIn;
var LANDSCAPE = 1;
var PORTRAIT = 2;
var origDims = new Array();
origDims = origSize.split(" ",3);

this.borderWidthPx = borderFractionOfPrintLength * maxPreviewPaneSize;
this.borderWidthPxColorBorder = borderFractionOfPrintLength * maxPreviewPaneSize;
this.frameWidthPx = 166.5/productLiveLengthIn;
this.frameActive = false;

this.imageAspectRatio;
this.imagePaneAspectRatio;
this.origImageOrientation;
this.real_pic_width;
this.real_pic_height;

this.origImageWidth = origDims[0];
this.origImageHeight = origDims[2]; 
this.orientation;
this.rotation; 
this.zoomFactor = 1;
this.scaleFactor;
this.zoomXoffset = 0;
this.zoomYoffset = 0;
this.crop_x_offset = containerDiv.find('input[name=crop_x_offset]').val();
this.crop_y_offset = containerDiv.find('input[name=crop_y_offset]').val();
var cropInitialized = false;

var full_image_tag = document.createElement("img");

full_image_tag.className = "full_image FULL_IMAGE";
full_image_tag.src = thisObj.img;


$("<img/>").attr("src", $(full_image_tag).attr("src")).on('load',function() {
thisObj.real_pic_width = this.width;
thisObj.real_pic_height = this.height;

if (thisObj.real_pic_width > thisObj.real_pic_height) {
thisObj.orientation = thisObj.rotation = thisObj.origImageOrientation = LANDSCAPE;
} else {
thisObj.orientation = thisObj.rotation = thisObj.origImageOrientation = PORTRAIT;
}

if (thisObj.real_pic_width > thisObj.real_pic_height) {
thisObj.imageAspectRatio = thisObj.real_pic_width / thisObj.real_pic_height;
} else {
thisObj.imageAspectRatio = thisObj.real_pic_height / thisObj.real_pic_width;
}

if (containerDiv.find('input[name=orientation]').val() && containerDiv.find('input[name=orientation]').val() !== 'null') {
thisObj.orientation = containerDiv.find('input[name=orientation]').val();
}

containerDiv.find('input[name=rotation]').val(thisObj.rotation);
containerDiv.find('input[name=orientation]').val(thisObj.orientation);

createEditorElements(full_image_tag);
});

this.initialize = function(){

containerDiv.find('.FULL_IMAGE').draggable({
drag: function() {
return false;
}
});

thisObj.zoom(1,1);
initialized = true;
};

this.updateImagePane = function(){
if (thisObj.orientation == LANDSCAPE) {
thisObj.previewPaneWidth = maxPreviewPaneSize;
thisObj.previewPaneHeight = maxPreviewPaneSize / printAspectRatio;
} else {
thisObj.previewPaneHeight = maxPreviewPaneSize;
thisObj.previewPaneWidth = maxPreviewPaneSize / printAspectRatio;
}

var printType = $('input[name=print_type]:checked');
switch(printType.val()){
case 'Canvas':
borders= false;
break;
default:
borders=true;
break;
}
//Canvas size
 if (!borders) {
//the imagePane is in the same position as previewPane
containerDiv.find('.IMAGE_PANE').css({
'top':'0px',
'left':'0px'
});

//and is the same size
thisObj.imagePaneWidth = thisObj.previewPaneWidth;
thisObj.imagePaneHeight = thisObj.previewPaneHeight;

containerDiv.find('.EDGE').css({
'background':'#000',
opacity: 0.7
})
containerDiv.find('.RIGHT_EDGE_MASK').css('opacity',.4)
}
//Metallic or mounted
else if (borders) {
containerDiv.find('.IMAGE_PANE').css({
'top':thisObj.borderWidthPx,
'left':thisObj.borderWidthPx
})

thisObj.imagePaneWidth = thisObj.previewPaneWidth - (2 * thisObj.borderWidthPx);
thisObj.imagePaneHeight = thisObj.previewPaneHeight - (2 * thisObj.borderWidthPx);
thisObj.imagePaneWidthColorBorder = thisObj.previewPaneWidth - (2 * thisObj.borderWidthPxColorBorder);
thisObj.imagePaneHeightColorBorder = thisObj.previewPaneHeight - (2 * thisObj.borderWidthPxColorBorder);

containerDiv.find('.EDGE').css({
'background':'#000',
opacity: 0.7
});
}

// set the imagePaneAspectRatio
if (thisObj.orientation == LANDSCAPE) {
thisObj.imagePaneAspectRatio = thisObj.imagePaneWidth / thisObj.imagePaneHeight;
} else {
thisObj.imagePaneAspectRatio = thisObj.imagePaneHeight / thisObj.imagePaneWidth;
}
if (thisObj.imagePaneAspectRatio == 1) {
if (thisObj.rotation == LANDSCAPE) {
fitToHeight()
} else {
fitToWidth()
}
} else if (thisObj.orientation == thisObj.rotation) {
if (thisObj.orientation == LANDSCAPE) {
if (thisObj.imageAspectRatio > thisObj.imagePaneAspectRatio){
fitToHeight();
} else {
fitToWidth();
}
} else {
if (thisObj.imageAspectRatio > thisObj.imagePaneAspectRatio) {
fitToWidth();
} else {
fitToHeight();
}
}
} else { // image rotation is different than preview orientation
if (thisObj.orientation == LANDSCAPE) {
fitToWidth();
} else {
fitToHeight();
}
}

containerDiv.find('.IMAGE_PANE').css({
'width':thisObj.imagePaneWidth,
'height':thisObj.imagePaneHeight
});
containerDiv.find('.PREVIEW_PANE').css({
'width':thisObj.previewPaneWidth - thisObj.borderWidthPx*.5,
'height':thisObj.previewPaneHeight - thisObj.borderWidthPx*.5,
'top':(maxPreviewPaneSize - thisObj.previewPaneHeight) / 2,
'left':(maxPreviewPaneSize - thisObj.previewPaneWidth) / 2,
'margin-top':thisObj.borderWidthPx*-1,
'margin-left':thisObj.borderWidthPx*-1
});

containerDiv.find('.H_EDGE').css({
'height':thisObj.borderWidthPx,
'width':thisObj.previewPaneWidth
});

containerDiv.find('.V_EDGE').css({
'height':thisObj.previewPaneHeight,
'width':thisObj.borderWidthPx
});

containerDiv.find('.RIGHT_EDGE_MASK').css({
'top':thisObj.borderWidthPx*-.5,
'right':thisObj.borderWidthPx*-.5
});
containerDiv.find('.BOTTOM_EDGE_MASK').css({
'left':thisObj.borderWidthPx*-.5,
'bottom':thisObj.borderWidthPx*-.5
});

thisObj.frameWidthPx = thisObj.imagePaneWidth / productLiveLengthIn * 3 / 8

containerDiv.find('.CANVAS_WRAPPER,.FRAME_BORDER_HORIZ,.FRAME_BORDER_VERT,.FRAME_EDGE_VERT,.FRAME_EDGE_HORIZ,.FRAME_CORNER').removeAttr('style')
containerDiv.find('.PREVIEW_PANE').css({
'margin-right':0,
'margin-bottom':0
});
if(!initialized) { thisObj.initialize(); }
thisObj.zoom();


function fitToHeight(){
thisObj.currentHeight = thisObj.origHeight = thisObj.imagePaneHeight;
thisObj.currentWidth = thisObj.origWidth = thisObj.imagePaneHeight * (thisObj.real_pic_width / thisObj.real_pic_height);
}

function fitToWidth(){
thisObj.currentWidth = thisObj.origWidth = thisObj.imagePaneWidth;
thisObj.currentHeight = thisObj.origHeight = thisObj.imagePaneWidth * (thisObj.real_pic_height / thisObj.real_pic_width);
}
};

this.zoom = function(){

var oldZoom=1;
var newZoom =1;

var oldX = parseInt(containerDiv.find('.FULL_IMAGE').css('left'),10) || 0;
var oldY = parseInt(containerDiv.find('.FULL_IMAGE').css('top'),10) || 0;
this.currentWidth = newZoom*this.origWidth;
this.currentHeight = newZoom*this.origHeight;
if (thisObj.rotation === thisObj.origImageOrientation) {
containerDiv.find('.FULL_IMAGE').css({
'width':this.currentWidth,
'height':this.currentHeight
});
} else {
containerDiv.find('.FULL_IMAGE').css({
'width':this.currentHeight,
'height':this.currentWidth
});
}
var widthChange = newZoom * this.origWidth - oldZoom * this.origWidth;
var heightChange = newZoom * this.origHeight - oldZoom * this.origHeight;

if (widthChange !== 0) {
this.zoomXoffset = widthChange/2;
} else {
this.zoomXoffset = 0;
}
if (heightChange !== 0) {
this.zoomYoffset = heightChange/2;
} else {
this.zoomYoffset = 0;
}

var xMin = newZoom * -this.origWidth + this.imagePaneWidth;
var xMax = 0;
var yMin = newZoom * -this.origHeight + this.imagePaneHeight;
var yMax = 0;

var newX = oldX - this.zoomXoffset;
var newY = oldY - this.zoomYoffset;

if (newX < xMin) {
newX = xMin;
} else if ( newX > xMax) {
newX = xMax;
} 
if (newY < yMin) {
newY = yMin;
} else if ( newY > yMax) {
newY = yMax;
} 

if(thisObj.orientation !== LANDSCAPE) {
newX = (this.imagePaneWidth - this.currentWidth) / 2;
newY = (this.imagePaneHeight - this.currentHeight) / 2;
}

this.scaleFactor = this.currentWidth / this.origImageWidth;
if (!cropInitialized && (PAGE.initialCrop || PAGE.orderEdit)) {
containerDiv.find('.FULL_IMAGE').css({
'left': (-thisObj.crop_x_offset) * this.scaleFactor ,
'top': (-thisObj.crop_y_offset) * this.scaleFactor 
})
cropInitialized = true
} else if (!initialized) {
containerDiv.find('.FULL_IMAGE').css({
'left': (thisObj.previewPaneWidth - this.currentWidth) / 2,
'top': (thisObj.previewPaneHeight - this.currentHeight) / 2
})
} else {
containerDiv.find('.FULL_IMAGE').css({
'left': newX,
'top': newY
})
}
containerDiv.find('.CROP_X_OFFSET_INPUT').children('input').val( (-newX) / this.scaleFactor )
containerDiv.find('.CROP_Y_OFFSET_INPUT').children('input').val( (-newY) / this.scaleFactor )
containerDiv.find('.CROP_WIDTH_INPUT').children('input').val( (borders?this.imagePaneWidthColorBorder:this.imagePaneWidth) / this.scaleFactor )
containerDiv.find('.CROP_HEIGHT_INPUT').children('input').val( (borders?this.imagePaneHeightColorBorder:this.imagePaneHeight) / this.scaleFactor )


var leftPosition=(($(document).width() /2) - ((thisObj.previewPaneWidth- 100)/2)) + "px"; //($modal.offset().left - 25) + "px";//+ $modal.outerWidth()) + "px";
//var leftPosition = $modal.offset().left + ( ($('.full_image').width() + 60)/2 );
var $printPreview = $("#printPreview");
$(".wrapper-print_preview").css({'left':leftPosition,"right":"inherit", 'top':$printPreview.offset().top +"px"});
$(".canvas-preview-frame").show();
}



function createEditorElements(img){
var previewPaneTag = document.createElement("div");
previewPaneTag.className = 'crop previewPane PREVIEW_PANE';

var imagePaneTag = document.createElement("div");
imagePaneTag.className = 'crop imagePane IMAGE_PANE';


var full_image_div_tag = document.createElement("span");
full_image_div_tag.className = "full_image_div";

var topEdgeMaskTag = document.createElement("div");
topEdgeMaskTag.className = "hEdge edge topEdgeMask H_EDGE EDGE TOP_EDGE_MASK";

var bottomEdgeMaskTag = document.createElement("div");
bottomEdgeMaskTag.className = "hEdge edge bottomEdgeMask H_EDGE EDGE BOTTOM_EDGE_MASK";

var leftEdgeMaskTag = document.createElement("div");
leftEdgeMaskTag.className = "vEdge edge leftEdgeMask V_EDGE EDGE LEFT_EDGE_MASK";

var rightEdgeMaskTag = document.createElement("div");
rightEdgeMaskTag.className = "vEdge edge rightEdgeMask V_EDGE EDGE RIGHT_EDGE_MASK";

var topLeftCornerTag = document.createElement("div");
topLeftCornerTag.className = "corner topLeftCorner CORNER TOP_LEFT_CORNER";

var topRightCornerTag = document.createElement("div");
topRightCornerTag.className = "corner topRightCorner CORNER TOP_RIGHT_CORNER";

var bottomRightCornerTag = document.createElement("div");
bottomRightCornerTag.className = "corner bottomRightCorner CORNER BOTTOM_RIGHT_CORNER";

var bottomLeftCornerTag = document.createElement("div");
bottomLeftCornerTag.className = "corner bottomLeftCorner CORNER BOTTOM_LEFT_CORNER";

full_image_div_tag.appendChild(img);
imagePaneTag.appendChild(full_image_div_tag);
previewPaneTag.appendChild(imagePaneTag);
previewPaneTag.appendChild(topEdgeMaskTag);
previewPaneTag.appendChild(bottomEdgeMaskTag);
previewPaneTag.appendChild(leftEdgeMaskTag);
previewPaneTag.appendChild(rightEdgeMaskTag);
previewPaneTag.appendChild(topLeftCornerTag);
previewPaneTag.appendChild(topRightCornerTag);
previewPaneTag.appendChild(bottomRightCornerTag);
previewPaneTag.appendChild(bottomLeftCornerTag);


thisObj.editorDiv.empty();
thisObj.editorDiv.append(previewPaneTag);

thisObj.updateImagePane();
containerDiv.find('.CORNER').css({
'width':thisObj.borderWidthPx,
'height':thisObj.borderWidthPx
});
}


}

function setPrintPreview() {

var canvasSelected = $('input[name=print_size]:checked');

var dimensions = canvasSelected.val().split('x');

$('#width_in_inches').val(dimensions[0]);
$('#length_in_inches').val(dimensions[1]);


printCanvasContainer($('.CANVAS_CONTAINER'),PAGE.imageUrl,PAGE.imageSize);

}



$(document).ready(function(){
likesAddClick();
});

function likesAddClick() {
$(document).on("click",".vblikes-button",function(e){
e.preventDefault();

var is_rob = "";

if(typeof e.originalEvent != "undefined") {
is_rob = "from_user";
} else {
is_rob = "from_robot";
}
if (signupPopup() && !$(this).hasClass("disabled")){ 
var media_id = $(this).attr("data-media-id");
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
$(this_obj).addClass("vbawarded");
$(this_obj).addClass("vbawarded-like");
//$(spanlike).addClass("vbliked");
var total_txt = $(this).find('.mask-text');
if(total_txt.html().indexOf("K") > -1) {
} else {
total_txt.html( parseInt(total_txt.html()) + 1);
}
this_obj.removeClass("disabled");

//Post like
$.ajax({
type: "POST",
url: '/photo/like/' + media_id,
success: function (data) {

if(data){
if(data.success==1 ){}
else{ 
if(typeof data.message != "undefined" && data.message!=''){
alert(data.message);
}
else if(typeof data.error != "undefined" && data.error!=""){
alert(data.error);
}
}
}

}
});

/*$.ajax({
type: "POST",
url: '/photo/saveurl/' + media_id,
data: { url: is_rob },
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
}(function($) {
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
var colpop=0;
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
});var bt_form = $('#upgrade_account');
var bt_submit = $(bt_form).find('input[type="submit"]');
var bt_hostedFieldsInstance = null;
var default_button_value = "Pay now";
var bt_ct = null;

function _createBraintree(){
$("#paynow").attr("value","Please wait..");

braintree.client.create({
// Replace this with your own authorization.
authorization: bt_ct
}, function (clientErr, clientInstance) {
if (clientErr) {
// Handle error in client creation
//console.log(hostedFieldsErr);
alert(clientErr.message);
return;
}

braintree.hostedFields.create({
client: clientInstance,
styles: {
'input.invalid': {
'color': 'red'
},
'input': {
'font-size': '17px',
'font-weight': 300,
'width' : '100%',
'color' : '#000000',
'padding-left':'20px',
'font-family' : '\'Helvetica Neue\', Helvetica, Arial, sans-serif'
},
'select': {
'font-size': '17px',
'color': '#888',
'font-weight': 300,
'font-family' : '\'Helvetica Neue\', Helvetica, Arial, sans-serif'
}
},
fields: {
number: {
selector: '#card-number',
placeholder: 'Card Number',
formatInput: true
},
cvv: {
selector: '#cvv',
placeholder: 'CVV'
},
expirationMonth: {
selector: '#expiration-month',
select: true
},expirationYear: {
selector: '#expiration-year',
select: true
},postalCode: {
selector: '#zip',
placeholder: 'Postal/ZIP code'
}
}
}, 
function (hostedFieldsErr, hostedFieldsInstance) {
if (hostedFieldsErr) {
var bt_error_message = hostedFieldsErr.message + "<br /><br />Please try again.";
switch (hostedFieldsErr.code) {
case 'HOSTED_FIELDS_FIELDS_EMPTY': bt_error_message = "Some information is incomplete or incorrect. <br />Please try again."; break;
case 'HOSTED_FIELDS_FIELDS_INVALID': bt_error_message = "Some information is incorrect or incomplete. <br />Please try again."; break;
case 'HOSTED_FIELDS_TOKENIZATION_CVV_VERIFICATION_FAILED': bt_error_message = "CVV did not pass verification. <br />Please try again."; break;
case 'HOSTED_FIELDS_FAILED_TOKENIZATION': bt_error_message = "Some information is incorrect. Is the card valid? <br />Please try again."; break;
case 'HOSTED_FIELDS_TOKENIZATION_NETWORK_ERROR': bt_error_message = "Network error! <br />Please try again."; break;
}

alert(bt_error_message);
// Handle error in Hosted Fields creation
$("#paynow").attr("value","Error loading security form.");
return;
}
bt_hostedFieldsInstance = hostedFieldsInstance;

$("#paynow").attr("value",default_button_value);
});
});
}

function loadBraintree(){
$("#paynow").attr("value","Loading, pleas wait..");

if(bt_ct===null){
$.ajax({
type: "POST",
url: '/photo/0/getbtct',
success: function(data){
if(data.success =="1"){
bt_ct = data.val;
_createBraintree();
}else{
$('#modal').trigger('reveal:close');
alert("We apologize for any inconvenience as credit card payments are currently unavailable. Please try again in a few minutes.");
}
}
});
}else{
_createBraintree();
}


}
var bt_obj = null;


function paywithexistingcard(obj){
if($("#paynow").attr("value")==default_button_value)
{
checkNewPrice(false);

$("#paynow").attr("value","Please wait..").addClass("disabled");

if($('body').hasClass('upgradenow')) {
$("#purchasefooter").addClass("waiting");
} else {
$("#purchasefooter .match_left").addClass("waiting");
}

obj = $("#upgrade_account");

$.ajax({
type: "POST",
url: $(obj).attr("action"),
data: $(obj).serialize()+ "&credit_card_number=XXXX",
success: function(data){
if(data.success =="1"){
window.location ='/upgrade/complete';
$('#modal').trigger('reveal:close');
}else{
alert(data.message);
$("#paynow").attr("value",default_button_value).removeClass("disabled");

if($('body').hasClass('upgradenow')) {
$("#purchasefooter").removeClass("waiting");
} else {
$("#purchasefooter .match_left").removeClass("waiting");
}
}
}
});


}else{
alert("Please wait...");
}
return false;
}



function doPaymentBT(){

if($("#paynow").attr("value")==default_button_value)
{
//bt_obj = obj;
$("#paynow").attr("value","Please wait..");

bt_hostedFieldsInstance.tokenize(function (tokenizeErr, payload) {
if (tokenizeErr) {
$("#paynow").attr("value",default_button_value).removeClass("disabled");

if($('body').hasClass('upgradenow')) {
$("#purchasefooter").removeClass("waiting");
} else {
$("#purchasefooter .match_left").removeClass("waiting");
}

var bt_error_message = tokenizeErr.message + "<br /><br />Please try again.";
switch (tokenizeErr.code) {
case 'HOSTED_FIELDS_FIELDS_EMPTY': bt_error_message = "Some information is incomplete or incorrect. <br />Please try again."; break;
case 'HOSTED_FIELDS_FIELDS_INVALID': bt_error_message = "Some information is incorrect or incomplete. <br />Please try again."; break;
case 'HOSTED_FIELDS_TOKENIZATION_CVV_VERIFICATION_FAILED': bt_error_message = "CVV did not pass verification. <br />Please try again."; break;
case 'HOSTED_FIELDS_FAILED_TOKENIZATION': bt_error_message = "Some information is incorrect. Is the card valid? <br />Please try again."; break;
case 'HOSTED_FIELDS_TOKENIZATION_NETWORK_ERROR': bt_error_message = "Network error! <br />Please try again."; break;
}

alert(bt_error_message);
// Handle error in Hosted Fields tokenization
return ;
}

$("#bt_payment_method_nonce").val(payload.nonce);

paynowsubmit();

});
}

}


function paynowsubmit(use_existing_card){
if(typeof use_existing_card =="undefined"){
use_existing_card = false;
}

var photo_id = $('#photo_id').val();
var detail = '#' + $("input[name='print_type']:checked").val() + '-' + $("input[name='print_size']:checked").val();
var detail_id = $(detail).attr('name');

checkQty($('#print_qty'));
var qty = $('#print_qty').val();

var first = $('#firstName').val();
var last = $('#lastName').val();

var address1 = $('#address1').val();
var address2 = $('#address2').val();
var city = $('#city').val();
var zip = $("input[name='zip']").val();
var country = $('#select_countries').val();
var state = $('#states_' + country).val();

var email = 'not';
if($('#billing_address_wrapper #email').length > 0) {
email = $('#billing_address_wrapper #email').val();
}

var nonce = $("#bt_payment_method_nonce").val();

if( (use_existing_card || (first && last && nonce && email) ) && address1 && city && zip && country != "NA" && detail && qty && detail_id) {
if(($("#paynow").html()=="Please wait...")){
return;
}
$("#paynow").html("Please wait...");

$.post(
'/cart/checkoutphoto',
{ photo_id: photo_id, detail_id: detail_id, quantity: qty,
firstName: first, lastName: last, address1: address1, address2: address2, city: city, state: state, country: country, zip: zip,
credit_card_number: 'XXXX',
email: email, payment_method_nonce: nonce },
function(resp) {
if(resp.success == 0) {
alert("We were unable to process your payment. Please verify and try again. If the problem persists, contact us to complete your order.");
} else {
$('#modal').trigger('reveal:close');
$('#popup-clear-main').delay(500).addClass('print').html('<div class="text">Thank you!<br />Your print will be ready soon.<a href="javascript:" class="continue-print">Continue browsing</a></div>').fadeIn(500);

$('#popup-clear-main').on('click','.continue-print', function() {
$('#popup-clear-main').fadeOut(200, function() { $(this).html('').removeClass('print'); });
});
}
//$("#paynow").html("Pay now");
$("#paynow").attr("value",default_button_value);
}
);

} else {
if(address1 && city && zip && country != "NA"){
alert('Oops! Please fill all data.');
}
else{
alert('Oops! Looks like we are missing your shipping address.');
}
$("#paynow").attr("value",default_button_value);
}
}


/* BT */
function payphotowithexistingcard(obj){
//bt_obj = obj;
$("#paynow").attr("value","Please wait..");
paynowsubmit(true);
}$(document).ready(function() {
$('.form-autocomplete:not(.processed)').each(function(){
var id = $(this).attr('id');
new autoComplete(id, autocomplete_settings[id]);
});
});