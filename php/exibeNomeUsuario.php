<?php
include "conexao.php";
  $ssenha = $_SESSION["senha"];
  $semail = $_SESSION["email"];

  if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    $option = 'Login';    
  } else {
    $sql = "SELECT nome FROM usuario WHERE email = '$semail' and senha = '$ssenha'";
    $result = $conexao->query($sql);
    $res = mysqli_query($conexao, $sql) or die(mysqli_error);

    if ($res->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $snomecompleto = $row['nome'];
    }

    $input = $snomecompleto; list($primeironome) = explode(' ', $input, 2);
}

}
?>