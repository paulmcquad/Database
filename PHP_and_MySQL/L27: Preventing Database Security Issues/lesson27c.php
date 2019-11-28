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
  $id = '4 OR 1=1';
  
  // Set up the query 
  $query = 'DELETE FROM `authors` WHERE id='.  $id;
  var_dump($query); echo '<br />';
  // Run the query and display appropriate message
  if (!$result = $connection->query($query)) {
    echo "No rows deleted<br />";
  } else {
    echo $connection->affected_rows . " row(s) successfully deleted<br />";
  }
}