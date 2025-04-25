<?php
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");
$log = "$time - $ip\n";
file_put_contents("ips.txt", $log, FILE_APPEND);
?>
