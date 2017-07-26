<?
session_start( );
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

    <script src="Chart.min.js"></script>
    <script type="text/javascript">
      var randomnb = function(){ return Math.round(Math.random()*300)};
    </script> 

  </head>

  <body>
    <div class="geral">
      <div id="header">
        <left><h1 class="cabecalho">H-CORE AUTOMA&Ccedil;&Atilde;O E TI</h1><p class="cabecalho">Utilizando a tecnologia para a melhorar a seguran&ccedil;a, o conforto, a sa&uacute;de e a criatividade humana</p></left><br>
      </div>
      <br>
      
      <div id="content">
        <br>
        <center>
          <tr><td>
            <br><br>
            <div class="box">
              <center><h3>Gr&aacute;fico consumo energ&eacute;tico (kW)</h3></center>

              <div class="box-chart">

                <canvas id="GraficoLine" style="width:100%;"></canvas>

                <script type="text/javascript">

                  var options = {
                    responsive:true
                  };

                  var data_meses = {
                    labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                    datasets: [
                      {
                        label: "Dados primários",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb()]
                      }
                    ]
                  };               

                </script>
              </div>
            </div>
            <br><br>
            <div class="box">
              <center><h3>Gr&aacute;fico consumo energ&eacute;tico comodo(kW)</h3></center>
              <div class="box-chart">

                <canvas id="GraficoPizza" style="width:100%;"></canvas>

                <script type="text/javascript">

                  var options_comodo = {
                    responsive:true
                  };

                  var data_comodo = [
                    {
                      value: randomnb(),
                      color:"#F7464A",
                      highlight: "#FF5A5E",
                      label: "Sala"
                    },
                    {
                      value: randomnb(),
                      color: "#46BFBD",
                      highlight: "#5AD3D1",
                      label: "Quarto"
                    },
                    {
                      value: randomnb(),
                      color: "#FDB45C",
                      highlight: "#FFC870",
                      label: "Cozinha"
                    }
                  ]


                </script>           
              </div>
            </div>
            <br><br>
            <div class="box">
              <center><h3>Gr&aacute;fico consumo h&iacute;drico (l)</h3></center>
              <div class="box-chart">

                <canvas id="GraficoBarra" style="width:100%;"></canvas>

                <script type="text/javascript">                                        

                  var options1 = {
                    responsive:true
                  };

                  var data1 = {
                    labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                    datasets: [
                      {
                        label: "Dados primários",
                        fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(151,187,205,0.75)",
                        highlightStroke: "rgba(151,187,205,1)",	
                        data: [randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb()]
                      }
                    ]
                  };                      
                </script>
                <script type="text/javascript"> 
                  window.onload = function(){
                    var linha = document.getElementById("GraficoLine").getContext("2d");
                    var LineChart = new Chart(linha).Line(data_meses, options);

                    var pizza = document.getElementById("GraficoPizza").getContext("2d");
                    var PizzaChart = new Chart(pizza).Pie(data_comodo, options_comodo);

                    var barras = document.getElementById("GraficoBarra").getContext("2d");
                    var BarChart = new Chart(barras).Bar(data1, options1);
                  }  
                </script>
              </div>    
            </div>

            </td></tr>
          <br>
          <hr width=50%>
          <br>
          <table class="tabela1">
            <tr><td>
              <br>
              <center><input class ="input1" type=button onClick="location.href='controle.php'" value="Controles"></center>
              <br>
              </td>
              <td>
                <br>
                <center><input class ="input1" type=button onClick="location.href='relatorio.php'" value="Status sensores"></center>
                <br>
              </td></tr>
          </table>
        </center>
        <br>
        <hr width=50%>
        <br>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>

      <div id="rodape2">
        <br>
        <center>

          <img src="http://i61.tinypic.com/2eeforo.png" border="0" alt="Image and video hosting by TinyPic"><img width="150px" height="80px" src="http://i61.tinypic.com/2ryiudl.jpg" border="0" alt="Image and video hosting by TinyPic"> <img width="150px" height="80px" src="http://i60.tinypic.com/2e3bhjb.jpg" border="0" alt="Image and video hosting by TinyPic"> <img width="80px" height="80px" src="http://i59.tinypic.com/j90y34.png" border="0" alt="Image and video hosting by TinyPic">

        </center>
        <br>
        <footer id="pRodape"><center>Desenvolvido com <span id="s2">❤</span> por Rennan, Miller, Paulo e Otavio.</center></footer>
      </div>
    </div>
  </body>
</html>