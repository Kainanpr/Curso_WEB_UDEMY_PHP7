<?php

$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

//Fechar arquivo
fclose($file);

echo "Arquivo criado com sucesso!";

?>