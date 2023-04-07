$(document).ready(function () {
    h3_detect();
    leave();
});


function leave(){
    $(".popup h5").click(function (e) { 
        $(".popup").fadeOut(300);
    });
}

function h3_detect() {

    let pop = document.getElementById("popup_warning_container");

    if (pop.childElementCount !== 0 ) {
        $(".popup").fadeIn();
    }else{
        $(".popup").hide();
    }

    
}