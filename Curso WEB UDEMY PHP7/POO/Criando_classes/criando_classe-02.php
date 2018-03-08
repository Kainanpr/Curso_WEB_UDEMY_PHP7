<?php

class Carro {
	//Atributos
	private $modelo;
	private $marca;
	private $cor;
	private $ano;

	public function __construct($modelo, $marca, $cor, $ano) {
		$this->modelo = $modelo;
		$this->marca = $marca;
		$this->cor = $cor;
		$this->ano = $ano;
	}

	//Metodos Get e Set
	public function getModelo() {
		return $this->modelo;
	}

	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}

	public function getMarca() {
		return $this->marca;
	}

	public function setMarca($marca) {
		$this->marca = $marca;
	}

	public function getCor() {
		return $this->cor;
	}

	public function setCor($cor) {
		$this->cor = $cor;
	}

	public function getAno(){
		return $this->ano;
	}

	public function setAno($ano) : int {
		$this->ano = $ano;
	}


	//Metodos meus
	public function exibir() {

		return array(
			"modelo" => $this->getModelo(),
			"marca" => $this->getMarca(),
			"cor" => $this->getCor(),
			"ano" => $this->getAno()
		);
	}

	//Metodos mágicos
	public function __toString()
    {
        return "$this->modelo <br>
        		$this->marca <br>
        		$this->cor <br>
        		$this->ano <br>"; 
    }


}//Fim da classe

$carro1 = new Carro("Golf", "VW", "Azul", 2010);

echo $carro1;

echo "<br><br>";

var_dump($carro1->exibir());

?>