<?php
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
session_start();
mb_internal_encoding("UTF-8"); 
mb_http_output( "iso-8859-1" );  
ob_start("mb_output_handler");   
header("Content-Type: text/html; charset=ISO-8859-1",true);
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
<!-- #region Cabeçalho -->
	<div class="jumbotron">
	<div class="container text-center">
		<img src='css/img/logo_v2.png' alt='Logo' title='www.scamboo.com.br' />
	</div>
	</div>
<!-- #endregion -->

<!-- #region Barra de Menu -->
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		</button>
		<a class="navbar-brand" href="#">Olá, <?php echo($nome); ?></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Meus Produtos</a></li>
			<li><a href="#" data-toggle="modal" data-target="#cadastroProdutosModal">Cadastrar Produtos</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href='logout.php'><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
		</ul>
		</div>
	</div>
	</nav>
<!-- #endregion -->

<!-- #region Conteudo -->
<div class="container text-center"> 
  <h3>Meus Produtos</h3><br>
	<div class="row">
	<?php 
		include 'Consulta/conProdutos.php'
	?>
	</div>
</div><br>
<!-- #endregion -->

<!-- #region Modal Cadastro de Produtos -->
<div class="modal fade" id="cadastroProdutosModal" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><center>Cadastro de Produtos</center></h4>
			</div>
			<div class="modal-body">
				<IFRAME src="cadastroProdutosForm.php" width="550" height="540" scrolling="yes" frameborder="0"></IFRAME>
				<!-- <p>NUM SEI</p> -->
			</div>
		</div>
		
		</div>
	</div>
<!-- #endregion -->

<!-- #region Rodapé -->
	<footer class="container-fluid text-center">
		<p>Scamboo® <br/>
		<i>Desenvolvido por:<br/>Dhuli Gabriele & Endriu Gabriel</i></p>
	</footer>
<!-- #endregion -->
</body>
</html>