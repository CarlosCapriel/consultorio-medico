<?php
    class homeModel {
        function __construct()
        {
          //  echo "mensaje desde el modelo Home";
        }

        public function getUsuario($params) {
            return "Datos del usuario " . $params;
        }
    }
?>