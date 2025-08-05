<?php

	class Pessoa
	{
		private string $nome;
		private int $idade;

		function __construct(string $nome, int $idade)
		{
			$this->nome = $nome;
			$this->idade = $idade;
		}

		function apresentar()
		{
			echo "Olá, meu nome é {$this->nome}, e tenho {$this->idade} anos!<br>";
		}

		function getNome()
		{
			echo "Olá, meu nome é {$this->nome}!<br>";
		}

		function getIdade()
		{
			echo "Olá, tenho {$this->idade} anos!<br>";
		}

		function aniversario()
		{
			echo "Tenho {$this->idade}, farei " . ($this->idade + 1) . "<br>";
		}
	}

	$p1 = new Pessoa("Thiago Balbinot", 19);
	$p1->apresentar();
	$p1->getNome();
	$p1->getIdade();
	$p1->aniversario();

	echo "<br>"; 

	$p2 = new Pessoa("Thiago Thomasi", 20);
	$p2->apresentar();
	$p2->getNome();
	$p2->getIdade();
	$p2->aniversario();

?>