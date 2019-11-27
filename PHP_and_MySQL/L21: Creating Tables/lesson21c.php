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
  // Create the MySQL command by copying the command and
  // spliting into shorter lines and concatenating with periods
  // Drop the final semicolon on the MySQL commmand
  // but don't forget the semicolon for ending the PHP command
  $query = "CREATE TABLE `test`.`products3` ( "
	. "`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY , "
	. "`product` VARCHAR( 20 ) NOT NULL , "
	. "`description` TEXT NOT NULL , "
	. "`source` VARCHAR( 20 ) NULL DEFAULT 'External', "
	. "`date_created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP"
  . ") ENGINE = MYISAM";
  // Run the query and display appropriate message
  if (!$result = $connection->query($query)) {
    echo "Unable to create table<br />";
  } else {
    echo "Table successfully created<br />";
  }
  // Show the tables
  if ($result = $connection->query("SHOW TABLES")) {
    $count = $result->num_rows;
    echo "Tables: ($count)<br />"; 
    while ($row =$result->fetch_array()) {
      echo $row[0]. '<br />';
    }
  }
}