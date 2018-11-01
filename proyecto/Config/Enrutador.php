<?php namespace Config;

    class Enrutador{

        public static function Run(Request $request){
             $controlador = $request->getControlador()."Controller";
             $ruta = ROOT."Controllers".DS.$controlador.".php";
             $metodo = $request->getMetodo();
             $argumento = $request->getArgumento();
            if(is_readable($ruta)){
                require_once $ruta;
                $mostrar = "Controllers\\".$controlador;
                $controlador = new $mostrar;

                if(!isset($metodo)){
                    call_user_func(array($controlador,$metodo));
                }else{
                    call_user_func(array($controlador,$metodo),$argumento);
                }

            }
            //Cargar Vista
            $rutaVista =ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php"; 
            //print($rutaVista);
            // Validar si el archivo se puede leer
            if(is_readable($rutaVista)){
                require_once $rutaVista;
            }else{
                echo "No existe Ruta.";
            }

        }
    }

?>