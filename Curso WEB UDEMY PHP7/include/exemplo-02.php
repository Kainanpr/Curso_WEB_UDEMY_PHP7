<?php

	//Tenta funcionar mesmo que o arquivo nao exista ou esteja com problemas, tem mais recursos que o require
	include "inclusao/exemplo-01.php";

	$resultado = somar(10, 20);

	echo $resultado;

?>