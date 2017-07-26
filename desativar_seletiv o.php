<?php
  $port = fopen('/dev/ttyACM0', 'w');
	
	
	$sequip = $_POST['equip'];

	$temp ='s'$sequip.'#';
	
	fwrite($port,$temp);

 fclose($port);
echo "<meta http-equiv=\"refresh\" content=\"0; url=controle.php\">";

?>