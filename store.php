<?php
$file=fopen("location.txt","w");
$txt="latitude : ". $_GET["latitude"] . "\n longitude :" . $_GET["longitude"] ."\n the ip address".$_SERVER["REMOTE_ADDR"]. "\n user agent".$_GET["uagent"];
fwrite($file,$txt);
fclose($file);
?>