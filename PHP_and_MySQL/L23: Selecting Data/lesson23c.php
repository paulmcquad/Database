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
 
  // Set up the query 
  $query = "SELECT * FROM `table1` " 
   . " WHERE `code` = 15"
   . " ORDER BY `description` ASC "
   ;
  
  // Run the query
   $result_obj = '';
   $result_obj = $connection->query($query);
   
  // Read the results
  // loop through the results, row by row
  // reading each row into an associative array 
  while($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
    // display the array
    print_r($result);
    echo '<br />';
  }
}