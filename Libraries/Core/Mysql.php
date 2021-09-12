<?php 
    class Mysql extends Conexion 
    {
        private $conexion;
        private $strquery;
        private $arrValues;
        
        function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();    
        }

        //insertar un usuario
        public function insert(string $query, array $arrValues)
        {
            $this->strquery = $query;
            $this->arrValues = $arrValues;
            $insert = $this->conexion->prepare($this->strquery);

            $resInsert = $insert->execute($this->arrValues);

            if ($resInsert) {//sí, si inserto el dato entonces obtiene el ultimo id insertado
                $lastInsert = $this->conexion->lastInsertId();
            } else { // si no se almacena el valor de retorno es 0
                $lastInsert = 0;
            }
            return $lastInsert;
        }
    }
?>