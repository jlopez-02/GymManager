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
        $PPLANSDAO = new PayPlanDAO(db_connection::connect());
        $plans = $PPLANSDAO->list_active_payplans();
        
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
                    $PPLANSDAO = new PayPlanDAO(db_connection::connect());
                    $plans = $PPLANSDAO->list_payplans();
                    $view_admin = 'app/views/memberships.php';
                    break;
                case 'new_pplan':
                    $view_admin = $this->new_pplan();
                    break;
                case 'edit_pplan':
                    $pplan_id = filter_var($_GET['plan_id'], FILTER_SANITIZE_NUMBER_INT);
                    $PPLANSDAO = new PayPlanDAO(db_connection::connect());
                    $pplan = $PPLANSDAO->plan_search_by_id($pplan_id);

                    $view_admin = $this->edit_pplan($pplan);
                    break;
                case 'edit_user':
                    $user_id = filter_var($_GET['user_id'], FILTER_SANITIZE_NUMBER_INT);
                    $USERDAO = new UserDAO(db_connection::connect());
                    $user_to_edit = $USERDAO->user_search_by_id($user_id);
                    
                    $view_admin = $this->edit_user($user_to_edit);
                    break;
                default:
                    $USERDAO = new UserDAO(db_connection::connect());
                    $members = $USERDAO->list_users();
                    $view_admin = 'app/views/member_administration.php';
                    break;
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

        $session_user = new User();
        $USERDAO = new UserDAO(db_connection::connect());
        $session_user = $USERDAO->user_search_by_id($_SESSION['user_id']);
        
        if(isset($_GET['subpage'])){
            switch($_GET['subpage']){
                case 'personal_information':
                    $view_admin = 'app/views/personal_information.php';
                    break;
                case 'personal_payments':

                    $view_admin = 'app/views/personal_payments.php';
                    break;
                
                case 'pay_panel':
                    $view_admin = 'app/views/pay_panel.php';
                    break;
                default:
                    $view_admin = 'app/views/personal_information.php';
                    break;
            }
        }else{
            $view_admin = 'app/views/personal_information.php';
        }

        require 'app/views/my_profile.php';
    }
    
    
    //SUB METHODS
    
    function new_pplan(){
        $name = "";
        $price = "";
        $cycle = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $new_plan = new PayPlan();
            $name = filter_var($_POST['plan_name'], FILTER_SANITIZE_STRING);
            $price = filter_var($_POST['plan_price'], FILTER_SANITIZE_NUMBER_FLOAT);
            $cycle = filter_var($_POST['plan_cycle'], FILTER_SANITIZE_NUMBER_INT);

            $error = false;


            if (empty($name)) {
                error_message::save_message("Indica el nombre del plan");
                $error = true;
            }

            if (empty($price)) {
                error_message::save_message("Establece un precio");
                $error = true;
            }

            if (empty($cycle)) {
                error_message::save_message("Establece un ciclo de pago");
                $error = true;
            }


            if ($error == false) {

                $PPLANSDAO = new PayPlanDAO(db_connection::connect());

                $new_plan->setName($name);
                $new_plan->setPrice($price);
                $new_plan->setMonthly_cycle($cycle);

                $PPLANSDAO->create_payplan($new_plan);

                header('Location: index.php?action=administrate&subpage=memberships');
                die();
            }else{
                $view_admin = 'app/views/new_pplan.php';
            }   
        }else{
            $view_admin = 'app/views/new_pplan.php';
        }
        
        return $view_admin;
    }

    function edit_pplan(PayPlan $pplan){
        $PPLANSDAO = new PayPlanDAO(db_connection::connect());
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $name = filter_var($_POST['plan_name'], FILTER_SANITIZE_STRING);
            $price = filter_var($_POST['plan_price'], FILTER_SANITIZE_NUMBER_FLOAT);
            $cycle = filter_var($_POST['plan_cycle'], FILTER_SANITIZE_NUMBER_INT);

            $error = false;


            if (empty($name)) {
                error_message::save_message("Indica el nombre del plan");
                $error = true;
            }

            if (empty($price)) {
                error_message::save_message("Establece un precio");
                $error = true;
            }

            if (empty($cycle)) {
                error_message::save_message("Establece un ciclo de pago");
                $error = true;
            }


            if ($error == false) {

                $pplan->setName($name);
                $pplan->setPrice($price);
                $pplan->setMonthly_cycle($cycle);

                $PPLANSDAO->update_pplan($pplan);

                header('Location: index.php?action=administrate&subpage=memberships');
                die();
            }else{
                $view_admin = 'app/views/edit_pplan.php';
            }
        }else{
            $view_admin = 'app/views/edit_pplan.php';
        }

        return $view_admin;
    }
    
    function edit_user(User $user_to_edit){
        $USERDAO = new UserDAO(db_connection::connect());
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
            $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_STRING);
            $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
            $birthdate = filter_var($_POST['birthdate'], FILTER_SANITIZE_STRING);
            $dni = filter_var($_POST['dni'], FILTER_SANITIZE_STRING);
            $notes = filter_var($_POST['notes'], FILTER_SANITIZE_STRING);
            $error = false;

            
            $complete_dni = $dni . $this->calculate_dni_letter($dni);

            if (empty($first_name)) {
                error_message::save_message("Introduce el nombre");
                $error = true;
            }
            
            if (empty($last_name)) {
                error_message::save_message("Introduce los apellidos");
                $error = true;
            }
            
            if (empty($email)) {
                error_message::save_message("Introduce un email");
                $error = true;
            }
            
            
            if (empty($phone_number)) {
                error_message::save_message("Introduce un número de telefono");
                $error = true;
            }
            
            if (empty($gender)) {
                error_message::save_message("Indica el género");
                $error = true;
            }
            
            if (empty($birthdate)) {
                error_message::save_message("Indica la fecha de nacimiento");
                $error = true;
            }
            
            if (empty($dni)) {
                error_message::save_message("Indica el DNI");
                $error = true;
            }
            
            if ($error == false) {

                $user_to_edit->setFirst_name($first_name);
                $user_to_edit->setLast_name($last_name);
                $user_to_edit->setEmail($email);
                $user_to_edit->setPhone_number($phone_number);
                $user_to_edit->setGender($gender);
                $user_to_edit->setDate_of_birth($birthdate);
                $user_to_edit->setDni($complete_dni);
                $user_to_edit->setNotes($notes);

                $USERDAO->update_user($user_to_edit);

                header('Location: index.php?action=administrate&subpage=member_administration');
                die();
            }else{
                $view_admin = 'app/views/selected_member.php';
            }
        }else{
            $view_admin = 'app/views/selected_member.php';
        }

        return $view_admin;
    }
    
    
    

    //SECONDARY FUNCTIONS
    
    function change_image(){
        
        $user_id = filter_var($_GET['user_id'], FILTER_SANITIZE_NUMBER_INT);
        $USERDAO = new UserDAO(db_connection::connect());
        $user_to_edit = $USERDAO->user_search_by_id($user_id);
        
        //Generamos un nombre aleatorio para la foto
        $random_name = md5(rand());
        //Cogemos la extensión
        $original_name = $_FILES['image']['name'];
        $extension = substr($original_name, strrpos($original_name, '.'));
        $ncrypted_name = $random_name . $extension;

        //y en ese caso volvemos a generar un nombre
        while (file_exists('app/data/user_images/' . $ncrypted_name)) {
            $random_name = md5(rand());
            $ncrypted_name = $random_name . $extension;
        }

        //Movemomoves la foto a la carpeta donde los queramos guardar
        move_uploaded_file($_FILES['image']['tmp_name'],
                'app/data/user_images/' . $ncrypted_name);
        
        $user_to_edit->setImage($ncrypted_name);
        $USERDAO->update_image($user_to_edit);

        header("Location: index.php?action=administrate&subpage=edit_user&user_id=" . $user_id);
    }

    function active_switch() {
        header("Content-type: application/json; charset=utf-8");

        $plan_id = filter_var($_GET['plan_id'], FILTER_SANITIZE_NUMBER_INT);

        $planDAO = new PayPlanDAO(db_connection::connect());
        if (!$payplan = $planDAO->plan_search_by_id($plan_id)) {
            print json_encode(["changed" => false, "message" => "ERROR TRYING TO CHANGE STATE"]);
            die();
        }

        //Borro el mensaje
        if ($planDAO->update_state($payplan)) {
            print json_encode(["changed" => true, "new_state" => $payplan->getActive()]);
        } else {
            print json_encode(["changed" => false]);
        }
    }

    function calculate_dni_letter($dni_number) {
        
        $dni_int = intval($dni_number);

        
        $dni_module = $dni_int % 23;

        
        $letters = 'TRWAGMYFPDXBNJZSQVHLCKE';
        
        return $letters[$dni_module];
    }
}
