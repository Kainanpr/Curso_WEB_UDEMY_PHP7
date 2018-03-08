<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//retorna um dado se ele existir
while($row = $result->fetch_array(MYSQLI_ASSOC)) {

	array_push($data, $row);

}

print_r($data);

$json = '[{"idusuario":"1","deslogin":"KainanXD","dessenha":"33682235","dtcadastro":"2018-02-01 14:12:01"},{"idusuario":"2","deslogin":"KainanXD","dessenha":"33682235","dtcadastro":"2018-02-01 14:12:15"},{"idusuario":"3","deslogin":"KainanXD","dessenha":"33682235","dtcadastro":"2018-02-01 14:13:28"},{"idusuario":"4","deslogin":"KauanXD","dessenha":"33682235","dtcadastro":"2018-02-01 14:13:28"}]';

$data = json_decode($json);

print_r($data);

?>