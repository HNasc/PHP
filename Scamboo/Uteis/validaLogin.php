<?php
if($_POST['email']&&$_POST['senha']){
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
    header('Location: segura.php');
  }
  else {
    //erro ao logar
    $aviso="Senha ou usuário inválidos";
  }

}
?>