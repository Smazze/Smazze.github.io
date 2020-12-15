<?php
error_reporting(0);
$user_agent  = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];$GLOBALS_LOCATION=$GLOBAL.'l';
$details = json_decode(file_get_contents("http://api.ipstack.com/".$ip."?access_key=e06d27ac9f91465b417e3cac71fcb8ec"));
$negara = $details->country_code;
$nama_negara = $details->country_name;
$kode_negara = strtolower($country_code);
$kota        = $details->city;
$state        = $details->region_name;
?>