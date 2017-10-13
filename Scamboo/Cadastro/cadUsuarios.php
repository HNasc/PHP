<?php
//echo $_POST['nome'], '<br/>', $_POST['tipo_pessoa'], '<br/>', $_POST['sexo'], '<br/>', $_POST['nascimento'], '<br/>', $_POST['cpf_cnpj'], '<br/>', $_POST['email'], '<br/>', $_POST['telefone'], '<br/>', $_POST['endereco'], '<br/>', $_POST['numero'], '<br/>', $_POST['complemento'], '<br/>', $_POST['cidade'], '<br/>', $_POST['bairro'], '<br/>', $_POST['estado'], '<br/>', $_POST['cep'], '<br/>', $_POST['usuario'], '<br/>', $_POST['senha'];
	include 'base.php';
	$obj = new cadBase();
	$obj -> conectaDB();
	@$obj -> cadUsuarios($_POST['nome'],
						$_POST['sexo'],
						$_POST['nascimento'],
						$_POST['cpf'],
						$_POST['email'],
						$_POST['telefone'],
						$_POST['endereco'],
						$_POST['numero'],
						$_POST['complemento'],
						$_POST['cidade'],
						$_POST['bairro'],
						$_POST['estado'],
						$_POST['cep'],
						$_POST['usuario'],
						$_POST['senha']);
?>