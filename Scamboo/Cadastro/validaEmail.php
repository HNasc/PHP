<?php
	session_start();
	if(!$_SESSION['IdUsuario']) {
	exit("erro sem permissão para essa parte");

	}
	include 'base.php';
	$obj = new cadBase();
	$obj -> conectaDB();
	@$obj -> validaEmail($_POST['email']);
?>