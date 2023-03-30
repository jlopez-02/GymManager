$(document).ready(function () {

    responsive_menu();

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