<?php

	class Conta
	{
		private string $titular;
		private float|int $saldo;
		private int $numero;

		public function __construct(string $titular, float|int $saldo)
		{
			$this->titular = $titular;
			$this->saldo = $saldo;
			$this->numero = $this->gerarNumeroConta(); 
		}

		private function gerarNumeroConta(): int
		{
			return random_int(10000000, 99999999);
		}

		public function depositar(float|int $valor): void
		{
			echo "DEPÓSITO<br>";
			if ($valor > 0) {
				$this->saldo += $valor;
				echo "O titular {$this->titular} depositou R$ {$valor}.<br>";
			} else {
				echo "Não foi efetuado nenhum depósito!<br>";
			}
		}

		public function exibirDados(): void
		{
			echo "Número da Conta: {$this->numero}<br>";
			echo "Titular da Conta: {$this->titular}<br>";
			echo "Saldo da Conta: R$ {$this->saldo}<br>";
		}
	}


	$conta = new Conta("Thiago Balbinot", 5990.90);
	$conta->depositar(750);
	$conta->exibirDados();

?>
