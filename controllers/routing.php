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
    case "historialCitas":
        require_once('./public/historialcitas.php');
        break;
    case "horariosm":
        require_once('./public/views/FormHorarios.php');
        break;
    case "agendarc":
        require_once('./public/views/AgendarCita.php');
        break;
    case "receta":
        require_once('./public/FormRecetas.php');
        break;
    case "recetaMedica":
        require_once('./public/FormRecetasP2.php');
        break;
    case "pdf":
        require_once('./public/envioPdf.php');
        break;        
    default:
        require_once('./public/home.php');
}