<?php
    if(isset($_POST['email']) &&
        isset($_POST['senha']) &&
        isset($_POST['nome']) &&
        isset($_POST['apelido']) &&
        isset($_POST['tipo_pessoa']) &&
        isset($_POST['cpf_cnpj']) &&
        isset($_POST['sexo']) &&
        isset($_POST['tipo_contato']) &&
        isset($_POST['telefone']) &&
        isset($_POST['cep']) &&
        isset($_POST['endereco']) &&
        isset($_POST['numero']) &&
        isset($_POST['complemento']) &&
        isset($_POST['estado']) &&
        isset($_POST['cidade'])){

            $con = new PDO("mysql:host=localhost;dbname=scamboo", "root", "");
            $sql = $con->prepare('
                INSERT INTO Usuarios
                (email,senha,nome,apelido,tipo_pessoa,cpf_cnpj,sexo,tipo_contato,telefone,cep,endereco,numero,complemento,estado,cidade) VALUES (?,SHA2(?,256),?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $sql->bindParam(1, $_POST['email']);
            $sql->bindParam(2, $_POST['senha']);
            $sql->bindParam(3, $_POST['nome']);
            $sql->bindParam(4, $_POST['apelido']);
            $sql->bindParam(5, $_POST['tipo_pessoa']);
            $sql->bindParam(6, $_POST['cpf_cnpj']);
            $sql->bindParam(7, $_POST['sexo']);
            $sql->bindParam(8, $_POST['tipo_contato']);
            $sql->bindParam(9, $_POST['telefone']);
            $sql->bindParam(10, $_POST['cep']);
            $sql->bindParam(11, $_POST['endereco']);
            $sql->bindParam(12, $_POST['numero']);
            $sql->bindParam(13, $_POST['complemento']);
            $sql->bindParam(14, $_POST['estado']);
            $sql->bindParam(15, $_POST['cidade']);
            $sql->execute();
            echo('<br/><p><font color="green"><h3 align="center">Cadastro salvo com sucesso!</h3></font></p>');
        }
?>