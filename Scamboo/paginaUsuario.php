<?php
session_start();
ob_start("mb_output_handler");   
if(!$_SESSION['IdUsuario']) {
  exit("erro sem permissão para essa parte");

}
$nome = utf8_encode($_SESSION['nome']);
?> 
<!DOCTYPE html>
<html>
<head>
<title>Scamboo | Sua Página</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php include 'cabecalho.php'?>
<!-- #region Conteudo -->
<h3 align="center">Meus Produtos</h3><br>
<div class="container text-left">    
  <div class="row">
    <?php 
    	include 'Consulta/base.php';
			include 'Consulta/conProdutosUsuarioLista.php'
		?>
  </div>
</div><br>
<!-- #endregion -->

<!-- #region Modal Cadastro de Produtos -->
<?php include 'cadastroProduto.php'?>
<!-- #endregion -->

<!-- #region Rodapé -->
<?php include 'rodape.html' ?>
<!-- #endregion -->
</body>
</html>