<?php
$aviso= "";
if(isset($_POST['email'])&& isset($_POST['senha'])){
  $DB=new PDO('mysql:host=localhost;dbname=scamboo','root','');
  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $rs = $DB->prepare("SELECT IdUsuario FROM usuarios WHERE email=:email AND senha=SHA2(:senha,256)");
  $rs->bindParam("email", $_POST['email']);
  $rs->bindParam("senha", $_POST['senha']);
  $rs->execute();
  $email = $rs->fetch(PDO::FETCH_ASSOC);
  if($email['IdUsuario']){
    // Logou
    session_start();
    $_SESSION['IdUsuario']=$email['IdUsuario'];
    header('Location: Uteis/pagUsuario.php');
    $aviso="AEEEo";
  }
  else {
    //erro ao logar
    $aviso="Senha ou usuário inválidos";
  }

}
?>
<!DOCTYPE html>
<html>
<body>
  <?php echo $aviso; ?>
<form action="login.php" method="post">
  <center>
  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" />
  <br>
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha" />
  <br>
  <button type="submit">Entrar</button>
  <br>
  </center>
</form>
</body>
</html>
