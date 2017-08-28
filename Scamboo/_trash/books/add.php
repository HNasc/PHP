<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Livro</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Titulo</label>
      <input type="text" class="form-control" name="book['titulo']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Editora</label>
      <input type="text" class="form-control" name="book['editora']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Ano de Lancamento</label>
      <input type="text" class="form-control" name="book['anoLancamento']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Edicao</label>
      <input type="text" class="form-control" name="book['edicao']">
    </div>

   
    
    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="book['created']" disabled>
    </div>
  </div>
  
    
  
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>