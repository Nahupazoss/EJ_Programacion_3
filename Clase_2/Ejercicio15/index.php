<?php
    echo "Ejercicio 15 <br>";
    $num = rand(1,4);

    primeras4Potencias($num);

    function primeras4Potencias($num)
    {
       if($num > 0 && $num < 5)
       {
            echo $num . " potencia de 0 = " . pow($num,0) . "<br>";
            echo $num . " potencia de 1 = " .pow($num,1) . "<br>";
            echo $num . " potencia de 2 = " .pow($num,2) . "<br>";
            echo $num . " potencia de 3 = " .pow($num,3) . "<br>";
       }
       else
       {
            echo "Fuera de rango<br>";
       }
    }

?>