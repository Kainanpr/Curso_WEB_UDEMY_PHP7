<?php

require_once "config.php";

//Usar uma namespace
use Cliente\Cadastro;

$cadastro = new Cadastro();

$cadastro->setNome("Kainan Pereira");
$cadastro->setEmail("Kainan.pr@hotmail.com");
$cadastro->setSenha("33682235");

$cadastro->registrarVendas();

?>