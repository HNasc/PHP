<?php
	session_start();
	if(!$_SESSION['IdUsuario']) {
	exit("erro sem permissão para essa parte");

	}
	include 'base.php';
	$obj = new movBase();
	$obj -> conectaDB();
	@$obj -> cancelaTroca($_POST['IdMovimentacao']);
?>