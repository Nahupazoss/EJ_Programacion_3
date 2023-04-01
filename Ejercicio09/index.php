<?php
    echo $num1 = rand(1,10) ;
    echo "<br>";
    echo $num2 = rand(1,10);
    echo "<br>";
    echo $num3 = rand(1,10);
    echo "<br>";
    echo $num4 = rand(1,10);
    echo "<br>";
    echo $num5= rand(1,10);
    echo "<br>";
    $promedio = 0;

    $suma = $num1 + $num2 + $num3 + $num4 + $num5;
    $promedio = $suma / 5;

    echo "Tu nota promedio es: " .$promedio;

    if($promedio >= 6)
    {
        echo "<br>Tenes promocion";
    }
    else
    {
        echo "<br>No tenes promocion";
    }


?>