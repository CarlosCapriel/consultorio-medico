<?php
    require_once ('config/Config.php');
    $url = !empty($_GET['url'])? $_GET['url'] : 'home/home';
    $arrUrl = explode("/", $url);
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if (!empty($arrUrl[1])) // si se pasa algun metodo
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
    
    spl_autoload_register(function($class){
        if (file_exists(LIBS.'Core/' . $class . ".php")) {
            require_once(LIBS.'Core/' . $class .".php");
        }
    });

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