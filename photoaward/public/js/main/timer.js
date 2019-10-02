$(window).ready(function () {
    var target_date = new Date(2019,8,22,22,59,59).getTime(); //podac miesiac - 1
    var days, hours, minutes, seconds;
    var $timer = $('#timer');
    var $days = $timer.find('.days .value');
    var $hours = $timer.find('.hours .value');
    var $minutes = $timer.find('.minutes .value');
    var $seconds = $timer.find('.seconds .value');
    var current = $timer.data('current');

    updateCountdown();
    setInterval(function () { updateCountdown(); }, 1000);

    function updateCountdown()
    {
        current = current + 1000;
        // find the amount of "seconds" between now and target
        var current_date = current; //$('#countdown').data('target-date');
        var seconds_left = (target_date - current_date) / 1000;

        // do some time calculations
        days = seconds_left > 0 ? parseInt(seconds_left / 86400) : 0;
        seconds_left =  seconds_left > 0 ? seconds_left % 86400 : 0;

        hours =  seconds_left > 0 ? parseInt(seconds_left / 3600) : 0;
        seconds_left =  seconds_left > 0 ? seconds_left % 3600 : 0;

        minutes =  seconds_left > 0 ? parseInt(seconds_left / 60) : 0;
        seconds =  seconds_left > 0 ? parseInt(seconds_left % 60) : 0;

        $days.text(days);
        $hours.text(hours);
        $minutes.text(minutes);
        $seconds.text(seconds);
    }
});