<?php

    class Home extends Controllers{
    
        function __construct()
        {
            parent::__construct();
        }

        public function home($params) {
            //invocando a la vista de home
            $this->views->getView($this, "home");
        }
    }
?>