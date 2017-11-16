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
            header("Refresh:2; url=../index.php");
        }
        else
        {
            //Ação
            $inserir_movimentacao=mysqli_query($link," INSERT INTO movimentacao
            (IdProdutoDe, IdProdutoPara, Situacao) values ($idProdutoDe, $idProdutoPara, 'P')");
            if(!$inserir_movimentacao){
                die("Erro ao executar a query: ".mysqli_error($link));
                header("Refresh:5; url=../index.php");
            }
            else
            {
                echo '<br/><p><font color="green"><h3 align="center">Solicitação realizada com sucesso!</h3></font></p>';
                header("Refresh:2; url=../index.php");
            }
        }

    }//solicitaTroca
    function recusaTroca($idMovimentacao){
        $link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);

        $recusar_movimentacao=mysqli_query($link," UPDATE movimentacao SET situacao = 'R' WHERE idmovimentacao = $idMovimentacao");
        if(!$recusar_movimentacao){
            die("Erro ao executar a query: ".mysqli_error($link));
            header("Refresh:5; url=../solicitacoesForm.php");
        }
        else
        {
            echo '<br/><p><font color="green"><h3 align="center">Troca recusada!</h3></font></p>';
            header("Refresh:2; url=../solicitacoesForm.php");
        }
    }//recusaTroca
    function aceitaTroca($idMovimentacao){
        $link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);
        
        $aceitar_movimentacao=mysqli_query($link," UPDATE movimentacao SET situacao = 'F' WHERE idmovimentacao = $idMovimentacao");
        
        $atualizar_produtos=mysqli_query($link," UPDATE produto SET situacao = 'F' 
        WHERE idproduto IN (SELECT idprodutode FROM movimentacao  WHERE idmovimentacao = $idMovimentacao) 
        OR idproduto IN (SELECT idprodutopara FROM movimentacao  WHERE idmovimentacao = $idMovimentacao)");
        
        if(!$aceitar_movimentacao or !$atualizar_produtos){
            die("Erro ao executar a query: ".mysqli_error($link));
            header("Refresh:5; url=../solicitacoesForm.php");
        }
        else
        {
            echo '<br/><p><font color="green"><h3 align="center">Troca aceita e finalizada com sucesso!</h3></font></p>';
            header("Refresh:2; url=../solicitacoesForm.php");
        }
    }//aceitaTroca
    function cancelaTroca($idMovimentacao){
        $link=mysqli_connect($this ->server, $this ->username, $this ->pw, $this ->dbname);

        $cancelar_movimentacao=mysqli_query($link," DELETE FROM movimentacao WHERE idmovimentacao = $idMovimentacao");
        if(!$cancelar_movimentacao){
            die("Erro ao executar a query: ".mysqli_error($link));
            header("Refresh:5; url=../solicitacoesForm.php");
        }
        else
        {
            echo '<br/><p><font color="green"><h3 align="center">Troca cancelada com sucesso!</h3></font></p>';
            header("Refresh:2; url=../solicitacoesForm.php");
        }
    }//cancelaTroca
}//class

?>