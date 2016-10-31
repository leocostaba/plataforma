<?php
    session_start();
    require_once('../helpers/Sessions.php');
    require_once('../models/Files.php');
    require_once('../models/comments.php');
    $file = Files::select($_GET["id"]);
    $comentarios = Comentarios::selectAll($_GET['id']);
    on();
    include_once "header.php"
?>
<div class="container">
    <div class="row">
        <h1 class="col-sm-10"><?php echo $file->titulo ?>  <div class="text-right"></h1>
        <a class="pull-right btn btn-success col-sm-2" href="../uploads/files/<?php echo $file->local ?>">Download</a>
    </div>
    <p>
        <?php echo $file->description ?>
    </p>
    <div class="row text-center">
      <div class="col-md-6">
        <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-comment"></span>
                             Comentários Recentes:
                        </h3>
                    </div>
                    <div class="panel-body">
                        <?php foreach($comentarios as $comentario) { ?>
                            <div class="text-left">
                                <h5><span class="glyphicon glyphicon-user" aria-hidden="true"></span>  <?php echo $comentario->name; ?></h5>
                                <p>
                                    <?php echo $comentario->comentario; ?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
      </div>





  <div class="col-md-6" >
      <form class="" action="../controllers/comentario.php" method="post">
          <label for="exampleInputPassword1">Comentar:</label>
          <textarea  class="form-control" name="comentario" ></textarea>
          <input type="hidden" name="id_file" value="<?php echo $_GET['id'] ?>">
          <br><br>
          <div class="row text-center">
              <button type="submit" name="action" value="insert" class="btn btn-info">Enviar</button>
          </div>
      </form>
      </div>

    </div>
    </div>











  <?php
  include_once "footer.php"
  ?>
