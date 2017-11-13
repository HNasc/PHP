<?php
	include 'base.php';
	$obj = new valBase();
	$obj -> conectaDB();
	@$obj -> resetSenha($_POST['email']);
?>