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
		<li><a href="#" data-toggle="modal" data-target="#quemSomos">Quem Somos</a></li>
		<li><a href="#" data-toggle="modal" data-target="#contatoModal">Contato</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href='#' data-toggle="modal" data-target="#CadastreseModal"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
		<li><a href='#' data-toggle="modal" data-target="#LoginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	</ul>
	</div>
</div>
</nav>
<!-- #endregion -->

<!-- #region Modal Login -->
<div class="modal fade" id="LoginModal" role="dialog">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><center>Login</center></h4>
			</div>
			<div class="modal-body">
			<?php
			mysql_query("SET NAMES 'utf8'");
			mysql_query('SET character_set_connection=utf8');
			mysql_query('SET character_set_client=utf8');
			mysql_query('SET character_set_results=utf8');
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

			}
			?>
			<?php echo $aviso; ?>
			<form action="index.php" method="POST">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label for="pwd">Senha:</label>
					<input type="password" class="form-control" name="senha">
				</div>
				<!-- Falta implementar o "Lembrar senha" -->
				<div class="checkbox">
					<label><input type="checkbox"> Lembrar senha</label><br /><br />
					<a href="#">Esqueci minha senha</a>
				</div>
				<button type="submit" class="btn btn-default">Entrar</button>
			</form>
			</div>
		</div>
		</div>
</div>
<!-- #endregion -->

<!-- #region Modal Quem Somos -->
	<div class="modal fade" id="quemSomos" role="dialog">
		<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title"><center>Quem Somos</center></h4>
			</div>
			<div class="modal-body">
				<IFRAME src="quemSomos.php" width="750" height="700" scrolling="yes" frameborder="0"></IFRAME>
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
<div class="modal fade" id="CadastreseModal" role="dialog">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Cadastro de usuário</h4>
		</div>
		<div class="modal-body">
			<IFRAME src="cadastroUsuarioForm.php" width="580" height="540" scrolling="yes" frameborder="0"></IFRAME> 
		</div>
	</div>
	</div>
</div>
<!-- #endregion -->

<!-- #region Banner -->
<!-- Código do Banner em implementação -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

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
        <img src="css/img/banner2.jpg" alt="Boni Baby">
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
</div>
<!-- #endregion -->