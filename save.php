<?php

$upload_dir = "uploads/";
$img = $_POST['hidden_data'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = $upload_dir . mktime() . ".png";
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
//$finalUrl = "http://" . $_SERVER['SERVER_NAME'] . "/" . $file;
//print $file;
$myFile = $file;
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh,$data);
fclose($fh);
