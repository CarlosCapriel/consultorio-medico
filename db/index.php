<?php 
//ejemplo de la conexion
    require_once "clases/conexion/Conexion.php";
    
    $conexion = new Conexion;

    $query = "select * from name_table";

    print_r($conexion->obtenerDatos($query));
?>