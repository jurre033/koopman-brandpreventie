(function ($, wp) {
    $(document).ready(function () {

        $(window).scroll(function () {
            if ($(window).scrollTop() > 10) {
                $('.menu').addClass('scrolled');
            } else {
                $('.menu').removeClass('scrolled');
            }
        });

        $(window).scroll(function() {
            if ($(window).scrollTop() > 10) {
                $('#masthead').addClass('floatingNav');
            } else {
                $('#masthead').removeClass('floatingNav');
            }
        });

    });
})(jQuery, wordpress);
