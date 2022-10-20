<?php

    class Vehiculo {
        public $matricula;
        public $marca;
        public $modelo;
        public $color;
        public $revisado;

        function __construct($matricula, $marca, $modelo, $color, $revisado){
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
            $this->revisado = $revisado;
        }
        
        function get_matricula() {
            return $this->matricula;
        }

        function set_matricula($matricula) {
            $this->matricula = $matricula;
        }

        function get_marca() {
            return $this->marca;
        }

        function set_marca($marca) {
            $this->marca = $marca;
        }

        function get_modelo() {
            return $this->modelo;
        }

        function set_modelo($modelo) {
            $this->modelo = $modelo;
        }

        function get_color() {
            return $this->color;
        }

        function set_color($color) {
            $this->color = $color;
        }

        function get_revisado() {
            return $this->revisado;
        }

        function set_revisado($revisado) {
            $this->revisado = $revisado;
        }

    }
?>