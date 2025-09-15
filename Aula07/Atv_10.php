<?php

    abstract class Transporte {
        abstract public function calcularTarifa(float $distancia): float;
    }

    class Onibus extends Transporte {
        public function calcularTarifa(float $distancia): float {
            $tarifaBase = 3.50;
            $tarifaPorKm = 0.10;
            return $tarifaBase + ($tarifaPorKm * $distancia);
        }
    }

    class Metro extends Transporte {
        public function calcularTarifa(float $distancia): float {
            $tarifaBase = 4.00;
            $tarifaPorKm = 0.08;
            return $tarifaBase + ($tarifaPorKm * $distancia);
        }
    }

    class Taxi extends Transporte {
        public function calcularTarifa(float $distancia): float {
            $tarifaInicial = 5.00;
            $tarifaPorKm = 2.00;
            return $tarifaInicial + ($tarifaPorKm * $distancia);
        }
    }

    $distancia = 10;

    $onibus = new Onibus();
    echo "Tarifa de ônibus para {$distancia} km: R$ " . number_format($onibus->calcularTarifa($distancia), 2) . "\n";

    $metro = new Metro();
    echo "Tarifa de metrô para {$distancia} km: R$ " . number_format($metro->calcularTarifa($distancia), 2) . "\n";

    $taxi = new Taxi();
    echo "Tarifa de táxi para {$distancia} km: R$ " . number_format($taxi->calcularTarifa($distancia), 2) . "\n";

?>
