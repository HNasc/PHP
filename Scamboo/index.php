<!DOCTYPE html>
<html>
<head>
<title>SCAMBOO</title>
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
		<a class="navbar-brand" href="#">Scamboo</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">Produtos</a></li>
			<li><a href="#">Quem Somos</a></li>
			<li><a href="#">Contato</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href='#' data-toggle="modal" data-target="#CadastreseModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
		</div>
	</div>
	</nav>
<!-- #endregion -->

<!-- #region Modal Login -->
	<!-- Modal -->
	<div class="modal fade" id="CadastreseModal" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
				<!-- <IFRAME src="cadastroUsuarioForm.php" width="580" height="800" scrolling="yes" frameborder="0"></IFRAME>  -->
				<p>NUM SEI</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
		
		</div>
	</div>
<!-- #endregion -->

<!-- #region Modal Cadastro de Usuario -->
	<!-- Modal -->
	<div class="modal fade" id="CadastreseModal" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Cadastro de usuário</h4>
			</div>
			<div class="modal-body">
				<IFRAME src="cadastroUsuarioForm.php" width="580" height="800" scrolling="yes" frameborder="0"></IFRAME> 
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
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