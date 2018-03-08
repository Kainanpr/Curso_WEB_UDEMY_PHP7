<?php

class Cadastro {
	//Atributos
	private $nome;
	private $email;
	private $senha;

	//Metodos getters e setters
	public function getNome():string {
		return $this->nome;
	}

	public function getEmail():string {
		return $this->email;
	}

	public function getSenha():string {
		return $this->senha;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	//Metodos Magicos
	public function __toString() {
		//Tem que ser de um array
		return json_encode(array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));
	}

}//Fim da classe

?>