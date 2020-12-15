<?php

$datei = fopen("visitor.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("visitor.txt","w");
fwrite($datei, $count);
fclose($datei);

?>