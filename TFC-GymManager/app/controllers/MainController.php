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
            $dni = filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
            
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
            
            if (empty($dni)) {
                error_message::save_message("Indica tu DNI");
                $error = true;
            }
            
            
            
            $USERDAO = new UserDAO(db_connection::connect());
            if ($USERDAO->user_search_by_email($email)) {
                
                error_message::save_message("Este email ya está en uso");
                $error = true;
            }
            
            if ($error == false) {
                
                $password_encrypt = password_hash($password, PASSWORD_BCRYPT); //Password encrypt
                
                $complete_dni = $dni . $this->calculate_dni_letter($dni);
                
                $new_user->setFirst_name($first_name);
                $new_user->setLast_name($last_name);
                $new_user->setUsername($username);
                $new_user->setEmail($email);
                $new_user->setPassword($password_encrypt);
                $new_user->setPhone_number($phone_number);
                $new_user->setGender($gender);
                $new_user->setDate_of_birth($date_of_birth);
                $new_user->setDni($complete_dni);
                $new_user->setRole('user');
                
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
    
    function login(){
        $username = "";
        $password = "";
        
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = filter_var($_POST['login_username'], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST['login_password'], FILTER_SANITIZE_STRING);
            
            $error = false;
            
            $USERDAO = new UserDAO(db_connection::connect());
            
            $login_user = new User();
            $login_user = $USERDAO->user_search_by_username($username);
            
            if(!$login_user){
                error_message::save_message("El usuario es incorrecto");
                $error = true;
            }else if(!password_verify($password, $login_user->getPassword())){
                error_message::save_message("La contraseña no es correcta");
                $error = true;
            }
            
            if($error == false){
                $_SESSION['username'] = $login_user->getUsername();
                $_SESSION['user_id'] = $login_user->getId();
                $_SESSION['session_user'] = serialize($login_user);
                
                $uid = sha1(time() + rand()) . md5(time());
                
                $login_user->setUid($uid);
                $USERDAO->update_uid($login_user);
                
                setcookie("uid", $uid, time()+20*24*60*60);
                
                error_message::save_message("Bienvenido " . $login_user->getUsername());
                
                header("Location: index.php");
                die();
            }
            else{
                require 'app/views/login_form.php';
            }
        }else{
            require 'app/views/login_form.php';
        }
    }
    
    function logout() {
        
        session_destroy();
        setcookie("uid","",0);
        unset($_SESSION['username']); 
        header("Location: index.php");
    }


    function home(){
        require 'app/views/main_page.php';
    }
    
    function administrate(){
        
        if(isset($_GET['subpage'])){
            switch($_GET['subpage']){

                case 'member':
                    
                    $USERDAO = new UserDAO(db_connection::connect());
                    $members = $USERDAO->list_users();
                    
                    $view_admin = 'app/views/member_administration.php';
                    break;
                case 'memberships':
                    $view_admin = 'app/views/memberships.php';
                    break;
                default:
                    $view_admin = 'app/views/member_administration.php';
            }
        }else{
            $USERDAO = new UserDAO(db_connection::connect());
            $members = $USERDAO->list_users();
            $view_admin = 'app/views/member_administration.php';
        }
        
        require 'app/views/administration.php';
    }
    
    function chief_control(){
        require 'app/views/chief_control.php';
    }
    
    function my_profile(){
        require 'app/views/my_profile.php';
    }
    
    


    //SECONDARY FUNCTIONS
    
    function calculate_dni_letter($dni_number) {
        
        $dni_int = intval($dni_number);

        
        $dni_module = $dni_int % 23;

        
        $letters = 'TRWAGMYFPDXBNJZSQVHLCKE';
        
        return $letters[$dni_module];
    }
}
