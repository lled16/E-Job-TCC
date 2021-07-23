

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
      <link rel="stylesheet" type="text/css" href="css/pos-cadastro.css">
      <meta charset="utf-8">
      <title>E-JOB</title>
    </head>
    <body style="background-image: url(imagens/bg-1.jpg); background-size: cover; background-attachment: fixed;">

      <!-- Abre NAVBAR -->
      <?php
        include "php/header.php"
      ?>
      <!-- Fecha NAVBAR -->

      <div class="section" style="padding-top: 1%;">
        <div class="row center" style="width: 95%;">
          <div class="col s12 m12 l12">
            <div class="separador-blue bg-bluegreen" style="width: 100%;"></div>
            <div class="white z-depth-5 bg-iron" style="margin-top: 0; padding-left: 0; padding-right: 0;">

              <p id="bv" style="font-size: 20px;">Bem vindo(a), <?php echo  $snomecompleto; ?>!</p>

              <div class="row" style="width: 98%; padding-bottom: 5%; margin: 2% 2% 0% 2%;">

                <div class="col s12 m4 l4" style="padding: 0;">
                  <a href="perfil.php" style="color: white;">
                    <div class="card-panel bg-radialblue hvr-icon-push waves-effect waves-light hoverable z-depth-4" style="padding: 15%; width: 90%; border-radius: 10%;">
                      <i class="material-icons hvr-icon" style="font-size: 6rem; text-decoration: none;">account_circle</i>
                      <p style="font-size: 1.5rem">Editar <br> Perfil</p>
                    </div>
                  </a>
                </div>

                <div class="col s12 m4 l4" style="padding: 0;">
                  <a href="cadastro-anuncio.php" style="color: white;">
                    <div class="card-panel bg-radialblue hvr-icon-float waves-effect waves-light hoverable z-depth-4" style="padding: 15%; width: 90%; border-radius: 10%;">
                      <i class="material-icons hvr-icon" style="font-size: 6rem; text-decoration: none;">loupe</i>
                      <p style="font-size: 1.5rem">Criar <br> Anúncio</p>
                    </div>
                  </a>
                </div>

                <div class="col s12 m4 l4" style="padding: 0;">
                  <a href="index.php" style="color: white;">
                    <div class="card-panel bg-radialblue hvr-icon-wobble-horizontal waves-effect waves-light hoverable z-depth-4" style="padding: 15%; width: 90%; border-radius: 10%;">
                      <i class="material-icons hvr-icon" style="font-size: 6rem; text-decoration: none;">exit_to_app</i>
                      <p style="font-size: 1.5rem">Visualizar <br> Anúncios</p>
                    </div>
                  </a>
                </div>

                

              </div>
            </div>      
          </div><!-- Fecha col -->
        </div><!-- Fecha row -->

        <!-- Abre Footer -->
        <?php
          include "php/footer.php"
        ?>
        <!-- Fecha Footer -->

      </div><!-- Fecha section -->

             
      <!-- JQuery -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
      <!--Materialize JavaScript-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <?php
        include "js/navbar-js.php"
      ?>

    </body>
  </html>

  <?php } ?>