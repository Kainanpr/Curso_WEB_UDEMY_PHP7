<?php

class Pessoa {

	private $nome;
	private $peso;
	private $altura;

	public function __construct(string $nome) {
		$this->nome = $nome;
	}


	public function setNome(string $nome) {
		$this->nome = $nome;
	}

	public function getNome() {
		return $this->nome;
	}

	public function falar() {
		return "O meu nome é " . $this->nome;
	}



}

$p1 = new Pessoa("Kainan Ramos");

echo $p1->getNome();

?>