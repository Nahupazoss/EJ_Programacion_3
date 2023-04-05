<?php

    date_default_timezone_set("America/Argentina/Buenos_Aires");
    echo date("l");
    echo("<br>");
    echo date("M");
    echo("<br>Fecha: ");
    echo date("d-m-y");
    echo("<br>Hora: ");
    echo date("G:");
    echo date("i ");
    echo date("a");
    echo $mes = date("m"); 
    //fecha y hora juntas con am O pm ("d-m-y h:i a")
    echo("<br><br>EJEMPLO:<br>");
    $fechaActual = date("d-m-y h:i a");
    echo $fechaActual;
    echo("<br>");
    echo date("d/m/y h:i a");
    echo("<br>");
    echo date("d.m.y h:i a");
    echo("<br>");
    echo date("D/M/Y h:i a");

    if($mes > 1  && $mes < 3)
    {
        echo "<br>Estacion: Verano";
    }
    else
    {
        if($mes > 4  && $mes < 7)
        {
            echo "<br>Estacion: Otoño";
        }
        else
        {
            if($mes > 7 && $mes < 10)
            {
                echo "<br>Estacion: Invierno";
            }
            else
            {
                echo "<br>Estacion: Primavera";
            }
        }
    }
    
?>