<?php 

function trataPesquisa($str) {
 
    //Array de acentos
    $map = array(
      'á' => 'a', 
      'à' => 'a', 
      'ã' => 'a', 
      'â' => 'a',
      'é' => 'e', 
      'ê' => 'e', 
      'í' => 'i', 
      'ó' => 'o', 
      'ô' => 'o', 
      'õ' => 'o', 
      'ú' => 'u', 
      'ü' => 'u', 
      'ç' => 'c', 
      'Á' => 'A', 
      'À' => 'A', 
      'Ã' => 'A', 
      'Â' => 'A', 
      'É' => 'E', 
      'Ê' => 'E', 
      'Í' => 'I', 
      'Ó' => 'O', 
      'Ô' => 'O', 
      'Õ' => 'O', 
      'Ú' => 'U', 
      'Ü' => 'U', 
      'Ç' => 'C'
  );
 
    //Array para REGEXP
    $regpx = array(
      'a' => '(a|á|&aacute;|à|&agrave;|â|&acirc;|ã|&atilde;)', 
      'A' => '(a|á|&aacute;|à|&agrave;|â|&acirc;|ã|&atilde;)', 
      'e' => '(e|é|&eacute;|è|&egrave;|ê|&ecirc;)', 
      'E' => '(e|é|&eacute;|è|&egrave;|ê|&ecirc;)', 
      'i' => '(i|í|&iacute;|ì|&igrave;|î|&icirc;)', 
      'I' => '(i|í|&iacute;|ì|&igrave;|î|&icirc;)', 
      'o' => '(o|ó|&oacute;|ò|&ograve;|ô|&ocirc;|õ|&otilde;)', 
      'O' => '(o|ó|&oacute;|ò|&ograve;|ô|&ocirc;|õ|&otilde;)', 
      'u' => '(u|ú|&uacute;|ù|&ugrave;|û|&ucirc;)', 
      'U' => '(u|ú|&uacute;|ù|&ugrave;|û|&ucirc;)', 
      'ç' => '(c|ç|&#231;)', 
      'c' => '(c|ç|&#231;)'
  );
 
    //Substituindo acentos
    $str = strtr($str, $map);
 
    //Substituindo vogais e ç para REGEXP
    $str = strtr($str, $regpx);
 
    return ($str);
}











 ?>
<?php include_once("conexao.php");
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
if(!isset($_GET['pesquisar'])){
  header("Location: index.php");
}else{
  $valor_pesquisar = $_GET['pesquisar'];
}


//Selecionar todos os cursos da tabela
$result_serv = "SELECT * FROM servico WHERE LOWER(titulo) LIKE %$valor_pesquisar%";
$resultado_servico = mysqli_query($conexao,$result_serv);


?>

