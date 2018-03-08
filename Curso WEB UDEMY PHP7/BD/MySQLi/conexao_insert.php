<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");

$login = "KainanXD";
$senha = "33682235";

$stmt->bind_param("ss", $login, $senha);

$stmt->execute();

$login = "KauanXD";
$senha = "33682235";

$stmt->execute();

?>