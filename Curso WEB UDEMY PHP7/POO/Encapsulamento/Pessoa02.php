<?php

class Pessoa {
	//Atributos
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados() {

		echo $this->nome . '<br>';
		echo $this->idade . '<br>';
		echo $this->senha . '<br>';
	}

}//Fim da classe

class Programador extends Pessoa {

	public function verDados() {

		echo get_class($this) . "<br><br>";

		echo $this->nome . '<br>';
		echo $this->idade . '<br>';
		echo $this->senha . '<br>';
	}

}//Fim da classe

$pessoa = new Programador();

$pessoa->verDados();


?>