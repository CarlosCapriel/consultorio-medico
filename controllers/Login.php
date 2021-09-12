<?php
    class Login extends Controllers {
        function __construct()
        {
            parent::__construct();
        }

        public function login()
        {
            $this->views->getView($this, "login");
        }
    }

    $loadLogin = new Login(); // el metodo que recarga la vista debe ser llamada igual
    $loadLogin->login(); //a el controlador pero con letra minuscula
?>