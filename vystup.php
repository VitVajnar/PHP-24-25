<?php
//Zisk dat z FRM v HTML promenna = $_metoda[hodnota atributu name]
$jmeno = $_GET['jmeno'];
$heslo = $_GET['heslo'];

echo $jmeno.''.$heslo;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jmeno = $_GET['jmeno'];
    $heslo = $_GET['heslo'];
    
    echo $jmeno.''.$heslo; 
}
?>