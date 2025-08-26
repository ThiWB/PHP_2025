<?php

	class Funcionario
	{
		protected float $salario;

		public function __construct(float $salario)
		{
			$this->salario = $salario;
		}
	}

	class Gerente extends Funcionario
	{
		public function getSalario(): float
		{
			return $this->salario;
		}

		public function setSalario(float $novoSalario): void
		{
			$this->salario = $novoSalario;
		}
	}

	$gerente = new Gerente(5000.00);
	echo "Salário inicial: " . $gerente->getSalario() . "\n";

	echo "<br>";

	$gerente->setSalario(7000.00);
	echo "Salário atualizado: " . $gerente->getSalario() . "\n";

?>