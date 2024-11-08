<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP a Html prace s podminenym obsahem</title>
</head>
<body>
    <h1>PHP a Html prace s podminenym obsahem</h1>
    <?php
    if ($loggedin) :
    ?>
    <h2>toto je videt pri prihlaseni</h2>
    <?php
        else:
    ?>
    <h2>prihlaste se prosim</h2>
    <?php
    endif;
    ?>
</body>
</html>