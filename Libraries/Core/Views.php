<?php
    class Views {
        // recibe 3 parametros el controlador de la vista, el nombre de la vista
        // y los posibles datos que debe manejar esa vista
        function getView($controller, $view, $data="")
        {
            $controller = get_class($controller);
            if ($controller == "Home") {
                // si es home estara en la carpeta raiz de view entonces ahi se busca
                $view = "Views/".$view.".php";
            } else {
                //cada vista nueva estara en una carpeta
                $view = "Views/".$controller."/".$view.".php";
            }
            require_once($view);
        }
    }
?>