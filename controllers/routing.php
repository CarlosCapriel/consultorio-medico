<?php

/* 
 * 
 */

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "inicio":
        require_once('./public/home.php');
        break;
    case "login":
        require_once('./public/iniciar_sesion.php');
        break;
    case "registrarse":
        require_once('./public/registrarse.php');
        break;
    default:
        require_once('./public/home.php');
}


?>