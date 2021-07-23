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
      <link rel="stylesheet" type="text/css" href="css/cadastro-anuncio.css">
      <link rel="stylesheet" type="text/css" href="css/login-obrigatorio.css">
      <meta charset="utf-8">
      <title>E-JOB</title>
    </head>
    <body style="background-color: lightgrey; background-size: cover;">

      <!-- Abre NAVBAR -->
        <?php
          include "php/header.php";
        ?>

        <style type="text/css">
          #nav-scroll{
            background-color: #0d47a1 !important;
          }
        </style>
      <!-- Fecha NAVBAR -->

      <!-- Abre o FORM -->  
      <div id="largura">
        <div class="center">
	        <div class="col s12 m12 l12"> 
            <br><br>
	        	
	            <!-- <div class="separador-blue bg-bluegreen" style="width: 100%; padding: 0.3%;"></div> -->
	              
	            <div style="margin-top: 0; padding-left: 0; padding-right: 0;">

	            	<br><br>

	            	<h4 id="titulo-cad-a" style=" margin-top: 0; color: #616161;">Para acessar esta página é necessário estar logado!</h4>
	            	
	            	<img src="imagens/perso-3.png" style="width: 30%;">
	            	
	            	<h5 style="color: #616161;">Se ainda não é cadastrado, clique <a href="cadastro-usuario.php">aqui</a> e realize seu cadastro.</h5>

	            	<br><br><br>

	              
	            </div>
	        </div>
        </div><!-- Fecha row -->
      </div><!-- Fecha section -->

      <br><br><br>

     
             
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