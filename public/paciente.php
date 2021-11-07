<?php 
$cadena = $_SESSION['id_paciente'];
$nombre = $_SESSION['nombre'];
?>


<!-- Estilos de CSS -->
<link rel="stylesheet" href="public/css/style_paciente.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>


<!-- contenedor -->
<div class="row">

    <div class="col s12 ">
        <h2>Bienvenido  <?php  echo $nombre?></h2>
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
            <h5><a href="?menu=historialCitas">Historial de citas</a></h5>
        </div>
    </div>

    <div class="col s9">
        <!-- Teal page content  -->
        <div class="row">

            <div class="col s2"></div>
            <!-- blue lighten-5 -->
            <div class="col s12 m4 l8 z-depth-2" style="padding: 1rem 2rem 1rem;">
                <h4>Agendar cita</h4>
            <form action="./db/registrarcita.php" method="POST">
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
                <input type="time" name="hora" min="08:00" max="15:30" step="1800" required>
                   <!-- <input type="text" id="hora" name="hora" class="timepicker"  required>-->
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
        </div>

    </div>
</div>
<script src="public/js/paciente_select.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--<script>
    // Or with jQuery
    /*
    $(document).ready(function () {
        $('.datepicker').datepicker();
    });

    // Or with jQuery
    */
    $(document).ready(function(){
        $('.timepicker').timepicker();
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, {
            format : 'yyyy-mm-dd'
        });
    });
/*
    $('.timepicker').timepicker({
        onSelect: function (time) {
            console.log(time)
        }
    });*/
</script>-->
<script>
    
     var d = new Date();

    
    $(function(){
        $('#fecha').datepicker({
            format: 'dd/ mm /yyyy',
            disableWeekends: true,
            /*minDate: new Date(currentYear, currentMonth),*/
            minDate:new Date(d.setDate(d.getDate() + 1)),
           /*minDate: new Date(),*/
           
          
        firstDay:1,
           yearRange: [2021,2022],
            i18n:{
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'],
            weekdaysAbbrev: ['D', 'L', 'M', 'M','J','V','S'],
            
            }

        });
    });

</script>







