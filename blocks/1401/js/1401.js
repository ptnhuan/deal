
$(function() {
    if ($(window).width() < 992) {
        $('#nav-top-menu').addClass("collapse");
    }
    else {
       $('#nav-top-menu').removeClass("collapse");
    }
    $(window).resize(function() {
        if ($(window).width() < 992) {
            $('#nav-top-menu').addClass("collapse");
        }
        else {
            $('#nav-top-menu').removeClass("collapse");
        }
    });
}); 

