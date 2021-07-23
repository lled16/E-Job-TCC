<?php 
	include "conexao.php";

	$nome = $_GET['id'];
	
	$sql = mysqli_query($conexao, "DELETE FROM servico WHERE id_serv = '$nome' ") OR DIE (mysqli_error($conexao));


	if ($sql) {
		header("Location: perfil.php");
	}else{
		echo "Nao foi possivel deletar !";
	}


 ?>
