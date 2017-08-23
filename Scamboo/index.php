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
	<div id='corpo'>		<!-- CABEÇALHO -->
			<div id='logo'>
				<img src='css/img/logo.png' alt='Logo' title='www.scamboo.com.br' />
			</div>
			<div id='h1'>
			<label for='idlogin'><a href='?pag=login'>Login</a></label>
			</div>
			<div id='nav'>	  <!-- MENU -->
					<ul>
					<li>
					<a href='?pag=conProdutos'>Produtos</a>
					</li>
					<li>
					<a href='?pag=quemSomos'>Quem somos</a>
                    </li>
                    <li>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CadastreseModal">Cadastre-se</button>
					<!-- Modal -->
					<div class="modal fade" id="CadastreseModal" role="dialog">
						<div class="modal-dialog">
						
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Cadastro de usuário</h4>
							</div>
							<div class="modal-body">
								<IFRAME src="cadastroUsuarioFrom.php" width="580" height="800" scrolling="yes" frameborder="0"></IFRAME> 
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
							</div>
						</div>
						
						</div>
					</div>
                    </li>
					</ul>
			</div>
			<div id='middle'> <!-- CONTEUDO -->
				<?php

				//error_reporting(0); //Desliga todos os erros
				//error_reporting(E_ERROR | E_WARNING | E_PARSE);
				error_reporting(E_ALL ^ E_NOTICE); //Reporta os erros exceto o E_NOTICE
				//error_reporting(E_ALL); //Reporting all PHP errors
				$pag=1;
				$pag=$_GET["pag"];
				switch ($pag) {
									/*CONSULTAR*/
					case 'conProdutos':
						include "Consulta/conProdutos.php";
					break;
										/*QUEM SOMOS*/
					case 'quemSomos':
						include "quemSomos.php";
					break;
										/*CADASTRAR*/
					case 'cadastrese':
						include "cadastroUsuario.php";
					break;
										/*LOGIN*/
					case 'login':
						include "login.php";
					break;
				}
				?>
			</div>
	</div>
<div id='footer'>			<!-- RODAPÉ -->
Scamboo® <br/>
<i>Desenvolvido por:<br/>Dhuli Gabriele & Endriu Gabriel</i>
</div>
</body>
</html>