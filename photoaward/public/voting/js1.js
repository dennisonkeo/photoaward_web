function redirect(url, _blank, new_window) {
if (!url || url == 'reload') {
this.window.location.reload();
return this.window;
}
if (_blank) {
var specs = null;

if (new_window) {
if (typeof new_window != 'object') {
new_window = {
layout: 'default'
};
}
switch(new_window.layout) {
case 'share':
specs = 'left='+ ((screen.width/2)-335) +',top='+ ((screen.height/2)-250) +',width=670,height=400,';
specs += 'personalbar=no,menubar=no,toolbar=no,location=no,resizable=yes,scrollbars=yes,status=no,modal=yes';
break;
case 'fblogin':
specs = 'left='+ ((screen.width/2)-250) +',top='+ ((screen.height/2)-150) +',width=500,height=300,';
specs += 'personalbar=no,menubar=no,toolbar=no,location=1,resizable=yes,scrollbars=yes,status=no,modal=yes';
break;
default:
specs = 'left='+screen.width+',top=0,width='+screen.width+',height='+screen.height+',';
specs += 'personalbar=yes,menubar=yes,toolbar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes';
break;
}
}

w = typeof _blank != 'string' ? window.open(url) : window.open(url, _blank, specs);

if (w && w.top) {
// do something

} else {
// popup has been blocked
if (confirm('popup has been blocked, open url on the same window?')) {
redirect(url);
}
}
return w;

} else {
this.window.location.href = url;
return this.window;
}
}

function logged(redirect_to_signup) {
var url = 'login';
if(typeof redirect_to_signup !=="undefined" && redirect_to_signup === true){
url ="signup";
}
if (!is_loggedin) {
redirect(false && version == 1 ? '/' + url: '/user/'+url+'?destination='+ escape(window.location.pathname));
}
return is_loggedin;
}

function setMessages(messages, container, disableScroll) {
if (typeof container == 'undefined' || !container) {
var container = '#top_content';
}

$(container).removeClass('hide').find('.messages-wrapper .messages').remove();
for (type in messages) {
if (messages[type].length) {
var ul = $('<ul>');
for (n in messages[type]) {
var li = $('<li>').html(messages[type][n]);
ul.append(li);
}
if (messages[type].length > 1) {
ul.addClass('list');
}

var icons = '<span class="icon x"></span><span class="icon"></span>';
var div = $(container).find('.messages.' + type);
if (div.length < 1) {
div = $('<div>').addClass('messages').addClass(type).html(icons);
$(container).append(div);
} else {
div.html(icons);
}
div.append(ul);

div.find('.icon.x').click(function() {
$(this).closest('.messages').hide();
}
);
divparent = $(container).find('.messages-wrapper');
if (divparent.length < 1) {
divparent = $('<div>').addClass('messages-wrapper').append(div);
$(container).append(divparent);
} else {
divparent.show().append(div);
}
}
}

if (!disableScroll) {
scrollTo(container);
}
}

function setRespMessages(data, container, clear, disableScroll) {
if (data && data.messages) {
var len = 0;
try {
len = Object.keys(data.messages).length;
} catch(e) {
for (n in data.messages) {
len++;
}
}
if (len) {
if (typeof container != 'undefined' && typeof clear != 'undefined' && clear) {
 $(container).html('');
}
setMessages(data.messages, container, disableScroll);
return true;
}
}
return false;
}

function setHtml(container, html) {
if ($('.ie').length > 0) {
var myNav = navigator.userAgent.toLowerCase();
var myVer = parseInt(myNav.split('msie')[1]);

if(myVer < 9) {
$(container)[0].innerHTML = html;

var scripts = $(container).find('script');
for (var i = 0; i < scripts.length; i++) {
$.globalEval($(scripts[i]).html());
}
} else {
$(container).html(html);
}
} else {
$(container).html(html);
}
}

