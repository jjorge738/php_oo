<?php
    //Namespaces:Nos ayudan a colocar sub-nombres a nuestros archivos,clases o funciones
    //Es una funcionalidad muy util para las programacion orientado a objetos

    //Crear una funcion de autoload

    spl_autoload_register(function($clase){
        
        $ruta= 'api/'. str_replace('\\','/',$clase).".php";
        if(is_readable($ruta)){
            include_once($ruta);
        }else{
            echo "El archivo no existe.";
        }
    });
    // require_once("api/Models/Persona.php");
    // require_once("api/Controllers/PersonasController.php");

    Models\Persona::Hola();
    Controllers\PersonasController::Hola();
?>