<?php
if ($connection = new PDO('mysql:host=localhost;dbname=smithside', 'root', 'gamer')) {
  echo 'Successful connection to MySQL';
}
