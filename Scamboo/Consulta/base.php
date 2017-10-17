<?php 
class conBase{
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
												/* CONSULTA PRODUTOS */
		function consultaProdutos() {
			//Variaveis
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
			if(isset($_SESSION['IdUsuario']) > 0)
			$idUsuario = $_SESSION['IdUsuario'];

			$busca="";
			
			//Valida se possui usuário
			// if($idUsuario > 0){
			// 	$InsereUsuario = "and produto.IdUsuario = ".$idUsuario;
			// }
			echo "  <form  method='post'>
						<div class='input-group'>
							<input type='text' name='busca' class='form-control' placeholder='Buscar...'>
						<div class='input-group-btn'>
							<button class='btn btn-default' type='submit'>
								<i class='glyphicon glyphicon-search'></i>
							</button>
						</div>
						</div>
					</form> </div><br />";
            if (isset($_POST['busca']))
            $busca=$_POST['busca'];
			$query= mysqli_query($link,"SELECT produto.IdProduto,
										produto.IdUsuario,
										produto.Nome AS NomeProduto,
										produto.Descricao,
										produto.Categoria,
										produto.img,
										produto.Situacao,
										DATE_FORMAT(produto.Publicacao, '%d/%m/%Y %H:%i') AS Publicacao,
										usuario.Nome AS NomeUsuario,
										usuario.Email,
										usuario.Cidade,
										usuario.Bairro
								FROM produto
								INNER JOIN usuario ON usuario.IdUsuario = produto.IdUsuario
								WHERE produto.Nome LIKE '%$busca%' and produto.Situacao = 'A' ORDER BY produto.Nome");
			
            while($result=mysqli_fetch_assoc($query)){
				if(isset($result['NomeProduto']) && $result['Categoria']){
				include 'Consulta/listaProdutos.php';
                
 			}
			}
		}//ConsultaProdutos
		function consultaProdutosUsuario() {
			//Variaveis
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
			if(isset($_SESSION['IdUsuario']) > 0)
			$idUsuario = $_SESSION['IdUsuario'];

			$busca="";
			echo "  <form  method='post'>
						<div class='input-group'>
							<input type='text' name='busca' class='form-control' placeholder='Buscar...'>
						<div class='input-group-btn'>
							<button class='btn btn-default' type='submit'>
								<i class='glyphicon glyphicon-search'></i>
							</button>
						</div>
						</div>
					</form> </div><br />";
            if (isset($_POST['busca']))
            $busca=$_POST['busca'];
<<<<<<< HEAD
			$query= mysqli_query($link,"SELECT produto.IdProduto,
=======
			$query= mysqli_query("SELECT produto.IdProduto,
>>>>>>> fc8138f44b3225dbb6de79178b9e57e305bb8b43
										produto.IdUsuario,
										produto.Nome AS NomeProduto,
										produto.Descricao,
										produto.Categoria,
										produto.img,
										produto.Situacao,
										DATE_FORMAT(produto.Publicacao, '%d/%m/%Y %H:%i') AS Publicacao,
										usuario.Nome AS NomeUsuario,
										usuario.Email,
										usuario.Cidade,
										usuario.Bairro
								FROM produto
								INNER JOIN usuario ON usuario.IdUsuario = produto.IdUsuario
								WHERE produto.Nome LIKE '%$busca%' and produto.Situacao = 'A' and produto.IdUsuario = $idUsuario ORDER BY produto.Nome");
			
            while($result=mysqli_fetch_assoc($query)){
				if(isset($result['NomeProduto']) && $result['Categoria']){
				include 'Consulta/listaProdutos.php';
                
 			}
			}
		}//ConsultaProdutos
		function deletaProduto() {
			
		}
}//Class
		
/*

*/
?>