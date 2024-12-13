<?php
$nick=$_POST['nickname'];
$heslo=$_POST['heslo'];
echo $nick.$heslo;


$kontrola_n='simon';
$kontrola_h='curacikalendar';

if($nick==$kontrola_n &&  $heslo==$kontrola_h  ){
    header('Location: mainpage.php');
}
else('Location:login.html');
?>