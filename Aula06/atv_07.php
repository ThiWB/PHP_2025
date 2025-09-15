<?php

	class Carro
	{
		private int $velocidade = 0; 

		public function acelerar(int $valor): void
		{
			if ($valor < 0) {
				throw new InvalidArgumentException("Valor de aceleração deve ser positivo.");
			}

			$this->velocidade += $valor;

			if ($this->velocidade > 200) {
				$this->velocidade = 200;
			}
		}

		public function frear(int $valor): void
		{
			if ($valor < 0) {
				throw new InvalidArgumentException("Valor de frenagem deve ser positivo.");
			}

			$this->velocidade -= $valor;

			if ($this->velocidade < 0) {
				$this->velocidade = 0;
			}
		}

		public function getVelocidade(): int
		{
			return $this->velocidade;
		}
	}



	$carro = new Carro();

	$carro->acelerar(50);
	echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>";

	$carro->acelerar(160);
	echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>"; 

	$carro->frear(80);
	echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>";

	$carro->frear(150);
	echo "Velocidade atual: " . $carro->getVelocidade() . " km/h<br>";




?>
