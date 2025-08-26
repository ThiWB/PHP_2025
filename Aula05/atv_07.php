<?php

	class Pedido
	{
		private array $itens = [];

		public function adicionarItem(string $item): void
		{
			$this->itens[] = $item;
		}

		public function listarItens(): array
		{
			return $this->itens;
		}
	}

	$pedido = new Pedido();

	$pedido->adicionarItem("Pizza");
	$pedido->adicionarItem("Refrigerante");
	$pedido->adicionarItem("Sobremesa");

	echo "Itens do pedido:\n";
	foreach ($pedido->listarItens() as $item) {
		echo "- $item\n";
	}
?>
