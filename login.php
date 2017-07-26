<?php

ob_start( );

$login = $_POST['login'];
$senha = $_POST['senha'];/*
$db = mysql_connect("localhost","root","oitavo123") or die("imposssivel conectar");
$baseados = mysql_select_db("hcore") or die("nao existe db");

$confirmacao = mysql_query("select * from usuario where nome='$login' and senha='$senha' ",$db) or die("nao existe usuario");

$contagem = mysql_num_rows($confirmacao);*/

$contagem = 1;

if($contagem > 0)
{
	$validacao = "1";

	$usuario = $_POST['login'];

	session_start( );

	$_SESSION[usuario]=$usuario;
	$_SESSION[validacao]=$validacao;

	header("Location: controle.php");
}
else
{
	echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"USUARIO E/OU SENHA INVALIDO(S)!\");window.location.href='index.html';</SCRIPT>";
}

?>
