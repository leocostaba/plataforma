<?php
    session_start();
    require_once('../helpers/Sessions.php');
    on();
    require_once('../models/Files.php');
    $files1 = files::selectById($_SESSION['user']);
    $files2 = files::selectLasts();
    include_once "header.php"
?>

<div class="row containe-solid">
  <h4>Meus Trabalhos<a href="submeter.php" class="btn btn-default pull-right">Adicionar Trabalho</a></h4>
  <div class="row">
    <?php if (!empty($files1)) {
            foreach ($files1 as $file1) {?>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo "$file1->titulo"; ?></div>
        <div class="panel-body" style="height: 150px; overflow:hidden;"><small><?php echo "$file1->description"; ?></small></div>
        <div style="text-align: center;">
          <a class="btn btn-primary" style="margin:10px;" href="verumtrabalho.php?id=<?php echo $file1->id ?>">+ informações</a>
        </div>
        <div class="panel-footer"><a href="#">Comentarios</a></li></div>
      </div>
    </div>

    <?php }}else { ?>
        <p class="text-center">Você não enviou suas trabalhos ainda!<p>
    <?php } ?>
  </div>
<br></br>

<div class="row container-fluid" >
  <h4>Adicionados Recentemente</h4>
  <div class="row">
    <?php foreach ($files2 as $file2) {?>
    <div class="col-sm-4">
      <div class="panel  panel-primary">
      <div class="panel-heading"><?php echo "$file2->titulo"; ?></div>
      <div class="panel-body" style="height: 150px; overflow:hidden;"><small><?php echo "$file2->description"; ?></small></div>
        <div style="text-align: center; padding:10px;">
         <a class="btn btn-primary" style="margin:10px;" href="verumtrabalho.php?id=<?php echo $file2->id ?>">+ informações</a>
        </div>
        <div class="panel-footer"><a href="#">Comentarios</a></div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<?php
include_once "footer.php";
?>
