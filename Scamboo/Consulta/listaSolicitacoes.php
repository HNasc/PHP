<div class="container text-left">    
<div class="row">
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
                        <div class="scb-prod-col-2-info-de">
                            <form action="#" enctype="multipart/form-data" method="POST">
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-th-list"></span> Detalhes</button><br/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="scb-prod-col-3" style="text-align: center; padding: 10px 10px 0 150px;">
                    <span class="glyphicon glyphicon-arrow-right" style="font-size: 30px;"></span><br/>
                    <strong>
                        <?php
                            if($result['Situacao'] == 'Pendente'){
                                echo '<form action="Movimentacao/cancelaTroca.php" enctype="multipart/form-data" method="POST">';
                                echo '<input type="hidden" name="IdMovimentacao" value="'.$result['IdMovimentacao'].'" />';
                                echo '<button type="submit" class="btn btn-Secondary"><span class="glyphicon glyphicon-remove"></span> Cancelar</button><br/>';
                                echo '</form>';
                                echo '<p><font color="red"><strong>'.$result['Situacao'].'</strong></p></font>';
                            }else if($result['Situacao'] == 'Finalizado'){
                                
                                echo '<span class="glyphicon glyphicon-arrow-right" style="font-size: 50px;"></span><br/>';
                                echo '<p><font color="green"><strong>'.$result['Situacao'].'</strong></p></font>';
                            }else if($result['Situacao'] == 'Recusado'){
                                
                                echo '<span class="glyphicon glyphicon-arrow-right" style="font-size: 50px;"></span><br/>';
                                echo '<p><font color="red"><strong>'.$result['Situacao'].'</strong></p></font>';
                            }
                        ?>
                    </strong>
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
                            <form action="#" enctype="multipart/form-data" method="POST">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-th-list"></span> Detalhes</button><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            <?php //if($idUsuario <> $result['IdUsuario'] and $idUsuario <> 0){include 'Movimentacao/movimentacaoForm.php';} ?>
            <?php //if($idUsuario == $result['IdUsuario']){include 'Alteracao/EditProdutosForm.php';} ?>
        </ul>
    </div>
    </div>
</div><br>