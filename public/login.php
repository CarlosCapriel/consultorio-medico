<!-- Estilos en CSS -->
<link href="public/css/style_login.css" rel="stylesheet" />

<div class="container">
    <div class="row | white">
        <div class="col s2"></div>
        <form class="col s8 | center | z-depth-3 center ">
            <h2>Iniciar Sesion</h2>
            <div class="row | form-row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" required>
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_telephone" type="password" class="validate" required>
                    <label for="icon_telephone">Contraseña</label>
                </div>
                <button class="login-btn | btn waves-effect | btn-large" type="submit" name="action">Ingresar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
</div>