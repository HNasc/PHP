<?php
	include 'conBase.php';
	$obj= new conBase();
	$obj -> conectaDB();
	$obj -> consultaProdutosUsuario();
?>