<?php
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
    define('URL','http://localhost/cursos/php_OO/proyecto/');
    
    require_once('Config/Autoload.php');
    Config\Autoload::Run();
    require_once('Views/template.php');
    Config\Enrutador::Run(new Config\Request());
    //var_dump($_GET['url']);

    // $estudiante = new Models\Estudiante();
    
    // $estudiante->set("id",2);
    // $datos = $estudiante->view();
    // print_r($datos);

    // $datos = array(
    //     "host"=>"127.0.0.1",
    //     "user"=>"root",
    //     "pswd"=>"#12345678",
    //     "db"=>"php_proyecto"
    // );
    // var_dump($datos["host"]);
    // $con = new mysqli($datos["host"],$datos["user"],$datos["pswd"],$datos["db"]);
    
    // if ($con->connect_errno)
    // {
    //     printf("Error al conectar: %s\n", $con->connect_error);
    //     exit();
    // }

?>