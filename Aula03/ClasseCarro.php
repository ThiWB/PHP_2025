<?php

	class Carro
	{
		private string $marca;
		private string $modelo;
		private int $ano;

		function __construct(string $marca, string $modelo, int $ano)
		{
			$this->marca = $marca;
			$this->modelo = $modelo;
			$this->ano = $ano;
		}

		function infCarro()
		{
			echo "Este é um Objeto Carro, é da marca {$this->marca}, modelo {$this->modelo} e é do ano {$this->ano}<br>";
		}


	}

	$c1 = new Carro("Nissan", "Versa", 2028);
	$c1->infCarro();

	echo "<br>"; 

	$c2 = new Carro("Fiat", "Uno", 2013);
	$c2->infCarro();

	echo "<br>"; 

	$c3 = new Carro("Renault", "Logan", 2020);
	$c3->infCarro();

	echo "<br>"; 

?>