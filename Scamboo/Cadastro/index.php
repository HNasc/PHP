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
			<div id='h1'>>
			<label for='idsair'><a href='sair.php'>Sair do Painel</a></label>
			</div>
			<div id='nav'>	  <!-- MENU -->
					<ul>
					<li>
					<a href='?pag=cadProdutos'>Cadastrar Produtos</a>
					</li>
					<li>
					<a href='?pag=conProdutos'>Consultar Produtos</a>
					</ul>
			</div>
			<div id='middle'> <!-- CONTEUDO -->
				<?php
				$pag=1;
				$pag=$_GET["pag"];
				switch ($pag) {
									/*CONSULTAR*/
				case 'conProdutos':
					include "Consulta/conProdutos.php";
				break;
									/*CADASTRAR*/
				case 'cadProdutos':
					include "Cadastro/formProdutos.php";
				break;
				}
				?>
			</div>
	</div>
<div id='footer'>			<!-- RODAPÉ -->
Fast soft® <br/>
<i>Desenvolvido por:<br/>Dhuli Gabriele & Endriu Gabriel</i>
</div>
</body>
</html>