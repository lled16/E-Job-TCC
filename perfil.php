
<?php 
  ini_set( 'display_errors', 0 );
  session_start(); 
  if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
      header("location: login-obrigatorio.php");
  }else {
            
   
?>

<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <!--Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Materialize CSS-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <link rel="icon" href="imagens/logo3.png">
      <link rel="stylesheet" type="text/css" href="css/hover.css">
      <link rel="stylesheet" type="text/css" href="css/style-all.css">
      <link rel="stylesheet" type="text/css" href="css/perfil.css">
      <meta charset="utf-8">
      <title>E-JOB</title>
    </head>
    <body style="background-color: white;">

      <!-- Parallax -->
      <div class="parallax-container" style="height: 480px;">

      <!-- Abre NAVBAR -->
        <?php
          include "php/header.php";
          include "php/exibeNomeUsuario.php";
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

      <div class="parallax" style="width: 100%;"><img src="imagens/transparente.png" style="background-image: url(imagens/dg-8.jpg); background-size: cover;"  class="responsive-img"></div> 
        <div class="section white-text" style="padding: 0;">
          <div class="row center" style="margin: 0;">
            
             <div class="row z-depth-0" style=" width: 100%; margin-bottom: 0;">

              <?php

              $emailSession = $_SESSION["email"];

              $search = mysqli_query($conexao, "SELECT * FROM usuario WHERE email ='$emailSession'");
              $dados = mysqli_fetch_array($search);

              $foto = $dados['foto']; 

              ?>

              <div class="col s12 m12 l12 white-text" style="padding: 0;">
                <br><br>
                <center>
                  <div class="z-depth-0" style="background-image: url(fotosPerfil/<?php echo $foto; ?>); background-position: center; background-repeat: no-repeat; background-size: 100%; height: 230px; width: 230px; position: relative; overflow: hidden;">
                      
                  </div>
                </center>

                <div style="position: relative;">
                  <a href="edicao-usuario.php" class="btn-flat waves-effect waves-light right" style="background-color: lightgrey; position: absolute; bottom: 0; right: 0; margin-right: 10px; margin-bottom: 10px;">Editar Perfil</a>
                  <div style="text-shadow: black 0.05em 0.1em 0.1em;">
                    <div><h4 style="padding: 1.5% 0% 0% 0%; margin: 0;"><?php echo $snomecompleto; ?></h4></div>
                    <div><p style="padding: 0.5% 0% 0% 0%; margin: 0;">(<?php echo $_SESSION["email"]; ?>)</p></div>
                    <br><br>
                  </div>
                </div>
              </div> 

            </div><!-- Fecha Topo -->

          </div>
        </div>
      </div>
      
      <div style="width: 100%;">
        <div class="z-depth-5 bg-iron" style="margin: 0; padding: 0;">
          <div class="center">

            <div class="row" style="margin: 0; padding-bottom: 20px;">

              <div class="white" style="margin-bottom: 0px;"><h5 style="margin: 0; padding: 1.5%;">Meus Anúncios</h5></div>
              
              <div class="col s12 m12 l12" style="padding-bottom: 10px; width: 97%; padding-left: 3%;">

                


                <!-- Busca todos os anuncios do usuario -->
                <?php 

                include "buscaCardsPerfil.php";

                ?>
                <!-- Busca todos os anuncios do usuario -->        


              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Abre Footer -->
        <?php
          include "php/footer.php"
        ?>
      <!-- Fecha Footer -->
             
      <!-- JQuery -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
      <!--Materialize JavaScript-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <?php
        include "js/navbar-js.php"
      ?>

      <!-- Inicia TABS -->

      <script type="text/javascript">
        $(document).ready(function(){
            $('.tabs').tabs();
          });
      </script>
      

      <script type="text/javascript">
        $(document).ready(function() {
        $(".card").addClass("s-transition");
      });
      </script>

      <script type="text/javascript">
        $(document).ready(function(){
           $('.parallax').parallax();
         });
      </script>

      <!-- Iniciando tooltip -->

      <script type="text/javascript">
        $(document).ready(function(){
            $('.tooltipped').tooltip();
          });
      </script>

      <!-- iniciando limite cararcteres -->
      <script type="text/javascript">
      $(document).ready(function() {
          $('input#input_text, textarea#textarea1').characterCounter();
        });
      </script>

    </body>
  </html>

  <?php  } ?>