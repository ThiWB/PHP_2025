<?php

	class ConexaoBD
	{
		private string $conexao = "";

		private function conectar(): string
		{
			$this->conexao = "Conexão com o banco de dados estabelecida.";
			return $this->conexao;
		}

		public function getConexao(): string
		{
			return $this->conectar();
		}
	}

	$conexao = new ConexaoBD();

	echo $conexao->getConexao();

?>
