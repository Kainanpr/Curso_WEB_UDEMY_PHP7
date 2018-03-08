<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$statement = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$statement->bindParam(":ID", $id);

$statement->execute();

echo "Excluido OK!";

?>