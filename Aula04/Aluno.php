<?php

	class Aluno
	{
		public string $nome;
		public readonly int $matricula;
		private array $notas = [];

		public function __construct(string $nome)
		{
			$this->nome = $nome;
			$this->matricula = rand(1000, 9999); 
		}

		public function adicionarNotas(float|int ...$notas): void
		{
			foreach ($notas as $nota) {
				$this->notas[] = $nota;
			}
		}

		private function calcularMedia(): float
		{
			if (count($this->notas) === 0) {
				return 0.0;
			}

			$soma = array_sum($this->notas);
			$quantidade = count($this->notas);
			return $soma / $quantidade;
		}

		public function situacao(): void
		{
			$media = $this->calcularMedia();

			if ($media >= 7) {
				echo "APROVADO";
			} else if ($media < 7) {
				echo "REPROVADO";
			} else {
				echo "Inválido";
			}
		}
	}

	$aluno = new Aluno("Thiago Balbinot");
	echo "Nome: " . $aluno->nome;
	echo "<br>";
	echo "Matrícula: " . $aluno->matricula . PHP_EOL;
	echo "<br>";
	$aluno->adicionarNotas(7, 8.5, 5, 10, 9);
	$aluno->situacao();

?>
