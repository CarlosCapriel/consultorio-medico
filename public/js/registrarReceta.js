let $input_name = document.getElementById("input_name")
let timeout


//El evento lo puedes reemplazar con keyup, keypress y el tiempo a tu necesidad
$input_name.addEventListener('keydown', () => {
    clearTimeout(timeout)
    timeout = setTimeout(() => {
        var result = "<?php ?>";
        var value = document.getElementById('input_name').value;

        $.post('././db/recetaDatosPrevios.php', { value }, function() { 
            alert(result); 
         });


         
      console.log('Has dejado de escribir en el input')
      clearTimeout(timeout)
    },1000)
  })