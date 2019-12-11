$(window).ready(function () {
    $('#mobile-menu').click(function (event) {
        // event.preventDefault();
        $('#menu').fadeToggle();
    });
    $('.show-dropdown-menu').mouseenter(function (event) {
        if (window.innerWidth <= 1000) {
            return;
        }
        // event.preventDefault();
        if (!$('#' + $(this).data('target')).hasClass('active')) {
            $('.dropdown-menu').fadeOut();
        }
        $('.dropdown-menu:not(#' + $(this).data('target') + ')').removeClass('active');

        if ($(this).data('target') === 'info-page-about-competition') {
            var element = $(this);
            var leftPosition = element.position().left - parseInt(element.parents('.page').css('padding-left'), 10) - parseInt(element.parents('.page').offset().left, 10);
            $('#' + $(this).data('target')).find('ul').css('position', 'relative');
            $('#' + $(this).data('target')).find('ul').css('left', leftPosition + 'px');
        }
        $('#' + $(this).data('target')).fadeToggle();
        $('#' + $(this).data('target')).toggleClass('active');
    });

    $('#top').mouseleave(function (event) {
        event.preventDefault();
        $('.dropdown-menu').removeClass('active');
        $('.dropdown-menu').fadeOut();
    });
});