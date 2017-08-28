<?php
class cadBase{
	public $server='localhost'; //ou 127.0.0.1
	public $username='root';
	public $pw=''; //sem senha!
	public $dbname='scamboo';
	function conectaDB(){
		$connect=mysql_connect($this ->server, $this ->username, $this ->pw);
		mysql_set_charset('utf8',$connect);
		$selectDB=mysql_select_db($this ->dbname, $connect);
		if (!$selectDB) die ('Erro ao se conectar: '.mysql_error());
		//echo 'Selecionado!';
		}

////////////////////////
//CADASTRO DE USUARIO//
//////////////////////

function cadUsuarios($nome,$usuario,$senha){
	//echo $_POST['nome'], '<br/>', $_POST['tipo_pessoa'], '<br/>', $_POST['sexo'], '<br/>', $_POST['nascimento'], '<br/>', $_POST['cpf_cnpj'], '<br/>', $_POST['email'], '<br/>', $_POST['telefone'], '<br/>', $_POST['endereco'], '<br/>', $_POST['numero'], '<br/>', $_POST['complemento'], '<br/>', $_POST['cidade'], '<br/>', $_POST['bairro'], '<br/>', $_POST['estado'], '<br/>', $_POST['cep'], '<br/>', $_POST['usuario'], '<br/>', $_POST['senha'];
	if(!empty($nome) && !empty($usuario) && !empty($senha))
	{
		// $pesquisar_email=mysql_query('SELECT email FROM usuario');
		// while($result = mysql_fetch_assoc($pesquisar_email))
		// {
		// 		if($result['email'] == $email)
		// 		{
		// 			$contemail++;
		// 		}
		// }
	// if(@$contemail != 0)
	// {
	// 	echo "E-mail já está cadastrado no site!";
	// }
	// else
	// {
		$inserir_cliente=mysql_query("INSERT INTO usuario (Nome, Usuario, Senha) values('$nome','$usuario','$senha')");
		if(!$inserir_cliente)die("Erro ao inserir dados: ".mysql_error());
		else
		{
			echo '<br/><p><font color="green"><h3 align="center">Cadastro salvo com sucesso!</h3></font></p>';
			echo '<br /><a href="#">Voltar</a>';
		}
	// }
	}
	else
	{
		echo "Preencha todos os campos!";
	}
	}//cadCliente
}//class