<?php

//Poderia ser class BancoDeBados
class Sql extends PDO {
	//Atributos
	private $conn;

	//Metodo Construtor
	public function __construct() {

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

		$this->conn->exec("set names utf8");
	}

	//Meus metodos
	public function query($rawQuery, $params = array()) {

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	private function setParams($statment, $parameters = array()) {

		foreach ($parameters as $key => $value) {

			$this->setParam($statment, $key, $value);
		}
	}

	private function setParam($statment, $key, $value) {

		$statment->bindParam($key, $value);
	}

	public function select($rawQuery, $params = array()):array {

		$stmt = $this->query($rawQuery, $params);


		return $stmt->fetchALL(PDO::FETCH_ASSOC);
	}

}//Fim da classe

?>