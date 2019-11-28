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
  
  $first_name = "Gilly";
  $last_name = "O'Donal";
  $id = 4;
  
  // Set up the prepared statement
  $query = "UPDATE `authors` "
    . " SET `first_name`= ?, `last_name` = ? "
    . " WHERE `id` = ?"; 
  // Prepare the statement  
  $statement = $connection->prepare($query);
  // Bind the parameters
  $statement->bind_param('ssi',$first_name, $last_name,$id);
  // Run the query 
  if (!$result = $statement->execute()) {
    echo "No rows updated<br />";
  } else {
    echo "First row successfully updated<br />";
  }
  
  // Assign new values to the bound variables
  $first_name = "Meg";
  $last_name = "Mitchell";
  $id = 3;
  
  // Rerun the statement
  if (!$result = $statement->execute()) {
    echo "No rows updated<br />";
  } else {
    echo "Second row successfully updated<br />";
  }
  // Close the statement
  $statement->close();

}