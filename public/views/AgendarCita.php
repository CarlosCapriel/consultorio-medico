<?php
$cadena = $_SESSION['id_paciente'];

?>
<!-- Estilos con CSS -->
<link href="public/css/style_agendar.css" rel="stylesheet" />

<!-- Contenido -->
<div class="container">
    <div class="row z-depth-3 content" style="padding: 1em 2rem 1rem;">
        <div class="row">
            <div class="col s12">

                <h4>Agendar cita</h4>
            </div>
        </div>
        <div class="row">
            <form class="row" action="././db/registrarcita.php" method="POST">
                <div class="row">
                    <input type="hidden" id="id" name="id_paciente" value="<?php echo $cadena?>">
                    <label>Fechas disponibles</label>
                    <input type="text" id="fecha" name="fecha" class="datepicker" required>
                </div>
                <div class="row ">
                    <label>Horarios disponibles</label>
                    <input type="time" name="hora" min="08:00" max="15:30" step="1800" required>
                </div>
                <div class="row">
                    <label>Padece alguna condición médica</label>
                    <select id="option" class="browser-default">
                        <option value="" disabled selected>Seleccione una respuesta</option>
                        <option id="1" value="1">si</option>
                        <option id="2" value="0">no</option>
                    </select>
                    <div id="input" class="row">
                    </div>
                </div>

                <div class="row center">
                    <br>
                    <button  class="btn" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="public/js/paciente_select.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="public/js/agendar.js"></script>



