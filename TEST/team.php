<?php
    class Team 
    {
        public $name = "Lakers";
        public $position;


        public function __construct()
        {
            $this->name = "Equipo sin nombre";
            $this->position = 0;
        }

        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function mostrarEquipo()
        {
            echo 'Name: '.$this->name;
        }
    }
?>