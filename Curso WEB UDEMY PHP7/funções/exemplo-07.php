<?php

function soma(int ...$valores) {

	return array_sum($valores);

}

echo soma(2, 2, 2, 2, 2);
echo "<br><br>";
echo soma(22, 22);
echo "<br><br>";
echo soma(2.2, 2.2);
echo "<br><br>";

?>