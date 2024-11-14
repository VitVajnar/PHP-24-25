<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Require a Include</title>
</head>
<body>
    <h1>zde je nize umisten obsah souboru P009_test_i.php</h1>
    <?php
        include 'P009_test_i.php'
    ?>
    //
    <h1>zde je nize umisten obsah souboru P009_test_r.php</h1>
    <?php
        require 'P009_test_r.php'
        //vlozi obsah souboru do scriptu pokud soubor neexistuje tak php hofi varovani
    ?>
</body>
</html>