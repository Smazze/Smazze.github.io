<?php

$datei = fopen("vbv.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("vbv.txt","w");
fwrite($datei, $count);
fclose($datei);

?>