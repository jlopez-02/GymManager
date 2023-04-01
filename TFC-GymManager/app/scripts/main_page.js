$(document).ready(function () {
    let title_delay = 1200;
    animated_title(title_delay);
    
    
    
});

function animated_title(title_delay){
    $(".welcome_sub_title").css("opacity", 0);
    $(".welcome_title").addClass("typing");

    setTimeout( () => {
        $(".welcome_sub_title").css("opacity", 1);
        $(".welcome_sub_title").addClass("typing");
    }, title_delay);
}

