(function (factory) {

    if (typeof define === "function" && define.amd) {
        /** AMD. Register as an anonymous module. */
        define(["jquery"], factory);
    } else if (typeof module === "object" && module.exports) {
        /** Node/CommonJS */
        module.exports = factory(require("jquery"));
    } else {
        /** Browser globals */
        factory(window.jQuery);
    }

}(function ($) {

    $.fn.ddslick = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === "object" || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error("Method " + method + " does not exists.");
        }
    };

    var methods = {};
    var settingsMap = {};
    var defaults = {
        data: [],
        keepJSONItemsOnTop: false,
        animationTime: 50,
        width: "20em",
        height: null,
        background: "#eee",
        selectText: "",
        defaultSelectedIndex: null,
        truncateDescription: true,
        imagePosition: "left",
        showSelectedHTML: true,
        clickOffToClose: true,
        embedCSS: true,
        onSelected: function() { }
    };

    var closeListenerInitialized = false;
    var ddSelectHtml = "<div class='dd-select'><input class='dd-selected-value' type='hidden' /><button type='button' class='dd-selected'></button><span class='dd-pointer dd-pointer-down'></span></div>";
    var ddOptionsHtml = "<ul class='dd-options'></ul>";

    //CSS for ddSlick
    var ddslickCSS = "<style id='css-ddslick' type='text/css'>" +
        ".dd-select{ border-radius:2px; border:solid 1px #ccc; position:relative; cursor:pointer;}" +
        ".dd-desc { color:#aaa; display:block; overflow: hidden; font-weight:normal; line-height: 1.4em; }" +
        ".dd-selected{ position:relative; overflow:hidden; display:block; padding:10px; font-weight:bold; width:100%; text-align:left;}" +
        ".dd-selected:focus { z-index:2001; }" +
        ".dd-pointer{ width:0; height:0; position:absolute; right:10px; top:50%; margin-top:-3px;}" +
        ".dd-selected:focus + .dd-pointer{ z-index:2002; }" +
        ".dd-pointer-down{ border:solid 5px transparent; border-top:solid 5px #000; }" +
        ".dd-pointer-up{border:solid 5px transparent !important; border-bottom:solid 5px #000 !important; margin-top:-8px;}" +
        ".dd-options{ border:solid 1px #ccc; border-top:none; list-style:none; box-shadow:0px 1px 5px #ddd; display:none; position:absolute; z-index:2000; margin:0; padding:0;background:#fff; overflow:visible;}" +
        ".dd-options:focus{ outline:0; }" +
        ".dd-option{ padding:10px; display:block; width:100%; text-align:left; border-bottom:solid 1px #ddd; overflow:visible; text-decoration:none; color:#333; cursor:pointer;-webkit-transition: all 0.25s ease-in-out; -moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;-ms-transition: all 0.25s ease-in-out; box-sizing:border-box;}" +
        ".dd-options > .dd-option:last-child { border-bottom:none;}" +
        ".dd-option:hover, .dd-option:active, .dd-option:focus{ background:#f3f3f3; color:#000; z-index:2001;}" +
        ".dd-selected-description-truncated { text-overflow: ellipsis; white-space:nowrap; }" +
        ".dd-option-selected { background:#f6f6f6; }" +
        ".dd-option-image, .dd-selected-image { vertical-align:middle; float:left; margin-right:5px; max-width:64px;}" +
        ".dd-image-right { float:right; margin-right:15px; margin-left:5px;}" +
        ".dd-container{ position:relative;} .dd-selected-text { font-weight:bold}</style>";

    //Public methods
    methods.init = function (userOptions) {
        //Preserve the original defaults by passing an empty object as the target
        //The object is used to get global flags like embedCSS.
        var options = $.extend({}, defaults, userOptions);

        //CSS styles are only added once.
        if ($("#css-ddslick").length <= 0 && options.embedCSS) {
            $(ddslickCSS).appendTo("head");
        }

        //Apply on all selected elements
        return this.each(function() {
            //Preserve the original defaults by passing an empty object as the target
            //The object is used to save drop-down"s corresponding settings and data.
            var options = $.extend({}, defaults, userOptions);

            var obj = $(this),
                data = obj.data("ddslick");
            //If the plugin has not been initialized yet
            if (!data) {

                var ddSelect = [];

                //Get data from HTML select options
                obj.find("option").each(function() {
                    var $this = $(this), thisData = $this.data();
                    ddSelect.push({
                        text: $.trim($this.text()),
                        value: $this.val(),
                        selected: $this.is(":selected"),
                        description: thisData.description,
                        imageSrc: thisData.imagesrc //keep it lowercase for HTML5 data-attributes
                    });
                });

                //Update Plugin data merging both HTML select data and JSON data for the dropdown
                if (options.keepJSONItemsOnTop)
                    $.merge(options.data, ddSelect);
                else options.data = $.merge(ddSelect, options.data);

                //Replace HTML select with empty placeholder, keep the original
                var original = obj, placeholder = $("<div>").attr("id", obj.attr("id"));
                obj.replaceWith(placeholder);
                obj = placeholder;

                // Save options
                var settingsId = "ID_" + (new Date()).getTime();
                $(obj).attr("data-settings-id", settingsId);
                settingsMap[settingsId] = {};
                $.extend(settingsMap[settingsId], options);

                //Add classes and append ddSelectHtml & ddOptionsHtml to the container
                obj.addClass("dd-container").append(ddSelectHtml).append(ddOptionsHtml);

                // Inherit name attribute from original element
                obj.find("input.dd-selected-value")
                    .attr("id", $(original).attr("id"))
                    .attr("name", $(original).attr("name"));

                //Get newly created ddOptions and ddSelect to manipulate
                var ddOptions = obj.find(".dd-options");
                ddSelect = obj.find(".dd-select");
                var ddSelected = obj.find(".dd-selected");

                // Add accessibility controls.
                ddSelected.attr("aria-haspopup", "listbox");
                ddSelected.attr("aria-expanded", "false");
                ddSelected.attr("aria-controls", "dd-options-" + settingsId);
                ddOptions.attr("id", "dd-options-" + settingsId);
                ddOptions.attr("role", "listbox");
                ddOptions.attr("tabindex", "-1");
                ddOptions.attr("aria-label", "select options");
                ddOptions.attr("aria-hidden", "true");

                //Set widths
                ddOptions.css({ width: options.width });
                ddSelect.css({ width: options.width, background: options.background });
                obj.css({ width: options.width });

                //Set height
                if (options.height !== null)
                    ddOptions.css({ height: options.height, overflow: "auto" });

                //Add ddOptions to the container. Replace with template engine later.
                $.each(options.data, function (index, item) {
                    if (item.selected) options.defaultSelectedIndex = index;
                    var ddOption = $("<li role='option'>").addClass("dd-option").attr("id", "dd-option-" + settingsId + "-" + index);
                    if(item.value) ddOption.append($("<input>").addClass("dd-option-value").attr("type", "hidden").val(item.value));
                    if(item.imageSrc) ddOption.append($("<img>").attr("src", item.imageSrc).addClass("dd-option-image" + (options.imagePosition === "right" ? " dd-image-right" : "")));
                    if(item.text) ddOption.append($("<label>").addClass("dd-option-text").text(item.text));
                    if(item.description) ddOption.append($("<small>").addClass("dd-option-description dd-desc").text(item.description));
                    ddOptions.append(ddOption);
                });

                // Watch for and handle keypress when popup options list is open.
                ddOptions.keydown(function(event) {
                    var ddOptions = $(this);
                    if (ddOptions.attr("aria-hidden") != "false") {
                        return;
                    }
                    var selectedClass = "dd-option-selected",
                        selectedLi = [],
                        currentLi = $("." + selectedClass, ddOptions);
                    switch(event.key) {

                    // Up or left arrow moves to the previous option.
                    case "ArrowLeft":
                    case "ArrowUp":
                        if (!currentLi.length) {
                            selectedLi = $(".dd-option:first-child");
                            selectedLi.addClass(selectedClass);
                            ddOptions.attr("aria-activedescendant", selectedLi.attr("id"));
                        }
                        else if (!currentLi.is(":first-child")) {
                            selectedLi = currentLi
                                .removeClass(selectedClass)
                                .prev()
                                .addClass(selectedClass);
                            ddOptions.attr("aria-activedescendant", selectedLi.attr("id"));
                        }
                        return false;

                    // Down or right arrow moves to the next option.
                    case "ArrowRight":
                    case "ArrowDown":
                        if (!currentLi.length) {
                            selectedLi = $(".dd-option:first-child");
                            selectedLi.addClass(selectedClass);
                            ddOptions.attr("aria-activedescendant", selectedLi.attr("id"));
                        }
                        else if (!currentLi.is(":last-child")) {
                            selectedLi = currentLi
                                .removeClass(selectedClass)
                                .next()
                                .addClass(selectedClass);
                            ddOptions.attr("aria-activedescendant", selectedLi.attr("id"));
                        }
                        return false;

                    // Enter or spacebar selects the current item and closes the popup.
                    case "Enter":
                    case " ":
                        if (currentLi.length) {
                            selectIndex(obj, currentLi.index(), true);
                        }
                        close(obj);
                        ddSelected.focus();
                        return false;

                    // Escape closes the popup without modifying the selection.
                    case "Escape":
                        close(obj);
                        ddSelected.focus();
                        return false;
                    }

                    // All other keys fall through.
                    return;
                });

                //Save plugin data.
                var pluginData = {
                    settings: options,
                    original: original,
                    selectedIndex: -1,
                    selectedItem: null,
                    selectedData: null
                };

                obj.data("ddslick", pluginData);

                //Check if needs to show the select text, otherwise show selected or default selection
                if (options.selectText.length > 0 && options.defaultSelectedIndex === null) {
                    obj.find(".dd-selected").html(options.selectText);
                }
                else {
                    var index = (options.defaultSelectedIndex != null && options.defaultSelectedIndex >= 0 && options.defaultSelectedIndex < options.data.length)
                                ? options.defaultSelectedIndex
                                : 0;
                    selectIndex(obj, index, false);
                }

                //EVENTS
                //Displaying options
                obj.find(".dd-select").on("click.ddslick", function() {
                    open(obj);
                });

                //Selecting an option
                obj.find(".dd-option").on("click.ddslick", function() {
                    selectIndex(obj, $(this).index(), true);
                });

                // Keyboard navigating away from the widget.
                obj.find(".dd-options").on("focusout.ddslick", function() {
                    setTimeout( function() {
                        if (obj.find(".dd-options").has(document.activeElement).length == 0) {
                            close(obj);
                        }
                    }, 50);
                });

                //Click anywhere to close
                if (options.clickOffToClose) {
                    ddOptions.addClass("dd-click-off-close");
                    obj.on("click.ddslick", function (e) { e.stopPropagation(); });
                    // Close listener needs to be added only once
                    if(!closeListenerInitialized) {
                        closeListenerInitialized = true;
                        $("body").on("click", function () {
                            $(".dd-open").removeClass("dd-open");
                            $(".dd-selected").attr("aria-expanded", "false");
                            $(".dd-click-off-close").slideUp(options.animationTime).attr("aria-hidden", "true").siblings(".dd-select").find(".dd-pointer").removeClass("dd-pointer-up");
                        });
                    }
                }
            }
        });
    };

    //Public method to select an option by its index
    methods.select = function (options) {
        return this.each(function() {
            if (options.index !== undefined)
                selectIndex($(this), options.index);
            if (options.value !== undefined)
                selectValue($(this), options.value);
            if (options.id !== undefined)
                selectValue($(this), options.id);
        });
    };

    //Public method to open drop down
    methods.open = function() {
        return this.each(function() {
            var $this = $(this),
                pluginData = $this.data("ddslick");

            //Check if plugin is initialized
            if (pluginData)
                open($this);
        });
    };

    //Public method to close drop down
    methods.close = function() {
        return this.each(function() {
            var $this = $(this),
                pluginData = $this.data("ddslick");

            //Check if plugin is initialized
            if (pluginData)
                close($this);
        });
    };

    //Public method to destroy. Unbind all events and restore the original Html select/options
    methods.destroy = function() {
        return this.each(function() {
            var $this = $(this),
                pluginData = $this.data("ddslick");

            //Check if already destroyed
            if (pluginData) {
                var originalElement = pluginData.original;
                $this.removeData("ddslick").unbind(".ddslick").replaceWith(originalElement);
            }
        });
    };

    //Private: Select by value
    function selectValue(obj, value) {
        var index = obj.find(".dd-option-value[value= '" + value + "']").parents("li").prevAll().length;
        selectIndex(obj, index);
    }

    //Private: Select index
    function selectIndex(obj, index, callbackOnSelection) {

        //Get plugin data
        var pluginData = obj.data("ddslick");

        //Get required elements
        var ddSelected = obj.find(".dd-selected"),
            ddOptions = obj.find(".dd-options"),
            ddSelectedValue = ddSelected.siblings(".dd-selected-value"),
            selectedOption = obj.find(".dd-option").eq(index),
            settings = pluginData.settings,
            selectedData = pluginData.settings.data[index];

        //Highlight selected option
        obj.find(".dd-option").removeClass("dd-option-selected");
        selectedOption.addClass("dd-option-selected");
        ddOptions.attr("aria-activedescendant", selectedOption.attr("id"));

        //Update or Set plugin data with new selection
        pluginData.selectedIndex = index;
        pluginData.selectedItem = selectedOption;
        pluginData.selectedData = selectedData;

        //If set to display to full html, add html
        if (settings.showSelectedHTML) {
            var ddSelectedData = $("<div>");
            if(selectedData.imageSrc) ddSelectedData.append($("<img>").addClass("dd-selected-image" + (settings.imagePosition === "right" ? " dd-image-right" : "")).attr("src", selectedData.imageSrc));
            if(selectedData.text) ddSelectedData.append($("<label>").addClass("dd-selected-text").text(selectedData.text));
            if(selectedData.description) ddSelectedData.append($("<small>").addClass("dd-selected-description dd-desc" + (settings.truncateDescription ? " dd-selected-description-truncated" : "")).text(selectedData.description));
            ddSelected.html(ddSelectedData.html());
        }
        //Else only display text as selection
        else ddSelected.html(selectedData.text);

        //Updating selected option value
        ddSelectedValue.val(selectedData.value);

        //BONUS! Update the original element attribute with the new selection
        pluginData.original.val(selectedData.value);
        obj.data("ddslick", pluginData);

        //Close options on selection
        close(obj);

        // Re-focus on selected item.
        obj.find(".dd-selected").focus();

        //Adjust appearence for selected option
        adjustSelectedHeight(obj);

        //Callback function on selection
        if (callbackOnSelection && typeof settings.onSelected == "function") {
            settings.onSelected.call(this, pluginData);
        }
    }

    //Private: Close the drop down options
    function open(obj) {

        var $this = obj.find(".dd-select"),
            ddSelected = obj.find(".dd-selected"),
            ddOptions = $this.siblings(".dd-options"),
            ddPointer = $this.find(".dd-pointer"),
            wasOpen = ddOptions.is(":visible"),
            settings = settingsMap[obj.attr("data-settings-id")];

        //Close all open options (multiple plugins) on the page
        $(".dd-click-off-close").not(ddOptions).slideUp(settings.animationTime);
        $(".dd-pointer").removeClass("dd-pointer-up");
        $this.removeClass("dd-open");
        ddSelected.attr("aria-expanded", "false");
        ddOptions.attr("aria-hidden", "true");

        if (wasOpen) {
            ddOptions.slideUp(settings.animationTime);
            ddPointer.removeClass("dd-pointer-up");
            $this.removeClass("dd-open");
            ddSelected.attr("aria-expanded", "false");
            ddOptions.attr("aria-hidden", "true");
        }
        else {
            $this.addClass("dd-open");
            ddOptions.slideDown(settings.animationTime);
            ddPointer.addClass("dd-pointer-up");
            ddSelected.attr("aria-expanded", "true");
            ddOptions.attr("aria-hidden", "false").focus();
        }

        //Fix text height (i.e. display title in center), if there is no description
        adjustOptionsHeight(obj);
    }

    //Private: Close the drop down options
    function close(obj) {
        //Close drop down and adjust pointer direction
        var settings = settingsMap[obj.attr("data-settings-id")];
        obj.find(".dd-select").removeClass("dd-open");
        obj.find(".dd-selected").attr("aria-expanded", "false");
        obj.find(".dd-options").slideUp(settings.animationTime).attr("aria-hidden", "true");
        obj.find(".dd-pointer").removeClass("dd-pointer-up").removeClass("dd-pointer-up");
    }

    //Private: Adjust appearence for selected option (move title to middle), when no desripction
    function adjustSelectedHeight(obj) {

        //Get height of dd-selected
        var lSHeight = obj.find(".dd-select").css("height");

        //Check if there is selected description
        var descriptionSelected = obj.find(".dd-selected-description");
        var imgSelected = obj.find(".dd-selected-image");
        if (descriptionSelected.length <= 0 && imgSelected.length > 0) {
            obj.find(".dd-selected-text").css("lineHeight", lSHeight);
        }
    }

    //Private: Adjust appearence for drop down options (move title to middle), when no desripction
    function adjustOptionsHeight(obj) {
        obj.find(".dd-option").each(function() {
            var $this = $(this);
            var lOHeight = $this.css("height");
            var descriptionOption = $this.find(".dd-option-description");
            var imgOption = obj.find(".dd-option-image");
            if (descriptionOption.length <= 0 && imgOption.length > 0) {
                $this.find(".dd-option-text").css("lineHeight", lOHeight);
            }
        });
    }

}));

