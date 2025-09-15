<?php

    abstract class Veiculo {
        abstract public function mover();
    }

    class Carro extends Veiculo {
        public function mover() {
            return "O carro está dirigindo na estrada.";
        }
    }

    class Bicicleta extends Veiculo {
        public function mover() {
            return "A bicicleta está pedalando pelo parque.";
        }
    }

    class Aviao extends Veiculo {
        public function mover() {
            return "O avião está voando no céu.";
        }
    }

    $veiculos = [
        new Carro(),
        new Bicicleta(),
        new Aviao()
    ];

    foreach ($veiculos as $veiculo) {
        echo $veiculo->mover() . PHP_EOL;
    }

?>
