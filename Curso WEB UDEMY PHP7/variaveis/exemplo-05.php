<?php

	$nome = "KainanXD";

	function teste() {
		//Para ouvir a variavel Global $nome
		global $nome;
		echo $nome . "<br><br>";
	}

	function teste2() {
		global $nome;
		echo $nome . " Agora no teste 2 <br><br>";
	}

	teste();
	teste2();

?>

<?php

	function teste3() {
		global $nome;
		echo $nome . " Suaveraaa <br><br>";
	}

	teste();

	teste2();

	teste3();

?>