<?php
	include 'base.php';
	$obj= new conBase();
	$obj -> conectaDB();
	$obj -> deletaProduto($_POST['IdProduto']);
?>