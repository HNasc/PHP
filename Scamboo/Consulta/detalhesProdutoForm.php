<!DOCTYPE html>
<html>
<head>
  <title>Scamboo | Cadastro de Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/cadastroProduto.js"></script>
  <link href="css/cadastroProduto.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="modal fade" id="DetalhesProdutosModal<?php echo $result['IdProduto']; ?>" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Detalhes do produto: <?php echo $result['NomeProduto']; ?></center></h4>
                </div>
                <div class="modal-body">
                    <!-- #region Dados -->
                    <input type="hidden" name="IdProduto" value="<?php echo $result['IdProduto']; ?>" />
                    <div class="form-group">
                        <label for='nome'>Nome do Produto:</label>
                        <input name='nome' type='text' class="form-control" value="<?php echo $result['NomeProduto']; ?>" readonly />
                    </div>
                    <div class='form-group'>
                        <div class="form-group">
                            <label>Imagem:</label>
                            <img id='img-upload' src="Consulta/imgProduto/<?php echo $result['img']; ?>"/><br/>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='nome'>Categoria:</label>
                        <input name='nome' type='text' class="form-control" value="<?php echo $result['Categoria']; ?>" readonly />
                    </div>
                    <div class='form-group'>
                        <label for='descricao'>Descrição:</label>
                        <textarea name='descricao' class='form-control' cols="30" rows="10" maxlength="80" readonly><?php echo $result['Descricao']; ?></textarea>
                    </div>
    <!-- #endregion -->
            </div>
        </div>

    </div>
</body>
</html>