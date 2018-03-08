<?php
	
	session_id('0uo4nqs7qeotocdb6d15a3h4bk');

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

?>