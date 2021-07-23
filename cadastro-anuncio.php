
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
      <link rel="stylesheet" type="text/css" href="css/cadastro-anuncio.css">
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

      <!-- Abre o FORM -->  
      <div style="padding: 1% 0% 0% 10%; width: 90%;">
        <div class="center">
          <div class="col s12 m12 l12">
              
            <h2 id="titulo-cad-a" style="color: #FFF; margin-top: 0;">Criar Anúncio</h2><br>
              
            <div class="separador-blue bg-bluegreen" style="width: 100%; padding: 0.3%;"></div>
              
            <div class="z-depth-5 white" style="margin-top: 0; padding-left: 0; padding-right: 0;"><br><br>

              <div id="cont-form">
                  <form name="signup" method="POST" action="cadastrandoAnuncio.php" enctype="multipart/form-data" class="col s12">
                    <div class="row">
                      <div class="col s12">
                        <div class="col s12" style="padding-left: 10%; padding-right: 10%;">

                          <div class="input-field col s12 m12 l12" style="margin-top: 0; padding: 0;">
                            <i class="material-icons prefix">label</i>
                            <input id="icon_title" type="text" class="validate" name="titulo" required >
                            <label for="icon_title">Titulo do Anúncio</label>
                          </div>

                         
                          <div style="text-align: center; padding-bottom: 15px;"><h5 style="color: #9e9e9e; margin-left: 25px;">Adicione fotos</h5></div>

                          <div class="col s12" style="border: 1px solid grey; border-radius: 15px; margin-left: 10px; padding: 20px; padding-top: 30px; margin-bottom: 20px;">


                            <style type="text/css">
                              .imgs{
                                width: 100%;
                                height: 100%;
                              }
                            </style>

                            
                            <div class="col s12 m6 l3">
                              <div style=" background-image:url(imagens/img-1.png);background-size: 100%; max-height: 180px; width: auto; overflow: hidden;" id="image-holder"><img src="imagens/transparente.png"></div>
                              <div class="file-field input-field">
                                <div class="btn teal accent-4" style="width: 100%;">
                                  <span><i class="small material-icons">add</i></span>
                                  <input type="file" id="fileUpload" name="arquivo">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                                </div>
                              </div>
                            </div>

                            <div class="col s12 m6 l3">
                              <div style=" background-image:url(imagens/img-1.png);background-size: 100%; max-height: 180px; width: auto; overflow: hidden;" id="image-holder2"><img src="imagens/transparente.png"></div>
                              <div class="file-field input-field">
                                <div class="btn teal accent-4" style="width: 100%;">
                                  <span><i class="small material-icons">add</i></span>
                                  <input type="file" id="fileUpload2" name="arquivo2">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                                </div>
                              </div>
                            </div> 

                            <div class="col s12 m6 l3">
                              <div style=" background-image:url(imagens/img-1.png);background-size: 100%; max-height: 180px; width: auto; overflow: hidden;" id="image-holder3"><img src="imagens/transparente.png"></div>
                              <div class="file-field input-field">
                                <div class="btn teal accent-4" style="width: 100%;">
                                  <span><i class="small material-icons">add</i></span>
                                  <input type="file" id="fileUpload3" name="arquivo3">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                                </div>
                              </div>
                            </div> 

                            <div class="col s12 m6 l3">
                              <div style=" background-image:url(imagens/img-1.png);background-size: 100%; max-height: 180px; width: auto; overflow: hidden;" id="image-holder4"><img src="imagens/transparente.png"></div>
                              <div class="file-field input-field">
                                <div class="btn teal accent-4" style="width: 100%;">
                                  <span><i class="small material-icons">add</i></span>
                                  <input type="file" id="fileUpload4" name="arquivo4">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                                </div>
                              </div>
                            </div> 

                          </div><!-- Fecha div Up Imagens -->


                          <div class="col s12" style="padding: 2% 4% 2% 4%; background-color: lightblue; border: 1px solid #81d4fa; text-align: left; color: #0277bd; border-radius: 20px; margin-left: 10px; margin-bottom: 20px;">
                            <h6 style="margin-top: 0;"><b>Dica</b></h6>
                            <p style="margin: 0;">Para melhor visualização no site, envie imagens quadradas, isso trará mais visibilidade ao seu anúncio!</p>
                          </div>

                          <?php 
                          include "conexao.php";

                            $emailSession = $_SESSION['email'];
                    
                            $search = mysqli_query($conexao, "SELECT * FROM usuario WHERE email ='$emailSession'");
                            $dados = mysqli_fetch_array($search);
                            $telefo = $dados['telefone'];
                            $cida = $dados['cidade'];
                            $esta = $dados['uf'];

                          ?>


                          <div class="col s12 m12 l6" id="campoEmail" style=" padding-left: 0; pointer-events: none;">
                            <div class="input-field">
                              <i class="material-icons prefix">email</i>
                              <input id="icon_email" type="email" style="color: grey;" class="validate" readonly value="<?php echo $_SESSION['email']; ?>" name="email" required>
                              <label for="icon_email">Email para contato</label>
                            </div>
                          </div>

                          <div class="col s12 m12 l6" id="campoTelefone" style=" padding-left: 0; pointer-events: none;">
                            <div class="input-field">
                              <i class="material-icons prefix">phone</i>
                              <input id="icon_tel" type="tel" style="color: grey;" class="validate" readonly value="<?php echo $telefo ?>" name="tel" required>
                              <label for="icon_tel">Telefone com DDD</label>
                            </div>
                          </div>

                          <div class="col s12 m8" id="campoCidade" style=" padding-left: 0; pointer-events: none;">
                            <div class="input-field">
                              <i class="material-icons prefix">map</i>
                              <input id="icon_cit" type="text" style="color: grey;" class="validate" readonly value="<?php echo $cida ?>" name="cit" required>
                              <label for="icon_cit">Cidade</label>
                            </div>
                          </div>

                          <div class="col s12 m4" id="campoUf" style="padding: 0; pointer-events: none;">
                            <div class="input-field">
                              <i class="material-icons prefix">map</i>
                              <input id="icon_esta" type="text" style="color: grey;" class="validate" readonly value="<?php echo $esta ?>" name="uf" required>
                              <label for="icon_esta">Estado</label>
                            </div>
                          </div>

                          <div class="col s12 m6 l3" id="campoValor" style="padding: 0;">
                            <div class="input-field" style="margin-bottom: 0px;">
                              <i class="material-icons prefix">attach_money</i>
                              <input id="icon_va" onblur="add00();" type="number" step="0.010" class="validate" name="valor" required>
                              <label for="icon_va">Valor</label>
                            </div>
                          </div>
                          <div class="col s12 m6 l3" style="margin-top: 1rem; margin-left: -1rem; padding-left: 0;">
                            <p>
                              <label>
                                <input type="checkbox" name="check" onclick="valor.disabled=this.checked;"  />
                                <span>A combinar</span>
                              </label>
                            </p>
                          </div>

                          
                          <div class="input-field col s12 m12 l6" id="campoCategoria" style=" padding-left: 0; margin-bottom: 5%;">
                            <select name="categoria" required class="validate" size="5" required>
                              <option value="" selected disabled></option> 
                              <option value="Babá">Babá</option>
                              <option value="Beleza">Beleza</option>
                              <option value="Chaveiro">Chaveiro</option>
                              <option value="Comida">Comida</option>
                              <option value="Conserto">Conserto</option>
                              <option value="Construção">Construção</option>
                              <option value="Costura">Costura</option>
                              <option value="Doméstico">Doméstico</option>
                              <option value="Elétrica">Elétrica</option>
                              <option value="Eventos/Festas">Eventos/Festas</option>
                              <option value="Informática">Informática</option>
                              <option value="Limpeza">Limpeza</option>
                              <option value="Manutenção">Manutenção</option>
                              <option value="Maquiagem">Maquiagem</option>
                              <option value="Montagem/Instalação">Montagem/Instalação</option>
                              <option value="Mudança">Mudança</option>
                              <option value="Pintura">Pintura</option>
                              <option value="Reforma">Reforma</option>
                              <option value="Tradução">Tradução</option> 
                              <option value="Transporte">Transporte</option>
                              <option value="Turismo">Turismo</option>       
                              <option value="Outros">Outros...</option>             
                                           
                            </select>
                            <label>Categoria</label>
                          </div>

                          

                          <div class="input-field col s12 m12 l12" style="margin-top: 0;  padding: 0;">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="textarea1" class="materialize-textarea" data-length="750" name="desc" style="height: 500px; border: 1px solid #9e9e9e; border-radius: 10px; padding-left: 2%; padding-right : 2%; margin-top: 1%;"></textarea>
                            <label for="textarea1">&nbsp;&nbsp;Descrição do serviço</label>
                          </div>

                        </div>
                        
                        <button type="submit" class="btn blue darken-4 waves-effect waves-light center hvr-sweep-to-right" name="enviar-formulario" style="width: 40%;height: 3rem; margin-bottom: 4rem; margin-top: 2rem;">Criar Anúncio</button>
                        
                      </div>
                      <div class="col s12">
                        
                      </div>
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

