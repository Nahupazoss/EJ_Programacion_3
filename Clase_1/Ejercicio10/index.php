<?php
    echo("Ejercicio 10 <br>");

    $vector = [];
    $num = 1;

    while(count($vector) < 10)
    {
        if($num % 2 != 0)
        {
            array_push($vector,$num);
        }
        $num++;
    }

    echo "var_dump: <br>";
    var_dump($vector);

    echo "<br>For:<br>";
    for($i = 0 ; $i < count($vector) ; $i++)
    {
        echo $vector[$i]."<br>";
    }

    echo "Foreach :<br>";
    foreach ($vector as $item ) 
    {
        echo $item . "<br>";
    }

    echo "While :<br>";
    $total = 0;
    while($total < count($vector))
    {
        echo $vector[$total]."<br>";
        $total++;
    }
?>