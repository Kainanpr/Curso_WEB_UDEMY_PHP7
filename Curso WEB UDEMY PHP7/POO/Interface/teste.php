<?php
	
	require_once "Civic.php";

	$carro = new Civic();

	$carro->trocarMarcha(1);

	echo "<br><br>";

	$carro->acelerar(210);

?>