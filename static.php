<?php
    // Static: Pertenece a la clase pero no puede accceder a los atributos de una instancia
    //Este metodo se puede llamar sin tener que crear un objeto de dicha clase.
    class  Pagina {
        //Atributos
        public $nombre = "Codigo Facilito";
        public static $url = "www.codigofacilito.com";

        // Metodos

        public function bienvenida(){
            echo "Bienvenidos a ".$this->nombre .", La pagina es ".self::$url;
        }
        public static function bienvenida2()
        {
            # code...
            echo "Bienvenidos a ".$nombre;
        }

    }

    //
    $pagina = new Pagina();
    $pagina->bienvenida2();
?>