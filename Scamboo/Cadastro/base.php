<?php
class cadBase{
	public $server='localhost'; //ou 127.0.0.1
	public $username='root';
	public $pw=''; //sem senha!
	public $dbname='scamboo';
	function conectaDB(){
		$connect=mysqli_connect($this ->server, $this ->username, $this ->pw);
		mysqli_set_charset($connect, "utf8");
		$selectDB=mysqli_select_db($connect, $this ->dbname);
		if (!$selectDB) die ('Erroooooo!!!'.mysqli_error($connect));
		}
		function cadUsuarios($nome,$sexo,$nascimento,$cpf,$email,$telefone,$endereco,$numero,$complemento,$cidade,$bairro,$estado,$cep,$usuario,$senha){
			//echo $_POST['nome'], '<br/>', $_POST['tipo_pessoa'], '<br/>', $_POST['sexo'], '<br/>', $_POST['nascimento'], '<br/>', $_POST['cpf_cnpj'], '<br/>', $_POST['email'], '<br/>', $_POST['telefone'], '<br/>', $_POST['endereco'], '<br/>', $_POST['numero'], '<br/>', $_POST['complemento'], '<br/>', $_POST['cidade'], '<br/>', $_POST['bairro'], '<br/>', $_POST['estado'], '<br/>', $_POST['cep'], '<br/>', $_POST['usuario'], '<br/>', $_POST['senha'];
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
			if(!empty($nome) && !empty($cpf) && !empty($email) && !empty($usuario) && !empty($senha))
			{
				$pesquisar_email=mysqli_query($link,"SELECT email FROM usuario");
				$pesquisar_cpf=mysqli_query($link,"SELECT cpf FROM usuario WHERE situacao = 'A'");

				while($result = mysqli_fetch_assoc($pesquisar_email))
				{
						if($result['email'] == $email)
						{
							$contemail++;
						}
				}
				while($result = mysqli_fetch_assoc($pesquisar_cpf))
				{
						if($result['cpf'] == $cpf)
						{
							$contecpf++;
						}
				}

				if(@$contemail != 0)
				{
					echo "E-mail já está cadastrado no site!";
					header("Refresh:3; url=../index.php");
				}
				else if(@$contecpf != 0){
					echo "CPF já está cadastrado no site!";
					header("Refresh:3; url=../index.php");
				}
				else
				{
					$inserir_cliente=mysqli_query($link,"INSERT INTO usuario (Nome, Sexo, Nascimento, CPF, Email, Telefone, Endereco, Numero, Complemento, Cidade, Bairro, UF, CEP, Usuario, Senha, Situacao) 
																values('$nome','$sexo',STR_TO_DATE( '$nascimento', '%d/%m/%Y' ),'$cpf','$email','$telefone','$endereco','$numero','$complemento','$cidade','$bairro','$estado','$cep','$usuario',SHA2('$senha',256), 'A')");
					if(!$inserir_cliente)die("Erro ao inserir dados: ".mysqli_error($link));
					else
					{
						echo '<br/><p><font color="green"><h3 align="center">Cadastro salvo com sucesso!</h3></font></p>';
						header("Refresh:3; url=../index.php");
					}
				}
			}
			else
			{
				echo "Os campos com '*' devem ser preenchidos!";
				header("Refresh:3; url=../index.php");
			}
		}//cadUsuarios


		function cadProdutos($nome, $img, $categoria, $descricao, $idUsuario){
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
					if(!empty($nome) && !empty($categoria) && !empty($idUsuario) ){
					if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
		{

			$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
			$img = $_FILES['arquivo']['name'];
			

			// Pega a extensao
			$extensao = strrchr($img, '.');

			// Converte a extensao para mimusculo
			$extensao = strtolower($extensao);

			// Somente imagens, .jpg;.jpeg;.gif;.png
			// Aqui eu enfilero as extesões permitidas e separo por ';'
			// Isso server apenas para eu poder pesquisar dentro desta String
			if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
			{
				// Cria um nome único para esta imagem
				// Evita que duplique as imagens no servidor.
				$novoNome = md5(microtime()) . $extensao;
				
				// Concatena a pasta com o nome
				$destino = '../Consulta/imgProduto/' . $novoNome; 
				
				// tenta mover o arquivo para o destino
				if( @move_uploaded_file( $arquivo_tmp, $destino  ))
				{
					//echo "<br/><br/>Imagem salva com sucesso em : <strong>" . $destino . "</strong><br />";
					//echo "<img src=\"" . $destino . "\" />";
				}
				else
					echo "<br/><br/>Erro ao salvar a imagem. Aparentemente você não tem permissão de escrita.<br />";
			}
			else
				echo "<br/><br/>Você poderá enviar apenas imagens \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
				//echo $img, ' ', $extensao;
		}
		else
		{
			echo "<br/><br/>Você não enviou nenhuma imagem!";
		}
						if(($novoNome) == null || ($novoNome) == ''){ $novoNome = 'default.jpg'; }
						$inserir_produto=mysqli_query($link," INSERT INTO Produto
						(nome,img,categoria,descricao,idusuario,situacao,publicacao) values('$nome', '$novoNome', '$categoria', '$descricao', '$idUsuario', 'A', now())");
						if(!$inserir_produto){
							die("Erro ao executar a query: ".mysqli_error($link));
							header("Refresh:10; url=../index.php");
						}
						else
						{
							echo '<br/><p><font color="green"><h3 align="center">Cadastro salvo com sucesso!</h3></font></p>';
							header("Refresh:3; url=../index.php");
						}
					}else{
						echo "Preencha todos os campos!";
						header("Refresh:3; url=../index.php");
					}
		}//cadProdutos
		function validaEmail($email){
			$pesquisar_email=mysqli_query($link,"SELECT email FROM usuario");
			while($result = mysqli_fetch_assoc($pesquisar_email))
			{
					if($result['email'] == $email)
					{
						$contemail++;
					}
			}
			if(@$contemail != 0)
			{
				$output = true;
				echo json_encode($output);
			}
		}//validaEmail
}//class

?>