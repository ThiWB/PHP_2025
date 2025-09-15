<?php

    abstract class Impressora {
        abstract public function imprimir();
    }

    class PDF extends Impressora {
        public function imprimir() {
            return "Imprimindo documento PDF.";
        }
    }

    class Texto extends Impressora {
        public function imprimir() {
            return "Imprimindo documento de texto.";
        }
    }

    class Imagem extends Impressora {
        public function imprimir() {
            return "Imprimindo imagem.";
        }
    }

    $impressoras = [
        new PDF(),
        new Texto(),
        new Imagem()
    ];

    foreach ($impressoras as $impressora) {
        echo $impressora->imprimir() . PHP_EOL;
    }

?>
