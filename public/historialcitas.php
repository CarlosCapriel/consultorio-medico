<!-- Estilos en CSS -->
<style>
    table{
        margin: 1.5rem 0 1.5rem;
    }
    tr.titulo{
        font-weight: bold;
        font-family: 'Helvetica', sans-serif;
    }
</style>
<?php
require_once "./db/conexion/conexion.php";
    $cadena = $_SESSION['id_paciente'];
    $nombre = $_SESSION['nombre'];
    $conexion = new Conexion;

    $consulta = "SELECT id_cita,fecha_cita,hora,estatus FROM citas where id_paciente = $cadena";
    $sql = $conexion->obtenerDatos($consulta);
?>
<div class="container">
    <table class="highlight centered responsive-table" width="700" cellpadding="2" cellspacing="0"
        bordercolor="#CCCCCC">
        <tr class="teal darken-4 white-text titulo">
            <td>Cita</td>
            <td>Fecha</td>
            <td>Hora</td>
            <td>Estatus</td>
        </tr>
        <?php
            for ($i=0; $i < count($sql); $i++) {
                ?>
        <tr>
            <td>
                <?php echo $i+1?>
            </td>
            <td>
                <?php echo $sql[$i]['fecha_cita']; ?>
            </td>
            <td>
                <?php echo $sql[$i]['hora']; ?>
            </td>
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

