<?php

class MainController {
    function register(){
        require 'app/views/register_form.php';
    }
    
    function home(){
        require 'app/views/main_page.php';
    }
}
