
$(function() {
    if ($(window).width() < 992) {
        $('#nav-top-menu').addClass("collapse");
        $('.menu').removeClass("navbar-nav");
    }
    else {
       $('#nav-top-menu').removeClass("collapse");
       $('.menu').addClass("navbar-nav");
    }
    $(window).resize(function() {
        if ($(window).width() < 992) {
            $('#nav-top-menu').addClass("collapse");
            $('.menu').removeClass("navbar-nav");
        }
        else {
            $('#nav-top-menu').removeClass("collapse");
            $('.menu').addClass("navbar-nav");
        }
    });
}); 

