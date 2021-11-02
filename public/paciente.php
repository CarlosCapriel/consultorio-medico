<?php 
$cadena = $_SESSION['id_paciente'];
$nombre = $_SESSION['nombre'];
?>
<!-- Estilos de CSS -->
<link rel="stylesheet" href="public/css/style_paciente.css">

<!-- contenedor -->
<div class="row">

    <div class="col s12 ">
        <h2>Bienvenido | <?php  echo $nombre?></h2>
        <hr>
    </div>
    <div class="aside col s3 ">
        <!-- Grey navigation panel -->

        <div class="aside-content row ">
            <h5><a href="">Agendar cita</a> </h5>

        </div>
        <div class="aside-content row ">
            <h5><a href="">Condiciones médicas</a></h5>
        </div>
        <div class="aside-content row ">
            <h5><a href="?menu=historialcitas">Historial de citas</a></h5>
        </div>
    </div>

    <div class="col s9">
        <!-- Teal page content  -->
        <div class="row">

            <div class="col s2"></div>
            <div class="col s12 m4 l8  blue lighten-5">
                <h4>Agendar cita</h4>
            <form action="./db/registrarcita.php" method="POST" >
                <div class="row white">
                    <input type="hidden" id ="id"name="id_paciente" value="<?php  echo $cadena?>">
                    <label>Fechas disponibles</label>
                    <input type="text" id ="fecha"name="fecha" class="datepicker" required>
                    <!-- <select class="browser-default" type="date" id="fecha" name="fecha">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1" >2021/10/02</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select> -->
                </div>
                <div class="row ">
                <label>Horarios disponibles</label>
                    <input type="text" id="hora" name="hora" class="timepicker"  required>
                   <!-- <label>Horarios disponibles</label>
                    <select class="browser-default" type="time" id ="hora" name="hora">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="">17:00</option>
                        <option value="">Option 2</option>
                        <option value="">Option 3</option>
                    </select> -->
                </div>
                <div class="row">
                    <label>Padece alguna condición médica</label>
                    <select id="option" class="browser-default">
                        <option value="" disabled selected>Choose your option</option>
                        <option id="1" value="1">si</option>
                        <option id="2" value="0">no</option>
                    </select>
                    <div id="input" class="row">

                    </div>
                </div>

                <div class="row center">
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </form>
            </div>
        </div>

    </div>
</div>
<script src="public/js/paciente_select.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    // Or with jQuery
    /*
    $(document).ready(function () {
        $('.datepicker').datepicker();
    });

    // Or with jQuery
    /*
    $(document).ready(function(){
        $('.timepicker').timepicker();
    });
    */
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, {
            format : 'yyyy-mm-dd'
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.timepicker');
        var instances = M.Timepicker.init(elems, options);
    });
</script>
