<?php
    class Dado 
    {
        private int $minNumDado;
        private int $maxNumDado;

        public function __construct(int $minNumDado, int $maxNumDado)
        {
            if ($minNumDado >= 0 && $maxNumDado <= 12) {
                $this->minNumDado = $minNumDado;
                $this->maxNumDado = $maxNumDado;
            }
        }

        public function getMinNumDado() {
            return $this->minNumDado;
        }

        public function getMaxNumDado() {
            return $this->maxNumDado;
        }

        public function setMinNumDado(int $minNumDado) {
            $this->maxNumDado = $minNumDado;
        }

        public function setMaxNumDado(int $maxNumDado) {
            $this->maxNumDado = $maxNumDado;
        }

        public function tirarDado() {
            return rand($this->minNumDado, $this->maxNumDado);
        }
    }
    
?>