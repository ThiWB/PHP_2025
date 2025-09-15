<?php

	class Aluno
	{
		private string $nome;
		private int $matricula;
		private array $notas = [];

		public function __construct(string $nome)
		{
			$this->nome = $nome;
			$this->matricula = rand(1000, 9999); 
		}

		public function adicionarNota(float|int $nota): void
		{
			if ($nota >= 0 && $nota <= 10) {
				$this->notas[] = $nota;
			} else {
				throw new InvalidArgumentException("Nota inválida. Deve ser entre 0 e 10.");
			}
		}

		public function getNome(): string
		{
			return $this->nome;
		}

		public function getMatricula(): int
		{
			return $this->matricula;
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
			} else {
				echo "REPROVADO";
			}
		}
	}

	$aluno = new Aluno("Thiago Balbinot");

	echo "Nome: " . $aluno->getNome() . "<br>";
	echo "Matrícula: " . $aluno->getMatricula() . "<br>";

	try {
		$aluno->adicionarNota(7);
		$aluno->adicionarNota(8.5);
		$aluno->adicionarNota(5);
		$aluno->adicionarNota(10);
		$aluno->adicionarNota(9);
	} catch (InvalidArgumentException $e) {
		echo "Erro ao adicionar nota: " . $e->getMessage();
	}

	echo "<br>Situação: ";
	$aluno->situacao();



?>
