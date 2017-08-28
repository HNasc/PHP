<?php
session_start();
if(!$_SESSION['IdUsuario']) {
  exit("erro sem permissão para essa parte");

}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scamboo - Cadastro de produtos</title>
    </head>
    <body>
        <h1 align="center">Scamboo - Cadastro de produtos</h1>

        <form method="POST" action="Uteis/insereProduto.php">
            <table align="center">
                    <td><label>Nome: </label></td>
                    <td><input type="text" name="nome" maxlength="60"/></td>
                </tr>
                <tr>
                    <td><label>Categoria: </label></td>
                    <td><input type="text" name="categoria" maxlength="60"/></td>
                </tr>
                <tr>
                    <td><label>Descrição: </label></td>
                    <td><input type="text" name="descricao" maxlength="200"/></td>
                </tr>
                <tr>
                <br/>
                    <td><br/><a href="index.php">VOLTAR</a></td>
                    <td align="right"><br/><input type="submit" value="Salvar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>