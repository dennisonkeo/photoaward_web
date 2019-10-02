$(function () {
    $('#refresh-code').on('click', function (event) {
        event.preventDefault();
        $('#code-image').attr('src', '/assets/registration-code/?' + (Math.random().toString(36).substr(2)) + (Math.random().toString(36).substr(2)));
    });
});
