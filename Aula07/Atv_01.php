<?php

    class Animal {
        public function falar() {
            return "Vai Corinthians!.";
        }
    }

    class Cachorro extends Animal {
        public function falar() {
            return "Au au!";
        }
    }

    class Gato extends Animal {
        public function falar() {
            return "Miau!";
        }
    }

    $animal = new Animal();
    echo $animal->falar() . PHP_EOL;  

    $cachorro = new Cachorro();
    echo $cachorro->falar() . PHP_EOL;  

    $gato = new Gato();
    echo $gato->falar() . PHP_EOL; 

?>
