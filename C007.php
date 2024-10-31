<?php

$pole = ["auto", "vlak", "letadlo", "lod"];

unset($pole[1]);

array_pop($pole);

print_r($pole);

echo count($pole);

?>