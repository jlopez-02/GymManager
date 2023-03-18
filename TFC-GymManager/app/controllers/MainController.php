<?php

class MainController {
    function register(){
        
        $first_name = "";
        $last_name = "";
        $username = "";
        $email = "";
        $password = "";
        $phone_number = "";
        $gender = "";
        $date_of_birth = "";
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $new_user = new User();
            
            $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
            $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
            $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $phone_number = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
            $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
            $date_of_birth = filter_var($_POST['date_of_birth'], FILTER_SANITIZE_STRING);
            
            $error = false;
            
            if (empty($first_name)) {
                error_message::save_message("Introduce tu nombre propio");
                $error = true;
            }
            
            if (empty($last_name)) {
                error_message::save_message("Introduce tus apellidos");
                $error = true;
            }
            
            if (empty($username)) {
                error_message::save_message("Introduce un nombre de usuario");
                $error = true;
            }
            
            if (empty($email)) {
                error_message::save_message("Introduce tu email");
                $error = true;
            }
            
            if (empty($password)) {
                error_message::save_message("Introduce una contraseña");
                $error = true;
            }
            
            if (empty($phone_number)) {
                error_message::save_message("Introduce tu número de telefono");
                $error = true;
            }
            
            if (empty($gender)) {
                error_message::save_message("Indica el género");
                $error = true;
            }
            
            if (empty($date_of_birth)) {
                error_message::save_message("Indica tu fecha de nacimiento");
                $error = true;
            }
            
            $USERDAO = new UserDAO(db_connection::connect());
            if ($USERDAO->user_search_by_email($email)) {
                
                error_message::save_message("Este email ya está en uso");
                $error = true;
            }
            
            if ($error == false) {
                
                $password_encrypt = password_hash($password, PASSWORD_BCRYPT); //Password encrypt
                
                $new_user->setFirstName($first_name);
                $new_user->setLastName($last_name);
                $new_user->setUsername($username);
                $new_user->setEmail($email);
                $new_user->setPassword($password_encrypt);
                $new_user->setPhoneNumber($phone_number);
                $new_user->setGender($gender);
                $new_user->setDateOfBirth($date_of_birth);
                
                $USERDAO->create_user($new_user);
                
                

                header('Location: index.php');
                die();
            }else{
                require 'app/views/register_form.php';
            }
        }else{
            require 'app/views/register_form.php';
        }
    }
    
    function home(){
        require 'app/views/main_page.php';
    }
}
