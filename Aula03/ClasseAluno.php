<?php

	class Aluno
	{
		private string $nome;
		private float | int $media;

		function __construct(string $nome, float | int $media)
		{
			$this->nome = $nome;
			$this->media = $media;
		}

		function mediaAluno()
		{
			echo "O aluno {$this->nome} apresentou a média {$this->media}.<br>";

			if($this->media >= 7)
			{
				echo "O Aluno foi Aprovado!";
			}

			else if($this->media < 7)
			{
				echo "O Aluno foi Reprovado!";
			}

			else{
				echo "Opção Inválida!";
			}
		}


	}

	$a1 = new Aluno("Thiago Balbinot", 9.5);
	$a1->mediaAluno();

	echo "<br>"; 
	echo "<br>"; 

	$a2 = new Aluno("Thiago Thomasi", 6.5);
	$a2->mediaAluno();

	echo "<br>";
	echo "<br>"; 

	$a3 = new Aluno("Maurício", 3.5);
	$a3->mediaAluno();

	echo "<br>"; 

?>