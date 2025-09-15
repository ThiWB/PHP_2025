<?php

	class Cliente
	{
		private string $nome;
		private string $cpf;

		public function __construct(string $nome, string $cpf)
		{
			$this->setNome($nome);
			$this->setCpf($cpf);
		}

		public function setNome(string $nome): void
		{
			$this->nome = $nome;
		}

		public function getNome(): string
		{
			return $this->nome;
		}

		public function setCpf(string $cpf): void
		{
			if (!$this->validarCpf($cpf)) {
				throw new InvalidArgumentException("CPF inválido.");
			}

			$this->cpf = preg_replace('/[^0-9]/', '', $cpf);
		}

		public function getCpf(): string
		{
			return $this->cpf;
		}

		private function validarCpf(string $cpf): bool
		{
			$cpf = preg_replace('/[^0-9]/', '', $cpf);

			if (strlen($cpf) !== 11) {
				return false;
			}

			if (preg_match('/(\d)\1{10}/', $cpf)) {
				return false;
			}

			for ($t = 9; $t < 11; $t++) {
				$soma = 0;

				for ($i = 0; $i < $t; $i++) {
					$soma += $cpf[$i] * (($t + 1) - $i);
				}

				$digito = (10 * $soma) % 11;
				$digito = ($digito === 10) ? 0 : $digito;

				if ($cpf[$t] != $digito) {
					return false;
				}
			}

			return true;
		}
	}

	try {
		$cliente = new Cliente("Maria Silva", "123.456.789-09");
		echo "Nome: " . $cliente->getNome() . PHP_EOL;
		echo "CPF: " . $cliente->getCpf() . PHP_EOL;
	} catch (InvalidArgumentException $e) {
		echo "Erro: " . $e->getMessage();
	}


?>
