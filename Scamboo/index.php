<!DOCTYPE html>
<html>
<head>
<title>SCAMBOO</title>
<meta charset="utf-8">
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
					<a href='?pag=cadastrese'>Cadastre-se</a>
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