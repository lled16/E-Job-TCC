<?php  

$pegar = mysqli_query($conexao, "SELECT * FROM servico ORDER BY id_serv DESC limit $incio, $quantidade_pg");

// A função mysqli_fetch_array() retorna os registros do SELECT que estão na variável $seleciona
while($campo = mysqli_fetch_array($pegar)){ ?>

  <div class="col s12 m4 l4 " style="padding: 10px; z-index: 0;">
    <div class="card z-depth-2 hoverable" style="width: 100%; margin: 0;">
      <div class="card-image waves-effect waves-block waves-light center-align" style="height: 15rem; text-align: center;">
        <a href="anuncio.php?id=<?= $campo['id_serv'];?>"><img src="arquivos/<?php echo $campo['img1'];?>" style=" height: 100%; width: auto;"></a>
      </div>
      <div class="card-content">
        <div><span class="card-title grey-text text-darken-4 truncate" style=" width: 90%; margin: 0;"><a href="anuncio.php?id=<?= $campo['id_serv'];?>" style="text-decoration: none; color: black;"><?= $campo['titulo'];?></a></span>
        <span><i class="material-icons right activator" style="cursor: pointer; width: 10%; margin: 0;">
        expand_less</i></span></div>
        <div style="font-size: 3px; color: transparent;">-</div>
        <span style="background-color: rgba(0,0,0, 0.17); padding: 0% 4% 1% 4%; border-radius: 50px;"><?= $campo['categoria'];?></span>
        <div style="font-size: 20px; padding-top: 2%;"><b><?php if($campo['valor'] == 0){echo "A combinar";}else{ echo "R$". $campo['valor'];}?></b></div>
        <div><?= $campo['cidade'];?>, <?= $campo['estado'];?></div>
      </div>
      <div class="card-reveal" style="padding: 18px;">
        <i class="material-icons card-title right sticky-action">expand_more</i>
        <span class="card-title grey-text text-darken-4"><b><?= $campo['titulo'];?></b></span>
        <p>Descrição:</p>
        <p style="border: 1px solid lightgrey; padding: 6%;"><?= nl2br($campo['descricao']);?></p>
      </div>
    </div>
  </div>


<?php } ?>