$("#fileUpload").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder = $("#image-holder");
        image_holder.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image",
                "style": "height:100%; width: 100%;"
            }).appendTo(image_holder);
        }
        image_holder.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

</script>

 <script type="text/javascript">

$("#fileUpload2").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder2 = $("#image-holder2");
        image_holder2.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image",
                "style": "height:100%; width: 100%;"
            }).appendTo(image_holder2);
        }
        image_holder2.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

</script>
<script type="text/javascript">

$("#fileUpload3").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder3 = $("#image-holder3");
        image_holder3.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image",
                "style": "height:100%; width: 100%;"
            }).appendTo(image_holder3);
        }
        image_holder3.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

</script>
<script type="text/javascript">

$("#fileUpload4").on('change', function () {
 
    if (typeof (FileReader) != "undefined") {
 
        var image_holder4 = $("#image-holder4");
        image_holder4.empty();
 
        var reader = new FileReader();
        reader.onload = function (e) {
            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image",
                "style": "height:100%; width: 100%;"
            }).appendTo(image_holder4);
        }
        image_holder4.show();
        reader.readAsDataURL($(this)[0].files[0]);
    } else{
        alert("Este navegador nao suporta FileReader.");
    }
});

</script>
      <!-- Iniciando select -->
      <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
          });
      </script>

      <!-- Função que adciona ,00 no final do numero -->
      <script type="text/javascript">
        function add00(){
        document.getElementById("icon_va").addEventListener("change", function(){
           this.value = parseFloat(this.value).toFixed(2);
        });

        }
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