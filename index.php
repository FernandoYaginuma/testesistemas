<?php

  $teste = [];

  if(count($_POST) > 0) {
    
    if($_POST['nome'] === "") {
      $teste[] = "Nome vazio";
    }

    if($_POST['email'] === "") {
      $teste[] = "email vazio";
    }

    if($_POST['senha'] != $_POST['confirmacao']) {
      $teste[] = "As senhas devem ser iguais";
    }

  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>testesistemas</title>
</head>
<body>
  <?php if(count($teste)): ?>
    <ul>
      <?php foreach($teste as $teste): ?>
        <li><?= $teste ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <form action="index.php" method="POST">
    <div>
      <input type="text" name="nome" placeholder="Nome">
    </div>
    <div>
      <input type="text" name="email" placeholder="E-mail">
    </div>
    <div>
      <input type="password" name="senha" placeholder="Senha">
    </div>
    <div>
      <input type="password" name="confirmacao" placeholder="Confirme a sua senha">
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>