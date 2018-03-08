<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$statement = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");


$login = "Tiago";
$password = "123431";

$statement->bindParam(":LOGIN", $login);
$statement->bindParam(":PASSWORD", $password);

$statement->execute();

echo "Inserido OK!";

?>