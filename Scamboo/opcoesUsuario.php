<?php
    $endereco = $_SERVER['REQUEST_URI'];
    if($endereco == "/php/scamboo/paginaUsuario.php"){
        echo '<li class="active">';
    }
    else{
        echo '<li>';
    }
?>
<a href="paginaUsuario.php">Meus Produtos</a></li>
<li><a href="#" data-toggle="modal" data-target="#cadastroProdutosModal">Cadastrar Produtos</a></li>
<?php
    if($endereco == "/php/scamboo/solicitacoesForm.php"){
        echo '<li class="active">';
    }
    else{
        echo '<li>';
    }
?>
<a href="solicitacoesForm.php">Solicitações de Troca</a></li>