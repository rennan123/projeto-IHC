<?
session_start( );
if($_SESSION[validacao] =="1"){
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>H-CORE AUTOMAÇÃO E TI</title>

  <meta name="viewport" content="">
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
      <h6 class="cabecalho">Utilizando a tecnologia para a melhorar a segurança, o conforto, a saúde e a criatividade humana</h6>
    </div>
  </section>

  <section>
    <div class="container">
      <div id="content" class="col-12">
        <div class="tabela2 col-12">
          <div class="col-12">
            <h1>Status dos Sensores</h1>
            <div id="font20">
              <br>
              <p>
                Temperatura atual: 18°C
                <img id="img-lados-iguais" src="imagens/temperatura.png" alt="temperatura">
              </p>
              <p>
                Luz do quarto: Acessa
                <img id="img-lados-iguais" src="imagens/luz_acesa.png" alt="luz-acesa">
              </p>
              <p>
                Luz da sala: Apagada
                <img id="img-lados-iguais" src="imagens/luz_apagada.png" alt="luz-apagada">
              </p>
              <p>
                Porta da frente: Fechada
              </p>
              <p>
                Energia gasta: 1000 Watts
              </p>
              <p>
                Água gasta: 300 Litros
              </p>
              <p>
                Luz da cozinha: Apagada
              </p>
              <p>
                Computador: Ligado

              </p>
              <p>
                Cafeteira: Ligada

              </p>
              <p>
                Som: Desligado

              </p>
              <p>
                Televisão da sala: Ligada

              </p>
            </div>
          </div>
        </div>
      </div>

      <div id="content" class="col-12">
        <div class="tabela2 col-12">
          <input class ="input" type=button onClick="location.href='controle.php'" value="Controles">
          <input class ="input" type=button onClick="location.href='graficos.php'" value="Gráficos">
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