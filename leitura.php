<?php
/*require("auxiliar.php");*/

$port=fopen("/dev/ttyACM0","w");
sleep(1);

fwrite($port,'q');

sleep(3);
$temp=file("/dev/ttyACM0");

$temperatura = $temp[0];//variavel para verificar temperatura

$umid_ar = $temp[1];//variavel para verificar umidade do ar

$umid_solo = $temp[2];//variavel para verificar umidade do solo

$vag = $temp[3];//variavel para verificar a vaga

$movi = $temp[4];//variavel para oa detecção de movimento

$alarm = $temp[5];//variavel para a verificação do funcionamento do alarme

$luze = $temp[6];//variavel para as luzes

$chuv = $temp[7];//variavel detectar chuva

$energ = $temp[8];//variavel para detectar energia

$abert_porta = $temp[9];//variavel para abertura de porta

$acion = $temp[10];//variavel para verificaçã do acionamento do alarme

$camp  = $temp[11];//variavel para avisar se alguém acionou a campanhia

$gases = $temp[12];//variavel para verificar o nivel dos gases

$fumaca = $temp[13];//variavel para avisar se há gases em demasia

$caixa_agua =$temp[14];//variavel para verificar o nivel da agua

$potencia = $temp[15];//variavel para verificar a potencia utilizad

$agua = $temp[16];//variavel agua gasta

$alarme1_h =  $temp[17];//hora alarme1

$alarme1_m =  $temp[18];//minuto alarme1

$alarme1_equip = $temp[19];//equip alarme1

$alarme2_h =  $temp[20];//hora alarme2

$alarme2_m =  $temp[21];//minuto alarme2

$alarme2_equip = $temp[22];//equip alarme2

$alarme3_h =  $temp[23];//hora alarme3

$alarme3_m =  $temp[24];//minuto alarme3

$alarme3_equip = $temp[25];//equip alarme3

$alarme4_h =  $temp[26];//hora alarme4

$alarme4_m =  $temp[27];//minuto alarme4

$alarme4_equip = $temp[28];//equip alarme4

$silencio = $temp[29];// verifica se o arduino esta no modo silencioso

$rele1 = $temp[30];// retorna o estado do rele1

$rele2 = $temp[31];// retorna o estado do rele2

$rele3 = $temp[32];// retorna o estado do rele3

$rele4 = $temp[33];// retorna o estado do rele4

$rele5 = $temp[34];// retorna o valor do rele5

$rele6 = $temp[35];//retorna o valor do rele6

$leitura =array("temp"=>$temperatura,"umid_ar"=>$umid_ar,"solo"=>$umid_solo,"vaga"=>$vag,"movi"=>$movi,"alarm"=>$alarm,"luze"=>$luze,"chuv"=>$chuv,"energ"=>$energ,"abert_porta"=>$abert_porta,"acion"=>$acion,"camp"=>$camp,"gases"=>$gases,"fumaca"=>$fumaca,"caixa_agua"=>$caixa_agua, "potencia_gasta"=>$potencia,"agua_gasta"=>$agua,"alarme1_h"=> $alarme1_h,"alarme1_m"=> $alarme1_m,"alarme1_equip"=> $alarme1_equip,"alarme2_h"=> $alarme2_h,"alarme2_m"=> $alarme2_m,"alarme2_equip"=> $alarme2_equip,"alarme3_h"=> $alarme3_h,"alarme3_m"=> $alarme3_m,"alarme3_equip"=> $alarme3_equip,"alarme4_h"=> $alarme4_h,"alarme4_m"=> $alarme4_m,"alarme4_equip"=> $alarme4_equip,"silencio"=> $silencio,"rele1"=> $rele1,"rele2"=>$rele2,"rele3"=>$rele3,"rele4"=> $rele4,"rele5"=>$rele5,"rele6"=>$rele6);
 
?>

