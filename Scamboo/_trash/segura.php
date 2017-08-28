<?php
session_start();
if(!$_SESSION['IdUsuario']) {
  exit("erro sem permissão para essa parte");

}
?> 
<!DOCTYPE html>
<html>
  <body>
    <h1>Página segura!</h1>
  </body>

</html>
