<?php

function soma(float ...$valores): string {

	return array_sum($valores);

}

echo var_dump(soma(2, 2, 2, 2, 2));
echo "<br><br>";
echo soma(22, 22);
echo "<br><br>";
echo soma(2.2, 2.2);
echo "<br><br>";

?>