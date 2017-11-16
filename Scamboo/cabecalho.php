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
	<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
	<?php
			$endereco = $_SERVER['REQUEST_URI'];
			if($endereco == "/php/scamboo/index.php" || $endereco == "/php/scamboo/" ){
				echo '<li class="active">';
			}
			else{
				echo '<li>';
			}
		?>
		<a href="index.php">Produtos</a></li>
		<?php
			if(isset($_SESSION['IdUsuario']))
			include 'opcoesUsuario.php';
		?>
		<li><a href="#" data-toggle="modal" data-target="#quemSomos">Quem Somos</a></li>
		<li><a href="#" data-toggle="modal" data-target="#contatoModal">Contato</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<?php
			if(isset($_SESSION['IdUsuario'])){
				echo '<li><a href="#">Olá, '.$_SESSION['nome'].'!</a></li>';
				echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>';
			}
			else{
				echo '<li><a href="#" data-toggle="modal" data-target="#CadastreseModal"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>';
				echo '<li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
			}
			
		?>
	</ul>
	</div>
</div>
</nav>
<!-- #endregion -->
<?php 
	include 'login.html'
?>

<!-- #region Modal Quem Somos -->
	<div class="modal fade" id="quemSomos" role="dialog">
		<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><center>Quem Somos</center></h4>
			</div>
			<div class="modal-body">
			<center>
		<p>
		<i>Este trabalho foi desenvolvido para a conclusão do técnico em Informática</i><br>
        <i>para Internet do IFRS-Campus Restinga. Ele tem como objetivo a troca de produtos </i><br>
        <i>sem o uso de dinheiro tornam possivel a aquisição e desprendimento de produtos. </i><br>
        <i>Buscamos focar em um sistema regional onde o usuário só irá interagir com gaúchos</i><br>
        <i> e assim facilitar a não utilização de frete para que não haja gastos para os usuários.</i><br>
	</center> 
			</div>
		</div>
		
		</div>
	</div>
<!-- #endregion -->

<!-- #region Modal Contato -->
	<!-- Modal -->
	<div class="modal fade" id="contatoModal" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><center>Contato</center></h4>
			</div>
			<div class="modal-body">
				<IFRAME src="contato.php" width="580" height="150" scrolling="yes" frameborder="0"></IFRAME>
				<!-- <p>NUM SEI</p> -->
			</div>
		</div>		
		</div>
	</div>
<!-- #endregion -->

<!-- #region Modal Cadastro de Usuario -->
<?php include 'cadastroUsuarioForm.php'; ?>
<!-- #endregion -->

<!-- #region Banner -->
<!-- Código do Banner em implementação -->
<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="css/img/banner1.jpg" alt="Baby Care">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="css/img/Banner3.jpg" alt="Boni Baby">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>      
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> -->
<!-- #endregion -->