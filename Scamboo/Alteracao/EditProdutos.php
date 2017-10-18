<?php
	session_start();
	if(!$_SESSION['IdUsuario']) {
	exit("erro sem permissão para essa parte");

	}
	include 'base.php';
	$obj = new altBase();
	$obj -> conectaDB();
	@$obj -> editaProduto($_POST['nome'], $_POST['arquivo'], $_POST['categoria'], $_POST['descricao'], $_POST['IdProduto']);
?>