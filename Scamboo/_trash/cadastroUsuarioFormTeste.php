<!DOCTYPE html>
<html>
<head>
  <title>Scamboo | Cadastrar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form action='CadastroTeste/cadUsuarios.php' enctype="multipart/form-data" method='post'>

<!-- #region Dados pessoais -->
	<p>
	<center><h3>Dados pessoais</h3></center>
	<div class="form-group">
		<label for='nome'>Nome:</label>
		<input name='nome' type='text' class="form-control" placeholder='Nome Completo' />
	</div>

<!-- #region Dados de acesso -->
	<fieldset id='fieldcadacess'>
	<legend>Dados de acesso</legend>
	<div class='form-group'>
		<label for='usuario'>Usuário:</label>
		<input name='usuario' type='text' class="form-control" placeholder='Digite seu nome de usuário' />
	</div>
	<div class='form-group'>
		<label for='senha'>Senha:</label>
		<input  name='senha' type='password' class='form-control' placeholder='Digite sua senha' />
  	</div>
	</fieldset>
	<center><div class='form-group'><input class='btn btn-primary' type='submit' value='Cadastrar' />
	<input class='btn btn-warning' type='reset' value='Limpar Dados' /></div></center>
<!-- #endregion -->

	</form>
</body>
</html>