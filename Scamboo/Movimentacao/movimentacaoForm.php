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
    <div class="modal fade" id="MovimentacaoModal<?php echo $result['IdProduto']; ?>" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Solicitação de troca: <?php echo $result['NomeProduto']; ?></center></h4>
                </div>
                <div class="modal-body">
                    <form action='Movimentacao/SolicitaTroca.php' enctype="multipart/form-data" method='post'>

                    <!-- #region Dados -->
                        <input type="hidden" name="IdProduto" value="<?php echo $result['IdProduto']; ?>" />
                        <div class="produtos">
                        <ul>
                            <li class="scb-item">
                                <div class="scb-prod-col-1">
                                    <div class="scb-prod-image">
                                        <div class="scb-prod-image-box">
                                            <img class="image" src="Consulta/imgProduto/<?php echo $result['img']; ?>" alt="[<?php echo $result['NomeProduto']; ?>]" title="<?php echo $result['NomeProduto']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="scb-prod-col-2">
                                    <div class="scb-prod-col-2-title">
                                        <h3><?php echo $result['NomeProduto']; ?></h3>
                                        <div class="scb-prod-col-2-info">
                                            <?php echo $result['Cidade'].', '.$result['Bairro'];?><br/>
                                            <?php echo $result['Categoria']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="scb-prod-col-3">
                                <!-- <a href="#" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh"></span> Trocar</a><br/> -->
                                </div>
                                <div class="scb-prod-col-4">
                                    <?php echo $result['Publicacao']; ?>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <br />
                        <div class="form-group" style="background-color: lightblue;">
                            <label for="solicita">Solicitar troca por:</label>
                            <select name='ProdutoMovimenta' class="form-control">
                                <?php include 'Consulta/conProdutosUsuarioSelect.php'; ?>
                            </select>
                        </div>
                    <!-- #endregion -->
                    <br />
                    <center><div class='form-group'><input class='btn btn-primary' type='submit' value='Solicitar' />
                    </form>
            </div>
        </div>
    </div>
</body>
</html>