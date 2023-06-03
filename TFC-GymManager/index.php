<?php

session_start();


//UTILITY
require 'app/util/db_conf.php';
require 'app/util/db_connection.php';
require 'app/util/error_message.php';

//CONTROLLERS
require 'app/controllers/MainController.php';

//CLASSES
require 'app/models/User/User.php';
require 'app/models/User/UserDAO.php';
require 'app/models/PayPlan/PayPlan.php';
require 'app/models/PayPlan/PayPlanDAO.php';
require 'app/models/UserPayments/UserPayment.php';
require 'app/models/UserPayments/UserPaymentDAO.php';
require 'app/models/UserAccess/UserAccess.php';
require 'app/models/UserAccess/UserAccessDAO.php';


$routes = array(
    "home" => array("controller" => "MainController", "method" => "home", "public" => true, "admin" => false),
    "login" => array("controller" => "MainController", "method" => "login", "public" => true, "admin" => false),
    "register" => array("controller" => "MainController", "method" => "register", "public" => true, "admin" => false),
    "logout" => array("controller" => "MainController", "method" => "logout", "public" => false, "admin" => false),
    "administrate" => array("controller" => "MainController", "method" => "administrate", "public" => false, "admin" => true),
    "chief_control" => array("controller" => "MainController", "method" => "chief_control", "public" => false, "admin" => true),
    "my_profile" => array("controller" => "MainController", "method" => "my_profile", "public" => false, "admin" => false),
    "member_administration" => array("controller" => "MainController", "method" => "member_administration", "public" => false, "admin" => true),
    "active_switch" => array("controller" => "MainController", "method" => "active_switch", "public" => false, "admin" => true),
    "change_image" => array("controller" => "MainController", "method" => "change_image", "public" => false, "admin" => true),
    "access" => array("controller" => "MainController", "method" => "access", "public" => false, "admin" => false),
    "update_access_status" => array("controller" => "MainController", "method" => "update_access_status", "public" => false, "admin" => false),
);

if (!isset($_GET['action'])) {
    $action = 'home';
} else {
    if (!isset($routes[$_GET['action']])) {
        print "Action Unsupported";
        header('Status: 404 Not Found');
        die();
    } else {
        $action = filter_var($_GET['action'], FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

if (!isset($_SESSION['user_id']) && isset($_COOKIE['uid'])) {
    
    $uid = filter_var($_COOKIE['uid'], FILTER_SANITIZE_STRING);
    $userDAO = new UserDAO(db_connection::connect());
    $user = $userDAO->user_search_by_uid($uid);

    if (!$user) {
        header("Location: index.php");
    } else {

        $_SESSION['email'] = $user->getEmail();
        $_SESSION['user_id'] = $user->getId();
        
    }
}

if (!$routes[$action]["public"] && !isset($_SESSION['user_id'])) {
    error_message::save_message("Inicia sesión Primero");
    header("Location: index.php");
    die();
}else{
    if($routes[$action]["admin"] && $_SESSION['admin'] !== true){
        error_message::save_message("No tienes permisos de administrador");
        header("Location: index.php");
        die();
    }
}

$controller = $routes[$action]['controller'];
$method = $routes[$action]['method'];

if (method_exists($controller, $method)) {
    $obj_controller = new $controller();
    $obj_controller->$method();
} else {
    header('Status: 404 Not Found');
    echo "Method $method from $controller doesn't exist.";
}

?>