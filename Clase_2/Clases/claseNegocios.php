<?php
    namespace negocio;

use animalitos\mascota;

    include_once "claseMascota.php";

    class guarderia
    {
        public string $nombre;
        public $mascotas = array();

        public  function __construct($nombre)
        {
            $this->nombre = $nombre;
        }

        public function equals(mascota $mascota) : bool
        {
            $respuesta = false;

            if(in_array($mascota,$this->mascotas))
            {
                $respuesta = true;
            }

            return $respuesta;

        }

        public function add(mascota $mascota) : bool
        {
            if(!in_array($mascota,$this->mascotas))
            {
                array_push($this->mascotas,$mascota);
                return true;
            }
            return false;
        }

        public function __toString() : string
        {
            $cadena = "La guarderia :" . $this->nombre;
            $acumuladorEdad = 0;
            $contadorMascotas = 0;
            $promedioEdad = 0;

            foreach($this->mascotas as $item)
            {
                $cadena =  $cadena .  "Lista de mascotas:". $item->__toString()."<br>";
                $acumuladorEdad += $item->edad;
                $contadorMascotas++;
            }
            $promedioEdad = $acumuladorEdad / $contadorMascotas;
            $cadena = $cadena . " Las mascotas tienen un promedio de edad de: " . $promedioEdad;

            return $cadena; 
        }
    }

?>