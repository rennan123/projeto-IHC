<?
session_start( );
if($_SESSION[validacao] =="1"){
?>

<?php
//$sock - Váriavel declarada para criação de socket;
//socket_create - função do php para habilitar um novo socket
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//socket_connect
socket_connect($sock, "192.168.0.20", 80);

	if ($_POST['estado']=="0000")
	{
		socket_write($sock,"a");
	}
	if ($_POST['estado']=="0001")
	{
		socket_write($sock,"b");
	}
	if ($_POST['estado']=="0010")
	{
		socket_write($sock,"c");
	}
	if ($_POST['estado']=="0011")
	{
		socket_write($sock,"d");
	}
	if ($_POST['estado']=="0100")
	{
		socket_write($sock,"e");
	}
	if ($_POST['estado']=="0101")
	{
		socket_write($sock,"f");
	}
	if ($_POST['estado']=="0110")
	{
		socket_write($sock,"g");
	}
	if ($_POST['estado']=="0111")
	{
		socket_write($sock,"h");
	}
	if ($_POST['estado']=="1000")
	{
		socket_write($sock,"i");
	}
	if ($_POST['estado']=="1001")
	{
		socket_write($sock,"j");
	}
	if ($_POST['estado']=="1010")
	{
		socket_write($sock,"k");
	}
	if ($_POST['estado']=="1011")
	{
		socket_write($sock,"l");
	}
	if ($_POST['estado']=="1100")
	{
		socket_write($sock,"m");
	}
	if ($_POST['estado']=="1101")
	{
		socket_write($sock,"n");
	}
	if ($_POST['estado']=="1110")
	{
		socket_write($sock,"o");
	}
	if ($_POST['estado']=="1111")
	{
		socket_write($sock,"p");
	}
	 socket_close($sock);
echo("<script>window.location.href=\"controle.php\";</script>");
?>

<?
}
else
{
echo("<script>window.location.href=\"index.html\";</script>");
}
?>
