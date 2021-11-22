<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="../public/css/style_registro.css" rel="stylesheet" />

<!-- Consulta para registrar usuarios -->
<?php
    require_once "conexion/conexion.php";
    include "../public/registrarse.php";
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
       
        echo '<script>
        Swal.fire({
         icon: "error",
         title: "Oops...",
         text: "¡Ya existe un usuario con este correo!",
         showConfirmButton: true,
         confirmButtonText: "Cerrar"
         }).then(function(result){
            if(result.value){                   
             window.location = "../index.php?menu=registrarse";
            }
        });
        </script>';
         
    }else{
               
        $sql2 ="INSERT INTO `pacientes`(`nombre`, `apellido_p`,`apellido_m`, `fecha_nacimiento`, `genero`, `no_telefono`,`estatura`,`peso`,`correo`) "
        . "VALUES ('$nombre','$apellidoPaterno','$apellidoMaterno','$fechaNacimiento','$genero','$numTelefono','$estatura','$peso','$correo')";
        $resultado2 = $conexion->ingresarDatos($sql2);     
       
        
        $sql3 = "INSERT INTO `login`(`correo`,`contrasenia`,`id_rol`) VALUES ('$correo','$contrasenia','$idrol')";
        $resultado3 = $conexion->ingresarDatos($sql3);
            /* echo '<script>alert("Registro exitoso");window.location.href="../index.php?menu=login"</script>'; */
            echo '<script>
            Swal.fire({
            icon: "success",
            title: "Excelente",
            text: "¡Registro existoso!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if(result.value){                   
                window.location = "../index.php?menu=login";
                }
            });
            </script>';
     
    }    
    
?>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js" integrity="sha256-jAlCMntTd9fGH88UcgMsYno5+/I0cUCWdSjJ9qHMFRY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
