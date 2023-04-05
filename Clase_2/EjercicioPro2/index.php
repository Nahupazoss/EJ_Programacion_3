<?php

    use animalitos\mascota;
    use negocio\guarderia;
    echo "Ejercicio Pro 2 <br>";
    include_once "../Clases/claseNegocios.php";
    include_once "../Clases/claseMascota.php";

    $negocio = new guarderia(" Guarderia de Pancho<br>");
    $mascota = new mascota(" Keo","JuckRussell",2);
    $mascota2 = new mascota(" Bart","Schnowzer",8);
    
    $negocio->add($mascota);
    $negocio->add($mascota2);

    echo $negocio->__toString();
?>