<?php 

require_once "conexion/conexion.php";

$correo=$_POST['correo'];
$conexion = new Conexion;

$consulta ="SELECT * from pacientes where correo= '$correo'";

    if($sql=$conexion->obtenerDatos($consulta)){

        $fecha = time() - strtotime($sql[0]['fecha_nacimiento']);
        $edad = floor($fecha / 31556926);


        $aa = $sql[0]['id_paciente'];
        $fechaHoy = date("Y-m-d");
        $consultaCondiciones = "SELECT * from condiciones_medicas where id_paciente ='$aa' order by id_condiciones DESC";
        $sqlCon =$conexion->obtenerDatos($consultaCondiciones);

        $consultaCita = "SELECT * from citas where id_paciente = '$aa' and fecha_cita = '$fechaHoy'";
        $sqlCita =$conexion->obtenerDatos($consultaCita);

        echo $sqlCita[0]['id_cita'];

        setcookie('correo',$sql[0]['correo'],time()+604800,'/');
        setcookie('idPaciente',$sql[0]['id_paciente'],time()+604800,'/');
        setcookie('idCita',$sqlCita[0]['id_cita'],time()+604800,'/');
        setcookie('nombrePaciente', $sql[0]['nombre'],time()+604800,'/');
        setcookie('apellido_p',$sql[0]['apellido_p'],time()+604800, '/');
        setcookie('apellido_m', $sql[0]['apellido_m'],time()+604800, '/');
        setcookie('fecha_nacimiento', $edad,time()+604800, '/');
        setcookie('id_condiciones', $sqlCon[0]['id_condiciones'] ,time()+604800,'/');
        setcookie('condiciones_medicas', $sqlCon[0]['descripcion'] ,time()+604800,'/');
        header('location: ../index.php?menu=recetaMedica');

    }
?>