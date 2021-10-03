<?php 
    //require_once "conexion/Conexion.php";
    $id_paciente=$_POST['id_paciente'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];


    $conn = mysqli_connect("localhost", "root","","clinicalmedicals");;
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
//INSERT INTO citas(id_cita,fecha_cita,hora, estatus) VALUES (NULL, '$fecha','$hora',1)
$sql = "INSERT INTO citas (id_cita, id_paciente,id_medico, fecha_cita, hora, estatus) VALUES (null,'$id_paciente',1, '$fecha', '$hora',1)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
