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



$routes = array(
    "home" => array("controller" => "MainController", "method" => "home", "public" => true),
    "login" => array("controller" => "MainController", "method" => "login", "public" => true),
    "register" => array("controller" => "MainController", "method" => "register", "public" => true),
    "logout" => array("controller" => "MainController", "method" => "logout", "public" => false),
    "administrate" => array("controller" => "MainController", "method" => "administrate", "public" => false),
    "chief_control" => array("controller" => "MainController", "method" => "chief_control", "public" => false),
    "my_profile" => array("controller" => "MainController", "method" => "my_profile", "public" => false),
    "member_administration" => array("controller" => "MainController", "method" => "member_administration", "public" => false),
    "active_switch" => array("controller" => "MainController", "method" => "active_switch", "public" => false),
    "change_image" => array("controller" => "MainController", "method" => "change_image", "public" => false),
);

/* PARSEO DE LA RUTA */
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
/* CONTROL DE ACCESO MEDIANTE VARIABLES DE SESIÓN */
if (!$routes[$action]["public"] && !isset($_SESSION['user_id'])) {
    error_message::save_message("Inicia sesión Primero");
    header("Location: index.php");
    die();
}

/* EJECUTAMOS EL CONTROLADOR NECESARIO */

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