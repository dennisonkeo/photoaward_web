$(window).on('load', function () {
    var $slider = $('#mainSlider');
    var $items = $('#mainSlider .item');
    var itemsNumber = $items.length;
    var currentItem = 0;
    var duration = 6000;

    var setSliderWeight = function setSliderWeight() {
        var itemsWeight = 0;
        $.each($('#mainSlider .item'), function () {
            itemsWeight = itemsWeight + $(this).width();
        });
        $slider.css('width', itemsWeight + 'px');
    };

    var cloneGroup = function () {
        $slider.append($('#mainSlider .group:first').clone());
    };

    var slideToElement = function sliderResponse(target, callback) {
        var imgsWidth = 0;
        for (i = 0; i < target; i++) {
            imgsWidth += $($('#mainSlider .item')[i]).width();
        }
        $slider.stop(true,false).animate({'left':'-' + imgsWidth + 'px'},1000, callback);
    };

    var slideToNext = function () {
        currentItem += 1;
        slideToElement(currentItem, function() {
            if (currentItem > itemsNumber) {
                $slider.append($('#mainSlider .group:first').clone());
                $('#mainSlider .group:first').remove();
                setSliderWeight();
                currentItem -= itemsNumber;

                var imgsWidth = 0;
                for (i = 0; i < currentItem; i++) {
                    imgsWidth += $($('#mainSlider .item')[i]).width();
                }
                $slider.stop(true,false).css('left', '-' + imgsWidth + 'px');
            }
        });
    };

    var slideToPrev = function () {
        currentItem -= 1;
        if (currentItem < 0) {
            $slider.prepend($('#mainSlider .group:first').clone());
            $('#mainSlider .group:last').remove();
            setSliderWeight();
            currentItem += itemsNumber;
            var imgsWidth = 0;
            for (i = 0; i < currentItem+1; i++) {
                imgsWidth += $($('#mainSlider .item')[i]).width();
            }
            $slider.stop(true,false).css('left', '-' + imgsWidth + 'px');
        }
        slideToElement(currentItem);
    };

    var timingRun = setInterval(function() { slideToNext(); },duration);
    var resetTiming = function resetTiming() {
        clearInterval(timingRun);
        timingRun = setInterval(function() { slideToNext(); },duration);
    };

    cloneGroup();
    setSliderWeight();
    setSliderWeight();
    $('.nav-right a').on('click', function (e) { e.preventDefault(); slideToNext(); resetTiming(); });
    $('.nav-left a').on('click', function (e) { e.preventDefault(); slideToPrev(); resetTiming(); });
});