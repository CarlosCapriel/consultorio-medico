<?php

$email=$_POST['email'];
$contrasenia=$_POST['contrasenia'];
    require_once "conexion/Conexion.php";

    $conexion = new Conexion;

    $consulta="SELECT*FROM login where correo='$email' and contrasenia='$contrasenia'";
        if($sql = $conexion->obtenerDatos($consulta)){
        echo "Usuario validado correctamente";
        session_start();
        //$call = "CALL login ($email, $contraseña)";
        if($sql[0]['id_rol']==1){ //medico
            header("location:./public/medico.php");
        
        }else
        if($sql[0]['id_rol']==2){ //cliente
            $consultaid = "SELECT * FROM pacientes where correo='$email'";
            $sqlid = $conexion->obtenerDatos($consultaid); 
            $_SESSION['id_paciente'] = $sqlid[0]['id_paciente'];
            header("location: ../index.php?menu=paciente");
            return;
        }

        }else{
         echo "Usuario o contraseña incorrectos";
        }
    

?>