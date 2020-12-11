<?php

include 'connection.php';

$sql = "CREATE DATABASE sistemalivraria";

if (!mysqli_query($connection, $sql)) :
  echo "Ocorreu um erro na criação do Database" . mysqli_error($connection);
endif;
