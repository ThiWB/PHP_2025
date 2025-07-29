<?php

	// Classe Produto
	class Produto
	{
		public int $preco = 100;
		public float $desconto = 0.1;
		public float|int $final;

		public function __construct()
		{
			$this->final = $this->preco - ($this->preco * $this->desconto);
		}
	}

	echo("Valor Após Desconto: \n");
	$Produto = new Produto();
	echo $Produto->final;

?>
