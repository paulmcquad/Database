<?php
define("MYSQLUSER", "root");
define("MYSQLPASS", "gamer");
define("HOSTNAME", "localhost");
define("MYSQLDB", "test");

// Make connection to database
$connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
if ($connection->connect_error) {
  die('Connect Error: ' . $connection->connect_error);
} else {
  echo 'Successful connection to MySQL <br />';
  
  $first_name = "Liam";
  $last_name = "O'Reilly";
  $id = 4;
  
  // Prepare the data
  if (get_magic_quotes_gpc()) {
    $first_name = stripslashes($first_name);
    $last_name = stripslashes($last_name);
  }
  $first_name = $connection->real_escape_string($first_name);
  $last_name = $connection->real_escape_string($last_name);
  $id = (int) $id;
  
  // Set up the query 
    $query = "UPDATE `authors` "
    . " SET `first_name`= '$first_name', `last_name` = '$last_name' "
    . " WHERE `id` = '$id'"; 
  
  // Run the query and display appropriate message
  if (!$result = $connection->query($query)) {
    echo "No rows updated<br />";
  } else {
    echo "Row(s) successfully updated<br />";
  }
}