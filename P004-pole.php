
<?php

//deklarace datoveho typu pole
$pole = array("jabko", "hruska", "vitek");

print_r($pole); //vypis array 

echo "<br>";

$zkracene_pole = ["ukazka1", 2];
print_r($zkracene_pole);


echo "<br>";
echo "<br>";


echo $pole[2]; //vypise konkretni polozku ; pozice nula je prvni


echo "<br>";
echo "<br>";


$pole[] = "vanmax23"; // prida polozku do array
print_r($pole);


echo "<br>";


$pole[0] = "yehorek"; // prida na konkretni pozici (das do zavorky cislo), pokud tam uz nejaka byla, tak ji prepise :(
print_r($pole);

echo "<br>";

$vicerozmernepole = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

print_r($vicerozmernepole);

echo "<br>";
echo "<br>";

//-----------------------------------------------------------------------------------------

// prikazy pro manipulaci s polem
// vsechno nad timhle, nechce se mi to psat znovu

echo count($pole); // vypise pocet pozic v poli ; konecnce neco zajimavyho

echo "<br>";

$ciselnepole = array(1,2,3); 
echo array_sum($ciselnepole ); //vypsani souctu pozic v arrayi

echo "<br>";

$vysledek = array_sum($ciselnepole) / count($ciselnepole); // vypocet prumeru

echo $vysledek; // vypsani promenne prumeru

echo "<br>";

$stejnehodnoty = array("banan", "max", "vitek", "banan");
$pole_stejnehodnoty = array_unique($stejnehodnoty); // odstraneni duplikatu z arraye
print_r($pole_stejnehodnoty);

echo "<br>";

// odebrani prvku z arraye - pop, shift, unset

array_pop($pole_stejnehodnoty); // array_pop odebira posledni polozku v arrayi
print_r($pole_stejnehodnoty); 

echo "<br>";

array_shift($pole_stejnehodnoty); // array_shift odebira prvni polozku v arrayi
print_r($pole_stejnehodnoty);

echo "<br>";

unset($pole_stejnehodnoty[0]); // unset, pise se pouze unset, odebira vybrane pole v []
print_r($pole_stejnehodnoty);

echo "<br>";

// spojeni vice poli dohromady

$pole22 = array("ahoj", "cs", "pribinacek");
$pole23 = array("vitek", "yehorek", "vanmax23");

$pole_stejnehodnoty = array_merge($pole22, $pole23);
print_r($pole_stejnehodnoty);

echo "<br>";

//razeni pole - sort, rsort, asort, ksort

$razene_pole = array(1, 4, 2, 6, 88, 22, 12, 3); //seradi od A/ nejmensiho do Z/ nejvetsiho
sort($razene_pole);
print_r($razene_pole);

echo "<br>";

rsort($razene_pole); // opacne serazeni
print_r($razene_pole);

echo "<br>";

// vystup pole jako retezec - implode 

$pole_text = implode(",", $pole);

echo $pole_text;



?>