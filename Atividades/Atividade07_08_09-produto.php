<?php

	class Produto
	{
		private string $nome;
		private float $preco;
		private int $quantidade;
        private int $estoque;

		function __construct(string $nome, float $preco, int $quantidade, int $estoque)
		{
			$this->nome = $nome;
			$this->preco = $preco;
			$this->quantidade = $quantidade;
            $this->estoque = $estoque;
		}

        function valorTotal()
        {
            $total = $this->preco * $this->quantidade;
            echo "Valor total: R$" . $total;
        }

        function exibirDetalhes()
		{
			echo "Nome: {$this->nome}"."<br>";
            echo "Preço: {$this->preco}"."<br>";
            echo "Estoque: {$this->estoque}"."<br>";
		}

	}

	$p1 = new Produto("Coca-Cola", 4.50, 3, 10);
	$p1->exibirDetalhes();
    $p1->valorTotal();

	echo "<br>"; 
    echo "<br>"; 

	$p1 = new Produto("Filé de Alcatra", 55.90, 1, 5);
	$p1->exibirDetalhes();
    $p1->valorTotal();

    echo "<br>"; 
    echo "<br>"; 

	$p1 = new Produto("Farofa", 8.50, 2, 3);
	$p1->exibirDetalhes();
    $p1->valorTotal();

?>