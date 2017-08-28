<?php
session_start();
if(!$_SESSION['IdUsuario']) {
  exit("erro sem permissão para essa parte");

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scamboo</title>
    </head>
    <body>
    <form  align="center">
        <h1>SCAMBOO</h1>
        <a href="cadastroUsuario.php">Cadastro de usuários</a><br/>
        <a href="cadastroProduto.php">Cadastro de produtos</a><br/>
        <a href="login.php">Login</a>
    </form>
    </body>
</html>