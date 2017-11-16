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
            
            echo '<div class="scb-prod-col-3-0">';
            echo '<a href="#" data-toggle="modal" data-target="#DetalhesProdutosModal'.$result['IdProduto'].'" class="btn btn-success"><span class="glyphicon glyphicon-th-list"></span> Detalhes</a>';
            echo '</div>';

            if($idUsuario <> $result['IdUsuario'] and $idUsuario <> 0){
                echo '<a href="#" data-toggle="modal" data-target="#MovimentacaoModal'.$result['IdProduto'].'" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span> Trocar</a><br/>';
            }
            if($idUsuario == $result['IdUsuario']){
                echo '<a href="#" data-toggle="modal" data-target="#EdicaoProdutosModal'.$result['IdProduto'].'" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Editar</a>';
                
                echo '<div class="scb-prod-col-3-2">';
                echo '<form action="Alteracao/delProdutos.php" enctype="multipart/form-data" method="POST">';
                echo '<input type="hidden" name="IdProduto" value="'.$result['IdProduto'].'" />';
                echo '<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button>';
                echo '</form>';
                echo '</div>';
            }
            ?>
            <!-- <a href="#" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh"></span> Trocar</a><br/> -->
            </div>
            <div class="scb-prod-col-4">
                <?php echo $result['Publicacao']; ?>
            </div>
        </li>
        <?php include 'Consulta/detalhesProdutoForm.php'; ?>
        <?php if($idUsuario <> $result['IdUsuario'] and $idUsuario <> 0){include 'Movimentacao/movimentacaoForm.php';} ?>
        <?php if($idUsuario == $result['IdUsuario']){include 'Alteracao/EditProdutosForm.php';} ?>
    </ul>
</div>