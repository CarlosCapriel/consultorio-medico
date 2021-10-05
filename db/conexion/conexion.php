<?php 
    class conexion {
        private $server;
        private $user;
        private $password;
        private $database;
        private $port;
        private $conexion;

        function __construct()
        {
            $listadatos = $this->datosConexion();
            foreach ($listadatos as $key => $value){
                $this->server = $value["server"];
                $this->user = $value["user"];
                $this->password = $value["password"];
                $this->database = $value["database"];
                $this->port = $value["port"];
            }
            $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->database, $this->port);
            if ($this->conexion->connect_error) {
                echo "Algo anda mal con la conexion";
                die();
            }
            return $this->conexion;
        }

        private function datosConexion() {
            $direccion = dirname(__FILE__);
            $jsondata = file_get_contents($direccion . "/" . "config");

            return json_decode($jsondata, true);
        }

        private function convertirUTF8($array) {
            array_walk_recursive($array, function(&$item, $key){
                if(!mb_detect_encoding($item, 'utf-8', true)) {
                    $item = utf8_encode($item);
                }
            });
            return $array;
        }

        public function obtenerDatos($query) {
            $results = $this->conexion->query($query);
            $resultArray = array();
            foreach ($results as $key) {
                $resultArray[] = $key;
            }

            return $this->convertirUTF8($resultArray);
        }
        public function ingresarDatos($query) {
            $results = $this->conexion->query($query);
          
        }        
        
        public function nonQuery($query) {
            $results = $this->conexion->query($query);
            return $this->conexion->affected_rows;
        }

        public function nonQueryId($query) {
            $results = $this->conexion->query($query);
            $filas = $this->conexion->affected_rows;
            //cuando guardamos un dato en la BD nos devuelve 1 fila afectada o 2 filas.. etc
            if($filas >= 1) {
                return $this->conexion->insert_id;
            } else {
                return 0;
            }
        }

    }
?>