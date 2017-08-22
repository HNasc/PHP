
<?php
class Clientes{
	public $dbname='dbfastsoft';
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
		function consultaCliente () {
if(isset($_POST['btnFiltro']))
{
	$filtro = $_POST['txtFiltro'];
}
$mysql_query = "SELECT * from tbclientes WHERE nome LIKE '%" .$filtro."%' OR cidade LIKE '%".$filtro."%'";

while($result=mysql_fetch_assoc($mysql_query)){
		echo "<div id='boxcocli'><div id='imgcliente'><img src='imgclientes/".$result['img']."' width='85' align='left' /><br /></div>";
		echo '<p>Código: '.$result['codigo'].'<br />';
		echo 'CPF: '.$result['cpf'].'<br />';
		echo 'Nome: '.$result['nome'].'<br />';
		$arrayData = explode("-",$result['dtnasc']);
			echo 'Data de Nascimento: '.$arrayData[2].'/'.$arrayData[1].'/'.$arrayData[0].'<br />';
		echo 'Endereço: '.$result['endereco'].'<br />';
		echo 'Cidade: '.$result['cidade'].'<br />';
		echo 'Estado: '.$result['estado'].'<br />';
		echo 'CEP: '.$result['cep'].'<br />';
		echo 'Fone: '.$result['fone'].'<br />';
		echo 'E-mail: '.$result['email'].'<br />';
		echo 'Info: '.$result['info'].'<br />';
		echo 'Senha: '.$result['senha'].'<br />';
		echo "<br /><a href='#'>Editar</a>";
		echo "<a href='#'>Excluir</a><br /></p></div>";
?>
<input type="text" class="txtFiltro" name="txtFiltro" autocomplete="off">
<input type="submit" name="btnFiltro" class="btnFiltro" value="BUSCAR"/>';