<?php
    // INTERFACES: Permiten crer codigo en el cual especificamos que metodos deben de 
    // ser implementados por una clase, son definidas usando la palabra reservada interface 
    //Todos los metodos de una interface, deben de ser declarados como publicos.
    //Para implementar una interface, es necesario usar el operador IMPLEMENTS.

    interface  Auto{
        public function encender();
        public function apagar();
    }

    interface Gasolina extends Auto{
        public function vaciarTanque();
        public function llenarTanque($cantidad);
    }

    class Deportivo implements Gasolina{
        private $estado = false;
        private $tanque = 0;

        public function estado(){
           if($this->estado)
                echo "El auto esta encendido y tiene ".$this->tanque." de litros de gasolina.<br>";
            else
                echo "El Auto esta apagado.<br>";
        }
        public function encender(){
            if($this->estado){
                echo "El auto no puede encenderse 2 veces.<br>";
            }
            else{
                if($this->tanque <= 0){
                    echo  "El Auto no puede encenderse, porque el tanque esta vacio.<br>";
                }else{
                    echo  "<span>Auto encendido</span>.<br>";
                    $this->estado = true;
                }
                
            }
                
        }
        public function apagar(){
            if($this->estado){
                echo "Auto Apagado.<br>";
            }
            else{
                echo "El auto ya esta apagado.<br>";
                //$this->estado = true;
            }
        }

        public function vaciarTanque(){
            $this->tanque= 0;
        }
        public function llenarTanque($cantidad){
            $this->tanque = $cantidad;
        }
        public  function usar($km){
            if($this->estado){

                $reducir = $km / 3;

                $this->tanque = $this->tanque - $reducir;

                 if($this->tanque <= 0){
                    $this->estado = false;
                }



            }else{
                echo "El auto esta apagado y no se puede usar.<br>";
            }
        }
    }
    $objeto = new Deportivo();
    $objeto ->llenarTanque(100);
    $objeto->encender();
    $objeto->usar(300);
    $objeto->estado();



?>