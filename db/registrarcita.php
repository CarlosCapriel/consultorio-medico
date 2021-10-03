<?php 
    require_once "conexion/Conexion.php";
    $id_paciente=$_POST['id_paciente'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $conexion = new Conexion;

$consulta = "INSERT INTO citas (id_cita, id_paciente,id_medico, fecha_cita, hora, estatus) VALUES (null,'$id_paciente',1, '$fecha', '$hora',1)";
$sql=$conexion->nonQuery($consulta);
if($sql=1){
      echo "New record created successfully";
} else {
      echo "Error:";
}
?>
