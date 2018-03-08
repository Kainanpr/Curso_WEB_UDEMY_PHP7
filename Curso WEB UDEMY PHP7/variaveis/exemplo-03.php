<?php

	/*********** TIPOS BASICO ***********/
	//String
	$nome = "Hcode";
	$site = 'www.hcode.com.br';

	//Inteiro
	$ano = 1990;

	//Float
	$salario = 5500.99;

	//Boleano
	$bloqueado = false;

	/*********** ARRAY ***********/
	$frutas = array("abacaxi", "laranja", "manga");

	echo $frutas[0] . "<br><br>"; 



	/*********** OBJETOS ***********/
	$nascimento = new DateTime();

	var_dump($nascimento);

	/*********** TIPOS ESPECIAIS ***********/
	$arquivo = fopen("exemplo-03.php", "r");

	var_dump($arquivo);

	$nulo = NULL;
	$vazio = "";

?>