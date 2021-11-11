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
</div>
   <!-- <div class="col s9">
       
        <div class="row">

            <div class="col s2"></div>
           
            Form agendar cita
        </div>
    </div>-->







