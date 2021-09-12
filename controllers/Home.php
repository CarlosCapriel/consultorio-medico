<?php

    class Home extends Controllers{
    
        function __construct()
        {
            parent::__construct();
        }

        public function home() {
            $data['page_id'] = 1;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Titulo Pagina";
            $data['page_name'] = "Page Name";
            //invocando a la vista de home
            $this->views->getView($this, "home", $data);
        }
    }
?>