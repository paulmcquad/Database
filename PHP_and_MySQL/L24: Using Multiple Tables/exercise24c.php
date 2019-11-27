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
 
  // Set up the query 
  $query = "SELECT title, first_name, last_name "
    . " FROM books JOIN authors AS a ON author = a.id "
    . " ORDER BY `title` ASC "
    ;
   
  // Run the query
   $result_obj = '';
   $result_obj = $connection->query($query);
   
  // Read the results
  // loop through the results, row by row
  // reading each row into an associative array 
  while($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
    // collect the array
    $items[] = $result;
  }
  // print array when done
  foreach ($items as $item) {
    echo $item['title']. ' by ' . $item['first_name']. ' ' . $item['last_name'];
    echo '<br />';
  }
}