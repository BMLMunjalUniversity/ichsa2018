$(document).ready(function() {
    // Dropdown
    // $('.dropdown-button').dropdown({
    //     inDuration: 300,
    //     outDuration: 225,
    //     constrain_width: false, // Does not change width of dropdown to that of the activator
    //     hover: false, // Activate on hover
    //     gutter: 0, // Spacing from edge
    //     belowOrigin: false // Displays dropdown below the button
    // });
    $('.dropdown-button').dropdown({
        hover: true,
        gutter: 0, // Spacing from edge
        belowOrigin: true
    });
});

// sticky navigation bar
if ($('body').has('navbar')) {
    var targetPos = $('#navigation').offset().top;

    $(window).scroll(function() {
        var scrollPos = $(this).scrollTop();
        if (scrollPos > targetPos) {
            $('#navigation').addClass('fixed-nav');
        } else {
            $('#navigation').removeClass('fixed-nav');
        }
    });

    $(window).resize(function() {
        targetPos = $('#navigation').offset().top;
    });
}

// Count Down timer
var deadline = 'February 07 2018 00:00:00 GMT+0530';

function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}
//  var now = new Date();
//  var eventDate = new Date(2018, 02, 07);
//  var deadline = new Date(Date.parse(new Date()) + 304 * 24 * 60 * 60 * 1000);
// initializeClock('clockdiv', deadline);

if (document.cookie && document.cookie.match('myClock')) {
    // get deadline value from cookie
    var deadline = document.cookie.match(/(^|;)myClock=([^;]+)/)[2];
}

// otherwise, set a deadline 10 minutes from now and
// save it in a cookie with that name
else {
    // create deadline 10 minutes from now
    var now = new Date();
    var eventDate = new Date(2018, 01, 07);
    var deadline = new Date(Date.parse(new Date()) + 304 * 24 * 60 * 60 * 1000);
    initializeClock('clockdiv', eventDate);
    // store deadline in cookie for future reference
    document.cookie = 'myClock=' + deadline + '; path=/; domain=.yourdomain.com';
}