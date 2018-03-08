<?php


//Essa função é chamada automaticamente quando demos um NEW na classe
function __autoload($nomeClasse) {
	var_dump($nomeClasse);
	require_once "$nomeClasse.php";
}

$carro = new DelRey();

echo "<br>";

$carro->acelerar(80);

?>