<?

session_start( );
$teste = 0;
if($_SESSION[validacao] =="1"){
}

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>H-CORE AUTOMAÇÃO E TI</title>

  <link rel="stylesheet" type="text/css" href="estilo2.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/layout.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <script type="text/javascript">
    function camera()
    {

      window.open("http://192.168.168.57:81");

    }
  </script>

</head>
<body>
  <section>
    <div id="header">
      <h1 class="cabecalho">H-CORE AUTOMAÇÃO E TI</h1>
      <p class="cabecalho">Utilizando a tecnologia para a melhorar a segurança, o conforto, a saúde e a criatividade humana</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div id="content" class="col-12">
        <div class="tabela col-12">
          <div class="col-6">
            <h3>Lâmpada</h3>
            <form method="POST" action="botao.php">
              <div>
                <input class ="input" type="hidden" value="0001" name="estado" >
                <input class ="input" type="submit" value="Sala" name="saida1" >

                <input class ="input" type="hidden" value="0011" name="estado" >
                <input class ="input" type="submit" value="Cozinha" name="saida3">

                <input class ="input" type="hidden" value="0101" name="estado">
                <input class ="input" type="submit" value="Quarto" name="saida5">

              </div>
            </form>
          </div>

          <div class="col-6">
            <h3>Tomada</h3>
            <form method="POST" action="botao.php">

              <input class ="input" type="hidden" value="0010" name="estado" >
              <input class ="input" type="submit" value="Televisão" name="saida2">

              <input class ="input" type="hidden" value="0100" name="estado" >
              <input class ="input" type="submit" value="Cafeteira" name="saida4">

              <input class ="input" type="hidden" value="0110" name="estado" >
              <input class ="input" type="submit" value="Computador" name="saida6">

            </form>
          </div>
        </div>
      </div>

      <div id="content" class="col-12">
        <div class="tabela col-12">
          <div class="col-6">
            <h3>Controle</h3>
            <form method="POST" action="botao.php">
              <div>
                <input class ="input" type="hidden" value="0111" name="estado" >
                <input class ="input" type="submit" value="Som" name="com.voz">

                <input class ="input" type="hidden" value="1001" name="estado" >
                <input class ="input" type="submit" value="Estação+" name="canal+">

                <input class ="input" type="hidden" value="1011" name="estado" >
                <input class ="input" type="submit" value="Estação-" name="canal-">

              </div>
            </form>
          </div>

          <div class="col-6">
            <h3>Eletrodoméstico</h3>
            <form method="POST" action="botao.php">

              <input class ="input" type="hidden" value="1000" name="estado" >
              <input class ="input" type="submit" value="TV" name="tv">

              <input class ="input" type="hidden" value="1010" name="estado" >
              <input class ="input" type="submit" value="Canal+" name="volume+">

              <input class ="input" type="hidden" value="1100" name="estado" >
              <input class ="input" type="submit" value="Canal-" name="volume-">

            </form>
          </div>
        </div>
      </div>

      <div id="content2" class="col-12">
        <div class="tabela1 col-12">
          <div class="col-6">
            <input class="input" type ="button" onClick="location.href='relatorio.php'" value="Informação">
          </div>
          <div class="col-6">
            <input class ="input" type="button" onClick="location.href='logoff.php'" value="Sair">
          </div>
        </div>
      </div>

    </div>
  </section>

  <section>
    <div id="rodape2">
      <center>
        <img id="img-space" src="http://i61.tinypic.com/2eeforo.png">
        <img width="130px" height="90px" src="http://i61.tinypic.com/2ryiudl.jpg">
        <img width="110px" height="90px" src="imagens/1600.png">
        <img width="150px" height="90px" src="imagens/linux.png">
      </center>
      <footer id="pRodape"><center>Desenvolvido por Rennan, Miller, Paulo e Otavio.</center></footer>
    </div>
  </section>

</body>
</html>