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
        require_once('./public/login.php');
        break;
    case "registrarse":
        require_once('./public/registrarse.php');
        break;
    case "logout":
            $session_destroy = session_destroy();
            header("location: ./index.php?menu=home");
        break;
    case "paciente":
        require_once('./public/paciente.php');
        break;
    case "medico":
    require_once('./public/medico.php');
    break;    
    default:
        require_once('./public/home.php');
}


?>