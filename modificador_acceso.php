<?php

    // Modificadores de acceso: Estos pueden ser añadidos a nuestros metodos o atributos
    // de nuestra clase, estos nos ayudaran a la extraccion de metodos o atributos
    // PUBLIC: Metodos que puede ser accesible desde cualquier parte de la clase.
    // PRIVATE: Solo puede ser llamado, dentro de la misma clase desde otro metodo.
    // PROTECTED: Solo puede ser accedido por la clase, o subclases.

    class Facebook {
        //Atributos
        public $nombre;
        public $edad;
        private $pass;

        //Metodos
        //Constructor
        public function __construct($nombre,$edad,$pass)
        {   
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
        }
        public function verInformacion()
        {
            echo "Nombre ".$this->nombre."<br/>";
            echo "Edad ".$this->edad."<br/>";
            // Cambiar pass
            self::cambiarPass("1234");
            echo "Password ".$this->pass."<br/>";
        }
        private function cambiarPass($pass)
        {
            $this->pass = $pass;

        }
    }
    $facebook = new Facebook("Jorge J.",30,"15422455");
    $facebook->verInformacion();
    // Intenta cambia pass
    //$facebook->cambiarPass("1234");
    


?>
