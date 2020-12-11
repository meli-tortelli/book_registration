<?php
require 'connection.php';

if (isset($_POST['btn_cadastrar'])) :
  $titulo = mysqli_escape_string($connection, $_POST['titulo']);
  $autor = mysqli_escape_string($connection, $_POST['autor']);
  $editora = mysqli_escape_string($connection, $_POST['editora']);

  $sql = "INSERT INTO livros(titulo, autor, editora)
      VALUES ('$titulo', '$autor', '$editora')";

  if (mysqli_query($connection, $sql)) :
    header('Location: ../add.php');
  else :
    header('Location: index.php');
  endif;
endif;
