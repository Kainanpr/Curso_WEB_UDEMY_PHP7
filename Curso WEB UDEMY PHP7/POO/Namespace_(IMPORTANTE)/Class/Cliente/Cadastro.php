<?php

namespace Cliente;

class Cadastro extends \Cadastro {

	//metodos meus
	public function registrarVendas() {
		echo "Foi registrada uma venda para o cliente " . $this->getNome();
	}
}

?>