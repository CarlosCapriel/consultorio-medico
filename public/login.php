<!-- Estilos en CSS -->
<style>
    div.container{
        margin-top: 2rem;
    }
    div.row{
        justify-content: center;
    }
    form{
        padding: 0.5rem;
    }
    div.form-row{
        padding: 1rem 1.5rem 1rem;
       
    }
    button.login-btn{
        background-color: #231f20;
    }
</style>

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