<?php 

$emailSessao = $_SESSION['email'];

function alteraData($data){
  echo date("d/m/Y", strtotime($data));
} 


$pegar = mysqli_query($conexao, "SELECT * FROM servico WHERE email_serv = '$emailSessao' ORDER BY id_serv DESC");

// A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona
while($campo = mysqli_fetch_array($pegar)){ ?>

<div class="col s12 m6 l3 " style="padding: 10px;">
  <div class="card z-depth-2 hoverable" style="width: 100%; margin: 0;">
    <div class="card-image waves-effect waves-block waves-light center-align" style="height: 15rem; text-align: center; pointer-events: none;">
      <img src="arquivos/<?php echo $campo['img1'];?>" style=" height: 100%; width: auto;">
    </div>
    <div class="card-content" style="text-align: center;">
      <div>
        <span class="card-title grey-text text-darken-4 truncate" style=" width: 90%; margin: 0;"> <?= $campo['titulo'];?></span>
        
        <div style="border: 1px solid lightgrey; border-radius: 15px; padding: 1%; margin: 3% 0% 5% 0%;">
          <h6 style="margin: 3%;"><strong>Publicação: </strong> <?= alteraData($campo['data_serv']);?></h6>
          <h6 style="margin: 3%;"><strong>Visualizações: </strong> <?= $campo['views'];?></h6>
        </div>
        
        <a class="btn waves-effect waves-light blue darken-4 white-text tooltipped" data-position="bottom" data-tooltip="Visualizar" href="anuncio.php?id=<?= $campo['id_serv'];?>" style="margin: 0% 1% 0% 1%; width: 30%; border-radius: 50px;"><i class="material-icons">visibility</i></a>
        <a class="btn waves-effect waves-light green darken-4 white-text tooltipped" data-position="bottom" data-tooltip="Editar" href="editar-postagem.php?id=<?php echo  $campo['id_serv']; ?>" style="margin: 0% 1% 0% 1%; width: 30%; border-radius: 50px;"><i class="material-icons">edit</i></a>
        <a class="btn waves-effect waves-light red darken-4 white-text tooltipped" data-position="bottom" data-tooltip="Apagar" href="deletar-anuncio.php?id=<?php echo  $campo['id_serv']; ?>" style="margin: 0% 1% 0% 1%; width: 30%; border-radius: 50px;"><i class="material-icons">delete</i></a>
        
      </div>
    </div>
  </div>
</div>

<?php } 




?>