function scrollTo(e, offset, onComplete) {
if (!offset) {
var offset = -58;
}
var top = 0;
if (typeof e == 'number') {
top = e;
} else if ($(e).length) {
top = $(e).offset().top;
}
top += offset;

if (top && top < 1) {
top = 0;
}

$($("html").hasClass("sf") ? 'body': 'html').animate(
{scrollTop: top ? top: 0}, 700,
function() {
if (typeof onComplete != 'undefined') {
onComplete();
}
}
);
}

function checkHoverDropdown(dropdown, action, target) {
if (typeof action != 'undefined') {
action = 'default';
}

var button = $(dropdown).find('.button:first');
if (($(dropdown).hasClass('active') || action == 'remove') && action != 'add') {
if ($(dropdown).hasClass('hover-blue')) {
button.removeClass('blue');
button.addClass('gray');
}
$(dropdown).removeClass('active');

if (target) {
if (!$(target).hasClass('button') && !$(target).parent().hasClass('button')) {
$(dropdown).find('ul li').removeClass('active');
$(target).parent().addClass('active');
button.find('span.label').html($(target).html());
}
}

} else {
if ($(dropdown).hasClass('hover-blue')) {
button.removeClass('gray');
button.addClass('blue');
}
$(dropdown).addClass('active');
}
}

function consoleLog(e) {
if ((window.location.search.match(/debug/) || window.location.hash.match(/debug/) || typeof is_dev != 'undefined') && console) {
console.log(e);
}
}

function formTextEmpty(container) {
if (typeof container == 'undefined') {
var container = document;
}
$(container).find('.form-text.empty, .form-textarea.empty').each(function(){
var value = $(this).val();
$(this).focus(function(){
if ($(this).val() == value) {
$(this).removeClass('empty');
$(this).val('');
}
}).blur(function(){
if ($(this).val() == '') {
$(this).addClass('empty');
$(this).val(value);
}
});
});
}

