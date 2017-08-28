<?php
$aviso= "";
if(isset($_POST['email'])&& isset($_POST['senha'])){
  $DB=new PDO('mysql:host=localhost;dbname=scamboo','root','');
  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $rs = $DB->prepare("SELECT IdUsuario FROM usuario WHERE email=:email AND senha=SHA2(:senha,256)");
  $rs->bindParam("email", $_POST['email']);
  $rs->bindParam("senha", $_POST['senha']);
  $rs->execute();
  $email = $rs->fetch(PDO::FETCH_ASSOC);
  if($email['IdUsuario']){
    // Logou
    session_start();
    $_SESSION['IdUsuario']=$email['IdUsuario'];
    header('Location: paginaUsuario.php');
    //$aviso="Aeeeee!";
  }
  else {
    //erro ao logar
    $aviso="Senha ou usuário inválidos";
  }

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <?php echo $aviso; ?>
<form action="loginForm.php" method="POST">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Lembrar senha</label>
  </div>
  <button type="submit" class="btn btn-default">Entrar</button>
</form>
</body>
</html>
