<?php
ob_start("mb_output_handler");   
header("Content-Type: text/html; charset=ISO-8859-1",true);
$aviso= "";
if(isset($_POST['email'])&& isset($_POST['senha'])){
$DB=new PDO('mysql:host=localhost;dbname=scamboo','root','');
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$rs = $DB->prepare("SELECT IdUsuario,nome FROM usuario WHERE email=:email AND senha=SHA2(:senha,256)");
$rs->bindParam("email", $_POST['email']);
$rs->bindParam("senha", $_POST['senha']);
$rs->execute();
$email = $rs->fetch(PDO::FETCH_ASSOC);
if($email['IdUsuario']){
    // Logou
    session_start();
    $_SESSION['IdUsuario']=$email['IdUsuario'];
    //nome do usuário que vai aparecer na página do usuario
    $_SESSION['nome']=utf8_decode($email['nome']);
    header('Location: paginaUsuario.php');
}
else {
    //erro ao logar
    echo '<br/><p><font color="red"><h3 align="center">Senha ou usuário inválidos!</h3></font></p>';
    header("Refresh:2; url=index.php");
}
}
?>