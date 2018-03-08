<?php

function ola() {

	//Retorna um array com os argumentos
	$argumentos = func_get_args(); 

	return $argumentos;

}

$retorno = ola("Boma dia", 10);

var_export($retorno);

?>