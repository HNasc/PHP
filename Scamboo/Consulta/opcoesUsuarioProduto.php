<!-- <div class="scb-prod-col-3-1">
<form action='Alteracao/editProdutos.php' enctype="multipart/form-data" method='post'>
    <input type="hidden" name="IdProduto" value="<?php echo $result['IdProduto']; ?>" />
    <button type="submit" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-edit"></span> Editar</button>
</form>
</div> -->
<div class="scb-prod-col-3-2">
<form action='Alteracao/delProdutos.php' enctype="multipart/form-data" method='POST'>
    <input type="hidden" name="IdProduto" value="<?php echo $result['IdProduto']; ?>" />
    <button type="submit" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
</form>
</div>