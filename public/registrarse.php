<!--Estilos CSS-->
<link href="public/css/style_registro.css" rel="stylesheet" />

<!-- contenido -->
<div class="container">
    <form action="../db/registrar.php" method="POST" class="col s12 | center">

        <div class="row | white | z-depth-3">
            <h2>Ingrese sus datos</h2>

            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email" type="email" name="correo" class="validate" required>
                <label for="email">Email</label>
            </div>


            <div class="input-field col s12">
                <i class="material-icons prefix">password</i>
                <input id="password" type="password" name="contrasenia" class="validate" required>
                <label for="password">Contraseña</label>
            </div>

            <div class="input-field col s12">

                <input id="icon_prefix" type="text" name="nombre" class="validate" required>
                <label for="icon_prefix">Nombre(s)</label>
            </div>
            <div class="input-field col s6">

                <input id="icon_paterno" type="text" name="apellidoPaterno" class="validate" required>
                <label for="icon_paterno">Apellido paterno</label>
            </div>
            <div class="input-field col s6">

                <input id="icon_materno" type="text" name="apellidoMaterno" class="validate" required>
                <label for="icon_materno">Apellido materno</label>
            </div>
            <div class="input-field col s6">
                <label for="icon_date">Fechas disponibles</label>
                <input type="text" name="fechaNacimiento" class="datepicker">

            </div>

            <div class="input-field col s6">
                <p>
                    <label class="gender" for="with-gap">Sexo:</label>
                    <label>
                        <input class="with-gap" name="genero" type="radio" value="femenico" checked />
                        <span>F</span>
                    </label>
                    <label>
                        <input class="with-gap" name="genero" type="radio" value="masculino" />
                        <span>M</span>
                    </label>
                </p>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" name="numTelefono" class="validate" required>
                <label for="icon_telephone">Numero de telefono</label>
            </div>

            <div class="input-field col s4">
                <i class="material-icons prefix">height</i>
                <input id="icon_height" type="text" name="estatura" class="validate" placeholder="cm">
                <label for="icon_height">Estatura</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">monitor_weight</i>
                <input id="icon_weight" type="text" name="peso" class="validate" placeholder="kg">
                <label for="icon_weight">Peso</label>
            </div>
            <div class="input-field col s12 ">
                <button class="btn-register | btn waves-effect waves-light" type="submit" name="action">Registrarse
                    <i class="material-icons right">send</i>
                </button>
            </div>

        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    // Or with jQuery

    $(document).ready(function () {
        $('.datepicker').datepicker();
    });
</script>