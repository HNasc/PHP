<?php
	include 'base.php';
	$obj= new altBase();
	$obj -> conectaDB();
	$obj -> deletaProduto($_POST['IdProduto']);
?>