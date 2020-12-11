<?php

include 'connection.php';

$sql = "CREATE TABLE livros (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(30) NOT NULL,
  autor VARCHAR(30) NOT NULL,
  editora VARCHAR(20) NOT NULL
)";

if (!mysqli_query($connection, $sql)) :
  echo "Ocorreu um erro na criação da tabela" . mysqli_error($connection);
endif;

mysqli_close($connection);
