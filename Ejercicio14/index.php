<?php
    echo("Ejercicio 13<br>");
    $vec1 = array("Perro", "Gato", "Ratón", "Araña", "Mosca");
    $vec2 = array("1986", "1996", "2015", "78", "86");
    $vec3 = array("php", "mysql", "html5", "typescript", "ajax");
    
    $indexeado = array($vec1,$vec2,$vec3);
    $asociativo = array("Animales" => $vec1 , "Numeros" => $vec2 , "Lenguajes" => $vec3);

    echo "Arreglo indexeado: <br>";
    var_dump($indexeado);
    echo "<br>Arreglo asociativo: <br>";
    var_dump($asociativo);

?> 