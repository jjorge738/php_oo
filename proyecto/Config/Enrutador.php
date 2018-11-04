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
                //var_dump($controlador);
                
                try{
                    if(!isset($metodo)){
                        //Ejecuta el metodo del controlador
                        $datos = call_user_func(array($controlador,$metodo));
                    }else{
                        //Ejecuta el metodo del controlador
                        $datos = call_user_func(array($controlador,$metodo),$argumento);
                    }
                }catch(Exception $e){
                    var_dump($e);
                }
                

            }
            //Cargar Vista
            $rutaVista =ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php"; 
            //print($rutaVista);
            // Validar si el archivo se puede leer
            if(is_readable($rutaVista)){
                require_once $rutaVista;
                
            }else{
                echo '<h5 class="warning">Error al obtener Vista del documento<hr></h5>';
            }

        }
    }

?>