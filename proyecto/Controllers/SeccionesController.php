<?php namespace Controllers;
    use Models\Seccion as Seccion;

    class seccionesController{
        private $secciones;

        public function __construct(){
            $this->secciones = new Seccion();
        }
        public function index(){
            $datos = $this->secciones->listar();
            return $datos;
        }
        public function editar($sec_id){
            $this->secciones->$id;
            $dato = $this->secciones->View();
            return $datos;
        }
        public function agregar(){
            if($_POST){
                $this->secciones->set("nombre",$_POST['sec_nombre']);
                $this->secciones->Add();
                header("Location:" . URL."secciones");
            }
        }

    }
?>