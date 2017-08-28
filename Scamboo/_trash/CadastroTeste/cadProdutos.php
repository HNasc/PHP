<?php
	echo 'CADASTRADO COM SUCESSO!<br />';
	echo '<br /><a href="../default.php?pag=formProdutos">Voltar</a>';
	include 'cadBase.php';
	$obj = new cadBase();
	$obj -> conectaDB();
	@$obj -> cadProdutos($_POST['nome'], $_POST['categoria'], $_POST['descricao'], $_POST['arquivo']);
?>
