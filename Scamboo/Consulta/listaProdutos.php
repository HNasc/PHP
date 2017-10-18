<!DOCTYPE html>
<html>
<head>
    <title>Scamboo | Detalhes do Produto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
                <?php 
                $idUsuario = 0;
                
                if(isset($_SESSION['IdUsuario']) > 0)
                $idUsuario = $_SESSION['IdUsuario'];

                if($idUsuario <> $result['IdUsuario']){
                    echo '<a href="#" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh"></span> Trocar</a><br/>';
                }
                else{
                    echo '<a href="#" data-toggle="modal" data-target="#EdicaoProdutosModal" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-edit"></span> Editar</a>';
                    
                    echo '<div class="scb-prod-col-3-2">';
                    echo '<form action="Alteracao/delProdutos.php" enctype="multipart/form-data" method="POST">';
                    echo '<input type="hidden" name="IdProduto" value="'.$result['IdProduto'].'" />';
                    echo '<button type="submit" class="btn btn-lg btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</button>';
                    echo '</form>';
                    echo '</div>';
                }
                ?>
                <!-- <a href="#" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh"></span> Trocar</a><br/> -->
                </div>
                <div class="scb-prod-col-4">
                    <?php echo $result['Publicacao']; ?>
                </div>
                <?php include 'Alteracao/EditProdutosForm.php'; ?>
            </li>
        </ul>
    </div>
</body>
</html>