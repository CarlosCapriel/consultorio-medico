<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/style_nav.css">

<?php
$estado_session = session_status();
if($estado_session == PHP_SESSION_NONE)
{
session_start();
}
if (isset($_SESSION['loggedUserName'])) {
?>
<!-- Navegador logeado-->
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper | white">
        <a href="?menu=home" class="brand-logo grey-text text-darken-1">Consultorio Medico</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
            <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesion</a></li>
        </ul>
    </div>
</nav>
</div>
<?php
} else { ?>
<!-- navegador sin logear -->
<nav>
    <div class="nav-wrapper | white">
        <a href="?menu=home" class="brand-logo grey-text text-darken-1">Consultorio Medico</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
            <li><a href="?menu=login"><i class="material-icons left">login</i>Iniciar sesion</a></li>
            
        </ul>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </div>
</nav>
<?php 
} ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>