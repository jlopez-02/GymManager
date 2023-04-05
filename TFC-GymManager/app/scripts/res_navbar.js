$(document).ready(function () {

    mobile_responsive();
    responsive_menu();

    $(window).resize(function() {
        mobile_responsive();
    });
    
    
    

});



function responsive_menu() {
    $("main").click(function() {
        $("#nav_list").removeClass("open");
        $("#menu-icon i").removeClass("clicked");
    });

    $("#menu-icon").click(function (e) {
        
        $("#nav_list").toggleClass("open");
        $("#menu-icon i").toggleClass("clicked");
    });
}

function mobile_responsive() {
    
    

    if ($(window).width() > 700) {
        $('.app_logo').text('S2Fitness');
    }

    if ($(window).width() <= 700) {
        $('.app_logo').text('S2');
    }

    if ($(window).width() <= 550) {
        $('.app_logo').text('');
    }



}