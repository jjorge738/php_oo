<?php
    //Son fragmentos de codigo que pueden ser reusado en clases, donde pueden tener un poco de 
    //similitud con la clase, las clases pueden usar tantos traits como sea necesario, siempre y cuando
    //sea separado por comas(,)

    trait TraitPersona{
        //Atributos
        public $nombre;

        //Metodos
        public function mostrarNombre(){
            echo $this->nombre;
        }
        abstract public function asignarNombre($nombre);
    }

    class Persona{
        Use TraitPersona;

        public function asignarNombre($nombre){
            $this->nombre = $nombre;
        }
    }
    $persona = new Persona();
    $persona->asignarNombre('Jorge');
    echo $persona->nombre;
    $persona->mostrarNombre();
?>