<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'name';
 
  $mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);
	
  if ($mysqli->connect_error) {
  die("Falha ao conectar ao banco de dados: ". $mysqli->error);
  }


?>