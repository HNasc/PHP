<form action='../Alteracao/editProdutos.php' enctype="multipart/form-data" method='post'>
    <input type="hidden" name="idProduto" value="<?php echo $result['IdProduto']; ?>" />
    <button type="submit" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-edit"></span> Editar</button>
</form>
<form action='../Alteracao/delProdutos.php' enctype="multipart/form-data" method='post'>
    <input type="hidden" name="idProduto" value="<?php echo $result['IdProduto']; ?>" />
    <button type="submit" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
</form>