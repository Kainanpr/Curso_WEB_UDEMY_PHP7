<form method="post">

	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php

if(isset($_POST["busca"])) {

	//Remover as tags, deixa apenas as strings
	echo strip_tags($_POST["busca"], "<strong><a>");

	//Escrever as tags, as tags vira texto
	echo htmlentities($_POST["busca"]);
}

?>