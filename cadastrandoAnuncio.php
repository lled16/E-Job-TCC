	<?php
		include "conexao.php";
	?>

	<?php	
		$email = $_POST['email'];
		$nome = $_POST['titulo'];
		$tel = $_POST['tel'];
		$descricao = $_POST['desc'];
		$categoria = $_POST['categoria'];
		$novoNome = "semImagem.png";
		$novoNome2 = "";
		$novoNome3 = "";
		$novoNome4 = "";

		
		if(isset($_POST['valor'])){

			$valor = $_POST['valor'];

		}else{


			$valor = 0; 
		}
		
		$cidade = $_POST['cit'];
		$estado = $_POST['uf'];

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
		


		$sql = mysqli_query($conexao, "INSERT INTO servico(email_serv, titulo, telefone_serv, descricao, categoria, img1, img2, img3, img4,  valor, cidade, estado, data_serv) VALUES('$email', '$nome', '$tel', '$descricao', '$categoria','$novoNome','$novoNome2','$novoNome3','$novoNome4','$valor','$cidade','$estado', '$data')") OR DIE (mysqli_error($conexao));

		mysqli_close($conexao);

		header("Location:index.php");

		

	?>