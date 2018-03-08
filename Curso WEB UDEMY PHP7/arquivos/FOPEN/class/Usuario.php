<?php

class Usuario {
	//Atributos
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//Metodo construtor
	function __construct($login = "", $senha = "") {
		$this->setDeslogin($login);
		$this->setDessenha($senha);
	}

	//Metodos getters e setters
	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario($idusuario) {
		$this->idusuario = $idusuario;
	}

	public function getDeslogin() {
		return $this->deslogin;
	}

	public function setDeslogin($deslogin) {
		$this->deslogin = $deslogin;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($dessenha) {
		$this->dessenha = $dessenha;
	}

	public function getDtcadastro() {
		return $this->dtcadastro;
	}

	public function setDtcadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}

	//Meus metodos
	public function loadById($id) {
		
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(':ID' => $id));

		if(isset($results[0])) {  // ou if(count($results) > 0) 
			
			$this->setDados($results[0]);
		}

	}

	public function update($login, $password) {
		
		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSAWORD WHERE idusuario = :ID", array(
				':LOGIN'=>$this->getDeslogin(),
				':PASSAWORD'=>$this->getDessenha(),
				':ID'=>$this->getIdusuario()

		));
	}

	public function delete() {

		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			':ID'=>$this->getIdusuario()
		));

		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());

	}

	public static function getList() {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}

	public static function search($login) {

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH'=>"%".$login."%"));
	}

	public function login($login, $password) {
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(':LOGIN' => $login, ':PASSWORD' => $password));

		if(isset($results[0])) {  // ou if(count($results) > 0) 

			$this->setDados($results[0]);
			
		}
		else {
			throw new Exception("Login e/ou senha inválidos.");
		}

	}

	public function setDados($dados) {

		$this->setIdusuario($dados['idusuario']);
		$this->setDeslogin($dados['deslogin']);
		$this->setDessenha($dados['dessenha']);
		$this->setDtcadastro(new DateTime($dados['dtcadastro']));
	}

	public function insert() {

		$sql = new Sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(':LOGIN' => $this->getDeslogin(), ':PASSWORD' => $this->getDessenha()));


		if(isset($results[0])) {  // ou if(count($results) > 0)
			$this->setDados($results[0]);
		}
	}

	//Metodos magicos
	public function __toString() {

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}

}//Fim da classe

?>