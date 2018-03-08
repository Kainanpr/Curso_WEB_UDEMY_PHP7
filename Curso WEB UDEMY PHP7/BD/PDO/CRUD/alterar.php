<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$statement = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");


$id = 1;
$login = "Kauan";
$password = "532233";

$statement->bindParam(":ID", $id);
$statement->bindParam(":LOGIN", $login);
$statement->bindParam(":PASSWORD", $password);

$statement->execute();

echo "Alterado OK!";

?>