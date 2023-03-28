<?php

    $op1 = 3;
    $op2 = 3;

    echo "1er numero = " . $op1;
    echo "<br>2do numero = " . $op2;
    
    Calcular($op1,"+",$op2);
    Calcular($op1,"-",$op2);
    Calcular($op1,"*",$op2);
    Calcular($op1,"/",$op2);

    function Calcular(int $a, string $operador, int $b)
    {
        switch($operador)
        {
            case '+':
                $resultado = $a + $b;
                break;
            case '-':
                $resultado = $a - $b;
                break;
            case '*':
                $resultado = $a * $b;
                break;
            case '/':
                $resultado = $a / $b;
                break;
        }
    
        echo "<br>Resultado: {$resultado}";
    }
    
?>