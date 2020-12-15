<?php

$datei = fopen("login.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("login.txt","w");
fwrite($datei, $count);
fclose($datei);

?>