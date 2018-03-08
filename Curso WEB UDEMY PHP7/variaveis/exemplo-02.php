<?php

	$nome = "kainan";
	$sobrenome = "Pereira Ramos";
	$nomeCompleto = $nome . " " . $sobrenome; //Para concatenar é .

	echo $nomeCompleto;

	//Para a execução aqui, o que tem embaixo não é executado
	exit;

	echo "<br />";

	//Elimina variavel da memoria
	unset($nome);

	//Verifica se a variavel esta definida
	if(isset($nome)) {
		echo $nome;
	}

	
?>
