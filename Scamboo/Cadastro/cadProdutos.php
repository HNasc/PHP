<?php
	session_start();
	if(!$_SESSION['IdUsuario']) {
	exit("erro sem permissão para essa parte");

	}
	include 'cadBase.php';
	$obj = new cadBase();
	$obj -> conectaDB();
	@$obj -> cadProdutos($_POST['nome'], $_POST['arquivo'], $_POST['categoria'], $_POST['descricao'], $_SESSION['IdUsuario']);
?>