function sanitizeLinks(container) {
if ($('.ie').length > 0) {
var myNav = navigator.userAgent.toLowerCase();
var myVer = parseInt(myNav.split('msie')[1]);

if(myVer < 8) {
container.find('a').each(function() {
url = $(this).attr('href');
if (url.match(/(.*)#(.*)/)) {
url = url.replace(/(.+)#/, '#');
$(this).attr('href', url);
}
});
}
}
}

function createCookie(name, value, days) {
if (days) {
var date = new Date();
date.setTime(date.getTime()+(days*24*60*60*1000));
var expires = '; expires='+date.toGMTString();
}
else var expires = '';
document.cookie = name+'='+value+expires+'; path=/';
}

function createCookieTemporal(name, value, minutes) {
if (minutes) {
var date = new Date();
date.setTime(date.getTime()+(minutes*60*1000));
var expires = '; expires='+date.toGMTString();
}
else var expires = '';
document.cookie = name+'='+value+expires+'; path=/';
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

function eraseCookie(name) {
createCookie(name, '', -1);
}

function disableCornerPopup() {
/*if($('.corner-popup.active').length > 0) {
$('.corner-popup').removeClass('active');

if($('.corner-popup').hasClass('corner-peer')) {
$.get('/photo/cornerpopup');
}
}*/
}

var can_award = true;
var header_banner_height = 0;

$(document).ready(function() {

if($('#header-banner').length > 0 && $('#header-banner').height() > 0) {
setBodyPadding(true);

$(window).resize(function() {
setBodyPadding(false);
});
}

if($('.corner-popup.active').length > 0) {

var time_delay = 3000;
if($('.corner-popup').hasClass('corner-peer')) {
time_delay = 10000;
/*if(!$('body').hasClass('photopage') && $('.corner-title').text()==='' ) {
$('.corner-title').html('Inspired by one of these images?');
$('.corner-text').html('Give it a Peer Award.');
}*/
} else if($('.corner-popup').hasClass('corner-home')) {
time_delay = 5000;
}

time_delay = 0;

if($('.corner-popup').hasClass('corner-upgrade')) {
time_delay = 3000;
}

$('.corner-popup').delay(time_delay).animate({ marginRight:0 }, 1000, function() {
//disableCornerPopup();
});
if($(".corner-popup").css("left") == "1px"){
$('.corner-popup').delay(1).animate({ marginLeft:0 }, 1000, function() {
//disableCornerPopup();
});
}
$('.corner-close').click(function() {

if($(this).parent().hasClass('corner-upgrade') || $(this).parent().hasClass('corner-peer')) {
var banner_id = $(this).attr('data-id');
$.get('/photo/cornerpopup?id=' + banner_id);
}

$('.corner-popup').fadeOut(500, function() {
$('.corner-popup').remove();
});
});
}

if($('.green_top ').length > 0) {
$('.green_top ').parent().addClass('green-top-li');
}

if($('#signup-popup').length > 0) {
$('.corner-close').click(function() {
$('#signup-popup, #signup-popup-bg').fadeOut(500, function() {
$('#signup-popup, #signup-popup-bg').remove();
});
});
}

// menu hover
if ($('.ie').length > 0) {
var myNav = navigator.userAgent.toLowerCase();
var myVer = parseInt(myNav.split('msie')[1]);

if(myVer < 7) {
$('header .box-menu > li').hover(function() {
$(this).addClass('hover');
},
function() {
$(this).removeClass('hover');
}
);
}
}

// tabs
$('contenttabs tabs li a').each(function(index) {
$(this).click(function(e) {
// click
var boxtabs = $(this).parents('contenttabs:first');
var tabs = boxtabs.find('tabs li').removeClass('active');
var contents = boxtabs.find('contents > .content').removeClass('active');

$(tabs[index]).addClass('active');

if (contents.length > 1 || $(this).attr('href').match(/#$/)) {
e.preventDefault();
}

if (contents.length > 1) {
var url = $(this).attr('href').replace(/#/, '');
if ($(contents[index]).html() == '' && url != '') {
$(contents[index]).html('<loading></loading>');
$.get(url, function(resp) {
$(contents[index]).html(resp);
});
}
$(contents[index]).addClass('active');
}
});
});

$('.button').on('click', function() {
if ($(this).hasClass('collections-button')) return;
if (!$(this).hasClass('no-disabled') && !$(this).parent().hasClass('dropdown')) {
var button = $(this);
setTimeout(function() {
button.addClass('disabled');
if (button.is('a')) {
button.prepend('<span class="icon spinner"></span>');
}
}, 10
);
}
}
);

if(!$("html").hasClass("mobile") && !$("body").hasClass("photopage")){
$('.dropdown').on('mouseleave', function() {
if ($(this).hasClass('active')) {
checkHoverDropdown(this, 'remove');
}}
);
}

$('.icon-award').on('click', function(e) {
if(can_award) {

if(!$(this).children('a').hasClass('vbawardedemo')) {

if(is_loggedin) {
checkHoverDropdown(this, 'add');

if($(this).hasClass('feature-photo-byuser-container')) {
var totalpeer = 0;
var media_id = $(this).children('a').attr('data-id');
var dropdown_wrapper = $(this).children("#btn" + media_id);

if(!dropdown_wrapper.hasClass('vbawardedemo')) {

var give_cur = true;

if($('body').hasClass('curator-dashboard')) {
$(this).children('.award_popup.icons').remove();
}

$(this).children('a').addClass('vbawardedemo');

dropdown_wrapper.animate({opacity: '0.1'}, "slow", function() {
dropdown_wrapper.addClass("ajaxfavorited");

var totalpeer = dropdown_wrapper.find('.mask-text').html();
if(totalpeer.indexOf("K") > -1) {
} else {
totalpeer = parseInt(dropdown_wrapper.find('.mask-text').html()) + 1;
}

dropdown_wrapper.find('.mask-text').html( totalpeer );

if(dropdown_wrapper.hasClass('peerwall') && $('#peer-' + dropdown_wrapper.attr('data-id')).length > 0) {
$('#peer-' + dropdown_wrapper.attr('data-id')).html( totalpeer );
}

$('.top-buttons .top-award').addClass('vbawardedemo');

if($('body').hasClass('curator-dashboard')) {
loadFame($(this).parent().parent().parent().parent().parent());
}

}).animate({opacity: '1'}, "slow");

if(dropdown_wrapper.parent().parent().parent().parent().attr('id') == 'photo-info') {
var dropdown_wrapper2 = $("thumbnail #btn" + media_id);
dropdown_wrapper2.addClass('vbawardedemo');

dropdown_wrapper2.animate({opacity: '0.1'}, "slow", function() {
dropdown_wrapper2.addClass("ajaxfavorited");
var totalpeer = dropdown_wrapper.find('.mask-text').html();
if(totalpeer.indexOf("K") > -1) {
} else {
totalpeer = parseInt(dropdown_wrapper.find('.mask-text').html()) + 1;
}
dropdown_wrapper2.find('.mask-text').html( totalpeer );

if(dropdown_wrapper2.hasClass('peerwall') && $('#peer-' + dropdown_wrapper2.attr('data-id')).length > 0) {
$('#peer-' + dropdown_wrapper2.attr('data-id')).html( totalpeer );
}
}).animate({opacity: '1'}, "slow");
}

$.post(
'/photo/'+media_id+'/feature/user',
{type: 'peer_award'},
function(data) {
console.log(data);
}
);
}
}
}
}
}
}
);

$('.form-textarea').each(function(){
$(this).focus(function(){
$(this).parent().addClass('focus');
}).blur(function(){
$(this).parent().removeClass('focus');
});
});

formTextEmpty();

$('.messages .icon.x').click(function() {
$(this).closest('.messages').hide();
}
);

setTimeout(function() {
$('statusbar').slideDown();
}, 250
);
if($("body").hasClass("stpb")){
setBackToTop();
}

$('.banner-close').on('click', function() {

closePadding();

/*$('body').animate({ paddingTop: 0}, 400, function() {
$('body').removeClass('has_banner');
});*/

$.ajax({
url:"/user/settings/closebanner",
method:"GET",
success:function(data){
}
});
});

$('.open-search').on('click', function() {
$('header.mobileNavbar .box-search, .cancel-search').fadeIn(500);
$('#search #edit-keywords').focus();
$('.mobile .top-profile-hidden-menu').hide();
});

var click_type = 'click';
if($('.mobile').length > 0) {
click_type = 'touchend';
}

$('header.mobileNavbar .box-search, header.mobileNavbar .box-search .form-box, .cancel-search').on(click_type, function() {
if(!$(this).hasClass('form-box')) {
$('header.mobileNavbar .box-search, .cancel-search').fadeOut(500);
$('.mobile .top-profile-hidden-menu').show();
}
});

$('.send-verification').click(function() {
closePadding();

$('#popup-clear-bg').fadeIn(500);
$('#popup-clear-main').addClass('email-verification').html('<div class="text">Done, email sent to <span class="show-below"></span><span class="hide-com">"</span>' + $('#email-verification').val() + '<span class="hide-com">"</span><br /><br />If you don\'t see it, please check your spam folder, not there?<br class="hide-this" /> Contact our support team and they will happily assist you.<br /><br /><div class="center-pop"><a href="javascript:" class="email-got-it">Got it</a></div></div>').fadeIn(500);

$('.email-got-it').click(function() {
$('#popup-clear-bg, #popup-clear-main').fadeOut(500, function() {
$('#popup-clear-main').removeClass('email-verification').html('');
});
});

$.ajax({
url:"/user/settings/sendconfirmation",
method:"GET",
success:function(data){
}
});
});
if(typeof attachMasqueradeGalleryEvents !=="undefined"){
attachMasqueradeGalleryEvents();
}
});

function setBodyPadding(first) {
if($('#orig_width').length > 0) {
first = false;
}

header_banner_height = $('#header-banner').outerHeight() + $('#header-banner').position().top;

if(first) {
$('body').animate({ paddingTop: header_banner_height }, 800);
} else {
$('body').css({ paddingTop: header_banner_height });
}

if($('body').hasClass('photo-contests')) {
if(typeof blockTabPositionC !== "undefined"){
blockTabPositionC(first);
}
} else {
if(typeof blockTabPosition !== "undefined"){
blockTabPosition(first);
}
}
}

function closePadding() {
$('#header-banner').css({ padding: 0 }).height('0px');
$('#header-banner').hide();

var pad = 0;


if($('.mobile').length > 0) {
pad = 44;
}

$('body').css({paddingTop: pad });

header_banner_height = $('#header-banner').outerHeight() + $('#header-banner').position().top;

if(typeof blockTabPosition !== "undefined"){
blockTabPosition();
}
}

function getUrlParameterByName(name)
{
name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
var regexS = "[\\?&]" + name + "=([^&#]*)";
var regex = new RegExp(regexS);
var results = regex.exec(window.location.search);

if(results == null)
return "";
else
return decodeURIComponent(results[1].replace(/\+/g, " "));
}
//Convert query string to object
var queryToObject = function(){
var
i = 0,
retObj = {},
pair = null,
sPageURL = window.location.search.substring(1),
qArr = sPageURL.split('&');
 
for (; i < qArr.length; i++){
pair = qArr[i].split('=');
retObj[pair[0]] = pair[1];
};
return retObj;
};

var setBackToTop = function(){
//Scroll to top button
$("#backtotop").remove();
$("body").append("<div id='backtotop'>Back to top</div>");

$(window).scroll(function() {
if($(window).scrollTop() != 0) {
$('#backtotop').fadeIn();
} else {
$('#backtotop').fadeOut();
}
});

$('#backtotop').click(function() {
$('body,html').animate({scrollTop:0},800);
});

}

//Block Right Click
$("thumbnail").on("contextmenu", function(e) { 
// Stop the context menu
//toggleContext(true);
e.preventDefault();

var img = $(this).find("img");
var url = ($(this).hasClass('thumb-contest') ? $(this).find('.details .relative').parent().parent().attr("href") : img.parent().attr("href"));

if(url =="javascript:"){
img = $(this).first().find(".protect-photo").parent().find("img");
url = img.parent().attr("href");
}

if(typeof $(img).attr("data-owner") !== "undefined"){
if($("#toggleContext").length === 0){
$("body").append("<div id='toggleContext' style='display:none;'><a href='"+url+"' target='_blank'>Open in a new window</a> <br /> This photo is copyrighted by @"+$(img).attr("data-owner")+"</div>")
}

if(!$("#toggleContext").is(':visible')){

$("#toggleContext").css("top",e.clientY);
$("#toggleContext").css("left",e.clientX);


$("#toggleContext").show();

}else{
$("#toggleContext").remove()
}
}else{

if($("#toggleContext").length === 0 && (document.location.pathname.indexOf('member/')<1) ){
$("body").append("<div id='toggleContext' style='display:none;'><a href='"+url+"' target='_blank'>Open in a new window</a></div>")
}

if(!$("#toggleContext").is(':visible')){

$("#toggleContext").css("top",e.clientY);
$("#toggleContext").css("left",e.clientX);


$("#toggleContext").show();

}else{
$("#toggleContext").remove()
}
}
});

//Pager - get result via ajax
$(document).on("click", ".box-pager.viewmore > a.next", function(e){
e.preventDefault();
var url = $(this).attr("href");

//Use another container instead of gallery/thumbnail
var container = $(this).attr("data-container");
var container_items = $(this).attr("data-items");
if(typeof container == "undefined"){
container = "gallery";
container_items = ".waterfall400";
}
$(container).css("opacity","0.6");

url = url.replace("#","");

$.ajax({
url:url,
method:"GET",
contentType: "text/html",
success:function(data){
var mytag=$('<div></div>').html(data);
var elements = $(mytag).find(container).html();
var nextButton = $(mytag).find('.box-pager.viewmore').html();
var newElems = $(container).append( elements);
if(container=="gallery" && jQuery().masonry){
var gallery_waterfall = $(container);
gallery_waterfall.masonry( 'appended', $(newElems), false );
}
if(typeof replaceDelayedImages !== "undefined"){
replaceDelayedImages($('html').hasClass('ie'));//Gallery.js
}
$(container).css("opacity","1");

if(typeof nextButton == "undefined" || nextButton==null){
return;
}
$(".box-pager.viewmore").html(nextButton.replace("#/","/"));

}
});
});

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
'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url) + "&display=popup", 
'facebook-share-dialog', 
'width=626,height=436');
});
}

$("#wrapbar-categories-foot").mouseover(function(e){
$("#filters-cate-pop-foot").show(); 
}).mouseleave(function(e){
$("#filters-cate-pop-foot").hide();
}).click(function(e){
$("#filters-cate-pop-foot").toggle();
});


function redirectSearch(obj){
var str =$(obj).find('#edit-keywords').val();
if(str.indexOf(' ') > 0){
str = '"' + str + '"';
}
str = encodeUrl(str);
window.location = '/search/' + str;
}
function encodeUrl(str){
var pathTags = (str.indexOf('#')===0) ? "tags/" : '';
str = str.replace(/#/g,"");
str = encodeURIComponent(str);
str = str.replace(/ /g,"%20");
str = str.replace(/\'/g,"%27");
str = str.replace(/\"/g,"%27");
return pathTags + str;

}

function redirectMemberSearch(obj,type, fieldname){
var str =$(obj).find('#'+fieldname).val();
str = str.replace(' ', "+");
str = encodeUrl(str);
window.location = '/members/' + type + '/' + str;
}


function closeIframe(frame_id) {
var iframe = document.getElementById(frame_id);
iframe.parentNode.removeChild(iframe);
$('#popup-clear-bg-join').hide();
}

var sanitize = function (s) { var t = document.createElement('div'); t.textContent = s; return t.innerHTML; };var onClosePopup = null;
var popup_zindex = 501;

function zIndexUpdate(popup) {
if (!popup.hasClass('notifications') && popup.css('zIndex') != popup_zindex) {
popup_zindex++;
popup.css({zIndex: popup_zindex});
}
}

function popMessage(title, html, onClose, theme, toggle, is_html, id, customButtonLabel, customContainerCssInline) {

if(Array.isArray(html)){
var _html = html;
html = '';
_html.forEach(function(obj,i){
html += obj;
});
}

var popup = $('.popup'+ id ? '#'+id: '.'+theme);

if(typeof customButtonLabel=="undefined"){
customButtonLabel="Ok";
}
if(typeof customContainerCssInline=="undefined"){
customContainerCssInline = '';
}else if(customContainerCssInline!=''){
customContainerCssInline = "style='"+customContainerCssInline+"'";
}


if (toggle && popup.length) {
popup.show();
zIndexUpdate(popup);
return;
}

if (!popup.length || !toggle) {
// create popup
popup = $('<div class="popup v3">'+
'<div class="overlay"></div>'+
'<div class="container" '+customContainerCssInline+'>'+
'<div class="header">'+
'<div class="title"></div>'+
'<div class="popupx main-popupx"><a title="Close" href="javascript:"> </a></div>'+
'</div>'+
'<div class="content">'+

'</div>'+
'</div>'+
'</div>');

if (theme == 'notifications') {
$('#statusbar_wrapper').append(popup);

} else {
$('#wrapper').append(popup);
}
}
if (title === null || title==='') {
popup.find('.header > .title').remove();
//title = theme && theme == 'error' ? 'Error' : 'Message';
}

if (theme == 'system' || theme == 'warning' || theme == 'error' || theme == 'messages') {
html += '<div class="buttons">'+
'<a class="button popupx">'+customButtonLabel+'</a>'+
'</div>';
}

if (id) {
popup.attr('id', id);
}
popup.find('.header .title').html(title);
popup.find('.content:first').html(is_html ? html: (typeof html !== 'string') ? html : html.replace(/\n/g, '<br/>'));
for (c in Array('message', 'fullscreen', 'status', 'error', 'warning', 'photo', 'messages', 'notifications')) {
popup.removeClass(c);
}

popup.addClass(theme ? theme : 'message');
if (theme == 'fullscreen') {
popup.addClass('blue');
popup.find('.container').css({top: $(window).scrollTop()+50});
}
popAttachPopupXEvent(popup, onClose);

zIndexUpdate(popup);

popup.find('.container').mousedown(function(e, ee){
if ($(e.target).is('div')) {
zIndexUpdate(popup);
}
});

if(jQuery().datepick) {
$('#edit-expiration').datepick();
}
popup.show();

return popup;
}

function popError(html, onClose) {
return popMessage('Error', html, onClose, 'error');
}

function alert(html) {
return popMessage('', html, null, 'status');
}

function popStatus(html, onClose) {
return popMessage('', html, onClose, 'status');
}

function popWarning(html, onClose) {
return popMessage('', html, onClose, 'warning');
}

function popMessages(html,title) {
if(typeof title=="undefined"){
title = "";
}

return popMessage(title, html, null, 'messages');
}

function popFullscreen(title, html) {
return popMessage(title, html, null, 'fullscreen');
}

function popFullscreenHtml(title, html, id, url, theme, scroll, onClose) {
if (theme == '' || theme == null){
theme = 'fullscreen';
}

var popup = null;
if (id) {
popup = $('.popup#'+ id);

if (popup.length) {
popup.show();
zIndexUpdate(popup);
if (theme == 'fullscreen' || scroll) {
scrollTo(popup.find('.container'));
}
return;
}
}
if (!html) {
html = '<loading></loading>';
}

popup = popMessage(title, url ? '<loading></loading>': html, onClose, theme, null, true);

if (id) {
popup.attr('id', id);
}

var verticalCenterUpdate = function(popup) {
var top = parseInt(popup.find('.container').css('top').replace('px', ''));
var margin_top = -Math.round(popup.find('.container').height()*.55);
if (top + margin_top < 50) {
popup.find('.container').css('top', Math.abs(margin_top) + 50);
}
popup.find('.container').css('margin-top', margin_top);
}

if (url) {
if (typeof url == 'string') {
url = {href: url};
}
$.post(
url.href,
url.params ? url.params: null,
function(resp) {
if (resp.messages) {
popup.find('.content:first').html('');
setMessages(resp.messages, popup.find('.content:first'));

} else {
popup.find('.content:first').html(resp);
popAttachPopupXEvent(popup.find('.container'), onClose);

if (typeof attachFormEvent == 'function') {
attachFormEvent(popup.find('.content:first'));

} else if (typeof attachFormValidateEvents == 'function') {
attachFormValidateEvents(popup.find('.content:first'));
}

if (typeof attachTextAreaFieldEvent == 'function') {
attachTextAreaFieldEvent(popup.find('.content:first'));
}
}

// verticalCenterUpdate(popup);

if (url.onComplete) {
url.onComplete(resp, popup);
}

$.each($('.form-date'), function(){
$(this).datepick();
});
}
);
} else {
// verticalCenterUpdate(popup);
}

return popup;
}

function popNotification() {
var span = $('statusbar .notifications span');
var popup = $('#notifications');

if (popup.length) {
if (popup.is(':hidden')) {
popup.show();
span.hide();

} else {
popup.hide();
}
return;
}

popup = popMessage('Notifications', '<loading></loading>', false, 'notifications');
popup.attr('id', 'notifications');

return popup;
}

function attachDraggableEvent(e) {
e = $(e);

// Move the e by the amount of change in the mouse position
var move = function(ev) {
if (e.data('mouseMove')) {
var changeX = ev.clientX - e.data('mouseX');
var changeY = ev.clientY - e.data('mouseY');
var newX = parseInt(e.position().left) + changeX;
var newY = parseInt(e.position().top) + changeY;
e.css('left', newX);
e.css('top', newY);
e.data('mouseX', ev.clientX);
e.data('mouseY', ev.clientY);
}
}

e.mousedown(function(ev) {
if ($(ev.target).is('div')) {
e.data('mouseMove', true);
e.data('mouseX', ev.clientX);
e.data('mouseY', ev.clientY);
}
}
);

e.parents(':last').mouseup(function() {
e.data('mouseMove', false);
});

e.mouseout(move);
e.mousemove(move);
}

function popContent(title, html, id, url) {
var popup = popFullscreenHtml(title, html, id, url);

if (popup) {
popup.addClass('size2');
popup.addClass('no-overlay');
popup.addClass('draggable');
attachDraggableEvent(popup.find('.container'));
}
}

function popPhoto(photo, toggle) {
var photo = $(photo);
var width = parseInt(photo.find('img').css('max-width').replace('px', ''));
var html = ('<div class="block-photo">'+ photo.html() +'</div>').replace(/\n/g, '');

popup = popMessage('', html, null, 'photo', toggle);
if (popup) {
popup.find('.container').css('width', width).css('margin-left', (width/2)*-1);
popup.find('.block-photo').bind("contextmenu",function(e){
return false;
});
}
return popup;
}

function popAttachPopupXEvent(container, onClose) {
if (!container) {
var container = $('.popup');
}

$(container).find('.overlay, .header .popupx, .content:first .popupx, .v3 .closeme').each(function() {
var x = $(this);
if (!x.hasClass('popupxd')) {
x.click(function(e){ 
var is_popup_collection = x.parents('.popup:first').find('.content-collections:first');
var is_popup_update = x.parents('.popup:first').find('.update-collection-popup:first');
if(is_popup_collection.hasClass('content-collections') || is_popup_update.hasClass('update-collection-popup')) { 
x.parents('.popup:first').remove(); 
if(is_popup_collection.hasClass('content-collections')) $("body").css("overflow", "visible"); 
}

if (onClosePopup && !x.hasClass('main-popupx')) {
setTimeout(function() {
onClosePopup();
x.parents('.popup:first').hide();
}, 250);
} else {
x.parents('.popup:first').fadeOut(500);//.hide();
}

if (onClose) {
onClose(x.parents('.popup:first'), x);
}
});
x.addClass('popupxd');
}
});

if (onClose) {
if (!$(container).hasClass('popup')) {
container = $(container).parents('.popup:first');
}
container.addClass('has-close');
}
}

$(document).ready(function() {
popAttachPopupXEvent();

$('html').keyup(function(e){
if (e.keyCode == 27) {
// get top popup and close
var toppopup = null;
var topzindex = 0;
$('.popup:visible').each(function(){
if ($(this).css('z-index') > topzindex) {
topzindex = $(this).css('z-index');
toppopup = this;
}
});

if (toppopup && !$(toppopup).hasClass('has-close')) {
$(toppopup).children('.overlay').click();
}
}
});

$('.this-close').click(function() {
$('.reveal-modal-bg').click();
});
});