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
}//Class

?>