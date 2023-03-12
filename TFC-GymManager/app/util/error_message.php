<?php

class error_message {
    
    static function save_message($message) {
        $_SESSION['error_message'][] = $message;
    }
    
    static function show_message() {
        if (isset($_SESSION['error_message'])) {
            foreach ($_SESSION['error_message'] as $message)
            {
                print '<h3 class="error_message">' . $message . '</h3>';
            }
            unset($_SESSION['error_message']);
        }
    }
    
}
