<!-- Estilos en CSS -->
<link href="public/css/style_login.css" rel="stylesheet" />

<!-- Iniciar sesion -->
<div class="container">
    <div class="row | white">
        <div class="col s2"></div>
        <?php
        $estado_session = session_status();
        if ($estado_session == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['loggedUserName'])) {
            ?>
            <h3>No tiene permisos para entrar a la página. <h3>
            <?php
        } else {
            ?>
            <form action="./db/validar.php" method="POST" class="col s8 | center | z-depth-3 center ">
                <h2>Iniciar Sesión</h2>
                <div class="row | form-row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="Rellene este campo" data-success="campo con datos">Helper text</span>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_password" name ="contrasenia" type="password" class="validate" required>
                        <label for="icon_password">Contraseña</label>
                    </div>
                    <button class="login-btn | btn waves-effect | btn-large" type="submit" name="action">Ingresar
                        <i class="material-icons right">send</i>
                    </button>
                 </div>
            </form>
            <?php
        }?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>