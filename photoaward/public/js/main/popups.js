$(window).ready(function () {
    $('#slider .main-box .close-button a').on('click', function (event) {
        event.preventDefault();
        $('#slider .main-box').fadeOut();
        $('#slider').attr('class', 'container');
    });

    $('#submit-entry').on('click', function (event) {
        event.preventDefault();
        $('#slider .main-box.start').hide();
        $('#slider .main-box.login').fadeIn('slow');
        $('#slider .main-box.login').css('display', 'inline-block');
        $('#slider').removeClass('info');
        $('#slider').addClass('auth');
    });
});