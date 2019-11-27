<?php
$connection = @new mysqli('localhost', 'root', 'gamer');
if ($connection->connect_error) {
  die('Connect Error: ' . $connection->connect_error);
} else {
  echo 'Successful connection to MySQL';
}
