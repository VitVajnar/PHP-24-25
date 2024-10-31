<?php

$ovoce = ["jablko", "hruska", "jablko", "pomeranc", "hruska"];

$serazeny = array_unique($ovoce);

print_r($serazeny);

//--------------------------------

$pole = [5, 2, 9, 1, 7];

sort($pole);

print_r($pole);


rsort($pole);

print_r($pole);

?>