<?php
    class   Persona {
        //Atributos
        public $nombre = array();
        public $apellido = array();

        //Definicion de Metodos

        //Metodos __construct y __destructor
        //__construct: Al instanciar la clase, este metodo se ejecuta de forma automatica, este
        //metodo debe ser publico y no puede retornar nada.
         
        //__destruct: Se ejecuta de manera automatica pero al final de la clase

        //Metodo para retornar un mensaje
        public function hablar($mensaje){
           echo $mensaje; 
        }
        //Metodo para  Guardar
        public function guardar($nombre,$apellido)
        {
            //Guardar dentro del Array
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }
        //Metodo para Mostrar
        public function mostrar()
        {
            # code...
            $this->hablar("<span>Procesando Clase persona.. :) </span><br>");

            for($i=0;$i< count($this->nombre); $i++){
                //Llamar al metodo de formatear
                self::formatear($this->nombre[$i],$this->apellido[$i]);
            }
        }
        //Metodo para Formatear la lista de Personas
        public function formatear($nombre,$apellido)
        {
            # code...
            echo  "<br>Nombre: ".$nombre." | Apellido: ".$apellido;

        }
    }

    // Invocar Clase Persona
    $persona = new Persona();
    //echo $persona->$nombre;
    $persona->guardar("Jorge","Hernandez");
    $persona->guardar("Jorge","Eli");
    $persona->guardar("Santiago","Yunuen");

    //Mostrar lista de Estudiantes
    $persona->mostrar();
    

?>