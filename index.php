<?php
    $url = !empty($_GET['url'])? $_GET['url'] : 'home/home';
    $arrUrl = explode("/", $url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if (!empty($arrUrl[1])) // si existe algun metodo
    {
        if ($arrUrl[1] != "") 
        {
            $method = $arrUrl[1];
        }
    }
    //si existen los parametros
    if (!empty($arrUrl[2]))
    {
        if ($arrUrl[2] != "") {//recorrer los parametros
            for ($i = 2; $i < count($arrUrl); $i++) {
                $params .= $arrUrl[$i].',' ;
            }
            $params = trim($params, ',');
        }
    }
    echo "<br>";
    echo "controlador: " .$controller .'<br>' .  'metodo: ' . $method . '<br> '.'parametros: ' . $params; 
?>