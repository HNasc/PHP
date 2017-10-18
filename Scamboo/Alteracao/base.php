<?php 
class altBase{
	public $dbname='scamboo';
	public $server='localhost';
	public $username='root';
	public $pw='';
	function conectaDB() {
		$connect=mysqli_connect($this ->server, $this ->username, $this ->pw);
		mysqli_set_charset($connect, "utf8");
		$selectDB=mysqli_select_db($connect, $this ->dbname);
		if (!$selectDB) die ('Erroooooo!!!'.mysqli_error($connect));
        }
        
		function deletaProduto($idProduto) {
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);

            if($idProduto <= 0){
                echo 'Produto não existe!';
            }
            else{
                $remover_produto=mysqli_query($link, "Update Produto set Situacao = 'I' where IdProduto = $idProduto");
                
                if(!$remover_produto){
					die("Erro ao executar a query: ".mysql_error());
					header("Refresh:10; url=../index.php");
                }
				else
				{
					echo '<br/><p><font color="green"><h3 align="center">Item removido com sucesso!</h3></font></p>';
					header("Refresh:3; url=../index.php");
				}
            }
			
		}//deletaProduto
		function editaProduto($nome, $img, $categoria, $descricao, $idProduto) {
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
			if(!empty($nome) && !empty($idProduto) ){
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
						if( !@move_uploaded_file( $arquivo_tmp, $destino  ))
							echo "<br/><br/>Erro ao salvar a imagem. Aparentemente você não tem permissão de escrita.<br />";
					}
					else
						echo "<br/><br/>Você poderá enviar apenas imagens \"*.jpg;*.jpeg;*.gif;*.png\"<br />";

					$enviaArquivo = "img = '$novoNome',";
				}
				else
				if(($novoNome) == null || ($novoNome) == ''){ $enviaArquivo = ''; }
					$alterar_produto=mysqli_query($link," Update Produto set nome = '$nome', $enviaArquivo categoria = '$categoria', descricao = '$descricao' where idproduto = $idProduto");
					if(!$alterar_produto){
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
		}//editaProduto
}//Class

?>