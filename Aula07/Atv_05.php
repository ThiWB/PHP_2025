<?php

    abstract class FiguraGeometrica {
        abstract public function calcularArea();
    }

    class Quadrado extends FiguraGeometrica {
        private $lado;

        public function __construct($lado) {
            $this->lado = $lado;
        }

        public function calcularArea() {
            return $this->lado * $this->lado;
        }
    }

    class Circulo extends FiguraGeometrica {
        private $raio;

        public function __construct($raio) {
            $this->raio = $raio;
        }

        public function calcularArea() {
            return pi() * pow($this->raio, 2);
        }
    }

    class Retangulo extends FiguraGeometrica {
        private $largura;
        private $altura;

        public function __construct($largura, $altura) {
            $this->largura = $largura;
            $this->altura = $altura;
        }

        public function calcularArea() {
            return $this->largura * $this->altura;
        }
    }

    $figuras = [
        new Quadrado(5),
        new Circulo(3),
        new Retangulo(4, 6)
    ];

    foreach ($figuras as $figura) {
        echo "Área: " . $figura->calcularArea() . PHP_EOL;
    }

?>
