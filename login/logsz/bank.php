<?php

$datei = fopen("bank.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("bank.txt","w");
fwrite($datei, $count);
fclose($datei);

?>