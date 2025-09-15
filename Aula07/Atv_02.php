<?php

    class Calculadora {
        public function somar($a, $b, $c = null) {
            if ($c === null) {
                return $a + $b;
            } else {
                return $a + $b + $c;
            }
        }
    }

    $calc = new Calculadora();

    echo "Soma de 2 e 3: " . $calc->somar(2, 3) . PHP_EOL;       
    echo "Soma de 1, 2 e 3: " . $calc->somar(1, 2, 3) . PHP_EOL;  

?>
