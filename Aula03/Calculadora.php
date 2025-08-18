<?php

	class Calculadora
	{
		private float | int $numero1;
		private float | int $numero2;

		function __construct(float | int $numero1, float | int $numero2)
		{
			$this->numero1 = $numero1;
			$this->numero2 = $numero1;
			echo "<br>";
		}

		function adicao(int | float $adicionar)
		{
			echo "ADICIONAR\n\n";
			$this->adicao = $this->numero1 + $this->numero2;
			echo"ADIÇÃO: {$this->adicionar}";
		}

		function subtrair(int | float $subtracao)
		{
			echo "SUBTRAIR\n\n";
			$this->subtracao = $this->numero1 - $this->numero2;
			echo"SUBTRAÇÃO: {$this->subtracao}";
		}

		function multiplicacao(int | float $multiplicar)
		{
			echo "MULTIPLICAR\n\n";
			$this->multiplicar = $this->numero1 * $this->numero2;
			echo"MULTIPLICAR: {$this->multiplicar}";
		}

		function divisao(int | float $dividir)
		{
			echo "DIVIDIR\n\n";
			$this->dividir = $this->numero1 / $this->numero2;
			echo"DIVISÃO: {$this->dividir}";
		}
	}

	$c1 = new Calculadora(5, 5);
	$c1->adicao();
	$c1->subtrair();
	$c1->multiplicacao();
	$c1->divisao();

?>
