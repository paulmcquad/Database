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
  
  $desc = "qr's";
  $code = "15";
  
  if (get_magic_quotes_gpc()) {
    $desc = stripslashes($desc);
  }
  $desc = $connection->real_escape_string($desc);
  $code = (int) $code;
  
  // Set up the query 
  $query = "INSERT INTO `table1` (`description`, `code`) VALUES "
   . " ('$desc', '$code')";  
  
  // Run the query and display appropriate message
  if (!$result = $connection->query($query)) {
    echo "Unable to add rows<br />";
  } else {
    echo "Rows successfully added<br />";
  }
}