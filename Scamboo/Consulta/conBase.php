<?php 
class conBase{
	public $dbname='scamboo';
	public $server='localhost';
	public $username='root';
	public $pw='';
	function conectaDB() {
	$connect=mysql_connect($this ->server, $this ->username, $this ->pw);
		mysql_set_charset("utf8", $connect);
		$selectDB=mysql_select_db($this ->dbname, $connect);
		if (!$selectDB) die ('Erroooooo!!!'.mysql_error());
		//echo 'Selecionado!';
		}
												/* CONSULTA CLIENTES */
		// function consultaCliente () {
		// echo "<h3>Consultar Clientes</h3><br />";
		// echo "<div id='srcCon'>
		// <form method='post'>
		// 	<input name='busca' type='text' placeholder='Buscar Cliente' />
		// 	<input type='submit' value='Buscar' />
		// </form></div><br />
		// ";
		// $busca=$_POST['busca'];
		// $query= mysql_query ("SELECT * FROM tbclientes WHERE nome LIKE '%$busca%' ORDER BY codigo");
		// 						/* LISTA DE CLIENTES */
		// while($result=mysql_fetch_assoc($query)){
		// echo "<div id='boxcon'><div id='imgcon'><img src='Consulta/imgclientes/".$result['img']."' width='85' align='left' /><br /></div>";
		// echo '<p>Código: '.$result['codigo'].'<br />';
		// echo 'CPF: '.$result['cpf'].'<br />';
		// echo 'Nome: '.$result['nome'].'<br />';
		// $arrayData = explode("-",$result['dtnasc']);
		// 	echo 'Data de Nascimento: '.$arrayData[2].'/'.$arrayData[1].'/'.$arrayData[0].'<br />';
		// echo 'Endereço: '.$result['endereco'].'<br />';
		// echo 'Cidade: '.$result['cidade'].'<br />';
		// echo 'Estado: '.$result['estado'].'<br />';
		// echo 'CEP: '.$result['cep'].'<br />';
		// echo 'Fone: '.$result['fone'].'<br />';
		// echo 'E-mail: '.$result['email'].'<br />';
		// echo 'Info: '.$result['info'].'<br />';
		// echo 'Senha: '.$result['senha'].'<br />';
		// echo "<br /><a href='#'>Editar</a>";
		// echo "<a href='#'>Excluir</a><br /></p></div>";
		// }
		// }
/*===============================================================================================================================================*/
												/*CONSULTAR FUNCIONARIOS*/
		// function consultaFuncionario () {
		// echo "<h3>Consultar Funcionários</h3><br />";
		// echo "<div id='srcCon'>
		// <form method='post'>
		// 	<input name='busca' type='text' placeholder='Buscar funcionários' />
		// 	<input type='submit' value='Buscar' />
		// </form></div><br />
		// ";
		// $busca=$_POST['busca'];
		// $query= mysql_query ("SELECT * FROM tbfuncionarios WHERE nome LIKE '%$busca%' ORDER BY codigo");
		// 						/* LISTA DE FUNCIONARIOS*/
		// while($result=mysql_fetch_assoc($query)){
		// echo "<div id='boxcon'>";
		// echo '<p>Código: '.$result['codigo'].'<br />';
		// echo 'CPF: '.$result['cpf'].'<br />';
		// echo 'Nome: '.$result['nome'].'<br />';
		// $arrayDtnasc = explode("-",$result['dtnasc']);
		// 	echo 'Data de Nascimento: '.$arrayDtnasc[2].'/'.$arrayDtnasc[1].'/'.$arrayDtnasc[0].'<br />';
		// echo 'Endereço: '.$result['endereco'].'<br />';
		// echo 'Cidade: '.$result['cidade'].'<br />';
		// echo 'Estado: '.$result['estado'].'<br />';
		// echo 'CEP: '.$result['cep'].'<br />';
		// echo 'Fone: '.$result['fone'].'<br />';
		// /*echo 'E-mail: '.$result['email'].'<br />';*/
		// echo 'Função: '.$result['funcao'].'<br />';
		// $arrayDtadmis = explode("-",$result['dtadmissao']);
		// 	echo 'Data de Admissão: '.$arrayDtadmis[2].'/'.$arrayDtadmis[1].'/'.$arrayDtadmis[0].'<br />';
		// echo 'Vendas: '.$result['qntvendas'].'<br />';
		// echo 'Salário: '.$result['salario'].'<br />';
		// echo 'Senha: '.$result['senha'].'<br />';
		// echo "<br /><a href='#'>Editar</a>";
		// echo "<a href='#'>Excluir</a><br /></p></div>";
		// }
		// }
/*===============================================================================================================================================*/
												/* CONSULTA FORNECEDORES */
		// function consultaFornecedor () {
		// echo "<h3>Consultar Fornecedores</h3><br />";
		// echo "<div id='srcCon'>
		// <form method='post'>
		// 	<input name='busca' type='text' placeholder='Buscar Fornecedores' />
		// 	<input type='submit' value='Buscar' />
		// </form></div><br />
		// ";
		// $busca=$_POST['busca'];
		// $query= mysql_query ("SELECT * FROM tbfornecedores WHERE nome LIKE '%$busca%' ORDER BY codigo");
		// 						/* LISTA DE FORNECEDORES */
		// while($result=mysql_fetch_assoc($query)){
		// echo "<div id='boxcon'>";
		// echo '<p>Código: '.$result['codigo'].'<br />';
		// echo 'CNPJ: '.$result['cnpj'].'<br />';
		// echo 'Nome: '.$result['nome'].'<br />';
		// $arrayDtparc = explode("-",$result['dtparceria']);
		// 	echo 'Data da Parceria: '.$arrayDtparc[2].'/'.$arrayDtparc[1].'/'.$arrayDtparc[0].'<br />';
		// echo 'Endereço: '.$result['endereco'].'<br />';
		// echo 'Cidade: '.$result['cidade'].'<br />';
		// echo 'Estado: '.$result['estado'].'<br />';
		// echo 'CEP: '.$result['cep'].'<br />';
		// echo 'Fone: '.$result['fone'].'<br />';
		// echo 'E-mail: '.$result['email'].'<br />';
		// echo 'Info: '.$result['info'].'<br />';	
		// echo 'Senha: '.$result['senha'].'<br />';
		// echo "<br /><a href='#'>Editar</a>";
		// echo "<a href='#'>Excluir</a><br /></p></div>";
		// }
		// }
/*===============================================================================================================================================*/
												/* CONSULTA PRODUTOS */
		function consultaProduto() {
			//Variaveis
			if(isset($_SESSION['IdUsuario']) > 0)
			$idUsuario = $_SESSION['IdUsuario'];
			else
			$idUsuario = null;
			$busca="";
			$InsereUsuario = "";
			
			//Valida se possui usuário
			if($idUsuario > 0){
				$InsereUsuario = "and IdUsuario = ".$idUsuario;
			}
			
            echo "<div id='srcCon'>
            <form method='post'>
                <input name='busca' type='text' placeholder='Buscar Produtos' />
                <input type='submit' value='Buscar' />
            </form></div><br />
            ";
            if (isset($_POST['busca']))
            $busca=$_POST['busca'];
			$query= mysql_query ("SELECT * FROM Produto WHERE Nome LIKE '%$busca%' and Situacao = 'A' $InsereUsuario ORDER BY nome");
			
            	                 /* LISTA DE PRODUTOS */
            
            while($result=mysql_fetch_assoc($query)){
                if(isset($result['Nome']) && $result['Categoria'])
                echo "<div class='col-sm-4'>";
                echo "<img src='Consulta/imgProduto/".$result['img']."' class='img-responsive' style='width:100%' alt=' ".$result['Nome']." '>";
                echo "<p>".$result['Nome']."<br />";
                echo $result['Categoria']."</p>";
                echo "</div>";
                // echo "<br /><a href='#'>Editar</a>";
                // echo "<a href='#'>Excluir</a><br /></p></div>";
            }
	    }//ConsultaProduto
}//Class
?>