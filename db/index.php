<?php 
//ejemplo de la conexion
    require_once "conexion/Conexion.php";
    
    $conexion = new Conexion;

    $query = "select * from login";

    print_r($conexion->obtenerDatos($query));
?>