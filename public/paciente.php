<!-- Estilos de CSS -->
<link rel="stylesheet" href="public/css/style_paciente.css">

<!-- contenedor -->
<div class="row">

    <div class="col s12 ">
        <h2>Bienvenido |</h2>
        <hr>
    </div>
    <div class="aside col s3 ">
        <!-- Grey navigation panel -->

        <div class="aside-content row ">
            <h5><a href="">Agendar cita</a> </h5>

        </div>
        <div class="aside-content row ">
            <h5><a href="">Condiciones medicas</a></h5>
        </div>
    </div>

    <div class="col s9">
        <!-- Teal page content  -->
        <div class="row">

            <div class="col s2"></div>
            <div class="col s12 m4 l8  blue lighten-5">
                <h4>Agendar cita</h4>

                <div class="row white">
                    <label>Fechas disponibles</label>
                    <select class="browser-default">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="row ">
                    <label>Horarios disponibles</label>
                    <select class="browser-default">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>
                <div class="row">
                    <label>Padece alguna condicion medica</label>
                    <select id="option" class="browser-default">
                        <option value="" disabled selected>Choose your option</option>
                        <option id="1" value="1">si</option>
                        <option id="2" value="0">no</option>
                    </select>
                    <div id="input" class="row">

                    </div>
                </div>

                <div class="row center">
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>
<script src="public/js/paciente_select.js"></script>