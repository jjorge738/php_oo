<?php namespace Models;

    class Seccion{
        private $id;
        private $nombre;
        private $con;

        public function __construct(){
            $this->con = New Conexion();
        }
        public function set($atributo,$contenido){
            $this->$atributo = $contenido;
        }
        public function get($atributo){
            return $this->$atributo;
        }

        public function Listar(){
            $sql = "SELECT * FROM secciones";
            $datos = $this->con->ConsultaRetorno($sql);
            return $datos;
        }
        public function Add(){
            $sql = "INSERT INTO secciones (sec_nombre) VALUES('{$this->nombre}')";
            $this->con->ConsultaSimple($sql);
        }

        public function Delete(){
            $sql = "DELETE FROM secciones  WHERE sec_id = '{$this->id}'";
            $this->con->ConsultaSimple($sql);
        }

        public function Edit(){

            $sql = "UPDATE secciones SET sec_nombre = '{$this->nombre}' WHERE sec_id = '{$this->id}'";
            $this->con->ConsultaSimple($sql);
        }

        public function View(){
            $sql = "SELECT sec_id,sec_nombre FROM secciones WHERE sec_id = '{$this->id}'";
            $datos = $this->con->ConsultaRetorno($sql);
            $row = \mysqli_fetch_assoc($datos);
            return $row;
        }

    }
?>