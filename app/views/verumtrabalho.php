<?php
    session_start();
    require_once('../helpers/Sessions.php');
    require_once('../models/Files.php');
    $file = Files::select($_GET["id"]);
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
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/60x60" class="img-circle">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        Leonardo
                                        <br>
                                        <small>
                                            Comentou em <a href="#">Cartola</a>
                                        </small>
                                    </h4>
                                    <p>
                                        Vou marcar 100 pts
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/60x60" class="img-circle">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        Ramon
                                        <br>
                                        <small>
                                            Comentou em <a href="#">Engenharia e</a>
                                        </small>
                                    </h4>
                                    <p>
                                        Professor Ivan....
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                   <img src="http://placehold.it/60x60" class="img-circle">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        Joevan
                                        <br>
                                        <small>
                                            Comentou em <a href="#">UFBA</a>
                                        </small>
                                    </h4>
                                    <p>
                                        Vai ter greve...
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-default btn-block">Mais Eventos »</a>
                    </div>
                </div>
      </div>





  <div class="col-md-6" >
      <label for="exampleInputPassword1">Comentar:</label>
      <textarea  class="form-control" id="exampleInputPassword1" ></textarea>
      <br><br>
      <div class="row text-center">
        <button type="button" class="btn btn-info">Enviar</button>
      </div>
      </div>

    </div>
    </div>











  <?php
  include_once "footer.php"
  ?>
