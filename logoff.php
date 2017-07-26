<?
ob_start( );

session_start( );

unset($_SESSION[usuario]);
unset($_SESSION[validacao]);

session_destroy( );

header("Location: index.html");
?>
