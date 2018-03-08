<?php

//Função para carregar as classes
spl_autoload_register(function($nameClasse) {

	var_dump($nameClasse);

	$dirClass = "Class";
	$fileName = $dirClass . DIRECTORY_SEPARATOR . "$nameClasse.php";

	//Verificar se o arquivo existe
	if(file_exists($fileName) === true) {

		require_once($fileName);
	}

});

?>