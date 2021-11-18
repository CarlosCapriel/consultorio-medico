<!--Estilos CSS-->
<style>
#caja1{
    position: absolute;
    float: left;
    width: 450px;
    height: 190px;
    top: 50px;
}
#caja2{
    position: absolute;
    left: 470px;
    width: 350px;
    height: 190px;
    top: 50px;
}    
#fecha{
    height: 50px;
}
#caja3{
    position: absolute;
    width: 810px;
    height: 100px;
    top: 241px;
    }
#condiciones, #edad, #temperatura,#med1, #ind1, #med2, #ind2{
    display: inline;
}    
#condiciones{   
    position: absolute;
    width: 350px;
    height: 100px;


}    
#edad{
    position: absolute;
    left: 455px;
    width:175px;
    height: 100px;

}
#temperatura{
    position: absolute;
    left: 615px;
    width:175px;
    height: 100px;

}
#caja4{
    position: absolute;
    width: 810px;
    height: 70px;
    top: 340px;
    }
#med1{
    position: absolute;
    width: 300px;
    height: 70px;
}  
#ind1{
    position: absolute;
    width: 500px;
    height: 70px;
    left: 310px;
}
#caja5{
    position: absolute;
    width: 810px;
    height: 70px;
    top: 413px;
    }
#med2{
    position: absolute;
    width: 300px;
    height: 70px;
}
#ind2{
    position: absolute;
    width: 500px;
    height: 70px;
    left: 310px;
}
#caja3, #caja4, #caja5{
    border-style: solid;
    border-width: 1px;
    width: 750px;
}
</style>

<div id="caja1">
    <h3>Receta medica </h3>
    <div id="datosDoctor">
        <span>Dr. </span>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, dicta iste.
            eligendi sed. Beatae, sapiente ratione?</p>
        <span>Cedula Professional: HSD45J4J4545000</span>
    </div>
</div>
<div id="caja2">
    <h4>Consultorio Medico</h4>
    <div id="fechaynombre">            
        <div id="fecha">
            <label>Fecha de expedición: <?php  echo $fecha ?></label>              
        </div>            
        <div id="nombre">
            <label >Nombre del paciente:   </label><br>
            <p class="info">
                <?php  echo $_POST['nombre'] ?>
            </p>

        </div>                
    </div>
</div>       
<div id="caja3">   
    <div id="condiciones">
        <label >Condiciones medicas:</label><br>
        <p class="info">
             <?php  echo  $_POST['condiciones']?>
        </p>
    </div>
    
    <div id="edad">
        <label>Edad:</label><br>
        <p class="info">
            <?php  echo $_POST['edad'] ?>
        </p>
    </div>
    <div id="temperatura">
        <label>Temperatura: </label><br>
        <p class="info">
            <?php  echo $_POST['temperatura']?>
        </p>
    </div>
</div>
<div id="caja4">
    <div id="med1">
        <label>Medicamento: </label><br>
        <p class="info">
            <?php  echo $_POST['medicamento01'] ?>
        </p>
    </div>
    <div id="ind1">
        <label>Indicaciones: </label><br>
        <p class="info">
            <?php  echo $_POST['indicaciones01']?>
        </p>
    </div>
</div>
<div id="caja5">
    <div id="med2">
        <label>Medicamento: </label><br>
        <p class="info">
            <?php  echo $_POST['medicamento02']?>
        </p>
    </div>
    <div id="ind2">
        <label>Indicaciones: </label><br>
        <p class="info">
            <?php  echo $_POST['indicaciones02']?>
        </p>
    </div>
</div>