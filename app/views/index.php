<?php
include_once "header.php"
?>

<div class="row text-center">
  <div class="col-md-6"><img style="height: 300px;" src="..\assets\img\pessoas.png" alt="" /></div>
  <div class="col-md-6">
      testststs
  </div>
</div>
<br><br>
<div class="row text-center">
  <div class="col-md-6" style="background-color: blue; color: white">
      <h1>Crie sua conta agora!</h1>
      <form class="text-left">
          <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">Confimar Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Senha">
          </div>
          <div class="text-center">
              <button type="submit" class="btn btn-default">Cadastrar</button>
              <br>
              <br>
          </div>
      </form>
  </div>
  <div class="col-md-6"><img style="height: 300px;" src="..\assets\img\compartilha.png" alt="" /></div>
</div>

<?php
include_once "footer.php"
?>
