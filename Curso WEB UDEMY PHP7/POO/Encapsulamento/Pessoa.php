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

$pessoa = new Pessoa();

$pessoa->verDados();

echo "<br>" . $pessoa->nome;

/*
 *  Não é permitido
 *  echo "<br><br>" . $pessoa->idade;
 */

/*
 *  Não é permitido
 *  echo "<br><br>" . $pessoa->senha;
 */

?>