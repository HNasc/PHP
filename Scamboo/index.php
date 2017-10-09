<?php
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
session_start();
mb_internal_encoding("UTF-8"); 
mb_http_output( "iso-8859-1" );  
ob_start("mb_output_handler");   
if(!isset($_SESSION['IdUsuario']))
$nome = utf8_encode(isset($_SESSION['nome']));
?> 
<!DOCTYPE html>
<html>
<head>
<title>Scamboo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- #region Cabeçalho -->
<?php 
	include 'cabecalho.php'
?>
<!-- #endregion -->
<!-- #region Conteúdo -->
<h3 align="center">Produtos</h3><br>
<div class="container text-left">    
  <div class="row">
		<?php 
			include 'Consulta/conProdutos.php'
		?>
  </div>
</div><br>
<!-- #endregion -->

<!-- #region Rodapé -->
<?php 
	include 'rodape.html'
?>
<!-- #endregion -->
</body>
</html>