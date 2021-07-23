<?php 
  include "conexao.php";
  session_start();  
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
      <script src="jquery-3.3.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/hover.css">
      <link rel="stylesheet" type="text/css" href="css/style-all.css">
      <link rel="stylesheet" type="text/css" href="css/cadastro-usuario.css">
      <meta charset="utf-8">

      
      <title>E-JOB</title>
    </head>
    <body style="background-image: url(imagens/bg-1.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;"" onload="vemail()">

      <!-- Abre NAVBAR -->
        <?php
          include "php/header.php"
        ?>
      <!-- Fecha NAVBAR -->


      <script type="text/javascript">
        function vemail(){
          var url = window.location.search;
          var situacao = url.replace("?", "");


          var x = document.getElementById("msgErro");
          if (situacao == 1) {
            alert("Email já utilizado. Se você blablabla")
          }
        }

      </script>

      <!--Preenche os dados do usuário-->
      <?php


                

          $emailSession = $_SESSION['email'];
          $busca = mysqli_query($conexao, "SELECT * FROM usuario WHERE email='$emailSession'");

          $dado = mysqli_fetch_array($busca);
 
          
          $nome = $dado['nome'];
          $telefone = $dado['telefone'];
          $cidade = $dado['cidade'];
          $estado = $dado['uf'];
          $imP = $dado['foto'];

      ?>


      <!-- Abre o FORM -->
      <br> 
      <h2 id="titulo-cad" style="color: #FFF !important; text-align: center;">Edição de Dados</h2>
      <div class="section container">
        <div class="separador-blue bg-bluegreen" style="width: 100%;"></div>
        <div class="center">
          <div class="col s12 m12 l12">
            
            <div class="card-panel white z-depth-5" style="margin-top: 0; padding-left: 0; padding-right: 0;">
              
              
              
              <br><br>
              <div class="container" id="cont-form">
                  <form name="signup" method="post" action="editando.php" class="col s12" enctype="multipart/form-data">

              <center>
                <h5 style="margin-bottom: -20px; color: #444">Foto do perfil</h5>
              <div class="col s12 m12 l12 white-text" style="padding: 0; width: 200px; overflow: hidden;  max-height: 304px;">
                <br><br>
                
                  <div style=" background-image:url(fotosPerfil/<?php if(isset($imP)){echo $imP; }else{echo "perfil.png";} ?>);background-size: 100%; background-position: center; background-repeat: no-repeat; height: 200px; width: 100%; position: relative;" id="image-holder"></div>
                  <div class="file-field input-field" style="width: 200px;">
                    <div class="btn blue darken-4" style="width: 200px;">
                      <span><i class="small material-icons">add</i></span>
                      <input type="file" id="fileUpload" name="arquivo">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" >
                    </div>
                  </div>
                
              </div>    
              </center>
                    <div class="row">
                      <br>


                      <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_nome" type="text" class="validate" name="nome" value="<?php echo $nome ?>" required >
                        <label for="icon_nome">Nome</label>
                      </div>

                      <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telefone" type="tel" class="validate" name="telefone" value="<?php echo $telefone ?>" required>
                        <label for="icon_telefone">Telefone</label>
                      </div>

                      <div class="input-field col s6">
                        <i class="material-icons prefix">map</i>
                        <input id="icon_city" type="text" class="validate" name="cidade" value="<?php echo $cidade ?>" required>
                        <label for="icon_city">Cidade</label>
                      </div>

                      <div class="input-field col s6">
                        <select name="estados-brasil" size="5" required>


                          <option value="" selected disabled></option> 
                          <option value="AC" <?php if($estado == "AC"){echo " selected ";};?>>Acre</option>
                          <option value="AL" <?php if($estado == "AL"){echo " selected ";};?>>Alagoas</option>
                          <option value="AP" <?php if($estado == "AP"){echo " selected ";};?>>Amapá</option>
                          <option value="AM" <?php if($estado == "AM"){echo " selected ";};?>>Amazonas</option>
                          <option value="BA" <?php if($estado == "BA"){echo " selected ";};?>>Bahia</option>
                          <option value="CE" <?php if($estado == "CE"){echo " selected ";};?>>Ceará</option>
                          <option value="DF" <?php if($estado == "DF"){echo " selected ";};?>>Distrito Federal</option>
                          <option value="ES" <?php if($estado == "ES"){echo " selected ";};?>>Espírito Santo</option>
                          <option value="GO" <?php if($estado == "GO"){echo " selected ";};?>>Goiás</option>
                          <option value="MA" <?php if($estado == "MA"){echo " selected ";};?>>Maranhão</option>
                          <option value="MT" <?php if($estado == "MT"){echo " selected ";};?>>Mato Grosso</option>
                          <option value="MS" <?php if($estado == "MS"){echo " selected ";};?>>Mato Grosso do Sul</option>
                          <option value="MG" <?php if($estado == "MG"){echo " selected ";};?>>Minas Gerais</option>
                          <option value="PA" <?php if($estado == "PA"){echo " selected ";};?>>Pará</option>
                          <option value="PB" <?php if($estado == "PB"){echo " selected ";};?>>Paraíba</option>
                          <option value="PR" <?php if($estado == "PR"){echo " selected ";};?>>Paraná</option>
                          <option value="PE" <?php if($estado == "PE"){echo " selected ";};?>>Pernambuco</option>
                          <option value="PI" <?php if($estado == "PI"){echo " selected ";};?>>Piauí</option>
                          <option value="RJ" <?php if($estado == "RJ"){echo " selected ";};?>>Rio de Janeiro</option>
                          <option value="RN" <?php if($estado == "RN"){echo " selected ";};?>>Rio Grande do Norte</option>
                          <option value="RS" <?php if($estado == "RS"){echo " selected ";};?>>Rio Grande do Sul</option>
                          <option value="RO" <?php if($estado == "RO"){echo " selected ";};?>>Rondônia</option>
                          <option value="RR" <?php if($estado == "RR"){echo " selected ";};?>>Roraima</option>
                          <option value="SC" <?php if($estado == "SC"){echo " selected ";};?>>Santa Catarina</option>
                          <option value="SP" <?php if($estado == "SP"){echo " selected ";};?>>São Paulo</option>
                          <option value="SE" <?php if($estado == "SE"){echo " selected ";};?>>Sergipe</option>
                          <option value="TO" <?php if($estado == "TO"){echo " selected ";};?>>Tocantins</option>
                        </select>

                        
                        <label>Estado</label>
                      </div>

                      <button type="submit" class="btn blue darken-4 hoverable waves-effect waves-light" name="enviar-formulario" style="width: 50%; height: 3rem; margin: 3rem;">Salvar</button>

                    </div>
                  </form>
                </div>
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


        <script type="text/javascript">

$("#fileUpload").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image",
                "style": "height: auto; width: auto; max-width: 100%; background-color: #FFF;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

</script>
      <!--Materialize JavaScript-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <?php
        include "js/navbar-js.php"
      ?>

      <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
          });
      </script>

    </body>
  </html>