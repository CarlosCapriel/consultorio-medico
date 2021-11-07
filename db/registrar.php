<?php
    require_once "conexion/conexion.php";

    $conexion = new Conexion;
              
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
   
    $sql = "SELECT correo FROM `login` WHERE correo = '$correo' ";
    $resultado1 = $conexion->obtenerDatos($sql);
    if($resultado1[0]['correo']== $correo){
        echo '<script>alert("Ya existe un usuario con este correo");window.location.href="../index.php?menu=registrarse"</script>';
      
         
    }else{
        
            
        $sql2 ="INSERT INTO `pacientes`(`nombre`, `apellido_p`,`apellido_m`, `fecha_nacimiento`, `genero`, `no_telefono`,`estatura`,`peso`,`correo`) "
        . "VALUES ('$nombre','$apellidoPaterno','$apellidoMaterno','$fechaNacimiento','$genero','$numTelefono','$estatura','$peso','$correo')";
        $resultado2 = $conexion->ingresarDatos($sql2);     
       
        
        $sql3 = "INSERT INTO `login`(`correo`,`contrasenia`,`id_rol`) VALUES ('$correo','$contrasenia','$idrol')";
        $resultado3 = $conexion->ingresarDatos($sql3);
      echo '<script>alert("Registro exitoso");window.location.href="../index.php?menu=inicio"</script>';  
     
    }    
    
   
           
    
    
?>

