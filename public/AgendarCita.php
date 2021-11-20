<?php
$cadena = $_SESSION['id_paciente'];
?>
<div class="col s12 m4 l8 z-depth-2" style="padding: 1rem 2rem 1rem;">
    <h4>Agendar cita</h4>
    <form action="./db/registrarcita.php" method="POST">
        <div class="row white">
            <input type="hidden" id ="id"name="id_paciente" value="<?php  echo $cadena?>">
            <label>Fechas disponibles</label>
            <input type="text" id ="fecha"name="fecha" class="datepicker" required>
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
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
            </button>
        </div>

    </form>
</div>
<script src="public/js/paciente_select.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

