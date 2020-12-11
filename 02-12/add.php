<?php
include 'php_action/connection.php';
include_once 'includes/header.php';
?>

<div class="container bg-light">
  <h1 class="display-5 text-center mt-3 mb-4">Lista das obras cadastradas</h1>
  <table class="table table-hover col-md-8 offset-md-2">
    <thead class="thead-dark">
      <tr>
        <th scope="col text-center">Título</th>
        <th scope="col text-center">Autor</th>
        <th scope="col text-center">Editora</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM livros";
      $resultado = mysqli_query($connection, $sql);

      while ($dados = mysqli_fetch_array($resultado)) :
      ?>
        <tr>
          <td><?php echo $dados['titulo']; ?></td>
          <td><?php echo $dados['autor']; ?></td>
          <td><?php echo $dados['editora']; ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <a href="index.php" class="text-primary p-3">Cadastrar Novo</button>
</div>

<?php
include_once 'includes/footer.php';
?>