<?php
session_start();
if(!$_SESSION['IdUsuario']) {
  exit("erro sem permissão para essa parte");

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Scamboo | Cadastro de Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="js/plugins/purify.min.js" type="text/javascript"></script>
<script src="js/fileinput.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/fa.js"></script>
<script src="js/<lang>.js"></script>
<link href="css/fileinput-rtl.min.css" rel="stylesheet">
<link href="themes/explorer/theme.css" rel="stylesheet">
<script src="js/fileinput.js"></script>
<script src="themes/explorer/theme.js"></script>
</head>
<body>
	<form action='Cadastro/cadProdutos.php' enctype="multipart/form-data" method='post'>

<!-- #region Dados -->
	<p>
	<div class="form-group">
		<label for='nome'>Nome:</label>
		<input name='nome' type='text' class="form-control" placeholder='Nome Completo' />
	</div>
    <label class="control-label">Selecione a imagem:</label>
    <input id="input-ke-1" name="arquivo" type="file" multiple class="file-loading" accept="image" data-show-preview="false">
    <script>
        $("#input-ke-1").fileinput({
            uploadUrl: "/file-upload-batch/2",
            showUpload: false,
            allowedFileExtensions: ['jpg', 'png', 'gif']
        });
    </script>
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
		<textarea name='descricao' class='form-control' cols="30" rows="10" maxlength="80"></textarea>
	</div>
	</p>
<!-- #endregion -->
	<center><div class='form-group'><input class='btn btn-primary' type='submit' value='Cadastrar' />
	<input class='btn btn-warning' type='reset' value='Limpar Dados' /></div></center>
<!-- #endregion -->

	</form>
</body>
</html>