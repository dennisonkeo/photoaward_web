function cookieNotificationLoad(options) {
	CookieNotification.init(options);
}
function cookieNotificationUnload(option) {
	CookieNotification.setCookie();
}

var CookieNotification = {
	options: {
		html: "",
		position: "top",
		animate: "yes",
		strict: "no",
		cookieName: "mw_cookie_consent"
	},
	init: function(options) {
  	if (typeof String.prototype.trim !== "function") {
      String.prototype.trim = function () {
        return this.replace(/^\s+|\s+$/g, "")
      }
    }
    
		this.options = jQuery.extend(this.options, options);
		
		if (this.options.html.length > 0)
		  this.show();
	},
	show: function() {
		if (this.getCookie() === "yes") {
    	if (this.options.strict == "yes" && typeof activateCookies == "function")
    	  activateCookies();
    	  
		  return;
		};
		
		jQuery("body").prepend(this.options.html);
		
		jQuery("#mw-cookie-policy-hide").click(function(event) {
			event.preventDefault();
			
			if (CookieNotification.options.animate == "yes") {
				if (CookieNotification.options.position == "bottom") {
					jQuery("#mw-cookie-policy").animate({
						bottom: jQuery("#mw-cookie-policy").outerHeight(true) * -1
					}, 500, function() {
						CookieNotification.consent();
					});
				} else {
					jQuery("#mw-cookie-policy").animate({
						top: jQuery("#mw-cookie-policy").outerHeight(true) * -1
					}, 500, function() {
						CookieNotification.consent();
					});
				}
			} else {
				jQuery("#mw-cookie-policy").css("top", jQuery("#mw-cookie-policy").outerHeight(true) * -1);
				this.consent();
			}
		});
		
		if (this.options.animate == "yes") {
			if (this.options.position == "bottom") {
				jQuery("#mw-cookie-policy").css("bottom", jQuery("#mw-cookie-policy").outerHeight(true) * -1);				
				jQuery("#mw-cookie-policy").animate({
					bottom: 0
				}, 500);
			} else {
				jQuery("#mw-cookie-policy").css("top", jQuery("#mw-cookie-policy").outerHeight(true) * -1);				
				jQuery("#mw-cookie-policy").animate({
					top: 0
				}, 500);
			}
		}
	},
	consent: function() {
  	jQuery("#mw-cookie-policy").remove();
  	this.setCookie();
	},
	setCookie: function() {
		var date = new Date();
		var seconds = 1000 * 60 * 60 * 24 * 90;
		var expiry = new Date(date.getTime() + seconds);
		expiry = expiry.toGMTString();
		
		document.cookie = this.options.cookieName + "=yes;expires=" + expiry + ";path=/";
		
  	if (this.options.strict == "yes" && typeof activateCookies == "function")
  	  activateCookies();
	},
	getCookie: function() {
		var cookie = false;
    jQuery.each(document.cookie.split(";"), function (ev, str) {
      var arr = str.split("=");
      if (arr[0].trim() === CookieNotification.options.cookieName) {
        cookie = unescape(arr[1]);
        return false;
      }
    });
    return cookie;
	}
};