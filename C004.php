<?php

$pole = [10, 5, 8, 3, 12];

sort($pole);

$pole2 = [15, 6, 9];

$pole3 = array_merge($pole, $pole2);

print_r($pole3);

rsort($pole3);

$text = implode(",", $pole3);

echo($text);

?>
