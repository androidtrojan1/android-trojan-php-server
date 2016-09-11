<?php
$header = $_SERVER['HTTP_TIME'];
$uploaddir = 'logs/';
$uploadfile = $uploaddir . basename($_FILES['uploadedfile']['name']);
move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadfile);
if(!empty($header)){
$myfile = fopen("times.txt", "a");
fwrite($myfile, $header."   -----     ".basename($_FILES['uploadedfile']['name'])."\n");
fclose($myfile);} 
?>
