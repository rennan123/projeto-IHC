<?php

  $port = fopen('/dev/ttyACM0', 'w');
	
	$sequip = $_POST['estado'];
	
	$temp ='s'.$sequip.'#';

	fwrite($port,$temp);
	
 fclose($port);

 sleep(1);

echo "<meta http-equiv=\"refresh\" content=\"0; url=relatorio.php\">";

?>