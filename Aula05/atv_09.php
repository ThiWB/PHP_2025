<?php

	class ContaBancaria
	{
		private int|float $saldo;

		public function __construct(float|int $saldo)
		{
			$this->saldo = $saldo;
		}

		public function depositar(int|float $deposito): void
		{
			echo "DEPÓSITO\n\n";
			if ($deposito > 0) {
				$this->saldo += $deposito;
				echo "O titular depositou R$ {$deposito}.\n";
				echo "<br>";
			} else {
				echo "Não foi efetuado nenhum depósito!\n";
			}
		}

		public function sacar(int|float $sacar): void
		{
			echo "SAQUE\n\n";
			if ($sacar > 0) {
				if ($sacar <= $this->saldo) {
					$this->saldo -= $sacar;
					echo "O titular sacou R$ {$sacar}.\n";
					echo "<br>";
				} else {
					echo "Saldo insuficiente para saque de R$ {$sacar}.\n";
					echo "<br>";
				}
			} else {
				echo "Não foi efetuado nenhum saque.\n";
			}
		}

		public function saldo(): void
		{
			echo "SALDO TOTAL: R$ {$this->saldo}\n";
		}
	}


	$c1 = new ContaBancaria(2500.00);
	$c1->depositar(550.50);
	$c1->sacar(200.50);
	$c1->sacar(5000); 
	$c1->saldo();
?>
