<!--Estilos CSS-->


<div class="container">
    <div class="row z-depth-3 content">
        <div class="row ">
            <div class="col s6  ">
                <h3>Receta medica </h3>
            </div>
            <div class="col s6  ">
                <h4>Consultorio Medico</h4>
            </div>
        </div>
        <div class="row">
            <form class="row">

                <div class="row">
                    <div class="col s6">
                        <span>Dr. </span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, dicta iste.
                            eligendi sed. Beatae, sapiente ratione?</p>
                        <span>Cedula Professional: 0000gskj4543j53</span>
                    </div>

                    <div class="col s6">
                        <label for="date">Fecha de expedición: <?php  echo $_POST['fecha'] ?></label>
                        <input type="date" name= id="date">
                    </div>
                    <div class="col s6">
                        <div class="input-field">
                            <input type="text" name="" id="input_name" class="validate">
                            <label for="input_name">Nombre del paciente:  <?php  echo $_POST['paciente'] ?> </label>
                        </div>
                    </div>
                </div>

                <div class="row">


                    <div class="col s6">
                        <div class="input-field">
                            <input type="text" name="" id="input_condicion">
                            <label for="input_condicion">Condiciones medicas:<?php  echo $_POST['condiciones'] ?></label>
                        </div>
                    </div>

                    <div class="col s3">
                        <div class="input-field">
                            <input type="text" name="" id="input_edad">
                            <label for="input_edad">Edad: <?php  echo $_POST['edad'] ?></label>
                        </div>

                    </div>
                    <div class="col s3">
                        <div class="input-field">
                            <input type="text" name="" id="input_temp">
                            <label for="input_temp">Temperatura: <?php  echo $_POST['temp'] ?></label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s4">
                        <div class="input-field">
                            <input type="text" name="" id="input_medicamento01">
                            <label for="input_medicamento01">Medicamento: <?php  echo $_POST['med1'] ?></label>
                        </div>
                    </div>
                    <div class="col s8">
                        <div class="input-field">
                            <input type="text" name="" id="input_indicacion01">
                            <label for="input_indicacion01">Indicaciones: <?php  echo $_POST['ind1'] ?></label>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col s4">
                        <div class="input-field">
                            <input type="text" name="" id="input_medicamento02">
                            <label for="input_medicamento02">Medicamento: <?php  echo $_POST['med2'] ?></label>
                        </div>
                    </div>
                    <div class="col s8">
                        <div class="input-field">
                            <input type="text" name="" id="input_indicacion02">
                            <label for="input_indicacion02">Indicaciones: <?php  echo $_POST['ind2'] ?></label>
                        </div>
                    </div>

                </div>


            </form>
        </div>

    </div>
</div>