counter = function(textarea) {
    var max_words = textarea.data('word-limit');
    var display_area = $(textarea.data('count-display-selector'));

    var value = textarea.val();

    if (value.length == 0) {
        display_area.html(max_words);
        return;
    }

    var regex = /\s+/gi;
    var wordCount = value.trim().replace(regex, ' ').split(' ').length;

    var remaining = max_words - wordCount;

    if(remaining < 0) {
        textarea.closest('.form-group').addClass('has-error');
    } else {
        textarea.closest('.form-group').removeClass('has-error');
    }

    display_area.html(remaining);
};

$(document).ready(function() {
    $('textarea[data-word-limit]').each(function() {
        var textarea = $(this);
        var updater = function() { counter(textarea); }
        textarea.change(updater);
        textarea.keydown(updater);
        textarea.keypress(updater);
        textarea.keyup(updater);
        textarea.blur(updater);
        textarea.focus(updater);
        updater(); // finally trigger on page load
    });
});
(function($) {
	$(document).ready(function() {
		if (document.cookie.indexOf("cookieDismissed=") < 0) {
			$('#mw-cookie-policy').addClass('is-active');

			$('#mw-cookie-policy').find('#mw-cookie-policy-hide').click(function() {
				expiry = new Date();
				expiry.setTime(expiry.getTime()+(30*24*60*60*1000)); // 30 days

				document.cookie = "cookieDismissed=yes; expires=" + expiry.toGMTString();
				$('#mw-cookie-policy').removeClass('is-active');
			});
		}
	});

})(jQuery);
$(function () {
    // Bootstrap carousel -- NOT WORKING
    $('#myImagesCarousel').carousel();

    // public profile photo selection
    $('.public-photo-selection img').click(function () {
        var $parent_li = $(this).closest('li');
        $($parent_li).children('.select').toggle();

        // Switch the checkbox status
        var checkbox = $($parent_li).children('.checkbox');
        checkbox.prop("checked", !checkbox.prop("checked"));
    });

    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });


    // Language selection redirects
    $('#lang-selection').ddslick({
        width: 165,
        imagePosition: "left",
        onSelected: function (data) {
            if(data.selectedData.selected) {
                return; // user selected pre-selected option, do nothing
            }
            location.href = '/' + data.selectedData.value;
        }
    });
    
    // Trigger any ToolTip displays
    $('[data-toggle="tooltip"]').tooltip();
});

//# sourceMappingURL=app.js.map