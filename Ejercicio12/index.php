<?php
    echo("Ejercicio 12<br>");

    echo("<br>1er Lapicera");
    mostrarLapicera($lapicera = crearLapicera("azul","bic","fino",140));
    echo("<br>2da Lapicera");
    mostrarLapicera($lapicera = crearLapicera("negro","pelican","grueso",120));
    echo("<br>3er Lapicera");
    mostrarLapicera($lapicera = crearLapicera("rojo","faber castel","fino",100));

    function crearLapicera($color,$marca,$trazo,$precio)
    {
        $lapicera = array("color","marca","trazo","precio");
        $lapicera["color"] = $color;
        $lapicera["marca"] = $marca;
        $lapicera["trazo"] = $trazo;
        $lapicera["precio"] = $precio;
        return $lapicera;
    }

    function mostrarLapicera($lapicera)
    {
        echo "<br>" . $lapicera["color"]. "<br>";
        echo $lapicera["marca"]. "<br>";
        echo $lapicera["trazo"]. "<br>";
        echo $lapicera["precio"]. "<br>";
    }

?>