<?php
	
	require_once "DelRey.php";

	$carro = new DelRey();

	$carro->trocarMarcha(1);

	echo "<br><br>";

	$carro->acelerar(210);

?>