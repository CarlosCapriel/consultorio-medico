<?php

$email=$_POST['email'];
$contrasenia=$_POST['contrasenia'];
    require_once "conexion/Conexion.php";

    $conexion = new Conexion;

    $consulta="SELECT*FROM login where correo='$email' and contrasenia='$contrasenia'";
        if($sql = $conexion->obtenerDatos($consulta)){
        session_start();
        if($sql[0]['id_rol']==1){ 
            header("location:./public/medico.php");
        
        }else
        if($sql[0]['id_rol']==2){ 
            $consultaid = "SELECT * FROM pacientes where correo='$email'";
            $sqlid = $conexion->obtenerDatos($consultaid); 
            $_SESSION['id_paciente'] = $sqlid[0]['id_paciente'];
            echo '<script>alert("Sesion iniciada con exito");window.location.href="../index.php?menu=paciente"</script>';
            return;
        }

        }else{
            echo '<script>alert("Error, correo o contraseña incorrectos");window.location.href="../index.php?menu=login"</script>';
        }
    

?>