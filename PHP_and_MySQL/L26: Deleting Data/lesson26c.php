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

  // assign an id value for the test
  $id = 6;
  
  // Set up the query 
  $query = 'DELETE FROM `books` WHERE id="'. (int) $id.'"';
  // Run the query and display appropriate message
  if (!$result = $connection->query($query)) {
    echo "No rows deleted<br />";
  } else {
    echo $connection->affected_rows . " row(s) successfully deleted<br />";
  }
}