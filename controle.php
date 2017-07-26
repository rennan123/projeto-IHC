<?
session_start( );
$teste = 0;
if($_SESSION[validacao] =="1"){

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>H-CORE AUTOMA&Ccedil;&Atilde;O E TI</title>

    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="height=device-height">

    <script type="text/javascript">
      function mudacor()
      {

        $teste +=1;

      }
    </script>

    <script type="text/javascript">
      function camera()
      {

        window.open("http://192.168.168.57:81");

      }
    </script>

  </head>

  <?php flush(); ?>

  <body>
    <div class="geral">
      <div id="header">
        <left><h1 class="cabecalho">H-CORE AUTOMA&Ccedil;&Atilde;O E TI</font></h1><p class="cabecalho">Utilizando a tecnologia para a melhorar a seguran&ccedil;a, o conforto, a sa&uacute;de e a criatividade humana</font></p></left><br>
      </div>
      <br>
         
      <div id="content">
        <br>

        <center><table class="tabela">
          <thead><th>Lâmpada</th><th>Tomada</th></thead>
          <tr><td><center>
            <form method="POST" action="botao.php">
              <p><div>
              <input class ="input" type="hidden" value="0001" name="estado" >
              <input class ="input" type="submit" value="Sala" name="saida1" >

              </div></p>
            </form></center>
          </td>

          <td><center>
            <form method="POST" action="botao.php">
              <p>
                <input class ="input" type="hidden" value="0010" name="estado" >
                <input class ="input" type="submit" value="Televisão" name="saida2">
              </p>
            </form>
            </center></td></tr>

        <tr><td><center>
          <form method="POST" action="botao.php">
            <p>
              <input class ="input" type="hidden" value="0011" name="estado" >
              <input class ="input" type="submit" value="Cozinha" name="saida3">
            </p>
          </form>
          </center></td>

          <td><center>
            <form method="POST" action="botao.php">
              <p>

                <input class ="input" type="hidden" value="0100" name="estado" >
                <input class ="input" type="submit" value="Cafeteira" name="saida4">

              </p>
            </form>
            </center></td></tr>

        <tr><td><center>
          <form method="POST" action="botao.php">
            <p>
              <input class ="input" type="hidden" value="0101" name="estado">
              <input class ="input" type="submit" value="Quarto" name="saida5">
            </p>
          </form>
          </td>

          <td><center>
            <form method="POST" action="botao.php">
              <p>
                <input class ="input" type="hidden" value="0110" name="estado" >
                <input class ="input" type="submit" value="Computador" name="saida6">
              </p>
            </form>
            </center></td></tr>
        </table></center>

    <br><br>  

    <center><table class="tabela">

      <thead><th>CONTROLE</th><th>ELETRODOM.</th></thead> 

      <tr><td><center>	 
        <form method="POST" action="botao.php">
          <p>
            <input class ="input" type="hidden" value="0111" name="estado" >
            <input class ="input" type="submit" value="Som" name="com.voz">
          </p>
        </form>
        </center></td>

        <td><center>	 
          <form method="POST" action="botao.php">
            <p>
              <input class ="input" type="hidden" value="1000" name="estado" >
              <input class ="input" type="submit" value="TV" name="tv">
            </p>
          </form>
          </center></td></tr>

      <tr><td><center>	 
        <form method="POST" action="botao.php">
          <p>
            <input class ="input" type="hidden" value="1001" name="estado" >
            <input class ="input" type="submit" value="Estação+" name="canal+">
          </p>
        </form>
        </center></td>

        <td><center>	 
          <form method="POST" action="botao.php">
            <p>
              <input class ="input" type="hidden" value="1010" name="estado" >
              <input class ="input" type="submit" value="Canal+" name="volume+">
            </p>
          </form>
          </center></td></tr>

      <tr><td><center>	 
        <form method="POST" action="botao.php">
          <p>
            <input class ="input" type="hidden" value="1011" name="estado" >
            <input class ="input" type="submit" value="Estação-" name="canal-">
          </p>
        </form>
        </center></td>

        <td><center>	 
          <form method="POST" action="botao.php">
            <p>
              <input class ="input" type="hidden" value="1100" name="estado" >
              <input class ="input" type="submit" value="Canal-" name="volume-">
            </p>
          </form>
          </center></td></tr>
      </table></center>

            </table>
            <br><br>
            <center><table class="tabela">
              </center></td></tr>

    </table>
  <table class="tabela1" align="center">
    <tr><td>
      <br>
      <input class="input1" type ="button" onClick="location.href='relatorio.php'" value="Informação">
      <br><br>
      </td><td>
      <br>
      <input class ="input1" type="button" onClick="location.href='logoff.php'" value="Sair">
      <br><br>
      </td></tr>
  </table>
  </center>
<br>
</div>

<br>
</div>

<div id="rodape2">
  <br>
  <center>
    <img src="http://i61.tinypic.com/2eeforo.png" border="0" alt="Image and video hosting by TinyPic"><img width="150px" height="80px" src="http://i61.tinypic.com/2ryiudl.jpg" border="0" alt="Image and video hosting by TinyPic"> <img width="150px" height="80px" src="http://i60.tinypic.com/2e3bhjb.jpg" border="0" alt="Image and video hosting by TinyPic"> <img width="80px" height="80px" src="http://i59.tinypic.com/j90y34.png" border="0" alt="Image and video hosting by TinyPic">

  </center>

  <footer><font size = 1><center>Desenvolvido por: Pelos membros do grupo: Paulo, Rennan, Otavio e Miller.</center></font></footer>
</div>
</body>
</html>
<?
}
else
{
echo "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">alert (\"USUARIO INVALIDO!\");window.location.href='index.html';</SCRIPT>";
}
?>
