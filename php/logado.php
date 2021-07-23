<?php
  include "exibeNomeUsuario.php";
?>

<li>
	<a href="cadastro-anuncio.php" class="hvr-overline-from-left">
		<i class="material-icons left">loupe</i>Criar Anúncio
	</a>
</li>

<li>
  <a href="index.php" class="hvr-overline-from-left">
    <i class="material-icons left">library_books</i>Anúncios
  </a>
</li>

<li>
	<a href="perfil.php" class="hvr-overline-from-left" style="display: inline-block;">
	  <i class="material-icons left">account_circle</i>
	  <span id="nome-usuario"><?php echo $primeironome ?></span>
	</a>
  <a class="modal-trigger hvr-overline-from-left" style="display: inline-block;" href="#modal-sair">
    &nbsp; Sair
    <i class="material-icons left" style="margin: 0; font-size: 1.6rem;">power_settings_new</i> 
  </a>
</li>



	


