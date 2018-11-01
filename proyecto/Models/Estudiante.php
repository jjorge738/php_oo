<?php namespace Models;

    class Estudiante{
        private $id;
        private $nombre;
        private $edad;
        private $promedio;
        private $imagen;
        private $id_seccion;
        private $fecha;
        private $con;

        public function __construct(){
            $this->con= new Conexion();
            
        }
        public function set($atributo,$contenido){

            $this->$atributo = $contenido;
            
        }
        public function get($atributo){
            return $this->$atributo;
        }
       
        public function Listar(){
            $sql = "SELECT et.*,sc.sec_nombre AS nombre_seccion FROM estudiantes et
                INNER JOIN secciones sc ON(sc.sec_id = et.id_seccion)";
            $datos = $this->con->ConsultaRetorno($sql);
            return $datos;
        }
        public function add(){
            $sql = "INSERT INTO estudiantes(nombre,edad,promedio,imagen,id_seccion,fecha)
                    VALUES('{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}','{$this->id_seccion}',now())";
            $this->con->ConsultaSimple($sql);
        }
        public function delete(){
            $sql = "DELETE FROM estudiantes WHERE id = {$this->id}";

            $this->con->ConsultaSimple($sql);
        }
        public function edit(){
            $sql = "UPDATE estudiantes SET edad ='{$this->edad}',promedio='{$this->promedio}',imagen='{$this->imagen}',id_seccion='$this->id_seccion' WHERE id = {$this->id}";

            $this->con->ConsultaSimple($sql);
        }
        public function view(){
            $sql =   "SELECT et.*,sc.sec_nombre AS nombre_seccion FROM estudiantes et
                    INNER JOIN secciones sc ON(sc.sec_id = et.id_seccion)
                    WHERE et.id = {$this->id}";
            
            $datos = $this->con->ConsultaRetorno($sql);
            $row = $datos->fetch_assoc();
            return $row;
        }
    }
?>