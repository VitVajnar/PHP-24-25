<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }
        .radek{
            border: 5px solid black;
            display: flex;
            width: 200px;
            height: 50px;
            background-color: red;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: row;
        }
        .radek_blue{
            border: 5px solid black;
            display: flex;
            width: 200px;
            height: 50px;
            background-color: blue;
            justify-content: space-evenly;
            align-items: center;
            flex-direction: row;
        }
        
    </style>
</head>
<body>
    <div class="container">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jmeno = $_POST["jmeno"];
        $prijmeni = $_POST["prijmeni"];
        $narozeni = $_POST["narozeni"];
        $pohlavi = $_POST["pohlavi"];

        $otevreni_zapis = fopen("zaloha.csv", "a");

        for ($i=0; $i < 4; $i++) { 
            if ($i == 0 || $i == 2) {
                echo "<div class='radek_blue'></div>";
            } else {
                echo "<div class='radek'></div>";
            }
        }

        $zapis = [$jmeno, $prijmeni, $narozeni, $pohlavi];

        fputcsv($otevreni_zapis, $zapis);

        fclose($otevreni_zapis);

        
        $otevreni_cteni = fopen("zaloha.csv", "r");

        while (($radek = fgetcsv($otevreni_cteni)) !== false) {
            echo "<ol>";
            foreach ($radek as $bunka) {
                echo "<li>" . htmlspecialchars($bunka) . "</li>";
            }
            echo "</ol>";
        }

        fclose($otevreni_cteni);
    }
?>
    </div>
    <a href="index.html">cus</a>
</body>
</html>