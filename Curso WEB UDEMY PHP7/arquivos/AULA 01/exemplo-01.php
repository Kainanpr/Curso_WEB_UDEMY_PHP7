<?php

$name = "imagens";

//Verificar se um diretorio existe ou nao
if(!is_dir($name)) {

	mkdir($name);
	echo "Diretório $name criado com sucesso!";
}
else {

	//Remove diretorio
	rmdir($name);
	echo "Já existe o diretório: $name, foi removido!";
}




?>