<?php

class Endereco {
	private $logradouro;
	private $numero;
	private $cidade;

	//Metodo construtor
	public function __construct($logradouro, $numero, $cidade) {
		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;
	}

	//Metodo destrutor
	public function __destruct() {
		var_dump("DESTRUIR");
	}

	//gettes e settes
	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}

	public function getLogradouro() {
		return $this->logradouro;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function getCidade() {
		return $this->cidade;
	}

	//Metodos mágicos
	public function __toString() {
		return $this->logradouro . ", " .
			   $this->numero . ", " .
			   $this->cidade;
	}


}//Fim da classe

$meuEndereco = new Endereco("Rua Santa Gertrudes", "783", "São Carlos");

var_dump($meuEndereco);

echo "<br><br>";

echo $meuEndereco;

echo "<br><br>";

//Elimina o objeto da memoria
unset($meuEndereco);





?>