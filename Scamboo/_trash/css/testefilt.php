<?php
	include 'filtro.php';
	$obj= new Clientes();
	$obj -> conectaDB();
	$obj -> consultaCliente();
?>