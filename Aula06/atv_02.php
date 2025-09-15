<?php

	class Produto
	{
		public string $nome;
		private int|float $preco;

		public function __construct(string $nome, float|int $preco)
		{
			$this->nome = $nome;
			$this->preco = $preco;
		}

		public function getPreco(): int|float
		{
			return $this->preco;
		}

		public function setPreco(int|float $preco): void
		{
			$this->preco = $preco;
		}
	}


	$p = new Produto("Caneta", 5.50);
	echo $p->getPreco(); 

	echo "<br>";
	
	$p->setPreco(7.00);
	echo $p->getPreco(); 
?>

