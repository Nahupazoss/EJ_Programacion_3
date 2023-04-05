<?php
    use animalitos\mascota;

    include_once "../Clases/claseMascota.php";
    echo "Ejercicio de pro 1<br>";

    $mascota = new mascota("Keo","JuckRusell",2);
    $mascota2 = new mascota("Keo","JuckRusell",10);

    $mascota->mostrar($mascota);
    echo "<br>";
    echo $mascota2->__toString();

    if($mascota->equals($mascota2))
    {
        echo "Son iguales.<br>";
    }
    else
    {
        echo "SON RE FEOS LCOO";
    }

?>