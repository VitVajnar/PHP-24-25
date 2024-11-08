<?php
$pozadi= '#afc90f2';
$barva_pisma= '#'


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP a Html vkladani atributu css</title>
    <style>
        h1{
            color:<?php echo  $barva_pisma;?>;
        }
    </style>
</head>
<body style="background-color: <?php echo $pozadi;?>">
    <h1>PHP a Html vkladani atributu css</h1>
</body>
</html>