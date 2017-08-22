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
		if (!$selectDB) die ('Erroooooo!!!'.mysql_error());
		//echo 'Selecionado!';
		}
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
														/*CADASTRO PRODUTOS*/
		function cadProdutos($nome, $categoria, $descricao, $arquivo){
			if(!empty($nome) && !empty($categoria) && !empty($descricao) ){
			if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{

	/*echo "Você enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
	echo "Este arquivo é do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
	echo "Temporáriamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
	echo "Seu tamanho é: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";*/

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
		$destino = '../Consulta/imgprod/' . $novoNome; 
		
		// tenta mover o arquivo para o destino
		if( @move_uploaded_file( $arquivo_tmp, $destino  ))
		{
			echo "<br/><br/>Imagem salva com sucesso em : <strong>" . $destino . "</strong><br />";
			echo "<img src=\"" . $destino . "\" />";
		}
		else
			echo "<br/><br/>Erro ao salvar a imagem. Aparentemente você não tem permissão de escrita.<br />";
	}
	else
		echo "<br/><br/>Você poderá enviar apenas imagens \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
}
else
{
	echo "<br/><br/>Você não enviou nenhuma imagem!";
}
				if(($novoNome) == null){ $novoNome = 'default.jpg'; }
				$inserir_produto=mysql_query(" INSERT INTO Produtos
                (nome,categoria,descricao,idusuario,img) values('$nome', '$categoria', '$descricao', 9, '$novoNome')");
				if(!$inserir_produto)die("ERRROOUU ".mysql_error());
				
			}else{
				echo "Preencha todos os campos!";
				}
            }//cadProdutos
		}//class

?>