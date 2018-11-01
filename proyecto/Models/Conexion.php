<?php namespace Models;
    class Conexion{
        private $datos = array(
            "host"=>"127.0.0.1",
            "user"=>"root",
            "pswd"=>"#12345678",
            "db"=>"php_proyecto"
        );
        private $con;

        public function __construct(){
            $this->con = new \mysqli($this->datos["host"],$this->datos["user"],$this->datos["pswd"],$this->datos["db"]);
             
        }

        public function ConsultaSimple($sql){
            $this->con->query($sql);
        }

        public function ConsultaRetorno($sql){
            $datos= $this->con->query($sql);
            
            //var_dump($datos->fetch_assoc());

            return $datos;
        }

        
    }
?>