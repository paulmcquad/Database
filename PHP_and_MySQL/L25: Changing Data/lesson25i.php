<?php
define("MYSQLUSER", "root");
define("MYSQLPASS", "gamer");
define("HOSTNAME", "localhost");
define("MYSQLDB", "test");

// Make connection to database
$connection = @mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
if (mysqli_connect_error()) {
  die('Connect Error: ' . mysqli_connect_error());
} else {
  echo 'Successful connection to MySQL <br />';
  
  $first_name = "Danny";
  $last_name = "O'Murphy";
  $id = 4;
  
  // Prepare the data
  if (get_magic_quotes_gpc()) {
    $first_name = stripslashes($first_name);
    $last_name = stripslashes($last_name);
  }
  $first_name = mysqli_real_escape_string($connection, $first_name);
  $last_name = mysqli_real_escape_string($connection, $last_name);
  $id = (int) $id;
  
  // Set up the query 
    $query = "UPDATE `authors` "
    . " SET `first_name`= '$first_name', `last_name` = '$last_name' "
    . " WHERE `id` = '$id'"; 
  
  // Run the query and display appropriate message
  if (!$result = mysqli_query($connection, $query)) {
    echo "No rows updated<br />";
  } else {
    echo "Row(s) successfully updated<br />";
  }
}