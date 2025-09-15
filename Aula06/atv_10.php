<?php

	class CarrinhoDeCompras
	{
		private float $total = 0.0;


		public function adicionarValor(float $valor): void
		{
			if ($valor < 0) {
				throw new InvalidArgumentException("Não é possível adicionar valores negativos ao carrinho.");
			}

			$this->total += $valor;
		}

		public function exibirTotal(): string
		{
			return "Total: R$ " . number_format($this->total, 2, ',', '.');
		}

		public function getTotal(): float
		{
			return $this->total;
		}
	}



	$carrinho = new CarrinhoDeCompras();

	try {
		$carrinho->adicionarValor(100.50);
		$carrinho->adicionarValor(49.99);
	} catch (InvalidArgumentException $e) {
		echo "Erro: " . $e->getMessage();
	}

	echo $carrinho->exibirTotal(); 




?>
