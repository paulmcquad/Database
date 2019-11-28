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
  
  $id = 4;
  
  // Set up the prepared statement
  $query = "SELECT `first_name`, `last_name` "
    . " FROM `authors`"
    . " WHERE `id` = ?"; 
  // Prepare the statement  
  $statement = $connection->prepare($query);
  // Bind the parameters
  $statement->bind_param('i',$id);
  // Execute the statement
  $statement->execute();
  // Bind the results
  $statement->bind_result($first,$last);
  // Run the query 
  $statement->fetch();
  echo $first . ' ' . $last . '<br />';
  // Close the statement
  $statement->close();
}