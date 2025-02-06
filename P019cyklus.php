<?php
//CYKLUS FOR
//POUZIVA SE PRO OPKAOVANI KODU URCITYPOCETKRAT
for ($i=0; $i<100; $i++){
    echo 'vase cislo je' .$i. '<br>'; //tento kod se provede pri kazdem opakovani cyklu
}
/*for (pocatecni hodnota; podminka; iterace(co se stane pri kazdem opkaovani cyklu)){
    bezici kod
}*/

echo '<h1>prace s cyklem for</h1>';
//prace s cyklem for
for($i=5; $i>0; $i--){
    echo 'vase cislo je' .$i. '<br>';
}


echo '<h1>uzivatelsky vstup uzivatel zada nejvyssi hodnotu cyklus vpise suda cislo do 0</h1>';
$uzivatel=100;
for($uzivatel; $uzivatel>0; $uzivatel--){ //podminky v zavorce for
   if($uzivatel%2 ==0){
    echo 'sude cislo'.$uzivatel. '<br>';
   }
}

?>