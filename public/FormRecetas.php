<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
/**/
$to = "al060879@uacam.mx";
$from = "ClinicalMedicals@gmail.com";
$subject = "RecetaTest";

// LLmamos a la biblioteca para la creacion del PDF
require_once('html2pdf/html2pdf.class.php');
ob_start();
    require_once 'vistaImprimir.php';
    $html=ob_get_clean();
// Declaramos el formato del documento PDF
$html2pdf = new HTML2PDF('P', 'A4', 'fr');
$html2pdf->WriteHTML($html);
$message = "<p>Consulte el archivo adjunto.</p>";
$separator = md5(time());
$eol = PHP_EOL;
$filename = "Receta.pdf";
$pdfdoc = $html2pdf->Output('', 'S');
$attachment = chunk_split(base64_encode($pdfdoc));

$headers = "From: " . $from . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;

$body = '';

$body .= "Content-Transfer-Encoding: 7bit" . $eol;
$body .= "This is a MIME encoded message." . $eol; //had one more .$eol


$body .= "--" . $separator . $eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
$body .= $message . $eol;


$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment" . $eol . $eol;
$body .= $attachment . $eol;
$body .= "--" . $separator . "--";

if (mail($to, $subject, $body, $headers)) {

} else {

}
}
?>


<!--Estilos CSS-->
<link href="style_receta.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
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
            <form class="row" action="" method="POST">

                <div class="row">
                    <div class="col s6">
                        <span>Dr. </span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, dicta iste.
                            eligendi sed. Beatae, sapiente ratione?</p>
                        <span>Cedula Professional:</span>
                    </div>

                    <div class="col s6">
                        <label for="date">Fecha de expedición</label>
                        <input type="date" name="fecha" id="date">
                    </div>
                    <div class="col s6">
                        <div class="input-field">
                            <input type="text" name="paciente" id="input_name" class="validate">
                            <label for="input_name">Nombre del paciente:</label>
                        </div>
                    </div>
                </div>

                <div class="row">


                    <div class="col s6">
                        <div class="input-field">
                            <input type="text" name="condiciones" id="input_condicion">
                            <label for="input_condicion">Condiciones medicas:</label>
                        </div>
                    </div>

                    <div class="col s3">
                        <div class="input-field">
                            <input type="text" name="edad" id="input_edad">
                            <label for="input_edad">Edad:</label>
                        </div>

                    </div>
                    <div class="col s3">
                        <div class="input-field">
                            <input type="text" name="temp" id="input_temp">
                            <label for="input_temp">Temperatura:</label>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col s4">
                        <div class="input-field">
                            <input type="text" name="med1" id="input_medicamento01">
                            <label for="input_medicamento01">Medicamento:</label>
                        </div>
                    </div>
                    <div class="col s8">
                        <div class="input-field">
                            <input type="text" name="ind1" id="input_indicacion01">
                            <label for="input_indicacion01">Indicaciones:</label>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col s4">
                        <div class="input-field">
                            <input type="text" name="med2" id="input_medicamento02">
                            <label for="input_medicamento02">Medicamento:</label>
                        </div>
                    </div>
                    <div class="col s8">
                        <div class="input-field">
                            <input type="text" name="ind2" id="input_indicacion02">
                            <label for="input_indicacion02">Indicaciones:</label>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col s12">
                         <button class="btn waves-effect waves-light center" type="submit">Registrar receta</button>
                    </div>

                </div>

            </form>
        </div>

    </div>
</div>