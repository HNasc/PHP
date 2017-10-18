<div class="modal fade" id="EdicaoProdutosModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><center>Alterar produto: <?php echo $result['NomeProduto']; ?></center></h4>
            </div>
            <div class="modal-body">
                <form action='Alteracao/EditProdutos.php' enctype="multipart/form-data" method='post'>

                <!-- #region Dados -->
                <div class="form-group">
                    <label for='nome'>Nome do Produto:</label>
                    <input name='nome' type='text' class="form-control" value="<?php echo $result['NomeProduto']; ?>" />
                </div>
                <div class='form-group'>
                        <div class="form-group">
                            <label>Enviar Imagem</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Procurar... <input type="file" id="imgInp" name="arquivo">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                            <img id='img-upload' src="Consulta/imgProduto/<?php echo $result['img']; ?>" alt="[<?php echo $result['NomeProduto']; ?>]" title="<?php echo $result['NomeProduto']; ?>"/><br/>
                        </div>
                </div>
                <div class='form-group'>
                    <label for='categoria'>Categoria:</label>
                    <select name='categoria' id='categoria' class='form-control'>
                        <option value="Alimentação">Alimentação</option>
                        <option value="Acessórios">Acessórios</option>
                        <option value="Diversos">Diversos</option>
                        <option value="Higiêne">Higiêne</option>
                        <option value="Vestimenta">Vestimenta</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='descricao'>Descrição:</label>
                    <textarea name='descricao' class='form-control' cols="30" rows="10" maxlength="80"><?php echo $result['Descricao']; ?></textarea>
                </div>
<!-- #endregion -->
                <center><div class='form-group'><input class='btn btn-primary' type='submit' value='Salvar alterações' />
                <input class='btn btn-warning' type='reset' value='Limpar Dados' /></div></center>

                </form>
        </div>
    </div>

</div>