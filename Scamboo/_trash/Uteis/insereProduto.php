<?php
    if(isset($_POST['nome']) &&
        isset($_POST['categoria']) &&
        isset($_POST['descricao'])){

            $con = new PDO("mysql:host=localhost;dbname=scamboo", "root", "");
            $sql = $con->prepare('
                INSERT INTO Produtos
                (nome,categoria,descricao) VALUES (?,?,?)');
            $sql->bindParam(1, $_POST['nome']);
            $sql->bindParam(2, $_POST['categoria']);
            $sql->bindParam(3, $_POST['descricao']);
            $sql->execute();
            echo('<br/><p><font color="green"><h3 align="center">Cadastro salvo com sucesso!</h3></font></p>');
            echo('<br/><p><a href="../cadastroProduto.php">VOLTAR</a></p>');
        }
        else{echo('Deu erro');};
?>