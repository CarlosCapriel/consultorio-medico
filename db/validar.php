<?php

$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
    require_once "conexion/Conexion.php";

    $conexion = new Conexion;

    $consulta="SELECT*FROM login where correo='$email' and contrasenia='$contraseña'";
        if($sql = $conexion->obtenerDatos($consulta)){
        echo "Usuario validado correctamente";
        
        $call = "CALL login ($email, $contraseña)";
        if($sql[0]['id_rol']==1){ //medico
            header("location:../public/medico.php");
        
        }else
        if($sql[0]['id_rol']==2){ //cliente
            header("location:../public/cliente.php");
        }

        }else{
         echo "Usuario o contraseña incorrectos";
        }
    

?>