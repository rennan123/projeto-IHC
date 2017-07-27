<?
session_start( );
if($_SESSION[validacao] =="1"){
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>H-CORE AUTOMA&Ccedil;&Atilde;O E TI</title>
  <link rel="stylesheet" type="text/css" href="estilo2.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/layout.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <script src="Chart.min.js"></script>
  <script type="text/javascript">
    var randomnb = function(){ return Math.round(Math.random()*300)};
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
      <br>
      <br>
        <div class="box col-10">
          <h3>Gráfico consumo energético (kW)</h3>
          <br>

          <div class="box-chart">

            <canvas id="GraficoLine"></canvas>

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
        <br>
        <br>
        <br>
        <div class="box col-10">
        <br>
          <h3>Gráfico consumo energético comodo(kW)</h3>
          <br>
          <div class="box-chart">

            <canvas id="GraficoPizza"></canvas>

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
        <br>
        <br>
        <br>
        <br>
        <div class="box col-10">
        <br>
          <h3>Gráfico consumo hídrico (l)</h3>
          <br>
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

         <div id="margin20" class="tabela2 col-12">
           <input class ="input" type=button onClick="location.href='controle.php'" value="Controles">
           <input class ="input" type=button onClick="location.href='relatorio.php'" value="Informações">
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