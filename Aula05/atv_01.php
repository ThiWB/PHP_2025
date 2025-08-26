<?php

	class Produto
	{
		public string $nome;
		public int|float $preco;

		function __construct(string $nome, float|int $preco)
		{
			$this->nome = $nome;
			$this->preco = $preco;
		}
	}

	$p1 = new Produto("Coca-Cola", 4.50);
	echo "Produto: {$p1->nome} ";
	echo "<br>";
	echo "Preço:  {$p1->preco}";
?>

