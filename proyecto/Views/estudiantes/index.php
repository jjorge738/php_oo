<?php
    
    echo "<span>Vista del index Estudiantes</span>";

    $datos = $estudiantes->index();
    
    while($row = mysqli_fetch_array($datos)){
        var_dump($row);
    };
?>