<?php
    if(!$_SERVER['HTTP_REFERER'] == "paginaUsuario.php")
        echo '<li>';
    else
        echo '<li class="active">';
?>
<a href="#" >Meus Produtos</a></li>
<li><a href="#" data-toggle="modal" data-target="#cadastroProdutosModal">Cadastrar Produtos</a></li>