
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/style-all.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">


<div class="navbar-fixed">
  <nav id="nav-scroll" class="z-depth-0" style="background-color: transparent;">
    <div class="nav-wrapper" style="margin-left: 3%;margin-right: 3%;">
      <a href="index.php" class="brand-logo" id="logo"><img src="imagens/logo1white.png" style="width: 85%; margin-top: -8%; max-height: 100%; vertical-align: middle;"></a>
      <a href="#" data-target='menu-mobile' class="sidenav-trigger"><i class="material-icons">menu</i></a>  
      <!-- Search box -->
      <form action="pesquisar.php" method="GET" style="width: 30%; display: inline-block; margin-left: 15%;">
        <div class="input-field hide-on-med-and-down">
          <input id="search" style="color: white;"  type="search" name="pesquisar" required placeholder="Busque por serviços...">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons" onclick="document.getElementById('search').value='';">close</i>
        </div>
      </form>
      <!-- Menu -->
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="display: inline-block;">

        <?php
          
          if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
            include "php/deslogado.php"; 
          } else {
            include "php/logado.php";          
          }
        ?>

      </ul>
    </div>
  </nav>
</div>

<!-- Menu Mobile -->
  <ul id="menu-mobile" class="sidenav bg-iron">
    <li><img src="imagens/logo.png" class="responsive-img" style="width: 70%;margin-left: 10%;margin-bottom: 10%; margin-top: 10%;"></li>
      
    <?php 
      if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
            include "php/deslogado.php"; 
          } else {
            include "php/logado-mobile.php";          
          }
    ?>
    <!-- Espaço para a verificação se o usuário esta logado ou não -->
    <!-- IF com php/deslogado.php ELSE com php/logado.php - php/logado-mobile.php (include) -->

  </ul>

<!-- Modal Login Structure -->
  <div id="modal-login" class="modal" style="background-image: url(imagens/dg-8.jpg); background-position: center; background-size: cover;">
    <div class="modal-content center" style="padding: 5%;">
      <h4 style="font-family: 'Monserrat', sans-serif; color: white;"><strong>Login</strong><i class="small material-icons right modal-close" style="margin: 0;">close</i></h4><br>
      <div class="row container" style=" margin-bottom: 0;">
        <form class="col s12" action="userauthentication.php" method="post">

          <div class="row">
            <div class="input-field col s12 white" style="margin-bottom: 0;">
              <input id="email" type="email" required class="validate" placeholder="Digite seu email" name="email" style="margin-top: 8px;">
              
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12 white" style="margin-top: 0;">
              <input  required placeholder="Digite sua senha" name="senha" id="password" type="password" class="validate" style="margin-top: 8px;">
            </div>
          </div>

         
          <div class="row" style="margin-bottom: 0;">
            <div class="input-field col s12" style="margin-top: 0;">
              <button style="width: 50%;" class="waves-effect waves-light btn blue darken-4 white-text hvr-sweep-to-right" type="submit">Entrar</button>
            </div>
            <a href="cadastro-usuario.php" style="color: white; text-shadow: black 0.05em 0.1em 0.2em;">Cadastre-se</a>
          </div>
          <br>                
        </form>
      </div>  
    </div>
  </div>
<!-- Fecha Modal -->

<!-- Modal Sair Structure -->
  <div id="modal-sair" class="modal white" style="margin-top: 6%; width: 50vh;">
    <div class="modal-content center" style="padding-left: 0; padding-right: 0;">
      <h4>Sair</h4>
      <div class="separador-blue bg-bluegreen" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;"></div>
      
      <div class="row container">
        <h5 style="margin-top: 10px;">Deseja mesmo sair?</h5>
        <br>
        <button type="submit" class="btn waves-effect waves-light" style="width: 30%; background-color: darkblue;" onclick="window.location.href='logout.php'">Sim</button>
        &nbsp;&nbsp;
        <button type="submit" class="btn waves-effect waves-light red modal-close" style="width: 30%">Não</button>
        
      </div> 
    </div>
  </div>
<!-- Fecha Modal -->
