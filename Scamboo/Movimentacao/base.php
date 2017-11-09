<?php
class movBase{
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
        
    function solicitaTroca($idProdutoPara,$idProdutoDe,$idUsuario){
        //Variaveis
        $link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);

        if(isset($_SESSION['IdUsuario']) > 0){$idUsuario = $_SESSION['IdUsuario'];}
        $pesquisar_pendencia=mysqli_query($link,"SELECT movimentacao.IdProdutoDe 
                                                    FROM movimentacao 
                                                    inner join produto on produto.idproduto = movimentacao.idprodutode
                                                    where movimentacao.IdProdutoPara = $idProdutoPara and produto.idusuario = $idUsuario");

        //Validações
        while($result = mysqli_fetch_assoc($pesquisar_pendencia))
        {
            if($result['IdProdutoDe'] > 0)
            {
                $conteproduto++;
            }

        }

        if(@$conteproduto != 0)
        {
            echo '<br/><p><font color="red"><h3 align="center">Já existe uma solicitação de troca pendente para esse produto!</h3></font></p>';
            header("Refresh:3; url=../index.php");
        }
        else
        {
            //Ação
            $inserir_movimentacao=mysqli_query($link," INSERT INTO movimentacao
            (IdProdutoDe, IdProdutoPara, Situacao) values ($idProdutoDe, $idProdutoPara, 'P')");
            if(!$inserir_movimentacao){
                die("Erro ao executar a query: ".mysqli_error($link));
                header("Refresh:10; url=../index.php");
            }
            else
            {
                echo '<br/><p><font color="green"><h3 align="center">Solicitação realizada com sucesso!</h3></font></p>';
                header("Refresh:3; url=../index.php");
            }
        }

    }//solicitaTroca
}//class

?>