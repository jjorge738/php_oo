<?php namespace Config;

    class Autoload{

        public  static function Run(){
           // var_dump($class);

            spl_autoload_register(function($class){
                $ruta = str_replace("\\","/",$class).".php";
                //print $ruta;
                include($ruta);
            });
        }
    }

?>