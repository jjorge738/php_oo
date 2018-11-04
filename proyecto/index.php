<?php
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
    define('URL','http://localhost/cursos/php_OO/proyecto/');
    
    require_once('Config/Autoload.php');
    Config\Autoload::Run();
    require_once('Views/template.php');
    Config\Enrutador::Run(new Config\Request());
    
?>