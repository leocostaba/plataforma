<?php
    session_start();
    require_once('../helpers/Sessions.php');
    on();
    include_once "header.php"
?>

<h1>Enviar Trabalho!</h1>
<form method="post" action="../controllers/file.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Titulo:</label>
    <input type="text" class="form-control" name="titulo" placeholder="Digite um titulo para seu trabalho">
  </div>
  <div class="form-group">
    <label for="description">Descrição:</label>
    <textarea  class="form-control" name="description" ></textarea>
  </div>
  <div class="form-group">
    <label for="document">Selecione um Arquivo: </label>
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
      <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
      <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Escolher Arquivo</span><span class="fileinput-exists">Alterar</span><input type="file" name="..."></span>
      <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
    </div>
    <p class="help-block">O arquivo deve estar em PDF ou PPT(Power Point).</p>
  </div>

  <button type="submit" name="action" value="insert" class="btn btn-default">Enviar</button>
</form>
<!-- Latest compiled and minified CSS -->


<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<?php
include_once "footer.php"
?>
