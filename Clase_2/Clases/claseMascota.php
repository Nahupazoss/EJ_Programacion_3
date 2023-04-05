<?php
    namespace animalitos;

    class mascota
    {
        public string $nombre;
        public string $tipo;
        public int $edad;

        public function __construct(string $nombre , string $tipo , int $edad = 0)
        {
            $this->nombre = $nombre;
            $this->tipo = $tipo;
            $this->edad = $edad;
        }

        public function __toString() : string
        {
            return $this->nombre . "-" . $this->tipo . "-" . $this->edad;
        }

        public function mostrar(mascota $mascota) : string
        {
            return $mascota->__toString();
        }

        public function equals(mascota $mascota) : bool
        {
            $respuesta = false;

            if($mascota->nombre === $this->nombre && $mascota->tipo === $this->tipo)
            {
                $respuesta = true;
            }
            return $respuesta;

        }

    }
    
?>