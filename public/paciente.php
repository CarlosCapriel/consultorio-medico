<?php
$cadena = $_SESSION['id_paciente'];
$nombre = $_SESSION['nombre'];
?>

<!-- Estilos de CSS -->
<link rel="stylesheet" href="public/css/style_pcnt.css">

<!-- contenedor -->
<div class="content">
    <section class="black">
        <div class="carousel carousel-slider" data-indicators="true">
            <div class="carousel-fixed-item">
                <div class="container">
                    <h1 class="white-text">Bienvenido
                        <?php echo $nombre?>
                    </h1>

                </div>
            </div>
            <div class="carousel-item slime-item01   white-text" href="#one!">
                <div class="container">
                    <h2>¡Cuidemonos!</h2>
                    <p class="white-text">Desde casa cuidamos de ti.</p>
                </div>
            </div>
            <div class="carousel-item  slime-item02 white-text" href="#two!">
                <div class="container">
                    <h2>¡Protégete y apoya a los demás!</h2>
                    <p class="white-text">Estemos unidos</p>
                </div>
            </div>
            <div class="carousel-item  slime-item01 white-text" href="#three!">
                <div class="container">
                    <h2>#Yo me quedo en casa</h2>
                    <p class="white-text">Cuida a tu familia.</p>
                </div>
            </div>
            <div class="carousel-item  slime-item02  white-text" href="#four!">
                <div class="container">
                    <h2>¡Agenda tu cita desde aquí!</h2>
                    <p class="white-text">Evita convivir con mucha gente</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Gitter Chat Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>
    // CAROUSEL
    $(document).ready(function () {
        $('.carousel').carousel(
            {
                dist: 0,
                padding: 0,
                fullWidth: true,
                indicators: true,
                duration: 50,
            }
        );
    });

    autoplay()
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 3000);
    }
</script>