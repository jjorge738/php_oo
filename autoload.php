<?php
    // AutoLoad: Se puede definir una funcion que es automaticamente invocada en caso de 
    //que se este intentando utilizar una clase/interfaz que todavia no haya sido declarado
    //al invocar a esta funcion el motor de scripting da oportunidad de cargar la clase antes
    //de que PHP marque un error.
    //La funcion spl_autoload_register(), su funcion autocargar las clases desde una funcion
    //donde intentemos cargar los archivos donde se encuentren las clases.

    function autoload($clase){
        include("clases/".$clase.".php");

    }

    spl_autoload_register('autoload');
    Persona::mostrar('Hola JHG');
    Auto::mostrar('Rojo');

?>