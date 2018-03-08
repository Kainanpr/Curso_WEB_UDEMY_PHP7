<?php

function incluirClasses($nomeClasse) {

	if(file_exists("$nomeClasse.php") ===true)
		require_once "$nomeClasse.php";
}

//funções spl serve para solucionar lacunas(Problemas dificeis)
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse) {

	if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php") ===true)
		require_once "Abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php";

});

spl_autoload_register(function($nomeClasse) {

	if(file_exists("Interfaces" . DIRECTORY_SEPARATOR . "$nomeClasse.php") ===true)
		require_once "Interfaces" . DIRECTORY_SEPARATOR . "$nomeClasse.php";

});

$carro = new DelRey();

$carro->acelerar(80);

?>