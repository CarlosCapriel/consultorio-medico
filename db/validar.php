<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="../public/css/style_login.css" rel="stylesheet" />
<?php

$email=$_POST['email'];
$contrasenia=$_POST['contrasenia'];
    require_once "conexion/conexion.php";
    include "../public/login.php";
    $conexion = new Conexion;

    $consulta="SELECT*FROM login where correo='$email' and contrasenia='$contrasenia'";
        if ($sql = $conexion->obtenerDatos($consulta)) {
           session_start();
           /* Si se descomenta esta linea abra un error en pantalla sobre inicio de sesión*/
            $_SESSION['loggedUserName'] = $sql[0]['correo'] ;
            $_SESSION['id_rol'] = $sql[0]['id_rol'];
            if ($sql[0]['id_rol']==1) {
                header("location:../index.php?menu=medico");
            } elseif ($sql[0]['id_rol']==2) {
                $consultaid = "SELECT * FROM pacientes where correo='$email'";
                $sqlid = $conexion->obtenerDatos($consultaid);
                $_SESSION['id_paciente'] = $sqlid[0]['id_paciente'];
                $_SESSION['nombre'] = $sqlid[0]['nombre'];
                echo '<script>
                Swal.fire({
                 icon: "success",
                 title: "Excelente",
                 text: "¡Sesión iniciada con éxito!",
                 showConfirmButton: true,
                 confirmButtonText: "Cerrar"
                 }).then(function(result){
                    if(result.value){                   
                     window.location = "../index.php?menu=paciente";
                    }
                 });
                </script>';
                return ;
            }
        } else {
            echo '<script>
        Swal.fire({
         icon: "error",
         title: "Oops...",
         text: "¡Error, correo y contraseña incorrecta!",
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js" integrity="sha256-jAlCMntTd9fGH88UcgMsYno5+/I0cUCWdSjJ9qHMFRY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       