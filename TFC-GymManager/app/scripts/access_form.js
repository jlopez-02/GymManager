$(document).ready(function () {
    toggle_password();
    error_box_toggle();
});


function toggle_password() {
    $("#show_login_password").click(function (e) {
        $("#show_login_password").toggleClass("fa-eye");
        $("#show_login_password").toggleClass("fa-eye-slash");

        let type = $("#login_password_input").attr("type") === "password" ? "text" : "password";
        $("#login_password_input").attr("type", type);
    });
    
    $("#show_register_password").click(function (e) {
        $("#show_register_password").toggleClass("fa-eye");
        $("#show_register_password").toggleClass("fa-eye-slash");

        let type = $("#register_password_input").attr("type") === "password" ? "text" : "password";
        $("#register_password_input").attr("type", type);
    });
    
    $("#show_register_r_password").click(function (e) {
        $("#show_register_r_password").toggleClass("fa-eye");
        $("#show_register_r_password").toggleClass("fa-eye-slash");

        let type = $("#register_r_password_input").attr("type") === "password" ? "text" : "password";
        $("#register_r_password_input").attr("type", type);
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