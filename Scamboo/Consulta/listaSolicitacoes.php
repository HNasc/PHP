<div class="produtos">
    <ul>
        <li class="scb-item">
            <div class="scb-prod-col-1">
                <div class="scb-prod-image">
                    <div class="scb-prod-image-box">
                        <img class="image" src="Consulta/imgProduto/<?php echo $result['imgDe']; ?>" alt="[<?php echo $result['ProdutoDe']; ?>]" title="<?php echo $result['ProdutoDe']; ?>" />
                    </div>
                </div>
            </div>
            <div class="scb-prod-col-2">
                <div class="scb-prod-col-2-title">
                    <h3><?php echo $result['ProdutoDe']; ?></h3>
                    <div class="scb-prod-col-2-info">
                        <div class="scb-prod-col-3-0">
                            <form action="#" enctype="multipart/form-data" method="POST">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-th-list"></span> Detalhes</button><br/>
                            </form> 
                        </div>
                        <?php echo $result['CategoriaDe']; ?>
                    </div>
                </div>
            </div>
            <div class="scb-prod-col-3">
            <h4>Trocar por</h4><br/>

            <strong>Situação: <?php echo $result['Situacao']; ?></strong>
            </div>
            <div class="scb-prod-col-1-para">
                <div class="scb-prod-image-para">
                    <div class="scb-prod-image-box-para">
                        <img class="image" src="Consulta/imgProduto/<?php echo $result['imgPara']; ?>" alt="[<?php echo $result['ProdutoPara']; ?>]" title="<?php echo $result['ProdutoPara']; ?>" />
                    </div>
                </div>
            </div>
            <div class="scb-prod-col-2-para">
                <div class="scb-prod-col-2-title-para">
                    <h3><?php echo $result['ProdutoPara']; ?></h3>
                    <div class="scb-prod-col-2-info-para">
                        <div class="scb-prod-col-3-0-para">
                            <form action="#" enctype="multipart/form-data" method="POST">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-th-list"></span> Detalhes</button><br/>
                            </form> 
                        </div>
                        <?php echo $result['CategoriaPara']; ?>
                    </div>
                </div>
            </div>
            <!-- <div class="scb-prod-col-4">
                <?php //echo $result['Publicacao']; ?>
            </div> -->
        </li>
        <?php //if($idUsuario <> $result['IdUsuario'] and $idUsuario <> 0){include 'Movimentacao/movimentacaoForm.php';} ?>
        <?php //if($idUsuario == $result['IdUsuario']){include 'Alteracao/EditProdutosForm.php';} ?>
    </ul>
</div>