<?php
    require_once "conexion/Conexion.php";
    $id_paciente=$_POST['id_paciente'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $condiciones=$_POST['condiciones'];
    $conexion = new Conexion;

$consulta = "INSERT INTO citas (id_cita, id_paciente,id_medico, fecha_cita, hora, estatus) VALUES (null,'$id_paciente',1, '$fecha', '$hora',1)";
$sql=$conexion->nonQuery($consulta);
if ($sql=1) {
    $consultaCon ="INSERT INTO condiciones_medicas(id_condiciones, id_paciente,descripcion) VALUES (null,'$id_paciente','$condiciones')";
    $resultado = $conexion->ingresarDatos($consultaCon);
    echo '<script>alert("Cita creada con exito");window.location.href="../index.php?menu=paciente"</script>';
} else {
    echo '<script>alert("Error al intentar crear la cita");window.location.href="../index.php?menu=paciente"</script>';
}
