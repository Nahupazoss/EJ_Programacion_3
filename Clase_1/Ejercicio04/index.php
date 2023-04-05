<?php
    $numEntero = 0;
    $acumulador = 0;
    $numeroSumados;

    echo "se fueron acumulando los siguientes numeros:<br>";

    for($numEntero = 0 ; $numEntero < 46 ; $numEntero++)
    {
        $acumulador += $numEntero;
        echo "<br>" . $acumulador . "<br>";

        if($acumulador >= 990 && $acumulador <= 1000) 
        {
            echo  "<br>" . $acumulador;
            break;
        }
        
    }
   
?>