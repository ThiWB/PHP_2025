<?php

	class Cliente
	{
		public string $nome;
		protected string $cpf;
		private string $telefone;

		public function __construct(string $nome, string $cpf, string $telefone)
		{
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->telefone = $telefone;
		}

		public function exibirDados(): void
		{
			echo "Nome: {$this->nome}";
			echo "<br>";
			echo "CPF: {$this->cpf}";
			echo "<br>";
			echo "Telefone: {$this->telefone}";
		}
	}

	$cliente = new Cliente("Thiago Balbinot", "123.456.789-00", "(11) 91234-5678");

	echo "Acessando fora da classe:\n";

	echo "<br>";
	
	echo "Nome: " . $cliente->nome . "\n"; 

	echo "<br>";
	echo "<br>";

	echo "\nAcessando de dentro da classe via método público:\n";
	
	echo "<br>";

	$cliente->exibirDados();


?>