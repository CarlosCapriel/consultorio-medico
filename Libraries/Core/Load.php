<?php
    //va a el Load
    $controllerFile = "Controllers/". $controller . ".php";
    if (file_exists($controllerFile))
    {
        require_once($controllerFile);
        
        $controller = new $controller();
        
        if (method_exists($controller, $method)) {
            //echo $params;
            $controller -> {$method}($params);
        } else {
            //mandando a llamar la pagina de error desde el controlador **Aqui no existe el metodo
            require_once("Controllers/Error.php");    
        }
    } else {
        //mandando a llamar la pagina de error desde el controlador **Aqui no existe el controlador
        require_once("Controllers/Error.php");
    }
?>