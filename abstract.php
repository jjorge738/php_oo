<?php
    //La clases Abstractas, tienen como objetivo agrupar atributos y metodos, que luego
    //seran heredados por otras subclases
    //Las clases definidas como abtractas no pueden ser instanciadas desde otro objeto y cualquier 
    //clase que contiene al menos un metodo como abtracto debe ser definido como tal.
    //Los metodos, definidos como abtractos simplemente declaran la firma del metodo, pero no pueden 
    //definir la implementacion.

    abstract class Molde{

        abstract public function ingresarNombre($nombre);
        abstract public function obtenerNombre();

        public static function mensaje($mensaje){
            echo $mensaje;
        }
    }

    class Persona extends Molde {
        private $mensaje = "Hola";
        private $nombre = "";
        private $msgComplemento = "Bienvenido a  CodigoFacilito";

        public function mostrar(){
            print $this->mensaje." ".$this->obtenerNombre()." ".$this->msgComplemento;
        }
        public function ingresarNombre($nombre){
            $this->nombre = $nombre;
        }
        public function obtenerNombre(){
            return $this->nombre;
        }
    }
    $persona = new Persona();
    $persona->ingresarNombre("Jorge");
    $persona->mostrar();

    //Molde::mensaje("Hola Mundo...");

?>