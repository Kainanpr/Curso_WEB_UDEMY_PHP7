<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$statement = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

//Outra forma de executar,os parametros "?" sao colocados no array abaixo separados por virgula exemplo $statement->execute(array($id, $login));
$statement->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "Excluido OK!";

?>