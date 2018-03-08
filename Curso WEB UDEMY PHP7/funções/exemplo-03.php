<?php

function ola($testo = "mundo", $periodo = "Bom dia") {

	return "Olá $testo! $periodo! <br><br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola("Kainan", "Boa noite");
echo ola("José", "");


?>