<!--Estilos CSS-->
<link href="public/css/style_registro.css" rel="stylesheet" />
<script>
    function soloLetras(e){
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = "áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚBCDEFGHIJKLMNÑOPQRSTUVWXYZ",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
      function soloNum(e){
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = "0123456789.",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }
</script>
<!-- contenido -->
<div class="container">
    <form action="./db/registrar.php" method="POST" class="col s12 | center">

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

                <input id="icon_prefix" type="text" name="nombre" onkeypress="return soloLetras(event)" class="validate" required>
                <label for="icon_prefix">Nombre(s)</label>
            </div>
            <div class="input-field col s6">

                <input id="icon_paterno" type="text" name="apellidoPaterno" onkeypress="return soloLetras(event)" class="validate" required>
                <label for="icon_paterno">Apellido paterno</label>
            </div>
            <div class="input-field col s6">

                <input id="icon_materno" type="text" name="apellidoMaterno" onkeypress="return soloLetras(event)" class="validate" required>
                <label for="icon_materno">Apellido materno</label>
            </div>
            <div class="input-field col s6">
                <label for="icon_date">Fecha de nacimiento</label>
                <input type="text" name="fechaNacimiento" class="datepicker">

            </div>

            <div class="input-field col s6">
                <p>
                    <label class="gender" for="with-gap">Sexo:</label>
                    <label>
                        
                        <input class="with-gap" name="genero" type="radio" value="Fem" checked />
                        <span>F</span>
                    </label>
                    <label>
                        
                        <input class="with-gap" name="genero" type="radio" value="Masc" />
                        <span>M</span>
                    </label>
                </p>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" name="numTelefono" minlength="10" maxlength="10" onkeypress="return soloNum(event)" class="validate" onkeyup="javascript:validarSiNumero(event)" required>
                <label for="icon_telephone">Numero de telefono</label>
            </div>

            <div class="input-field col s4">
                <i class="material-icons prefix">height</i>
                <input id="icon_height" type="text" name="estatura" minlength="4" maxlength="4" onkeypress="return soloNum(event)" class="validate" placeholder="1.70">
                <label for="icon_height">Estatura</label>
            </div>
            <div class="input-field col s4">
                <i class="material-icons prefix">monitor_weight</i>
                <input id="icon_weight" type="text" name="peso" maxlength="3" onkeypress="return soloNum(event)" class="validate" placeholder="kg">
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
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, {
        format : 'yyyy-mm-dd'
    });
  });
</script>