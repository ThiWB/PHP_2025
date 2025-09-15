<?php

	class Usuario
	{
		private string $senha;

		public function __construct(string $senha)
		{
			$this->senha = $senha;
		}

		public function verificarSenha(string $senha): bool
		{
			return $this->senha === $senha;
		}
	}

	$usuario = new Usuario("minhaSenha");

	if ($usuario->verificarSenha("minhaSenha123")) {
		echo "Senha correta!";
	} else {
		echo "Senha incorreta.";
	}

?>