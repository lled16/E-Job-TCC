<?php
	include "conexao.php";
?>

<!DOCTYPE html>
<html>
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
      <link rel="stylesheet" type="text/css" href="css/cadastro-usuario.css">
      <meta charset="utf-8">
      <title>E-JOB - Login</title>
      
      <script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='index.php'", 2000)
		}

		function loginfailed(){
			setTimeout("window.location='index.php'", 2000)
		}
	</script>

	<style type="text/css">

		.preloader-wrapper.big {
  			width: 164px;
  			height: 164px;
		}

	</style>

</head>

<body style="height: 100vh;" class="bg-iron">

	  


	<?php
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
		$res = mysqli_query($conexao, $sql) or die(mysqli_error);
		$row = mysqli_num_rows($res);

		if($row > 0){
			session_start();
			$_SESSION['email']=$_POST['email'];
			$_SESSION['senha']=$_POST['senha'];
			echo '<center>
					<div class="preloader-wrapper big active" style="margin-top: 25vh;">
					    <div class="spinner-layer spinner-green-only">
					      <div class="circle-clipper left">
					        <div class="circle"></div>
					      </div><div class="gap-patch">
					        <div class="circle"></div>
					      </div><div class="circle-clipper right">
					        <div class="circle"></div>
					      </div>
					    </div>
					</div>
					<br><br>
					<h4 style="font-size: 2rem;"><i class="material-icons" style="color: green;">check_circle</i>&nbsp;Login efetuado com sucesso!<h4>
					</center>';

			echo "<script>loginsuccessfully()</script>";		
		} else {
			echo '<center>
					<div class="preloader-wrapper big active" style="margin-top: 25vh;">
					    <div class="spinner-layer spinner-blue-only">
					      <div class="circle-clipper left">
					        <div class="circle"></div>
					      </div><div class="gap-patch">
					        <div class="circle"></div>
					      </div><div class="circle-clipper right">
					        <div class="circle"></div>
					      </div>
					    </div>
					</div>
					<br><br>
					<h4 style="font-size: 2rem;"><i class="material-icons" style="color: red;">cancel</i> E-mail ou senha inválidos, tente novamente.<h4>
					</center>';

			echo "<script>loginfailed()</script>";
		}
	?>

		

	
</body>
</html>