<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <!--Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Materialize CSS-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="imagens/logo3.png">
      <link rel="stylesheet" type="text/css" href="css/hover.css">
      <link rel="stylesheet" type="text/css" href="css/style-all.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>E-JOB</title>
    </head>
    <body class="bg-iron" >

      <style type="text/css">
        .filtros{
          width: 31%; 
          display: inline-block; 
          padding: 7% 3% 3% 3%;
          text-decoration: none;
        }
        .linkfiltros{
          text-decoration: none;
          color: #212121;
        }
      </style>

      <!-- Parallax -->
      <div class="parallax-container" style="height: 440px;">

      <!-- Abre NAVBAR -->
        <?php

          session_start();


          include "php/header.php";

        ?>
      <!-- Fecha NAVBAR -->

      <?php 

        function random() {
          $min = 1;
          $max = 9;
          $num = rand ($min ,$max );

          return $num;
        }


      ?>

      <div class="parallax"><img src="imagens/transparente.png" style="background-image: url(imagens/bg-<?php echo random();?>.jpg); background-size: cover;"  class="responsive-img"></div> 
        <div class="section white-text" style="padding: 0;">
          <div class="row" id="search-width">
            <div class="center">
              <h3 style="margin-top: 14%; padding: 0;">Encontre o serviço que você precisa</h3>
              <br>
              <nav class="grey lighten-2" style="width: 80%; margin-left: 9%;">
                <div class="nav-wrapper">

                  <!-- Search box 2 -->
                  <form action="pesquisar.php" method="GET" style="width: 100%; display: inline-block;">
                    <div class="input-field white">
                      <input id="search2"  type="search" placeholder="Buscar..." name="pesquisar" required>
                      <label class="label-icon" for="search2"><i class="material-icons black-text">search</i></label>
                      <i class="material-icons black-text" onclick="document.getElementById('search2').value='';">close</i>
                    </div>
                  </form>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <!-- Fecha Parallax -->

      <!-- Barra Ordenar -->

      <div class="section" style="padding-top: 0%; padding-bottom: 0%; box-sizing: border-box;">
        <div class="row center" style="margin: 0;">

          <div class="col s12 m12 l12 center" style="max-height: 60px;">

            <span>
              
            </span>

          </div>
        </div>
      </div>
      
      <!-- Barra topo cards -->
      <div class="section show-on-medium-and-down" hidden="hidden" style="padding-top: 0%; padding-bottom: 0%; box-sizing: border-box;">
        <div class="row center" style="margin: 0;">
          <div class="col s12 m12 l12 center" style="max-height: 60px;">
            
          </div>
        </div>
      </div>

      <div class="section" style="padding: 0;">
        <div class="row" style="padding-top: 10px;">

    <!-- Barra Lateral -->
          <div class="col s0 m0 l3 left hide-on-med-and-down white z-depth-0" id="barra-lateral" style=" width: 24%; margin-left: 1%; box-sizing: border-box; padding: 0;">

            <h6 style="color: black; padding-bottom: 5px; text-align:center;"><B>&nbsp;&nbsp;&nbsp;FILTROS</B></h6>

            <ul class="collapsible" style="margin-bottom: 0;">
              <li class="active">
                <div class="collapsible-header" style="pointer-events: none;"><i class="material-icons">local_offer</i>Categoria</div>
                <div class="collapsible-body" style="padding: 0; padding-top: 10px; text-align: center; font-size: 15px; padding-bottom: 20px;">

                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Babá" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">child_friendly</i><br>Babá</a>
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Beleza" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">face</i><br>Beleza</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Chaveiro" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">vpn_key</i><br>Chaveiro</a> 
                  </div> 
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Comida" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">local_dining</i><br>Comida</a> 
                  </div> 
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Conserto" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">build</i><br>Conserto</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Construção" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">gavel</i><br>Construção</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Domestico" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">home</i><br>Domestico</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Elétrica" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">power</i><br>Elétrica</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Eventos/Festas" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">grade</i><br>Festas</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Informática" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">desktop_windows</i><br>Informática</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Limpeza" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">delete_sweep</i><br>Limpeza</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Manutenção" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">settings</i><br>Manutenção</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Maquiagem" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">brush</i><br>Maquiagem</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Montagem/Instalação" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">view_array</i><br>Montagem</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Mudança" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">weekend</i><br>Mudança</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Pintura" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">format_paint</i><br>Pintura</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Reforma" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">transform</i><br>Reforma</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Tradução" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">translate</i><br>Tradução</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Transporte" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">commute</i><br>Transporte</a> 
                  </div>
                  <div class="filtros hvr-float-shadow">
                    <a href="pesquisar.php?pesquisar=Turismo" class="linkfiltros"><i class="medium material-icons" style="font-size: 3rem;">explore</i><br>Turismo</a> 
                  </div>
                </div>
              </li>
            </ul>

            <ul class="collapsible" style="margin: 0;">
              <li class="active">
                <div class="collapsible-header" style="pointer-events: none;"><i class="material-icons">attach_money</i>Valor</div>
                <div class="collapsible-body">
                  <form action="pesquisar.php">
                    <p style="text-align:center;"> Valor Até:</p>
                    <span><strong>R$ 0,00 &nbsp;</strong></span>
                    <p class="range-field" style="width: 40%; display: inline-block;">
                      <input type="range" id="range" onmouseleave="setaValue();" onclick="setaValue();" min="0" max="10000" />
                    </p>
                    <span id="rangeValue" style="text-align:center;"><strong>R$10.0000.00</strong></span>
                    <br><br>
                    <div style="text-align: right; margin: -4%;"><a href="#" class="btn-flat waves-effect waves-light" style="background-color: lightgrey;">Aplicar</a></div>
                  </form>

                </div>
              </li>
            </ul>

            <script type="text/javascript">
                function pegaValue(){

                  var range = $("#range");
                  return range.val();
              
                }

                function setaValue(){

                  var caixa = $('#rangeValue');
                  var range = $("#range");
                
                  caixa.val(range.val());
                  caixa.html("<strong>R$"+range.val()+",00</strong>");

                  range.blur();

                }

              </script>

            <ul class="collapsible" style="margin: 0;">
              <li>
                <div class="collapsible-header"><i class="material-icons">place</i>Local</div>
                <div class="collapsible-body"><a href="pesquisar.php?pesquisar=MG">MG</a> </div>
              </li>
            </ul>
            <ul class="collapsible" style="margin: 0;">
              <li>
                <div class="collapsible-header"><i class="material-icons">date_range</i>Data</div>
                <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
              </li>
            </ul>
                
          </div>
                  
    <!-- Lista dos Cards -->
          <div class="col s12 m12 l9" style="box-sizing: border-box;">

