<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalivraria";

$connection = mysqli_connect($servername, $username, $password, $db_name);

if (!$connection) :
  echo "Ocorreu um erro na conexão: " . mysqli_connect_error();
endif;
