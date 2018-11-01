<?php
    class Loteria{
        //Atributos
        public $numero;
        public $intentos;
        public $resultado = false;

        //Metodos __construct y __destructor
        //__construct: Al instanciar la clase, este metodo se ejecuta de forma automatica, este
        //metodo debe ser publico y no puede retornar nada.
         
        //__destruct: Se ejecuta de manera automatica pero al final de la clase
        
        //Metodos
        public function __construct($numero,$intentos)
        {
            $this->numero = $numero;
            $this->intentos = $intentos;
            

        }

        public function sortear()
        {   
            # code...
            $minimo = $this->numero / 2;
            $maximo = $this->numero * 2;
            
            for ($i=0; $i < $this->intentos; $i++) { 
                $int = rand($minimo,$maximo);
                self::intentos($int);
            }
        }
        public function intentos($int)
        {
            # code...
            if($int == $this->numero){
                echo "<span><b>".$int." == ".$this->numero."</b></span><br>";
                $this->resultado = true;
            }else{
                echo "<span>".$int." != ".$this->numero."</span><br>";
            }
        }
        public function __destruct()
        {
            # code...
            if($this->resultado){
                echo "Felicidades haz acertado en " .$this->intentos." Intentos.";
            }else{
                echo "Felicidades haz perdido en " .$this->intentos." Intentos.";
            }
        }
    }
    $loteria = new Loteria(10,10);
    $loteria->sortear();

?>