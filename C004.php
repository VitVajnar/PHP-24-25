<?php

$pole = [10, 5, 8, 3, 12];

sort($pole);

$pole2 = [15, 6, 9];

$spojene_pole = array_merge($pole, $pole2);

print_r($spojene_pole);

rsort($spojene_pole);

$text = implode(",", $spojene_pole);

echo($text);

?>