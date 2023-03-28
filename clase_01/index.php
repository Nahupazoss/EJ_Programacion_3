<?php
    echo "Hola mundo PHP!!!<br>";
    echo "Nahuel Pazos<br>Programacion III<br>clase 1";
    echo "<br>= = = compara IDENTICO que coinsida valor y tipo ";
    echo "<br>false 0 y NULL son la misma cosa para php si comparamos con = = <br><br>";
    
    echo $variable = NULL;
    
    if($variable == 0)
    {
        echo "<br>es 0 pero en realidad es un=";
        var_dump($variable);
    }

    if($variable == false)
    {
        echo "<br>es false pero en realidad es un=";
        var_dump($variable);
    }
       
    if($variable == "")
    {
        echo "<br>es ` pero en realidad es un=";
        var_dump($variable);
    }

    if($variable === NULL)
    {
        echo "<br>es NULL pero en realidad es un=";
        var_dump($variable);
    }
     
    /*enum Enumerado{
        case Uno;
        case Dos;
        case Tres;
    }

    $mi_enum = Enumerado::Uno;

    if($mi_enum === Enumerado::Uno)
    {
        echo "Es Enumerado:: UNO IDENTICO";
    }*/
    
    echo "<br>";
    $h = isset($h) ? $h+1 : 0;
    var_dump($h);

    echo "<br>";
    $a = isset($a) ? $h : null;
    var_dump($a);
?>