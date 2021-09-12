<?php

    class Errors extends Controllers{
    
        function __construct()
        {
            parent::__construct();
        }

        public function notFound() {
            //invocando a la vista de error
            $this->views->getView($this, "error");
        }
    }

    $notFound = new Errors();
    $notFound->notFound();        
?>