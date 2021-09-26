<?php
    require_once "conexion/Conexion.php";

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
  
    $sql = "CALL insertarPaciente ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$fechaNacimiento', '$genero', '$numTelefono', '$estatura', '$peso', '$correo','$contrasenia')";
    
    $ejecutar = mysqli_query($conexion, $sql) ;
    
    
    
?>

