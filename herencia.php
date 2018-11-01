<?php   
    // Herencia: Significa crear nuevas clases de clases ya existentes
    //que tendra todos los metodos y atributos.
    //Dentro de PHP no permite herencia multiple

    class Vehiculo {
        //atributos
        public $motor = false;
        public $marca;
        public $color;

        //Metodos
        public function estado()
        {
            if($this->motor){
                echo "<span>El motor esta encendido.<br></span>";
            }else{
                echo "<span>El motor esta apagado.<br></span>";
            }
        }
        public function encender()
        {
            if($this->motor){
                echo "Advertencia motor ya se encuentra encendido.<br>";
            }else{
                echo "El motor ahora esta encendido.<br>";
                $this->motor=true;
            }
        }

    }
    class Moto extends Vehiculo{

        public function estadoMoto(){
            $this->estado();
        }
    }

    class Cuatrimoto extends Moto{

    };
    // $vehiculo = new Vehiculo();
    // $vehiculo->estado();
    // $vehiculo->encender();
    // $vehiculo->estado();

    $Cuatrimoto = new Cuatrimoto();
    $Cuatrimoto->estado();
?>