<<<<<<< HEAD
<?php 
require_once "./db/conexion/conexion.php";
=======
<?php
require_once "./db/conexion/Conexion.php";
>>>>>>> 179e02a07ce73f2a524c11e07471f81e978632bb

    $cadena = $_SESSION['id_paciente'];
    $nombre = $_SESSION['nombre'];
    $conexion = new Conexion;

    $consulta = "SELECT id_cita,fecha_cita,hora,estatus FROM citas where id_paciente = $cadena";
    $sql = $conexion->obtenerDatos($consulta);
?>
<div class="container">
<table class="highlight centered responsive-table" width="700" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
    <tr class="teal darken-4 white-text">
        <td>Cita</td>    
        <td>Fecha</td>
        <td>Hora</td>
        <td>Estatus</td>
    </tr>
    <?php
        for ($i=0; $i < count($sql); $i++) {
            ?>
        <tr>
            <td><?php echo $i+1?></td>
            <td><?php echo $sql[$i]['fecha_cita']; ?></td>
            <td><?php echo $sql[$i]['hora']; ?></td>
            <?php
                if ($sql[$i]['estatus']==1) { ?>
                <td>En espera</td>
            <?php
                } else { ?>
                <td>Finalizada</td>
            <?php
                } ?>
        </tr>

    <?php
        }
    ?>
</table>
</div>

