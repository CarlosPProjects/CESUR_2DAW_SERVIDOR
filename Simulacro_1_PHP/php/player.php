<?php
    class Jugador 
    {
        private ?string $nombre;
        private int $dorsal;
        private int $edad;

        public function __construct(?string $nombre, int $dorsal, int $edad)
        {
            $this->nombre = $nombre;
            $this->dorsal = $dorsal;
            $this->edad = $edad;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getDorsal(){
            return $this->dorsal;
        }

        public function getEdad() {
            return $this->edad;
        }

        public function setNombre(?string $nombre) {
            $this->nombre = $nombre;
        }

        public function setDorsal(int $dorsal) {
            $this->dorsal = $dorsal;
        }

        public function setEdad(int $edad) {
            $this->edad = $edad;
        }

        public function mayorDeEdad(int $edad) {
            if($edad >= 18) {
                echo "El jugador es mayor de edad </br>";
            } else {
                echo "El jugador es menor de edad </br>";
            }
        }

        public function mostrarDatos()
        {
            echo <<<END
                El nombre del jugador es: $this->nombre </br>
                El dorsal del jugador es: $this->dorsal </br>
                La edad del jugador es: $this->edad </br>
            END;
        }
    }
    
?>