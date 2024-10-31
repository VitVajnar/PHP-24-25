<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promenne</title>
</head>
<body>
    <h1>datove typy </h1>
    <table border="1">
        <tr>
            <th>datovy typ</th>
            <th>popis</th>
            <th>priklad zapisu</th>
            <th>deklarace promenne</th>
        </tr>
        <tr>
            <td>string</td>
            <td>text</td>
            <td>"php"</td>
            <td>$text = "ph";</td>
        </tr>
        <tr>
            <td>integer</td>
            <td>cele cislo</td>
            <td>42</td>
            <td>$cislo = 42;</td>
        </tr>
        <tr>
            <td>float</td>
            <td>desetinne cislo</td>
            <td>42.2</td>
            <td>$desetinne_cislo = 42.2;</td>
        </tr>
        <tr>
            <td>boolean</td>
            <td>pravdivost</td>
            <td>True/False</td>
            <td>$pravda = true;</td>
        </tr>
        <tr>
            <td>array</td>
            <td>pole hodnot</td>
            <td>[1, 2, 3]</td>
            <td>$pole = array(1, 2, 3);</td>
        </tr>
        <tr>
            <td>NULL</td>
            <td>nema hodnotu </td>
            <td>null</td>
            <td>$hodnota = null;</td>
        </tr>
    </table>
    <?php
    $text = "php";
    echo "<br>";
    echo $text;

    $cislo = 42;
    echo "<br>";
    echo "<br>";
    echo $cislo;

    $desetinne_cislo = 42.2;
    echo "<br>";
    echo "<br>";
    echo $desetinne_cislo;

    $pravda = true;
    echo "<br>";
    echo "<br>";
    echo $pravda;

    $pole = array(1, 2, 3);
    echo "<br>";
    echo "<br>";
    echo $pole;

    $hodnota = null;
    echo "<br>";
    echo "<br>";
    echo $hodnota;

    //prace s promennymi a operatori

    echo "<h2>operatory</h2>"; //MUZOU SE POUZIVAT I S PROMENYMMI
    //scitani [+]
    $scitani = 5 + 9;

    //odcitani [-]
    $odcitani = 5 - 9;

    //nasobeni [*]
    $nasobeni = 5 * 9;

    //deleni [/]
    $deleni = 5 / 9;

    //modulo [%] ZBYTEK PO DELENI
    $modulo = 5 % 9;

    //exponent [**]
    $exponent = 5 ** 9;

    //spojeni retezcu promennych a hodnot [.]
    echo "tohle je ukazka spojeni text a promenne ".$nasobeni." tohle je dalsi text";

    echo "<h3>relacni operatory</h3>";
    //porovnani hodnot
    
    // rovno [==]
    $vek_kamose = 18;
    echo"<br>";
    if ($vek_kamose == 18) {
        echo "vsechno nejlepsi";
    } else {
        echo "nemas narozky broooo";
    }
    echo "<br>";

    //nerovno [!=]
    if ($vek_kamose != 0) {
        echo "nezkousej nic";
    }


    // vetsi nez [>]
    if ($vek_kamose > 18) {
        echo "nepij";
    }
    echo "<br>";
    //mensi nez [<]
    if ($vek_kamose < 18) {
        echo "nemuzes pit brooooo";
    }
    echo "<br>";
    //mensi nebo rovno [<=]
    if ($vek_kamose <= 14) {
        echo "nemuzes pit brooooooo";
    }

    //vetsi nebo rovno je to stejny jak to nahore ale nechci to psat bleeh


    echo "<br>";
    echo "<h3>logicke operatory</h3>";
    //logicky operacie (propojeni, spojeni, negace)
    //AND [&&] musi byt splneny vsechny podminky
    
    $vek_kamarada = 16;
    $darek = "ano";
    $dresscode = "ano";

    if ($vek_kamarada >= 16 && $darek == "ano" && $dresscode == "ano") {
        echo "jsi pozvany broooooooooo";

    }

    //OR [||] nebo
    //STACI SPLNENI JEDNE PODMINKY
    echo "<br>";
    if ($vek_kamarada > 16 || $darek == "ano" && $dresscode == "ano") {
        echo "jsi pozvany brooooooo";

    }

    //NOT [! ktery se pripojue k dalsimu operatutu] negace nejde pouzit na vsechno
    if ($vek_kamarada =! 4) {
        echo "ty si uplne youngboyyyyyy";
    }
    ?>



</body>
</html>
