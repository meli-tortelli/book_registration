<?php
include_once 'includes/header.php';
?>

<h1 class="display-4 text-center">Banco de cadastro</h1>
<div class="container">
  <form class="col-md-7 offset-md-4" action="php_action/submit_data.php" method="post">
    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control w-50 p-3" name="titulo" id="titulo" required>
    </div>
    <div class="form-group">
      <label for="autor">Nome do autor</label>
      <input type="text" class="form-control w-50 p-3" name="autor" id="autor" required>
    </div>
    <div class="form-group">
      <label for="editora">Editora</label>
      <input type="text" class="form-control w-50 p-3" name="editora" id="editora" required>
    </div>
    <button type="submit" class="btn-lg btn-primary" name="btn_cadastrar">Cadastrar</button>
  </form>
</div>

<?php
include_once 'includes/footer.php';
