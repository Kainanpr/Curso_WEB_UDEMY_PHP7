<?php

require_once "Cachorro.php";
require_once "Gato.php";
require_once "passaro.php";

$cachorro = new Cachorro();

echo $cachorro->falar();

echo "<br>";

echo $cachorro->mover();

echo "<hr>";

$gato = new Gato();

echo $gato->falar();

echo "<br>";

echo $gato->mover();

echo "<hr>";

$passaro = new Passaro();

echo $passaro->falar();

echo "<br>";

echo $passaro->mover();


?>