	<?php
		include "conexao.php";
	?>

	<?php
		session_start();  
			$emailSession = $_SESSION['email'];
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estados-brasil'];

	    $searchServ = mysqli_query($conexao, "SELECT * FROM usuario WHERE email ='$emailSession'");
        $dadoServ = mysqli_fetch_array($searchServ);
		$imP = $dadoServ['foto'];
		$novoNome = $imP;



if (isset($_POST['enviar-formulario'])):
			$formatosPermitidos = array("png","jpeg","jpg","gif");
			$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

			if(in_array($extensao, $formatosPermitidos)):
			$pasta = "fotosPerfil/";
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
		

	

			


		
		$sql = mysqli_query($conexao, "UPDATE usuario SET nome='$nome', telefone='$telefone', cidade='$cidade', uf='$estado', foto='$novoNome' WHERE email='$emailSession'") OR DIE (mysqli_error($conexao));

		mysqli_close($conexao);
		
		header("Location: perfil.php");
		

	?>