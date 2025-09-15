<?php

	class Config
	{
		protected array $parametros = [];

		public function __construct(array $parametros = [])
		{
			$this->parametros = $parametros;
		}
	}

	class AppConfig extends Config
	{
		public function getParametro(string $chave): mixed
		{
			return $this->parametros[$chave] ?? null;
		}

		public function setParametro(string $chave, mixed $valor): void
		{
			$this->parametros[$chave] = $valor;
		}
	}

	class DatabaseConfig extends Config
	{
		public function getTodosParametros(): array
		{
			return $this->parametros;
		}

		public function atualizarParametros(array $novosParametros): void
		{
			$this->parametros = array_merge($this->parametros, $novosParametros);
		}
	}


	$appConfig = new AppConfig(['debug' => true, 'versao' => '1.0']);
	echo "Debug: " . ($appConfig->getParametro('debug') ? 'ativado' : 'desativado') . "\n";

	echo "<br>";

	$appConfig->setParametro('versao', '1.1');
	echo "Versão atual: " . $appConfig->getParametro('versao') . "\n";

	echo "<br>";

	$dbConfig = new DatabaseConfig(['host' => 'localhost', 'porta' => 3306]);
	$dbConfig->atualizarParametros(['porta' => 3307, 'usuario' => 'root']);

	print_r($dbConfig->getTodosParametros());

?>