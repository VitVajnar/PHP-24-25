<?php

//header(event/udalost/zmena nastaveni)
//header musi byt na konci kodu
//exit/die donuti ukonceni skriptu po aplikaci header

//header pro redirect
header('Location../C001.php');
exit(

);

/*dalsi pouziti nastaveni typu obsahu                                                   NEBUDE V TESTU 
header('Content-type:application/pdf') nastavuje omezeni spustitelneho obsahu
readfile('dokument.pdf)
                                                                                        NEBUDE V TESTU 

Kešování
a) zakaz kešovani                                                                           
header('Cache-Control: no-cache, no-store, must-revalidate');      

b) kešovani na urcitou dobu
header('Cache-Control: max=age=600');  kesovani na 10 minut                             NEBUDE V TESTU                                               

*/

?>