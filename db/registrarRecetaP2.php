<?php 

require_once "conexion/conexion.php";

$idCita= $_POST['id_cita'];
$idPaciente = $_POST['id_paciente'];
$idMedico = $_POST['id_medico'];
$idCondiciones = $_POST['id_condiciones'];
$fecha = $_POST['fecha'];
$nombreP = $_POST['nombre'];
$condciones = $_POST['condiciones'];
$edad = $_POST['edad'];
$temperatura = $_POST['temperatura'];
$medicamentoUno = $_POST['medicamento01'];
$indicacionesUno = $_POST['indicaciones01'];
$medicamentoDos = $_POST['medicamento02'];
$indicacionesDos = $_POST['indicaciones02'];

include "../public/envioPdf.php";

$conexion = new Conexion;
$consulta = "INSERT INTO receta_medica(id_receta,id_cita,id_paciente,id_medico,id_condiciones,edad,temperatura) 
VALUES (NULL,'$idCita','$idPaciente','$idMedico',$idCondiciones,'$edad','$temperatura')";

$sql=$conexion->nonQuery($consulta);
if($sql=1){
    echo "exito";
    $consultaMedicinas="INSERT INTO medicamento(id_medicamento, id_receta, nombre_m, indicaciones)
    VALUES (NULL, 1, '$medicamentoUno', '$indicacionesUno'),(NULL,1,'$medicamentoDos','$indicacionesDos')";
        $sqlMed = $conexion->nonQuery($consultaMedicinas);
        if($sqlMed=1){
            echo "se creo con exito la receta";
            //desmarcar este codigo cuando ya se compruebe que los datos de la receta se graban en la base de datos
            /*         
            header('location: ../index.php?menu=pdf');  */
        }else{
            echo "no se pudo crear la receta";
        }
}else{
    echo "Ocurrio un error al insertar los datos";
}

?>