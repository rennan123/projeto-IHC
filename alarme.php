<?php
  $port = fopen('/dev/ttyACM0', 'w');

	$shora = $_POST['hora'];
	$sminuto = $_POST['minuto'];
	$sequip = $_POST['equip'];

if($shora < 10 && $sminuto > 9)$temp ='p'.'0'.$shora.$sminuto.$sequip.'#';
elseif($shora < 10 && $sminuto < 10)$temp = 'p'.'0'.$shora.'0'.$sminuto.$sequip.'#';
elseif($shora > 9 && $sminuto < 10)$temp ='p'.$shora.'0'.$sminuto.$sequip.'#';
elseif($shora > 9 && $sminuto > 9)$temp ='p'.$shora.$sminuto.$sequip.'#';

	fwrite($port,$temp);

 fclose($port);
echo "<meta http-equiv=\"refresh\" content=\"0; url=controle.php\">";

?>
