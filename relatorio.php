<?
session_start( );
if($_SESSION[validacao] =="1"){

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>H-CORE AUTOMA&Ccedil;&Atilde;O E TI</title>

    <meta name="viewport" content="">
    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="height=device-height">

    <script type="text/javascript">
      function camera()
      {

        window.open("http://192.168.168.57:81");

      }

    </script>

  </head>

  <body>

    <div class="geral">
      <div id="header">
        <left><h1 class="cabecalho">H-CORE AUTOMA&Ccedil;&Atilde;O E TI</h1><p class="cabecalho">Utilizando a tecnologia para a melhorar a seguran&ccedil;a, o conforto, a sa&uacute;de e a criatividade humana</a></p></left><br>
    </div>
    <br>
    
    <div id="content">
      <br>
      <center>
        <table class="tabela1">
          <th>STATUS SENSORES</th>
          <tr><td>
            <ul style="list-style-type:none">
              <p>Temperatura atual: 18°C</p>
              <p>Umidade do ar: 45%</p>
              <p>Porta: Fechada</p>
              <p>Energia gasta (W): 1000</p>
              <p>Agua gasta (L): 300</p>
            </ul>
            </td></tr></table>
        <br><br>
        <table class="tabela1">
          <tr><td><center>
            <br>
            <input class ="input1" type=button onClick="location.href='controle.php'"value="Controles">
            </center><br></td>

            <td><center>
              <br>
              <input class ="input1" type=button onClick="location.href='graficos.php'" value="Graficos">
              </center>
              <br>
            </td></tr>
        </table>
      </center>

      <br>
      <hr width=50%>
      <br>
    </div>
    <br>

    <div id="rodape2">
      <br>
      <center>

        <img src="http://i61.tinypic.com/2eeforo.png" border="0" alt="Image and video hosting by TinyPic"><img width="150px" height="80px" src="http://i61.tinypic.com/2ryiudl.jpg" border="0" alt="Image and video hosting by TinyPic"> <img width="150px" height="80px" src="http://i60.tinypic.com/2e3bhjb.jpg" border="0" alt="Image and video hosting by TinyPic"> <img width="80px" height="80px" src="http://i59.tinypic.com/j90y34.png" border="0" alt="Image and video hosting by TinyPic">

      </center>

      <footer><font size = 1><center>Desenvolvido por: Miller C&eacute;sar de Oliveira, H-CORE solu&ccedil;&otilde;es em tecnologia de automa&ccedil;&atilde;o e TI 2015, contato <a href="mailto:miller00315@gmail.com">miller00315@gmail.com</a></center></font></footer>
    </div>
    </div>
  </body>
<meta HTTP-EQUIV='refresh' CONTENT='10'>
</html>

<?
}
else
{
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"USUARIO INVALIDO!\");window.location.href='index.html';</SCRIPT>";
}
?>
