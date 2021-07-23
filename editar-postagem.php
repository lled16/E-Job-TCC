
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
    <body style="background-image: url(imagens/bg-1.jpg); background-size: 100%; background-attachment: fixed;">

      <!-- Abre NAVBAR -->
        <?php
          include "php/header.php"
        ?>
      <!-- Fecha NAVBAR -->
        <?php 
          include "conexao.php";
          
            $emailSession = $_SESSION['email'];
            
            $search = mysqli_query($conexao, "SELECT * FROM usuario WHERE email ='$emailSession'");
            $dados = mysqli_fetch_array($search);

            $telefo = $dados['telefone'];
            $cida = $dados['cidade'];
            $esta = $dados['uf'];

            $nomeId = $_GET['id'];

            $searchServ = mysqli_query($conexao, "SELECT * FROM servico WHERE id_serv ='$nomeId'");
            $dadoServ = mysqli_fetch_array($searchServ);

            $valo = $dadoServ['valor'];
            $titu = $dadoServ['titulo'];
            $categ = $dadoServ['categoria'];
            $descr = $dadoServ['descricao'];
            $im = $dadoServ['img1'];
            $im2 = $dadoServ['img2'];
            $im3 = $dadoServ['img3'];
            $im4 = $dadoServ['img4'];
  
          ?>

      <!-- Abre o FORM -->  
      <div style="padding: 1% 0% 0% 10%; width: 90%;">
        <div class="center">
          <div class="col s12 m12 l12">
              
            <h2 id="titulo-cad-a" style="color: #FFF; margin-top: 0;">Editar Anúncio</h2><br>
              
            <div class="separador-blue bg-bluegreen" style="width: 100%; padding: 0.3%;"></div>
              
            <div class="z-depth-5 white" style="margin-top: 0; padding-left: 0; padding-right: 0;"><br><br>
              <div id="cont-form">


                  <form name="signup" method="post" action="editando-anuncio.php?id=<?php echo  $nomeId; ?>" class="col s12" enctype="multipart/form-data" >
                    <div class="row">
                      <div class="col s12">
                        <div class="col s12" style="padding-left: 10%; padding-right: 10%;">

                          <div class="input-field col s12 m12 l12" style="margin-top: 0; padding: 0;">
                            <i class="material-icons prefix">label</i>
                            <input id="icon_title" type="text" class="validate" value="<?php echo $titu ?>" name="titul" required >
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

                            <div class="col s6 m6 l3">
                              <div style=" background-image:url(arquivos/<?php echo $dadoServ['img1']; ?>);background-size: 100%; height: 180px; width: auto; overflow: hidden; background-repeat: no-repeat;" id="image-holder"></div>
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

                             <div class="col s6 m6 l3">
                              <div style=" background-image:url(arquivos/<?php echo $dadoServ['img2']; ?>);background-size: 100%; height: 180px; width: auto; overflow: hidden; background-repeat: no-repeat;" id="image-holder2"></div>
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

                            <div class="col s6 m6 l3">
                              <div style=" background-image:url(arquivos/<?php echo $dadoServ['img3']; ?>);background-size: 100%; height: 180px; width: auto; overflow: hidden; background-repeat: no-repeat;" id="image-holder3"></div>
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

                            <div class="col s6 m6 l3">
                              <div style=" background-image:url(arquivos/<?php echo $dadoServ['img4']; ?>);background-size: 100%; height: 180px; width: auto; overflow: hidden; background-repeat: no-repeat;" id="image-holder4"></div>
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

                        
                         

                          <div class="col s12 m12 l6" id="campoEmail" style=" padding-left: 0; pointer-events: none;">
                            <div class="input-field">
                              <i class="material-icons prefix">email</i>
                              <input id="icon_email" type="email" class="validate" readonly value="<?php echo $_SESSION['email']; ?>" name="emai" required>
                              <label for="icon_email">Email para contato</label>
                            </div>
                          </div>

                          <div class="col s12 m12 l6" id="campoId" style=" padding-left: 0; pointer-events: none;" hidden>
                            <div class="input-field">
                              <i class="material-icons prefix">email</i>
                              <input id="icon_email" type="text" class="validate" readonly value="<?php echo $_SESSION['email']; ?>" name="id" required>
                              <label for="icon_email">Email para contato</label>
                            </div>
                          </div>

                          <div class="col s12 m12 l6" id="campoTelefone" style=" padding-left: 0; pointer-events: none;">
                            <div class="input-field">
                              <i class="material-icons prefix">phone</i>
                              <input id="icon_tel" type="tel" class="validate" readonly value="<?php echo $telefo ?>" name="tele" required>
                              <label for="icon_tel">Telefone com DDD</label>
                            </div>
                          </div>

                          <div class="col s12 m8" id="campoCidade" style=" padding-left: 0; pointer-events: none;">
                            <div class="input-field" style="margin-bottom: 0;">
                              <i class="material-icons prefix">map</i>
                              <input id="icon_cit" type="text" class="validate" readonly value="<?php echo $cida ?>" name="city" required>
                              <label for="icon_cit">Cidade</label>
                            </div>
                          </div>

                          <div class="col s12 m4" id="campoUf" style=" padding-left: 20px; pointer-events: none; color: grey;">
                            <div class="input-field">
                              <select name="estado" class="validate" required size="5">

                                <option value="" selected disabled></option> 
                                <option value="AC" <?php if($esta == "AC"){echo " selected ";};?>>Acre</option>
                                <option value="AL" <?php if($esta == "AL"){echo " selected ";};?>>Alagoas</option>
                                <option value="AP" <?php if($esta == "AP"){echo " selected ";};?>>Amapá</option>
                                <option value="AM" <?php if($esta == "AM"){echo " selected ";};?>>Amazonas</option>
                                <option value="BA" <?php if($esta == "BA"){echo " selected ";};?>>Bahia</option>
                                <option value="CE" <?php if($esta == "CE"){echo " selected ";};?>>Ceará</option>
                                <option value="DF" <?php if($esta == "DF"){echo " selected ";};?>>Distrito Federal</option>
                                <option value="ES" <?php if($esta == "ES"){echo " selected ";};?>>Espírito Santo</option>
                                <option value="GO" <?php if($esta == "GO"){echo " selected ";};?>>Goiás</option>
                                <option value="MA" <?php if($esta == "MA"){echo " selected ";};?>>Maranhão</option>
                                <option value="MT" <?php if($esta == "MT"){echo " selected ";};?>>Mato Grosso</option>
                                <option value="MS" <?php if($esta == "MS"){echo " selected ";};?>>Mato Grosso do Sul</option>
                                <option value="MG" <?php if($esta == "MG"){echo " selected ";};?>>Minas Gerais</option>
                                <option value="PA" <?php if($esta == "PA"){echo " selected ";};?>>Pará</option>
                                <option value="PB" <?php if($esta == "PB"){echo " selected ";};?>>Paraíba</option>
                                <option value="PR" <?php if($esta == "PR"){echo " selected ";};?>>Paraná</option>
                                <option value="PE" <?php if($esta == "PE"){echo " selected ";};?>>Pernambuco</option>
                                <option value="PI" <?php if($esta == "PI"){echo " selected ";};?>>Piauí</option>
                                <option value="RJ" <?php if($esta == "RJ"){echo " selected ";};?>>Rio de Janeiro</option>
                                <option value="RN" <?php if($esta == "RN"){echo " selected ";};?>>Rio Grande do Norte</option>
                                <option value="RS" <?php if($esta == "RS"){echo " selected ";};?>>Rio Grande do Sul</option>
                                <option value="RO" <?php if($esta == "RO"){echo " selected ";};?>>Rondônia</option>
                                <option value="RR" <?php if($esta == "RR"){echo " selected ";};?>>Roraima</option>
                                <option value="SC" <?php if($esta == "SC"){echo " selected ";};?>>Santa Catarina</option>
                                <option value="SP" <?php if($esta == "SP"){echo " selected ";};?>>São Paulo</option>
                                <option value="SE" <?php if($esta == "SE"){echo " selected ";};?>>Sergipe</option>
                                <option value="TO" <?php if($esta == "TO"){echo " selected ";};?>>Tocantins</option>

                              </select>
                              <label>Estado</label>
                            </div>
                          </div>

                          <div class="col s12 m6 l3" id="campoValor" style="padding: 0;">
                            <div class="input-field" style="margin-bottom: 0px;">
                              <i class="material-icons prefix">attach_money</i>
                              <input id="icon_va" onblur="add00();" type="number" step="0.010" value="<?php echo $valo ?>" class="validate" name="val" required>
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

                          
                          <div class="input-field col s12 m6 l6" id="campoCategoria" style=" padding-left: 15px; margin-bottom: 5%;">
                            <select name="catego" required class="validate"  size="5" required>
                              <option value="<?php echo $categ ?>"></option> 
                              <option value="Babá" <?php if($categ == "Babá"){echo " selected ";};?>>Babá</option>
                              <option value="Beleza" <?php if($categ == "Beleza"){echo " selected ";};?>>Beleza</option>
                              <option value="Chaveiro" <?php if($categ == "Chaveiro"){echo " selected ";};?>>Chaveiro</option>
                              <option value="Conserto" <?php if($categ == "Conserto"){echo " selected ";};?>>Conserto</option>
                              <option value="Construção" <?php if($categ == "Construção"){echo " selected ";};?>>Construção</option>
                              <option value="Costura" <?php if($categ == "Costura"){echo " selected ";};?>>Costura</option>
                              <option value="Doméstico" <?php if($categ == "Doméstico"){echo " selected ";};?>>Doméstico</option>
                              <option value="Elétrica" <?php if($categ == "Elétrica"){echo " selected ";};?>>Elétrica</option>
                              <option value="Eventos/Festas" <?php if($categ == "Eventos"){echo " selected ";};?>>Eventos/Festas</option>
                              <option value="Informática" <?php if($categ == "Informática"){echo " selected ";};?>>Informática</option>
                              <option value="Limpeza" <?php if($categ == "Limpeza"){echo " selected ";};?>>Limpeza</option>
                              <option value="Manutenção" <?php if($categ == "Manutenção"){echo " selected ";};?>>Manutenção</option>
                              <option value="Maquiagem" <?php if($categ == "Maquiagem"){echo " selected ";};?>> Maquiagem</option>
                              <option value="Montagem/Instalação" <?php if($categ == "Montagem/Instalação"){echo " selected ";};?>>Montagem/Instalação</option>
                              <option value="Mudança" <?php if($categ == "Mudança"){echo " selected ";};?>>Mudança</option>
                              <option value="Pintura" <?php if($categ == "Pintura"){echo " selected ";};?>>Pintura</option>
                              <option value="Reforma" <?php if($categ == "Reforma"){echo " selected ";};?>>Reforma</option>
                              <option value="Tradução" <?php if($categ == "Tradução"){echo " selected ";};?>>Tradução</option> 
                              <option value="Transporte" <?php if($categ == "Transporte"){echo " selected ";};?>>Transporte</option>
                              <option value="Turismo" <?php if($categ == "Turismo"){echo " selected ";};?>>Turismo</option>       
                              <option value="Outros" <?php if($categ == "Outros"){echo " selected ";};?>>Outros...</option>             
                                           
                            </select>
                            <label>Categoria</label>
                          </div>

                          

                          <div class="input-field col s12 m12 l12" style="margin-top: 0;  padding: 0;">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="textarea1" class="materialize-textarea" data-length="750" name="descr"  style="height: 500px; border: 1px solid #9e9e9e; border-radius: 10px; padding-left: 2%; padding-right : 2%; margin-top: 1%;"><?php echo $descr ?></textarea>
                            <label for="textarea1" >&nbsp;&nbsp;Descrição do serviço</label>
                          </div>

                        </div>

              
                        <button type="submit" class="btn blue darken-4 waves-effect waves-light center hvr-sweep-to-right" name="enviar-formulario" style="width: 40%;height: 3rem; margin-bottom: 4rem; margin-top: 2rem;">Salvar</button>
                        
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
                "style": "height:100%; width: auto; overflow: hidden;"
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