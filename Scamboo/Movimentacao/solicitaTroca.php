<?php
	session_start();
	if(!$_SESSION['IdUsuario']) {
	exit("erro sem permissão para essa parte");

	}
	include 'base.php';
	$obj = new movBase();
	$obj -> conectaDB();
	@$obj -> solicitaTroca($_POST['IdProdutoPara'], $_POST['IdProdutoDe'], $_SESSION['IdUsuario']);
?>