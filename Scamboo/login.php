<?php
echo "OLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
mb_internal_encoding("UTF-8"); 
mb_http_output( "iso-8859-1" );  
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
    //$aviso="Aeeeee!";
}
else {
    //erro ao logar
    $aviso="Senha ou usuário inválidos";
}
    echo $aviso;
}
?>