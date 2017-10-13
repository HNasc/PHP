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
        
		function deletaProduto($idProduto) {
            if($idProduto <= 0){
                echo 'Produto não existe!'
            }
            else{
                $remover_produto=mysql_query(" Update Produto set Situacao = 'I' where IdProduto = $idProduto");
                
                if(!$remover_produto){
                    die("Erro ao executar a query: ".mysql_error());
                }
				else
				{
					echo '<br/><p><font color="green"><h3 align="center">Item removido com sucesso!</h3></font></p>';
				}
            }
			
		}//deletaProduto
}//Class

?>