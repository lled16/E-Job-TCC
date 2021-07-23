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

    <?php 
      function random() {
        $min = 1;
        $max = 9;
        $num = rand ($min ,$max );

        return $num;
      } 
    ?>
      
    <body style="background-image: url(imagens/bg-<?php echo random();?>.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;" onload="vemail()">

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
            alert("Este Email já foi utilizado!")
          }
        }
      </script>

      <!-- Abre o FORM -->  
      <div class="section container" style="padding-top: 2%;">
        <div class="center">
          <div class="col s12 m12 l12">

            <h2 id="titulo-cad-a" style="color: #FFF; margin-top: 0;">Cadastrar</h2><br>
              
            <div class="separador-blue bg-bluegreen" style="width: 100%; padding: 0.3%;"></div>
            
            <div class="card-panel white z-depth-5" style="margin-top: 0; padding-left: 0; padding-right: 0;">
              
              <br><br>
              <div class="container" id="cont-form">
                  <form name="signup" method="post" action="cadastrando.php" class="col s12">
                    <div class="row">

                      <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_nome" type="text" class="validate" name="nome" required >
                        <label for="icon_nome">Nome</label>
                      </div>

                      <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telefone" type="tel" class="validate" name="telefone" required>
                        <label for="icon_telefone">Telefone</label>
                      </div>

                      <div class="input-field col s6">
                        <i class="material-icons prefix">map</i>
                        <input id="icon_city" type="text" class="validate" name="cidade" required>
                        <label for="icon_city">Cidade</label>
                      </div>

                      <div class="input-field col s6">
                        <select name="estados-brasil" size="5" required>
                          <option value="" selected disabled></option> 
                          <option value="AC">Acre</option>
                          <option value="AL">Alagoas</option>
                          <option value="AP">Amapá</option>
                          <option value="AM">Amazonas</option>
                          <option value="BA">Bahia</option>
                          <option value="CE">Ceará</option>
                          <option value="DF">Distrito Federal</option>
                          <option value="ES">Espírito Santo</option>
                          <option value="GO">Goiás</option>
                          <option value="MA">Maranhão</option>
                          <option value="MT">Mato Grosso</option>
                          <option value="MS">Mato Grosso do Sul</option>
                          <option value="MG">Minas Gerais</option>
                          <option value="PA">Pará</option>
                          <option value="PB">Paraíba</option>
                          <option value="PR">Paraná</option>
                          <option value="PE">Pernambuco</option>
                          <option value="PI">Piauí</option>
                          <option value="RJ">Rio de Janeiro</option>
                          <option value="RN">Rio Grande do Norte</option>
                          <option value="RS">Rio Grande do Sul</option>
                          <option value="RO">Rondônia</option>
                          <option value="RR">Roraima</option>
                          <option value="SC">Santa Catarina</option>
                          <option value="SP">São Paulo</option>
                          <option value="SE">Sergipe</option>
                          <option value="TO">Tocantins</option>
                        </select>
                        <label>Estado</label>
                      </div>

                      <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="icon_email" type="email" class="validate" name="email" required>
                        <label for="icon_email">Email</label>
                      </div>

                      <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_pass" type="password" class="validate" name="senha" required>
                        <label for="icon_pass">Senha</label>
                      </div>

                      <button type="submit" class="btn blue darken-4 hoverable waves-effect waves-light" style="width: 50%; height: 3rem; margin: 3rem;">Cadastrar</button>

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