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
		function consultaProdutosUsuarioLista() {
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
								WHERE produto.Nome LIKE '%$busca%' and produto.Situacao = 'A' and produto.IdUsuario = $idUsuario ORDER BY produto.Nome");
			
            while($result=mysqli_fetch_assoc($query)){
				if(isset($result['NomeProduto']) && $result['Categoria']){
				include 'Consulta/listaProdutos.php';
                
 			}
			}
		}//ConsultaProdutosUsuarioLista
		function consultaProdutosUsuarioSelect() {
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
			if(isset($_SESSION['IdUsuario']) > 0)
			$idUsuario = $_SESSION['IdUsuario'];

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
								WHERE produto.Situacao = 'A' and produto.IdUsuario = $idUsuario ORDER BY produto.Nome");
			
            while($result=mysqli_fetch_assoc($query)){
				if(isset($result['NomeProduto']) && $result['Categoria']){
				include 'Consulta/selectProdutos.php';
                
 			}
			}
		}//consultaProdutosUsuarioSelect
		function consultaSolicitacoes(){
			$link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
			if(isset($_SESSION['IdUsuario']) > 0)
			$idUsuario = $_SESSION['IdUsuario'];

			$resultado = mysqli_query($link, "SELECT movimentacao.IdMovimentacao
												FROM movimentacao
												INNER JOIN produto ProdDe on ProdDe.IdProduto = movimentacao.IdProdutoDe
												INNER JOIN produto ProdPara on ProdPara.IdProduto = movimentacao.IdProdutoPara
												INNER JOIN usuario UsuDe on UsuDe.IdUsuario = ProdDe.IdUsuario
												INNER JOIN usuario UsuPara on UsuPara.IdUsuario = ProdPara.IdUsuario
												WHERE UsuDe.IdUsuario = $idUsuario or UsuPara.IdUsuario = $idUsuario");

			$rowcount = @mysqli_num_rows($resultado);

			if($rowcount > 0)
			{
				$solicita = mysqli_query($link,"SELECT	IdMovimentacao,
							ProdDe.IdUsuario IdUsuarioDe, 
							UsuDe.Nome UsuarioDe, 
							ProdDe.Nome ProdutoDe,
							ProdDe.img imgDe,
							ProdDe.Categoria CategoriaDe,
							ProdPara.IdUsuario IdUsuarioPara,
							UsuPara.Nome UsuarioPara,
							ProdPara.Nome ProdutoPara, 
							ProdPara.img imgPara,
							ProdPara.Categoria CategoriaPara,
							case(movimentacao.Situacao)
							when 'P' then 'Pendente'
							when 'F' then 'Finalizado'
							when 'A' then 'Aceito'
							when 'R' then 'Recusado'
							end as Situacao
					FROM movimentacao
					INNER JOIN produto ProdDe on ProdDe.IdProduto = movimentacao.IdProdutoDe
					INNER JOIN produto ProdPara on ProdPara.IdProduto = movimentacao.IdProdutoPara
					INNER JOIN usuario UsuDe on UsuDe.IdUsuario = ProdDe.IdUsuario
					INNER JOIN usuario UsuPara on UsuPara.IdUsuario = ProdPara.IdUsuario
					WHERE UsuDe.IdUsuario = $idUsuario");
			if(mysqli_num_rows($solicita) > 0){
				echo '<h3 align="center">Minhas Solicitações de Troca</h3><br>';
			}
			while($result=mysqli_fetch_assoc($solicita)){
				if(isset($result['ProdutoPara']) && $result['ProdutoDe']){
				include 'Consulta/listaSolicitacoes.php';
                
				}
			}
			 $solicitado = mysqli_query($link,"SELECT IdMovimentacao,
			 			ProdDe.IdUsuario IdUsuarioDe, 
						UsuDe.Nome UsuarioDe, 
						ProdDe.Nome ProdutoDe,
						ProdDe.img imgDe,
						ProdDe.Categoria CategoriaDe,
						ProdPara.IdUsuario IdUsuarioPara,
						UsuPara.Nome UsuarioPara,
						ProdPara.Nome ProdutoPara, 
						ProdPara.img imgPara,
						ProdPara.Categoria CategoriaPara,
						case(movimentacao.Situacao)
						when 'P' then 'Pendente'
						when 'F' then 'Finalizado'
						when 'A' then 'Aceito'
						when 'R' then 'Recusado'
						end as Situacao
				FROM movimentacao
				INNER JOIN produto ProdDe on ProdDe.IdProduto = movimentacao.IdProdutoDe
				INNER JOIN produto ProdPara on ProdPara.IdProduto = movimentacao.IdProdutoPara
				INNER JOIN usuario UsuDe on UsuDe.IdUsuario = ProdDe.IdUsuario
				INNER JOIN usuario UsuPara on UsuPara.IdUsuario = ProdPara.IdUsuario
				WHERE UsuPara.IdUsuario = $idUsuario");
			if(mysqli_num_rows($solicitado) > 0){
				echo '<h3 align="center">Solicitações de Troca</h3><br>';
			}
			while($result=mysqli_fetch_assoc($solicitado)){
			if(isset($result['ProdutoPara']) && $result['ProdutoDe']){
			include 'Consulta/listaSolicitados.php';

				}
			}
			}
			else
			{
				echo '<br/><p><font color="red"><h2 align="center">Você não possui solicitações</h2></font></p>';
			}
	}//consultaSolicitacoes
}//Class
		
?>