<?php
session_start();
if(isset($_SESSION['IdUsuario'])){
    session_destroy();
    header('Location: index.php');
}
else echo("Erro ao deslogar")
?>