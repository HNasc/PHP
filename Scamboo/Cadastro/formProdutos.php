<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
<!-- 
        <form method="POST" action="Uteis/insereProduto.php">
            <table align="center">
                    <td><label>Nome: </label></td>
                    <td><input type="text" name="nome" maxlength="60"/></td>
                </tr>
                <tr>
                    <td><label>Categoria: </label></td>
                    <td><input type="text" name="categoria" maxlength="60"/></td>
                </tr>
                <tr>
                    <td><label>Descrição: </label></td>
                    <td><input type="text" name="descricao" maxlength="200"/></td>
                </tr>
                <tr>
                <br/>
                    <td><br/><a href="index.php">VOLTAR</a></td>
                    <td align="right"><br/><input type="submit" value="Salvar"></td>
                </tr>
            </table>
        </form> -->

    <fieldset id='fieldcad'>
	<legend>Cadastro de Produtos</legend>
	<form action='Cadastro/cadProdutos.php' enctype="multipart/form-data" method='post'>
	<div id="Arqprod">
	<p><center>AVISO:</center>
	Antes de enviar a imagem do produto, <br/>ela precisa ter<strong>exatamente</strong>as dimensões de: <br/>240px(altura) por 200px(largura).</p><br />
	</div>
	<div>
		<label for='idarquivo'>Enviar Imagem:</label><br />
		<input id='idarquivo' name='arquivo' type='file' /><br />
	</div>
	<p>
	<div>
		<label for='idnome'>Nome:</label><br />
		<input id='idnome' name='nome' type='text' placeholder='Nome do produto' /><br /><br />
	</div>
	<div id='fieldcadEst'>
		<label for='idestado'>Categoria:</label>
		<select name="categoria" id="idcategoria">
		<option value="Higiene">	Higiene</option>
		<option value="Alimentação">		Alimentação</option>
		<option value="Brinquedo">	Brinquedo</option>
		<option value="Diversos">	Diversos</option>
		</select><br /><br />
	</div>		
	<div>
		<label for='iddescricao'>Descrição:</label><br />
		<textarea name='descricao' maxlength='255' rows='8' cols='38' placeholder='Descrição do produto'></textarea><br />
	</div>
	</p>
	<div id='btnsub'><input type='submit' value='Cadastrar' /></div>
	<div id='btnres'><input type='reset' value='Limpar Dados' /></div>
	</form>
	</fieldset>
    </body>
</html>