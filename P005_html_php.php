<?php
//zde se php pise v momente kdy chcete zpracovat kod pri spusteni stranky
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP a Html</title>
</head>
<body>
    <h1>ukazka pripojeni php k html</h1>
    <?php
    //zde se pise php v momente kdy chce napr zpracovat kod ktery ma byt videt na strance je zavisly na html
    ?>
    <h2>zde je: <br>
        <?php
            echo 'text php pomoci echo';
        ?>
    </h2>
</body>
</html>
<?php
    //zde se pise php kdyz chce zpracovat kod po spusteni stranky 
    ?>
