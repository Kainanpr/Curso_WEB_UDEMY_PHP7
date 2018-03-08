<?php

//$timeStamp = strtotime("1995-12-25");
//$timeStamp = strtotime("now");
//$timeStamp = strtotime("+1 day");
$timeStamp = strtotime("+1 week");

echo date("l, d/m/Y", $timeStamp);

?>