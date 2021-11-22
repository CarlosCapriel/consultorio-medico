<?php 
$nombre = $_SESSION['nombre'];
$idMedico =$_SESSION['id_medico'];
$correo = $_COOKIE['correo'];
$idPaciente = $_COOKIE['idPaciente'];
$idCita = $_COOKIE['idCita'];
$nombp = $_COOKIE['nombrePaciente'];
$apellp = $_COOKIE['apellido_p'];
$apellm = $_COOKIE['apellido_m'];
$edad = $_COOKIE['fecha_nacimiento'];
$idcondiciones = $_COOKIE['id_condiciones'];
$condiciones = $_COOKIE['condiciones_medicas'];

?>

<!--Estilos CSS-->
<link href="public/css/style_receta.css" rel="stylesheet" />

<div class="container">
    <div class="row z-depth-3 content">
        <div class="row ">
            <div class="col s6  ">
                <h3>Receta medica </h3>
            </div>
            <div class="col s6  ">
                <h4>Consultorio Medico</h4>
            </div>
        </div>
        <div class="row">
            <form class="row" action="././db/registrarRecetaP2.php" method="POST">
                
                <div class="row">
                    <div class="col s6">
                        <span>Dr. <?php echo $nombre?> </span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, dicta iste.
                            eligendi sed. Beatae, sapiente ratione?</p>
                        <span>Cedula Professional:</span>
                    </div>
                    
                    <input type="hidden" id="id_cita" name="id_cita" value="<?php echo $idCita?>">
                    <input type="hidden" id="id_paciente" name="id_paciente" value="<?php echo $idPaciente?>">
                    <input type="hidden" id="id_medico" name="id_medico" value="<?php echo $idMedico?>">
                    <input type="hidden" id="id_condiciones" name="id_condiciones" value="<?php echo $idcondiciones?>">
                    <input type="hidden" id="id_correo" name="correo" value="<?php echo $correo?>">
                    <div class="col s6">
                        <label for="date">Fecha de expedición</label>
                        <input type="date" name="fecha" value="<?php echo date('Y-m-d')?>" id="date">
                    </div>
                    <div class="col s6">
                        <div class="input-field">
                            <input type="text" name="nombre" id="input_name" value= "<?php echo $nombp." ".$apellp." ".$apellm?>" class="validate" readonly>
                            <label for="input_name">Nombre del paciente:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="input-field">
                            <input type="text" name="condiciones" value="<?php echo $condiciones?>" id="input_condicion" readonly>
                            <label for="input_condicion">Condiciones medicas:</label>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="input-field">
                            <input type="text" name="edad" value=<?php echo $edad?> id="input_edad" readonly>
                            <label for="input_edad">Edad:</label>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="input-field">
                            <input type="text" name="temperatura" id="input_temp">
                            <label for="input_temp">Temperatura:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <div class="input-field">
                            <input type="text" name="medicamento01" id="input_medicamento01">
                            <label for="input_medicamento01">Medicamento:</label>
                        </div>
                    </div>
                    <div class="col s8">
                        <div class="input-field">
                            <input type="text" name="indicaciones01" id="input_indicacion01">
                            <label for="input_indicacion01">Indicaciones:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <div class="input-field">
                            <input type="text" name="medicamento02" id="input_medicamento02">
                            <label for="input_medicamento02">Medicamento:</label>
                        </div>
                    </div>
                    <div class="col s8">
                        <div class="input-field">
                            <input type="text" name="indicaciones02" id="input_indicacion02">
                            <label for="input_indicacion02">Indicaciones:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light center" type="action">Registrar receta</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>