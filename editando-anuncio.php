	<?php
		include "conexao.php";
	?>

	<?php
		session_start(); 
		$nomeId = $_GET['id'];  

	          include "conexao.php";

	          $searchServ = mysqli_query($conexao, "SELECT * FROM servico WHERE id_serv ='$nomeId'");
                            $dadoServ = mysqli_fetch_array($searchServ);

                           
                            $im = $dadoServ['img1'];
                            $im2 = $dadoServ['img2'];
                            $im3 = $dadoServ['img3'];
                            $im4 = $dadoServ['img4'];

	    if(isset($_POST['val'])){

			$valor = $_POST['val'];

		}else{


			$valor = 0; 
		}

		  
		  $img1 = $_POST['img1'];    
		$email = $_POST['emai'];
		$nome = $_POST['titul'];
		$tel = $_POST['tele'];
		$descricao = $_POST['descr'];
		$categoria = $_POST['catego'];

		$novoNome = $im;
		$novoNome2 = $im2;
		$novoNome3 = $im3;
		$novoNome4 = $im4;
		
		$cidade = $_POST['city'];
		$estado = $_POST['estado'];
		$data = date('y/m/d');
		

		

if (isset($_POST['enviar-formulario'])):
			$formatosPermitidos = array("png","jpeg","jpg","gif");
			$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

			if(in_array($extensao, $formatosPermitidos)):
			$pasta = "arquivos/";
			$temporario = $_FILES['arquivo']['tmp_name'];
			$novoNome = uniqid().".$extensao";


			if (move_uploaded_file($temporario, $pasta.$novoNome)) :

				$mensagem = "upload deu";
		else: 
				$mensagem = "nao foi possivel fazer upload";
			endif;
			
		else:
			$mensagem = "formato invalido";
		endif;

		echo $mensagem;
	endif;
if (isset($_POST['enviar-formulario'])):
			$formatosPermitidos = array("png","jpeg","jpg","gif");
			$extensao = pathinfo($_FILES['arquivo2']['name'], PATHINFO_EXTENSION);

			if(in_array($extensao, $formatosPermitidos)):
			$pasta = "arquivos/";
			$temporario2 = $_FILES['arquivo2']['tmp_name'];
			$novoNome2 = uniqid().".$extensao";

			if (move_uploaded_file($temporario2, $pasta.$novoNome2)) :

				$mensagem = "upload deu";
		else: 
				$mensagem = "nao foi possivel fazer upload";
			endif;
			
		else:
			$mensagem = "formato invalido";
		endif;

		echo $mensagem;
	endif;
		

		if (isset($_POST['enviar-formulario'])):
			$formatosPermitidos = array("png","jpeg","jpg","gif");
			$extensao = pathinfo($_FILES['arquivo3']['name'], PATHINFO_EXTENSION);

			if(in_array($extensao, $formatosPermitidos)):
			$pasta = "arquivos/";
			$temporario3 = $_FILES['arquivo3']['tmp_name'];
			$novoNome3 = uniqid().".$extensao";

			if (move_uploaded_file($temporario3, $pasta.$novoNome3)) :

				$mensagem = "upload deu";
		else: 
				$mensagem = "nao foi possivel fazer upload";
			endif;
			
		else:
			$mensagem = "formato invalido";
		endif;

		echo $mensagem;
	endif;
		

		if (isset($_POST['enviar-formulario'])):
			$formatosPermitidos = array("png","jpeg","jpg","gif");
			$extensao = pathinfo($_FILES['arquivo4']['name'], PATHINFO_EXTENSION);

			if(in_array($extensao, $formatosPermitidos)):
			$pasta = "arquivos/";
			$temporario4 = $_FILES['arquivo4']['tmp_name'];
			$novoNome4 = uniqid().".$extensao";

			if (move_uploaded_file($temporario4, $pasta.$novoNome4)) :

				$mensagem = "upload deu";
		else: 
				$mensagem = "nao foi possivel fazer upload";
			endif;
			
		else:
			$mensagem = "formato invalido";
		endif;

		echo $mensagem;
	endif;
		


		
		
		$sql = mysqli_query($conexao, "UPDATE servico SET email_serv='$email', telefone_serv='$tel', valor='$valor', cidade='$cidade', estado='$estado', descricao='$descricao', titulo='$nome', data_serv='$data', categoria='$categoria', img1='$novoNome', img2='$novoNome2', img3='$novoNome3', img4='$novoNome4' WHERE id_serv ='$nomeId'") OR DIE (mysqli_error($conexao));

		mysqli_close($conexao);
		
		header("Location:perfil.php");
		
		
		
		


?>

		

