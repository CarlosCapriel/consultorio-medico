<?php
    include_once 'conexion/conexion_1.php';
    

    $mysqli = conectadb::dbmysql();


          
    $correo=$_POST['correo']; 
    $contrasenia=$_POST['contrasenia'];
    $nombre=$_POST['nombre'];
    $apellidoPaterno=$_POST['apellidoPaterno'];
    $apellidoMaterno=$_POST['apellidoMaterno'];
    $fechaNacimiento=$_POST['fechaNacimiento'];
    $genero=$_POST['genero'];
    $numTelefono=$_POST['numTelefono'];
    $estatura=$_POST['estatura'];
    $peso=$_POST['peso'];    
    $idrol = "2";
    
    $stmt1 = $mysqli->prepare("SELECT correo FROM `login` WHERE correo = ? ");
    $stmt1->bind_param("s",$correo);
    $stmt1->execute();
    $resultado1 = $stmt1->get_result();
    
    
    if($resultado1 != $correo){
        $stmt2 =$mysqli->prepare ("INSERT INTO `pacientes`(`nombre`, `apellido_p`,`apellido_m`, `fecha_nacimiento`, `genero`, `no_telefono`,`estatura`,`peso`,`correo`) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt2->bind_param("sssssssss",$nombre,$apellidoPaterno,$apellidoMaterno,$fechaNacimiento,$genero,$numTelefono,$estatura,$peso,$correo);
        $stmt2 -> execute();
        $resultado2 = $stmt2->get_result();
        
        $stmt3 =$mysqli->prepare ("INSERT INTO `login`(`correo`,`contrasenia`,`id_rol`) VALUES (?,?,?)");
        $stmt3->bind_param("sss",$correo,$contrasenia,$idrol);
        $stmt3-> execute();
        $resultado3 = $stmt3->get_result();
        
        header("location: ../index.php?menu=paciente");
        
    }else{
        echo "El correo ya esta en uso";
        header("location: ../index.php?menu=registrarse");
    }
           
    
    
?>

