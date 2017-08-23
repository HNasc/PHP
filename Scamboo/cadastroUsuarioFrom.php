<!DOCTYPE html>
<html>
<head>
  <title>Scamboo | Cadastrar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<!-- <div class="jumbotron">
	<div class="container text-center">
		<img src='css/img/logo_v2.png' alt='Logo' title='www.scamboo.com.br' />
	</div>
	</div> -->
	<!-- <legend>Cadastro do usuário</legend> -->
	<form action='Cadastro/cadclientes.php' enctype="multipart/form-data" method='post'>
	<p>
	<center><h3>Dados pessoais</h3></center>
	<div class="form-group">
		<label for='nome'>Nome:</label>
		<input name='nome' type='text' class="form-control" placeholder='Nome Completo' />
	</div>
	<div class="form-group">
	<label for='tipoPessoa'>Pessoa:</label><br/>
		<label class="radio-inline"><input type="radio" name="tipoPessoa" value="F">Física</label>
		<label class="radio-inline"><input type="radio" name="tipoPessoa" value="J">Jurídica</label>
	</div>	
	<div class="form-group">
		<label for='cpf'>CPF / CNPJ:</label>
		<input name='cpf' type='text' class="form-control" />
	</div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input name="email" type="email" class="form-control" placeholder='exemplo@scamboo.com'>
    </div>
	<div class='form-group'>
		<label for='fone'>Fone:</label>
		<input name='fone' type='text' class='form-control' placeholder='(00)98888-7777'/>
	</div>
	<center><h3>Localização</h3></center>
	<div class='form-group'>
		<label for='endereco'>Endereço:</label>
		<input name='endereco' type='text' class='form-control' placeholder='Rua exemplo, n 90' />
	</div>
	<div class='form-group'>
		<label for='cidade'>Cidade:</label>
		<input name='cidade' type='text' class='form-control' />
	</div>
	<div class='form-group'>
	<label for='estado'>Estado:</label>
		<select name='estado' id='estado' class='form-control'>
			<option value="AC">AC</option>
			<option value="AL">AL</option>
			<option value="AM">AM</option>
			<option value="AP">AP</option>
			<option value="BA">BA</option>
			<option value="CE">CE</option>
			<option value="DF">DF</option>
			<option value="ES">ES</option>
			<option value="GO">GO</option>
			<option value="MA">MA</option>
			<option value="MG">MG</option>
			<option value="MS">MS</option>
			<option value="MT">MT</option>
			<option value="PA">PA</option>
			<option value="PB">PB</option>
			<option value="PE">PE</option>
			<option value="PI">PI</option>
			<option value="PR">PR</option>
			<option value="RJ">RJ</option>
			<option value="RN">RN</option>
			<option value="RS">RS</option>
			<option value="RO">RO</option>
			<option value="RR">RR</option>
			<option value="SC">SC</option>
			<option value="SE">SE</option>
			<option value="SP">SP</option>
			<option value="TO">TO</option>
		</select>
	</div>
	<div class='form-group'>
		<label for='cep'>CEP:</label>
		<input name='cep' type='text' class='form-control' placeholder='91000-000'/>
	</div>
	</p>
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
	</form>
	<!-- <footer class="container-fluid text-center">
  		<p>Scamboo® <br/>
<i>Desenvolvido por:<br/>Dhuli Gabriele & Endriu Gabriel</i></p>
	</footer> -->
</body>
</html>