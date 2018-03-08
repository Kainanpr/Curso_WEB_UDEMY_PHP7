<?php

require_once "IVeiculo.php";

abstract class Automovel implements IVeiculo {

	public function acelerar($velocidade) {
		echo "O veiculo acelerou até " . $velocidade . " km/h";
	}

	public function frear($velocidade) {
		echo "O veiculo freiou até " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha) {
		echo "O veículo engatou a marcha " . $marcha;
	}


}//Fim da classe

?>