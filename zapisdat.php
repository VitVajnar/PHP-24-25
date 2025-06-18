<?php
$pripojeni = fopen("data.csv", "a");

$data = [
    [4,"adam","novak","adamosnovakos@gmail.com"],
    [5,"domca","novak","domca@gmail.com"]
];

if ($pripojeni == true) {
    foreach ($data as $polozka) {
        fputcsv($pripojeni, $polozka);
    }
}
?>