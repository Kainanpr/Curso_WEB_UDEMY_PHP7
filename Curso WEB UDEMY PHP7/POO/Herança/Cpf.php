<?php

require_once "Documento.php";

class Cpf extends Documento {
	//Atributos

	//Metodos meus
	public function validar() : bool {

		$numeroCPF = $this->getNumero();

		//Aqui vai a validação do CPF
		return true;
	}
}

?>