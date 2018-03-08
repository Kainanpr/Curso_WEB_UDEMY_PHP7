<?php

require_once("Cpf.php");

$doc = new Cpf();

$doc->setNumero("1234567890-1");

var_dump($doc->validar());

echo "<br><br>";

echo $doc->getNumero();

?>