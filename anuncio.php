<?php session_start(); ?>
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
      <meta charset="utf-8">
      <title>E-JOB</title>
    </head>
    <body style="background-image: url(imagens/dg-8.jpg); background-size: 100%;">

      <!-- Abre NAVBAR -->
        <?php
          include "php/header.php";
        ?>
      <!-- Fecha NAVBAR -->

      <?php 

        include "conexao.php";

        $id_serv = $_GET['id'];
        $busca = mysqli_query($conexao, "SELECT * FROM servico WHERE id_serv = '$id_serv'");
        $dado = mysqli_fetch_array($busca);

        $email = $dado['email_serv'];

        $query = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email'");
        $data = mysqli_fetch_array($query);

      ?>

      <?php //Contabilização de views
        $sql = mysqli_query($conexao, "SELECT visualizacoes FROM servico WHERE id_serv = '$id_serv'");
        $fetch = mysqli_fetch_array($sql);
        $visu = $fetch['visualizacoes'];
        $visu = $visu + 1;
        echo $visu;

        $sql2 = mysqli_query($conexao, "UPDATE servico SET visualizacoes = '$visu' WHERE id_serv = '$id_serv'")
      ?>

      <div style="padding: 0.5% 0% 0% 0%; width: 100%;">
        <div class="center">
          <div class="col s12 m12 l12">  
            <div class="bg-iron" style="margin-top: 0; padding-left: 0; padding-right: 0;">

              <div class="row" style="padding-top: 10px; margin: 0;">
                <div class="col s1"></div>
               <!--  <div class="col s10 white z-depth-0" style="margin-left: 20px; margin-right: 20px; padding: 0; width: 81.5%;"><h4><?php echo $dado['titulo']; ?></h4></div> -->

              </div>
              

              <div class="row" style=" margin: 10px 2% 0% 2%;">

                <div class="col s1"></div>
                
                <!-- Slider -->
                <div class="col s7 white" style="padding: 0; margin: 0px;">
                  <div class="carousel carousel-slider center" style="height: 500px; width: auto;">
                    <div class="carousel-fixed-item center" style="bottom: 0; margin-bottom: 430px; background-color: rgba(0,0,0, 0.3); color: #FFF; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                      <h4 class="truncate" style="padding-left: 2%; padding-right: 2%;"><?php echo $dado['titulo']; ?></h4>
                    </div>
                    <div class="carousel-item white-text" href="#one!">
                      <img src="arquivos/<?php echo $dado['img1']; ?>" style="height: 100%; width: auto;">
                    </div>
                    <div class="carousel-item white-text" href="#two!">
                      <img src="arquivos/<?php if(empty($dado['img2'])){ echo $dado['img1'];}else{ echo $dado['img2'];} ?>" style="height: 100%; width: auto;">
                    </div>
                    <div class="carousel-item white-text" href="#three!">
                      <img src="arquivos/<?php if(empty($dado['img3'])){ echo $dado['img1'];}else{ echo $dado['img3'];} ?>" style="height: 100%; width: auto;">
                    </div>
                    <div class="carousel-item white-text" href="#four!">
                      <img src="arquivos/<?php if(empty($dado['img4'])){ if(empty($dado['img2'])){ echo $dado['img1'];}else{ echo $dado['img2'];}}else{ echo $dado['img4'];} ?>" style="height: 100%; width: auto;">
                    </div>
                  </div> 
                </div>
                <!-- Slider -->

                 <div class="col s3" style="padding: 0; margin: 0;">
                    <center>

                      <!-- <div class="z-depth-0">
                        <img src="FotosPerfil/perfil.png" style="width: 60%;">
                      </div> -->

                      <div class="left" style="padding: 0px 0px 0px 10px; z-index: 0; text-align: left; width: 105%;">
                        <div class="card z-depth-0" style="width: auto; margin: 0;">
                          <div class="card-image center-align" style="height: 250px; min-height: 250px; max-height: 320px; text-align: center; overflow: hidden;">
                            <img src="FotosPerfil/<?php echo $data['foto']; ?>" style="height: 100%; width: auto;">
                          </div>
                          <div class="card-content">
                            <div>
                              <span class="card-title grey-text text-darken-4 truncate" style=" width: 100%; margin: 0;"><?php echo $data['nome']; ?>
                              </span>
                            </div>

                            <div style="font-size: 3px; color: transparent;">-</div>

                            <?php 
                              ini_set( 'display_errors', 0 );
                              session_start(); 
                              $exibe = "0";
                              if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
                                $exibe = 0;
                              }else{$exibe = 1;}

                            ?>

                            <div>
                              
                            <div style="padding: 5%; background-color: lightgrey; text-align: left; color: #000; border-radius: 20px;" <?php if($exibe != 0){echo "hidden";}  ?>>
                              <p style="margin: 0;">Para visualizar as informações de contato é necessário estar logado no site !</p>
                              
                            </div> 

                            <div <?php if($exibe == 0){echo "hidden";}  ?>>
                              <span style="font-size: 20px"><a href="mailto:viniciuslpss@hotmail.com"><?php echo $dado['email_serv']; ?></a></span>
                              <div style="font-size: 20px; padding-top: 2%;"><b><?php echo $dado['telefone_serv']; ?></b></div>
                              <div><?php echo $data['cidade']; ?>, <?php echo $data['uf']; ?></div>
                            </div>

                            </div>    
                          </div>
                        </div>
                      </div>
                    </center>        
                  </div>

              </div><!-- Fecha row -->

              <div class="row white" style="padding: 1%; margin: 10px 8.5% 0% 10%;">
                <div class="col s12">
                  <div class="col s4" >
                    <center style="border: 1px solid lightgrey; border-radius: 15px;">
                      <h6 style="background-color: lightgrey; border-radius: 15px; width: 80%; padding: 2%;">Valor</h6>
                      <p style="font-size: 20px;"><i class="material-icons">monetization_on</i> <?php if($dado['valor'] == 0){echo "A combinar";}else{ echo "R$". $dado['valor'];}?></p>
                    </center>
                  </div>
                  <div class="col s4">
                    <center style="border: 1px solid lightgrey; border-radius: 15px;">
                      <h6 style="background-color: lightgrey; border-radius: 15px; width: 80%; padding: 2%;">Categoria</h6>
                      <p style="font-size: 20px;"><i class="material-icons">widgets</i> <?php echo $dado['categoria']; ?></p>
                    </center>
                  </div>
                  <div class="col s4">
                    <center style="border: 1px solid lightgrey; border-radius: 15px;">
                      <h6 style="background-color: lightgrey; border-radius: 15px; width: 80%; padding: 2%;">Localização</h6>
                      <p style="font-size: 20px;"><i class="material-icons">place</i> <?php echo $dado['cidade']; ?>, <?php echo $dado['estado']; ?></p>
                    </center>
                  </div>
                </div>
              </div>
              

              
              <div class="row white" style="padding: 1%; margin: 10px 8.5% 0% 10%;">
                <div class="col s12">
                  <center>
                  <h6 style="background-color: lightgrey; border-radius: 15px; width: 40%; padding: 0.8%;">Descrição</h6>
                  <div style=" padding: 2%; border-radius: 15px; text-align: left; border: 1px solid lightgrey; margin: 2% 15% 0 15%;"><?php echo nl2br($dado['descricao']); ?></div><br>

                </center>
                </div>
              </div>
              <br>

            </div>
           </div>
        </div><!-- Fecha row -->
      </div><!-- Fecha section -->

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

      <script type="text/javascript">

        $('.carousel.carousel-slider').carousel({
            fullWidth: false,
            indicators: true

          });

        setTimeout(autoplay, 4500);
        function autoplay() {
            $('.carousel-slider').carousel('next');
            setTimeout(autoplay, 4500);
        }
      </script>

      <script type="text/javascript">
        $(document).ready(function() {
        $(".card").addClass("s-transition");
      });
      </script>

      <?php
        include "js/navbar-js.php"
      ?>
       