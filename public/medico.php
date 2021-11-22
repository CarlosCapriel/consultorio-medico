<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/style_mdc.css">
<?php 
    $nombre = $_SESSION['nombre']; 
?>

<div class="row welcome">

    <h1>Doctor <?php echo $nombre?> bienvenido a su panel de control</h1>
</div>
<!-- Vista inicial al logearse como medico - Rutea a Crear la recetas Medica -->
<?php include 'public/FormRecetas.php' ?>