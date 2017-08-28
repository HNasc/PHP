<?php
    if(isset($_POST['nome']) &&
        isset($_POST['tipo_pessoa']) &&
        isset($_POST['sexo']) &&
        isset($_POST['nascimento']) &&
        isset($_POST['cpf_cnpj']) &&
        isset($_POST['email']) &&
        isset($_POST['telefone']) &&
        isset($_POST['endereco']) &&
        isset($_POST['numero']) &&
        isset($_POST['complemento']) &&
        isset($_POST['cidade']) &&
        isset($_POST['bairro']) &&
        isset($_POST['estado']) &&
        isset($_POST['cep']) &&
        isset($_POST['usuario']) &&
        isset($_POST['senha'])){
            $con = new PDO("mysql:host=localhost;dbname=scamboo", "root", "");
            $sql = $con->prepare('
                INSERT INTO usuario (Nome, TipoPessoa, Sexo, Nascimento, CPF_CNPJ, Email, Telefone, Endereco, Numero, Complemento, Cidade, Bairro, UF, CEP, Usuario, Senha)
                Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,SHA2(?,256))');
            $sql->bindParam(1, $_POST['nome']);
            $sql->bindParam(2, $_POST['tipo_pessoa']);
            $sql->bindParam(3, $_POST['sexo']);
            $sql->bindParam(3, $_POST['nascimento']);
            $sql->bindParam(4, $_POST['cpf_cnpj']);
            $sql->bindParam(5, $_POST['email']);
            $sql->bindParam(6, $_POST['telefone']);
            $sql->bindParam(7, $_POST['endereco']);
            $sql->bindParam(8, $_POST['numero']);
            $sql->bindParam(9, $_POST['complemento']);
            $sql->bindParam(10, $_POST['cidade']);
            $sql->bindParam(11, $_POST['bairro']);
            $sql->bindParam(12, $_POST['estado']);
            $sql->bindParam(13, $_POST['cep']);
            $sql->bindParam(14, $_POST['usuario']);
            $sql->bindParam(15, $_POST['senha']);
            $sql->execute();
            echo('<br/><p><font color="green"><h3 align="center">Cadastro salvo com sucesso!</h3></font></p>');
        }else {echo('deu erro!');}
?>