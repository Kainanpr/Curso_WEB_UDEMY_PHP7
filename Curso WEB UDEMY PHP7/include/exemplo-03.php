<?php

	//Obriga que o arquivo exista e esteja funcionando corretamente, se nao estiver o require gera um erro fatal, para a execução do codigo.
	require "inclusao/exemplo-01.php";

	$resultado = somar(10, 20);

	echo $resultado;

?>