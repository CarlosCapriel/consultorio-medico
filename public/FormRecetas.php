<?php
    $nombre = $_SESSION['nombre']; 
    $idMedico = $_SESSION['id_medico']
?>


<!--Estilos CSS-->
<link href="style_receta.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
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
            <form class="row" action="././db/registrarReceta.php" method="POST">

                <div class="row">
                    <div class="col s6">
                        <span>Dr. <?php echo $nombre?></span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, dicta iste.
                            eligendi sed. Beatae, sapiente ratione?</p>
                        <span>Cedula Professional:</span>
                    </div>
                    <div class="col s6">
                        <div class="input-field">
                            <input type="text" name="correo" id="input_name" class="validate">
                            <label for="input_name">Correo del paciente</label>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light center" name="action" type="submit">Siguiente</button>
                    </div>

            </form>
        </div>

    </div>
</div>
