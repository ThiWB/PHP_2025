<?php

	class Livro
	{
		private string $titulo;
		private string $autor;
		private int $anoPublicacao;
		private int $numeroPaginas;
		private bool $disponivel;

		public function __construct(
			string $titulo,
			string $autor,
			int $anoPublicacao,
			int $numeroPaginas,
			bool $disponivel
		) {
			$this->setTitulo($titulo);
			$this->setAutor($autor);
			$this->setAnoPublicacao($anoPublicacao);
			$this->setNumeroPaginas($numeroPaginas);
			$this->setDisponivel($disponivel);
		}

		public function getTitulo(): string
		{
			return $this->titulo;
		}

		public function setTitulo(string $titulo): void
		{
			if (trim($titulo) === '') {
				throw new InvalidArgumentException("O título não pode ser vazio.");
			}
			$this->titulo = $titulo;
		}

		public function getAutor(): string
		{
			return $this->autor;
		}

		public function setAutor(string $autor): void
		{
			if (trim($autor) === '') {
				throw new InvalidArgumentException("O autor não pode ser vazio.");
			}
			$this->autor = $autor;
		}

		public function getAnoPublicacao(): int
		{
			return $this->anoPublicacao;
		}

		public function setAnoPublicacao(int $ano): void
		{
			$anoAtual = (int)date('Y');
			if ($ano > $anoAtual) {
				throw new InvalidArgumentException("O ano de publicação não pode ser no futuro.");
			}
			$this->anoPublicacao = $ano;
		}

		public function getNumeroPaginas(): int
		{
			return $this->numeroPaginas;
		}

		public function setNumeroPaginas(int $paginas): void
		{
			if ($paginas <= 0) {
				throw new InvalidArgumentException("O número de páginas deve ser positivo.");
			}
			$this->numeroPaginas = $paginas;
		}

		public function isDisponivel(): bool
		{
			return $this->disponivel;
		}

		public function setDisponivel(bool $disponivel): void
		{
			$this->disponivel = $disponivel;
		}

		public function exibirInformacoes(): void
		{
			echo "Título: " . $this->getTitulo() . PHP_EOL;
			echo "Autor: " . $this->getAutor() . PHP_EOL;
			echo "Ano de Publicação: " . $this->getAnoPublicacao() . PHP_EOL;
			echo "Número de Páginas: " . $this->getNumeroPaginas() . PHP_EOL;
			echo "Disponível: " . ($this->isDisponivel() ? "Sim" : "Não") . PHP_EOL;
		}
	}

	$livro = new Livro("Dom Casmurro", "Machado de Assis", 1899, 256, true);
	$livro->exibirInformacoes();
?>
