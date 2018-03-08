<?php

$pessoa = array('nome'=>'Kainan', 'idade'=>22);

foreach ($pessoa as &$value) {

	if(gettype($value) === 'integer')
		$value += 10;

	echo $value . '<br>';
}

print_r($pessoa);


?>