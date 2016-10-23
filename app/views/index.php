<?php
    include_once "header.php"
?>

<div class="row text-center">
    <div class="col-md-6"><img style="height: 300px;" src="..\assets\img\pessoas.png" alt="" /></div>
    <div class="col-md-6 text-left" style=" padding-left:50px;">
        <h1 style="color:blue">Quem Somos ? </h1>
        <p> Somos os melhores em fazer um projeto em uma semana</p>
    </div>
</div>
<br><br>
<div class="row text-center">
    <div class="col-md-6" style="background-color: blue; color: white">
        <h1>Crie sua conta agora!</h1>
        <form action="..\controllers\user.php" method="post">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="nome" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="form-group">
                <label for="password2">Confirmar Senha:</label>
                <input type="password" class="form-control" name="password2">
              </div>
              <button type="submit" name="action" value="insert" class="btn btn-default">Cadastrar</button>
            </form>
    </div>
    <div class="col-md-6"><img style="height: 300px;" src="..\assets\img\compartilha.png" alt="" /></div>
</div>

<?php
    include_once "footer.php"
?>
