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
<nav>
    <div class="nav-wrapper | white">
        <a href="?menu=home" class="brand-logo grey-text text-darken-1">Consultorio Medico</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
            <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesion</a></li>
        </ul>
    </div>
</nav>
<?php
} else { ?>
<!-- navegador sin logear -->
<nav>
    <div class="nav-wrapper | white">
        <a href="?menu=home" class="brand-logo grey-text text-darken-1">Consultorio Medico</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
            <li><a href="?menu=login"><i class="material-icons left">login</i>Iniciar sesion</a></li>
            
        </ul>
    </div>
</nav>
<?php 
} ?>
   
