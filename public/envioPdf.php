<?php

//envio de pdf
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**/
    $to = $_POST['correo'];
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
        header('location: ../index.php?menu=medico');
    } else {
    header('location: ../index.php?menu=medico');
    }
    }
//----------------------------------------
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

        </div>
        <div class="row">
            <form class="row" action="" method="POST">

                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light center" name="action" type="submit">Enviar Pdf</button>
                    </div>

            </form>
        </div>

    </div>
</div>