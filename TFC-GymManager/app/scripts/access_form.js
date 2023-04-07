$(document).ready(function () {
    error_box_toggle();
    toggle_password();
});


function toggle_password() {
    $("#show_register_password").click(function (e) {
        $("#show_register_password").toggleClass("fa-eye");
        $("#show_register_password").toggleClass("fa-eye-slash");

        let type = $("#register_password").attr("type") === "password" ? "text" : "password";
        $("#register_password").attr("type", type);
    });

    $("#show_register_repeat_password").click(function (e) { 
        $("#show_register_repeat_password").toggleClass("fa-eye");
        $("#show_register_repeat_password").toggleClass("fa-eye-slash");

        let type = $("#register_repeat_password").attr("type") === "password" ? "text" : "password";
        $("#register_repeat_password").attr("type", type);
        
    });

}

function error_box_toggle() {

    
    let container = document.getElementsByClassName("error_container").item(0);

    if (container.childElementCount !== 0 ) {
        $(".error_container_layout").fadeIn();
    }else{
        $(".error_container_layout").hide();
    }

    
}