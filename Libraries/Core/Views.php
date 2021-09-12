<?php
    class Views {
        function getView($controller, $view)
        {
            $controller = get_class($controller);
            if ($controller == "Home") {
                // si es home estara en la carpeta raiz de view entonces ahi se busca
                $view = VIEWS.$view.".php";
            } else {
                //cada vista nueva estara en una carpeta
                $view = VIEWS.$controller."/".$view.".php";
            }
            require_once($view);
        }
    }
?>