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
  $query = "SELECT type_name, title, CONCAT(last_name, ', ', first_name) AS full_name "
    . " FROM books AS b "
    . " JOIN authors AS a ON author = a.id "
    . " JOIN types AS t ON b.type_id = t.type_id "
    . " WHERE title LIKE '%Day%' "
    . " ORDER BY type_name DESC, title "
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
    echo $item['type_name'] . ': ' . $item['title']. ' by ' . $item['full_name'];
    echo '<br />';
  }
}