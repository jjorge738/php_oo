<?php namespace Controllers;

    use Models\Estudiante as Estudiante;

    class estudiantesController{

        private $estudiante;

        public function __construct(){
            $this->estudiante = new Estudiante();

        }
        public function index(){
            //print "Hola soy el Index de Estudiantes";
             $datos = $this->estudiante->Listar();
             return $datos;
        }

    }

    $estudiantes = new estudiantesController();
?>