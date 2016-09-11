<?php
$post = file_get_contents("php://input");
$myfile = fopen("log.txt", "a");
fwrite($myfile, gmdate("d-m-Y\ H:i:s", microtime(true)) . " --- ". $post."\n");
fclose($myfile); 


?>