<?php 

$pegar = mysqli_query($conexao, "SELECT * FROM servico WHERE LOWER(titulo) REGEXP '".trataPesquisa($valor_pesquisar)."' OR LOWER(categoria) REGEXP '".trataPesquisa($valor_pesquisar)."' ORDER BY id_serv DESC");

// A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona
while($campo = mysqli_fetch_array($pegar)){ ?>

  <div class="col s12 m4 l4 " style="padding: 10px; z-index: 0;">
    <div class="card z-depth-2 hoverable" style="width: 100%; margin: 0;">
      <div class="card-image waves-effect waves-block waves-light center-align" style="height: 15rem; text-align: center;">
        <a href="anuncio.php?id=<?= $campo['id_serv'];?>"><img src="arquivos/<?php echo $campo['img1'];?>" style=" height: 100%; width: auto;"></a>
      </div>
      <div class="card-content">
        <div><span class="card-title grey-text text-darken-4 truncate" style=" width: 90%; margin: 0;"><a href="anuncio.php?id=<?= $campo['id_serv'];?>" style="text-decoration: none; color: black;"><?= $campo['titulo'];?></a></span>
        <span><i class="material-icons right activator" style="cursor: pointer; width: 10%; margin: 0;">
        expand_less</i></span></div>
        <div style="font-size: 3px; color: transparent;">-</div>
        <span style="background-color: rgba(0,0,0, 0.17); padding: 0% 4% 1% 4%; border-radius: 50px;"><?= $campo['categoria'];?></span>
        <div style="font-size: 20px; padding-top: 2%;"><b><?php if($campo['valor'] == 0){echo "A combinar";}else{ echo "R$". $campo['valor'];}?></b></div>
        <div><?= $campo['cidade'];?>, <?= $campo['estado'];?></div>
      </div>
      <div class="card-reveal" style="padding: 18px;">
        <i class="material-icons card-title right sticky-action">expand_more</i>
        <span class="card-title grey-text text-darken-4"><b><?= $campo['titulo'];?></b></span>
        <p>Descrição:</p>
        <p style="border: 1px solid lightgrey; padding: 6%;"><?= nl2br($campo['descricao']);?></p>
      </div>
    </div>
  </div>

<?php } ?>



 </div><!-- Fecha Coluna dos Cards -->
         
        </div><!-- Fecha row -->
      </div><!-- Fecha section -->

      

      <div style=" background-image: url(imagens/pr1.jpg); background-size: cover; background-position: center;">
      <!-- Abre Footer -->
        <?php
          include "php/footer.php"
        ?>
      <!-- Fecha Footer -->
      </div>
      

    <!-- JQuery -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
    <!--Materialize JavaScript-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function(){
           $('.parallax').parallax();
         });
      </script>

      <script type="text/javascript">
        $(document).ready(function() {
        $(".card").addClass("s-transition");
      });
      </script>

      <script type="text/javascript">
        $(document).ready(function(){
            $('.collapsible').collapsible();
          });
      </script>

      <?php
        include "js/navbar-js.php"
      ?>

    </body>
  </html>


