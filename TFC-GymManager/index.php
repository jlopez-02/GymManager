<?php

session_start();

$routes = array(
    "inicio" => array("controller" => "MainController", "method" => "inicio", "publica" => true),
    "login" => array("controller" => "UserController", "method" => "login", "publica" => true),
    "logout" => array("controller" => "UserController", "method" => "logout", "publica" => false),
    "registrar" => array("controller" => "UserController", "method" => "registrar", "publica" => true),
    "comprobar_email" => array("controller" => "UserController", "method" => "comprobar_email", "publica" => true),
    "misanuncios" => array("controller" => "MainController", "method" => "misanuncios", "publica" => false),
    "nuevo_producto" => array("controller" => "MainController", "method" => "nuevo_producto", "publica" => false),
    "editar_producto" => array("controller" => "MainController", "method" => "editar_producto", "publica" => false),
    "borrar_producto" => array("controller" => "MainController", "method" => "borrar_producto", "publica" => false),
    "borrar_foto" => array("controller" => "MainController", "method" => "borrar_foto", "publica" => false),
    "ver_anuncio" => array("controller" => "MainController", "method" => "ver_anuncio", "publica" => true)
);

/* PARSEO DE LA RUTA */
if (!isset($_GET['action'])) {
    $action = 'inicio';
} else {
    if (!isset($map[$_GET['action']])) {
        print "Action Unsupported";
        header('Status: 404 Not Found');
        die();
    } else {
        $action = filter_var($_GET['action'], FILTER_SANITIZE_SPECIAL_CHARS);
    }
}

/* RECORDAR USUARIO CUANDO CIERRE EL NAVEGADOR MEDIANTE COOKIES */
/* Si tiene cookie y no tiene sesión iniciada la iniciaremos */
if (!isset($_SESSION['idUsuario']) && isset($_COOKIE['uid'])) {
    //Obtenemos el usuario de la BD
    $uid = filter_var($_COOKIE['uid'], FILTER_SANITIZE_STRING);
    $usuarioDAO = new UsuarioDAO(ConexionBD::conectar());
    $usuario = $usuarioDAO->obtenerPorUid($uid);

    if (!$usuario) {    //Si no se encuentra el usuario
        //setcookie("uid", "", 0);   //Borramos la cookie
        header("Location: index.php");
    } else {
        //Iniciamos sesión
        $_SESSION['email'] = $usuario->getEmail();
        $_SESSION['idUsuario'] = $usuario->getId();
        $_SESSION['nombre'] = $usuario->getName();
        
        //Renovamos la cookie otra semana
        //setcookie("uid", $uid, time() + 7 * 24 * 60 * 60);
    }
}
/* CONTROL DE ACCESO MEDIANTE VARIABLES DE SESIÓN */
if (!$map[$action]["publica"] && !isset($_SESSION['idUsuario'])) {
    MensajeFlash::guardarMensaje("Debes identificarte");
    header("Location: index.php");
    die();
}

/* EJECUTAMOS EL CONTROLADOR NECESARIO */

$controller = $map[$action]['controller'];
$method = $map[$action]['method'];

if (method_exists($controller, $method)) {
    $obj_controller = new $controller();
    $obj_controller->$method();
} else {
    header('Status: 404 Not Found');
    echo "El método $method del controlador $controller no existe.";
}

?>