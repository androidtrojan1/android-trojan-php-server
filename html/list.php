<?php
$directory = 'logs';
$files = array_diff(scandir($directory), array('..', '.'));
foreach($files as $file){echo($file."\n");};
echo('END');
?>