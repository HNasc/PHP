<?php
	include 'base.php';
	$obj= new conBase();
	$obj -> conectaDB();
	$obj -> consultaSolicitacoes();
?>