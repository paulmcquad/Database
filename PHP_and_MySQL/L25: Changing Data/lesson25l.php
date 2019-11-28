<?php
define("MYSQLUSER", "root");
define("MYSQLPASS", "gamer");
define("HOSTNAME", "localhost");
define("MYSQLDB", "test");

// Make connection to database
if (!$connection = new PDO('mysql:host='.HOSTNAME.';dbname=' . MYSQLDB, MYSQLUSER, MYSQLPASS)) {
  die('Connect Error');
} else {
  echo 'Successful connection to MySQL <br />';
  
  $first_name = "Paddy";
  $last_name = "O'Brian";
  $id = 4;
  
  // Set up the prepared statement
  $query = "UPDATE `authors` "
    . " SET `first_name`= :first_name, `last_name` = :last_name "
    . " WHERE `id` = :id"; 
  // Prepare the statement  
  $statement = $connection->prepare($query);
  // Bind the parameters
  $statement->bindParam(':first_name', $first_name, PDO::PARAM_STR);
  $statement->bindParam(':last_name', $last_name, PDO::PARAM_STR);
  $statement->bindParam(':id', $id, PDO::PARAM_INT);
  // Run the query 
  if (!$result = $statement->execute()) {
    echo "No rows updated<br />";
  } else {
    echo "First row successfully updated<br />";
  }
  // Change the value in the variable and rerun
  $id = 3;
  $first_name = 'Nancy';
  $last_name = 'Misson';
  
  // Rerun the statement
  if (!$result = $statement->execute()) {
    echo "No rows updated<br />";
  } else {
    echo "Second row successfully updated<br />";
  }

}