<?php

session_start();

require 'app/controllers/MainController.php';

$routes = array(
    "home" => array("controller" => "MainController", "method" => "home", "public" => true),
    "login" => array("controller" => "MainController", "method" => "login", "public" => true),
    "logout" => array("controller" => "MainController", "method" => "logout", "public" => false),
    "register" => array("controller" => "MainController", "method" => "register", "public" => true),
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

//if (!isset($_SESSION['user_id']) && isset($_COOKIE['uid'])) {
//    //Obtenemos el usuario de la BD
//    $uid = filter_var($_COOKIE['uid'], FILTER_SANITIZE_STRING);
//    $usuarioDAO = new UsuarioDAO(ConexionBD::conectar());
//    $usuario = $usuarioDAO->obtenerPorUid($uid);
//
//    if (!$usuario) {
//        header("Location: index.php");
//    } else {
//        //Iniciamos sesión
//        $_SESSION['email'] = $usuario->getEmail();
//        $_SESSION['user_id'] = $usuario->getId();
//        
//    }
//}
/* CONTROL DE ACCESO MEDIANTE VARIABLES DE SESIÓN */
if (!$routes[$action]["public"] && !isset($_SESSION['user_id'])) {
    error_message::save_message("Login first");
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