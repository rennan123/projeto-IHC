<?php
$port = fopen("/dev/ttyACM0",w);
sleep(2);
fwrite($port,'q');
fclose($port);
?>
