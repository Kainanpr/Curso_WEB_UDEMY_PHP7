<?php

$imagens = scandir("imagens");

$dados = array();

foreach ($imagens as $img) {
	
	if(!in_array($img, array(".", ".."))) {

		$filename = "imagens" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/CURSO%20PHP7/arquivos/" . str_replace("\\", "/", $filename);

		array_push($dados, $info);

	}
}

echo json_encode($dados);

?>