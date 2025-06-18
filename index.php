<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Výpis radku csv</h1>
    <ol>
        <?php
        $data = "data.csv";

        $pripojeni = fopen($data, "r");

        while(($radek = fgetcsv($pripojeni)) !== false){
            if ($podminka == 0) {
                $podminka++;
            } else {
                echo "<li>";
                foreach ($radek as $polozka) {
                    echo $polozka. ", ";
                }
            }
        }
        ?>
    </ol>
</body>
</html>

<?php

?>